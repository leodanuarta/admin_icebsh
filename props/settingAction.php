<?php
    include '../database/conn.php';

    // untuk mencari tau apa kah button sudah ditekan apa belom 'nama' nama button
    if(isset($_POST['nama'])){
        $nama = $_POST['nama'];
        $query = mysqli_query($conn, "UPDATE m_info SET nama = '$nama'");
            if($query){
                mysqli_close($conn);
                // leo danuarta
                echo '<script>alert("Berhasil Mengupload Text");window.location.href = "../setting.php";</script>';
                die();
            }else{
                echo 'GAGAL MENGUPLOAD GAMBAR';
            }
    }

    if(isset($_POST['InputTxtFooter1'])){
        $txt_footer1 = $_POST['inputTxtFooter1'];
        $query = mysqli_query($conn, "UPDATE m_info SET txt_img_footer1 = '$txt_footer1'");
            if($query){
                mysqli_close($conn);
                // leo danuarta
                echo '<script>alert("Berhasil Mengupload Text");window.location.href = "../setting.php";</script>';
                die();
            }else{
                echo 'GAGAL MENGUPLOAD GAMBAR';
            }
    }

    if(isset($_POST['InputTxtFooter2'])){
        $txt_footer2 = $_POST['inputTxtFooter2'];
        $query = mysqli_query($conn, "UPDATE m_info SET txt_img_footer2 = '$txt_footer2'");
            if($query){
                mysqli_close($conn);
                // leo danuarta
                echo '<script>alert("Berhasil Mengupload Text");window.location.href = "../setting.php";</script>';
                die();
            }else{
                echo 'GAGAL MENGUPLOAD GAMBAR';
            }
    }

    if(isset($_POST['InputTxtFooter3'])){
        $txt_footer3 = $_POST['inputTxtFooter3'];
        $query = mysqli_query($conn, "UPDATE m_info SET txt_img_footer3 = '$txt_footer3'");
            if($query){
                mysqli_close($conn);
                // leo danuarta
                echo '<script>alert("Berhasil Mengupload Text");window.location.href = "../setting.php";</script>';
                die();
            }else{
                echo 'GAGAL MENGUPLOAD GAMBAR';
            }
    }

?>