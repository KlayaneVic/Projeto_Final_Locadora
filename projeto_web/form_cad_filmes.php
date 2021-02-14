<!DOCTYPE html>
    <head>
        <meta charset="utf-8" />
        <title>Cadastro</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
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
        <?php
            //imagens
			$imagem = $_FILES['imagem'];
            if($imagem != null){
				  preg_match("/\.(png|jpg|jpeg){1}$/i", $imagem["name"], $ext);
				  if($ext == true){
					  $nome_imagem = md5(uniqid(time())). "." . $ext[1];
					  $caminho_imagem = "imagens_banco/" . $nome_imagem;
					  move_uploaded_file($imagem["tmp_name"], $caminho_imagem);
				  }else{
					  echo "Variavel ext é falsa";
				  }
			 }else{
				 echo "Não existe imagem!";
			 }
             //Capturei as informações do formulário
             $nome = $_POST['nome_filme'];
             $autor = $_POST['nome_autor'];
             $lancamento = $_POST['ano_lancamento'];
             $genero = $_POST['categoria'];
             $sinopse = $_POST['sinopse'];
			 $preco = $_POST['preco'];



             //Abrindo conexão com o BD
             include('cabecalho_conexao.php');
                
             $SQL = "INSERT INTO filmes (nome, autor, lancamento, genero, sinopse, preco, nome_imagem) 
                VALUE ('$nome', '$autor', '$lancamento', '$genero', '$sinopse', $preco, '$nome_imagem')";
                        
             $texto = "</h3>Filme $nome cadastrado com Sucesso!!</h3><br>";
                
             include('rodape_conexao.php'); 
        ?>
        <a href='lista_filmes.php'><h3>Listagem de filmes</h3></a>
    </body>
<html>