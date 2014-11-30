<?php

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
            <form id="frmsubmenu" class="form-inline ls_form" name="frmsubmenu" action="" method="post" role="form">
                
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
                                            <tr>
                    							<td>1</td>
                    							<td>مجتبی امجدی</td>
                                                <td>767</td>
                                                <td>5137464613679</td>
                    							<td>513746456613679</td>
                                                <td class="text-center">													
    											   <a href="addnews.php?act=edit&amp;did=2">                 
                                                    <button class="btn btn-xs btn-warning" title="ویرایش"><i class="fa fa-pencil-square-o"></i></button>
                                                    </a>
                                                    <a href="?act=del&amp;did=2">                                               
                                                        <button class="btn btn-xs btn-danger" title="پاک کردن"><i class="fa fa-minus"></i></button>
                                                    </a>    
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!--Table Wrapper Finish-->
                                
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