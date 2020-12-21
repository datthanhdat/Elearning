<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="eLearning is a modern and fully responsive Template by WebThemez.">
	<meta name="author" content="webThemez.com">
	<title>About - Techro Bootstrap template</title>
	<link rel="favicon" href="assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
	<link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
	<?php
		include "nav.php";
		$strconn=mysqli_connect("localhost","root","","project");
		if(!$strconn)
			echo "Connection failed".mysqli_connect_error();
		else{}
	?>
	<?php
		$query = "SELECT * FROM subject LIMIT 1";
		$result = mysqli_query($strconn,$query);
	?>
	<header id="head" class="secondary">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h1>Các khóa học</h1>
				</div>
			</div>
		</div>
	</header>
	<div id="courses">
		<section class="container">
			<h2>Các khóa học có sẵn</h2>
			<div class="row">
				<div class="col-md-4">
					<div class="featured-box">
					<a href="HTML.php">
						<i class="fa fa-cogs fa-2x"></i>
						<div class="text">
							<h3>HTML</h3>
							Hướng dẫn MIỄN PHÍ này sẽ dạy bạn cách thiết kế một trang web bằng HTML. Hoàn thành một loạt các bài kiểm tra và thực hành thực hành trong khi viết mã HTML thực.
						</div>
					</a>
					</div>
				</div>

				<div class="col-md-4">
					<div class="featured-box">
					<a href="CSS.php">
						<i class="fa fa-leaf fa-2x"></i>
						<div class="text">
							<h3>CSS</h3>
							Hướng dẫn CSS của chúng tôi sẽ dạy bạn cách kiểm soát kiểu và bố cục của trang web. Hoàn thành một loạt bài thực hành và kiểm tra trong khi điền mã CSS thực tế.
						</div>
					</a>
					</div>
				</div>

				<div class="col-md-4">
					<div class="featured-box">
					<a href="../python/python.html">
						<i class="fa fa-leaf fa-2x"></i>
						<div class="text">
							<h3>Python</h3>
							Hướng dẫn CSS của chúng tôi sẽ dạy bạn cách kiểm soát kiểu và bố cục của trang web. Hoàn thành một loạt bài thực hành và kiểm tra trong khi điền mã CSS thực tế.
						</div>
					</a>
					</div>
				</div>
			</div>
		</section>
		<section class="container">
			<div class="row">
				<div class="col-md-12">
					<?php
						while($row = mysqli_fetch_array($result))
						{
							echo '<div class="col-md-4">';
							echo '<div class="featured-box">';
							echo '<a href="new.php">';
							echo '<i class="fa fa-leaf fa-2x"></i>';
							echo '<div class="text">';
							echo '<h3>'.$row[0].'</h3>';
							echo $row[1];
							echo '</div>';
							echo '</a>';
							echo '</div>';
							echo '</div>';
						}
					?>
				</div>
			</div>
		</section>
	</div>
	<?php
		include "footer.php";
	?>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>
