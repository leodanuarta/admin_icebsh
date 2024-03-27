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
                    $qry = "SELECT * FROM m_img_menu WHERE nama_menu = 'callforpaper'";
                    $data = mysqli_query($conn, $qry);
                    $result = mysqli_fetch_array($data);

                    unlink('../..' . $result['nama_img']);

                    unset($result);

                    echo "<h3>  Image uploaded successfully!</h3>";
                } else {
                    echo "<h3>  Failed to upload image!</h3>";
                }
                
                $query = mysqli_query($conn, "UPDATE m_img_menu SET nama_img = '/img/$nama' WHERE nama_menu = 'callforpaper'");
                if($query){
                    mysqli_close($conn);
                    echo '<script>alert("Berhasil Mengupload Gambar");window.location.href = "../setCallForPaper.php";</script>';
                    die();
                }else{
                    echo 'GAGAL MENGUPLOAD DATABASE GAMBAR BANNER CALLs FOR PAPER';
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
                    $qry = "SELECT * FROM m_img_menu WHERE nama_menu = 'submissions'";
                    $data = mysqli_query($conn, $qry);
                    $result = mysqli_fetch_array($data);

                    unlink('../..' . $result['nama_img']);

                    unset($result);
                    echo "<h3>  Image uploaded successfully!</h3>";
                } else {
                    echo "<h3>  Failed to upload image!</h3>";
                }
                
                $query = mysqli_query($conn, "UPDATE m_img_menu SET nama_img = '/img/$nama' WHERE nama_menu = 'submissions'");
                if($query){
                    mysqli_close($conn);
                    echo '<script>alert("Berhasil Mengupload Gambar");window.location.href = "../setSubmission.php";</script>';
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
                    $qry = "SELECT * FROM m_img_menu WHERE nama_menu = 'committee'";
                    $data = mysqli_query($conn, $qry);
                    $result = mysqli_fetch_array($data);

                    unlink('../..' . $result['nama_img']);

                    unset($result);
                    echo "<h3>  Image uploaded successfully!</h3>";
                } else {
                    echo "<h3>  Failed to upload image!</h3>";
                }
                
                $query = mysqli_query($conn, "UPDATE m_img_menu SET nama_img = '/img/$nama' WHERE nama_menu = 'committee'");
                if($query){
                    mysqli_close($conn);
                    echo '<script>alert("Berhasil Mengupload Gambar");window.location.href = "../setCommittee.php";</script>';
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

    if(isset($_POST['btnFileBannerContact'])){
        $ekstensi_diperbolehkan = array('png','jpg', 'jpeg');
        $nama = $_FILES['fileBannerContact']['name'];
        $x = explode('.', $nama);
        $ekstensi = strtolower(end($x));
        $ukuran = $_FILES['fileBannerContact']['size'];
        $file_tmp = $_FILES['fileBannerContact']['tmp_name'];
        
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
            if($ukuran < 3044070){
                if (move_uploaded_file($file_tmp, '../../img/'.$nama)) {
                    $qry = "SELECT * FROM m_img_menu WHERE nama_menu = 'contact'";
                    $data = mysqli_query($conn, $qry);
                    $result = mysqli_fetch_array($data);

                    unlink('../..' . $result['nama_img']);

                    unset($result);
                    echo "<h3>  Image uploaded successfully!</h3>";
                } else {
                    echo "<h3>  Failed to upload image!</h3>";
                }
                
                $query = mysqli_query($conn, "UPDATE m_img_menu SET nama_img = '/img/$nama' WHERE nama_menu = 'contact'");
                if($query){
                    mysqli_close($conn);
                    echo '<script>alert("Berhasil Mengupload Gambar");window.location.href = "../setContact.php";</script>';
                    die();
                }else{
                    echo 'GAGAL MENGUPLOAD DATABASE GAMBAR BANNER CONTACT';
                }
            }else{
                echo 'UKURAN GAMBAR BANNER CONTACT TIDAK BOLEH MELEBIHI 3MB!';
            }
        }else{
            echo 'EKSTENSI GAMBAR BANNER CONTACT YANG DI UPLOAD TIDAK DI PERBOLEHKAN. DIPERBOLEHKAN HANYA "JPG, "JPEG" DAN "PNG"';
        }
    }

?>
