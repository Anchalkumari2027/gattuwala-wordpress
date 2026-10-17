<?php
if (!defined('ABSPATH')) exit;

function gattuwala_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array('height'=>80,'width'=>240,'flex-height'=>true,'flex-width'=>true));
    add_theme_support('html5', array('search-form','comment-form','comment-list','gallery','caption','style','script'));
    register_nav_menus(array('primary'=>__('Primary Menu','gattuwala-industrial'),'footer'=>__('Footer Menu','gattuwala-industrial')));
}
add_action('after_setup_theme','gattuwala_setup');

function gattuwala_assets() {
    wp_enqueue_style('gattuwala-style', get_stylesheet_uri(), array(), '1.0.0');
    wp_enqueue_style('gattuwala-main', get_template_directory_uri().'/assets/css/main.css', array('gattuwala-style'), '1.0.0');
    wp_enqueue_script('gattuwala-main', get_template_directory_uri().'/assets/js/main.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts','gattuwala_assets');

function gattuwala_register_content() {
    $types = array(
      'product' => array('Products','Product','dashicons-hammer','products'),
      'service' => array('Services','Service','dashicons-admin-tools','services'),
      'project' => array('Installed Plants','Project','dashicons-building','projects')
    );
    foreach ($types as $key=>$v) {
        register_post_type($key, array(
          'labels'=>array('name'=>__($v[0],'gattuwala-industrial'),'singular_name'=>__($v[1],'gattuwala-industrial'),'add_new_item'=>'Add New '.$v[1],'edit_item'=>'Edit '.$v[1]),
          'public'=>true,'has_archive'=>true,'rewrite'=>array('slug'=>$v[3]),'menu_icon'=>$v[2],
          'supports'=>array('title','editor','excerpt','thumbnail','page-attributes'),
          'show_in_rest'=>true
        ));
    }
    register_taxonomy('product_category','product',array(
      'labels'=>array('name'=>'Product Categories','singular_name'=>'Product Category'),
      'hierarchical'=>true,'public'=>true,'show_in_rest'=>true,'rewrite'=>array('slug'=>'product-category')
    ));
}
add_action('init','gattuwala_register_content');

function gattuwala_excerpt_length($length) { return 24; }
add_filter('excerpt_length','gattuwala_excerpt_length',999);

function gattuwala_contact_form() {
    if (!isset($_POST['gattuwala_contact_nonce']) || !wp_verify_nonce(sanitize_text_field(wp_unslash($_POST['gattuwala_contact_nonce'])),'gattuwala_contact')) {
        return '<p class="form-note">Please refresh the page and try again.</p>';
    }
    $name = sanitize_text_field(wp_unslash($_POST['contact_name'] ?? ''));
    $email = sanitize_email(wp_unslash($_POST['contact_email'] ?? ''));
    $phone = sanitize_text_field(wp_unslash($_POST['contact_phone'] ?? ''));
    $message = sanitize_textarea_field(wp_unslash($_POST['contact_message'] ?? ''));
    if (!$name || !is_email($email) || !$message) return '<p class="form-note">Please enter your name, valid email and message.</p>';
    $to = get_option('admin_email');
    $subject = 'Website enquiry from '.$name;
    $body = "Name: $name\nEmail: $email\nPhone: $phone\n\n$message";
    $sent = wp_mail($to, $subject, $body, array('Reply-To: '.$name.' <'.$email.'>'));
    return $sent ? '<div class="form-success">Thank you. Your enquiry has been submitted.</div>' : '<p class="form-note">Message could not be sent. Please email contact@gattuwala.com.</p>';
}
function gattuwala_contact_shortcode() {
    $notice = '';
    if ($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['gattuwala_contact_nonce'])) $notice = gattuwala_contact_form();
    ob_start(); ?>
    <div class="contact-form-wrap"><?php echo wp_kses_post($notice); ?>
      <form class="contact-form" method="post">
        <?php wp_nonce_field('gattuwala_contact','gattuwala_contact_nonce'); ?>
        <div class="form-grid">
          <label>Your name<input required name="contact_name" autocomplete="name"></label>
          <label>Work email<input required type="email" name="contact_email" autocomplete="email"></label>
          <label>Phone number<input name="contact_phone" type="tel" autocomplete="tel"></label>
          <label class="full">How can we help?<textarea required name="contact_message" rows="5"></textarea></label>
        </div>
        <button class="button button-primary" type="submit">Send enquiry <span aria-hidden="true">↗</span></button>
      </form>
    </div>
    <?php return ob_get_clean();
}
add_shortcode('gattuwala_contact_form','gattuwala_contact_shortcode');

function gattuwala_fallback_menu() {
    echo '<ul class="menu"><li><a href="'.esc_url(home_url('/')).'">Home</a></li><li><a href="'.esc_url(home_url('/about-us/')).'">About</a></li><li><a href="'.esc_url(get_post_type_archive_link('product')).'">Products</a></li><li><a href="'.esc_url(get_post_type_archive_link('service')).'">Solutions</a></li><li><a href="'.esc_url(home_url('/contact-us/')).'">Contact</a></li></ul>';
}
