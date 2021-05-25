<?php
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

            
          //funcion para crea un usuario
          public function edit_user($datos){
           $datos['user_code']);
           $datos['first_name']);
           $datos['last_name']);
           $datos['numberdoc']);
           $datos['phone']);
           $datos['movil']);
           $datos['direction']);
           , $datos['email']);
            $datos['pass']);

            $sql=mainModel::connect()->prepare("UPDATE kohaku.usuario SET nombre='$datos['first_name']', apellido ='$datos['last_name']', numero_identificacion='$datos['numberdoc']', telefono_fijo ='$datos['phone']', telefono_movil ='$datos['movil']', correo_electonico ='$datos['email']', clave ='$datos['pass']', WHERE id_usuario ='$datos['user_code']'");
                       
            $sql->execute();
            return $sql;
        }



    }