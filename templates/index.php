<?php
    require_once("../config/config.php");
    require "component/header.php";
?>
        <main>
            <div id="carousel">
                <div class="carousel carousel-slider center">
                    <h1 class="carousel-fixed-item">Portfolio Développeur de Jeux Vidéo</h1>
                    <div class="indicators carousel-fixed-item center">
                        <a class="btn-floating waves-effect" id="0" ><i class="fa-solid fa-dice-one"></i></a>
                        <a class="btn-floating waves-effect" id="1" ><i class="fa-solid fa-dice-two"></i></a>
                        <a class="btn-floating waves-effect" id="2" ><i class="fa-solid fa-dice-three"></i></a>
                    </div>
                    <div class="carousel-item valign-wrapper" href="#one!">
                        <div class="bg-filter"></div>
                        <div class="slide-content">
                            <h2 class="flow-text">Site Web Pure HTML/CSS</h2>
                            <p>This is your first panel</p>
                            <a class="btn waves-effect" href="projects/project1.html">Découvrir</a>
                        </div>
                    </div>
                    <div class="carousel-item valign-wrapper" href="#two!">
                        <div class="bg-filter"></div>
                        <div class="slide-content">
                            <h2>Site Web Pure HTML/CSS</h2>
                            <p>This is your first panel</p>
                            <a class="btn waves-effect" href="projects/project2.html">Découvrir</a>
                        </div>
                    </div>
                    <div class="carousel-item valign-wrapper" href="#three!">
                        <div class="bg-filter"></div>
                        <div class="slide-content">
                            <h2>Portfolio HTML/Framework CSS/JQuery</h2>
                            <p>This is your first panel</p>
                            <a class="btn waves-effect" href="projects/project3.html">Découvrir</a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="team" class="container section row flow-text main-font-color">
                <h2 class="col s12 center-align">Notre équipe</h2>
                <div class="col s12 l5 row">
                    <div class="col s12 row">
                        <div class="col s12 row valign-wrapper">
                            <img class="col s6" src="img/gabriel_profile_pic.webp" alt="Profile picture of Gabriel">
                            <div class="col s6">
                                <p>
                                    <span class="bold legend">Gabriel DALMON</span>
                                    <br><span class="legend">Étudiant en G.Tech au Gaming Campus</span>
                                </p>
                            </div>
                        </div>
                        <ul class="col s6 offset-s3 socials hide-on-med-and-down">
                            <li><a class="btn-floating waves-effect" rel="nofollow" target="_blank" href="https://www.linkedin.com/in/gabriel-dalmon-712b75252/"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            <li><a class="btn-floating waves-effect" rel="nofollow" target="_blank" href="https://www.github.com"><i class="fa-brands fa-github"></i></a></li>
                            <li><a class="btn-floating waves-effect" rel="nofollow" target="_blank" href="https://www.youtube.com/channel/UCzTmJK_fT-FaBjq3zRt7CeQ/featured"><i class="fa-brands fa-youtube"></i></a></li>
                            <li><a class="btn-floating waves-effect" rel="nofollow" target="_blank" href="https://www.artstation.com"><i class="fa-brands fa-artstation"></i></a></li>
                        </ul>
                    </div>
                    <div class="col s12 ">
                        <h3 class="center-align flow-text">Expérience</h3>
                        <ul class="collapsible">
                            <li>
                                <div class="collapsible-header main-bg secondary-bg"><i class="fa-solid fa-chevron-right"></i>Été 2022 (2 mois) - Travail saisonnier dans la restauration au poste de plongeur</div>
                                <div class="collapsible-body"><span>Restaurant Les Pécheurs : adaptation à une nouvelle activité dans un cadre précis. Expérience du monde du travail et collaboration avec une équipe constituée de plusieurs corps et de profils variés. Flexibilité des horaires.</span></div>
                            </li>
                            <li>
                                <div class="collapsible-header main-bg secondary-bg"><i class="fa-solid fa-chevron-right"></i>2019 (6 mois) - Animation de club de sport niveau junior</div>
                                <div class="collapsible-body"><span>DJK Wipperfeld : coaching et animation dans un club de football en Allemagne.</span></div>
                            </li>
                            <li>
                                <div class="collapsible-header main-bg secondary-bg"><i class="fa-solid fa-chevron-right"></i>2019 (6 mois) - Échange Franco-Allemand</div>
                                <div class="collapsible-body"><span>Programme Voltaire : séjour de six mois ; scolarisé en Allemagne, riche expérience dans l'apprentissage de l'ouverture aux autres. Nécessité de s'adapter à un nouvel environnement et une nouvelle famille.</span></div>
                            </li>
                        </ul>
                    </div>
                    <div class="col s6 m5 l12 progress-list">
                        <h3 class="center-align flow-text">Langues</h3>
                        <div class="valign-wrapper">
                            <p>Français</p>
                            <div class="progress-container">
                                <div class="progress">
                                    <div class="determinate gradient"></div>
                                </div>
                            </div>
                        </div>
                    
                        <div class="valign-wrapper">
                            <p>Anglais</p>
                            <div class="progress-container">
                                <div class="progress">
                                    <div class="determinate gradient-1"></div>
                                </div>
                            </div>
                        </div>
                        <div class="valign-wrapper">
                            <p>Allemand</p>
                            <div class="progress-container">
                                <div class="progress">
                                    <div class="determinate gradient-1"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col s6 m5 offset-m2 l12 progress-list">
                        <h3 class="center-align flow-text">Compétences</h3>
                        <div class="valign-wrapper">
                            <p>Python</p>
                            <div class="progress-container">
                                <div class="progress">
                                    <div class="determinate gradient-3"></div>
                                </div>
                            </div>
                        </div>
                        <div class="valign-wrapper">
                            <p>HTML/CSS</p>
                            <div class="progress-container">
                                <div class="progress">
                                    <div class="determinate gradient-1"></div>
                                </div>
                            </div>
                        </div>
                        <div class="valign-wrapper">
                            <p>PHP</p>
                            <div class="progress-container">
                                <div class="progress">
                                    <div class="determinate gradient-3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col s6 m5 l12">
                        <h3 class="center-align flow-text">Qualités</h3>
                        <p class="center-align">Autonome, ouvert, curieux.</p>
                    </div>
                    <div class="col s6 m5 offset-m2 hide-on-large-only ">
                        <h3 class="center-align flow-text">Contact</h3>
                        <ul class="col s12 socials">
                            <li><a class="btn-floating waves-effect" rel="nofollow" target="_blank" href="https://www.linkedin.com/in/gabriel-dalmon-712b75252/"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            <li><a class="btn-floating waves-effect" rel="nofollow" target="_blank" href="https://www.github.com"><i class="fa-brands fa-github"></i></a></li>
                            <li><a class="btn-floating waves-effect" rel="nofollow" target="_blank" href="https://www.youtube.com/channel/UCzTmJK_fT-FaBjq3zRt7CeQ/featured"><i class="fa-brands fa-youtube"></i></a></li>
                            <li><a class="btn-floating waves-effect" rel="nofollow" target="_blank" href="https://www.artstation.com"><i class="fa-brands fa-artstation"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col s12 l5 offset-l2 row">
                    <div class="col s12 row">
                        <div class="col s12 row valign-wrapper">
                            <img class="col s6" src="img/anthony_profile_pic.webp" alt="Profile picture of Anthony">
                            <div class="col s6">
                                <p>
                                    <span class="bold legend">Anthony LEGRIX</span>
                                    <br><span class="legend">Étudiant en G.Tech au Gaming Campus</span>
                                </p>
                            </div>
                        </div>
                        <ul class="col s6 offset-s3 socials hide-on-med-and-down">
                            <li><a class="btn-floating waves-effect" rel="nofollow" target="_blank" href="https://www.linkedin.com/in/gabriel-dalmon-712b75252/"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            <li><a class="btn-floating waves-effect" rel="nofollow" target="_blank" href="https://www.github.com"><i class="fa-brands fa-github"></i></a></li>
                            <li><a class="btn-floating waves-effect" rel="nofollow" target="_blank" href="https://www.youtube.com"><i class="fa-brands fa-youtube"></i></a></li>
                            <li><a class="btn-floating waves-effect" rel="nofollow" target="_blank" href="https://www.artstation.com"><i class="fa-brands fa-artstation"></i></a></li>
                        </ul>
                    </div>
                    <div class="col s12 ">
                        <h3 class="center-align flow-text">Expérience</h3>
                        <ul class="collapsible">
                            <li>
                                <div class="collapsible-header main-bg secondary-bg"><i class="fa-solid fa-chevron-right"></i>2019 (aujourd'hui) - Joueur dans une équipe e-sport</div>
                                <div class="collapsible-body"><span>Association Nomad-esport : pratiquer une activité dans un but précis. Experience du travail en équipe, respect des horraires et adaptation selon les membres de l'équipe.</span></div>
                            </li>
                            <li>
                                <div class="collapsible-header main-bg secondary-bg"><i class="fa-solid fa-chevron-right"></i>2021 (1 mois) - Chef de projet</div>
                                <div class="collapsible-body"><span>Chef de projet pour le lycée : notion d'organisation d'équipe et de groupe selon les capacités de chacun.</span></div>
                            </li>
                            <li>
                                <div class="collapsible-header main-bg secondary-bg"><i class="fa-solid fa-chevron-right"></i>2018 (2 mois) - Voyage en Asie</div>
                                <div class="collapsible-body"><span>Voyage en Asie : adaptation à la culture et au rythme de vie.</span></div>
                            </li>
                        </ul>
                    </div>
                    <div class="col s6 m5 l12 progress-list">
                        <h3 class="center-align flow-text">Langues</h3>
                        <div class="valign-wrapper">
                            <p>Français</p>
                            <div class="progress-container">
                                <div class="progress">
                                    <div class="determinate gradient"></div>
                                </div>
                            </div>
                        </div>
                        <div class="valign-wrapper">
                            <p>Anglais</p>
                            <div class="progress-container">
                                <div class="progress">
                                    <div class="determinate gradient-1"></div>
                                </div>
                            </div>
                        </div>
                        <div class="valign-wrapper">
                            <p>Allemand</p>
                            <div class="progress-container">
                                <div class="progress">
                                    <div class="determinate gradient-1"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col s6 m5 offset-m2 l12 progress-list">
                        <h3 class="center-align flow-text">Compétences</h3>
                        <div class="valign-wrapper">
                            <p>Python</p>
                            <div class="progress-container">
                                <div class="progress">
                                    <div class="determinate gradient-3"></div>
                                </div>
                            </div>
                        </div>
                        <div class="valign-wrapper">
                            <p>HTML/CSS</p>
                            <div class="progress-container">
                                <div class="progress">
                                    <div class="determinate gradient-1"></div>
                                </div>
                            </div>
                        </div>
                        <div class="valign-wrapper">
                            <p>PHP</p>
                            <div class="progress-container">
                                <div class="progress">
                                    <div class="determinate gradient-3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col s6 m5 l12">
                        <h3 class="center-align flow-text">Qualités</h3>
                        <p class="center-align">Dynamique, sérieux ,curieux</p>
                    </div>
                    <div class="col s6 m5 offset-m2 hide-on-large-only ">
                        <h3 class="center-align flow-text">Contact</h3>
                        <ul class="col s12 socials">
                            <li><a class="btn-floating waves-effect" rel="nofollow" target="_blank" href="https://www.linkedin.com"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            <li><a class="btn-floating waves-effect" rel="nofollow" target="_blank" href="https://www.github.com"><i class="fa-brands fa-github"></i></a></li>
                            <li><a class="btn-floating waves-effect" rel="nofollow" target="_blank" href="https://www.youtube.com"><i class="fa-brands fa-youtube"></i></a></li>
                            <li><a class="btn-floating waves-effect" rel="nofollow" target="_blank" href="https://www.artstation.com"><i class="fa-brands fa-artstation"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </main>
<?php
    require "component/footer.php";
?>