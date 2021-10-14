<footer class="footer">
  <div class="container">
    <div class="footer__inner">
      <a class="footer__logo-outer" href="<?php echo get_home_url() ?>">
        <!-- <?php the_custom_logo(); ?> -->
        <img class='footer__logo' alt='logo' src='<?php
                                                  $custom_logo__url = wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'full');
                                                  // выводим
                                                  echo $custom_logo__url[0];
                                                  ?>'>
      </a>
      <div class="footer__form-outer">
        <h4 class="footer__form-title">Subscribe to our Newsletter</h4>
        <div class="footer__form">
          <?php echo do_shortcode('[contact-form-7 id="49" title="форма подвала"]'); ?>
        </div>
      </div>
      <div class="footer__copyright">Copyright © 2021, AP BLOG. All Rights Reserved.</div>
      <ul class="footer__social">
        <li class="footer__social-item"><a class="footer__social-link" href="<?php the_field('insta'); ?>" target="_blank"><svg class="footer__social-img">
              <use xlink:href="<?php echo bloginfo("template_url"); ?>/assets/img/sprite.svg#ig"></use>
            </svg></a></li>
        <li class="footer__social-item"><a class="footer__social-link" href="<?php the_field('facebook'); ?>" target="_blank"><svg class="footer__social-img">
              <use xlink:href="<?php echo bloginfo("template_url"); ?>/assets/img/sprite.svg#fb"></use>
            </svg></a></li>
        <li class="footer__social-item"><a class="footer__social-link" href="<?php the_field('linkedin'); ?>" target="_blank"><svg class="footer__social-img">
              <use xlink:href="<?php echo bloginfo("template_url"); ?>/assets/img/sprite.svg#in"></use>
            </svg></a></li>
      </ul>
    </div>
  </div>
</footer>
</div>

<?php
wp_footer();
?>
</body>

</html>