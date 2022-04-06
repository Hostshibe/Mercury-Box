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

/* mod_cart_index.phtml */
class __TwigTemplate_9fb85ce17f28b585dea8a77a70393572e102ac3f75fdf2c605f55b632adc2bf6 extends \Twig\Template
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
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.phtml") : ("layout_default.phtml")), "mod_cart_index.phtml", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.phtml", "mod_cart_index.phtml", 3)->unwrap();
        // line 7
        $context["cart"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "cart_get", [], "any", false, false, false, 7);
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo gettext("Order confirm");
    }

    // line 9
    public function block_content_before($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "\t\t<!-- Page Heading/Breadcrumbs -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 13
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "items", [], "any", false, false, false, 13)) > 0)) {
            echo gettext("Select Product");
        } else {
            echo gettext("You have not selected any product");
        }
        // line 14
        echo "                    <small>";
        echo gettext("Choose products we offer for selling");
        echo "</small>
                </h1>
\t\t\t\t";
        // line 16
        $this->loadTemplate("partial_steps.phtml", "mod_cart_index.phtml", 16)->display(twig_array_merge($context, ["selected" => 3]));
        // line 17
        echo "            </div>
        </div>
        <!-- /.row -->
";
    }

    // line 21
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "\t

";
        // line 23
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "items", [], "any", false, false, false, 23)) > 0)) {
            // line 24
            echo "\t
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"well\">
\t\t\t\t\t<h4><i class=\"fa fa-shopping-cart\"></i> ";
            // line 28
            echo gettext("Shopping cart");
            echo "</h4>
\t\t\t\t\t<ul class=\"list-group\">
\t\t\t\t\t\t";
            // line 30
            $context["total_discount"] = 0;
            // line 31
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "items", [], "any", false, false, false, 31));
            foreach ($context['_seq'] as $context["i"] => $context["item"]) {
                // line 32
                echo "\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 33), "html", null, true);
                echo " ";
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 33) > 1)) {
                    echo "<span class=\"label label-default\">x";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 33), "html", null, true);
                    echo "</span>";
                }
                // line 34
                echo "\t\t\t\t\t\t\t<span class=\"pull-right\">
\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t";
                // line 36
                if (twig_get_attribute($this->env, $this->source, $context["item"], "discount_price", [], "any", false, false, false, 36)) {
                    // line 37
                    echo "\t\t\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 37) > 1)) {
                        // line 38
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 38), "html", null, true);
                        echo "x ";
                        echo twig_money_convert($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 38));
                        echo " = 
\t\t\t\t\t\t\t\t\t\t<del>";
                        // line 39
                        echo twig_money_convert($this->env, (twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 39) * twig_get_attribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 39)));
                        echo "</del>
\t\t\t\t\t\t\t\t\t\t";
                        // line 40
                        echo twig_money_convert($this->env, (twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 40) * (twig_get_attribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 40) - twig_get_attribute($this->env, $this->source, $context["item"], "discount_price", [], "any", false, false, false, 40))));
                        echo "
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 42
                        echo "\t\t\t\t\t\t\t\t\t\t<del>";
                        echo twig_money_convert($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 42));
                        echo "</del>
\t\t\t\t\t\t\t\t\t\t";
                        // line 43
                        echo twig_money_convert($this->env, (twig_get_attribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 43) - twig_get_attribute($this->env, $this->source, $context["item"], "discount_price", [], "any", false, false, false, 43)));
                        echo "
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 45
                    echo "\t\t\t\t\t\t\t\t";
                } else {
                    // line 46
                    echo "\t\t\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 46) > 1)) {
                        // line 47
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 47), "html", null, true);
                        echo "x ";
                        echo twig_money_convert($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 47));
                        echo " = ";
                        echo twig_money_convert($this->env, (twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 47) * twig_get_attribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 47)));
                        echo "
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 49
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        echo twig_money_convert($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 49));
                        echo "
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 51
                    echo "\t\t\t\t\t\t\t\t";
                }
                // line 52
                echo "\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t";
                // line 53
                if ((twig_period_title($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "period", [], "any", false, false, false, 53)) != "-")) {
                    echo twig_period_title($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "period", [], "any", false, false, false, 53));
                }
                // line 54
                echo "\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                // line 56
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "setup_price", [], "any", false, false, false, 56) != 0)) {
                    // line 57
                    echo "\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t";
                    // line 58
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 58), "html", null, true);
                    echo " ";
                    echo gettext("setup");
                    // line 59
                    echo "\t\t\t\t\t\t\t<span class=\"pull-right\">
\t\t\t\t\t\t\t\t<strong>";
                    // line 60
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "discount_setup", [], "any", false, false, false, 60)) {
                        // line 61
                        echo "\t\t\t\t\t\t\t\t\t<del>";
                        echo twig_money_convert($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "setup_price", [], "any", false, false, false, 61));
                        echo "</del>
\t\t\t\t\t\t\t\t\t";
                        // line 62
                        echo twig_money_convert($this->env, (twig_get_attribute($this->env, $this->source, $context["item"], "setup_price", [], "any", false, false, false, 62) - twig_get_attribute($this->env, $this->source, $context["item"], "discount_setup", [], "any", false, false, false, 62)));
                        echo "
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 64
                        echo "\t\t\t\t\t\t\t\t\t";
                        echo twig_money_convert($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "setup_price", [], "any", false, false, false, 64));
                        echo "
\t\t\t\t\t\t\t\t";
                    }
                    // line 65
                    echo "</strong>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                }
                // line 69
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "discount_price", [], "any", false, false, false, 69) || twig_get_attribute($this->env, $this->source, $context["item"], "discount_setup", [], "any", false, false, false, 69))) {
                    $context["total_discount"] = ((($context["total_discount"] ?? null) + twig_get_attribute($this->env, $this->source, $context["item"], "discount_price", [], "any", false, false, false, 69)) + twig_get_attribute($this->env, $this->source, $context["item"], "discount_setup", [], "any", false, false, false, 69));
                }
                // line 70
                echo "\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "\t\t\t\t\t</ul>
\t\t\t\t";
            // line 72
            if (($context["client"] ?? null)) {
                // line 73
                echo "\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t";
                // line 75
                $this->loadTemplate("partial_currency.phtml", "mod_cart_index.phtml", 75)->display($context);
                // line 76
                echo "\t\t\t\t\t\t<p><form action=\"";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/guest/cart/apply_promo");
                echo "\" method=\"post\" class=\"api-form form-inline\" data-api-reload=\"1\">
\t\t\t\t\t\t\t<h4>";
                // line 77
                echo gettext("Have a promo code?");
                echo "</h4>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"promocode\" id=\"promocode\" value=\"";
                // line 79
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "promocode", [], "any", true, true, false, 79)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "promocode", [], "any", false, false, false, 79), twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "promocode", [], "any", false, false, false, 79))) : (twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "promocode", [], "any", false, false, false, 79))), "html", null, true);
                echo "\" required=\"required\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                // line 81
                if (twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "promocode", [], "any", false, false, false, 81)) {
                    // line 82
                    echo "\t\t\t\t\t\t\t\t<a href=\"";
                    echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/guest/cart/remove_promo");
                    echo "\" class=\"btn btn-danger btn-sm api-link\" data-api-reload=\"1\">";
                    echo gettext("Reset");
                    echo "</a>
\t\t\t\t\t\t\t";
                } else {
                    // line 84
                    echo "\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-sm\" type=\"submit\">";
                    echo gettext("Apply");
                    echo "</button>
\t\t\t\t\t\t\t";
                }
                // line 86
                echo "\t\t\t\t\t\t</form></p><br />
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 text-right\">
\t\t\t\t\t\t<h4>";
                // line 89
                echo gettext("Total");
                echo "</h4>
\t\t\t\t\t\t<div class=\" alert alert-info\">
\t\t\t\t\t\t\t";
                // line 91
                if ((($context["total_discount"] ?? null) > 0)) {
                    echo gettext("Discount");
                    echo ": -";
                    echo twig_money_convert($this->env, ($context["total_discount"] ?? null));
                    echo "<br />";
                }
                // line 92
                echo "\t\t\t\t\t\t\t\t";
                $context["tax_amount"] = 0;
                // line 93
                echo "\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "client_is_taxable", [], "any", false, false, false, 93)) {
                    // line 94
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context["tax_rate"] = twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "invoice_get_tax_rate", [], "any", false, false, false, 94);
                    // line 95
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context["tax_amount"] = ((twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "total", [], "any", false, false, false, 95) * ($context["tax_rate"] ?? null)) / 100);
                    // line 96
                    echo "\t\t\t\t\t\t\t\t\t";
                    echo gettext("VAT");
                    echo " (";
                    echo twig_escape_filter($this->env, ($context["tax_rate"] ?? null), "html", null, true);
                    echo "%): ";
                    echo twig_money_convert($this->env, ($context["tax_amount"] ?? null));
                    echo "<br />
\t\t\t\t\t\t\t";
                }
                // line 98
                echo "\t\t\t\t\t\t\t<strong>";
                echo gettext("Total:");
                echo "</strong> ";
                echo twig_money_convert($this->env, (twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "total", [], "any", false, false, false, 98) + ($context["tax_amount"] ?? null)));
                echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t\t<form method=\"post\" action=\"";
                // line 101
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/client/cart/checkout");
                echo "\" class=\"api-form\" data-api-jsonp=\"onAfterCartCheckout\">
\t\t\t\t\t\t\t<div class=\"list-group text-left\">
\t\t\t\t\t\t\t\t";
                // line 103
                $context["enough_in_balance"] = (twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "client_balance_get_total", [], "any", false, false, false, 103) >= twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "total", [], "any", false, false, false, 103));
                // line 104
                echo "\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "total", [], "any", false, false, false, 104) &&  !($context["enough_in_balance"] ?? null))) {
                    // line 105
                    echo "\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "invoice_gateways", [], "any", false, false, false, 105));
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
                        // line 106
                        echo "\t\t\t\t\t\t\t\t\t";
                        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "currency", [], "any", false, false, false, 106), "code", [], "any", false, false, false, 106), twig_get_attribute($this->env, $this->source, $context["gtw"], "accepted_currencies", [], "any", false, false, false, 106))) {
                            // line 107
                            echo "\t\t\t\t\t\t\t\t\t<label class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"gateway_id\" value=\"";
                            // line 108
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gtw"], "id", [], "any", false, false, false, 108), "html", null, true);
                            echo "\" ";
                            echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 108)) ? ("checked") : (""));
                            echo " />
\t\t\t\t\t\t\t\t\t\t";
                            // line 109
                            echo gettext("Pay by");
                            echo " ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gtw"], "title", [], "any", false, false, false, 109), "html", null, true);
                            echo "
\t\t\t\t\t\t\t\t\t\t";
                            // line 110
                            if ((twig_get_attribute($this->env, $this->source, $context["gtw"], "title", [], "any", false, false, false, 110) == "Custom")) {
                                // line 111
                                echo "\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-university fa-2x pull-right\"></i>
\t\t\t\t\t\t\t\t\t\t";
                            } elseif ((twig_get_attribute($this->env, $this->source,                             // line 112
$context["gtw"], "title", [], "any", false, false, false, 112) == "PayPal")) {
                                // line 113
                                echo "\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-paypal fa-2x pull-right\"></i>
\t\t\t\t\t\t\t\t\t\t";
                            } elseif ((twig_get_attribute($this->env, $this->source,                             // line 114
$context["gtw"], "title", [], "any", false, false, false, 114) == "Stripe")) {
                                // line 115
                                echo "\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cc-stripe fa-2x pull-right\"></i>
\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 117
                            echo "\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 119
                        echo "\t\t\t\t\t\t\t\t";
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
                    // line 120
                    echo "\t\t\t\t\t\t\t\t";
                }
                // line 121
                echo "\t\t\t\t\t\t\t\t";
                if (($context["enough_in_balance"] ?? null)) {
                    // line 122
                    echo "\t\t\t\t\t\t\t\t<p>";
                    echo gettext("Total amount will be deducted from account balance");
                    echo "</p>
\t\t\t\t\t\t\t\t";
                }
                // line 124
                echo "\t\t\t\t\t\t\t</div>
                            <input type=\"checkbox\" id=\"tos\" name=\"tos\" required>
                            <label for=\"tos\">I agree to the <a href=\"";
                // line 126
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/tos");
                echo "\" target=\"_blank\">";
                echo gettext("Terms and Conditions");
                echo "</a></label>
\t\t\t\t\t\t\t<p><button class=\"btn btn-success btn-lg\" type=\"submit\"><i class=\"fa fa-shopping-cart\"></i> ";
                // line 127
                echo gettext("Checkout");
                echo " ";
                echo twig_money_convert($this->env, (twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "total", [], "any", false, false, false, 127) + ($context["tax_amount"] ?? null)));
                echo "</button></p>
\t\t\t\t\t\t</form>
\t\t\t\t\t\t";
            } else {
                // line 129
                echo "\t
\t\t\t\t\t\t<div class=\"text-right\"><strong>";
                // line 130
                echo gettext("Total:");
                echo "</strong> ";
                echo twig_money_convert($this->env, (twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "total", [], "any", false, false, false, 130) + ($context["tax_amount"] ?? null)));
                echo " (";
                echo gettext("No VAT");
                echo ")</div>\t
\t\t\t\t\t\t";
            }
            // line 131
            echo "\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t
            ";
            // line 137
            if ( !($context["client"] ?? null)) {
                // line 138
                echo "\t\t\t<p class=\"text-center\">
\t\t\t\t\t<a class=\"btn btn-primary btn-lg\" data-toggle=\"tab\" href=\"#signin\">";
                // line 139
                echo gettext("Sign in");
                echo "</a>
\t\t\t\t\t<a class=\"btn btn-success btn-lg\" data-toggle=\"tab\" href=\"#register\">";
                // line 140
                echo gettext("Register");
                echo "</a>
\t\t\t\t</p>
\t\t\t\t<div id=\"myTabContent\" class=\"tab-content\">
\t\t\t\t\t<div class=\"tab-pane well\" id=\"signin\">
\t\t\t\t\t\t<form method=\"post\" action=\"\" class=\"api_form form-horizontal\" data-api-url=\"guest/client/login\" data-api-reload=\"1\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"email\" class=\"col-sm-4 control-label\">";
                // line 146
                echo gettext("Email Address");
                echo ": </label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t<input type=\"email\" name=\"email\" value=\"";
                // line 148
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "email", [], "any", false, false, false, 148), "html", null, true);
                echo "\" required=\"required\" class=\"form-control\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">";
                // line 152
                echo gettext("Password");
                echo ": </label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" name=\"password\" value=\"";
                // line 154
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "password", [], "any", false, false, false, 154), "html", null, true);
                echo "\" required=\"required\" class=\"form-control\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"text-right\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"remember\" value=\"1\" />
\t\t\t\t\t\t\t\t<a class=\"btn btn-warning\" href=\"";
                // line 159
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("reset-password");
                echo "\">";
                echo gettext("Reset password");
                echo "</a>
\t\t\t\t\t\t\t\t<input class=\"btn btn-primary\" type=\"submit\" value=\"";
                // line 160
                echo gettext("Login");
                echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-pane well\" id=\"register\">
\t\t\t\t\t\t<form method=\"post\" action=\"\" class=\"api_form form-horizontal\" data-api-url=\"guest/client/create\" data-api-reload=\"1\">
\t\t\t\t\t\t\t";
                // line 166
                $context["r"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "client_required", [], "any", false, false, false, 166);
                // line 167
                echo "\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"email\" class=\"col-sm-4 control-label\">";
                // line 168
                echo gettext("Email Address");
                echo ": </label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t<input type=\"email\" name=\"email\" value=\"";
                // line 170
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "email", [], "any", false, false, false, 170), "html", null, true);
                echo "\" required=\"required\" id=\"reg-email\" class=\"form-control\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">";
                // line 174
                echo gettext("First Name");
                echo ": </label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"first_name\" value=\"";
                // line 176
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "first_name", [], "any", false, false, false, 176), "html", null, true);
                echo "\" required=\"required\" class=\"form-control\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                // line 179
                if (twig_in_filter("last_name", ($context["r"] ?? null))) {
                    // line 180
                    echo "\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">";
                    // line 181
                    echo gettext("Last Name");
                    echo ": </label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"last_name\" value=\"";
                    // line 183
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "last_name", [], "any", false, false, false, 183), "html", null, true);
                    echo "\" required=\"required\" class=\"form-control\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 187
                echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                // line 188
                if (twig_in_filter("company", ($context["r"] ?? null))) {
                    // line 189
                    echo "\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">";
                    // line 190
                    echo gettext("Company");
                    echo ": </label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"company\" value=\"";
                    // line 192
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "company", [], "any", false, false, false, 192), "html", null, true);
                    echo "\" required=\"required\" class=\"form-control\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 196
                echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                // line 197
                if (twig_in_filter("birthday", ($context["r"] ?? null))) {
                    // line 198
                    echo "\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">";
                    // line 199
                    echo gettext("Birthday");
                    echo ": </label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"birthday\" value=\"\" class=\"form-control\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 205
                echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                // line 206
                if (twig_in_filter("gender", ($context["r"] ?? null))) {
                    // line 207
                    echo "\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">";
                    // line 208
                    echo gettext("You are");
                    echo ": </label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t<select name=\"gender\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t<option value=\"male\">Male</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"female\">Female</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 217
                echo "
\t\t\t\t\t\t\t";
                // line 218
                $context["custom_fields"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "client_custom_fields", [], "any", false, false, false, 218);
                // line 219
                echo "\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
                foreach ($context['_seq'] as $context["field_name"] => $context["field"]) {
                    // line 220
                    echo "\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["field"], "active", [], "any", false, false, false, 220)) {
                        // line 221
                        echo "\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"";
                        // line 222
                        echo twig_escape_filter($this->env, $context["field_name"], "html", null, true);
                        echo "\">";
                        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["field"], "title", [], "any", false, false, false, 222))) {
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "title", [], "any", false, false, false, 222), "html", null, true);
                        } else {
                            echo " ";
                            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["field_name"]), "html", null, true);
                            echo " ";
                        }
                        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"";
                        // line 224
                        echo twig_escape_filter($this->env, $context["field_name"], "html", null, true);
                        echo "\" id=\"";
                        echo twig_escape_filter($this->env, $context["field_name"], "html", null, true);
                        echo "\" value=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), $context["field_name"], [], "any", false, false, false, 224), "html", null, true);
                        echo "\" ";
                        if (twig_get_attribute($this->env, $this->source, $context["field"], "required", [], "any", false, false, false, 224)) {
                            echo "required=\"required\"";
                        }
                        echo ">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 228
                    echo "\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 229
                echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">";
                // line 231
                echo gettext("Password");
                echo ": </label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" name=\"password\" value=\"\" required=\"required\" id=\"reg-password\" class=\"form-control\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">";
                // line 238
                echo gettext("Password confirm");
                echo ": </label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" name=\"password_confirm\" value=\"\" required=\"required\" class=\"form-control\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t\t\t";
                // line 243
                echo twig_call_macro($macros["mf"], "macro_recaptcha", [], 243, $context, $this->getSourceContext());
                echo "

\t\t\t\t\t\t\t";
                // line 245
                if (twig_in_filter("address_1", ($context["r"] ?? null))) {
                    // line 246
                    echo "\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">";
                    // line 247
                    echo gettext("Address");
                    echo ": </label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"address_1\" value=\"";
                    // line 249
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "address_1", [], "any", false, false, false, 249), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 253
                echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                // line 254
                if (twig_in_filter("address_2", ($context["r"] ?? null))) {
                    // line 255
                    echo "\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">";
                    // line 256
                    echo gettext("Address 2");
                    echo ": </label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"address_2\" value=\"";
                    // line 258
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "address_2", [], "any", false, false, false, 258), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 262
                echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                // line 263
                if (twig_in_filter("city", ($context["r"] ?? null))) {
                    // line 264
                    echo "\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">";
                    // line 265
                    echo gettext("City");
                    echo ": </label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"city\" value=\"";
                    // line 267
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "city", [], "any", false, false, false, 267), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 271
                echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                // line 272
                if (twig_in_filter("country", ($context["r"] ?? null))) {
                    // line 273
                    echo "\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">";
                    // line 274
                    echo gettext("Country");
                    echo ": </label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t";
                    // line 276
                    echo twig_call_macro($macros["mf"], "macro_selectbox", ["country", twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_countries", [], "any", false, false, false, 276), twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "country", [], "any", false, false, false, 276), 0, "Select country"], 276, $context, $this->getSourceContext());
                    echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 280
                echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                // line 281
                if (twig_in_filter("state", ($context["r"] ?? null))) {
                    // line 282
                    echo "\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">";
                    // line 283
                    echo gettext("State");
                    echo ": </label>
\t\t\t\t\t\t\t\t\t ";
                    // line 285
                    echo "\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"state\" value=\"";
                    // line 286
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "state", [], "any", false, false, false, 286), "html", null, true);
                    echo "\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 290
                echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                // line 291
                if (twig_in_filter("postcode", ($context["r"] ?? null))) {
                    // line 292
                    echo "\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">";
                    // line 293
                    echo gettext("Zip/Postal Code");
                    echo ": </label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"postcode\" value=\"";
                    // line 295
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "postcode", [], "any", false, false, false, 295), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 299
                echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                // line 300
                if (twig_in_filter("phone", ($context["r"] ?? null))) {
                    // line 301
                    echo "\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">";
                    // line 302
                    echo gettext("Phone Number");
                    echo ": </label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"phone_cc\" value=\"";
                    // line 304
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "phone_cc", [], "any", false, false, false, 304), "html", null, true);
                    echo "\" style=\"width: 40px\"> <input type=\"text\" name=\"phone\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "phone", [], "any", false, false, false, 304), "html", null, true);
                    echo "\" style=\"width: 233px\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 308
                echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"text-right\">
\t\t\t\t\t\t\t\t<input class=\"btn btn-success\" type=\"submit\" value=\"";
                // line 310
                echo gettext("Register");
                echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
            ";
            }
            // line 317
            echo "\t\t\t
\t\t</div>
\t\t</div>
";
        } else {
            // line 321
            echo "
    <div class=\"text-center\">
\t\t<a class=\"btn btn-success btn-lg\" href=\"";
            // line 323
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("order");
            echo "\">";
            echo gettext("Order new service");
            echo "</a>
    </div>

";
        }
    }

    // line 329
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 330
        echo "<script type=\"text/javascript\">
function onAfterCartCheckout(result)
{
    if(result.invoice_hash) {
        bb.redirect('";
        // line 334
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("invoice");
        echo "' + '/' + result.invoice_hash + '&auto_redirect=1');
    } else {
        bb.redirect('";
        // line 336
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("order/service/manage");
        echo "' + '/' + result.order_id );
    }
}
</script>
";
    }

    public function getTemplateName()
    {
        return "mod_cart_index.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  894 => 336,  889 => 334,  883 => 330,  879 => 329,  868 => 323,  864 => 321,  858 => 317,  848 => 310,  844 => 308,  835 => 304,  830 => 302,  827 => 301,  825 => 300,  822 => 299,  815 => 295,  810 => 293,  807 => 292,  805 => 291,  802 => 290,  795 => 286,  792 => 285,  788 => 283,  785 => 282,  783 => 281,  780 => 280,  773 => 276,  768 => 274,  765 => 273,  763 => 272,  760 => 271,  753 => 267,  748 => 265,  745 => 264,  743 => 263,  740 => 262,  733 => 258,  728 => 256,  725 => 255,  723 => 254,  720 => 253,  713 => 249,  708 => 247,  705 => 246,  703 => 245,  698 => 243,  690 => 238,  680 => 231,  676 => 229,  670 => 228,  655 => 224,  642 => 222,  639 => 221,  636 => 220,  631 => 219,  629 => 218,  626 => 217,  614 => 208,  611 => 207,  609 => 206,  606 => 205,  597 => 199,  594 => 198,  592 => 197,  589 => 196,  582 => 192,  577 => 190,  574 => 189,  572 => 188,  569 => 187,  562 => 183,  557 => 181,  554 => 180,  552 => 179,  546 => 176,  541 => 174,  534 => 170,  529 => 168,  526 => 167,  524 => 166,  515 => 160,  509 => 159,  501 => 154,  496 => 152,  489 => 148,  484 => 146,  475 => 140,  471 => 139,  468 => 138,  466 => 137,  458 => 131,  449 => 130,  446 => 129,  438 => 127,  432 => 126,  428 => 124,  422 => 122,  419 => 121,  416 => 120,  402 => 119,  398 => 117,  394 => 115,  392 => 114,  389 => 113,  387 => 112,  384 => 111,  382 => 110,  376 => 109,  370 => 108,  367 => 107,  364 => 106,  346 => 105,  343 => 104,  341 => 103,  336 => 101,  327 => 98,  317 => 96,  314 => 95,  311 => 94,  308 => 93,  305 => 92,  298 => 91,  293 => 89,  288 => 86,  282 => 84,  274 => 82,  272 => 81,  267 => 79,  262 => 77,  257 => 76,  255 => 75,  251 => 73,  249 => 72,  246 => 71,  240 => 70,  235 => 69,  229 => 65,  223 => 64,  218 => 62,  213 => 61,  211 => 60,  208 => 59,  204 => 58,  201 => 57,  199 => 56,  195 => 54,  191 => 53,  188 => 52,  185 => 51,  179 => 49,  169 => 47,  166 => 46,  163 => 45,  158 => 43,  153 => 42,  148 => 40,  144 => 39,  137 => 38,  134 => 37,  132 => 36,  128 => 34,  120 => 33,  117 => 32,  112 => 31,  110 => 30,  105 => 28,  99 => 24,  97 => 23,  90 => 21,  83 => 17,  81 => 16,  75 => 14,  69 => 13,  64 => 10,  60 => 9,  53 => 5,  49 => 1,  47 => 7,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends request.ajax ? \"layout_blank.phtml\" : \"layout_default.phtml\" %}

{% import \"macro_functions.phtml\" as mf %}

{% block meta_title %}{%trans 'Order confirm' %}{% endblock %}

{% set cart = guest.cart_get %}

{% block content_before %}
\t\t<!-- Page Heading/Breadcrumbs -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">{% if cart.items|length > 0 %}{% trans 'Select Product' %}{% else %}{% trans 'You have not selected any product' %}{% endif %}
                    <small>{% trans 'Choose products we offer for selling' %}</small>
                </h1>
\t\t\t\t{% include \"partial_steps.phtml\" with {'selected': 3} %}
            </div>
        </div>
        <!-- /.row -->
{% endblock %}
{% block content %}\t

{% if cart.items|length > 0 %}
\t
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"well\">
\t\t\t\t\t<h4><i class=\"fa fa-shopping-cart\"></i> {% trans 'Shopping cart' %}</h4>
\t\t\t\t\t<ul class=\"list-group\">
\t\t\t\t\t\t{% set total_discount = 0 %}
\t\t\t\t\t\t{% for i, item in cart.items %}
\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t{{ item.title }} {% if item.quantity > 1 %}<span class=\"label label-default\">x{{ item.quantity }}</span>{% endif %}
\t\t\t\t\t\t\t<span class=\"pull-right\">
\t\t\t\t\t\t\t\t<strong>
\t\t\t\t\t\t\t\t{% if item.discount_price %}
\t\t\t\t\t\t\t\t\t{% if item.quantity > 1 %}
\t\t\t\t\t\t\t\t\t\t{{ item.quantity }}x {{ item.price | money_convert }} = 
\t\t\t\t\t\t\t\t\t\t<del>{{ (item.quantity*item.price) | money_convert }}</del>
\t\t\t\t\t\t\t\t\t\t{{ (item.quantity*(item.price - item.discount_price)) | money_convert }}
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<del>{{ item.price | money_convert }}</del>
\t\t\t\t\t\t\t\t\t\t{{ (item.price - item.discount_price) | money_convert }}
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t{% if item.quantity > 1 %}
\t\t\t\t\t\t\t\t\t\t{{ item.quantity }}x {{ item.price | money_convert }} = {{ (item.quantity*item.price) | money_convert }}
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t{{ item.price | money_convert }}
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t{% if item.period | period_title != '-' %}{{ item.period | period_title }}{% endif %}
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% if item.setup_price != 0 %}
\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t{{ item.title }} {% trans 'setup' %}
\t\t\t\t\t\t\t<span class=\"pull-right\">
\t\t\t\t\t\t\t\t<strong>{% if item.discount_setup %}
\t\t\t\t\t\t\t\t\t<del>{{ item.setup_price | money_convert }}</del>
\t\t\t\t\t\t\t\t\t{{ (item.setup_price - item.discount_setup) | money_convert }}
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t{{ item.setup_price | money_convert }}
\t\t\t\t\t\t\t\t{% endif %}</strong>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% if item.discount_price or item.discount_setup %}{% set total_discount = total_discount + item.discount_price + item.discount_setup %}{% endif %}
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</ul>
\t\t\t\t{% if client %}
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t{% include 'partial_currency.phtml' %}
\t\t\t\t\t\t<p><form action=\"{{ 'api/guest/cart/apply_promo'|link }}\" method=\"post\" class=\"api-form form-inline\" data-api-reload=\"1\">
\t\t\t\t\t\t\t<h4>{% trans 'Have a promo code?' %}</h4>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"promocode\" id=\"promocode\" value=\"{{ request.promocode|default(cart.promocode) }}\" required=\"required\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% if cart.promocode %}
\t\t\t\t\t\t\t\t<a href=\"{{ 'api/guest/cart/remove_promo'|link }}\" class=\"btn btn-danger btn-sm api-link\" data-api-reload=\"1\">{% trans 'Reset' %}</a>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-sm\" type=\"submit\">{% trans 'Apply' %}</button>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</form></p><br />
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 text-right\">
\t\t\t\t\t\t<h4>{% trans 'Total' %}</h4>
\t\t\t\t\t\t<div class=\" alert alert-info\">
\t\t\t\t\t\t\t{% if total_discount > 0 %}{% trans 'Discount' %}: -{{ total_discount | money_convert }}<br />{% endif %}
\t\t\t\t\t\t\t\t{% set tax_amount = 0 %}
\t\t\t\t\t\t\t\t{% if client.client_is_taxable %}
\t\t\t\t\t\t\t\t\t{% set tax_rate = client.invoice_get_tax_rate %}
\t\t\t\t\t\t\t\t\t{% set tax_amount = cart.total * tax_rate / 100 %}
\t\t\t\t\t\t\t\t\t{% trans 'VAT'%} ({{ tax_rate }}%): {{ tax_amount | money_convert }}<br />
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t<strong>{% trans 'Total:' %}</strong> {{ (cart.total + tax_amount) | money_convert }}
\t\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t\t<form method=\"post\" action=\"{{ 'api/client/cart/checkout'|link }}\" class=\"api-form\" data-api-jsonp=\"onAfterCartCheckout\">
\t\t\t\t\t\t\t<div class=\"list-group text-left\">
\t\t\t\t\t\t\t\t{% set enough_in_balance = client.client_balance_get_total >= cart.total %}
\t\t\t\t\t\t\t\t{% if cart.total and not enough_in_balance  %}
\t\t\t\t\t\t\t\t{% for gtw in guest.invoice_gateways %}
\t\t\t\t\t\t\t\t\t{% if cart.currency.code in gtw.accepted_currencies %}
\t\t\t\t\t\t\t\t\t<label class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"gateway_id\" value=\"{{gtw.id}}\" {{loop.first ? 'checked' : ''}} />
\t\t\t\t\t\t\t\t\t\t{% trans 'Pay by' %} {{gtw.title}}
\t\t\t\t\t\t\t\t\t\t{% if gtw.title == \"Custom\" %}
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-university fa-2x pull-right\"></i>
\t\t\t\t\t\t\t\t\t\t{% elseif gtw.title == \"PayPal\" %}
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-paypal fa-2x pull-right\"></i>
\t\t\t\t\t\t\t\t\t\t{% elseif gtw.title == \"Stripe\" %}
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cc-stripe fa-2x pull-right\"></i>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% if enough_in_balance %}
\t\t\t\t\t\t\t\t<p>{% trans 'Total amount will be deducted from account balance' %}</p>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</div>
                            <input type=\"checkbox\" id=\"tos\" name=\"tos\" required>
                            <label for=\"tos\">I agree to the <a href=\"{{ '/tos'|link }}\" target=\"_blank\">{% trans 'Terms and Conditions' %}</a></label>
\t\t\t\t\t\t\t<p><button class=\"btn btn-success btn-lg\" type=\"submit\"><i class=\"fa fa-shopping-cart\"></i> {% trans 'Checkout' %} {{ (cart.total + tax_amount) | money_convert }}</button></p>
\t\t\t\t\t\t</form>
\t\t\t\t\t\t{% else %}\t
\t\t\t\t\t\t<div class=\"text-right\"><strong>{% trans 'Total:' %}</strong> {{ (cart.total + tax_amount) | money_convert }} ({% trans 'No VAT'%})</div>\t
\t\t\t\t\t\t{% endif %}\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t
            {% if not client %}
\t\t\t<p class=\"text-center\">
\t\t\t\t\t<a class=\"btn btn-primary btn-lg\" data-toggle=\"tab\" href=\"#signin\">{% trans 'Sign in' %}</a>
\t\t\t\t\t<a class=\"btn btn-success btn-lg\" data-toggle=\"tab\" href=\"#register\">{% trans 'Register' %}</a>
\t\t\t\t</p>
\t\t\t\t<div id=\"myTabContent\" class=\"tab-content\">
\t\t\t\t\t<div class=\"tab-pane well\" id=\"signin\">
\t\t\t\t\t\t<form method=\"post\" action=\"\" class=\"api_form form-horizontal\" data-api-url=\"guest/client/login\" data-api-reload=\"1\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"email\" class=\"col-sm-4 control-label\">{% trans 'Email Address' %}: </label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t<input type=\"email\" name=\"email\" value=\"{{ request.email }}\" required=\"required\" class=\"form-control\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">{% trans 'Password' %}: </label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" name=\"password\" value=\"{{ request.password }}\" required=\"required\" class=\"form-control\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"text-right\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"remember\" value=\"1\" />
\t\t\t\t\t\t\t\t<a class=\"btn btn-warning\" href=\"{{ 'reset-password'|link }}\">{% trans 'Reset password' %}</a>
\t\t\t\t\t\t\t\t<input class=\"btn btn-primary\" type=\"submit\" value=\"{% trans 'Login' %}\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-pane well\" id=\"register\">
\t\t\t\t\t\t<form method=\"post\" action=\"\" class=\"api_form form-horizontal\" data-api-url=\"guest/client/create\" data-api-reload=\"1\">
\t\t\t\t\t\t\t{% set r = guest.client_required %}
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"email\" class=\"col-sm-4 control-label\">{% trans 'Email Address' %}: </label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t<input type=\"email\" name=\"email\" value=\"{{ request.email }}\" required=\"required\" id=\"reg-email\" class=\"form-control\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">{% trans 'First Name' %}: </label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"first_name\" value=\"{{ request.first_name }}\" required=\"required\" class=\"form-control\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% if 'last_name' in r %}
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">{% trans 'Last Name' %}: </label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"last_name\" value=\"{{ request.last_name }}\" required=\"required\" class=\"form-control\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t{% if 'company' in r %}
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">{% trans 'Company' %}: </label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"company\" value=\"{{ request.company }}\" required=\"required\" class=\"form-control\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t{% if 'birthday' in r %}
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">{% trans 'Birthday' %}: </label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"birthday\" value=\"\" class=\"form-control\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t{% if 'gender' in r %}
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">{% trans 'You are' %}: </label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t<select name=\"gender\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t<option value=\"male\">Male</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"female\">Female</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t{% set custom_fields = guest.client_custom_fields %}
\t\t\t\t\t\t\t{% for field_name, field in custom_fields %}
\t\t\t\t\t\t\t{% if field.active %}
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"{{ field_name }}\">{% if field.title is not empty %}{{ field.title }}{% else %} {{ field_name | capitalize }} {% endif %}</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"{{ field_name }}\" id=\"{{ field_name }}\" value=\"{{ attribute(request, field_name) }}\" {% if field.required %}required=\"required\"{% endif %}>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">{% trans 'Password' %}: </label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" name=\"password\" value=\"\" required=\"required\" id=\"reg-password\" class=\"form-control\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">{% trans 'Password confirm' %}: </label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" name=\"password_confirm\" value=\"\" required=\"required\" class=\"form-control\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t\t\t{{ mf.recaptcha }}

\t\t\t\t\t\t\t{% if 'address_1' in r %}
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">{% trans 'Address' %}: </label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"address_1\" value=\"{{ request.address_1 }}\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t{% if 'address_2' in r %}
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">{% trans 'Address 2' %}: </label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"address_2\" value=\"{{ request.address_2 }}\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t{% if 'city' in r %}
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">{% trans 'City' %}: </label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"city\" value=\"{{ request.city }}\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t{% if 'country' in r %}
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">{% trans 'Country' %}: </label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t{{ mf.selectbox('country', guest.system_countries, request.country, 0, 'Select country') }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t{% if 'state' in r %}
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">{% trans 'State' %}: </label>
\t\t\t\t\t\t\t\t\t {# mf.selectbox('state', guest.system_states, request.state, 0, 'Select state') #}
\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"state\" value=\"{{ request.state }}\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t{% if 'postcode' in r %}
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">{% trans 'Zip/Postal Code' %}: </label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"postcode\" value=\"{{ request.postcode }}\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t{% if 'phone' in r %}
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">{% trans 'Phone Number' %}: </label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"phone_cc\" value=\"{{ request.phone_cc }}\" style=\"width: 40px\"> <input type=\"text\" name=\"phone\" value=\"{{ request.phone }}\" style=\"width: 233px\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"text-right\">
\t\t\t\t\t\t\t\t<input class=\"btn btn-success\" type=\"submit\" value=\"{% trans 'Register' %}\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
            {% endif %}
\t\t\t
\t\t</div>
\t\t</div>
{% else %}

    <div class=\"text-center\">
\t\t<a class=\"btn btn-success btn-lg\" href=\"{{ 'order'|link }}\">{% trans 'Order new service' %}</a>
    </div>

{% endif %}
{% endblock %}

{% block js %}
<script type=\"text/javascript\">
function onAfterCartCheckout(result)
{
    if(result.invoice_hash) {
        bb.redirect('{{\"invoice\"|link}}' + '/' + result.invoice_hash + '&auto_redirect=1');
    } else {
        bb.redirect('{{\"order/service/manage\"|link}}' + '/' + result.order_id );
    }
}
</script>
{% endblock %}", "mod_cart_index.phtml", "/home/lexcicxy/hostshibe.cf/bb-themes/bootstrap/html/mod_cart_index.phtml");
    }
}
