<?php
	require "../php/session.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<link rel="stylesheet" href="../css/alternate.css">
</head>
<body>

	<div class="navigation-bar">
	<p><?php echo $session; ?></p>
	</div>
	<a href="../php/logout.php"><input type="button" value="Logout"></a>
</body>
</html>