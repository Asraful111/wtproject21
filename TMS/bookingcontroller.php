<?php include('config.php'); ?>
<?php
if (isset($_POST['submit'])) {
	echo $PackageId = $_POST['packgeid'];
	echo $UserEmail = $_POST['useremail'];
	echo $FromDate = $_POST['fromdate'];
	echo $ToDate = $_POST['todate'];
	echo $Comment = $_POST['comment'];

	$sql = "INSERT INTO `tblbookings`(`PackageId`, `UserEmail`, `FromDate`, `ToDate`, `Comment`) VALUES ('$PackageId','$UserEmail','$FromDate','$ToDate','$Comment')";

	if ($conn->query($sql)) {
		header('location:index.php');
	} else {
		echo 'failed';
	}
}
?>