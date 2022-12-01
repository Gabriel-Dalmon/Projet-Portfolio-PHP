

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
<?php }?>