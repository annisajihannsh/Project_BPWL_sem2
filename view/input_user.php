<?php
include '../model/database_user.php';
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
        <a class="navbar-brand ps-3" href="dashboard_admin.php">Admin</a>
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
                        <a class="nav-link" href="dashboard_admin.php">
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
                                <a class="nav-link" href="tampil_barang.php">Barang</a>
                                <a class="nav-link" href="tampil_customer.php">Customer</a>
                                <a class="nav-link" href="tampil_user.php">User</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseTransaksi" aria-expanded="false" aria-controls="collapseTransaksi">
                            <div class="sb-nav-link-icon"><i class="fas fa-receipt"></i></div>
                            Transaksi
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseTransaksi" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="pay.php">Transaksi Jual</a>
                                <a class="nav-link" href="laporan.php">Laporan Penjualan</a>
                                <a class="nav-link" href="income.php">Monthly Income</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseSetting" aria-expanded="false" aria-controls="collapseTransaksi">
                            <div class="sb-nav-link-icon"><i class="fa fa-cogs" aria-hidden="true"></i></div>
                            Setting
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseSetting" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="toko.php">Pengaturan Toko</a>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Admin
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Tables</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="dashboard_admin.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Table User</li>
                    </ol>
                    <div class="card mb-4">

                    </div>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Data User
                        </div>

                        <div class="card-body">
                            <div class="d-flex flex-row-reverse">
                                <a style="text-align:center;" href="../view/input_user.php"><button type="button" class="btn btn-primary btn-md pull-left" data-toggle="modal" data-target="#myModal">
                                        <i class="fa fa-plus"></i> Insert Data</button></a>

                            </div>
                            <br>

                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th style="text-align:center;">No</th>
                                        <th style="text-align:center;">Kode User</th>
                                        <th style="text-align:center;">Nama</th>
                                        <th style="text-align:center;">Username</th>
                                        <th style="text-align:center;">Password</th>
                                        <th style="text-align:center;">Level Akses</th>
                                        <th style="text-align:center;">Opsi</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode User</th>
                                        <th>Nama</th>
                                        <th>Usename</th>
                                        <th>Password</th>
                                        <th>Level Akses</th>
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
                                            <td><?php echo $d['id']; ?></td>
                                            <td><?php echo $d['nama']; ?></td>
                                            <td><?php echo $d['username']; ?></td>
                                            <td><?php echo $d['password']; ?></td>
                                            <td><?php echo $d['level']; ?></td>
                                            <td style="text-align:center;">
                                                <div class="d-flex">
                                                    <div class="p-2 bg-light flex-fill"><a href="../view/edit_user.php?id=<?php echo $d['id']; ?>&aksi=edit"><button class="btn btn-warning btn-sm">Edit</button></a></div>
                                                    <div class="p-2 bg-light flex-fill"><a href="../controller/proses_user.php?id=<?php echo $d['id']; ?>&aksi=hapus"><button class="btn btn-danger btn-sm">Hapus</button></a></div>
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
                            $query = mysqli_query($koneksi, "SELECT max(id) as kodeTerbesar FROM user");
                            $data = mysqli_fetch_array($query);
                            $kodeuser = $data['kodeTerbesar'];
                            $urutan = (int) substr($kodeuser, 3, 3);
                            $urutan++;
                            $huruf = "U";
                            $kodeuser = $huruf . sprintf("%03s", $urutan);
                            ?>

                            <form method="post" action="../controller/proses_user.php?aksi=tambah">

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
                                                    <td>Kode User</td>
                                                    <td>
                                                        <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                                                        <input type="text" name="id" required="required" class="form-control" value="<?php echo $kodeuser ?>" readonly>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Nama</td>
                                                    <td>
                                                        <input type="text" name="nama" class="form-control">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Username</td>
                                                    <td><input type="Text" name="username" class="form-control"></td>
                                                </tr>
                                                <tr>
                                                    <td>Password</td>
                                                    <td><input type="password" name="password" class="form-control"></td>
                                                </tr>
                                                <tr>
                                                    <td>Status</td>
                                                    <td>
                                                        <select class="form-control" name="level">
                                                            <option value="">--PILIH LEVEL USER--</option>
                                                            <option value="Admin">ADMIN</option>
                                                            <option value="Pegawai">PEGAWAI</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Insert Data</button>
                                                        <a href="tampil_user.php"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></a>
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