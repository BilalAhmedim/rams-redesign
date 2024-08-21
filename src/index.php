<?php get_header();

if (is_front_page()){ // Home Page
  // Hero Section
  $hero = get_template_directory(). '/includes/_hero.php';
  include $hero;
  // Hero Section

  //Service Section
  $services = get_template_directory(). '/includes/_services.php';
  include $services;
  // service section

  // Gallery Section
  $gallery_home = get_template_directory(). '/includes/_gallery_home.php';
  include $gallery_home;

  //gallery section

  // CTA Section
  $cta = get_template_directory() . '/includes/_cta.php';
  include $cta;
} // Home PAGE
else if(is_page('about')){
  // About Page
  $about = get_template_directory() . '/includes/_about.php';
  include $about;
  // About Page
}else {
  // Gallery
  $gallery = get_template_directory() . '/includes/_gallery.php';
  include $gallery;
  // gallery
}
get_footer();?>