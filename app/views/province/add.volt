{% extends 'layouts/template.volt' %}
{% block title %}Thêm tỉnh{% endblock %}
{% block welcome %}Xin chào, Admin{% endblock %}
{% block wrapper %}
    <li>{{ link_to('province','Danh sách tỉnh/thành') }}</li>
    <li>{{ link_to('users','Danh sách người dùng') }}</li>
    <li>{{ link_to('district','Danh sách quận/huyện') }}</li>
    <li>{{ link_to('ward', 'Danh sách phường/xã') }}</li>
    <li>{{ link_to('major', 'Danh sách ngành học') }}</li>
    <li>{{ link_to('ethnic', 'Danh sách dân tộc') }}</li>
{% endblock %}

{% block content %}
    <h2>
        Thêm tỉnh
    </h2>
    {{ form('province/add', 'method': 'post') }}
    <div class="form-group">
        <div class="col-xs-3">
            <label for="name">Tên tỉnh/ thành phố</label>
            {{ text_field('name','class': 'form-control') }}
        </div>
        <div class="col-xs-3" >
            <label for="name">Loại</label>
            {{ select_static('class': 'form-control', 'type', ['1': 'Tỉnh', '2': 'Thành Phố']) }}
        </div>


        {{ submit_button('Thêm', 'class': 'btn btn-info', 'name': 'add') }}
    </div>

    {{ endform() }}
{% endblock %}