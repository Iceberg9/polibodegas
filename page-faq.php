<?php
/*
 * Template Name: Preguntas Frecuentes
 * Description: Template especial para seccion "Preguntas Frecuentes"
 */
?>
<?php get_header(); ?>


<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<h3>Custom Post Type: Image custom</h3>
			<img src="<?php echo CFS()->get('imagen'); ?>" class="img-responsive">
			
			<br><br>

			<h3>Preguntas Frecuentes</h3>
			<ul>
			<?php 
				$fields = CFS()->get('Preguntas');
				foreach ($fields as $field)
				{
				    echo '<li><strong>'.$field['pregunta'].'</strong></li>';
				    echo '<ul><li>'.$field['respuesta'].'</li></ul>';
				}
			?>
			</ul>
		</div>
	</div>
</div>

<!-- Template para Paginas -->

<?php get_footer(); ?>