<?php
    include '../database/conn.php';
    if($_POST['InputCOP']){
        $payload = $_POST['inputCOP'];
        $query = mysqli_query($conn, "UPDATE m_callforpaper SET txt_cop = '$payload' WHERE id = 1");
            if($query){
                echo 'FILE BERHASIL DI UPLOAD';
                header("location:../setCallForPaper.php");
            }else{
                echo 'GAGAL MENGUPLOAD TEXT';
            }
        mysqli_close($conn);
    }
?>