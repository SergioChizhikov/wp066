<?php

/**
 * Template Name: Main Page Template
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
$container = get_theme_mod('understrap_container_type');

?>

<div class="wrapper" id="<?php echo $wrapper_id; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- ok.
                          ?>">

  <div class="<?php echo esc_attr($container); ?>" id="content">
    <h1 class="text-center header-main"><?php echo get_the_title(); ?></h1>
    <div class="row">

      <div class="col-md-6">
        <?php echo get_the_content(); ?>
      </div><!-- #primary -->
      <div class="col-md-6">
        <p>Другой какой-то текст</p>
        <img src="<?php echo get_template_directory_uri(); ?>/img/sea.jpg" alt="">
      </div>
      <div class="col-12">
        <?php
         $adminImg = carbon_get_theme_option('admin_image');
         $params = ['class' => 'd-block w-100'];
         echo wp_get_attachment_image($adminImg, 'full', false, $params);

        ?>
      </div>

    </div><!-- .row -->

  </div><!-- #content -->

</div><!-- #<?php echo $wrapper_id; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- ok.
            ?> -->

<?php
get_footer();
