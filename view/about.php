<?php
$about = true;
include('included/header.php');
?>


<style>
	
.single_testimonial_iner p {

    font-size: 20px;
}

.single_testimonial_iner p{
	text-align:center;
}
</style>


<div class="clear"></div>

<div class="col-sm-12 single_page_container">

<div class="col-sm-12 page_box_top">
    <div class="page_box_top_iner">
      <h2 paw-animate="fadeIn" paw-delay="600" class="title_bold">ABOUT US</h2> 
    
    <?php $cms->ContentHTML('about'); ?>
    </div>
<div class="triangle"><img src="<?php echo $mainUrl;?>img/triangle.png"></div>
</div><!-- page_box_top -->


<div class="col-sm-12 tabs_holder">
    <?php include('view/partials/box_3.php');?>
    <div class="clear"></div>
</div>
    
 <div class="clear"></div>   

<div class="testimonials_slider_container col-sm-12" style="min-height:400px;">
    <h2>TESTIMONIALS</h2>
    <div class="clear" style="height:20px;"></div>
<?php include('view/partials/testimonials.php');?>
</div>




</div><!-- single_page_container -->



<div class="clear"></div>



<?php include('included/footer.php');?>



</body>
</html>