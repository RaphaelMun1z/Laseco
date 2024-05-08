<?php 
session_start();
ob_start(); 

if(isset($_SESSION['logado'])){
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
	$_SESSION['tela_modal'] = "
	<form method='POST' action='PHP/login.php' class='gerenciador_form_contato'>
		<div class='close_gerenciador_form_contato fechar'>
			<i class='fas fa-times'></i>
		</div>
		<div class='sessao_gerenciador_form_contato'>
			<h2>Gerenciador</h2>
			<img src='CSS/Imagens/gerenciador.png'>
			<div>
				<input type='password' name='g_senha' placeholder='Digite aqui sua senha' required>
				<input type='submit' name='btn_acessar' value='Acessar'>
			</div>
		</div>
	</form>
	";
}

header("Location: ../");
