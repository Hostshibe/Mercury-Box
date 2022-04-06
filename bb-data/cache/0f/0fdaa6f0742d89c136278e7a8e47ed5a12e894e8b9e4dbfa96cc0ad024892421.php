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

/* mod_cron_settings.phtml */
class __TwigTemplate_bcafee4c693e62329841f536de147230d4d808e9e02cf8c5ba882d25f8892b02 extends \Twig\Template
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
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.phtml") : ("layout_default.phtml")), "mod_cron_settings.phtml", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.phtml", "mod_cron_settings.phtml", 2)->unwrap();
        // line 4
        $context["active_menu"] = "system";
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo gettext("Cron settings");
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
        echo gettext("Cron settings");
        echo "</li>
</ul>
";
    }

    // line 14
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "
<div class=\"widget\">
    <div class=\"head\">
        <h5 class=\"iCog\">";
        // line 18
        echo gettext("Cron settings");
        echo "</h5>
    </div>

    <div class=\"help\">
        <h3>";
        // line 22
        echo gettext("Setup scheduled tasks to be executed once a day");
        echo "</h3>
        <p>";
        // line 23
        echo gettext("Scheduled tasks must be enabled immediately after installation. Cron is responsible for sending your clients reminder about payments, domain renewal notices and many more.");
        echo "</p>
    </div>

    ";
        // line 26
        $context["cron"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "cron_info", [], "any", false, false, false, 26);
        // line 27
        echo "    <table class=\"tableStatic wide\">
        <tbody>
            <tr class=\"noborder\">
                <td>";
        // line 30
        echo gettext("Timezone");
        echo "</td>
                <td align=\"right\">";
        // line 31
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "e"), "html", null, true);
        echo "</td>
            </tr>

            <tr>
                <td>";
        // line 35
        echo gettext("Time on server");
        echo "</td>
                <td align=\"right\">";
        // line 36
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <td>";
        // line 39
        echo gettext("Last time scheduled tasks were executed");
        echo "</td>
                <td align=\"right\">
                    ";
        // line 41
        if (twig_get_attribute($this->env, $this->source, ($context["cron"] ?? null), "last_cron_exec", [], "any", false, false, false, 41)) {
            // line 42
            echo "                        ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cron"] ?? null), "last_cron_exec", [], "any", false, false, false, 42), "Y-m-d H:i:s"), "html", null, true);
            echo "
                        (";
            // line 43
            echo twig_escape_filter($this->env, twig_timeago_filter(twig_get_attribute($this->env, $this->source, ($context["cron"] ?? null), "last_cron_exec", [], "any", false, false, false, 43)), "html", null, true);
            echo " ago)
                    ";
        } else {
            // line 45
            echo "                        ";
            echo gettext("Scheduled tasks were never executed");
            // line 46
            echo "                    ";
        }
        // line 47
        echo "                </td>
            </tr>
            <tr>
                <td>";
        // line 50
        echo gettext("Unix crontab setup:");
        echo "</td>
                <td align=\"right\"><pre>*/5 * * * * php ";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cron"] ?? null), "cron_path", [], "any", false, false, false, 51), "html", null, true);
        echo "</pre></td>
            </tr>
            <tr>
                <td>";
        // line 54
        echo gettext("Execute scheduled tasks from browser");
        echo "</td>
                <td align=\"right\"><pre>";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cron"] ?? null), "cron_url", [], "any", false, false, false, 55), "html", null, true);
        echo "</pre></td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td colspan=\"2\">
                    <div class=\"aligncenter\">
                    <a href=\"";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cron"] ?? null), "cron_url", [], "any", false, false, false, 62), "html", null, true);
        echo "\" title=\"\" class=\"btn55 mr10\" target=\"_blank\"><img src=\"images/icons/middlenav/airplane.png\" alt=\"\"><span>";
        echo gettext("Execute now");
        echo "</span></a>
                    </div>
                </td>
            </tr>
        </tfoot>
    </table>
</div>

";
    }

    public function getTemplateName()
    {
        return "mod_cron_settings.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 62,  181 => 55,  177 => 54,  171 => 51,  167 => 50,  162 => 47,  159 => 46,  156 => 45,  151 => 43,  146 => 42,  144 => 41,  139 => 39,  133 => 36,  129 => 35,  122 => 31,  118 => 30,  113 => 27,  111 => 26,  105 => 23,  101 => 22,  94 => 18,  89 => 15,  85 => 14,  78 => 10,  72 => 9,  66 => 8,  63 => 7,  59 => 6,  52 => 3,  48 => 1,  46 => 4,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends request.ajax ? \"layout_blank.phtml\" : \"layout_default.phtml\" %}
{% import \"macro_functions.phtml\" as mf %}
{% block meta_title %}{% trans 'Cron settings' %}{% endblock %}
{% set active_menu = 'system' %}

{% block breadcrumbs %}
<ul>
    <li class=\"firstB\"><a href=\"{{ '/'|alink }}\">{% trans 'Home' %}</a></li>
    <li><a href=\"{{ 'system'|alink }}\">{% trans 'Settings' %}</a></li>
    <li class=\"lastB\">{% trans 'Cron settings' %}</li>
</ul>
{% endblock %}

{% block content %}

<div class=\"widget\">
    <div class=\"head\">
        <h5 class=\"iCog\">{% trans 'Cron settings' %}</h5>
    </div>

    <div class=\"help\">
        <h3>{% trans 'Setup scheduled tasks to be executed once a day' %}</h3>
        <p>{% trans 'Scheduled tasks must be enabled immediately after installation. Cron is responsible for sending your clients reminder about payments, domain renewal notices and many more.' %}</p>
    </div>

    {% set cron = admin.cron_info %}
    <table class=\"tableStatic wide\">
        <tbody>
            <tr class=\"noborder\">
                <td>{% trans 'Timezone' %}</td>
                <td align=\"right\">{{ \"now\"|date('e') }}</td>
            </tr>

            <tr>
                <td>{% trans 'Time on server' %}</td>
                <td align=\"right\">{{ \"now\"|date('Y-m-d H:i:s') }}</td>
            </tr>
            <tr>
                <td>{% trans 'Last time scheduled tasks were executed' %}</td>
                <td align=\"right\">
                    {% if cron.last_cron_exec %}
                        {{ cron.last_cron_exec|date('Y-m-d H:i:s') }}
                        ({{cron.last_cron_exec|timeago }} ago)
                    {% else %}
                        {% trans 'Scheduled tasks were never executed' %}
                    {% endif %}
                </td>
            </tr>
            <tr>
                <td>{% trans 'Unix crontab setup:' %}</td>
                <td align=\"right\"><pre>*/5 * * * * php {{ cron.cron_path}}</pre></td>
            </tr>
            <tr>
                <td>{% trans 'Execute scheduled tasks from browser' %}</td>
                <td align=\"right\"><pre>{{ cron.cron_url}}</pre></td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td colspan=\"2\">
                    <div class=\"aligncenter\">
                    <a href=\"{{ cron.cron_url}}\" title=\"\" class=\"btn55 mr10\" target=\"_blank\"><img src=\"images/icons/middlenav/airplane.png\" alt=\"\"><span>{% trans 'Execute now' %}</span></a>
                    </div>
                </td>
            </tr>
        </tfoot>
    </table>
</div>

{% endblock %}", "mod_cron_settings.phtml", "/home/lexcicxy/hostshibe.cf/bb-modules/Cron/html_admin/mod_cron_settings.phtml");
    }
}
