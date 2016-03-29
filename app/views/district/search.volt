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
        Danh sách các quận/huyện
    </h2>
    <div class="search" style="padding-bottom: 10px">
        {{ form('district/search','method': 'get') }}
            {{ text_field('district','name': 'district') }}
            {{ submit_button('Tìm kiếm') }}
        {{ endForm() }}
    </div>
    <div class="button" style="padding-bottom: 10px;">
        {{ link_to('district/add','Thêm quận/huyện','class': 'btn btn-info') }}
    </div>
    <div class="list-group">
        {% for district in district %}
            <div class="list-group-item" style="cursor: pointer">
                {% if district['type'] == 1 %}
                    {{ link_to('district/'~district['id'],'Quận '~district['name']) }}
                {% elseif district['type'] == 2 %}
                    {{ link_to('district/'~district['id'],'Huyện '~district['name']) }}
                {% elseif district['type'] == 3 %}
                    {{ link_to('district/'~district['id'],'Thị xã '~district['name']) }}
                {% elseif district['type'] == 2 %}
                    {{ link_to('district/'~district['id'],'Thành Phố '~district['name']) }}
                {% endif %}
                {{ link_to('district/delete/'~district['id'],'Xóa','style':"float: right; display: none; margin-left: 10px",'class':'delete') }}
                {{ link_to('district/edit/'~district['id'],'Chỉnh sửa','style':"float: right; display: none;",'class':'delete') }}
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