<?php
	include_once("./config.php");
	include_once("./classes/functions.php");
  	include_once("classes/seo.php");
	
	/*$Site_Title = GetSettingValue('Site_Title',0);
	$Site_KeyWords = GetSettingValue('Site_KeyWords',0);
	$Site_Describtion = GetSettingValue('Site_Describtion',0);
	*/
	$seo = Seo::GetSeo();
?>	
<!DOCTYPE html>
<!--[if lt IE 7]>
  <html class="no-js IE lt-ie9 lt-ie8 lt-ie7"></html>
<![endif]-->
<!--[if IE 7]>
  <html class="no-js IE lt-ie9 lt-ie8"></html>
<![endif]-->
<!--[if IE 8]>
  <html class="no-js IE lt-ie9"></html>
<![endif]-->
<!--[if gt IE 8]>
  <html class="no-js IE gt-ie8"></html>
<![endif]-->
<!--[if !IE]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
<!-- title -->
<title><?php echo $seo->Site_Title; ?></title>

<!-- meta tags -->
<meta charset="utf-8" />
<meta content="width=device-width,initial-scale=1,maximum-scale=1" name="viewport" />
<meta name="author" content="Mediateq.ir"  />
<meta name="description" content="<?php echo $seo->Site_Describtion; ?>" />
<meta name="keywords" content="<?php echo $seo->Site_KeyWords; ?>" />
<meta name="google-site-verification" content="3tQMNvxRWB3FHGahHr5f87lMB8dllggDG_MH0LwEDHM" />
<meta name="msvalidate.01" content="A92EDE738075648B70C10A8E52AFBCA6" />
<meta name="generator" content="Powered by Mediateq CMS panel" />
<meta name="googlebot" content="INDEX,FOLLOW" />
<meta name="robots" content="INDEX,FOLLOW" />
<meta name="format-detection" content="telephone=yes" />
  
<!-- fav icon -->
<link href="./favicon.ico" rel="shortcut icon" />

<!-- css => style sheet -->
<link href="./css/style.css" media="screen" rel="stylesheet" type="text/css" />
<!-- css => responsive sheet -->
<link href="./css/responsive.css" media="screen" rel="stylesheet" type="text/css" />

<!-- JQuery => javascript libs -->
<script src="./js/jquery.js" type="text/javascript"></script>
<!-- online JQuery libs -->
<!-- <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script> -->

<script type="text/javascript" src="./js/jquery-migrate-1.2.1.min.js"></script>

<script type="text/javascript" src="./js/jquery-ui.js"></script>


<!--[if lt IE 9]><!-->
<!-- css for ie -->
<link href="./css/ie.css" media="screen" rel="stylesheet" type="text/css" />
<!--<![endif]-->

<!-- google maps 
<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script> -->
<!-- <link href="./css/blue.css" media="screen" rel="stylesheet" type="text/css" /> -->
<link href="./css/red.css" media="screen" rel="stylesheet" type="text/css" />
<link href="./css/zebra_pagination.css" rel="stylesheet" />
<link href="./css/validationEngine.jquery.css" rel="stylesheet" />
<link href="./css/jquery.fancybox.css" rel="stylesheet" />
  
</head>


  