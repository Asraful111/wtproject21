<?php include 'config.php'; ?>

<?php include 'adminheader.php'; ?>

<link rel="stylesheet" href="Manage.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />

<title>>TMS | Admin Package Creation</title>

<body>

    <table>
        <h2 style="text-decoration:none;color:#209db3;">Manage Package </h2>

        <table background color="red" style="width:100%">

            <tr>

                <th>#</th>
                <th>NAME</th>
                <th>Type</th>
                <th>Location</th>
                <th>Price</th>
                <th>PackageDetails</th>
                <th>Creation Date</th>

            </tr>


            <?php

            $users = "SELECT `PackageId`, `PackageName`, `PackageType`, `PackageLocation`, `PackagePrice`, `PackageFetures`, `PackageDetails`, `PackageImage`, `Creationdate`, `UpdationDate` FROM `tbltourpackage` ";
            $users_result = mysqli_query($conn, $users);
            while ($users_data = mysqli_fetch_assoc($users_result)) {
            ?>
                <tbody>
                    <tr>

                        <td><?php echo $users_data['PackageId']; ?></td>
                        <td><?php echo $users_data['PackageName']; ?></td>
                        <td><?php echo $users_data['PackageType']; ?></td>
                        <td><?php echo $users_data['PackageLocation']; ?></td>
                        <td>$<?php echo $users_data['PackagePrice']; ?></td>
                        <td><?php echo $users_data['PackageDetails']; ?></td>
                        <td><?php echo $users_data['Creationdate']; ?></td>


                    </tr>
                <?php
            }
                ?>
                </tbody>


        </table>
        </div>
        <?php include 'footer.php'; ?>

</body>

</html>