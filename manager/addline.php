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
	
	if ($_POST["mark"]=="saveline")
	{
		$fields = array("`lctid`","`lineno`","`ischoice`","`price`");
		$values = array("'{$_POST[cblinecount]}'","'{$_POST[edtline]}'","'{$_POST[rbchoice]}'","'{$_POST[edtprice]}'");	
		if (!$db->InsertQuery('linedef',$fields,$values)) 
		{			
			header('location:addline.php?act=new&msg=2');			
		} 	
		else 
		{  										
			header('location:addline.php?act=new&msg=1');
		}  		
	}
	else
	if ($_POST["mark"]=="editline")
	{			    
		$values = array("`lctid`"=>"'{$_POST[cblinecount]}'","`lineno`"=>"'{$_POST[edtline]}'",
						"`ischoice`"=>"'{$_POST[rbchoice]}'","`price`"=>"'{$_POST[edtprice]}'");
        $db->UpdateQuery("linedef",$values,array("id='{$_GET[lid]}'"));		
		header('location:addline.php?act=new&msg=1');
	}
	//echo $db->cmd;
	if ($_GET['act']=="new")
	{
		$insertoredit = "
			<button type='submit' class='btn btn-default'>ثبت</button>
			<input type='hidden' name='mark' value='saveline' /> ";
	}
	if ($_GET['act']=="edit")
	{
	    $row=$db->Select("linedef","*","id='{$_GET["lid"]}'",NULL);		
		if ($row["ischoice"])
		{
			$choiced = "checked";
			$unchoiced = "";
		}
		else
		{
			$unchoiced = "checked";
			$choiced = "";
		}
		
		$insertoredit = "
			<button type='submit' class='btn btn-default'>ویرایش</button>
			<input type='hidden' name='mark' value='editline' /> ";
	}
	if ($_GET['act']=="del")
	{
		$db->Delete("linedef"," id",$_GET["lid"]);		
		header('location:addline.php?act=new');	
	}
	
	$linecount=$db->SelectAll("linecountnum","*",NULL,"pos ASC");		
	//$cbmenu = DbSelectOptionTag("cbmenu",$menues,"name",NULL,NULL,"form-control",NULL,"  منو  ");
	$cblinecount = DbSelectOptionTag("cblinecount",$linecount,"numcount",NULL,NULL,NULL,NULL,"انتخاب تعداد ارقام");
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
                                        <input id="edtline" name="edtline" type="text" class="form-control" placeholder="خط" value="{$row['name']}"/>
                                    </div>
                                    <div class="radio-inline">
	                                    {$cblinecount}
									</div>
                                    <div class="radio-inline">
									    <label class="radio-inline">
									        <input type="radio" name="rbchoice" id="rbchoice" value="1" {$choiced}>
									        انتخابی
									    </label>
									    <label class="radio-inline">
									        <input type="radio" name="rbchoice" id="rbchoice" value="0" {$unchoiced}>
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
                                        <input id="edtprice" name="edtprice" type="text" class="form-control" placeholder="قیمت خط" value="{$row['name']}"/>
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
$rows = $db->SelectAll("linedef","*",NULL,"id ASC");
for($i = 0; $i < Count($rows); $i++)
{
$rownumber = $i+1;
$rows[$i]["lctid"] = $db->Select("linecountnum","*"," id = {$rows[$i]["lctid"]}");
$rows[$i]["ischoice"] = ($rows[$i]["ischoice"])?"انتخابی" :"غیرانتخابی";
$html.=<<<cd
	<td>{$rownumber}</td>
	<td>{$rows[$i]["lineno"]}</td>
	<td>{$rows[$i]["ischoice"]}</td>
	<td>{$rows[$i]["lctid"][1]}</td>
	<td>{$rows[$i]["price"]}</td>
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