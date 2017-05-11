<?php  if (!defined('NC_BASEPATH')) exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>nc-cms | <?php echo NC_LANG_LOGIN; ?></title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
		<link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="../assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" media="screen" href="system/css/login.css"/> 
		<script type="text/javascript" src="system/js/jquery.js"></script>
		<script type="text/javascript">
		function keypress_action(event)
		{
			if (event.which == 13)
			{
				document.loginform.submit();
			}
		}
		
		function setup() // jQuery calls this first
		{
			$("input").keypress(keypress_action);
			document.loginform.user.focus();
		}
		
		$(document).ready(setup); // Go jQuery !
		</script>
	</head>
	<body>
		<div id="wrapper">
			<div id="login">
				<h3>Login</h3>
				<form name="loginform" id="loginform" method="post" action="<?php echo NCUtility::Referrer(); ?>/">	

	<div class="form-group">
	  <label for="user"><?php echo NC_LANG_USERNAME; ?></label>
	  <input type="text" class="textfield form-control" id="user"  name="user" size="24">
	</div>

	<div class="form-group">
	  <label for="pass"><?php echo NC_LANG_PASSWORD; ?></label>
	  <input type="password" class="pass form-control" id="pass"  name="pass" size="24">
	</div>

      

	<a href="javascript:document.loginform.submit()" class="btn btn-primary"><?php echo NC_LANG_LOGIN_RETURN; ?></a>

	</form>
	<div class="footer"></div>
			</div>
			<p class="powered_by">Powered by <a href="http://www.nconsulting.ca/nc-cms/" target="_blank">nc-cms</a>.</p>
			<p id="backtosite"><a href="<?php echo NC_WEBSITE_URL; ?>" title="Are you lost?">&laquo;  <?php echo NC_LANG_BACK_TO; ?> <?php echo NC_WEBSITE_NAME; ?></a></p>
		</div>
	</body>
</html>


