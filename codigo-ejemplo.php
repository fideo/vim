<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package italgroupsa
 */

get_header();
?>

	<main id="primary" class="site-main">
		<?php
		// while ( have_posts() ) :
		// 	the_post();

		// 	get_template_part( 'template-parts/content', 'page' );

		// 	// If comments are open or we have at least one comment, load up the comment template.
		// 	if ( comments_open() || get_comments_number() ) :
		// 		comments_template();
		// 	endif;

		// endwhile; // End of the loop.
		?> 
	<section class="">
		<div id="carouselExampleAutoplaying" class="carousel slide overflow-hidden" data-bs-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<a href="#"><img src="wp-content/uploads/2023/08/stihl.jpg" class="d-block w-100" alt="Distribuidor Oficial Sthil"></a>
				</div>
				<div class="carousel-item">
					<a href="#"><img src="wp-content/uploads/2023/08/troy.jpg" class="d-block w-100" alt="Tractor Troy"></a>
				</div>
				<div class="carousel-item">
					<a href="#"><img src="wp-content/uploads/2023/08/ig.jpg" class="d-block w-100" alt="Maquinarias IG Trailers"></a>
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
	</section>

	<section class="container popular-products">
			<!--<h1 class="text-center pt-5">Productos</h1>
			<p class="text-center">Descripción para los productos a mostrar</p>-->

			<div class="pt-5 pb-3">
				<!--<?php echo do_shortcode( '[products popularity columns=4 limit=4]' ); ?>-->
			
				<!--<?php echo do_shortcode( '[products ids="768,759,479,377" columns=4 limit=4]' ); ?> -->

				<?php echo do_shortcode( '[featured_products columns=4 limit=4]'); ?>

			</div>
	</section>

	<section class="categories pt-3 pb-3">
		<div class="container">
			<!--<h1 class="text-center pt-5">Categorias</h1>
			<p class="text-center">Descripción para las categorias a mostrar</p>-->

			<?php $upload_dir = wp_upload_dir(); ?>
			<div class="row pt-5">
				<div class="categories__col col-md-4 col-sm-12 mb-3">
					<a href="/categoria-producto/accesorios-para-pileta/" class="col-md-12 w-100 h-100 d-inline-block p-3 position-relative rounded overflow-hidden">
						<img class="position-absolute top-0 bottom-0 end-0 start-0" src="<?php echo $upload_dir['baseurl'] ?>/2023/07/imagengRkqDu.jpg" alt="" loading="lazy">
						<h2 class="position-absolute bottom-0 end-0 start-0 p-2 mb-0 text-center bg-primary-opacity-8 text-white">Sopladoras</h2>
					</a>
				</div>

				<div class="categories__col col-md-4 col-sm-12 mb-3">
					<a href="/categoria-producto/carros-electricos/" class="col-md-12 w-100 h-100 d-inline-block p-3 position-relative rounded overflow-hidden">
						<img class="position-absolute top-0 bottom-0 end-0 start-0" src="<?php echo $upload_dir['baseurl'] ?>/2023/01/motosierra-stihl-ms-180.jpg" alt="" loading="lazy">
						<h2 class="position-absolute bottom-0 end-0 start-0 p-2 mb-0 text-center bg-primary-opacity-8 text-white">Motosierras</h2>
					</a>
				</div>

				<div class="categories__col col-md-4 col-sm-12 mb-3">
					<a href="/categoria-producto/aspersores/" class="col-md-12 w-100 h-100 d-inline-block p-3 position-relative rounded overflow-hidden">
						<img class="position-absolute top-0 bottom-0 end-0 start-0" src="<?php echo $upload_dir['baseurl'] ?>/2023/07/imagenWR4pue.jpg" alt="" loading="lazy">
						<h2 class="position-absolute bottom-0 end-0 start-0 p-2 mb-0 text-center bg-primary-opacity-8 text-white">Motoguadañas</h2>
					</a>
				</div>

			</div>

			<div class="row mb-3">
	
				<div class="categories__col col-md-4 col-sm-12 mb-3">
					<a href="/categoria-producto/aspiradoras/" class="col-md-12 w-100 h-100 d-inline-block p-3 position-relative rounded overflow-hidden">
						<img class="position-absolute top-0 bottom-0 end-0 start-0" src="<?php echo $upload_dir['baseurl'] ?>/2023/07/imagen2HuQBe.png" alt="" loading="lazy">
						<h2 class="position-absolute bottom-0 end-0 start-0 p-2 mb-0 text-center bg-primary-opacity-8 text-white">Hidrolabadoras</h2>
					</a>
				</div>

				<div class="categories__col sale col-md-8 col-sm-12 mb-3">
					<a href="/categoria-producto/barredoras-y-fregadoras/" class="col-md-12 w-100 h-100 d-inline-block p-3 position-relative rounded overflow-hidden">
						<!--<div class="bg-sale position-absolute top-0 bottom-0 end-0 start-0" style="z-index: 1;"></div>-->
						<img class="position-absolute top-0 bottom-0 end-0 start-0" src="<?php echo $upload_dir['baseurl'] ?>/2023/07/imagenUgUIPy.jpg" alt="" loading="lazy">
						<h2 class="position-absolute bottom-0 end-0 start-0 p-2 mb-0 text-center bg-primary-opacity-8 text-white" style="z-index: 2;">Tractores</h2>
					</a>
				</div>

			</div>
		</div>


	</section>

	<section class="container pt-3 special-offers">
		<h1 class="text-center pt-5">Motosierras</h1>
        <p class="text-center">Una amplia gama de productos</p>

		<div class="pt-3 pb-3">
			<?php echo do_shortcode( '[products ids="378,767,49,234" columns=4 limit=4]' ); ?>
		</div>
	</section>

	<!--<section class="container pt-5" style="padding-top: 400px;">
			
	</section>-->

	</main><!-- #main -->

<?php

get_footer();
