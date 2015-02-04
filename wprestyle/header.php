<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
  </head>
<body <?php body_class(); ?>>

<?php 

get_template_part( 'top-nav' ); 

if ( is_front_page() ) : ?>
<!--Video Section-->
<section class="content-section video-section" id="section7">

    <div class="container">
        <div class="row">        
            <?php get_template_part( 'parts/top-section' ); ?>
        </div>		
    </div>

</section>

<!--Video Section Ends Here-->
<?php 

else : ?>

<section class="content-section video-section" id="section0">
    
	 <div class="container">
        <div class="row">
            <h2 class="text-center v-center">
            <?php if (get_theme_mod( 'wprestyle_logo_image' )) : ?>
			<a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
			    <img src="<?php echo esc_url(get_theme_mod( 'wprestyle_logo_image' )); ?>" alt="<?php echo esc_html(get_theme_mod( 'wprestyle_logo_alt_text' )); ?>" />
			</a>
		<?php else : ?>
            <a class="brand" href="<?php echo esc_url(home_url( '/' )); ?>" title="<?php bloginfo( 'description' ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
        <?php endif; ?>
		</h2>
        </div>
		
    </div>
</section>
<?php endif; ?>