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

/* mod_index_dashboard.phtml */
class __TwigTemplate_6dda22c6efd73049cd0b56d7209c5dab46a3159471b996f624d0968ae11ca5ce extends \Twig\Template
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
        // line 2
        return $this->loadTemplate((((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 2) || ( !($context["client"] ?? null) && (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "home_page", [], "any", false, false, false, 2) != "menuicons")))) ? ("layout_blank.phtml") : ("layout_default.phtml")), "mod_index_dashboard.phtml", 2);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.phtml", "mod_index_dashboard.phtml", 4)->unwrap();
        // line 6
        if ( !twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "home_sidemenu", [], "any", false, false, false, 6)) {
            // line 7
            if ( !($context["client"] ?? null)) {
                $context["side_menu"] = "hidden";
            }
        }
        // line 2
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo gettext("Client Area");
    }

    // line 11
    public function block_content_before($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "\t";
        if (($context["client"] ?? null)) {
            // line 13
            echo "\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12\">
\t\t\t\t<h1 class=\"page-header\">";
            // line 15
            echo gettext("Dashboard");
            echo "</h1>
\t\t\t</div>
\t\t</div>\t
\t";
        } else {
            // line 19
            echo "\t\t";
            if ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "home_page", [], "any", false, false, false, 19) == "menuicons")) {
                // line 20
                echo "\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<h1 class=\"page-header\">";
                // line 22
                echo gettext("Home");
                echo "</h1>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
            }
            // line 26
            echo "\t";
        }
    }

    // line 30
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "\t";
        if (($context["client"] ?? null)) {
            // line 32
            echo "\t\t\t";
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "showcase_enabled", [], "any", false, false, false, 32)) {
                // line 33
                echo "\t\t\t<div class=\"jumbotron text-center\">
\t\t\t\t<h1>";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "showcase_heading", [], "any", false, false, false, 34), "html", null, true);
                echo "</h1>
\t\t\t\t<p>";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "showcase_text", [], "any", false, false, false, 35), "html", null, true);
                echo "</p>
\t\t\t\t<a href=\"";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "showcase_button_url", [], "any", false, false, false, 36), "html", null, true);
                echo "\" class=\"btn btn-primary btn-lg\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "showcase_button_title", [], "any", false, false, false, 36), "html", null, true);
                echo "</a>
\t\t\t</div>
\t\t\t";
            }
            // line 38
            echo "\t

\t\t\t<div class=\"row\">
\t\t\t
\t\t\t\t";
            // line 42
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "dash_services", [], "any", false, false, false, 42)) {
                // line 43
                echo "\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t<i class=\"fa fa-cog\"></i> ";
                // line 47
                echo gettext("Services");
                // line 48
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "order_get_list", [0 => ["expiring" => 1]], "method", false, false, false, 48), "total", [], "any", false, false, false, 48) > 0)) {
                    // line 49
                    echo "\t\t\t\t\t\t\t\t\t<span class=\"label label-primary\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "order_get_list", [0 => ["expiring" => 1]], "method", false, false, false, 49), "total", [], "any", false, false, false, 49), "html", null, true);
                    echo " ";
                    echo gettext("Soon expires");
                    echo "</span>
\t\t\t\t\t\t\t\t";
                }
                // line 51
                echo "\t\t\t\t\t\t\t\t<a class=\"btn btn-default btn-xs pull-right\" href=\"";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("order/service");
                echo "\">";
                echo gettext("All services");
                echo "</a>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"list-group text-center\">
\t\t\t\t\t\t\t";
                // line 55
                $context["services"] = twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "order_get_list", [0 => ["per_page" => 10, "page" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "page", [], "any", false, false, false, 55), "hide_addons" => 1, "status" => "active"]], "method", false, false, false, 55);
                // line 56
                echo "\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "list", [], "any", false, false, false, 56));
                foreach ($context['_seq'] as $context["i"] => $context["service"]) {
                    // line 57
                    echo "\t\t\t\t\t\t\t<a href=\"";
                    echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/order/service/manage");
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 57), "html", null, true);
                    echo "\" class=\"list-group-item\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "title", [], "any", false, false, false, 57), "html", null, true);
                    echo " #";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 57), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['service'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 59
                echo "\t\t\t\t\t\t\t<a class=\"list-group-item list-group-item-success\" href=\"";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("order");
                echo "\">";
                echo gettext("New order");
                echo "</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 63
            echo "\t
\t\t\t\t
\t\t\t\t";
            // line 65
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "dash_support", [], "any", false, false, false, 65)) {
                // line 66
                echo "\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t<i class=\"fa fa-life-ring\"></i> ";
                // line 70
                echo gettext("Support");
                // line 71
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "support_ticket_get_list", [0 => ["status" => "on_hold"]], "method", false, false, false, 71), "total", [], "any", false, false, false, 71) > 0)) {
                    // line 72
                    echo "\t\t\t\t\t\t\t\t\t<span class=\"label label-warning\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "support_ticket_get_list", [0 => ["status" => "on_hold"]], "method", false, false, false, 72), "total", [], "any", false, false, false, 72), "html", null, true);
                    echo " ";
                    echo twig_call_macro($macros["mf"], "macro_status_name", ["on_hold"], 72, $context, $this->getSourceContext());
                    echo "</span>
\t\t\t\t\t\t\t\t";
                }
                // line 74
                echo "\t\t\t\t\t\t\t\t<a class=\"btn btn-default btn-xs pull-right\" href=\"";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("support");
                echo "\">";
                echo gettext("All tickets");
                echo "</a>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"list-group text-center\">
\t\t\t\t\t\t\t";
                // line 78
                $context["tickets_on_hold"] = twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "support_ticket_get_list", [0 => ["status" => "on_hold"]], "method", false, false, false, 78);
                // line 79
                echo "\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["tickets_on_hold"] ?? null), "list", [], "any", false, false, false, 79));
                foreach ($context['_seq'] as $context["i"] => $context["ticket"]) {
                    // line 80
                    echo "\t\t\t\t\t\t\t\t<a href=\"";
                    echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("support/ticket");
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 80), "html", null, true);
                    echo "\" class=\"list-group-item\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "subject", [], "any", false, false, false, 80), "html", null, true);
                    echo " <span class=\"label label-default\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ticket"], "helpdesk", [], "any", false, false, false, 80), "name", [], "any", false, false, false, 80), "html", null, true);
                    echo "</span> <span class=\"label label-warning\">";
                    echo twig_call_macro($macros["mf"], "macro_status_name", [twig_get_attribute($this->env, $this->source, $context["ticket"], "status", [], "any", false, false, false, 80)], 80, $context, $this->getSourceContext());
                    echo "</span></a>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['ticket'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 82
                echo "\t\t\t\t\t\t\t";
                $context["tickets_open"] = twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "support_ticket_get_list", [0 => ["status" => "open"]], "method", false, false, false, 82);
                // line 83
                echo "\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["tickets_open"] ?? null), "list", [], "any", false, false, false, 83));
                foreach ($context['_seq'] as $context["i"] => $context["ticket"]) {
                    // line 84
                    echo "\t\t\t\t\t\t\t\t<a href=\"";
                    echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("support/ticket");
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 84), "html", null, true);
                    echo "\" class=\"list-group-item\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "subject", [], "any", false, false, false, 84), "html", null, true);
                    echo " <span class=\"label label-default\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ticket"], "helpdesk", [], "any", false, false, false, 84), "name", [], "any", false, false, false, 84), "html", null, true);
                    echo "</span></a>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['ticket'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 86
                echo "\t\t\t\t\t\t\t<a class=\"list-group-item list-group-item-info\" href=\"";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("support", ["ticket" => 1]);
                echo "\">";
                echo gettext("New ticket");
                echo "</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 90
            echo "\t
\t\t\t\t
\t\t\t\t";
            // line 92
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "dash_invoices", [], "any", false, false, false, 92)) {
                // line 93
                echo "\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t<i class=\"fa fa-credit-card\"></i> ";
                // line 97
                echo gettext("Invoices");
                // line 98
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "invoice_get_list", [0 => ["status" => "unpaid"]], "method", false, false, false, 98), "total", [], "any", false, false, false, 98) > 0)) {
                    // line 99
                    echo "\t\t\t\t\t\t\t\t\t<span class=\"label label-danger\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "invoice_get_list", [0 => ["status" => "unpaid"]], "method", false, false, false, 99), "total", [], "any", false, false, false, 99), "html", null, true);
                    echo " ";
                    echo gettext("Unpaid");
                    echo "</span>
\t\t\t\t\t\t\t\t";
                }
                // line 101
                echo "\t\t\t\t\t\t\t\t<a class=\"btn btn-default btn-xs pull-right\" href=\"";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("invoice");
                echo "\">";
                echo gettext("All Invoices");
                echo "</a>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"list-group text-center\">
\t\t\t\t\t\t\t";
                // line 105
                $context["unpaid_invoices"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "invoice_get_list", [0 => ["status" => "unpaid", "per_page" => 10]], "method", false, false, false, 105), "list", [], "any", false, false, false, 105);
                // line 106
                echo "\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["unpaid_invoices"] ?? null));
                foreach ($context['_seq'] as $context["i"] => $context["invoice"]) {
                    // line 107
                    echo "\t\t\t\t\t\t\t<a href=\"";
                    echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("invoice");
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "hash", [], "any", false, false, false, 107), "html", null, true);
                    echo "\" class=\"list-group-item\">
\t\t\t\t\t\t\t\t<strong class=\"list-group-item-heading\">";
                    // line 108
                    echo twig_escape_filter($this->env, sprintf("Invoice #%05s", twig_get_attribute($this->env, $this->source, $context["invoice"], "id", [], "any", false, false, false, 108)), "html", null, true);
                    echo "</strong>
\t\t\t\t\t\t\t\t<p class=\"list-group-item-text\">";
                    // line 109
                    echo gettext("Due Date");
                    echo ": ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "due_at", [], "any", false, false, false, 109), "d/m/Y"), "html", null, true);
                    echo " - <strong>";
                    echo twig_money($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "total", [], "any", false, false, false, 109), twig_get_attribute($this->env, $this->source, $context["invoice"], "currency", [], "any", false, false, false, 109));
                    echo "</strong></p>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['invoice'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 112
                echo "\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "invoice_get_list", [0 => ["status" => "unpaid"]], "method", false, false, false, 112), "total", [], "any", false, false, false, 112) > 0)) {
                    echo "<a class=\"list-group-item list-group-item-danger\" href=\"";
                    echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("invoice");
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "invoice_get_list", [0 => ["status" => "unpaid"]], "method", false, false, false, 112), "total", [], "any", false, false, false, 112), "html", null, true);
                    echo " ";
                    echo gettext("Unpaid");
                    echo "</a>";
                }
                // line 113
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 116
            echo "\t
\t\t\t\t
\t\t\t\t";
            // line 118
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "dash_orders", [], "any", false, false, false, 118)) {
                // line 119
                echo "\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t<i class=\"fa fa-fw fa-shopping-cart\"></i> ";
                // line 123
                echo gettext("Recent orders");
                // line 124
                echo "\t\t\t\t\t\t\t\t<a class=\"btn btn-default btn-xs pull-right\" href=\"";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("order");
                echo "\">";
                echo gettext("New order");
                echo "</a>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"list-group\">
\t\t\t\t\t\t\t";
                // line 128
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "order_get_list", [0 => ["per_page" => 5, "page" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "page", [], "any", false, false, false, 128), "hide_addons" => 1]], "method", false, false, false, 128), "list", [], "any", false, false, false, 128));
                foreach ($context['_seq'] as $context["i"] => $context["order"]) {
                    // line 129
                    echo "\t\t\t\t\t\t\t\t<a href=\"";
                    echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("order/service/manage");
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 129), "html", null, true);
                    echo "\" class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t";
                    // line 130
                    echo twig_escape_filter($this->env, twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "title", [], "any", false, false, false, 130), 30), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t<span class=\"pull-right label ";
                    // line 131
                    if ((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 131) == "active")) {
                        echo "label-success";
                    } elseif ((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 131) == "pending_setup")) {
                        echo "label-warning";
                    } elseif ((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 131) == "failed_setup")) {
                        echo "label-danger";
                    } else {
                        echo "label-default";
                    }
                    echo "\">";
                    echo twig_call_macro($macros["mf"], "macro_status_name", [twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 131)], 131, $context, $this->getSourceContext());
                    echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['order'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 134
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 137
            echo "\t
\t\t\t\t
\t\t\t\t";
            // line 139
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "dash_messages", [], "any", false, false, false, 139)) {
                // line 140
                echo "\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t<i class=\"fa fa-fw fa-envelope\"></i> ";
                // line 144
                echo gettext("Recent emails");
                // line 145
                echo "\t\t\t\t\t\t\t\t<a class=\"btn btn-default btn-xs pull-right\" href=\"";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("email");
                echo "\">";
                echo gettext("Emails");
                echo "</a>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"list-group\">
\t\t\t\t\t\t\t";
                // line 149
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "email_get_list", [0 => ["per_page" => 5]], "method", false, false, false, 149), "list", [], "any", false, false, false, 149));
                foreach ($context['_seq'] as $context["i"] => $context["email"]) {
                    // line 150
                    echo "\t\t\t\t\t\t\t<a href=\"";
                    echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("email");
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["email"], "id", [], "any", false, false, false, 150), "html", null, true);
                    echo "\" class=\"list-group-item\">
\t\t\t\t\t\t\t\t";
                    // line 151
                    echo twig_escape_filter($this->env, twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, $context["email"], "subject", [], "any", false, false, false, 151), 30), "html", null, true);
                    echo " <small>- ";
                    echo twig_escape_filter($this->env, twig_timeago_filter(twig_get_attribute($this->env, $this->source, $context["email"], "created_at", [], "any", false, false, false, 151)), "html", null, true);
                    echo " ";
                    echo gettext("ago");
                    echo "</small>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['email'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 154
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 157
            echo "\t

\t\t\t\t";
            // line 159
            if ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "dash_kb", [], "any", false, false, false, 159) && twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "extension_is_on", [0 => ["mod" => "kb"]], "method", false, false, false, 159))) {
                // line 160
                echo "\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t<i class=\"fa fa-fw fa-graduation-cap\"></i> ";
                // line 164
                echo gettext("Knowledge Base");
                // line 165
                echo "\t\t\t\t\t\t\t\t<a class=\"btn btn-default btn-xs pull-right\" href=\"";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("kb");
                echo "\">";
                echo gettext("Knowledge Base");
                echo "</a>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"list-group panel\" id=\"kb\">
\t\t\t\t\t\t\t<span class=\"list-group-item\">
\t\t\t\t\t\t\t\t<form method=\"get\" action=\"";
                // line 170
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("kb");
                echo "\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<input name=\"q\" type=\"text\" class=\"form-control\" value=\"";
                // line 172
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "q", [], "any", false, false, false, 172), "html", null, true);
                echo "\" placeholder=\"";
                echo gettext("What are you looking for?");
                echo "\">
\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-default\" type=\"submit\"><i class=\"fa fa-search\"></i></button>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t";
                // line 179
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "kb_category_get_list", [], "any", false, false, false, 179), "list", [], "any", false, false, false, 179));
                foreach ($context['_seq'] as $context["i"] => $context["category"]) {
                    // line 180
                    echo "\t\t\t\t\t\t\t\t<a href=\"#category-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 180), "html", null, true);
                    echo "\" class=\"list-group-item text-center\" data-toggle=\"collapse\" data-parent=\"#kb\"><strong>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "title", [], "any", false, false, false, 180), "html", null, true);
                    echo "</strong></a>
\t\t\t\t\t\t\t\t<div class=\"collapse\" id=\"category-";
                    // line 181
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 181), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t";
                    // line 182
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "articles", [], "any", false, false, false, 182));
                    foreach ($context['_seq'] as $context["i"] => $context["article"]) {
                        // line 183
                        echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/kb");
                        echo "/";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "category", [], "any", false, false, false, 183), "slug", [], "any", false, false, false, 183), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "slug", [], "any", false, false, false, 183), "html", null, true);
                        echo "\" class=\"list-group-item\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 183), "html", null, true);
                        echo "</a>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['i'], $context['article'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 185
                    echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 187
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 191
            echo "
\t\t\t\t";
            // line 192
            if ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "dash_new", [], "any", false, false, false, 192) && twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "extension_is_on", [0 => ["mod" => "news"]], "method", false, false, false, 192))) {
                // line 193
                echo "\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t<i class=\"fa fa-fw fa-bullhorn\"></i> ";
                // line 197
                echo gettext("News & Announcements");
                // line 198
                echo "\t\t\t\t\t\t\t\t<a class=\"btn btn-default btn-xs pull-right\" href=\"";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("news");
                echo "\">";
                echo gettext("Blog");
                echo "</a>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"list-group\">
\t\t\t\t\t\t\t";
                // line 202
                $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "news_get_list", [0 => ["per_page" => 4, "page" => 1]], "method", false, false, false, 202);
                // line 203
                echo "\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "list", [], "any", false, false, false, 203));
                foreach ($context['_seq'] as $context["i"] => $context["post"]) {
                    // line 204
                    echo "\t\t\t\t\t\t\t\t<a href=\"";
                    echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/news");
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 204), "html", null, true);
                    echo "\" class=\"list-group-item\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 204), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['post'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 206
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 210
            echo "\t\t\t\t\t
\t\t\t\t";
            // line 211
            if ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "dash_forum", [], "any", false, false, false, 211) && twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "extension_is_on", [0 => ["mod" => "forum"]], "method", false, false, false, 211))) {
                // line 212
                echo "\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "forum_favorites", [], "any", false, false, false, 212)) {
                    // line 213
                    echo "\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t<i class=\"fa fa-fw fa-comments\"></i> ";
                    // line 217
                    echo gettext("Favorite topics");
                    // line 218
                    echo "\t\t\t\t\t\t\t\t<a class=\"btn btn-default btn-xs pull-right\" href=\"";
                    echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("forum");
                    echo "\">";
                    echo gettext("Forum");
                    echo "</a>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"list-group\">
\t\t\t\t\t\t\t";
                    // line 222
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "forum_favorites", [], "any", false, false, false, 222));
                    foreach ($context['_seq'] as $context["i"] => $context["topic"]) {
                        // line 223
                        echo "\t\t\t\t\t\t\t<a href=\"";
                        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/forum");
                        echo "/";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["topic"], "forum", [], "any", false, false, false, 223), "slug", [], "any", false, false, false, 223), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["topic"], "slug", [], "any", false, false, false, 223), "html", null, true);
                        echo "#m-";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["topic"], "last", [], "any", false, false, false, 223), "id", [], "any", false, false, false, 223), "html", null, true);
                        echo "\" class=\"list-group-item\">
\t\t\t\t\t\t\t\t<h4 class=\"list-group-item-heading\">";
                        // line 224
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["topic"], "title", [], "any", false, false, false, 224), "html", null, true);
                        echo "</h4>
\t\t\t\t\t\t\t\t<p class=\"list-group-item-text\">
\t\t\t\t\t\t\t\t\t<i>";
                        // line 226
                        echo gettext("Last post");
                        echo ":</i> <img src=\"";
                        echo twig_escape_filter($this->env, twig_gravatar_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["topic"], "last", [], "any", false, false, false, 226), "author", [], "any", false, false, false, 226), "email", [], "any", false, false, false, 226)), "html", null, true);
                        echo "?size=15\" alt=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["topic"], "last", [], "any", false, false, false, 226), "author", [], "any", false, false, false, 226), "name", [], "any", false, false, false, 226), "html", null, true);
                        echo "\"> ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["topic"], "last", [], "any", false, false, false, 226), "author", [], "any", false, false, false, 226), "name", [], "any", false, false, false, 226), "html", null, true);
                        echo " <strong>";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["topic"], "last", [], "any", false, false, false, 226), "created_at", [], "any", false, false, false, 226), "Y-m-d h:i"), "html", null, true);
                        echo "</strong>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['i'], $context['topic'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 230
                    echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 234
                echo "\t\t\t\t";
            }
            echo "\t
\t\t\t</div>
\t";
        } else {
            // line 237
            echo "\t\t";
            if ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "home_page", [], "any", false, false, false, 237) == "menuicons")) {
                // line 238
                echo "\t\t\t";
                if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "showcase_enabled", [], "any", false, false, false, 238)) {
                    // line 239
                    echo "\t\t\t<div class=\"jumbotron text-center\">
\t\t\t\t<h1>";
                    // line 240
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "showcase_heading", [], "any", false, false, false, 240), "html", null, true);
                    echo "</h1>
\t\t\t\t<p>";
                    // line 241
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "showcase_text", [], "any", false, false, false, 241), "html", null, true);
                    echo "</p>
\t\t\t\t<a href=\"";
                    // line 242
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "showcase_button_url", [], "any", false, false, false, 242), "html", null, true);
                    echo "\" class=\"btn btn-primary btn-lg\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "showcase_button_title", [], "any", false, false, false, 242), "html", null, true);
                    echo "</a>
\t\t\t</div>
\t\t\t";
                }
                // line 244
                echo "\t
\t\t
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t<div class=\"panel panel-default text-center\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<span class=\"fa-stack fa-5x\">
\t\t\t\t\t\t\t\t  <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
\t\t\t\t\t\t\t\t  <i class=\"fa fa-shopping-cart fa-stack-1x fa-inverse\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t<h4><a href=\"";
                // line 256
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/order");
                echo "\">";
                echo gettext("Order");
                echo "</a></h4>
\t\t\t\t\t\t\t<p>";
                // line 257
                echo gettext("Choose products we offer for selling");
                echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t<div class=\"panel panel-default text-center\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<span class=\"fa-stack fa-5x\">
\t\t\t\t\t\t\t\t  <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
\t\t\t\t\t\t\t\t  <i class=\"fa fa-users fa-stack-1x fa-inverse\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t<h4><a href=\"";
                // line 271
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/login", ["register" => 1]);
                echo "\">";
                echo gettext("Register");
                echo "</a></h4>
\t\t\t\t\t\t\t<p>";
                // line 272
                echo gettext("Become a member and manage services");
                echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t<div class=\"panel panel-default text-center\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<span class=\"fa-stack fa-5x\">
\t\t\t\t\t\t\t\t  <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
\t\t\t\t\t\t\t\t  <i class=\"fa fa-envelope fa-stack-1x fa-inverse\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t<h4><a href=\"";
                // line 286
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/support/contact-us");
                echo "\">";
                echo gettext("Contact Us");
                echo "</a></h4>
\t\t\t\t\t\t\t<p>";
                // line 287
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "signature", [], "any", false, false, false, 287), "html", null, true);
                echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t";
                // line 292
                if (twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "extension_is_on", [0 => ["mod" => "news"]], "method", false, false, false, 292)) {
                    // line 293
                    echo "\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t<div class=\"panel panel-default text-center\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<span class=\"fa-stack fa-5x\">
\t\t\t\t\t\t\t\t  <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
\t\t\t\t\t\t\t\t  <i class=\"fa fa-bullhorn fa-stack-1x fa-inverse\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t<h4><a href=\"";
                    // line 302
                    echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/news");
                    echo "\">";
                    echo gettext("Announcements");
                    echo "</a></h4>
\t\t\t\t\t\t\t<p>";
                    // line 303
                    echo gettext("Track our latest posts");
                    echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
                }
                // line 308
                echo "
\t\t\t\t";
                // line 309
                if (twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "extension_is_on", [0 => ["mod" => "kb"]], "method", false, false, false, 309)) {
                    // line 310
                    echo "\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t<div class=\"panel panel-default text-center\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<span class=\"fa-stack fa-5x\">
\t\t\t\t\t\t\t\t  <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
\t\t\t\t\t\t\t\t  <i class=\"fa fa-graduation-cap fa-stack-1x fa-inverse\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t<h4><a href=\"";
                    // line 319
                    echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/kb");
                    echo "\">";
                    echo gettext("Knowledge Base");
                    echo "</a></h4>
\t\t\t\t\t\t\t<p>";
                    // line 320
                    echo gettext("Browse our KB for answers and FAQs");
                    echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
                }
                // line 325
                echo "\t\t\t</div>
\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 326
($context["settings"] ?? null), "home_page", [], "any", false, false, false, 326) == "order")) {
                // line 327
                echo "\t\t\t";
                $this->loadTemplate("mod_order_index.phtml", "mod_index_dashboard.phtml", 327)->display($context);
                // line 328
                echo "\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "home_page", [], "any", false, false, false, 328) == "blog")) {
                // line 329
                echo "\t\t\t";
                $this->loadTemplate("mod_news_index.phtml", "mod_index_dashboard.phtml", 329)->display($context);
                // line 330
                echo "\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "home_page", [], "any", false, false, false, 330) == "login")) {
                // line 331
                echo "\t\t\t";
                $this->loadTemplate("mod_page_login.phtml", "mod_index_dashboard.phtml", 331)->display($context);
                // line 332
                echo "\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "home_page", [], "any", false, false, false, 332) == "contact")) {
                // line 333
                echo "\t\t\t";
                $this->loadTemplate("mod_support_contact_us.phtml", "mod_index_dashboard.phtml", 333)->display($context);
                // line 334
                echo "\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "home_page", [], "any", false, false, false, 334) == "kb")) {
                // line 335
                echo "\t\t\t";
                $this->loadTemplate("mod_kb_index.phtml", "mod_index_dashboard.phtml", 335)->display($context);
                // line 336
                echo "\t\t";
            }
            // line 337
            echo "\t";
        }
    }

    public function getTemplateName()
    {
        return "mod_index_dashboard.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  900 => 337,  897 => 336,  894 => 335,  891 => 334,  888 => 333,  885 => 332,  882 => 331,  879 => 330,  876 => 329,  873 => 328,  870 => 327,  868 => 326,  865 => 325,  857 => 320,  851 => 319,  840 => 310,  838 => 309,  835 => 308,  827 => 303,  821 => 302,  810 => 293,  808 => 292,  800 => 287,  794 => 286,  777 => 272,  771 => 271,  754 => 257,  748 => 256,  734 => 244,  726 => 242,  722 => 241,  718 => 240,  715 => 239,  712 => 238,  709 => 237,  702 => 234,  696 => 230,  678 => 226,  673 => 224,  662 => 223,  658 => 222,  648 => 218,  646 => 217,  640 => 213,  637 => 212,  635 => 211,  632 => 210,  626 => 206,  613 => 204,  608 => 203,  606 => 202,  596 => 198,  594 => 197,  588 => 193,  586 => 192,  583 => 191,  577 => 187,  570 => 185,  555 => 183,  551 => 182,  547 => 181,  540 => 180,  536 => 179,  524 => 172,  519 => 170,  508 => 165,  506 => 164,  500 => 160,  498 => 159,  494 => 157,  488 => 154,  475 => 151,  468 => 150,  464 => 149,  454 => 145,  452 => 144,  446 => 140,  444 => 139,  440 => 137,  434 => 134,  415 => 131,  411 => 130,  404 => 129,  400 => 128,  390 => 124,  388 => 123,  382 => 119,  380 => 118,  376 => 116,  370 => 113,  359 => 112,  346 => 109,  342 => 108,  335 => 107,  330 => 106,  328 => 105,  318 => 101,  310 => 99,  307 => 98,  305 => 97,  299 => 93,  297 => 92,  293 => 90,  282 => 86,  267 => 84,  262 => 83,  259 => 82,  242 => 80,  237 => 79,  235 => 78,  225 => 74,  217 => 72,  214 => 71,  212 => 70,  206 => 66,  204 => 65,  200 => 63,  189 => 59,  174 => 57,  169 => 56,  167 => 55,  157 => 51,  149 => 49,  146 => 48,  144 => 47,  138 => 43,  136 => 42,  130 => 38,  122 => 36,  118 => 35,  114 => 34,  111 => 33,  108 => 32,  105 => 31,  101 => 30,  96 => 26,  89 => 22,  85 => 20,  82 => 19,  75 => 15,  71 => 13,  68 => 12,  64 => 11,  57 => 3,  53 => 2,  48 => 7,  46 => 6,  44 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# Sets blank layout if another page if ajax request or if another page is request as home for non-clients #}
{% extends request.ajax or (not client and settings.home_page != \"menuicons\") ? \"layout_blank.phtml\" : \"layout_default.phtml\" %}
{% block meta_title %}{% trans 'Client Area' %}{% endblock %}
{% import \"macro_functions.phtml\" as mf %}

{% if not settings.home_sidemenu %}
\t{% if not client %}{% set side_menu = 'hidden' %}{% endif %}
{% endif %}

{# Content-before #}
{% block content_before %}
\t{% if client %}
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12\">
\t\t\t\t<h1 class=\"page-header\">{% trans 'Dashboard' %}</h1>
\t\t\t</div>
\t\t</div>\t
\t{% else %}
\t\t{% if settings.home_page == \"menuicons\" %}
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<h1 class=\"page-header\">{% trans 'Home' %}</h1>
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endif %}
\t{% endif %}
{% endblock %}

{# Content #}
{% block content %}
\t{% if client %}
\t\t\t{% if settings.showcase_enabled %}
\t\t\t<div class=\"jumbotron text-center\">
\t\t\t\t<h1>{{ settings.showcase_heading }}</h1>
\t\t\t\t<p>{{ settings.showcase_text }}</p>
\t\t\t\t<a href=\"{{ settings.showcase_button_url }}\" class=\"btn btn-primary btn-lg\">{{ settings.showcase_button_title }}</a>
\t\t\t</div>
\t\t\t{% endif %}\t

\t\t\t<div class=\"row\">
\t\t\t
\t\t\t\t{% if settings.dash_services %}
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t<i class=\"fa fa-cog\"></i> {% trans 'Services' %}
\t\t\t\t\t\t\t\t{% if client.order_get_list({\"expiring\":1}).total > 0 %}
\t\t\t\t\t\t\t\t\t<span class=\"label label-primary\">{{ client.order_get_list({\"expiring\":1}).total }} {% trans 'Soon expires' %}</span>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t<a class=\"btn btn-default btn-xs pull-right\" href=\"{{ 'order/service'|link }}\">{% trans 'All services' %}</a>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"list-group text-center\">
\t\t\t\t\t\t\t{% set services = client.order_get_list({\"per_page\":10, \"page\":request.page, \"hide_addons\":1, \"status\":\"active\"}) %}
\t\t\t\t\t\t\t{% for i, service in services.list %}
\t\t\t\t\t\t\t<a href=\"{{ '/order/service/manage'|link }}/{{service.id}}\" class=\"list-group-item\">{{service.title}} #{{ service.id }}</a>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t<a class=\"list-group-item list-group-item-success\" href=\"{{ 'order'|link }}\">{% trans 'New order' %}</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t{% endif %}\t
\t\t\t\t
\t\t\t\t{% if settings.dash_support %}
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t<i class=\"fa fa-life-ring\"></i> {% trans 'Support' %}
\t\t\t\t\t\t\t\t{% if client.support_ticket_get_list({\"status\":'on_hold'}).total > 0 %}
\t\t\t\t\t\t\t\t\t<span class=\"label label-warning\">{{ client.support_ticket_get_list({\"status\":'on_hold'}).total }} {{ mf.status_name(\"on_hold\") }}</span>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t<a class=\"btn btn-default btn-xs pull-right\" href=\"{{ 'support'|link }}\">{% trans 'All tickets' %}</a>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"list-group text-center\">
\t\t\t\t\t\t\t{% set tickets_on_hold = client.support_ticket_get_list({\"status\":'on_hold'}) %}
\t\t\t\t\t\t\t{% for i, ticket in tickets_on_hold.list %}
\t\t\t\t\t\t\t\t<a href=\"{{ 'support/ticket'|link }}/{{ticket.id}}\" class=\"list-group-item\">{{ticket.subject}} <span class=\"label label-default\">{{ticket.helpdesk.name}}</span> <span class=\"label label-warning\">{{ mf.status_name(ticket.status) }}</span></a>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t{% set tickets_open = client.support_ticket_get_list({\"status\":'open'}) %}
\t\t\t\t\t\t\t{% for i, ticket in tickets_open.list %}
\t\t\t\t\t\t\t\t<a href=\"{{ 'support/ticket'|link }}/{{ticket.id}}\" class=\"list-group-item\">{{ticket.subject}} <span class=\"label label-default\">{{ticket.helpdesk.name}}</span></a>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t<a class=\"list-group-item list-group-item-info\" href=\"{{ 'support'|link({'ticket' : 1}) }}\">{% trans 'New ticket' %}</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t{% endif %}\t
\t\t\t\t
\t\t\t\t{% if settings.dash_invoices %}
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t<i class=\"fa fa-credit-card\"></i> {% trans 'Invoices' %}
\t\t\t\t\t\t\t\t{% if client.invoice_get_list({\"status\":\"unpaid\"}).total > 0 %}
\t\t\t\t\t\t\t\t\t<span class=\"label label-danger\">{{ client.invoice_get_list({\"status\":\"unpaid\"}).total }} {% trans 'Unpaid' %}</span>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t<a class=\"btn btn-default btn-xs pull-right\" href=\"{{ 'invoice'|link }}\">{% trans 'All Invoices' %}</a>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"list-group text-center\">
\t\t\t\t\t\t\t{% set unpaid_invoices = client.invoice_get_list({\"status\":\"unpaid\", \"per_page\":10}).list %}
\t\t\t\t\t\t\t{% for i, invoice in unpaid_invoices %}
\t\t\t\t\t\t\t<a href=\"{{ 'invoice'|link }}/{{ invoice.hash }}\" class=\"list-group-item\">
\t\t\t\t\t\t\t\t<strong class=\"list-group-item-heading\">{{ \"Invoice #%05s\"|format(invoice.id) }}</strong>
\t\t\t\t\t\t\t\t<p class=\"list-group-item-text\">{% trans 'Due Date' %}: {{ invoice.due_at|date(\"d/m/Y\") }} - <strong>{{ invoice.total | money(invoice.currency) }}</strong></p>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t{% if client.invoice_get_list({\"status\":\"unpaid\"}).total > 0 %}<a class=\"list-group-item list-group-item-danger\" href=\"{{ 'invoice'|link }}\">{{ client.invoice_get_list({\"status\":\"unpaid\"}).total }} {% trans 'Unpaid' %}</a>{% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t{% endif %}\t
\t\t\t\t
\t\t\t\t{% if settings.dash_orders %}
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t<i class=\"fa fa-fw fa-shopping-cart\"></i> {% trans 'Recent orders' %}
\t\t\t\t\t\t\t\t<a class=\"btn btn-default btn-xs pull-right\" href=\"{{ 'order'|link }}\">{% trans 'New order' %}</a>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"list-group\">
\t\t\t\t\t\t\t{% for i, order in client.order_get_list({\"per_page\":5, \"page\":request.page, \"hide_addons\":1}).list %}
\t\t\t\t\t\t\t\t<a href=\"{{ 'order/service/manage'|link }}/{{order.id}}\" class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t{{ order.title|truncate(30) }}
\t\t\t\t\t\t\t\t\t<span class=\"pull-right label {% if order.status == \"active\" %}label-success{% elseif order.status == \"pending_setup\" %}label-warning{% elseif order.status == \"failed_setup\" %}label-danger{% else %}label-default{% endif %}\">{{ mf.status_name(order.status) }}</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t{% endif %}\t
\t\t\t\t
\t\t\t\t{% if settings.dash_messages %}
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t<i class=\"fa fa-fw fa-envelope\"></i> {% trans 'Recent emails' %}
\t\t\t\t\t\t\t\t<a class=\"btn btn-default btn-xs pull-right\" href=\"{{ 'email'|link }}\">{% trans 'Emails' %}</a>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"list-group\">
\t\t\t\t\t\t\t{% for i, email in client.email_get_list({\"per_page\":5}).list %}
\t\t\t\t\t\t\t<a href=\"{{ 'email'|link }}/{{email.id}}\" class=\"list-group-item\">
\t\t\t\t\t\t\t\t{{email.subject|truncate(30)}} <small>- {{ email.created_at|timeago }} {% trans 'ago' %}</small>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t{% endif %}\t

\t\t\t\t{% if settings.dash_kb and guest.extension_is_on({\"mod\":'kb'}) %}
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t<i class=\"fa fa-fw fa-graduation-cap\"></i> {% trans 'Knowledge Base' %}
\t\t\t\t\t\t\t\t<a class=\"btn btn-default btn-xs pull-right\" href=\"{{ 'kb'|link }}\">{% trans 'Knowledge Base' %}</a>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"list-group panel\" id=\"kb\">
\t\t\t\t\t\t\t<span class=\"list-group-item\">
\t\t\t\t\t\t\t\t<form method=\"get\" action=\"{{ 'kb'|link }}\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<input name=\"q\" type=\"text\" class=\"form-control\" value=\"{{ request.q }}\" placeholder=\"{% trans 'What are you looking for?' %}\">
\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-default\" type=\"submit\"><i class=\"fa fa-search\"></i></button>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t{% for i, category in guest.kb_category_get_list.list %}
\t\t\t\t\t\t\t\t<a href=\"#category-{{category.id}}\" class=\"list-group-item text-center\" data-toggle=\"collapse\" data-parent=\"#kb\"><strong>{{category.title}}</strong></a>
\t\t\t\t\t\t\t\t<div class=\"collapse\" id=\"category-{{category.id}}\">
\t\t\t\t\t\t\t\t{% for i, article in category.articles %}
\t\t\t\t\t\t\t\t\t<a href=\"{{ '/kb'|link }}/{{article.category.slug}}/{{article.slug}}\" class=\"list-group-item\">{{article.title}}</a>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t{% endif %}

\t\t\t\t{% if settings.dash_new and guest.extension_is_on({\"mod\":'news'}) %}
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t<i class=\"fa fa-fw fa-bullhorn\"></i> {% trans 'News & Announcements' %}
\t\t\t\t\t\t\t\t<a class=\"btn btn-default btn-xs pull-right\" href=\"{{ 'news'|link }}\">{% trans 'Blog' %}</a>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"list-group\">
\t\t\t\t\t\t\t{% set posts = guest.news_get_list({\"per_page\": 4, \"page\" : 1}) %}
\t\t\t\t\t\t\t{% for i, post in posts.list %}
\t\t\t\t\t\t\t\t<a href=\"{{ '/news'|link }}/{{post.slug}}\" class=\"list-group-item\">{{post.title}}</a>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t\t\t
\t\t\t\t{% if settings.dash_forum and guest.extension_is_on({\"mod\":'forum'}) %}
\t\t\t\t\t{% if client.forum_favorites %}
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t<i class=\"fa fa-fw fa-comments\"></i> {% trans 'Favorite topics' %}
\t\t\t\t\t\t\t\t<a class=\"btn btn-default btn-xs pull-right\" href=\"{{ 'forum'|link }}\">{% trans 'Forum' %}</a>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"list-group\">
\t\t\t\t\t\t\t{% for i, topic in client.forum_favorites %}
\t\t\t\t\t\t\t<a href=\"{{ '/forum'|link }}/{{topic.forum.slug}}/{{topic.slug}}#m-{{ topic.last.id }}\" class=\"list-group-item\">
\t\t\t\t\t\t\t\t<h4 class=\"list-group-item-heading\">{{topic.title}}</h4>
\t\t\t\t\t\t\t\t<p class=\"list-group-item-text\">
\t\t\t\t\t\t\t\t\t<i>{% trans 'Last post' %}:</i> <img src=\"{{ topic.last.author.email|gravatar }}?size=15\" alt=\"{{ topic.last.author.name }}\"> {{ topic.last.author.name }} <strong>{{ topic.last.created_at|date('Y-m-d h:i') }}</strong>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t{% endif %}\t
\t\t\t</div>
\t{% else %}
\t\t{% if settings.home_page == \"menuicons\" %}
\t\t\t{% if settings.showcase_enabled %}
\t\t\t<div class=\"jumbotron text-center\">
\t\t\t\t<h1>{{ settings.showcase_heading }}</h1>
\t\t\t\t<p>{{ settings.showcase_text }}</p>
\t\t\t\t<a href=\"{{ settings.showcase_button_url }}\" class=\"btn btn-primary btn-lg\">{{ settings.showcase_button_title }}</a>
\t\t\t</div>
\t\t\t{% endif %}\t
\t\t
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t<div class=\"panel panel-default text-center\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<span class=\"fa-stack fa-5x\">
\t\t\t\t\t\t\t\t  <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
\t\t\t\t\t\t\t\t  <i class=\"fa fa-shopping-cart fa-stack-1x fa-inverse\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t<h4><a href=\"{{ '/order'|link }}\">{% trans 'Order' %}</a></h4>
\t\t\t\t\t\t\t<p>{% trans 'Choose products we offer for selling' %}</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t<div class=\"panel panel-default text-center\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<span class=\"fa-stack fa-5x\">
\t\t\t\t\t\t\t\t  <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
\t\t\t\t\t\t\t\t  <i class=\"fa fa-users fa-stack-1x fa-inverse\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t<h4><a href=\"{{ '/login'|link({'register' : 1}) }}\">{% trans 'Register' %}</a></h4>
\t\t\t\t\t\t\t<p>{% trans 'Become a member and manage services' %}</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t<div class=\"panel panel-default text-center\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<span class=\"fa-stack fa-5x\">
\t\t\t\t\t\t\t\t  <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
\t\t\t\t\t\t\t\t  <i class=\"fa fa-envelope fa-stack-1x fa-inverse\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t<h4><a href=\"{{ '/support/contact-us'|link }}\">{% trans 'Contact Us' %}</a></h4>
\t\t\t\t\t\t\t<p>{{ company.signature }}</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t{% if guest.extension_is_on({\"mod\":\"news\"}) %}
\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t<div class=\"panel panel-default text-center\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<span class=\"fa-stack fa-5x\">
\t\t\t\t\t\t\t\t  <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
\t\t\t\t\t\t\t\t  <i class=\"fa fa-bullhorn fa-stack-1x fa-inverse\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t<h4><a href=\"{{ '/news'|link }}\">{% trans 'Announcements' %}</a></h4>
\t\t\t\t\t\t\t<p>{% trans 'Track our latest posts' %}</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t{% endif %}

\t\t\t\t{% if guest.extension_is_on({\"mod\":\"kb\"}) %}
\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t<div class=\"panel panel-default text-center\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<span class=\"fa-stack fa-5x\">
\t\t\t\t\t\t\t\t  <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
\t\t\t\t\t\t\t\t  <i class=\"fa fa-graduation-cap fa-stack-1x fa-inverse\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t<h4><a href=\"{{ '/kb'|link }}\">{% trans 'Knowledge Base' %}</a></h4>
\t\t\t\t\t\t\t<p>{% trans 'Browse our KB for answers and FAQs' %}</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t{% elseif settings.home_page == \"order\" %}
\t\t\t{% include \"mod_order_index.phtml\" %}
\t\t{% elseif settings.home_page == \"blog\" %}
\t\t\t{% include \"mod_news_index.phtml\" %}
\t\t{% elseif settings.home_page == \"login\" %}
\t\t\t{% include \"mod_page_login.phtml\" %}
\t\t{% elseif settings.home_page == \"contact\" %}
\t\t\t{% include \"mod_support_contact_us.phtml\" %}
\t\t{% elseif settings.home_page == \"kb\" %}
\t\t\t{% include \"mod_kb_index.phtml\" %}
\t\t{% endif %}
\t{% endif %}
{% endblock %}
", "mod_index_dashboard.phtml", "/home/lexcicxy/hostshibe.cf/bb-themes/bootstrap/html/mod_index_dashboard.phtml");
    }
}
