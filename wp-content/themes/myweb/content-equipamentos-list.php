<div class="col-4">
	<div class="content-equipamento">
		<?php $imagem = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
		<img src="<?php echo $imagem[0]; ?>" alt="<?php the_title(); ?>" class="img-list">
		<h3><?php the_title(); ?></h3>
		<?php the_excerpt(); ?>
		<a href="<?php the_permalink(); ?>" title="Ver mais" class="button ver-mais">Ver mais</a>
	</div>
</div>