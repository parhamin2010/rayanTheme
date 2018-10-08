<?php
/**
 * The main template file
 *
 * @package MosaferSalam
 * @subpackage MosaferSalam_Theme
 * @since MosaferSalam_Theme 1.0
 */
get_header(); ?>
<?php if(have_posts()): ?>

	<?php
	// Start the loop.
	while(have_posts()): the_post();

		/*
		 * Include the Post-Format-specific template for the content.
		 * If you want to override this in a child theme, then include a file
		 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
		 */
		get_template_part('content', get_post_format());

		// End the loop.
	endwhile;

// If no content, include the "No posts found" template.
else:
//	get_template_part('content', 'none');
	get_template_part('content', 'page');
endif;
?>
<?php get_footer(); ?>
