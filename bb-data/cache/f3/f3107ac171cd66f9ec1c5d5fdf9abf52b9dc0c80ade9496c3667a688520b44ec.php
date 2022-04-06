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

/* mod_system_index.phtml */
class __TwigTemplate_5ef20a4b76d3068d693714cdaf29d49133f1b820431f20822b9faa1f90032493 extends \Twig\Template
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
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.phtml") : ("layout_default.phtml")), "mod_system_index.phtml", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.phtml", "mod_system_index.phtml", 2)->unwrap();
        // line 4
        $context["active_menu"] = "system";
        // line 5
        $context["params"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "system_get_params", [], "any", false, false, false, 5);
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo gettext("Settings");
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "
<div class=\"widget simpleTabs\">

    <ul class=\"tabs\">
        <li><a href=\"#tab-index\">";
        // line 11
        echo gettext("Settings");
        echo "</a></li>
    </ul>

    <div class=\"tabs_container\">
        <div class=\"fix\"></div>
        <div id=\"tab-index\" class=\"tab_content nopadding\">
            ";
        // line 17
        echo twig_call_macro($macros["mf"], "macro_table_search", [], 17, $context, $this->getSourceContext());
        echo "
            <table class=\"tableStatic wide\">
                <tbody>
                    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "extension_get_list", [0 => twig_array_merge(["active" => 1, "has_settings" => 1], ($context["request"] ?? null))], "method", false, false, false, 20));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["ext"]) {
            // line 21
            echo "                    <tr ";
            echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 21)) ? ("style=\"border-top:0;\"") : (""));
            echo " class=\"hover-row\">
                        <td style=\"width: 32px;\"><a href=\"";
            // line 22
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("extension/settings");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ext"], "id", [], "any", false, false, false, 22), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ext"], "icon_url", [], "any", false, false, false, 22), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ext"], "name", [], "any", false, false, false, 22), "html", null, true);
            echo "\" style=\"width: 32px; height: 32px;\"/></a></td>
                        <td style=\"border: 0; font-weight: bold;\"><a href=\"";
            // line 23
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("extension/settings");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ext"], "id", [], "any", false, false, false, 23), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ext"], "name", [], "any", false, false, false, 23), "html", null, true);
            echo "</a></td>
                        <td style=\"width: 5%; border: 0;\"><a class=\"bb-button btn14\" href=\"";
            // line 24
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("extension/settings");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ext"], "id", [], "any", false, false, false, 24), "html", null, true);
            echo "\"><img src=\"images/icons/dark/play.png\" alt=\"\" class=\"icon\" title=\"";
            echo gettext("Module settings");
            echo "\"></a></td>
                    </tr>
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ext'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "                </tbody>
            </table>
        </div>
    </div>
    
</div>
";
    }

    public function getTemplateName()
    {
        return "mod_system_index.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 27,  125 => 24,  117 => 23,  107 => 22,  102 => 21,  85 => 20,  79 => 17,  70 => 11,  64 => 7,  60 => 6,  53 => 3,  49 => 1,  47 => 5,  45 => 4,  43 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends request.ajax ? \"layout_blank.phtml\" : \"layout_default.phtml\" %}
{% import \"macro_functions.phtml\" as mf %}
{% block meta_title %}{% trans 'Settings' %}{% endblock %}
{% set active_menu = 'system' %}
{% set params = admin.system_get_params %}
{% block content %}

<div class=\"widget simpleTabs\">

    <ul class=\"tabs\">
        <li><a href=\"#tab-index\">{% trans 'Settings' %}</a></li>
    </ul>

    <div class=\"tabs_container\">
        <div class=\"fix\"></div>
        <div id=\"tab-index\" class=\"tab_content nopadding\">
            {{ mf.table_search }}
            <table class=\"tableStatic wide\">
                <tbody>
                    {% for ext in admin.extension_get_list({\"active\":1, \"has_settings\":1}|merge(request)) %}
                    <tr {{ loop.first ? 'style=\"border-top:0;\"' : '' }} class=\"hover-row\">
                        <td style=\"width: 32px;\"><a href=\"{{ 'extension/settings'|alink }}/{{ext.id}}\"><img src=\"{{ ext.icon_url }}\" alt=\"{{ext.name}}\" style=\"width: 32px; height: 32px;\"/></a></td>
                        <td style=\"border: 0; font-weight: bold;\"><a href=\"{{ 'extension/settings'|alink }}/{{ext.id}}\">{{ ext.name }}</a></td>
                        <td style=\"width: 5%; border: 0;\"><a class=\"bb-button btn14\" href=\"{{ 'extension/settings'|alink }}/{{ext.id}}\"><img src=\"images/icons/dark/play.png\" alt=\"\" class=\"icon\" title=\"{% trans 'Module settings' %}\"></a></td>
                    </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
    
</div>
{% endblock %}", "mod_system_index.phtml", "/home/lexcicxy/hostshibe.cf/bb-themes/admin_default/html/mod_system_index.phtml");
    }
}
