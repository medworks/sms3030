<?php
	include_once("config.php");
	include_once("classes/functions.php");
  	include_once("classes/security.php");
  	include_once("classes/database.php");	
    include_once("./lib/persiandate.php");
	include_once("./lib/Zebra_Pagination.php"); 

	//error_reporting(E_ALL);
	//ini_set('display_errors', 1);
	
	$db = Database::GetDatabase();
	
	$records_per_page = 10;
	$pagination = new Zebra_Pagination();

	$pagination->navigation_position("right");

	$reccount = $db->CountAll("news");
	$pagination->records($reccount); 
	
    $pagination->records_per_page($records_per_page);	

$rows = $db->SelectAll(
				"news",
				"*",
				NULL,
				"id ASC",
				($pagination->get_page() - 1) * $records_per_page,
				$records_per_page);	
	
$nhtml1.=<<<cd
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
                <a href="javascript:void();" class="latinfont ltr" style="display:inline-block;letter-spacing:2px">+98 51 3766 6436</a>
              </li>
              <li class="mail">
                Email: 
                <a href="javascript:void();" class="latinfont" style="letter-spacing:2px">info@sms3030.com</a>
              </li>
            </ul>
          </div><!-- end of top contacts -->
        </div><!-- end of row -->
      </div><!-- end of container -->
    </div><!-- end of top menu -->
    <!-- Header -->
cd;

$nhtml2.=<<<cd
    <!-- end of header -->
    <!-- Page Info -->
    <div class="pageInfo">
      <div class="cover"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h2 class="pageTitle">اخبار</h2>
          </div><!-- end of col-md-4 -->
          <div class="col-md-8">
            <ol class="breadcrumb">
              <li>
                <a href="./">صفحه اصلی</a>
              </li>
              <li class="active">اخبار</li>
            </ol><!-- end of breadcrumb -->
          </div><!-- end of col-md-8 -->

        </div><!-- end of row -->
      </div><!-- end of container -->
    </div><!-- end of page info -->
  </section>
  <!-- end of Page Header -->
  //menu
  <!-- blog -->
	 <section class="blog section mainSection scrollAnchor lightSection" id="blog">
        <div class="sectionWrapper">
          <div class="container blogColmn4">
            <div class="row">
cd;

for($i = 0; $i < Count($rows); $i++)
{
$nhtml2.=<<<cd

              <article class="col-md-3 post">
                <div class="postWrapper">
                  <div class="postMedia">
                    
                    <a href="single-news{$rows[$i]['id']}.html" title="{$rows[$i]['subject']}">
                      <img class=" morph" src="manager/img.php?did={$rows[$i]['id']}&tid=1" />
                    </a>
                  </div>
                  <div class="postContents">
                    <a href="single-news{$rows[$i]['id']}.html" class="postIcon">
                      <i class="animated fa fa-newspaper-o"></i>
                    </a>
                    <h4 class="postTitle">
                      <a href="single-news{$rows[$i]['id']}.html" title="{$rows[$i]['subject']}">
                        {$rows[$i]['subject']}
                      </a>
                    </h4>
                    <p class="postDetails">
                      {$rows[$i]['text']}
                    </p>
                    <a class="readMore bordered generalLink" href="single-news{$rows[$i]['id']}.html" title="read more">ادمه خبر</a>
                  </div>
                </div>
              </article><!-- end of post -->
cd;
}
$pgcodes = $pagination->render(true);
$nhtml2.=<<<cd
            </div><!-- end of row -->
			{$pgcodes}
            <div class="clearfix"></div>

          </div><!-- end of container -->
        </div><!-- end of section wrapper -->
      </section>
      <!-- END blog -->
	  
cd;
  include_once('./inc/header.php');
  echo $nhtml1;
  include_once('./inc/menu.php');
  echo $nhtml2;
  include_once('./inc/clients.php');
  include_once('./inc/footer.php');
?>