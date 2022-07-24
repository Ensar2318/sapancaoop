<?php
require_once 'header.php';
require_once 'sidebar.php';

if (isset($_POST['updatecrud'])) {
  $status = $db->update("settings", $_POST, ['key_insert' => 'updatecrud', 'key_column' => 'settings_id']);
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
            <h3 class="card-title mt-2 text-center">Sosal Medyalar </h3>
            <button class="change-cols btn btn-warning">Sütunları Büyüt</button>
            <form class="row g-3 needs-validation mt-1 justify-content-center" novalidate="" method="POST">

              <div class="col-md-4 barier">
                <div class="mb-4">
                  <i class="bi bi-instagram"></i>
                  <label class="form-label ">İnstagram</label>
                  <div class="d-flex">
                    <input type="text" class="form-control input-clear" name="settings_instagram" value="<?php echo $val['settings_instagram'] ?>">
                    <button class="clear-btn">Temizle</button>
                  </div>
                </div>

                <div class="mb-4">
                  <i class="bi bi-twitter"></i>
                  <label class="form-label ">Twitter</label>
                  <div class="d-flex">
                    <input type="text" class="form-control input-clear" name="settings_twitter" value="<?php echo $val['settings_twitter'] ?>">
                    <button class="clear-btn">Temizle</button>
                  </div>
                </div>

                <div class="mb-4">
                  <i class="bi bi-pinterest"></i>
                  <label class="form-label ">Pinterest</label>
                  <div class="d-flex">
                    <input type="text" class="form-control input-clear" name="settings_pinterest" value="<?php echo $val['settings_pinterest'] ?>">
                    <button class="clear-btn">Temizle</button>
                  </div>
                </div>

                <div class="mb-4">
                  <i class="bi bi-facebook"></i>
                  <label class="form-label ">Facebook</label>
                  <div class="d-flex">
                    <input type="text" class="form-control input-clear" name="settings_facebook" value="<?php echo $val['settings_facebook'] ?>">
                    <button class="clear-btn">Temizle</button>
                  </div>
                </div>

                <div class="mb-4">
                  <i class="bi bi-linkedin"></i>
                  <label class="form-label ">Linkedin</label>
                  <div class="d-flex">
                    <input type="text" class="form-control input-clear" name="settings_linkedin" value="<?php echo $val['settings_linkedin'] ?>">
                    <button class="clear-btn">Temizle</button>
                  </div>
                </div>
                <input type="hidden" value="<?php echo $val['settings_id'] ?>" name="settings_id">
                <button class="btn btn-success w-100 mb-3" name="updatecrud">Güncelle</button>

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