<!doctype html>
<html <?php language_attributes(); ?>>
<head><meta charset="<?php bloginfo('charset'); ?>"><meta name="viewport" content="width=device-width, initial-scale=1"><?php wp_head(); ?></head>
<body <?php body_class(); ?>><?php wp_body_open(); ?>
<div class="topbar"><div class="container topbar-inner"><span>Biomass processing & renewable energy solutions</span><div><a href="mailto:contact@gattuwala.com">contact@gattuwala.com</a><span class="topbar-sep">|</span><a href="tel:+917304040777">+91 73040 40777</a></div></div></div>
<header class="site-header"><div class="container header-inner">
  <div class="brand"><?php if (has_custom_logo()) { the_custom_logo(); } else { ?><a class="wordmark" href="<?php echo esc_url(home_url('/')); ?>"><span class="brand-mark">G</span><span>GATTUWALA<small>ENERGY SOLUTIONS</small></span></a><?php } ?></div>
  <button class="menu-toggle" aria-expanded="false" aria-controls="primary-navigation"><span></span><span></span><span></span><b class="screen-reader-text">Toggle menu</b></button>
  <nav id="primary-navigation" class="primary-navigation" aria-label="Primary navigation"><?php wp_nav_menu(array('theme_location'=>'primary','container'=>false,'fallback_cb'=>'gattuwala_fallback_menu')); ?></nav>
  <a class="button button-primary header-cta" href="<?php echo esc_url(home_url('/contact-us/')); ?>">Get a Quote <span aria-hidden="true">↗</span></a>
</div></header>
<main id="content">
