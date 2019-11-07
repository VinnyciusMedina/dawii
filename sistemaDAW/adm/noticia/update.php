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
		
		
		$nomeErro = null;
		$descricaoErro = null;
		$imagemErro = null;
                $dataErro = null;
                $autorErro = null;

		$nome = $_POST['nome'];
		$descricao = $_POST['descricao'];
		$imagem = $_POST['imagem'];
                $date = $_POST['data'];
                $autor = $_POST['autor'];

		//Validação
		$validacao = true;
		if (empty($nome))
                {
                    $nomeErro = 'Por favor digite o nome!';
                    $validacao = false;
                }

		if (empty($descricao))
                {
                    $descricaoErro = 'Por favor digite a descrição!';
                    $validacao = false;
		}

		if (empty($imagem))
                {
                    $imagemErro = 'Por favor digite a imagem!';
                    $validacao = false;
		}

                if (empty($date))
                {
                    $date = 'Por favor digite a data!';
                    $validacao = false;
		}

                if (empty($autor))
                {
                    $autorErro = 'Por favor preenche o autor!';
                    $validacao = false;
		}

		// update data
		if ($validacao)
                {
					echo "asd";
                    $pdo = Banco::conectar();
                    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $sql = "UPDATE noticia  set nome = ?, descricao = ?, imagem = ?, data = ?, autor = ? WHERE id = ?";
                    $q = $pdo->prepare($sql);
                    $q->execute(array($nome,$descricao,$imagem,$date,$autor,$id));
                    Banco::desconectar();
                    header("Location: index.php");
		}
	}
        else
            {
                $pdo = Banco::conectar();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT * FROM noticia where id = ?";
		$q = $pdo->prepare($sql);
		$q->execute(array($id));
		$data = $q->fetch(PDO::FETCH_ASSOC);
		$nome = $data['nome'];
                $descricao = $data['descricao'];
                $imagem = $data['imagem'];
		$date = $data['data'];
		$autor = $data['autor'];
		Banco::desconectar();
	}
?>

    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="assets/css/style.css">
				<title>Atualizar Contato</title>
    </head>

    <body>
        <div class="container">

            <div class="span10 offset1">
							<div class="card">
								<div class="card-header">
                    <h3 class="well"> Atualizar notícia </h3>
                </div>
								<div class="card-body">
                <form class="form-horizontal" action="update.php?id=<?php echo $id?>" method="post">

                    <div class="control-group <?php echo !empty($nomeErro)?'error':'';?>">
                        <label class="control-label">Nome</label>
                        <div class="controls">
                            <input name="nome" class="form-control" size="50" type="text" placeholder="Nome" value="<?php echo !empty($nome)?$nome:'';?>">
                            <?php if (!empty($nomeErro)): ?>
                                <span class="help-inline"><?php echo $nomeErro;?></span>
                                <?php endif; ?>
                        </div>
                    </div>

                    <div class="control-group <?php echo !empty($descricaoErro)?'error':'';?>">
                        <label class="control-label">Descricao</label>
                        <div class="controls">
                            <input name="descricao" class="form-control" size="1000" type="text" placeholder="Descrição" value="<?php echo !empty($descricao)?$descricao:'';?>">
                            <?php if (!empty($descricaoErro)): ?>
                                <span class="help-inline"><?php echo $descricaoErro;?></span>
                                <?php endif; ?>
                        </div>
                    </div>

                    <div class="control-group <?php echo !empty($imagemErro)?'error':'';?>">
                        <label class="control-label">Telefone</label>
                        <div class="controls">
                            <input name="imagem" class="form-control" size="30" type="text" placeholder="Telefone" value="<?php echo !empty($imagem)?$imagem:'';?>">
                            <?php if (!empty($imagemErro)): ?>
                                <span class="help-inline"><?php echo $imagemErro;?></span>
                                <?php endif; ?>
                        </div>
                    </div>

                    <div class="control-group <?php echo !empty($data)?'error':'';?>">
                        <label class="control-label">Data</label>
                        <div class="controls">
                            <input name="data" class="form-control" size="40" type="date" placeholder="Data" value="<?php echo !empty($date)?$date:'';?>">
                            <?php if (!empty($dataErro)): ?>
                                <span class="help-inline"><?php echo $dataErro;?></span>
                                <?php endif; ?>
                        </div>
                    </div>
					<div class="control-group <?php echo !empty($autor)?'error':'';?>">
                        <label class="control-label">Autor</label>
                        <div class="controls">
                            <input name="autor" class="form-control" size="40" type="text" placeholder="Data" value="<?php echo !empty($autor)?$autor:'';?>">
                            <?php if (!empty($autorErro)): ?>
                                <span class="help-inline"><?php echo $autorErro;?></span>
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
