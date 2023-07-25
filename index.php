<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rioss tatto</title>
    <link rel="stylesheet" href="tatuagem.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>rioss tattos</h1>
            <nav>
                <ul>
                    <li><a href="#portfolio">Tatuagens</a></li>
                    <li><a href="#sobre">Sobre</a></li>
                    <li><a href="#contato">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section id="Portfólio">
        <div class="container">
            <h2>algumas tattos</h2>
            <div class="gallery">
                <img src="IMG_E6517.JPG" alt="Tatuagem 1">
                <img src="IMG_E6516.JPG" alt="Tatuagem 2">
                <img src="IMG_E6518.JPG" alt="Tatuagem 3">
            </div>
        </div>
    </section>
    <section id="sobre">
        <div class="container">
            <h2>Sobre mim</h2>
            <p>tatuadora iniciante que ama muito o bebezinho dela!</p>
        </div>
    </section>
    <section id="contato">
        <div class="container">
            <h2>Contato</h2>
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
            <form action="processar_fprmulario.php" method="post">
                <input type="text" name="nome" placeholder="Nome" required>
                <input type="email" name="email" placeholder="E-mail" required>
                <textarea name="mensagem" placeholder="Digite sua mensagem" required></textarea>
                <button type="submit">Enviar</button>
            </form>
        </div>
    </section>
    
    </section>
    <footer>
        <div class="container">
            <p>Todos os direitos reservados &copy; 2023 | Tatuagens do Artista</p>
            <div class="social-icons">
                <a href="#" target="_blank" title="Facebook"><i class="fab fa-facebook"></i></a>
                <a href="https://www.instagram.com/rioss.tatto/" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="#" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
    </footer>
</body>
</html>
