<?php
    $title = "Blank Page";
    include_once('./props/header.php');
    include ('../database/conn.php');

    $qry = "SELECT * FROM m_info";
    $data = mysqli_query($conn, $qry);
    $result = mysqli_fetch_array($data);

    mysqli_close($conn);
?>

                <!-- Begin Page Content -->
                <!-- <form action="./props/settingAction.php" method="POST" enctype="multipart/form-data"> -->
                    <div class="container-fluid">

                        <form action="./props/settingAction.php" method="POST" enctype="multipart/form-data">
                            <h1>Website Name :</h1>
                            <input type="text" maxlength="20" name="nama" value="<?php echo $result['nama'] ?>">
                            <input type="submit" name="updateNama" value="Simpan">
                        </form>
                        
                        <form action="./props/uploadSettingAction.php" method="POST" enctype="multipart/form-data">
                            <h1>Upload Gambar logo header</h1>
                            <input type="file" name="fileHeader">
                            <input type="submit" name="uploadHeader" value="Upload">
                            <img src="../<?php echo $result['img_header'] ?>" alt="" width="500" height="600">

                            <h1>Upload Gambar logo footer</h1>
                            <input type="file" name="fileFooter">
                            <input type="submit" name="uploadFooter" value="Upload">
                            <img src="../<?php echo $result['img_footer'] ?>" alt="" width="500" height="600">
                        </form>
                    </div>
                    <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->



<?php
    include_once('./props/footer.php');
?>