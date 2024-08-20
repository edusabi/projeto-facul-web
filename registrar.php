<?php

include "./cadastro/conexaoDB.php";

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = trim($_POST['nome']);
    $email = trim($_POST['email']);
    $senha = trim($_POST['senha']);
    $confirmarSenha = trim($_POST['ConfirmarSenha']);

    // Validar campos
    if (empty($nome) || empty($email) || empty($senha) || empty($confirmarSenha)) {
        echo "Todos os campos são obrigatórios!";
        exit;
    }

    if ($senha !== $confirmarSenha) {
        header("Location: registro.php ");
        exit;
    }

    // Verifica se o email já está registrado
    try {
        $stmt = $pdo->prepare("SELECT COUNT(*) FROM usuarios WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $emailCount = $stmt->fetchColumn();

        if ($emailCount > 0) {
            header("Location: registro.php ");
            exit;
        }

        // Hash da senha
        $senhaHash = password_hash($senha, PASSWORD_BCRYPT);

        // Insere usuário no banco de dados
        $stmt = $pdo->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)");
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $senhaHash);

        if ($stmt->execute()) {
            header("Location: login.php ");
        } else {   
            header("Location: registro.php ");
        }
    } catch (PDOException $e) {
        echo "ERRO: " . $e->getMessage();
    }
}
?>
