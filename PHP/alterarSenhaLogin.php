<?php
session_start();
ob_start();

if(isset($_SESSION['logado'])){
	include_once 'conexao.php';

	$dadosForm = filter_input_array(INPUT_POST, FILTER_DEFAULT);  

	if(!empty($dadosForm['btn_alt_sen_ger'])){
		$query_altera_dados = "
		UPDATE dados_gerais
		SET senha_ger = '" . password_hash($dadosForm['senha_ger_alt'], PASSWORD_DEFAULT) . "'
		WHERE id =:identificacao
		LIMIT 1";
		$altera_senha_ger = $conn->prepare($query_altera_dados);
		$altera_senha_ger->bindParam(':identificacao', $_SESSION['identificacao'], PDO::PARAM_INT);
		$altera_senha_ger->execute();

		if($altera_senha_ger->rowCount()){
			$_SESSION['tela_modal'] = "<script> alert('Senha alterada com sucesso!'); </script>";
		}else{
			$_SESSION['tela_modal'] = "<script> alert('Erro!'); </script>";
		}
	}else{
		$_SESSION['tela_modal'] = "<script> alert('Erro!'); </script>";
	}
}else{
	$_SESSION['tela_modal'] = "<script> alert('Erro!'); </script>";
}


header("Location: ../");