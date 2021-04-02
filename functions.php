<?php
function vcmk_data() {
  wp_enqueue_style('style_css',get_stylesheet_uri('css/style.css'));
  wp_enqueue_style('animate_css',get_stylesheet_uri('lib/animate/animate.css'));
  wp_enqueue_style('vcmk_website',get_stylesheet_uri('lib/bootstrap/css/bootstrap.css'));
}
add_action('wp_enqueue_scripts','vcmk_data');
 ?>
