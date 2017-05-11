<?php require('nc-cms/system/start.php'); $cms = new NCCms(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="keywords" content="">
<title><?php $cms->Title('_title'); ?></title>

<link rel="icon" type="image/png" href="<?php echo $mainUrl;?>img/favicon.png">

<script src="<?php echo $mainUrl;?>assets/pace/pace.min.js"></script>
<link href="<?php echo $mainUrl;?>assets/pace/pace.css" rel="stylesheet" />

<script>
Pace.on("done", function(){
    $(".cover").fadeOut(100);
});
</script>


<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel="stylesheet">
<!-- Bootstrap -->

  <script src="<?php echo $mainUrl;?>_resorces/th/js/modernizr.custom.js"></script>    
<link href="<?php echo $mainUrl;?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo $mainUrl;?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="<?php echo $mainUrl;?>css/animate.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo $mainUrl;?>css/animate.css">
<link href="<?php echo $mainUrl;?>css/style.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" media="screen" href="<?php $cms->CSS(); ?>" />



<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<style>
.nc_edit img{
  width:auto;
  height:auto;
}
  
 @media screen and (max-width: 780px) {
   .scroll_down_holder{
     display:none;
   }
   
  }
  
  @media screen and (max-width: 780px){
.page_box_top p {
    font-size: 16px;
  font-weight:300;
}
  }
  
  @media screen and (max-width: 1000px){
    .cell_iner h2 {
    font-size: 16px;
    width: 98%;
} 
  }
  
  
  @media screen and (max-width: 780px){
    .footer_links {
    color: #fff;
    text-align: right;
    font-size: 16px;
    font-weight: 300;
    margin-top: 50px;
    padding-bottom: 20px;
}
  }
 
  
  @media screen and (max-width: 780px){
   

  }


  
</style>


</head>

<body>
<?php $cms->ControlPanel(); 
print_r($cms->ControlPanel());


?> 
 <div class="cover"></div>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo $mainUrl;?>"><img src="<?php echo $mainUrl;?>img/logo.png"></a>
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li class="<?php if (isset($home)){ echo 'active';} ?>"><a href="<?php echo $mainUrl;?>" class="page-scroll">HOME</a></li>
          <li class="<?php if (isset($about)){ echo 'active';} ?>"><a href="<?php echo $mainUrl;?>about" class="page-scroll">ABOUT</a></li>
          <li class="<?php if (isset($team)){ echo 'active';} ?>"><a href="<?php echo $mainUrl;?>team" class="page-scroll">TEAM</a></li>
          <li class="<?php if (isset($clients)){ echo 'active';} ?>"><a href="<?php echo $mainUrl;?>clients" class="page-scroll">OUR WORK</a></li>
          <li class="<?php if (isset($news)){ echo 'active';} ?>"><a href="<?php echo $mainUrl;?>news" class="page-scroll">NEWS</a></li>
          <li class="<?php if (isset($careers)){ echo 'active';} ?>"><a href="<?php echo $mainUrl;?>careers" class="page-scroll">CAREERS</a></li>
          <li class="<?php if (isset($contact)){ echo 'active';} ?>"><a href="<?php echo $mainUrl;?>contact" class="page-scroll">CONTACT</a></li>

        </ul>
      </div>
    </div>
  </div>
  <div class="col-sm-12 header_bottom"></div>
</nav>



