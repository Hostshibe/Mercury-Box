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

/* mod_invoice_invoice.phtml */
class __TwigTemplate_b54d1666971be37e482a4198609f8c7115927a71aabf5fee7e50c5217e1b7c42 extends \Twig\Template
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
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.phtml") : ("layout_default.phtml")), "mod_invoice_invoice.phtml", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.phtml", "mod_invoice_invoice.phtml", 2)->unwrap();
        // line 6
        $context["nr"] = (twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "serie", [], "any", false, false, false, 6) . sprintf("%05s", twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "nr", [], "any", false, false, false, 6)));
        // line 7
        $context["seller"] = twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "seller", [], "any", false, false, false, 7);
        // line 8
        $context["buyer"] = twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "buyer", [], "any", false, false, false, 8);
        // line 9
        $context["company"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_company", [], "any", false, false, false, 9);
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo gettext("Proforma invoice");
    }

    // line 11
    public function block_content_before($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "\t\t<!-- Page Heading/Breadcrumbs -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
\t\t\t\t";
        // line 15
        if ((twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "status", [], "any", false, false, false, 15) == "unpaid")) {
            // line 16
            echo "\t\t\t\t<h1 class=\"page-header\">";
            echo gettext("Proforma Invoice");
            // line 17
            echo "\t\t\t\t\t<small>";
            echo gettext("Please choose payment type and pay for your chosen products.");
            echo "</small>
\t\t\t\t</h1>
\t\t\t\t";
            // line 19
            $this->loadTemplate("partial_steps.phtml", "mod_invoice_invoice.phtml", 19)->display(twig_array_merge($context, ["selected" => 4]));
            // line 20
            echo "\t\t\t\t";
        } else {
            // line 21
            echo "\t\t\t\t<h1 class=\"page-header\">";
            echo gettext("Invoice");
            echo " ";
            echo twig_escape_filter($this->env, ($context["nr"] ?? null), "html", null, true);
            echo "
\t\t\t\t\t<small>";
            // line 22
            echo gettext("Invoice is paid");
            echo "</small>
\t\t\t\t</h1>
\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t<li><a href=\"";
            // line 25
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/invoice");
            echo "\">";
            echo gettext("Invoices");
            echo "</a></li>
\t\t\t\t\t<li class=\"active\">";
            // line 26
            echo twig_escape_filter($this->env, sprintf("Invoice #%05s", twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "id", [], "any", false, false, false, 26)), "html", null, true);
            echo "</li>
\t\t\t\t</ol>
\t\t\t\t";
        }
        // line 29
        echo "            </div>
        </div>
        <!-- /.row -->
";
    }

    // line 33
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "\t
\t";
        // line 35
        if ((twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "status", [], "any", false, false, false, 35) == "unpaid")) {
            // line 36
            echo "\t\t\t<div class=\"alert alert-warning text-center\">
\t\t\t\t<h4>";
            // line 37
            echo gettext("Unpaid");
            echo "</h4>
\t\t\t\t";
            // line 38
            if ((twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "gateway_id", [], "any", false, false, false, 38) &&  !twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "change_payment_method", [], "any", false, false, false, 38))) {
                // line 39
                echo "\t\t\t\t";
                $context["payment"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "invoice_payment", [0 => ["gateway_id" => twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "gateway_id", [], "any", false, false, false, 39), "hash" => twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "hash", [], "any", false, false, false, 39), "auto_redirect" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "auto_redirect", [], "any", false, false, false, 39)]], "method", false, false, false, 39);
                // line 40
                echo "
\t\t\t\t\t\t";
                // line 41
                if ((twig_get_attribute($this->env, $this->source, ($context["payment"] ?? null), "type", [], "any", false, false, false, 41) == "html")) {
                    // line 42
                    echo "\t\t\t\t\t\t\t";
                    echo twig_replace_filter(twig_get_attribute($this->env, $this->source, ($context["payment"] ?? null), "result", [], "any", false, false, false, 42), ["bb-button" => "btn btn-warning"]);
                    echo "
\t\t\t\t\t\t";
                }
                // line 44
                echo "\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, ($context["payment"] ?? null), "type", [], "any", false, false, false, 44) == "form")) {
                    // line 45
                    echo "\t\t\t\t\t\t\t<h2>";
                    echo gettext("Redirecting to payment gateway..");
                    echo "</h2>
\t\t\t\t\t\t\t<form name=\"payment_form\" action=\"";
                    // line 46
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["payment"] ?? null), "service_url", [], "any", false, false, false, 46), "html", null, true);
                    echo "\" method=\"post\">
\t\t\t\t\t\t\t\t";
                    // line 47
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["payment"] ?? null), "result", [], "any", false, false, false, 47));
                    foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                        // line 48
                        echo "\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"";
                        echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                        echo "\" value=\"";
                        echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                        echo "\" />
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 50
                    echo "\t\t\t\t\t\t\t\t<input class=\"btn btn-warning\" type=\"submit\" value=\"";
                    echo gettext("Please click here to continue if this page does not redirect automatically in 5 seconds");
                    echo "\" id=\"payment_button\"/>
\t\t\t\t\t\t\t</form>

\t\t\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\t\t\t\$(document).ready(function(){
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\tdocument.getElementById('payment_button').style.display = 'none';
\t\t\t\t\t\t\t\t\tdocument.forms[\"payment_form\"].submit();
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t";
                }
                // line 61
                echo "\t\t\t\t";
            }
            // line 62
            echo "
\t\t\t\t";
            // line 63
            if (twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "change_payment_method", [], "any", false, false, false, 63)) {
                // line 64
                echo "\t\t\t\t\t<form method=\"post\" action=\"";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/guest/invoice/update");
                echo "\" class=\"api-form\" data-api-redirect=\"";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter(("invoice/" . twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "hash", [], "any", false, false, false, 64)), ["auto_redirect" => 1]);
                echo "\">
\t\t\t\t\t\t<div class=\"list-group\">
\t\t\t\t\t\t\t";
                // line 66
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "invoice_gateways", [], "any", false, false, false, 66));
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
                foreach ($context['_seq'] as $context["_key"] => $context["gtw"]) {
                    // line 67
                    echo "\t\t\t\t\t\t\t\t";
                    if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "currency", [], "any", false, false, false, 67), twig_get_attribute($this->env, $this->source, $context["gtw"], "accepted_currencies", [], "any", false, false, false, 67))) {
                        // line 68
                        echo "\t\t\t\t\t\t\t\t<label class=\"list-group-item list-group-item\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"gateway_id\" value=\"";
                        // line 69
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gtw"], "id", [], "any", false, false, false, 69), "html", null, true);
                        echo "\" ";
                        echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 69)) ? ("checked") : (""));
                        echo " />
\t\t\t\t\t\t\t\t\t";
                        // line 70
                        echo gettext("Pay by");
                        echo " ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gtw"], "title", [], "any", false, false, false, 70), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t\t";
                        // line 71
                        if ((twig_get_attribute($this->env, $this->source, $context["gtw"], "title", [], "any", false, false, false, 71) == "Custom")) {
                            // line 72
                            echo "\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-university fa-2x pull-right\"></i>
\t\t\t\t\t\t\t\t\t";
                        } elseif ((twig_get_attribute($this->env, $this->source,                         // line 73
$context["gtw"], "title", [], "any", false, false, false, 73) == "PayPal")) {
                            // line 74
                            echo "\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-paypal fa-2x pull-right\"></i>
\t\t\t\t\t\t\t\t\t";
                        } elseif ((twig_get_attribute($this->env, $this->source,                         // line 75
$context["gtw"], "title", [], "any", false, false, false, 75) == "Stripe")) {
                            // line 76
                            echo "\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cc-stripe fa-2x pull-right\"></i>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 78
                        echo "\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t";
                    }
                    // line 80
                    echo "\t\t\t\t\t\t\t";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gtw'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 81
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<button class=\"btn btn-warning btn-lg\" type=\"submit\"><i class=\"fa fa-credit-card\"></i> ";
                // line 82
                echo gettext("Pay now");
                echo " - ";
                echo gettext("Total:");
                echo " <strong>";
                echo twig_money($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "total", [], "any", false, false, false, 82), twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "currency", [], "any", false, false, false, 82));
                echo "</strong></button>
\t\t\t\t\t\t<input type=\"hidden\" name=\"hash\" value=\"";
                // line 83
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "hash", [], "any", false, false, false, 83), "html", null, true);
                echo "\"/>
\t\t\t\t\t</form>
\t\t\t\t";
            }
            // line 86
            echo "\t\t\t</div>
\t";
        }
        // line 88
        echo "\t
\t\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t";
        // line 93
        if (twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "logo_url", [], "any", false, false, false, 93)) {
            // line 94
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "logo_url", [], "any", false, false, false, 94), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "name", [], "any", false, false, false, 94), "html", null, true);
            echo "\" style=\"max-width: 100%; max-height: 100%\"/>
                ";
        } else {
            // line 96
            echo "                <img src=\" ";
            echo twig_asset_url($this->env, "images/logo.png");
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "name", [], "any", false, false, false, 96), "html", null, true);
            echo "\" style=\"max-width: 100%; max-height: 100%\"/>
                ";
        }
        // line 98
        echo "\t\t\t</div>
\t\t\t<div class=\"col-md-6 text-right\">
\t\t\t\t<h2>";
        // line 100
        echo gettext("Invoice");
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "serie_nr", [], "any", false, false, false, 100), "html", null, true);
        echo "</h2>
                <p>
\t\t\t\t\t";
        // line 102
        if (twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "paid_at", [], "any", false, false, false, 102)) {
            // line 103
            echo "\t\t\t\t\t";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "paid_at", [], "any", false, false, false, 103), "Y-m-d h:i"), "html", null, true);
            echo "
\t\t\t\t\t";
        } else {
            // line 105
            echo "\t\t\t\t\t";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "created_at", [], "any", false, false, false, 105), "Y-m-d h:i"), "html", null, true);
            echo "
\t\t\t\t\t";
        }
        // line 107
        echo "                </p>
\t\t\t\t<h2 class=\"invoice_";
        // line 108
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "status", [], "any", false, false, false, 108), "html", null, true);
        echo "\">";
        if ((twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "status", [], "any", false, false, false, 108) == "unpaid")) {
            echo gettext("Unpaid");
        } else {
            echo gettext("Paid");
        }
        echo "</h2>
\t\t\t</div>
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<hr />
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<address>
\t\t\t\t\t";
        // line 115
        if (twig_get_attribute($this->env, $this->source, ($context["seller"] ?? null), "company", [], "any", false, false, false, 115)) {
            echo "<strong>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["seller"] ?? null), "company", [], "any", false, false, false, 115), "html", null, true);
            echo "</strong><br />";
        }
        // line 116
        echo "\t\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["seller"] ?? null), "address", [], "any", false, false, false, 116)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["seller"] ?? null), "address", [], "any", false, false, false, 116), "html", null, true);
            echo "<br />";
        }
        // line 117
        echo "\t\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["seller"] ?? null), "phone", [], "any", false, false, false, 117)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["seller"] ?? null), "phone", [], "any", false, false, false, 117), "html", null, true);
            echo "<br />";
        }
        // line 118
        echo "\t\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["seller"] ?? null), "email", [], "any", false, false, false, 118)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["seller"] ?? null), "email", [], "any", false, false, false, 118), "html", null, true);
            echo "<br />";
        }
        echo "\t\t\t\t\t
\t\t\t\t\t";
        // line 119
        if (twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "account_number", [], "any", false, false, false, 119)) {
            echo gettext("Account");
            echo ": ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "account_number", [], "any", false, false, false, 119), "html", null, true);
            echo "<br />";
        }
        // line 120
        echo "\t\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "number", [], "any", false, false, false, 120)) {
            echo gettext("Company number");
            echo ": ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "number", [], "any", false, false, false, 120), "html", null, true);
            echo "<br />";
        }
        // line 121
        echo "\t\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "vat_number", [], "any", false, false, false, 121)) {
            echo gettext("VAT");
            echo ": ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "vat_number", [], "any", false, false, false, 121), "html", null, true);
            echo "<br />";
        }
        // line 122
        echo "\t\t\t\t\t";
        // line 123
        echo "\t\t\t\t</address>
\t\t\t</div>
\t\t\t<div class=\"col-md-6 text-right\">
\t\t\t\t<address>
\t\t\t\t\t";
        // line 127
        if (twig_get_attribute($this->env, $this->source, ($context["buyer"] ?? null), "company", [], "any", false, false, false, 127)) {
            echo "<strong>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["buyer"] ?? null), "company", [], "any", false, false, false, 127), "html", null, true);
            echo "</strong><br />";
        }
        // line 128
        echo "\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["buyer"] ?? null), "first_name", [], "any", false, false, false, 128) || twig_get_attribute($this->env, $this->source, ($context["buyer"] ?? null), "last_name", [], "any", false, false, false, 128))) {
            echo "<strong>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["buyer"] ?? null), "first_name", [], "any", false, false, false, 128), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["buyer"] ?? null), "last_name", [], "any", false, false, false, 128), "html", null, true);
            echo "</strong><br />";
        }
        // line 129
        echo "\t\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["buyer"] ?? null), "email", [], "any", false, false, false, 129)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["buyer"] ?? null), "email", [], "any", false, false, false, 129), "html", null, true);
            echo "<br />";
        }
        // line 130
        echo "\t\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["buyer"] ?? null), "address", [], "any", false, false, false, 130)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["buyer"] ?? null), "address", [], "any", false, false, false, 130), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["buyer"] ?? null), "city", [], "any", false, false, false, 130), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["buyer"] ?? null), "state", [], "any", false, false, false, 130), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["buyer"] ?? null), "postcode", [], "any", false, false, false, 130), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["buyer"] ?? null), "country", [], "any", false, false, false, 130), "html", null, true);
            echo "<br />";
        }
        echo "\t\t\t\t\t
\t\t\t\t\t";
        // line 131
        if (twig_get_attribute($this->env, $this->source, ($context["buyer"] ?? null), "phone", [], "any", false, false, false, 131)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["buyer"] ?? null), "phone", [], "any", false, false, false, 131), "html", null, true);
            echo "<br />";
        }
        // line 132
        echo "\t\t\t\t</address>
\t\t\t</div>
\t\t\t
\t\t\t";
        // line 135
        if (twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "text_1", [], "any", false, false, false, 135)) {
            // line 136
            echo "\t\t\t<div class=\"col-md-12\">
\t\t\t\t";
            // line 137
            echo twig_markdown_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "text_1", [], "any", false, false, false, 137));
            echo "
\t\t\t</div>
\t\t\t";
        }
        // line 140
        echo "
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t";
        // line 144
        echo gettext("Invoice");
        // line 145
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t<table class=\"table table-hover\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t\t\t<th>";
        // line 151
        echo gettext("Title");
        echo "</th>
\t\t\t\t\t\t\t\t\t<th class=\"currency\">";
        // line 152
        echo gettext("Price");
        echo "</th>
\t\t\t\t\t\t\t\t\t<th class=\"currency\">";
        // line 153
        echo gettext("Total");
        echo "</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>

\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t";
        // line 158
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "lines", [], "any", false, false, false, 158));
        foreach ($context['_seq'] as $context["i"] => $context["item"]) {
            // line 159
            echo "
\t\t\t\t\t\t\t\t<tr class=\"";
            // line 160
            echo twig_escape_filter($this->env, twig_cycle([0 => "odd", 1 => "even"], $context["i"]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t<td>";
            // line 161
            echo twig_escape_filter($this->env, ($context["i"] + 1), "html", null, true);
            echo ".</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t";
            // line 163
            if (twig_get_attribute($this->env, $this->source, $context["item"], "order_id", [], "any", false, false, false, 163)) {
                // line 164
                echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/order/service");
                echo "/manage/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "order_id", [], "any", false, false, false, 164), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 164), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 166
                echo "\t\t\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 166), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 168
            echo "\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"currency\">
\t\t\t\t\t\t\t\t\t\t";
            // line 170
            echo twig_money($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 170), twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "currency", [], "any", false, false, false, 170));
            echo "
\t\t\t\t\t\t\t\t\t\t";
            // line 171
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 171) > 1)) {
                // line 172
                echo "\t\t\t\t\t\t\t\t\t\tx ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 172), "html", null, true);
                echo " ";
                // line 173
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            // line 174
            echo "\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"currency\">";
            // line 175
            echo twig_money($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "total", [], "any", false, false, false, 175), twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "currency", [], "any", false, false, false, 175));
            echo "</td>
\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        echo "\t\t\t\t\t\t\t</tbody>

\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t";
        // line 182
        if ((twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "tax", [], "any", false, false, false, 182) > 0)) {
            // line 183
            echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th colspan=\"3\">";
            // line 184
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "taxname", [], "any", false, false, false, 184), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "taxrate", [], "any", false, false, false, 184), "html", null, true);
            echo "%</th>
\t\t\t\t\t\t\t\t\t<th class=\"currency\">";
            // line 185
            echo twig_money($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "tax", [], "any", false, false, false, 185), twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "currency", [], "any", false, false, false, 185));
            echo "</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
        }
        // line 188
        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        // line 189
        if ((twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "discount", [], "any", false, false, false, 189) > 0)) {
            // line 190
            echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th colspan=\"3\">";
            // line 191
            echo gettext("Discount");
            echo "</th>
\t\t\t\t\t\t\t\t\t<th class=\"currency\">";
            // line 192
            echo twig_money($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "discount", [], "any", false, false, false, 192), twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "currency", [], "any", false, false, false, 192));
            echo "</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
        }
        // line 195
        echo "\t\t\t\t\t\t\t\t<tr class=\"total\">
\t\t\t\t\t\t\t\t\t<th colspan=\"3\" class=\"text-right\">";
        // line 196
        echo gettext("Total");
        echo "</th>
\t\t\t\t\t\t\t\t\t<th class=\"currency\">";
        // line 197
        echo twig_money($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "total", [], "any", false, false, false, 197), twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "currency", [], "any", false, false, false, 197));
        echo "</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t";
        // line 205
        if (twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "text_2", [], "any", false, false, false, 205)) {
            // line 206
            echo "\t\t\t<div class=\"col-md-12\">
\t\t\t\t";
            // line 207
            echo twig_markdown_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "text_2", [], "any", false, false, false, 207));
            echo "
\t\t\t</div>
\t\t\t";
        }
        // line 210
        echo "\t\t\t
\t\t</div>
\t\t</div>
\t\t<div class=\"panel-footer text-center\">
\t\t\t<p>
\t\t\t\t";
        // line 215
        if ((twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "status", [], "any", false, false, false, 215) == "unpaid")) {
            // line 216
            echo "\t\t\t\t<a class=\"btn btn-primary\" href=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter(("invoice/" . twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "hash", [], "any", false, false, false, 216)), ["change_payment_method" => 1]);
            echo "\"><i class=\"fa fa-credit-card\"></i> ";
            echo gettext("Change payment method");
            echo "</a>
\t\t\t\t";
        }
        // line 218
        echo "\t\t\t\t<a class=\"btn btn-info\" href=\"";
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("invoice/pdf");
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "hash", [], "any", false, false, false, 218), "html", null, true);
        echo "\"><i class=\"fa fa-file-pdf-o\"></i> ";
        echo gettext("Download PDF");
        echo "</a> <a class=\"btn btn-info\" href=\"";
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("invoice/print");
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "hash", [], "any", false, false, false, 218), "html", null, true);
        echo "\"><i class=\"fa fa-print\"></i> ";
        echo gettext("Print");
        echo "</a>
\t\t\t</p>
\t\t</div>
\t\t</div>
<div class=\"text-center\">
\t<a class=\"btn btn-default\" href=\"";
        // line 223
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/invoice");
        echo "\"><i class=\"fa fa-arrow-left\"></i> ";
        echo gettext("List of invoices");
        echo "</a>
</div>
";
        // line 225
        $context["transactions"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "invoice_transaction_get_list", [0 => ["invoice_id" => twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "id", [], "any", false, false, false, 225), "type" => "payment", "per_page" => 100]], "method", false, false, false, 225), "list", [], "any", false, false, false, 225);
        // line 226
        echo "
";
        // line 227
        if ((twig_length_filter($this->env, ($context["transactions"] ?? null)) > 0)) {
            // line 228
            echo "
<div class=\"well\">
    <h2>";
            // line 230
            echo gettext("Transactions");
            echo "</h2>
    <table class=\"table table-striped table-hover\">
        <thead>
            <tr>
                <th>";
            // line 234
            echo gettext("Transaction Date");
            echo "</th>
                <th>";
            // line 235
            echo gettext("Transaction ID");
            echo "</th>
                <th>";
            // line 236
            echo gettext("Gateway");
            echo "</th>
                <th>";
            // line 237
            echo gettext("Amount");
            echo "</th>
            </tr>
        </thead>

        <tbody>
            ";
            // line 242
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["transactions"] ?? null));
            foreach ($context['_seq'] as $context["i"] => $context["tx"]) {
                // line 243
                echo "            <tr class=\"";
                echo twig_escape_filter($this->env, twig_cycle([0 => "odd", 1 => "even"], $context["i"]), "html", null, true);
                echo "\">
                <td>";
                // line 244
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tx"], "created_at", [], "any", false, false, false, 244), "Y-m-d h:i"), "html", null, true);
                echo "</td>
                <td>";
                // line 245
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tx"], "txn_id", [], "any", false, false, false, 245), "html", null, true);
                echo "</td>
                <td>";
                // line 246
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["tx"], "gateway", [], "any", true, true, false, 246)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["tx"], "gateway", [], "any", false, false, false, 246), "-")) : ("-")), "html", null, true);
                echo "</td>
                <td>";
                // line 247
                echo twig_money($this->env, twig_get_attribute($this->env, $this->source, $context["tx"], "amount", [], "any", false, false, false, 247), twig_get_attribute($this->env, $this->source, $context["tx"], "currency", [], "any", false, false, false, 247));
                echo "</td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['tx'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 250
            echo "        </tbody>
    </table>
</div>

";
        }
        // line 255
        echo "
";
    }

    public function getTemplateName()
    {
        return "mod_invoice_invoice.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  769 => 255,  762 => 250,  753 => 247,  749 => 246,  745 => 245,  741 => 244,  736 => 243,  732 => 242,  724 => 237,  720 => 236,  716 => 235,  712 => 234,  705 => 230,  701 => 228,  699 => 227,  696 => 226,  694 => 225,  687 => 223,  668 => 218,  660 => 216,  658 => 215,  651 => 210,  645 => 207,  642 => 206,  640 => 205,  629 => 197,  625 => 196,  622 => 195,  616 => 192,  612 => 191,  609 => 190,  607 => 189,  604 => 188,  598 => 185,  592 => 184,  589 => 183,  587 => 182,  582 => 179,  572 => 175,  569 => 174,  566 => 173,  562 => 172,  560 => 171,  556 => 170,  552 => 168,  546 => 166,  536 => 164,  534 => 163,  529 => 161,  525 => 160,  522 => 159,  518 => 158,  510 => 153,  506 => 152,  502 => 151,  494 => 145,  492 => 144,  486 => 140,  480 => 137,  477 => 136,  475 => 135,  470 => 132,  465 => 131,  449 => 130,  443 => 129,  434 => 128,  428 => 127,  422 => 123,  420 => 122,  412 => 121,  404 => 120,  397 => 119,  389 => 118,  383 => 117,  377 => 116,  371 => 115,  355 => 108,  352 => 107,  346 => 105,  340 => 103,  338 => 102,  331 => 100,  327 => 98,  319 => 96,  311 => 94,  309 => 93,  302 => 88,  298 => 86,  292 => 83,  284 => 82,  281 => 81,  267 => 80,  263 => 78,  259 => 76,  257 => 75,  254 => 74,  252 => 73,  249 => 72,  247 => 71,  241 => 70,  235 => 69,  232 => 68,  229 => 67,  212 => 66,  204 => 64,  202 => 63,  199 => 62,  196 => 61,  181 => 50,  170 => 48,  166 => 47,  162 => 46,  157 => 45,  154 => 44,  148 => 42,  146 => 41,  143 => 40,  140 => 39,  138 => 38,  134 => 37,  131 => 36,  129 => 35,  126 => 34,  122 => 33,  115 => 29,  109 => 26,  103 => 25,  97 => 22,  90 => 21,  87 => 20,  85 => 19,  79 => 17,  76 => 16,  74 => 15,  69 => 12,  65 => 11,  58 => 3,  54 => 1,  52 => 9,  50 => 8,  48 => 7,  46 => 6,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends request.ajax ? \"layout_blank.phtml\" : \"layout_default.phtml\" %}
{% import \"macro_functions.phtml\" as mf %}
{% block meta_title %}{% trans 'Proforma invoice' %}{% endblock %}


{% set nr = invoice.serie ~ \"%05s\"|format(invoice.nr) %}
{% set seller = invoice.seller %}
{% set buyer = invoice.buyer %}
{% set company  = guest.system_company %}

{% block content_before %}
\t\t<!-- Page Heading/Breadcrumbs -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
\t\t\t\t{% if invoice.status == 'unpaid' %}
\t\t\t\t<h1 class=\"page-header\">{% trans 'Proforma Invoice' %}
\t\t\t\t\t<small>{% trans 'Please choose payment type and pay for your chosen products.' %}</small>
\t\t\t\t</h1>
\t\t\t\t{% include \"partial_steps.phtml\" with {'selected': 4} %}
\t\t\t\t{% else %}
\t\t\t\t<h1 class=\"page-header\">{% trans 'Invoice' %} {{ nr }}
\t\t\t\t\t<small>{% trans 'Invoice is paid' %}</small>
\t\t\t\t</h1>
\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t<li><a href=\"{{ '/invoice'|link }}\">{% trans 'Invoices' %}</a></li>
\t\t\t\t\t<li class=\"active\">{{ \"Invoice #%05s\"|format(invoice.id) }}</li>
\t\t\t\t</ol>
\t\t\t\t{% endif %}
            </div>
        </div>
        <!-- /.row -->
{% endblock %}
{% block content %}
\t
\t{% if invoice.status == 'unpaid' %}
\t\t\t<div class=\"alert alert-warning text-center\">
\t\t\t\t<h4>{% trans 'Unpaid' %}</h4>
\t\t\t\t{% if invoice.gateway_id and not request.change_payment_method %}
\t\t\t\t{% set payment = guest.invoice_payment({\"gateway_id\" : invoice.gateway_id, \"hash\":invoice.hash, \"auto_redirect\":request.auto_redirect }) %}

\t\t\t\t\t\t{% if payment.type == 'html' %}
\t\t\t\t\t\t\t{{ payment.result|replace({'bb-button': 'btn btn-warning'})|raw }}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% if payment.type == 'form' %}
\t\t\t\t\t\t\t<h2>{% trans 'Redirecting to payment gateway..' %}</h2>
\t\t\t\t\t\t\t<form name=\"payment_form\" action=\"{{payment.service_url}}\" method=\"post\">
\t\t\t\t\t\t\t\t{% for key, value in payment.result %}
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"{{key}}\" value=\"{{value}}\" />
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t<input class=\"btn btn-warning\" type=\"submit\" value=\"{% trans 'Please click here to continue if this page does not redirect automatically in 5 seconds' %}\" id=\"payment_button\"/>
\t\t\t\t\t\t\t</form>

\t\t\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\t\t\t\$(document).ready(function(){
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\tdocument.getElementById('payment_button').style.display = 'none';
\t\t\t\t\t\t\t\t\tdocument.forms[\"payment_form\"].submit();
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t{% endif %}

\t\t\t\t{% if request.change_payment_method %}
\t\t\t\t\t<form method=\"post\" action=\"{{ 'api/guest/invoice/update'|link }}\" class=\"api-form\" data-api-redirect=\"{{ ('invoice/'~invoice.hash)|link({'auto_redirect' : 1}) }}\">
\t\t\t\t\t\t<div class=\"list-group\">
\t\t\t\t\t\t\t{% for gtw in guest.invoice_gateways %}
\t\t\t\t\t\t\t\t{% if invoice.currency in gtw.accepted_currencies %}
\t\t\t\t\t\t\t\t<label class=\"list-group-item list-group-item\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"gateway_id\" value=\"{{gtw.id}}\" {{loop.first ? 'checked' : ''}} />
\t\t\t\t\t\t\t\t\t{% trans 'Pay by' %} {{gtw.title}}
\t\t\t\t\t\t\t\t\t{% if gtw.title == \"Custom\" %}
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-university fa-2x pull-right\"></i>
\t\t\t\t\t\t\t\t\t{% elseif gtw.title == \"PayPal\" %}
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-paypal fa-2x pull-right\"></i>
\t\t\t\t\t\t\t\t\t{% elseif gtw.title == \"Stripe\" %}
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cc-stripe fa-2x pull-right\"></i>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<button class=\"btn btn-warning btn-lg\" type=\"submit\"><i class=\"fa fa-credit-card\"></i> {% trans 'Pay now' %} - {% trans 'Total:' %} <strong>{{ invoice.total | money(invoice.currency) }}</strong></button>
\t\t\t\t\t\t<input type=\"hidden\" name=\"hash\" value=\"{{invoice.hash}}\"/>
\t\t\t\t\t</form>
\t\t\t\t{% endif %}
\t\t\t</div>
\t{% endif %}
\t
\t\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t{% if company.logo_url %}
                <img src=\"{{company.logo_url}}\" alt=\"{{company.name}}\" style=\"max-width: 100%; max-height: 100%\"/>
                {% else %}
                <img src=\" {{ 'images/logo.png' | asset_url }}\" alt=\"{{company.name}}\" style=\"max-width: 100%; max-height: 100%\"/>
                {% endif %}
\t\t\t</div>
\t\t\t<div class=\"col-md-6 text-right\">
\t\t\t\t<h2>{% trans 'Invoice' %} {{ invoice.serie_nr }}</h2>
                <p>
\t\t\t\t\t{% if invoice.paid_at %}
\t\t\t\t\t{{ invoice.paid_at | date('Y-m-d h:i') }}
\t\t\t\t\t{% else %}
\t\t\t\t\t{{ invoice.created_at | date('Y-m-d h:i') }}
\t\t\t\t\t{% endif %}
                </p>
\t\t\t\t<h2 class=\"invoice_{{invoice.status }}\">{% if invoice.status == 'unpaid' %}{% trans 'Unpaid' %}{% else %}{% trans 'Paid' %}{% endif %}</h2>
\t\t\t</div>
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<hr />
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<address>
\t\t\t\t\t{% if seller.company %}<strong>{{ seller.company }}</strong><br />{% endif %}
\t\t\t\t\t{% if seller.address %}{{ seller.address }}<br />{% endif %}
\t\t\t\t\t{% if seller.phone %}{{ seller.phone }}<br />{% endif %}
\t\t\t\t\t{% if seller.email %}{{ seller.email }}<br />{% endif %}\t\t\t\t\t
\t\t\t\t\t{% if company.account_number %}{% trans 'Account' %}: {{ company.account_number }}<br />{% endif %}
\t\t\t\t\t{% if company.number %}{% trans 'Company number' %}: {{ company.number }}<br />{% endif %}
\t\t\t\t\t{% if company.vat_number %}{% trans 'VAT' %}: {{ company.vat_number }}<br />{% endif %}
\t\t\t\t\t{# Company note #}{# if company.note %}{{ company.note }}<br />{% endif #}
\t\t\t\t</address>
\t\t\t</div>
\t\t\t<div class=\"col-md-6 text-right\">
\t\t\t\t<address>
\t\t\t\t\t{% if buyer.company %}<strong>{{ buyer.company }}</strong><br />{% endif %}
\t\t\t\t\t{% if buyer.first_name or buyer.last_name %}<strong>{{ buyer.first_name }} {{ buyer.last_name }}</strong><br />{% endif %}
\t\t\t\t\t{% if buyer.email %}{{ buyer.email }}<br />{% endif %}
\t\t\t\t\t{% if buyer.address %}{{ buyer.address }} {{ buyer.city }} {{ buyer.state }} {{ buyer.postcode }} {{ buyer.country }}<br />{% endif %}\t\t\t\t\t
\t\t\t\t\t{% if buyer.phone %}{{ buyer.phone }}<br />{% endif %}
\t\t\t\t</address>
\t\t\t</div>
\t\t\t
\t\t\t{% if invoice.text_1 %}
\t\t\t<div class=\"col-md-12\">
\t\t\t\t{{ invoice.text_1|markdown }}
\t\t\t</div>
\t\t\t{% endif %}

\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t{% trans 'Invoice' %}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t<table class=\"table table-hover\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t\t\t<th>{% trans 'Title' %}</th>
\t\t\t\t\t\t\t\t\t<th class=\"currency\">{% trans 'Price' %}</th>
\t\t\t\t\t\t\t\t\t<th class=\"currency\">{% trans 'Total' %}</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>

\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t{% for i, item in invoice.lines %}

\t\t\t\t\t\t\t\t<tr class=\"{{ cycle(['odd', 'even'], i) }}\">
\t\t\t\t\t\t\t\t\t<td>{{ i+1 }}.</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t{% if item.order_id%}
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ '/order/service'|link }}/manage/{{item.order_id}}\">{{ item.title }}</a>
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t{{ item.title }}
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"currency\">
\t\t\t\t\t\t\t\t\t\t{{ item.price | money(invoice.currency) }}
\t\t\t\t\t\t\t\t\t\t{% if item.quantity > 1 %}
\t\t\t\t\t\t\t\t\t\tx {{ item.quantity }} {# item.unit #}
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"currency\">{{ item.total | money(invoice.currency) }}</td>
\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</tbody>

\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t{% if invoice.tax > 0 %}
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th colspan=\"3\">{{ invoice.taxname }} {{ invoice.taxrate }}%</th>
\t\t\t\t\t\t\t\t\t<th class=\"currency\">{{ invoice.tax | money(invoice.currency) }}</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t{% if invoice.discount > 0 %}
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th colspan=\"3\">{% trans 'Discount' %}</th>
\t\t\t\t\t\t\t\t\t<th class=\"currency\">{{ invoice.discount | money(invoice.currency) }}</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t<tr class=\"total\">
\t\t\t\t\t\t\t\t\t<th colspan=\"3\" class=\"text-right\">{% trans 'Total' %}</th>
\t\t\t\t\t\t\t\t\t<th class=\"currency\">{{ invoice.total | money(invoice.currency) }}</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t{% if invoice.text_2 %}
\t\t\t<div class=\"col-md-12\">
\t\t\t\t{{ invoice.text_2|markdown }}
\t\t\t</div>
\t\t\t{% endif %}
\t\t\t
\t\t</div>
\t\t</div>
\t\t<div class=\"panel-footer text-center\">
\t\t\t<p>
\t\t\t\t{% if invoice.status == 'unpaid' %}
\t\t\t\t<a class=\"btn btn-primary\" href=\"{{ ('invoice/'~invoice.hash)|link({'change_payment_method' : 1}) }}\"><i class=\"fa fa-credit-card\"></i> {% trans 'Change payment method' %}</a>
\t\t\t\t{% endif %}
\t\t\t\t<a class=\"btn btn-info\" href=\"{{ 'invoice/pdf' | link }}/{{invoice.hash}}\"><i class=\"fa fa-file-pdf-o\"></i> {% trans 'Download PDF' %}</a> <a class=\"btn btn-info\" href=\"{{ 'invoice/print' | link }}/{{invoice.hash}}\"><i class=\"fa fa-print\"></i> {% trans 'Print' %}</a>
\t\t\t</p>
\t\t</div>
\t\t</div>
<div class=\"text-center\">
\t<a class=\"btn btn-default\" href=\"{{ '/invoice'|link }}\"><i class=\"fa fa-arrow-left\"></i> {% trans 'List of invoices' %}</a>
</div>
{% set transactions = client.invoice_transaction_get_list({\"invoice_id\":invoice.id, \"type\":\"payment\",\"per_page\":100 }).list %}

{% if transactions|length > 0 %}

<div class=\"well\">
    <h2>{% trans 'Transactions' %}</h2>
    <table class=\"table table-striped table-hover\">
        <thead>
            <tr>
                <th>{% trans 'Transaction Date' %}</th>
                <th>{% trans 'Transaction ID' %}</th>
                <th>{% trans 'Gateway' %}</th>
                <th>{% trans 'Amount' %}</th>
            </tr>
        </thead>

        <tbody>
            {% for i, tx in transactions %}
            <tr class=\"{{ cycle(['odd', 'even'], i) }}\">
                <td>{{tx.created_at|date('Y-m-d h:i') }}</td>
                <td>{{tx.txn_id}}</td>
                <td>{{tx.gateway|default('-')}}</td>
                <td>{{ tx.amount | money(tx.currency) }}</td>
            </tr>
            {% endfor %}
        </tbody>
    </table>
</div>

{% endif %}

{% endblock %}



", "mod_invoice_invoice.phtml", "/home/lexcicxy/hostshibe.cf/bb-themes/bootstrap/html/mod_invoice_invoice.phtml");
    }
}
