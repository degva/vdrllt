<!doctype html>
<?php 
	$page_title = 'Contacto';
?>
<html>
	<head>

		<?php include('includes/webinfo.php'); ?>

	</head>
	<body>

		<!-- background -->
		<div id="background">
			<!-- background should be 1024x768 - just saying -->
			<img id="bg" src="http://placehold.it/1024x768/000/ddd" alt="" style="position: fixed; left: 0; top: 0; height: auto;" />	
		</div>

		<!-- container -->
		<div id='container'>

			<!-- Menu -->
			<?php include('includes/menu.php'); ?>

			<!-- Contact Info -->
			<div id='info'>

				<div class='info-block'>
					<div style='float: left;'>
						<img width='80px' height='80px' alt='Vidrillete' src='img/logo.png'>
					</div>
					<div style='float: left;padding: 31px 0 0 5px;'>
						<b>Vidrillete</b>
					</div>
				</div>
				<div class='info-block'>
					<div style='float: left;padding: 3px 0 3px 15px;'>
						Oficina: Calle Andromeda Mz. U Lt.3-C Chorrillos <br>
						Lima - Perú
					</div>
				</div>
				<div class='info-block' style='border-bottom: none;'>
					<div style='float: left;padding: 3px 0 3px 15px;'>
						Teléfono: <span style='color: #aaa;'><b>(+51) 01 251 0209</b></span><br>
						E-mail: <a style='color: #aaa;' href='mailto:vidrillete@hotmail.com'><b>vidrillete@hotmail.com</b></a>
					</div>
				</div>

			</div>

			<div id='map'>

<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden;height:400px;width:500px;"><div id="gmap_canvas" style="height:400px;width:500px;"></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style><a class="google-map-code" href="http://www.map-embed.com" id="get-map-data">www.map-embed.com</a></div><script type="text/javascript"> function init_map(){var myOptions = {zoom:15,center:new google.maps.LatLng(-12.172087493715761,-76.9991914102539),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(-12.172087493715761, -76.9991914102539)});infowindow = new google.maps.InfoWindow({content:"<b>Vidrillete Office</b><br/>Ca. Andromeda Mz. U Lt. 3-C<br/> Lima - Perú" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>

			</div>

			<!-- footer -->
			<div id='footer'>
				<div style='float:left; padding: 2px 0 0 10px;'>Vidrillete™ | Todos los derechos reservados - 2014</div>	
			</div>
		</div>
	</body>
</html>
