<?php 
require_once './models/Roles.dao.php' ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>KOHAKU</title>
	<link rel="stylesheet" href="./vendor/vendor/datatables/dataTables.bs4.css" />
		<link rel="stylesheet" href="./vendor/vendor/datatables/dataTables.bs4-custom.css" />
		<link href="./vendor/vendor/datatables/buttons.bs.css" rel="stylesheet" />
</head>
<body>
<div class="row gutters">
						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
							<div class="info-stats4">
								<div class="info-icon">
									<i class="icon-eye1"></i>
								</div>
								<div class="sale-num">
									<h3>9500</h3>
									<p>Visitas</p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
							<div class="info-stats4">
								<div class="info-icon">
									<i class="icon-shopping-cart1"></i>
								</div>
								<div class="sale-num">
									<h3>250</h3>
									<p>Compras</p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
							<div class="info-stats4">
								<div class="info-icon">
									<i class="icon-shopping-bag1"></i>
								</div>
								<div class="sale-num">
									<h3>75</h3>
									<p>Clases</p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
							<div class="info-stats4">
								<div class="info-icon">
									<i class="icon-activity"></i>
								</div>
								<div class="sale-num">
									<h3>35</h3>
									<p>Cinturones Negros</p>
								</div>
							</div>
						</div>
					</div>
					<!-- Row start -->
					<div class="row gutters">
						<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
							<div class="card">
								 <div class="card-body">
                <div class="account-settings">
                    <div class="user-profile">
                        <div class="user-avatar">
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
                        <h5 class="user-name"><?php echo $_SESSION['firstname_sk'].' '. $_SESSION['lastname_sk']; ?></h5>
                        <p>Datos Personales</p>      
                    </div>
                    <a href="/Kohaku_php/?page=class" class="alert alert-secondary alert-dismissible fade show">Correo: <?php echo $_SESSION['email_sk']; ?></a> 
                    <?php if( $_SESSION['usertype_sk']==1): ?>
							 <a href="/Kohaku_php/?page=class" class="alert alert-secondary alert-dismissible fade show">Perfil: Administrador</a> 
							<?php endif; ?>
							<?php if( $_SESSION['usertype_sk']==2): ?>
							<a href="/Kohaku_php/?page=class" class="alert alert-secondary alert-dismissible fade show">Perfil: Instructor</a> 
							<?php endif; ?>
							<?php if( $_SESSION['usertype_sk']==3): ?>
							<a href="/Kohaku_php/?page=class" class="alert alert-secondary alert-dismissible fade show">Perfil: Estudiante</a> 
							<?php endif; ?>
                </div>
            </div>
							</div>
						</div>
						
						<div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Actividad Reciente</div>
								</div>
								<div class="card-body">
									<div class="customScroll5">
										<div class="activity-logs">
											<div class="activity-log-list">
												<div class="sts"></div>
												<div class="log">Nuevo cinturon Negro Camila</div>
												<div class="log-time">10:10</div>
											</div>
											<div class="activity-log-list">
												<div class="sts"></div>
												<div class="log">Carla se ingreso</div>
												<div class="log-time">05:25</div>
											</div>
											<div class="activity-log-list">
												<div class="sts red"></div>
												<div class="log">Pedro Ingreso</div>
												<div class="log-time">09:45</div>
											</div>
											<div class="activity-log-list">
												<div class="sts orange"></div>
												<div class="log">Clase de pierna terminada</div>
												<div class="log-time">06:50</div>
											</div>
											
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Row end -->
	
		<script src="./vendor/vendor/datatables/dataTables.min.js"></script>
		<script src="./vendor/vendor/datatables/dataTables.bootstrap.min.js"></script>
		<script src="./vendor/vendor/datatables/custom/custom-datatables.js"></script>
		<script src="./vendor/vendor/datatables/custom/fixedHeader.js"></script>
		<script src="./vendor/vendor/datatables/buttons.min.js"></script>
		<script src="./vendor/vendor/datatables/jszip.min.js"></script>
		<script src="./vendor/vendor/datatables/pdfmake.min.js"></script>
		<script src="./vendor/vendor/datatables/vfs_fonts.js"></script>
		<script src="./vendor/vendor/datatables/html5.min.js"></script>
		<script src="./vendor/vendor/datatables/buttons.print.min.js"></script>
		
			<!-- Required jQuery first, then Bootstrap Bundle JS -->
		<script src="./vendor/js/jquery.min.js"></script>
		<script src="./vendor/js/bootstrap.bundle.min.js"></script>
		<script src="./vendor/js/moment.js"></script>


		<!-- *************
			************ Vendor Js Files *************
		************* -->
		<!-- Slimscroll JS -->
		<script src="./vendor/vendor/slimscroll/slimscroll.min.js"></script>
		<script src="./vendor/vendor/slimscroll/custom-scrollbar.js"></script>

		<!-- Daterange -->
		<script src="./vendor/vendor/daterange/daterange.js"></script>
		<script src="./vendor/vendor/daterange/custom-daterange.js"></script>

		<!-- Polyfill JS -->
		<script src="./vendor/vendor/polyfill/polyfill.min.js"></script>

		<!-- Apex Charts -->
		<script src="./vendor/vendor/apex/apexcharts.min.js"></script>
		<script src="./vendor/vendor/apex/sales/mixed-line-column.js"></script>
		<script src="./vendor/vendor/apex/sales/column-visitors.js"></script>

		<!-- Main JS -->
		<script src="./vendor/js/main.js"></script>
</body>


</html>