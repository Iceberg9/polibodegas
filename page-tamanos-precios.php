<?php
/*
 * Template Name: Tamaños y Precios
 * Description: Template especial para seccion "Tamaños y precios"
 */
?>
<?php get_header(); ?>

<div class="initial" style="background: url('<?php echo CFS()->get('imagen_destacada'); ?>') center center no-repeat transparent; height:400px;"></div>

<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<p><?php echo CFS()->get('descripcion'); ?></p>
		</div>
		<div class="col-xs-12">
			<ul>
			<?php
				$fields = CFS()->get( 'preguntas' );
				foreach ( $fields as $field ) {
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