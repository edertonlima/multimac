<?php get_header(); ?>
	
	<?php $imagem = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), '' ); ?>

	<section class="box-content contato cinza">
		<header class="header-post <?php if($imagem[0] == ''){ echo 'bg-off'; } ?>" style="background-image: url('<?php echo $imagem[0]; ?>');">
			<div class="container">
				<h2>Contato</h2>
			</div>
		</header>

		<div class="tel-contato">
			<div class="container">
				<i class="fa fa-phone" aria-hidden="true"></i>
				<span>14 3879-8010</span>
				<i class="fa fa-whatsapp" aria-hidden="true"></i>
				<span>14 99631-4803</span>
			</div>
		</div>
	</section>

	<section class="box-content cinza contato">
		<div class="container">
			<div class="row">
				
				<div class="col-7">
					<form class="contato">
						<fieldset>
							<input type="text" name="nome" id="nome" placeholder="Nome">
						</fieldset>

						<fieldset>
							<input type="text" name="empresa" id="empresa" placeholder="Empresa">
						</fieldset>

						<fieldset>
							<input type="text" name="email" id="email" placeholder="E-mail">
						</fieldset>

						<fieldset>
							<input type="text" name="telefone" id="telefone" placeholder="DDD + telefone">
						</fieldset>

						<fieldset>
							<textarea name="mensagem" id="mensagem" placeholder="Mensagem"></textarea>
						</fieldset>

						<fieldset>
							<button class="btn enviar">Enviar</button>
						</fieldset>
					</form>
				</div>	
				<div class="col-5 mapa">
					<h5>Como chegar</h5>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3690.4811071129257!2d-49.05591328496335!3d-22.33545582334886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94bf677033f93df3%3A0x1bfa0d208be9f590!2sMultimac!5e0!3m2!1spt-BR!2sbr!4v1510936799396" frameborder="0" allowfullscreen></iframe>
				</div>	

			</div>
		</div>
	</section>

<?php get_footer(); ?>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/maskedinput.js"></script>
<script type="text/javascript">
	jQuery(function($){
	   $("#telefone").mask("(99) 9999-9999?9");
	});
</script>