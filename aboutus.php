<?php
	include_once("config.php");
	include_once("classes/functions.php");
	include_once("classes/seo.php");
  	  	      
	$Tell_Number = GetSettingValue('Tell_Number',0);
	$Contact_Email = GetSettingValue('Contact_Email',0);	
	$About_System = GetSettingValue('About_System',0);

	$seo = Seo::GetSeo();
	
	$seo->Site_Title = "درباره ما";
	$seo->Site_Describtion = mb_substr($About_System,0,150,"UTF-8");
	
$ahtml2 =<<<cd
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
              <li class="active">درباره ما</li>
            </ol><!-- end of breadcrumb -->
          </div><!-- end of col-md-8 -->

        </div><!-- end of row -->
      </div><!-- end of container -->
    </div><!-- end of page info -->
  </section>
  <!-- end of Page Header -->
		<!-- Main content alpha -->
		<section class="pricing section mainSection scrollAnchor lightSection" id="pricing">
      <div class="sectionWrapper">
        <div class="container">
          <div class="row">          
            <div class="col-md-12">
              <p style="font-size:23px;text-align:justify;font-weight:normal;line-height:35px;padding:0 35px;color:#000">{$About_System}</p>
            </div><!-- end of col-md-12 -->
          </div><!-- end of row-->
        </div><!-- end of container -->
      </div><!-- end of section wrapper -->
    </section>		
		<!-- /Main content alpha -->
	
cd;
  include_once('./inc/header.php');
  include_once('./inc/pageheader.php');
  include_once('./inc/menu.php');
  echo $ahtml2;
  include_once('./inc/clients.php');
  include_once('./inc/footer.php');
?>
  	