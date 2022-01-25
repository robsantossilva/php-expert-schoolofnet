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

/* login/index.phtml */
class __TwigTemplate_3699f42f7b6ac6252cc0f1e312724a770c532d01b04d4d5647b0e56a6e5fef01 extends \Twig\Template
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
    <title>Document</title>
</head>

<body>
    <h3>Autenticação</h3>

    <form action=\"/admin/login\" method=\"post\">
        <input name=\"email\" type=\"email\" placeholder=\"email\">
        <input name=\"password\" type=\"password\" placeholder=\"senha\">
        <input type=\"submit\" value=\"Salvar\">
    </form>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "login/index.phtml";
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
    <title>Document</title>
</head>

<body>
    <h3>Autenticação</h3>

    <form action=\"/admin/login\" method=\"post\">
        <input name=\"email\" type=\"email\" placeholder=\"email\">
        <input name=\"password\" type=\"password\" placeholder=\"senha\">
        <input type=\"submit\" value=\"Salvar\">
    </form>
</body>

</html>", "login/index.phtml", "/var/www/php-do-jeito-certo-cms/projeto/templates/login/index.phtml");
    }
}
