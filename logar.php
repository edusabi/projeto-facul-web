<?php
session_start(); // Inicia a sessão

include('./conexao/conexao.php');

// Verificar se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obter dados do formulário e escapar para evitar SQL Injection
    $email = $mysqli->real_escape_string($_POST['email']);
    $senha = $_POST['senha'];

    // Consultar o banco de dados para encontrar o usuário com o e-mail fornecido
    $sql_code = "SELECT * FROM usuarios WHERE email = '$email'";
    $sql_query = $mysqli->query($sql_code);

    if (!$sql_query) {
        die("Erro na consulta: " . $mysqli->error);
    }

    $quantidade = $sql_query->num_rows;

    if ($quantidade == 1) {
        $usuario = $sql_query->fetch_assoc();

        // Verificar a senha usando password_verify
        if (password_verify($senha, $usuario['senha'])) {
            $_SESSION['id'] = $usuario['idusuario'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: ia.php");
            exit(); // Certifique-se de que o script é encerrado após o redirecionamento
        } else {
            echo "Senha incorreta!";
        }
    } else {
        echo "E-mail não encontrado!";
    }
}

$mysqli->close();
?>
