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

/* 404.phtml */
class __TwigTemplate_fdbfd807ffc06865520e735aecfa876442b0803ef90af2182f49880d628ed8d0 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'meta_title' => [$this, 'block_meta_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout_login.phtml";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $context["help_query"] = twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "getMessage", [], "any", false, false, false, 3);
        // line 1
        $this->parent = $this->loadTemplate("layout_login.phtml", "404.phtml", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo gettext("Error");
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "getCode", [], "any", false, false, false, 2), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
<!-- Error info area -->
<div class=\"wrapper\">
    <div class=\"errorPage\">
        <h2 class=\"red errorTitle\"><span>";
        // line 10
        echo gettext("Something went wrong here");
        echo "</span></h2>
        <h1>";
        // line 11
        if ((twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "getCode", [], "any", false, false, false, 11) == 0)) {
            echo "500";
        } else {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "getCode", [], "any", false, false, false, 11), "html", null, true);
            echo " ";
        }
        echo "</h1>
        <span class=\"bubbles\"></span>
        <p>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "getMessage", [], "any", false, false, false, 13), "html", null, true);
        echo "!</p>
        ";
        // line 14
        if ((twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "getCode", [], "any", false, false, false, 14) == 403)) {
            // line 15
            echo "        <div class=\"backToDash\"><a href=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/staff/login");
            echo "\" title=\"\" class=\"seaBtn button\">";
            echo gettext("Login");
            echo "</a></div>
        ";
        } else {
            // line 17
            echo "        <div class=\"backToDash\"><a href=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/index");
            echo "\" title=\"\" class=\"seaBtn button\">";
            echo gettext("Back to Dashboard");
            echo "</a></div>
        ";
        }
        // line 19
        echo "    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "404.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 19,  98 => 17,  90 => 15,  88 => 14,  84 => 13,  73 => 11,  69 => 10,  63 => 6,  59 => 5,  50 => 2,  45 => 1,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout_login.phtml\" %}
{% block meta_title %}{% trans 'Error' %} {{ exception.getCode  }}{% endblock %}
{% set help_query = exception.getMessage %}

{% block content %}

<!-- Error info area -->
<div class=\"wrapper\">
    <div class=\"errorPage\">
        <h2 class=\"red errorTitle\"><span>{% trans 'Something went wrong here' %}</span></h2>
        <h1>{% if exception.getCode == 0%}500{% else %} {{ exception.getCode }} {% endif %}</h1>
        <span class=\"bubbles\"></span>
        <p>{{ exception.getMessage }}!</p>
        {% if exception.getCode == 403 %}
        <div class=\"backToDash\"><a href=\"{{ '/staff/login'|alink }}\" title=\"\" class=\"seaBtn button\">{% trans 'Login' %}</a></div>
        {% else %}
        <div class=\"backToDash\"><a href=\"{{ '/index'|alink }}\" title=\"\" class=\"seaBtn button\">{% trans 'Back to Dashboard' %}</a></div>
        {% endif %}
    </div>
</div>

{% endblock %}", "404.phtml", "/home/lexcicxy/hostshibe.cf/bb-themes/admin_default/html/404.phtml");
    }
}
