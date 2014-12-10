<?php
    include_once("config.php");
  include_once("classes/functions.php");
    include_once("classes/messages.php");
    include_once("classes/session.php");  
    include_once("classes/security.php");
    include_once("classes/database.php"); 
  include_once("classes/login.php");
    include_once("lib/persiandate.php"); 
    //error_reporting(E_ALL);
  //ini_set('display_errors', 1);
  
  $db = Database::GetDatabase();
  $seo = Seo::GetSeo();
  
  $news = $db->Select("news","*","id={$_GET['id']}");
  $news["regdate"] = ToJalali($news["regdate"],"Y/m/d");

  $seo->Site_Title = $news["subject"];

$snhtml2.=<<<cd
    <!-- Page Info -->
    <div class="pageInfo">
      <div class="cover"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h2 class="pageTitle">{$news["subject"]}</h2>
          </div><!-- end of col-md-4 -->
          <div class="col-md-8">
            <ol class="breadcrumb">
              <li>
                <a href="./">صفحه اصلی</a>
              </li>
              <li class="active"><a href="news.html">اخبار</a></li>
            </ol><!-- end of breadcrumb -->
          </div><!-- end of col-md-8 -->

        </div><!-- end of row -->
      </div><!-- end of container -->
    </div><!-- end of page info -->
  </section>
  <!-- end of Page Header -->
  <section class="blog section mainSection scrollAnchor lightSection" id="blog">
        <div class="sectionWrapper">
          <div class="container singlePostPage">
            <div class="row">
              <div class="col-md-8">
                <div class="row">
                  <article class="col-md-12 post postWide singlePost">
                    <div class="postWrapper">
                      <div>                        
                        <div>
                          <div>
                            <div>
                              <img class=" morph" src="manager/img.php?did={$news['id']}&tid=1&type=other" width="748" height="350" />
                            </div>
                            
                          </div>
                        </div>
                      </div>
                      <div class="postContents">
                        <a href="javascript:void(0);" class="postIcon">
                        <i class="animated fa fa-newspaper-o"></i>
                      </a>
                        <h4 class="postTitle">{$news["subject"]}</h4>
                        <p class="postDetails">
                          {$news["text"]}
                        </p>
                        <ul class="postMeta clearfix">
                          <li class="postDate">
                            <div class="metaContent">
                              <i class="animated fa fa-clock-o"></i>
                              {$news["regdate"]}
                            </div>
                          </li>
                        </ul>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </article><!-- end of post -->
                  <div class="clearfix"></div>
                </div><!-- end of row -->
              </div><!-- end of col-md-8 -->

              <aside class="col-md-4 sidebar">
               <div class="widget">
                  <h5 class="widgetHeader clearfix">
                    آخرین خبرها
                    <span class="tickerControl">
                      <i class="animated fa fa-angle-left" id="ticker-prev"></i>
                      <i class="animated fa fa-angle-right" id="ticker-next"></i>
                    </span>
                  </h5><!-- end of widget header -->
                  <div class="widgetBody">
                    
                    <ul id="ticker" class="ticker" style="height: 225px; overflow: hidden;">                 
cd;
$news = $db->SelectAll("news","*",NULL,"id DESC","0","5"); 
for($i = 0; $i < Count($news); $i++)
{
$news[$i]["regdate"] = ToJalali($news[$i]["regdate"]," l d F  Y");  
//$news[$i]["subject"] =(mb_strlen($news[$i]["subject"])>30)?mb_substr($news[$i]["subject"],0,30,"UTF-8")."...":$news[$i]["subject"];
$snhtml2.=<<<cd
                        <li class="clearfix" style="margin-top: 0px;">
                          <article class="post rtl">
                            <div class="postContents">
                              <h5 class="postTitle">
                                <a href="single-news{$news[$i]['id']}.html">{$news[$i]["subject"]}</a>
                              </h5>
                              <ul class="postMeta">
                                <li class="postDate" style="font-family:'bmitra';font-size:15px;">{$news[$i]["regdate"]}</li>
                              </ul>
                            </div><!-- end of post  contents -->
                          </article><!-- end of post -->
                        </li>
cd;
}
$snhtml2.=<<<cd
                    </ul><!-- end of ticker -->
                  </div><!-- end of widget body -->
                </div><!-- end of widget -->
              </aside><!-- end of sidebar -->

            </div>

            

            <div class="clearfix"></div>

          </div><!-- end of container -->
        </div><!-- end of section wrapper -->
      </section>
cd;

  include_once('./inc/header.php');
  include_once('./inc/pageheader.php');
  include_once('./inc/menu.php');
  echo $snhtml2;
  include_once('./inc/clients.php');
  include_once('./inc/footer.php');
?>