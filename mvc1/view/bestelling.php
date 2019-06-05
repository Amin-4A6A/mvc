<?php include APP_DIR . '\view\partials\header.php'?>


<div class="container">
            <div class="row">

                <div class="col-6">
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
        </div>


        <div class="col-6">
        <?php foreach($card as $cards): ?>
       <a href="<?= HTTP_DIR ?>/HomeController/addtobon/<?= $cards['menuitemcode'];?>/<?= $cards['tafel'];?>/<?= $cards['reservering_id'];?>"> 
       <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"> <?php echo $cards['menuitem'];?></h5>
                <h6 class="card-subtitle mb-2 text-muted"> <?php echo "€" . $cards['prijs'] . "</b>" ;?></h6>
            </div>
            </div>
            </a>
            <br>
    <?php endforeach; ?>

        </div>

    </div>

</div>


<?php include APP_DIR . '\view\partials\footer.php'?>

