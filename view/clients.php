<?php
$clients = true;
include('included/header.php');
?>

<style>
    @media screen and (max-width: 980px) {
    .image__cell {
        border: none;
    }
}
</style>

<div class="clear"></div>

<div class="col-sm-12 single_page_container">

<div class="col-sm-12 page_box_top">
    <div class="page_box_top_iner">
    <h2 paw-animate="fadeIn" paw-delay="600">OUR CLIENTS</h2>
    <div class="clear" style="height:20px;"></div>
    <?php $cms->ContentHTML('clients'); ?>
    </div>
<div class="triangle"><img src="<?php echo $mainUrl;?>img/triangle.png"></div>
</div><!-- page_box_top -->


<div class="col-sm-12 tabs_holder">
    <?php include('view/partials/_clients.php');?>
    <div class="clear"></div>
</div>
    
 <div class="clear"></div>   
</div><!-- single_page_container -->



<div class="clear"></div>



<?php include('included/footer.php');?>



</body>
</html>