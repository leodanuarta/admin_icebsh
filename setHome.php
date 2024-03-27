<?php
    $title = "Not Found";
    include_once('./props/header.php');
    include './database/conn.php';
    $qry = "SELECT * FROM m_home WHERE id = 1";
    $data = mysqli_query($conn, $qry);
    $result = mysqli_fetch_array($data);
    
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
                    <h6 class="m-0 font-weight-bold text-primary">Gambar Home Slider</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardExample3">
                    <div class="card-body">
                        <a data-toggle="modal" data-target="#tambahModal" class="btn btn-primary mb-5">Tambah Gambar Slider</a>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="80%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th colspan="1" style="text-align:center; vertical-align: middle;">No</th>
                                        <th colspan="3" style="text-align:center; vertical-align: middle;">Descripsi Image</th>
                                        <th colspan="7" style="text-align:center; vertical-align: middle;">Image</th>
                                        <th colspan="1" style="text-align:center; vertical-align: middle;">Hapus</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $qry = "SELECT * FROM m_image_home";
                                        $data = mysqli_query($conn, $qry);
                                        $index = 1;
                                        while($row = mysqli_fetch_array($data))
                                        {
                                        echo '<tr>
                                            <td colspan="1" style="vertical-align: middle;">'. $index++ . '</td>
                                            <td colspan="3">' . $row['desc_img'] . '</td>
                                            <td colspan="7" style="vertical-align: middle;"><img src="../' . $row['img_carousel'] . '" alt="Image" style="width:1000x;height:600px;"></td>
                                            <td colspan="1" style="vertical-align: middle;"><a data-toggle="modal" data-target="#deleteModal" class="btn btn-primary btn-delete" data-id="' . $row['id_img'] . '">Delete</a></td>
                                        </tr>';
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- /.container-fluid -->
    </div>

    <!-- End of Main Content -->

        <!-- Modal Tambah Gambar-->
        <div class="modal fade" id="tambahModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Tambah Gambar Slider</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="./props/homeAction.php" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInputJudul1">Judul Gambar</label>
                        <input type="text" class="form-control" name="txtTambahJudulGambar" id="exampleInputJudul1" aria-describedby="" pattern="[a-zA-Z0-9\s]+" title="Judul Gambar Tidak Boleh Kosong" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Upload Gambar Slider</label>
                        <p class="" style="font-size: 16px; color: red;">Ukuran Gambar Width: 1920px dan Height: 1080px</p>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="fileTambahGambar" accept="image/*" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="btnTambahModal" class="btn btn-primary">Simpan</button>
                </div>
            </form>
            </div>
        </div>
        </div>
    
    <!-- delete gambar confirm modal -->
    <form id="deleteForm" method="POST">
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Apakah Anda Yakin?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Gambar akan dihapus dari database.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <button class="btn btn-warning" type="submit" id="btnDelete" name="btnHapusGambar" data-dismiss="modal">Hapus</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <script>
        // Menambahkan event listener untuk mendengarkan klik pada tombol Delete
        document.querySelectorAll('.btn-delete').forEach(item => {
            item.addEventListener('click', event => {
                const id = item.getAttribute('data-id');
                document.getElementById('deleteModal').style.display = 'block';
                // Lakukan operasi lainnya, misalnya buka modal edit dengan ID tersebut
                // Mendapatkan formulir
                const form = document.getElementById('deleteForm');
                // Mengatur nilai action formulir dengan menyertakan ID
                form.action = './props/homeAction.php?id=' + id + '&action=delete';
                // Menambahkan event listener untuk mendengarkan klik pada tombol "Update"
                document.getElementById('btnDelete').addEventListener('click', function() {
                    // Submit form hanya jika tombol "Update" ditekan
                    form.submit();
                });
            });
        });
    </script>

<?php
    include_once('./props/footer.php');
?>