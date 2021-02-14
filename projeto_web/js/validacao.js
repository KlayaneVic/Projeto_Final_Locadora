function validaNome() {
    var nome = document.getElementById("nome_usuario");
    if (nome.value == "" || nome.value == "Insira seu Nome Aqui...") {
        document.getElementById("erroNome").innerHTML = 
        "Nome é obrigatório";
        return false;
    }else{
        document.getElementById("erroNome").innerHTML = "";
    }
    return true;
}

function validaEmail() {
    var email = document.getElementById("email_usuario");
    if (email.value == "" || email.value == "Exemplo@..com"){
        document.getElementById("erroEmail").innerHTML = 
        "Email Obrigatório, tente com exemplo@.com";
		$('#botao_salvar').prop('disabled', true); 
    }else{
        $(document).ready(function() {
                var email = $('#email_usuario').val();
                $.post('verificaEmail.php', {'parametro': email},
                    function (dado, status){
						if(dado == 0) {
                            document.getElementById("erroEmail").innerHTML = 
                            "Email já Existente! tente outro.";
                            $('#botao_salvar').prop('disabled', true);  
						}else{
                            document.getElementById("erroEmail").innerHTML = "";
                            $('#botao_salvar').prop('disabled', false);
						}
                    });
                });
    }
}

function validaSenha() {
    var senha = document.getElementById("senha_usuario").value;
    var conf_senha = document.getElementById("senha_confirmacao").value;
    if (senha == conf_senha) {
        if(senha == "" || conf_senha == ""){
            document.getElementById("erroSenha").innerHTML = 
            "Senha Obrigatório";
			$('#botao_salvar').prop('disabled', true);
        }else {
            document.getElementById("erroSenha").innerHTML = "";
			$('#botao_salvar').prop('disabled', false);  
        }
    }else {
        document.getElementById("erroSenha").innerHTML = 
        "As senhas devem ser iguais";
		$('#botao_salvar').prop('disabled', true);
    }
}