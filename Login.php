
<html>
<?php
require  'case1.php';
?>
<html>
	<head>
		<title>Login</title>
	</head>
	<body>
		<form action="validation.php" method="post">
			user<input type="text" name="user" />
			password<input type="text" name="pas"/>
			<input type="submit" value="enter"/>
			<input type="hidden" name="token" value="<?php echo $_SESSION['CSRF_token']; ?>">
		</form>
	</body>
</html>
</html>