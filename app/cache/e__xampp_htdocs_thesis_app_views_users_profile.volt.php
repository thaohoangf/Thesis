<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> <?php echo $infor->name; ?> </title>

    <!-- Bootstrap Core CSS -->
    
    <?php echo $this->tag->stylesheetLink('css/bootstrap.min.css'); ?>
    <?php echo $this->tag->stylesheetLink('css/simple-sidebar.css'); ?>

    <!-- Custom CSS -->
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <!--<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    
    <![endif]-->

</head>
<body>

<div id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand" style="color: #ffffff">
                 Thông tin cá nhân 
            </li>
            
    <li>
        <?php echo $this->tag->linkTo(array('home', 'Trang chủ')); ?>
    </li>

    <li>
        <?php echo $this->tag->linkTo(array('users/logout', 'Đăng xuất')); ?>
    </li>

        </ul>
    </div>

    <div id="page-content-wrapper">
        <div class="container-fluid">
            
    <h2 align="center">
        Thông tin cá nhân
    </h2>
    <div class="row">
        
            
            
        
        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xs-offset-0 col-sm-offset-0 col-md-offset-1 col-lg-offset-2" >
            <div class="panel panel-info" >
                <div class="panel-heading">
                    <h3 class="panel-title"><?php echo $infor->fullname; ?></h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-2 col-lg-2 " align="center">
                            <img alt="User Pic" src="http://babyinfoforyou.com/wp-content/uploads/2014/10/avatar-300x300.png" class="img-circle img-responsive">
                        </div>
                        <div class=" col-md-9 col-lg-9 ">
                            <table class="table table-user-information">
                                <tbody>
                                <tr>
                                    <th>Tên đăng nhập </th>
                                    <td><?php echo $infor->name; ?></td>
                                    <th>Họ và tên</th>
                                    <td><?php echo $infor->fullname; ?></td>
                                </tr>
                                <tr>
                                    <th>Ngày sinh</th>
                                    <td><?php echo $infor->birthday; ?></td>
                                    <th>Giới tính</th>
                                    <td>
                                        <?php if ($infor->gender == '1') { ?>Nữ
                                        <?php } else { ?>Nam
                                        <?php } ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Địa chỉ</th>
                                    <td>
                                        <?php echo $ward; ?> <br>
                                        <?php echo $district; ?> <br>
                                        <?php echo $province; ?> <br>
                                    </td>
                                    <th>Email</th>
                                    <td><?php echo $infor->email; ?></td>
                                </tr>

                                <tr>
                                <tr>
                                    <th>Số điện thoại</th>
                                    <td><?php echo $infor->phone; ?></td>
                                    <th>Ngành</th>
                                    <td><?php echo $infor->major->name; ?></td>
                                </tr>
                                <tr>
                                    <th>Số CMND</th>
                                    <td><?php echo $infor->identity_code; ?></td>
                                    <th>Dân tộc</th>
                                    <td><?php echo $infor->ethnic->name; ?></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                    <span class="pull-right">
                            <?php echo $this->tag->linkTo(array('users/edit/' . $infor->id, 'Cập nhật', 'class' => 'btn btn-sm btn-warning')); ?>
                            
                        
                    </span>
                </div>

            </div>
        </div>
    </div>

            
        </div>
    </div>
</div>



<!-- Bootstrap Core JavaScript -->


<!-- Menu Toggle Script -->




);#}

</body>
</html>