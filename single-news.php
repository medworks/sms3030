<?php
  include_once('./inc/header.php');
?>

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
    <?php
      include_once('./inc/menu.php')
    ?>
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
              <li class="active"><a href="news.php">اخبار</a></li>
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
                              <img alt="post sample" src="images/slider/2.jpg" title="" width="748" height="350">
                            </div>
                            
                          </div>
                        </div>
                      </div>
                      <div class="postContents">
                        <a href="#" class="postIcon">
                        <i class="animated fa fa-newspaper-o"></i>
                      </a>
                        <h4 class="postTitle">عنوان خبر!</h4>
                        <p class="postDetails">
                          توضیحات خبر...  توضیحات خبر... توضیحات خبر... توضیحات خبر... توضیحات خبر... توضیحات خبر... توضیحات خبر... توضیحات خبر... توضیحات خبر... توضیحات خبر... توضیحات خبر... توضیحات خبر... توضیحات خبر... توضیحات خبر... توضیحات خبر... توضیحات خبر... 
                        </p>
                        <ul class="postMeta clearfix">
                          <li class="postDate">
                            <div class="metaContent">
                              <i class="animated fa fa-clock-o"></i>
                              تاریخ: 15 فروردین 1393
                            </div>
                          </li>
                          <li class="postAuthor">
                            <div class="metaContent">
                              <i class="animated fa fa-user"></i>
                              توسط: Admin
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
                <div class="widget searchWidget">
                  <div class="widgetBody">
                    <form method="GET" class="sideSearch">
                      <ul class="clearfix">
                        <li>
                          <input type="search" value="جستجو" onblur="if(this.value=='')this.value='search here'" onfocus="if(this.value=='search here')this.value=''" name="s" id="sideSearch" class="sideSearch rtl" />
                        </li>
                        <li><button type="submit"><i class="animated fa fa-search"></i></button></li>
                      </ul>
                    </form><!-- end of side search -->
                  </div><!-- end of widget body -->
                </div><!-- end of widget --><!-- end of search widget -->

                <div class="widget categoriesWidget">
                  <h5 class="widgetHeader">گروه ها</h5><!-- end of widget header -->
                  <div class="widgetBody">
                    <ul class="list rtl">
                      <li><a href="#" title="">عنوان گروه ها</a></li>
                      <li><a href="#" title="">عنوان گروه ها</a></li>
                      <li><a href="#" title="">عنوان گروه ها</a></li>
                      <li><a href="#" title="">عنوان گروه ها</a></li>
                      <li><a href="#" title="">عنوان گروه ها</a></li>
                    </ul>
                  </div><!-- end of widget body -->
                </div><!-- end of widget --><!-- end of categories Widget -->

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

                        <li class="clearfix" style="margin-top: 0px;">
                          <article class="post rtl">
                            <div class="postContents">
                              <h5 class="postTitle">
                                <a href="#">عنوان خبر</a>
                              </h5>
                              <ul class="postMeta">
                                <li class="postDate">16 فروردین 2014</li>
                              </ul>
                            </div><!-- end of post  contents -->
                          </article><!-- end of post -->
                        </li>

                        <li class="clearfix" style="margin-top: 0px;">
                          <article class="post rtl">
                            <div class="postContents">
                              <h5 class="postTitle">
                                <a href="#">عنوان خبر</a>
                              </h5>
                              <ul class="postMeta">
                                <li class="postDate">16 فروردین 2014</li>
                              </ul>
                            </div><!-- end of post  contents -->
                          </article><!-- end of post -->
                        </li>

                        <li class="clearfix" style="margin-top: 0px;">
                          <article class="post rtl">
                            <div class="postContents">
                              <h5 class="postTitle">
                                <a href="#">عنوان خبر</a>
                              </h5>
                              <ul class="postMeta">
                                <li class="postDate">16 فروردین 2014</li>
                              </ul>
                            </div><!-- end of post  contents -->
                          </article><!-- end of post -->
                        </li>

                        <li class="clearfix" style="margin-top: 0px;">
                          <article class="post rtl">
                            <div class="postContents">
                              <h5 class="postTitle">
                                <a href="#">عنوان خبر</a>
                              </h5>
                              <ul class="postMeta">
                                <li class="postDate">16 فروردین 2014</li>
                              </ul>
                            </div><!-- end of post  contents -->
                          </article><!-- end of post -->
                        </li>


                    </ul><!-- end of ticker -->
                  </div><!-- end of widget body -->
                </div><!-- end of widget -->
              </aside><!-- end of sidebar -->

            </div>

            

            <div class="clearfix"></div>

          </div><!-- end of container -->
        </div><!-- end of section wrapper -->
      </section>

<?php
  include_once('./inc/clients.php');
  include_once('./inc/footer.php');
?>