<?php

session_start();
ob_start();

require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');
require_once('conexao.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

$dados_form_msg = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if(!empty($dados_form_msg['btn_envia_msg']))
{
	$query_validar = "SELECT email, senha_email
	FROM dados_gerais 
	LIMIT 1";
	$result_db = $conn->prepare($query_validar);
	$result_db->execute();

	if(($result_db) AND ($result_db->rowCount() != 0)) 
	{
		$dados_db = $result_db->fetch(PDO::FETCH_ASSOC);
		$mail = new PHPMailer(true);
        
		try {
			$mail->SMTPDebug = SMTP::DEBUG_SERVER;
			$mail->isSMTP();
			$mail->Host = 'smtp.gmail.com';
			$mail->SMTPAuth = true;
			$mail->Username = $dados_db['email'];
			$mail->Password = $dados_db['senha_email'];
			$mail->Port = 587;

			$mail->setFrom($dados_db['email']);
			$mail->addAddress($dados_db['email']);

			$mail->isHTML(true);
			$mail->Subject = 'Nova mensagem';
			$mail->Body = "
				<h3><b>" . $dados_form_msg['f_nome'] . "</b></h3>
				<h5>" . $dados_form_msg['f_email'] . "</h5>
				<h5>" . $dados_form_msg['f_msg'] . "</h5>
			"; 
			$mail->AltBody = "Mensagem";

			if($mail->send()){
				$_SESSION['tela_modal'] = "
				<form class='gerenciador_form_contato'>
					<div class='close_gerenciador_form_contato fechar'>
						<i style='color: white;
		    					font-size: 2rem;
		    					position: absolute;
		    					transform: translateY(40%);
		    					right: 5%;' class='fas fa-times'></i>
					</div>
					<h2 style='padding: 0 10px; color: white;'>Mensagem enviada com sucesso!</h2>
				</form>
				"; 
			}else{
				$_SESSION['tela_modal'] = "
				<form class='gerenciador_form_contato'>
					<div class='close_gerenciador_form_contato fechar'>
						<i style='color: white;
		    					font-size: 2rem;
		    					position: absolute;
		    					transform: translateY(40%);
		    					right: 5%;' class='fas fa-times'></i>
					</div>
					<h2 style='padding: 0 10px; color: white;'>Erro ao enviar a mensagem!</h2>
				</form>
				";
			}
		} catch (Exception $e) {
			$_SESSION['tela_modal'] = "
			<form class='gerenciador_form_contato'>
				<div class='close_gerenciador_form_contato fechar'>
					<i style='color: white;
							font-size: 2rem;
							position: absolute;
							transform: translateY(40%);
							right: 5%;' class='fas fa-times'></i>
				</div>
				<h2 style='padding: 0 10px; color: white;'>Erro ao enviar a mensagem!</h2>
			</form>
			";
			echo $e;
		}
	}else{
		$_SESSION['tela_modal'] = "
		<form class='gerenciador_form_contato'>
			<div class='close_gerenciador_form_contato fechar'>
				<i style='color: white;
						font-size: 2rem;
						position: absolute;
						transform: translateY(40%);
						right: 5%;' class='fas fa-times'></i>
			</div>
			<h2 style='padding: 0 10px; color: white;'>Erro ao enviar a mensagem!</h2>
		</form>
		";
	}
}else{
	$_SESSION['tela_modal'] = "
	<form class='gerenciador_form_contato'>
		<div class='close_gerenciador_form_contato fechar'>
			<i style='color: white;
					font-size: 2rem;
					position: absolute;
					transform: translateY(40%);
					right: 5%;' class='fas fa-times'></i>
		</div>
		<h2 style='padding: 0 10px; color: white;'>Erro!</h2>
	</form>
	";
}
 
header("Location: ../");