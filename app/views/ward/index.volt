{% extends 'layouts/template.volt' %}
{% block title %}Danh sách phường/xã{% endblock %}
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
    <h2>Danh sách phường/xã</h2>
    <br>
    {{ form('ward', 'method': 'post') }}
        <table>
            <tr>
                <th>Chọn tỉnh</th>
                <th>Chọn quận/huyện</th>
            </tr>
            <tr>
                <td>{{ select('province',province,'using': ['id','name']) }}</td>
                <td>{{ select('district',district,'using': ['id','name']) }}</td>
            </tr>
        </table>
        {{ submit_button('Xong') }}
    {{ endform() }}
    <br><br>

    <div class="list-group">
        {% for ward in ward %}
            <div class="list-group-item" style="cursor: pointer">
                {% if ward['type'] == 1 %}
                    {{ link_to('ward/edit/'~ward['id'],'Phường '~ward['name']) }}
                {% elseif ward['type'] == 2 %}
                    {{ link_to('ward/edit/'~ward['id'],'Xã '~ward['name']) }}
                {% else %}
                    {{ link_to('ward/edit/'~ward['id'],'Thành Phố '~ward['name']) }}
                {% endif %}
                {{ link_to('ward/delete/'~ward['id'],'Xóa','style':"float: right; display: none; margin-left: 10px",'class':'delete') }}
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