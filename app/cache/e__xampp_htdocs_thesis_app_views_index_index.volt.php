<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Xin chào!</title>

    <!-- Bootstrap Core CSS -->
    
    <?php echo $this->tag->stylesheetLink('css/bootstrap.min.css'); ?>
    <?php echo $this->tag->stylesheetLink('css/simple-sidebar.css'); ?>

    <!-- Custom CSS -->
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <!--<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>-->
    
    <![endif]-->

</head>
<body>

<div id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand" style="color: #ffffff">
                Chào bạn
            </li>
            
    <li>
        <?php echo $this->tag->linkTo(array('session', 'Đăng nhập')); ?>
    </li>
    <li>
        <?php echo $this->tag->linkTo(array('session/signup', 'Đăng ký')); ?>
    </li>

        </ul>
    </div>

    <div id="page-content-wrapper">
        <div class="container-fluid">
            
    <h2>
        Hệ thống tra cứu biểu mẫu văn bản phục vụ công tác đào tạo
    </h2>

            
        </div>
    </div>
</div>



<!-- Bootstrap Core JavaScript -->


<!-- Menu Toggle Script -->




);#}

</body>
</html>