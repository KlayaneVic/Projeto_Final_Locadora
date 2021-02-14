<?php

    include ('cabecalho_conexao.php');
    $parametro = $_POST['parametro'];

    if($parametro != ""){
        $SQL = "SELECT * FROM usuario where email = '$parametro'";
        $dados_recuperados = mysqli_query($con, $SQL);

        if(mysqli_num_rows($dados_recuperados) <= 0){
			echo 1;
        } else {
			echo 0;
		}
    }
?>
