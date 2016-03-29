{% extends "layouts\template.volt" %}
{% block content %}
    <h2>
        Danh sách biểu mẫu văn bản
    </h2>
    <div class="list-group">
        {% for form in form %}
            {{ link_to('forms/detail/'~form['id'],form['name'],'class': 'list-group-item') }}
        {% endfor %}
    </div>


{% endblock %}