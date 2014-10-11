<?php
namespace Login;
use Login\AuthenticateUser;
use Exception;

class Login
{
  private $id, $nameUser, $permission, $logged;

  public function __construct(AuthenticateUser $user)
  {
    $this->id = $user->check()->getId();
    $this->nameUser = $user->check()->getNomeUsuario();
    $this->permission = $user->check()->getPermissao();
    if(empty($this->id))
      throw new Exception("Usuário não autenticado");

    $this->logged = true;
  }
   
  public function userLogged()
  {
    return $this->logged;
  }

  public function getIdUserLogged()
  {
    return $this->id;
  }

  public function getNameUserLogged()
  {
    return $this->nameUser;
  }

  public function getPermissionUserLogged()
  {
    return $this->permission;
  }

  public function logout()
  {
    unset($this->id);
    unset($this->permission);
    unset($this->logged);  
    return true;
  }
}