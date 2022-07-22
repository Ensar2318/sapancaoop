<?php
require_once 'header.php';
require_once 'sidebar.php';


?>



<!-- #main -->
<main id="main" class="main">

  <section class="section">
    <div class="row">
      <div class="col-lg-12">
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

        <!-- Data Base Veri Silme -->
        <?php if (isset($_GET['deletecrud'])) {
          $status = $db->delete("admins", "admins_id", $_GET['id'], $_GET['file']);
          $_SESSION['errors'] = $status;
          header("location:$baseHref?err");
          exit;
        } ?>

        <!-- Data Base Veri Güncelleme -->
        <?php if (isset($_POST['updatecrud'])) {
          $status = $db->update("admins", $_POST, ['key_insert' => 'updatecrud', 'key_column' => 'admins_id']);
          $_SESSION['errors'] = $status;
          header("location:$baseHref?err");
          exit;
        } ?>

        <!-- Form Açılış Veri Güncelleme -->
        <?php if (isset($_GET['Update'])) {
          $sRow = $db->wRead("admins", 'admins_id', $_GET['id']);
          $sVal = $sRow->fetch(PDO::FETCH_ASSOC); ?>
          <div class="card">
            <a class="btn btn-sm btn-danger ekle-btn" href="<?php echo $baseHref ?>">Kapat</a>
            <div class="card-body">
              <h3 class="card-title mt-2 text-center">Admin Güncelleme</h3>

              <form class="row g-3 needs-validation align-items-center flex-column" novalidate="" method="POST">

                <div class="col-md-4">
                  <label class="form-label w-100"><?php echo empty($sVal['admins_file'])?'<b>Profil Resmi Yok!</b>':'<b>Mevcut Resim</b>'; ?></label>
                  <?php if (!empty($sVal['admins_file'])) { ?>
                    <img style="width: 200px;" src="dimg/admins/<?php echo $sVal['admins_file'] ?>">
                  <?php } ?>
                </div>

                <div class="col-md-4">
                  <label class="form-label">Profil Resmi</label>
                  <input class="form-control" type="file" name="admins_file">
                  <div class="invalid-feedback">
                    Boş Bırakılamaz.
                  </div>
                </div>

                <div class="col-md-4">
                  <label class="form-label">Ad Soyad</label>
                  <input type="text" class="form-control" required name="admins_namesurname" value="<?php echo $sVal['admins_namesurname'] ?>">
                  <div class="invalid-feedback">
                    Boş Bırakılamaz.
                  </div>
                </div>

                <div class="col-md-4">
                  <label class="form-label">Ünvan</label>
                  <input type="text" class="form-control" required name="admins_title" value="<?php echo $sVal['admins_title'] ?>">
                  <div class="invalid-feedback">
                    Boş Bırakılamaz.
                  </div>
                </div>

                <div class="col-md-4">
                  <label class="form-label">Kullanıcı Adı</label>
                  <input type="text" class="form-control" required name="admins_username" value="<?php echo $sVal['admins_username'] ?>">
                  <div class="invalid-feedback">
                    Boş Bırakılamaz.
                  </div>
                </div>

                <div class="col-md-4">
                  <label class="form-label">Şifre</label>
                  <input type="text" class="form-control" required name="admins_pass" value="<?php echo $sVal['admins_pass'] ?>">
                  <div class="invalid-feedback">
                    Boş Bırakılamaz.
                  </div>
                </div>

                <div class="col-md-4">
                  <label class="form-label">Kullanıcı Giriş Yetkisi</label>
                  <select class="form-select" required name="admins_status">
                    <option <?php echo $sVal['admins_status'] == 1 ? 'selected' : '' ?> value="1">Aktif</option>
                    <option <?php echo $sVal['admins_status'] == 0 ? 'selected' : '' ?> value="0">Pasif</option>
                  </select>
                </div>
                <input type="hidden" value="<?php echo $sVal['admins_id'] ?>" name="admins_id">

                <div class="col-md-4">
                  <button class="btn btn-success w-100" type="submit" name="updatecrud">Kaydet</button>
                </div>
              </form>

            </div>
          </div>
        <?php } ?>

        <!-- Data Base Veri Kaydetme -->
        <?php if (isset($_POST['insertcrud'])) {
          $status = $db->insert("admins", $_POST, ['key_insert' => 'insertcrud', 'key_dir' => "admins", "key_filename" => "admins_file"]);
          $_SESSION['errors'] = $status;
          header("location:$baseHref?err");
          exit;
        } ?>

        <!-- Form Açılış Veri Ekleme -->
        <?php if (isset($_GET['Insert'])) { ?>
          <div class="card">
            <a class="btn btn-sm btn-danger ekle-btn" href="<?php echo $baseHref ?>">Kapat</a>
            <div class="card-body">
              <h3 class="card-title mt-2 text-center">Admin Ekle</h3>

              <form class="row g-3 needs-validation align-items-center flex-column" novalidate="" method="POST" enctype="multipart/form-data">

                <div class="col-md-4">
                  <label class="form-label">Profil Resmi</label>
                  <input class="form-control" type="file" name="admins_file">
                  <div class="invalid-feedback">
                    Boş Bırakılamaz.
                  </div>
                </div>

                <div class="col-md-4">
                  <label class="form-label">Ad Soyad</label>
                  <input type="text" class="form-control" required name="admins_namesurname">
                  <div class="invalid-feedback">
                    Boş Bırakılamaz.
                  </div>
                </div>

                <div class="col-md-4">
                  <label class="form-label">Ünvan</label>
                  <input type="text" class="form-control" required name="admins_title">
                  <div class="invalid-feedback">
                    Boş Bırakılamaz.
                  </div>
                </div>

                <div class="col-md-4">
                  <label class="form-label">Kullanıcı Adı</label>
                  <input type="text" class="form-control" required name="admins_username">
                  <div class="invalid-feedback">
                    Boş Bırakılamaz.
                  </div>
                </div>

                <div class="col-md-4">
                  <label class="form-label">Şifre</label>
                  <input type="password" class="form-control" required name="admins_pass">
                  <div class="invalid-feedback">
                    Boş Bırakılamaz.
                  </div>
                </div>

                <div class="col-md-4">
                  <label class="form-label">Kullanıcı Giriş Yetkisi</label>
                  <select class="form-select" required name="admins_status">
                    <option value="1">Aktif</option>
                    <option value="0">Pasif</option>
                  </select>
                </div>

                <div class="col-md-4">
                  <button class="btn btn-success w-100" type="submit" name="insertcrud">Kaydet</button>
                </div>
              </form>

            </div>
          </div>
        <?php } ?>

        <?php
        $sql = $db->read("admins");
        $row = $sql->fetchAll(PDO::FETCH_ASSOC);
        ?>
        <div class="card">
          <a class="btn btn-sm btn-success ekle-btn" href="?Insert">Yeni Admin Ekle</a>
          <div class="card-body">
            <h3 class="card-title mt-2 text-center">Admin Tablosu</h3>
            <p class="text-center">Sistemde Kayıtlı olan adminler listeleniyor....</p>
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Ad Soyad</th>
                  <th scope="col">Kullanıcı Adı</th>
                  <th scope="col">Pozisyon</th>
                  <th scope="col">Durum</th>
                  <th scope="col">Düzenle</th>
                  <th scope="col"></th>

                </tr>
              </thead>
              <tbody>
                <?php foreach ($row as $key => $val) { ?>
                  <tr>
                    <th scope="row">1</th>
                    <td><?php echo $val['admins_namesurname'] ?></td>
                    <td><?php echo $val['admins_username'] ?></td>
                    <td><?php echo $val['admins_title'] ?></td>
                    <td><?php echo $val['admins_status'] ? '<button class="btn btn-xs btn-success">Aktif</button>' : '<button class="btn btn-xs btn-danger">Pasif</button>' ?></td>
                    <td><a class="text-primary clickable" href="?Update&id=<?php echo $val['admins_id'] ?>"><i class="bi bi-pencil-square"></i></a></td>
                    <td><a class="text-danger clickable delete-row" target-href='deletecrud&id=<?php echo $val['admins_id'] . "&file=" . $val['admins_file'] ?>'><i class="bi bi-trash-fill"></i></a></td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
            <!-- End Table with stripped rows -->

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