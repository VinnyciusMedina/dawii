<html>
	<head>
		<title>Internacional</title>
		<style>
			body{
				margin:0;
				background-size: cover;
			}
			.nav{
				margin:0;
				background-size: cover;
				width:100%;
				background: #FF0000;
				height: 100px;
				opacity: 1;
			}
			ul{
				list-style: none;
				padding: 0;
				margin: 0;
				position: absolute;
			}
			li{
				float: left;
				margin-top: 30px;
			}
			a{
				width: 150px;
				color: white;
				display: block;
				text-decoration: none;
				font-size: 20px;
				padding: 10px;
				border-radius: 10px;
				font-family:Century Gothic;
				font-weight: bold;
			}
			a:hover{
				background-color: white;
				trasition: 0.6s;
				color: red;
			}
			#divBusca{
				background-color:#E0EEEE;
				border:solid 2px white;
				border-radius:10px;
				width:300px;
				height:34px;
				margin-left:25%;
			}
 
			#txtBusca{
				float:left;
				background-color:transparent;
				padding-left:5px; 
				font-size:18px;
				border:none;
				height:32px;
				width:200px;
			}
 
			#btnBusca{
				border:none;
				float:left;
				height:35px;
				border-radius:0 7px 7px 0;
				width:70px;
				font-weight:bold;
				background:#FF0000;
			}
	
			#divBusca img{
				
				float:left;
				width: 30px;
			}
			#imgtopo{
				background:url('http://tedesco.com.br/wp-content/uploads/2017/08/Beira-Rio-01.jpg');
				height: 600px;
				background-repeat: no repeat;
				background-size: 100%;
				margin-top: 0;
				position: initial;
			}
			#conteudo{
				height: 400px;
				width: 100%px;
				background-color: #FA5858;
				margin: 0;
				position: initial;
			}
			#noticias{
				background-color: white;
				margin-left: 15%;
				margin-right: 15%;
				height: 400px;
				margin-top: 0px;
				position: initial;
				text-align: center;
				
			}
			#noticias2{
				background-color: white;
				margin-left: 15%;
				margin-right: 15%;
				height: 2320px;
				margin-top: 0px;
				position: initial;
				text-align: center;
				
			}
			#noticias img{
				width: 500px;
				margin-top: 50px;
			}
			#noticias2 img{
				width: 500px;
				margin-top: 50px;
			}
			a{
				position: relative;
				margin-top: 0px;
				color: white;
				margin-left: 41%;
				background-color: red;
				text-align: center;
				border-color: red;
			}
			hr{
				background-color: #FA5858;
				color: #FA5858;
				margin-top: 10px;
				margin-bottom: 10px;
			}
			slides{
				margin-top: 20px;
			}
			#slides img{
				width: 100%;
			}
			#conteudo2{
				height: 2320px;
				width: 100%px;
				background-color: #FA5858;
				margin: 0;
				position: initial;
			}
			#videos{
				background-color: white;
				margin-left: 15%;
				margin-right: 15%;
				height: 2320px;
				margin-top: 0px;
				position: initial;
				}
			#conteudo3{
				height: 320px;
				width: 100%px;
				background-color: #FA5858;
				margin: 0;
				position: initial;
			}
			#Login{
				background-color: white;
				margin-left: 15%;
				margin-right: 15%;
				height: 320px;
				margin-top: 0px;
				position: initial;}
			.footer {
				left: 0;
				bottom: 0;
				width: 100%;
				background-color: red;
				color: white;
				text-align: center;
				height: 100px;
				}
				table{
					width: 50px;
					text-align: center;
					margin-left: 15%;
					background-color: grey;
				}
				td a{
					margin-left: 21%;
				}
				input{
					margin-top: 20px;
				}
				form{
					padding: 0;
					margin-left: 25%;
					height: 100px;
					width: 500px;
					text-align: center;
				}
				label{
					color: red;
					margin-top: 10px;
				}
				
		</style>
	</head>
	<body>
		<div class="nav">
		<ul>
			<li><a href="index.php">Internacional</a></li>
			<li><a href="noticias.php">Notícias</a></li>
			<li><a href="imagens.php">Imagens</a></li>
			<li><a href="vide.php">Vídeos</a></li>
			<li><a href="ingressos.php">Ingressos</a></li>
			<li><a href="associar.php">Associar</a></li>
			<li><a href="login.php">Login</a></li>
		</ul>
		</div>
		<section id="imgtopo">
		</section>
		<section id="conteudo">
			<div id="noticias">
					<h1>Você está cadastrado, agora <a href="login.php">logue</a></h1>
										
			</div>
			
		</section>
		<div id="slides">
				<img class="mySlides" src="https://a3.espncdn.com/combiner/i?img=%2Fphoto%2F2017%2F1206%2Fr299193_1296x518_5-2.jpg&w=768&h=307&scale=crop&cquality=80&location=origin&format=jpg">
				<img class="mySlides" src="https://a1.espncdn.com/combiner/i?img=%2Fphoto%2F2019%2F0824%2Fr587824_1296x518_5-2.jpg&w=768&h=307&scale=crop&cquality=80&location=origin&format=jpg">
				<img class="mySlides" src="https://a1.espncdn.com/combiner/i?img=%2Fphoto%2F2019%2F0822%2Fr587065_1296x518_5%2D2.jpg&w=768&h=307&scale=crop&cquality=80&location=origin&format=jpg">
				
			</div>
		<section id="conteudo3">
			<div id="Login">
				<a href="login.php" style="margin-bottom:20px;">Login</a>
				<h1 style="color:red">Fale conosco</h1>
				<form>
					Nome<input type="text" name="nome">
					email<input type="email" name="email">
					<label for="msg">Mensagem:</label>
					<textarea id="msg"></textarea>
				</form>
			</div>
		</section>
		<div class="footer">
			<p>@Vinnycius Medina</p>
		</div>
			<script>
			var myIndex = 0;
				carousel();

				function carousel() {
				var i;
				var x = document.getElementsByClassName("mySlides");
				for (i = 0; i < x.length; i++) {
				x[i].style.display = "none";  
				}
				myIndex++;
				if (myIndex > x.length) {myIndex = 1}    
				x[myIndex-1].style.display = "block";  
				setTimeout(carousel, 2000);
				}
		</script>
	</body>
</html>
<?php
    require 'banco.php';

    if(!empty($_POST))
    {
        //Acompanha os erros de validação
        $nomeErro = null;
        $enderecoErro = null;
        $telefoneErro = null;
        $emailErro = null;
        $senhaErro = null;
        $sexoErro = null;

        $nome = $_POST['nome'];
        $endereco = $_POST['endereco'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $senha = crypt($_POST['senha'], '$2a$07$rasmuslerd...........$');
        $sexo = $_POST['sexo'];

        //Validaçao dos campos:
        $validacao = true;
        if(empty($nome))
        {
            $nomeErro = 'Por favor digite o seu nome!';
            $validacao = false;
        }

        if(empty($endereco))
        {
            $enderecoErro = 'Por favor digite o seu endereço!';
            $validacao = false;
        }

        if(empty($telefone))
        {
            $telefoneErro = 'Por favor digite o número do telefone!';
            $validacao = false;
        }

        if(empty($email))
        {
            $telefoneErro = 'Por favor digite o endereço de email';
            $validacao = false;
        }
        elseif (!filter_var($email,FILTER_VALIDATE_EMAIL))
        {
            $emailError = 'Por favor digite um endereço de email válido!';
            $validacao = false;
        }

        if(empty($sexo))
        {
            $sexoErro = 'Por favor digite o campo!';
            $validacao = false;
        } 
		if(empty($senha))
        {
            $senhaErro = 'Por favor digite o campo!';
            $validacao = false;
        }

        //Inserindo no Banco:
        if($validacao)
        {
            $pdo = Banco::conectar();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO pessoa (nome, endereco, telefone, email,senha, sexo) VALUES(?,?,?,?,?,?)";
            $q = $pdo->prepare($sql);
            $q->execute(array($nome,$endereco,$telefone,$email,$senha,$sexo));
            Banco::desconectar();
            header("Location: index.php");
        }
    }
?>



