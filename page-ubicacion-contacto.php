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

	</div>

	<div class="container">

		<!-- Ubicación -->

		<div class="row">

			<div class="col-xs-12">

				<div class="ubicacion">

					<h2><?php echo CFS()->get( 'titulo_formas_de_llegar' ); ?></h2>

					<div class="ubicacion-mapa">

						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.670562794269!2d-99.16931694281828!3d19.42663494345366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff35f5bd1563%3A0x6c366f0e2de02ff7!2sEl+%C3%81ngel+de+la+Independencia!5e0!3m2!1ses-419!2smx!4v1458268250341" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
						
					</div>

					<div class="ubicacion-direccion">

						<h3><?php echo CFS()->get( 'direccion' ); ?></h3>

					</div>

					<div class="ubicacion-indicaciones">

						<p><?php echo CFS()->get( 'indicaciones' ); ?></p>

					</div>

					<div class="ubicacion-consulta-direcciones">

						<a href="#" target="_blank"><?php echo CFS()->get( 'consultar_direcciones' ); ?></a>
						
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

							<img class="img-responsive" src="<?php echo CFS()->get( 'imagen_disponibilidad' ); ?>" alt="">

						</div>

						<div class="texto-disponibilidad">

							<h3><?php echo CFS()->get( 'titulo_se_parte' ); ?></h3>

							<p><?php echo CFS()->get( 'correo_y_telefono' ); ?></p>

						</div>

					</div>

					<div class="col-xs-12 col-sm-6">

						<div class="contacto-formulario">

							<form action="">

								<input type="text" name="nombre" placeholder="<?php echo CFS()->get( 'nombre_contacto' ); ?>" required>

								<input type="tel" name="telefono" placeholder="<?php echo CFS()->get( 'telefono_contacto' ); ?>" required>

								<input type="email" name="email" placeholder="<?php echo CFS()->get( 'email_contacto' ); ?>" required>

								<select required>

									<?php

										$fields = CFS()->get( 'lista_de_opciones_de_bodega' );

										foreach ( $fields as $field ){

											echo '<option value="' . $field['opciones_de_bodega'] . '">' . $field['opciones_de_bodega'] . '</option>';

										};

									 ?>
									
								</select>

								<textarea placeholder="<?php echo CFS()->get( 'mensaje_contacto' ); ?>" required></textarea>

								<button type="submit"><?php echo CFS()->get( 'boton_de_envio' ); ?></button>

							</form>

						</div>
						
					</div>
					
				</div>

			</div>

		</div>

	</div>
	
</div>

<?php get_footer(); ?>