<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage_User</title>
    <link rel="stylesheet" href="Manage.css">
    <?php include 'adminheader.php'; ?>
</head>

<body>

    <div class="table">
        <h2 style="text-decoration:none;color:#209db3;">Manage Users </h2>
        <table background color="red" style="width:100%">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email ID</th>
          
            </tr>

            <?php

            $users = "SELECT `id`, `username`, `email`, `password` FROM `users` ";
            $users_result = mysqli_query($conn, $users);
            while ($users_data = mysqli_fetch_assoc($users_result)) {
            ?>
                <tbody>
                    <tr>

                        <td><?php echo $users_data['id']; ?></td>
                        <td><?php echo $users_data['username']; ?></td>
                        <td><?php echo $users_data['email']; ?></td>
                        

                    </tr>
                <?php
            }
                ?>
                </tbody>

        </table>
    </div>
    <?php include 'Footer.php'; ?>
</body>

</html>