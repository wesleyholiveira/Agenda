<?php
namespace Administrador;

use Connection\Connection;
use Administrador\Administrador;
use Administrador\AdministradorDaoInterface;
use PDO;
use Exception;

class AdministradorDao implements AdministradorDaoInterface
{
	private $bd = 'mysql';
  private $conn;
  
  public function __construct()
  {
    $this->conn = Connection::open($this->bd); 
  }

	public function inserir(Administrador $admin)
	{
    try
    {
      $stmt = $this->conn->prepare('INSERT INTO tb_admin
                                    (
                                      nome_admin, email_admin, senha_admin, permissao
                                    )
                                    VALUES
                                    ( 
                                      ?, ?
                                    )'
                                  );
      $stmt->bindParam(1, $admin->getNome());
      $stmt->bindParam(2, $admin->getEmail());
      $stmt->bindParam(3, $admin->getSenha());
      $stmt->bindParam(4, $admin->getPermissao());
      return $stmt->execute();
    }
    catch(PDOException $e)
    {
      return $e->getMessage();
    }

    return false;  
  }

  public function editar(Administrador $admin)
  {
    try
    {
      $stmt = $this->conn->prepare('UPDATE tb_admin
                                    SET
                                    nome_admin  = ?,
                                    email_admin =  ?,
                                    senha_admin =  ?,
                                    permissao   =  ?
                                    WHERE 
                                    id_admin = ?
                                  ');
      $stmt->bindParam(1, $admin->getNome());
      $stmt->bindParam(2, $admin->getEmail());
      $stmt->bindParam(3, $admin->getSenha());
      $stmt->bindParam(4, $admin->getPermissao());
      return $stmt->execute();
    }
    catch(PDOException $e)
    {
      return $e->getMessage();
    }

    return false;  
  }

  public function listar()
  {
    try
    {
      $result = $this->conn->query('SELECT * FROM tb_admin ORDER BY email_admin ASC');
      return $result->fetchAll(PDO::FETCH_OBJ);
    }
    catch(PDOException $e)
    {
      return $e->getMessage();
    }

    return false;  
  }

  public function listarPorId($id)
  {
    try
    {
      $stmt = $this->conn->prepare('SELECT * FROM tb_admin WHERE id_admin = ?');
      $stmt->bindParam(1, $id);
      $stmt->execute();
      return $stmt->fetch(PDO::FETCH_OBJ);
    }
    catch(PDOException $e)
    {
      return $e->getMessage();
    }
    return false;
  }

  public function listarPorEmailSenha($email, $senha)
  {
    try
    {
      $stmt = $this->conn->prepare('SELECT id_admin, nome_admin, email_admin, senha_admin, permissao
                                    FROM tb_admin
                                    WHERE 
                                    email_admin = ?
                                    AND
                                    senha_admin = ?
                                  ');
      $stmt->bindParam(1, $email);
      $stmt->bindParam(2, $senha);
      $stmt->execute();
      $dados = $stmt->fetch(PDO::FETCH_OBJ);
      if($dados == false)
        throw new Exception("Usuário não encontrado");

      return $dados;
        
    }
    catch(PDOException $e)
    {
      return $e->getMessage();
    }
    return false;
  }

  public function deletar($id)
  {
    try
    {   
      $stmt = $this->conn->prepare('DELETE FROM 
                                    tb_admin
                                    WHERE
                                    id_admin = ?
                                  ');
      $stmt->bindParam(1, $id);
      return $stmt->execute();
    }
    catch(PDOException $e)
    {
      return $e->getMessage();
    }
    return false;
  } 

}