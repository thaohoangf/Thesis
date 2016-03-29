{% extends "layouts/template.volt" %}
{% block title %}Login{% endblock %}
{% block welcome %}Login{% endblock %}
{% block wrapper %}
    <li>
        {{ linkTo('session/signup','Sign Up') }}
    </li>
    <li>
        {{ linkTo('','Back') }}
    </li>
{% endblock %}
{% block content %}
    {{ content() }}
    {{ form('session/start', 'method':'post') }}

    <h2 align="center">Đăng nhập vào hệ thống</h2>
    <div class="row">
        <div class="col-xs-3 col-md-offset-4">
            <label for="username">Tên đăng nhập</label>
            {{ text_field('class':'form-control','name') }}
        </div>
    </div>

    <div class="row">
        <div class="col-xs-3 col-md-offset-4">
            <label for="password">Mật khẩu</label>
            {{ password_field('class':'form-control','password') }}
        </div>
    </div>

    <div class="row">
        <div class="col-xs-3 col-md-offset-4">
            <label for="role">Đăng nhập với vai trò </label>
            {{ select_static('class': 'form-control','role', ['1': 'Admin', '0': 'User' ]) }}
        </div>
    </div>

    <div class="row">
        <br>
        <div class="col-xs-3 col-md-offset-4">
            {{ submit_button('class':'btn btn-info','Đăng nhập') }}
        </div>
    </div>
{% endblock %}