<?php
$cta = get_field('cta');
$cta_title = get_field('cta_title');
?>
<section class="hero has-background is-medium py-6">

  <div class="container">
    <img alt="Fill Murray" class="hero-background" src="<?php echo esc_html($cta['url'])?>" />
    <div class="hero-body">
      <div class="container has-text-left">
        <p class="subtitle is-3 has-text-centered has-text-gray"><?php echo esc_html($cta_title); ?></p>

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