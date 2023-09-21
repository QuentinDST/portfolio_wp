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

// Chargement de ma feuille de style CSS et fichier JS

function portfolio_my_style() {
    wp_enqueue_style( 'mon-style', get_stylesheet_uri());

}
add_action('wp_enqueue_scripts', 'portfolio_my_style');

function portfolio_my_scripts(){
  wp_enqueue_script('mon-script', get_template_directory_uri() . '/scripts/script.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'portfolio_my_scripts');

// Chargement des icones

function charger_icones() {
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css' );
    wp_enqueue_style( 'material-icons', 'https://fonts.googleapis.com/icon?family=Material+Icons' );
}
add_action( 'wp_enqueue_scripts', 'charger_icones' );

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