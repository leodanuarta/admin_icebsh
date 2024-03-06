<?php 
    include '../database/conn.php';

    if(isset($_POST['btnFileBannerCOP'])){
        $ekstensi_diperbolehkan = array('png','jpg', 'jpeg');
        $nama = $_FILES['fileBannerCOP']['name'];
        $x = explode('.', $nama);
        $ekstensi = strtolower(end($x));
        $ukuran = $_FILES['fileBannerCOP']['size'];
        $file_tmp = $_FILES['fileBannerCOP']['tmp_name'];
        
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
            if($ukuran < 3044070){
                if (move_uploaded_file($file_tmp, '../../img/'.$nama)) {
                    echo "<h3>  Image uploaded successfully!</h3>";
                } else {
                    echo "<h3>  Failed to upload image!</h3>";
                }
                
                $query = mysqli_query($conn, "UPDATE m_img_menu SET nama_img = '/img/$nama' WHERE nama_menu = 'callforpaper'");
                if($query){
                    echo 'GAMBAR BANNER CALL FOR PAPER BERHASIL DI UPLOAD';
                    echo mysqli_error($conn);
                    mysqli_close($conn);
                    header("location:../setCallForPaper.php");
                    die();
                }else{
                    echo 'GAGAL MENGUPLOAD DATABASE GAMBAR BANNER CALL FOR PAPER';
                }
            }else{
                echo 'UKURAN GAMBAR BANNER CALL FOR PAPER TIDAK BOLEH MELEBIHI 3MB!';
            }
        }else{
            echo 'EKSTENSI GAMBAR BANNER CALL FOR PAPER YANG DI UPLOAD TIDAK DI PERBOLEHKAN. DIPERBOLEHKAN HANYA "JPG, "JPEG" DAN "PNG"';
        }
    }

    if(isset($_POST['btnFileBannerSubmissions'])){
        $ekstensi_diperbolehkan = array('png','jpg', 'jpeg');
        $nama = $_FILES['fileBannerSubmissions']['name'];
        $x = explode('.', $nama);
        $ekstensi = strtolower(end($x));
        $ukuran = $_FILES['fileBannerSubmissions']['size'];
        $file_tmp = $_FILES['fileBannerSubmissions']['tmp_name'];
        
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
            if($ukuran < 3044070){
                if (move_uploaded_file($file_tmp, '../../img/'.$nama)) {
                    echo "<h3>  Image uploaded successfully!</h3>";
                } else {
                    echo "<h3>  Failed to upload image!</h3>";
                }
                
                $query = mysqli_query($conn, "UPDATE m_img_menu SET nama_img = '/img/$nama' WHERE nama_menu = 'submissions'");
                if($query){
                    echo 'GAMBAR BANNER SUBMISSIONS BERHASIL DI UPLOAD';
                    echo mysqli_error($conn);
                    mysqli_close($conn);
                    header("location:../setCallForPaper.php");
                    die();
                }else{
                    echo 'GAGAL MENGUPLOAD DATABASE GAMBAR BANNER SUBMISSIONS';
                }
            }else{
                echo 'UKURAN GAMBAR BANNER SUBMISSIONS TIDAK BOLEH MELEBIHI 3MB!';
            }
        }else{
            echo 'EKSTENSI GAMBAR BANNER SUBMISSIONS YANG DI UPLOAD TIDAK DI PERBOLEHKAN. DIPERBOLEHKAN HANYA "JPG, "JPEG" DAN "PNG"';
        }
    }

    if(isset($_POST['btnFileBannerCommittee'])){
        $ekstensi_diperbolehkan = array('png','jpg', 'jpeg');
        $nama = $_FILES['fileBannerCommittee']['name'];
        $x = explode('.', $nama);
        $ekstensi = strtolower(end($x));
        $ukuran = $_FILES['fileBannerCommittee']['size'];
        $file_tmp = $_FILES['fileBannerCommittee']['tmp_name'];
        
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
            if($ukuran < 3044070){
                if (move_uploaded_file($file_tmp, '../../img/'.$nama)) {
                    echo "<h3>  Image uploaded successfully!</h3>";
                } else {
                    echo "<h3>  Failed to upload image!</h3>";
                }
                
                $query = mysqli_query($conn, "UPDATE m_img_menu SET nama_img = '/img/$nama' WHERE nama_menu = 'committee'");
                if($query){
                    echo 'GAMBAR BANNER COMMITTEE BERHASIL DI UPLOAD';
                    echo mysqli_error($conn);
                    mysqli_close($conn);
                    header("location:../setCallForPaper.php");
                    die();
                }else{
                    echo 'GAGAL MENGUPLOAD DATABASE GAMBAR BANNER COMMITTEE';
                }
            }else{
                echo 'UKURAN GAMBAR BANNER COMMITTEE TIDAK BOLEH MELEBIHI 3MB!';
            }
        }else{
            echo 'EKSTENSI GAMBAR BANNER COMMITTEE YANG DI UPLOAD TIDAK DI PERBOLEHKAN. DIPERBOLEHKAN HANYA "JPG, "JPEG" DAN "PNG"';
        }
    }

    if(isset($_POST['btnFileCarouselHome'])){
        $ekstensi_diperbolehkan = array('png','jpg', 'jpeg');
        $nama = $_FILES['fileCarouselHome']['name'];
        $x = explode('.', $nama);
        $ekstensi = strtolower(end($x));
        $ukuran = $_FILES['fileCarouselHome']['size'];
        $file_tmp = $_FILES['fileCarouselHome']['tmp_name'];
        
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
            if($ukuran < 3044070){
                if (move_uploaded_file($file_tmp, '../../img/'.$nama)) {
                    echo "<h3>  Image uploaded successfully!</h3>";
                } else {
                    echo "<h3>  Failed to upload image!</h3>";
                }
                
                $query = mysqli_query($conn, "INSERT INTO m_img_menu (nama_menu, nama_img) VALUES ('home', '/img/$nama')");
                if($query){
                    echo 'GAMBAR CAROUSEL HOME BERHASIL DI UPLOAD';
                    echo mysqli_error($conn);
                    mysqli_close($conn);
                    header("location:../setHome.php");
                    die();
                }else{
                    echo 'GAGAL MENGUPLOAD DATABASE GAMBAR CAROUSEL HOME';
                }
            }else{
                echo 'UKURAN GAMBAR CAROUSEL HOME TIDAK BOLEH MELEBIHI 3MB!';
            }
        }else{
            echo 'EKSTENSI GAMBAR CAROUSEL HOME YANG DI UPLOAD TIDAK DI PERBOLEHKAN. DIPERBOLEHKAN HANYA "JPG, "JPEG" DAN "PNG"';
        }
    }



?>
