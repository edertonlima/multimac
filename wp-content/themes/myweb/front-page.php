<?php get_header(); ?>

<!-- slide -->
<section class="box-content box-slide">
	<div class="slide">
		<div class="controle-slide">
			<a class="left" href="#slide" role="button" data-slide="prev"></a>
			<a class="right" href="#slide" role="button" data-slide="next"></a>
		</div>
		<div class="carousel slide" data-ride="carousel" data-interval="1000000" id="slide">

			<div class="carousel-inner" role="listbox">

				<?php if( have_rows('slide_home','option') ):
					$slide = 0;
					while ( have_rows('slide_home','option') ) : the_row();

						if(get_sub_field('imagem_slideHome','option')){
							$slide = $slide+1; ?>

							<div class="item <?php if($slide == 1){ echo 'active'; } ?>" style="background-image: url('<?php the_sub_field('imagem_slideHome','option'); ?>');">

								<div class="container-slide">
									<?php if(get_sub_field('titulo_slideHome','option')){ ?>
										<h2><?php the_sub_field('titulo_slideHome','option'); ?></h2>
									<?php } ?>

									<?php if(get_sub_field('descricao_slideHome','option')){ ?>
										<p><?php the_sub_field('descricao_slideHome','option'); ?></p>
									<?php } ?>

									<?php if(get_sub_field('link_slideHome','option')){ 

										if(get_sub_field('titulo_url_slideHome','option')){ 
											$txt_link = get_the_sub_field('titulo_url_slideHome','option');
										}else{ 
											$txt_link = 'Clique Aqui'; }
										 ?>

										<a href="<?php the_sub_field('link_slideHome','option'); ?>" title="<?php echo $txt_link; ?>" class="button button-slide"><span><?php echo $txt_link; ?></span></a>

									<?php } ?>									
								</div>

							</div>

						<?php }

					endwhile;
				endif; ?>

			</div>

			<ol class="carousel-indicators">
				
				<?php for($i=0; $i<$slide; $i++){ ?>
					<li data-target="#slide" data-slide-to="<?php echo $i; ?>" class="<?php if($i == 0){ echo 'active'; } ?>"></li>
				<?php } ?>
				
			</ol>

		</div>
	</div>
</section>

<section class="box-content box-segmentos cinza">
	<div class="container">
		
		<h2>Segmentos</h2>
		<p class="sub-tit center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam euismod eget mi at lobortis.<br>Quisque ullamcorper felis vestibulum dictum.</p>

		<ul class="list-segmentos">
			<?php /*<li class="cor1"><a href="javascript:" title="Supermercados"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/segmentos/ico-supermercado.png" alt="Supermercados"><h3>Supermercados</h3></a></li>
			<li class="cor2"><a href="javascript:" title="Bares"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/segmentos/ico-bares.png" alt="Bares"><h3>Bares</h3></a></li>
			<li class="cor3"><a href="javascript:" title="Mercearias"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/segmentos/ico-mercearias.png" alt="Mercearias"><h3>Mercearias</h3></a></li> */?>
			<li class="cor1"><a href="<?php echo get_home_url(); ?>/seguimentos/padarias" title="Padarias"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/segmentos/ico-padarias.png" alt="Padarias"><h3>Padarias</h3></a></li>
			<?php /*<li class="cor2"><a href="javascript:" title="Delivery"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/segmentos/ico-default.png" alt="Delivery"><h3>Delivery</h3></a></li>
			<li class="cor3"><a href="javascript:" title="Casa de Carnes"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/segmentos/ico-default.png" alt="Casa de Carnes"><h3>Casa de Carnes</h3></a></li>
			<li class="cor1"><a href="javascript:" title="Fast Food"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/segmentos/ico-default.png" alt="Fast Food"><h3>Fast Food</h3></a></li>
			<li class="cor2"><a href="javascript:" title="Calçados e Confecções"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/segmentos/ico-default.png" alt="Calçados e Confecções"><h3>Calçados e Confecções</h3></a></li>*/?>
		</ul>

	</div>
</section>

<section class="box-content box-suporte cinza border">
	<div class="container">
		
		<h2>Suporte Técnico Especializado</h2>

		<img class="ico_suporte" src="<?php echo get_template_directory_uri(); ?>/assets/images/ico_suporte.png">

		<p class="sub-tit center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam euismod eget mi ullam euismod eget mi att<br>lobortis Quisque ullamcorper felis vestibulum dictum amet, consectetur adipiscinullam. <a href="javascript:" title="Leia mais">Leia mais</a></p>

		<a href="javascript:" title="Solicite Ajuda" class="button ajuda"><span>Solicite Ajuda</span></a>

	</div>
</section>

<section class="box-content box-sistemas cinza" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/sistemas/bg_suporte.jpg');">
	<div class="container">
		
		<h2>Sistemas</h2>
		<p class="sub-tit center">Lorem ipsum dolor sit amet, consectetur adipiscing Nullam euismod eget mi ullam euismod eget mi att rtisisque ullamcorper felis vestibul.</p>

		<a href="javascript:" title="Clique Aqui" class="button btn-sistemas"><span>Clique Aqui</span></a>

	</div>
</section>

<section class="box-content box-blog cinza">
	<div class="container">
		
		<ul class="list-blog">
			<li class="item-blog">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/img-blog1.jpg" alt="">
				<div class="cont-blog">
					<h3><a href="javascript:" title="Lorem Ipsum Dolor Sit Amet Faeva Coqsi">Lorem Ipsum Dolor Sit Amet Faeva Coqsi</a></h3>
					<p>Lorem ipsum dolor sit amet, consect etur adipiscing elit nullam euismod eget mi ulla. <a href="javascript;" title="Leia mais">Leia mais</a></p>
				</div>
			</li>

			<li class="item-blog">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/img-blog1.jpg" alt="">
				<div class="cont-blog">
					<h3><a href="javascript:" title="Lorem Ipsum Dolor Sit Amet Faeva Coqsi">Lorem Ipsum Dolor Sit Amet Faeva Coqsi</a></h3>
					<p>Lorem ipsum dolor sit amet, consect etur adipiscing elit nullam euismod eget mi ulla. <a href="javascript;" title="Leia mais">Leia mais</a></p>
				</div>
			</li>

			<li class="item-blog">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/img-blog1.jpg" alt="">
				<div class="cont-blog">
					<h3><a href="javascript:" title="Lorem Ipsum Dolor Sit Amet Faeva Coqsi">Lorem Ipsum Dolor Sit Amet Faeva Coqsi</a></h3>
					<p>Lorem ipsum dolor sit amet, consect etur adipiscing elit nullam euismod eget mi ulla. <a href="javascript;" title="Leia mais">Leia mais</a></p>
				</div>
			</li>
		</ul>

	</div>
</section>

<?php get_footer(); ?>

<script type="text/javascript">
	jQuery(document).ready(function(){	

	jQuery('.container-slide').each(function(){
		var width = jQuery(this).width();
		width = width+100;
		width = '-'+width+'px';
		jQuery(this).css('margin-left',width);
	});  

		// FORM
		/*jQuery(".enviar").click(function(){
			jQuery('.enviar').html('ENVIANDO').prop( "disabled", true );
			jQuery('.msg-form').removeClass('erro ok').html('');
			var nome = jQuery('#nome').val();
			var email = jQuery('#email').val();
			var telefone = jQuery('#telefone').val();
			var mensagem = jQuery('#mensagem').val();
			var para = '<?php the_field('email', 'option'); ?>';
			var nome_site = '<?php bloginfo('name'); ?>';

			if(email!=''){
				jQuery.getJSON("<?php echo get_template_directory_uri(); ?>/mail.php", { nome:nome, email:email, telefone:telefone, mensagem:mensagem, para:para, nome_site:nome_site }, function(result){		
					if(result=='ok'){
						resultado = 'Enviado com sucesso! Obrigado.';
						classe = 'ok';
					}else{
						resultado = result;
						classe = 'erro';
					}
					jQuery('.msg-form').addClass(classe).html(resultado);
					jQuery('.news form').trigger("reset");
					jQuery('.enviar').html('CADASTRAR').prop( "disabled", false );
				});
			}else{
				jQuery('.msg-form').addClass('erro').html('Por favor, digite um e-mail válido.');
				jQuery('.enviar').html('CADASTRAR').prop( "disabled", false );
			}
		});*/

	});
</script>