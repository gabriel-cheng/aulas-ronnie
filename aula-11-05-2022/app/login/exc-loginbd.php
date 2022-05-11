<?php

	if(!filter_input(INPUT_POST, "id", FILTER_SANITIZE_NUMBER_INT)){
		echo "ID inválido!";
	}
	else{
	             
		require_once("../conexao/conexao.php");
		

		$id = filter_input(INPUT_POST, "id", FILTER_SANITIZE_NUMBER_INT);
		
		try {
			$comandoSQL = $conexao->prepare("DELETE FROM `login` WHERE `idLogin`=:id");

			//$comandoSQL->bindParam(":id", $id);
            //$comandoSQL->execute();
			$comandoSQL->execute(array(
                ':id'     => $id
            ));

			if($comandoSQL->rowCount() > 0){
				header("location:../../view-login.php");
			}
			else{
				echo("Erro na exclusão do registro.");
			}
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}