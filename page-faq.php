<?php
/*
 * Template Name: Preguntas Frecuentes
 * Description: Template especial para seccion "Preguntas Frecuentes"
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

		<!-- Preguntas Antes de Contratar -->

		<div class="row">

			<div class="col-xs-12">

				<div class="preguntas-frecuentes">

					<h2><?php echo CFS()->get( 'titulo_antes_de_contratar' ); ?></h2>

					<div class="pregunta-texto">

						<?php

							$fields = CFS()->get( 'lista_de_preguntas_antes_de_contratar' );

							foreach ( $fields as $field ) {

								echo '<p class="pregunta-titulo"><span>+</span>' . $field['pregunta_antes_de_contratar'] . '</p>';

								echo '<p class="pregunta-respuesta">' . $field['respuesta_antes_de_contratar'] . '</p>';

							};

						?>

					</div>

				</div>

				<div class="preguntas-frecuentes">

					<h2><?php echo CFS()->get( 'titulo_vigente' ); ?></h2>

					<div class="pregunta-texto">

						<?php

							$fields = CFS()->get( 'lista_de_preguntas_vigente' );

							foreach ( $fields as $field ) {

								echo '<p class="pregunta-titulo"><span>+</span>' . $field['pregunta_contrato_vigente'] . '</p>';

								echo '<p class="pregunta-respuesta">' . $field['respuesta_contrato_vigente'] . '</p>';

							};

						?>

					</div>

				</div>

			</div>

		</div>

	</div>
	
</div>

<script type="text/javascript">

$(document).ready(function(){

});
	
</script>

<?php get_footer(); ?>