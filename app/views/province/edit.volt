{% extends 'layouts/template.volt' %}
{% block title %}{{ province.name }}{% endblock %}
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
    <h2>Chỉnh sửa thông tin tỉnh/thành</h2>

    {{ form('province/edit/'~province.id,'method': 'post') }}
    <table style="margin: 10px">
        <tr>
            <th>Tên</th>
            <th>Đơn vị hành chính</th>
        </tr>
        <tr>
            <td style="padding-right: 10px">
                {{ text_field('name', 'value': province.name) }}
            </td>
            <td>
                {{ select_static('type', ['1': 'Tỉnh', '2': 'Thành phố'], 'value': province.type) }}
            </td>
        </tr>
    </table>
        {{ submit_button('Chỉnh sửa','name': 'edit') }}
    {{ endform() }}
{% endblock %}