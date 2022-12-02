<?php 
require_once("/config/config.php");

if(!isset($_GET['page'])){
    $_GET['page']="homepage";
} 


if ($_GET['page']!= "actions") { ?>
<!DOCTYPE html>
    <html lang="fr" dir="ltr">
    <?php
        require("/templates/components/head.php"); ?>
        <body class="main-bg">
            <?php
            require("/templates/components/navbar.php");
}
            require("/src/controllers/".$_GET['page'].".php");
            require("/templates/components/footer.php"); ?>
    </body>
</html>

