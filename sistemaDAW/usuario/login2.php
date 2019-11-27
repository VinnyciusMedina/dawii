<?php
session_start();
include('banco2.php');
if($_POST)
{
if(empty($_POST['email']) || empty($_POST['senha'])) {
	header('Location: index.php');
	exit();
}

//$email = mysqli_real_escape_string($conexao, $_POST['email']);
$email = $_POST['email'];
$senha = crypt($_POST['senha'], '$2a$07$rasmuslerd...........$');
//echo $email."--------------";
//echo $senha;die;
$query = "select * from pessoa where email = '$email' AND senha = '$senha'";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);
//var_dump($result);die;
if($row != 0) {
	$_SESSION['pessoa'] = $pessoa;
	header('Location: painel.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: login.php');
	exit();
}
}