<?php
	include_once("../config.php");
	include_once("../classes/functions.php");
  	include_once("../classes/messages.php");
  	include_once("../classes/session.php");	
  	include_once("../classes/security.php");
  	include_once("../classes/database.php");	
	include_once("../classes/login.php");
    include_once("../lib/persiandate.php"); 
	include_once("../lib/Zebra_Pagination.php"); 
	
	
	$login = Login::GetLogin();
    if (!$login->IsLogged())
	{
		header("Location: ../index.php");
		die(); // solve a security bug
	} 
	$db = Database::GetDatabase(); 
	if ($_GET['act']=="del")
	{
		$db->Delete("linenumbers"," id ",$_GET["lid"]);		
		header('location:lineordered.php?act=edit');	
	}		
$html=<<<cd
<section id="min-wrapper">
    <div id="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!--Top header start-->
                    <h3 class="ls-top-header">ثبت نام کنندگان خط</h3>
                    <!--Top header end -->
                    <!--Top breadcrumb start -->
                    <ol class="breadcrumb">
                        <li><a href="admin.php"><i class="fa fa-home"></i></a></li>
                        <li class="active">ثبت نام کنندگان</li>
                    </ol>
                    <!--Top breadcrumb start -->
                </div>
            </div>
            <!-- Main Content Element  Start-->
            <form id="frmsubmenu" class="form-inline ls_form" name="frmsubmenu" action="" method="post" role="form">
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">لیست ثبت نام کنندگان خط</h3>
                            </div>
                            <div class="panel-body">
                                <!--Table Wrapper Start-->
                                <div class="table-responsive ls-table">
                                    <div id="ls-editable-table_filter" class="dataTables_filter">
                                        <label>جستجو:<input type="search" class="" aria-controls="ls-editable-table"></label>
                                    </div>
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>ردیف</th>
                                                <th>نام و نام خانوادگی</th>
                                                <th>نام شرکت</th>
                                                <th>نام کاربری</th>
                                                <th>شماره خط</th>
                                                <th class="text-center">عملیات</th>
                                            </tr>
                                            </thead>
                                            <tbody>
cd;
	$records_per_page = 10;
	$pagination = new Zebra_Pagination();

	$pagination->navigation_position("right");

	$reccount = $db->CountAll("linenumbers");
	$pagination->records($reccount); 
	
    $pagination->records_per_page($records_per_page);	

$rows = $db->SelectAll(
				"linenumbers",
				"*",
				"confirm = 0",
				"regdate DESC",
				($pagination->get_page() - 1) * $records_per_page,
				$records_per_page);
				
	
for($i = 0; $i < Count($rows); $i++)
{
$rownumber = $i+1;

$html.=<<<cd
                                            <tr>
                    							<td>{$rownumber}</td>
                                                <td>{$rows[$i]["name"]}</td>
                                                <td>{$rows[$i]["company"]}</td>
                                                <td>{$rows[$i]["username"]}</td>
                    							<td>{$rows[$i]["linenumber"]}</td>
                                                <td class="text-center">													
    											   <a href="seenregres.php?act=view&aid={$rows[$i]["id"]}">
                                                    <button type="button" class="btn btn-xs btn-success" title="تایید"><i class="fa fa-paper-plane"></i></button>
    											   </a>
                                                </td>
                                            </tr>
cd;
}
$pgcodes = $pagination->render(true);
$html.=<<<cd
                                        </tbody>
                                    </table>
                                </div>
                                <!--Table Wrapper Finish-->
                                {$pgcodes}
                            </div>
                        </div>
                    </div>
                </div>
            </form>               
            <!-- Main Content Element  End-->
        </div>
    </div>
</section>

cd;
    include_once("./inc/header.php");
    echo $html;
    include_once("./inc/footer.php");
?>