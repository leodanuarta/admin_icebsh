<?php
    $title = "Not Found";
    include_once('./props/header.php');
    include './database/conn.php';
    $qry = "SELECT * FROM m_committee WHERE id = 1";
    $data = mysqli_query($conn, $qry);
    $result = mysqli_fetch_array($data);

    $qry_img = "SELECT * FROM m_img_menu WHERE nama_menu = 'submissions'";
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
                    <h6 class="m-0 font-weight-bold text-primary">Text Committee</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardExample">
                    <div class="card-body">
                        <form action="./props/committeAction.php" method="POST">
                            <textarea name="inputCommittee">
                                <?php echo $result['txt_committee'] ?>
                            </textarea>
                            <input type="submit" name="InputCommittee" value="Simpan">
                        </form>
                    </div>
                </div>
            </div>

            <!-- Collapsable Card -->
            <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardExample2" class="d-block card-header py-3" data-toggle="collapse"
                    role="button" aria-expanded="true" aria-controls="collapseCardExample">
                    <h6 class="m-0 font-weight-bold text-primary">Text Reviewers</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardExample2">
                    <div class="card-body">
                        <form action="./props/committeAction.php" method="POST">
                            <textarea name="inputReviewers">
                                <?php echo $result['txt_reviewers'] ?>
                            </textarea>
                            <input type="submit" name="InputReviewers" value="Simpan">
                        </form>
                    </div>
                </div>
            </div>

            <!-- Collapsable Card -->
            <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardExample3" class="d-block card-header py-3" data-toggle="collapse"
                    role="button" aria-expanded="true" aria-controls="collapseCardExample">
                    <h6 class="m-0 font-weight-bold text-primary">Upload Gambar Banner Committee</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardExample3">
                    <div class="card-body">
                        <form action="./props/uploadImageAction.php" method="POST" enctype="multipart/form-data">
                            <h1>Upload Gambar Banner Committee</h1>
                            <input type="file" name="fileBannerCommittee">
                            <input type="submit" name="btnFileBannerCommittee" value="Upload">
                            <img src="../<?php echo $result_img['nama_img'] ?>" alt="" width="500" height="600">
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