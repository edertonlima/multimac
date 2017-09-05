<article class="post">
	<header class="header-post" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/segmentos/cabecario.jpg');">
		<div class="container">
			<h2><?php the_title(); ?></h2>
		</div>
	</header>

	<div class="container">
		<span class="subtitulo margin-top margin-bottom">Seja Multi e tenha em suas mãos o controle completo de sua empresa de forma simples e organizada.</span>

		<div class="passos">
			<p>Aprenda em poucos passos como:</p>
			<ul class="itens">
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico_passos-seguimentos.png" alt="Agilizar a rotina de seu trabalho">
					<span>Agilizar a rotina de seu trabalho.</span>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico_passos-seguimentos.png" alt="Facilitar administração de seu negócio">
					<span>Facilitar administração de seu negócio.</span>
				</li>
			</ul>
		</div>

		<div class="button-inicio">
			<span class="tit-button">Mãos à massa?</span>
			<a href="javascript:" title="Solicite Começar" class="button comecar next-etapa" rel="#equipamentos"><span>Começar</span></a>
		</div>
	</div>

	<section class="box-content box-etapas azul" id="equipamentos">
		<div class="container">

			<h2>Equipamentos</h2>
			<p class="sub-tit center">Os equipamentos são como os ingredientes de um bolo, se eles não forem bons, dificilmente você terá um bolo gostoso e de qualidade para oferecer. Por isso, trabalhamos com os melhores fornecedores de equipamentos do mercado.</p>

			<span class="subtitulo azul-petroleo center margin-top">Fique à vontade para conferir nossa linha de produtos seletos para a automação da sua padoca!</span>

			<div class="slide-item-cor slide-item">
				
					<?php //foreach ($produto['rejunte-piso'] as $rejunte){ 
						for($i=0; $i<20; $i++){ ?>
						<div class="item">
							<a href="javascript:">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico_equipamentos.png" alt="Terminais de Consulta">
								<span>Terminais de Consulta</span>
							</a>
						</div>
					<?php } ?>
				
			</div>

			<div class="button-etapa">
				<span class="tit-button">Se preferir, avance para</span>
				<a href="javascript:" title="Próxima etapa" class="button comecar next-etapa" rel="#sistemas"><span>Próxima etapa</span></a>
			</div>

		</div>
	</section>

	<section class="box-content box-etapas sistemas" id="sistemas">
		<div class="container">

			<h2>Sistemas</h2>

			<span class="subtitulo center margin-bottom margin-top-mini">Nossos sistemas são como o fermento, com eles seu negócio tem tudo para crescer!</span>

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
			<span class="subtitulo center margin-top-mini">Assim como uma boa padaria, estaremos sempre prontos para atendê-lo! ;)</span>
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

			<span class="subtitulo center">Agora você já sabe que temos a solução completa para automação da sua padaria!<br>Transforme sua empresa em um grande negócio! Seja Multi!</span>

			<span class="subtitulo center destaque">Acerte a mão e não perca essa fornada!</span>

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