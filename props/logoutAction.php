<?php
session_start();
    //function hapus session lagi
    if (isset($_POST['logout'])) {
        session_unset();
        session_destroy();
        
        header("Location: ../login.php");
        die();

    }

?>
