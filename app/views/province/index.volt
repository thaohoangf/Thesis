{% extends 'layouts/template.volt' %}
{% block title %}Danh sách tỉnh{% endblock %}
{% block welcome %}Xin chào, Admin{% endblock %}
{% block wrapper%}
    <li>{{ link_to('province','Danh sách tỉnh/thành') }}</li>
    <li>{{ link_to('users','Danh sách người dùng') }}</li>
    <li>{{ link_to('district','Danh sách quận/huyện') }}</li>
    <li>{{ link_to('ward', 'Danh sách phường/xã') }}</li>
    <li>{{ link_to('major', 'Danh sách ngành học') }}</li>
    <li>{{ link_to('ethnic', 'Danh sách dân tộc') }}</li>
{% endblock %}
{% block content %}
    <h2>
       Danh sách các tỉnh/thành phố
    </h2>


    <div class="search" style="padding-bottom: 10px">
        {{ form('province/search','method': 'get') }}
            {{ text_field('province','name': 'province') }}
            {{ submit_button('Tìm kiếm') }}
        {{ endForm() }}
    </div>


    <div class="button" style="padding-bottom: 10px;">
        {{ link_to('province/add','Thêm tỉnh','class': 'btn btn-info') }}
    </div>


    <div class="list-group">
        {% for province in province %}
            <div class="list-group-item" style="cursor: pointer">
                {% if province['type'] == 1 %}
                    {{ link_to('district?province='~province['id'],'Tỉnh '~province['name']) }}
                {% else %}
                    {{ link_to('district?province='~province['id'],'Thành Phố '~province['name']) }}
                {% endif %}
                {{ link_to('province/delete/'~province['id'],'Xóa','style':"float: right; display: none; margin-left: 10px",'class':'delete') }}
                {{ link_to('province/edit/'~province['id'],'Chỉnh sửa','style':"float: right; display: none;",'class':'delete') }}
            </div>
        {% endfor %}
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
{% endblock %}