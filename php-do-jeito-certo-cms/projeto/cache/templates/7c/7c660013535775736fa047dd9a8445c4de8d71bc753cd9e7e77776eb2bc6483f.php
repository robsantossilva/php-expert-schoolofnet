<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* layouts/front.phtml */
class __TwigTemplate_711301c7fc6e3e08c91fbb6cbdf299327b1cd5a1a1f3eb8f85f84e0483957b1f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Document</title>
    <link rel=\"stylesheet\" href=\"/style.css\">
</head>

<body>
    <nav>
        <ul>
            <li><a href=\"/\">Home</a></li>
            <li><a href=\"/page/2\">Sobre nós</a></li>
            <li><a href=\"/page/3\">Contato</a></li>
        </ul>
    </nav>
    ";
        // line 20
        $this->displayBlock('content', $context, $blocks);
        // line 21
        echo "</body>

</html>";
    }

    // line 20
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "layouts/front.phtml";
    }

    public function getDebugInfo()
    {
        return array (  67 => 20,  61 => 21,  59 => 20,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Document</title>
    <link rel=\"stylesheet\" href=\"/style.css\">
</head>

<body>
    <nav>
        <ul>
            <li><a href=\"/\">Home</a></li>
            <li><a href=\"/page/2\">Sobre nós</a></li>
            <li><a href=\"/page/3\">Contato</a></li>
        </ul>
    </nav>
    {% block content %}{% endblock %}
</body>

</html>", "layouts/front.phtml", "/var/www/php-do-jeito-certo-cms/projeto/templates/layouts/front.phtml");
    }
}
