// Obtém o botão de envio do formulário
const botao = document.getElementById('botao')

// Função de validação do formulário
function validar(){

    // Função para validar o nome
    function validarNome(){

        var nome = document.getElementById("nome") // Obtém o campo de nome

        // Verifica se o campo de nome está vazio
        if (nome.value.trim() === ""){
            alert("Nome Incorreto") // Alerta se o nome estiver vazio
            nome.focus(); // Foca o campo para que o usuário corrija
        }
    }

    // Função para validar o email
    function validarEmail(){
        var email = document.getElementById("email").value.trim(); // Obtém o email do campo
         // Expressão regular (REGEX) para validar o formato do email
        const regexEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        // Verifica se o email não corresponde ao padrão da regex
        if (!regexEmail.test(email)){
            alert("Email Inválido") // Alerta se o email for inválido
            document.getElementById("email").focus();
        }
    }

    // Função para validar a senha
    function validarSenha(){
        var senha = document.getElementById("senha").value.trim();

        // Expressão regular para validar a senha (mínimo de 5 e máximo de 8 caracteres, uma letra maiúscula, uma minúscula e um número)
        const regexSenha = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[A-za-z\d]{5,8}$/;
        
        // Verifica se a senha não corresponde ao padrão da regex
        if (!regexSenha.test(senha)){
            alert("Senha Incorreta") // Alerta se a senha for inválida
            document.getElementById("senha").focus();
        }
    }

    // Função para validar a confirmação da senha
    function validarConf(){
        var senha = document.getElementById("senha").value.trim(); // Obtém a senha do campo
        var confirmar = document.getElementById("confirmar").value.trim(); // Obtém a confirmação da senha
        
         // Verifica se as senhas não são iguais
        if (confirmar !== senha){
            alert("As senhas não são iguais") // Alerta se as senhas não coincidirem
            document.getElementById("confirmar").focus
        } 
    }
    
    // Chama as funções de validação
    validarNome();
    validarEmail();
    validarSenha();
    validarConf();
}
