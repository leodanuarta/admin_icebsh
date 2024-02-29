<?php
    include '../database/conn.php';
    if($_POST['InputCommittee']){
        $payload = $_POST['inputCommittee'];
        $query = mysqli_query($conn, "UPDATE m_callforpaper SET txt_cop = '$payload' WHERE id = 1");
            if($query){
                echo 'FILE BERHASIL DI UPLOAD';
                header("location:../index.php");
            }else{
                echo 'GAGAL MENGUPLOAD TEXT';
            }
        mysqli_close($conn);
    }
?>