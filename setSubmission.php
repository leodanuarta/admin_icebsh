<?php
    $title = "Not Found";
    include_once('./props/header.php');
    include './database/conn.php';
    $qry = "SELECT * FROM m_submission WHERE id = 1";
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
                    <h6 class="m-0 font-weight-bold text-primary">Text Publication in Submission Menu : </h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardExample">
                    <div class="card-body">
                        <form action="./props/submissionAction.php" method="POST">
                            <textarea name="inputSubmission">
                                <?php echo $result['txt_submission'] ?>
                            </textarea>
                            <input type="submit" name="InputSubmission" value="Simpan">
                        </form>
                    </div>
                </div>
            </div>

            <!-- Collapsable Card -->
            <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardExample3" class="d-block card-header py-3" data-toggle="collapse"
                    role="button" aria-expanded="true" aria-controls="collapseCardExample">
                    <h6 class="m-0 font-weight-bold text-primary">Upload Gambar Banner Submissions</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardExample3">
                    <div class="card-body">
                        <form action="./props/uploadImageAction.php" method="POST" enctype="multipart/form-data">
                            <h1>Upload Gambar Banner Submissions</h1>
                            <input type="file" name="fileBannerSubmissions">
                            <input type="submit" name="btnFileBannerSubmissions" value="Upload">
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