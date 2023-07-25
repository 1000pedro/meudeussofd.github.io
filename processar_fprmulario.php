<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];

    
    $dados = "Nome: " . $nome . "\n";
    $dados .= "E-mail: " . $email . "\n";
    $dados .= "Mensagem: " . $mensagem . "\n\n";

    
    $arquivo = fopen("dados_contato.txt", "a");
    fwrite($arquivo, $dados);
    fclose($arquivo);


    echo "<h2>Obrigado por entrar em contato, $nome!</h2>";
    echo "<p>Nós recebemos sua mensagem:</p>";
    echo "<p>E-mail: $email</p>";
    echo "<p>Mensagem: $mensagem</p>";
}
?>
