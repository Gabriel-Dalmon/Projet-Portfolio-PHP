<main>
            <div class="parallax-container">
                <div class="parallax"><img src="<?php echo $carBg['link']?>" alt="Minecraft Background of Parallax 1"></div>
            </div>
            <div class="container section row flow-text">
                <h1 class="col s12 center-align"><?php echo $project['title']?></h1>
                <div class="col s12 row flow-text">
                    <h2 class="col s12 center-align">Introduction</h2>
                    <p class="col s12"><?php echo $project['intro']?></p>
                </div>
                <div class="col s12 row flow-text">
                    <h2 class="col s12 center-align">Description</h2>
                    <p class="col s12"><?php echo $project['description']?></p>
                </div>
            </div>
            <div class="parallax-container">
                <div class="parallax"><img src="<?php echo $parBg['link']?>" alt="Minecraft Background of Parallax 2"></div>
            </div>
            <div class="container section row flow-text">
                <div class="col s12 row center-align flow-text">
                    <h2 class="col s12">Compétences acquises</h2>
                    <p class="col s6 m3"><?php echo $project['skills'] ?></p>
                </div>
                <div>
                    <p id="easteregg1" class="center-text">Merci</p>
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