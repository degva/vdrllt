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
			<img id="bg" src="img/background.png" alt="" style="position: fixed; left: 0; top: 0; height: auto;" />	
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
								<div><img src='img/galeria/001.png'></div>
							</div>	
							<div class='text'>
								<h3>Botella de cocos</h3>
								<p>Vidrillete corta botellas de distintas texturas</p>
							</div>	
						</div>	

						<div class='scroll'>
							<div class='image'>
								<div><img src='img/galeria/002.png'></div>
							</div>	
							<div class='text'>
								<h3>Botella hexagonal</h3>
								<p>Vidrillete corta botellas de distintos perfiles</p>
							</div>	
						</div>	

						<div class='scroll'>
							<div class='image'>
								<div><img src='img/galeria/003.png'></div>
							</div>	
							<div class='text'>
								<h3>Botella ---</h3>
								<p>---</p>
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
<?php
	include('includes/footer.php');
?>
		</div>
	</body>
</html>
