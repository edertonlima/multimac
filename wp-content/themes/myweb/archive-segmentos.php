<?php get_header(); ?>

	<section class="box-content seguimentos">
		<header class="header-post" style="background-image: url('<?php the_field('img_topo_segmentos','option'); ?>');">
			<div class="container">
				<h2>Segmentos</h2>
			</div>
		</header>

		<?php if(get_field('descricao_topo_segmentos','option')){ ?>
			<div class="container">
				<span class="subtitulo margin-top margin-bottom"><?php the_field('descricao_topo_segmentos','option'); ?></span>
			</div>
		<?php } ?>
	</section>

	<section class="box-content no-padding-top box-segmentos">
		<div class="container">
			
			<ul class="list-segmentos">

				<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'content-segmentos-list' );

					endwhile;
				?>

			</ul>

		</div>
	</section>

<?php get_footer(); ?>