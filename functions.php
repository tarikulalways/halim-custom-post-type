<?php 
/**
 * Plugin Name:       Custom post type
 * Plugin URI:        https://halim.com/
 * Description:       Handle the custom post type for halim theme.
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Tarik
 * Author URI:        http://iamtarik.unaux.com/
 * License:           GPL
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       costom-post-type
 * Domain Path:       /languages
 */

    // custom post

    if(!function_exists('hlaim_custom_post')){
        function hlaim_custom_post(){
            // slider

            register_post_type('slider', array(
                'labels' => array(
                    'name' => esc_html__('Sliders', 'halim'),
                    'singular_name' => esc_html__('slider', 'halim'),
                    'add_new'  => esc_html__('Add new', 'halim'),
                    'add_new_item' => esc_html__('Add new slider', 'halim'),
                    'edit_item' => esc_html__('Edit slider', 'halim'),
                    'not_found' => esc_html__('No found slider', 'halim'),
                    'featured_image' => esc_html__('Add slider image', 'halim'),
                    'set_featured_image' => esc_html__('Set slider image', 'halim'),
                    'remove_featured_image' => esc_html__('Remove slider image', 'halim')
                ),
                'public' => true,
                'supports' => array('title', 'editor', 'custom-fields', 'page-attributes', 'thumbnail'),
                'menu_icon' => 'dashicons-slides'
            ));

            // service 

            register_post_type('services', array(
                'labels' => array(
                    'name' => esc_html__('Service', 'halim'),
                    'singular_name' => esc_html__('services', 'halim'),
                    'add_new'  => esc_html__('Add new', 'halim'),
                    'add_new_item' => esc_html__('Add new service', 'halim'),
                    'edit_item' => esc_html__('Edit service', 'halim'),
                    'not_found' => esc_html__('No found service', 'halim')
                ),
                'public' => true,
                'supports' => array('custom-fields', 'page-attributes'),
                'menu_icon' => 'dashicons-products'
            ));

            // counter

            register_post_type('counter', array(
                'labels' => array(
                    'name' => esc_html__('Counter', 'halim'),
                    'singular_name' => esc_html__('Counter', 'halim'),
                    'add_new'  => esc_html__('Add new', 'halim'),
                    'add_new_item' => esc_html__('Add new Counter', 'halim'),
                    'edit_item' => esc_html__('Edit Counter', 'halim'),
                    'not_found' => esc_html__('No found Counter', 'halim')
                ),
                'public' => true,
                'supports' => array('custom-fields', 'page-attributes'),
                'menu_icon' => 'dashicons-menu'
            ));

            // team area

            register_post_type('team', array(
                'labels' => array(
                    'name' => esc_html__('Team', 'halim'),
                    'singular_name' => esc_html__('team', 'halim'),
                    'add_new'  => esc_html__('Add new', 'halim'),
                    'add_new_item' => esc_html__('Add new Team', 'halim'),
                    'edit_item' => esc_html__('Edit Team', 'halim'),
                    'not_found' => esc_html__('No found Team', 'halim'),
                    'featured_image' => esc_html__('Add Team iamge', 'halim'),
                    'set_featured_image' => esc_html__('Set Team image', 'halim'),
                    'remove_featured_image' => esc_html__('Remove Team image', 'halim')
                ),
                'public' => true,
                'supports' => array('custom-fields', 'page-attributes', 'thumbnail'),
                'menu_icon' => 'dashicons-businessman'
            ));

             // testimonial area

             register_post_type('testimonial', array(
                'labels' => array(
                    'name' => esc_html__('Testimonial', 'halim'),
                    'singular_name' => esc_html__('Testimonial', 'halim'),
                    'add_new'  => esc_html__('Add new', 'halim'),
                    'add_new_item' => esc_html__('Add new Testimonial', 'halim'),
                    'edit_item' => esc_html__('Edit Testimonial', 'halim'),
                    'not_found' => esc_html__('No found Testimonial', 'halim'),
                    'featured_image' => esc_html__('Add Testimonial iamge', 'halim'),
                    'set_featured_image' => esc_html__('Set Testimonial image', 'halim'),
                    'remove_featured_image' => esc_html__('Remove Testimonial image', 'halim')
                ),
                'public' => true,
                'supports' => array('custom-fields', 'page-attributes', 'thumbnail'),
                'menu_icon' => 'dashicons-testimonial'
            ));

            // protfolio area

            register_post_type('protfolio', array(
                'labels' => array(
                    'name' => esc_html__('Protfolio', 'halim'),
                    'singular_name' => esc_html__('protfolio', 'halim'),
                    'add_new'  => esc_html__('Add new', 'halim'),
                    'add_new_item' => esc_html__('Add new Protfolio', 'halim'),
                    'edit_item' => esc_html__('Edit Protfolio', 'halim'),
                    'not_found' => esc_html__('No found Protfolio', 'halim'),
                    'featured_image' => esc_html__('Add Protfolio iamge', 'halim'),
                    'set_featured_image' => esc_html__('Set Protfolio image', 'halim'),
                    'remove_featured_image' => esc_html__('Remove Protfolio image', 'halim')
                ),
                'public' => true,
                'supports' => array('title','editor','custom-fields', 'page-attributes', 'thumbnail'),
                'menu_icon' => 'dashicons-format-image'
            ));

            // register protfolio texonomy

            register_taxonomy('prot_cat', 'protfolio', array(
                'labels' => array(
                    'name' => esc_html__('Category', 'halim'),
                    'singular_name' => esc_html__('categorys', 'halim')
                ),
                'hierarchical' => true,
                'show_admin_column' => true
            ));

            // gallery area

            register_post_type('gallery', array(
                'labels' => array(
                    'name' => esc_html__('Gallery', 'halim'),
                    'singular_name' => esc_html__('Gallery', 'halim'),
                    'add_new'  => esc_html__('Add new', 'halim'),
                    'add_new_item' => esc_html__('Add new Protfolio', 'halim'),
                    'edit_item' => esc_html__('Edit Gallery', 'halim'),
                    'not_found' => esc_html__('No found Gallery', 'halim'),
                    'remove_featured_image' => esc_html__('Remove Gallery image', 'halim')
                ),
                'public' => true,
                'supports' => array('title','custom-fields', 'page-attributes'),
                'menu_icon' => 'dashicons-format-gallery'
            ));
        }
    }
    add_action('init', 'hlaim_custom_post');
?>