<?php

	require 'banco.php';

	$id = null;
	if ( !empty($_GET['id']))
            {
		$id = $_REQUEST['id'];
            }

	if ( null==$id )
            {
		header("Location: index.php");
            }

	if ( !empty($_POST))
            {
		
		
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
		
		$nomeTemporario2 = $_FILES['imagemdois']['tmp_name2'];
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
                $valor = $valor;

		//Validação
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

		// update data
		if ($validacao)
                {
					echo "asd";
                    $pdo = Banco::conectar();
                    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $sql = "UPDATE ingresso  set descricao = ?, data = ?, hora = ?, nomeum = ?, nomedois = ?, valor = ?, imagemum = ?, imagemdois = ? WHERE id = ?";
                    $q = $pdo->prepare($sql);
                    $q->execute(array($descricao,$date,$hora,$nomeum,$nomedois,$imagemum,$imagemdois,$id, $valor));
                    Banco::desconectar();
                    header("Location: index.php");
		}
	}
        else
            {
                $pdo = Banco::conectar();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT * FROM ingresso where id = ?";
		$q = $pdo->prepare($sql);
		$q->execute(array($id));
		$dat = $q->fetch(PDO::FETCH_ASSOC);
		$descricao = $data['descricao'];
                $date = $data['data'];
                $hora = $data['hora'];
		$nomeum = $data['nomeum'];
		$nomedois = $data['nomedois'];
		$imagemum = $data['imagemum'];
		$imagemdois = $data['imagemdois'];
		$valor = $data['valor'];
		Banco::desconectar();
	}
?>

    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
				<title>Atualizar Ingresso</title>
    </head>

    <body>
        <div class="container">

            <div class="span10 offset1">
							<div class="card">
								<div class="card-header">
                    <h3 class="well"> Atualizar ingresso </h3>
                </div>
								<div class="card-body">
                <form class="form-horizontal" action="update.php?id=<?php echo $id?>" method="post">

                    <div class="control-group <?php echo !empty($descricaoErro)?'error':'';?>">
                        <label class="control-label">Descrição</label>
                        <div class="controls">
                            <input name="descricao" class="form-control" size="1000" type="text" placeholder="Descrição" value="<?php echo !empty($descricao)?$descricao:'';?>">
                            <?php if (!empty($descricaoErro)): ?>
                                <span class="help-inline"><?php echo $descricaoErro;?></span>
                                <?php endif; ?>
                        </div>
                    </div>

                    <div class="control-group <?php echo !empty($dataErro)?'error':'';?>">
                        <label class="control-label">Data</label>
                        <div class="controls">
                            <input name="data" class="form-control" size="1000" type="date" placeholder="Data" value="<?php echo !empty($date)?$date:'';?>">
                            <?php if (!empty($dataErro)): ?>
                                <span class="help-inline"><?php echo $dataErro;?></span>
                                <?php endif; ?>
                        </div>
                    </div>

                    <div class="control-group <?php echo !empty($horaErro)?'error':'';?>">
                        <label class="control-label">Horário</label>
                        <div class="controls">
                            <input name="hora" class="form-control" size="30" type="time" placeholder="Horário" value="<?php echo !empty($hora)?$hora:'';?>">
                            <?php if (!empty($horaErro)): ?>
                                <span class="help-inline"><?php echo $horaErro;?></span>
                                <?php endif; ?>
                        </div>
                    </div>

                    <div class="control-group <?php echo !empty($nomeum)?'error':'';?>">
                        <label class="control-label">Primeiro Nome</label>
                        <div class="controls">
                            <input name="nomeum" class="form-control" size="40" type="date" placeholder="Nome do time que joga em casa" value="<?php echo !empty($nomeum)?$nomeum:'';?>">
                            <?php if (!empty($nomeumErro)): ?>
                                <span class="help-inline"><?php echo $nomeumErro;?></span>
                                <?php endif; ?>
                        </div>
                    </div>
					<div class="control-group <?php echo !empty($nomedois)?'error':'';?>">
                        <label class="control-label">Segundo Nome</label>
                        <div class="controls">
                            <input name="nomedois" class="form-control" size="40" type="text" placeholder="Nome do time que joga fora" value="<?php echo !empty($nomedois)?$nomedois:'';?>">
                            <?php if (!empty($nomedoisErro)): ?>
                                <span class="help-inline"><?php echo $nomedoisErro;?></span>
                                <?php endif; ?>
                        </div>
                    </div>
					<div class="control-group <?php echo !empty($imagemum)?'error':'';?>">
                        <label class="control-label">Primeira Imagem</label>
                        <div class="controls">
                            <input name="imagemum" class="form-control" size="40" type="text" placeholder="Imagem do time que joga fora" value="<?php echo !empty($imagemum)?$imagemum:'';?>">
                            <?php if (!empty($imagemumErro)): ?>
                                <span class="help-inline"><?php echo $imagemumErro;?></span>
                                <?php endif; ?>
                        </div>
                    </div>
					<div class="control-group <?php echo !empty($imagemdois)?'error':'';?>">
                        <label class="control-label">Segunda Imagem</label>
                        <div class="controls">
                            <input name="imagemdois" class="form-control" size="40" type="text" placeholder="Imagem do time que joga fora" value="<?php echo !empty($imagemdois)?$imagemdois:'';?>">
                            <?php if (!empty($imagemdoisErro)): ?>
                                <span class="help-inline"><?php echo $imagemdoisErro;?></span>
                                <?php endif; ?>
                        </div>
                    </div>
					<div class="control-group <?php echo !empty($valor)?'error':'';?>">
                        <label class="control-label">Valor</label>
                        <div class="controls">
                            <input name="valor" class="form-control" size="40" type="number" placeholder="Imagem do time que joga fora" value="<?php echo !empty($valor)?$valor:'';?>">
                            <?php if (!empty($valorErro)): ?>
                                <span class="help-inline"><?php echo $valorErro;?></span>
                                <?php endif; ?>
                        </div>
                    </div>

                    <br/>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-warning">Atualizar</button>
                        <a href="index.php" type="btn" class="btn btn-default">Voltar</a>
                    </div>
                </form>
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
