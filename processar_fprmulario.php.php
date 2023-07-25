<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];



    echo "<h2>Obrigado por entrar em contato, $nome!</h2>";
    echo "<p>Nós recebemos sua mensagem:</p>";
    echo "<p>E-mail: $email</p>";
    echo "<p>Mensagem: $mensagem</p>";
}
?>