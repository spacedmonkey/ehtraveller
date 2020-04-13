<?php

function ehtraveller_setup(){
  add_theme_support( 'align-wide' );
}
add_action( 'after_setup_theme', 'ehtraveller_setup' );
