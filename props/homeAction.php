<?php
    include '../database/conn.php';

    if(isset($_POST['InputSpeakers'])){
        $payload = $_POST['inputSpeakers'];
        $query = mysqli_query($conn, "UPDATE m_home SET sub_judul1 = '$payload' WHERE id = 1");
            if($query){
                echo 'TEXT BERHASIL DI UPDATE';
                header("location:../setHome.php");
            }else{
                echo 'GAGAL MENGUPDATE TEXT';
            }
        mysqli_close($conn);
    }

    if(isset($_POST['InputSchedule'])){
        $payload = $_POST['inputSchedule'];
        $query = mysqli_query($conn, "UPDATE m_home SET sub_judul2 = '$payload' WHERE id = 1");
            if($query){
                echo 'TEXT BERHASIL DI UPDATE';
                header("location:../setHome.php");
            }else{
                echo 'GAGAL MENGUPDATE TEXT';
            }
        mysqli_close($conn);
    }
?>