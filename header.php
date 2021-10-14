<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="shortcut icon" href="<?php echo bloginfo("template_url"); ?>/assets/favicon.png" type="image/png">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="theme-color" content="#111111">
  <title><?php bloginfo('name'); ?></title>
  <?php
  wp_head();
  ?>
</head>

<body>
  <section class="sidebar">
    <div class="sidebar__inner">
      <a class="sidebar__logo-outer" href="<?php echo get_home_url() ?>">
        <!-- <?php the_custom_logo(); ?> -->
        <img class='sidebar__logo' alt='logo' src='<?php
                                                    $custom_logo__url = wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'full');
                                                    // выводим
                                                    echo $custom_logo__url[0];
                                                    ?>'>
      </a>
      <button class="sidebar__menu-open"></button>
      <nav class="sidebar__menu-outer">
        <button class="sidebar__menu-close"></button>

        <?php

        wp_nav_menu( [
          'menu'            => 'Main',              // (string) Название выводимого меню (указывается в админке при создании меню, приоритетнее 
          // чем указанное местоположение theme_location - если указано, то параметр theme_location игнорируется)
          'container'       => false,            // (string) id контейнера (div тега)
          'menu_class'      => 'sidebar__menu',      // (string) id самого меню (ul тега)
          'echo'            => true,            // (boolean) Выводить на экран или возвращать для обработки
          'fallback_cb'     => 'wp_page_menu',
          'items_wrap'      => '<ul class="sidebar__menu">%3$s</ul>',
          'depth'           => 1,
        ]);

        ?>

      </nav>
    </div>
  </section>