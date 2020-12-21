<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="eLearning is a modern and fully responsive Template by WebThemez.">
	<meta name="author" content="webThemez.com">
	<title>eLearning - Free Educational Responsive Website</title>
	<link rel="favicon" href="assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
	<link rel="stylesheet" type="text/css" href="assets/css/da-slider.css" />
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<?php
		include "nav.php";
	?>

	<!-- Header -->
	<header id="head">
		<div class="container">
			<div class="banner-content">
				<div id="da-slider" class="da-slider">
					<div class="da-slide">
						<h2>Khóa học online</h2>
						<p>The purpose is to teach</p>
						<div class="da-img"></div>
					</div>
					<div class="da-slide">
						<h2></h2>
						<p></p>
						<div class="da-img"></div>
					</div>
					<div class="da-slide">
						<h2></h2>
						<p></p>
						<div class="da-img"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="bot">
			<df-messenger
			class="messageList"
			id="messageList"
			intent="WELCOME"
			chat-title="SMARTBOT"
			agent-id="c6425da2-fa52-4090-a148-9fca59eed02e"
			language-code="en"
			></df-messenger>
		</div>
	</header>
	<!-- /Header -->

	<div id="courses">
		<div class="container">
			<h2>Các khóa học có sẵn</h2>
			<div class="row">
				<div class="col-md-4">
					<div class="featured-box">
					<a href="login.php">
						<i class="fa fa-cogs fa-2x"></i>
						<div class="text">
							<h3>HTML</h3>
							Bài học MIỄN PHÍ này sẽ dạy bạn cách thiết kế một trang web bằng HTML. Hoàn thành một loạt các bài kiểm tra và thực hành thực hành trong khi viết mã HTML thực.
						</div>
					</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="featured-box">
					<a href="login.php">
						<i class="fa fa-leaf fa-2x"></i>
						<div class="text">
							<h3>CSS</h3>
							Bài học CSS của chúng tôi sẽ dạy bạn cách kiểm soát kiểu và bố cục của trang web. Hoàn thành một loạt bài thực hành và kiểm tra trong khi điền mã CSS thực tế.
						</div>
					</a>
					</div>
				</div>
		</div>
	</div>
		
	<?php
		include "footer.php";
	?>

	<script src="assets/js/modernizr-latest.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.cslider.js"></script>
	<script src="assets/js/custom.js"></script>
	<!-- BOT -->
	<script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
</body>
</html>

<style>
.bot{
	height:300px!important;
	width:300px!important;
	z-index:99;
}
</style>