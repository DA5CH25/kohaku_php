<?php

require_once './models/Conexion.clase.php';
require_once './models/Rol.clase.php'; 

    if($petitionAjax){
        require_once "../config/mainModel.php";
    }else{
        require_once "./config/mainmodel.php";
    }

    class modelRegister extends mainModel{
        //funcion para crea un usuario
        public function add_user_model($datos){
            $id_number="n/a";
            $phone="n/a";
            $cellphone="n/a";
            $direction="n/a";
            $lessons=0;
            $user_type=3;
            $id_type=5;
            $user_rank=10;
            $user_status=1;
            $sql=mainModel::connect()->prepare("INSERT INTO usuario(id_usuario,nombre,apellido,numero_identificacion,telefono_fijo,telefono_movil,direccion,correo_electronico,clases_restantes,clave,tipo_usuario_id_tipo_usuario,tipo_documento_id_tipo_documento,rango_usuario_id_rango_usuario,estado_usuario_id_estado_usuario) 
            VALUES(:user_code,:first_name,:last_name,:id_number,:phone,:cellphone,:direction,:email,:lessons,:pass,:user_type,:id_type,:user_rank,:user_status)");
            $sql->bindParam(":user_code", $datos['user_code']);
            $sql->bindParam(":first_name", $datos['first_name']);
            $sql->bindParam(":last_name", $datos['last_name']);
            $sql->bindParam(":id_number", $id_number);
            $sql->bindParam(":phone", $phone);
            $sql->bindParam(":cellphone", $cellphone);
            $sql->bindParam(":direction", $direction);
            $sql->bindParam(":email", $datos['email']);
            $sql->bindParam(":lessons", $lessons);
            $sql->bindParam(":pass", $datos['pass']);
            $sql->bindParam(":user_type", $user_type);
            $sql->bindParam(":id_type", $id_type);
            $sql->bindParam(":user_rank", $user_rank);
            $sql->bindParam(":user_status", $user_status);
            $sql->execute();
            return $sql;
        }

          //funcion para crea un usuario
          public function add_user_full($datos){
            $lessons=0;
            $user_type=3;
            $id_type=1;
            $user_rank=10;
            $user_status=1;
            $sql=mainModel::connect()->prepare("INSERT INTO usuario(id_usuario,nombre,apellido,numero_identificacion,telefono_fijo,telefono_movil,direccion,correo_electronico,clases_restantes,clave,tipo_usuario_id_tipo_usuario,tipo_documento_id_tipo_documento,rango_usuario_id_rango_usuario,estado_usuario_id_estado_usuario) 
            VALUES(:user_code,:first_name,:last_name,:id_number,:phone,:cellphone,:direction,:email,:lessons,:pass,:user_type,:id_type,:user_rank,:user_status)");
            $sql->bindParam(":user_code", $datos['user_code']);
            $sql->bindParam(":first_name", $datos['first_name']);
            $sql->bindParam(":last_name", $datos['last_name']);
            $sql->bindParam(":id_number", $datos['numberdoc']);
            $sql->bindParam(":phone", $datos['phone']);
            $sql->bindParam(":cellphone", $datos['movil']);
            $sql->bindParam(":direction", $datos['direction']);
            $sql->bindParam(":email", $datos['email']);
            $sql->bindParam(":lessons", $lessons);
            $sql->bindParam(":pass", $datos['pass']);
            $sql->bindParam(":user_type", $user_type);
            $sql->bindParam(":id_type", $id_type);
            $sql->bindParam(":user_rank", $user_rank);
            $sql->bindParam(":user_status", $user_status);
            $sql->execute();
            return $sql;
        }

        public function add_bitacora_full($datos){
            $sql=mainModel::connect()->prepare("INSERT INTO bitacora(observacion,usuario_id_usuario,clases_id_clases,fecha,id_profesor) 
            VALUES(:first_name,:last_name,:id_number,:phone,:cellphone)");
            $sql->bindParam(":first_name", $datos['observacion']);
            $sql->bindParam(":last_name", $datos['userid']);
            $sql->bindParam(":id_number", $datos['claseid']);
            $sql->bindParam(":phone", $datos['fecha']);
            $sql->bindParam(":cellphone", $datos['teacherid']);
            $sql->execute();
            return $sql;
        }
        

            
          //funcion para crea un usuario
          public function edit_user($datos){
            $user_code = $datos['user_code'];
            $first_name= $datos['first_name'];
            $last_name=$datos['last_name'];
            $numberdoc= $datos['numberdoc'];
            $phone= $datos['phone'];
            $movil= $datos['movil'];
            $direction= $datos['direction'];
            //$email= $datos['email'];
            $pass= $datos['pass'];

            /*$con = new Conexion();
            $con->ejecutarActualizacion("UPDATE usuario SET nombre='$first_name', apellido ='$last_name', numero_identificacion='$numberdoc', telefono_fijo ='$phone', telefono_movil ='$movil', correo_electonico ='$email', clave ='$pass' WHERE id_usuario ='$user_code'");
            
            $con->cerrarConexion();*/
            $sql=mainModel::connect()->prepare("UPDATE usuario SET nombre=?, apellido =?, numero_identificacion=?, telefono_fijo =?, telefono_movil =?, direccion=?, clave =? WHERE id_usuario =?");   
            //$sql->bindParam('ssssssssi',$first_name,$last_name,$numberdoc,$phone,$movil,$email,$direction,$pass,$user_code);         
            $sql->bindParam(1, $first_name, PDO::PARAM_STR);
            $sql->bindParam(2, $last_name, PDO::PARAM_STR);
            $sql->bindParam(3, $numberdoc, PDO::PARAM_STR);
            $sql->bindParam(4, $phone, PDO::PARAM_STR);
            $sql->bindParam(5, $movil, PDO::PARAM_STR);
            $sql->bindParam(6, $direction, PDO::PARAM_STR);
            $sql->bindParam(7, $pass, PDO::PARAM_STR);
            $sql->bindParam(8, $user_code, PDO::PARAM_STR);
            $sql->execute();
            return $sql;
        }
        
        public function delet_user($dato){

            $cambio="2";
            /*$con = new Conexion();
            $con->ejecutarActualizacion("UPDATE usuario SET nombre='$first_name', apellido ='$last_name', numero_identificacion='$numberdoc', telefono_fijo ='$phone', telefono_movil ='$movil', correo_electonico ='$email', clave ='$pass' WHERE id_usuario ='$user_code'");
            
            $con->cerrarConexion();*/
            $sql=mainModel::connect()->prepare("UPDATE usuario SET estado_usuario_id_estado_usuario=? WHERE id_usuario =?");   
            //$sql->bindParam('ssssssssi',$first_name,$last_name,$numberdoc,$phone,$movil,$email,$direction,$pass,$user_code);         
            $sql->bindParam(1, $cambio, PDO::PARAM_STR);
            $sql->bindParam(2, $dato, PDO::PARAM_STR);
            $sql->execute();
            return $sql;
        }
        }



