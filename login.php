<!-- panggil koneksi database -->
<?php include "config/koneksi.php" ?>

<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Login RM Sederhana</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bootstrap/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <!-- <link rel="stylesheet" href="../../plugins/iCheck/square/blue.css"> -->

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-box-body">
      <!-- judul login -->
      <div style="text-align: center;">
        <h4><strong>SISTEM INFORMASI PEMESANAN MAKANAN</strong></h4>
        <h5><strong>Rumah Makan Sederhana</strong></h5>
        <p class="login-box-msg">Login Aplikasi</p>
      </div>
      <!-- form login -->
      <form action="page/cek_login.php" method="post">
        <!-- masukan username -->
        <div class="form-group has-feedback">
          <input type="text" name="username" class="form-control" placeholder="Masukan Username" required>
          <span class="fa fa-user form-control-feedback"></span>
        </div>
        <!-- masukan password -->
        <div class="form-group has-feedback">
          <input type="password" name="pass" class="form-control" placeholder="Masukan Password" required>
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <!-- tombol login -->
        <div style="padding-left:50px; padding-right: 50px;;text-align: center;">
          <button type="submit" class="btn btn-success btn-block"><i class="fa fa-sign-in"
              style="padding-right: 5px;"></i>Login</button>
          <a href="register.php" class="btn btn-block btn-primary">
            <i class="fa fa-user-plus" style="padding-right: 5px;"></i> Daftar Sekarang
          </a>
        </div>
      </form>
    </div><!-- /.login-box-body -->
  </div><!-- /.login-box -->

  <!-- jQuery 2.1.4 -->
  <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
  <!-- Bootstrap 3.3.5 -->
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <!-- iCheck -->
  <script src="plugins/iCheck/icheck.min.js"></script>

  <!--  -->
  <script>
    $(function () {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' // optional
      });
    });
  </script>

</body>

</html>