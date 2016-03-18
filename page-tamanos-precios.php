<?php
/*
 * Template Name: Tamaños y Precios
 * Description: Template especial para seccion "Tamaños y precios"
 */
?>
<?php get_header(); ?>

<div class="ContenedorGeneral">

	<!-- Bloque Destacada -->

	<div class="bloque-destacada" style="background: url(<?php echo CFS()->get('imagen_destacada'); ?>) top center no-repeat; background-size: cover">

		<div class="des-destacada">

			<h1><?php echo CFS()->get( 'titulo_destacado' ); ?></h1>

			<p><?php echo CFS()->get( 'texto_destacado' ); ?></p>

		</div>

		<div class="flecha">

			<img src="http://dev04.iceberg9.com/wp-content/uploads/2016/03/chevron-down.png" alt="">

		</div>

	</div>

	<div class="container">

		<!-- Descripción Escritorio -->

		<div class="row">

			<div class="col-xs-12">

				<div class="descripcion visible-xs">

					<?php echo CFS()->get( 'descripcion' ); ?>

				</div>

			</div>

		</div>

		<!-- Thumbnail -->

		<div class="row">

			<div class="cont-thumbnail">

				<div class="col-xs-12 col-sm-4">

					<div class="thumbnail" data-img-bodega="img-bodega-1" data-selected="active">

						<h2><?php echo CFS()->get( 'titulo_mini_bodega' ); ?></h2>

						<p><?php echo CFS()->get( 'mini_bodega_uno' ); ?></p>

					</div>

					<div id="img-bodega-1" class="img-bodega">

						<img src="<?php echo CFS()->get( 'imagen_bodega_uno' ) ?>" alt="" class="img-responsive visible-xs">

					</div>

				</div>

				<div class="col-xs-12 col-sm-4">

					<div class="thumbnail" data-img-bodega="img-bodega-2">

						<h2><?php echo CFS()->get( 'titulo_mini_bodega' ); ?></h2>

						<p><?php echo CFS()->get( 'mini_bodega_dos' ); ?></p>

					</div>

					<div id="img-bodega-2" class="img-bodega">

						<img src="<?php echo CFS()->get( 'imagen_bodega_dos' ) ?>" alt="" class="img-responsive visible-xs">

					</div>

				</div>

				<div class="col-xs-12 col-sm-4">

					<div class="thumbnail" data-img-bodega="img-bodega-3">

						<h2><?php echo CFS()->get( 'titulo_mini_bodega' ); ?></h2>

						<p><?php echo CFS()->get( 'mini_bodega_tres' ); ?></p>

					</div>

					<div id="img-bodega-3" class="img-bodega">

						<img src="<?php echo CFS()->get( 'imagen_bodega_tres' ) ?>" alt="" class="img-responsive visible-xs">

					</div>

				</div>

			</div>

		</div>

		<!-- Descripción Escritorio -->

		<div class="row">

			<div class="col-xs-12">

				<div class="descripcion hidden-xs">

					<?php echo CFS()->get( 'descripcion' ); ?>

				</div>

			</div>

		</div>

		<!-- Slider Bodegas -->

		<div class="row">

			<div class="col-xs-12">

				<div class="cont-slide hidden-xs">

					<div class="cont-slide-img cycle-slideshow" data-cycle-slides=">div" data-cycle-paused="true" data-cycle-fx="scrollHorz" data-cycle-prev=".slide-nav-prev" data-cycle-next=".slide-nav-next">

						<div class="slide-img">

							<img src="<?php echo CFS()->get( 'imagen_bodega_uno' ) ?>" alt="" class="img-responsive">

						</div>

						<div class="slide-img">

							<img src="<?php echo CFS()->get( 'imagen_bodega_dos' ) ?>" alt="" class="img-responsive">

						</div>

						<div class="slide-img">

							<img src="<?php echo CFS()->get( 'imagen_bodega_tres' ) ?>" alt="" class="img-responsive">

						</div>
						
					</div>

					<div class="cont-slide-nav">

						<div class="slide-nav slide-nav-prev">

							<img src="<?php echo CFS()->get( 'navegador_prev' ) ?>" alt="">
							
						</div>

						<div class="slide-nav slide-nav-next">
							
							<img src="<?php echo CFS()->get( 'navegador_next' ) ?>" alt="">

						</div>
						
					</div>
					
				</div>

			</div>

		</div>

	</div>

</div>

<?php get_footer(); ?>