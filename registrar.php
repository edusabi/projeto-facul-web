<?php
session_start(); // Inicia a sessão, se necessário

include('./conexao/conexao.php');

// Verificar se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obter dados do formulário e escapar para evitar SQL Injection
    $nome = $mysqli->real_escape_string($_POST['nome']);
    $email = $mysqli->real_escape_string($_POST['email']);
    $senha = $_POST['senha'];
    $confirmar_senha = $_POST['confirmar_senha'];

    // Verificar se as senhas são iguais
    if ($senha !== $confirmar_senha) {
        echo "As senhas não coincidem!";
        exit();
    }

    // Verificar se o e-mail já está registrado
    $sql_check_email = "SELECT * FROM usuarios WHERE email = '$email'";
    $result_check = $mysqli->query($sql_check_email);

    if ($result_check->num_rows > 0) {
        echo "Este e-mail já está registrado!";
        exit();
    }

    // Hash da senha
    $senha_hash = password_hash($senha, PASSWORD_BCRYPT);

    // Preparar a consulta SQL para evitar SQL Injection
    $stmt = $mysqli->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nome, $email, $senha_hash);

    // Executar a consulta e verificar se foi bem-sucedida
    if ($stmt->execute()) {
        echo "Usuário registrado com sucesso!";
    } else {
        echo "Erro ao registrar o usuário: " . $stmt->error;
    }

    // Fechar a declaração e a conexão
    $stmt->close();
    $mysqli->close();
}
?>
