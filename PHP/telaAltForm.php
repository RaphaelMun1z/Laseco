<?php 
session_start();
ob_start(); 

if(isset($_SESSION['logado'])){
	$_SESSION['tela_modal'] = "
	<form method='POST' action='PHP/alterarDadosForm.php' class='gerenciador_form_contato'>
		<div class='close_gerenciador_form_contato fechar'>
			<i class='fas fa-times'></i>
		</div>
			<h2 class='t_gerenciador_form_contato'>Alterar email</h2>
			<input type='email' name='email_f' class='i_gerenciador_form_contato' placeholder='Email' required>
			<input type='password' name='senha_f' class='i_gerenciador_form_contato' placeholder='Senha' required>
			<input type='submit' name='btn_alt_dados_email' class='i_gerenciador_form_contato' value='salvar'>
	</form>
	";
}

header("Location: ../");