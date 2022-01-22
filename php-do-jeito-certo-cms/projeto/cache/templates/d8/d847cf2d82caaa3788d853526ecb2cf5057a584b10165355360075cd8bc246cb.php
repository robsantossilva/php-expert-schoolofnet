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

/* pages/index.phtml */
class __TwigTemplate_fba24d292d3362058f3ea3917ecb7bb31150729a11ced9e9bfca7accdb5f22df extends \Twig\Template
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
    <table class=\"\">
        <thead>
            <tr>
                <th>id</th>
                <th>title</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pages"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 22
            echo "            <tr>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "id", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "title", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"/admin/pages/";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "id", [], "any", false, false, false, 26), "html", null, true);
            echo "\">ver</a>
                    <a href=\"/admin/pages/edit/";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "id", [], "any", false, false, false, 27), "html", null, true);
            echo "\">editar</a>
                    <form action=\"/admin/pages/delete/";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "id", [], "any", false, false, false, 28), "html", null, true);
            echo "\" method=\"post\" style=\"display:inline-block\">
                        <input type=\"submit\" value=\"remover\">
                    </form>
                </td>
            </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 34
            echo "            <tr>
                <td colspan=\"3\">Nenhum registro</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </tbody>
    </table>

    <a href=\"/admin/pages/new\">Nova página</a>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "pages/index.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 38,  95 => 34,  84 => 28,  80 => 27,  76 => 26,  71 => 24,  67 => 23,  64 => 22,  59 => 21,  37 => 1,);
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
    <table class=\"\">
        <thead>
            <tr>
                <th>id</th>
                <th>title</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            {% for page in pages %}
            <tr>
                <td>{{ page.id }}</td>
                <td>{{ page.title }}</td>
                <td>
                    <a href=\"/admin/pages/{{page.id}}\">ver</a>
                    <a href=\"/admin/pages/edit/{{page.id}}\">editar</a>
                    <form action=\"/admin/pages/delete/{{ page.id }}\" method=\"post\" style=\"display:inline-block\">
                        <input type=\"submit\" value=\"remover\">
                    </form>
                </td>
            </tr>
            {% else %}
            <tr>
                <td colspan=\"3\">Nenhum registro</td>
            </tr>
            {% endfor %}
        </tbody>
    </table>

    <a href=\"/admin/pages/new\">Nova página</a>
</body>

</html>", "pages/index.phtml", "/var/www/php-do-jeito-certo-cms/projeto/templates/pages/index.phtml");
    }
}
