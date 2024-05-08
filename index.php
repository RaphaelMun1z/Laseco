<?php
	session_start();
	ob_start(); 
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<!-- Metas -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Laseco">
	<meta name="description" content="Laseco - Ensino de Línguas • Tradução • Interpretação • Cicerone">
	<!-- Bibliotecas -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
	<!-- Links -->
	<link rel="stylesheet" href="CSS/Laseco_style.css">
	<link rel="shortcut icon" href="CSS/Imagens/icone_laseco.ico"> 
	<title>Laseco</title>
</head>
<body>

	<section class="loader">
		<div class="google_loader">
			<div class="dot blue"></div>
			<div class="dot red"></div>
			<div class="dot blue"></div>
			<div class="dot red"></div>
		</div>
	</section>

	<section class="pop-up">
		<img id="imgPopUp" src="CSS/Imagens/imgWhats.png" style="position: relative;display: flex;width: fit-content;margin-left: 40px;object-fit: cover;height: 100%;filter: drop-shadow(7px 7px 10px black);z-index: 3;">
		<div style="transform: skewX(20deg);width: calc(50% + 50px);background: #eb452d;position: absolute;z-index: 1;left: -50px;height: 100%;">
    		<div style="width: 50%;background: #0b385b;position: absolute;left: 0;z-index: 2;height: 100%;"></div>
		</div>
		<div id="infoPopUp">
			<div class="whatsPopUp">
				<a href="http://api.whatsapp.com/send?1=pt_BR&phone=5538997432120" target="_blank">
				<img src="CSS/Imagens/ing.jpg">Gabriel</a>
			</div>
			<div class="whatsPopUp">
				<a href="http://api.whatsapp.com/send?1=pt_BR&phone=5511983488606" target="_blank">
				<img src="CSS/Imagens/esp.jpg">Elaine</a>
			</div>
			<div class="whatsPopUp">
				<a href="http://api.whatsapp.com/send?1=pt_BR&phone=5511987511334" target="_blank">
				<img src="CSS/Imagens/bra.jpg">Rubens</a>
			</div>
		</div>
		<i class="fas fa-times closePopUp"></i>
	</section>

	<header>
		<nav id="nav_bar">
			<input type="checkbox" id="check_nav_bar">
			<a href="#" id="logo_nav_bar">
				<img src="CSS/Imagens/logo_laseco_alt.png" alt="">
				<p>La<span>se</span>co</p>
			</a>
			<label for="check_nav_bar" class="check_nav_bar_btn">
				<i class="fas fa-bars"></i>
			</label>
			<ul id="ancoras_nav_bar">
				<li class="scroll_ativo"><a class="backPage" href="#">Início</a></li>
				<li><a class="LN_Sobre">Sobre</a></li>
				<li><a class="LN_Cursos">Cursos</a></li>
				<li><a class="LN_Diferenciais">Tradução</a></li>
				<li><a class="LN_Metodologia">Metodologia</a></li>
				<li><a class="LN_Contato">Contato</a></li>
				<?php 
				if(isset($_SESSION['logado'])): 
					echo "<li><a href='PHP/logout.php' class='LN_Contato'><i class='fas fa-sign-out-alt'></i></a></li>"; 
				else: 
					echo "<li><a href='PHP/verificaLogin.php' class='LN_Contato'><i class='fas fa-sign-in-alt'></i></a></li>"; 
				endif; 
				?>
			</ul>
		</nav>
		<div class="base_waves">
			<div class="wave wave1"></div>
			<div class="wave wave2"></div>
			<div class="wave wave3"></div>
			<div class="wave wave4"></div>
		</div>
	</header>

	<section class="sessao anime" id="l_sobre">
		<div id="sessao_aux_wrap">
			<h2>Sobre a LASECO</h2>
			<p style="padding: 10px 30px;">
				A LASECO conta com mais de vinte anos de experiência atuando no mercado de línguas com o ensino, tradução,
				interpretação e consultoria aos setores público e privado. Nossa história começou em São Paulo e já alcança vários
				estados no Brasil e diferentes países mundo afora. Ao longo desses anos temos atuado no ensino presencial e remoto
				de línguas para falantes de português e falantes de outras línguas. Nossa carteira de clientes atendidos ao longo dos
				anos é composta de pessoas físicas e jurídicas de pequeno, médio e grande porte, com serviços de qualidade prestados
				nos mais diversos projetos.			
			</p>
			<p class="itemCursos" id="subtitleSobre">Consultor Sênior</p>
			<p style="padding: 5px 30px;">
				PhD, MA, BA e Especialista no ensino, tradução e interpretação de línguas no Brasil e no
				exterior. Possui larga experiência no ensino e assessoria na área com atuação no setor público e privado em inúmeras
				instituições, universidades e empresas nacionais e internacionais. Examinador dos exames internacionais das
				universidades de Cambridge e Salamanca, bem como em consultoria educacional de universidades e dos governos
				americano e britânico.
			</p>
		</div>
		<img src="CSS/Imagens/Sobre.jpg">
	</section>

	<section class="sessao anime anime-start" id="l_cursos">
		<div id="sessao_aux_wrap">
			<h2>Nossos cursos</h2>
			<p style="padding: 10px 30px;">Avaliamos, formatamos, implementamos e assessoramos soluções para o aprendizado da língua desejada segundo as
necessidades individuais ou corporativas.</p>
			<p class="itemCursos">✓ Para fins gerais</p>
			<p class="itemCursos">✓ Para fins profissionais</p>
			<p class="itemCursos">✓ Para fins acadêmicos</p>
			<p class="itemCursos">✓ Português para falantes de outras línguas</p>
			<p class="itemCursos" style="text-transform: uppercase;">Preparatórios:</p>
			<br>
			<p class="itemCursos">✓ Para exames internacionais</p>
			<br>
			<p class="itemCursos">✓ Para entrevistas de emprego</p>
			<br>
			<p class="itemCursos">✓ Para participação em reuniões de negócios, congressos e eventos, e apresentações comerciais
			ou acadêmicas.</p>
		</div>
		<div id="containerFlags">
			<section class="sessao_glass_card anime">

				<div class="card_idioma card" style="height: auto;align-items: center;">
					<div class="card_idioma_img" style="height: auto;">						
						<img src="CSS/Imagens/Cursos.jpeg" style="object-fit: contain;transform: scale(1.3);">
					</div>
				</div>

				<div class="card_idioma card" style="height: auto;">
					<div class="card_idioma_img">
						<img src="CSS/Imagens/ing.jpg" alt="">
					</div>
					<div class="card_idioma_desc">
						<h3>inglês</h3>
					</div>
				</div>

				<div class="card_idioma card">
					<div class="card_idioma_img">
						<img src="CSS/Imagens/esp.jpg" alt="">
					</div>
					<div class="card_idioma_desc">
						<h3>espanhol</h3>		
					</div>
				</div>

				<div class="card_idioma card">
					<div class="card_idioma_img">
						<img src="CSS/Imagens/bra.jpg" alt="">
					</div>
					<div class="card_idioma_desc">
						<h3>português</h3>		
					</div>
				</div>

			</section>	
		</div>
	</section>

    <section class="sessao sessao_diferencial anime anime-start" id="l_diferenciais">
		<div id="aux_diferenciais">
			<div class="wrap_img_diferenciais">
				<h2 style="width: 100%; padding: 0;">Nossos Serviços de Tradução</h2>
				<h4 style="color: #0b385b;padding: 5px 0;">Tradução, Interpretação e Cicerone</h4>
				<h4 style="color: #0b385b;">Satisfação garantida e serviços com confiabilidade, confidencialidade e eficiência, mantendo-se ao mesmo tempo, aqualidade e uniformidade terminológica esperadas.</h4>
			</div>
			<div class="wrap_img_diferenciais">	
				<img src="CSS/Imagens/Traducao.jpg" alt="">
			</div>
		</div>
		
		<div id="base_diferenciais">
			
			<div class="base_diferenciais_wrap">
				<div>
					<img src="CSS/Imagens/img1.png" alt="">
					<p>Simultânea</p>
				</div>
				<div>
					<img src="CSS/Imagens/img4.png" alt="">
					<p>Consecutiva</p>
				</div>
				<div>
					<img src="CSS/Imagens/img7.png" alt="">
					<p>Remota</p>
				</div>
			</div>

			<div class="base_diferenciais_wrap">
				<div>
					<img src="CSS/Imagens/img2.png" alt="">
					<p>Degravação</p>
				</div>
				<div>
					<img src="CSS/Imagens/img5.png" alt="">
					<p>Diagramação</p>
				</div>
				<div>
					<img src="CSS/Imagens/img8.png" alt="">
					<p>Legendagem</p>
				</div>
			</div>

			<div class="base_diferenciais_wrap">
				<div>
					<img src="CSS/Imagens/img3.png" alt="">
					<p>Revisão</p>
				</div>
				<div>
					<img src="CSS/Imagens/img6.png" alt="">
					<p>Cicerone</p>
				</div>
				<div>
					<img src="CSS/Imagens/img9.png" alt="">
					<p>Redação técnica</p>
				</div>
			</div>
		</div>
	</section>

	<section class="sessao anime" id="l_metodologia">
		<div id="sessao_aux_wrap">
			<h2 style="height: fit-content;">Metodologia</h2>
			<p style="height: fit-content;">
				Fidelizamos nossos clientes desenvolvendo soluções educacionais específicas e desenhando cursos e programas a
partir de um atendimento diferenciado com foco em necessidades, objetivos e metas.<br><br>
Nossos estágios estão organizados em básico com os níveis iniciante e elementar, intermediário com os níveis pré-intermediário e intermediário, e avançado com os níveis pré-avançado e avançado. 
				Os níveis básico e intermediário possuem uma carga horária média de 120 horas de aula cada, distribuídos ao longo de dois semestres letivos. O nível avançado conta com carga horária de 180 horas de aula que se conclui em três semestres letivos.<br><br> 
				Os certificados são emitidos após a conclusão de cada um dos estágios. Opcionalmente, o interessado pode realizar um curso preparatório para um exame de proficiência internacional.		
			</p>
		</div>
		<img src="CSS/Imagens/Metodologia.jpg" alt="SVG | Cursos">
	</section>

	<form method="POST" action="PHP/enviarEmail.php" class="sessao_form_contato anime anime-start" id="l_contato">

		<div class="sessao_form_contato_wrap" style="width: 100%;">
			<h2 style="font-size: 30px;">Entre em contato</h2>
		</div>

		<div class="sessao_form_contato_wrap">
			<div>
				<p class="t_input_form_msg" style="margin-top: 15px;margin-left: 0px;">Seu nome</p>
				<input type="text" name="f_nome" class="input_form_msg" required="">
			</div>
			<div>
				<p class="t_input_form_msg" style="margin-top: 15px;margin-left: 0px;">Seu e-mail</p>
				<input type="email" name="f_email" class="input_form_msg" required="">
			</div>
			<div>
				<p class="t_input_form_msg" style="margin-top: 10px;margin-left: 10px;">Sua mensagem</p>
				<textarea name="f_msg" cols="30" rows="10" value="mensagem" class="input_msg" required=""></textarea>
			</div>
			<input name="btn_envia_msg" type="submit">
		</div>

		<div class="sessao_form_contato_wrap">
			<img src="CSS/Imagens/Contato.png" style="height: 300px;">
		</div>

		<div class="sessao_form_contato_wrap" style="width: 100%;"> 	
			<div class="insideFormContact" style="justify-content: space-around;box-shadow: 0 5px 15px rgb(0 0 0 / 10%);border-radius: 5px;">
				<div class="socialInsInsFormContact fab fa-whatsapp whatsForm"></div>
				<div onclick="goTo('https://www.facebook.com/lasecoidiomas.br/')" class="socialInsInsFormContact fab fa-facebook-f"></div>
				<div onclick="goTo('https://twitter.com/BrLaseco?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor')" class="socialInsInsFormContact fab fa-twitter"></div>
				<div onclick="goTo('https://youtube.com/channel/UCTUwzmdu9r-Ad7XRPcPdkOQ')" class="socialInsInsFormContact fab fa-youtube"></div>
				<div onclick="goTo('https://www.instagram.com/laseco.br/')" class="socialInsInsFormContact fab fa-instagram"></div>
				<div onclick="goTo('https://www.linkedin.com/in/laseco-consultoria-6778a8226')" class="socialInsInsFormContact fab fa-linkedin"></div>
			</div>
		</div>

	</form>

	<div id="footer_wave">
		<img src="CSS/Imagens/wave_footer.svg">
	</div>
	<footer class="footer">
		<div class="l-footer">
			<h1>
				<img src="CSS/Imagens/slogan.png" alt="Logo Laseco">
			</h1>
		</div>
		<ul class="r-footer">
			<li>
			  	<h2>
				Social
				</h2>
					<ul class="box">
						<li><a target="_blank" href="https://www.facebook.com/lasecoidiomas.br/">Facebook</a></li>
						<li><a target="_blank" href="https://twitter.com/BrLaseco?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor">Twitter</a></li>
						<li><a target="_blank" href="https://youtube.com/channel/UCTUwzmdu9r-Ad7XRPcPdkOQ">Youtube</a></li>
						<li><a target="_blank" href="https://www.instagram.com/laseco.br/">Instagram</a></li>
						<li><a target="_blank" href="https://www.linkedin.com/in/laseco-consultoria-6778a8226">Linkedin</a></li>
					</ul>
				</li>
			<li class="features">
			  	<h2>
				Informações
				</h2>
				<ul class="box h-box">
					<li><a id="a">Cursos</a></li>
					<li><a>Tradução</a></li>
					<li><a>Metodologia</a></li>
					<li><a href="PHP/verificaLogin.php">Gerenciador</a></li>
				</ul>
			</li>
			<li>
			  	<h2>
				Legalidade
				</h2>
				<ul class="box">
					<li><a href="PolíticaPrivacidade.docx" target="_blank">Política de privacidade</a></li>
					<li><a href="PolíticaPrivacidade.docx">Termos de uso</a></li>
				</ul>
			</li>
		</ul>
		<div class="b-footer">
			<p>
			Todos os direitos reservados por ©Laseco 2021 
			</p>
			<p>
			Site desenvolvido por <a href="https://www.instagram.com/raphael_mun1z_/" target="_blank">Raphael Muniz Varela</a>
			</p>
		</div>
	</footer>
	
	<?php include_once 'PHP/VerificaTelaModal.php'; ?>
	
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
	<script type="text/javascript" src="JS/bibliotecas/vanilla-tilt.js"></script>
	<script type="text/javascript" src="JS/bibliotecas/jquery-3.1.1.min.js"></script>
	<script src="JS/Laseco_script.js"></script>
</body>
</html>