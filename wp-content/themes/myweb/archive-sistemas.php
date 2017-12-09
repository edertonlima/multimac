<?php get_header(); ?>

	<section class="box-content seguimentos header-sistemas">
		<header class="header-post" style="background-image: url('<?php the_field('img_topo_sistemas','option'); ?>');">
			<div class="container">
				<h2>Sistemas</h2>
			</div>
		</header>

		<?php if(get_field('descricao_topo_sistemas','option')){ ?>
			<div class="container">
				<span class="subtitulo margin-top margin-bottom"><?php the_field('descricao_topo_sistemas','option'); ?></span>
			</div>
		<?php } ?>
	</section>

	<section class="box-content no-padding sistemas">
		

			<div class="row">

				<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'content-sistemas' );

					endwhile;
				?>

			</div>

		
	</section>

<?php get_footer(); ?>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js" type="text/javascript"></script>
<script type="text/javascript">
	jQuery('.owl-carousel.list-segmentos').owlCarousel({
		loop: false,
		center: false,
		nav: true,
		margin: 20,
		navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
		responsive: {
			0: {
				items: 2
			},
			400: {
				items: 2
			},
			500: {
				items: 3
			},
			768: {
				items: 4
			}
		}
	}) 
</script>