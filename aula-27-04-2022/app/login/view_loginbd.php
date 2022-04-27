<?php	
	require_once("./app/conexao/conexao.php");
	try {
		$comandoSQL = "SELECT idLogin, nomeLogin, telefoneLogin, 
					emailLogin, fotoLogin, statusLogin FROM login";

		$select = $conexao->query($comandoSQL);
		$result = $select->fetchAll();
		/*
		echo "<pre>";
		print_r($result);
		echo "</pre>";
		*/
	} catch (PDOException $e) {
		echo "Erro: ".$e->getMessage();
	}