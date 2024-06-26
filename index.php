<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HapexGames</title>
    <meta name="description" content="Site de jogos da Hapex Games">
    <meta name="keywords" content="jogos, Hapex Games, simples">

    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!--Fonte -> 'Baloo Paaji 2'-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Paaji+2:wght@400..800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="shortcut icon" href="imagens/hypexgamesAT.png" type="image/x-icon">
</head>

<body>
    <header class="header">
        <a href="index.php" title="HapexGames" class="header-logo">
            <img src="imagens/hypexgamesAT.png" alt="HypexGames">
        </a>

        <a href="javascript:mostrarMenu()" title="Menu" class="header-menu">
            <i class="fa-solid fa-bars"></i>
        </a>

        <nav class="header-nav">
            <ul>
                <li>
                    <a href="index.php?pagina=home" title="Home">
                        <i class="fa-solid fa-house"></i> Home
                    </a>
                </li>
                <li>
                    <a href="index.php?pagina=equipe" title="Equipe">
                        <i class="fa-solid fa-users"></i> Equipe
                    </a>
                </li>
                <li>
                    <a href="index.php?pagina=jogos" title="Jogos">
                        <i class="fa-solid fa-gamepad"></i> Jogos
                    </a>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        <?php
            //imprimir o conteudo do array do GET
            //print_r($_GET);

            //recuperar variavel pagina
            $pagina = $_GET["pagina"] ?? "home";//?? -> significa "se não"

            //paginas/home.php
            $pagina = "paginas/{$pagina}.php";

            //verificar se o arquivo existe
            if (file_exists($pagina)) {
                include $pagina;
            } else {
                include "paginas/erro.php";
            }
        ?>
    </main>

    <footer class="footer">
        <p class="footer-p">&copy;Desenvolvido por Eduardo Rigobeli</p>
        <div class="footer-flex">
            <p class="contato">
                <a href="https://github.com/EduardoRigobeli?tab=repositories" title="Repositório" target="_blank">
                    <i class="fa-brands fa-github"></i>
                </a>
            </p>
            <p class="contato">
                <a href="https://www.instagram.com/rigobelii_/" title="Instagram" target="_blank">
                    <i class="fa-brands fa-instagram"></i>
                </a>
            </p>
            <p class="contato">
                <a href="https://www.linkedin.com/in/eduardo-rigobeli-82b9922b9/" title="LinkedIn" target="_blank">
                    <i class="fa-brands fa-linkedin-in"></i>
                </a>
            </p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <script>
        function mostrarMenu() {
            var menu = document.querySelector(".header-nav");
            menu.classList.toggle("show");
        }
    </script>
</body>
</html>