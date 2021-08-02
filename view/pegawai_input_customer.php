<?php
include '../model/pegawai_database_customer.php';
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
                    <h1 class="mt-4">Tables</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="dashboard_pegawai.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Table Customer</li>
                    </ol>
                    <div class="card mb-4">

                    </div>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Data Customer
                        </div>

                        <div class="card-body">
                            <div class="d-flex flex-row-reverse">
                                <a style="text-align:center;" href="../view/pegawai_input_customer.php"><button type="button" class="btn btn-primary btn-md pull-left" data-toggle="modal" data-target="#myModal">
                                        <i class="fa fa-plus"></i> Insert Data</button></a>

                            </div>
                            <br>

                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th style="text-align:center;">No</th>
                                        <th style="text-align:center;">Kode Customer</th>
                                        <th style="text-align:center;">Nama Customer</th>
                                        <th style="text-align:center;">Usia Customer</th>
                                        <th style="text-align:center;">Alamat Customer</th>
                                        <th style="text-align:center;">Opsi</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Customer</th>
                                        <th>Nama Customer</th>
                                        <th>Usia Customer</th>
                                        <th>Alamat Customer</th>
                                        <th>Opsi</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($db->tampil_data() as $d) {
                                    ?>

                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $d['kode_customer']; ?></td>
                                            <td><?php echo $d['nama_customer']; ?></td>
                                            <td style="text-align:right;"><?php echo $d['usia_customer']; ?></td>
                                            <td><?php echo $d['alamat_customer']; ?></td>
                                            <td style="text-align:center;">
                                                <div class="d-flex">
                                                    <div class="p-2 bg-light flex-fill"><a href="../view/pegawai_edit_customer.php?kode_customer=<?php echo $d['kode_customer']; ?>&aksi=edit"><button class="btn btn-warning btn-sm">Edit</button></a></div>
                                                    <div class="p-2 bg-light flex-fill"><a href="../controller/pegawai_proses_customer.php?kode_customer=<?php echo $d['kode_customer']; ?>&aksi=hapus"><button class="btn btn-danger btn-sm">Hapus</button></a></div>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <dialog open>

                            <?php

                            $query = mysqli_query($koneksi, "SELECT max(kode_customer) as kodeTerbesar FROM customer");
                            $data = mysqli_fetch_array($query);
                            $kodecustomer = $data['kodeTerbesar'];
                            $urutan = (int) substr($kodecustomer, 3, 3);
                            $urutan++;
                            $huruf = "C";
                            $kodecustomer = $huruf . sprintf("%03s", $urutan);
                            ?>
                            <form method="post" action="../controller/pegawai_proses_customer.php?aksi=tambah">

                                <body>
                                    <div class="container">
                                        <table class="table table-striped bordered">
                                            <tbody>
                                                <tr>
                                                    <h2>
                                                        <div class="p-2 bg-dark text-white flex-fill"><i class="fa fa-plus" aria-hidden="true"></i>&emsp; Tambah Customer</div>
                                                    </h2>
                                                </tr>
                                                <tr>
                                                    <td>Kode Customer</td>
                                                    <td>
                                                        <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                                                        <input type="text" name="kode_customer" class="form-control" required="" required="required" value="<?php echo $kodecustomer ?>" readonly>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Nama Customer</td>
                                                    <td>
                                                        <input type="text" name="nama_customer" class="form-control">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Usia Customer</td>
                                                    <td><input type="number" name="usia_customer" class="form-control"></td>
                                                </tr>
                                                <tr>
                                                    <td>Alamat Customer</td>
                                                    <td><input type="text" name="alamat_customer" class="form-control"></td>
                                                </tr>
                                                <tr>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Insert Data</button>
                                                        <a href="pegawai_tampil_customer.php"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></a>
                                                    </div>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                            </form>
                        </dialog>
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
<!DOCTYPE html>
<html>

<head>
    <title>Kode Otomatis PHP dan MySQLi - www.malasngoding.com</title>
</head>

<body>





    <label>Kode Customer</label><br />
    <input type="text" name="kode_customer" required="required" value="<?php echo $kodecustomer ?>" readonly>

    <br>

    <label>Nama Customer</label><br />
    <input type="text" name="nama_customer">

    <br>

    <label>Usia Customer</label><br />
    <input type="number" name="usia_customer">


    <br>

    <label>Alamat Customer</label><br />
    <input type="text" name="alamat_customer">

    <br>
    <br>

    <input type="submit" value="Simpan">
    </form>

    <br>

    <br>


</body>

</html>