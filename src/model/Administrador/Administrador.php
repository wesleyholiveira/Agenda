<?php
namespace Administrador;

class Administrador
{
	private $id;
  private $nome;
	private $email;
  private $senha;
  private $permissao;
	
  public function setId($id)
  {
    if(!is_int($id))
     throw new Exception('Espera receber um valor inteiro.');
    
    $this->id = $id;
  }
  public function getId()
  {
  	return $this->id;
  }

  public function setEmail($email)
  {
  	$email = strtolower($email);
    if(!filter_var($email, FILTER_VALIDATE_EMAIL))
      throw new Exception('EMAIL inválido.');
    
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

  public function setPermissao($permissao)
  {
    $this->permissao = $permissao;
  }
  public function getPermissao()
  {
    return $this->permissao;
  }
}