<?php
session_start();
include('banco.php');

if(empty($_POST['email']) || empty($_POST['senha'])) {
	header('Location: index.php');
	exit();
}

$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select * from pessoa where email = '{$email}' and senha = crypt('{$senha}', '$6$rounds=5000$usesomesillystringforsalt$')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
	$_SESSION['pessoa'] = $pessoa;
	header('Location: painel.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: login.php');
	exit();
}