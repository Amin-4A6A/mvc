
<?php include APP_DIR . '\view\partials\header.php'?>

<!-- Full Page Image Header with Vertically Centered Content -->
<header class="masthead">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12 text-center">
        <!-- <h1 class="font-weight-light">Vertically Centered Masthead Content</h1> -->
        <!-- <p class="lead">A great starter layout for a landing page</p> -->
      </div>
    </div>
  </div>
</header>

<!-- Page Content -->
<section class="py-5">
  <div class="container">
    <h2 class="font-weight-light">Page Content</h2>
    
  </div>
  <div class="table-responsive">
        <table class="table table-striped table-bordered mt-1">
        <?php foreach($bon as $bonnetje): ?>
          <tr>
          <?php foreach($bonnetje as $key => $value): ?>
              <th><?php echo $key;?></th>
              <?php endforeach; ?>
          </tr>
          <?php break; ?>
          <?php endforeach; ?>

           
          <?php foreach($bon as $bonnetje): ?>
        <tr>
        <?php foreach($bonnetje as $key => $value): ?>
        <td> <?php echo $value;?> </td>
        <?php endforeach; ?>
        </tr>
        
        <?php endforeach; ?>
        </table>
    </div>
</section>
<?php include APP_DIR . '\view\partials\footer.php'?>
