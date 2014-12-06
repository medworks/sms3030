<?php
	include_once("../config.php");
	include_once("../classes/functions.php");
  	include_once("../classes/messages.php");
  	include_once("../classes/session.php");	
  	include_once("../classes/security.php");
  	include_once("../classes/database.php");	
	include_once("../classes/login.php");
    include_once("../lib/persiandate.php"); 

	$login = Login::GetLogin();
    if (!$login->IsLogged())
	{
		header("Location: ../index.php");
		die(); // solve a security bug
	}
	$db = Database::GetDatabase();	
	
	if ($_POST["mark"]=="savenum")
	{
		$fields = array("`numcount`","`pos`");		
		$values = array("'{$_POST[edtcount]}'","'{$_POST[edtpos]}'");	
		if (!$db->InsertQuery('linecountnum',$fields,$values)) 
		{			
			header('location:addnum.php?act=new&msg=2');			
		} 	
		else 
		{  										
			header('location:addnum.php?act=new&msg=1');
		}  		
	}
	else
	if ($_POST["mark"]=="editnum")
	{			    
		$values = array("`numcount`"=>"'{$_POST[edtcount]}'","`pos`"=>"'{$_POST[edtpos]}'");
        $db->UpdateQuery("linecountnum",$values,array("id='{$_GET[lid]}'"));		
		header('location:addnum.php?act=new&msg=1');
	}	
	if ($_GET['act']=="new")
	{
		$insertoredit = "
			<button type='submit' class='btn btn-default'>ثبت</button>
			<input type='hidden' name='mark' value='savenum' /> ";
	}
	if ($_GET['act']=="edit")
	{
	    $row=$db->Select("linecountnum","*","id='{$_GET["lid"]}'",NULL);		
		$insertoredit = "
			<button type='submit' class='btn btn-default'>ویرایش</button>
			<input type='hidden' name='mark' value='editnum' /> ";
	}
	if ($_GET['act']=="del")
	{
		$db->Delete("linecountnum"," id",$_GET["lid"]);		
		header('location:addnum.php?act=new');	
	}	
$msgs = GetMessage($_GET['msg']);

$html=<<<cd
    <!--Page main section start-->
    <section id="min-wrapper">
        <div id="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!--Top header start-->
                        <h3 class="ls-top-header">تعریف تعداد ارقام خطوط</h3>
                        <!--Top header end -->
                        <!--Top breadcrumb start -->
                        <ol class="breadcrumb">
                            <li><a href="javascript:void(0);"><i class="fa fa-home"></i></a></li>
                            <li class="active">تعریف تعداد ارقام</li>
                        </ol>
                        <!--Top breadcrumb start -->
                    </div>
                </div>
                <!-- Main Content Element  Start-->
                <form action="" method="post" id="frmmenu" class="form-inline ls_form" role="form">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">تعریف تعداد ارقام</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <input id="edtcount" name="edtcount" type="text" class="form-control" placeholder="تعداد رقم" value="{$row['numcount']}"/>
                                    </div>
                                    <div class="form-group">
                                        <input id="edtpos" name="edtpos"  type="text" class="form-control" placeholder="ترتیب" value="{$row['pos']}" />
                                    </div>
                                    {$insertoredit}
                                </div>
                            </div>
                        </div>
                    </div>
				</form>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
							<div class="panel-heading">
                                <h3 class="panel-title">جدول ارقام</h3>
                            </div>
							 <div class="panel-body">
							 <!--Table Wrapper Start-->
							 <div class="table-responsive ls-table">
							 <table class="table">
								<thead>
									<tr>
										<th>ردیف</th>
										<th>تعداد ارقام</th>
										<th>ترتیب</th>
										<th>عملیات</th>
									</tr>
								</thead>
								<tbody>
								<tr>
cd;
$rows = $db->SelectAll("linecountnum","*",NULL,"pos ASC");
for($i = 0; $i < Count($rows); $i++)
{
$rownumber = $i+1;
$html.=<<<cd
	<td>{$rownumber}</td>
	<td>{$rows[$i]["numcount"]}</td>
	<td>{$rows[$i]["pos"]}</td>
	<td>
		<ul class="ls-glyphicons-list">
			<li>
				<a href="?act=del&lid={$rows[$i]["id"]}" title="پاک کردن" style="margin-left:5px"><span class="glyphicon glyphicon-remove"></span></a>
				<a href="?act=edit&lid={$rows[$i]["id"]}" title="ویرایش"><span class="glyphicon glyphicon-edit"></span></a>
			</li>
		</ul>
	</td>
</tr>
cd;
}
$html.=<<<cd
</tbody>
</table>
</div>
<!--Table Wrapper Finish-->
</div>
</div>
</div>
</div>
<!-- Main Content Element  End-->
</div>
</div>
    </section>
    <!--Page main section end -->
cd;
	include_once("./inc/header.php");
	echo $html;
    include_once("./inc/footer.php");
?>