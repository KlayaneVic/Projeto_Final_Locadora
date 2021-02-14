<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <title>Cadastrar Filmes</title>

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
            <marquee><h4>Cadastro de Filmes</h4></marquee>
        </nav>
        <div class="container" align="center" style="margin-top: 4em;">
			<b><h3 style="margin-right: 14em;">Insira os Dados:</h3></b>
            <form action="form_cad_filmes.php" method="POST" enctype="multipart/form-data" align="center" class="cadastrof">
                <b><label> Nome do filme:</label>
                    <input type="text" name="nome_filme" id="nome_filme" onfocusout="validaNome()" required />
                    <br><span id="erroNome" style="color: red;"></span></br>

                    <label> Autor do filme:</label>
                    <input type="text" name="nome_autor" id="nome_autor" onfocusout="validaAutor()" required />
                    <br><span id="erroAutor" style="color: red;"></span></br>

                    <label>Lançamento:</label>
                    <input type="text" name="ano_lancamento" id="ano_lancamento" onfocusout="validaLancamento()" required />
                    <br><span id="erroLancamento" style="color: red;"></span></br>

                    <label>Escolha os gêneros:</label>
                    <select name="categoria" required>
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

                    <label>Sinópse do filme:</label>
                    <textarea name="sinopse" rows="2" cols="22" required></textarea></br></br>

					<label>Preço:</label>
                    <input type="number" name="preco" id="preco" onfocusout="validaPreco()" required />
                    <br><span id="erroPreco" style="color: red;"></span></br>
                
                    <label>Imagem:</label>
                    <input type="file" name="imagem" required /></br>
                </br>

                    <input type="submit" value="Cadastrar"/>

            </form>  
        </div>

        <script src="js/ValidacaoFilmes.js"></script>
		<script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/validaform.min.js"></script>
		
		<?php
            include "rodape.inc";
        ?>
</body>
</html>