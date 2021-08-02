<!DOCTYPE html>
<html>

<head>
    <title>Halaman admin - www.malasngoding.com</title>
</head>

<body>
    <?php
    require '../controller/config.php';

    $koneksi = new database($config);
    //  admin
    include 'admin/template/header.php';
    include 'admin/template/sidebar.php';
    if (!empty($_GET['page'])) {
        include 'admin/module/' . $_GET['page'] . '/index.php';
    } else {
        include 'admin/template/home.php';
    }
    include 'admin/template/footer.php';
    // end admin
    ?>

</body>

</html>