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

/* mod_order_list.phtml */
class __TwigTemplate_e3103f7fb4316b6614e3bae04ff790c1e64ecf73bc5f7b8ef75c52d11d6e218b extends \Twig\Template
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
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.phtml") : ("layout_default.phtml")), "mod_order_list.phtml", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.phtml", "mod_order_list.phtml", 3)->unwrap();
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo gettext("My Products & Services");
    }

    // line 7
    public function block_content_before($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "\t\t<!-- Page Heading/Breadcrumbs -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 11
        echo gettext("Ordered Services");
        echo "</h1>
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
        <div class=\"list-group\">
                ";
        // line 19
        $context["orders"] = twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "order_get_list", [0 => ["per_page" => 10, "page" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "page", [], "any", false, false, false, 19), "hide_addons" => 1]], "method", false, false, false, 19);
        // line 20
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["orders"] ?? null), "list", [], "any", false, false, false, 20));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["order"]) {
            // line 21
            echo "                <a href=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/order/service/manage");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 21), "html", null, true);
            echo "\" class=\"list-group-item ";
            if ((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 21) == "active")) {
                echo "list-group-item-success";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 21) == "pending_setup")) {
                echo "list-group-item-warning";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 21) == "failed_setup")) {
                echo "list-group-item-danger";
            }
            echo "\">
\t\t\t\t\t<strong>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "title", [], "any", false, false, false, 22), "html", null, true);
            echo "</strong> - ";
            echo twig_money($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 22), twig_get_attribute($this->env, $this->source, $context["order"], "currency", [], "any", false, false, false, 22));
            echo " ";
            if (twig_get_attribute($this->env, $this->source, $context["order"], "period", [], "any", false, false, false, 22)) {
                echo twig_period_title($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "period", [], "any", false, false, false, 22));
            }
            // line 23
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, $context["order"], "expires_at", [], "any", false, false, false, 23)) {
                // line 24
                echo "\t\t\t\t\t\t- <i>";
                echo gettext("Expires at");
                echo ": ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "expires_at", [], "any", false, false, false, 24), "Y-m-d h:i"), "html", null, true);
                echo "</i>
\t\t\t\t\t";
            }
            // line 26
            echo "\t\t\t\t\t<span class=\"pull-right label ";
            if ((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 26) == "active")) {
                echo "label-success";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 26) == "pending_setup")) {
                echo "label-warning";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 26) == "failed_setup")) {
                echo "label-danger";
            } else {
                echo "label-default";
            }
            echo "\">";
            echo twig_call_macro($macros["mf"], "macro_status_name", [twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 26)], 26, $context, $this->getSourceContext());
            echo "</span>
                </a>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 28
            echo gettext("The list is empty");
            // line 29
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        </div>

\t\t";
        // line 32
        $this->loadTemplate("partial_pagination.phtml", "mod_order_list.phtml", 32)->display(twig_array_merge($context, ["list" => ($context["orders"] ?? null)]));
        // line 33
        echo "\t\t
\t\t
        <div class=\"text-center\">
            <a class=\"btn btn-success\" href=\"";
        // line 36
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("order");
        echo "\"><i class=\"fa fa-shopping-cart\"></i> ";
        echo gettext("New order");
        echo "</a>
        </div>



";
    }

    public function getTemplateName()
    {
        return "mod_order_list.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 36,  158 => 33,  156 => 32,  152 => 30,  146 => 29,  144 => 28,  125 => 26,  117 => 24,  114 => 23,  106 => 22,  91 => 21,  85 => 20,  83 => 19,  79 => 17,  75 => 16,  66 => 11,  61 => 8,  57 => 7,  50 => 5,  46 => 1,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends request.ajax ? \"layout_blank.phtml\" : \"layout_default.phtml\" %}

{% import \"macro_functions.phtml\" as mf %}

{% block meta_title %}{% trans 'My Products & Services' %}{% endblock %}

{% block content_before %}
\t\t<!-- Page Heading/Breadcrumbs -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">{% trans 'Ordered Services' %}</h1>
            </div>
        </div>
        <!-- /.row -->
{% endblock %}
{% block content %}

        <div class=\"list-group\">
                {% set orders = client.order_get_list({\"per_page\":10, \"page\":request.page, \"hide_addons\":1}) %}
                {% for i, order in orders.list %}
                <a href=\"{{ '/order/service/manage'|link }}/{{order.id}}\" class=\"list-group-item {% if order.status == \"active\" %}list-group-item-success{% elseif order.status == \"pending_setup\" %}list-group-item-warning{% elseif order.status == \"failed_setup\" %}list-group-item-danger{% endif %}\">
\t\t\t\t\t<strong>{{order.title}}</strong> - {{  order.total | money(order.currency) }} {% if order.period%}{{ order.period | period_title }}{% endif %}
                    {% if order.expires_at %}
\t\t\t\t\t\t- <i>{% trans 'Expires at' %}: {{order.expires_at|date('Y-m-d h:i')}}</i>
\t\t\t\t\t{% endif %}
\t\t\t\t\t<span class=\"pull-right label {% if order.status == \"active\" %}label-success{% elseif order.status == \"pending_setup\" %}label-warning{% elseif order.status == \"failed_setup\" %}label-danger{% else %}label-default{% endif %}\">{{ mf.status_name(order.status) }}</span>
                </a>
                {% else %}{% trans 'The list is empty' %}
                {% endfor %}
        </div>

\t\t{% include \"partial_pagination.phtml\" with {'list': orders} %}
\t\t
\t\t
        <div class=\"text-center\">
            <a class=\"btn btn-success\" href=\"{{ 'order'|link }}\"><i class=\"fa fa-shopping-cart\"></i> {% trans 'New order' %}</a>
        </div>



{% endblock %}", "mod_order_list.phtml", "/home/lexcicxy/hostshibe.cf/bb-themes/bootstrap/html/mod_order_list.phtml");
    }
}
