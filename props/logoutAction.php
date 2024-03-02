<?php
//function start lagi
    if (isset($_POST['logout'])) {
        session_start();
        session_unset();
        session_destroy();
        
        header("Location: register.php");
        die();

        // echo "Welcome";
    }

?>