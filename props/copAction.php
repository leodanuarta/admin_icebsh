<?php
    include '../database/conn.php';
    if(isset($_POST['InputCOP'])){
        $payload = $_POST['inputCOP'];
        $query = mysqli_query($conn, "UPDATE m_callforpaper SET txt_cop = '$payload' WHERE id = 1");
            if($query){
                // echo '<script>alert("Berhasil Mengupload Text");window.location.href = "../setCallForPaper.php";</script>';
                echo $payload;
            }else{
                echo 'GAGAL MENGUPLOAD TEXT';
            }
        mysqli_close($conn);
    }
?>
