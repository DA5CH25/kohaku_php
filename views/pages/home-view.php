<!-- Main container start -->
<div class="main-container">

<!-- Row start -->
<div class="row gutters">
    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
        <div class="card h-100">
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
                    <a href="/Kohaku_php/?page=class" class="alert alert-secondary alert-dismissible fade show">Rango: 4to kyu. (Yonkyu)</a> 
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
    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
        <div class="card h-100">
            <div class="card-body">
                <div class="account-settings">
								<div class="invoice-status">
                                    <div class="info-icon">
                                        <i class="icon-calendar1"></i>
                                    </div>
                                    <h3>Clases</h3> 
									<p>Pr&oacuteximas clases</p>      
							    </div>  
                            <?php if( $_SESSION['usertype_sk']==1): ?>
						
							<?php endif; ?>
							<?php if( $_SESSION['usertype_sk']==2): ?>
							<a href="/Kohaku_php/?page=class" class="alert alert-secondary alert-dismissible fade show">13:00 pm 102/04/2021</a> 
                                    <a href="/Kohaku_php/?page=class" class="alert alert-secondary alert-dismissible fade show">16:00 pm 19/05/2021</a> 
                                   
							<?php endif; ?>
							<?php if( $_SESSION['usertype_sk']==3): ?>
								<a href="/Kohaku_php/?page=class" class="alert alert-secondary alert-dismissible fade show">16:00 pm 21/06/2021</a> 
                                    <a href="/Kohaku_php/?page=class" class="alert alert-secondary alert-dismissible fade show">17:00 pm 18/05/2021</a> 
                                    <a href="/Kohaku_php/?page=class" class="alert alert-secondary alert-dismissible fade show">12:00 pm 20/05/2021</a> 
                                     <a href="/Kohaku_php/?page=class" class="alert alert-secondary alert-dismissible fade show">15:00 pm 20/04/2021</a> 
							<?php endif; ?> 
                                    
                </div>
            </div>
        </div>
</div>
	<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
        <div class="card h-100">
            <div class="card-body">
                <div class="account-settings">
								<div class="invoice-status">
								<div class="info-icon">
									<i class="icon-shopping-cart1"></i>
								</div>
                                    <h3>Promociones</h3> 
									<p>Promociones vigentes</p>
								</div>
                                    <a href="/Kohaku_php/?page=class" class="alert alert-secondary alert-dismissible fade show">3 clases a $15000<br></a> 
                </div>
            </div>
        </div>
        </div>
	<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
        <div class="card h-100">
            <div class="card-body">
                <div class="account-settings">
								<div class="invoice-status">
								<div class="info-icon">
									<i class="icon-shopping-bag1"></i>
								</div>
									<h3>Bit&aacutecora</h3>
									<p>&Uacuteltimas observaciones</p> 
								</div>
								 <?php if( $_SESSION['usertype_sk']==1): ?>
							<a href="/Kohaku_php/?page=class" class="alert alert-secondary alert-dismissible fade show">Instructor: Pedro 15/05/2021<br></a> 
                                    <a href="/Kohaku_php/?page=class" class="alert alert-secondary alert-dismissible fade show">Estudiante: Carlos 12/05/2021<br></a> 
                                  
							<?php endif; ?>
							<?php if( $_SESSION['usertype_sk']==2): ?>
							<a href="/Kohaku_php/?page=class" class="alert alert-secondary alert-dismissible fade show">Estudiante: Daniela 15/05/2021<br></a> 
                                    <a href="/Kohaku_php/?page=class" class="alert alert-secondary alert-dismissible fade show">Estudiante: Carlos 12/05/2021<br></a> 
                                    <a href="/Kohaku_php/?page=class" class="alert alert-secondary alert-dismissible fade show">Estudiante: Daniel 9/05/2021<br></a> 
							<?php endif; ?>
							<?php if( $_SESSION['usertype_sk']==3): ?>
							    <a href="/Kohaku_php/?page=class" class="alert alert-secondary alert-dismissible fade show">Instructor: Camila 15/05/2021<br></a> 
                                    <a href="/Kohaku_php/?page=class" class="alert alert-secondary alert-dismissible fade show">Instructor: Maria 12/05/2021<br></a> 
                                    <a href="/Kohaku_php/?page=class" class="alert alert-secondary alert-dismissible fade show">Instructor: Daniel 9/05/2021<br></a> 
                                      <a href="/Kohaku_php/?page=class" class="alert alert-secondary alert-dismissible fade show">Instructor: Fabian 9/05/2021<br></a> 
							<?php endif; ?>
                                   
                </div>
            </div>
        </div>
                        
    </div>
</div>
<br>
<br>
<!-- Row starts -->
<?php if( $_SESSION['usertype_sk']==3): ?>
					<div class="row gutters">						
						<div class="col-xl-6 col-lg-6 col-md-12 col-sm-6 col-12">
							<div class="card h-340">
								<div class="card-header">
									<div class="card-title">Progreso</div>
								</div>
								<div class="card-body">
									<div class="customScroll5">
										<ul class="user-messages">
											<li class="clearfix">
												<div class="customer">2 Kyu</div>
												<div class="delivery-details">
													<span class="badge badge-primary">En Progreso</span>
													<h5>2er kyu (Nikyu)</h5>
													<p>En proceso de obtenci&oacuten.</p>
												</div>
											</li>
											<li class="clearfix">
												<div class="customer">1 Kyu</div>
												<div class="delivery-details">
													<span class="badge badge-success">Obtenido</span>
													<h5>1er kyu (Ikkyu)</h5>
													<p>Obtenido el 05/06/2021</p>
												</div>
											</li>
											
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-12 col-sm-6 col-12">
							<div class="card h-310 agenda-bg">
								<div class="card-body">
									<div class="agenda">
										<div class="todays-date">
											<h5>Asistencia</h5>
										</div>
										<ul class="agenda-list">
											<li>
												<span class="bullet secondary">&nbsp;</span>
												<div class="details">
													<p>Clase de brazo (Asisti&oacute)</p>
													<small>09:00</small>
												</div>
											</li>
											<li>
												<span class="bullet">&nbsp;</span>
												<div class="details">
													<p>Clase de Patadas (Falla)</p>
													<small>09:30</small>
												</div>
											</li>
											<li>
												<span class="bullet secondary">&nbsp;</span>
												<div class="details">
													<p>Clase de meditaci&oacuten (Asisti&oacute)</p>
													<small>10:00</small>
												</div>
											</li>
											<li>
												<span class="bullet secondary">&nbsp;</span>
												<div class="details">
													<p>Clase de estiramiento (Asisti&oacute)</p>
													<small>09:00</small>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Row end -->
						<?php endif; ?>

</div>
<!-- Main container end -->