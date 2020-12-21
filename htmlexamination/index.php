<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="eLearning is a modern and fully responsive Template by WebThemez.">
	<meta name="author" content="webThemez.com">
	<title>About - Techro Bootstrap template</title>
	<link rel="favicon" href="../assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/font-awesome.min.css">
	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="../assets/css/bootstrap-theme.css" media="screen">
	<link rel="stylesheet" href="../assets/css/style.css">
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
	
</head>

<body>


	<?php
		include "nav.php";
		$strconn=mysqli_connect("localhost","root","","project");
		if(!$strconn)
			echo "Connection failed".mysqli_connect_error();
		else{}
		session_start();
		if(isset($_SESSION["username"]))
		{
			$username=$_SESSION["username"];
		}
		else{ echo 'Bắt đầu bài kiểm tra';}
	?>


	<header id="head" class="secondary">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h1>Bài kiểm tra HTML</h1>
				</div>
			</div>
		</div>
	</header>
    <div class="container-fluid" style="margin-top:10px;margin-left:90px;margin-right:450px;">
     <h1>Bài kiểm tra HTML</h1>
	 <p> Bài kiểm tra bao gồm 10 câu hỏi và không giới hạn thời gian. Đây là một cách hay để xem bạn biết hoặc chưa biết bao nhiêu về HTML. </p>
	<p> Khi kết thúc bài kiểm tra, bạn sẽ nhận được chứng chỉ. </p>
	<p> Chúc may mắn !! </p>
	 <!-- <a href="que1.php" class="btn">Start >></a> -->
	 <a href="http://localhost/Elearning/quiz/" class="btn">Start >></a>
	</div> 	
<br>
	<?php
		include "footer.php";
	?>
	
</body>
</html>
