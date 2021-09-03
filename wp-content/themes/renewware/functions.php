<?php

function add_theme_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    
    wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css', array(), '1.0.0', 'all');
    
    wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array ( 'jquery' ), 1.1, true);
    
      if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
      }
  }
  add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
