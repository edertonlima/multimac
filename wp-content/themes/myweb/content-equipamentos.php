<?php get_header(); ?>

	<?php $categoria = wp_get_post_terms( $post->ID, $post->post_type.'_taxonomy' ); ?>
	<?php $post_type = get_post_type_object( $post->post_type ); ?>

	<section class="box-content seguimentos equipamentos">		
		<header class="header-post" style="background-image: url('<?php the_field('img_topo_equipamentos','option'); ?>');">
			<div class="container">
				<h2>Equipamentos</h2>
			</div>
		</header>
	</section>

	<section class="box-content cinza no-padding-top equipamentos">
		<div class="container">

			<a href="<?php echo get_category_link($categoria[0]->term_id); ?>" title="<?php echo $categoria[0]->name; ?>" class="cat-equipamento">
				<?php echo $categoria[0]->name; ?>
			</a>

			<div class="row">
				<div class="col-6">
					<ul class="galeria-equipamento">
						<li class="img-principal">
							<?php $imagem = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
							<?php $imagem2 = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), '' ); ?>
							<a href="<?php echo $imagem2[0]; ?>" class="fancybox" data-fancybox="galeria"><img src="<?php echo $imagem[0]; ?>"><i class="fa fa-search" aria-hidden="true"></i></a>
						</li>
						<?php 
						$galeria = get_field('galeria');
						if( $galeria ):
							foreach( $galeria as $imagem ): ?>
							<li><a href="<?php echo $imagem['url']; ?>" class="fancybox" data-fancybox="galeria"><img src="<?php echo $imagem['sizes']['thumbnail']; ?>"/></a></li>
						<?php endforeach; ?>
					<?php endif; ?>
					</ul>
				</div>	
				<div class="col-6">
					<h3><?php the_title(); ?></h3>
					<div class="resumo"><?php the_content(); ?></div>

					<?php if(get_field('assistencia_suporte')){ ?>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/assistencia_suporte.png">
					<?php } ?>

					<div class="botoes">
						<a href="javascript:" title="Solicitar Orçamento" class="button comecar orcamento"><span>Solicitar Orçamento</span></a>
						<a href="javascript:" title="Adicionar Favoritos" class="button comecar orcamento"><span><i class="fa fa-star-o" aria-hidden="true"></i> Adicionar Favoritos</span></a>
					</div>
				</div>

				<div class="content-equipamento">
					<div class="col-12">
						<h4>FICHA TÉCNICA</h4>
						<p><?php the_field('ficha_tecnica'); ?></p>
					</div>
				</div>
			</div>
			
		</div>
	</section>

<?php get_footer(); ?>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/fancybox/fancybox.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function() {		
		jQuery('.fancybox').fancybox();	
	});
</script>