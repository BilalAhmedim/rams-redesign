<?php
$hero_image = get_field('hero-Image');
$hero_title = get_field('hero-title');
$hero_subtitle = get_field('hero_subtitle');
?>
<section class="hero is-primary is-large has-background">
  <img alt="Bath" class="hero-background" src="<?php echo esc_html($hero_image);?>" />

  <div class="hero-body">
    <div class="container has-text-left">
      <p class="title"><?php echo esc_html($hero_title);?></p>
      <p class="subtitle"><?php echo esc_html($hero_subtitle);?></p>
    </div>
  </div>
</section>