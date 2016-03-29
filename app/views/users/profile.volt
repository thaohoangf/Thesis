{% extends 'layouts/template.volt' %}
{% block title %} {{ infor.name }} {% endblock %}
{% block welcome %} Thông tin cá nhân {% endblock %}
{% block wrapper %}
    <li>
        {{ link_to('home', 'Trang chủ') }}
    </li>

    <li>
        {{ link_to('users/logout', 'Đăng xuất') }}
    </li>
{% endblock %}

{% block content %}
    <h2 align="center">
        Thông tin cá nhân
    </h2>
    <div class="row">
        {#<div class="col-md-5 pull-right col-md-offset-3 ">#}
            {#<br>#}
            {#<p class=" text-info">May 05,2014,03:00 pm </p>#}
        {#</div>#}
        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xs-offset-0 col-sm-offset-0 col-md-offset-1 col-lg-offset-2" >
            <div class="panel panel-info" >
                <div class="panel-heading">
                    <h3 class="panel-title">{{ infor.fullname }}</h3>
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
                                    <td>{{ infor.name }}</td>
                                    <th>Họ và tên</th>
                                    <td>{{ infor.fullname }}</td>
                                </tr>
                                <tr>
                                    <th>Ngày sinh</th>
                                    <td>{{ infor.birthday }}</td>
                                    <th>Giới tính</th>
                                    <td>
                                        {% if infor.gender == "1" %}Nữ
                                        {% else %}Nam
                                        {% endif %}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Địa chỉ</th>
                                    <td>
                                        {{ ward }} <br>
                                        {{ district }} <br>
                                        {{ province }} <br>
                                    </td>
                                    <th>Email</th>
                                    <td>{{ infor.email }}</td>
                                </tr>

                                <tr>
                                <tr>
                                    <th>Số điện thoại</th>
                                    <td>{{ infor.phone }}</td>
                                    <th>Ngành</th>
                                    <td>{{ infor.major.name }}</td>
                                </tr>
                                <tr>
                                    <th>Số CMND</th>
                                    <td>{{ infor.identity_code }}</td>
                                    <th>Dân tộc</th>
                                    <td>{{ infor.ethnic.name }}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                    <span class="pull-right">
                            {{ link_to('users/edit/'~infor.id,'Cập nhật','class' : 'btn btn-sm btn-warning') }}
                            {#<i class="glyphicon glyphicon-edit"></i>#}
                        {#<a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>#}
                    </span>
                </div>

            </div>
        </div>
    </div>
{% endblock %}
