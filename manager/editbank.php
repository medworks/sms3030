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
		$db->Delete("bankinfo"," id ",$_GET["bid"]);		
		header('location:editbank.php?act=edit');	
	}		

$html=<<<cd
<section id="min-wrapper">
    <div id="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!--Top header start-->
                    <h3 class="ls-top-header">ویرایش اطلاعات بانکی</h3>
                    <!--Top header end -->
                    <!--Top breadcrumb start -->
                    <ol class="breadcrumb">
                        <li><a href="admin.php"><i class="fa fa-home"></i></a></li>
                        <li class="active">ویرایش اطلاعات بانکی</li>
                    </ol>
                    <!--Top breadcrumb start -->
                </div>
            </div>
            <!-- Main Content Element  Start-->                            
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">لیست حساب ها</h3>
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
                                                <th>نام بانک</th>
                                                <th>دارنده حساب</th>
                                                <th>شماره حساب</th>
                                                <th>شماره کارت</th>
                                                <th class="text-center">عملیات</th>
                                            </tr>
                                            </thead>
                                            <tbody>
cd;
	$records_per_page = 10;
	$pagination = new Zebra_Pagination();

	$pagination->navigation_position("right");

	$reccount = $db->CountAll("bankinfo");
	$pagination->records($reccount); 
	
    $pagination->records_per_page($records_per_page);	

$rows = $db->SelectAll(
				"bankinfo",
				"*",
				NULL,
				"id ASC",
				($pagination->get_page() - 1) * $records_per_page,
				$records_per_page);
				
for($i = 0; $i < Count($rows); $i++)
{
$rownumber = $i+1;
$html.=<<<cd
                                            <tr>
                    							<td>{$rownumber}</td>
                    							<td>{$rows[$i]["name"]}</td>
                                                <td>{$rows[$i]["owner"]}</td>
                                                <td>{$rows[$i]["accno"]}</td>
                    							<td>{$rows[$i]["cardno"]}</td>
                                                <td class="text-center">													
    											   <a href="bank.php?act=edit&bid={$rows[$i]['id']}">                 
                                                    <button class="btn btn-xs btn-warning" title="ویرایش"><i class="fa fa-pencil-square-o"></i></button>
                                                    </a>
                                                    <a href="?act=del&bid={$rows[$i]['id']}">                                               
                                                        <button class="btn btn-xs btn-danger" title="پاک کردن"><i class="fa fa-minus"></i></button>
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
            <!-- Main Content Element  End-->
        </div>
    </div>
</section>

cd;
    include_once("./inc/header.php");
    echo $html;
    include_once("./inc/footer.php");
?>