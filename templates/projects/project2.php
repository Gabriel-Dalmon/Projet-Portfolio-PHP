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
    <body class="main-bg main-font-color">
        <header>
            <ul id="slide-out" class="sidenav main-bg">
                <li><a class="waves-effect" href="../index.html#"><i class="fa-solid fa-house"></i>Accueil</a></li>
                <li><a class="waves-effect" href="../index.html#carousel"><i class="fa-solid fa-folder-open"></i>Projets</a></li>
                <li><a class="waves-effect" href="../index.html#team"><i class="fa-solid fa-people-group"></i>Équipe</a></li>
                <li><div class="divider"></div></li>
                <li><a class="waves-effect modal-trigger" href="#contact"><i class="fa-solid fa-at"></i>Contactez-nous</a></li>
            </ul>
            <ul id="dropdown-projects" class="dropdown-content main-bg">
                <li><a href="project1.html">Projet 1</a></li>
                <li class="divider"></li>
                <li><a href="project2.html">Projet 2</a></li>
                <li class="divider"></li>
                <li><a href="project3.html">Projet 3</a></li>
            </ul>
            <div class="navbar-fixed">
                <nav>
                    <div class="nav-wrapper main-bg">
                        <a href="#" data-target="slide-out" class="sidenav-trigger hide-on-large-only"><i class="fa-solid fa-bars"></i></a>
                        <div class="brand-logo right"><a href="https://gamingcampus.fr/" rel="nofollow"><img src="../img/logo_header.webp" alt="Logo Gaming Campus"></a></div>
                        <ul id="nav-mobile" class="left hide-on-med-and-down">
                            <li><a class="main-font-color" href="../index.html#">Accueil</a></li>
                            <li><a class="dropdown-trigger main-font-color" href="../index.html#carousel" data-target="dropdown-projects">Projets</a></li>
                            <li><a class="main-font-color" href="../index.html#team">Équipe</a></li>
                            <li><a class="modal-trigger main-font-color" href="#contact">Contactez-nous</a></li>
                        </ul>
                        <a class="btn-floating waves-effect theme-switcher"><i class="fa-solid fa-moon"></i></a>
                    </div>
                </nav>
            </div>  
        </header>
        <main>
            <div class="parallax-container">
                <div class="parallax"><img src="../img/project2/bg_2.jpg" alt="Celeste Background of Parallax 1"></div>
            </div>
            <div class="container section row flow-text">
                <h1 class="col s12 center-align">Développement Frontend d'un Site Celeste</h1>
                <div class="col s12 row flow-text">
                    <h2 class="col s12 center-align">Introduction</h2>
                    <p class="col s12">L'objectif était de développer par groupe un site web format "une page" en HTML/CSS présentant notre jeu préféré.</p>
                </div>
                <div class="col s12 row flow-text">
                    <h2 class="col s12 center-align">Description</h2>
                    <p class="col s12">Les contraintes initiales du cahier des charges étaient : un menu de navigation entre les différentes pages/parties du site, une introduction résumant le concept du jeu, des photos/images/screenshots du jeu, 
                        une description du jeu, les principales règles du jeu, un bouton qui redirige sur la page officielle du jeu, un formulaire de contact,
                        une vidéo de gameplay du jeu issue de Youtube via un “embed”, un design soigné et cohérent, des polices de caractères spéciales grâce à “Google Font”.<br><br>
                        Nous nous sommes fixé quelques contraintes complémentaires au sein du groupe, tel que réaliser un site en anglais ainsi que de rester fidèle au style graphique du jeu, notamment en reprenant la même police de caractères.
                    </p>
                </div>
            </div>
            <div class="parallax-container">
                <div class="parallax"><img src="../img/project2/bg_1.webp" alt="Celeste Background of Parallax 1"></div>
            </div>
            <div class="container section row flow-text">
                <div class="col s12 row center-align flow-text">
                    <h2 class="col s12">Compétences acquises</h2>
                    <p class="col s6 m3">- HTML</p>
                    <p class="col s6 m3">- CSS</p>
                    <p class="col s6 m3">- SEO</p>
                    <P class="col s6 m3">- Esthétique</p>
                </div>
                <div class="col s12 center-align flow-text cgrid-padding">
                    <h2 class="col s12">Résultat final</h2>
                    <div class="col s12 m6">
                        <img class="wrapped" src="../img/project2/welcome_screen.webp" alt="Frontend de l'écran d'accueil du projet">
                        <p>Écran d'accueil</p>
                    </div>
                    <div class="col s12 m6">
                        <img class="wrapped" src="../img/project2/presentation.webp" alt="Frontend de la présentation du jeu">
                        <p>Présentation du jeu</p>
                    </div>
                    <div class="col s12 m6">
                        <img class="wrapped" src="../img/project2/content.webp" alt="Frontend du contenu du projet">
                        <p>Contenu de la page</p>
                    </div>
                    <div class="col s12 m6">
                        <img class="wrapped" src="../img/project2/footer.webp" alt="Frontend du pied de page du projet">
                        <p>Pied de page</p>
                    </div>
                </div>
                <div id="contact" class="modal main-bg">
                    <div class="modal-content container">
                        <h3 class="flow-text">Formulaire de contact</h3>
                    </div>
                    <div class="row container">
                        <form class="col s12">
                            <div class="row modal-form-row">
                            <div class="input-field col s11">
                                <input id="question" type="text" class="validate white-text">
                                <label for="question">Question</label>
                            </div>
                            </div>
                            <div class="row">
                            <div class="input-field col s11">
                                <textarea id="question_description" class="materialize-textarea validate"></textarea>
                                <label for="question_description">Description</label>
                            </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer main-bg container">
                        <a class=" modal-action modal-close waves-effect waves-white btn-flat white-text gradient-2">Submit</a>
                    </div>
                </div>
            </div>
        </main>
        <footer class="page-footer main-bg main-font-color">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5>Portfolio de Développeur de jeux vidéo</h5>
                        <p>Ce portefolio présente Anthony Legrix et Gabriel Dalmon, ainsi que les projets étudiants qu'ils ont réalisé au cours de leur cursus pour devenir Développeur de Jeux Vidéo.</p>
                    </div>
                    <div class="col l4 offset-l2 s12">
                        <h5>Liens</h5>
                        <ul class="nav">
                            <li><a href="../index.html#">Accueil</a></li>
                            <li><a href="../index.html#carousel">Projets</a></li>
                            <li><a href="../index.html#team">Équipe</a></li>
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
        <script  src="../js/jquery.min.js"></script>
        <script  src="../js/materialize.min.js"></script>
        <script  src="../js/script.js"></script>
        <script src="https://kit.fontawesome.com/c32cdcdbca.js" crossorigin="anonymous"></script>
    </body>
</html>
