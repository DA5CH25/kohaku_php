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
                        <h6 class="user-email"><?php echo $_SESSION['email_sk']; ?></h6>
                    </div>
                    <div class="list-group">
                        <a href="contacts.html" class="list-group-item">Perfil</a>
                        <a href="/Kohaku_php/?page=class" class="list-group-item">Clases</a>
                        <a href="/Kohaku_php/?page=bitacora" class="list-group-item">Bitacora</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
        <div class="card h-100">
            <div class="card-header">
                <div class="card-title">Notificaciones</div>
                <br>
                <br>
                    <div class="list-group">
                        <a href="contacts.html" class="alert alert-info alert-dismissible fade show">Tienes clases pendientes</a>
                        <a href="/Kohaku_php/?page=class" class="icon-new_releases" class="alert alert-secondary" class="alert alert-info alert-dismissible fade show">Hay informacion pendiente por subir</a>
                        <a href="/Kohaku_php/?page=bitacora" class="alert alert-info alert-dismissible fade show">Tienes nuevas anotaciones en la bitacora</a>
                            <div class="alert alert-secondary" role="alert">
								<i class="icon-new_releases"></i>A simple secondary alert with <a href="#" class="alert-link">Link</a>.
							</div>
                            <div class="alert alert-danger" role="alert">
								<i class="icon-new_releases"></i>A simple danger alert with <a href="#" class="alert-link">Link</a>.
							</div>                                   
                                    
                                    
                    </div>
            </div>
            
        </div>
    </div>
</div>
<!-- Row end -->

</div>
<!-- Main container end -->