<?php
require_once 'settings.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $setting['settings_title'] ?></title>
    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="admin/dimg/settings/<?php echo $setting['settings_favicon'] ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="admin/dimg/settings/<?php echo $setting['settings_favicon'] ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="admin/dimg/settings/<?php echo $setting['settings_favicon'] ?>">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!-- Other Meta Tags -->
    <meta name="description" content="<?php echo $setting['settings_desc'] ?>">
    <meta name="keywords" content="<?php echo $setting['settings_keywords'] ?>">
    <meta name="author" content="<?php echo $setting['settings_author'] ?>">
    <meta name="copyright" content="<?php echo $setting['settings_author'] ?>" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
    <div class="header-text">
        <div class="left">
            <div class="cap pe-4">
                <i class="bi bi-telephone"></i>
                <p>
                    +<?php echo $setting['settings_phone'] ?>
                </p>
            </div>
            <div class="cap d-md-flex d-none">
                <i class="bi bi-geo-alt"></i>
                <p> Şükriye mah. şükriye cad. no 11, 54600 Sapanca/Sakarya</p>
            </div>

        </div>
        <div class="right">
            <div class="social-medias">
                <?php if (!empty($setting['settings_facebook'])) { ?>
                    <a href="<?php echo $setting['settings_facebook'] ?>"><i class="bi bi-facebook"></i></a>
                <?php } ?>
                <?php if (!empty($setting['settings_twitter'])) { ?>
                    <a href="<?php echo $setting['settings_twitter'] ?>"><i class="bi bi-twitter"></i></a>
                <?php } ?>
                <?php if (!empty($setting['settings_instagram'])) { ?>
                    <a href="<?php echo $setting['settings_instagram'] ?>"><i class="bi bi-instagram"></i></a>
                <?php } ?>
                <?php if (!empty($setting['settings_linkedin'])) { ?>
                    <a href="<?php echo $setting['settings_linkedin'] ?>"><i class="bi bi-linkedin"></i></a>
                <?php } ?>
                <?php if (!empty($setting['settings_pinterest'])) { ?>
                    <a href="<?php echo $setting['settings_pinterest'] ?>"><i class="bi bi-pinterest"></i></a>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- Header Start -->
    <header id="header">
        <div class="logo">
            <a class="lwhite" href="index.html"><img src="admin/dimg/settings/<?php echo $setting['settings_logo'] ?>" class="img-fluid"></a>
            <a class="lblack" href="index.html"><img src="admin/dimg/settings/<?php echo $setting['settings_blacklogo'] ?>" class="img-fluid"></a>
        </div>

        <div class="nav-button d-flex d-lg-none">
            <span>Menü</span>
            <i class='bx bx-menu'></i>
        </div>
        <nav class="nav">
            <ol class="navbar">
                <div class="closenav d-flex d-lg-none""> <i class=" bi bi-x close-btn"></i>
                </div>
                <li> <a class="nav-link active" href="index.html">Anasayfa</a></li>
                <li> <a class="nav-link" href="rooms.html">Odalar</a></li>
                <li> <a class="nav-link" href="restourant.html">Yeme & İÇme</a></li>
                <li> <a class="nav-link" href="hakkimizda.html">Hakkımızda</a></li>
                <li> <a class="nav-link" href="contact.html">İLETİŞİM</a></li>
            </ol>
        </nav>
    </header>
    <!-- Header End -->