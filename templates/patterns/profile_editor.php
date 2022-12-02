<main>
    <h1><?php echo $user['username'];?></h1>
    <h2>Ton profil</2>
    <form action="index.php?page=actions&type=update_user&path=<?php echo $_SERVER['REQUEST_URI'] ?>" method="post">
        <input type="hidden" name="id" value=<?php echo $user['id'];?>>
        <label for="email">Ton addresse e-mail :</label>
        <input type="text" id="email" name="email" placeholder="New Email" value="<?php echo $user['email'];?>" required>
        <label for="email">Ton pseudo :</label>
        <input type="text" id="username" name="username" placeholder="New Username" value="<?php echo $user['username'];?>" required>
        <label for="email">Ta bio :</label>
        <input type="text" id="bio" name="bio" placeholder="New Bio" value="<?php echo $user['bio'];?>">
        <label for="email">Tes qualités :</label>
        <input type="text" id="qualities" name="qualities" placeholder="New Qualities" value="<?php echo $user['qualities'];?>">
        <input class="btn" type="submit" value="Sauvegarder"?>
    </form>

    <h2>Tes expériences :</h2>
    <?php foreach ($user['experiences'] as $experience) { ?>
        <form action="index.php?page=actions&type=update_experience&path=<?php echo $_SERVER['REQUEST_URI'] ?>" method="post">
            <input type="hidden" name="id" value="<?php echo $experience['id']; ?>">
            <label for="title">Intitulé :</label>
            <textarea class="white-text" id="title" name="title" required><?php echo $experience['title']; ?></textarea>
            <label for="content">Description :</label>
            <textarea class="white-text" id="content" name="content" required><?php echo $experience['content']; ?></textarea>
            <label for="start_date">Début :</label>
            <input class="white-text" id="start_date" type="date" name="start_date" value="<?php echo $experience['start_date']; ?>" required>
            <label for="end_date">Fin :</label>
            <input class="white-text" id="end_date" type="date" name="end_date" value="<?php echo $experience['end_date']; ?>" required>
            <input class="btn" type="submit" value="Sauvegarder">
        </form>
    <?php } ?>
    
</main>

