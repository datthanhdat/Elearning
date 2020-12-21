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
</head>
<body>
	<?php
		include "nav.php";
	?>
	<header id="head" class="secondary">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h1>CSS</h1>
				</div>
			</div>
		</div>
	</header>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-9 col-md-push-2" style="margin-bottom:10px;">
					<h1> Ba cách để chèn CSS </h1>
					<p> Có ba cách để chèn biểu định kiểu: </p>
					<ul>
					<li> Trang định kiểu bên ngoài </li>
					<li> Trang định kiểu nội bộ </li>
					<li> Kiểu nội tuyến </li>
					</ul>
					<hr>
					<h1> Biểu định kiểu bên ngoài </h1>
					<p> Với biểu định kiểu bên ngoài, bạn có thể thay đổi giao diện của toàn bộ trang web chỉ bằng cách thay đổi một tệp! </p>
					<p>Mỗi trang phải bao gồm một tham chiếu đến tệp biểu định kiểu bên ngoài bên trong <?php $str='<link>'; echo htmlspecialchars($str); ?> thành phần. Các <?php $str='<link>'; echo htmlspecialchars($str); ?> phần tử đi vào bên trong <?php $str='<head>'; echo htmlspecialchars($str); ?> section:</p>
					<h4><b>Example</b></h4>
<?php 
echo '<pre>';
$str = '<head>
<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>';
echo htmlspecialchars($str);
echo '<br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>
					<h1> Biểu định kiểu nội bộ </h1>
					<p> Có thể sử dụng biểu định kiểu nội bộ nếu một trang có kiểu duy nhất. </p>
					<p>Internal styles are defined within the <?php $str='<style>'; echo htmlspecialchars($str); ?> phần tử, bên trong <?php $str='<head>'; echo htmlspecialchars($str); ?> phần của một trang HTML:</p>
					<h4><b>Example</b></h4>
<?php 
echo '<pre>';
$str = '<head>
<style>
body {
    background-color: linen;
}

h1 {
    color: maroon;
    margin-left: 40px;
} 
</style>
</head>';
echo htmlspecialchars($str);
echo '<br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>	
					<h1> Kiểu nội tuyến </h1>
					<p> Một kiểu nội dòng có thể được sử dụng để áp dụng một kiểu duy nhất cho một phần tử. </p>
					<p> Để sử dụng kiểu nội tuyến, hãy thêm thuộc tính kiểu vào phần tử có liên quan. Thuộc tính style có thể chứa bất kỳ thuộc tính CSS nào. </p>
					<p>Ví dụ dưới đây cho thấy cách thay đổi màu và lề trái của <?php $str='<h1>'; echo htmlspecialchars($str); ?> thành phần:</p>
					<h4><b>Example</b></h4>
<?php 
echo '<pre>';
$str = '<h1 style="color:blue;margin-left:30px;">This is a heading.</h1>';
echo htmlspecialchars($str);
echo '<br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>
<form method="post" action="">
					<h1> Trả lời câu hỏi sau, câu trả lời đúng sẽ dẫn bạn đến chương tiếp theo. </h1>
					<h3> <label> => cách chèn CSS nào sau đây không đúng? </label>
					<div class="radio">
		<label><input type="radio" name="optradio" value="a">Inline</label>
	</div>
	<div class="radio">
		<label><input type="radio" name="optradio" value="b">External</label>
	</div>
	
	<div class="radio">
		<label><input type="radio" name="optradio" value="c">In body</label>
	</div>
		<button type="submit" class="btn btn-primary" name="submit">Submit</button>

	</form>
	<?php
	if(isset($_POST['submit']))
	{
		$radval=$_POST['optradio'];
		if($radval=="c")
		{
						echo '<a href="chapter3.php" class="btn">Next>></a>';

			//echo 'true';
		}
		else
		{
			echo "<div class='alert alert-danger' role='alert'>Incorrect Answer</div>";
		}
	}
?>
			</div>
			<div class="col-md-2 col-md-pull-9" style="margin-top:10px;">
				<?php include "sidebar.php"; ?>
			</div>
		</div>
	</div>

	<?php
		include "footer.php";
	?>
</body>
</html>