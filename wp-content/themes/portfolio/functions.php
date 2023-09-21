<?php 

// Ajouter différents éléments à mon thème 

function portfolio_support_theme(){
	add_theme_support('title-tag'); 
	add_theme_support('post-thumbnails');
  add_theme_support( 'post-thumbnails' );

  // Définir la taille des images mises en avant  
  set_post_thumbnail_size( 700, 300, true );

  // Ajout du sous menu menu dans apparence
  add_theme_support('menus');
  register_nav_menu( 'header', 'Menu du header');
  register_nav_menu( 'footer', 'Menu du footer');

}
add_action('after_setup_theme', 'portfolio_support_theme');

//Chargement des liens Bootstrap

function portfolio_style_bootstrap() {
	wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css');
	wp_enqueue_style( 'icons bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css');
	wp_enqueue_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js');
}
add_action('wp_enqueue_scripts', 'portfolio_style_bootstrap');


// Chargement de ma feuille de style CSS

function portfolio_my_style() {
    wp_enqueue_style( 'mon-style', get_stylesheet_uri());

}
add_action('wp_enqueue_scripts', 'portfolio_my_style');

// Ajout modification menu WP en Bootstrap

function portfolio_menu_class($classes){
    $classes[] = 'nav-link';
    return $classes;
}

function portfolio_menu_link_class($attrs){
    $attrs['class'] = 'nav-link';
    return $attrs;
}

add_filter('nav_menu_css_class', 'portfolio_menu_class');
add_filter('nav_menu_link_attributes', 'portfolio_menu_link_class');


// Création Cpt Compétences

function competences_register_post_types() {
	$labels = array(
        'name' => 'skills',
        'all_items' => 'Toutes les compétences',
        'singular_name' => 'compétences',
        'add_new_item' => 'Ajouter une nouvelle compétence',
        'edit_item' => 'modifier une compétence',
        'delete_item' => 'Supprimer une compétence',
        'menu_name' => 'Compétences'
    );

	$args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor','thumbnail' ),
        'menu_position' => 5, 
        'menu_icon' => 'dashicons-admin-customizer',
        'capability_type' => 'page',
        'show_in_rest' => 'true'
	);

	register_post_type( 'skills', $args );
}
add_action( 'init', 'competences_register_post_types' );

// Fonction et requête pour afficher mes compétences directement via mon CPT

function get_frontend_skills(){
    $query = new WP_Query([
        'post_type'=> 'skills',
        'name' => 'front-end',
        ]);
      
      while($query->have_posts()): $query->the_post();
      ?>
      <ul>
        <li><?= the_content() ?></li>
      </ul>
        <?php endwhile;
}

function get_tools_skills(){
    $query = new WP_Query([
        'post_type'=> 'skills',
        'name' => 'tools',
        ]);
      
      while($query->have_posts()): $query->the_post();
      ?>
      <ul>
        <li><?= the_content() ?></li>
      </ul>
        <?php endwhile;
}

function get_backend_skills(){
    $query = new WP_Query([
        'post_type'=> 'skills',
        'name' => 'back-end',
        ]);
      
      while($query->have_posts()): $query->the_post();
      ?>
      <ul>
        <li><?= the_content() ?></li>
      </ul>
        <?php endwhile;
}



// Création Cpt Portfolio

function projet_register_post_types() {
	$labels = array(
        'name' => 'projet',
        'all_items' => 'Tous les projets',
        'singular_name' => 'Projet',
        'add_new_item' => 'Ajouter un projet',
        'edit_item' => 'Modifier le projet',
        'delete_item' => 'Supprimer le projet',
        'menu_name' => 'Projet'
    );

	$args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor','thumbnail' ),
        'menu_position' => 5, 
        'menu_icon' => 'dashicons-admin-customizer',
        'capability_type' => 'page',
        'show_in_rest' => 'true'
	);

	register_post_type( 'projet', $args );
}
add_action( 'init', 'projet_register_post_types' );

// Short code bouton page réalisation

function ajouter_bouton_plus(){
  echo 'bouton';
}

add_shortcode('shortCodeMore', 'ajouter_bouton_plus');