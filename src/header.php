<!DOCTYPE html>
<html <?php echo language_attributes();?> data-theme="light">

<head>
  <?php wp_head(); ?>
  <meta charset="<?php bloginfo('charset');?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="container">

      <div class="navbar-brand py-4">
        <a class="navbar-item" href="<?php echo home_url();?>">
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
          <a href="<?php echo home_url(); ?>" class="navbar-item">Home</a>
          <a href="<?php echo home_url(); ?>/category/baths/" class="navbar-item">Bathtub</a>
          <a href="<?php echo home_url(); ?>/category/farmhouse-sinks/" class="navbar-item">Farmhouse Sink</a>
          <a href="<?php echo home_url(); ?>/category/undermount-sinks/" class="navbar-item">Undermount Sink</a>
          <a href="<?php echo home_url(); ?>/category/additional-sinks/" class="navbar-item">Additional Sink</a>
          <a href="<?php echo home_url(); ?>/category/hoods/" class="navbar-item">Hoods</a>
          <a href="<?php echo home_url(); ?>/about/" class="navbar-item">About</a>
          <a href="<?php echo home_url(); ?>/contact/" class="navbar-item">Contact</a>
          <a class="navbar-item">
            <label for="mode">
              <span class="is-size-6 theme">
                <i class="fas fa-lg fa-sun is-hidden"></i>
                <i class="fas fa-lg fa-moon"></i>
              </span>
              <input id="mode" name="mode" type="checkbox" class="is-hidden checkbox">
            </label>
          </a>
        </div>
      </div>

    </div>
  </nav>