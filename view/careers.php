
<?php
$careers = true;
include('included/header.php');
?>

<style>
.single_team_content h2{
    font-size:37px;
    font-weight:300;
}
</style>

<div class="col-sm-12 single_page_container">

<div class="col-sm-12 page_team_box_top_v2" style="height:500px;" data-parallax="scroll" data-image-src="<?php echo $mainUrl;?>img/careers-page2.jpg">
<img src="<?php echo $mainUrl;?>img/careers-page2.jpg" />
</div><!-- page_team_box_top -->

<div class="clear"></div>

<div class="container single_team_content" style="min-height:200px;background-color:#fff;">

 <?php $cms->ContentHTML('carrers_page_1'); ?>

 <h3>Europe</h3>


<h3 data-toggle="collapse" data-target="#job_1" style="text-decoration:underline;"><em>Account Coordinator &ndash; Dublin:</em></h3>
<div id="job_1" class="collapse">
<?php $cms->ContentHTML('carrers_job_1'); ?>
 <div class="clear" style="height:0px;"></div>
</div>


<h3 data-toggle="collapse" data-target="#job_2" style="text-decoration:underline;"><em>Account Executive &ndash; Dublin:</em></h3>
<div id="job_2" class="collapse">
<?php $cms->ContentHTML('carrers_job_2'); ?>
 <div class="clear" style="height:0px;"></div>
</div>

 <div class="clear" style="height:40px;"></div>
<h3>United States</h3>


<h3 data-toggle="collapse" data-target="#job_3" style="text-decoration:underline;"><em>Senior Account Executive &ndash; New York City:</em></h3>
<div id="job_3" class="collapse">
<?php $cms->ContentHTML('carrers_job_3'); ?>
 <div class="clear" style="height:0px;"></div>
</div>

<h3 data-toggle="collapse" data-target="#job_4" style="text-decoration:underline;"><em>Account Coordinator &ndash; New York City:</em></h3>
<div id="job_4" class="collapse">
<?php $cms->ContentHTML('carrers_job_4'); ?>
 <div class="clear" style="height:0px;"></div>
</div>




 <div class="clear" style="height:40px;"></div>

</div>

 <div class="clear" style="height:0px;"></div>

<div class="col-sm-12 box_parallax carrers_split_box" style="background-image:url('<?php echo $mainUrl;?>img_new/slider_3.jpg');"  ></div>
 <div class="clear" style="height:40px;"></div>

<div class="container single_team_content" style="min-height:200px;">

  <?php $cms->ContentHTML('carrers_page_2'); ?>


 <div class="clear" style="height:20px;"></div>

</div>



    
 <div class="clear"></div>   
</div><!-- single_page_container -->



<?php include('included/footer.php');?>



</body>
</html>