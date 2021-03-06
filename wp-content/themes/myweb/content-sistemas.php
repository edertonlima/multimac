
<div class="item-sistemas">
	<div class="title">
		<div class="container">
			<h2><?php the_title(); ?></h2>
			<div class="img-sistemas">
				<?php $imagem = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), '' ); ?>
				<img src="<?php echo $imagem[0]; ?>">
			</div>	
		</div>
	</div>

	<section class="box-content cinza content-sistemas">
		<div class="container">
			<div class="row">
				
				<div class="col-6">
					<?php if(get_field('titulo')){ ?>
						<h3><?php the_field('titulo'); ?></h3>
					<?php } ?>

					<?php the_content(); ?>
				</div>

				<div class="col-6">
					<?php if( have_rows('caracteristicas_sistemas') ):
						while ( have_rows('caracteristicas_sistemas') ) : the_row(); ?>

							<span class="caracteristicas-sistemas">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico_caracteristicas_sistemas.png">
								<span><?php the_sub_field('texto'); ?></span>
							</span>

						<?php endwhile;
					endif; ?>
				</div>

			</div>
			<div class="row indicados-button">

				<div class="col-6">
					<div class="list-segmentos">

							<?php
								$segmentos_sistemas = get_field('seguimentos_sistemas');
								if( $segmentos_sistemas ): ?>

									<h4>INDICADO PARA OS SEGMENTOS</h4>
						
									<div class="owl-carousel owl-theme list-segmentos">

										<?php foreach( $segmentos_sistemas as $segmentos): ?>
											<?php //var_dump($segmentos); ?>
											<div class="item">
												<a href="<?php echo get_permalink($segmentos->ID); ?>">
													<img src="<?php the_field('ico_segmentos',$segmentos->ID); ?>" alt="<?php echo $segmentos->post_title; ?>">
													<span><?php echo $segmentos->post_title; ?></span>
												</a>
											</div>

										<?php endforeach; ?>

										<?php/*
											$title_sistema = get_the_title();
											query_posts(
												array(
													'post_type' => 'segmentos'
												)
											);

											while ( have_posts() ) : the_post(); 

												$sistemas = get_field('sistemas_segmentos'); 
												if( $sistemas ): 
													foreach( $sistemas as $sistema):

														if($title_sistema == $sistema->post_title){ ?>

															<div class="item">
																<a href="<?php the_permalink(); ?>">
																	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico_equipamentos.png" alt="<?php the_title(); ?>">
																	<span><?php the_title(); ?></span>
																</a>
															</div>

														<?php }

													endforeach;
												endif;

											endwhile;
											wp_reset_query();*/
										?>
									</div>
								<?php endif; ?>
						<?php /*
						<div class="owl-carousel owl-theme list-segmentos">
							<?php
								$title_sistema = get_the_title();
								query_posts(
									array(
										'post_type' => 'segmentos'
									)
								);

								while ( have_posts() ) : the_post(); 

									$sistemas = get_field('sistemas_segmentos'); 
									if( $sistemas ): 
										foreach( $sistemas as $sistema):

											if($title_sistema == $sistema->post_title){ ?>

												<div class="item">
													<a href="<?php the_permalink(); ?>">
														<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico_equipamentos.png" alt="<?php the_title(); ?>">
														<span><?php the_title(); ?></span>
													</a>
												</div>

											<?php }

										endforeach;
									endif;

								endwhile;
								wp_reset_query();
							?>
						</div> */?>
						
					</div>
				</div>

				<div class="col-6">
					<div class="botoes">
						<a href="javascript:" title="Solicitar Orçamento" class="button comecar orcamento"><span>Solicitar Orçamento</span></a>
						<a href="javascript:" title="Adicionar Favoritos" class="button comecar orcamento add-favorito" item-tipo="sistemas" item-id="<?php echo $post->ID; ?>" item-nome="<?php the_title(); ?>" item-imagem="<?php echo $imagem[0]; ?>">
							<span><i class="fa fa-star-o" aria-hidden="true"></i> Adicionar Favoritos</span>
						</a>
					</div>
				</div>

			</div>
		</div>
	</section>
</div>