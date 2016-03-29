<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

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
                Login
            </li>
            
    <li>
        <?php echo $this->tag->linkto('session/signup', 'Sign Up'); ?>
    </li>
    <li>
        <?php echo $this->tag->linkto('', 'Back'); ?>
    </li>

        </ul>
    </div>

    <div id="page-content-wrapper">
        <div class="container-fluid">
            
    <?php echo $this->getContent(); ?>
    <?php echo $this->tag->form(array('session/start', 'method' => 'post')); ?>

    <h2 align="center">Đăng nhập vào hệ thống</h2>
    <div class="row">
        <div class="col-xs-3 col-md-offset-4">
            <label for="username">Tên đăng nhập</label>
            <?php echo $this->tag->textField(array('class' => 'form-control', 'name')); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-3 col-md-offset-4">
            <label for="password">Mật khẩu</label>
            <?php echo $this->tag->passwordField(array('class' => 'form-control', 'password')); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-3 col-md-offset-4">
            <label for="role">Đăng nhập với vai trò </label>
            <?php echo $this->tag->selectStatic(array('class' => 'form-control', 'role', array('1' => 'Admin', '0' => 'User'))); ?>
        </div>
    </div>

    <div class="row">
        <br>
        <div class="col-xs-3 col-md-offset-4">
            <?php echo $this->tag->submitButton(array('class' => 'btn btn-info', 'Đăng nhập')); ?>
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