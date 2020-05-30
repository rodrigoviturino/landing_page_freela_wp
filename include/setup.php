<?php 

function lf_theme_styles(){
  $directory = get_template_directory_uri();

  // CSS
  wp_enqueue_style("lf_style_css", get_template_directory_uri() . "/style.css" );

  // JS
  wp_enqueue_script("lf_jquery_js", $directory."/assets/js/lib/jquery-3.5.0.min.js" );
  wp_enqueue_script("lf_slick_js", $directory."/assets/js/lib/slick-1.8.1/slick/slick.min.js", ['lf_jquery_js'] );
  // wp_enqueue_script("lf_swiper_js", $directory."/assets/js/lib/swiper-6.0.2/src/swiper.js", ["lf_jquery_js"] );
  // wp_enqueue_script("lf_k_js", $directory."/assets/js/lib/swiper-6.0.2/scripts/build.js",);
  wp_enqueue_script("lf_main_js", $directory."/assets/js/main.js", ["lf_jquery_js"] );
  wp_enqueue_script("lf_plugins_js", $directory."/assets/js/lib/plugins.js", ["lf_jquery_js"] );

}
