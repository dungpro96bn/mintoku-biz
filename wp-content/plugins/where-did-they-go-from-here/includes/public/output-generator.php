<?php
/**
 * Generates the output
 *
 * @package   WHEREGO
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Returns the link attributes.
 *
 * @since   2.0.0
 *
 * @param   array $args   Array of arguments.
 * @return  string  Space separated list of link attributes
 */
function wherego_link_attributes( $args ) {

	$rel_attribute    = ( isset( $args['link_nofollow'] ) && $args['link_nofollow'] ) ? ' rel="nofollow" ' : ' ';
	$target_attribute = ( isset( $args['link_new_window'] ) && $args['link_new_window'] ) ? ' target="_blank" ' : ' ';

	$link_attributes = array(
		'rel_attribute'    => $rel_attribute,
		'target_attribute' => $target_attribute,
	);

	/**
	 * Filter the title of the followed posts list
	 *
	 * @since   2.0.0
	 *
	 * @param   array   $link_attributes    Array of link attributes
	 * @param   array   $args   Array of arguments
	 */
	$link_attributes = apply_filters( 'wherego_link_attributes', $link_attributes, $args );

	// Convert it to a string.
	$link_attributes = implode( ' ', $link_attributes );

	return $link_attributes;

}


/**
 * Returns the heading of the followed posts.
 *
 * @since   2.0.0
 *
 * @param   array $args   Array of arguments.
 * @return  string  Space separated list of link attributes
 */
function wherego_heading_title( $args ) {
	global $post;

	$title = '';

	if ( $args['heading'] && ! $args['is_widget'] ) {
		$title = str_replace( '%postname%', $post->post_title, $args['title'] );    // Replace %postname% with the title of the current post.
	}

	/**
	 * Filter the title of the followed posts list
	 *
	 * @since   2.0.0
	 *
	 * @param   string  $title  Title/heading of the followed posts list
	 * @param   array   $args   Array of arguments
	 */
	return apply_filters( 'wherego_heading_title', $title, $args );
}


/**
 * Returns the opening tag of the followed posts list.
 *
 * @since   2.0.0
 *
 * @param   array $args   Array of arguments.
 * @return  string  Space separated list of link attributes
 */
function wherego_before_list( $args ) {

	$before_list = $args['before_list'];

	/**
	 * Filter the opening tag of the followed posts list
	 *
	 * @since   2.0.0
	 *
	 * @param   string  $before_list    Opening tag set in the Settings Page
	 * @param   array   $args   Array of arguments
	 */
	return apply_filters( 'wherego_before_list', $before_list, $args );

}


/**
 * Returns the closing tag of the followed posts list.
 *
 * @since   2.0.0
 *
 * @param   array $args   Array of arguments.
 * @return  string  Space separated list of link attributes
 */
function wherego_after_list( $args ) {

	$after_list = $args['after_list'];

	/**
	 * Filter the closing tag of the followed posts list
	 *
	 * @since   2.0.0
	 *
	 * @param   string  $after_list Closing tag set in the Settings Page
	 * @param   array   $args   Array of arguments
	 */
	return apply_filters( 'wherego_after_list', $after_list, $args );

}


/**
 * Returns the opening tag of each list item.
 *
 * @since   2.0.0
 *
 * @param   array  $args   Array of arguments.
 * @param   object $result Object of the current post result.
 * @return  string  Space separated list of link attributes
 */
function wherego_before_list_item( $args, $result ) {

	$before_list_item = $args['before_list_item'];

	/**
	 * Filter the opening tag of each list item.
	 *
	 * @since   2.0.0
	 *
	 * @param   string  $before_list_item   Tag before each list item. Can be defined in the Settings page.
	 * @param   object  $result Object of the current post result
	 * @param   array   $args   Array of arguments
	 */
	return apply_filters( 'wherego_before_list_item', $before_list_item, $result, $args );

}


/**
 * Returns the closing tag of each list item.
 *
 * @since   2.0.0
 *
 * @param   array  $args   Array of arguments.
 * @param   object $result Object of the current post result.
 * @return  string  Space separated list of link attributes
 */
function wherego_after_list_item( $args, $result ) {

	$after_list_item = $args['after_list_item'];

	/**
	 * Filter the closing tag of each list item.
	 *
	 * @since   2.0.0
	 *
	 * @param   string  $after_list_item    Tag after each list item. Can be defined in the Settings page.
	 * @param   object  $result Object of the current post result
	 * @param   array   $args   Array of arguments
	 */
	return apply_filters( 'wherego_after_list_item', $after_list_item, $result, $args );

}


/**
 * Returns the title of each list item.
 *
 * @since   2.0.0
 *
 * @param   array  $args   Array of arguments.
 * @param   object $result Object of the current post result.
 * @return  string  Space separated list of link attributes
 */
function wherego_title( $args, $result ) {

	$title = wherego_max_formatted_content( get_the_title( $result->ID ), $args['title_length'] );  // Get the post title and crop it if needed.

	/**
	 * Filter the title of each list item.
	 *
	 * @since   2.0.0
	 *
	 * @param   string  $title  Title of the post.
	 * @param   object  $result Object of the current post result
	 * @param   array   $args   Array of arguments
	 */
	return apply_filters( 'wherego_title', $title, $result, $args );

}


/**
 * Returns the author of each list item.
 *
 * @since   2.0.0
 *
 * @param   array  $args   Array of arguments.
 * @param   object $result Object of the current post result.
 * @return  string  Space separated list of link attributes
 */
function wherego_author( $args, $result ) {

	$author_info = get_userdata( $result->post_author );
	$author_link = ( false === $author_info ) ? '' : get_author_posts_url( $author_info->ID );
	$author_name = ( false === $author_info ) ? '' : ucwords( trim( stripslashes( $author_info->display_name ) ) );

	/**
	 * Filter the author name.
	 *
	 * @since   2.0.1
	 *
	 * @param   string  $author_name    Proper name of the post author.
	 * @param   object  $author_info    WP_User object of the post author
	 */
	$author_name = apply_filters( 'wherego_author_name', $author_name, $author_info );

	$wherego_author = '<span class="wherego_author"> ' . __( ' by ', 'where-did-they-go-from-here' ) . '<a href="' . $author_link . '">' . $author_name . '</a></span> ';

	/**
	 * Filter the text with the author details.
	 *
	 * @since   2.0.0
	 *
	 * @param   string  $wherego_author Formatted string with author details and link
	 * @param   object  $author_info    WP_User object of the post author
	 * @param   object  $result Object of the current post result
	 * @param   array   $args   Array of arguments
	 */
	return apply_filters( 'wherego_author', $wherego_author, $author_info, $result, $args );

}


/**
 * Returns the date of each list item.
 *
 * @since   2.2.0
 *
 * @param   array  $args   Array of arguments.
 * @param   object $result Object of the current post result.
 * @return  string  Space separated list of link attributes
 */
function wherego_date( $args, $result ) {

	$wherego_date = mysql2date( get_option( 'date_format', 'd/m/y' ), $result->post_date );

	/**
	 * Filter the text with the author details.
	 *
	 * @since   2.2.0
	 *
	 * @param   string  $wherego_date Formatted string with author details and link
	 * @param   object  $author_info    WP_User object of the post author
	 * @param   object  $result Object of the current post result
	 * @param   array   $args   Array of arguments
	 */
	return apply_filters( 'wherego_date', $wherego_date, $result, $args );

}


/**
 * Returns the permalink of each list item.
 *
 * @since   2.3.0
 *
 * @param   array  $args   Array of arguments.
 * @param   object $result Object of the current post result.
 * @return  string  Space separated list of link attributes
 */
function wherego_permalink( $args, $result ) {

	$link = get_permalink( $result->ID );

	/**
	 * Filter the title of each list item.
	 *
	 * @since   2.3.0
	 *
	 * @param   string  $title  Permalink of the post.
	 * @param   object  $result Object of the current post result
	 * @param   array   $args   Array of arguments
	 */
	return apply_filters( 'wherego_permalink', $link, $result, $args );

}


/**
 * Returns the formatted list item with link and and thumbnail for each list item.
 *
 * @since   2.0.0
 *
 * @param   array  $args   Array of arguments.
 * @param   object $result Object of the current post result.
 * @return  string  Space separated list of link attributes
 */
function wherego_list_link( $args, $result ) {

	$output          = '';
	$title           = wherego_title( $args, $result );
	$link            = wherego_permalink( $args, $result );
	$link_attributes = wherego_link_attributes( $args );

	$output .= '<a href="' . $link . '" ' . $link_attributes . '>';

	if ( 'after' === $args['post_thumb_op'] ) {
		$output .= '<span class="wherego_title">' . $title . '</span>'; // Add title when required by settings.
	}

	if ( 'inline' === $args['post_thumb_op'] || 'after' === $args['post_thumb_op'] || 'thumbs_only' === $args['post_thumb_op'] ) {
		$output .= wherego_get_the_post_thumbnail(
			array(
				'post'               => $result,
				'size'               => $args['thumb_size'],
				'thumb_meta'         => $args['thumb_meta'],
				'thumb_html'         => $args['thumb_html'],
				'thumb_default'      => $args['thumb_default'],
				'thumb_default_show' => $args['thumb_default_show'],
				'scan_images'        => $args['scan_images'],
				'class'              => 'wherego_thumb',
			)
		);
	}

	if ( 'inline' === $args['post_thumb_op'] || 'text_only' === $args['post_thumb_op'] ) {
		$output .= '<span class="wherego_title">' . $title . '</span>'; // Add title when required by settings.
	}

	$output .= '</a>';

	/**
	 * Filter Formatted list item with link and and thumbnail.
	 *
	 * @since   2.0.0
	 *
	 * @param   string  $output Formatted list item with link and and thumbnail
	 * @param   object  $result Object of the current post result
	 * @param   array   $args   Array of arguments
	 */
	return apply_filters( 'wherego_list_link', $output, $result, $args );

}
