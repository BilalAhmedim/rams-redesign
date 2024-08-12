<?php get_header();?>
<?php
$hero_image = get_field('hero-Image');
$hero_title = get_field('hero-title');
$hero_subtitle = get_field('hero_subtitle');


if (is_front_page()){ // Homne Page Hero Section
?>
 <section class="hero is-primary is-large has-background">
    <img alt="Bath" class="hero-background" src="<?php echo $hero_image;?>" />

    <div class="hero-body">
      <div class="container has-text-left">
        <p class="title"><?php echo $hero_title;?></p>
        <p class="subtitle"><?php echo $hero_subtitle;?></p>
      </div>
    </div>
  </section>

  <?php //Service Section
    $quality = get_field('quality');
    $quality_title = get_field('quality_title');
    $quality_dec = get_field('quality_dec');

    $delivery = get_field('delivery');
    $delivery_title = get_field('delivery_title');
    $delivery_dec = get_field('delivery_dec');

    $warranty = get_field('warranty');
    $warranty_title = get_field('warranty_title');
    $warranty_dec = get_field('warranty_dec');

    $approach = get_field('approach');
    $approach_title = get_field('approach_title');
    $approach_dec = get_field('approach_dec');
    
  ?>

  <section class="section is-medium is-primary has-background">
    <div class="container">
      <h1 class="title is-1 pb-5">Services</h1>

      <div class="columns">

        <div class="column is-block has-text-centered">
          <?php echo '<img src="'. print_r($quality).'" class="image is-128x128 is-inline-block" alt="Placeholder">';?>
          <?php echo '<h3 class="subtitle is-4">'. $quality_title.'</h3>';?>
          <?php echo '<p>'.$quality_dec.'</p>';?>
        </div>

        <div class="column is-block has-text-centered">
          <img src="./asset/Services/package.png" class="image is-128x128 is-inline-block" alt="Placeholder">
          <h3 class="subtitle is-4">Timely Delivery</h3>
          <p>Timely delivery is essential, showcasing reliability and professionalism. We ensure our handicrafts reach
            clients promptly through efficient planning and communication, fostering trust.</p>
        </div>

        <div class="column is-block has-text-centered">
          <img src="./asset/Services/warranty.png" class="image is-128x128 is-inline-block" alt="Placeholder">
          <h3 class="subtitle is-4">Long-Term Warranty</h3>
          <p>Our long-term warranty ensures customer satisfaction and product quality, offering peace of mind and trust
            in our handicraft items.</p>
        </div>

        <div class="column is-block has-text-centered">
          <img src="./asset/Services/global-shipping.png" class="image is-128x128 is-inline-block" alt="Placeholder">
          <h3 class="subtitle is-4">World Wide Aproch</h3>
          <p>Our global approach ensures we serve customers worldwide with tailored solutions and understanding of
            diverse markets.</p>
        </div>

      </div>

    </div>
  </section>
<?php
}
?>
<?php get_footer();?>