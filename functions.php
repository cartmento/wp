<?php
/**
 * CartMento Theme functions and definitions
 */

if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Theme setup
 */
function cartmento_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'cartmento' ),
		'footer'  => __( 'Footer Menu', 'cartmento' ),
	) );
}
add_action( 'after_setup_theme', 'cartmento_setup' );

/**
 * Enqueue styles and scripts
 */
function cartmento_scripts() {
	wp_enqueue_style(
		'cartmento-google-fonts',
		'https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;600;700&family=Inter:wght@400;500;600;700&family=IBM+Plex+Mono:wght@500;600&display=swap',
		array(),
		null
	);
	wp_enqueue_style( 'cartmento-style', get_stylesheet_uri(), array(), '1.0.0' );
	wp_enqueue_script( 'cartmento-main', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'cartmento_scripts' );

/**
 * Register footer widget area (optional, for future use)
 */
function cartmento_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Footer Widgets', 'cartmento' ),
		'id'            => 'footer-widgets',
		'before_widget' => '<div class="footer-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'cartmento_widgets_init' );

/**
 * ---------------------------------------------------------------
 * Native Contact Form Handler (no plugin required)
 * Handles the form on page-contact.php via admin-post.php
 * Sends an email to the site admin using wp_mail().
 * ---------------------------------------------------------------
 */
function cartmento_handle_contact_form() {

	if ( ! isset( $_POST['cartmento_contact_nonce'] ) ||
		! wp_verify_nonce( $_POST['cartmento_contact_nonce'], 'cartmento_contact_submit' ) ) {
		wp_safe_redirect( add_query_arg( 'cartmento_status', 'error', wp_get_referer() ) );
		exit;
	}

	$name     = isset( $_POST['name'] ) ? sanitize_text_field( wp_unslash( $_POST['name'] ) ) : '';
	$email    = isset( $_POST['email'] ) ? sanitize_email( wp_unslash( $_POST['email'] ) ) : '';
	$phone    = isset( $_POST['phone'] ) ? sanitize_text_field( wp_unslash( $_POST['phone'] ) ) : '';
	$business = isset( $_POST['business'] ) ? sanitize_text_field( wp_unslash( $_POST['business'] ) ) : '';
	$website  = isset( $_POST['website'] ) ? esc_url_raw( wp_unslash( $_POST['website'] ) ) : '';
	$service  = isset( $_POST['service'] ) ? sanitize_text_field( wp_unslash( $_POST['service'] ) ) : '';
	$budget   = isset( $_POST['budget'] ) ? sanitize_text_field( wp_unslash( $_POST['budget'] ) ) : '';
	$message  = isset( $_POST['message'] ) ? sanitize_textarea_field( wp_unslash( $_POST['message'] ) ) : '';

	if ( empty( $name ) || ! is_email( $email ) ) {
		wp_safe_redirect( add_query_arg( 'cartmento_status', 'error', wp_get_referer() ) );
		exit;
	}

	$to      = get_option( 'admin_email' );
	$subject = 'New CartMento Lead: ' . $name;

	$body  = "New consultation request from cartmento.com\n\n";
	$body .= "Name: {$name}\n";
	$body .= "Email: {$email}\n";
	$body .= "Phone / WhatsApp: {$phone}\n";
	$body .= "Business Name: {$business}\n";
	$body .= "Existing Website: {$website}\n";
	$body .= "Required Service: {$service}\n";
	$body .= "Budget Range: {$budget}\n";
	$body .= "Message:\n{$message}\n";

	$headers = array( 'Content-Type: text/plain; charset=UTF-8' );
	if ( is_email( $email ) ) {
		$headers[] = 'Reply-To: ' . $name . ' <' . $email . '>';
	}

	$sent = wp_mail( $to, $subject, $body, $headers );

	wp_safe_redirect( add_query_arg( 'cartmento_status', $sent ? 'success' : 'error', wp_get_referer() ) );
	exit;
}
add_action( 'admin_post_cartmento_contact', 'cartmento_handle_contact_form' );
add_action( 'admin_post_nopriv_cartmento_contact', 'cartmento_handle_contact_form' );

/**
 * Fallback menu output if no menu is assigned in Appearance > Menus
 */
function cartmento_fallback_menu() {
	echo '<ul>';
	echo '<li><a href="' . esc_url( home_url( '/' ) ) . '">Home</a></li>';
	echo '<li><a href="' . esc_url( home_url( '/services' ) ) . '">Services</a></li>';
	echo '<li><a href="' . esc_url( home_url( '/pricing' ) ) . '">Pricing</a></li>';
	echo '<li><a href="' . esc_url( home_url( '/portfolio' ) ) . '">Portfolio</a></li>';
	echo '<li><a href="' . esc_url( home_url( '/contact' ) ) . '">Contact</a></li>';
	echo '</ul>';
}
