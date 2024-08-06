<?php
/**
 * Plugin Name: Metabox Custom Field
 * Plugin URI: https://googl.com
 * Description: A simple plugin for custom fields.
 * Version: 1.0
 * Author: Meta Box
 * Author URI: 
 * License: GPL2
 */

function custom_register_meta_boxes() {
    add_meta_box( 'custom-1', __( 'Project Date Field', 'hcf' ), 'custom_display_callback', 'portfolio-cpt' );
}
add_action( 'add_meta_boxes', 'custom_register_meta_boxes' );

/**
 * Meta box display callback.
 *
 * @param WP_Post $post Current post object.
 */
function custom_display_callback( $post ) {
?>    
<div class="pcf_box">
    <style scoped>
        .pcf_box{
            display: grid;
            grid-template-columns: max-content 1fr;
            grid-row-gap: 10px;
            grid-column-gap: 20px;
        }
        .pcf_field{
            display: contents;
        }
    </style>
    
    <p class="meta-options pcf_field">
        <label for="project_date">Project Date</label>
        <input id="project_date" type="date" name="project_date" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'project_date', true ) ); ?>">
    </p>
</div>
<?php
}

function custom_save_meta_box( $post_id ) {
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
    if ( $parent_id = wp_is_post_revision( $post_id ) ) {
        $post_id = $parent_id;
    }
    $fields = [
        'project_date',
    ];
    foreach ( $fields as $field ) {
        if ( array_key_exists( $field, $_POST ) ) {
            update_post_meta( $post_id, $field, sanitize_text_field( $_POST[$field] ) );
        }
     }
}
add_action( 'save_post', 'custom_save_meta_box' );