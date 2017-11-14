<?php get_header(); ?>

	<section class="box-content seguimentos">
		<header class="header-post" style="background-image: url('<?php the_field('img_topo_equipamentos','option'); ?>');">
			<div class="container">
				<h2>Equipamentos</h2>
			</div>
		</header>

		<?php if(get_field('descricao_topo_equipamentos','option')){ ?>
			<div class="container">
				<span class="subtitulo margin-top margin-bottom"><?php the_field('descricao_topo_equipamentos','option'); ?></span>
			</div>
		<?php } ?>
	</section>

	<section class="box-content no-padding-top box-segmentos">
		<div class="container">
			<ul class="list-segmentos">

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

						<li class="cor1">
							<a href="<?php echo get_category_link($categoria->term_id); ?>" title="<?php echo $categoria->name; ?>">
								<img src="<?php the_field('ico_segmentos',$categoria->taxonomy.'_'.$categoria->term_id); ?>" alt="<?php echo $categoria->name; ?>">
								<h3><?php echo $categoria->name; ?></h3>
							</a>
						</li>

						<?php
					}
				?>

			</ul>
		</div>
	</section>

<?php get_footer(); ?>