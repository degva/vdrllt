<!doctype html>
<?php 
	$page_title = 'Galeria';
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

			<!-- Equipos -->
			<div class='block-scrollable'>
				<div class='scrollable up-down'>
					<div class='items'>

						<div class='scroll 0'>
							<div class='image'>
								<div><img src='http://placehold.it/500x400'></div>
							</div>	
							<div class='text'>
								<h3>PQ001</h3>
								<p>Este equipo es para... etc etc etc</p>
							</div>	
						</div>	

						<div class='scroll'>
							<div class='image'>
								<div><img src='http://placehold.it/500x400'></div>
							</div>	
							<div class='text'>
								<h3>PQ002</h3>
								<p>Este equipo es para... etc etc etc</p>
							</div>	
						</div>	

						<div class='scroll'>
							<div class='image'>
								<div><img src='http://placehold.it/500x400'></div>
							</div>	
							<div class='text'>
								<h3>PQ003</h3>
								<p>Este equipo es para... etc etc etc</p>
							</div>	
						</div>	

						<div class='scroll'>
							<div class='image'>
								<div><img src='http://placehold.it/500x400'></div>
							</div>	
							<div class='text'>
								<h3>PQ004</h3>
								<p>Este equipo es para... etc etc etc</p>
							</div>	
						</div>	

					</div>
				</div>
			</div>
			<div class='brow-up-left'>
				<a class='prev disabled'></a>
			</div>
			<div class='brow-down-right'>
				<a class='next'></a>
			</div>
			<!-- news -->

			<!-- footer -->
			<div id='footer'>
				<div style='float:left; padding: 2px 0 0 10px;'>Vidrillete™ | Todos los derechos reservados - 2014</div>	
			</div>
		</div>
	</body>
</html>
