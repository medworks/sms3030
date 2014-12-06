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
	
    function upload($db,$did,$mode)
    {
        if(is_uploaded_file($_FILES['userfile']['tmp_name']) && getimagesize($_FILES['userfile']['tmp_name']) != false)
        {    
            $size = getimagesize($_FILES['userfile']['tmp_name']);      
            $type = $size['mime'];			
            $imgfp = mysqli_real_escape_string($db->link,file_get_contents($_FILES['userfile']['tmp_name']));
            //echo $imgfp;
            $size = $size[3];
            $name = $_FILES['userfile']['name'];
            $maxsize = 512000;//512 kb
            //$db = Database::GetDatabase();
            //echo $db->cmd;
            if($_FILES['userfile']['size'] < $maxsize )
            {    
               
                if ($mode == "insert")
                {
                    $fields = array("`subject`","`itype`","`img`","`iname`","`isize`");     
                    $values = array("'{$_POST[edtsubject]}'","'{$type}'","'{$imgfp}'","'{$name}'","'{$size}'"); 
                    $db->InsertQuery('clients',$fields,$values);
					//echo $db->cmd;
                }
                else
                {
                  $imgrow =$db->Select("clients","*","id='{$did}'");
                  if ($imgfp != $imgrow["img"])
                  {
                    $values = array("`subject`"=>"'{$_POST[edtsubject]}'",									
									"`itype`"=>"'{$type}'","`img`"=>"'{$imgfp}'",
									"`iname`"=>"'{$name}'","`isize`"=>"'{$size}'");
                    $db->UpdateQuery("clients",$values,array("id='{$did}'")); 
                  } 
                }   
                //echo $db->cmd;
            }
            else
            {        
                throw new Exception("خطای اندازه فایل ");
            }
        }
        else
        {       
            throw new Exception("این فرمت از عکس پشتیبانی نمی شود");
        }
    }   
    
    if ($_POST["mark"]=="saveclient")
    {     
            upload($db,$did,"insert");
            header('location:addclient.php?act=new&msg=1');
    }
    else
    if ($_POST["mark"]=="editclient")
    {                       
        upload($db,$_GET["did"],"edit");    
        header('location:addclient.php?act=new&msg=1');
    }
    
    if ($_GET['act']=="new")
    {
        $insertoredit = "
            <button id='submit' type='submit' class='btn btn-default'>ثبت</button>
            <input type='hidden' name='mark' value='saveclient' /> ";  		
    }
	if ($_GET['act']=="edit")
	{
	    $row=$db->Select("clients","*","id='{$_GET["did"]}'",NULL);		
		$insertoredit = "
			<button id='submit' type='submit' class='btn btn-default'>ویرایش</button>
			<input type='hidden' name='mark' value='editclient' /> ";
		
		if (isset($row["img"]))
		{
			$imgload = " <img src='img.php?did={$row["id"]}&type=client' width='200px' height='170px' /> ";
		}	
	}

        
$html=<<<cd
    <!--Page main section start-->
    <section id="min-wrapper">
        <div id="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!--Top header start-->
                        <h3 class="ls-top-header">تعریف مشتری</h3>
                        <!--Top header end -->
                        <!--Top breadcrumb start -->
                        <ol class="breadcrumb">
                            <li><a href="javascript:void(0);"><i class="fa fa-home"></i></a></li>
                            <li class="active">تعریف مشتری</li>
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
                                    <h3 class="panel-title">عنوان</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <input id="edtsubject" name="edtsubject" type="text" class="form-control" value="{$row["subject"]}"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">انتخاب عکس</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="row ls_divider last">
                                        <div class="form-group">
                                            <div class="col-md-10 col-md-offset-2 ls-group-input">
                                                <input kl_virtual_keyboard_secure_input="on" id="userfile" name="userfile" class="file" multiple="true" data-preview-file-type="any" type="file" />
                                                <input type="hidden" name="MAX_FILE_SIZE" value="512000" />
                                            </div>
                                        </div>                                        
                                    </div>    
										{$imgload}
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
cd;

    include_once("./inc/header.php");
    echo $html;
    include_once("./inc/footer.php");
?>