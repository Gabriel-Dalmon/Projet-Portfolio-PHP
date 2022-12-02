<?php 
require "../../../src/queries/getUserData.php";
foreach ($user['experiences'] as $experience) { ?>
    <form action="../../../src/queries/update_experience.php" method="post">
        <input type="hidden" name="id" value="<?php echo $experience['id']; ?>">
        <h2 class="white-text"><?php echo $experience['title']?></h2>
        <textarea class="white-text" id="title" name="title" required><?php echo $experience['title']?></textarea>
        
        <textarea class="white-text" name="content" required><?php echo $experience['content']?></textarea>
        <input class="white-text" type="date" name="start_date" value="<?php echo $experience['start_date']?>" required>
        <input class="white-text" type="date" name="end_date" value="<?php echo $experience['end_date']?>" required>
        <input class="btn" type="submit" value="Modifier">
    </form>
    <form action="../../../src/controllers/actions_router.php?type=del_experience&path=<?php echo $_SERVER['REQUEST_URI'] ?>" method="post"><input type="hidden" name="id" value="<?php echo $experience['id']; ?>"><input class="btn" type="submit" value="Supprimer"></form>
        
<?php }?>
<form action="../../../src/controllers/actions_router.php?type=add_experience&path=<?php echo $_SERVER['REQUEST_URI'] ?>" method="post">
            <h2 class="white-text">Ajouter une expérience</h2>
            <input type="hidden" name="user_id" value="<?php echo $_SESSION['user']['id']; ?>">
            <textarea class="white-text" id="title" name="title" required></textarea>
            <textarea class="white-text" name="content" required></textarea>
            <input class="white-text" type="date" name="start_date" required>
            <input class="white-text" type="date" name="end_date" required>
            <input class="btn" type="submit" value="Ajouter">
        </form>