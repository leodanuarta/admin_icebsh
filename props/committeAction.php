<?php
    include '../database/conn.php';

    if(isset($_POST['InputCommittee'])){
        $payload = $_POST['inputCommittee'];
        $query = mysqli_query($conn, "UPDATE m_committee SET txt_committee = '$payload' WHERE id = 1");
            if($query){
                echo 'TEXT BERHASIL DI UPDATE';
                header("location:../setCommittee.php");
            }else{
                echo 'GAGAL MENGUPLOAD TEXT';
            }
        mysqli_close($conn);
    }

    if(isset($_POST['InputReviewers'])){
        $payload = $_POST['inputReviewers'];
        $query = mysqli_query($conn, "UPDATE m_committee SET txt_reviewers = '$payload' WHERE id = 1");
            if($query){
                echo 'TEXT BERHASIL DI UPDATE';
                header("location:../setCommittee.php");
            }else{
                echo 'GAGAL MENGUPLOAD TEXT';
            }
        mysqli_close($conn);
    }
?>