<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/estilo.css" />
    <title>Home</title>

    <style>
        body {
				background-image: url('img/fundo1.jpg');
				background-size: 100%;
				background-repeat: no-repeat;
				background-attachment: fixed;
				font-family: 'Times New Roman', Times, serif;
			}
    </style>
    
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
        include "cabecalho2.inc";
    ?>
    <nav class="nav2">
        <marquee><h4>Últimos Filmes Lançados</h4></marquee>
    </nav>
    <?php
        include "cabecalho_conexao.php";

        $SQL = "SELECT * FROM filmes ORDER BY id DESC LIMIT 8";

        $query = mysqli_query($con, $SQL);
        

        echo '
            </br>
            <div class="container">
            <div class="row">
            <div class="card-group">';
            if($query){
                if(mysqli_num_rows($query) > 0){
                while(($resul =  mysqli_fetch_assoc($query)) != null){
                    $imagem = $resul['nome_imagem'];
                    echo '
                        <div class="col-md-3" align="center" style="text-align: center;">
                        <br/>
                            <h5><b>'.$resul["nome"].'</b></h5><br/>
                            <p class="card-text"><img class="imagem_banco" src="imagens_banco/'.$imagem.'"></p>
                            <div class="card-text"><b>Sinopse:</b><br/>'.$resul["sinopse"].'</div>			   
                            <p class="card-text"><b>Autor:</b> '.$resul["autor"].'</p>
                            <p class="card-text"><b>Ano de lançamento:</b> '.$resul["lancamento"].'</p>
                            <p class="card-text"><b>Gênero:</b> '.$resul["genero"].'</p><br/>
                            <p class="card-text"><b>Preço: R$</b> '.$resul["preco"].',00</p>
                            <form action="mensagem_usu.php" method="POST"/>
                                <button type="submit" class="btn btn-primary"> Alugar</button><br/>
                            </fom>
                            <br/>
                        </div>
                    ';

                }
                      
                }else{
                    echo "<h3>Filme não cadastrado!</h3>";
                }
            }else{
                echo "Problema de sintaxe SQL<br>";
                echo mysqli_error($con);
            }
        echo '</div>
            </div>
            </div>';
        mysqli_close($con);
    ?>      
	
	<?php
            include "rodape.inc";
        ?>
</body>
</html>