<html>
<head>
<meta charset="utf-8">
	<title>eLearning - Free Educational Responsive Web Template </title>
	<link rel="favicon" href="assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
	<link rel="stylesheet" type="text/css" href="assets/css/da-slider.css" />
	<link rel="stylesheet" href="assets/css/style.css">
	<style>
	th, td {
		padding:5px;   
	}
	</style>
</head>
<body>
	<?php
		include "nav.php";
		$strconn=mysqli_connect("localhost","root","","project");
	if(!$strconn)
		echo "Connection failed".mysqli_connect_error();
	else
	{}
	?>

	<header id="head" class="secondary">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <h1>Registration</h1>
                </div>
            </div>
        </div>
    </header>
	<form method="POST" action="" id="regform">
		<table border=0 align="center">
			<tr>
				<td><label>Tên của bạn :</label></td>
				<td><input type="text" class="form-control" name="fname" placeholder="First Name"></td>
			</tr>
			<tr>
				<td><label>Họ của bạn :</label></td>
				<td><input type="text" class="form-control" name="lname" placeholder="Last Name"></td>
			</tr>
			<div class="checkbox">
				<tr>
					<td><label>Giới tính :</label></td>
					<td><input type="radio" name="gender" value="male">Nam &nbsp; <input type="radio" name="gender" value="female">Nữ</td>
				</tr>
			</div>
			<tr>
				<td><label>Email :</label></td>
				<td><input type="email" class="form-control" name="email" placeholder="Email ID" required></td>
			</tr>
			<tr>
				<td><label>User Name :</label></td>
				<td><input type="text" class="form-control" name="username" placeholder="User Name" required></td>
			</tr>
			<tr>
				<td><label>Password :</label></td>
				<td><input type="password" class="form-control" name="pass" placeholder="Password" required></td>
			</tr>
			<!-- <tr>
				<td><label>Confirm Password :</label></td>
				<td><input type="password" class="form-control" name="pass1" placeholder="Confirm Password" required></td>
			</tr> -->
			<tr>
				<td colspan="2" align="center"><button class="btn btn-block" name="btn">Đăng ký</button></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><button class="btn btn-block">Làm mới</button></td>
			</tr>
		</table>
	</form>
	<?php
	if(!empty($_POST['fname'])&&!empty($_POST['lname']))
	{
		if(isset($_POST['btn']))
		{
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$gender = $_POST['gender'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['pass'];
		$query = "INSERT INTO user_info(FirstName,LastName,Gender,Email_id,UserName,Password) VALUES('$fname','$lname','$gender','$email','$username','$password')";
		$result = mysqli_query($strconn,$query);
		if($result)
		{
			// echo "<div class='alert alert-success' role='alert'>Đăng ký thành công!</div>";
			echo '<script>alert("Đăng ký thành công"); </script>';
		}
		else
		{
			// echo "<div class='alert alert-danger' role='alert'>Email đã có người sử dụng</div>";
			echo '<script>alert("Email đã có người sử dụng!"); </script>';

		}
		}
	}
	?>
	<?php
		include "footer.php";
	?>
</body>
</html>