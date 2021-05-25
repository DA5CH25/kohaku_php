<?php
    //CONTROLADOR PARA CREAR ADMINISTRADOR
    if($petitionAjax){
        require_once "../models/modelRegister.php";
    }else{
        // si la Peticion ajax es false aceder a la configuración DB
        require_once "./models/modelRegister.php";
    }

    //clase heredada de modelo administrador
    class controllerRegister extends modelRegister{

        public function add_user_controller(){
            $firstname= mainModel::clean_string($_POST['first_name']); 
            $lastname= mainModel::clean_string($_POST['last_name']);
            $email= mainModel::clean_string($_POST['email']);
            $pass= mainModel::clean_string($_POST['pass']);
            $passconfirm= mainModel::clean_string($_POST['pass_confirm']);

            //validación contraseñas
            if($pass!=$passconfirm){
                $alert=[
                    "alert"=>"simple",
                    "title"=>"Ocurrio un error inesperado",
                    "text"=>"Las contraseñas no coinciden",
                    "type"=>"error"
                ];
                return mainModel::sweet_alert($alert);
            }
            else{
                //validación de que el correo no este registrado
                $consult=mainModel::run_simple_query("SELECT correo_electronico FROM usuario WHERE correo_electronico ='$email'");

                if($consult->rowCount()>=1){
                    $alert=[
                        "alert"=>"simple",
                        "title"=>"Ocurrio un error inesperado",
                        "text"=>"El correo electronico ingresado ya está registrado",
                        "type"=>"error"
                    ];
                    return mainModel::sweet_alert($alert);
                }
                else{
                    //validación cuantos registros tengo
                    $codeconsult=mainModel::run_simple_query("SELECT id_usuario FROM usuario");
                    //variable para guardar la consulta
                    $usercode=($codeconsult->rowCount())+1;
                    // generar código aletaorio de 10 cifras AC: Account
                    //$codigo=mainModel::generate_random_code("AC", 10, $num);

                    // encriptar la contraseña
                    $pass=mainModel::encryption($pass);

                    // Crar un array para ingresar una cuenta
                    $dataRegisterCount=[
                        "first_name"=>$firstname,
                        "last_name"=>$lastname,
                        "email"=>$email,
                        "pass"=>$pass,
                        "user_code"=>$usercode
                    ];
                    $saveAccount=modelRegister::add_user_model($dataRegisterCount);
                    // Comprobar si se registro la cuenta
                    if($saveAccount->rowCount()>=1){
                    
                        $_SESSION['firstname_sk']=$dataRegisterCount['first_name'];
                        $_SESSION['lastname_sk']=$dataRegisterCount['last_name'];
                        $_SESSION['email_sk']=$dataRegisterCount['email'];
                        $_SESSION['usertype_sk']=3;
                        $_SESSION['userid_sk']=$dataRegisterCount['user_code'];
                        $_SESSION['rango_sk']=10;
                        $_SESSION['aux_sk']=0;
    
                        //Se agrega este código para acceder a la vista principal
                        $url=SERVER_RELATIVE_URL."dashboard";
                    
                   
                        return $url;
                    }
                    else{
                        $alert=[
                            "alert"=>"simple",
                            "title"=>"Ocurrio un error inesperado",
                            "text"=>"La cuenta no se pudo registrar",
                            "type"=>"error"
                        ];
                        return mainModel::sweet_alert($alert);
                    }
                    
                }
            }
            
        }
    
        
        public function add_user_full_controller(){
            $firstname= mainModel::clean_string($_POST['first_name']); 
            $lastname= mainModel::clean_string($_POST['last_name']);
            $email= mainModel::clean_string($_POST['email']);
            $pass= mainModel::clean_string($_POST['pass']);
            $direction= mainModel::clean_string($_POST['direction']);
            $movil= mainModel::clean_string($_POST['movil']);
            $phone= mainModel::clean_string($_POST['phone']);
            $numberdoc= mainModel::clean_string($_POST['numberdoc']);




            //validación contraseñas
            
                //validación de que el correo no este registrado
                $consult=mainModel::run_simple_query("SELECT correo_electronico FROM usuario WHERE correo_electronico ='$email'");

                if($consult->rowCount()>=1){
                    $alert=[
                        "alert"=>"simple",
                        "title"=>"Ocurrio un error inesperado",
                        "text"=>"El correo electronico ingresado ya está registrado",
                        "type"=>"error"
                    ];
                    return mainModel::sweet_alert($alert);
                }
                else{
                    //validación cuantos registros tengo
                    $codeconsult=mainModel::run_simple_query("SELECT id_usuario FROM usuario");
                    //variable para guardar la consulta
                    $usercode=($codeconsult->rowCount())+1;
                    // generar código aletaorio de 10 cifras AC: Account
                    //$codigo=mainModel::generate_random_code("AC", 10, $num);

                    // encriptar la contraseña
                    $pass=mainModel::encryption($pass);

                    // Crar un array para ingresar una cuenta
                    $dataRegisterCount=[
                        "first_name"=>$firstname,
                        "last_name"=>$lastname,
                        "email"=>$email,
                        "pass"=>$pass,
                        "user_code"=>$usercode,
                        "direction"=>$direction,
                        "movil"=>$movil,
                        "phone"=>$phone,
                        "numberdoc"=>$numberdoc
                    ];
                    $saveAccount=modelRegister::add_user_full($dataRegisterCount);
                    // Comprobar si se registro la cuenta
                    if($saveAccount->rowCount()>=1){
                    
                    }
                    else{
                        $alert=[
                            "alert"=>"simple",
                            "title"=>"Ocurrio un error inesperado",
                            "text"=>"La cuenta no se pudo registrar",
                            "type"=>"error"
                        ];
                        return mainModel::sweet_alert($alert);
                    }
                    
                }
            
            
        }

         
        public function edit_user_controller(){
            $firstname= mainModel::clean_string($_POST['first_name']); 
            $lastname= mainModel::clean_string($_POST['last_name']);
            $email= mainModel::clean_string($_POST['email']);
            $pass= mainModel::clean_string($_POST['pass']);
            $direction= mainModel::clean_string($_POST['direction']);
            $movil= mainModel::clean_string($_POST['movil']);
            $phone= mainModel::clean_string($_POST['phone']);
            $numberdoc= mainModel::clean_string($_POST['numberdoc']);




            //validación contraseñas
            
                //validación de que el correo no este registrado
                $consult=mainModel::run_simple_query("SELECT correo_electronico FROM usuario WHERE correo_electronico ='$email'");

                
                    // generar código aletaorio de 10 cifras AC: Account
                    //$codigo=mainModel::generate_random_code("AC", 10, $num);

                    // encriptar la contraseña
                    $pass=mainModel::encryption($pass);

                    // Crar un array para ingresar una cuenta
                    $dataRegisterCount=[
                        "first_name"=>$firstname,
                        "last_name"=>$lastname,
                        "email"=>$email,
                        "pass"=>$pass,
                        "user_code"=>$usercode,
                        "direction"=>$direction,
                        "movil"=>$movil,
                        "phone"=>$phone,
                        "numberdoc"=>$numberdoc
                    ];
                    $saveAccount=modelRegister::edit_user_full($dataRegisterCount);
                    // Comprobar si se registro la cuenta
                    if($saveAccount->rowCount()>=1){
                    
                    }
                    else{
                        $alert=[
                            "alert"=>"simple",
                            "title"=>"Ocurrio un error inesperado",
                            "text"=>"La cuenta no se pudo registrar",
                            "type"=>"error"
                        ];
                        return mainModel::sweet_alert($alert);
                    }
                    
                
            
            
        }
    
    
        public function add_user_incomplete_data() {
            $alert=[
                "alert"=>"simple",
                "title"=>"Información incompleta",
                "text"=>"Diligencie todos los campos",
                "type"=>"error"
            ];

            return mainModel::sweet_alert($alert);
        }

    
    }
?>