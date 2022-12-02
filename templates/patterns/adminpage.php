<main>
    <h1>Admin Panel</h1>
    <div id="users" class="container section">
        <h2>Listes des membres</h2>
        <table>
            <thead>
                <tr>
                    <th>Pseudo</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($users as $user) { ?>
                <tr>
                    <td><?php echo $user['username']; ?></td>
                    <td><?php echo $user['email']; ?></td>
                    <td><?php echo $user['account_status']==0?"Invité":($user['account_status']==1?"Créateur":"Admin") ?></td>
                    <td class="row">
                        <form class="col s4" method="post" action="index.php?page=profile_editor">
                            <input type="hidden" name="user_id" value=<?php echo $user['id']?>>
                            <input class="btn" type=submit value="Modifier">
                        </form>
                        <form class="col s4" method="post" action="index.php?page=actions&type=update_status&path=<?php echo $_SERVER['REQUEST_URI'] ?>">
                            <input type="hidden" name="id" value=<?php echo $user['id']?>>
                            <input type="hidden" name="account_status" value=<?php echo $user['account_status'] == 0?1:($user['account_status'] == 1?2:0) ?>>
                            <input class="btn waves-effect" type=submit value="Toggle Status">
                        </form>
                        <form class="col s4" method="post" action="index.php?page=actions&type=del_user&path=<?php echo $_SERVER['REQUEST_URI'] ?>"><input type="hidden" name="id" value=<?php echo $user['id']?>><input class="btn waves-effect" type=submit value="Delete">
                        </form>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <div id="projects" class="container section">
        <h2>Listes des Projets</h2>
        <table>
            <thead>
                <tr>
                    <th>Projet</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($projects as $project) { ?>
                <tr>
                    <td><?php echo $project['title']; ?></td>
                    <td class="row">
                        <form class="col s4" method="post" action="index.php?page=project_editor">
                            <input type="hidden" name="project_id" value=<?php echo $project['id']?>>
                            <input class="btn" type=submit value="Modifier">
                        </form>
                        <form class="col s4" method="post" action="index.php?page=actions&type=del_project&path=<?php echo $_SERVER['REQUEST_URI'] ?>"><input type="hidden" name="id" value="<?php echo $project['id']?>"><input class="btn waves-effect" type=submit value="Delete">
                        </form>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <form method="post" action="index.php?page=actions&type=add_project&path=<?php echo $_SERVER['REQUEST_URI'] ?>" enctype="multipart/form-data">
            <label for="title">Titre du projet : </label>
            <input type="text" id="title" name="title" required>
            <label for="intro">Introduction du projet : </label>
            <input type="text" id="intro" name="intro" required>
            <label for="description">Description du projet : </label>
            <input type="text" id="description" name="description" required>
            <label for="skills">Compétences acquises : </label>
            <input type="text" id="skills" name="skills" required>
            <label for="carouselBg">Fond de caroussel :</label>
            <input type="file" id="carouselBg" name="carouselBg" required><br>
            <label for="carLeg">Légende : </label>
            <input type="text" id="carLeg" name="carLeg" required>
            <label for="parallaxBg">Fond de parallaxe :</label>
            <input type="file" id="parallaxBg" name="parallaxBg" required><br>
            <label for="parLeg">Légende : </label>
            <input type="text" id="parLeg" name="parLeg" required>
            <input type="submit" value="Ajouter le projet">
        </form>
    </div>
    <div id="projects">
        
    </div>
</main>