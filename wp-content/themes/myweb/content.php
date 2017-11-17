	<?php $imagem = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), '' ); ?>

	<section class="box-content empresa-header">
		<header class="header-post <?php if($imagem[0] == ''){ echo 'bg-off'; } ?>" style="background-image: url('<?php echo $imagem[0]; ?>');">
			<div class="container">
				<h2></h2>
			</div>
		</header>
	</section>

	<section class="box-content cinza empresa blog">
		<div class="container">
			<div class="row">
				<div class="col-12">

					<div class="cont-empresa-mini">
						<h2><?php the_title(); ?></h2>

						<?php the_content(); ?>
					</div>	

				</div>
			</div>
		</div>
	</section>