{% extends 'layouts/template.volt' %}
{% block title %}Chọn tỉnh/thành{% endblock %}
{% block welcome %}Xin chào, Admin{% endblock %}
{% block wrapper %}
    <li>{{ link_to('district','Danh sách quận/huyện') }}</li>
    <li>{{ link_to('province','Danh sách tỉnh/thành') }}</li>
    <li>{{ link_to('users','Danh sách người dùng') }}</li>
    <li>{{ link_to('ward', 'Danh sách phường/xã') }}</li>
    <li>{{ link_to('major', 'Danh sách ngành học') }}</li>
    <li>{{ link_to('ethnic', 'Danh sách dân tộc') }}</li>
{% endblock %}

{% block content %}
    <h2>
        Chọn tỉnh/thành
    </h2>

    <div class="list-group">
        {% for province in province %}
            <div class="list-group-item" style="cursor: pointer">
                {% if province['type'] == 1 %}
                    {{ link_to('district?province='~province['id'],'Tỉnh '~province['name']) }}
                {% else %}
                    {{ link_to('district?province='~province['id'],'Thành Phố '~province['name']) }}
                {% endif %}
            </div>
        {% endfor %}
    </div>
{% endblock %}