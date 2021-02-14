<!DOCTYPE html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="css/estilo.css" />
        <title>Perfil  Usuário</title>

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
            include("cabecalho2.inc");
        ?>
        <nav class="nav2">
            <marquee><h4>Este é o seu Perfil !!</h4></marquee>
        </nav>
        <?php

            $email = $_GET['email'];
            $senha = $_GET['senha'];

             //Abrindo conexão com o BD
             include('cabecalho_conexao.php');
                
             $SQL = "SELECT * FROM usuario WHERE email='$email' and senha = '$senha'" ;

             $dados_recuperados = mysqli_query($con, $SQL);
             
     
             echo '
                 </br>
                 <div class="container">
                 <div class="row">
                 <div class="card-group">';
                 if($dados_recuperados){
                     if(mysqli_num_rows($dados_recuperados) > 0){
                     while(($resultado =  mysqli_fetch_assoc($dados_recuperados)) != null){
						$nome = $resultado["nome"];
                         echo '<div class="card" style="max-width: 70em; background-color: black; margin-left: 17em; border-radius: 50px; border: none; margin-top: 5em; padding: 1em;">
									<div class="row no-gutters">
										<div class="col-sm-5" style="background-color: white; border-radius: 15em; padding: 1em;">
											<img src="img/usuario.png" alt="" style="height: 2em; width: 13em; text-align: center;" class="card-img-top h-100" alt="...">
										</div>
										<div class="col-sm-7" style="background-color: black;">
											<div class="card-body">
												<h5 class="card-title"><b>Usuário</b></h5>
												<p class="card-text"><b>Nome:</b><br/>'.$resultado["nome"].'</p>
												<p class="card-text"><b>E-mail:</b><br/> '.$resultado["email"].'</p>
												<h4>Bem vindo(a) '.$nome.' !!</h4>
											</div>
										</div>';
                     }
                           
                     }else{
                         echo "<h3>Usuário não cadastrado!</h3>";
                     }
                 }else{
                     echo "Problema de sintaxe SQL<br>";
                     echo mysqli_error($con);
                 }
             echo '
                 </div>
                 </div>
                 </div>
                 ';
                
                $query = mysqli_query($con, $SQL);
                if($query){
                     
                } else {
                     echo mysqli_error($con);
                }
                mysqli_close($con);
        ?>
		
    </body>
<html>
