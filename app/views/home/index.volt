{% extends 'layouts/template.volt' %}
{% block title %}Trang chủ{% endblock %}
{#{% block welcome%}Xin chào {{ user.fullname }}{% endblock %}#}
{% block wrapper %}
    {#<li>#}
        {#{{ link_to('users/profile/'~user.id, 'Profile') }}#}
    {#</li>#}

    {#<li>#}
        {#{{ link_to('users/logout', 'Log Out') }}#}
    {#</li>#}
{% endblock %}
{% block content %}
    <h2>
        Danh sách các tài liệu
    </h2>

    <div class="list-group">
        <a href="#" class="list-group-item">fdskfsdksf</a>
        <a href="#" class="list-group-item">fdskfsdksf</a>
        <a href="#" class="list-group-item">fdskfsdksf</a>
        <a href="#" class="list-group-item">fdskfsdksf</a>
        <a href="#" class="list-group-item">fdskfsdksf</a>
    </div>
{% endblock %}