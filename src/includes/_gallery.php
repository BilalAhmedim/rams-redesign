<?php
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
 ?>

  </div>
</section>