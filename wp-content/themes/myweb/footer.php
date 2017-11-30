	
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
				<div class="col-3">
					<div class="box-footer">
						<strong>Horário de atendimento</strong>
						Seg. à Sex.   08h às 18h
					</div>

					<div class="box-footer">
						<strong>Perguntas Frequentes</strong>
						<ul>
							<li><a href="#" title="Como ficar de acordo">Como fica de acordo com a legislação?</a></li>
							<li><a href="#" title="Como ficar de acordo">Como fica de acordo com a legislação?</a></li>
						</ul>
					</div>
				</div>
				<div class="col-3">
					<div class="box-footer">
						<strong>Newsletter</strong>
						Cadastre-se e receba as novidades do mundo da Automação Comercial
					</div>
					<form action="#" method="post">
						<fieldset>
							<input type="type" name="nome" placeholder="Nome">
							<input type="type" name="email" placeholder="Email">
						</fieldset>
						<button type="button" class="cadastro-news">Finalizar Cadastro</button>
					</form>
				</div>
				<div class="col-4">
					<strong>Fale Conosco</strong>
					<div class="contato-footer">
						<span class="tel"><i class="fa fa-phone" aria-hidden="true"></i> 14 3879-8010</span>
						<span class="tel"><i class="fa fa-whatsapp" aria-hidden="true"></i> 14 99710-6385</span>
						<span class="tel email">contato@multimac.com.br</span>
					</div>

					<div class="fb-page" 
					data-href="https://www.facebook.com/facebook"
					data-width="380" 
					data-hide-cover="false"
					data-show-facepile="false"></div>

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

</body>
</html>

<script type="text/javascript">
	var sistemas = <?php echo count($_SESSION['favoritos']['sistemas']); ?>;
	var equipamentos = <?php echo count($_SESSION['favoritos']['equipamentos']); ?>;

	jQuery(document).ready(function(){
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

</script>


<?php //var_dump($sistemas); ?>
<?php //var_dump($_SESSION['favoritos']); ?>