<?php
require_once './models/Roles.dao.php'; 

class controllerEdit extends RolesDAO{
     public function user_data($data){
        $userdata = RolesDao::buscarPorId ($data);
        return $userdata;
     }
}