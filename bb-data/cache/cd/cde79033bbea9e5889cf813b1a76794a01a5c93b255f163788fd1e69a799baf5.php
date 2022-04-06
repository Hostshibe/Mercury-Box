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

/* mod_page_tos.phtml */
class __TwigTemplate_706180f38db7f24d26f09149fad41ab361d90a9e86006a0897785aa53cd955b2 extends \Twig\Template
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
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.phtml") : ("layout_default.phtml")), "mod_page_tos.phtml", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo gettext("Terms and Conditions");
    }

    // line 4
    public function block_content_before($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "        <!-- Page Heading/Breadcrumbs -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "name", [], "any", false, false, false, 8), "html", null, true);
        echo " ";
        echo gettext("Terms and Conditions");
        echo "</h1>
\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t<li><a href=\"";
        // line 10
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("");
        echo "\">";
        echo gettext("Home");
        echo "</a></li>
\t\t\t\t\t<li class=\"active\">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "name", [], "any", false, false, false, 11), "html", null, true);
        echo " ";
        echo gettext("Terms and Conditions");
        echo "</li>
\t\t\t\t</ol>
            </div>
        </div>
        <!-- /.row -->
";
    }

    // line 17
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "
\t";
        // line 19
        echo twig_bbmd_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "tos", [], "any", false, false, false, 19));
        echo "

";
    }

    public function getTemplateName()
    {
        return "mod_page_tos.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 19,  92 => 18,  88 => 17,  76 => 11,  70 => 10,  63 => 8,  58 => 5,  54 => 4,  47 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends request.ajax ? \"layout_blank.phtml\" : \"layout_default.phtml\" %}
{% block meta_title %}{% trans 'Terms and Conditions' %}{% endblock %}

{% block content_before %}
        <!-- Page Heading/Breadcrumbs -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">{{ company.name }} {% trans 'Terms and Conditions' %}</h1>
\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t<li><a href=\"{{''|link }}\">{% trans 'Home' %}</a></li>
\t\t\t\t\t<li class=\"active\">{{ company.name }} {% trans 'Terms and Conditions' %}</li>
\t\t\t\t</ol>
            </div>
        </div>
        <!-- /.row -->
{% endblock %}
{% block content %}

\t{{ company.tos|bbmd }}

{% endblock %}", "mod_page_tos.phtml", "/home/lexcicxy/hostshibe.cf/bb-themes/bootstrap/html/mod_page_tos.phtml");
    }
}
