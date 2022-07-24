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
            <h3 class="card-title mt-2 text-center">Sitenin Genel Ayarları</h3>

            <form class="row g-3 needs-validation align-items-center flex-column" novalidate="" method="POST">

              <div class="col-md-4">
                <label class="form-label">Site Başlığı (Title)</label>
                <input type="text" class="form-control" required value="<?php echo $val['settings_title']; ?>" name="settings_title">
                <div class="invalid-feedback">
                  Boş Bırakılamaz.
                </div>
              </div>

              <div class="col-md-4">
                <label class="form-label">Site Açıklaması (Description)</label>
                <input type="text" class="form-control" required value="<?php echo $val['settings_desc']; ?>" name="settings_desc">
                <div class="invalid-feedback">
                  Boş Bırakılamaz.
                </div>
              </div>

              <div class="col-md-4">
                <label class="form-label">Site Anahtar Kelimeleri (Keywords)</label>
                <input type="text" class="form-control" value="<?php echo $val['settings_keywords']; ?>" required name="settings_keywords">
                <div class="invalid-feedback">
                  Boş Bırakılamaz.
                </div>
              </div>

              <div class="col-md-4">
                <label class="form-label">Site Yazar (Author)</label>
                <input type="text" class="form-control" value="<?php echo $val['settings_author']; ?>" required name="settings_author">
                <div class="invalid-feedback">
                  Boş Bırakılamaz.
                </div>
              </div>

              <div class="col-md-4">
                <label class="form-label">Siteyi Bakıma Al</label>
                <select class="form-select" required name="settings_bakim">
                  <option <?php echo $val['settings_bakim'] == 1 ? 'selected' : ''; ?> value="1">Bakım Modu Pasif</option>
                  <option <?php echo $val['settings_bakim'] == 0 ? 'selected' : ''; ?> value="0">Bakım Modu Aktif</option>
                </select>
              </div>
              <input type="text" hidden value="<?php echo $val['settings_id'] ?>" name="settings_id">

              <div class="col-md-4">
                <button class="btn btn-success w-100" type="submit" name="updatecrud">Kaydet</button>
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