<?php
	include_once("config.php");
	include_once("./classes/functions.php");
  	include_once("./classes/messages.php");
  	include_once("./classes/session.php");	
  	include_once("./classes/security.php");
  	include_once("./classes/database.php");	
			
	$db = Database::GetDatabase(); 
  	  	      
	$banks=$db->SelectAll("bankinfo","*");
$lstbank=<<<cd
		<table>
			<tr>
				<th style="width:150px">نام بانک</th>
				<th style="width:100px">صاحب حساب</th>
				<th style="width:100px">شماره حساب</th>
				<th style="width:100px">شماره کارت</th>
			</tr>
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
		</table>		
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
            <p style="font-size:23px;text-align:justify;font-weight:normal;line-height:35px;padding:0 35px;color:#000">{$About_System}</p>
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
  	