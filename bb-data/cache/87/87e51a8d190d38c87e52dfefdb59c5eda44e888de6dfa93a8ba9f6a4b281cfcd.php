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

/* mod_cookieconsent_index.phtml */
class __TwigTemplate_ca7ce4ca182c4306d60eea9ce8c0804b14d077a5961a2c1a16574e3f8b19f63d extends \Twig\Template
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
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.phtml") : ("layout_default.phtml")), "mod_cookieconsent_index.phtml", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.phtml", "mod_cookieconsent_index.phtml", 2)->unwrap();
        // line 4
        $context["active_menu"] = "extensions";
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Cookie consent settings";
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "<div class=\"widget\">
    <div class=\"head\">
        <h5>";
        // line 9
        echo gettext("Edit cookie consent message text");
        echo "</h5>
    </div>
    <div class=\"help\">
        <p>";
        // line 12
        echo gettext("Here you can specify message which will be shown to user. It will be shown until user will click <strong>Close &times;</strong> button, however it will not be intrusive and will not disturb to perform any actions.");
        echo "</p>
        <p>";
        // line 13
        echo gettext("If there is a need to change the way notification looks or is being displayed, you can do it by editing");
        echo " <strong>src/bb-modules/Cookieconsent/html_client/mod_cookieconsent_index.phtml</strong></p>
    </div>

    ";
        // line 16
        $context["params"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "extension_config_get", [0 => ["ext" => "mod_cookieconsent"]], "method", false, false, false, 16);
        // line 17
        echo "        <div class=\"tab_content nopadding\" id=\"tab-new\">
            <form method=\"post\" action=\"";
        // line 18
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/extension/config_save");
        echo "\" class=\"mainForm api-form\" data-api-msg=\"";
        echo gettext("Configuration updated");
        echo "\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <div class=\"formBottom\">
                            <textarea cols=\"5\" rows=\"10\" name=\"message\" placeholder=\"";
        // line 22
        echo gettext("Add note or todo task");
        echo "\" >";
        if (twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "message", [], "any", false, false, false, 22)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "message", [], "any", false, false, false, 22), "html", null, true);
        } else {
            echo "This website uses cookies. By continuing to use this website, you consent to our use of these cookies.";
        }
        echo "</textarea>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <input type=\"hidden\" name=\"ext\" value=\"mod_cookieconsent\" />
                    <input type=\"submit\" value=\"";
        // line 27
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" />
                </fieldset>
            </form>
        </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "mod_cookieconsent_index.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 27,  96 => 22,  87 => 18,  84 => 17,  82 => 16,  76 => 13,  72 => 12,  66 => 9,  62 => 7,  58 => 6,  51 => 3,  47 => 1,  45 => 4,  43 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends request.ajax ? \"layout_blank.phtml\" : \"layout_default.phtml\" %}
{% import \"macro_functions.phtml\" as mf %}
{% block meta_title %}Cookie consent settings{% endblock %}
{% set active_menu = 'extensions' %}

{% block content %}
<div class=\"widget\">
    <div class=\"head\">
        <h5>{% trans 'Edit cookie consent message text' %}</h5>
    </div>
    <div class=\"help\">
        <p>{% trans 'Here you can specify message which will be shown to user. It will be shown until user will click <strong>Close &times;</strong> button, however it will not be intrusive and will not disturb to perform any actions.' %}</p>
        <p>{% trans 'If there is a need to change the way notification looks or is being displayed, you can do it by editing' %} <strong>src/bb-modules/Cookieconsent/html_client/mod_cookieconsent_index.phtml</strong></p>
    </div>

    {% set params = admin.extension_config_get({\"ext\":\"mod_cookieconsent\"}) %}
        <div class=\"tab_content nopadding\" id=\"tab-new\">
            <form method=\"post\" action=\"{{ 'api/admin/extension/config_save'|link }}\" class=\"mainForm api-form\" data-api-msg=\"{% trans 'Configuration updated' %}\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <div class=\"formBottom\">
                            <textarea cols=\"5\" rows=\"10\" name=\"message\" placeholder=\"{% trans 'Add note or todo task' %}\" >{% if params.message %}{{params.message}}{% else %}This website uses cookies. By continuing to use this website, you consent to our use of these cookies.{% endif %}</textarea>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <input type=\"hidden\" name=\"ext\" value=\"mod_cookieconsent\" />
                    <input type=\"submit\" value=\"{% trans 'Update' %}\" class=\"greyishBtn submitForm\" />
                </fieldset>
            </form>
        </div>
</div>
{% endblock %}
", "mod_cookieconsent_index.phtml", "/home/lexcicxy/hostshibe.cf/bb-modules/Cookieconsent/html_admin/mod_cookieconsent_index.phtml");
    }
}
