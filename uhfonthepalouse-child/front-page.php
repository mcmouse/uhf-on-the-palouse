<?php
get_header();
$wprestyle_feed_header = esc_html(get_theme_mod( 'wprestyle_feed_header_title' )); ?>

<section class="container-fluid" id="section2">
    <?php get_template_part( 'boxes' ); ?>
  <div class="clearfix"></div>
</section>

<?php get_footer();