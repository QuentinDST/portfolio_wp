<?php get_header() ?>



<div class="row d-flex flex-column card--project">
        <div class="col-md-3 card--project1">
          <div class="card--image">
            <a href="" alt=""></a>
          </div>
        </div>
        <div class="col-md-3 card--project2">
          <div class="card--image">
            <a href="https://vintedimmitation.netlify.app" target="_blank"><img src="http://localhost/Brief7/wordpress/wp-content/uploads/2023/02/vinted.png" alt=""></a>
          </div>
        </div>
        <div class="col-md-3 card--project3">
          <div class="card--image">
            <a href="https://confiturecocotte.netlify.app" target="_blank"><img src="http://localhost/Brief7/wordpress/wp-content/uploads/2023/02/confiture.png" alt=""></a>
          </div>
        </div>
      </div>
    </section>


    <section class="container">
      <div class="row section--skill">
        <div class="chevron1"></div>
        <div class="chevron2"></div>
        <div class="col-sm-12  col-md-12 text-center col-lg-2 tools">
          <div>
            <h2 class="skill--title">Front-end</h2>
          </div>
          <div>
            <?php 
            $frontend_skills = get_frontend_skills();
            echo $frontend_skills;
            ?>
          </div>
        </div>

        <div class="col-sm-12 text-center col-md-12  col-lg-2 tools">
          <div>
            <h2 class="skill--title">Tools</h2>
          </div>
          <div>
          <?php 
            $tools_skills = get_tools_skills();
            echo $tools_skills;
            ?>
          </div>
        </div>

        <div class="-sm-12 text-center col-md-12 col-lg-2 tools">
          <div>
            <h2 class="skill--title">Back-end</h2>
          </div>
          <div>
            <?php 
            $backend_skills = get_backend_skills();
            echo $backend_skills;
            ?>
          </div>
        </div>
        <div class="chevron3"></div>
        <div class="chevron4"></div>
      </div>
    </section>


    <section class="container d-flex justify-content-center">
      <div class="col-sm-12 col-md-10 col-lg-4 text-center section--follow">
        <ul class="follow--message">
          <a href="#name">
            <li>C</li>
            <li>O</li>
            <li>N</li>
            <li>T</li>
            <li>A</li>
            <li>C</li>
            <li>T</li>
            <li>E</li>
            <li>Z</li>
            <li>-</li>
            <li>M</li>
            <li>O</li>
            <li>I</li>
          </a>
        </ul>
      </div>
    </section>

    <section id="formation--contact">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6 formation">
          <div class="formation--title" id="formation">
            <h2><span class="first-letter">F</span>ORMATION</h2>
          </div>

          <div class="col-sm-12 col-md-10 col-lg-12 formation--content">
            <ul class="formation--content--text">
              <li><i class="bi bi-calendar-check"></i><span class="content--text">TITRE Professionnel de niveau
                  5<br>DEVELOPPEUR WEB ET WEB MOBILE</li></span>
              <li><i class="bi bi-map"></i><span class="content--text">GRETA Mende (48)</span></li>
              <li><i class="bi bi-calendar-check"></i><span class="content--text">2022 / 2023</span></li>
            </ul>
          </div>

            <div class="col-sm-12 col-md-10 col-lg-9 formation--text">
              <p>Développer ou faire évoluer des applications orientées web, ou web mobile</p>
            </div>

          </div>

            <!-- test form -->

          <div class="col-sm-12 col-md-6 contact">
            <h2><span id="contact" class="first-letter">C</span>ONTACT</h2>
            <?php echo do_shortcode('[contact-form-7 id="80" title="Formulaire contact portfolio Destrade Q"]'); ?>
          </div>
        </div>
      </div>
    </section>

<?php get_footer() ?>