<?php
session_start();
if (isset($_SESSION['views'])){
	$_SESSION['views'] = $_SESSION['views'] + 1;
}
else{
	$_SESSION['views'] = 1;
}
?>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<?php 
			echo "浏览量：". $_SESSION['views'];
		?>
	</body>
</html>