<?php include 'config.php';?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage_Bookings</title>
    <link rel="stylesheet" href="Manage.css">
    <?php include 'adminheader.php'; ?>
</head>

<body>

    <div class="table">
        <h2 style="text-decoration:none;color:#209db3;">Manage Booking </h2>
        <table background color="red" style="width:100%">
            <tr>
                <th>BOOKING ID</th>
                <th>EMAIL ID</th>
                <th>FROM</th>
                <th>TO</th>
                <th>COMMENT</th>
                <th>REG_DATE</th>
                <th>STATUS</th>
          


            </tr>


            <?php

            $users = "SELECT `BookingId`, `PackageId`, `UserEmail`, `FromDate`, `ToDate`, `Comment`, `RegDate`, `status`, `CancelledBy`, `UpdationDate` FROM `tblbookings`";
            $users_result = mysqli_query($conn, $users);
            while ($users_data = mysqli_fetch_assoc($users_result)) {
            ?>
                <tbody>
                    <tr>

                        <td><?php echo $users_data['BookingId']; ?></td>
                        <td><?php echo $users_data['UserEmail']; ?></td>
                        <td><?php echo $users_data['FromDate']; ?></td>
                        <td><?php echo $users_data['ToDate']; ?></td>
                        <td><?php echo $users_data['Comment']; ?></td>
                        <td><?php echo $users_data['RegDate']; ?></td>
                        <td><?php echo $users_data['status']; ?></td>
                  

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