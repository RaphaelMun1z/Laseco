<?php
session_start();
ob_start();

if(isset($_SESSION['logado'])){
	include_once 'conexao.php';

	$dadosForm2 = filter_input_array(INPUT_POST, FILTER_DEFAULT);  

	if(!empty($dadosForm2['btn_alt_dados_email'])){
		$query_altera_dados = "
		UPDATE dados_gerais
		SET email = '" . $dadosForm2['email_f'] . "',
		senha_email = '" . $dadosForm2['senha_f'] . "'
		WHERE id =:identificacao
		LIMIT 1";
		$altera_senha_ger = $conn->prepare($query_altera_dados);
		$altera_senha_ger->bindParam(':identificacao', $_SESSION['identificacao'], PDO::PARAM_INT);
		$altera_senha_ger->execute();

		if($altera_senha_ger->rowCount()){
			$_SESSION['tela_modal'] = "<script> alert('Senha e email alterados com sucesso!'); </script>";
		}else{
			$_SESSION['tela_modal'] = "<script> alert('Erro 123!'); </script>";
		}
	}else{
		$_SESSION['tela_modal'] = "<script> alert('Erro!'); </script>";
	}
}else{
	$_SESSION['tela_modal'] = "<script> alert('Erro!'); </script>";
}

header("Location: ../");