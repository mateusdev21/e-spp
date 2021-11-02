<?php include "template/Header.php" ?>
<div class="row">
    <div id="sidenav-col" class="col col-md-3">
        <?php include "template/Sidenav.php" ?>
    </div>
    <div id="content-col" class="col col-md-9">
        <?php include "template/Navbar.php" ?>
        <div class="container mt-4">
            <div class="row">
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div id="mahasiswa-card" class="card text-white o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fas fa-fw fa-users"></i>
                            </div>
                            <div class="mr-5">
                                Total Mahasiswa<br>
                                <strong>
                                    <h3>10</h3>
                                </strong>
                            </div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="/e-spp/mahasiswa">
                            <span class="float-left">Mahasiswa Terdaftar</span>
                            <span class="float-right">
                                <i class="fas fa-angle-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div id="transaksi-card" class="card text-white o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fas fa-fw fa-money-check-alt"></i>
                            </div>
                            <div class="mr-5">
                                Total Transaksi<br>
                                <strong>
                                    <h3>30</h3>
                                </strong>
                            </div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="/e-spp/transaksi">
                            <span class="float-left">Lihat Detail Transaksi</span>
                            <span class="float-right">
                                <i class="fas fa-angle-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div id="tunggakan-card" class="card text-white o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fas fa-fw fa-money-check-alt"></i>
                            </div>
                            <div class="mr-5">
                                Total Tunggakan<br>
                                <strong>
                                    <h3>8</h3>
                                </strong>
                            </div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="/e-spp/tunggakan">
                            <span class="float-left">Lihat Detail Tunggakan</span>
                            <span class="float-right">
                                <i class="fas fa-angle-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- <form action="api/api-handler.php" method="post">
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form> -->
    </div>
</div>

<script src="/e-spp/vendors/js/jquery-3.6.0.min.js"></script>
<script src="/e-spp/vendors/js/bootstrap.min.js"></script>
</body>

</html>