<?php

class Agenda {

	protected $_bd;
	public $_tabela;
	public $_nome = "";
	public $_sobrenome = "";
	public $_email = "";
	public $_telefone = "";
	public $_celular = "";

	public function __construct(Bd $bd,$tabela) {  //variável do tipo bd (classe)
		$this->_bd = $bd;
		$this->_tabela = $tabela;
	}

	public function listar() {

		return $this->_bd->select('*',$this->_tabela,'ORDER BY nome');

	}

	public function remover($id) {
		$this->_bd->remover($this->_tabela,$id);
	}

	public function insert($nome,$sobrenome,$email,$telefone,$celular) {
		$campos = "nome,sobrenome,email,telefone,celular";
		$valores = "'$nome','$sobrenome','$email','$telefone','$celular'";
		$this->_bd->insert($this->_tabela,$campos,$valores);
	}

	public function save() {
		$campos = "nome,sobrenome,email,telefone,celular";
		$valores = "'$this->_nome','$this->_sobrenome','$this->_email','$this->_telefone','$this->_celular'";
		$this->_bd->insert($this->_tabela,$campos,$valores);
	}

	public function update($id, $nome,$sobrenome,$email,$telefone,$celular) {
		$valores = "nome='$nome', sobrenome='$sobrenome', email='$email', telefone='$telefone', celular='$celular'";
		$this->_bd->update($this->_tabela,$valores,$id);
	}

}

?>