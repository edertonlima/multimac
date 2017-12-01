	
	<footer class="footer">
		<div class="container">
			<div class="row">

				<div class="col-2">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_footer_multimac.png" alt="Multimac" class="logo-footer" />
					<ul>
						<li><a href="<?php echo get_home_url(); ?>/empresa" title="A Empresa" class="">A Empresa</a></li>
						<li><a href="<?php echo get_home_url(); ?>/contato" title="Contato" class="">Contato</a></li>
						<li class="separado"><a href="<?php echo get_home_url(); ?>/equipamentos" title="Equipamentos" class="">Equipamentos</a></li>
						<li><a href="<?php echo get_home_url(); ?>/sistemas" title="Sistemas" class="">Sistemas</a></li>
					</ul>
				</div>
				<div class="<?php if(get_field('email-newsletter','option')){ echo 'col-3'; }else{echo 'col-6'; } ?>">
					<?php if(get_field('horario_atendimento','option')){ ?>
						<div class="box-footer">
							<strong>Horário de atendimento</strong>
							<?php the_field('horario_atendimento','option'); ?>
						</div>
					<?php } ?>

					<div class="box-footer">

						<?php if( have_rows('perguntas',get_page_by_path('perguntas-frequentes')->ID) ):
							$pergunta = 0; ?>								
							<strong>Perguntas Frequentes</strong>
							<ul>								
								<?php while ( have_rows('perguntas',get_page_by_path('perguntas-frequentes')->ID) ) : the_row(); 
									$pergunta = $pergunta+1;
									if($pergunta < 4){ ?>
										<li><a href="<?php echo get_home_url(); ?>/perguntas-frequentes/" title="<?php the_sub_field('pergunta'); ?>">
											<?php the_sub_field('pergunta'); ?>
										</a></li>	
									<?php }
								endwhile; ?>
							</ul>
						<?php endif; ?>

					</div>
				</div>

				<?php if(get_field('email-newsletter','option')){ ?>
					<div class="col-3">
						<div class="box-footer">
							<strong>Newsletter</strong>
							<?php the_field('texto-newsletter','option'); ?>
						</div>
						<form id="newsletter">
							<fieldset>
								<input type="type" id="newsletter_nome" name="newsletter_nome" placeholder="Nome">
							</fieldset>

							<fieldset>
								<input type="type" id="newsletter_email" name="newsletter_email" placeholder="Email">
							</fieldset>
							<button type="submit" class="cadastro-news">Finalizar Cadastro</button>
						</form>
					</div>
				<?php } ?>

				<div class="col-4">
					<strong>Fale Conosco</strong>
					<div class="contato-footer">
						<?php
							if(get_field('telefone','option')){ ?>
								<span class="tel"><i class="fa fa-phone" aria-hidden="true"></i> <?php the_field('telefone','option'); ?></span>
							<?php }

							if(get_field('celular','option')){ ?>
								<span class="tel"><i class="fa fa-mobile" aria-hidden="true"></i> <?php the_field('celular','option'); ?></span>
							<?php }

							if(get_field('whatsapp','option')){ ?>
								<span class="tel"><i class="fa fa-whatsapp" aria-hidden="true"></i> <?php the_field('whatsapp','option'); ?></span>
							<?php }

							if(get_field('email','option')){ ?>
								<span class="tel email"> <?php the_field('email','option'); ?></span>
							<?php }
						?>						
					</div>

					<?php if(get_field('user_facebook','option')){ ?>
						<div class="fb-page" 
						data-href="https://www.facebook.com/<?php the_field('user_facebook','option'); ?>"
						data-width="380" 
						data-hide-cover="false"
						data-show-facepile="false"></div>
					<?php } ?>

				</div>				
			</div>
		</div>
	</footer>

	<div class="bg-modal" id="modal-favorito">
		<div class="box-modal">
			<div class="modal-conteudo">

				<i class="fa fa-times close-modal" aria-hidden="true"></i>
				<h2>Meus favoritos</h2>
				<p class="msg center"></p>

				<div class="list-modal">

					<?php
						if(isset($_SESSION['favoritos'])){
							if(isset($_SESSION['favoritos']['sistemas'])){
								if(count($_SESSION['favoritos']['sistemas']) > 0){ ?>

									<div class="list-sistemas">
										<h4>Sistemas</h4>
										<?php
											foreach ($_SESSION['favoritos']['sistemas'] as $key => $value) { ?>

												<div class="item-modal" id="<?php echo $value['id']; ?>">
													<div class="img-list-produto">
														<img src="<?php echo $value['imagem']; ?>" alt="">
													</div>
													<div class="content-produto">
														<h4><?php echo $value['nome']; ?></h4>
														<button class="remove-modal" type="button" item-id="<?php echo $value['id']; ?>" item-tipo="sistemas"><i class="fa fa-times-circle" aria-hidden="true"></i></button>
													</div>
												</div>
											<?php }
										?>
									</div>

								<?php }
							}

							if(isset($_SESSION['favoritos']['equipamentos'])){
								if(count($_SESSION['favoritos']['equipamentos']) > 0){ ?>

									<div class="list-equipamentos">
										<h4>Equipamentos</h4>
										<?php
											foreach ($_SESSION['favoritos']['equipamentos'] as $key => $value) { ?>

												<div class="item-modal" id="<?php echo $value['id']; ?>">
													<div class="img-list-produto">
														<img src="<?php echo $value['imagem']; ?>" alt="">
													</div>
													<div class="content-produto">
														<h4><?php echo $value['nome']; ?></h4>
														<button class="remove-modal" type="button" item-id="<?php echo $value['id']; ?>" item-tipo="equipamentos"><i class="fa fa-times-circle" aria-hidden="true"></i></button>
													</div>
												</div>
											<?php }
										?>
									</div>

								<?php }
							}
						}
					?>

				</div>

				<?php
					if((isset($_SESSION['favoritos'])) and (($_SESSION['favoritos']['sistemas']) or ($_SESSION['favoritos']['equipamentos']))){ ?>
						<div class="modal-vazio" style="display: none;">
							<i class="fa fa-star-o" aria-hidden="true"></i>
							Você ainda não adicionou nada em seus favoritos.
						</div>

						<a href="javascript:" class="button orcamento" title="Solicite um Orçamento">
							<span>Solicitar Orçamento</span>
						</a>
					<?php }else{ ?>
						<div class="modal-vazio">
							<i class="fa fa-star-o" aria-hidden="true"></i>
							Você ainda não adicionou nada em seus favoritos.
						</div>

						<a href="javascript:" class="button orcamento" title="Solicite um Orçamento" style="display: none;">
							<span>Solicitar Orçamento</span>
						</a>
					<?php }
				?>
			</div>
		</div>
	</div>

	<div class="bg-modal" id="modal-erro">
		<div class="box-modal">
			<div class="modal-conteudo">

				<i class="fa fa-times close-modal" aria-hidden="true"></i>
				<h2>Desculpe!</h2>
				<p class="msg center"></p>

			</div>
		</div>
	</div>

	<div class="bg-modal" id="modal-ok">
		<div class="box-modal">
			<div class="modal-conteudo">

				<i class="fa fa-times close-modal" aria-hidden="true"></i>
				<h2>Obrigado!</h2>
				<p class="msg center"></p>

			</div>
		</div>
	</div>

	<div class="bg-modal" id="modal-orcamento">
		<div class="box-modal">
			<div class="modal-conteudo">

				<i class="fa fa-times close-modal" aria-hidden="true"></i>
				<h2>Solicitar Orçamento</h2>
				<p class="msg center"></p>

				<form class="contato" id="orcamento">
					<fieldset>
						<input type="text" name="nome_orcamento" id="nome_orcamento" placeholder="Nome *">
					</fieldset>

					<fieldset>
						<input type="text" name="empresa_orcamento" id="empresa_orcamento" placeholder="Empresa">
					</fieldset>

					<fieldset>
						<input type="text" name="email_orcamento" id="email_orcamento" placeholder="E-mail *">
					</fieldset>

					<fieldset>
						<input type="text" class="telefone" name="telefone_orcamento" id="telefone_orcamento" placeholder="DDD + telefone *">
					</fieldset>

					<fieldset>
						<textarea name="mensagem_orcamento" id="mensagem_orcamento" placeholder="Mensagem"></textarea>
					</fieldset>

					<fieldset>
						<button class="button orcamento">ENVIAR</button>
					</fieldset>
				</form>

			</div>
		</div>
	</div>

</body>
</html>

<script type="text/javascript">
	var sistemas = <?php echo count($_SESSION['favoritos']['sistemas']); ?>;
	var equipamentos = <?php echo count($_SESSION['favoritos']['equipamentos']); ?>;

	jQuery(document).ready(function(){
		jQuery('.modal-orcamento-geral').click(function(){
			jQuery('#modal-orcamento').css('display','table');
		});

		jQuery('.close-modal').click(function(){
			jQuery(this).parents('.bg-modal').hide();
			jQuery('.msg').html('');
		});

		jQuery('#star-modal').click(function(){
			jQuery('#modal-favorito').css('display','table');
		});
	});

	jQuery(document).on('click', '.add-favorito', function(){
		id = jQuery(this).attr('item-id');
		tipo = jQuery(this).attr('item-tipo');
		nome = jQuery(this).attr('item-nome');
		imagem = jQuery(this).attr('item-imagem');
		jQuery.getJSON("<?php echo get_template_directory_uri(); ?>/add-favorito.php", { tipo: tipo, id: id, nome:nome, imagem:imagem }, function(result){		
			if(result=='ok'){
				item_modal = '';
				item_modal += '<div class="item-modal" id="'+id+'">';
					item_modal += '<div class="img-list-produto">';
						item_modal += '<img src="'+imagem+'" alt="">';
					item_modal += '</div>';
					item_modal += '<div class="content-produto">';
						item_modal += '<h4>'+nome+'</h4>';
						item_modal += '<button class="remove-modal" type="button" item-id="'+id+'" item-tipo="'+tipo+'"><i class="fa fa-times-circle" aria-hidden="true"></i></button>';
					item_modal += '</div>';
				item_modal += '</div>';

				if(((tipo == 'sistemas') && (sistemas == 0)) || ((tipo == 'equipamentos') && (equipamentos == 0))){
					div_modal = '';
					div_modal += '<div class="list-'+tipo+'">';
						div_modal += '<h4>'+tipo+'</h4>';
					div_modal += '</div>';

					jQuery('.modal-vazio').hide();
					jQuery('.list-modal').append(div_modal);
					jQuery('.list-'+tipo).append(item_modal);

					if((sistemas+equipamentos) == 0){
						jQuery('#modal-favorito .modal-conteudo .orcamento').show();
					}
				}else{
					jQuery('.list-'+tipo).append(item_modal);
				}

				//jQuery('#modal-favorito').css('display','table');
				jQuery('#modal-favorito').css('display','table');
				jQuery('#modal-favorito .msg').html('Item adicionado com sucesso!');

				if((equipamentos+sistemas) == 0){
					jQuery('#star-modal').html('<em></em>');
				}

				if(tipo == 'sistemas'){
					sistemas = sistemas+1;
				}

				if(tipo == 'equipamentos'){
					equipamentos = equipamentos+1;
				}

				jQuery('#star-modal em').html(equipamentos+sistemas);
			}else{
				if(result=='jaexiste'){
					jQuery('#modal-erro').css('display','table');
					jQuery('#modal-erro .msg').html('Este item já foi adicionado em seus favoritos!');
				}else{
					jQuery('#modal-erro').css('display','table');
					jQuery('#modal-erro .msg').html('Não foi possível adicionar esse item!');
				}
			}
		});
	});

	jQuery(document).on('click', '.remove-modal', function(){
		id = jQuery(this).attr('item-id');
		tipo = jQuery(this).attr('item-tipo');
		jQuery.getJSON("<?php echo get_template_directory_uri(); ?>/remove-favorito.php", { tipo: tipo, id: id }, function(result){		
			if(result=='ok'){
				jQuery('#'+id).remove();

				if(tipo == 'sistemas'){
					sistemas = sistemas-1;

					if(sistemas == 0){
						jQuery('.list-'+tipo).remove();
					}
				}

				if(tipo == 'equipamentos'){
					equipamentos = equipamentos-1;

					if(equipamentos == 0){
						jQuery('.list-'+tipo).remove();
					}
				}

				jQuery('#modal-favorito .msg').html('Item removido com sucesso dos seus favoritos!');

				if(equipamentos+sistemas == 0){
					jQuery('#star-modal em').remove();
					jQuery('#modal-favorito .modal-conteudo .orcamento').remove();
					jQuery('.modal-vazio').show();
					jQuery('#modal-favorito .modal-conteudo .orcamento').hide();
					jQuery('#modal-favorito .msg').html('');
				}else{
					jQuery('#star-modal em').html(equipamentos+sistemas);
				}
			}else{
				jQuery('#modal-erro').css('display','table');
				jQuery('#modal-erro .msg').html('Não foi possível remover esse item!');
			}
		});
	});

	jQuery('form#orcamento').submit(function(event){
		jQuery('form#orcamento .orcamento').html('ENVIANDO').prop( "disabled", true );
		jQuery('#modal-orcamento .msg').removeClass('erro ok').html('');
		var nome = jQuery('#nome_orcamento').val();
		var empresa = jQuery('#empresa_orcamento').val();
		var email = jQuery('#email_orcamento').val();
		var telefone = jQuery('#telefone_orcamento').val();
		var mensagem = jQuery('#mensagem_orcamento').val();
		var para = '<?php the_field('email', 'option'); ?>';
		var nome_site = '<?php the_field('titulo', 'option'); ?>';

		var enviar = true;
		if(nome == ''){
			jQuery('#nome_orcamento').parent().addClass('erro');
			enviar = false;
		}

		if(email == ''){
			jQuery('#email_orcamento').parent().addClass('erro');
			enviar = false;
		}

		if(telefone == ''){
			jQuery('#telefone_orcamento').parent().addClass('erro');
			enviar = false;
		}

		if(enviar){
			jQuery.getJSON("<?php echo get_template_directory_uri(); ?>/mail-orcamento-geral.php", { nome:nome, email:email, empresa: empresa, telefone:telefone, mensagem:mensagem, para:para, nome_site:nome_site }, function(result){		
				if(result=='ok'){
					resultado = 'Orçamento enviado com sucesso! Obrigado.';
					classe = 'ok';
				}else{
					resultado = result;
					classe = 'erro';
				}
				jQuery('#modal-orcamento .msg').addClass(classe).html(resultado);
				jQuery('form#orcamento').trigger("reset");
				jQuery('form#orcamento .orcamento').html('ENVIAR').prop( "disabled", false );
			});
		}else{
			jQuery('#modal-orcamento .msg').addClass('erro').html('Todos os campos são obrigatórios.');
			jQuery('form#orcamento .orcamento').html('ENVIAR').prop( "disabled", false );
		}

		return false;
	});

	jQuery('form#newsletter').submit(function(event){
		jQuery('form#newsletter .cadastro-news').html('Enviando').prop( "disabled", true );
		var nome = jQuery('#newsletter_nome').val();
		var email = jQuery('#newsletter_email').val();
		var para = '<?php the_field('email-newsletter', 'option'); ?>';
		var nome_site = '<?php the_field('titulo', 'option'); ?>';

		var enviar = true;
		if(nome == ''){
			jQuery('#newsletter_nome').parent().addClass('erro');
			enviar = false;
		}

		if(email == ''){
			jQuery('#newsletter_email').parent().addClass('erro');
			enviar = false;
		}

		if(enviar){
			jQuery.getJSON("<?php echo get_template_directory_uri(); ?>/mail-newsletter.php", { nome:nome, email:email, para:para, nome_site:nome_site }, function(result){		
				if(result=='ok'){
					resultado = 'E-mail cadastrado com sucesso.';
					classe = 'ok';
				}else{
					resultado = result;
					classe = 'erro';
				}
				jQuery('#modal-ok .msg').addClass(classe).html(resultado);
				jQuery('#modal-ok').css('display','table');
				jQuery('form#newsletter').trigger("reset");
				jQuery('form#newsletter .cadastro-news').html('Finalizar Cadastro').prop( "disabled", false );
			});
		}else{
			jQuery('#modal-erro .msg').addClass('erro').html('Todos os campos são obrigatórios.');
			jQuery('#modal-erro').css('display','table');
			jQuery('form#newsletter .cadastro-news').html('Finalizar Cadastro').prop( "disabled", false );
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
	   jQuery(".telefone").mask("(99) 9999-9999?9");
	});
</script>


<?php //var_dump($sistemas); ?>
<?php //var_dump($_SESSION['favoritos']); ?>