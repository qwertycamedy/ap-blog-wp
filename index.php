<?php
get_header();
?>
<div class="wrapper">
  <div class="main">
    <div class="container line-container">
      <div class="line-outer"><span class="line"></span> <span class="line"></span> <span class="line"></span> <span class="line"></span></div>
    </div>
    <section class="banner">
      <div class="container"><img class="banner__bg" src="<?php the_field('main-banner-img') ?>" alt="img">
        <div class="banner__inner">
          <div class="banner__info">
            <h1 class="banner__title title"><?php the_field('main-banner-title'); ?></h1>
            <p class="banner__subtitle"><?php the_field('main-banner-subtitle'); ?></p>
          </div>
          <div class="banner__article">
            <div class="banner__article-inner">
              <?php
              // параметры по умолчанию
              $posts = get_posts(array(
                'numberposts' => 1,
                'category_name'    => 'latest-banner-post',
                'orderby'     => 'date',
                'order'       => 'DESC',
                'post_type'   => 'post',
                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
              ));

              foreach ($posts as $post) {
                setup_postdata($post);
              ?>

                <div class="banner__article-img-outer">
                  <img class="banner__article-img" src="<?php the_field('bp-img'); ?>" alt="img">
                </div>
                <div class="banner__article-info">
                  <div class="banner__article-title-date">
                    <div class="banner__article-title"><?php the_title(); ?></div>
                    <div class="banner__article-date"><?php the_field('bp-date'); ?></div>
                  </div>
                  <div class="banner__article-text"><?php the_field('bp-latest-text'); ?></div>
                </div>
                <a class="banner__article-link-arrow" href="<?php echo get_permalink(); ?>">
                  <svg class="banner__article-link-arrow-img">
                    <use xlink:href="<?php echo bloginfo("template_url"); ?>/assets/img/sprite.svg#banner-link-arrow"></use>
                  </svg>
                </a>

              <?php
              }

              wp_reset_postdata(); // сброс
              ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="latest">
      <div class="container">
        <div class="latest__inner">
          <h2 class="latest__title"><?php the_field('latest-title'); ?></h2>
          <div class="latest__block-outer">
            <?php
            // параметры по умолчанию
            $posts = get_posts(array(
              'numberposts' => 3,
              'category_name'    => 'blog-posts',
              'orderby'     => 'date',
              'order'       => 'DESC',
              'post_type'   => 'post',
              'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
            ));

            foreach ($posts as $post) {
              setup_postdata($post);
            ?>

              <div class="latest__block">
                <img class="latest__block-bg" src="<?php the_field('bp-img') ?>" alt="img">
                <div class="latest__block-info">
                  <div class="latest__block-num"><?php the_field('bp-latest-num') ?></div>
                  <a class="latest__block-link" href="<?php echo get_permalink(); ?>">
                    <div class="latest__block-link-title"><?php the_title(); ?></div>
                    <svg class="latest__block-link-img">
                      <use xlink:href="<?php echo bloginfo("template_url"); ?>/assets/img/sprite.svg#latest-arrow"></use>
                    </svg>
                  </a>
                </div>
                <div class="latest__block-date"><?php the_field('bp-date') ?></div>
              </div>

            <?php
            }

            wp_reset_postdata(); // сброс
            ?>
          </div>
          <a class="latest__more" href="<?php echo get_permalink(63); ?>">READ MORE</a>
        </div>
      </div>
    </section>
  </div>
  <?php
  get_footer();
  ?>