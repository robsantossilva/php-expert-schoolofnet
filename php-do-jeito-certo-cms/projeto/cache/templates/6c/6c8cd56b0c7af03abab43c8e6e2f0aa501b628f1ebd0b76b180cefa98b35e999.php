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

/* pages/new.phtml */
class __TwigTemplate_1b5a8c7bf83f71c16d1ac2ec553f10d9251aa3f78fd1d080eb885beb23b0d11f extends \Twig\Template
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
    <h3>Nova página</h3>

    <form action=\"/admin/pages/new\" method=\"post\">
        <input name=\"title\" type=\"text\" placeholder=\"title\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 15), "html", null, true);
        echo "\">
        <textarea name=\"body\">";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "body", [], "any", false, false, false, 16), "html", null, true);
        echo "</textarea>
        <input type=\"submit\" value=\"Salvar\">
    </form>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "pages/new.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 16,  53 => 15,  37 => 1,);
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
    <h3>Nova página</h3>

    <form action=\"/admin/pages/new\" method=\"post\">
        <input name=\"title\" type=\"text\" placeholder=\"title\" value=\"{{ page.title }}\">
        <textarea name=\"body\">{{ page.body }}</textarea>
        <input type=\"submit\" value=\"Salvar\">
    </form>
</body>

</html>", "pages/new.phtml", "/var/www/php-do-jeito-certo-cms/projeto/templates/pages/new.phtml");
    }
}
