<?php
	require "../php/session.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
</head>
<body>
	<p>Hi! <?php echo $session; ?></p>
	<a href="../php/logout.php"><input type="button" value="Logout"></a>
</body>
</html>