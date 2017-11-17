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

							<?php if(get_sub_field('link_slideHome','option')){ ?>

								<a href="<?php the_sub_field('link_slideHome','option'); ?>" class="item <?php if($slide == 1){ echo 'active'; } ?>" style="background-image: url('<?php the_sub_field('imagem_slideHome','option'); ?>');"></a>

							<?php }else{ ?>

								<div class="item <?php if($slide == 1){ echo 'active'; } ?>" style="background-image: url('<?php the_sub_field('imagem_slideHome','option'); ?>');"></div>

							<?php } ?>

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

			<?php
				query_posts(
					array(
						'post_type' => 'segmentos',
						'posts_per_page' => 3
					)
				);

				while ( have_posts() ) : the_post();

					get_template_part( 'content-segmentos-list' );

				endwhile;
				wp_reset_query();
			?>

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

			<?php
				query_posts(
					array(
						'post_type' => 'post'
					)
				);

				while ( have_posts() ) : the_post();

					$imagem = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), '' ); ?>

					<li class="item-blog">
						<?php if($imagem[0] != ''){ ?>
							<img src="<?php echo $imagem[0]; ?>" alt="<?php the_title(); ?>">
						<?php } ?>
						
						<div class="cont-blog">
							<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
							<p><?php the_excerpt(); ?><a href="<?php the_permalink(); ?>" title="Leia mais">Leia mais</a></p>
						</div>
					</li>

				<?php endwhile;
				wp_reset_query();
			?>

		</ul>

	</div>
</section>

<?php get_footer(); ?>

<script type="text/javascript">
	jQuery(document).ready(function(){	

	jQuery('.container-slide').each(function(){
		var width = jQuery(this).width();
		var height = jQuery(this).height();

		width = '-'+(width+100)+'px';
		height = '-'+(height/2)+'px';

		jQuery(this).css('margin-left',width);
		jQuery(this).css('margin-top',height);
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