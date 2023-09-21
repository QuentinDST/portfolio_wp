<?php get_header() ?>

  <div class="projet--title">
    <h1>Découvrez mes réalisations</h1>

  </div>
  
  <section class="projets" id="réalisations">
  
    <?php
    $args = array(
      'post_type' => 'projet',
    );
  
    $query = new WP_Query( $args );

    if ( $query->have_posts() ) :
    while ( $query->have_posts() ) : $query->the_post(); ?>
    

    <div class="row g-0 bg-body-secondary position-relative card--projet">
      <div class="col-md-6 mb-md-0 p-md-4 card--thumbnail">
        <?php the_post_thumbnail(); ?>
      </div>
      <div class="col-md-6 p-4 ps-md-0 card--title">
        <h5 class="mt-0"><?php the_title(); ?></h5>
        <a class="card--link" href="<?php the_permalink(); ?>" class="stretched-link"><i class="bi bi-plus-circle"></i></a>
      </div>
    </div>
    <?php endwhile;
    endif;?>

  </section>

<?php get_footer() ?>