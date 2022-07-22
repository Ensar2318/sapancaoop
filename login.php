<?php
require_once 'netting/clas.crud.php';
$db = new crud();

if (isset($_SESSION['admins'])) {
  header("location:index");
  exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pages / Login - Codderman</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

  <?php

  ?>


  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Admin Panele Giriş Yapınız</h5>
                    <!-- <p class="text-center small">Giriş yapmak için kullanıcı adınızı ve şifrenizi giriniz.</p> -->
                    <?php if (isset($_POST['admins_login'])) {
                      if (isset($_POST['remember'])) {
                        $status = $db->adminsLogin($_POST['admins_username'], $_POST['admins_pass'], TRUE);
                      } else {
                        $status = $db->adminsLogin($_POST['admins_username'], $_POST['admins_pass']);
                      }
                    ?>
                      <?php if ($status['status']) {
                        header("location:index");
                      } else { ?>
                        <p class="text-center text-danger small"><?php echo $status['err'] ?></p>
                      <?php } ?>
                    <?php } ?>
                  </div>

                  <form class="row g-3 needs-validation" novalidate method="POST">

                    <div class="col-12">
                      <label class="form-label">Kullanıcı Adı</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text">@</span>
                        <input type="text" name="admins_username" class="form-control" required>
                        <div class="invalid-feedback">Lütfen kullanıcı adı giriniz.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label class="form-label">Şifre</label>
                      <input type="password" name="admins_pass" class="form-control" required >
                      <div class="invalid-feedback">Lütfen şifre giriniz.</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember">
                        <label class="form-check-label" for="rememberMe">Beni Hatırla</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit" name="admins_login">Login</button>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>