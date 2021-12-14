<?php include('config.php');?>
<?php
	if (isset($_POST['submit'])) {
	 	$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$subject=$_POST['subject'];
		$comment=$_POST['comment'];

		$sql="INSERT INTO `tblenquiry`(`FullName`, `EmailId`, `MobileNumber`, `Subject`, `Description`) VALUES ('$name','$email','$phone','$subject','$comment')";
		if ($conn->query($sql)) {
			header('location:Enquiry.php');
		}
	}
?>