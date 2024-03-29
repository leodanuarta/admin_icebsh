<?php
    $title = "Not Found";
    include_once('./props/header.php');
    include './database/conn.php';

    $qry = "SELECT * FROM m_committee WHERE id = 1";
    $data = mysqli_query($conn, $qry);
    $result = mysqli_fetch_array($data);

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
                        <form action="props/committeAction.php" method="POST">
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

        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->

<?php
    include_once('props/footer.php');
?>
