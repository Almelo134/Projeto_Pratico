<?php
// Verifica se o método de requisição é POST (formulário enviado)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Recebe os dados enviados via POST e aplica a função htmlspecialchars para prevenir ataques XSS (Cross-Site Scripting)
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $senha = htmlspecialchars($_POST['senha']);
    $confSenha = htmlspecialchars($_POST['confirmar']);

     // Verifica se o campo de nome está vazio
    if (empty($nome)) {
        // Redireciona de volta para o formulário com uma mensagem de erro se o nome estiver vazio
        header("Location: ../index.html?error=Nome+inválido&nome=$nome&email=$email");
        exit();
    }

    // Valida o formato do e-mail
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
         // Redireciona de volta com uma mensagem de erro se o e-mail for inválido
        header("Location: ../index.html?error=Email+inválido&nome=$nome&email=$email");
        exit();
    }

    // Valida a senha com uma expressão regular
    // A senha deve ter entre 6 e 12 caracteres, contendo pelo menos uma letra minúscula, uma maiúscula e um número
    if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[A-Za-z\d]{6,12}$/', $senha)) {
        // Redireciona de volta com uma mensagem de erro se a senha for inválida
        header(
            "Location: ../index.html?error=Senha+Incorreta&nome=$nome&email=$email"
        );
        exit();
    }

     // Verifica se a senha e a confirmação de senha são iguais
    if ($senha !== $confSenha) {
        // Redireciona de volta com uma mensagem de erro se as senhas não coincidirem
        header("Location: ../index.html?error=As+senhas+não+são+iguais$nome&email=$email");
        exit();
    }

// Caso todos os dados estejam válidos, exibe os dados recebidos em um layout HTML
echo "<!DOCTYPE html>";
echo "<html lang='pt-br'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "<title>Dados Recebidos</title>";
// Estilos CSS para a página
echo "<style>";
echo "* { padding: 0; margin: 0; }";
echo "body {";
echo "    font-family: Arial, Helvetica, sans-serif;";
echo "    background: linear-gradient(to bottom, #000000, rgb(37, 92, 92));";
echo "    color: #darkslategrey;";
echo "    display: flex;";
echo "    justify-content: center;";
echo "    align-items: center;";
echo "    height: 100vh;";
echo "}";
echo "h2 { color: #darkslategrey; text-align: center; margin-bottom: 20px; }";
echo ".resultado {";
echo "    background-color: rgba(255, 255, 255, 0.9);";
echo "    border-radius: 15px;";
echo "    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);";
echo "    padding: 40px;";
echo "    width: 400px;";
echo "}";
echo ".resultado p { color: rgb(13, 70, 119); font-size: 16px; }";
echo ".resultado strong { color: #000; margin-left: 15px; }";
echo "</style>";
echo "</head>";
echo "<body>";
// Exibe os dados recebidos de forma organizada
echo "<div class='resultado'>";
echo "<h2>Dados Recebidos com Sucesso!</h2>";
echo "<p><strong>Nome:</strong> $nome</p>";
echo "<p><strong>E-mail:</strong> $email</p>";
echo "<p><strong>Senha:</strong> $senha</p>";
echo "<p><strong>Confirmação:</strong> $confSenha</p>";
echo "</div>";
echo "</body>";
echo "</html>";
} else {
    // Se o método de requisição não for POST, redireciona de volta para a página inicial
    header("Location: ../index.html");
    exit();
}