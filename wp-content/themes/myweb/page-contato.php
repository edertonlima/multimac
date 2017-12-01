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

				<?php
					if(get_field('telefone','option')){ ?>
						<i class="fa fa-phone" aria-hidden="true"></i><span><?php the_field('telefone','option'); ?></span>
					<?php }

					if(get_field('celular','option')){ ?>
						<i class="fa fa-mobile" aria-hidden="true"></i><span><?php the_field('celular','option'); ?></span>
					<?php }

					if(get_field('whatsapp','option')){ ?>
						<i class="fa fa-whatsapp" aria-hidden="true"></i><span><?php the_field('whatsapp','option'); ?></span>
					<?php }
				?>
			</div>
		</div>
	</section>

	<section class="box-content cinza contato">
		<div class="container">
			<div class="row">
				
				<div class="col-7">
					<form class="contato" id="contato">
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
							<p class="msg center"></p>
						</fieldset>

						<fieldset>
							<button class="btn enviar">ENVIAR</button>
						</fieldset>
					</form>
				</div>	
				<div class="col-5 mapa">
					<h5>Como chegar</h5>

					<?php if(get_field('mapa','option')){
						the_field('mapa','option');
					} ?>
				</div>	

			</div>
		</div>
	</section>

<?php get_footer(); ?>

<script type="text/javascript">
	jQuery('form#contato').submit(function(event){
		jQuery('form#contato .enviar').html('ENVIANDO').prop( "disabled", true );
		jQuery('form#contato .msg').removeClass('erro ok').html('');
		var nome = jQuery('#nome').val();
		var empresa = jQuery('#empresa').val();
		var email = jQuery('#email').val();
		var telefone = jQuery('#telefone').val();
		var mensagem = jQuery('#mensagem').val();
		var para = '<?php the_field('email', 'option'); ?>';
		var nome_site = '<?php the_field('titulo', 'option'); ?>';

		var enviar = true;
		if(nome == ''){
			jQuery('#nome').parent().addClass('erro');
			enviar = false;
		}

		if(email == ''){
			jQuery('#email').parent().addClass('erro');
			enviar = false;
		}

		if(telefone == ''){
			jQuery('#telefone').parent().addClass('erro');
			enviar = false;
		}

		if(mensagem == ''){
			jQuery('#mensagem').parent().addClass('erro');
			enviar = false;
		}

		if(enviar){
			jQuery.getJSON("<?php echo get_template_directory_uri(); ?>/mail.php", { nome:nome, email:email, empresa: empresa, telefone:telefone, mensagem:mensagem, para:para, nome_site:nome_site }, function(result){		
				if(result=='ok'){
					resultado = 'E-mail enviado com sucesso! Obrigado.';
					classe = 'ok';
				}else{
					resultado = result;
					classe = 'erro';
				}
				jQuery('form#contato .msg').addClass(classe).html(resultado);
				jQuery('form#contato').trigger("reset");
				jQuery('form#contato .enviar').html('ENVIAR').prop( "disabled", false );
			});
		}else{
			jQuery('form#contato .msg').addClass('erro').html('Todos os campos são obrigatórios.');
			jQuery('form#contato .enviar').html('ENVIAR').prop( "disabled", false );
		}

		return false;
	});

	jQuery('input, textarea').change(function(){
		if(jQuery(this).parent().hasClass('erro')){
			jQuery(this).parent().removeClass('erro');
		}
	});

</script>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/maskedinput.js"></script>
<script type="text/javascript">
	jQuery(function($){
	   $("#telefone").mask("(99) 9999-9999?9");
	});
</script>