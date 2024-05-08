<?php
session_start();
ob_start();
include_once 'conexao.php';

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if(!empty($dados['btn_acessar']))
{
	$query_validar = "SELECT *
	FROM dados_gerais 
	LIMIT 1";
	$result_db = $conn->prepare($query_validar);
	$result_db->execute();

	if(($result_db) AND ($result_db->rowCount() != 0)) 
	{
		$dados_db = $result_db->fetch(PDO::FETCH_ASSOC);
		if(password_verify($dados['g_senha'], $dados_db['senha_ger']))
		{
			$_SESSION['logado'] = true;
			$_SESSION['identificacao'] = $dados_db['id'];
			$_SESSION['tela_modal'] = "
			<form class='gerenciador_form_contato'>
				<div class='close_gerenciador_form_contato fechar'>
					<i class='fas fa-times'></i>
				</div>
					<h2 class='links_gerenciador_form_contato'>Ações</h2>
					<a class='links_gerenciador_form_contato' href='PHP/telaAltSenhaLogin.php'> - Alterar senha de login</a>
					<a class='links_gerenciador_form_contato' href='PHP/telaAltForm.php'> - Alterar email/senha do formulário de contato</a>
			</form>
			"; 
		}else{
			$_SESSION['tela_modal'] = "<script> alert('Senha errada!'); </script>";
		}
	}else{
		$_SESSION['tela_modal'] = "<script> alert('Senha errada!'); </script>";
	}
}else{
	$_SESSION['tela_modal'] = "<script> alert('Erro!'); </script>";
}

header("Location: ../");
?>

		