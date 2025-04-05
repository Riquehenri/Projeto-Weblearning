<?php
    session_start();
    //print_r($_SESSION);
    if ((!isset($_SESSION['nome']) == true) and (!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) 
    {
        unset($_SESSION['nome']);  
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['nome'];
    $logado = $_SESSION['email'];
    
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>WEBLEARNING</title>
    <link rel="stylesheet" href="css/styles.css" />
  </head>
  <style>
    .logout-button {
        position: absolute;
        top: 10px;
        right: 10px;
        background-color: red;
        color: white;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
        font-size: 16px;
        border-radius: 5px;
    }
  </style>

    <form action="sair.php" method="post">
    <button type="submit" class="logout-button">Sair</button>
    </form>
    <div class="sidebar">
      <img src="imagens/Logo.png" alt="Logo rato" />
      <ul>
        <li><a href="Home.php">Home</a></li>
        <li><a href="atividades.php">Atividades</a></li>
        <li><a href="materias.php">Matérias</a></li>
        <li><a href="simulados.php">Simulados</a></li>
        <li><a href="sobre.php">Sobre Nós</a></li>
      </ul>
    </div>
    <div class="content">
      <div class="section">
        <h2>Atividades</h2>
      </div>
      <div class="section">
        <h2>Matérias</h2>
      </div>
      <div class="section">
        <h2>Simulados</h2>
      </div>
    </div>
  </body>
  <script src="js/Vlibras.js"></script>
</html>
