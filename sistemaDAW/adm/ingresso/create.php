<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
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

                <div class="control-group <?php echo !empty($descricaoErro)?'error ' : '';?>">
                    <label class="control-label">Descrição</label>
                    <div class="controls">
                        <input size="1000" class="form-control" name="descricao" type="text" placeholder="Descrição" required="" value="<?php echo !empty($descricao)?$descricao: '';?>">
                        <?php if(!empty($descricaoErro)): ?>
                            <span class="help-inline"><?php echo $descricaoErro;?></span>
                            <?php endif;?>
                    </div>
                </div>

                <div class="control-group <?php echo !empty($dataErro)?'error ': '';?>">
                    <label class="control-label">Data</label>
                    <div class="controls">
                        <input size="1000" class="form-control" name="data" type="date" placeholder="Descrção" required="" value="<?php echo !empty($date)?$date: '';?>">
                        <?php if(!empty($dataErro)): ?>
                            <span class="help-inline"><?php echo $dataErro;?></span>
                            <?php endif;?>
                    </div>
                </div>

                <div class="control-group <?php echo !empty($horaErro)?'error ': '';?>">
                    <label class="control-label">Hora</label>
                    <div class="controls">
                        <input size="35" class="form-control" name="hora" type="time" placeholder="Horario" required="" value="<?php echo !empty($hora)?$hora: '';?>">
                        <?php if(!empty($horaErro)): ?>
                            <span class="help-inline"><?php echo $horaErro;?></span>
                            <?php endif;?>
                    </div>
                </div>

                <div class="control-group <?php echo !empty($nomeumErro)?'error ': '';?>">
                    <label class="control-label">Primeiro Nome</label>
                    <div class="controls">
                        <input size="40" class="form-control" name="nomeum" type="text" placeholder="Data" required="" value="<?php echo !empty($nomeum)?$nomeum: '';?>">
                        <?php if(!empty($nomeumErro)): ?>
                            <span class="help-inline"><?php echo $nomeumErro;?></span>
                            <?php endif;?>
                    </div>
                </div>
				<div class="control-group <?php echo !empty($nomedoisErro)?'error ': '';?>">
                    <label class="control-label">Segundo Nome</label>
                    <div class="controls">
                        <input size="40" class="form-control" name="nomedois" type="text" placeholder="autor" required="" value="<?php echo !empty($nomedois)?$nomedois: '';?>">
                        <?php if(!empty($nomedoisErro)): ?>
                            <span class="help-inline"><?php echo $nomedoisErro;?></span>
                            <?php endif;?>
                    </div>
                </div>
				<div class="control-group <?php echo !empty($imagemumErro)?'error ': '';?>">
                    <label class="control-label">Primeira Imagem</label>
                    <div class="controls">
                        <input size="40" class="form-control" name="imagemum" type="file" placeholder="Imagem um" required="" value="<?php echo !empty($imagemum)?$imagemum: '';?>">
                        <?php if(!empty($imagemumErro)): ?>
                            <span class="help-inline"><?php echo $imagemumErro;?></span>
                            <?php endif;?>
                    </div>
                </div>

				<div class="control-group <?php echo !empty($imagemdoisErro)?'error ': '';?>">
                    <label class="control-label">Segunda Imagem</label>
                    <div class="controls">
                        <input size="40" class="form-control" name="imagemdois" type="file" placeholder="autor" required="" value="<?php echo !empty($imagemdois)?$imagemdois: '';?>">
                        <?php if(!empty($imagemdoisErro)): ?>
                            <span class="help-inline"><?php echo $imagemdoisErro;?></span>
                            <?php endif;?>
                    </div>
                </div>
				<div class="control-group <?php echo !empty($valorErro)?'error ': '';?>">
                    <label class="control-label">Valor</label>
                    <div class="controls">
                        <input size="40" class="form-control" name="valor" type="number" placeholder="valor" required="" value="<?php echo !empty($valor)?$valor: '';?>">
                        <?php if(!empty($valorErro)): ?>
                            <span class="help-inline"><?php echo $valorErro;?></span>
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
		$descricaoErro = null;
		$dataErro = null;
		$horaErro = null;
                $nomeumErro = null;
                $nomedoisErro = null;
                $imagemumErro = null;
                $imagemdoisErro = null;
                $valorErro = null;

        
		$nomeTemporario = $_FILES['imagemum']['tmp_name'];
		$nomeImagem = $_FILES['imagemum']['name'];
		$diretorio = 'imagem/'.$nomeImagem;
		
		if(move_uploaded_file($nomeTemporario,$diretorio)){
			echo "imagem enviada";
		}else{
			echo "imagem não enviada";
		}
		
		$nomeTemporario2 = $_FILES['imagemdois']['tmp_name'];
		$nomeImagem2 = $_FILES['imagemdois']['name'];
		$diretorio2 = 'imagem/'.$nomeImagem2;
		
		if(move_uploaded_file($nomeTemporario2,$diretorio2)){
			echo "imagem enviada";
		}else{
			echo "imagem não enviada";
		}

		$descricao = $_POST['descricao'];
		$date = $_POST['data'];
		$hora = $_POST['hora'];
                $nomeum = $_POST['nomeum'];
                $nomedois = $_POST['nomedois'];
                $imagemum = $nomeImagem;
                $imagemdois = $nomeImagem2;
                $valor = $_POST['valor'];

        //Validaçao dos campos:
        $validacao = true;
		if (empty($descricao))
                {
                    $descricaoErro = 'Por favor digite a descrição!';
                    $validacao = false;
                }

		if (empty($date))
                {
                    $dataErro = 'Por favor digite a data!';
                    $validacao = false;
		}

		if (empty($hora))
                {
                    $horaErro = 'Por favor digite a hora!';
                    $validacao = false;
		}

                if (empty($nomeum))
                {
                    $nomeumErro = 'Por favor digite o primeiro nome!';
                    $validacao = false;
		}

                if (empty($nomedois))
                {
                    $nomedoisErro = 'Por favor preenche o segundo nome!';
                    $validacao = false;
		}
		       if (empty($imagemum))
                {
                    $imagemumErro = 'Por favor preenche a primeira imagem!';
                    $validacao = false;
		}
		       if (empty($imagemdois))
                {
                    $imagemdoisErro = 'Por favor preenche a segunda imagem!';
                    $validacao = false;
		}
		if (empty($valor))
                {
                    $valorErro = 'Por favor preenche a segunda imagem!';
                    $validacao = false;
		}

        //Inserindo no Banco:
        if($validacao)
        {
            $pdo = Banco::conectar();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO ingresso (descricao, data, hora, nomeum, nomedois, imagemum, imagemdois, valor) VALUES(?,?,?,?,?,?,?,?)";
            $q = $pdo->prepare($sql);
            $q->execute(array($descricao,$date,$hora,$nomeum,$nomedois,$imagemum,$imagemdois,$valor));
            Banco::desconectar();
            header("Location: index.php");
        }
    }
?>
