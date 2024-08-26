
<!DOCTYPE html>
<html lang="Pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
    <title>Projeto faculdade</title>
    <link rel="stylesheet" href="css/styleGlobal.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/ia.css">
</head>
<?php include "navbar.php";?>

<div class="containerGeral">

  <h1>Olá seja bem vindo!</h1>
  <h3>Aqui você pode pesquisar sobre o que quiser!</h3>
  <div class="chat-list"></div>
  <div class="typing-area">
    <form action="#" class="typing-form">
      <div class="input-wrapper">
        <input type="text" placeholder="Escreva algo..." class="typing-input" required />
        <button id="send-message-button" class="icon material-symbols-rounded">send</button>
      </div>
      <div class="action-buttons">
        <span id="delete-chat-button" class="icon material-symbols-rounded">delete</span>
      </div>
    </form>
  </div>

</div>
  
  <script src="./js/scriptIA.js"></script>
