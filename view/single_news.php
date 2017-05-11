
<?php
// $careers = true;
include('included/header.php');
?>

<div class="col-sm-12 single_page_container">

<div class="col-sm-12 page_single_news_top" style="background-image:url('<?php echo $mainUrl;?>img_new/blog_1.jpg');'">
<img src="<?php echo $mainUrl;?>img_new/blog_1.jpg" />
</div><!-- page_team_box_top -->

<div class="clear"></div>

<div class="col-sm-12 col-md-8 col-sm-offset-0 col-md-offset-2 single_news_content" style="min-height:500px;">
 <?php $cms->ContentHTML('single_news'); ?>

 <div class="clear" style="height:40px;"></div>
<div style="text-align:center;">
<a href="<?php echo $mainUrl;?>news" class="btn btn-primary pw_button" style="min-width:100px;"><span><i class="fa fa-arrow-left" aria-hidden="true" style="margin-left:0px;margin-right:10px;"></i> BACK</span></a>
</div>

 <div class="clear" style="height:40px;"></div>

</div>
    
 <div class="clear"></div>   
</div><!-- single_page_container -->



<?php include('included/footer.php');?>



</body>
</html>