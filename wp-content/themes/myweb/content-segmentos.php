<article class="post">
	<header class="header-post" style="background-image: url('<?php the_field('img_topo'); ?>');">
		<div class="container">
			<h2><?php the_title(); ?></h2>
		</div>
	</header>

	<div class="container">
		<span class="subtitulo margin-top margin-bottom"><?php the_excerpt(); ?></span>

		<div class="passos">
			<p>Aprenda em poucos passos como:</p>
			<ul class="itens">

				<?php if( have_rows('aprenda_segmentos') ):
					while ( have_rows('aprenda_segmentos') ) : the_row(); ?>

						<li>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico_passos-seguimentos.png" alt="<?php the_sub_field('titulo'); ?>">
							<span><?php the_sub_field('titulo'); ?></span>
						</li>

					<?php endwhile;
				endif; ?>

			</ul>
		</div>

		<div class="button-inicio">
			<span class="tit-button"><?php the_field('tit_passos_segmentos'); ?></span>
			<a href="javascript:" title="Solicite Começar" class="button comecar next-etapa" rel="#equipamentos"><span>Começar</span></a>
		</div>
	</div>

	<section class="box-content box-etapas azul" id="equipamentos">
		<div class="container">

			<h2>Equipamentos</h2>
			<p class="sub-tit center"><?php the_field('texto_principal_segmentos'); ?></p>

			<span class="subtitulo azul-petroleo center margin-top"><?php the_field('texto_comp_segmentos'); ?></span>

			

			<?php
				$categorias_equipamentos = get_field('equipamentos_segmentos');

				if( $categorias_equipamentos ): ?>
					<div class="slide-item-cor slide-item">

						<?php foreach( $categorias_equipamentos as $categoria): // variable must be called $post (IMPORTANT) ?>
							<?php //setup_postdata($equipamento);
							//$term = get_term( $categoria, 'equipamentos_taxonomy' ); //var_dump($categoria); ?>

							<div class="item">
								<a href="<?php echo get_term_link($categoria->term_id); ?>">
									<img src="<?php the_field('ico_segmentos','equipamentos_taxonomy_'.$categoria->term_id); ?>" alt="<?php echo $categoria->name; ?>">
									<span><?php echo $categoria->name; ?></span>
								</a>
							</div>

						<?php endforeach; ?>

						<?php //wp_reset_postdata(); ?>

					</div>
				<?php endif;
			?>

			<div class="button-etapa">
				<span class="tit-button">Se preferir, avance para</span>
				<a href="javascript:" title="Próxima etapa" class="button comecar next-etapa" rel="#sistemas"><span>Próxima etapa</span></a>
			</div>

		</div>
	</section>

	<section class="box-content box-etapas sistemas" id="sistemas">
		<div class="container">

			<h2>Sistemas</h2>

			<span class="subtitulo center margin-bottom margin-top-mini"><?php the_field('texto_sistemas_segmentos'); ?></span>

			<div class="row item-sistema">
				<div class="col-6">
					<span class="tit-sistema">Entre seus principais benefícios estão</span>
					<ul>
						<li>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/segmentos/ico-sistemas-1.png" alt="">
							<span>Ganho na Produtividade</span>
						</li>

						<li>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/segmentos/ico-sistemas-2.png" alt="">
							<span>Agilidade no Atendimento</span>
						</li>

						<li>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/segmentos/ico-sistemas-3.png" alt="">
							<span>Melhoria no Processo</span>
						</li>
					</ul>
				</div>

				<div class="col-6">
					<span class="tit-sistema">Se desejar, conheça cada um de nossos<br>sistemas que podem te ajudar.</span>
					<ul class="list-sistemas">
						<li>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/segmentos/img_sistema-1.png" alt="">
						</li>

						<li>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/segmentos/img_sistema-2.png" alt="">
						</li>
					</ul>
				</div>
			</div>

			<div class="button-etapa">
				<span class="tit-button">Se preferir, avance para</span>
				<a href="javascript:" title="Próxima etapa" class="button comecar next-etapa" rel="#suporte_tecnico"><span>Próxima etapa</span></a>
			</div>

		</div>
	</section>

	<section class="box-content box-etapas suporte azul" id="suporte_tecnico">
		<div class="container">

			<h2>Suporte Técnico</h2>
			<span class="subtitulo center margin-top-mini"><?php the_field('tit_ajuda_segmentos'); ?></span>
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/segmentos/img_suporte.png" alt="Suporte Técnico" class="img-suporte">

			<div class="content-txt">
				<p>Um dos nossos principais diferenciais é o suporte técnico altamente especializado. Que te dará o suporte total desde a implantação dos equipamentos e sistemas.</p>
				<p>Temos sempre uma equipe preparada à sua disposição!</p>
			</div>

			<div class="button-etapa">
				<span class="tit-button">Se preferir, avance para</span>
				<a href="javascript:" title="Próxima etapa" class="button comecar next-etapa" rel="#parabens"><span>Próxima etapa</span></a>
			</div>

		</div>
	</section>

	<section class="box-content box-etapas etapa-fim" id="parabens">
		<div class="container">

			<h2 class="ico tit-grande">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/segmentos/ico-padarias_det.png" alt="Padarias">
				Parabéns!
			</h2>

			<span class="subtitulo center"><?php the_field('tit_ultimopasso_segmentos'); ?></span>

			<span class="subtitulo center destaque"><?php the_field('chamada_ultimopasso_segmentos'); ?></span>

			<div class="button-etapa">
				<span class="tit-button">Escolha uma das opções abaixo</span>
				<a href="javascript:" title="Solicitar Orçamento" class="button comecar"><span>Solicitar Orçamento</span></a>
				<a href="javascript:" title="Agendar Visita" class="button comecar"><span>Agendar Visita</span></a>
				<a href="javascript:" title="Tirar Dúvidas" class="button comecar"><span>Tirar Dúvidas</span></a>
			</div>

		</div>
	</section>
</article>

<?php /*
<article class="post">
	<header>
		<?php $imagem = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), '' ); 
		if($imagem[0]){ ?>
			<img src="<?php echo $imagem[0]; ?>" alt="<?php the_title(); ?>" class="img-release">
		<?php }	?>
		<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
		<div class="date"><?php the_date(); ?></div>
	</header>

	<p><?php the_content(); ?></p>

	<div class="excerpt">
		<?php the_excerpt() ?>
	</div>
</article>
*/ ?>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>
<script>
	
	jQuery.noConflict();
	var owl = jQuery('.slide-item');
	owl.owlCarousel({
		margin: 20,
		autoWidth:true,
		nav:true,
		loop: false
	});

	jQuery('.next-etapa').click(function(){
		next_etapa = jQuery(this).attr('rel');

		jQuery('html, body').animate({
			scrollTop: jQuery(next_etapa).offset().top
		}, 1000);
	}); 

</script>