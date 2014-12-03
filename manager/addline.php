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
	
	if ($_POST["mark"]=="saveparam")
	{
		$fields = array("`name`","`pos`");		
		$values = array("'{$_POST[edtname]}'","'{$_POST[edtpos]}'");	
		if (!$db->InsertQuery('params',$fields,$values)) 
		{			
			header('location:addparam.php?act=new&msg=2');			
		} 	
		else 
		{  										
			header('location:addparam.php?act=new&msg=1');
		}  		
	}
	else
	if ($_POST["mark"]=="editparam")
	{			    
		$values = array("`name`"=>"'{$_POST[edtname]}'","`pos`"=>"'{$_POST[edtpos]}'");
        $db->UpdateQuery("params",$values,array("id='{$_GET[pid]}'"));		
		header('location:addparam.php?act=new&msg=1');
	}	
	if ($_GET['act']=="new")
	{
		$insertoredit = "
			<button type='submit' class='btn btn-default'>ثبت</button>
			<input type='hidden' name='mark' value='saveparam' /> ";
	}
	if ($_GET['act']=="edit")
	{
	    $row=$db->Select("params","*","id='{$_GET["pid"]}'",NULL);		
		$insertoredit = "
			<button type='submit' class='btn btn-default'>ویرایش</button>
			<input type='hidden' name='mark' value='editparam' /> ";
	}
	if ($_GET['act']=="del")
	{
		$db->Delete("params"," id",$_GET["pid"]);		
		header('location:addparam.php?act=new');	
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
                        <h3 class="ls-top-header">تعریف خطوط</h3>
                        <!--Top header end -->
                        <!--Top breadcrumb start -->
                        <ol class="breadcrumb">
                            <li><a href="admin.php"><i class="fa fa-home"></i></a></li>
                            <li class="active">تعریف خطوط</li>
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
                                    <h3 class="panel-title">تعریف خطوط</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <input id="edtname" name="edtname" type="text" class="form-control" placeholder="خط" value="{$row['name']}"/>
                                    </div>
                                    <div class="radio-inline">
	                                    <select class="form-control">
										  <option>تعداد ارقام</option>
										  <option value="1">Volvo</option>
										  <option value="2">Saab</option>
										  <option value="3">VW</option>
										  <option value="4">Audi</option>
										</select>
									</div>
                                    <div class="radio-inline">
									    <label class="radio-inline">
									        <input type="radio" name="type" id="optionsRadios3" value="1" {$userchecked}>
									        انتخابی
									    </label>
									    <label class="radio-inline">
									        <input type="radio" name="type" id="optionsRadios4" value="2" {$agentchecked}>
									        غیرانتخابی
									    </label>
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                      <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">هزینه</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <input id="edtname" name="edtname" type="text" class="form-control" placeholder="قیمت خط" value="{$row['name']}"/>
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
										<th>خط</th>
										<th>نوع</th>
										<th>تعداد ارقام</th>
										<th>قیمت(ریال)</th>
										<th>عملیات</th>
									</tr>
								</thead>
								<tbody>
								<tr>
cd;
$rows = $db->SelectAll("params","*",NULL,"pos ASC");
for($i = 0; $i < Count($rows); $i++)
{
$rownumber = $i+1;
$html.=<<<cd
	<td>{$rownumber}</td>
	<td>{$rows[$i]["name"]}</td>
	<td>انتخابی</td>
	<td>14 رقمی</td>
	<td>50000</td>
	<td>
		<ul class="ls-glyphicons-list">
			<li>
				<a href="?act=del&pid={$rows[$i]["id"]}" title="پاک کردن" style="margin-left:5px"><span class="glyphicon glyphicon-remove"></span></a>
				<a href="?act=edit&pid={$rows[$i]["id"]}" title="ویرایش"><span class="glyphicon glyphicon-edit"></span></a>
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