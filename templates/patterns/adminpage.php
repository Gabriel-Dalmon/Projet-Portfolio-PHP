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
    <div id="projects">
        
    </div>
</main>