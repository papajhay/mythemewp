<?php 
//add_theme_support(): fonction permet de rajouter qlq support de fonctionalité

function montheme_supports(){
      add_theme_support('title-tag');//afficher un titre
      add_theme_support( 'post-thumbnails' );//afficher une image
      add_theme_support('menus');//afficher le fichier menu dans l'apparence de tableau de bord
      register_nav_menu('header', 'En tête du menu');//pour enregistrer le menu
      register_nav_menu('footer', 'Pied de page');
      add_image_size('post_thumbnail', 1920, 1080, true);
     
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

function montheme_menu_class($classes){
    $classes[] = 'nav-item';
    return $classes;
}

function montheme_menu_link_class($attrs){
      $attrs['class'] = 'nav-link';
      return $attrs;
  }

function montheme_pagination(){
      $pages = paginate_links(['type' => 'array']);
      if ($pages === null) {
            return;
      }
      echo '<nav aria-label="Pagination">';
      echo '<ul class="pagination my-4">';
      foreach($pages as $page) {
            $active = strpos($page, 'current') !== false;
            $class = 'page-item';
            if ($active) {
                  $class .= ' active';
            }
            echo '<li class="'. $class .'">';
            echo str_replace('page-numbers','page-link', $page );
            echo '</li>';
      }
      echo '</ul>';
      echo '</nav>';

} 

function montheme_init() {
      register_taxonomy('sport', 'post', [
          'labels' => [
                'name' => 'Sport',
                'singular_name' => 'Sport',
                'plural_name'   => 'Sports',
                'search_items'  => 'Rechercher des sports',
                'all_items'     => 'Tous les sports',
                'edit_item'     => 'Editer le sport',
                'update_item'   => 'Mettre à jour le sport',
                'add_new_item'  => 'Ajouter un nouveau sport',
                'new_item_name' => 'Ajouter un nouveau sport',
                'menu_name'     => 'Sport',
          ],
          'show_in_rest'      => true,
          'hierarchical'      => true,
          'show_admin_column' => true,
      ]);

      //enregistrement custom post type 
      register_post_type('bien', [
            'label' => 'Bien',//affichage dans l'admin
            'public'=> true ,
            'menu_position'=> 3,//emplacement sur le tableau de bord
            'menu_icon' => 'dashicons-building',//l'icon qui affiche sur l'admin (ex: bien) 
            'supports'=> ['title', 'editor', 'thumbnail'],//affichage de titre , editeur, et l'image mis en avant qd on modifie
            'show_in_rest' => true,//qd on modifie un article on a une forme de bloc
      ]);
}

add_action('init', 'montheme_init');
add_action('after_setup_theme','montheme_supports');
//wp_enqueue_scripts : fil d'attente de script et de styles censés apparaître sur le front-end 
add_action('wp_enqueue_scripts', 'montheme_register_assets');
//récupération de la séparation de la barre de navigation
add_filter('document_title_separator', 'montheme_title_separator');
//add_filter('document_title_parts', 'montheme_title_document_parts');
add_filter('nav_menu_css_class', 'montheme_menu_class');
add_filter('nav_menu_link_attributes', 'montheme_menu_link_class');

require_once('metaboxes/sponso.php');
require_once('options/agence.php');

SponsoMetaBox::register();
AgenceMenuPage::register();

