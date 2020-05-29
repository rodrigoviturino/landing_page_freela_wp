<?php

// Includes
require get_template_directory() . "/include/setup.php";

// Hooks
add_action( "wp_enqueue_scripts", "lf_theme_styles" );