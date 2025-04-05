
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>WEBLEARNING</title>
    <link rel="stylesheet" href="css/login.css" />
  </head>
  <body>
    <div class="container">
      <div class="form-container">
        <form action="testelogin.php" method="POST">
        <h2>Realizar Login</h2>
        <div class="input-group">
          <img
            src="imagens/person.webp"
            id="username"
            name="username"
            alt="Ícone de Nome"
            class="input-icon"
          />
          <input placeholder="Digite seu nome de usuário" type="text" name="nome" />
        </div>
        <div class="input-group">
          <img
            src="imagens/arroba.webp"
            alt="Ícone de Nome"
            class="input-icon"
          />

          <input
            placeholder="Digite seu email"
            id="email"
            name="email"
            type="email"
          />
        </div>
        <div class="input-group">
          <img src="imagens/lock.webp" alt="Ícone de Nome" class="input-icon" />

          <input
            placeholder="Digite sua senha"
            id="senha"
            name="senha"
            type="password"
          />
          <a href="#" class="forgot-password"  onclick="window.location.href='recuperar_senha.php';">Esqueceu sua senha?</a>
        </div>
        
        <button type="submit" name="submit" onclick="window.location.href='testelogin.php';">
          Entrar na conta
        </button>
        <div class="or">ou</div>
        <button type="button" onclick="window.location.href='cadastro.php';">
          Criar nova conta
        </button>
        </form>
      </div>
    </div>

    <script src="js/login.js"></script>
  </body>
</html>
