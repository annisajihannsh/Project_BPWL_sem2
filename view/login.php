<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Kedai Kopi Kulo</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="asset/img/logo/logo.png" rel="icon">
    <link href="asset/img/logo/logo.png" rel="logo">
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="asset/img/logo/logo.png" rel="icon">
    <link href="asset/img/logo/logo.png" rel="logo">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- MATERIAL DESIGN ICONIC FONT -->
    <link rel="stylesheet" href="asset_login/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <?php
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "gagal") {
            echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
        }
    }
    ?>

    <!-- STYLE CSS -->
    <link rel="stylesheet" href="asset_login/css/style.css">
</head>

<body>

    <div class="wrapper" style="background-image: url('asset_login/images/s1.jpg');">
        <div class="inner">
            <form action="../controller/cek_login.php" method="post">
                <h3>Login Form</h3>
                <div class="form-group">
                    <div class="form-wrapper">
                        <label for="">Username:</label>
                        <div class="form-holder">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="text" name="username" class="form_control" placeholder="Username" required="required">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-wrapper">
                        <label for="">Password:</label>
                        <div class="form-holder">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input type="password" name="password" class="form_control" placeholder="********" required="required">
                        </div>
                    </div>
                </div>

                <div class="form-end">
                    <div class="checkbox">
                        <label>

                        </label>
                    </div>
                    <div class="button-holder">
                        <button>Register Now</button>
                    </div>

                </div>
            </form>
        </div>
    </div>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>