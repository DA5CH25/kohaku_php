<!-- Header start -->
        <header class="header">
					<div class="toggle-btns">
						<a id="toggle-sidebar" href="#">
							<i class="icon-list"></i>
						</a>
						<a id="pin-sidebar" href="#">
							<i class="icon-list"></i>
						</a>
					</div>
					<div class="header-items">
						<!-- Custom search start -->
						<!--<div class="custom-search">
							<input type="text" class="search-query" placeholder="Search here ...">
							<i class="icon-search1"></i>
						</div>-->
						<!-- Custom search end -->

						<!-- Header actions start -->
						<ul class="header-actions">
							<!--<li class="dropdown">
								<a href="#" id="notifications" data-toggle="dropdown" aria-haspopup="true">
									<i class="icon-box"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right lrg" aria-labelledby="notifications">
									<div class="dropdown-menu-header">
										Tasks (05)
									</div>	
									<ul class="header-tasks">
										<li>
											<p>#20 - Dashboard UI<span>90%</span></p>
											<div class="progress">
												<div class="progress-bar bg-primary" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
													<span class="sr-only">90% Complete (success)</span>
												</div>
											</div>
										</li>
										<li>
											<p>#35 - Alignment Fix<span>60%</span></p>
											<div class="progress">
												<div class="progress-bar bg-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
													<span class="sr-only">60% Complete (success)</span>
												</div>
											</div>
										</li>
										<li>
											<p>#50 - Broken Button<span>40%</span></p>
											<div class="progress">
												<div class="progress-bar bg-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
													<span class="sr-only">40% Complete (success)</span>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</li>-->
							<?php if( $_SESSION['usertype_sk']==1): ?>
							Admin
							<?php endif; ?>
							<?php if( $_SESSION['usertype_sk']==2): ?>
							Instructor
							<?php endif; ?>
							<?php if( $_SESSION['usertype_sk']==3): ?>
							Estudiante
							<?php endif; ?>
							<li class="dropdown">
								<a href="#" id="notifications" data-toggle="dropdown" aria-haspopup="true">
									<i class="icon-bell"></i>
									<span class="count-label">8</span>
								</a>
								<div class="dropdown-menu dropdown-menu-right lrg" aria-labelledby="notifications">
									<div class="dropdown-menu-header">
										Notifications (40)
									</div>
									<ul class="header-notifications">
										<li>
											<a href="#">
												<div class="user-img away">
													<img src="./vendor/img/user21.png" alt="User">
												</div>
												<div class="details">
													<div class="user-title">Abbott</div>
													<div class="noti-details">Membership has been ended.</div>
													<div class="noti-date">Oct 20, 07:30 pm</div>
												</div>
											</a>
										</li>
										<li>
											<a href="#">
												<div class="user-img busy">
													<img src="./vendor/img/user10.png" alt="User">
												</div>
												<div class="details">
													<div class="user-title">Braxten</div>
													<div class="noti-details">Approved new design.</div>
													<div class="noti-date">Oct 10, 12:00 am</div>
												</div>
											</a>
										</li>
										<li>
											<a href="#">
												<div class="user-img online">
													<img src="./vendor/img/user6.png" alt="User">
												</div>
												<div class="details">
													<div class="user-title">Larkyn</div>
													<div class="noti-details">Check out every table in detail.</div>
													<div class="noti-date">Oct 15, 04:00 pm</div>
												</div>
											</a>
										</li>
									</ul>
								</div>
							</li>
							
							<li class="dropdown">
								<a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
									<span class="user-name"><?php echo $_SESSION['firstname_sk']; ?></span>
									<span class="avatar">
										 <?php if( $_SESSION['usertype_sk']==1): ?>
							<img src="./vendor/img/tailor.jpg" alt="Admin" />
							<?php endif; ?>
							<?php if( $_SESSION['usertype_sk']==2): ?>
							<img src="./vendor/img/user18.png" alt="Instructor" />
							<?php endif; ?>
							<?php if( $_SESSION['usertype_sk']==3): ?>
							<img src="./vendor/img/laidy.jpg" alt="Estudiante" /> 
							<?php endif; ?>
										<span class="status busy"></span>
									</span>
								</a>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userSettings">
									<div class="header-profile-actions">
										<div class="header-user-profile">
											<div class="header-user">
												 <?php if( $_SESSION['usertype_sk']==1): ?>
							<img src="./vendor/img/tailor.jpg" alt="Admin" />
							<?php endif; ?>
							<?php if( $_SESSION['usertype_sk']==2): ?>
							<img src="./vendor/img/user18.png" alt="Instructor" />
							<?php endif; ?>
							<?php if( $_SESSION['usertype_sk']==3): ?>
							<img src="./vendor/img/laidy.jpg" alt="Estudiante" /> 
							<?php endif; ?>
											</div>
											<h5><?php echo $_SESSION['firstname_sk']; ?></h5>
											
										</div>
										<a href="/Kohaku_php/?page=News"><i class="icon-user1"></i> Mi Perfil</a>
										<a href="account-settings.html"><i class="icon-settings1"></i> Opciones</a>
										<a href="http://localhost/kohaku_php/login"><i class="icon-log-out1"></i> Cerrar sesi&oacuten</a>
									</div>
								</div>
							</li>
						</ul>						
						<!-- Header actions end -->
					</div>
				</header>
				<!-- Header end -->
                <!-- Page header start -->
				<div class="page-header">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">Aplictivo</li>
						<li class="breadcrumb-item active"> <?php if($_GET['page']=='dashboard'){ echo "Inicio";}
						if($_GET['page']=='home'){ echo "Perfil";}
						if($_GET['page']=='userupdate'){ echo "Usuarios";}
						if($_GET['page']=='userdocument'){ echo "Documentacion";}
						if($_GET['page']=='class'){ echo "Clases";}
						if($_GET['page']=='bitacora'){ echo "bitacora";}?></li>
					</ol>

					<!--<ul class="app-actions">
						<li>
							<a href="#" id="reportrange">
								<span class="range-text"></span>
							</a>
						</li>
					</ul>-->
				</div>
				<!-- Page header end -->
