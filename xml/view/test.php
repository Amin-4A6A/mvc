
<?php include APP_DIR . '\view\partials\header.php'?>

<!-- Full Page Image Header with Vertically Centered Content -->
<header class="masthead">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12 text-center">

        <!-- <form method="post" enctype="multipart/form-data">
          XML file <input type="file" name="xmlFile">
          <br>
          <input type="submit" value="import" name="buttonImport">
        </form> -->

        <form method="post" action="Homecontroller/storeXMLData" enctype="multipart/form-data">
            <input type="file" name="xml"><br><br>
            <input type="submit" value="Import file" name="import">
        </form>

      </div>
    </div>
  </div>
</header>

<?php include APP_DIR . '\view\partials\footer.php'?>
