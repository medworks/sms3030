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
		$db->Delete("plans"," id",$_GET["pid"]);		
		header('location:editplan.php?act=new');	
	}	
	$msgs = GetMessage($_GET['msg']);
	
	
$html.=<<<cd
    <!--Page main section start-->
    <section id="min-wrapper">
        <div id="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!--Top header start-->
                        <h3 class="ls-top-header">ویرایش پلن های نمایندگی</h3>
                        <!--Top header end -->
                        <!--Top breadcrumb start -->
                        <ol class="breadcrumb">
                            <li><a href="admin.php"><i class="fa fa-home"></i></a></li>
                            <li class="active">ویرایش پلن ها</li>
                        </ol>
                        <!--Top breadcrumb start -->
                    </div>
                </div>
                <!-- Main Content Element  Start-->
                <form id="frmsubmenu" class="form-inline ls_form" name="frmsubmenu" action="" method="post" 
				class="form-inline ls_form" role="form">
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">لیست پلن ها</h3>
                                </div>
                                <div class="panel-body">
                                    <!--Table Wrapper Start-->
                                    <div class="table-responsive ls-table">
                                        
                                        <table class="table table-bordered table-striped">
                                            <thead>
                                            <tr>
                                                <th>ردیف</th>
                                                <th>عنوان پلن</th>
                                                <th>کاربری یا نمایندگی</th>
                                                <th>پیشنهادی</th>
                                                <th class="text-center">عملیات</th>
                                            </tr>
                                            </thead>
                                            <tbody>
cd;

	$records_per_page = 10;
	$pagination = new Zebra_Pagination();

	$pagination->navigation_position("right");

	$reccount = $db->CountAll("plans");
	$pagination->records($reccount); 
	
    $pagination->records_per_page($records_per_page);	

$rows = $db->SelectAll(
				"plans",
				"*",
				NULL,
				"pos ASC",
				($pagination->get_page() - 1) * $records_per_page,
				$records_per_page);
				
for($i = 0; $i < Count($rows); $i++)
{
$rownumber = $i+1;
$rows[$i]["type"] = ($rows[$i]["type"]==1)?"کاربری":"نمایندگی";
$rows[$i]["offer"] = ($rows[$i]["offer"])? "بله" : "خیر";
$html.=<<<cd
							<tr>
								<td>{$rownumber}</td>
								<td>{$rows[$i]["name"]}</td>
								<td>{$rows[$i]["type"]}</td>
								<td>{$rows[$i]["offer"]}</td>
cd;

$html.=<<<cd
                                                <td class="text-center">													
												   <a href="addplan.php?act=edit&pid={$rows[$i]["id"]}"  >
                                                    <button type="button" class="btn btn-xs btn-warning" title="ویرایش"><i class="fa fa-pencil-square-o"></i></button>
												   </a>
												   <a href="?act=del&pid={$rows[$i]["id"]}"  >
                                                    <button type="button" class="btn btn-xs btn-danger" title="پاک کردن"><i class="fa fa-minus"></i></button>
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
    <!--Page main section end -->
	<script type="text/javascript">
		$(document).ready(function(){
						
		});
	</script>
cd;
	include_once("./inc/header.php");
	echo $html;
    include_once("./inc/footer.php");
?>