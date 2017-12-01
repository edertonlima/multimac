<?php get_header(); ?>

	<?php $imagem = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), '' ); ?>

	<section class="box-content empresa-header">
		<header class="header-post <?php if($imagem[0] == ''){ echo 'bg-off'; } ?>" style="background-image: url('<?php echo $imagem[0]; ?>');">
			<div class="container">
				<h2><?php the_title(); ?></h2>
			</div>
		</header>
	</section>

	<section class="box-content cinza empresa">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<?php
					while ( have_posts() ) : the_post(); ?>
						<div class="cont-empresa-mini">
							<?php the_content(); ?>

							<?php if( have_rows('perguntas') ): ?>								
								<div class="perguntas">
									<?php while ( have_rows('perguntas') ) : the_row(); ?>

										<h2><?php the_sub_field('pergunta'); ?></h2>
										<p><?php the_sub_field('resposta'); ?></p>

									<?php endwhile; ?>
								</div>
							<?php endif; ?>

					<?php endwhile;
					?>
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>