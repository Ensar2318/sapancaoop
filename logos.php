<?php
require_once 'header.php';
require_once 'sidebar.php';

if (isset($_POST['updatecrud'])) {
  $status = $db->update("settings", $_POST, ['key_insert' => 'updatecrud', 'key_column' => 'settings_id', 'key_dir' => 'settings', 'key_filename' => 'settings_logo', 'key_oldimage' => 'old_image']);
  $_SESSION['errors'] = $status;
  header("location:$baseHref?err");
  exit;
}
if (isset($_POST['updateblackcrud'])) {
  $status = $db->update("settings", $_POST, ['key_insert' => 'updateblackcrud', 'key_column' => 'settings_id', 'key_dir' => 'settings', 'key_filename' => 'settings_blacklogo', 'key_oldimage' => 'old_image']);
  $_SESSION['errors'] = $status;
  header("location:$baseHref?err");
  exit;
}
if (isset($_POST['update_favicon'])) {
  $status = $db->update("settings", $_POST, ['key_insert' => 'update_favicon', 'key_column' => 'settings_id', 'key_dir' => 'settings', 'key_filename' => 'settings_favicon', 'key_oldimage' => 'old_image']);
  $_SESSION['errors'] = $status;
  header("location:$baseHref?err");
  exit;
}
$val = $db->read("settings")->fetch(PDO::FETCH_ASSOC);
?>



<!-- #main -->
<main id="main" class="main">

  <!-- Hata Gösterim Kısmı -->
  <?php if (isset($_GET['err'])) {
    $status = $_SESSION['errors']['status'];
    $message = $_SESSION['errors']['err']; ?>
    <div class="alert <?php echo $status ? 'alert-success' : 'alert-danger'; ?> alert-dismissible fade show" role="alert">
      <?php echo $message ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php } ?>
  <!-- Hata Gösterim Kısmı -->

  <section class="section">
    <div class="row">

      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <div class="card-title mb-0 pb-0">
              <h4 class="text-center"> <b>Site Logo ve İconları</b></h4>
            </div>

            <form class="row g-3 needs-validation mt-1 justify-content-center mb-5" novalidate="" method="POST" enctype="multipart/form-data">
              <div class="col-md-4">

                <div class="mb-4">
                  <div class="col-md-12 d-flex flex-column align-items-center">
                    <label class="form-label">
                      <h2><b>Beyaz Arkaplan İken Logo</b></h2>
                    </label>
                    <img width="200" class="mb-4" src="dimg/settings/<?php echo $val['settings_logo'] ?>">

                  </div>

                  <div class="col-md-12">
                    <input class="form-control" type="file" name="settings_logo">
                  </div>
                </div>

                <input type="hidden" value="<?php echo $val['settings_logo'] ?>" name="old_image">
                <input type="hidden" value="<?php echo $val['settings_id'] ?>" name="settings_id">
                <button class="btn btn-success w-100 mb-3" name="updatecrud">Güncelle</button>

              </div>
            </form>


            <form class="row g-3 needs-validation mt-1 justify-content-center mb-5" novalidate="" method="POST" enctype="multipart/form-data">
              <div class="col-md-4">

                <div class="mb-4">
                  <div class="col-md-12 d-flex flex-column align-items-center">
                    <label class="form-label">
                      <h2><b>Siyah Arkaplan İken Logo</b></h2>
                    </label>
                    <div class="bg-dark w-100 d-flex justify-content-center align-items-center" style="height: 240px;">
                      <?php if (!empty($val['settings_blacklogo'])) { ?>
                        <img width="200" src="dimg/settings/<?php echo $val['settings_blacklogo'] ?>">
                      <?php } else { ?>
                        <h2 class="text-white mb-0"><b>Resim Yok</b></h2>
                      <?php } ?>
                    </div>
                  </div>
                  <div class="col-md-12 mt-4">
                    <input class="form-control" type="file" name="settings_blacklogo">
                  </div>
                </div>

                <input type="hidden" value="<?php echo $val['settings_blacklogo'] ?>" name="old_image">
                <input type="hidden" value="<?php echo $val['settings_id'] ?>" name="settings_id">
                <button class="btn btn-success w-100 mb-3" name="updateblackcrud">Güncelle</button>

              </div>
            </form>

            <form class="row g-3 needs-validation mt-1 justify-content-center" novalidate="" method="POST" enctype="multipart/form-data">

              <div class="col-md-4">

                <div class="mb-4">
                  <div class="col-md-12 d-flex flex-column">
                    <label class="form-label">
                      <h2><b>Fav İcon</b></h2>
                    </label>
                    <img width="200" class="mb-4" src="dimg/settings/<?php echo $val['settings_favicon'] ?>">

                  </div>

                  <div class="col-md-12">
                    <input class="form-control" type="file" name="settings_favicon">
                  </div>
                </div>
                <input type="hidden" value="<?php echo $val['settings_favicon'] ?>" name="old_image">
                <input type="hidden" value="<?php echo $val['settings_id'] ?>" name="settings_id">
                <button class="btn btn-success w-100 mb-3" name="update_favicon">Güncelle</button>

              </div>
            </form>
          </div>
        </div>
      </div>

    </div>
  </section>

</main>
<!-- End #main -->

<?php
require_once 'footer.php';
?>