<?php
/*
Template Name: Rutas
*/
get_header();?> 
<h1>Rutas</h1>
<div class="col-md-8">
	<h4>Ruta: <span id="Dynamich4">Maracaibo-Guanta</span></h4>
	<img id="rutaGif" src="<?php bloginfo('stylesheet_directory'); ?>/images/Rutas/maracaiboGuanta.gif" alt="" style="width:100%" />
</div>
<div class="col-md-4">
	<h3>RUTAS NACIONALES</h3>
	<p><strong>Ruta Cabotaje</strong></p>
	<ul>
		<li><a href="javascript:ChangeGifs('maracaiboGuanta')">Maracaibo-Guanta</a></li>
		<li><a href="javascript:ChangeGifs('GuantaPtoCabello')">Guanta-Pto Cabello</a></li>
		<li><a href="javascript:ChangeGifs('PtoCabelloMaracaibo')">Pto Cabello-Maracaibo</a></li>
	</ul>
	<h3>RUTAS SPOT</h3>
	<p><strong>PAÍSES CENTROAMERICA:</strong></p>
	<ul>
		<li><a href="javascript:ChangeGifs('toGuatemala')">GUATEMALA (PUERTO QUETZAL)</a></li>
		<li><a href="javascript:ChangeGifs('toNicaragua')">NICARAGUA (PUERTO CORINTO)</a></li>
		<li><a href="javascript:ChangeGifs('toSalvador')">EL SALVADOR (PUERTO ACAJUTLA)</a></li>
		<li><a href="javascript:ChangeGifs('toCostaRica')">COSTA RICA (PUERTO CALDERA)</a></li>
		<li><a href="javascript:ChangeGifs('toPanama')">PANAMÁ (PUERTO COLON)</a></li>
	</ul>
	<p><strong>PAÍSES SUDAMERICA:</strong></p>
	<ul>
		<li><a href="javascript:ChangeGifs('toBrazil')">BRASIL (PUERTO RECIFE - PUERTO SANTOS)</a></li>
		<li><a href="javascript:ChangeGifs('toUruguay')">URUGUAY (PUERTO MONTEVIDEO)</a></li>
		<li><a href="javascript:ChangeGifs('toArgentina')">ARGENTINA (BUENOS AIRES)</a></li>
	</ul>
</div>
<script>
	function ChangeGifs(gifName) {
		var span = document.getElementById('Dynamich4'); 
		var a_innerText = this.document.activeElement.innerText;
		span.innerText = a_innerText;
		//Change image
		var newSrc = "<?php bloginfo('stylesheet_directory'); ?>/images/Rutas/" + gifName + ".gif";
		var img = document.getElementById('rutaGif');
		img.src = newSrc;
	}
</script>
<?php get_footer(); ?>