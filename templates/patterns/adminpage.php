<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Portfolio Développeur de Jeux Vidéo</title>
        <meta name="description" content="Ce portefolio présente Anthony Legrix et Gabriel Dalmon, ainsi que les projets étudiants qu'ils ont réalisé au cours de leur cursus pour devenir Développeur de Jeux Vidéo.">
        <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen">
        <link type="text/css" rel="stylesheet" href="../css/style.css"  media="screen">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=MedievalSharp&family=Roboto:wght@400;700;900&family=Silkscreen&display=swap" rel="stylesheet">
    </head>
    <body class="main-bg">
        <header>
            <ul id="slide-out" class="sidenav main-bg">
                <li><a class="waves-effect" href="index.php"><i class="fa-solid fa-house"></i>Accueil</a></li>
                <li><div class="divider"></div></li>
            </ul>
            <div class="navbar-fixed">
                <nav>
                    <div class="nav-wrapper main-bg">
                        <a href="#" data-target="slide-out" class="sidenav-trigger hide-on-large-only"><i class="fa-solid fa-bars"></i></a>
                        <div class="brand-logo right"><a href="https://gamingcampus.fr/" rel="nofollow"><img src="img/logo_header.webp" alt="Logo Gaming Campus"></a></div>
                        <ul id="nav-mobile" class="left hide-on-med-and-down">
                            <li><a class="main-font-color" href="index.php">Accueil</a></li>
                            <li><a class="main-font-color" href="../src/queries/disconnect.php">Se déconnecter</a></li>
                        </ul>
                        <a class="btn-floating waves-effect theme-switcher"><i class="fa-solid fa-moon"></i></a>
                    </div>
                </nav>
            </div>
        </header>
        <main>
            <?php require_once("../../src/queries/getUsers.php") ?>
            <div id="users">
                <ul>
                    <?php foreach($users as $user) { ?>
                        <li><p><?php echo $user['username']." | ".$user['email'] ?><p><a></a></li>
                    <?php } ?>
                </ul>
            </div>
            <div id="projects">
                
            </div>
        </main>
        <footer class="page-footer main-bg main-font-color">
            <div class="container">
                <div class="row">
                    <div class="col s12 l6">
                        <h3 class="flow-text">Portfolio de Développeur de jeux vidéo</h3>
                        <p>Ce portefolio présente Anthony Legrix et Gabriel Dalmon, ainsi que les projets étudiants qu'ils ont réalisé au cours de leur cursus pour devenir Développeur de Jeux Vidéo.</p>
                    </div>
                    <div class="col s12 l4 offset-l2">
                        <h3 class="flow-text">Liens</h3>
                        <ul class="nav">
                            <li><a href="index.html#">Accueil</a></li>
                            <li><a href="index.html#carousel">Projets</a></li>
                            <li><a href="index.html#team">Équipe</a></li>
                            <li><a class="modal-trigger" href="#contact">Contactez-nous</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container row">
                    <p class="col s6">Copyright &copy; 2022 Anthony Legrix - Gabriel Dalmon</p>
                    <ul class="col s4 offset-s2 socials">
                        <li><a class="btn-floating waves-effect" rel="nofollow" target="_blank" href="https://www.linkedin.com"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        <li><a class="btn-floating waves-effect" rel="nofollow" target="_blank" href="https://www.github.com"><i class="fa-brands fa-github"></i></a></li>
                        <li><a class="btn-floating waves-effect" rel="nofollow" target="_blank" href="https://www.youtube.com"><i class="fa-brands fa-youtube"></i></a></li>
                        <li><a class="btn-floating waves-effect" rel="nofollow" target="_blank" href="https://www.artstation.com"><i class="fa-brands fa-artstation"></i></a></li>
                    </ul>
                </div>
            </div>
        </footer>
        <script src="../js/jquery.min.js"></script>
        <script src="../js/materialize.min.js"></script>
        <script src="../js/script.js"></script>
        <script src="https://kit.fontawesome.com/c32cdcdbca.js" crossorigin="anonymous"></script>
    </body>
</html>