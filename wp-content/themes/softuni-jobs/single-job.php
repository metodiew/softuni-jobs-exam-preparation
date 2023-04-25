<?php get_header(); ?>


<ul class="jobs-listing">
	<?php if ( have_posts() ) : ?>

		<?php while( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/job', 'item' ); ?>

		<?php endwhile; ?>

		<?php softuni_update_job_views_count( get_the_ID() ); ?>

	<?php endif; ?>

</ul>

<?php get_footer(); ?>