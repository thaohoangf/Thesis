<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{% block  title %}{% endblock %}</title>
    {{ stylesheet_link('css/bootstrap.min.css') }}
    {{ stylesheet_link('css/simple-sidebar.css') }}

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
                {% block welcome %}{% endblock %}
            </li>
            {% block wrapper %}{% endblock %}
        </ul>
    </div>

    <div id="page-content-wrapper">
        <div class="container-fluid">
            {% block content %}{% endblock %}
        </div>
    </div>
</div>

</body>
</html>