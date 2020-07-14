{% extends "main.twig.php" %}

{% block body %}

<div>

    <h1>{{mensagem}}</h1>

    {% if mensagem | length <= 40 %}

        <h3>{{mensagem | length }}</h3>
    {% endif %}

    <ul>
        {% set indice = 1 %}

        {% for cid in cidades %}

            <li>{{indice}} - {{cid}}</li>

            {% set indice = indice + 1%}

        {% endfor %}
        
        <hr/>

        {{VAR_NAME}}

        {% if idade >= 18 %}
            <p>Pode entrar {{nome}}</p>
        {% else %}
            <p>Não pode enntrar sozinho</p>

        {% endif %}
    </ul>
</div>

{% endblock %}