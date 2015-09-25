<?php

	function adicionar($nome,$sobrenome,$email,$telefone,$celular) {
		$sql = "INSERT INTO agenda (nome,sobrenome,email,telefone,celular) ";
		$sql.= "VALUES ('$nome','$sobrenome','$email','$telefone','$celular');";
		mysql_query($sql);
	}

	function alterar($id,$nome,$sobrenome,$email,$telefone,$celular) {
		$sql = "UPDATE agenda SET nome='$nome',sobrenome='$sobrenome',email='$email',";
		$sql.= "telefone='$telefone',celular='$celular' ";
		$sql.= "WHERE id=$id;";
		mysql_query($sql);
	}


	function listar() {
		$sql = "SELECT * FROM agenda ORDER BY nome;";
		$res = mysql_query($sql);
		$ret = array();
		if (mysql_num_rows($res)>0) {
			for ($i=0;$i<mysql_num_rows($res); $i++) {
				$ret[] = mysql_fetch_array($res);
			}
		}
		return $ret;
	}

	function get($id) {
		$sql = "SELECT * FROM agenda WHERE id=$id;";
		$res = mysql_query($sql);
		$ret = array();
		if (mysql_num_rows($res)==1) {
			$ret = mysql_fetch_array($res);
		}
		return $ret;
	}

 ?>