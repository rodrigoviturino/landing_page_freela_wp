<?php 

function lf_theme_styles(){
  $directory = get_template_directory_uri();

  // CSS
  wp_enqueue_style("lf_style_css", get_template_directory_uri() . "/style.css" );

  // JS
  wp_enqueue_script( "lf_jquery_js", $directory . "/assets/js/lib/jquery-3.5.0.min.js" );
  wp_enqueue_script( "lf_jquery_js", $directory . "/assets/js/lib/slick-1.8.1/slick/slick.js" );
  wp_enqueue_script( "lf_main_js", $directory . "/assets/js/main.js", ["lf_jquery_js"] );

}
