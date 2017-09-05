<?php get_header(); ?>

	<section class="box-content seguimentos">


		<?php
			while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content-seguimentos' ); ?>

			<?php endwhile;
		?>


	</section>

<?php get_footer(); ?>