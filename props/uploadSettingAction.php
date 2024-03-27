<?php
    include '../database/conn.php';

    $qry = "SELECT * FROM m_info";
    $data = mysqli_query($conn, $qry);
    $result = mysqli_fetch_array($data);


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
                    unlink('../..' . $result['img_header']);
                    echo "<h3>  Image uploaded successfully!</h3>";
                } else {
                    echo "<h3>  Failed to upload image!</h3>";
                }
                
                $query = mysqli_query($conn, "UPDATE m_info SET img_header = '/img/$nama' ");
                if($query){
                    mysqli_close($conn);
                    // leo danuarta
                    echo '<script>alert("Berhasil Mengupload Gambar");window.location.href = "../setting.php";</script>';
                    die();
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
    if(isset($_POST['uploadFooter1'])){
        $ekstensi_diperbolehkan = array('png','jpg', 'jpeg');
        $nama = $_FILES['fileFooter1']['name'];
        $x = explode('.', $nama);
        $ekstensi = strtolower(end($x));
        $ukuran = $_FILES['fileFooter1']['size'];
        $file_tmp = $_FILES['fileFooter1']['tmp_name'];
        
        

        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
            if($ukuran < 3044070){
                unlink('../..' . $result['img_footer1']);
                move_uploaded_file($file_tmp, '../../img/'.$nama);
                $query = mysqli_query($conn, "UPDATE m_info SET img_footer1 = '/img/$nama' ");
                if($query){
                    mysqli_close($conn);
                    echo '<script>alert("Berhasil Mengupload Gambar");window.location.href = "../setting.php";</script>';
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

    if(isset($_POST['uploadFooter2'])){
        $ekstensi_diperbolehkan = array('png','jpg', 'jpeg');
        $nama = $_FILES['fileFooter2']['name'];
        $x = explode('.', $nama);
        $ekstensi = strtolower(end($x));
        $ukuran = $_FILES['fileFooter2']['size'];
        $file_tmp = $_FILES['fileFooter2']['tmp_name'];
        

        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
            if($ukuran < 3044070){
                unlink('../..' . $result['img_footer2']);
                move_uploaded_file($file_tmp, '../../img/'.$nama);
                $query = mysqli_query($conn, "UPDATE m_info SET img_footer2 = '/img/$nama' ");
                if($query){
                    mysqli_close($conn);
                    echo '<script>alert("Berhasil Mengupload Gambar");window.location.href = "../setting.php";</script>';
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

    if(isset($_POST['uploadFooter3'])){
        $ekstensi_diperbolehkan = array('png','jpg', 'jpeg');
        $nama = $_FILES['fileFooter3']['name'];
        $x = explode('.', $nama);
        $ekstensi = strtolower(end($x));
        $ukuran = $_FILES['fileFooter3']['size'];
        $file_tmp = $_FILES['fileFooter3']['tmp_name'];
        

        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
            if($ukuran < 3044070){
                unlink('../..' . $result['img_footer3']);
                move_uploaded_file($file_tmp, '../../img/'.$nama);
                $query = mysqli_query($conn, "UPDATE m_info SET img_footer3 = '/img/$nama' ");
                if($query){
                    mysqli_close($conn);
                    echo '<script>alert("Berhasil Mengupload Gambar");window.location.href = "../setting.php";</script>';
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

    if(isset($_POST['btnFileBannerBanner'])){
        $ekstensi_diperbolehkan = array('png','jpg', 'jpeg');
        $nama = $_FILES['fileBannerBanner']['name'];
        $x = explode('.', $nama);
        $ekstensi = strtolower(end($x));
        $ukuran = $_FILES['fileBannerBanner']['size'];
        $file_tmp = $_FILES['fileBannerBanner']['tmp_name'];
        
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
            if($ukuran < 3044070){
                if (move_uploaded_file($file_tmp, '../../img/'.$nama)) {
                    unlink('../..' . $result['img_banner']);
                    echo "<h3>  Image uploaded successfully!</h3>";
                } else {
                    echo "<h3>  Failed to upload image!</h3>";
                }
                
                $query = mysqli_query($conn, "UPDATE m_info SET img_banner = '/img/$nama'");
                if($query){
                    mysqli_close($conn);
                    echo '<script>alert("Berhasil Mengupload Gambar");window.location.href = "../setting.php";</script>';
                    die();
                }else{
                    echo 'GAGAL MENGUPLOAD DATABASE GAMBAR BANNER BANNER';
                }
            }else{
                echo 'UKURAN GAMBAR BANNER BANNER TIDAK BOLEH MELEBIHI 3MB!';
            }
        }else{
            echo 'EKSTENSI GAMBAR BANNER BANNER YANG DI UPLOAD TIDAK DI PERBOLEHKAN. DIPERBOLEHKAN HANYA "JPG, "JPEG" DAN "PNG"';
        }
    }
 ?>
