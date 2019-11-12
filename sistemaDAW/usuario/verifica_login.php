<?php
session_start();
if(!$_SESSION['pessoa']) {
	header('Location: index.php');
	exit();
}