<!doctype html>
<html lang="en">
	
<!-- Mirrored from bootstrap.gallery/le-rouge/design/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Apr 2020 10:47:00 GMT -->


<body id="page-top" style="background-color: #393939">
    <?php
        //peticion ajax
        $petitionAjax=false;
        
        //se incluye el archivo vista controlador
        require_once "./controllers/viewsController.php";

        $noTemplateViews = ["forgot-password", "register"];

        //se instancia la vista controlado vistas o vt
        $vt = new viewsController();
        //queremos utilizar la funcion  obtener vista controlador
        //se crea una NUEVA variala $vtA para poder hacer el includ de la variabl en el conenido SN ERROR
        $vtA=$vt->get_views_controller();
        // si vt trae el valor del login se muestra el login

        if(in_array($vtA, $noTemplateViews)):
            // if($vtA=="login" ||  $vtA=="404"):
            require_once "./views/pages/".$vtA.".php";
        elseif($vtA=="login"):
            require_once "./views/pages/login.php";
        elseif($vtA=="index"):
            require_once "./views/index/index.html";
            //si no, me incluye todo el contenida de la página
        else:
            //iniciar seión
            require_once "./controllers/controllerLogin.php";
		    $login = new controllerLogin();
            @session_start(['name'=>'sk']); 
            require_once "./views/formulario.php";
    ?>
    <!-- Page Wrapper -->
    
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
  

    <!-- Logout Modal-->
   
  <!--cierra la etiqueta del if-->          
    <?php endif; ?>
</body>


<!-- Mirrored from bootstrap.gallery/le-rouge/design/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Apr 2020 10:48:09 GMT -->
</html>