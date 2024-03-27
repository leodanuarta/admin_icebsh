<?php
    include '../database/conn.php';
    if($_POST['InputSubmission']){
        $payload = $_POST['inputSubmission'];
        $query = mysqli_query($conn, "UPDATE m_submission SET txt_submission = '$payload' WHERE id = 1");
            if($query){
                // leo danuarta
                echo '<script>alert("Berhasil Mengupload Text");window.location.href = "../setSubmission.php";</script>';
            }else{
                echo 'GAGAL MENGUPLOAD TEXT';
            }
        mysqli_close($conn);
    }
?>
