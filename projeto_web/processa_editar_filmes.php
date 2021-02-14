<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Inicial</title>

    <style>
        body {
            background-image: url('img/fundo5.jpg');
            background-size: 100%;
            font-family: 'Times New Roman', Times, serif;
        }
    </style>
    
	<link rel="stylesheet" type="text/css" href="css/estilo.css" /> 
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons" />

</head>
<body class="body">
    <?php
        
        $id = $_GET['id'];
        $nomeEdit = $_GET['nome_edita'];
        $autorEdit = $_GET['autor_edita'];
        $lancamentoEdit = $_GET['lancamento_edita'];
        $generoEdit = $_GET['genero_edita'];
        $sinopseEdit = $_GET['sinopse_edita'];
        $precoEdit = $_GET['preco_edita'];
        

        include("cabecalho_conexao.php");


        $SQL = "UPDATE filmes SET nome='$nomeEdit', 
        autor='$autorEdit', lancamento='$lancamentoEdit', genero='$generoEdit', 
        sinopse='$sinopseEdit', preco ='$precoEdit' WHERE id= $id";
        
        // Executa o comando SQL
        $query = mysqli_query($con, $SQL);
        if($query){
        } else {
            echo mysqli_error($con);
        }

        mysqli_close($con);
        header("location:lista_filmes.php");
    ?>
</body>
</html>
