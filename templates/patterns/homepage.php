
<main>
    <?php if(isset($_SESSION['user'])) {
        echo '<p>connected</p>';
    }?>

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
        <?php foreach ($users as &$user) { ?>
            <div class="col s12 l5 <?php echo $users['1']['username']==$user['username']?"offset-l2":""?> row">
                <div class="col s12 row">
                    <div class="col s12 row valign-wrapper">
                        <img class="col s6" src="templates/img/users/<?php echo $user['profile_picture'] ?>" alt="Profile picture">
                        <div class="col s6">
                            <p>
                                <span class="bold legend"><?php echo $user['username'];?></span>
                                <br><span class="legend"><?php echo $user['bio'];?></span>
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
                <?php if(!empty($user['experiences'])) { ?>
                    <div class="col s12 ">
                        <h3 class="center-align flow-text">Expérience</h3>
                        <ul class="collapsible">
                            <?php foreach($user['experiences'] as $experience) {?>
                            <li>
                                <div class="collapsible-header main-bg secondary-bg"><i class="fa-solid fa-chevron-right"></i>De <?php echo $experience['start_date']." à ".$experience['end_date']." - ".$experience['title'] ?></div>
                                <div class="collapsible-body"><span><?php echo $experience['content'] ?></span></div>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                <?php } 
                
                //Display skills if existing
                foreach ($user['skillsType'] as $key => $skills) { 
                    if (!empty($skills)) {
                        if ($key==0) {
                            echo '<h3 class="center-align flow-text">Langues</h3>';
                        } else{
                            echo '<h3 class="center-align flow-text">Informatique</h3>';
                        }
                        foreach ($skills as $skill) { ?>
                            <div class="valign-wrapper">
                                <p><?php echo $skill['name']; ?></p>
                                <div class="progress-container">
                                    <div class="progress">
                                        <div class="determinate gradient-<?php echo $skill['level']; ?>"></div>
                                    </div>
                                </div>
                            </div>
                        <?php }}} ?>

                <?php //Displays Qualities if existing   
                if(!empty($user['qualities'])) { ?>                            
                    <div class="col s6 m5 l12">
                        <h3 class="center-align flow-text">Qualités</h3>
                        <p class="center-align"><?php echo $user['qualities'];?></p>
                    </div>
                <?php } ?>
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
        <?php } ?>
    </div>
</main