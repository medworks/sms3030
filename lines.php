<?php
  include_once('./inc/header.php');
  include_once('./inc/pageheader.php');
  include_once('./inc/menu.php');
?>
    <!-- Page Info -->
    <div class="pageInfo">
      <div class="cover"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h2 class="pageTitle">تعرفه خطوط</h2>
          </div><!-- end of col-md-4 -->
          <div class="col-md-8">
            <ol class="breadcrumb">
              <li>
                <a href="./">صفحه اصلی</a>
              </li>
              <li class="active">تعرفه خطوط</li>
            </ol><!-- end of breadcrumb -->
          </div><!-- end of col-md-8 -->
        </div><!-- end of row -->
      </div><!-- end of container -->
    </div><!-- end of page info -->
  </section>
  <!-- end of Page Header -->
  <section class="pricing section mainSection scrollAnchor lightSection" id="pricing">
    <div class="sectionWrapper">
      <div class="container">
        <div class="row">          
          <div class="col-md-12">
            <div class="table-responsive tableWrapper" tabindex="5000" style="overflow: hidden; outline: none;">
              <table class="rtl table table-hover table-bordered" style="transform: translate3d(0px, 0px, 0px);">
                <style>
                    th.random,th.non-rand{
                      max-width: 100px;
                    }
                    td.price{
                      font-size: 20px!important;
                    }
                    td.price a{
                      color: #cd2f2e!important;
                    }
                    td.price a:hover{
                      color: #2b2f3b!important;
                    }
                    td.price.odd{
                      background-color: #fafafa!important;
                    }
                    td.price.even{
                      background-color: #f1f1f1!important;
                    }
                    p.detail{
                      padding: 20px 10px;
                      color: #cd2f2e;
                    }
                  </style>
                <thead>
                  <tr style="font-size:23px">
                    <th rowspan="2" style="vertical-align:middle;width:100px">تعداد ارقام</th>
                    <th colspan="2">خطوط 1000</th>
                    <th colspan="2">خطوط 2000</th>
                    <th colspan="2">خطوط 3000</th>
                    <th colspan="2">خطوط 5000</th>
                    <th colspan="2">خطوط 021</th>
                  </tr>
                  <tr>
                    <th class="random">غیرانتخابی (ریال)</th>
                    <th class="non-rand">انتخابی (ریال)</th>
                    <th class="random">غیرانتخابی (ریال)</th>
                    <th class="non-rand">انتخابی (ریال)</th>
                    <th class="random">غیرانتخابی (ریال)</th>
                    <th class="non-rand">انتخابی (ریال)</th>
                    <th class="random">غیرانتخابی (ریال)</th>
                    <th class="non-rand">انتخابی (ریال)</th>
                    <th class="random">غیرانتخابی (ریال)</th>
                    <th class="non-rand">انتخابی (ریال)</th>
                  </tr>
                </thead>

                <tbody>
                  <tr>
                    <td>14 رقمی</td>
                    <td class="price even"><a href="#" title="">250/000/000</a></td>
                    <td class="price odd"><a href="#" title="">25000</a></td>
                    <td class="price even"><a href="#" title="">25000</a></td>
                    <td class="price odd"><a href="#" title="">25000</a></td>
                    <td class="price even"><a href="#" title="">25000</a></td>
                    <td class="price odd"><a href="#" title="">25000</a></td>
                    <td class="price even"><a href="#" title="">25000</a></td>
                    <td class="price odd"><a href="#" title="">25000</a></td>
                    <td class="price even"><a href="#" title="">25000</a></td>
                    <td class="price odd"><a href="#" title="">25000</a></td>
                  </tr>
                  <tr>
                    <td>12 رقمی</td>
                    <td class="price even"><a href="#" title="">250/000/000</a></td>
                    <td class="price odd"><a href="#" title="">25000</a></td>
                    <td class="price even"><a href="#" title="">25000</a></td>
                    <td class="price odd"><a href="#" title="">25000</a></td>
                    <td class="price even"><a href="#" title="">25000</a></td>
                    <td class="price odd"><a href="#" title="">25000</a></td>
                    <td class="price even"><a href="#" title="">25000</a></td>
                    <td class="price odd"><a href="#" title="">25000</a></td>
                    <td class="price even"><a href="#" title="">25000</a></td>
                    <td class="price odd"><a href="#" title="">25000</a></td>
                  </tr>

                </tbody>
              </table>
              <p class="detail">1- توضیحات تکمیلی....</p>
            <div id="ascrail2002" class="nicescroll-rails" style="width: 6px; z-index: 99999999999; position: absolute; top: 0px; right: 0px; opacity: 1; cursor: default; display: none; height: 718px;"><div style="position: relative; top: 0px; float: right; width: 6px; border: 0px; border-radius: 3px; height: 0px; background-color: rgb(204, 204, 204); background-clip: padding-box;"></div></div><div id="ascrail2002-hr" class="nicescroll-rails" style="height: 6px; z-index: 99999999999; position: absolute; left: 0px; bottom: 0px; opacity: 1; cursor: default; display: none; width: 1168px;"><div style="position: relative; top: 0px; height: 6px; border: 0px; border-radius: 3px; width: 0px; background-color: rgb(204, 204, 204); background-clip: padding-box;"></div></div></div><!-- end of table wrapper -->

          </div><!-- end of col-md-12 -->


        </div><!-- end of row-->
      </div><!-- end of container -->
    </div><!-- end of section wrapper -->
  </section>

<?php
  include_once('./inc/clients.php');
  include_once('./inc/footer.php');
?>