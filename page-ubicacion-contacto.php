<?php
/*
 * Template Name: Ubicación y Contacto
 * Description: Template especial para seccion "Ubicación y Contacto"
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

		<!-- Ubicación -->

		<div class="row">

			<div class="col-xs-12">

				<div class="ubicacion">

					<h2><?php echo CFS()->get( 'titulo_formas_de_llegar' ); ?></h2>

					<div class="ubicacion-mapa">

						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15261.05946624437!2d-96.7090818!3d17.0106733!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6587e8c79013fcd0!2sPolibodegas!5e0!3m2!1ses-419!2smx!4v1458623318311" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
						
					</div>

					<div class="ubicacion-direccion">

						<h3><?php echo CFS()->get( 'direccion' ); ?></h3>

					</div>

					<div class="ubicacion-indicaciones">

						<p><?php echo CFS()->get( 'indicaciones' ); ?></p>

					</div>

					<div class="ubicacion-consulta-direcciones">

						<a href="https://goo.gl/zIQ1RJ" target="_blank"><?php echo CFS()->get( 'consultar_direcciones' ); ?></a>
						
					</div>

				</div>
				
			</div>

		</div>

	</div>

	<div class="container">

		<div class="row">

			<div class="col-xs-12">

				<div class="contacto">

					<h2><?php echo CFS()->get( 'titulo_disponibilidad' ); ?></h2>					

					<div class="col-xs-12 col-sm-6">

						<div class="img-disponibilidad">

							<img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/images/imagen_disponibilidad.svg" alt="">

						</div>

						<div class="texto-disponibilidad">

							<h3><?php echo CFS()->get( 'titulo_se_parte' ); ?></h3>

							<p><?php echo CFS()->get( 'correo_y_telefono' ); ?></p>

						</div>

					</div>

					<div class="col-xs-12 col-sm-6">

						<div class="contacto-formulario">

							<?php echo do_shortcode( '[contact-form-7 id="58" title="Contacto"]' ); ?>

						</div>
						
					</div>
					
				</div>

			</div>

		</div>

	</div>
	
</div>

<?php get_footer(); ?>