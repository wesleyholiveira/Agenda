<?php
namespace Login;
use Exception;
use Administrador\AdministradorDao;

class AuthenticateUserAdministrator implements AuthenticateUser
{
  private $id, $user;
  public function __construct(User $user, AdministradorDao $dao)
  {
    $this->dao = $dao;
    $this->user = $user;
  }

  public function check()
  {
    $dados = $this->dao->listarPorEmailSenha($this->user->getEmail(), $this->user->getSenha());
    if(!$dados)
    {
      throw new Exception('Usuário não encontrado');
    }
    $idUser = $dados->id_admin;
    $nomeUser = $dados->nome_admin;
    self::setIdCheckInAuthenticate($idUser);
    self::setNameUserCheckInAuthenticate($nomeUser);
    return $userAuthenticate = $this->user;
  }
  private function setIdCheckInAuthenticate($id)
  {
    $this->user->setId($id);
  }

  private function setNameUserCheckInAuthenticate($nomeUsuario)
  {
    $this->user->setNomeUsuario($nomeUsuario);
  }
}