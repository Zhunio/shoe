<?php

include "connection.php";

$conn = openConnection();

$conn->query("insert into user (ULID, user_name, pass_word, is_admin) values('12334', 'zhunio', 'password', true)")
?>

	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Shoe Store</title>
</head>
<body>

	<a href="logout.php">Logout</a>

	<h1>Welcome to Shoe</h1>

	<br> Hello

</body>
</html>
