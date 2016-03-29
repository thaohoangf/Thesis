<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Thêm tỉnh</title>
    <?php echo $this->tag->stylesheetLink('css/bootstrap.min.css'); ?>
    <?php echo $this->tag->stylesheetLink('css/simple-sidebar.css'); ?>

    <!-- Custom CSS -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <!--<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

</head>
<body>

<div id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand" style="color: #ffffff">
                Xin chào, Admin
            </li>
            
    <li><?php echo $this->tag->linkTo(array('district', 'Danh sách quận/huyện')); ?></li>
    <li><?php echo $this->tag->linkTo(array('province', 'Danh sách tỉnh/thành')); ?></li>
    <li><?php echo $this->tag->linkTo(array('users', 'Danh sách người dùng')); ?></li>
    <li><?php echo $this->tag->linkTo(array('ward', 'Danh sách phường/xã')); ?></li>
    <li><?php echo $this->tag->linkTo(array('major', 'Danh sách ngành học')); ?></li>
    <li><?php echo $this->tag->linkTo(array('ethnic', 'Danh sách dân tộc')); ?></li>

        </ul>
    </div>

    <div id="page-content-wrapper">
        <div class="container-fluid">
            
    <h2>
        Thêm quận/huyện
    </h2>
    <?php echo $this->tag->form(array('district/add?province=' . $province, 'method' => 'post')); ?>
    <div class="form-group">
        <div class="col-xs-3">
            <label for="name">Tên quận/huyện</label>
            <?php echo $this->tag->textField(array('name', 'class' => 'form-control')); ?>
        </div>
        <div class="col-xs-3" >
            <label for="name">Loại</label>
            <?php echo $this->tag->selectStatic(array('class' => 'form-control', 'type', array('1' => 'Quận', '2' => 'Huyện', '3' => 'Thị xã', '4' => 'Thành Phố'))); ?>
        </div>
        <?php echo $this->tag->submitButton(array('Thêm', 'class' => 'btn btn-info')); ?>
    </div>
        <?php echo $this->tag->hiddenField(array('province_id', $province)); ?>
    <?php echo $this->tag->endform(); ?>

        </div>
    </div>
</div>

</body>
</html>