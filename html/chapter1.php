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
					<h1>HTML là gì?</h1><br>
					<p><b>HTML</b> là chữ viết tắt của <b>Hypertext Markup Language</b>. Nó giúp người dùng tạo và cấu trúc các thành phần trong trang web hoặc ứng dụng, phân chia các đoạn văn, heading, links, blockquotes,..<p>
					<p>HTML không phải là ngôn ngữ lập trình, đồng nghĩa với việc nó không thể tạo ra các chức năng “động” được. Nó chỉ giống như Microsoft Word, dùng để bố cục và định dạng trang web.</p>
					<p>
					Khi làm việc với HTML, chúng ta sẽ sử dụng cấu trúc code đơn giản (tags và attributes) để đánh dấu lên trang web. Ví dụ, chúng ta có thể tạo một đoạn văn bằng cách đặt văn bản vào trong cặp tag mở và đóng văn bản <p> và </p></p>
					<ul>
						<li>HTML là viết tắt của Hyper Text Markup Language</li>
						<li>HTML mô tả cấu trúc của các trang Web bằng cách sử dụng đánh dấu</li>
						<li>Các phần tử HTML là các khối xây dựng của các trang HTML</li>
						<li>Các phần tử HTML được thể hiện bằng các thẻ</li>
						<li>Thẻ HTML gắn nhãn các phần nội dung như "tiêu đề", "đoạn văn", "bảng", v.v.</li>
						<li>Các trình duyệt không hiển thị các thẻ HTML, nhưng sử dụng chúng để hiển thị nội dung của trang</li>
					</ul>
					<hr>
					<h1>Một vài ví dụ HTML đơn giản</h1>
					<h4><b>Ví dụ</b></h4>
<?php 
echo '<pre>';
$str = '<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>
<h1>My First Heading</h1>
<p>My first paragraph.</p>
</body>
</html>';
echo htmlspecialchars($str);
echo '<br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
					<h1>Giải thích ví dụ</h1>
					<ul>
						<li>Khai báo  <?php $str='<!DOCTYPE html>'; echo htmlspecialchars($str); ?> xác định tài liệu này là HTML5</li>
						<li>Thẻ <?php $str='<html>'; echo htmlspecialchars($str); ?> phần tử là phần tử gốc của trang HTML</li>
						<li>Thẻ <?php $str='<head>'; echo htmlspecialchars($str); ?>  phần tử chứa thông tin meta về tài liệu</li>
						<li>Thẻ <?php $str='<title>'; echo htmlspecialchars($str); ?>  phần tử chỉ định tiêu đề cho tài liệu</li>
						<li>Thẻ <?php $str='<body>'; echo htmlspecialchars($str); ?>  phần tử chứa nội dung trang hiển thị</li>
						<li>Thẻ <?php $str='<h1>'; echo htmlspecialchars($str); ?>  phần tử xác định một tiêu đề lớn</li>
						<li>Thẻ <?php $str='<p>'; echo htmlspecialchars($str); ?>  phần tử xác định một đoạn văn</li>
					</ul>
					<hr>
					<h1>HTML Tags</h1>
					<p>Thẻ HTML là tên phần tử được bao quanh bởi dấu ngoặc nhọn:</p>
					<?php 
					echo '<pre>';
					$str = '<tagname>content goes here...</tagname>';
					echo htmlspecialchars($str);
					echo '</pre>';
					?>
					<ul>
						<li>Các thẻ HTML thường đi thành từng cặp như <?php $str='<p>'; echo htmlspecialchars($str); ?> and <?php $str='</p>'; echo htmlspecialchars($str); ?></li>
						<li>Thẻ đầu tiên trong một cặp là thẻ bắt đầu, thẻ thứ hai là thẻ kết thúc</li>
						<li>Thẻ đóng được viết giống như thẻ bắt đầu, nhưng có thêm dấu gạch chéo lên trước tên thẻ</li>
					</ul>
					<hr>
					<h1>Cấu trúc của trang HTML</h1>
					<p>Dưới đây là hình ảnh trực quan về cấu trúc trang HTML:</p>
					<img src="images/html.jpg" >
					<hr>
					<form method="post" action="" >
						<h1>Trả lời câu hỏi sau, câu trả lời chính xác sẽ dẫn bạn đến bài học tiếp theo.</h1>
								<h3>
									<label>1) HTML là viết tắt của?</label>
								</h3>	
							<div class="radio">
								<label><input type="radio" name="optradio" value="Hyper text markup Lnaguage">Hypertext Markup Language</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="optradio" value="Hyperlink text markup language">Hyperlink text Markup language</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="optradio" value="hyper tool markup language">Hypertool Markup Language</label>
							</div>
						<button type="submit" class="btn btn-primary" name="submit">Submit</button>
					</form>

	<?php
	if(isset($_POST['submit']))
	{
		$radval=$_POST['optradio'];
		if($radval=="Hyper text markup Lnaguage")
		{
			//echo 'true';
			echo '<a href="chapter2.php" class="btn">Next to the Page>></a>';
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
