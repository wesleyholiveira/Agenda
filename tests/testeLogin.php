<?php
require_once '../autoload.php';
use Administrador\AdministradorDao;
use Administrador\Administrador;


try{  
   $admin = new Administrador();
   $dao = new AdministradorDao();
   #$admin->setSenha('admin');
   var_dump($dao->listarPorEmailSenha("admin@admin.com.br", "admin"));
}
catch(Exception $e){
  var_dump($e->getMessage());
}
