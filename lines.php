<?php
    include_once("./config.php");
  include_once("./classes/functions.php");
    include_once("./classes/session.php");  
    include_once("./classes/security.php");
    include_once("./classes/database.php");   

  $db = Database::GetDatabase();  
  $linecount=$db->SelectAll("linecountnum","*",NULL," numcount ASC");
  $linenum=$db->SelectAll("linedef","*",NULL," id ASC");  
  for ($i=0;$i<count($linenum);$i++)
  {
    $linenumunique[] = $linenum[$i]["lineno"];
  } 
  foreach(array_unique($linenumunique) as $v)
  {
    if($v!= "" ){$linenumuniq[] = $v; }
  } 
  $LinesDescribe = GetSettingValue('LinesDescribe',0);
 $table=<<<cd
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
cd;
for($i=0;$i<count($linenumuniq);$i++)
{
$table.=<<<cd
                    <th colspan="2">خطوط {$linenumuniq[$i]}</th>                    
cd;
}
$table.=<<<cd
                  </tr>
                  <tr>
cd;
for($i=0;$i<count($linenumuniq);$i++)
{
$table.=<<<cd
                    <th class="random">غیرانتخابی (ریال)</th>
                    <th class="non-rand">انتخابی (ریال)</th>
cd;
}
$table.=<<<cd
                  </tr>
                </thead>
                <tbody>
cd;
for($i=0;$i<count($linecount);$i++)
{
$table.=<<<cd
                  <tr>
                    <td>{$linecount[$i]["numcount"]}</td>
cd;
$line=$db->SelectAll("linedef","*","lctid ={$linecount[$i]["id"]} "," ischoice ASC"); 
for($j=0;$j<count($line);$j++)
{
 if ($linedef[$j]["ischoice"])
 {
  $class = " class='price even' ";
 }
 else
 {
  $class = " class='price odd' ";
 }
$table.=<<<cd
                    <td {$class}><a href="lineorder.html" target="_blank" title="{$line[$j]["price"]}">{$line[$j]["price"]}</a></td>                   
cd;
}
$table.=<<<cd
                  </tr>
cd;
}
$table.=<<<cd
                </tbody>
              </table>
              <p class="detail">{$LinesDescribe}</p>
            <div id="ascrail2002" class="nicescroll-rails" style="width: 6px; z-index: 99999999999; position: absolute; top: 0px; right: 0px; opacity: 1; cursor: default; display: none; height: 718px;"><div style="position: relative; top: 0px; float: right; width: 6px; border: 0px; border-radius: 3px; height: 0px; background-color: rgb(204, 204, 204); background-clip: padding-box;"></div></div><div id="ascrail2002-hr" class="nicescroll-rails" style="height: 6px; z-index: 99999999999; position: absolute; left: 0px; bottom: 0px; opacity: 1; cursor: default; display: none; width: 1168px;"><div style="position: relative; top: 0px; height: 6px; border: 0px; border-radius: 3px; width: 0px; background-color: rgb(204, 204, 204); background-clip: padding-box;"></div></div></div><!-- end of table wrapper -->
          </div><!-- end of col-md-12 -->
        </div><!-- end of row-->
      </div><!-- end of container -->
    </div><!-- end of section wrapper -->
  </section>
cd;

  include_once('./inc/header.php');
  include_once('./inc/pageheader.php');
  include_once('./inc/menu.php');
  echo $table;
  include_once('./inc/clients.php');
  include_once('./inc/footer.php');
?>