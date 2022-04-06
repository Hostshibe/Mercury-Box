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

/* mod_order_manage.phtml */
class __TwigTemplate_315f28c0d1a82633f32b33e14a6744b5e02c471d38e67d2f95fa9a10d8e7d9ef extends \Twig\Template
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
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.phtml") : ("layout_default.phtml")), "mod_order_manage.phtml", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.phtml", "mod_order_manage.phtml", 2)->unwrap();
        // line 5
        $context["service_partial"] = (("mod_service" . twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "service_type", [], "any", false, false, false, 5)) . "_manage.phtml");
        // line 6
        $context["upgradables"] = twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "order_upgradables", [0 => ["id" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 6)]], "method", false, false, false, 6);
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "title", [], "any", false, false, false, 3), "html", null, true);
    }

    // line 8
    public function block_content_before($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "\t\t<!-- Page Heading/Breadcrumbs -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 12
        echo gettext("Service details");
        // line 13
        echo "\t\t\t\t\t<small>#";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 13), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "title", [], "any", false, false, false, 13), "html", null, true);
        echo "</small>
\t\t\t\t</h1>
\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t<li><a href=\"";
        // line 16
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("order/service");
        echo "\">";
        echo gettext("Ordered Services");
        echo "</a></li>
\t\t\t\t\t<li class=\"active\">#";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 17), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "title", [], "any", false, false, false, 17), "html", null, true);
        echo "</li>
\t\t\t\t</ol>
            </div>
        </div>
        <!-- /.row -->
";
    }

    // line 24
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "\t<div class=\"row\">
\t\t<ul class=\"list-group col-md-6 col-md-offset-3 text-center\">
\t\t\t<li class=\"list-group-item ";
        // line 27
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 27) == "active")) {
            echo "list-group-item-success";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 27) == "pending_setup")) {
            echo "list-group-item-warning";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 27) == "failed_setup")) {
            echo "list-group-item-danger";
        } else {
            echo "label-default";
        }
        echo "\">
\t\t\t\t<strong>";
        // line 28
        echo gettext("Order");
        echo ":</strong>
\t\t\t\t#";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 29), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "title", [], "any", false, false, false, 29), "html", null, true);
        echo " <span class=\"label ";
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 29) == "active")) {
            echo "label-success";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 29) == "pending_setup")) {
            echo "label-warning";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 29) == "failed_setup")) {
            echo "label-danger";
        } else {
            echo "label-default";
        }
        echo "\">";
        echo twig_call_macro($macros["mf"], "macro_status_name", [twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 29)], 29, $context, $this->getSourceContext());
        echo "</span>
\t\t\t</li>
\t\t\t<li class=\"list-group-item\"><strong>";
        // line 31
        echo gettext("Payment amount");
        echo ":</strong> ";
        echo twig_money($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "total", [], "any", false, false, false, 31), twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "currency", [], "any", false, false, false, 31));
        if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "period", [], "any", false, false, false, 31)) {
            echo " ";
            echo twig_period_title($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "period", [], "any", false, false, false, 31));
        }
        echo "</li>
\t\t\t<li class=\"list-group-item\"><strong>";
        // line 32
        echo gettext("Order created");
        echo ":</strong> ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "created_at", [], "any", false, false, false, 32), "Y-m-d h:i"), "html", null, true);
        echo "</li>
\t\t\t<li class=\"list-group-item\"><strong>";
        // line 33
        echo gettext("Activated at");
        echo ":</strong> ";
        if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "activated_at", [], "any", false, false, false, 33)) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "activated_at", [], "any", false, false, false, 33), "Y-m-d h:i"), "html", null, true);
        } else {
            echo "-";
        }
        echo "</li>
\t\t\t";
        // line 34
        if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "period", [], "any", false, false, false, 34)) {
            echo "<li class=\"list-group-item\"><strong>";
            echo gettext("Renewal date");
            echo ":</strong> ";
            if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "expires_at", [], "any", false, false, false, 34)) {
                echo "in ";
                echo twig_escape_filter($this->env, twig_daysleft_filter(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "expires_at", [], "any", false, false, false, 34)), "html", null, true);
                echo " day(s) (";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "expires_at", [], "any", false, false, false, 34), "Y-m-d h:i"), "html", null, true);
                echo ")";
            } else {
                echo "-";
            }
            echo "</li>";
        }
        // line 35
        echo "\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "notes", [], "any", false, false, false, 35)) {
            echo "<li class=\"list-group-item\"><strong>";
            echo gettext("Order notes");
            echo ":</strong> ";
            echo twig_bbmd_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "notes", [], "any", false, false, false, 35));
            echo "</li>";
        }
        // line 36
        echo "\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "active_tickets", [], "any", false, false, false, 36) > 0)) {
            echo "<li class=\"list-group-item\"><strong>";
            echo gettext("Active support tickets");
            echo ":</strong> <a href=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("support");
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "active_tickets", [], "any", false, false, false, 36), "html", null, true);
            echo "</a></li>";
        }
        // line 37
        echo "\t\t
\t\t\t";
        // line 38
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "group_master", [], "any", false, false, false, 38) == 1)) {
            // line 39
            echo "\t\t\t\t";
            $context["addons"] = twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "order_addons", [0 => ["id" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 39)]], "method", false, false, false, 39);
            // line 40
            echo "\t\t\t\t";
            if ((twig_length_filter($this->env, ($context["addons"] ?? null)) > 0)) {
                // line 41
                echo "\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["addons"] ?? null));
                foreach ($context['_seq'] as $context["i"] => $context["addon"]) {
                    // line 42
                    echo "\t\t\t\t<li class=\"list-group-item ";
                    if ((twig_get_attribute($this->env, $this->source, $context["addon"], "status", [], "any", false, false, false, 42) == "active")) {
                        echo "list-group-item-success";
                    } elseif ((twig_get_attribute($this->env, $this->source, $context["addon"], "status", [], "any", false, false, false, 42) == "pending_setup")) {
                        echo "list-group-item-warning";
                    } elseif ((twig_get_attribute($this->env, $this->source, $context["addon"], "status", [], "any", false, false, false, 42) == "failed_setup")) {
                        echo "list-group-item-danger";
                    } else {
                        echo "label-default";
                    }
                    echo "\">
\t\t\t\t\t\t<a href=\"";
                    // line 43
                    echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/order/service/manage");
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["addon"], "id", [], "any", false, false, false, 43), "html", null, true);
                    echo "\"><strong>";
                    echo gettext("Addon");
                    echo ":</strong> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["addon"], "title", [], "any", false, false, false, 43), "html", null, true);
                    echo "</a> <span class=\"label ";
                    if ((twig_get_attribute($this->env, $this->source, $context["addon"], "status", [], "any", false, false, false, 43) == "active")) {
                        echo "label-success";
                    } elseif ((twig_get_attribute($this->env, $this->source, $context["addon"], "status", [], "any", false, false, false, 43) == "pending_setup")) {
                        echo "label-warning";
                    } elseif ((twig_get_attribute($this->env, $this->source, $context["addon"], "status", [], "any", false, false, false, 43) == "failed_setup")) {
                        echo "label-danger";
                    } else {
                        echo "label-default";
                    }
                    echo "\">";
                    echo twig_call_macro($macros["mf"], "macro_status_name", [twig_get_attribute($this->env, $this->source, $context["addon"], "status", [], "any", false, false, false, 43)], 43, $context, $this->getSourceContext());
                    echo "</span><br />
\t\t\t\t\t\t<strong>";
                    // line 44
                    echo gettext("Price");
                    echo ":</strong> ";
                    echo twig_money($this->env, twig_get_attribute($this->env, $this->source, $context["addon"], "total", [], "any", false, false, false, 44), twig_get_attribute($this->env, $this->source, $context["addon"], "currency", [], "any", false, false, false, 44));
                    echo " ";
                    echo twig_period_title($this->env, twig_get_attribute($this->env, $this->source, $context["addon"], "period", [], "any", false, false, false, 44));
                    echo "<br />
\t\t\t\t\t\t";
                    // line 45
                    if (twig_get_attribute($this->env, $this->source, $context["addon"], "expires_at", [], "any", false, false, false, 45)) {
                        echo "<strong>";
                        echo gettext("Next due date");
                        echo ":</strong> ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["addon"], "expires_at", [], "any", false, false, false, 45), "Y-m-d h:i"), "html", null, true);
                        echo "<br />";
                    }
                    // line 46
                    echo "\t\t\t\t</li>
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['addon'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 48
                echo "\t\t\t\t";
            }
            // line 49
            echo "\t\t\t";
        }
        // line 50
        echo "\t\t</ul>
\t</div>
\t<p class=\"text-center\">
\t\t";
        // line 53
        if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "period", [], "any", false, false, false, 53)) {
            echo "<a class=\"btn btn-success\" id=\"renewal-button\">";
            echo gettext("Renew now");
            echo "</a>";
        }
        // line 54
        echo "\t\t<a class=\"btn btn-info\" data-toggle=\"modal\" data-target=\"#tickets\">";
        echo gettext("Open ticket");
        echo "</a>\t
        ";
        // line 55
        if (($context["upgradables"] ?? null)) {
            echo "<a class=\"btn btn-warning\" data-toggle=\"modal\" data-target=\"#upgrades\">";
            echo gettext("Request Upgrade");
            echo "</a>";
        }
        // line 56
        echo "\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 56) == "pending_setup")) {
            echo "<a class=\"btn btn-danger api\" href=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/client/order/delete", ["id" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 56)]);
            echo "\" data-api-redirect=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("order/service");
            echo "\">";
            echo gettext("Cancel");
            echo "</a>";
        }
        // line 57
        echo "\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 57) == "active")) {
            echo "<a class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#cancelation\">";
            echo gettext("Request Cancellation");
            echo "</a>";
        }
        // line 58
        echo "\t</p>

    <div class=\"modal fade\" id=\"cancelation\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"";
        // line 60
        echo gettext("Request Cancellation");
        echo "\">
\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t\t<h4 class=\"modal-title\" id=\"myModalLabel\">";
        // line 65
        echo gettext("Request Cancellation");
        echo "</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<form action=\"\" method=\"post\">
\t\t\t\t\t\t<div class=\"control-group form-group\">
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<label>";
        // line 71
        echo gettext("Help desk");
        echo ":</label>
\t\t\t\t\t\t\t\t";
        // line 72
        echo twig_call_macro($macros["mf"], "macro_selectbox", ["support_helpdesk_id", twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "support_helpdesk_get_pairs", [], "any", false, false, false, 72), twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "support_helpdesk_id", [], "any", false, false, false, 72), 1], 72, $context, $this->getSourceContext());
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"control-group form-group\">
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<label>";
        // line 77
        echo gettext("Subject");
        echo ":</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"subject\" value=\"";
        // line 78
        echo gettext("I would like to cancel");
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "title", [], "any", false, false, false, 78), "html", null, true);
        echo "\" required=\"required\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"control-group form-group\">
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<label>";
        // line 83
        echo gettext("Reason");
        echo ":</label>
\t\t\t\t\t\t\t\t<textarea rows=\"10\" cols=\"100\" class=\"form-control\" name=\"content\" maxlength=\"999\" style=\"resize:none\" required=\"required\">";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "content", [], "any", false, false, false, 84));
        echo "</textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<input type=\"hidden\" name=\"rel_type\" value=\"order\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"rel_id\" value=\"";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 89), "html", null, true);
        echo "\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"rel_task\" value=\"cancel\">
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
\t\t\t\t\t\t<input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 94
        echo gettext("Submit");
        echo "\">
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
    </div>
\t";
        // line 100
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "show_manage_buttons", [], "any", false, false, false, 100)) {
            // line 101
            echo "        <!-- Footer -->
\t\t\t<div class=\"row text-center\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<ul class=\"list-inline\">
\t\t\t\t\t\t";
            // line 105
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
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
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 106
                echo "\t\t\t\t\t\t\t";
                if ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["settings"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[(("button_" . twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 106)) . "_enabled")] ?? null) : null)) {
                    // line 107
                    echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t";
                    // line 108
                    if ((twig_in_filter("http://", (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["settings"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[(("button_" . twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 108)) . "_page")] ?? null) : null)) || twig_in_filter("https://", (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["settings"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[(("button_" . twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 108)) . "_page")] ?? null) : null)))) {
                        // line 109
                        echo "\t\t\t\t\t\t\t\t<a class=\"btn btn-info\" href=\"";
                        echo twig_escape_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["settings"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[(("button_" . twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 109)) . "_page")] ?? null) : null), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["settings"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[(("button_" . twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 109)) . "_title")] ?? null) : null), "html", null, true);
                        echo "</a>
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 111
                        echo "\t\t\t\t\t\t\t\t<a class=\"btn btn-info\" href=\"";
                        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["settings"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[(("button_" . twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 111)) . "_page")] ?? null) : null));
                        echo "\">";
                        echo twig_escape_filter($this->env, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["settings"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[(("button_" . twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 111)) . "_title")] ?? null) : null), "html", null, true);
                        echo "</a>
\t\t\t\t\t\t\t\t";
                    }
                    // line 113
                    echo "\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                }
                // line 115
                echo "\t\t\t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo "                    </ul>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t";
        }
        // line 120
        echo "\t
    <div class=\"widget open-ticket\">
    <div class=\"modal fade\" id=\"tickets\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"";
        // line 122
        echo gettext("Open new support ticket regarding this order");
        echo "\">
\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t\t<h4 class=\"modal-title\" id=\"myModalLabel\">";
        // line 127
        echo gettext("Open new support ticket regarding this order");
        echo "<br />
\t\t\t\t\t<small>";
        // line 128
        echo gettext("Submit new support ticket. Ticket will be visible in support section after submission");
        echo "</small></h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<form action=\"\" method=\"post\">
\t\t\t\t\t\t<div class=\"control-group form-group\">
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<label>";
        // line 134
        echo gettext("Help desk");
        echo ":</label>
\t\t\t\t\t\t\t\t";
        // line 135
        echo twig_call_macro($macros["mf"], "macro_selectbox", ["support_helpdesk_id", twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "support_helpdesk_get_pairs", [], "any", false, false, false, 135), twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "support_helpdesk_id", [], "any", false, false, false, 135), 1], 135, $context, $this->getSourceContext());
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"control-group form-group\">
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<label>";
        // line 140
        echo gettext("Subject");
        echo ":</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"subject\" value=\"\" required=\"required\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"control-group form-group\">
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<label>";
        // line 146
        echo gettext("Reason");
        echo ":</label>
\t\t\t\t\t\t\t\t<textarea rows=\"10\" cols=\"100\" class=\"form-control\" name=\"content\" maxlength=\"999\" style=\"resize:none\" required=\"required\">";
        // line 147
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "content", [], "any", false, false, false, 147));
        echo "</textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<input type=\"hidden\" name=\"rel_type\" value=\"order\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"rel_id\" value=\"";
        // line 152
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 152), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
\t\t\t\t\t\t<input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 156
        echo gettext("Submit");
        echo "\">
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
    </div>
    </div>

    <div class=\"modal fade\" id=\"upgrades\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"";
        // line 164
        echo gettext("Request upgrade");
        echo "\">
\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t\t<h4 class=\"modal-title\" id=\"myModalLabel\">";
        // line 169
        echo gettext("Request upgrade");
        echo "</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t    <form action=\"\" method=\"post\" class=\"api_form\" data-api-url=\"client/support/ticket_create\" data-api-msg=\"Upgrade request received\">
\t\t\t\t\t\t<div class=\"control-group form-group\">
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<label>";
        // line 175
        echo gettext("Help desk");
        echo ":</label>
\t\t\t\t\t\t\t\t";
        // line 176
        echo twig_call_macro($macros["mf"], "macro_selectbox", ["support_helpdesk_id", twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "support_helpdesk_get_pairs", [], "any", false, false, false, 176), twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "support_helpdesk_id", [], "any", false, false, false, 176), 1], 176, $context, $this->getSourceContext());
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"control-group form-group\">
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<label>";
        // line 181
        echo gettext("Subject");
        echo ":</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"subject\" value=\"";
        // line 182
        echo gettext("I would like to upgrade");
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "title", [], "any", false, false, false, 182), "html", null, true);
        echo "\" required=\"required\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"control-group form-group\">
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<label>";
        // line 187
        echo gettext("Upgrade to");
        echo ": </label>
\t\t\t\t\t\t\t\t";
        // line 188
        echo twig_call_macro($macros["mf"], "macro_selectbox", ["rel_new_value", ($context["upgradables"] ?? null), "", 1], 188, $context, $this->getSourceContext());
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"control-group form-group\">
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<label>";
        // line 193
        echo gettext("Notes");
        echo ":</label>
\t\t\t\t\t\t\t\t<textarea rows=\"10\" cols=\"100\" class=\"form-control\" name=\"content\" maxlength=\"999\" style=\"resize:none\" required=\"required\">";
        // line 194
        echo gettext("I would like to upgrade");
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "title", [], "any", false, false, false, 194), "html", null, true);
        echo "</textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<input type=\"hidden\" name=\"rel_type\" value=\"order\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"rel_id\" value=\"";
        // line 199
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 199), "html", null, true);
        echo "\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"rel_task\" value=\"upgrade\">
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
\t\t\t\t\t\t<input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 204
        echo gettext("Request");
        echo "\">
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
    </div>
\t<hr>
\t";
        // line 211
        if (twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_template_exists", [0 => ["file" => ($context["service_partial"] ?? null)]], "method", false, false, false, 211)) {
            // line 212
            echo "\t\t";
            $context["service"] = twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "order_service", [0 => ["id" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 212)]], "method", false, false, false, 212);
            // line 213
            echo "\t\t";
            $this->loadTemplate(($context["service_partial"] ?? null), "mod_order_manage.phtml", 213)->display(twig_array_merge($context, ["order" => ($context["order"] ?? null), "service" => ($context["service"] ?? null)]));
            // line 214
            echo "\t\t<hr>
\t";
        } else {
            // line 216
            echo "\t\t";
            // line 217
            echo "\t";
        }
        // line 218
        echo "
\t<div class=\"text-center\">
\t\t<a class=\"btn btn-default\" href=\"";
        // line 220
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/order/service");
        echo "\"><i class=\"fa fa-arrow-left\"></i> ";
        echo gettext("Back to services");
        echo "</a>
\t</div>

";
    }

    // line 226
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 228
        echo "<script type=\"text/javascript\">
\$(function() {
    \$('#renewal-button').bind('click',function(event){
\t\tbootbox.confirm(\"";
        // line 231
        echo gettext("Are you sure?");
        echo "\", function(result) {
\t\t\tif(result){
\t\t\t  bb.post(
\t\t\t\t\t'client/invoice/renewal_invoice',
\t\t\t\t\t{order_id: ";
        // line 235
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 235), "js", null, true);
        echo " },
\t\t\t\t\tfunction(result) {
\t\t\t\t\t\tbb.redirect('";
        // line 237
        echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("invoice"), "js", null, true);
        echo "' + '/' + result);
\t\t\t\t\t}
\t\t\t\t);
\t\t\t}
\t\t}); 
    });

    \$('.open-ticket form').submit(function(){
        bb.post(
            'client/support/ticket_create',
            \$(this).serialize(),
            function(result) {
                bb.msg('Ticket was submitted. If you want to track conversation please go to support section');
                \$('div.open-ticket').fadeOut();
                \$('#open-ticket').fadeOut();
            }
        );
        return false;
    });
});
</script>
";
    }

    public function getTemplateName()
    {
        return "mod_order_manage.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  690 => 237,  685 => 235,  678 => 231,  673 => 228,  669 => 226,  659 => 220,  655 => 218,  652 => 217,  650 => 216,  646 => 214,  643 => 213,  640 => 212,  638 => 211,  628 => 204,  620 => 199,  610 => 194,  606 => 193,  598 => 188,  594 => 187,  584 => 182,  580 => 181,  572 => 176,  568 => 175,  559 => 169,  551 => 164,  540 => 156,  533 => 152,  525 => 147,  521 => 146,  512 => 140,  504 => 135,  500 => 134,  491 => 128,  487 => 127,  479 => 122,  475 => 120,  468 => 116,  454 => 115,  450 => 113,  442 => 111,  434 => 109,  432 => 108,  429 => 107,  426 => 106,  409 => 105,  403 => 101,  401 => 100,  392 => 94,  384 => 89,  376 => 84,  372 => 83,  362 => 78,  358 => 77,  350 => 72,  346 => 71,  337 => 65,  329 => 60,  325 => 58,  318 => 57,  307 => 56,  301 => 55,  296 => 54,  290 => 53,  285 => 50,  282 => 49,  279 => 48,  272 => 46,  264 => 45,  256 => 44,  234 => 43,  221 => 42,  216 => 41,  213 => 40,  210 => 39,  208 => 38,  205 => 37,  194 => 36,  185 => 35,  169 => 34,  159 => 33,  153 => 32,  143 => 31,  124 => 29,  120 => 28,  108 => 27,  104 => 25,  100 => 24,  88 => 17,  82 => 16,  73 => 13,  71 => 12,  66 => 9,  62 => 8,  55 => 3,  51 => 1,  49 => 6,  47 => 5,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends request.ajax ? \"layout_blank.phtml\" : \"layout_default.phtml\" %}
{% import \"macro_functions.phtml\" as mf %}
{% block meta_title %}{{ order.title }}{% endblock %}

{% set service_partial = \"mod_service\" ~ order.service_type ~ \"_manage.phtml\" %}
{% set upgradables = client.order_upgradables({'id':order.id}) %}

{% block content_before %}
\t\t<!-- Page Heading/Breadcrumbs -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">{% trans 'Service details' %}
\t\t\t\t\t<small>#{{ order.id }} {{ order.title }}</small>
\t\t\t\t</h1>
\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t<li><a href=\"{{ 'order/service'|link }}\">{% trans 'Ordered Services' %}</a></li>
\t\t\t\t\t<li class=\"active\">#{{ order.id }} {{ order.title }}</li>
\t\t\t\t</ol>
            </div>
        </div>
        <!-- /.row -->
{% endblock %}

{% block content %}
\t<div class=\"row\">
\t\t<ul class=\"list-group col-md-6 col-md-offset-3 text-center\">
\t\t\t<li class=\"list-group-item {% if order.status == \"active\" %}list-group-item-success{% elseif order.status == \"pending_setup\" %}list-group-item-warning{% elseif order.status == \"failed_setup\" %}list-group-item-danger{% else %}label-default{% endif %}\">
\t\t\t\t<strong>{% trans 'Order' %}:</strong>
\t\t\t\t#{{ order.id }} {{ order.title }} <span class=\"label {% if order.status == \"active\" %}label-success{% elseif order.status == \"pending_setup\" %}label-warning{% elseif order.status == \"failed_setup\" %}label-danger{% else %}label-default{% endif %}\">{{ mf.status_name(order.status) }}</span>
\t\t\t</li>
\t\t\t<li class=\"list-group-item\"><strong>{% trans 'Payment amount' %}:</strong> {{ order.total | money(order.currency) }}{% if order.period %} {{ order.period | period_title }}{% endif %}</li>
\t\t\t<li class=\"list-group-item\"><strong>{% trans 'Order created' %}:</strong> {{ order.created_at|date('Y-m-d h:i') }}</li>
\t\t\t<li class=\"list-group-item\"><strong>{% trans 'Activated at' %}:</strong> {% if order.activated_at %}{{ order.activated_at|date('Y-m-d h:i') }}{% else %}-{% endif %}</li>
\t\t\t{% if order.period %}<li class=\"list-group-item\"><strong>{% trans 'Renewal date' %}:</strong> {% if order.expires_at %}in {{ order.expires_at|daysleft }} day(s) ({{ order.expires_at|date('Y-m-d h:i') }}){% else %}-{% endif %}</li>{% endif %}
\t\t\t{% if order.notes %}<li class=\"list-group-item\"><strong>{% trans 'Order notes' %}:</strong> {{ order.notes|bbmd }}</li>{% endif %}
\t\t\t{% if order.active_tickets > 0 %}<li class=\"list-group-item\"><strong>{% trans 'Active support tickets' %}:</strong> <a href=\"{{ 'support'|link }}\">{{ order.active_tickets }}</a></li>{% endif %}
\t\t
\t\t\t{% if order.group_master == 1 %}
\t\t\t\t{% set addons = client.order_addons({\"id\":order.id}) %}
\t\t\t\t{% if addons|length > 0 %}
\t\t\t\t{% for i, addon in addons %}
\t\t\t\t<li class=\"list-group-item {% if addon.status == \"active\" %}list-group-item-success{% elseif addon.status == \"pending_setup\" %}list-group-item-warning{% elseif addon.status == \"failed_setup\" %}list-group-item-danger{% else %}label-default{% endif %}\">
\t\t\t\t\t\t<a href=\"{{ '/order/service/manage'|link }}/{{addon.id}}\"><strong>{% trans 'Addon' %}:</strong> {{addon.title}}</a> <span class=\"label {% if addon.status == \"active\" %}label-success{% elseif addon.status == \"pending_setup\" %}label-warning{% elseif addon.status == \"failed_setup\" %}label-danger{% else %}label-default{% endif %}\">{{ mf.status_name(addon.status) }}</span><br />
\t\t\t\t\t\t<strong>{% trans 'Price' %}:</strong> {{ addon.total | money(addon.currency) }} {{ addon.period | period_title }}<br />
\t\t\t\t\t\t{% if addon.expires_at %}<strong>{% trans 'Next due date' %}:</strong> {{addon.expires_at|date('Y-m-d h:i') }}<br />{% endif %}
\t\t\t\t</li>
\t\t\t\t{% endfor %}
\t\t\t\t{% endif %}
\t\t\t{% endif %}
\t\t</ul>
\t</div>
\t<p class=\"text-center\">
\t\t{% if order.period %}<a class=\"btn btn-success\" id=\"renewal-button\">{% trans 'Renew now' %}</a>{% endif %}
\t\t<a class=\"btn btn-info\" data-toggle=\"modal\" data-target=\"#tickets\">{% trans 'Open ticket' %}</a>\t
        {% if upgradables %}<a class=\"btn btn-warning\" data-toggle=\"modal\" data-target=\"#upgrades\">{% trans 'Request Upgrade' %}</a>{% endif %}
\t\t{% if order.status == 'pending_setup' %}<a class=\"btn btn-danger api\" href=\"{{'api/client/order/delete' | link({'id' : order.id})}}\" data-api-redirect=\"{{ 'order/service'|link }}\">{% trans 'Cancel' %}</a>{% endif %}
\t\t{% if order.status == 'active' %}<a class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#cancelation\">{% trans 'Request Cancellation' %}</a>{% endif %}
\t</p>

    <div class=\"modal fade\" id=\"cancelation\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"{% trans 'Request Cancellation' %}\">
\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t\t<h4 class=\"modal-title\" id=\"myModalLabel\">{% trans 'Request Cancellation' %}</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<form action=\"\" method=\"post\">
\t\t\t\t\t\t<div class=\"control-group form-group\">
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<label>{% trans 'Help desk' %}:</label>
\t\t\t\t\t\t\t\t{{ mf.selectbox('support_helpdesk_id', client.support_helpdesk_get_pairs, request.support_helpdesk_id, 1) }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"control-group form-group\">
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<label>{% trans 'Subject' %}:</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"subject\" value=\"{% trans 'I would like to cancel' %} {{ order.title }}\" required=\"required\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"control-group form-group\">
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<label>{% trans 'Reason' %}:</label>
\t\t\t\t\t\t\t\t<textarea rows=\"10\" cols=\"100\" class=\"form-control\" name=\"content\" maxlength=\"999\" style=\"resize:none\" required=\"required\">{{ request.content|e }}</textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<input type=\"hidden\" name=\"rel_type\" value=\"order\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"rel_id\" value=\"{{ order.id }}\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"rel_task\" value=\"cancel\">
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
\t\t\t\t\t\t<input class=\"btn btn-primary\" type=\"submit\" value=\"{% trans 'Submit' %}\">
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
    </div>
\t{% if settings.show_manage_buttons %}
        <!-- Footer -->
\t\t\t<div class=\"row text-center\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<ul class=\"list-inline\">
\t\t\t\t\t\t{% for i in 1..5 %}
\t\t\t\t\t\t\t{% if settings['button_' ~ loop.index ~ '_enabled'] %}
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t{% if 'http://' in settings['button_' ~ loop.index ~ '_page'] or  'https://' in settings['button_' ~ loop.index ~ '_page'] %}
\t\t\t\t\t\t\t\t<a class=\"btn btn-info\" href=\"{{ settings['button_' ~ loop.index ~ '_page'] }}\">{{ settings['button_' ~ loop.index ~ '_title'] }}</a>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<a class=\"btn btn-info\" href=\"{{ settings['button_' ~ loop.index ~ '_page'] | link }}\">{{ settings['button_' ~ loop.index ~ '_title'] }}</a>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% endfor %}
                    </ul>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t{% endif %}\t
    <div class=\"widget open-ticket\">
    <div class=\"modal fade\" id=\"tickets\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"{% trans 'Open new support ticket regarding this order' %}\">
\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t\t<h4 class=\"modal-title\" id=\"myModalLabel\">{% trans 'Open new support ticket regarding this order' %}<br />
\t\t\t\t\t<small>{% trans 'Submit new support ticket. Ticket will be visible in support section after submission' %}</small></h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<form action=\"\" method=\"post\">
\t\t\t\t\t\t<div class=\"control-group form-group\">
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<label>{% trans 'Help desk' %}:</label>
\t\t\t\t\t\t\t\t{{ mf.selectbox('support_helpdesk_id', client.support_helpdesk_get_pairs, request.support_helpdesk_id, 1) }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"control-group form-group\">
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<label>{% trans 'Subject' %}:</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"subject\" value=\"\" required=\"required\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"control-group form-group\">
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<label>{% trans 'Reason' %}:</label>
\t\t\t\t\t\t\t\t<textarea rows=\"10\" cols=\"100\" class=\"form-control\" name=\"content\" maxlength=\"999\" style=\"resize:none\" required=\"required\">{{ request.content|e }}</textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<input type=\"hidden\" name=\"rel_type\" value=\"order\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"rel_id\" value=\"{{ order.id }}\">
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
\t\t\t\t\t\t<input class=\"btn btn-primary\" type=\"submit\" value=\"{% trans 'Submit' %}\">
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
    </div>
    </div>

    <div class=\"modal fade\" id=\"upgrades\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"{% trans 'Request upgrade' %}\">
\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t\t<h4 class=\"modal-title\" id=\"myModalLabel\">{% trans 'Request upgrade' %}</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t    <form action=\"\" method=\"post\" class=\"api_form\" data-api-url=\"client/support/ticket_create\" data-api-msg=\"Upgrade request received\">
\t\t\t\t\t\t<div class=\"control-group form-group\">
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<label>{% trans 'Help desk' %}:</label>
\t\t\t\t\t\t\t\t{{ mf.selectbox('support_helpdesk_id', client.support_helpdesk_get_pairs, request.support_helpdesk_id, 1) }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"control-group form-group\">
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<label>{% trans 'Subject' %}:</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"subject\" value=\"{% trans 'I would like to upgrade' %} {{ order.title }}\" required=\"required\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"control-group form-group\">
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<label>{% trans 'Upgrade to' %}: </label>
\t\t\t\t\t\t\t\t{{ mf.selectbox('rel_new_value', upgradables, '', 1) }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"control-group form-group\">
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<label>{% trans 'Notes' %}:</label>
\t\t\t\t\t\t\t\t<textarea rows=\"10\" cols=\"100\" class=\"form-control\" name=\"content\" maxlength=\"999\" style=\"resize:none\" required=\"required\">{% trans 'I would like to upgrade' %} {{ order.title }}</textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<input type=\"hidden\" name=\"rel_type\" value=\"order\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"rel_id\" value=\"{{ order.id }}\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"rel_task\" value=\"upgrade\">
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
\t\t\t\t\t\t<input class=\"btn btn-primary\" type=\"submit\" value=\"{% trans 'Request' %}\">
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
    </div>
\t<hr>
\t{% if guest.system_template_exists({\"file\":service_partial})%}
\t\t{% set service = client.order_service({\"id\":order.id}) %}
\t\t{% include service_partial with {'order': order, 'service': service} %}
\t\t<hr>
\t{% else %}
\t\t{# trans 'Service does not have configuration page' #}
\t{% endif %}

\t<div class=\"text-center\">
\t\t<a class=\"btn btn-default\" href=\"{{ '/order/service'|link }}\"><i class=\"fa fa-arrow-left\"></i> {% trans 'Back to services' %}</a>
\t</div>

{% endblock %}


{% block js %}
{% autoescape 'js' %}
<script type=\"text/javascript\">
\$(function() {
    \$('#renewal-button').bind('click',function(event){
\t\tbootbox.confirm(\"{% trans 'Are you sure?' %}\", function(result) {
\t\t\tif(result){
\t\t\t  bb.post(
\t\t\t\t\t'client/invoice/renewal_invoice',
\t\t\t\t\t{order_id: {{order.id}} },
\t\t\t\t\tfunction(result) {
\t\t\t\t\t\tbb.redirect('{{\"invoice\"|link}}' + '/' + result);
\t\t\t\t\t}
\t\t\t\t);
\t\t\t}
\t\t}); 
    });

    \$('.open-ticket form').submit(function(){
        bb.post(
            'client/support/ticket_create',
            \$(this).serialize(),
            function(result) {
                bb.msg('Ticket was submitted. If you want to track conversation please go to support section');
                \$('div.open-ticket').fadeOut();
                \$('#open-ticket').fadeOut();
            }
        );
        return false;
    });
});
</script>
{% endautoescape %}
{% endblock %}", "mod_order_manage.phtml", "/home/lexcicxy/hostshibe.cf/bb-themes/bootstrap/html/mod_order_manage.phtml");
    }
}
