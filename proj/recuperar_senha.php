<?php
include("config.php");

$erro = [];

if (isset($_POST['ok'])) {
    $email = trim($_POST['email']); // Remover espaços em branco

    // Validação do e-mail
    if (empty($email)) {
        $erro[] = "O campo de e-mail não pode estar vazio.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erro[] = "E-mail inválido.";
    } else {
        // Consulta ao banco de dados usando prepared statements
        $stmt = $conexao->prepare("SELECT senha FROM usuarios WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();
        $total = $stmt->num_rows;

        if ($total == 0) {
            $erro[] = "O e-mail informado não existe no banco de dados.";
        } else {
            // Geração de nova senha
            $novasenha = substr(md5(time()), 0, 6);
            $nscriptografada = password_hash($novasenha, PASSWORD_DEFAULT); // Usando password_hash

            // Tentativa de envio do e-mail
            //if (mail($email, "Sua nova senha", "Sua nova senha: " . $novasenha)) {
            if(1==1){
                // Atualização da senha no banco de dados
                $stmt = $conexao->prepare("UPDATE usuarios SET senha = ? WHERE email = ?");
                $stmt->bind_param("ss", $nscriptografada, $email);
                $stmt->execute();

                if ($stmt->affected_rows > 0) {
                    //$erro[] = //"Senha alterada com sucesso! Verifique seu e-mail.";
                } else {
                    //$erro[] = //"Erro ao atualizar a senha.";
                }
            } else {
                //$erro[] = //"Erro ao enviar o e-mail.";
            }
        }
        $stmt->close();
    }
}

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>WEBLEARNING</title>
    <link rel="stylesheet" href="css/recuperar.css" />
</head>
<body>
    <?php 
    if (count($erro) > 0) { 
        foreach ($erro as $msg) { 
            echo "<p>$msg</p>"; 
        } 
    } 
    ?>
    <div class="container">
        <div class="form-container">
            <h2>Recuperar senha</h2>
            <div class="input-group">
                <form method="POST" action="">
                    <input placeholder="Seu e-mail" name="email" type="text" required />
                    <button name="ok" value="ok" type="submit">
                    Recuperar Senha
                    </button>
                </form>
            </div>
            <div class="or">OU </div>
            <button class="btn-secondary" onclick="window.location.href='login.php';">
                Cancelar Recuperação
            </button>
        </div>
    </div>
</body>
</html>