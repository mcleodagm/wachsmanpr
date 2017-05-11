<?php
$home = true;
include('included/header.php');
?>



<div class="col-sm-12 slider_holder">
   <?php include('view/partials/slider.php');?>
</div>

  <div id="about_us" class="clear" style="height:40px;"></div>



<div class="col-sm-12 box_message">
  <div class="box_message_iner">
  <h2 paw-animateXXX="fadeInUp" paw-delayXXX="400">ABOUT US</h2>
  <div class="clear" style="height:20px;"></div>
  <div paw-animateXXX="fadeInUp" paw-delayXXX="600"><?php $cms->ContentHTML('home_1'); ?>  </div>
  <div class="clear" style="height:20px;"></div>
  <div  paw-animateXXX="fadeInUp" paw-delayXXX="600">
  <a href="<?php echo $mainUrl;?>team" class="btn btn-primary pw_button">
   <span>LEARN MORE <i class="fa fa-arrow-right" aria-hidden="true"></i></span>
   </a>
  </div>
   
  </div>
</div>



<div class="col-sm-12 box_parallax" data-parallax="scroll" data-image-src="<?php echo $mainUrl;?>img_new/ws.jpg"></div>

<style>


  
</style>


<div class="col-sm-12 box_front box_3">
  <div class="box_front_iner">
  <h2 paw-animateXXX="fadeInUp" paw-delayXXX="400">OUR SERVICES</h2>
  <div class="clear" style="height:40px;"></div>


<div class="col-xs-6 col-sm-3 front_box front_box_services color_1" paw-animateXXX="zoomIn" paw-delayXXX="400">
  <san>
    <img src="<?php echo $mainUrl;?>img/icn/1.png">
    <h3 style="text-transform: uppercase;">EXPAND <br />BRANDS</h3>
  </san>
  </div><!-- front_box -->


<div class="col-xs-6 col-sm-3 front_box front_box_services color_2" paw-animateXXX="zoomIn" paw-delayXXX="300">
  <san>
    <img src="<?php echo $mainUrl;?>img/icn/2.png">
    <h3 style="text-transform: uppercase;">MEDIA <br />RELATIONS</h3>
  </san>
  </div><!-- front_box -->

<div class="col-xs-6 col-sm-3 front_box front_box_services  color_1" paw-animateXXX="zoomIn" paw-delayXXX="300">
  <san>
    <img src="<?php echo $mainUrl;?>img/icn/3.png">
    <h3 style="text-transform: uppercase;">Reputation <br />Management</h3>
  </san>
  </div><!-- front_box -->

<div class="col-xs-6 col-sm-3 front_box front_box_services   color_2" paw-animateXXX="zoomIn" paw-delayXXX="400">
  <san>
    <img src="<?php echo $mainUrl;?>img/icn/crisis.png">
    <h3 style="text-transform: uppercase;">Crisis <br />Communications</h3>
  </san>
  </div><!-- front_box -->

 <div class="clear" style="height:60px;"></div>
 <div paw-animateXXX="fadeInUp" paw-delayXXX="600">
  <a href="<?php echo $mainUrl;?>about" class="btn btn-primary pw_button">LEARN MORE <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
 </div>
  
  </div>
</div>



<div class="col-sm-12 box_front box_4">
  <div class="box_front_iner">
  <h2 paw-animateXXX="fadeInUp" paw-delayXXX="400">EXPLORE OUR WORK</h2>
  <div class="clear" style="height:40px;"></div>
  <?php include('partials/work_front.php');?>
 <div class="clear" style="height:60px;"></div>
 <div paw-animateXXX="fadeInUp" paw-delayXXX="400">
   <a href="<?php echo $mainUrl;?>clients" class="btn btn-primary pw_button">EXPLORE <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
  </div>
  </div>
</div>

<!--
<div class="col-sm-12 box_parallax" data-parallax="scroll" data-image-src="<?php echo $mainUrl;?>img/new_0095.jpg"></div>

<style>
	.box_parallax{
		background-image:url('<?php echo $mainUrl;?>img/new_0095a.jpg');
		background-position:center;
		background-size:cover;
		height:550px;
	}
</style>
<div class="col-sm-12 box_parallax"></div>
-->
<div class="col-sm-12 box_parallax" data-parallax="scroll" data-image-src="<?php echo $mainUrl;?>img/new_0095a.jpg" style="min-height:550px;">
<img scr="<?php echo $mainUrl;?>img/new_0095a.jpg" style="min-height:550px;" />
</div>
<!-- careers-parrallax.jpg -->
<div class="col-sm-12 box_message">
  <div class="box_message_iner">
  <h2 paw-animateXXX="fadeInUp" paw-delayXXX="400">JOIN US</h2>
  <div class="clear" style="height:20px;"></div>
  <div paw-animateXXX="fadeInUp" paw-delayXXX="500">
  <?php $cms->ContentHTML('home_2'); ?> 
  </div>

<!--
  <div class="clear" style="height:60px;"></div>
<h2>INTERNSHIPS</h2>
  <div class="clear" style="height:20px;"></div>
  <?php $cms->ContentHTML('home_4'); ?> 
  -->
  <div class="clear" style="height:60px;"></div>
  <div paw-animateXXX="fadeInUp" paw-delayXXX="600">
   <a href="<?php echo $mainUrl;?>careers" class="btn btn-primary pw_button"><span>LEARN MORE <i class="fa fa-arrow-right" aria-hidden="true"></i></span></a>
</div>
   <div class="clear" style="height:20px;"></div>  
  </div>

</div>



<div class="clear"></div>



<?php include('included/footer.php');?>



</body>
</html>
