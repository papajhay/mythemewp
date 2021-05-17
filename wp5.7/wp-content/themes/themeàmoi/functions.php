<?php 
//add_theme_support(): fonction permet de rajouter qlq support de fonctionalité

function montheme_supports(){
      add_theme_support('title-tag');
}

function montheme_register_assets(){
      //wp_register_style: fonction permet d'enregistrer le style
      wp_register_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', []);
      wp_register_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', ['popper', 'jquery'], false, true);
      wp_register_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', [], false, true);
      wp_deregister_script('jquery');
      wp_register_script('jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', [], false, true);
      //wp_enqueue_style: fonction permet d'utiliser le style
      wp_enqueue_style('bootstrap');
      wp_enqueue_script('bootstap');
}

function montheme_title_separator(){
      return '|';
}

/*function montheme_title_document_parts($title){
      return $title;
} */

add_action('after_setup_theme','montheme_supports');
//wp_enqueue_scripts : fil d'attente de script et de styles censés apparaître sur le front-end 
add_action('wp_enqueue_scripts', 'montheme_register_assets');
//récupération de la séparation de la barre de navigation
add_filter('document_title_separator', 'montheme_title_separator');
//add_filter('document_title_parts', 'montheme_title_document_parts');
