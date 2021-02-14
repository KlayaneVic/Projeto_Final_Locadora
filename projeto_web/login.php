<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login de Usuário</title>
    <style>
        body {
            background-image: url('img/capa_filmes.jpg');
            background-size: 100%;
        }
    </style>
	<link rel="stylesheet" type="text/css" href="css/estilo.css" /> 
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css" />
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
</head>
<body>
		<nav class="navbar-header" style="background-color: black; opacity: 1; padding: 10px; ">
			<div class="row">
				<div class="column"><img src="img/logo.png" alt="" style="height: 6em; width: 18em; align: center;"></div>
			</div>
		</nav>

        <div class="login-form col-sm-6 offset-sm-3
                    col-md-4 offset-md-4" style="opacity: 0.9; border-radius: 2em;">
            <header>
				<h1>Alugue seus Filmes favoritos.</h1>
                <h5 align="center" style="color: red;">A Sua Locadora de Filmes Online!!</h5>
                <h5 align="center" style="color: red;"> ----- ☆ -----</h5>
                <h2 class="text-center">Entre com o seu <b>usuário</b> e <b>senha</b></h2>
            </header>
            <form action="form_login.php" method="POST">
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="material-icons">account_circle</i>
                        </div>
                        <input type="email" name="emailUsuario" required
                        class="form-control" placeholder="E-mail" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </div>
                        <input type="number" name="senhaUsuario" required
                        class="form-control" placeholder="Senha" 
                        data-cript="sha1, md5" />
                    </div>
                </div>
                <footer>
                    <div class="float-right">
                        <button type="submit" class="btn btn-primary">
                            Login
                        </button>
                    </div>
                </footer>
            </form>
            <div class="float-left"></div>
                <button class="btn btn-secondary" data-toggle="modal" data-target="#NovoUsuario">
                    Cadastrar
                </button>
        </div>
                <div class="modal" tabindex="-1" role="dialog" id="NovoUsuario">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Novo Aqui? Faça agora seu Cadastro!!</h5>
                                <button type="button" class="close"  data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
       
                            <form action="processa_cad.php" method="POST">
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="form-group col-sm-12">
                                            <label for="name">Nome Completo</label>
                                            <input type="text" name="nome_usuario" id="nome_usuario" class="form-control" 
                                            onfocusout="validaNome()" placeholder="Insira seu Nome Aqui..." required/>
                                            <span id="erroNome" style="color:red;"></span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-12">
                                            <label for="email" class="control-label">E-mail</label>
                                            <input type="email" name="email_usuario" id="email_usuario" class="form-control" 
                                            onfocusout="validaEmail()" placeholder="Exemplo@..com" required/>
                                            <span id="erroEmail" style="color:red;"></span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-6 col-12">
                                            <label for="senha">Senha</label>
                                            <input type="number" class="form-control pasword" 
                                            name="senha_usuario" data-cript="sha1, md5" id="senha_usuario" 
                                            placeholder="Senha" required/>
                                            <span id="erroSenha" style="color:red;"></span>
                                        </div>
                                        <div class="form-group col-sm-6 col-12">
                                            <label for="senhaConfirmacao">Confirmação de Senha</label>
                                            <input type="number" class="form-control pasword" 
                                            name="senha_confirmacao" data-cript="sha1, md5" id="senha_confirmacao"
                                            placeholder="Confirmação de Senha" onfocusout="validaSenha()" required/>
                                            <span id="erroSenha" style="color:red;"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="reset" class="btn btn-danger">Limpar</button>
                                    <button type="submit" id="botao_salvar" class="btn btn-primary">Salvar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        <script src="js/validacao.js"></script>
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/validaform.min.js"></script>
</body>
</html>