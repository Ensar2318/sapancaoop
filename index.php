<?php
require_once 'header.php';
require_once 'sidebar.php';


?>



<!-- #main -->
<main id="main" class="main">
  <section class="section">
    <div class="row">

      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Example Card</h5>
            <pre>
              <?php echo print_r($_SESSION) ?>
            </pre>

            <pre>
              <?php echo print_r($_SERVER);?>
            </pre>
          <h4>Request Uriler</h4>

          <?php echo "BaseHref : ".$baseHref;  ?>

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