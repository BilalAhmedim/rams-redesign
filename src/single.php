<?php get_header(); 
$front_image = get_field('front_image');
$side_image = get_field('side_image');
$top_image = get_field('top_image');
$product_name = get_field('product_name');
$item_number = get_field('item_number');
$size = get_field('size_length_x_width_x_height');
$product_finish = get_field('product_finish');
$product_description = get_field('product_description');
$product_material = get_field('product_material');
$finishes_available = get_field('finishes_available');


$categories = get_the_category();
  foreach ( $categories as $category ) {
    $category_name = esc_html( $category->slug );
  }
?>

<section class="section">
    <div class="container">
      <div class="columns is-centered">
        <div class="column is-half">
          <!-- Breadcrub -->
          <nav class="breadcrumb" aria-label="breadcrumbs">
            <ul>
              <li><a href="<?php echo home_url();?>">Home</a></li>
              <li><a href="<?php echo home_url() .'/category/'. $category_name ;?>" aria-current="page"><?php echo ucwords($category_name);?></a></li>
            </ul>
          </nav>
          <!-- end-of Breadcrub -->
          <div class="zoomable aspect-ratio-1 mb-1">
            <i
              class="fa-solid fa-angles-left dropdown fa-2x is-pulled-left is-unselectable is-clickable arrows arrow-left"></i>
            <i
              class="fa-solid fa-angles-right fa-2x is-pulled-right is-unselectable is-clickable arrows arrow-right"></i>
            <img class="zoomable__img" src="<?php echo $front_image['sizes']['large']; ?>" data-current-slide="1" alt="">
          </div>
          <div class="sub-images mx-auto is-centered">
            <img class="carusel" src="<?php echo $front_image['sizes']['thumbnail']; ?>" data-img-src="1"
              data-src-large="<?php echo $front_image['sizes']['large']; ?>" alt="">
            <img class="carusel" src="<?php echo $side_image['sizes']['thumbnail']; ?>" data-img-src="2"
              data-src-large="<?php echo $side_image['sizes']['large']; ?>" alt="">
            <img class="carusel" src="<?php echo $top_image['sizes']['thumbnail']; ?>" data-img-src="3"
              data-src-large="<?php echo $top_image['sizes']['large']; ?>" alt="">
          </div>


        </div>
        <!-- end-of col -->

        <div class="column-6 mt-6">
          <div class="product-detail pl-5">
            <h2 class="subtitle is-3 b-4">Product Details</h2>
            <ul class="product-details">
              <li class="mb-4 is-size-5"><span class="has-text-weight-medium">Product Name : </span><?php echo $product_name ;?></li>
              <li class="mb-4 is-size-5"><span class="has-text-weight-medium">Item Number : </span><?php echo $item_number;?></li>
              <li class="mb-4 is-size-5"><span class="has-text-weight-medium">Size : </span><?php echo $size;?></li>
              <li class="mb-4 is-size-5"><span class="has-text-weight-medium">Finish : </span><?php echo $product_finish;?></li>
              <li class="mb-4 is-size-5"><span class="has-text-weight-medium">Material : </span><?php echo $product_material;?></li>
              <li class="mb-4 is-size-5"><span class="has-text-weight-medium">Finishes Available : </span><?php echo $finishes_available;?></li>
              <li class="mb-4 is-size-5"><span class="has-text-weight-medium">Product Description : </span><?php echo $product_description;?></li>
            </ul>
          </div>
        </div>

        <!-- end-of col -->
      </div>
    </div>
  </section>

<?php get_footer();?>