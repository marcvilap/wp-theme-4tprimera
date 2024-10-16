<?php
/**
 * Functions
 *
 * @package WordPress
 */

/**
 * GENERAL SETTINGS
 * ***************************************************************************************************
 */
add_action(
	'after_setup_theme',
	function() {
		load_theme_textdomain( 'wp', get_template_directory() . '/languages' );
		remove_action( 'wp_head', 'wp_generator' );
		remove_action( 'wp_head', 'rsd_link' );
		remove_action( 'wp_head', 'wlwmanifest_link' );
		remove_action( 'wp_head', 'rest_output_link_wp_head' );
		remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
		remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
		remove_action( 'wp_print_styles', 'print_emoji_styles' );
		remove_action( 'wp_body_open', 'wp_global_styles_render_svg_filters' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'html5', array( 'style', 'script' ) );
		add_theme_support( 'post-thumbnails', array( 'post', 'property' ) );
		register_nav_menu( 'header', 'Header' );
		register_nav_menu( 'footer', 'Footer' );
	},
	11,
);

/**
 * SCRIPTS & STYLES
 * ***************************************************************************************************
 */
add_action(
	'wp_enqueue_scripts',
	function() {
		wp_deregister_style( 'global-styles' );
		wp_deregister_style( 'classic-theme-styles' );
		wp_deregister_style( 'wp-block-library' );
		wp_enqueue_style( 'bundle', get_theme_file_uri( 'assets/styles/bundle.css' ), array(), '1.0.0' );
		wp_enqueue_script( 'bundle', get_theme_file_uri( 'assets/scripts/bundle.js' ), array(), '1.0.0', true );
	}
);

/**
 * REGISTER POST TYPES
 ****************************************************************************************************
 */
add_action( 'init', 'register_property_post_type_and_taxonomies' );

function register_property_post_type_and_taxonomies() {
    // Registrar el tipo de post personalizado 'property'
    register_post_type(
        'property',
        array(
            'label'       => 'Inmuebles',
            'public'      => true,
            'has_archive' => true,
            'supports'    => array( 'title', 'editor', 'thumbnail' ),
            'rewrite'     => array( 'slug' => 'inmuebles' ),
        )
    );

    // Registrar la taxonomía 'Tipología'
    register_taxonomy(
        'tipologia',
        'property',
        array(
            'label'        => 'Tipología',
            'rewrite'      => array( 'slug' => 'tipologia' ),
            'hierarchical' => true, // true para que sea similar a 'categorías'
        )
    );

    // Registrar la taxonomía 'Estado'
    register_taxonomy(
        'estado',
        'property',
        array(
            'label'        => 'Estado',
            'rewrite'      => array( 'slug' => 'estado' ),
            'hierarchical' => true,
        )
    );

    // Registrar la taxonomía 'Población'
    register_taxonomy(
        'poblacion',
        'property',
        array(
            'label'        => 'Población',
            'rewrite'      => array( 'slug' => 'poblacion' ),
            'hierarchical' => true,
        )
    );

    
}

/**
 * FILTERS
 * ***************************************************************************************************
 */
add_filter( 'show_admin_bar', '__return_false' );

/** Desactivar el editor Gutenberg */
add_filter( 'use_block_editor_for_post', '__return_false' );


add_filter(
	'excerpt_length',
	function() {
		return 44;
	}
);
add_filter(
	'excerpt_more',
	function() {
		return '...';
	}
);

/**
 * AJAX
 * ***************************************************************************************************
 */
function contact_form() {
	$error = __( 'Algo salió mal, por favor intenta de nuevo.', 'wp' );
	if ( ! check_ajax_referer() ) {
		wp_send_json_error( $error );
	}
	$first_name = sanitize_text_field( wp_unslash( isset( $_POST['first_name'] ) ? $_POST['first_name'] : '' ) );
	$last_name  = sanitize_text_field( wp_unslash( isset( $_POST['last_name'] ) ? $_POST['last_name'] : '' ) );
	$phone      = sanitize_text_field( wp_unslash( isset( $_POST['phone'] ) ? $_POST['phone'] : '' ) );
	$email      = sanitize_text_field( wp_unslash( isset( $_POST['email'] ) ? $_POST['email'] : '' ) );
	$comment    = sanitize_textarea_field( wp_unslash( isset( $_POST['comment'] ) ? $_POST['comment'] : '' ) );
	$options    = $_POST['options'];
	$message    = '';
	$message   .= $first_name ? '<p><strong>Nombre:</strong> ' . $first_name . '</p>' : '';
	$message   .= $last_name ? '<p><strong>Apellidos:</strong> ' . $last_name . '</p>' : '';
	$message   .= $phone ? '<p><strong>Teléfono:</strong> ' . $phone . '</p>' : '';
	$message   .= $email ? '<p><strong>Email:</strong> ' . $email . '</p>' : '';
	$message   .= $options ? '<p><strong>Opcion:</strong> ' . $options . '</p>' : '';
	$message   .= $comment ? '<p><strong>Mensaje:</strong> ' . $comment . '</p>' : '';
	$headers    = 'MIME-Version:1.0' . "\r\n";
	$headers   .= 'Content-type:text/html;charset=utf-8' . "\r\n";
	$headers   .= 'From:noreplay@4primera.com' . "\r\n";
	$headers   .= 'Reply-To:' . $email . "\r\n";
	$send       = mail( 'info@4primera.com', 'Nuevo mensaje de formulario', $message, $headers );
	if ( $send ) {
		wp_send_json_success( __( 'Gracias, tu mensaje se ha enviado correctamente.', 'wp' ) );
	}
	wp_send_json_error( $error );
}
add_action( 'wp_ajax_nopriv_contact_form', 'contact_form' );
add_action( 'wp_ajax_contact_form', 'contact_form' );