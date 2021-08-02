<?php
include '../model/database_cust.php';
$db = new database();
?>
<!doctype html>
<html lang="en">

<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Customer</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
    <!-- Favicons -->
	<link href="asset/img/logo/logo.png" rel="icon">
  <link href="asset/img/logo/logo.png" rel="logo">


	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="asset_cust/css/style.css">

</head>

<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Customer</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url(asset_cust/images/3.jpg);">
						</div>
						<div class="login-wrap p-4 p-md-5">
							<div class="d-flex">
								<div class="w-100">
									<h3 class="mb-4">Input Data</h3>
								</div>
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p>
								</div>
							</div>
							<?php
							$query = mysqli_query($koneksi, "SELECT max(kode_customer) as kodeTerbesar FROM customer");
							$data = mysqli_fetch_array($query);
							$kodecustomer = $data['kodeTerbesar'];
							$urutan = (int) substr($kodecustomer, 3, 3);
							$urutan++;
							$huruf = "C";
							$kodecustomer = $huruf . sprintf("%03s", $urutan);
							?>

							<form method="post" action="../controller/proses_cust.php?aksi=tambah" class="signin-form">

								<div class="form-group mb-3">
									<label class="label">Kode Customer</label>
									<input type="text" class="form-control" name="kode_customer" required="" required="required" value="<?php echo $kodecustomer ?>" readonly>
								</div>
								<div class="form-group mb-3">
									<label class="label">Nama</label>
									<input type="text" class="form-control" name="nama_customer" placeholder="Nama" required>
								</div>
								<div class="form-group mb-3">
									<label class="label">Usia</label>
									<input type="number" class="form-control" name="usia_customer" placeholder="Usia" required>
								</div>
								<div class="form-group mb-3">
									<label class="label">Alamat</label>
									<input type="text" class="form-control" name="alamat_customer" placeholder="Alamat" required>
								</div>
								<div class="form-group">
									<button type="submit" class="form-control btn btn-primary rounded submit px-3">Submit</button>
								</div>

							</form>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>