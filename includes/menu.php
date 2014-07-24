			<div id='main-menu'>
				<ul id='menu'>
					<li>
						<a class='menu-item' title='Inicio' href='index.php' style='background-image: url("img/logo.png"); width: 24px;'></a>
					</li>
					<li>
						<a class='menu-item <?php if($page_title == 'Equipos') { echo 'active'; } ?>' title='Equipos' href='equipos.php'>Equipos</a>
					</li>
					<li>
						<a class='menu-item <?php if($page_title == 'Galeria') { echo 'active'; } ?>' title='Galería' href='galeria.php'>Galería</a>
					</li>
					<li>
						<a class='menu-item <?php if($page_title == 'Capacitación') { echo 'active'; } ?>' title='Capacitación' href='capacitacion.php'>Capacitación</a>
					</li>
					<li>
						<a class='menu-item <?php if($page_title == 'Contacto') { echo 'active'; } ?>' title='Contáctenos' href='contacto.php'>Contáctenos</a>
					</li>
				</ul>
			</div>
