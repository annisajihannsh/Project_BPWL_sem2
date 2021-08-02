<?php
include '../model/pegawai_database_barang.php';
$db = new database();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Kedai Kopi Kulo</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="asset/img/logo/logo.png" rel="icon">
    <link href="asset/img/logo/logo.png" rel="logo">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="dashboard_pegawai.php">Pegawai</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="../controller/logout.php">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Home</div>
                        <a class="nav-link" href="dashboard_pegawai.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Data</div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseTables" aria-expanded="false" aria-controls="collapseTables">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Tables
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseTables" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="pegawai_tampil_barang.php">Barang</a>
                                <a class="nav-link" href="pegawai_tampil_customer.php">Customer</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseTransaksi" aria-expanded="false" aria-controls="collapseTransaksi">
                            <div class="sb-nav-link-icon"><i class="fas fa-receipt"></i></div>
                            Transaksi
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseTransaksi" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="pegawai_pay.php">Transaksi Jual</a>
                                <a class="nav-link" href="pegawai_laporan.php">Laporan Penjualan</a>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Pegawai
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>

                <div class="container-fluid px-4">

                    <div class="card mb-4">
                        <div>
                            <a style="text-align:center;" href="../view/pegawai_tampil_barang.php"><button type="button" class="btn btn-primary btn-md pull-right" data-toggle="modal" data-target="#myModal">
                                    <i class="fa fa-chevron-left" aria-hidden="true"></i> Back</button></a>


                            <br>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Edit Barang
                        </div>
                        <div class="container">
                            <form action="../controller/pegawai_proses_barang.php?aksi=update" method="post">
                                <?php foreach ($db->edit($_GET['id']) as $data) { ?>
                                    <table class="table table-striped bordered">
                                        <tbody>
                                            <tr>
                                                <td>Kode Produk</td>
                                                <td>
                                                    <input type="number" name="id" value="<?php echo $data['id'] ?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Nama Produk</td>
                                                <td>
                                                    <input type="text" name="nama_produk" class="form-control" value="<?php echo $data['nama_produk'] ?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Jenis</td>
                                                <td>
                                                    <select class="form-control" name="jenis" value="<?php echo $data['jenis'] ?>">
                                                        <option value="">--PILIH JENIS MENU--</option>
                                                        <option value="Coffee">COFFEE</option>
                                                        <option value="Non-Coffee">NON-COFFEE</option>
                                                        <option value="Hot Coffee">HOT COFFEE</option>
                                                        <option value="Purin Series">PURIN SERIES</option>
                                                        <option value="Extra">EXTRA</option>
                                                        <option value="Kulo Literan">KULO LITERAN</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Harga</td>
                                                <td><input type="number" name="harga" class="form-control" value="<?php echo $data['harga'] ?>"></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>
                                                    <button type="submit" class="btn btn-primary">Update Data</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                <?php } ?>
                            </form>
                        </div>

                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Team 4 2021</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>