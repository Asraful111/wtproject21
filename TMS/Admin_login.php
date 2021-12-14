<?php
$error="";
include 'config.php';
session_start();

error_reporting(0);


if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];

	if(empty($email)){
		$error="Input your email.";
	}
	else if(empty($password)){
		$error="Input your password.";
	}
	else{	
		$sql = "SELECT * FROM admin WHERE email='$email' AND password='$password'";

		$result = mysqli_query($conn, $sql);
		if ($result->num_rows > 0) {
			$row = mysqli_fetch_assoc($result);
			$_SESSION['username'] = $row['username'];
			header("location:deshboard.php");
		} else {
			echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
		}
	}
	
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="style1.css">

	<title>Admin_Login Form</title>
</head>

<body>
	<div class="container">		
		<form method='post' class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Admin_Login</p>
			<?php
				if($error==''){
					echo "<div style='color:red;'>".$error."</div>";
				}
			?>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>">
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" >
			</div>
			<div class="input-group">
				<button name="submit" class="btn" type="submit">Login</button>
			</div>

			<br>
			<center>
				<a href="index.php" style="text-decoration: none;">Back to home</a>
			</center>
		</form>
	</div>
</body>

</html>