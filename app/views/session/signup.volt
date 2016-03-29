{% extends 'layouts/template.volt' %}
{% block title %}Đăng ký{% endblock %}
{% block welcome %}Đăng ký{% endblock %}
{% block wrapper %}
    <li>
        {{ link_to('session', 'Đăng nhập') }}
    </li>
    <li>
        {{ link_to('', 'Quay lại') }}
    </li>
{% endblock %}
{% block content %}
    <h2 align="center">Đăng ký tài khoản</h2>
    {{ form('session/add','method':'post') }}
    <div class="row">
        <div class="col-xs-3 col-md-offset-4">
            <label for="name">Tên đăng nhập</label>
            {{ text_field('class':'form-control','name') }}
        </div>
    </div>
    <div class="row">
        <div class="col-xs-3 col-md-offset-4">
            <label for="fullname">Họ tên</label>
            {{ text_field('class':'form-control', 'fullname') }}
        </div>
    </div>
    <div class="row">
        <div class="col-xs-3 col-md-offset-4">
            <label for="date_of_birth">Ngày sinh</label>
            {{ date_field('class': 'form-control', 'date_of_birth') }}
        </div>
    </div>
    <div class="row">
        <div class="col-xs-3 col-md-offset-4">
            <label for="password">Mật khẩu</label>
            {{ password_field("class": "form-control", 'password') }}
        </div>
    </div>
    <div class="row">
        <div class="col-xs-3 col-md-offset-4">
            <label for="code">Mã số sinh viên</label>
            {{ text_field('class':'form-control', 'code') }}
        </div>
    </div>
    <div class="row">
        <div class="col-xs-3 col-md-offset-4">
            <label for="code">Lớp</label>
            {{ text_field('class':'form-control', 'class') }}
        </div>
    </div>
    <div class="row">
        <div class="col-xs-3 col-md-offset-4">
            <label for="code">Số điện thoại</label>
            {{ text_field('class':'form-control', 'phone') }}
        </div>
    </div>
    <div class="row">
        <div class="col-xs-3 col-md-offset-4">
            <label for="code">E-mail</label>
            {{ text_field('class':'form-control', 'email') }}
        </div>
    </div>
    <div class="row">
        <br>
        <div class="col-xs-3 col-md-offset-4">
            {{ submit_button('class':'btn btn-info', "Đăng ký") }}
        </div>
    </div>
    {{ endForm() }}
{% endblock %}