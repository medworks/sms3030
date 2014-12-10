<?php
	include_once("config.php");
	include_once("classes/functions.php");
  	include_once("classes/security.php");
  	include_once("classes/database.php");	
    include_once("./lib/persiandate.php");
	include_once("./lib/Zebra_Pagination.php");
	include_once("classes/seo.php");
			
	$db = Database::GetDatabase();
	$seo = Seo::GetSeo();
	
	$seo->Site_Title = "اخبار اس ام اس 3030";

	//error_reporting(E_ALL);
	//ini_set('display_errors', 1);
	
	
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
  <!-- blog -->
	 <section class="blog section mainSection scrollAnchor lightSection" id="blog">
        <div class="sectionWrapper">
          <div class="container blogColmn4">
            <div class="row">
cd;

for($i = 0; $i < Count($rows); $i++)
{
$pic = $db->Select("pics","*","`sid`='{$rows[$i][id]}' AND `tid`='1'");
$img = base64_encode($pic['img']);
$src = 'data: '.$pic['itype'].';base64,'.$img;
$nhtml2.=<<<cd

              <article class="col-md-3 post">
                <div class="postWrapper">
                  <div class="postMedia">
                    
                    <a href="single-news{$rows[$i]['id']}.html" title="{$rows[$i]['subject']}">
					<!--
                      <img class=" morph" src="manager/img.php?did={$rows[$i]['id']}&tid=1" />
					-->
					  <img src="{$src}" />
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
  include_once('./inc/pageheader.php');
  include_once('./inc/menu.php');
  echo $nhtml2;
  include_once('./inc/clients.php');
  include_once('./inc/footer.php');
?>