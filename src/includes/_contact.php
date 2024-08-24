<section class="section">
  <div class="container">
    <h1 class="title is-1 pb-5">Contact US</h1>
    <div class="columns">
      <div class="column is-half">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3496.2047771691837!2d78.76272567616864!3d28.80297087631933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390afb740537fd01%3A0x10ca233667ff48b3!2sRams%20International!5e0!3m2!1sen!2sin!4v1715247370606!5m2!1sen!2sin"
          width="100%" height="100%" style="border:0;" allowfullscreen="yes" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="columns is-half">
        <?php
      while (have_posts()) {
        the_post();
        the_content();
      }
      ?>
      </div>
    </div>
  </div>
</section>