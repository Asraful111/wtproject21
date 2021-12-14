<?php include('config.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TMS | Admin Dashboard</title>


<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />

<link rel="stylesheet" href="deshboard.css">


</head>

<body>
    
    <!--Adminheader-->

    <?php include 'adminheader.php'; ?>


<div class="dashboard_com_back">
  
    <div class="col-md-3 four-grid">
        <div class="four-agileits">
            <div class="icon">
                <i class="glyphicon glyphicon-user" aria-hidden="true"></i>
            </div>
            <div class="four-text">
            <h3>Users</h3>
            <?php 
                $sql = "SELECT id from users";
                $result = $conn->query($sql);
                $user=$result->num_rows;
            ?>
            <h4> <?php echo $user;?> </h4>
            </div>
        </div>
    </div>

    <div class="col-md-3 four-grid">
        <div class="four-agileinfo">
            <div class="icon">
                <i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i>
            </div>
            <div class="four-text">
                <h3>Bookings</h3>
                <?php 
                    $sql1 = "SELECT BookingId from tblbookings";
                    $result1 = $conn->query($sql1);
                    $Bookings=$result1->num_rows;
                ?>
                <h4> <?php echo $Bookings;?> </h4>
            </div>

        </div>
    </div>
    <div class="col-md-3 four-grid">
        <div class="four-w3ls">
            <div class="icon">
                <i class="glyphicon glyphicon-folder-open" aria-hidden="true"></i>
            </div>
            <div class="four-text">
                <h3>Enquiries</h3>
                <?php 
                    $sql2 = "SELECT id from tblenquiry";
                    $result2 = $conn->query($sql2);
                    $Enquiries=$result2->num_rows;
                ?>
                <h4> <?php echo $Enquiries;?> </h4>
            </div>

        </div>
    </div>
    <div class="col-md-3 four-grid">
        <div class="four-wthree">
            <div class="icon">
                <i class="glyphicon glyphicon-briefcase" aria-hidden="true"></i>
            </div>
            <div class="four-text">
                <h3>Total packages</h3>
                <?php 
                    $sql3 = "SELECT PackageId from tbltourpackage";
                    $result3 = $conn->query($sql3);
                    $packages=$result3->num_rows;
                ?>
                <h4> <?php echo $packages;?> </h4>
            </div>

        </div>
    </div>

   
    <div class="clearfix"></div>
</div>

 <!--footer-->
    <?php include'footer.php';?>
</body>

</html>