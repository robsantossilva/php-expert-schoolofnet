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

/* users/edit.phtml */
class __TwigTemplate_b43b53b78bd3a8af91a91836f0001f3bfef38a6bf75f322d97fd68e9b3174a39 extends \Twig\Template
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
        echo "<h3>Usuário: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 1), "html", null, true);
        echo "</h3>

<form action=\"/admin/users/edit/";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 3), "html", null, true);
        echo "\" method=\"post\">
    <input name=\"email\" type=\"email\" placeholder=\"email\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 4), "html", null, true);
        echo "\">
    <input name=\"password\" type=\"password\" placeholder=\"senha\" value=\"\">
    <input type=\"submit\" value=\"Salvar\">
</form>";
    }

    public function getTemplateName()
    {
        return "users/edit.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h3>Usuário: {{ user.email }}</h3>

<form action=\"/admin/users/edit/{{ user.id }}\" method=\"post\">
    <input name=\"email\" type=\"email\" placeholder=\"email\" value=\"{{ user.email }}\">
    <input name=\"password\" type=\"password\" placeholder=\"senha\" value=\"\">
    <input type=\"submit\" value=\"Salvar\">
</form>", "users/edit.phtml", "/var/www/php-do-jeito-certo-cms/projeto/templates/users/edit.phtml");
    }
}
