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
class __TwigTemplate_09d1042770ffbde4d4a7e05c66f22ac7baaeeea5e7ed3292f28b5948b4a5638f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'meta_title' => [$this, 'block_meta_title'],
            'content_before' => [$this, 'block_content_before'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout_default.phtml";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout_default.phtml", "404.phtml", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo gettext("Error");
    }

    // line 5
    public function block_content_before($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "        <!-- Page Heading/Breadcrumbs -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">404</h1>
\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t<li><a href=\"";
        // line 11
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("");
        echo "\">";
        echo gettext("Home");
        echo "</a></li>
\t\t\t\t\t<li class=\"active\">404</li>
\t\t\t\t</ol>
            </div>
        </div>
        <!-- /.row -->
";
    }

    // line 18
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "
<div class=\"jumbotron\">
    <h1>";
        // line 21
        echo gettext("Looks like we have a misunderstanding here");
        echo "</h1>
\t<p>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "getMessage", [], "any", false, false, false, 22), "html", null, true);
        echo "</p>
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
        return array (  91 => 22,  87 => 21,  83 => 19,  79 => 18,  66 => 11,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout_default.phtml\" %}

{% block meta_title %}{% trans 'Error' %}{% endblock %}

{% block content_before %}
        <!-- Page Heading/Breadcrumbs -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">404</h1>
\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t<li><a href=\"{{''|link }}\">{% trans 'Home' %}</a></li>
\t\t\t\t\t<li class=\"active\">404</li>
\t\t\t\t</ol>
            </div>
        </div>
        <!-- /.row -->
{% endblock %}
{% block content %}

<div class=\"jumbotron\">
    <h1>{% trans 'Looks like we have a misunderstanding here' %}</h1>
\t<p>{{ exception.getMessage }}</p>
</div>

{% endblock %}", "404.phtml", "/home/lexcicxy/hostshibe.cf/bb-themes/bootstrap/html/404.phtml");
    }
}
