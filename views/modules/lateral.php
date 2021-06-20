<!-- Sidebar wrapper start -->
    <nav id="sidebar" class="sidebar-wrapper">
				
				<!-- Sidebar brand start  -->
				<div class="sidebar-brand">
					<a href="../Kohaku_php" class="logo">
						<img src="./vendor/img/logotipo.png" alt="Le Rouge Admin Dashboard" />
					</a>
				</div>
				<!-- Sidebar brand end  -->

				<!-- Sidebar content start -->
				<div class="sidebar-content">

					<!-- sidebar menu start -->
					<div class="sidebar-menu">
						<ul>
							<?php if( $_SESSION['usertype_sk']==1): ?>
							<li class="header-menu">Menu</li>
							<li>
								<a href="/Kohaku_php/?page=dashboard">
									<i class="icon-file-text"></i>
									<span class="menu-text">Control</span>
								</a>
								<!--<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="/Kohaku_php/?page=crearnoti" class="current-page">Crear Noticia</a>
										</li>										
									</ul>
								</div>-->
							</li>
							<?php endif; ?>
							<li>
								<a href="/Kohaku_php/?page=home">
									<i class="icon-user1"></i>
									<span class="menu-text">Perfil</span>
								</a>
							</li>
							<?php
								if( $_SESSION['usertype_sk']==1):
							?>
							<li class="sidebar-dropdown inactive">
								<a href="#">
									<i class="icon-devices_other"></i>
									<span class="menu-text">Usuarios</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="/Kohaku_php/?page=userupdate" class="current-page">Alumnos</a>
										</li>
										<li>
											<a href="/Kohaku_php/?page=usercreate">Crear Alumno</a>
										</li>
										<li>
											<a href="/Kohaku_php/?page=useredit">Editar Alumno</a>
										</li>	
										<li>
											<a href="/Kohaku_php/?page=userdocument">Documento Alumno</a>
										</li>										
									</ul>
								</div>
							</li>
							<?php endif;
							?>
							
							<!--<li>
								<a href="/Kohaku_php/?page=home">
									<i class="icon-devices_other"></i>
									<span class="menu-text">Editar perfil</span>
								</a>
							</li>-->
							<li>
								<a href="/Kohaku_php/?page=class">
									<i class="icon-calendar1"></i>
									<span class="menu-text">Clases</span>
								</a>
							</li>
							<li>
								<a href="/Kohaku_php/?page=bitacora">
									<i class="icon-documents"></i>
									<span class="menu-text">Bit&aacutecora</span>
								</a>
							</li>
						</ul>
					</div>
					<!-- sidebar menu end -->

				</div>
				<!-- Sidebar content end -->
				
			</nav>
			<!-- Sidebar wrapper end -->