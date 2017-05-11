
<?php
$clients = array(1,2,3,4,5,6,7,8);
foreach($clients as $client){?>

    <div class="col-xs-6 col-sm-3 front_box front_box_clients color_1" style="background-image:url('<?php echo $mainUrl;?>img/clients/<?php echo $client;?>.png');">
    <img src="<?php echo $mainUrl;?>img/clients/<?php echo $client;?>.png" style="opacity:0;">
  </div><!-- front_box -->

<?php }?>


