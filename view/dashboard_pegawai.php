<?php
include '../model/pegawai_database_home.php';
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
                    <h1 class="mt-4">Dashboard</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>

                    <!--main content start-->

                    <section id="main-content">
                        <section class="wrapper">

                            <div class="row">
                                <div class="card-deck">
                                    <div class="card mb-5" style="width: 75%;">
                                        <section class="content">
                                            <div class="row">
                                                <div class="w3-container">
                                                    <div class="w3-card-2" style="width:100%;">
                                                        <header class="w3-container w3-blue">
                                                            <h2><i class="fa fa-desktop"></i> Nama Barang</h2>
                                                        </header>
                                                        <table>
                                                            <?php foreach ($db->tampil_barang() as $d) { ?>
                                                                <div class="panel panel-primary">
                                                                    <div class="panel-body">
                                                                        <center>
                                                                            <h1><?php echo $d['jumlah']; ?></h1>
                                                                        </center>
                                                                    </div>
                                                                    <div class="panel-footer">
                                                                        <center>
                                                                            <h4 style="font-size:15px;font-weight:700;"><a href='pegawai_tampil_barang.php'>Tabel Barang <i class='fa fa-angle-double-right'></i></a></h4>
                                                                        </center>
                                                                    </div>
                                                                </div>
                                                            <?php
                                                            }
                                                            ?>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                        </section>
                                    </div>
                                    <div class="card mb-5" style="width: 25%;">
                                        <section class="content">
                                            <div class="row">
                                                <div class="w3-container">
                                                    <div class="w3-card-2" style="width:100%;">
                                                        <header class="w3-container w3-blue">
                                                            <h2><i class="fa fa-desktop"></i> Telah Terjual</h2>
                                                        </header>
                                                        <table>
                                                            <?php foreach ($db->tampil_jual() as $d) { ?>
                                                                <div class="panel panel-info">
                                                                    <div class="panel-body">
                                                                        <center>
                                                                            <h1><?php echo $d['jumlah']; ?></h1>
                                                                        </center>
                                                                    </div>
                                                                    <div class="panel-footer">
                                                                        <center>
                                                                            <h4 style="font-size:15px;font-weight:700;font-weight:700;"><a href='pegawai_laporan.php'>Tabel Laporan <i class='fa fa-angle-double-right'></i></a></h4>
                                                                        </center>
                                                                    </div>
                                                                </div>
                                                            <?php
                                                            }
                                                            ?>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>

                            </div>

                        </section>
                    </section>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Team 2021</div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>