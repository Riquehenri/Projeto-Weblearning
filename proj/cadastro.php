<?php
    
    if (isset($_POST['submit'])) 
    {
        //print_r($_POST['nome']);
        //print_r($_POST['email']);
        //print_r($_POST['senha']);
        include_once('config.php');
        $nome = $_POST['nome'];
        $email = $_POST['email']; 
        $senha = $_POST['senha'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,senha) 
        VALUES('$nome','$email','$senha')");

        header('Location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>WEBLEARNING</title>
    <link rel="stylesheet" href="css/cadastro.css" />
  </head>
  <body>
    <div class="container">
      <div class="form-container">
        <form action="cadastro.php" method="POST">
        <h2>Criar Conta</h2>
        <div class="input-group">
          <img src="imagens/person.webp" alt="Ícone de Nome" class="input-icon">
          <input placeholder="Digite seu nome de usuário" type="text" name="nome"/>
        </div>
        <div class="input-group">
          <img src="imagens/arroba.webp" alt="Ícone de Nome" class="input-icon">

          <input placeholder="Digite seu email" type="email" name="email"/>
        </div>
        <div class="input-group">
          <img src="imagens/lock.webp" alt="Ícone de Nome" class="input-icon">

          <input placeholder="Digite sua senha" type="password" name="senha"/>
        </div>
        <div class="input-group">
          <img src="imagens/lock.webp" alt="Ícone de Nome" class="input-icon">

          <input placeholder="Confirme sua senha" type="password" name="confirma" />
        </div>
        <button type="submit" name="submit">Criar conta</button>
        <div class="or">ou</div>
        <button type="button" onclick = "window.location.href ='login.php';">Entrar em conta existente</button>
        </form>      
      </div>
    </div>
  </body>
</html>
