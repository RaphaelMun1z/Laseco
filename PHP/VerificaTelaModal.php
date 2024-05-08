<?php
if(isset($_SESSION['tela_modal'])){
	echo $_SESSION['tela_modal'];
	unset($_SESSION['tela_modal']);
}