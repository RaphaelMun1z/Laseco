<?php
session_start();
ob_start();

unset($_SESSION['logado']);
unset($_SESSION['identificacao']);
unset($_SESSION['tela_modal']);

session_destroy();

header("Location: ../");