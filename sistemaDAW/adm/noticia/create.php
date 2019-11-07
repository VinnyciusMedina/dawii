<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Adicionar Contato</title>
</head>

<body>
    <div class="container">
        <div clas="span10 offset1">
          <div class="card">
            <div class="card-header">
                <h3 class="well"> Adicionar Noticia </h3>
            </div>
            <div class="card-body">
            <form class="form-horizontal" action="create.php" method="post" enctype="multipart/form-data">

                <div class="control-group <?php echo !empty($nomeErro)?'error ' : '';?>">
                    <label class="control-label">Nome</label>
                    <div class="controls">
                        <input size="50" class="form-control" name="nome" type="text" placeholder="Nome" required="" value="<?php echo !empty($nome)?$nome: '';?>">
                        <?php if(!empty($nomeErro)): ?>
                            <span class="help-inline"><?php echo $nomeErro;?></span>
                            <?php endif;?>
                    </div>
                </div>

                <div class="control-group <?php echo !empty($descricaoErro)?'error ': '';?>">
                    <label class="control-label">Descrição</label>
                    <div class="controls">
                        <input size="1000" class="form-control" name="descricao" type="text" placeholder="Descrção" required="" value="<?php echo !empty($descricao)?$descricao: '';?>">
                        <?php if(!empty($descricaoErro)): ?>
                            <span class="help-inline"><?php echo $descricaoErro;?></span>
                            <?php endif;?>
                    </div>
                </div>

                <div class="control-group <?php echo !empty($imagemErro)?'error ': '';?>">
                    <label class="control-label">Imagem</label>
                    <div class="controls">
                        <input size="35" class="form-control" name="imagem" type="file" placeholder="src da imagem" required="" value="<?php echo !empty($imagem)?$imagem: '';?>">
                        <?php if(!empty($imagemErro)): ?>
                            <span class="help-inline"><?php echo $imagemErro;?></span>
                            <?php endif;?>
                    </div>
                </div>

                <div class="control-group <?php echo !empty($dataErro)?'error ': '';?>">
                    <label class="control-label">Data</label>
                    <div class="controls">
                        <input size="40" class="form-control" name="data" type="date" placeholder="Data" required="" value="<?php echo !empty($date)?$date: '';?>">
                        <?php if(!empty($dataErro)): ?>
                            <span class="help-inline"><?php echo $dataErro;?></span>
                            <?php endif;?>
                    </div>
                </div>
				<div class="control-group <?php echo !empty($autorErro)?'error ': '';?>">
                    <label class="control-label">Autor</label>
                    <div class="controls">
                        <input size="40" class="form-control" name="autor" type="text" placeholder="autor" required="" value="<?php echo !empty($autor)?$autor: '';?>">
                        <?php if(!empty($autorErro)): ?>
                            <span class="help-inline"><?php echo $autorErro;?></span>
                            <?php endif;?>
                    </div>
                </div>

                <div class="form-actions">
                    <br/>

                    <button type="submit" class="btn btn-success">Adicionar</button>
                    <a href="index.php" type="btn" class="btn btn-default">Voltar</a>

                </div>
            </form>
          </div>
        </div>
        </div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>

<?php
    require 'banco.php';
	//print_r($_FILES); 
	
    if(!empty($_POST))
    {
        //Acompanha os erros de validação
        $nomeErro = null;
        $descricaoErro = null;
        $imagemErro = null;
        $dataErro = null;
        $autorErro = null;

        
		$nomeTemporario = $_FILES['imagem']['tmp_name'];
		$nomeImagem = $_FILES['imagem']['name'];
		$diretorio = 'imagem/'.$nomeImagem;
		
		if(move_uploaded_file($nomeTemporario,$diretorio)){
			echo "imagem enviada";
		}else{
			echo "imagem não enviada";
		}
		
		
		
		
		$nome = $_POST['nome'];
        $descricao = $_POST['descricao'];
        $imagem = $nomeImagem;
        $date = $_POST['data'];
        $autor = $_POST['autor'];

        //Validaçao dos campos:
        $validacao = true;
        if(empty($nome))
        {
            $nomeErro = 'Por favor digite o seu nome!';
            $validacao = false;
        }

        if(empty($descricao))
        {
            $descricaoErro = 'Por favor digite o seu endereço!';
            $validacao = false;
        }

        if(empty($imagem))
        {
            $imagemErro = 'Por favor digite o número do telefone!';
            $validacao = false;
        }

        if(empty($date))
        {
            $dataErro = 'Por favor digite o endereço de email';
            $validacao = false;
        }

        if(empty($autor))
        {
            $autorErro = 'Por favor digite o campo!';
            $validacao = false;
        }

        //Inserindo no Banco:
        if($validacao)
        {
            $pdo = Banco::conectar();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO noticia (nome, descricao, imagem, data, autor) VALUES(?,?,?,?,?)";
            $q = $pdo->prepare($sql);
            $q->execute(array($nome,$descricao,$imagem,$date,$autor));
            Banco::desconectar();
            header("Location: index.php");
        }
    }
?>
