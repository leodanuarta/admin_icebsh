<?php
    include '../database/conn.php';

    // untuk mencari tau apa kah button sudah ditekan apa belom 'nama' nama button
    if($_POST['nama']){
        $nama = $_POST['nama'];
        $query = mysqli_query($conn, "UPDATE m_info SET nama = '$nama'");
            if($query){
                echo 'FILE BERHASIL DI UPLOAD';
                mysqli_close($conn);
                header("location:../setting.php");
            }else{
                echo 'GAGAL MENGUPLOAD GAMBAR';
            }
    }

    // untuk mencari tau apa kah button sudah ditekan apa belom 'uploadHeader' nama button
    if($_POST['uploadHeader']){
        $ekstensi_diperbolehkan = array('png','jpg', 'jpeg');
        $nama = $_FILES['fileHeader']['name'];
        $x = explode('.', $nama);
        $ekstensi = strtolower(end($x));
        $ukuran = $_FILES['file']['size'];
        $file_tmp = $_FILES['file']['tmp_name'];
        
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
            if($ukuran < 3044070){
                if (move_uploaded_file($file_tmp, '../../img/'.$nama)) {
                    echo "<h3>  Image uploaded successfully!</h3>";
                } else {
                    echo "<h3>  Failed to upload image!</h3>";
                }
                
                $query = mysqli_query($conn, "UPDATE m_info SET img_header = '/img/$nama' ");
                if($query){
                    mysqli_close($conn);
                    echo 'GAMBAR HEADER BERHASIL DI UPLOAD';
                    header("location:../setting.php");
                }else{
                    echo 'GAGAL MENGUPLOAD GAMBAR HEADER';
                }
            }else{
                echo 'UKURAN GAMBAR HEADER TERLALU BESAR';
            }
        }else{
            echo 'EKSTENSI GAMBAR HEADER YANG DI UPLOAD TIDAK DI PERBOLEHKAN DIPERBOLEHKAN HANYA "JPG, "JPEG" DAN "PNG"';
        }
    }

    // untuk mencari tau apa kah button sudah ditekan apa belom 'uploadFooter' nama button
    if($_POST['uploadFooter']){
        $ekstensi_diperbolehkan = array('png','jpg', 'jpeg');
        $nama = $_FILES['fileFooter']['name'];
        $x = explode('.', $nama);
        $ekstensi = strtolower(end($x));
        $ukuran = $_FILES['file']['size'];
        $file_tmp = $_FILES['file']['tmp_name']; 
        
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
                echo 'UKURAN GAMBAR FOOTER TERLALU BESAR';
            }
        }else{
            echo 'EKSTENSI GAMBAR FOOTER YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
        }
    }
 ?>