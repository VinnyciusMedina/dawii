<?php
	session_start();
	if(!isset($_SESSION['itens'])){
		$_SESSION['itens'] = array();
	}
	if(isset($_GET['add']) && $_GET['add'] == "carrinho     "){
		$id = $_GET['id'];
		if(!isset($_SESSION['itens'][$id])){
			$_SESSION['itens'][$id] = 1;
		}else{
			$_SESSION['itens'][$id] += 1;
		}
	}	
if(count($_SESSION['itens']) == 0){
	echo 'Carrinho Vazio <hr><a href="libertadores.php">Adicionar itens</a>';
}else{
	$conexaoo = new PDO('mysql:host=localhost;dbname=pessoa',"root","");
	foreach($_SESSION['itens'] as $id => $quantidade){
		$select = $conexaoo->prepare("SELECT * FROM ingresso WHERE id=?");
		$select->bindParam(1,$id);
		$select->execute();
		$row = $select->fetchAll();
		echo 'DATA'.$row[0]['data'].'<br/>';
	}
}


?>