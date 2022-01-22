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

/* pages/edit.phtml */
class __TwigTemplate_fc5da7ea57a6abe3254edc47a90929602c555414bd841231b1f1831496be3eb4 extends \Twig\Template
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
    <h3>Página: ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, false, 12), "html", null, true);
        echo "</h3>

    <form action=\"/admin/pages/edit/";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "id", [], "any", false, false, false, 14), "html", null, true);
        echo "\" method=\"post\">
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
        return "pages/edit.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 16,  59 => 15,  55 => 14,  50 => 12,  37 => 1,);
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
    <h3>Página: {{ page.title }}</h3>

    <form action=\"/admin/pages/edit/{{ page.id }}\" method=\"post\">
        <input name=\"title\" type=\"text\" placeholder=\"title\" value=\"{{ page.title }}\">
        <textarea name=\"body\">{{ page.body }}</textarea>
        <input type=\"submit\" value=\"Salvar\">
    </form>
</body>

</html>", "pages/edit.phtml", "/var/www/php-do-jeito-certo-cms/projeto/templates/pages/edit.phtml");
    }
}
