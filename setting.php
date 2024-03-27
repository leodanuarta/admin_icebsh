<?php
    $title = "Blank Page";
    include_once('./props/header.php');
    include ('../database/conn.php');

    $qry = "SELECT * FROM m_info";
    $data = mysqli_query($conn, $qry);
    $result = mysqli_fetch_array($data);

    // leo danuarta
    $qry_img = "SELECT * FROM m_img_menu WHERE nama_menu = 'contact'";
    $data_img = mysqli_query($conn, $qry_img);
    $result_img = mysqli_fetch_array($data_img);

    mysqli_close($conn);

    include('./props/richText.php');
?>

                <!-- leo danuarta -->
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Collapsable Card -->
                    <div class="card shadow mb-4">
                        <!-- Card Header - Accordion -->
                        <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse"
                            role="button" aria-expanded="true" aria-controls="collapseCardExample">
                            <h6 class="m-0 font-weight-bold text-primary">Website Name And Logo </h6>
                        </a>
                        <!-- Card Content - Collapse -->
                        <div class="collapse show" id="collapseCardExample">
                            <div class="card-body">
                                <form action="./props/settingAction.php" method="POST" enctype="multipart/form-data">
                                    <h3 class="m-0 font-weight-bold text-black">Website Name :</h3> <br>
                                    <input type="text" maxlength="20" name="nama" value="<?php echo $result['nama'] ?>">
                                    <input type="submit" name="updateNama" value="Simpan"><br>
                                </form>
                                <br>
                                <form action="./props/uploadSettingAction.php" method="POST" enctype="multipart/form-data">
                                    <h3 class="m-0 font-weight-bold text-black">Upload Gambar logo Website : </h3>
                                    <img src="../<?php echo $result['img_header'] ?>" alt="" width="200" height="200"><br><br>
                                    <input type="file" name="fileHeader">
                                    <input type="submit" name="uploadHeader" value="Upload">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid">
                    <!-- Collapsable Card -->
                    <div class="card shadow mb-4">
                        <!-- Card Header - Accordion -->
                        <a href="#collapseCardExample2" class="d-block card-header py-3" data-toggle="collapse"
                            role="button" aria-expanded="true" aria-controls="collapseCardExample2">
                            <h6 class="m-0 font-weight-bold text-primary">Footer Text And Logo 1</h6>
                        </a>
                        <!-- Card Content - Collapse -->
                        <div class="collapse show" id="collapseCardExample2">
                            <div class="card-body">
                                <form action="./props/settingAction.php" method="POST" enctype="multipart/form-data">
                                    <textarea name="inputTxtFooter1">
                                        <?php echo $result['txt_img_footer1'] ?>
                                    </textarea>
                                    <br>
                                    <input type="submit" name="InputTxtFooter1" value="Simpan">
                                </form>
                                <br>
                                <form action="./props/uploadSettingAction.php" method="POST" enctype="multipart/form-data">
                                    <h3 class="m-0 font-weight-bold text-black">Upload Gambar logo footer 1</h3>
                                    <img src="../<?php echo $result['img_footer1'] ?>" class="ml-5" alt="" width="200" height="200"><br><br>
                                    <input type="file" name="fileFooter1">
                                    <input type="submit" name="uploadFooter1" value="Upload">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid">
                    <!-- Collapsable Card -->
                    <div class="card shadow mb-4">
                        <!-- Card Header - Accordion -->
                        <a href="#collapseCardExample3" class="d-block card-header py-3" data-toggle="collapse"
                            role="button" aria-expanded="true" aria-controls="collapseCardExample3">
                            <h6 class="m-0 font-weight-bold text-primary">Footer Text And Logo 2</h6>
                        </a>
                        <!-- Card Content - Collapse -->
                        <div class="collapse show" id="collapseCardExample3">
                            <div class="card-body">
                                <form action="./props/settingAction.php" method="POST" enctype="multipart/form-data">
                                    <textarea name="inputTxtFooter2">
                                        <?php echo $result['txt_img_footer2'] ?>
                                    </textarea>
                                    <br>
                                    <input type="submit" name="InputTxtFooter2" value="Simpan">
                                </form>
                                <br>
                                <form action="./props/uploadSettingAction.php" method="POST" enctype="multipart/form-data">
                                    <h3 class="m-0 font-weight-bold text-black">Upload Gambar logo footer 2</h3>
                                    <img src="../<?php echo $result['img_footer2'] ?>" class="ml-5" alt="" width="200" height="200"><br><br>
                                    <input type="file" name="fileFooter2">
                                    <input type="submit" name="uploadFooter2" value="Upload">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid">
                    <!-- Collapsable Card -->
                    <div class="card shadow mb-4">
                        <!-- Card Header - Accordion -->
                        <a href="#collapseCardExample4" class="d-block card-header py-3" data-toggle="collapse"
                            role="button" aria-expanded="true" aria-controls="collapseCardExample4">
                            <h6 class="m-0 font-weight-bold text-primary">Footer Text And Logo 3</h6>
                        </a>
                        <!-- Card Content - Collapse -->
                        <div class="collapse show" id="collapseCardExample4">
                            <div class="card-body">
                                <form action="./props/settingAction.php" method="POST" enctype="multipart/form-data">
                                    <textarea name="inputTxtFooter3">
                                        <?php echo $result['txt_img_footer3'] ?>
                                    </textarea>
                                    <br>
                                    <input type="submit" name="InputTxtFooter3" value="Simpan">
                                </form>
                                <br>
                                <form action="./props/uploadSettingAction.php" method="POST" enctype="multipart/form-data">
                                    <h3 class="m-0 font-weight-bold text-black">Upload Gambar logo footer 3</h3>
                                    <img src="../<?php echo $result['img_footer3'] ?>" class="ml-5" alt="" width="200" height="200"><br><br>
                                    <input type="file" name="fileFooter3">
                                    <input type="submit" name="uploadFooter3" value="Upload">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- leo danuarta -->
                <div class="container-fluid">

                    <!-- Collapsable Card -->
                    <div class="card shadow mb-4">
                        <!-- Card Header - Accordion -->
                        <a href="#collapseCardExample3" class="d-block card-header py-3" data-toggle="collapse"
                        role="button" aria-expanded="true" aria-controls="collapseCardExample">
                        <h6 class="m-0 font-weight-bold text-primary">Upload Banner Pages Menu</h6>
                        </a>
                        <!-- Card Content - Collapse -->
                        <div class="collapse show" id="collapseCardExample3">
                            <div class="card-body">
                                <form action="./props/uploadSettingAction.php" method="POST" enctype="multipart/form-data">
                                    <h3 class="m-0 font-weight-bold">Upload Gambar Banner Menu</h3><br>
                                    <p class="" style="font-size: 16px; color: red;">Ukuran Gambar Width: 1920px dan Height: 360px</p>
                                    <img src="../<?php echo $result_img['nama_img'] ?>" alt="" width="1200" height="auto"><br><br>
                                    <input type="file" name="fileBannerBanner">
                                    <input type="submit" name="btnFileBannerBanner" value="Upload">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->



<?php
    include_once('./props/footer.php');
?>