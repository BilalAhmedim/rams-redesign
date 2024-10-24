<?php
  $gallery_bath = get_field('baths');
  $gallery_fs= get_field('farmhouse-sinks');
  $gallery_us = get_field('undermount-sinks');
  $gallery_as = get_field('additional-sinks');
  $gallery_hoods = get_field('hoods');
  $gallery_uncategorized = get_field('uncategorized');
  ?>
<section class="section is-primary is-medium">

  <div class="container">
    <h1 class="title is-1 pb-5">Products Gallery</h1>

    <div class="columns is-variable is-8 pb-4">

      <div class="column is-one-third">
        <a href="<?php echo home_url(); ?>/category/baths/">
          <figure class="image">
            <img class="is-rounded" src="<?php echo esc_html($gallery_bath['sizes']['medium_large'])?>"
              alt="<?php echo esc_html($gallery_bath['alt']);?>" />
          </figure>
          <h2 class="subtitle is-4 pt-2 has-text-centered"><?php echo esc_html($gallery_bath['title'])?></h2>
        </a>
      </div>

      <div class="column is-one-third">
        <a href="<?php echo home_url(); ?>/category/farmhouse-sinks/">
          <figure class="image">
            <img class="is-rounded" src="<?php echo esc_html($gallery_fs['sizes']['medium_large'])?>"
              alt="<?php echo esc_html($gallery_fs['alt']);?>" />
          </figure>
          <h2 class="subtitle is-4 pt-2 has-text-centered"><?php echo esc_html($gallery_fs['title'])?></h2>
        </a>
      </div>

      <div class="column is-one-third">
        <a href="<?php echo home_url(); ?>/category/undermount-sinks/">
          <figure class="image">
            <img class="is-rounded" src="<?php echo esc_html($gallery_us['sizes']['medium_large'])?>"
              alt="<?php echo esc_html($gallery_us['alt']);?>" />
          </figure>
          <h2 class="subtitle is-4 pt-2 has-text-centered"><?php echo esc_html($gallery_us['title'])?></h2>
        </a>
      </div>

    </div>

    <div class="columns is-justify-content-center">

      <div class="column is-one-third">
        <a href="<?php echo home_url(); ?>/category/additional-sinks/">
          <figure class="image">
            <img class="is-rounded" src="<?php echo esc_html($gallery_as['sizes']['medium_large'])?>"
              alt="<?php echo esc_html($gallery_as['alt']);?>" />
          </figure>
          <h2 class="subtitle is-4 pt-2 has-text-centered"><?php echo esc_html($gallery_as['title'])?></h2>
        </a>
      </div>

      <div class="column is-one-third">
        <a href="<?php echo home_url(); ?>/category/hoods/">
          <figure class="image">
            <img class="is-rounded" src="<?php echo esc_html($gallery_hoods['sizes']['medium_large'])?>"
              alt="<?php echo esc_html($gallery_hoods['alt']);?>" />
          </figure>
          <h2 class="subtitle is-4 pt-2 has-text-centered"><?php echo esc_html($gallery_hoods['title'])?></h2>
        </a>
      </div>

      <div class="column is-one-third">
        <a href="<?php echo home_url(); ?>/category/uncategorized/">
          <figure class="image">
            <img class="is-rounded" src="<?php echo esc_html($gallery_uncategorized['sizes']['medium_large'])?>"
              alt="<?php echo esc_html($gallery_uncategorized['alt']);?>" />
          </figure>
          <h2 class="subtitle is-4 pt-2 has-text-centered"><?php echo esc_html($gallery_uncategorized['title'])?></h2>
        </a>
      </div>

    </div>

  </div>

</section>