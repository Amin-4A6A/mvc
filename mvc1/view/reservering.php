<?php include APP_DIR . '\view\partials\header.php'?>


<div class="container">
            <div class="row">

                <div class="col-12">
                <div class="table-responsive">
                <table class="table table-striped table-bordered mt-1">
                <?php foreach($reservering as $reserveringtje): ?>
                <tr>
                <?php foreach($reserveringtje as $key => $value): ?>
                    <th><?php echo $key;?></th>
                    <?php endforeach; ?>
                </tr>
                <?php break; ?>
                <?php endforeach; ?>

                
                <?php foreach($reservering as $reserveringtje): ?>
                <tr>
                <?php foreach($reserveringtje as $key => $value): ?>
                <!-- <?php var_dump($value) ?> -->
            
                 <?php  if ($key === 'tafel')  { ?>
                    <td>
                        <a href="<?= HTTP_DIR ?>/HomeController/bestelling/<?= $reserveringtje['reservering_id'];?>">
                        <!-- <td><a class="btn btn-primary" href="?op=bestelling&r_id=<?= $r['r_id'];?>"><i class="fas fa-ticket-alt"></i></a></td> -->


                            <?php echo $value;
                            ?>

                        </a>
                    </td>

                 <?php } else { ?>
                    <td> <?php echo $value;?> </td>
                 <?php }?>
                
                                       
                    
                    <?php endforeach; ?>
                    
                </tr>
                
                <?php endforeach; ?>
                </table>
            </div>
        </div>

    </div>

</div>


<?php include APP_DIR . '\view\partials\footer.php'?>

