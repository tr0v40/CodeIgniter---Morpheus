<br>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Email</th>
        <th>Data de criação</th>
    </tr>
    <tr>
        <?php
            foreach ($users as $user){
                echo '<tr>
                        <th>'.$user['user_id'].'</th>
                        <th>'.$user['username'].'</th> 
                        <th>'.$user['email'].'</th> 
                        <th>'.$user['created_at'].'</th>
                     </tr>';
            }
        ?>
    </tr>
</table>