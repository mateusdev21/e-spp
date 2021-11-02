<?php
$page = "Mahasiswa";
include "template/Header.php";
?>
<div class="row">
    <div id="sidenav-col" class="col col-md-3">
        <?php include "template/Sidenav.php" ?>
    </div>
    <div id="content-col" class="col col-md-9">
        <?php include "template/Navbar.php" ?>
        <div class="container mt-4">
            <div class="row mb-3 p-2">
                <div class="col-md-6 p-2">
                    <h5>Tabel <?= $page ?></h5>
                </div>
                <div class="col-md-6 d-flex flex-row-reverse">
                    <button class="btn-success btn-sm" data-toggle="modal" data-target="#staticBackdrop">
                        Tambah Mahasiswa
                    </button>
                </div>
                <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Tambah Mahasiswa</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body p-4">
                                <form>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="input-nama" placeholder="Nama Lengkap">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="input-npm" placeholder="Nomor NPM">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="input-email" placeholder="Alamat Email">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input class="date-own form-control" type="text" placeholder="Tahun Angkatan">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select class="custom-select" id="input-prodi" required>
                                                    <option selected disabled value="">Program Studi</option>
                                                    <option>Teknik Informatika</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="tel" id="input-hp" name="input-hp" placeholder="Nomor HP" pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="text" id="input-alamat" name="input-alamat" placeholder="Alamat Domisili">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Kembali</button>
                                <button type="button" class="btn btn-success" value="submit">Kirim</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" width="5%">No</th>
                            <th scope="col" width="10%">NPM</th>
                            <th scope="col" width="40%">Nama</th>
                            <th scope="col" width="20%">Prodi</th>
                            <th scope="col" width="5%">Semester</th>
                            <th scope="col" width="20%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        include "api/get-data.php";
                        foreach (getMahasiswa() as $m) {
                        ?>
                            <tr>
                                <th scope="row" class="td-center-mid p-2"><?= $i ?></th>
                                <td class="td-center-mid p-2"><?= $m["npm"] ?></td>
                                <td class="p-2"><?= $m["nama"] ?></td>
                                <td class="td-center-mid p-2"><?= $m["prodi"] ?></td>
                                <td class="td-center-mid p-2"><?= $m["semester"] ?></td>
                                <td class="td-center-mid p-2">
                                    <a href="" class="btn-success btn-sm m-1" title="Edit"><i class="fas fa-pencil"></i></a>
                                    <a href="" class="btn-warning btn-sm m-1" title="Lihat Detail"><i class="fas fa-eye"></i></a>
                                    <a href="" class="btn-danger btn-sm m-1" title="Hapus"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php
                            $i++;
                        };
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="/e-spp/vendors/js/jquery-3.6.0.min.js"></script>
<script src="/e-spp/vendors/js/bootstrap.min.js"></script>
<script src="/e-spp/vendors/js/bootstrap-datepicker.min.js"></script>
<script>
    $(document).ready(function() {
        $('.date-own').datepicker({
            minViewMode: 2,
            format: 'yyyy'
        });

        $("[data-dismiss='modal']").on("click", function() {
            $("input").val("");
        });
    });
</script>
</body>

</html>