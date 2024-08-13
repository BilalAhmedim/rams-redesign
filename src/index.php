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

  $features = [
    [
      'image'=> get_field('quality')['url'],
      'title'=>get_field('quality_title'),
      'description'=>get_field('quality_dec')
    ],
    [
      'image'=> get_field('delivery')['url'],
      'title'=>get_field('delivery_title'),
      'description'=>get_field('delivery_dec')
    ],
    [
      'image'=> get_field('warranty')['url'],
      'title'=>get_field('warranty_title'),
      'description'=>get_field('warranty_dec')
    ],
    [
      'image'=> get_field('approach')['url'],
      'title'=>get_field('approach_title'),
      'description'=>get_field('approach_dec')
    ],
  ];
    
  ?>

  <section class="section is-medium is-primary has-background">
    <div class="container">
      <h1 class="title is-1 pb-5">Services</h1>

      <div class="columns">

        <?php
        foreach ($features as $feature) {?>
          <div class="column is-block has-text-centered">
          <?php echo '<img src="'. $feature['image'].'" class="image is-128x128 is-inline-block" alt="Placeholder">';?>
          <?php echo '<h3 class="subtitle is-4">'. $feature['title'].'</h3>';?>
          <?php echo '<p>'.$feature['description'].'</p>';?>
        </div>
        <?php
        } // END Services Section
        ?>
      </div>

    </div>
  </section>
<?php
}
?>
<?php get_footer();?>