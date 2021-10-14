<?php

/*
Template Name: О нас
*/

?>

<?php
get_header();
?>

<div class="wrapper">
  <div class="main">
    <div class="container line-container">
      <div class="line-outer"><span class="line"></span> <span class="line"></span> <span class="line"></span> <span class="line"></span></div>
    </div>
    <section class="banner second-page">
      <div class="container">
        <div class="banner__inner">
          <h1 class="banner__title title"><?php the_field("title"); ?></h1>
          <div class="banner__img-outer"><img class="banner__img" src="<?php the_field('subtitle-img') ?>" alt="img"></div>
        </div>
      </div>
    </section>
    <section class="about">
      <div class="container">
        <div class="about__inner">
          <h4 class="about__title"><?php the_field("second-title"); ?></h4>
          <div class="about__text">
            <?php the_field("suptext"); ?>
          </div>
          <div class="about__author">
            <div class="about__author-img-outer"><img class="about__author-img" src="<?php the_field('author-img') ?>" alt="img"></div>
            <div class="about__author-info">
              <div class="about__author-suptitle"><?php the_field("author-suptitle"); ?></div>
              <h5 class="about__author-title"><?php the_field("author-title"); ?></h5>
            </div>
          </div>
          <div class="about__text">
            <?php the_field("subtext"); ?>
          </div>
        </div>
      </div>
    </section>
  </div>

  <?php
  get_footer();
  ?>