<?php
class Usuario {

    public function login($email, $senha) {
        global $pdo;

        // Verifica se o usuário existe no banco de dados
        $sql = $pdo->prepare("SELECT idusuario, senha FROM usuarios WHERE email = :email");
        $sql->bindParam(":email", $email);
        $sql->execute();

        if($sql->rowCount() > 0){
            $data = $sql->fetch();

            // Verifica a senha
            if(password_verify($senha, $data['senha'])){
                // Se a senha for correta, inicia a sessão
                session_start();
                $_SESSION['idUser'] = $data['idusuario'];
                return true;
            } else {
                return false; // Senha incorreta
            }
        } else {
            return false; // Usuário não encontrado
        }
    }
}
?>
