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

/* mod_invoice_settings.phtml */
class __TwigTemplate_b969a2be40fba1586cf42bb0205a0ca4f70f7bf9875bcd0c5b88030edc8ea20b extends \Twig\Template
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
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.phtml") : ("layout_default.phtml")), "mod_invoice_settings.phtml", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.phtml", "mod_invoice_settings.phtml", 2)->unwrap();
        // line 4
        $context["active_menu"] = "system";
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo gettext("Invoice settings");
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
        echo gettext("Invoice settings");
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
        echo gettext("Invoice settings");
        echo "</h5>
    </div>

    ";
        // line 21
        $context["params"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "system_get_params", [], "any", false, false, false, 21);
        // line 22
        echo "    <form method=\"post\" action=\"";
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/system/update_params");
        echo "\" class=\"mainForm api-form\" data-api-msg=\"Settings updated\">
        <fieldset>
        <div class=\"rowElem noborder\">
            <label>";
        // line 25
        echo gettext("Number of days to generate new invoice before order expiration");
        echo "</label>
            <div class=\"formRight\">
                <input type=\"text\" name=\"invoice_issue_days_before_expire\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "invoice_issue_days_before_expire", [], "any", false, false, false, 27), "html", null, true);
        echo "\"/>
            </div>
            <div class=\"fix\"></div>
        </div>

        <div class=\"rowElem\">
            <label>";
        // line 33
        echo gettext("Invoice due days");
        echo "</label>
            <div class=\"formRight\">
                <input type=\"text\" name=\"invoice_due_days\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "invoice_due_days", [], "any", false, false, false, 35), "html", null, true);
        echo "\"/>
            </div>
            <div class=\"fix\"></div>
        </div>

        <div class=\"rowElem\">
            <label>";
        // line 41
        echo gettext("Auto invoice approval");
        echo "</label>
            <div class=\"formRight\">
                <input type=\"radio\" name=\"invoice_auto_approval\" value=\"1\" ";
        // line 43
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "invoice_auto_approval", [], "any", false, false, false, 43) == "1")) {
            echo "checked=\"checked\"";
        }
        echo "/><label>";
        echo gettext("Yes");
        echo "</label>
                <input type=\"radio\" name=\"invoice_auto_approval\" value=\"0\" ";
        // line 44
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "invoice_auto_approval", [], "any", false, false, false, 44) == "0")) {
            echo "checked=\"checked\"";
        }
        echo "/><label>";
        echo gettext("No");
        echo "</label>
            </div>
            <div class=\"fix\"></div>
        </div>
        </fieldset>

        <fieldset>
            <legend>";
        // line 51
        echo gettext("Proforma Invoicing / Sequential Invoice Numbering");
        echo "</legend>

        <div class=\"rowElem\">
            <label>";
        // line 54
        echo gettext("Remove unpaid invoices after x days. Set 0 to keep invoices forever");
        echo "</label>
            <div class=\"formRight\">
                <input type=\"text\" name=\"remove_after_days\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "remove_after_days", [], "any", true, true, false, 56)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "remove_after_days", [], "any", false, false, false, 56), 0)) : (0)), "html", null, true);
        echo "\"/>
            </div>
            <div class=\"fix\"></div>
        </div>

        <div class=\"rowElem\">
            <label>";
        // line 62
        echo gettext("Proforma invoice prefix/series");
        echo "</label>
            <div class=\"formRight\">
                <input type=\"text\" name=\"invoice_series\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "invoice_series", [], "any", false, false, false, 64), "html", null, true);
        echo "\"/>
            </div>
            <div class=\"fix\"></div>
        </div>

        <div class=\"rowElem\">
            <label>";
        // line 70
        echo gettext("Paid invoice prefix/series");
        echo "</label>
            <div class=\"formRight\">
                <input type=\"text\" name=\"invoice_series_paid\" value=\"";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "invoice_series_paid", [], "any", false, false, false, 72), "html", null, true);
        echo "\"/>
            </div>
            <div class=\"fix\"></div>
        </div>

        <div class=\"rowElem\">
            <label>";
        // line 78
        echo gettext("Next paid invoice number");
        echo "</label>
            <div class=\"formRight\">
                <input type=\"text\" name=\"invoice_starting_number\" value=\"";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "invoice_starting_number", [], "any", false, false, false, 80), "html", null, true);
        echo "\"/>
            </div>
            <div class=\"fix\"></div>
        </div>
        </fieldset>

        <fieldset>
            <legend>";
        // line 87
        echo gettext("Refunds settings");
        echo "</legend>
        <div class=\"rowElem\">
            <label>";
        // line 89
        echo gettext("Refunds logic");
        echo "</label>
            <div class=\"formRight\">
                <input type=\"radio\" name=\"invoice_refund_logic\" value=\"negative_invoice\" ";
        // line 91
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "invoice_refund_logic", [], "any", false, false, false, 91) == "1")) {
            echo "checked=\"checked\"";
        }
        echo "/><label>Negative invoice. Generate refund invoice continuing paid invoices numbering</label>
                <div class=\"clear\"></div>
                <input type=\"radio\" name=\"invoice_refund_logic\" value=\"credit_note\" ";
        // line 93
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "invoice_refund_logic", [], "any", false, false, false, 93) == "credit_note")) {
            echo "checked=\"checked\"";
        }
        echo "/><label>Credit note. Generate credit note with unique numbering</label>
                <div class=\"clear\"></div>
                <input type=\"radio\" name=\"invoice_refund_logic\" value=\"manual\" ";
        // line 95
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "invoice_refund_logic", [], "any", false, false, false, 95) == "manual")) {
            echo "checked=\"checked\"";
        }
        echo "/><label>Manual. No actions performed</label>
            </div>
            <div class=\"fix\"></div>
        </div>
        </fieldset>

        <fieldset>
            <legend>";
        // line 102
        echo gettext("Add funds settings");
        echo "</legend>
        <div class=\"rowElem\">
            <label>";
        // line 104
        echo gettext("Minimum amount for add funds invoice");
        echo "</label>
            <div class=\"formRight\">
                <input type=\"text\" name=\"funds_min_amount\" value=\"";
        // line 106
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "funds_min_amount", [], "any", false, false, false, 106), "html", null, true);
        echo "\" placeholder=\"";
        echo gettext("Unlimited");
        echo "\"/>
            </div>
            <div class=\"fix\"></div>
        </div>

        <div class=\"rowElem\">
            <label>";
        // line 112
        echo gettext("Maximum amount for add funds invoice");
        echo "</label>
            <div class=\"formRight\">
                <input type=\"text\" name=\"funds_max_amount\" value=\"";
        // line 114
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "funds_max_amount", [], "any", false, false, false, 114), "html", null, true);
        echo "\" placeholder=\"";
        echo gettext("Unlimited");
        echo "\"/>
            </div>
            <div class=\"fix\"></div>
        </div>

        <input type=\"submit\" value=\"";
        // line 119
        echo gettext("Update settings");
        echo "\" class=\"greyishBtn submitForm\" />
        </fieldset>
    </form>
</div>

";
    }

    public function getTemplateName()
    {
        return "mod_invoice_settings.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 119,  289 => 114,  284 => 112,  273 => 106,  268 => 104,  263 => 102,  251 => 95,  244 => 93,  237 => 91,  232 => 89,  227 => 87,  217 => 80,  212 => 78,  203 => 72,  198 => 70,  189 => 64,  184 => 62,  175 => 56,  170 => 54,  164 => 51,  150 => 44,  142 => 43,  137 => 41,  128 => 35,  123 => 33,  114 => 27,  109 => 25,  102 => 22,  100 => 21,  94 => 18,  89 => 15,  85 => 14,  78 => 10,  72 => 9,  66 => 8,  63 => 7,  59 => 6,  52 => 3,  48 => 1,  46 => 4,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends request.ajax ? \"layout_blank.phtml\" : \"layout_default.phtml\" %}
{% import \"macro_functions.phtml\" as mf %}
{% block meta_title %}{% trans 'Invoice settings' %}{% endblock %}
{% set active_menu = 'system' %}

{% block breadcrumbs %}
<ul>
    <li class=\"firstB\"><a href=\"{{ '/'|alink }}\">{% trans 'Home' %}</a></li>
    <li><a href=\"{{ 'system'|alink }}\">{% trans 'Settings' %}</a></li>
    <li class=\"lastB\">{% trans 'Invoice settings' %}</li>
</ul>
{% endblock %}

{% block content %}

<div class=\"widget\">
    <div class=\"head\">
        <h5 class=\"iCog\">{% trans 'Invoice settings' %}</h5>
    </div>

    {% set params = admin.system_get_params %}
    <form method=\"post\" action=\"{{ 'api/admin/system/update_params'|link }}\" class=\"mainForm api-form\" data-api-msg=\"Settings updated\">
        <fieldset>
        <div class=\"rowElem noborder\">
            <label>{% trans 'Number of days to generate new invoice before order expiration' %}</label>
            <div class=\"formRight\">
                <input type=\"text\" name=\"invoice_issue_days_before_expire\" value=\"{{params.invoice_issue_days_before_expire}}\"/>
            </div>
            <div class=\"fix\"></div>
        </div>

        <div class=\"rowElem\">
            <label>{% trans 'Invoice due days' %}</label>
            <div class=\"formRight\">
                <input type=\"text\" name=\"invoice_due_days\" value=\"{{params.invoice_due_days}}\"/>
            </div>
            <div class=\"fix\"></div>
        </div>

        <div class=\"rowElem\">
            <label>{% trans 'Auto invoice approval' %}</label>
            <div class=\"formRight\">
                <input type=\"radio\" name=\"invoice_auto_approval\" value=\"1\" {% if params.invoice_auto_approval == \"1\" %}checked=\"checked\"{% endif %}/><label>{% trans 'Yes' %}</label>
                <input type=\"radio\" name=\"invoice_auto_approval\" value=\"0\" {% if params.invoice_auto_approval == \"0\" %}checked=\"checked\"{% endif %}/><label>{% trans 'No' %}</label>
            </div>
            <div class=\"fix\"></div>
        </div>
        </fieldset>

        <fieldset>
            <legend>{% trans 'Proforma Invoicing / Sequential Invoice Numbering' %}</legend>

        <div class=\"rowElem\">
            <label>{% trans 'Remove unpaid invoices after x days. Set 0 to keep invoices forever' %}</label>
            <div class=\"formRight\">
                <input type=\"text\" name=\"remove_after_days\" value=\"{{params.remove_after_days | default(0)}}\"/>
            </div>
            <div class=\"fix\"></div>
        </div>

        <div class=\"rowElem\">
            <label>{% trans 'Proforma invoice prefix/series' %}</label>
            <div class=\"formRight\">
                <input type=\"text\" name=\"invoice_series\" value=\"{{params.invoice_series}}\"/>
            </div>
            <div class=\"fix\"></div>
        </div>

        <div class=\"rowElem\">
            <label>{% trans 'Paid invoice prefix/series' %}</label>
            <div class=\"formRight\">
                <input type=\"text\" name=\"invoice_series_paid\" value=\"{{params.invoice_series_paid}}\"/>
            </div>
            <div class=\"fix\"></div>
        </div>

        <div class=\"rowElem\">
            <label>{% trans 'Next paid invoice number' %}</label>
            <div class=\"formRight\">
                <input type=\"text\" name=\"invoice_starting_number\" value=\"{{params.invoice_starting_number}}\"/>
            </div>
            <div class=\"fix\"></div>
        </div>
        </fieldset>

        <fieldset>
            <legend>{% trans 'Refunds settings' %}</legend>
        <div class=\"rowElem\">
            <label>{% trans 'Refunds logic' %}</label>
            <div class=\"formRight\">
                <input type=\"radio\" name=\"invoice_refund_logic\" value=\"negative_invoice\" {% if params.invoice_refund_logic == \"1\" %}checked=\"checked\"{% endif %}/><label>Negative invoice. Generate refund invoice continuing paid invoices numbering</label>
                <div class=\"clear\"></div>
                <input type=\"radio\" name=\"invoice_refund_logic\" value=\"credit_note\" {% if params.invoice_refund_logic == \"credit_note\" %}checked=\"checked\"{% endif %}/><label>Credit note. Generate credit note with unique numbering</label>
                <div class=\"clear\"></div>
                <input type=\"radio\" name=\"invoice_refund_logic\" value=\"manual\" {% if params.invoice_refund_logic == \"manual\" %}checked=\"checked\"{% endif %}/><label>Manual. No actions performed</label>
            </div>
            <div class=\"fix\"></div>
        </div>
        </fieldset>

        <fieldset>
            <legend>{% trans 'Add funds settings' %}</legend>
        <div class=\"rowElem\">
            <label>{% trans 'Minimum amount for add funds invoice' %}</label>
            <div class=\"formRight\">
                <input type=\"text\" name=\"funds_min_amount\" value=\"{{params.funds_min_amount}}\" placeholder=\"{% trans 'Unlimited' %}\"/>
            </div>
            <div class=\"fix\"></div>
        </div>

        <div class=\"rowElem\">
            <label>{% trans 'Maximum amount for add funds invoice' %}</label>
            <div class=\"formRight\">
                <input type=\"text\" name=\"funds_max_amount\" value=\"{{params.funds_max_amount}}\" placeholder=\"{% trans 'Unlimited' %}\"/>
            </div>
            <div class=\"fix\"></div>
        </div>

        <input type=\"submit\" value=\"{% trans 'Update settings' %}\" class=\"greyishBtn submitForm\" />
        </fieldset>
    </form>
</div>

{% endblock %}", "mod_invoice_settings.phtml", "/home/lexcicxy/hostshibe.cf/bb-modules/Invoice/html_admin/mod_invoice_settings.phtml");
    }
}
