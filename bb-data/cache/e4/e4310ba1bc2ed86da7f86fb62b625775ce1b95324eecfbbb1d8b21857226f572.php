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

/* mod_invoice_index.phtml */
class __TwigTemplate_73f39e5ced4f977606619961c0f02301fbf5ae2d6370432fb264d724c00a7694 extends \Twig\Template
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
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.phtml") : ("layout_default.phtml")), "mod_invoice_index.phtml", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.phtml", "mod_invoice_index.phtml", 2)->unwrap();
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo gettext("Invoices");
    }

    // line 5
    public function block_content_before($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "\t\t<!-- Page Heading/Breadcrumbs -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 9
        echo gettext("Invoices");
        // line 10
        echo "\t\t\t\t\t<small>";
        echo gettext("List of invoices");
        echo "</small>
\t\t\t\t<h1>
            </div>
        </div>
        <!-- /.row -->
";
    }

    // line 16
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "
\t\t<!-- Service Tabs -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
\t\t\t\t";
        // line 21
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "invoice_get_list", [0 => ["status" => "unpaid"]], "method", false, false, false, 21), "total", [], "any", false, false, false, 21) > 0)) {
            // line 22
            echo "\t\t\t\t\t<div>
\t\t\t\t\t\t<h2>";
            // line 23
            echo gettext("Unpaid");
            echo "</h2>
\t\t\t\t\t\t<div class=\"list-group\">
\t\t\t\t\t\t\t";
            // line 25
            $context["unpaid_invoices"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "invoice_get_list", [0 => ["status" => "unpaid"]], "method", false, false, false, 25), "list", [], "any", false, false, false, 25);
            // line 26
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["unpaid_invoices"] ?? null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["i"] => $context["invoice"]) {
                // line 27
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("invoice");
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "hash", [], "any", false, false, false, 27), "html", null, true);
                echo "\" class=\"list-group-item list-group-item-danger\">
\t\t\t\t\t\t\t\t<strong>";
                // line 28
                echo twig_escape_filter($this->env, sprintf("Invoice #%05s", twig_get_attribute($this->env, $this->source, $context["invoice"], "id", [], "any", false, false, false, 28)), "html", null, true);
                echo "</strong>
\t\t\t\t\t\t\t\t- <i>";
                // line 29
                echo gettext("Issue Date");
                echo ":</i> ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "created_at", [], "any", false, false, false, 29), "Y-m-d h:i"), "html", null, true);
                echo " - <i>";
                echo gettext("Due Date");
                echo ":</i> <strong>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "due_at", [], "any", false, false, false, 29), "Y-m-d h:i"), "html", null, true);
                echo "</strong>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"pull-right btn btn-danger btn-xs\">";
                // line 31
                echo gettext("Pay");
                echo ": <strong>";
                echo twig_money($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "total", [], "any", false, false, false, 31), twig_get_attribute($this->env, $this->source, $context["invoice"], "currency", [], "any", false, false, false, 31));
                echo "</strong></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 33
                echo gettext("The list is empty");
                // line 34
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['invoice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<hr>
\t\t\t\t";
        }
        // line 39
        echo "\t\t
\t\t\t\t<h2>";
        // line 40
        echo gettext("Paid");
        echo "</h2>
\t\t\t\t<div class=\"list-group\">
\t\t\t\t\t";
        // line 42
        $context["paid_invoices"] = twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "invoice_get_list", [0 => ["per_page" => 10, "page" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "page", [], "any", false, false, false, 42), "status" => "paid"]], "method", false, false, false, 42);
        // line 43
        echo "\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["paid_invoices"] ?? null), "list", [], "any", false, false, false, 43));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["invoice"]) {
            // line 44
            echo "\t\t\t\t\t<a href=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("invoice");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "hash", [], "any", false, false, false, 44), "html", null, true);
            echo "\" class=\"list-group-item list-group-item-success\">
\t\t\t\t\t\t<strong>";
            // line 45
            echo twig_escape_filter($this->env, sprintf("Invoice #%05s", twig_get_attribute($this->env, $this->source, $context["invoice"], "id", [], "any", false, false, false, 45)), "html", null, true);
            echo "</strong>
\t\t\t\t\t\t- <i>";
            // line 46
            echo gettext("Issue Date");
            echo ":</i> ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "created_at", [], "any", false, false, false, 46), "Y-m-d h:i"), "html", null, true);
            echo " - <i>";
            echo gettext("Paid at");
            echo ":</i> ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "paid_at", [], "any", false, false, false, 46), "Y-m-d h:i"), "html", null, true);
            echo "
\t\t\t\t\t\t<span class=\"pull-right btn btn-success btn-xs\">";
            // line 47
            echo gettext("Paid");
            echo ": <strong>";
            echo twig_money($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "total", [], "any", false, false, false, 47), twig_get_attribute($this->env, $this->source, $context["invoice"], "currency", [], "any", false, false, false, 47));
            echo "</strong></span>
\t\t\t\t\t</a>
\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 49
            echo gettext("The list is empty");
            // line 50
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['invoice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "\t\t\t\t</div>
\t\t\t\t";
        // line 52
        $this->loadTemplate("partial_pagination.phtml", "mod_invoice_index.phtml", 52)->display(twig_array_merge($context, ["list" => ($context["paid_invoices"] ?? null)]));
        // line 53
        echo "            </div>
        </div>
\t\t
\t\t<div class=\"text-center\">
\t\t\t<a href=\"";
        // line 57
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/client/balance");
        echo "\" title=\"";
        echo gettext("Payment history");
        echo "\" class=\"btn btn-success\" ><i class=\"fa fa-archive\"></i> ";
        echo gettext("Payment history");
        echo "</a>
\t\t</div>

";
    }

    public function getTemplateName()
    {
        return "mod_invoice_index.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 57,  213 => 53,  211 => 52,  208 => 51,  202 => 50,  200 => 49,  190 => 47,  180 => 46,  176 => 45,  169 => 44,  163 => 43,  161 => 42,  156 => 40,  153 => 39,  147 => 35,  141 => 34,  139 => 33,  129 => 31,  118 => 29,  114 => 28,  107 => 27,  101 => 26,  99 => 25,  94 => 23,  91 => 22,  89 => 21,  83 => 17,  79 => 16,  68 => 10,  66 => 9,  61 => 6,  57 => 5,  50 => 3,  46 => 1,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends request.ajax ? \"layout_blank.phtml\" : \"layout_default.phtml\" %}
{% import \"macro_functions.phtml\" as mf %}
{% block meta_title %}{% trans 'Invoices' %}{% endblock %}

{% block content_before %}
\t\t<!-- Page Heading/Breadcrumbs -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">{% trans 'Invoices' %}
\t\t\t\t\t<small>{% trans 'List of invoices' %}</small>
\t\t\t\t<h1>
            </div>
        </div>
        <!-- /.row -->
{% endblock %}
{% block content %}

\t\t<!-- Service Tabs -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
\t\t\t\t{% if client.invoice_get_list({\"status\":\"unpaid\"}).total > 0 %}
\t\t\t\t\t<div>
\t\t\t\t\t\t<h2>{% trans 'Unpaid' %}</h2>
\t\t\t\t\t\t<div class=\"list-group\">
\t\t\t\t\t\t\t{% set unpaid_invoices = client.invoice_get_list({\"status\":\"unpaid\"}).list %}
\t\t\t\t\t\t\t{% for i, invoice in unpaid_invoices %}
\t\t\t\t\t\t\t<a href=\"{{ 'invoice'|link }}/{{ invoice.hash }}\" class=\"list-group-item list-group-item-danger\">
\t\t\t\t\t\t\t\t<strong>{{ \"Invoice #%05s\"|format(invoice.id) }}</strong>
\t\t\t\t\t\t\t\t- <i>{% trans 'Issue Date' %}:</i> {{ invoice.created_at|date('Y-m-d h:i') }} - <i>{% trans 'Due Date' %}:</i> <strong>{{ invoice.due_at|date('Y-m-d h:i') }}</strong>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<span class=\"pull-right btn btn-danger btn-xs\">{% trans 'Pay' %}: <strong>{{ invoice.total | money(invoice.currency) }}</strong></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t{% else %}{% trans 'The list is empty' %}
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<hr>
\t\t\t\t{% endif %}
\t\t
\t\t\t\t<h2>{% trans 'Paid' %}</h2>
\t\t\t\t<div class=\"list-group\">
\t\t\t\t\t{% set paid_invoices = client.invoice_get_list({\"per_page\":10, \"page\":request.page, \"status\":\"paid\"}) %}
\t\t\t\t\t{% for i, invoice in paid_invoices.list %}
\t\t\t\t\t<a href=\"{{ 'invoice'|link }}/{{ invoice.hash }}\" class=\"list-group-item list-group-item-success\">
\t\t\t\t\t\t<strong>{{ \"Invoice #%05s\"|format(invoice.id) }}</strong>
\t\t\t\t\t\t- <i>{% trans 'Issue Date' %}:</i> {{ invoice.created_at|date('Y-m-d h:i') }} - <i>{% trans 'Paid at' %}:</i> {{ invoice.paid_at|date('Y-m-d h:i') }}
\t\t\t\t\t\t<span class=\"pull-right btn btn-success btn-xs\">{% trans 'Paid' %}: <strong>{{ invoice.total | money(invoice.currency) }}</strong></span>
\t\t\t\t\t</a>
\t\t\t\t\t{% else %}{% trans 'The list is empty' %}
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t\t{% include \"partial_pagination.phtml\" with {'list': paid_invoices} %}
            </div>
        </div>
\t\t
\t\t<div class=\"text-center\">
\t\t\t<a href=\"{{ '/client/balance'|link }}\" title=\"{% trans 'Payment history' %}\" class=\"btn btn-success\" ><i class=\"fa fa-archive\"></i> {% trans 'Payment history' %}</a>
\t\t</div>

{% endblock %}
", "mod_invoice_index.phtml", "/home/lexcicxy/hostshibe.cf/bb-themes/bootstrap/html/mod_invoice_index.phtml");
    }
}
