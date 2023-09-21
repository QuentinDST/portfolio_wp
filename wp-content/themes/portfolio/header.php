<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio</title>
  <?php wp_head();?>
</head>

<!-- Ajout classe personnalisée pour afficher l'image de la section bio sur la page d'accueil, et une bannière noire sur les autres page -->
<body <?php body_class(is_front_page() ? 'class--front--page' : 'class--other--page');?>>

  <!-- HEADER -->

<header class="header">
  <div class="container">
    <nav class="navbar navbar-expand-md justify-content-end">
      <div class="container-fluid justify-content-end">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"><i class="bi bi-list"></i></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
          <?php wp_nav_menu([
            'theme_location' => 'header',
            'container' => false,
            'menu_class' => 'navbar-nav items',
            ])?>
            <!-- Ajout d'un nav-link accueuil sur toutes les autres pages que front-page.php -->
            <?php if ( ! is_front_page() ) : ?>
              <div class="navbar-nav items">
                <a class="nav-link" aria-current="page" href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="bi bi-house-door"></i></a>
              </div>
            <?php endif; ?>
          <!-- <div class="navbar-nav items">
            <a class="nav-link" aria-current="page" href="#">REALISATIONS</a>
            <a class="nav-link" href="#">FORMATION</a>
            <a class="nav-link" href="#contact">CONTACT</a>
          </div> -->
        </div>
      </div>
    </nav>
  </div>
  <div class="container text">
    <div class="row">
    <?php if (is_front_page()) : ?>
      <div class="text--content">
        <h1 class=" col-12 col-md-4">DEV. <br>
          WEB <br>
          JUNIOR <br>
        </h1>
        <i class="bi bi-quote"></i>
        <h2 class="col-sm-8 col-md- col-lg-6">Passionné par la réalisation et le développement de projets web</h2>
        <h3 class="col-12 col-md-6 col-lg-8">Hi ! Je m'appelle Quentin DESTRADE et j'ai 33 ans.<br>
          Actuellement étudiant stagiaire au Greta Mende et inscrit à la formation développeur web et web mobile, je
          souhaite à terme développer mes compétences et les mettre à profit au service d'une entreprise dynamique,
          avec une apétence certaine pour le front-end. <br> Sérieux, dynamique et souriant, je m’intègre facilement
          au travail en équipe et m’adapte à toute situation.</h3>
      </div>
      <?php endif; ?>
    </div>
  </div>
</header>

<main>

<section class="container flex-column">