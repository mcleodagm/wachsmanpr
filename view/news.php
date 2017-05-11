
<?php
$news = true;
include('included/header.php');
?>

<div class="col-sm-12 single_page_container">

<div class="col-sm-12 page_box_top">
<span>
<div class="clear" style="height:40px;"></div>
<h2 paw-animate="fadeIn" paw-delay="600">OUR NEWS</h2>
 <?php $cms->ContentHTML('news'); ?>
 <div class="clear" style="height:40px;"></div>
</span>

<div class="triangle"><img src="<?php echo $mainUrl;?>img/triangle.png"></div>
</div><!-- page_team_box_top -->

<div class="clear" style="height:40px;"></div>

<div class="container single_team_content" style="min-height:500px;">


<div class="col-sm-4 news_preview">
    <img src="<?php echo $mainUrl;?>img_new/blog_1.jpg"/>
    <a href="<?php echo $mainUrl;?>single_news"><h3>The Story so Far!</h3></a>
    <p>Since December 2015, Wachsman PR has had the privilege of representing some of the most distinctive and game-changing financial technology companies across the globe. Over the course of 2016, the world watched as emerging technologies such as blockchain, artificial intelligence...</p>
    <a class="more_link" href="<?php echo $mainUrl;?>single_news">MORE</a>
</div>







 <div class="clear" style="height:0px;"></div>

<div class="col-sm-12 pagination_holder">
    <a class="active" href="#">1</a>  <a href="#">2</a>  <a href="#">3</a>  <a href="#">4</a>
</div>

 <div class="clear" style="height:20px;"></div>

</div>
    
 <div class="clear"></div>   
</div><!-- single_page_container -->



<?php include('included/footer.php');?>



</body>
</html>