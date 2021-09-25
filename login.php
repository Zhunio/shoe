<?php
session_start();

include("connection.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $u_name = $_POST['u_name'];
    $p_word = $_POST['p_word'];

    $conn = openConnection();

    $query = "SELECT * FROM user_login WHERE u_name = '$u_name' AND p_word = '$p_word'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
      $_SESSION["ULID"] = $result->fetch_assoc()["ULID"];
      header("Location: index.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body> 

    <style type="text/css">
        #text{

            height: 25px;
            border-radius: 5px;
            padding: 4px;
            border: solid thin #aaa;
        }

        #login{

            padding: 10px;
            width: 100px;
            color: white;
            background-color: lightblue;
            border: none;
        }

        #box{

            background-color: lightgrey;
            margin: auto;
            width: 300px;
            padding: 20px;
            
        }


    </style>


    <div id="box">

        <form method="post">
            <div style="font-size: 20px; margin: 10px; color: white;">Login</div>

            <input type="text" name="u_name"><br><br>
            <input type="password" name="p_word"><br><br>

            <input type="submit" value="Login" id="login"><br><br>

            <a href="signup.php">Signup</a><br><br>
        </form>
    </div>
</body>
</html>