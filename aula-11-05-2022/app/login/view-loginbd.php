<?php	
	require_once("./app/conexao/conexao.php");

	try {
		$sql = "SELECT idLogin, nomeLogin, telefoneLogin, emailLogin, fotoLogin, statusLogin FROM login";

		$select = $conexao->query($sql);

		$result = $select->fetchAll();

		/*
		echo "<pre>";
		print_r($result);
		echo "</pre>";
		*/

	} catch (PDOException $e) {
		echo "Erro: ".$e->getMessage();
	}