<?php
    $title = "Not Found";
    include_once('./props/header.php');
    include './database/conn.php';
    $qry = "SELECT * FROM m_callforpaper WHERE id = 1";
    $data = mysqli_query($conn, $qry);
    $result = mysqli_fetch_array($data);

    mysqli_close($conn);
    
?>

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Collapsable Card -->
            <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse"
                    role="button" aria-expanded="true" aria-controls="collapseCardExample">
                    <h6 class="m-0 font-weight-bold text-primary">Text Call For Paper Pages</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardExample">
                    <div class="card-body">
                        <form action="./props/copAction.php" method="POST">
                            <textarea id="editor" name="inputCOP">
                            </textarea>
                            <br>
                            <!-- <textarea style="width: auto;" name="inputCOP" id="editor" class="quill-editor">
                                <?php echo $result['txt_cop'] ?>
                            </textarea> -->
                            <br>
                            <input type="submit" name="InputCOP" value="Simpan">
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
    include('./props/richText.php');

?>