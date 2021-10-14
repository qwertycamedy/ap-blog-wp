<?php

/*
Template Name: Юверилные изделия
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
    <section class="banner second-page second-page-jewerlies">
      <div class="container">
        <div class="banner__inner">
          <h1 class="banner__title title"><?php the_field('page-title'); ?></h1>
        </div>
      </div>
    </section>
    <section class="jewerlies">
      <div class="container">
        <div class="jewerlies__inner">
          <div class="jewerlies__main-card">
            <div class="jewerlies__main-card-info">
              <div class="jewerlies__main-card-suptitle"><?php the_field('bestseller-suptitle'); ?></div>
              <h3 class="jewerlies__main-card-title"><?php the_field('bestseller-title'); ?></h3>
              <div class="jewerlies__main-card-price">
                <?php the_field('bestseller-price'); ?>
                <span class="jewerlies__main-card-price-span"><?php the_field('bestseller-old-price'); ?></span>
              </div>
              <a class="jewerlies__main-card-link" href="<?php echo get_permalink(71); ?>">Buy now</a>
            </div>
            <div class="jewerlies__main-card-img-outer"><img class="jewerlies__main-card-img" src="<?php the_field('bestseller-img'); ?>" alt="img"></div>
          </div>
          <div class="jewerlies__card-outer">
            <?php
            // параметры по умолчанию
            $posts = get_posts(array(
              'numberposts' => 6,
              'category_name'    => 'jewerly-good-posts',
              'orderby'     => 'date',
              'order'       => 'DESC',
              'post_type'   => 'post',
              'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
            ));

            foreach ($posts as $post) {
              setup_postdata($post);
            ?>

              <div class="jewerlies__card">
                <a class="jewerlies__card-img-outer" href="<?php echo get_permalink(); ?>">
                  <img class="jewerlies__card-img" src="<?php the_field('good-bg'); ?>" alt="img">
                </a>
                <a class="jewerlies__card-title" href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
                <div class="jewerlies__card-price"><?php the_field('good-price'); ?>$</div>
              </div>

            <?php
            }

            wp_reset_postdata(); // сброс
            ?>
          </div>

          <?php
          get_the_posts_pagination($args);

          $args = array(
            'show_all'           => false, // показаны все страницы участвующие в пагинации
            'end_size'           => 1,     // количество страниц на концах
            'mid_size'           => 1,     // количество страниц вокруг текущей
            'prev_next'          => true,  // выводить ли боковые ссылки "предыдущая/следующая страница".
            'prev_text'          => __('« Previous'),
            'next_text'          => __('Next »'),
            'add_args'           => false, // Массив аргументов (переменных запроса), которые нужно добавить к ссылкам.
            'add_fragment'       => '',     // Текст который добавиться ко всем ссылкам.
            'screen_reader_text' => __('Posts navigation'),
            'aria_label'         => __('Posts'), // aria-label="" для nav элемента. С WP 5.3
            'class'              => 'jewerlies__page-pag-outer',  // class="" для nav элемента. С WP 5.5
          );

          ?>
          <!-- <div class="jewerlies__page-pag-outer">
            <a class="jewerlies__page-pag" href="<?php get_permalink(); ?>">1 </a>
            <a class="jewerlies__page-pag" href="<?php get_permalink(); ?>">2 </a>
            <a class="jewerlies__page-pag" href="<?php get_permalink(); ?>">3 </a>
            <a class="jewerlies__page-pag" href="<?php get_permalink(); ?>">4 </a>
            <a class="jewerlies__page-pag" href="<?php get_permalink(); ?>">5 </a>
            <a class="jewerlies__page-pag" href="<?php get_permalink(); ?>">6 </a>
            <a class="jewerlies__page-pag" href="<?php get_permalink(); ?>">7</a>
          </div> -->
        </div>
      </div>
    </section>
  </div>

  <?php
  get_footer();
  ?>