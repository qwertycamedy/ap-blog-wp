<div class="wrapper">
    <div class="main">
      <div class="container line-container">
        <div class="line-outer"><span class="line"></span> <span class="line"></span> <span class="line"></span> <span
            class="line"></span></div>
      </div>
      <section class="jewerly">
				<a class="jewerly__back" href="<?php echo get_permalink(66) ?>">
					<svg class="jewerly__back-img">
            <use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/img/sprite.svg#arrow-back"></use>
          </svg> Back
				</a>
        <div class="container">
          <div class="jewerly__inner">
            <div class="jewerly__img-outer"><img class="jewerly__img" src="<?php the_field('good-bg'); ?>" alt="img"></div>
            <div class="jewerly__info">
              <h1 class="jewerly__title"><?php the_title(); ?></h1>
              <div class="jewerly__subtitle"><?php the_field('good-subtitle'); ?></div>
              <div class="jewerly__price"><?php the_field('good-price'); ?>$</div>
							<a class="jewerly__link" href="<?php echo get_permalink(71) ?>">Buy</a>
            </div>
          </div>
        </div>
      </section>
    </div>