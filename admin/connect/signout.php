<?php


session_start();



 $_SESSION['username']= null;
            
            session_unset();


header("Location: ../login.php?signed-out");



?>