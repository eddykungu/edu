<!DOCTYPE html>
<html>
<head>
	<title>grades</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
	<div>
		<nav class="navbar navbar-default navbar-inverse">
			<div class="">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">Serious Group of Schools</a>
				</div>
					<ul class="nav navbar-nav">
						<li><a href="">HOME</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</div>
	<div>
		<form method="GET" class="jumbotron">
			Student's Name:<br>
			<input type="text" name="name"><br><br>
			Math:<br>
			<input type="number" name="math"><br><br>
			English:<br>
			<input type="number" name="English"><br><br>
			Kiswahili:<br>
			<input type="number" name="Kiswahili"><br><br>
			Biology:<br>
			<input type="number" name="Biology"><br><br>
			Physics:<br>
			<input type="number" name="Physics"><br><br>
			Chemistry:<br>
			<input type="number" name="Chemistry"><br><br>
			<button type="Sumbit" class="btn-danger">Sumbit</button>
		</form>
	</div>
	<?php 
	$m=$_GET['math'];
	$e=$_GET['English'];
	$k=$_GET['Kiswahili'];
	$b=$_GET['Biology'];
	$p=$_GET['Physics'];
	$c=$_GET['Chemistry'];
	$grade=($m+$e+$k+$b+$p+$c)/6;
	if ($grade>=80) {
		# code...
		echo "A";
	} elseif ($grade>=60) {
		# code...
		echo "B";
	} elseif ($grade>=40) {
		# code...
		echo "C";
	} else {
		# code...
		echo "D";
	}
	
	 ?>

</body>
</html>