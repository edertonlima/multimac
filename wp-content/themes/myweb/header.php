<?php session_start(); //unset($_SESSION['favoritos']); ?>

<?php
	/*if(isset($_SESSION['favoritos'])){
		$favoritos_equipamentos = $_SESSION['favoritos']['equipamentos'];
		$favoritos_sistemas = $_SESSION['favoritos']['sistemas'];
		echo 'Equipamentos = '.count($favoritos_equipamentos);
		echo '<br>Sistemas = '.count($favoritos_sistemas);
	}*/
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

<?php 
	$titulo = '';
	$descricao = get_field('descricao', 'option');
	$imgPage = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), '' );
	$page = get_page_by_path('sobre-mim');
	$imagem = get_field('imagem_perfil',$page->ID);
	$url = get_home_url();

	if(is_category()){ 
		$category= get_queried_object(); //print_r($category);
		$infoCategoria = get_the_category($category->term_id); //print_r($infoCategoria);
		$titulo = $infoCategoria[0]->name.' - ';
		$descricao = $infoCategoria[0]->description;
		//$imagem = '';
		$url = $url.'/'.$infoCategoria[0]->slug;
	}

	if(is_page()){
		if(!is_home()){
			$titulo = get_the_title().' - ';
			if(get_field('descrição') != ''){
				$descricao = get_field('descrição');
			}
			if($imgPage[0] != ''){
				$imagem = $imgPage[0];	
			}			
			$url = get_the_permalink();
		}
	}

	if(is_single()){
		$titulo = get_the_title().' - ';
		if(get_field('descrição') != ''){
			$descricao = get_field('descrição');
		}
		if($imgPage[0] != ''){
			$imagem = $imgPage[0];	
		}			
		$url = get_the_permalink();
	}

	$titulo = $titulo.get_bloginfo('name'); 
	$autor = get_bloginfo('name');
?>

<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="shortcut icon" href="<?php the_field('favicon', 'option'); ?>" type="image/x-icon" />
<link rel="icon" href="<?php the_field('favicon', 'option'); ?>" type="image/x-icon" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="content-language" content="pt" />
<meta name="rating" content="General" />
<meta name="description" content="<?php echo $descricao; ?>" />
<meta name="keywords" content="" />
<meta name="robots" content="index,follow" />
<meta name="author" content="<?php echo $autor; ?>" />
<meta name="language" content="pt-br" />
<meta name="title" content="<?php echo $titulo; ?>" />

<!-- SOCIAL META -->
<meta itemprop="name" content="<?php echo $titulo; ?>" />
<meta itemprop="description" content="<?php echo $descricao; ?>" />
<meta itemprop="image" content="<?php echo $imagem; ?>" />

<html itemscope itemtype="<?php echo $url; ?>" />
<link rel="image_src" href="<?php echo $imagem; ?>" />
<link rel="canonical" href="<?php echo $url; ?>" />

<meta property="og:type" content="website">
<meta property="og:title" content="<?php echo $titulo; ?>" />
<meta property="og:type" content="article" />
<meta property="og:description" content="<?php echo $descricao; ?>" />
<meta property="og:image" content="<?php echo $imagem; ?>" />
<meta property="og:url" content="<?php echo $url; ?>" />
<meta property="og:site_name" content="<?php echo get_bloginfo('name'); ?>" />
<meta property="fb:admins" content="<?php echo $autor; ?>" />
<meta property="fb:app_id" content="1205127349523474" /> 

<meta name="twitter:card" content="summary" />
<meta name="twitter:url" content="<?php echo $url; ?>" />
<meta name="twitter:title" content="<?php echo $titulo; ?>" />
<meta name="twitter:description" content="<?php echo $descricao; ?>" />
<meta name="twitter:image" content="<?php echo $imagem; ?>" />
<!-- SOCIAL META -->

<title><?php echo $titulo; ?></title>

<!-- CSS -->
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" media="screen" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css" type="text/css" media="screen" />

<!-- JQUERY -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>


<script type="text/javascript">
	jQuery.noConflict();

	jQuery(document).ready(function(){

		jQuery('.menu-active').click(function(){
			alert();
		});

		if(jQuery('body').height() < jQuery(window).height()){
			jQuery('.footer').css({position: 'absolute', bottom: '0px'});
		}else{
			jQuery('.footer').css({position: 'relative'});
		}
	});	

	/*jQuery(window).resize(function(){
		jQuery('.menu-mobile').removeClass('active');
		jQuery('.nav').css('left','100vw');
		jQuery('.region').css('left','100vw');
		jQuery('.info-tel').css('left','100vw');
		if(jQuery('body').height() <= jQuery(window).height()){
			jQuery('.footer').css({position: 'absolute', bottom: '0px'});
		}else{
			jQuery('.footer').css({position: 'relative'});
		}
	});*/
</script>

</head>
<body <?php body_class(); ?>>

	<div id="fb-root"></div>
	<script>
		(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.10&appId=1806184732950369";
		fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>

	<header class="header">
		<div class="container">
			<h1>
				<a href="<?php echo get_home_url(); ?>" title="<?php bloginfo('name'); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_multimac.png" alt="<?php bloginfo('name'); ?>">
				</a>
			</h1>

			<div class="box-menu">
				<a href="javascript:" class="menu-mobile"><span><em>X</em></span></a>

				<nav class="nav">
					<ul class="menu-principal">
						<li class="menu-equipamentos">
							<a href="javascript:" title="Equipamentos" class="">Equipamentos</a>

							<ul class="row">
								<?php
									$args = array(
									    'taxonomy'      => 'equipamentos_taxonomy',
									    'parent'        => 0,
									    'orderby'       => 'name',
									    'order'         => 'ASC',
									    'hierarchical'  => 1,
									    'pad_counts'    => true,
									    'hide_empty'    => 0
									);
									$categories = get_categories( $args );
									foreach ( $categories as $categoria ){ ?>

										<li class="col-6">
											<a href="<?php echo get_home_url().'/equipamentos/'.$categoria->slug; ?><?php //echo get_category_link($categoria->term_id); ?>" title="<?php echo $categoria->name; ?>">
												<?php echo $categoria->name; ?>
											</a>
										</li>

										<?php
									}
								?>
							</ul>
						</li>

						<li class="menu-sistemas">
							<a href="<?php echo get_home_url(); ?>/sistemas" title="Sistemas" class="">Sistemas</a>
						</li>

						<?php /*<li class="">
							<a href="<?php echo get_home_url(); ?>/" title="Suporte Técnico" class="">Suporte Técnico</a>
						</li>*/ ?>

						<li class="menu-empresa">
							<a href="<?php echo get_home_url(); ?>/empresa" title="A Empresa" class="">A Empresa</a>
						</li>

						<li class="menu-contato">
							<a href="<?php echo get_home_url(); ?>/contato" title="Contato" class="">Contato</a>
						</li>
					</ul>
				</nav>

			</div>

			<div class="info-header">
				<div class="row">
					<div class="col-6">
						<form class="busca-header searchform" role="search" method="get" id="searchform" action="<?php echo get_home_url(); ?>">
							<fieldset>
								<input value="" name="s" id="s" type="text" placeholder="Em que posso ajudá-lo?" />
								<button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
							</fieldset>
						</form>
					</div>

					<div class="col-6">
						<div class="contato-header">
							<span class="tel"><i class="fa fa-phone" aria-hidden="true"></i> 14 3879-8010</span>
							<span class="tel"><i class="fa fa-whatsapp" aria-hidden="true"></i> 14 99710-6385</span>
						</div>

						<div class="orcamento-header">
							<a href="javascript:" class="button orcamento" title="Solicite um Orçamento"><span>Solicite um Orçamento</span></a>
							<span class="carrinho" id="star-modal">
								<?php
									if(isset($_SESSION['favoritos'])){
										if((isset($_SESSION['favoritos']['equipamentos'])) and (count($_SESSION['favoritos']['equipamentos']) > 0)){
											$qtd_equipamentos = count($_SESSION['favoritos']['equipamentos']);
										} 
										if((isset($_SESSION['favoritos']['sistemas'])) and (count($_SESSION['favoritos']['sistemas']) > 0)){
											$qtd_sistemas = count($_SESSION['favoritos']['sistemas']);
										}

										if(($qtd_equipamentos+$qtd_sistemas) > 0){ ?>
											<em><?php echo $qtd_equipamentos+$qtd_sistemas; ?></em>
										<?php }
									}
								?>
							</span>

							<?php if(get_field('aplicacao','option')){ ?>
								<a href="<?php the_field('aplicacao','option'); ?>" class="aplicativo" target="_blank"></a>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<?php //get_search_form(); ?>