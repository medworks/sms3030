<?php
	include_once("../config.php");
	include_once("../classes/functions.php");
  	include_once("../classes/messages.php");
  	include_once("../classes/session.php");	
  	include_once("../classes/security.php");
  	include_once("../classes/database.php");	


	
	if ($_POST['mark']=="savedesc")
	{
		SetSettingValue("LinesDescribe",$_POST["txtdesc"]);
		
		header('location:linedetail.php?act=new');	
	}
	
	$LinesDescribe = GetSettingValue('LinesDescribe',0);
	
$msgs = GetMessage($_GET['msg']);

$html=<<<cd
    <!--Page main section start-->
    <section id="min-wrapper">
        <div id="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!--Top header start-->
                        <h3 class="ls-top-header">توضیحات صفحه خطوط</h3>
                        <!--Top header end -->
                        <!--Top breadcrumb start -->
                        <ol class="breadcrumb">
                            <li><a href="admin.php"><i class="fa fa-home"></i></a></li>
                            <li class="active">توضیحات خطوط</li>
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
                                    <h3 class="panel-title">توضیحات</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="col-md-10 ls-group-input">
                                        <textarea class="animatedTextArea form-control" name="txtdesc">{$LinesDescribe}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">ثبت</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                    	<button type='submit' class='btn btn-default'>ثبت</button>
										<input type='hidden' name='mark' value='savedesc' /> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
				</form>
               
			</div>
		</div>
    </section>
    <!--Page main section end -->
cd;
	include_once("./inc/header.php");
	echo $html;
    include_once("./inc/footer.php");
?>