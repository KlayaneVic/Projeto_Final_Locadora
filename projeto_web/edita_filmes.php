<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <title>Edita Filmes</title>

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
    ?>
        <nav class="nav2">
            <marquee><h4>Edição de Filmes</h4></marquee>
        </nav>
    <?php
        include "cabecalho_conexao.php";
        $id = $_GET["id"];
        $SQL = "SELECT * FROM filmes where id = $id";

        $query = mysqli_query($con, $SQL);
        $resul = mysqli_fetch_assoc($query);
    ?>
    <br/>
    <br/>
    <div class="container" align="center">
		<b><h3 style="margin-right: 13em;">Editar Informações:</h3></b>
        <form action="processa_editar_filmes.php" method="GET" align="center" class="cadastrof">
            <b><label>Nome do Filme:</label>
                <input type="text" name="nome_edita" value="<?php echo $resul['nome'];?>"><br/>

                <label>Autor do Filme:</label>
                <input type="text" name="autor_edita" value="<?php echo $resul['autor'];?>"><br/>

                <label>Ano Lançamento:</label>
                <input type="text" name="lancamento_edita" value="<?php echo $resul['lancamento'];?>"><br/>

                <label>Escolha o Gênero:</label>
                <select name="genero_edita"  value="'.$registro['genero'].'" required>
                    <option value="">Selecione</option>
                    <option value="Acao">Ação</option>
                    <option value="Terror">Terror</option>
                    <option value="Comedia">Comédia</option>
                    <option value="Romance">Romance</option>
                    <option value="Suspense">Suspense</option>
                    <option value="Drama">Drama</option>
                    <option value="Aventura">Aventura</option>
                    <option value="Animacao">Animação</option>
                    <option value="Fantasia">Fantasia</option>
                </select></br>

                <label>Sinopse do Filme:</label>
                <textarea  name="sinopse_edita" rows="2" cols="22" required> <?php echo $resul['sinopse'];?></textarea><br/>

                <label>Preço do Filme:</label>
                <input type="number" name="preco_edita" value="<?php echo $resul['preco'];?>"/><br/>

                <input type="hidden" id="id" name="id" value="<?php echo $id?>" />

                <input type="submit" value="Salvar" /></b>
        </form>
    </div>

    <?php
        // Executa o comando SQL
        $query = mysqli_query($con, $SQL);
        if($query){
            echo "<a href='lista_filmes.php'><font color=white><h5>Cancelar</h5></font></a>";
        } else {
            echo mysqli_error($con);
        }

        mysqli_close($con);
        
    ?>
	
	<?php
        include "rodape.inc";
    ?>
</body>
</html>