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

/* mod_wysiwyg_settings.phtml */
class __TwigTemplate_ed77127b2d3452676f1dd210c61ec10e28f0d9adec85b037ffa8303ce53ab23b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'meta_title' => [$this, 'block_meta_title'],
            'breadcrumbs' => [$this, 'block_breadcrumbs'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.phtml") : ("layout_default.phtml")), "mod_wysiwyg_settings.phtml", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.phtml", "mod_wysiwyg_settings.phtml", 2)->unwrap();
        // line 4
        $context["active_menu"] = "system";
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo gettext("Wysiwyg settings");
    }

    // line 7
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "<ul>
    <li class=\"firstB\"><a href=\"";
        // line 9
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/");
        echo "\">";
        echo gettext("Home");
        echo "</a></li>
    <li><a href=\"";
        // line 10
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("system");
        echo "\">";
        echo gettext("Settings");
        echo "</a></li>
    <li class=\"lastB\">";
        // line 11
        echo gettext("Wysiwyg settings");
        echo "</li>
</ul>
";
    }

    // line 16
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "
<div class=\"widget\">
    <div class=\"head\">
        <h5 class=\"iCog\">";
        // line 20
        echo gettext("Wysiwyg settings");
        echo "</h5>
    </div>

";
        // line 23
        $context["params"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "extension_config_get", [0 => ["ext" => "mod_wysiwyg"]], "method", false, false, false, 23);
        // line 24
        echo "
<form method=\"post\" action=\"";
        // line 25
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/extension/config_save");
        echo "\" class=\"mainForm api-form\" data-api-msg=\"";
        echo gettext("Configuration updated");
        echo "\">
    <fieldset>
        <div class=\"rowElem noborder\">
            <label>";
        // line 28
        echo gettext("Default editor");
        echo "</label>
            <div class=\"formRight\">
                ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "wysiwyg_editors", [], "any", false, false, false, 30));
        foreach ($context['_seq'] as $context["editor"] => $context["title"]) {
            // line 31
            echo "                <input type=\"radio\" name=\"editor\" value=\"";
            echo twig_escape_filter($this->env, $context["editor"], "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "editor", [], "any", false, false, false, 31) == $context["editor"])) {
                echo "checked=\"checked\"";
            }
            echo "/><label>";
            echo twig_escape_filter($this->env, $context["title"], "html", null, true);
            echo "</label>
                <br/>
                <br/>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['editor'], $context['title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "            </div>
            <div class=\"fix\"></div>
        </div>

        <input type=\"submit\" value=\"";
        // line 39
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" />
        <input type=\"hidden\" name=\"ext\" value=\"mod_wysiwyg\" />
    </fieldset>
</form>
</div>

";
    }

    public function getTemplateName()
    {
        return "mod_wysiwyg_settings.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 39,  139 => 35,  122 => 31,  118 => 30,  113 => 28,  105 => 25,  102 => 24,  100 => 23,  94 => 20,  89 => 17,  85 => 16,  78 => 11,  72 => 10,  66 => 9,  63 => 8,  59 => 7,  52 => 3,  48 => 1,  46 => 4,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends request.ajax ? \"layout_blank.phtml\" : \"layout_default.phtml\" %}
{% import \"macro_functions.phtml\" as mf %}
{% block meta_title %}{% trans 'Wysiwyg settings' %}{% endblock %}
{% set active_menu = 'system' %}


{% block breadcrumbs %}
<ul>
    <li class=\"firstB\"><a href=\"{{ '/'|alink }}\">{% trans 'Home' %}</a></li>
    <li><a href=\"{{ 'system'|alink }}\">{% trans 'Settings' %}</a></li>
    <li class=\"lastB\">{% trans 'Wysiwyg settings' %}</li>
</ul>
{% endblock %}


{% block content %}

<div class=\"widget\">
    <div class=\"head\">
        <h5 class=\"iCog\">{% trans 'Wysiwyg settings' %}</h5>
    </div>

{% set params = admin.extension_config_get({\"ext\":\"mod_wysiwyg\"}) %}

<form method=\"post\" action=\"{{ 'api/admin/extension/config_save'|link }}\" class=\"mainForm api-form\" data-api-msg=\"{% trans 'Configuration updated' %}\">
    <fieldset>
        <div class=\"rowElem noborder\">
            <label>{% trans 'Default editor' %}</label>
            <div class=\"formRight\">
                {% for editor,title in admin.wysiwyg_editors %}
                <input type=\"radio\" name=\"editor\" value=\"{{editor}}\" {% if params.editor == editor %}checked=\"checked\"{% endif %}/><label>{{title}}</label>
                <br/>
                <br/>
                {% endfor %}
            </div>
            <div class=\"fix\"></div>
        </div>

        <input type=\"submit\" value=\"{% trans 'Update' %}\" class=\"greyishBtn submitForm\" />
        <input type=\"hidden\" name=\"ext\" value=\"mod_wysiwyg\" />
    </fieldset>
</form>
</div>

{% endblock %}", "mod_wysiwyg_settings.phtml", "/home/lexcicxy/hostshibe.cf/bb-modules/Wysiwyg/html_admin/mod_wysiwyg_settings.phtml");
    }
}
