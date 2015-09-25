<?php

class Bd {

	// atributos
	protected $_host;
	protected $_user;
	protected $_senha;
	protected $_bd;

// construtor
	public function __construct($host,$user,$senha,$bd) {
		$this->_host = $host;
		$this->_user = $user;
		$this->_senha = $senha;
		$this->_bd = $bd;
	}

	// gets
	public function getHost() {
		return $this->_host;
	}

	public function getUser() {
		return $this->_user;
	}

	public function getBd() {
		return $this->_bd;
	}

	// sets
		// em branco


	// cria conexão com o banco
	public function connect() {
		mysql_connect($this->_host,$this->_user,$this->_senha);
		mysql_select_db($this->_bd);
	}

	public function select($colunas,$tabela,$parametros) {

		$sql = "SELECT $colunas FROM $tabela $parametros;";
		$res = mysql_query($sql);
		$ret = array();
		if (mysql_num_rows($res)>0) {
			for ($i=0;$i<mysql_num_rows($res); $i++) {
				$ret[] = mysql_fetch_array($res);
			}
		}
		return $ret;

	}

	public function remover($tabela,$id) {
		$sql = "DELETE FROM $tabela WHERE id=$id;";
		mysql_query($sql);
	}

	public function insert($tabela,$campos,$valores) {
		$sql = "INSERT INTO `$tabela` ($campos) VALUES ($valores);";
		mysql_query($sql);
	}

	public function update($tabela,$valores,$id) {
		$sql = "UPDATE `$tabela` SET $valores WHERE id=$id;";
		mysql_query($sql);
	}

}

?>

