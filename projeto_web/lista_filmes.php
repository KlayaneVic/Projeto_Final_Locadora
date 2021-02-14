<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <title>Lista Filmes</title>

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
    <script src="js/popper.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons" />


</head>
<body class="body">
        <?php
            include "cabecalho1.inc";
            include ("cabecalho_conexao.php");
        ?>
        <nav class="nav2">
            <marquee><h4>Todos os Filmes Cadastrados</h4></marquee>
        </nav>
        <?php
            $SQL = "SELECT * FROM filmes";

            $query = mysqli_query($con, $SQL);
                if($query){
                    if(mysqli_num_rows($query) > 0){

                        echo ' <table border="4" align="center" class="listaf">
                                    <br/>
                                    <tr style="background-color: black;">
                                        <th>ID</th>
                                        <th>Nome</th>
                                        <th>Autor</th>
                                        <th>Lançamento</th>
                                        <th>Gênero</th>
                                        <th>Sinopse</th>
                                        <th>Preço Filme</th>
                                        <th>Imagem</th>
                                        <th>Excluir</th>
                                        <th>Editar</th>

                                       
                                    </tr>
                        ';
                    while(($resul =  mysqli_fetch_assoc($query)) != null){
                                $imagem = $resul['nome_imagem'];

                                echo "<tr>";
                                    echo "<td>" . $resul['id'] . "</td>";
                                    echo "<td>" . $resul['nome'] . "</td>";
                                    echo "<td>" . $resul['autor'] . "</td>";
                                    echo "<td>" . $resul['lancamento'] . "</td>";
                                    echo "<td>" . $resul['genero'] . "</td>";
                                    echo "<td>" . $resul['sinopse'] . "</td>";
                                    echo "<td> R$" . $resul['preco'] . ",00</td>";
                                    echo "<td><img height='200px' width='150px' style='border-radius: 15px;' src='imagens_banco/$imagem'></td>";
                                    echo "<td> <small class='text-muted'><h3><a href='./excluir_filmes.php?id=$resul[id]' class='btn btn-primary'> Excluir</a></h5></small></td>";
                                    echo "<td> <small class='text-muted'><h3><a href='./edita_filmes.php?id=$resul[id]' class='btn btn-primary'> Alterar</a></h5></small></td>";     
                                echo "</tr>";
                    }
                        echo "</table>";
                    }else{
                        echo "<h3>Não possui filmes cadastrados na Base de Dados!</h3>";
                    }
                }else{
                    echo "Problema de sintaxe SQL<br>";
                    echo mysqli_error($con);
                }

                mysqli_close($con);
        ?>
		
		<?php
            include "rodape.inc";
        ?>
</body>
</html>