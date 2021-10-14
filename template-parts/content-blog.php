<div class="wrapper">
	<div class="main">
		<div class="container line-container">
			<div class="line-outer"><span class="line"></span> <span class="line"></span> <span class="line"></span> <span class="line"></span></div>
		</div>
		<section class="banner blog-inner-banner">
			<img class="banner__bg" src="<?php the_field('bp-img'); ?>" alt="img">
			<a class="jewerly__back" href="<?php echo get_permalink(63) ?>" 
			style="<?php 
			
				$field = get_field('bp-text-color');

				if ($field == 'dark') {
					?>
						color: #6A6A6A
					<?php 
				}

			?>">
				<svg class="jewerly__back-img">
					<use xlink:href="<?php echo bloginfo("template_url"); ?>/assets/img/sprite.svg#arrow-back"
					style="<?php 
			
			$field = get_field('bp-text-color');

			if ($field == 'dark') {
				?>
					fill: #6A6A6A
				<?php
			}

		?>"></use>
				</svg> Back
			</a>
			<div class="container">
				<div class="banner__inner">
					<h1 class="banner__title"
					style="<?php 
			
					$field = get_field('bp-text-color');

						if ($field == 'dark') {
							?>
								color: #6A6A6A
							<?php
						}

					?>"><?php the_title(); ?></h1>
					<div class="banner__date" 
					style="<?php 
					
						$field = get_field('bp-text-color');

						if ($field == 'dark') {
							?>
								color: #6A6A6A
							<?php
						} elseif($field == 'light') {
							?>
							
							color: #ffffff

							<?php
						}

					?>"><?php the_field('bp-date'); ?></div>
					<a class="banner__down" href="#bii">
						<svg class="banner__down-img">
							<use xlink:href="<?php bloginfo('template_url'); ?>/assets/img/sprite.svg#blog-inner-down"></use>
						</svg>
					</a>
				</div>
			</div>
		</section><!-- BII - аббревиатура от blog-inner-info -->
		<section class="BII" id="bii">
			<h5 class="hidden-title">title</h5>
			<div class="container">
				<div class="BII__inner">
					<?php the_field('blog-post-info'); ?>
					<div class="BII__share">
						<div class="BII__share-title">Share</div>
						<a class="BII__share-link" href="https://www.instagram.com/?url=https://www.drdrop.co/<?php echo get_permalink(); ?>" target="_blank">
							<svg class="BII__share-link-img">
								<use xlink:href="<?php echo bloginfo('template_url') ?>/assets/img/sprite.svg#ig"></use>
							</svg>
						</a>
						<a class="BII__share-link" href="https://www.facebook.com/sharer.php?u=<?php echo get_permalink(); ?>" target="_blank">
							<svg class="BII__share-link-img">
								<use xlink:href="<?php echo bloginfo('template_url') ?>/assets/img/sprite.svg#fb"></use>
							</svg>
						</a>
						<a class="BII__share-link" href="https://www.linkedin.com/sharing/share-offsite/?url={<?php echo get_permalink(); ?>}" target="_blank">
							<svg class="BII__share-link-img">
								<use xlink:href="<?php echo bloginfo('template_url') ?>/assets/img/sprite.svg#in"></use>
							</svg>
						</a>
					</div>
				</div>
			</div>
		</section>
	</div>