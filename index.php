<?php
//session_start();
//
//include("connection.php");
//
//$ULID = $_SESSION["ULID"];
//$conn = openConnection();
//
//$query = "SELECT * FROM user_login WHERE ULID = $ULID;";
//$result = $conn->query($query);
//
//if ($result->num_rows > 0) {
//  $user = $result->fetch_assoc();
//  echo "Welcome " . $user["FirstName"] . " " . $user["LastName"];
//
//  if ($user["IsAdmin"]) {
//    echo "IsAdmin";
//  }
//} else {
//    header("Location: login.php");
//}
//?>

	
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

	<br> Hello, <?php echo $user_data['u_name'];?>

</body>
</html>
