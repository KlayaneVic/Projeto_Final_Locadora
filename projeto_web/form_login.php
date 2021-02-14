<!DOCTYPE html>
    <head>
        <meta charset="utf-8" />
        <title>Loading....</title>
    </head>
    <body>
    <?php
        $senha = $_POST['senhaUsuario'];
        $email = $_POST['emailUsuario'];
                include ('cabecalho_conexao.php');
                $SQL = "SELECT * FROM usuario where email='$email' and senha = $senha";
            
                $dados_recuperados = mysqli_query($con, $SQL);
        
                if(mysqli_num_rows($dados_recuperados) > 0){
                    while (($resultado = mysqli_fetch_assoc($dados_recuperados)) != null) {
                        
                            if ($resultado['tipo'] == 1) {
                                header("Location:home.php?email=$email&senha=$senha"); 
                            }else {
                                header("Location:perfil_usuario.php?email=$email&senha=$senha"); 
                            }  
                    }

                }else{
                    echo ("<script language='JavaScript'>
						window.alert('ERRO: Confira senha e E-mail')
						window.location.href='login.php';
					</script>");
                }    
    ?>
    </body>
</html>