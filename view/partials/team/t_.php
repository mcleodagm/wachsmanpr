<?php
include('included/header.php');
?>

<div class="clear"></div>

<div class="col-sm-12 single_page_container">

<div class="col-sm-12 page_team_box_top_v2" data-parallax="scroll" data-image-src="<?php echo $mainUrl;?>img/team/<?php echo $id;?>_bg.jpg">
<img src="<?php echo $mainUrl;?>img/team/<?php echo $id;?>_bg.jpg" />
</div><!-- page_team_box_top -->

<div class="clear"></div>

<div class="container single_team_content">
 <?php $cms->ContentHTML('t_single_'.$id); ?>


 <div class="clear" style="height:40px;"></div>
<a href="<?php echo $link;?>" class="social_link"><div class="social_link_iner"><i class="fa fa-linkedin-square" aria-hidden="true"></i> <?php echo $name;?> LinkedIn</div></a>  
<a href="<?php echo $mainUrl;?>team" class="btn btn-primary pw_button" style="min-width:100px;margin-left:40px;"><span><i class="fa fa-arrow-left" aria-hidden="true" style="margin-left:0px;margin-right:10px;"></i> BACK</span></a>



</div>
    
 <div class="clear"></div>   
</div><!-- single_page_container -->



<?php include('included/footer.php');?>



</body>
</html>