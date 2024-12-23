<?php

/*  Copyright 2012 Webhead LLC (email: info at webheadcoder.com)

	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

*/
/**
 * Initialize this form shortcode.
 */
function cf7msm_add_shortcode_form_field() {
    if ( function_exists( 'wpcf7_add_form_tag' ) ) {
        wpcf7_add_form_tag( array('multiform', 'multiform*'), 'cf7msm_multiform_shortcode_handler', [
            'name-attr' => false,
        ] );
    } else {
        if ( function_exists( 'wpcf7_add_shortcode' ) ) {
            wpcf7_add_shortcode( array('multiform', 'multiform*'), 'cf7msm_multiform_shortcode_handler', true );
        }
    }
}

add_action( 'wpcf7_init', 'cf7msm_add_shortcode_form_field' );
/* Shortcode handler */
function cf7msm_multiform_shortcode_handler(  $tag  ) {
    $type = $tag['type'];
    $name = $tag['name'];
    $options = (array) $tag['options'];
    $values = (array) $tag['values'];
    $field_name = '';
    if ( !empty( $values ) ) {
        $field_name = current( $values );
    } else {
        if ( !empty( $name ) ) {
            $field_name = $name;
        } else {
            if ( !empty( $options ) ) {
                // un-quoted field name
                $field_name = $options[0];
            }
        }
    }
    if ( empty( $field_name ) ) {
        return '';
    }
    $atts = '';
    $id_att = '';
    $class_att = '';
    $size_att = '';
    $maxlength_att = '';
    $tabindex_att = '';
    $title_att = '';
    $class_att .= ' wpcf7-form';
    foreach ( $options as $option ) {
        if ( preg_match( '%^id:([-0-9a-zA-Z_]+)$%', $option, $matches ) ) {
            $id_att = $matches[1];
        }
    }
    if ( $id_att ) {
        $id_att = trim( $id_att );
    }
    $value = '';
    //return raw value, let filters sanitize if needed.
    $cf7msm_posted_data = cf7msm_get( 'cf7msm_posted_data' );
    if ( !empty( $cf7msm_posted_data ) && is_array( $cf7msm_posted_data ) ) {
        $value = ( isset( $cf7msm_posted_data[$field_name] ) ? $cf7msm_posted_data[$field_name] : '' );
        //check for free_text
    }
    if ( is_array( $value ) ) {
        $value = implode( ", ", $value );
    }
    //wpcf7_form_field_value filter deprecated
    $value = apply_filters_deprecated(
        'wpcf7_form_field_value',
        array(apply_filters_deprecated(
            'wpcf7_form_field_value_' . $id_att,
            array($value),
            '3.0.4',
            'cf7msm_form_field_value_' . $id_att
        ), $field_name, $value),
        '3.0.4',
        'cf7msm_form_field_value'
    );
    $value = apply_filters(
        'cf7msm_form_field_value',
        apply_filters( 'cf7msm_form_field_value_' . $id_att, $value ),
        $field_name,
        $id_att,
        $value
    );
    return wp_kses( $value, 'post' );
}

/**
 * Add to the wpcf7 tag generator.
 */
function cf7msm_add_tag_generator_form_field() {
    if ( class_exists( 'WPCF7_TagGenerator' ) ) {
        $tag_generator = WPCF7_TagGenerator::get_instance();
        $generator_callback = ( cf7msm_is_tg_v2() ? 'cf7msm_form_field_tag_pane' : 'cf7msm_form_field_tag_pane_old' );
        $tag_generator->add(
            'form-field',
            __( 'multiform', 'contact-form-7-multi-step-module' ),
            $generator_callback,
            array(
                'version' => '2',
            )
        );
    } else {
        if ( function_exists( 'wpcf7_add_tag_generator' ) ) {
            wpcf7_add_tag_generator( 'form', esc_html( __( 'Form value', 'contact-form-7-multi-step-module' ), 'wpcf7-tg-pane-form', 'wpcf7_tg_pane_form' ) );
        }
    }
}

add_action( 'admin_init', 'cf7msm_add_tag_generator_form_field', 30 );
/**
 * Form tag pane.
 */
function cf7msm_form_field_tag_pane(  $contact_form, $args = ''  ) {
    $args = wp_parse_args( $args, array() );
    ?>
<header class="description-box">
	<h3>Multi Step form-tag generator</h3>

	<p><?php 
    cf7msm_form_tag_header_text( 'Generate a form-tag to show a field from a previous form in a multistep form' );
    ?></p>
</header>
<div class="control-box cf7msm-multistep">
    <input type="hidden" data-tag-part="basetype" value="multiform">
    <fieldset>
        <legend id="<?php 
    echo esc_attr( $args['content'] . '-name-legend' );
    ?>"><?php 
    echo esc_html( __( 'Name of Field to Show', 'contact-form-7-multi-step-module' ) );
    ?></legend>
        <input type="text" data-tag-part="name" pattern="[A-Za-z][A-Za-z0-9_\-]*" aria-labelledby="<?php 
    echo esc_attr( $args['content'] . '-name-legend' );
    ?>" id="cf7msm-multiform-name" value=" ">
        <p style="margin-bottom:0;">
            <?php 
    echo esc_html( __( 'The name of the field from a form in a previous step', 'contact-form-7-multi-step-module' ) );
    ?>
        </p>
    </fieldset>
</div>
<footer class="insert-box">
    <div class="flex-container">
        <input type="text" class="code" readonly="readonly" onfocus="this.select();" data-tag-part="tag" aria-label="The form-tag to be inserted into the form template">
        <button type="button" class="button button-primary" data-taggen="insert-tag"><?php 
    echo esc_html( __( 'Insert Tag', 'contact-form-7-multi-step-module' ) );
    ?></button>
        
    </div>
    <p class="description mail-tag-tip"><label><?php 
    echo esc_html( __( "This field should not be used on the Mail tab.", 'contact-form-7-multi-step-module' ) );
    ?></label>
    </p>
    <?php 
    cf7msm_form_tag_footer_text();
    ?>
</footer>
<?php 
}

/**
 * Pre CF7 6.0 way to generate tag
 */
function cf7msm_form_field_tag_pane_old(  $contact_form, $args = ''  ) {
    $args = wp_parse_args( $args, array() );
    ?>
<div class="control-box cf7msm-multistep">
    <fieldset>
        <legend><?php 
    cf7msm_form_tag_header_text( esc_html( __( 'Generate a form-tag to show a field from a previous form in a multistep form', 'contact-form-7-multi-step-module' ) ) );
    ?></legend>

        <table class="form-table">
            <tbody>
                <tr>
                    <th scope="row"><label for="<?php 
    echo esc_attr( $args['content'] . '-name' );
    ?>"><?php 
    echo esc_html( __( 'Name', 'contact-form-7-multi-step-module' ) );
    ?></label></th>
                    <td><input type="text" name="values" class="tg-name oneline" id="tag-generator-panel-name" />
                        <br>
                        <label for="tag-generator-panel-name">
                            <span class="description"><?php 
    echo esc_html( __( 'The name of the field from a form in a previous step.' ) );
    ?></span>
                        </label>
                    </td>
                </tr>
            </tbody>
        </table>
    </fieldset>
</div>
    <div class="insert-box">
        <input type="hidden" name="values" value="" />
        <input type="text" name="multiform" class="tag code" readonly="readonly" onfocus="this.select()" />

        <div class="submitbox">
            <input type="button" class="button button-primary insert-tag" value="<?php 
    echo esc_attr( __( 'Insert Tag', 'contact-form-7' ) );
    ?>" />
        </div>

        <br class="clear" />

        <p class="description mail-tag"><label><?php 
    echo esc_html( __( "This field should not be used on the Mail tab.", 'contact-form-7-multi-step-module' ) );
    ?></label>
        </p>
        <?php 
    cf7msm_form_tag_footer_text();
    ?>
    </div>
<?php 
}

/**
 * Deprecated way to generate form tag
 */
function wpcf7_tg_pane_form() {
    ?>
<div id="wpcf7-tg-pane-form" class="hidden">
<form action="">

<table>
<tr><td><?php 
    echo esc_html( __( 'Name of previous form field', 'contact-form-7-multi-step-module' ) );
    ?><br /><input type="text" name="name" class="tg-name oneline" /></td><td></td></tr>

<tr>
<td><code>id</code> (<?php 
    echo esc_html( __( 'optional', 'contact-form-7-multi-step-module' ) );
    ?>)<br />
<input type="text" name="id" class="idvalue oneline option" /></td>
</tr>
</table>

<div class="tg-tag"><?php 
    echo esc_html( __( 'Copy this code and paste it into the form left.', 'contact-form-7-multi-step-module' ) );
    ?><br /><input type="text" name="form" class="tag" readonly="readonly" onfocus="this.select()" /></div>

<div class="tg-mail-tag"><?php 
    echo esc_html( __( 'Mail fields currently not supported.', 'contact-form-7-multi-step-module' ) );
    ?><br /><span class="arrow">&#11015;</span>&nbsp;<input type="text" readonly="readonly" /></div>
</form>
</div>
<?php 
}

/**
 * Collect the from tags from the form to present on the Mail tab.
 */
function cf7msm_collect_multiform_mail_tags(  $mailtags, $args, $_this  ) {
    $tags = $_this->scan_form_tags();
    if ( !empty( $tags ) ) {
        foreach ( (array) $tags as $tag ) {
            $type = $tag->basetype;
            if ( empty( $type ) ) {
                continue;
            } else {
                if ( !empty( $args['include'] ) ) {
                    if ( !in_array( $type, $args['include'] ) ) {
                        continue;
                    }
                } else {
                    if ( !empty( $args['exclude'] ) ) {
                        if ( in_array( $type, $args['exclude'] ) ) {
                            continue;
                        }
                    }
                }
            }
            if ( 'multiform' !== $type ) {
                continue;
            }
            if ( !empty( $tag->options ) ) {
                $mailtags[] = $tag->options[0];
            } else {
                if ( !empty( $tag->values ) ) {
                    $mailtags[] = $tag->values[0];
                }
            }
        }
    }
    return $mailtags;
}

add_filter(
    'wpcf7_collect_mail_tags',
    'cf7msm_collect_multiform_mail_tags',
    10,
    3
);