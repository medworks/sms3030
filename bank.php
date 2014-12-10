<?php
	include_once("config.php");
	include_once("./classes/functions.php");
  	include_once("./classes/messages.php");
  	include_once("./classes/session.php");	
  	include_once("./classes/security.php");
  	include_once("./classes/database.php");	
	include_once("classes/seo.php");
			
	$db = Database::GetDatabase();
	$seo = Seo::GetSeo();
	
	$seo->Site_Title = "شماره حساب ها";
	//$seo->Site_Describtion = mb_substr($About_System,0,150,"UTF-8");
  	  	      
	$banks=$db->SelectAll("bankinfo","*");
$lstbank=<<<cd
  <div class="table-responsive tableWrapper" tabindex="5000" style="overflow: hidden; outline: none;">
		<table class="rtl table table-hover table-bordered" style="transform: translate3d(0px, 0px, 0px);">
      <thead>
        <tr>
  				<th style="width:150px">نام بانک</th>
  				<th style="width:100px">صاحب حساب</th>
  				<th style="width:100px">شماره حساب</th>
  				<th style="width:100px">شماره کارت</th>
  			</tr>
      </thead>
      <tbody>
cd;
	for($i=0;$i<count($banks);$i++)
	{
$lstbank.=<<<cd
			<tr>
				<td>{$banks[$i]['name']}</td>
				<td>{$banks[$i]['owner']}</td>	
				<td>{$banks[$i]['accno']}</td>	
				<td>{$banks[$i]['cardno']}</td>					
			</tr>			
cd;
	}
$lstbank.=<<<cd
     <tbody>
		</table>
  </div>		
cd;
$bhtml2 =<<<cd
    <!-- Page Info -->
    <div class="pageInfo">
      <div class="cover"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h2 class="pageTitle">شماره حساب</h2>
          </div><!-- end of col-md-4 -->
          <div class="col-md-8">
            <ol class="breadcrumb">
              <li>
                <a href="./">صفحه اصلی</a>
              </li>
              <li class="active"><a href="about-us.html">شماره حساب</a></li>
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
			       {$lstbank}
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
  echo $bhtml2;
  include_once('./inc/clients.php');
  include_once('./inc/footer.php');
?>
  	