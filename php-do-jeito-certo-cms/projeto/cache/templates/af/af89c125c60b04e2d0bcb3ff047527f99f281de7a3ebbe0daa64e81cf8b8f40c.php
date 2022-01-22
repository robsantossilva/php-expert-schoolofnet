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

/* users/new.phtml */
class __TwigTemplate_8c059a7cdc8561193322d7cf29dee156ef6f973a7205daf2d8034a50f38c3b3b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
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
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Index</title>
</head>

<body>

    <h3>Novo usuário</h3>

    <form action=\"/admin/users/new\" method=\"post\">
        <input name=\"email\" type=\"email\" placeholder=\"email\">
        <input name=\"password\" type=\"password\" placeholder=\"senha\">
        <input type=\"submit\" value=\"Salvar\">
    </form>

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "users/new.phtml";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Index</title>
</head>

<body>

    <h3>Novo usuário</h3>

    <form action=\"/admin/users/new\" method=\"post\">
        <input name=\"email\" type=\"email\" placeholder=\"email\">
        <input name=\"password\" type=\"password\" placeholder=\"senha\">
        <input type=\"submit\" value=\"Salvar\">
    </form>

</body>

</html>", "users/new.phtml", "/var/www/php-do-jeito-certo-cms/projeto/templates/users/new.phtml");
    }
}
