{% extends 'layouts/template.volt' %}
{% block title %}Xin chào!{% endblock %}
{% block welcome %}Chào bạn{% endblock %}
{% block wrapper %}
    <li>
        {{ link_to("session", 'Đăng nhập') }}
    </li>
    <li>
        {{ link_to("session/signup", 'Đăng ký') }}
    </li>
{% endblock %}

{% block content %}
    <h2>
        Hệ thống tra cứu biểu mẫu văn bản phục vụ công tác đào tạo
    </h2>
{% endblock %}