<?php
    $title = "Not Found";
    include_once('./props/header.php');
    include './database/conn.php';
    $qry = "SELECT * FROM m_home WHERE id = 1";
    $data = mysqli_query($conn, $qry);
    $result = mysqli_fetch_array($data);
    
    $qry_img = "SELECT * FROM m_img_menu WHERE nama_menu = 'home'";
    $data_img = mysqli_query($conn, $qry_img);
    $result_img = mysqli_fetch_array($data_img);
    
    mysqli_close($conn);
    
    include('./props/richText.php');
?>

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Collapsable Card -->
            <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse"
                    role="button" aria-expanded="true" aria-controls="collapseCardExample">
                    <h6 class="m-0 font-weight-bold text-primary">Text Speakers</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardExample">
                    <div class="card-body">
                        <form action="./props/homeAction.php" method="POST">
                            <textarea name="inputSpeakers">
                                <?php echo $result['sub_judul1'] ?>
                            </textarea>
                            <input type="submit" name="InputSpeakers" value="Simpan">
                        </form>
                    </div>
                </div>
            </div>

            <!-- Collapsable Card -->
            <div class="card shadow mb-4" visible="false">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardExample2" class="d-block card-header py-3" data-toggle="collapse"
                    role="button" aria-expanded="true" aria-controls="collapseCardExample">
                    <h6 class="m-0 font-weight-bold text-primary">Text Schedule</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardExample2">
                    <div class="card-body">
                        <form action="./props/homeAction.php" method="POST">
                            <textarea name="inputSchedule">
                                <?php echo $result['sub_judul2'] ?>
                            </textarea>
                            <input type="submit" name="InputSchedule" value="Simpan">
                        </form>
                    </div>
                </div>
            </div>

            <!-- Collapsable Card -->
            <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardExample3" class="d-block card-header py-3" data-toggle="collapse"
                    role="button" aria-expanded="true" aria-controls="collapseCardExample">
                    <h6 class="m-0 font-weight-bold text-primary">Upload Gambar Carousel Home</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardExample3">
                    <div class="card-body">
                        <div id="formUploadCarouselHome" class="mb-5 py-2">
                            <form action="./props/uploadImageAction.php" method="POST" enctype="multipart/form-data">
                                <h1>Upload Gambar Carousel Home</h1>
                                <input type="file" name="fileCarouselHome">
                                <input type="submit" name="btnFileCarouselHome" value="Upload">
                            </form>
                        </div>
                        <?php while ($row = $data_img->fetch_array()) { ?>
                                <img class="mb-5" src="..<?php echo $row['nama_img'] ?>" alt="" width="500" height="600"> </br>;
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>

        <?php
            // Bebaskan hasil query
            mysqli_free_result($data_img);
        ?>

        <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->


<?php
    include_once('./props/footer.php');
?>