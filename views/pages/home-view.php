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
                            <img src="./vendor/img/user18.png" alt="Le Rouge Admin" />
                        </div>
                        <h5 class="user-name"><?php echo $_SESSION['firstname_sk']; ?></h5>
                        <br>
                        <h6 class="user-name"><?php //echo $_SESSION['rango_sk']; ?>Primer Kyu</h6>
                        <br>
                        <h6 class="user-email"><?php echo $_SESSION['email_sk']; ?></h6>
                    </div>
                    <a href="/Kohaku_php/?page=class" class="alert alert-primary alert-dismissible fade show"><i class="icon-warning"></i>Informacion faltante</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
        <div class="card h-100">
            <div class="card-body">
                <div class="account-settings">
                    <div class="user-profile">
								<div class="sale-num">
                                    <div class="info-icon">
                                        <i class="icon-calendar1"></i>
                                    </div>
                                    <h3>clases</h3> 
									<p>estas son proximas clases</p>      
							    </div>    
                    </div>
                                    <a href="/Kohaku_php/?page=class" class="alert alert-secondary alert-dismissible fade show">17:00 pm 19/05/2021</a> 
                                    <a href="/Kohaku_php/?page=class" class="alert alert-secondary alert-dismissible fade show">19:00 pm 19/05/2021</a> 
                                    <a href="/Kohaku_php/?page=class" class="alert alert-secondary alert-dismissible fade show">15:00 pm 20/05/2021</a> 
                </div>
            </div>
        </div>
</div>
	<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
        <div class="card h-100">
            <div class="card-body">
                <div class="account-settings">
                    <div class="user-profile">
								<div class="sale-num">
								<div class="info-icon">
									<i class="icon-shopping-cart1"></i>
								</div>
                                    <h3>Promociones</h3> 
									<p>promoxiones vigentes par ti</p>
								</div>
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
                    <div class="user-profile">
								<div class="sale-num">
								<div class="info-icon">
									<i class="icon-shopping-bag1"></i>
								</div>
									<h3>Bitacora</h3>
									<p>ultimas obsevaciones</p> 
								</div>
                    </div>
                                    <a href="/Kohaku_php/?page=class" class="alert alert-secondary alert-dismissible fade show">instructor: wilson 15/05/2021<br></a> 
                                    <a href="/Kohaku_php/?page=class" class="alert alert-secondary alert-dismissible fade show">instructor: jason 12/05/2021<br></a> 
                                    <a href="/Kohaku_php/?page=class" class="alert alert-secondary alert-dismissible fade show">instructor: daniel 9/05/2021<br></a> 
                                    <a href="/Kohaku_php/?page=class" class="alert alert-secondary alert-dismissible fade show">instructor: wilson 7/05/2021<br></a>
                </div>
            </div>
        </div>
                        
    </div>
</div>
<br>
<br>
<div class="row gutters">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Progreso y asistencia</div>
								</div>
								<div class="card-body pt-0">
									<div id="visitors"></div>
								</div>
							</div>
						</div>
                        </div>
<!-- Row end -->

</div>
<!-- Main container end -->