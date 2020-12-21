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
					<h1>HTML</h1>
				</div>
			</div>
		</div>
	</header>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-9 col-md-push-2" style="margin-bottom:10px;">
			<h1> Viết HTML bằng Notepad hoặc Visual Studio Code </h1> <br>
			<p> Có thể tạo và sửa đổi các trang web bằng cách sử dụng các trình soạn thảo HTML chuyên nghiệp. <p>
			<p> Tuy nhiên, để học HTML, chúng tôi khuyên bạn nên sử dụng một trình soạn thảo văn bản đơn giản như Notepad (PC) hoặc TextEdit (Mac). </p>
			<p> Chúng tôi tin rằng sử dụng một trình soạn thảo văn bản đơn giản là một cách tốt để học HTML. </p>
			<p> Làm theo bốn bước bên dưới để tạo trang web đầu tiên của bạn bằng Notepad hoặc TextEdit. </p>
			<hr>
			<h1> Bước 1: Mở Notepad (PC) </h1>
			<p> <b> Windows 8 trở lên: </b> </p>
			<p> Mở <b> Màn hình Bắt đầu </b> (biểu tượng cửa sổ ở dưới cùng bên trái trên màn hình của bạn). Nhập <b> Notepad </b>. </p>
			<p> <b> Windows 7 trở xuống: </b> </p>
			<p> Mở <b> Bắt đầu> Chương trình> Phụ kiện> Notepad </b> </p>
			<hr>
			<h1> Bước 2: Viết một số HTML </h1>
			<p> Viết hoặc sao chép một số HTML vào Notepad. </p>
<?php 
echo '<pre>';
$str='<!DOCTYPE html>
<html>
<body>

<h1>My First Heading</h1>

<p>My first paragraph.</p>

</body>
</html>';
echo htmlspecialchars($str);
echo '</pre>';
?>
				<hr>
				<h1> Bước 3: Lưu trang HTML </h1>
				<p> Lưu tệp trên máy tính của bạn. Chọn <b> Tệp> Lưu </b> như trong menu Notepad. </p>
				<p> Đặt tên tệp là <b> "index.html" </b> và đặt mã hóa thành <b> UTF-8 </b> (là kiểu mã hóa ưu tiên cho các tệp HTML). </p>
				<hr>
				<h1> Bước 4: Xem trang HTML trong trình duyệt của bạn </h1>
				<p> Mở tệp HTML đã lưu trong trình duyệt yêu thích của bạn (nhấp đúp vào tệp hoặc nhấp chuột phải - và chọn "Mở bằng"). </p>
				<hr>
				<form method="post" action="">
					<h1>Trả lời câu hỏi sau, câu trả lời chính xác sẽ dẫn bạn đến bài học tiếp theo.</h1>
					<h3><label>1) Thẻ <?php $s='<p>'; echo htmlspecialchars($s);?> được sử dụng để làm gì?</label>
					<div class="radio">
		<label><input type="radio" name="optradio" value="a">Để tạo Đoạn văn</label>
	</div>
	<div class="radio">
		<label><input type="radio" name="optradio" value="b">Để tạo bảng</label>
	</div>
	
	<div class="radio">
		<label><input type="radio" name="optradio" value="c">Để tạo danh sách </label>
	</div>
		<button type="submit" class="btn btn-primary" name="submit">Submit</button>

	</form>
	<?php
	if(isset($_POST['submit']))
	{
		$radval=$_POST['optradio'];
		if($radval=="a")
		{
			//echo 'true';
			echo '<a href="chapter3.php" class="btn">Next>></a>';
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
