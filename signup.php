<?php
session_start();

include("connection.php");
include("function.php");

if($_SERVER['REQUEST_METHOD'] == "POST") {
    $username=$_POST['u_name'];
    $password=$_POST['p_word'];

    $conn = openConnection();


        //SAVE TO DATABASE
        $ULID=random_num(10);
        $query="INSERT INTO user_login (ULID, u_name, p_word) VALUES ('$ULID','$username', '$password')";
        $conn->query($query);

        header("Location: login.php");
        die;
    
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
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
            <div style="font-size: 20px; margin: 10px; color: white;">Signup</div>

            <input type="text" name="u_name"><br><br>
            <input type="password" name="p_word"><br><br>

            <input type="submit" value="Signup" id="signup"><br><br>

            <a href="login.php">Login</a><br><br>
        </form>
    </div>
</body>
</html>