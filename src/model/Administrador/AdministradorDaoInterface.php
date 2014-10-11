<?php

namespace Administrador;

interface AdministradorDaoInterface
{
	public function inserir(Administrador $administrador);
	public function editar(Administrador $administrador);
	public function listar();
	public function listarPorId($id);
	public function listarPorEmailSenha($email, $senha);
	public function deletar($id);
}