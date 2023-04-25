<?php get_header(); ?>

<?php the_archive_title(); ?>

<ul class="jobs-listing">
	<?php if ( have_posts() ) : ?>

		<?php while( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/post', 'item' ); ?>

		<?php endwhile; ?>

		<?php posts_nav_link(); ?>

	<?php endif; ?>

</ul>

<?php get_footer(); ?>