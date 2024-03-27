<?php
    include '../database/conn.php';

    if(isset($_POST['InputSpeakers'])){
        $payload = $_POST['inputSpeakers'];
        $query = mysqli_query($conn, "UPDATE m_home SET sub_judul1 = '$payload' WHERE id = 1");
            if($query){
                // leo danuarta
                echo '<script>alert("Berhasil Mengupload Text");window.location.href = "../setHome.php";</script>';
            }else{
                echo 'GAGAL MENGUPDATE TEXT';
            }
        mysqli_close($conn);
    }

    if(isset($_POST['InputSchedule'])){
        $payload = $_POST['inputSchedule'];
        $query = mysqli_query($conn, "UPDATE m_home SET sub_judul2 = '$payload' WHERE id = 1");
            if($query){
                echo '<script>alert("Berhasil Mengupload Text");window.location.href = "../setHome.php";</script>';
            }else{
                echo 'GAGAL MENGUPDATE TEXT';
            }
        mysqli_close($conn);
    }

    // leo danuarta
    if(isset($_POST['btnTambahModal'])){
        $ekstensi_diperbolehkan = array('png','jpg', 'jpeg');
        $nama = $_FILES['fileTambahGambar']['name'];
        $x = explode('.', $nama);
        $ekstensi = strtolower(end($x));
        $ukuran = $_FILES['fileTambahGambar']['size'];
        $file_tmp = $_FILES['fileTambahGambar']['tmp_name'];
        
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
            if($ukuran < 3044070){
                if (move_uploaded_file($file_tmp, '../../img/'.$nama)) {
                    echo "<h3>  Image uploaded successfully!</h3>";
                } else {
                    echo "<h3>  Failed to upload image!</h3>";
                }
                
                $payload = $_POST['txtTambahJudulGambar'];
                $query = mysqli_query($conn, "INSERT INTO m_image_home (desc_img, img_carousel) Values('$payload', '/img/$nama' )");
                if($query){
                    echo '<script>alert("Berhasil Menambahkan Gambar Slider");window.location.href = "../setHome.php";</script>';
                }else{
                    echo 'Gagal Menambahkan Gambar Slider';
                }
            }else{
                echo 'UKURAN GAMBAR SLIDER TERLALU BESAR';
            }
        }else{
            echo 'EKSTENSI GAMBAR SLIDER YANG DI UPLOAD TIDAK DI PERBOLEHKAN DIPERBOLEHKAN HANYA "JPG, "JPEG" DAN "PNG"';
        }
        mysqli_close($conn);
    }

    if(isset($_GET['id']) && isset($_GET['action'])) {
        $id = $_GET['id'];
        $action = $_GET['action'];
        
        if($action === 'delete') {
            $query = mysqli_query($conn,"DELETE FROM m_image_home WHERE id_img = $id;");
            if($query){
                echo '<script>alert("Berhasil Menghapus Gambar Slider");window.location.href = "../setHome.php";</script>';
            }else{
                echo 'Gagal Menghapus Gambar Slider';
            }
        }
    }
?>
