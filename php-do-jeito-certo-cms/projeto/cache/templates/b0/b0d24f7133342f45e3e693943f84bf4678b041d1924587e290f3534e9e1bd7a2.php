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

/* users/index.phtml */
class __TwigTemplate_879b95b3fd712506698a2159473bac9a1b17afdd4fc1bddb2c85482f53290fa0 extends \Twig\Template
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
    <table class=\"\">
        <thead>
            <tr>
                <th>id</th>
                <th>nome</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 22
            echo "            <tr>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"/admin/users/";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 26), "html", null, true);
            echo "\">ver</a>
                    <a href=\"/admin/users/edit/";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 27), "html", null, true);
            echo "\">editar</a>
                    <form action=\"/admin/users/delete/";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 28), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </tbody>
    </table>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "users/index.phtml";
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
    <title>Index</title>
</head>

<body>
    <table class=\"\">
        <thead>
            <tr>
                <th>id</th>
                <th>nome</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            {% for user in users %}
            <tr>
                <td>{{ user.id }}</td>
                <td>{{ user.email }}</td>
                <td>
                    <a href=\"/admin/users/{{user.id}}\">ver</a>
                    <a href=\"/admin/users/edit/{{user.id}}\">editar</a>
                    <form action=\"/admin/users/delete/{{ user.id }}\" method=\"post\" style=\"display:inline-block\">
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
</body>

</html>", "users/index.phtml", "/var/www/php-do-jeito-certo-cms/projeto/templates/users/index.phtml");
    }
}
