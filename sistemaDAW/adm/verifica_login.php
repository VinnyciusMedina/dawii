<?php
session_start();
if(!$_SESSION['logar']) {
	header('Location: adm.php');
	exit();
}