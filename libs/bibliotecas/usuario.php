<?php

/**
*
*/
class Usuario
{
	protected $_bd;
	private $_tabela = "usuario";
	private $_nome;
	private $_login;
	private $_senha;

	function __construct(Bd $bd)
	{
		$this->_bd = $bd;
	}

	//  gets
	public function getNome()
	{
		return $this->_nome;
	}

	public function getLogin()
	{
		return $this->_login;
	}

	public function getSenha()
	{
		return $this->_Senha;
	}

	//  sets
	public function setNome($nome)
	{
		$this->_nome = $nome;
	}

	public function setLogin($login)
	{
		$this->_login = $login;
	}
	public function setSenha($senha)
	{
		$this->_senha = $senha;
	}

	//  insert
	public function insert()
	{
		$campos = "nome,login,senha";
		$valores = "'$this->_nome','$this->_login','$this->_senha'";
		$this->_bd->insert($this->_tabela,$campos,$valores);
	}

	//  update - save
	public function update($id)
	{
		$valores = "nome='$this->_nome', login='$this->_login', senha='$this->_senha'";
		$this->_bd->update($this->_tabela,$valores,$id);
	}

	//  remover
	public function remover($id)
	{
		$this->_bd->remover($this->_tabela,$id);
	}

	//  listar usuários
	public function listar()
	{
		return $this->_bd->select('*',$this->_tabela,'ORDER BY nome');
	}

	//  Get - Pega apenas um registro no bd
	public function get($id)
	{
		return $this->_bd->get($this->_tabela,$id);
	}

	//  Autenticação
	public function autentica($login,$senha)
	{
		$parametros = " WHERE login='$login' AND senha='$senha'";
		return count($this->_bd->select('login',$this->_tabela,$parametros));
	}
}

?>