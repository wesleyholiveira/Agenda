<?php
namespace Login;
use Exception;

class User
{
  private $tipoLogin;
  private $email;
  private $nomeUsuario;
  private $senha;
  private $id;
  private $permissao;

  
  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setNomeUsuario($nomeUsuario)
  {
    $this->nomeUsuario =  $nomeUsuario;
  }

  public function getNomeUsuario()
  {
    return $this->nomeUsuario;
  }
  
  public function setEmail($email)
  {
    $email = strtolower($email);
    if(!filter_var($email, FILTER_VALIDATE_EMAIL))
      throw new Exception('email inválido.');
 
    $this->email = $email;
  }
    
  public function getEmail()
  {
    return $this->email;
  }

  public function setSenha($senha)
  {
    $this->senha = $senha;
  }  
  public function getSenha()
  {
    return $this->senha;
  }

  public function setTipoLogin($tipoLogin)
  {
    $this->tipoLogin = $tipoLogin;
  }  
  public function getTipoLogin()
  {
    return $this->tipoLogin;
  }

  public function getPermissao()
  {
     return $this->permissao;
  }
  
}