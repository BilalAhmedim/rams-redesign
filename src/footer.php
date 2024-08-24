<footer class="footer">
  <div class="container">
    <div class="columns">

      <div class="column">
        <a href="<?php echo home_url(); ?>" class="has-text-left">
          <figure class="image">
            <img class="image is-96x96" src="<?php echo get_template_directory_uri(); ?>/asset/rams-logo.png"
              alt="Logo" />
          </figure>
          <h3 class="subtitle is-6">&copy; Rams International.<br /> All rights reserved.</h3>
        </a>
      </div>

      <div class="column">
        <h5 class="menu-label subtitle is-5 mb-2">Products</h5>
        <ul class="menu-list">
          <a href="<?php echo home_url(); ?>/category/baths/" class="navbar-item">Bathtub</a>
          <a href="<?php echo home_url(); ?>/category/farmhouse-sinks/" class="navbar-item">Farmhouse Sink</a>
          <a href="<?php echo home_url(); ?>/category/undermount-sinks/" class="navbar-item">Undermount Sink</a>
          <a href="<?php echo home_url(); ?>/category/additional-sinks/" class="navbar-item">Additional Sink</a>
          <a href="<?php echo home_url(); ?>/category/hoods/" class="navbar-item">Hoods</a>
        </ul>
        <h5 class="menu-label subtitle is-5 mb-2 mt-4">Privacy Policy</h5>
        <ul class="menu-list">
          <a href="<?php echo home_url(); ?>/privacy-policy/" class="navbar-item">Privacy Policy</a>
          <a href="<?php echo home_url(); ?>/site-map/" class="navbar-item">Site Map</a>
        </ul>
      </div>

      <div class="column">
        <h5 class="menu-label subtitle is-5 mb-2">Social Media</h5>
        <a href="https://www.facebook.com/ramsinternational/" aria-label="Rams International Facebook Page"><i
            class="fa-brands mx-2 my-2 fa-3x fa-facebook"></i></a>
        <a href="#" aria-label="Rams International Instagram Handel"><i
            class="fa-brands mx-2 my-2 fa-3x fa-instagram insta-color"></i></a>
        <br />
        <a href="#" aria-label="Rams International X"><i
            class="fa-brands mx-2 my-2 ml-3 fa-3x fa-x has-text-black"></i></a>
        <a href="https://in.linkedin.com/company/rams-international-india" aria-label="Rams International Linkedin"><i
            class="fa-brands mx-2 my-2 ml-4 fa-3x fa-linkedin"></i></a>
      </div>

      <div class="column is-one-quarter">
        <h5 class="menu-label subtitle is-5 mb-2">Locate Us</h5>
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3496.2047771691837!2d78.76272567616864!3d28.80297087631933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390afb740537fd01%3A0x10ca233667ff48b3!2sRams%20International!5e0!3m2!1sen!2sin!4v1715247370606!5m2!1sen!2sin"
          width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>

      </div>

    </div>
  </div>
</footer>
<?php wp_footer();?>
</body>

</html>