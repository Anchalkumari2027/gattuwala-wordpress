<?php get_header(); ?>
<section class="hero">
  <div class="hero-image" role="img" aria-label="Industrial biomass processing equipment"></div>
  <div class="hero-shade"></div>
  <div class="container hero-content">
    <p class="eyebrow eyebrow-light"><span class="eyebrow-line"></span> ENGINEERING A CIRCULAR FUTURE</p>
    <h1>Turn biomass into<br><em>better possibilities.</em></h1>
    <p class="hero-copy">Reliable pellet machinery, processing equipment and plant solutions for a more resourceful industrial future.</p>
    <div class="hero-actions"><a class="button button-primary" href="<?php echo esc_url(get_post_type_archive_link('product')); ?>">Explore our equipment <span>↗</span></a><a class="button button-outline-light" href="<?php echo esc_url(home_url('/contact-us/')); ?>">Talk to an expert</a></div>
    <div class="hero-proof"><span class="proof-dot"></span><span>From individual machines to complete plant solutions</span></div>
  </div>
  <div class="hero-index"><span>01</span><span class="index-rule"></span><span>INDUSTRIAL SOLUTIONS</span></div>
</section>
<section class="intro-section section-pad"><div class="container intro-grid">
  <div><p class="eyebrow">WHO WE ARE</p><h2>Engineering the next chapter of <em>biomass.</em></h2></div>
  <div class="intro-copy"><p class="lead">We help businesses transform agricultural and wood residues into valuable resources through dependable machinery and practical project support.</p><p>From equipment selection to plant setup guidance, Gattuwala brings machinery, knowledge and service together to help move your project forward.</p><a class="text-link" href="<?php echo esc_url(home_url('/about-us/')); ?>">Discover Gattuwala <span>↗</span></a></div>
</div></section>
<section class="products-section section-pad section-muted"><div class="container">
  <div class="section-heading"><div><p class="eyebrow">OUR EQUIPMENT</p><h2>Built for the work<br>that <em>moves industry.</em></h2></div><a class="text-link" href="<?php echo esc_url(get_post_type_archive_link('product')); ?>">View all equipment <span>↗</span></a></div>
  <div class="card-grid product-grid"><?php
  $products = new WP_Query(array('post_type'=>'product','posts_per_page'=>6,'orderby'=>'menu_order date','order'=>'ASC'));
  if ($products->have_posts()): while ($products->have_posts()): $products->the_post(); get_template_part('template-parts/card','product'); endwhile; wp_reset_postdata();
  else:
    $defaults = array('Vertical Ring Die Pellet Machine GTW7 Series','Centrifugal Pellet Machine','Hammer Machine','Flash Dryer','Wood Chipper','Conveyor Systems');
    foreach ($defaults as $i=>$name): ?>
      <article class="content-card product-card"><a class="card-image placeholder-image placeholder-<?php echo esc_attr($i%3); ?>" href="<?php echo esc_url(home_url('/contact-us/')); ?>"><span class="image-label">GATTUWALA / EQUIPMENT</span><span class="placeholder-symbol">G<span>•</span></span></a><div class="card-body"><span class="card-kicker">BIOMASS EQUIPMENT</span><h3><?php echo esc_html($name); ?></h3><a class="card-link" href="<?php echo esc_url(home_url('/contact-us/')); ?>">Request details <span>↗</span></a></div></article>
    <?php endforeach; endif; ?>
  </div>
</div></section>
<section class="solutions-section section-pad"><div class="container solutions-grid"><div class="solutions-visual"><div class="visual-caption"><span>01 / SOLUTIONS</span><strong>From raw material<br>to finished fuel.</strong></div></div><div class="solutions-content"><p class="eyebrow">MORE THAN MACHINERY</p><h2>Your project needs<br>a <em>complete picture.</em></h2><p>Our team supports you across equipment selection, plant planning and the operational details that turn a concept into a working facility.</p><div class="solution-list">
<a href="<?php echo esc_url(home_url('/services/')); ?>"><span class="solution-number">01</span><span><strong>Plant & EPC solutions</strong><small>Project planning and plant construction support</small></span><b>↗</b></a>
<a href="<?php echo esc_url(home_url('/services/')); ?>"><span class="solution-number">02</span><span><strong>Equipment & integration</strong><small>Machinery for biomass processing workflows</small></span><b>↗</b></a>
<a href="<?php echo esc_url(home_url('/services/')); ?>"><span class="solution-number">03</span><span><strong>Technical support</strong><small>Guidance for setup, operation and maintenance</small></span><b>↗</b></a>
</div><a class="button button-dark" href="<?php echo esc_url(get_post_type_archive_link('service')); ?>">Explore our services <span>↗</span></a></div></div></section>
<section class="stats-band"><div class="container stats-grid"><div><strong>100<span>+</span></strong><p>Plant installations stated by Gattuwala</p></div><div><strong>360<span>°</span></strong><p>Support across the project journey</p></div><div><strong>01</strong><p>Partner for your next biomass project</p></div><div class="stats-note"><p>Every project is different. Let's discuss the right solution for your capacity, feedstock and goals.</p><a href="<?php echo esc_url(home_url('/contact-us/')); ?>">Start a conversation ↗</a></div></div></section>
<section class="projects-section section-pad"><div class="container"><div class="section-heading"><div><p class="eyebrow">PROJECT EXPERIENCE</p><h2>Solutions in <em>action.</em></h2></div><a class="text-link" href="<?php echo esc_url(get_post_type_archive_link('project')); ?>">View installed plants <span>↗</span></a></div><div class="card-grid project-grid"><?php
$projects = new WP_Query(array('post_type'=>'project','posts_per_page'=>3));
if ($projects->have_posts()): while ($projects->have_posts()): $projects->the_post(); get_template_part('template-parts/card','project'); endwhile; wp_reset_postdata();
else: ?>
<div class="project-placeholder"><span>PROJECT / 01</span><h3>Biomass pellet production</h3><p>Add your installed plant photos and project details from WordPress admin.</p></div><div class="project-placeholder project-placeholder-2"><span>PROJECT / 02</span><h3>Integrated processing line</h3><p>Showcase equipment combinations and customer outcomes.</p></div><div class="project-placeholder project-placeholder-3"><span>PROJECT / 03</span><h3>Plant setup & commissioning</h3><p>Build trust with real installations, capacity and location details.</p></div>
<?php endif; ?></div></div></section>
<section class="insight-band"><div class="container insight-inner"><div><p class="eyebrow eyebrow-light">HAVE A PROJECT IN MIND?</p><h2>Let's make your next<br><em>move a meaningful one.</em></h2></div><a class="button button-primary" href="<?php echo esc_url(home_url('/contact-us/')); ?>">Get a project consultation <span>↗</span></a></div></section>
<?php get_footer(); ?>
