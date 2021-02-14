<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <title>Pesquisa</title>

    <style>
        body {
            background-image: url('img/fundo1.jpg');
            background-size: 100%;
			background-repeat: no-repeat;
			background-attachment: fixed;
            font-family: 'Times New Roman', Times, serif;
        }
    </style>
    
	<link rel="stylesheet" type="text/css" href="css/estilo.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
</head>
<body class="body">
    <?php
        include "cabecalho1.inc";
    ?>
    <nav class="nav2">
        <marquee><h4>Pesquisa Filmes</h4></marquee>
    </nav>
	
<?php
    include "cabecalho_conexao.php";

    $pesquisa = $_POST['pesquisa'];

    $SQL = "SELECT * FROM filmes WHERE nome='$pesquisa'";
    $query = mysqli_query($con, $SQL);

    echo '<div class="card" style="max-width: 50em; background-color: black; margin-left: 16em; border-radius: 50px; border: none; margin-top: 5em; padding: 1em;">
    <div class="row no-gutters">';
	
		if(mysqli_num_rows($query) > 0){

			while (($resul = mysqli_fetch_assoc($query)) != null) {
				$imagem = $resul["nome_imagem"];
				echo '
					<div class="col-sm-5">
							<img style="border-radius: 20px;" src="imagens_banco/'.$imagem.'" class="card-img-top h-100" alt="...">
					</div>
					
					<div class="col-sm-7" style="background-color: black;">
						<div class="card-body">
							<h5 class="card-title"><b>'.$resul["nome"].'</b></h5>
							<p class="card-text"><b>Sinopse:</b><br/>'.$resul["sinopse"].'</p>
							<p class="card-text"><b>Autor:</b> '.$resul["autor"].'</p>
							<p class="card-text"><b>Ano de lançamento:</b> '.$resul["lancamento"].'</p>
							<p class="card-text"><b>Gênero:</b> '.$resul["genero"].'</p>
							<p class="card-text"><b>Preço: R$</b> '.$resul["preco"].',00</p>
							<form action="mensagem.php" method="POST" >
								<button type="submit" class="btn btn-primary"> Alugar</button><br/>
							</fom>
						</div>
					</div>';
			}
		
		}else {
			echo "<h5>Não encontramos esse Filme, ou a Barra de Pesquisa se encontra Vazia! </h5><br>";
		}
	
    echo '</div>
</div>';
   

	mysqli_close($con);
?>

<?php
            include "rodape.inc";
        ?>
</body>
</html>