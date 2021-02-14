<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <title>Lista Usuário</title>

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
            include ("cabecalho_conexao.php");
        ?>
        <nav class="nav2">
            <marquee><h4>Listagem de Usuários</h4></marquee>
        </nav>
        <?php
            $SQL = "SELECT * FROM usuario";

            $query = mysqli_query($con, $SQL);
                if($query){
                    if(mysqli_num_rows($query) > 0){

                        echo '<table border="4" align="center" class="listaf">
                                    <br/>
                                    <tr style="background-color: black;">
                                        <th>ID</th>
                                        <th>Nome</th>
                                        <th>Email</th>
                                        <th>Excluir</th>
                                       
                                    </tr>
                        ';
                    while(($resul =  mysqli_fetch_assoc($query)) != null){

                                echo "<tr>";
                                    echo "<td>" . $resul['id'] . "</td>";
                                    echo "<td>" . $resul['nome'] . "</td>";
                                    echo "<td>" . $resul['email'] . "</td>";
                                    echo "<td> <small class='text-muted'><h3><a href='./excluir_usuarios.php?id=$resul[id]' class='btn btn-primary'> Excluir</a></h5></small></td>";     
                                echo "</tr>";
                    }
                        echo "</table>";  
                    }else{
                        echo "<h3>Usuário não cadastrado!</h3>";
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