<?php

    session_start();

    if(isset($_SESSION['ULID'])) {
        
        unset($_SESSION['ULID']);
    }

    header("LOcation: login.php");
    die;
?>