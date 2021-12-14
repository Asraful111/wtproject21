<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage_Enquiries</title>
    <link rel="stylesheet" href="Manage.css">
    <?php include 'adminheader.php'; ?>
</head>

<body>

    <div class="table">
        <h2 style="text-decoration:none;color:#209db3;">Manage Enquiries</h2>
        <table background color="red" style="width:100%">
            <tr>
                <th>TICKET ID</th>
                <th>NAME</th>
                <th>EMAIL ID</th>
                <th>MOBILE NO </th>
                <th>SUBJECT</th>
                <th>DESCRIPTION</th>
                <th>STATUS</th>

            </tr>

            <?php

            $users = "SELECT `id`, `FullName`, `EmailId`, `MobileNumber`, `Subject`, `Description`, `Status` FROM `tblenquiry`";
            $users_result = mysqli_query($conn, $users);
            while ($users_data = mysqli_fetch_assoc($users_result)) {
            ?>
                <tbody>
                    <tr>

                        <td><?php echo $users_data['id']; ?></td>
                        <td><?php echo $users_data['FullName']; ?></td>
                        <td><?php echo $users_data['EmailId']; ?></td>
                        <td><?php echo $users_data['MobileNumber']; ?></td>
                        <td><?php echo $users_data['Subject']; ?></td>
                        <td><?php echo $users_data['Description']; ?></td>
                        <td><?php echo $users_data['Status']; ?></td>


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