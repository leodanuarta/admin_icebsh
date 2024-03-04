<?php
    include '../database/conn.php';

    // untuk mencari tau apa kah button sudah ditekan apa belom 'uploadHeader' nama button
    if(isset($_POST['uploadHeader'])){
        $ekstensi_diperbolehkan = array('png','jpg', 'jpeg');
        $nama = $_FILES['fileHeader']['name'];
        $x = explode('.', $nama);
        $ekstensi = strtolower(end($x));
        $ukuran = $_FILES['fileHeader']['size'];
        $file_tmp = $_FILES['fileHeader']['tmp_name'];
        
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
            if($ukuran < 3044070){
                if (move_uploaded_file($file_tmp, '../../img/'.$nama)) {
                    echo "<h3>  Image uploaded successfully!</h3>";
                } else {
                    echo "<h3>  Failed to upload image!</h3>";
                }
                
                $query = mysqli_query($conn, "UPDATE m_info SET img_header = '/img/$nama' ");
                if($query){
                    echo 'GAMBAR HEADER BERHASIL DI UPLOAD';
                    mysqli_close($conn);
                    header("location:../setting.php");
                    die();
                }else{
                    echo 'GAGAL MENGUPLOAD GAMBAR HEADER';
                }
            }else{
                echo 'UKURAN GAMBAR HEADER TIDAK BOLEH MELEBIHI 3MB!';
            }
        }else{
            echo 'EKSTENSI GAMBAR HEADER YANG DI UPLOAD TIDAK DI PERBOLEHKAN. DIPERBOLEHKAN HANYA "JPG, "JPEG" DAN "PNG"';
        }
    }

    if(isset($_POST['uploadFooter'])){
        $ekstensi_diperbolehkan = array('png','jpg', 'jpeg');
        $nama = $_FILES['fileFooter']['name'];
        $x = explode('.', $nama);
        $ekstensi = strtolower(end($x));
        $ukuran = $_FILES['fileFooter']['size'];
        $file_tmp = $_FILES['fileFooter']['tmp_name'];
        
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
            if($ukuran < 3044070){
                move_uploaded_file($file_tmp, '../../img/'.$nama);
                $query = mysqli_query($conn, "UPDATE m_info SET img_footer = '/img/$nama' ");
                if($query){
                    echo 'GAMBAR FOOTER BERHASIL DI UPLOAD';
                    mysqli_close($conn);
                    header("location:../setting.php");
                }else{
                    echo 'GAGAL MENGUPLOAD GAMBAR FOOTER';
                }
            }else{
                echo 'UKURAN GAMBAR FOOTER TIDAK BOLEH MELEBIHI 3MB!';
            }
        }else{
            echo 'EKSTENSI GAMBAR FOOTER YANG DI UPLOAD TIDAK DI PERBOLEHKAN. DIPERBOLEHKAN HANYA "JPG, "JPEG" DAN "PNG"';
        }
    }
    
 ?>