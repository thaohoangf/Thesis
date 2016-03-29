<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sửa thông tin cá nhân</title>

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
                Xin chào
            </li>
            
    <li>
        <?php echo $this->tag->linkTo(array('', 'Trang chủ')); ?>
    </li>
    <li>
        <?php echo $this->tag->linkTo(array('users/profile/1', 'Trang cá nhân')); ?>
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
                        <?php echo $this->tag->form(array('users/edit/' . $infor->id, 'method: post')); ?>
                        <div class="col-md-2 col-lg-2 " align="center">
                            <img alt="User Pic" src="http://babyinfoforyou.com/wp-content/uploads/2014/10/avatar-300x300.png" class="img-circle img-responsive">
                        </div>
                        <div class=" col-md-9 col-lg-9 ">
                            <table class="table table-user-information">
                                <tbody>
                                <tr>
                                    <th>Tên đăng nhâp:</th>
                                    <td>
                                        <?php echo $infor->name; ?>
                                    </td>
                                    <th>Họ và tên</th>
                                    <td>
                                        <?php echo $this->tag->textField(array('class' => 'form-control', 'fullname', 'value' => $infor->fullname)); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Ngày sinh:</th>
                                    <td><?php echo $this->tag->dateField(array('class' => 'form-control', 'birthday', 'value' => $infor->birthday)); ?></td>
                                    <th>Giới tính</th>
                                    <td>
                                        <?php echo $this->tag->selectStatic(array('class' => 'form-control', 'gender', 'value' => $infor->gender, array('1' => 'Nữ', '2' => 'Nam'))); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Địa chỉ</th>
                                    <td>
                                        <?php echo $this->tag->select(array('province_code', $provinces, 'using' => array('id', 'name'), 'useEmpty' => true, 'emptyText' => 'Chọn tỉnh', 'emptyValue' => '@', 'value' => $infor->province_code, 'class' => 'form-control')); ?>
                                        <?php echo $this->tag->select(array('district_code', $districts, 'using' => array('id', 'name'), 'useEmpty' => true, 'emptyText' => 'Chọn quận/huyện', 'emptyValue' => '@', 'value' => $infor->district_code, 'class' => 'form-control')); ?>
                                        <?php echo $this->tag->select(array('ward_code', $wards, 'using' => array('id', 'name'), 'useEmpty' => true, 'emptyText' => 'Chọn phường/xã', 'emptyValue' => '@', 'value' => $infor->ward_code, 'class' => 'form-control')); ?>
                                    </td>
                                    <th>E-mail</th>
                                    <td><?php echo $this->tag->textField(array('class' => 'form-control', 'email', 'value' => $infor->email)); ?></td>
                                </tr>

                                <tr>
                                <tr>
                                    <th>Số điện thoại</th>
                                    <td><?php echo $this->tag->textField(array('class' => 'form-control', 'phone', 'value' => $infor->phone)); ?></td>
                                    <th>Ngành học</th>
                                    <td><?php echo $this->tag->select(array('major_code', $majors, 'using' => array('id', 'name'), 'useEmpty' => true, 'emptyValue' => '@', 'emptyText' => 'Chọn ngành học', 'value' => $infor->major_code, 'class' => 'form-control')); ?></td>
                                </tr>
                                <tr>
                                    <th>Số CMND</th>
                                    <td><?php echo $this->tag->textField(array('class' => 'form-control', 'identity_code', 'value' => $infor->identity_code)); ?></td>
                                    <th>Dân tộc</th>
                                    <td><?php echo $this->tag->select(array('ethnic_code', $ethnics, 'using' => array('id', 'name'), 'useEmpty' => true, 'emptyText' => 'Chọn dân tộc', 'emptyValue' => '@', 'value' => $infor->ethnic_code, 'class' => 'form-control')); ?></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                    <span class="pull-right">
                        <?php echo $this->tag->submitButton(array('class' => 'btn btn-sm btn-warning', 'Cập nhật', 'name' => 'edit')); ?>
                    </span>
                </div>
            </div>
            <?php echo $this->tag->endform(); ?>
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script>
        if($('#province').val() == "@") {
            $("#district,#ward").prop('disabled', true);
        }else {
            if($('#district').val() == '@'){
                $('#ward').prop('disabled',true);
            }
        }

        $('#province').on('change',function(){
            if($('#province').val() == "@") {
                $("#district,#ward").prop('disabled', true);
            }else{
                $("#district").prop('disabled', false);
                $('#district').on('change', function () {
                    if($('#district').val() == '@'){
                        $('#ward').prop('disabled',true);
                    }else{
                        $('#ward').prop('disabled',false);
                    }
                });
            }
        });

        $('#district').on('change', function () {
            if($('#district').val() == '@'){
                $('#ward').prop('disabled',true);
            }else{
                $('#ward').prop('disabled',false);
            }
        });

    </script>

            
        </div>
    </div>
</div>



<!-- Bootstrap Core JavaScript -->


<!-- Menu Toggle Script -->




);#}

</body>
</html>