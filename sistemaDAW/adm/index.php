<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>ADM</title>
		<style>
			body{
				background-color: red;
			}
			input{
				margin-top: 10px;
				border-radius: 50px;
			}
			form{
				margin: 0;
			}
			img{
				width: 100px;
				margin-top: 12%;
			}
			label{
				color: white;
			}
			h1{
				color: white;
			}
			
		</style>
	</head>
	<body>
		<center>
		<h1>ADM</h1>
					<?php
                    if(isset($_SESSION['nao_autenticado'])):
                    ?>
                    <div class="notification is-danger">
                      <p>ERRO: Usuário ou senha inválidos.</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                    ?>
			<img src="https://logodownload.org/wp-content/uploads/2015/05/internacional-porto-alegre-logo-escudo-4.png">
		<form action="login2.php" method="post">
			<label><b>Login </b></label><input type="text" name="login"><br>
			<label><b>Senha </b></label><input type="password" name="senha"><br>
			<input style="color: red; background-color: white" type="submit" value="Entrar">
		</form></center
	</body>
</html>