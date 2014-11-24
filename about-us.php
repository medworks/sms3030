<?php
	include_once("config.php");
	include_once("classes/functions.php");
  	  	      
	$Tell_Number = GetSettingValue('Tell_Number',0);
	$Contact_Email = GetSettingValue('Contact_Email',0);	
	$About_System = GetSettingValue('About_System',0);

$ahtml1.=<<<cd
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

<div class="allWrapper">
  <!-- Page Header -->
  <section class="pageHeader section mainSection scrollAnchor darkSection" id="pageHeader">
    <div class="topMenu navBar">
      <div class="container">
        <div class="row">
          <ul class="topSocial socialNav col-md-6 col-sm-12">
            <li class="facebook"><a href="#"><i class="animated fa fa-facebook"></i></a></li>
            <li class="twitter"><a href="#"><i class="animated fa fa-twitter"></i></a></li>
            <li class="rss"><a href="#"><i class="animated fa fa-rss"></i></a></li>
          </ul><!-- end of top social -->
          <div class="topContact col-md-6 col-sm-12">
            <ul>
              <li class="tele">
                Tel: 
                <a href="javascript:void();" class="latinfont ltr" style="display:inline-block;letter-spacing:2px">+98 {$Tell_Number}</a>
              </li>
              <li class="mail">
                Email: 
                <a href="javascript:void();" class="latinfont" style="letter-spacing:2px">{$Contact_Email}</a>
              </li>
            </ul>
          </div><!-- end of top contacts -->
        </div><!-- end of row -->
      </div><!-- end of container -->
    </div><!-- end of top menu -->
    <!-- Header -->
cd;
$ahtml2 =<<<cd
		 <!-- end of header -->
    <!-- Page Info -->
    <div class="pageInfo">
      <div class="cover"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h2 class="pageTitle">درباره ما</h2>
          </div><!-- end of col-md-4 -->
          <div class="col-md-8">
            <ol class="breadcrumb">
              <li>
                <a href="./">صفحه اصلی</a>
              </li>
              <li class="active"><a href="about-us.html">درباره ما</a></li>
            </ol><!-- end of breadcrumb -->
          </div><!-- end of col-md-8 -->

        </div><!-- end of row -->
      </div><!-- end of container -->
    </div><!-- end of page info -->
  </section>
  <!-- end of Page Header -->
		<!-- Main content alpha -->
		<div id="main" class="col9 clearfix">
			<div id="main_inner">
				<div class="article_grid four_column_blog">
					<h4>درباره ما</h4>
				</div>
				<div class="entry">
					<p style="font-size:22px;font-weight:normal;">
						{$About_System}
					</p>
					<div class="clearboth"></div>									
				</div>				
			</div><!-- #main_inner -->
		</div>					
		<!-- /Main content alpha -->
	
cd;
  include_once('./inc/header.php');
  echo $ahtml1;
  include_once('./inc/menu.php');
  echo $ahtml2;
  include_once('./inc/clients.php');
  include_once('./inc/footer.php');
?>
  	