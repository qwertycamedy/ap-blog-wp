<?php

/*
Template Name: Контакты
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
    <section class="contacts">
      <h5 class="hidden-title">title</h5>
      <div class="container">
        <div class="contacts__inner"><img src="<?php echo bloginfo("template_url"); ?>/assets/img/contacts-map.svg" alt="img" class="contacts__map-img">
          <div class="contacts__ct-form">
            <div class="contacts__ct-outer">
              <div class="contacts__ct">Alexey Prigozhny</div>
              <div class="contacts__ct">Prague, Czech</div>
              <div class="contacts__ct">+7 (915) 3337012</div>
              <div class="contacts__ct">email@gmail.com</div>
            </div>
            <div class="contacts__form">
              <?php echo do_shortcode('[contact-form-7 id="92" title="форма контактов"]') ?>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <?php
  get_footer();
  ?>