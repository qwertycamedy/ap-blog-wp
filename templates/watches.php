<?php

/*
Template Name: Часы
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
    <section class="banner second-page second-page-watches">
      <div class="container">
        <div class="banner__inner">
          <h1 class="banner__title title"><?php the_field('page-title'); ?></h1>
        </div>
      </div>
    </section>
    <section class="watches">
      <div class="container">
        <div class="watches__inner">
          <div class="watches__main-card">
            <div class="watches__main-card-info">
              <div class="watches__main-card-suptitle"><?php the_field('bestseller-suptitle'); ?></div>
              <h3 class="watches__main-card-title"><?php the_field('bestseller-title'); ?></h3>
              <div class="watches__main-card-price"><?php the_field('bestseller-price'); ?>
                <span class="watches__main-card-price-span"><?php the_field('bestseller-old-price'); ?></span>
              </div>
              <a class="watches__main-card-link" href="<?php echo get_permalink(71); ?>">Buy now</a>
            </div>
            <div class="watches__main-card-img-outer">
              <img class="watches__main-card-img" src="<?php the_field('bestseller-img'); ?>" alt="img">
            </div>
          </div>
          <div class="watches__card-outer">
            <?php
            // параметры по умолчанию
            $posts = get_posts(array(
              'numberposts' => 6,
              'category_name'    => 'watches-good-posts',
              'orderby'     => 'date',
              'order'       => 'DESC',
              'post_type'   => 'post',
              'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
            ));

            foreach ($posts as $post) {
              setup_postdata($post);
            ?>

              <div class="watches__card">
                <a class="watches__card-img-outer" href="<?php echo get_permalink(); ?>">
                  <img class="watches__card-img" src="<?php the_field('good-bg'); ?>" alt="img">
                </a>
                <a class="watches__card-title" href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
                <div class="watches__card-price"><?php the_field('good-price'); ?>$</div>
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
            'class'              => 'watches__page-pag-outer',  // class="" для nav элемента. С WP 5.5
          );

          ?>

          <!-- <div class="watches__page-pag-outer">
            <a class="watches__page-pag" href="#">1 </a>
            <a class="watches__page-pag" href="#">2 </a>
            <a class="watches__page-pag" href="#">3 </a>
            <a class="watches__page-pag" href="#">4 </a>
            <a class="watches__page-pag" href="#">5 </a>
            <a class="watches__page-pag" href="#">6 </a>
            <a class="watches__page-pag" href="#">7</a>
          </div> -->
        </div>
      </div>
    </section>
  </div>

  <?php
  get_footer();
  ?>