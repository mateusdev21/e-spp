<?php
$page = "Transaksi";
include "template/Header.php";
?>
<div class="row">
    <div id="sidenav-col" class="col col-md-3">
        <?php include "template/Sidenav.php" ?>
    </div>
    <div id="content-col" class="col col-md-9">
        <?php include "template/Navbar.php" ?>
        <div class="container mt-4">
            <div class="row">
                <h5>Tabel <?= $page ?></h5>
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