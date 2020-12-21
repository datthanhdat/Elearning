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
				<h1>CSS Colors</h1>
				<p> Màu sắc trong CSS thường được chỉ định bởi: </p>
				<ul>
				<li> tên màu hợp lệ - như "đỏ" </li>
				<li> một giá trị RGB - như "rgb (255, 0, 0)" </li>
				<li> giá trị HEX - như "# ff0000" </li>
				</ul>
<hr>
			<h1> Tên màu </h1>
			<p> Màu sắc được đặt bằng cách sử dụng tên màu: </p>
			<img src="images/ColorNames.png"></img>
<hr>
			<h1>RGB (Red, Green, Blue)</h1>
			<p> Các giá trị màu RGB có thể được chỉ định bằng công thức sau: rgb (đỏ, lục, lam). </p>
			<p> Mỗi tham số (đỏ, lục, lam) xác định cường độ của màu từ 0 đến 255. </p>
			<p> Ví dụ: rgb (255,0,0) được hiển thị là màu đỏ, vì màu đỏ được đặt thành giá trị cao nhất (255) và các giá trị khác được đặt thành 0. Thử nghiệm bằng cách trộn các giá trị RGB bên dưới: </p>
			<img src="images/RGB.png"></img>
<hr>
			<h1>Hexadecimal Colors</h1>
			<p> Giá trị RGB cũng có thể được chỉ định bằng cách sử dụng các giá trị màu thập lục phân ở dạng: #RRGGBB, trong đó RR (đỏ), GG (xanh lục) và BB (xanh lam) là các giá trị thập lục phân từ 00 đến FF (giống như thập phân 0-255) . </p>
			<p> Ví dụ: # FF0000 được hiển thị là màu đỏ, vì màu đỏ được đặt thành giá trị cao nhất (FF) và các màu khác được đặt thành giá trị thấp nhất (00). Lưu ý: Các giá trị HEX không phân biệt chữ hoa chữ thường: "# ff0000" giống với "FF0000". </p>
			<img src="images/Hexa.png"></img>
<hr><form action="" method="post">
			<h1> Trả lời câu hỏi sau, câu trả lời đúng sẽ dẫn bạn đến chương tiếp theo. </h1>
			<h1> 1. HTML chính xác để tham chiếu đến biểu định kiểu bên ngoài là gì? </h1>
  <div class="radio">
  <label><input type="radio" name="optradio" value="a">Link rel="stylesheet" type="text/css" href="mystyle.css"</label>
</div>
<div class="radio">
  <label><input type="radio" name="optradio" value="b">Style src="mystyle.css"erlink text markup language</label>
</div>
<div class="radio">
  <label><input type="radio" name="optradio" value="c">Stylesheetmystyle.css/stylesheet</label>
</div>
		<button type="submit" class="btn btn-primary" name="submit">Submit</button>

	</form>
	<?php
	if(isset($_POST['submit']))
	{
		$radval=$_POST['optradio'];
		if($radval=="a")
		{
						echo '<a href="http://localhost/elearning/user/CSS.php" class="btn">Next>></a>';

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