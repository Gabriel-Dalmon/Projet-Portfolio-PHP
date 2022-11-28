<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Portfolio Développeur de Jeux Vidéo</title>
        <meta name="description" content="Ce portefolio présente Anthony Legrix et Gabriel Dalmon, ainsi que les projets étudiants qu'ils ont réalisé au cours de leur cursus pour devenir Développeur de Jeux Vidéo.">
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen">
        <link type="text/css" rel="stylesheet" href="css/style.css"  media="screen">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=MedievalSharp&family=Roboto:wght@400;700;900&family=Silkscreen&display=swap" rel="stylesheet">
    </head>
    <body class="main-bg">
        <header>
            <ul id="slide-out" class="sidenav main-bg">
                <li><a class="waves-effect" href="index.html#"><i class="fa-solid fa-house"></i>Accueil</a></li>
                <li><a class="waves-effect" href="index.html#carousel"><i class="fa-solid fa-folder-open"></i>Projets</a></li>
                <li><a class="waves-effect" href="index.html#team" id="easteregg2"><i class="fa-solid fa-people-group"></i>Équipe</a></li>
                <li><div class="divider"></div></li>
                <li><a class="waves-effect modal-trigger" href="#contact"><i class="fa-solid fa-at"></i>Contactez-nous</a></li>
            </ul>
            <ul id="dropdown-projects" class="dropdown-content main-bg">
                <li><a href="projects/project1.html">Projet 1</a></li>
                <li class="divider"></li>
                <li><a href="projects/project2.html">Projet 2</a></li>
                <li class="divider"></li>
                <li><a href="projects/project3.html">Projet 3</a></li>
            </ul>
            <div class="navbar-fixed">
                <nav>
                    <div class="nav-wrapper main-bg">
                        <a href="#" data-target="slide-out" class="sidenav-trigger hide-on-large-only"><i class="fa-solid fa-bars"></i></a>
                        <div class="brand-logo right"><a href="https://gamingcampus.fr/" rel="nofollow"><img src="img/logo_header.webp" alt="Logo Gaming Campus"></a></div>
                        <ul id="nav-mobile" class="left hide-on-med-and-down">
                            <li><a class="main-font-color" href="index.html#">Accueil</a></li>
                            <li><a class="dropdown-trigger main-font-color" href="index.html#carousel" data-target="dropdown-projects">Projets</a></li>
                            <li><a class="main-font-color" href="index.html#team">Équipe</a></li>
                            <li><a class="modal-trigger main-font-color" href="#contact">Contactez-nous</a></li>
                            <li><a class="modal-trigger main-font-color" href="#signup">Inscrivez-vous</a></li>
                            <li><a class="modal-trigger main-font-color" href="#signup">Connectez-vous</a></li>
                        </ul>
                        <a class="btn-floating waves-effect theme-switcher"><i class="fa-solid fa-moon"></i></a>
                    </div>
                </nav>
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
            <div id="signup" class="modal main-bg">
                <div class="modal-content container">
                    <h3 class="flow-text">Inscrivez-vous</h3>
                </div>
                <div class="row container">
                    <form class="col s12" method="post" action="../model/signup.php">
                    <div class="row modal-form-row">
                            <div class="input-field col s11">
                                <input id="email" name="email" type="email" class="validate white-text">
                                <label for="email">Email</label>
                            </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s11">
                            <input id="username" name="username" type="text" class="validate white-text">
                            <label for="username">Username</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s11">
                            <input type="password" name="password" id="password" class="materialize-textarea validate">
                            <label for="password">Password</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s11">
                            <input type="submit" value="Submit" class="materialize-textarea validate">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer main-bg container">
                <a class=" modal-action modal-close waves-effect waves-white btn-flat white-text gradient-2">Submit</a>
            </div>
        </header>