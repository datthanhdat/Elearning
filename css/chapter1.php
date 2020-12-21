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
					<h1>CSS</h1>
				</div>
			</div>
		</div>
	</header>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-9 col-md-push-2" style="margin-bottom:10px;">
					<h1>What is CSS?</h1><br>
					<ul>
					<li> CSS là viết tắt của Cascading Style Sheets </li>
					<li> CSS mô tả cách hiển thị các phần tử HTML trên màn hình, giấy hoặc trong các phương tiện khác </li>
					<li> CSS tiết kiệm rất nhiều công việc. Nó có thể kiểm soát bố cục của nhiều trang web cùng một lúc </li>
					<li> Các bảng định kiểu bên ngoài được lưu trữ trong các tệp CSS </li>
					</ul>
					<hr>
					<h1> Tại sao sử dụng CSS? </h1>
					<p> CSS được sử dụng để xác định kiểu cho các trang web của bạn, bao gồm thiết kế, bố cục và các biến thể hiển thị cho các thiết bị và kích thước màn hình khác nhau. </p>
					<hr>
					<h1> Cú pháp CSS </h1>
					<p> Bộ quy tắc CSS bao gồm một bộ chọn và một khối khai báo: </p>
					<img src="images/syntax.png"></img>
					<p> Bộ chọn trỏ đến phần tử HTML bạn muốn tạo kiểu. </p>
					<p> Khối khai báo chứa một hoặc nhiều khai báo được phân tách bằng dấu chấm phẩy. </p>
					<p> Mỗi khai báo bao gồm một tên thuộc tính CSS và một giá trị, được phân tách bằng dấu hai chấm. </p>
					<p> Một khai báo CSS luôn kết thúc bằng dấu chấm phẩy và các khối khai báo được bao quanh bởi dấu ngoặc nhọn. </p>
					<p> Trong ví dụ sau,<?php $str='<p>'; echo htmlspecialchars($str); ?>  tất cả các phần tử sẽ được căn giữa với màu văn bản màu đỏ: </p>
					<h4><b>Example</b></h4>
<?php 
echo '<pre>';
$str = 'p {
    color: red;
    text-align: center;
}';
echo htmlspecialchars($str);
echo '<br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>
					<h1> Bộ chọn id </h1>
					<p> Bộ chọn id sử dụng thuộc tính id của một phần tử HTML để chọn một phần tử cụ thể. </p>
					<p> Id của một phần tử phải là duy nhất trong một trang, do đó, công cụ chọn id được sử dụng để chọn một phần tử duy nhất! </p>
					<p> Để chọn phần tử có id cụ thể, hãy viết ký tự băm (#), sau đó là id của phần tử. </p>
					<p> Quy tắc kiểu bên dưới sẽ được áp dụng cho phần tử HTML có id = "para1": </p>
					<h4><b>Ví dụ</b> </h4>
<?php 
echo '<pre>';
$str = '#para1 {
    text-align: center;
    color: red;
}';
echo htmlspecialchars($str);
echo '<br><a href="#" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>
					<h1> Bộ chọn lớp </h1>
					<p> Bộ chọn lớp chọn các phần tử có thuộc tính lớp cụ thể. </p>
					<p> Để chọn các phần tử với một lớp cụ thể, hãy viết một ký tự dấu chấm (.), theo sau là tên của lớp. </p>
					<p> Trong ví dụ dưới đây, tất cả các phần tử HTML có class = "center" sẽ có màu đỏ và được căn giữa: </p>
					<h4><b>Ví dụ</b> </h4>
<?php 
echo '<pre>';
$str = '.center {
    text-align: center;
    color: red;
}';
echo htmlspecialchars($str);
echo '<br><a href="#" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>
					<h1> Nhận xét CSS </h1>
					<p> Nhận xét được sử dụng để giải thích mã và có thể hữu ích khi bạn chỉnh sửa mã nguồn sau này. </p>
					<p> Các nhận xét bị trình duyệt bỏ qua. </p>
					<p> Một nhận xét CSS bắt đầu bằng / * và kết thúc bằng * /. Nhận xét cũng có thể kéo dài nhiều dòng: </p>
					<h4><b>Ví dụ</b> </h4>
<?php 
echo '<pre>';
$str = 'p {
    color: red;
    /* This is a single-line comment */
    text-align: center;
}

/* This is
a multi-line
comment */';
echo htmlspecialchars($str);
echo '<br><a href="#" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
<hr>
<form method="post" action="">
					<h1> Trả lời câu hỏi sau, câu trả lời đúng sẽ dẫn bạn đến bài tiếp theo. </h1>
					<h3> <label> 1) CSS là viết tắt của gì? </label>
					<div class="radio">
		<label><input type="radio" name="optradio" value="a">Cascanding style sheet</label>
	</div>
	<div class="radio">
		<label><input type="radio" name="optradio" value="b">Creative style sheet</label>
	</div>
	
	<div class="radio">
		<label><input type="radio" name="optradio" value="c">Computer style sheet</label>
	</div>
		<button type="submit" class="btn btn-primary" name="submit">Submit</button>

	</form>
	<?php
	if(isset($_POST['submit']))
	{
		$radval=$_POST['optradio'];
		if($radval=="a")
		{
						echo '<a href="chapter2.php" class="btn">Next>></a>';

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
