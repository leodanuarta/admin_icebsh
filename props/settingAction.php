<?php
    include '../database/conn.php';

    // untuk mencari tau apa kah button sudah ditekan apa belom 'nama' nama button
    if(isset($_POST['nama'])){
        $nama = $_POST['nama'];
        $query = mysqli_query($conn, "UPDATE m_info SET nama = '$nama'");
            if($query){
                echo 'FILE BERHASIL DI UPLOAD';
                mysqli_close($conn);
                header("location:../setting.php");
                die();
            }else{
                echo 'GAGAL MENGUPLOAD GAMBAR';
            }
    }
 ?>