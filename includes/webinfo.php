
		<!-- Web information -->

		<meta content='Vidrillete - El cortador de botellas perfecto' name='title'>

		<meta content='Cortador de botellas de vidrio perfecto. Botellas de cualquier perfil y textura' name='description'>
		<meta content='cortador de botellas, cortador de garrafas, bottle cutter, botella de vidrio, glass bottle, reciclaje, recycle' name='keywords'>
		<title><?php echo $page_title; ?> | Vidrillete - El cortador de botellas perfecto</title>
		<meta content='text/html; charset=utf-8' http-equiv='content-type'>

		<!-- CSS links -->
<?php
	if ($page_title == 'Equipos') {
?>
		<link href='css/equipos.css' media='all' type='text/css' rel='stylesheet'>
<?php
	} else if ($page_title == 'Galeria') {
?>
		<link href='css/galeria.css' media='all' type='text/css' rel='stylesheet'>
<?php
	} else if ($page_title == 'Contacto') {
?>
		<link href='css/contacto.css' media='all' type='text/css' rel='stylesheet'>
<?php
	} else if ($page_title == 'Capacitación') {
?>
		<link href='css/capacita.css' media='all' type='text/css' rel='stylesheet'>
<?php
	}
?>
		<link href='css/common.css' media='all' type='text/css' rel='stylesheet'>
		<!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'> -->
		<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>

		<!-- JS links -->
		<script src='js/jquery-1.11.1.min.js' type='text/javascript'></script>
		<script src='js/back-img-rzr.js' type='text/javascript'></script>
<?php
	if ($page_title == 'Equipos' || $page_title == 'Galeria' || $page_title == 'Capacitación') {
?>
		<script src='js/scrollable.js' type='text/javascript'></script>
<?php
	}
	if ($page_title == 'Capacitación') {
?>
		<script src='js/capacita.js' type='text/javascript'></script>
<?php
	}
?>
