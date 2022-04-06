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

/* mod_client_balance.phtml */
class __TwigTemplate_9f82cbe2d729e6b980aeb5f412c6e848b7047476bf1340edf2766e0dd3e1571f extends \Twig\Template
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
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.phtml") : ("layout_default.phtml")), "mod_client_balance.phtml", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.phtml", "mod_client_balance.phtml", 2)->unwrap();
        // line 4
        $context["profile"] = twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "client_get", [], "any", false, false, false, 4);
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo gettext("Payments history");
    }

    // line 6
    public function block_content_before($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "\t\t<!-- Page Heading/Breadcrumbs -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 10
        echo gettext("Payments history");
        echo "</h1>
            </div>
        </div>
        <!-- /.row -->
";
    }

    // line 15
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "        <table class=\"table table-hover table-striped\">
            <thead>
                <tr>
                    <th>";
        // line 19
        echo gettext("Amount");
        echo "</th>
                    <th>";
        // line 20
        echo gettext("Description");
        echo "</th>
                    <th>";
        // line 21
        echo gettext("Date");
        echo "</th>
                </tr>
            </thead>

            <tbody>
                ";
        // line 26
        $context["transactions"] = twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "client_balance_get_list", [0 => ["per_page" => 10, "page" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "page", [], "any", false, false, false, 26)]], "method", false, false, false, 26);
        // line 27
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["transactions"] ?? null), "list", [], "any", false, false, false, 27));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["tx"]) {
            // line 28
            echo "                <tr class=\"";
            echo twig_escape_filter($this->env, twig_cycle([0 => "odd", 1 => "even"], $context["i"]), "html", null, true);
            echo "\">
                    <td>";
            // line 29
            echo twig_money($this->env, twig_get_attribute($this->env, $this->source, $context["tx"], "amount", [], "any", false, false, false, 29), twig_get_attribute($this->env, $this->source, $context["tx"], "currency", [], "any", false, false, false, 29));
            echo "</td>
                    <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tx"], "description", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                    <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tx"], "created_at", [], "any", false, false, false, 31), "Y-m-d h:i"), "html", null, true);
            echo "</td>
                </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 34
            echo "                <tr>
                    <td colspan=\"3\">";
            // line 35
            echo gettext("The list is empty");
            echo "</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['tx'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "            </tbody>

            <tfoot>
                <tr>
                    <th class=\"currency\" colspan=\"3\">";
        // line 42
        echo gettext("Balance");
        echo ": ";
        echo twig_money($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "balance", [], "any", false, false, false, 42), twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "currency", [], "any", false, false, false, 42));
        echo "</th>
                </tr>
            </tfoot>
        </table>
";
        // line 46
        $this->loadTemplate("partial_pagination.phtml", "mod_client_balance.phtml", 46)->display(twig_array_merge($context, ["list" => ($context["transactions"] ?? null)]));
        // line 47
        echo "
<p class=\"text-center\">
\t<a class=\"btn btn-success\" data-toggle=\"collapse\" data-target=\"#add_funds\" aria-expanded=\"false\" aria-controls=\"add_funds\"><i class=\"fa fa-cart-plus\"></i> ";
        // line 49
        echo gettext("Add Funds");
        echo "</a>
</p>

<div class=\"collapse well text-center\" id=\"add_funds\">
\t<form action=\"\" method=\"post\" class=\"api_form form-inline\" data-api-url=\"client/invoice/funds_invoice\" data-api-tocreated=\"";
        // line 53
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("invoice");
        echo "\">
        <legend>";
        // line 54
        echo gettext("Add funds in advance");
        echo "<br /><small>";
        echo gettext("You can add funds to your account if you have active order.");
        echo "</small></legend>
        <div class=\"control-group form-group\">
\t\t\t<label>";
        // line 56
        echo gettext("Amount");
        echo ": </label>
\t\t\t<div class=\"input-group\">
                <input type=\"text\" name=\"amount\" value=\"\" class=\"form-control\" required=\"required\"/>
\t\t\t\t<div class=\"input-group-addon\">";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "currency", [], "any", false, false, false, 59), "html", null, true);
        echo "</div>
\t\t\t</div>
\t\t</div>
\t\t<input class=\"btn btn-success\" type=\"submit\" value=\"";
        // line 62
        echo gettext("Add funds");
        echo "\">
    </form>
</div>

";
    }

    public function getTemplateName()
    {
        return "mod_client_balance.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 62,  188 => 59,  182 => 56,  175 => 54,  171 => 53,  164 => 49,  160 => 47,  158 => 46,  149 => 42,  143 => 38,  134 => 35,  131 => 34,  123 => 31,  119 => 30,  115 => 29,  110 => 28,  104 => 27,  102 => 26,  94 => 21,  90 => 20,  86 => 19,  81 => 16,  77 => 15,  68 => 10,  63 => 7,  59 => 6,  52 => 3,  48 => 1,  46 => 4,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends request.ajax ? \"layout_blank.phtml\" : \"layout_default.phtml\" %}
{% import \"macro_functions.phtml\" as mf %}
{% block meta_title %}{% trans 'Payments history' %}{% endblock %}
{% set profile = client.client_get %}

{% block content_before %}
\t\t<!-- Page Heading/Breadcrumbs -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">{% trans 'Payments history'%}</h1>
            </div>
        </div>
        <!-- /.row -->
{% endblock %}
{% block content %}
        <table class=\"table table-hover table-striped\">
            <thead>
                <tr>
                    <th>{% trans 'Amount' %}</th>
                    <th>{% trans 'Description' %}</th>
                    <th>{% trans 'Date' %}</th>
                </tr>
            </thead>

            <tbody>
                {% set transactions = client.client_balance_get_list({\"per_page\":10, \"page\":request.page}) %}
                {% for i, tx in transactions.list %}
                <tr class=\"{{ cycle(['odd', 'even'], i) }}\">
                    <td>{{ tx.amount | money(tx.currency) }}</td>
                    <td>{{tx.description}}</td>
                    <td>{{tx.created_at|date('Y-m-d h:i')}}</td>
                </tr>
                {% else %}
                <tr>
                    <td colspan=\"3\">{% trans 'The list is empty' %}</td>
                </tr>
                {% endfor %}
            </tbody>

            <tfoot>
                <tr>
                    <th class=\"currency\" colspan=\"3\">{% trans 'Balance' %}: {{ profile.balance | money(profile.currency) }}</th>
                </tr>
            </tfoot>
        </table>
{% include \"partial_pagination.phtml\" with {'list': transactions} %}

<p class=\"text-center\">
\t<a class=\"btn btn-success\" data-toggle=\"collapse\" data-target=\"#add_funds\" aria-expanded=\"false\" aria-controls=\"add_funds\"><i class=\"fa fa-cart-plus\"></i> {% trans 'Add Funds' %}</a>
</p>

<div class=\"collapse well text-center\" id=\"add_funds\">
\t<form action=\"\" method=\"post\" class=\"api_form form-inline\" data-api-url=\"client/invoice/funds_invoice\" data-api-tocreated=\"{{ 'invoice'|link }}\">
        <legend>{% trans 'Add funds in advance'%}<br /><small>{% trans 'You can add funds to your account if you have active order.' %}</small></legend>
        <div class=\"control-group form-group\">
\t\t\t<label>{% trans 'Amount' %}: </label>
\t\t\t<div class=\"input-group\">
                <input type=\"text\" name=\"amount\" value=\"\" class=\"form-control\" required=\"required\"/>
\t\t\t\t<div class=\"input-group-addon\">{{ profile.currency }}</div>
\t\t\t</div>
\t\t</div>
\t\t<input class=\"btn btn-success\" type=\"submit\" value=\"{% trans 'Add funds' %}\">
    </form>
</div>

{% endblock %}
", "mod_client_balance.phtml", "/home/lexcicxy/hostshibe.cf/bb-themes/bootstrap/html/mod_client_balance.phtml");
    }
}
