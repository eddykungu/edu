<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
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
	<div style="text-align: left;" class="jumbotron container">
		<h2 style="text-align: center; color: blue;">Student's Login Portal</h2>
		<form style="margin-left: 40%;">
			<input type="text" name="fname" placeholder="First name" required=""><br><br>
			<input type="text" name="2name" placeholder="Middle Name" required=""><br><br>
			<input type="text" name="3name" placeholder="Surname" required=""><br>
			Gender:<br>
				<input type="radio" name="gender" value="male" checked="" required="">Male<br>
				<input type="radio" name="gender" value="female">Female<br>
				<input type="radio" name="gender" value="Other">Other/ Choose not to state<br><br>
			<input type="date" name="date" placeholder="Date of Registration">
			<input method="GET" type="password" name="password" placeholder="password" required=""><br><br>
			<input type="password" name="confirm password" placeholder="confirm password" required=""><br><br>
			<input  class="n btn-danger" type="reset" name="reset">
			<button class="n btn-success" type="submit">Submit</button>
		</form>
	</div>

</body>
</html>