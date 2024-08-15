<!DOCTYPE html>
<html lang="<?php language_attributes();?>" data-theme="light">

<head>
<?php wp_head(); ?>
  <meta charset="<?php bloginfo('charset');?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="container">

      <div class="navbar-brand py-4">
        <a class="navbar-item" href="https://bulma.io">
          <img src="<?php echo get_template_directory_uri(); ?>/asset/rams-logo.png" id="logo-image" alt="Logo" />
        </a>

        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
        </a>
      </div>

      <div id="navbarBasicExample" class="navbar-menu py-4">
        <div class="navbar-end">
          <a href="/" class="navbar-item">Home</a>
          <a href="http://localhost:8080/category/baths/" class="navbar-item">Bathtub</a>
          <a href="http://localhost:8080/category/farmhouse-sinks/" class="navbar-item">Farmhouse Sink</a>
          <a href="http://localhost:8080/category/undermount-sinks/" class="navbar-item">Undermount Sink</a>
          <a href="http://localhost:8080/category/additional-sinks/" class="navbar-item">Additional Sink</a>
          <a href="http://localhost:8080/category/hoods/" class="navbar-item">Hoods</a>
          <a href="http://localhost:8080/about/" class="navbar-item">About</a>
          <a href="http://localhost:8080/contact/" class="navbar-item">Contact</a>
        </div>
      </div>

    </div>
  </nav>