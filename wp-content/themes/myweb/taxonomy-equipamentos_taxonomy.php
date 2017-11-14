<?php get_header(); ?>

	<?php $categoria = wp_get_post_terms( $post->ID, $post->post_type.'_taxonomy' ); ?>
	<?php $post_type = get_post_type_object( $post->post_type ); ?>

	<section class="box-content seguimentos list-equipamentos">		
		<header class="header-post" style="background-image: url('<?php the_field('img_topo',$categoria[0]->taxonomy.'_'.$categoria[0]->term_id); ?>');">
			<div class="container">
				<h2><?php echo single_term_title(); ?></h2>
			</div>
		</header>

		<span class="subtitulo margin-top margin-bottom">
			<div class="container">
				<?php echo category_description($categoria->term_id); ?>
			</div>
		</span>
	</section>

	<section class="box-content cinza no-padding-top list-equipamentos">
		<div class="container">
			
			<div class="row list-item">
				<?php
					while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'content-equipamentos-list' ); ?>

					<?php endwhile;
				?>
			</div>
		</div>
	</section>

<?php get_footer(); ?>