<?php
$contact = true;
include('included/header.php');
?>



<div class="col-sm-12 single_page_container">

<div class="col-sm-12 page_contact_box_top" style="background-image:url('<?php echo $mainUrl;?>img/contact_page.jpg');">
<img src="<?php echo $mainUrl;?>img/contact_page.jpg" />
</div><!-- page_team_box_top -->

<div class="clear"></div>

<div class="container single_team_content" style="min-height:500px;">
 <?php // $cms->ContentHTML('careers_page'); ?>

 <div class="col-sm-6 contact_page_column contac_page_column_left">
 <h2>OFFICES</h2>
<div class="clear" style="height:20px;"></div>
<div class="col-sm-6 contact_page_column_iner">
<?php  $cms->ContentHTML('contact_1'); ?>
</div>
<div class="col-sm-6 contact_page_column_iner">
<?php  $cms->ContentHTML('contact_2'); ?>
</div>
 <div class="clear" style="height:60px;"></div>

 <a href="#" class="contact_icons"><img src="<?php echo $mainUrl;?>img/Twitter-black.svg"/></a>
  <a href="#" class="contact_icons"><img src="<?php echo $mainUrl;?>img/Invision-black.svg"/></a>

 </div><!-- contac_page_column_left -->

 <div class="col-sm-6 contact_page_column contac_page_column_right">
 <h2>GET IN TOUCH</h2>
 <div class="clear" style="height:20px;"></div>

<form>
<div class="col-sm-6 contact_page_column_iner contact_page_column_iner_left">

  <div class="form-group">
    <input type="text" class="form-control" id="name" placeholder="Name" />
  </div>
  <div class="form-group">
    <input type="email" class="form-control" id="email" placeholder="Email" />
  </div>

</div>
<div class="col-sm-6 contact_page_column_iner contact_page_column_iner_right">

  <div class="form-group">
  <textarea rows="5" cols="5" class="form-control" id="message" placeholder="Message" ></textarea>
  </div>
  <div class="form-group">
  <button type="submit" class="btn btn-primary pw_button"><span>SEND <i class="fa fa-arrow-right" aria-hidden="true"></i></span></button>
  </div>

</div>

</form>


 <div class="clear" style="height:0px;"></div>
 </div><!-- contac_page_column_right -->


 <div class="clear" style="height:20px;"></div>




</div>
    
 <div class="clear"></div>   
</div><!-- single_page_container -->



<?php include('included/footer.php');?>



</body>
</html>