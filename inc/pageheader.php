<?php 
  include_once("config.php");
  include_once("classes/functions.php");
  include_once("./lib/persiandate.php");
  
              
  $Tell_Number = GetSettingValue('Tell_Number',0);
  $Contact_Email = GetSettingValue('Contact_Email',0);  
  $About_System = GetSettingValue('About_System',0);
  $FaceBook_Add = GetSettingValue('FaceBook_Add',0);  
  $Twitter_Add = GetSettingValue('Twitter_Add',0);  
  $Rss_Add = GetSettingValue('Rss_Add',0); 
  $datetime = ToJalali(date('Y-M-d H:i:s'),'l، d F Y'); 

$html.=<<<cd
<body id="top" class="page body-boxed-2">
<!--[if lt IE 9]>
  <p class="browsehappy">
    You are using an
    <strong>outdated</strong>
    browser. Please
    <a href="http://browsehappy.com/">upgrade your browser</a>
    to improve your experience.
  </p>
<![endif]-->
  
<div class="loadingContainer">
  <div class="loading">
    <div class="rect1"></div>
    <div class="rect2"></div>
    <div class="rect3"></div>
    <div class="rect4"></div>
    <div class="rect5"></div>
  </div><!-- end of loading -->
</div><!-- end of loading container -->
<style>
  a.ads{
    position:fixed;
    z-index: 999999;
    bottom:0;
    left:20px;
  }
</style>  
<!--Banner-->
<a class="ads" href="javascript:void(0);">
  <img src="./images/sms3030.gif" border=0 width="120" height="240">
</a>
<!--Banner-->
<div class="allWrapper">
  <!-- Page Header -->
  <section class="pageHeader section mainSection scrollAnchor darkSection" id="pageHeader">
     <div class="topMenu navBar">
      <div class="container">
        <div class="row">
          <ul class="topSocial socialNav col-md-6 col-sm-12">
            <li class="facebook"><a href="{$FaceBook_Add}" target="_blank"><i class="animated fa fa-facebook"></i></a></li>
            <li class="twitter"><a href="{$Twitter_Add}" target="_blank"><i class="animated fa fa-twitter"></i></a></li>
            <li class="rss"><a href="{$Rss_Add}" target="_blank"><i class="animated fa fa-rss"></i></a></li>
            <li><a href="http://sms.sms3030.ir" target="_blank" style="padding: 0px 10px;text-align: center;line-height: normal;display: inline;font-size:19px;">ورود آزمایشی به سامانه</a></li>
            <li><a href="http://panel.sms3030.ir" target="_blank" style="padding: 0px 10px;text-align: center;line-height: normal;display: inline;font-size:19px;">ورود به سامانه</a></li>
            <li><a href="javascript:void(0);" style="padding: 0px 10px;text-align: center;line-height: normal;display: inline;font-size:19px;background-color:#cd2f2e">{$datetime}</a></li>
          </ul><!-- end of top social -->
          <!-- <div class="topContact col-md-6 col-sm-12">
            <ul>
              <li class="tele">
                Tel: 
                <a href="javascript:void();" class="latinfont ltr" style="display:inline-block;letter-spacing:2px"> {$Tell_Number}</a>
              </li>
              <li class="mail">
                Email: 
                <a href="javascript:void();" class="latinfont" style="letter-spacing:2px">{$Contact_Email}</a>
              </li>
            </ul>
          </div> end of top contacts -->
        </div><!-- end of row -->
      </div><!-- end of container -->
    </div><!-- end of top menu -->
cd;

echo $html;
?>