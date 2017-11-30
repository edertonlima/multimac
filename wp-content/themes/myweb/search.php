<?php
	global $wp_query;
	$search = $wp_query->posts;
	foreach ($search as $key => $value) {

		if($value->post_type == 'equipamentos'){
			$equipamentos[] = $value;
		}

		if($value->post_type == 'post'){
			$blog[] = $value;
		}

		if($value->post_type == 'sistemas'){
			$sistemas[] = $value;
		}

		if($value->post_type == 'segmentos'){
			$segmentos[] = $value;
		}

		if($value->post_type == 'page'){
			$page[] = $value;
		}

	}
?>

<?php get_header(); ?>

	<section class="box-content empresa-header">
		<header class="header-post <?php if($imagem[0] == ''){ echo 'bg-off'; } ?>" style="background-image: url('<?php echo $imagem[0]; ?>');">
			<div class="container">
				<h2>Sua busca: <span><?php echo $_GET['s']; ?></span></h2>
			</div>
		</header>
	</section>



<?php
	if($wp_query->found_posts){
		if($equipamentos){ ?>		

			<section class="box-content no-padding cinza border list-equipamentos">
				<div class="container">
					<h2 class="tit-search">Equipamentos</h2>
					<div class="row list-item">

						<?php foreach ($equipamentos as $key => $value) { //var_dump($value); ?>

							<div class="col-4">
								<div class="content-equipamento">
									<?php $imagem = wp_get_attachment_image_src( get_post_thumbnail_id($value->ID), 'thumbnail' ); ?>
									<img src="<?php echo $imagem[0]; ?>" alt="<?php echo $value->post_title; ?>" class="img-list">
									<h3><?php echo $value->post_title; ?></h3>
									<p><?php echo $value->post_excerpt; ?></p>
									<a href="<?php the_permalink($value->ID); ?>" title="Ver mais" class="button ver-mais">Ver mais</a>
								</div>
							</div>

						<?php } ?>

					</ul>
				</div>
			</section>
				
		<?php }

		if($blog){ ?>		

			<section class="box-content no-padding cinza border box-blog">
				<div class="container">
					<h2 class="tit-search">Blog</h2>
					<ul class="list-blog">

						<?php foreach ($blog as $key => $value) { //var_dump($value); ?>

							<li class="item-blog">
								<?php $imagem = wp_get_attachment_image_src( get_post_thumbnail_id($value->ID), '' );
								if($imagem[0] != ''){ ?>
									<img src="<?php echo $imagem[0]; ?>" alt="<?php the_title(); ?>">
								<?php } ?>
								
								<div class="cont-blog">
									<h3><a href="<?php the_permalink($value->ID); ?>" title="<?php echo $value->post_title; ?>"><?php echo $value->post_title; ?></a></h3>
									<p><?php echo $value->post_excerpt; ?><a href="<?php the_permalink($value->ID); ?>" title="Leia mais">Leia mais</a></p>
								</div>
							</li>

						<?php } ?>

					</ul>
				</div>
			</section>
				
		<?php }

		if($sistemas){ ?>

			<section class="box-content no-padding sistemas">
				<div class="row">
					<h2 class="tit-search">Sistemas</h2>


						<?php foreach ($sistemas as $key => $value) { //var_dump($value); ?>

							<div class="item-sistemas">
								<div class="title">
									<div class="container">
										<h2><?php echo $value->post_title; ?></h2>
										<div class="img-sistemas">
											<?php $imagem = wp_get_attachment_image_src( get_post_thumbnail_id($value->ID), '' ); ?>
											<img src="<?php echo $imagem[0]; ?>">
										</div>	
									</div>
								</div>

								<section class="box-content cinza">
									<div class="container">
										<div class="row">
											
											<div class="col-6">
												<?php if(get_field('titulo',$value->ID)){ ?>
													<h3><?php the_field('titulo',$value->ID); ?></h3>
												<?php } ?>

												<?php echo $value->post_content; ?>
											</div>

											<div class="col-6">
												<?php
													$caracteristicas_sistemas = get_field('caracteristicas_sistemas',$value->ID);
													if($caracteristicas_sistemas){
														foreach($caracteristicas_sistemas as $caracteristicas){ ?>
															<span class="caracteristicas-sistemas">
																<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico_caracteristicas_sistemas.png">
																<span><?php echo $caracteristicas['texto']; ?></span>
															</span>
														<?php }
													}
												?>
											</div>

										</div>
										<div class="row">

											<div class="col-6">
												<div class="list-segmentos">
													<h4>INDICADO PARA OS SEGMENTOS</h4>
													
													<div class="owl-carousel owl-theme list-segmentos">
														<?php
															$title_sistema = $value->post_title;
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
													</div>
													
												</div>
											</div>

											<div class="col-6">
												<div class="botoes">
													<a href="javascript:" title="Solicitar Orçamento" class="button comecar orcamento"><span>Solicitar Orçamento</span></a>
													<a href="javascript:" title="Adicionar Favoritos" class="button comecar orcamento"><span><i class="fa fa-star-o" aria-hidden="true"></i> Adicionar Favoritos</span></a>
												</div>
											</div>

										</div>
									</div>
								</section>
							</div>

						<?php } ?>

				</div>
			</section>
			
		<?php }

		if($segmentos){ ?>

			<section class="box-content no-padding-top box-segmentos">
				<div class="container">
					<h2 class="tit-search">Segmentos</h2>
					<ul class="list-segmentos">

						<?php foreach ($segmentos as $key => $value) { ?>

							<li class="cor1">
								<a href="<?php the_permalink($value->ID); ?>" title="<?php echo $value->post_title; ?>">
									<img src="<?php the_field('ico_segmentos',$value->ID); ?>" alt="<?php echo $value->post_title; ?>">
									<h3><?php echo $value->post_title; ?></h3>
								</a>
							</li>

						<?php } ?>

					</ul>
				</div>
			</section>

		<?php }

		if($page){ ?>

			<section class="box-content no-padding cinza border list-equipamentos">
				<div class="container">
					<h2 class="tit-search">Institucional</h2>
					<div class="row list-item">

						<?php foreach ($page as $key => $value) { ?>

							<div class="col-4">
								<div class="content-equipamento">
									<?php $imagem = wp_get_attachment_image_src( get_post_thumbnail_id($value->ID), 'thumbnail' ); ?>
									<?php if($imagem[0]){ ?>
										<img src="<?php echo $imagem[0]; ?>" alt="<?php echo $value->post_title; ?>" class="img-list">
									<?php } ?>
									<h3><?php echo $value->post_title; ?></h3>
									<p><?php echo $value->post_excerpt; ?></p>
									<a href="<?php the_permalink($value->ID); ?>" title="Ver mais" class="button ver-mais">Ver mais</a>
								</div>
							</div>

						<?php } ?>

					</ul>
				</div>
			</section>

		<?php }
	}else{ ?>

		<section class="box-content">
			<div class="container">

				<h4 class="center">Desculpe, não conseguimos encontrar nenhum resultado com essas palavras.</h4>

			</div>
		</section>
	<?php }
?>

<?php get_footer(); ?>