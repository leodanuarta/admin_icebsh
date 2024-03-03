<?php
    include '../database/conn.php';

    if(isset($_POST['InputContact'])){
        $payload = $_POST['inputContact'];
        $query = mysqli_query($conn, "UPDATE m_contact SET txt_contact = '$payload' WHERE id = 1");
            if($query){
                echo 'TEXT BERHASIL DI UPDATE';
                header("location:../setContact.php");
            }else{
                echo 'GAGAL MENGUPLOAD TEXT';
            }
        mysqli_close($conn);
    }

?>