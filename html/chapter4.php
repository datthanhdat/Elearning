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
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<?php
		include "nav.php";
	?>
	<header id="head" class="secondary">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h1>HTML</h1>
				</div>
			</div>
		</div>
	</header>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-9 col-md-push-2" style="margin-bottom:10px;">
			<h1> Thuộc tính HTML </h1>
				<p> Các thuộc tính cung cấp thông tin bổ sung về các phần tử HTML. </p>
				<ul>
				<li> Tất cả các phần tử HTML có thể có <b> thuộc tính </b> </li>
				<li> Các thuộc tính cung cấp <b> thông tin bổ sung </b> về một phần tử </li>
				<li> Các thuộc tính luôn được chỉ định trong <b> thẻ bắt đầu </b> </li>
				<li> Các thuộc tính thường có trong các cặp tên / giá trị như: <b> name = "value" </b> </li>
				</ul>
				<hr>
				<h1> Thuộc tính lang </h1>
				<p>Ngôn ngữ của tài liệu có thể được khai báo trong thẻ <?php $str='<html>'; echo htmlspecialchars($str); ?> </p>
				<p> Ngôn ngữ được khai báo bằng thuộc tính <b> lang </b>. </p>
				<p> Khai báo một ngôn ngữ là quan trọng đối với các ứng dụng trợ năng (trình đọc màn hình) và công cụ tìm kiếm: </p>
<?php
echo '<pre>';
$str='<!DOCTYPE html>
<html lang="en-US">
<body>

...

</body>
</html>';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<p> Hai chữ cái đầu tiên chỉ định ngôn ngữ (en). Nếu có một phương ngữ, hãy sử dụng thêm hai chữ cái nữa (Mỹ). </p>
<hr>
<h1> Thuộc tính tiêu đề </h1>
<p>Tại đây, một thuộc tính tiêu đề được thêm vào phần tử <p>. Giá trị của thuộc tính title sẽ được hiển thị dưới dạng chú giải công cụ khi bạn di chuột qua đoạn văn:</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str="<p title='I'>
This is a paragraph.
</p>";
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>
<h1>Thuộc tính href</h1>
<p>Các liên kết HTML được xác định với thẻ <?php $str='<a>'; echo htmlspecialchars($str); ?> Địa chỉ liên kết được chỉ định trong thuộc tính href:</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='<a href="http://www.w3schools.com">This is a link</a>';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>
<h1>Size Attributes</h1>
<p>Hình ảnh HTML được xác định với thẻ  <?php $str='<img>'; echo htmlspecialchars($str); ?> </p>
<p>Tên tệp của nguồn (src) và kích thước của hình ảnh (chiều rộng và chiều cao) đều được cung cấp dưới dạng thuộc tính:</p>
<h4><b>Example</b></h4>
<?php
echo '<pre>';
$str='<img src="w3schools.jpg" width="104" height="142">';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<p>Kích thước hình ảnh được chỉ định bằng pixel: width = "104" có nghĩa là rộng 104 pixel trên màn hình.</p>
<hr>
<h1> Thuộc tính alt </h1>
<p> Thuộc tính <b> alt </b> chỉ định một văn bản thay thế sẽ được sử dụng khi không thể hiển thị hình ảnh. </p>
<p> Giá trị của thuộc tính có thể được đọc bởi trình đọc màn hình. Bằng cách này, ai đó "đang nghe" trang web, ví dụ: một người mù có thể "nghe thấy" phần tử. </p>
<h4><b>Ví dụ</b> </h4>
<?php
echo '<pre>';
$str='<img src="w3schools.jpg" alt="W3Schools.com" width="104" height="142">';
echo htmlspecialchars($str);
echo '<br><br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>
		<h1> Thuộc tính HTML </h1>
		<p> Dưới đây là danh sách một số thuộc tính thường được sử dụng trong HTML theo thứ tự bảng chữ cái: </p>
		<table border = 1 class = "table">
		<tr>
			<th><b> Thuộc tính</b> </th>
			<th><b> Mô tả</b> </th>
		</tr>
		<tr>
			<td> alt </td>
			<td> Chỉ định văn bản thay thế cho hình ảnh, khi hình ảnh không thể hiển thị </td>
		</tr>
		<tr>
			<td> bị vô hiệu hóa </td>
			<td> Chỉ định rằng một phần tử đầu vào sẽ bị vô hiệu hóa </td>
		</tr>
		<tr>
			<td> href </td>
			<td> Chỉ định URL (địa chỉ web) cho một liên kết </td>
		</tr>
		<tr>
			<td> id </td>
			<td> Chỉ định một id duy nhất cho một phần tử </td>
		</tr>
		<tr>
			<td> src </td>
			<td> Chỉ định URL (địa chỉ web) cho hình ảnh </td>
		</tr>
		<tr>
			<td> kiểu </td>
			<td> Chỉ định kiểu CSS nội tuyến cho một phần tử </td>
		</tr>
		<tr>
			<td> tiêu đề </td>
			<td> Chỉ định thông tin bổ sung về một phần tử (được hiển thị dưới dạng mẹo công cụ) </td>
		</tr>
</table>
<hr>
<form method="post" action="">
<h1>Trả lời câu hỏi sau câu trả lời chính xác sẽ dẫn bạn đến chương tiếp theo.</h1>
					<h3><label>1) Câu nào sau đây là đúng?</label>
					<div class="radio">
		<label><input type="radio" name="optradio" value="a"><?php $s='<a href="http://www.w3schools.com">This is a link</a>
'; echo htmlspecialchars($s); ?></label>
	</div>
	<div class="radio">
		<label><input type="radio" name="optradio" value="b"><?php $s='<a src="http://www.w3schools.com">This is a link</a>
'; echo htmlspecialchars($s); ?></label>
	</div>
	
	<div class="radio">
		<label><input type="radio" name="optradio" value="c"><?php $s='<a alt="http://www.w3schools.com">This is a link</a>
'; echo htmlspecialchars($s); ?></label>
	</div>
		<button type="submit" class="btn btn-primary" name="submit">Submit</button>

	</form>

				<?php
				// if(isset($_POST['submit']))
				// {
				// $radval=$_POST['optradio'];
				// if($radval=="a")
				// {
				// echo '<a href="chapter5.php" class="btn">Next>></a>';
				// }
				// else
				// {
				// echo "<div class='alert alert-danger' role='alert'>Incorrect Answer</div>";
				// }
				// }
				?>

<?php
	if(isset($_POST['submit']))
	{
		$radval=$_POST['optradio'];
		if($radval=="a")
		{
			//echo 'true';
			echo '<a href="../htmlexamination\index.php " class="btn">Start Test</a>';
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






