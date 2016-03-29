<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Danh sách tỉnh</title>
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
            
    <li><?php echo $this->tag->linkTo(array('province', 'Danh sách tỉnh/thành')); ?></li>
    <li><?php echo $this->tag->linkTo(array('users', 'Danh sách người dùng')); ?></li>
    <li><?php echo $this->tag->linkTo(array('district', 'Danh sách quận/huyện')); ?></li>
    <li><?php echo $this->tag->linkTo(array('ward', 'Danh sách phường/xã')); ?></li>
    <li><?php echo $this->tag->linkTo(array('major', 'Danh sách ngành học')); ?></li>
    <li><?php echo $this->tag->linkTo(array('ethnic', 'Danh sách dân tộc')); ?></li>

        </ul>
    </div>

    <div id="page-content-wrapper">
        <div class="container-fluid">
            
    <h2>
        Danh sách các quận/huyện
    </h2>
    <div class="search" style="padding-bottom: 10px">
        <?php echo $this->tag->form(array('district/search', 'method' => 'get')); ?>
            <?php echo $this->tag->textField(array('district', 'name' => 'district')); ?>
            <?php echo $this->tag->submitButton(array('Tìm kiếm')); ?>
        <?php echo $this->tag->endform(); ?>
    </div>
    <div class="button" style="padding-bottom: 10px;">
        <?php echo $this->tag->linkTo(array('district/add', 'Thêm quận/huyện', 'class' => 'btn btn-info')); ?>
    </div>
    <div class="list-group">
        <?php foreach ($district as $district) { ?>
            <div class="list-group-item" style="cursor: pointer">
                <?php if ($district['type'] == 1) { ?>
                    <?php echo $this->tag->linkTo(array('district/' . $district['id'], 'Quận ' . $district['name'])); ?>
                <?php } elseif ($district['type'] == 2) { ?>
                    <?php echo $this->tag->linkTo(array('district/' . $district['id'], 'Huyện ' . $district['name'])); ?>
                <?php } elseif ($district['type'] == 3) { ?>
                    <?php echo $this->tag->linkTo(array('district/' . $district['id'], 'Thị xã ' . $district['name'])); ?>
                <?php } elseif ($district['type'] == 2) { ?>
                    <?php echo $this->tag->linkTo(array('district/' . $district['id'], 'Thành Phố ' . $district['name'])); ?>
                <?php } ?>
                <?php echo $this->tag->linkTo(array('district/delete/' . $district['id'], 'Xóa', 'style' => 'float: right; display: none; margin-left: 10px', 'class' => 'delete')); ?>
                <?php echo $this->tag->linkTo(array('district/edit/' . $district['id'], 'Chỉnh sửa', 'style' => 'float: right; display: none;', 'class' => 'delete')); ?>
            </div>
        <?php } ?>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script>
        $('.list-group-item').hover(function() {
                    $(this).find('.delete').show();
                },
                function () {
                    $(this).find('.delete').hide();
                }
        );
    </script>

        </div>
    </div>
</div>

</body>
</html>