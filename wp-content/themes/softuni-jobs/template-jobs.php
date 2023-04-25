<?php
/* Template Name: Display Jobs */
?>

<?php get_header(); ?>

<?php
$jobs_args = array(
	'post_type'			=> 'job',
	'post_status'		=> 'publish',
	'orderby'			=> 'date',
	'order'				=> 'ASC',
);

$jobs_query = new WP_Query( $jobs_args );
?>

<?php
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();

		the_content();
	}
}
?>

<ul class="jobs-listing">
	<?php if ( $jobs_query->have_posts() ) : ?>

		<?php while( $jobs_query->have_posts() ) : $jobs_query->the_post(); ?>

			<?php get_template_part( 'template-parts/job', 'item' ); ?>

		<?php endwhile; ?>

		<?php posts_nav_link(); ?>

	<?php endif; ?>

	<?php wp_reset_postdata(); ?>
</ul>

<?php get_footer(); ?>