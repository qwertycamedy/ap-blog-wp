<?php

/*
Template Name: Блог
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
    <section class="banner second-page second-page-blog">
      <div class="container">
        <div class="banner__inner">
          <h1 class="banner__title title">BLOG</h1>
        </div>
      </div>
    </section>
    <section class="blog">
      <div class="container">
        <div class="blog__inner">
          <div class="blog__card-outer">
            <?php
            // параметры по умолчанию
            $posts = get_posts(array(
              'numberposts' => -1,
              'category_name'    => 'blog-posts',
              'orderby'     => 'date',
              'order'       => 'DESC',
              'post_type'   => 'post',
              'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
            ));

            foreach ($posts as $post) {
              setup_postdata($post);
            ?>

              <div class="blog__card">
                <div class="blog__card-info">
                  <a class="blog__card-title" href="<?php echo get_permalink(); ?>">
                    <?php the_title(); ?>
                  </a>
                  <div class="blog__card-date">26 April, 2021</div>
                  <a class="blog__card-more" href="<?php echo get_permalink(); ?>">Read more</a>
                </div>
                <a class="blog__card-img-outer" href="<?php echo get_permalink(); ?>">
                  <img class="blog__card-img" src="<?php the_field('bp-img'); ?>" alt="img">
                </a>
              </div>

            <?php
            }

            wp_reset_postdata(); // сброс
            ?>
          </div>
        </div>
      </div>
    </section>
  </div>

  <?php
  get_footer();
  ?>