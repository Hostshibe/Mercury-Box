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

/* mod_theme_settings.phtml */
class __TwigTemplate_da7b9a662fb73b1022613efccefa4c22460faf5c5d53a6657a9a50871e268d16 extends \Twig\Template
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
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.phtml") : ("layout_default.phtml")), "mod_theme_settings.phtml", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $context["active_menu"] = "system";
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo gettext("Themes");
    }

    // line 6
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "<ul>
    <li class=\"firstB\"><a href=\"";
        // line 8
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/");
        echo "\">";
        echo gettext("Home");
        echo "</a></li>
    <li><a href=\"";
        // line 9
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("system");
        echo "\">";
        echo gettext("Settings");
        echo "</a></li>
    <li class=\"lastB\">";
        // line 10
        echo gettext("Themes");
        echo "</li>
</ul>
";
    }

    // line 15
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "<div class=\"widget\">
    <div class=\"head\"><h5 class=\"iPaintBrush\">";
        // line 17
        echo gettext("Client area themes");
        echo "</h5></div>

    <table class=\"tableStatic wide\">
        <thead>
        <tr>
            <td>";
        // line 22
        echo gettext("Name");
        echo "</td>
            <td>";
        // line 23
        echo gettext("Actions");
        echo "</td>
        </tr>
        </thead>

        <tbody>
        ";
        // line 28
        $context["themes"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "theme_get_list", [0 => ["per_page" => 100]], "method", false, false, false, 28);
        // line 29
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["themes"] ?? null), "list", [], "any", false, false, false, 29));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["theme"]) {
            // line 30
            echo "
        <tr>
            <td>";
            // line 32
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "extension_theme", [0 => true], "method", false, false, false, 32), "code", [], "any", false, false, false, 32) == twig_get_attribute($this->env, $this->source, $context["theme"], "code", [], "any", false, false, false, 32))) {
                echo "<strong>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["theme"], "code", [], "any", false, false, false, 32), "html", null, true);
                echo "</strong>";
            } else {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["theme"], "code", [], "any", false, false, false, 32), "html", null, true);
            }
            echo "</td>
            <td class=\"actions\">
                <a class=\"btnIconLeft mr10\" href=\"";
            // line 34
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("theme");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["theme"], "code", [], "any", false, false, false, 34), "html", null, true);
            echo "\"><img src=\"images/icons/dark/cog.png\" alt=\"\" class=\"icon\"><span>";
            echo gettext("Settings");
            echo "</span></a>
                ";
            // line 35
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "extension_theme", [0 => true], "method", false, false, false, 35), "code", [], "any", false, false, false, 35) != twig_get_attribute($this->env, $this->source, $context["theme"], "code", [], "any", false, false, false, 35))) {
                // line 36
                echo "                <a class=\"btnIconLeft mr10 api-link\" data-api-redirect=\"";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("extension/settings/theme");
                echo "\" href=\"";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/theme/select", ["code" => twig_get_attribute($this->env, $this->source, $context["theme"], "code", [], "any", false, false, false, 36)]);
                echo "\"><img src=\"images/icons/dark/star.png\" alt=\"\" class=\"icon\"><span>";
                echo gettext("Set as default");
                echo "</span></a>
                ";
            }
            // line 38
            echo "            </td>
        </tr>
        </tbody>

        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 43
            echo "        <tbody>
        <tr>
            <td colspan=\"5\">
                ";
            // line 46
            echo gettext("The list is empty");
            // line 47
            echo "            </td>
        </tr>
        </tbody>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "    </table>

</div>

<div class=\"widget\">
    <div class=\"head\"><h5 class=\"iPaintBrush\">";
        // line 56
        echo gettext("Admin area themes");
        echo "</h5></div>

    <table class=\"tableStatic wide\">
        <thead>
        <tr>
            <td>";
        // line 61
        echo gettext("Name");
        echo "</td>
            <td>";
        // line 62
        echo gettext("Actions");
        echo "</td>
        </tr>
        </thead>

        <tbody>
        ";
        // line 67
        $context["themes"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "theme_get_admin_list", [0 => ["per_page" => 100]], "method", false, false, false, 67);
        // line 68
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["themes"] ?? null), "list", [], "any", false, false, false, 68));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["theme"]) {
            // line 69
            echo "
        <tr>
            <td>";
            // line 71
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "extension_theme", [0 => false], "method", false, false, false, 71), "code", [], "any", false, false, false, 71) == twig_get_attribute($this->env, $this->source, $context["theme"], "code", [], "any", false, false, false, 71))) {
                echo "<strong>";
                echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["theme"], "code", [], "any", false, false, false, 71), ["admin_" => ""]), "html", null, true);
                echo "</strong>";
            } else {
                echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["theme"], "code", [], "any", false, false, false, 71), ["admin_" => ""]), "html", null, true);
            }
            echo "</td>
            <td class=\"actions\">
                <a class=\"btnIconLeft mr10\" href=\"";
            // line 73
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("theme");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["theme"], "code", [], "any", false, false, false, 73), "html", null, true);
            echo "\"><img src=\"images/icons/dark/cog.png\" alt=\"\" class=\"icon\"><span>";
            echo gettext("Settings");
            echo "</span></a>
                ";
            // line 74
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "extension_theme", [0 => false], "method", false, false, false, 74), "code", [], "any", false, false, false, 74) != twig_get_attribute($this->env, $this->source, $context["theme"], "code", [], "any", false, false, false, 74))) {
                // line 75
                echo "                <a class=\"btnIconLeft mr10 api-link\" data-api-redirect=\"";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("extension/settings/theme");
                echo "\" href=\"";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/theme/select", ["code" => twig_get_attribute($this->env, $this->source, $context["theme"], "code", [], "any", false, false, false, 75)]);
                echo "\">
                    <img src=\"images/icons/dark/star.png\" alt=\"\" class=\"icon\"><span>";
                // line 76
                echo gettext("Set as default");
                echo "</span>
                </a>
                ";
            }
            // line 79
            echo "            </td>
        </tr>
        </tbody>

        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 84
            echo "        <tbody>
        <tr>
            <td colspan=\"5\">
                ";
            // line 87
            echo gettext("The list is empty");
            // line 88
            echo "            </td>
        </tr>
        </tbody>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "    </table>

</div>
";
    }

    public function getTemplateName()
    {
        return "mod_theme_settings.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 92,  267 => 88,  265 => 87,  260 => 84,  251 => 79,  245 => 76,  238 => 75,  236 => 74,  228 => 73,  217 => 71,  213 => 69,  207 => 68,  205 => 67,  197 => 62,  193 => 61,  185 => 56,  178 => 51,  169 => 47,  167 => 46,  162 => 43,  153 => 38,  143 => 36,  141 => 35,  133 => 34,  122 => 32,  118 => 30,  112 => 29,  110 => 28,  102 => 23,  98 => 22,  90 => 17,  87 => 16,  83 => 15,  76 => 10,  70 => 9,  64 => 8,  61 => 7,  57 => 6,  50 => 2,  46 => 1,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends request.ajax ? \"layout_blank.phtml\" : \"layout_default.phtml\" %}
{% block meta_title %}{% trans 'Themes' %}{% endblock %}
{% set active_menu = 'system' %}


{% block breadcrumbs %}
<ul>
    <li class=\"firstB\"><a href=\"{{ '/'|alink }}\">{% trans 'Home' %}</a></li>
    <li><a href=\"{{ 'system'|alink }}\">{% trans 'Settings' %}</a></li>
    <li class=\"lastB\">{% trans 'Themes' %}</li>
</ul>
{% endblock %}


{% block content %}
<div class=\"widget\">
    <div class=\"head\"><h5 class=\"iPaintBrush\">{% trans 'Client area themes' %}</h5></div>

    <table class=\"tableStatic wide\">
        <thead>
        <tr>
            <td>{% trans 'Name' %}</td>
            <td>{% trans 'Actions' %}</td>
        </tr>
        </thead>

        <tbody>
        {% set themes = admin.theme_get_list({\"per_page\":100}) %}
        {% for i, theme in themes.list %}

        <tr>
            <td>{% if guest.extension_theme(true).code == theme.code %}<strong>{{ theme.code }}</strong>{% else %}{{ theme.code }}{% endif %}</td>
            <td class=\"actions\">
                <a class=\"btnIconLeft mr10\" href=\"{{ 'theme'|alink }}/{{theme.code}}\"><img src=\"images/icons/dark/cog.png\" alt=\"\" class=\"icon\"><span>{% trans 'Settings' %}</span></a>
                {% if guest.extension_theme(true).code != theme.code %}
                <a class=\"btnIconLeft mr10 api-link\" data-api-redirect=\"{{ 'extension/settings/theme'|alink }}\" href=\"{{ 'api/admin/theme/select'|link({'code' : theme.code}) }}\"><img src=\"images/icons/dark/star.png\" alt=\"\" class=\"icon\"><span>{% trans 'Set as default' %}</span></a>
                {% endif %}
            </td>
        </tr>
        </tbody>

        {% else %}
        <tbody>
        <tr>
            <td colspan=\"5\">
                {% trans 'The list is empty' %}
            </td>
        </tr>
        </tbody>
        {% endfor %}
    </table>

</div>

<div class=\"widget\">
    <div class=\"head\"><h5 class=\"iPaintBrush\">{% trans 'Admin area themes' %}</h5></div>

    <table class=\"tableStatic wide\">
        <thead>
        <tr>
            <td>{% trans 'Name' %}</td>
            <td>{% trans 'Actions' %}</td>
        </tr>
        </thead>

        <tbody>
        {% set themes = admin.theme_get_admin_list({\"per_page\":100}) %}
        {% for i, theme in themes.list %}

        <tr>
            <td>{% if guest.extension_theme(false).code == theme.code %}<strong>{{ theme.code|replace({'admin_': ''}) }}</strong>{% else %}{{ theme.code|replace({'admin_': ''})  }}{% endif %}</td>
            <td class=\"actions\">
                <a class=\"btnIconLeft mr10\" href=\"{{ 'theme'|alink }}/{{theme.code}}\"><img src=\"images/icons/dark/cog.png\" alt=\"\" class=\"icon\"><span>{% trans 'Settings' %}</span></a>
                {% if guest.extension_theme(false).code != theme.code %}
                <a class=\"btnIconLeft mr10 api-link\" data-api-redirect=\"{{ 'extension/settings/theme'|alink }}\" href=\"{{ 'api/admin/theme/select'|link({'code' : theme.code}) }}\">
                    <img src=\"images/icons/dark/star.png\" alt=\"\" class=\"icon\"><span>{% trans 'Set as default' %}</span>
                </a>
                {% endif %}
            </td>
        </tr>
        </tbody>

        {% else %}
        <tbody>
        <tr>
            <td colspan=\"5\">
                {% trans 'The list is empty' %}
            </td>
        </tr>
        </tbody>
        {% endfor %}
    </table>

</div>
{% endblock %}
", "mod_theme_settings.phtml", "/home/lexcicxy/hostshibe.cf/bb-modules/Theme/html_admin/mod_theme_settings.phtml");
    }
}
