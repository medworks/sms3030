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

	if ($_POST["mark"]=="saveplan")
	{			
		$fields = array("`name`","`type`","`offer`","`pos`","`params`");		
		$values = array("'{$_POST[edtname]}'","'{$_POST[type]}'","'{$_POST[offer]}'",
						"'{$_POST[edtpos]}'","'0'");	
		if (!$db->InsertQuery('plans',$fields,$values)) 
		{			
			header('location:addplan.php?act=new&msg=2');			
		} 	
		else 
		{  			
			header('location:addplan.php?act=new&msg=1');			
		} 
		//echo $db->cmd;
	}
	else
	if ($_POST["mark"]=="editplan")
	{						
		$values = array("`name`"=>"'{$_POST[edtname]}'","`type`"=>"'{$_POST[type]}'",
						"`offer`"=>"'{$_POST[offer]}'","`pos`"=>"'{$_POST[edtpos]}'",
						"`params`"=>"'0'");
        $db->UpdateQuery("plans",$values,array("id='{$_GET[pid]}'"));		
		header('location:addplan.php?act=new&msg=1');
	}
	
	if ($_GET['act']=="new")
	{
		$insertoredit = "
			<button id='submit' type='submit' class='btn btn-default'>ثبت</button>
			<input type='hidden' name='mark' value='saveplan' /> ";		
	}


	if ($_GET['act']=="edit")
	{
	    $row=$db->Select("plans","*","id='{$_GET["pid"]}'",NULL);
		if ($row["type"]==1)	
		{
			$userchecked = "checked";
			$agentchecked = "";
		}
		else
		{
			$userchecked = "";
			$agentchecked = "checked";
		}
		if ($row["offer"]==1)
		{
			$offer = "checked";
		}
		else
		{
			$offer = "";
		}
		$insertoredit = "
			<button id='submit' type='submit' class='btn btn-default'>ویرایش</button>
			<input type='hidden' name='mark' value='editplan' /> ";		
	}
	
	
	
	

	
$html=<<<cd
    <!--Page main section start-->
    <section id="min-wrapper">
        <div id="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!--Top header start-->
                        <h3 class="ls-top-header">تعریف پلن های نمایندگی</h3>
                        <!--Top header end -->
                        <!--Top breadcrumb start -->
                        <ol class="breadcrumb">
                            <li><a href="admin.php"><i class="fa fa-home"></i></a></li>
                            <li class="active">تعریف پلن های نمایندگی</li>
                        </ol>
                        <!--Top breadcrumb start -->
                    </div>
                </div>
                <!-- Main Content Element  Start-->
                <form id="frmdata" name="frmdata" enctype="multipart/form-data" action="" method="post" class="form-inline ls_form" role="form">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">عنوان پلن</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <input id="edtname" name="edtname" type="text" class="form-control" style="direction:ltr" placeholder="اسم پلن" value="{$row['name']}"/>
                                    </div>
                                    <div class="form-group">
                                        <input id="edtpos" name="edtpos"  type="text" class="form-control" placeholder="ترتیب" value="{$row['pos']}" />
                                    </div>
                                    <label style="width:90px">
                                        <input type="checkbox" name="offer" value="1" {$offer}>
                                        <i></i> پلن پیشنهادی
                                    </label>
                                    <!-- <div class="radio-inline">
                                        <label class="radio-inline">
                                            <input type="radio" name="type" id="optionsRadios3" value="1" {$userchecked}>
                                            کاربری
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="type" id="optionsRadios4" value="2" {$agentchecked}>
                                            نمایندگی
                                        </label>
                                    </div> -->
                                    <span class="help_text" style="display:inherit">برای گذاشتن علائم در توان از تگ &lt;sup&gt; &lt;/sup&gt; در اسم پلن استفاده نمایید.به طور مثال: <span style="direction:ltr;display:inline-block">A&lt;sup&gt;+&lt;/sup&gt;<span> </span>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">انتخاب پارامترها</h3>
                                </div>
                                <div class="panel-body">
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">ثبت اطلاعات</h3>
                                </div>
                                <div class="panel-body">
                                	{$insertoredit}
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