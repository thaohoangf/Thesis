<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sign up</title>

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
                Sign up
            </li>
            
    <li>
        <?php echo $this->tag->linkTo(array('users/login', 'Login')); ?>
    </li>
    <li>
        <?php echo $this->tag->linkTo(array('', 'Back')); ?>
    </li>

        </ul>
    </div>

    <div id="page-content-wrapper">
        <div class="container-fluid">
            
    <h2 align="center">Sign up using this form</h2>
    <?php echo $this->tag->form(array('users/add', 'method' => 'post')); ?>
    <div class="row">
        <div class="col-xs-3 col-md-offset-4">
            <label for="name">User Name</label>
            <?php echo $this->tag->textField(array('class' => 'form-control', 'name')); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-3 col-md-offset-4">
            <label for="fullname">Full Name</label>
            <?php echo $this->tag->textField(array('class' => 'form-control', 'fullname')); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-3 col-md-offset-4">
            <label for="date_of_birth">Date of Birth</label>
            <?php echo $this->tag->dateField(array('class' => 'form-control', 'date_of_birth')); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-3 col-md-offset-4">
            <label for="password">Password</label>
            <?php echo $this->tag->passwordField(array('class' => 'form-control', 'password')); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-3 col-md-offset-4">
            <label for="code">Student Code</label>
            <?php echo $this->tag->textField(array('class' => 'form-control', 'code')); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-3 col-md-offset-4">
            <label for="code">Class</label>
            <?php echo $this->tag->textField(array('class' => 'form-control', 'class')); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-3 col-md-offset-4">
            <label for="code">Phone</label>
            <?php echo $this->tag->textField(array('class' => 'form-control', 'phone')); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-3 col-md-offset-4">
            <label for="code">E-mail</label>
            <?php echo $this->tag->textField(array('class' => 'form-control', 'email')); ?>
        </div>
    </div>
    <div class="row">
        <br>
        <div class="col-xs-3 col-md-offset-4">
            <?php echo $this->tag->submitButton(array('class' => 'btn btn-info', 'Register')); ?>
        </div>
    </div>
    <?php echo $this->tag->endform(); ?>

            
        </div>
    </div>
</div>



<!-- Bootstrap Core JavaScript -->


<!-- Menu Toggle Script -->




);#}

</body>
</html>