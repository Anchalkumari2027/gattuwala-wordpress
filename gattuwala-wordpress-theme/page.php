<?php get_header(); while (have_posts()): the_post(); ?>
<section class="page-hero"><div class="container"><p class="eyebrow">GATTUWALA ENERGY SOLUTIONS</p><h1><?php the_title(); ?></h1><p>Engineering practical solutions for biomass processing and renewable energy.</p></div></section>
<section class="section-pad"><div class="container content-narrow entry-content"><?php if (has_post_thumbnail()) the_post_thumbnail('large',array('class'=>'page-featured-image')); the_content(); ?></div></section>
<?php endwhile; get_footer(); ?>
