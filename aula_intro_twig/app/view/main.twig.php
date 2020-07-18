{% apply spaceless %}

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Tutoria Twig</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <header>
            <h1>Tutorial Twig</h1>
            <h3>Olá, {{VAR_NAME}}
        </header>

        <secion>
            {% block body %} 
            {% endblock %}
        </section>
          

        {% include 'footer.twig.php' %}
        
    </body>
</html>

{% endapply %}