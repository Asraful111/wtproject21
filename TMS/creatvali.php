<?php include('config.php');?>
<?php
	if (isset($_POST['submit'])) {

	 	echo $pname=$_POST['PackageName'];
		echo $ptype=$_POST['PackageType'];
		echo $plocation=$_POST['PackageLocation'];
		echo $pprice=$_POST['PackagePrice'];
        echo $pfetures=$_POST['PackageFetures'];
		echo $pdetails=$_POST['PackageDetails'];

		$sql="INSERT INTO `tbltourpackage` (`PackageName`, `PackageType`, `PackageLocation`, `PackagePrice`, `PackageFetures`, `PackageDetails`) VALUES ('$pname','$ptype','$plocation','$pprice','$pfetures','$pdetails')";

		if ($conn->query($sql)) {
			header('location:createpackage.php');
		}
		else{
			echo "failed";
		}
	}
?>