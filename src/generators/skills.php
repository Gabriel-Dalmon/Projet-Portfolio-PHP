<!-- skills types :
0 : language
1 : informatic
-->
<?php 
function genSkill($skill){ ?>
        <div class="valign-wrapper">
            <p><?php echo $skill['name']; ?></p>
            <div class="progress-container">
                <div class="progress">
                    <div class="determinate gradient-<?php echo $skill['level']; ?>"></div>
                </div>
            </div>
        </div>
    <?php }

function skillsSpliter($skills){
    $languages = [];
    $informatic = [];
    foreach ($skills as $skill) {
        if($skill['type'] == 0){
            array_push($languages, $skill);
        }else{
            array_push($informatic, $skill);
        }
    }
    $toReturn = [$languages, $informatic];
    return $toReturn;
}

function genAllSkills($skills){
    $skills = skillsSpliter($skills);
    if(!empty($skills[0])){ ?>
        <div class="col s6 m5 l12 progress-list">
            <h3 class="center-align flow-text">Langues</h3>
            <?php foreach ($skills[0] as $language) {
                genSkill($language);
            } ?>
        </div>
        <?php } if(!empty($skills[1])) { ?>
            <div class="col s6 m5 l12 progress-list">
            <h3 class="center-align flow-text">Informatique</h3>
            <?php foreach ($skills[1] as $informatic) {
                genSkill($informatic);
            } ?>
            </div> <?php
        }
}
?>