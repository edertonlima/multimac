<?php get_header(); ?>

	<?php $imagem = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), '' ); ?>

	<section class="box-content empresa-header">
		<header class="header-post <?php if($imagem[0] == ''){ echo 'bg-off'; } ?>" style="background-image: url('<?php echo $imagem[0]; ?>');">
			<div class="container">
				<h2></h2>
			</div>
		</header>
	</section>

	<section class="box-content cinza empresa">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'content-empresa', 'page' );

					endwhile;
					?>
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>