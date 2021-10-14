<div class="wrapper">
    <div class="main">
      <div class="container line-container">
        <div class="line-outer"><span class="line"></span> <span class="line"></span> <span class="line"></span> <span
            class="line"></span></div>
      </div>
      <section class="watch">
				<a class="watch__back" href="<?php echo get_permalink(68) ?>">
					<svg class="watch__back-img">
            <use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/img/sprite.svg#arrow-back"></use>
          </svg> Back
				</a>
        <div class="container">
          <div class="watch__inner">
            <div class="watch__img-outer"><img class="watch__img" src="<?php the_field('good-bg'); ?>" alt="img"></div>
            <div class="watch__info">
              <h1 class="watch__title"><?php the_title(); ?></h1>
              <div class="watch__subtitle"><?php the_field('good-subtitle'); ?></div>
              <div class="watch__price"><?php the_field('good-price'); ?>$</div>
							<a class="watch__link" href="<?php echo get_permalink(71) ?>">Buy</a>
            </div>
          </div>
        </div>
      </section>
    </div>