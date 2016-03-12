<div id="popup-wrapper" class="popup-temporal">
	<div class="popup-body">
		<div class="close-btn">
			<img id="close-popup" src="<?php bloginfo('template_directory'); ?>/assets/images/close-btn.png">
		</div>
		<div class="content">
			<h2>¿Quieres más? <br>Registra tu email y recibe <br> <small>las mejores historias de la semana <br>y promociones exclusivas</small></h2>
			<form id="api-chimpo">
				<input type="text" placeholder="tu email..." name="email" id="pop-address" required>
				<input type="hidden" name="ORIGIN" id="ORIGIN-POP" value="Pop-Up" required>
				<input type="submit" id="trigger-popup-chimp" value="enviar">
			</form>
			<span id="result-popup-mailchimp-success"></span>
			<span id="result-popup-mailchimp-fail"></span>
		</div>
		<div class="no-more">
			<span id="close-ever">Cerrar y no volver a mostrar</span>
		</div>
	</div>
</div>