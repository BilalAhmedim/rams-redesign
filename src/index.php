<?php get_header();?>
<?php
$hero_image = get_field('hero-Image');
$hero_title = get_field('hero-title');
$hero_subtitle = get_field('hero_subtitle');


if (is_front_page()){ // Home Page
  // Hero Section
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
  <?// service section?>

  <?php
  // Gallery Section
  $gallery_bath = get_field('baths');
  $gallery_fs= get_field('farmhouse-sinks');
  $gallery_us = get_field('undermount-sinks');
  $gallery_as = get_field('additional-sinks');
  $gallery_hoods = get_field('hoods');
  ?>
<section class="section is-primary is-medium">

  <div class="container">
    <h1 class="title is-1 pb-5">Products Gallery</h1>

    <div class="columns is-variable is-8 pb-4">

      <div class="column is-one-third">
        <a href="http://localhost:8080/category/baths/">
          <figure class="image">
            <img class="is-rounded" src="<?php echo $gallery_bath['sizes']['medium_large'] .'"' . ' alt='.$gallery_bath['alt'];?>" />
          </figure>
          <h2 class="subtitle is-4 pt-2 has-text-centered"><?php echo $gallery_bath['title']?></h2>
        </a>
      </div>

      <div class="column is-one-third">
        <a href="http://localhost:8080/category/farmhouse-sinks/">
          <figure class="image">
            <img class="is-rounded" src="<?php echo $gallery_fs['sizes']['medium_large'] .'"' . ' alt='.$gallery_fs['alt'];?>" />
          </figure>
          <h2 class="subtitle is-4 pt-2 has-text-centered"><?php echo $gallery_fs['title']?></h2>
        </a>
      </div>

      <div class="column is-one-third">
        <a href="http://localhost:8080/category/undermount-sinks/">
          <figure class="image">
            <img class="is-rounded" src="<?php echo $gallery_us['sizes']['medium_large'] .'"' . ' alt='.$gallery_us['alt'];?>" />
          </figure>
          <h2 class="subtitle is-4 pt-2 has-text-centered"><?php echo $gallery_us['title']?></h2>
        </a>
      </div>

    </div>

    <div class="columns is-justify-content-center">

      <div class="column is-one-third">
        <a href="http://localhost:8080/category/additional-sinks/">
          <figure class="image">
            <img class="is-rounded" src="<?php echo $gallery_as['sizes']['medium_large'] .'"' . ' alt='.$gallery_as['alt'];?>" />
          </figure>
          <h2 class="subtitle is-4 pt-2 has-text-centered"><?php echo $gallery_as['title']?></h2>
        </a>
      </div>

      <div class="column is-one-third">
        <a href="http://localhost:8080/category/hoods/">
          <figure class="image">
            <img class="is-rounded" src="<?php echo $gallery_hoods['sizes']['medium_large'] .'"' . ' alt='.$gallery_hoods['alt'];?>" />
          </figure>
          <h2 class="subtitle is-4 pt-2 has-text-centered"><?php echo $gallery_hoods['title']?></h2>
        </a>
      </div>

    </div>

  </div>

</section>
<?php 
//gallery section?>


<?php
// CTA Section
$cta = get_field('cta');
$cta_title = get_field('cta_title');
?>
<section class="hero has-background is-medium py-6">

  <div class="container">
    <img alt="Fill Murray" class="hero-background" src="<?php echo $cta['url']?>" />
    <div class="hero-body">
      <div class="container has-text-left">
        <p class="subtitle is-3 has-text-centered has-text-gray"><?php echo $cta_title; ?></p>

        <div class="field has-addons has-addons-centered">
          <div class="control">
            <input class="input" type="email" placeholder="Contact Us">
          </div>
          <div class="control">
            <button class="button is-info">Submit</button>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
<?php
} // Front PAGE
else {
  $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  $slug = basename(parse_url($url, PHP_URL_PATH));
  $args = array(
    'post_type' => 'post',
    'category_name' => $slug ,
    'post_per_page' => -1
  );
  $query = New WP_Query($args);
  ?>
<section class="section is-primary is-medium">

  <div class="container">
    <h1 class="title is-1 pb-5">Products Gallery</h1>
    <?php
    if ($query->have_posts()) {
      $counter = 0;
      echo '<div class="columns pb-4">';
      while ($query->have_posts()) : $query->the_post();
      $image = get_field('front_image');
        if ($counter % 2 == 0) {
          if ($counter != 0) {
            echo '</div></div>';
          }
          echo '<div class="column is-half-mobile is-half-desktop"><div class="columns is-mobile">';
        }
        ?>
        <div class="column is-half-mobile is-half-desktop">
          <a href="<?php the_permalink(); ?>" class="">
            <figure class="image">
              <img src="<?php echo $image['sizes']['medium'];?>" alt="<?php echo $image['alt'] ?>" />
            </figure>
            <h2 class="subtitle is-4 pt-2 has-text-centered"><?php the_title(); ?></h2>
          </a>
        </div>
        <?php 
        $counter++;
      endwhile;
      if ($counter % 2 != 0) {
          echo '</div></div>';
      }
      echo '</div>';  
      wp_reset_postdata();
    }
  } ?>

  </div>
</section>

<?php get_footer();?>