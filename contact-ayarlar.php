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
            <div class="card-title mb-0 pb-0">
              <h4 class="text-center"> <b>Genel Ayarlar</b></h4>
            </div>
            <form class="row g-3 needs-validation mt-1 justify-content-center" novalidate="" method="POST">

              <div class="col-md-4">
                <div class="mb-4">
                  <i class="bi bi-telephone-fill"></i>
                  <label class="form-label ">Telefon Numarası (Gsm)</label>
                  <i class="bi bi-info-circle cursorpointer" title="Başında Sıfır Olmadan Yazınız"></i>
                  <input minlength="16" maxlength="16" type="text" class="form-control" name="settings_phone" value="<?php echo $val['settings_phone'] ?>">
                </div>
                <div class="mb-4">
                  <i class="bi bi-envelope-fill"></i>
                  <label class="form-label ">Email</label>
                  <input type="text" class="form-control" name="settings_email" value="<?php echo $val['settings_email'] ?>">
                </div>

                <div class="mb-4">
                  <i class="bi bi-clock-fill"></i>
                  <label class="form-label ">Çalışma Saatleri</label>
                  <input type="text" class="form-control" name="settings_workhours" value="<?php echo $val['settings_workhours'] ?>">
                </div>

                <div class="mb-4">
                  <i class="bi bi-calendar-day-fill"></i>
                  <label class="form-label ">Çalışma Günleri</label>
                  <input type="text" class="form-control" name="settings_workdays" value="<?php echo $val['settings_workdays'] ?>">
                </div>

                <div class="mb-4">
                  <i class="bi bi-geo-alt-fill"></i>
                  <label class="form-label ">İl</label>
                  <input type="text" class="form-control" name="settings_il" value="<?php echo $val['settings_il'] ?>">
                </div>

                <div class="mb-4">
                  <i class="bi bi-geo-alt-fill"></i>
                  <label class="form-label ">İlçe</label>
                  <input type="text" class="form-control" name="settings_ilce" value="<?php echo $val['settings_ilce'] ?>">
                </div>

                <div class="mb-4">
                  <i class="bi bi-geo-alt-fill"></i>
                  <label class="form-label ">Adres</label>
                  <textarea type="text" class="form-control" name="settings_adress" cols="10"><?php echo $val['settings_adress'] ?></textarea>
                </div>

                <div class="mb-4">
                  <i class="bi bi-map-fill"></i>
                  <label class="form-label ">Google I Frame Haritası </label>
                  <i class="bi bi-info-circle cursorpointer" title="Google haritalardan paylaş seçeneğinden iframe kodunun 'src' Kısmı içindeki linki yapıştırın"></i>
                  <p class="mb-0">Örnek <kod></kod>
                  </p>
                  <p style="font-size: 10px;">https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8514.58033327376!2d28.940551088692555!3d41.01740669512856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caba3bd99b48d7%3A0x64748d3db76c0bce!2sBezmialem%20Vak%C4%B1f%20University%20Hospital!5e0!3m2!1sen!2str!4v1657816952681!5m2!1sen!2str</p>
                  <textarea type="text" class="form-control" name="settings_googlemap" rows="6"><?php echo $val['settings_googlemap'] ?></textarea>
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