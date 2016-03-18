<?php
/*
 * Template Name: Instalaciones y Servicios
 * Description: Template especial para seccion "Instalaciones y Servicios"
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

	</div>

	<div class="container">

		<!-- Descripción Servicios -->

		<div class="row">

			<div class="col-xs-12">

				<div class="descripcion-servicios">

					<h2><?php echo CFS()->get( 'titulo_servicios' ); ?></h2>

					<p><?php echo CFS()->get( 'descripcion_general_servicios' ); ?></p>

					<div class="servicios-mostrar visible-xs">

						Mostrar servicios

					</div>

					<div class="servicios-oculto">

						<p><?php echo CFS()->get( 'descripcion_oculta_servicios' ); ?></p>

						<ul>

							<?php

								$fields = CFS()->get( 'lista_de_derechos' );

								foreach ( $fields as $field ) {

								    echo '<li>' . $field['derecho'] . '</li><br/>';

								};

							?>

						</ul>

					</div>

				</div>

			</div>

		</div>

		<!-- Instalaciones Slide -->

		<div class="row">

			<div class="col-xs-12">

				<div class="descripcion-instalaciones">

					<h2><?php echo CFS()->get( 'titulo_instalaciones' ); ?></h2>

					<div class="cont-slide-servicios">

						<div class="cont-img-servicios cycle-slideshow" data-cycle-paused="true" data-cycle-fx="scrollHorz" data-cycle-prev=".slide-servicios-nav-prev" data-cycle-next=".slide-servicios-nav-next" data-cycle-pager="#pager-instalaciones" data-cycle-pager-template="<li><span></span></li>">

							<?php

								$fields = CFS()->get( 'imagenes_slide' );

								foreach ( $fields as $field ) {

								    echo '<img src="' . $field['imagen_slide'] . '" alt="">';

								};

							?>
							
						</div>

						<div class="cont-slide-servicios-nav">

							<div class="slide-servicios-nav slide-servicios-nav-prev">

								<img src="<?php echo CFS()->get( 'navegador_blanco_prev' ) ?>" alt="">
								
							</div>

							<div class="slide-servicios-nav slide-servicios-nav-next">

								<img src="<?php echo CFS()->get( 'navegador_blanco_next' ) ?>" alt="">
								
							</div>
							
						</div>
						
					</div>

					<div id="pager-instalaciones" class="pager-instalaciones hidden-xs"></div>

				</div>

			</div>

		</div>

	</div>

</div>

<?php get_footer(); ?>