<?php get_header(); ?>

	<section class="box-content seguimentos">


		<?php
			while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content-segmentos' ); ?>

			<?php endwhile;
		?>


	</section>

<?php get_footer(); ?>