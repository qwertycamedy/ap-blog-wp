<?php

/*
Template Name: Шаблон для страниц Ювелирных Изделий
Template Post Type: post, blog-post
*/

?>

<?php
get_header();
?>

		<?php
		while (have_posts()) :
			the_post();

			get_template_part('template-parts/content-jewerly', get_post_type());

		endwhile; // End of the loop.
		?>
		
<?php
get_footer();
?>