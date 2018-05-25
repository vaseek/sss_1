<html>
<?php
require  'case1.php';

 $pas = $_REQUEST['pas'];
 
?>


	<head>
		<title>validation</title>
	</head>
	<body>
		<?php
		if($pas == "312"){
			?>
			Valid user
			<?php
		}
		else {
			?>
			Invalid user
			<?php
		}
		?>
		
		<p><?php print($_SESSION['CSRF_token']) ?></p>
	</body>
</html>