<?php
/**
 * Post Model
 *
 * @package TablePress
 * @subpackage Models
 * @author Tobias Bäthge
 * @since 1.0.0
 */

// Prohibit direct script loading.
defined( 'ABSPATH' ) || die( 'No direct script access allowed!' );

/**
 * Post Model class
 *
 * @package TablePress
 * @subpackage Models
 * @author Tobias Bäthge
 * @since 1.0.0
 */
class TablePress_Post_Model extends TablePress_Model {

	/**
	 * Name of the "Custom Post Type" for the tables.
	 *
	 * @since 1.0.0
	 */
	protected string $post_type = 'tablepress_table';

	/**
	 * Inits the model by registering the Custom Post Type.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		parent::__construct();
		$this->_register_post_type(); // We are on WP "init" hook already.
	}

	/**
	 * Registers the Custom Post Type which the tables use.
	 *
	 * @since 1.0.0
	 */
	protected function _register_post_type(): void {
		/**
		 * Filters the "Custom Post Type" that TablePress uses for storing tables in the database.
		 *
		 * @since 1.0.0
		 *
		 * @param string $post_type The "Custom Post Type" that TablePress uses.
		 */
		$this->post_type = apply_filters( 'tablepress_post_type', $this->post_type );
		$post_type_args = array(
			'labels'          => array(
				'name' => 'TablePress Tables',
			),
			'public'          => false,
			'show_ui'         => false,
			'query_var'       => false,
			'rewrite'         => false,
			'capability_type' => 'tablepress_table', // This ensures, that WP's regular CPT UI respects our capabilities.
			'map_meta_cap'    => false, // Integrated WP mapping does not fit our needs, therefore use our own in a filter.
			'supports'        => array( 'title', 'editor', 'excerpt', 'revisions' ),
			'can_export'      => true,
		);
		/**
		 * Filters the arguments for the registration of the "Custom Post Type" that TablePress uses.
		 *
		 * @since 1.0.0
		 *
		 * @param array<string, mixed> $post_type_args Arguments for the registration of the TablePress "Custom Post Type".
		 */
		$post_type_args = apply_filters( 'tablepress_post_type_args', $post_type_args );
		register_post_type( $this->post_type, $post_type_args );
	}

	/**
	 * Inserts a post with the correct Custom Post Type and default values in the the wp_posts table in the database.
	 *
	 * @since 1.0.0
	 *
	 * @param array<string, mixed> $post Post to insert.
	 * @return int|WP_Error Post ID of the inserted post on success, WP_Error on error.
	 */
	public function insert( array $post ) /* : int|WP_Error */ {
		$default_post = array(
			'ID'             => false, // false on new insert, but existing post ID on update.
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
			'post_category'  => false,
			'post_content'   => '',
			'post_excerpt'   => '',
			'post_parent'    => 0,
			'post_password'  => '',
			'post_status'    => 'publish',
			'post_title'     => '',
			'post_type'      => $this->post_type,
			'tags_input'     => '',
			'to_ping'        => '',
		);
		$post = array_merge( $default_post, $post );
		// WP expects everything to be slashed.
		$post = wp_slash( $post );

		// Remove balanceTags() from sanitize_post(), as it can destroy the JSON when messing with HTML.
		remove_filter( 'content_save_pre', 'balanceTags', 50 );
		remove_filter( 'excerpt_save_pre', 'balanceTags', 50 );

		/*
		 * Remove possible KSES filtering, as it can destroy the JSON when messing with HTML.
		 * KSES filtering is done to table cells individually, when saving.
		 */
		$has_kses = ( false !== has_filter( 'content_save_pre', 'wp_filter_post_kses' ) );
		if ( $has_kses ) {
			kses_remove_filters();
		}

		// Remove filter that adds `rel="noopener" to <a> HTML tags, but destroys JSON code. See https://core.trac.wordpress.org/ticket/46316.
		$has_targeted_link_rel_filters = ( false !== has_filter( 'content_save_pre', 'wp_targeted_link_rel' ) );
		if ( $has_targeted_link_rel_filters ) {
			wp_remove_targeted_link_rel_filters();
		}

		$post_id = wp_insert_post( $post, true );

		// Restore removed content filters.
		add_filter( 'content_save_pre', 'balanceTags', 50 );
		add_filter( 'excerpt_save_pre', 'balanceTags', 50 );
		if ( $has_kses ) {
			kses_init_filters();
		}
		if ( $has_targeted_link_rel_filters ) {
			wp_init_targeted_link_rel_filters();
		}

		// In rare cases, `wp_insert_post()` returns 0 as the post ID, when an error happens, so it's converted to a WP_Error here.
		if ( 0 === $post_id ) { // @phpstan-ignore identical.alwaysFalse (False-positive in the PHPStan WordPress stubs.)
			return new WP_Error( 'post_insert', '' );
		}

		return $post_id;
	}

	/**
	 * Updates an existing post with the correct Custom Post Type and default values in the the wp_posts table in the database.
	 *
	 * @since 1.0.0
	 *
	 * @param array<string, mixed> $post Post.
	 * @return int|WP_Error Post ID of the updated post on success, WP_Error on error.
	 */
	public function update( array $post ) /* : int|WP_Error */ {
		$default_post = array(
			'ID'             => false, // false on new insert, but existing post ID on update.
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
			'post_category'  => false,
			'post_content'   => '',
			'post_excerpt'   => '',
			'post_parent'    => 0,
			'post_password'  => '',
			'post_status'    => 'publish',
			'post_title'     => '',
			'post_type'      => $this->post_type,
			'tags_input'     => '',
			'to_ping'        => '',
		);
		$post = array_merge( $default_post, $post );
		// WP expects everything to be slashed.
		$post = wp_slash( $post );

		// Remove balanceTags() from sanitize_post(), as it can destroy the JSON when messing with HTML.
		remove_filter( 'content_save_pre', 'balanceTags', 50 );
		remove_filter( 'excerpt_save_pre', 'balanceTags', 50 );

		/*
		 * Remove possible KSES filtering, as it can destroy the JSON when messing with HTML.
		 * KSES filtering is done to table cells individually, when saving.
		 */
		$has_kses = ( false !== has_filter( 'content_save_pre', 'wp_filter_post_kses' ) );
		if ( $has_kses ) {
			kses_remove_filters();
		}

		// Remove filter that adds `rel="noopener" to <a> HTML tags, but destroys JSON code. See https://core.trac.wordpress.org/ticket/46316.
		$has_targeted_link_rel_filters = ( false !== has_filter( 'content_save_pre', 'wp_targeted_link_rel' ) );
		if ( $has_targeted_link_rel_filters ) {
			wp_remove_targeted_link_rel_filters();
		}

		$post_id = wp_update_post( $post, true );

		// Restore removed content filters.
		add_filter( 'content_save_pre', 'balanceTags', 50 );
		add_filter( 'excerpt_save_pre', 'balanceTags', 50 );
		if ( $has_kses ) {
			kses_init_filters();
		}
		if ( $has_targeted_link_rel_filters ) {
			wp_init_targeted_link_rel_filters();
		}

		return $post_id;
	}

	/**
	 * Gets a post from the wp_posts table in the database.
	 *
	 * @since 1.0.0
	 *
	 * @param int $post_id Post ID.
	 * @return WP_Post|false Post on success, false on error.
	 */
	public function get( int $post_id ) /* : WP_Post|false */ {
		$post = get_post( $post_id );
		if ( is_null( $post ) ) {
			return false;
		}
		return $post;
	}

	/**
	 * Deletes a post (and all revisions) from the wp_posts table in the database.
	 *
	 * @since 1.0.0
	 *
	 * @param int $post_id Post ID.
	 * @return WP_Post|false|null Post data on success, false or null on failure.
	 */
	public function delete( int $post_id ) /* : WP_Post|false|null */ {
		return wp_delete_post( $post_id, true ); // true means force delete, although for CPTs this is automatic in this function.
	}

	/**
	 * Moves a post to the trash (if trash is globally enabled), instead of directly deleting the post.
	 * (yet unused)
	 *
	 * @since 1.0.0
	 *
	 * @param int $post_id Post ID.
	 * @return WP_Post|false|null Post data on success, false or null on failure.
	 */
	public function trash( int $post_id ) /* : WP_Post|false|null */ {
		return wp_trash_post( $post_id );
	}

	/**
	 * Restores a post from the trash.
	 * (yet unused)
	 *
	 * @since 1.0.0
	 *
	 * @param int $post_id Post ID.
	 * @return WP_Post|false|null Post on success, false or null on error.
	 */
	public function untrash( int $post_id ) /* : WP_Post|false */ {
		return wp_untrash_post( $post_id );
	}

	/**
	 * Loads all posts with one query, to prime the cache.
	 *
	 * @since 1.0.0
	 *
	 * @global wpdb $wpdb WordPress database abstraction object.
	 * @see get_post()
	 *
	 * @param int[] $all_post_ids      List of Post IDs.
	 * @param bool  $update_meta_cache Optional. Whether to update the Post Meta Cache (for table options and visibility).
	 */
	public function load_posts( array $all_post_ids, bool $update_meta_cache = true ): void {
		global $wpdb;

		// Split post loading, to save memory.
		while ( ! empty( $all_post_ids ) ) {
			$post_ids = array_splice( $all_post_ids, 0, 100 ); // Extract 100 posts at a time.
			// Don't load posts that are in the cache already.
			$post_ids = _get_non_cached_ids( $post_ids, 'posts' );
			if ( ! empty( $post_ids ) ) {
				$post_ids_list = implode( ',', $post_ids );
				// phpcs:ignore WordPress.DB.PreparedSQL.InterpolatedNotPrepared
				$posts = $wpdb->get_results( "SELECT {$wpdb->posts}.* FROM {$wpdb->posts} WHERE ID IN ({$post_ids_list})" ); // phpcs:ignore WordPress.DB.DirectDatabaseQuery.DirectQuery,WordPress.DB.DirectDatabaseQuery.NoCaching,WordPress.DB.PreparedSQL.InterpolatedNotPrepared
				update_post_cache( $posts );
				if ( $update_meta_cache ) {
					// Get all post meta data for all table posts, @see get_post_meta().
					update_meta_cache( 'post', $post_ids );
				}
			}
		}
	}

	/**
	 * Counts the number of posts with the model's CPT in the wp_posts table in the database.
	 * (currently for debug only)
	 *
	 * @since 1.0.0
	 *
	 * @return int Number of posts.
	 */
	public function count_posts(): int {
		return array_sum( (array) wp_count_posts( $this->post_type ) ); // Original return value is object with the counts for each post_status.
	}

	/**
	 * Adds a post meta field to a post.
	 *
	 * @since 1.0.0
	 *
	 * @param int    $post_id ID of the post for which the field shall be added.
	 * @param string $field   Name of the post meta field.
	 * @param string $value   Value of the post meta field (not slashed).
	 * @return bool True on success, false on error.
	 */
	public function add_meta_field( int $post_id, string $field, string $value ): bool {
		// WP expects a slashed value.
		$value = wp_slash( $value );
		$success = add_post_meta( $post_id, $field, $value, true ); // true means unique.
		// Make sure that $success is a boolean, as add_post_meta() returns an ID or false.
		$success = ( false === $success ) ? false : true;
		return $success;
	}

	/**
	 * Updatse the value of a post meta field of a post.
	 *
	 * If the field does not yet exist, it is added.
	 *
	 * @since 1.0.0
	 *
	 * @param int    $post_id ID of the post for which the field shall be updated.
	 * @param string $field   Name of the post meta field.
	 * @param string $value   Value of the post meta field (not slashed).
	 * @return bool True on success, false on error.
	 */
	public function update_meta_field( int $post_id, string $field, string $value ): bool {
		$prev_value = (string) get_post_meta( $post_id, $field, true );
		// No need to update, if values are equal (also, update_post_meta() would return false for this).
		if ( $prev_value === $value ) {
			return true;
		}

		// WP expects a slashed value.
		$value = wp_slash( $value );
		return (bool) update_post_meta( $post_id, $field, $value, $prev_value );
	}

	/**
	 * Gets the value of a post meta field of a post.
	 *
	 * @since 1.0.0
	 *
	 * @param int    $post_id ID of the post for which the field shall be retrieved.
	 * @param string $field   Name of the post meta field.
	 * @return string Value of the meta field.
	 */
	public function get_meta_field( int $post_id, string $field ): string {
		return get_post_meta( $post_id, $field, true ); // true means single value.
	}

	/**
	 * Deletes a post meta field of a post.
	 * (yet unused)
	 *
	 * @since 1.0.0
	 *
	 * @param int    $post_id ID of the post of which the field shall be deleted.
	 * @param string $field   Name of the post meta field.
	 * @return bool True on success, false on error.
	 */
	public function delete_meta_field( int $post_id, string $field ): bool {
		return delete_post_meta( $post_id, $field, true ); // true means single value.
	}

	/**
	 * Returns the Custom Post Type that TablePress uses.
	 *
	 * @since 1.5.0
	 *
	 * @return string The used Custom Post Type.
	 */
	public function get_post_type(): string {
		return $this->post_type;
	}

} // class TablePress_Post_Model
