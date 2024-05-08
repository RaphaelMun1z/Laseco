<?php 
session_start();
ob_start(); 

if(isset($_SESSION['logado'])){
	$_SESSION['tela_modal'] = "
	<form method='POST' action='PHP/alterarSenhaLogin.php' class='gerenciador_form_contato'>
		<div class='close_gerenciador_form_contato fechar'>
			<i class='fas fa-times'></i>
		</div>
			<h2 class='t_gerenciador_form_contato'>Alterar senha login</h2>
			<input type='password' name='senha_ger_alt' class='i_gerenciador_form_contato' placeholder='Senha' required>
			<input type='submit' name='btn_alt_sen_ger' class='i_gerenciador_form_contato' value='salvar'>
	</form>
	";
}

header("Location: ../");