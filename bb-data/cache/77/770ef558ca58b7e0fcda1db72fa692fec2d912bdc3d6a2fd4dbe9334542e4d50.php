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

/* mod_order_settings.phtml */
class __TwigTemplate_8e5785665485a0abbfbc157991671625bc1a122f5bea245ddb8bbe7ed9babd36 extends \Twig\Template
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
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.phtml") : ("layout_default.phtml")), "mod_order_settings.phtml", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.phtml", "mod_order_settings.phtml", 2)->unwrap();
        // line 4
        $context["active_menu"] = "system";
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo gettext("Orders settings");
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
        echo gettext("Orders settings");
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
        echo gettext("Orders settings");
        echo "</h5>
    </div>

    ";
        // line 21
        $context["params"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "extension_config_get", [0 => ["ext" => "mod_order"]], "method", false, false, false, 21);
        // line 22
        echo "    <form method=\"post\" action=\"";
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/extension/config_save");
        echo "\" class=\"mainForm api-form\" data-api-msg=\"Settings updated\">
        <fieldset>
        <div class=\"rowElem noborder\">
            <label>";
        // line 25
        echo gettext("Expiration date");
        echo "</label>
            <div class=\"formRight\">
                <input type=\"radio\" name=\"order_renewal_logic\" value=\"from_expiration_date\" ";
        // line 27
        if (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "order_renewal_logic", [], "any", false, false, false, 27) == "from_expiration_date") ||  !twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "order_renewal_logic", [], "any", false, false, false, 27))) {
            echo "checked=\"checked\"";
        }
        echo "/><label>Next date is counted from last order expiration date</label>
                <div class=\"clear\"></div>
                <input type=\"radio\" name=\"order_renewal_logic\" value=\"from_today\" ";
        // line 29
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "order_renewal_logic", [], "any", false, false, false, 29) == "from_today")) {
            echo "checked=\"checked\"";
        }
        echo "/><label>Next date is counted from renewal (payment) date</label>
                <div class=\"clear\"></div>
                <input type=\"radio\" name=\"order_renewal_logic\" value=\"from_greater\" ";
        // line 31
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "order_renewal_logic", [], "any", false, false, false, 31) == "from_greater")) {
            echo "checked=\"checked\"";
        }
        echo "/><label>Next date is counted from last expiration date or renewal date whichever is greater</label>
            </div>
            <div class=\"fix\"></div>
        </div>

        <div class=\"rowElem\">
            <label>";
        // line 37
        echo gettext("Show addon orders in orders list (if this is disabled they are shown in master order view \"Addons\" tab)");
        echo "</label>
            <div class=\"formRight\">
                <input type=\"radio\" name=\"show_addons\" value=\"1\"";
        // line 39
        if (twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "show_addons", [], "any", false, false, false, 39)) {
            echo " checked=\"checked\"";
        }
        echo "/><label>";
        echo gettext("Yes");
        echo "</label>
                <input type=\"radio\" name=\"show_addons\" value=\"0\"";
        // line 40
        if ( !twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "show_addons", [], "any", false, false, false, 40)) {
            echo " checked=\"checked\"";
        }
        echo " /><label>";
        echo gettext("No");
        echo "</label>
            </div>
            <div class=\"fix\"></div>
        </div>

        <div class=\"rowElem\">
            <label>";
        // line 46
        echo gettext("Auto suspend reason");
        echo "</label>
            <div class=\"formRight\">
                <input type=\"text\" name=\"batch_suspend_reason\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "batch_suspend_reason", [], "any", false, false, false, 48), "html", null, true);
        echo "\" />
            </div>
            <div class=\"fix\"></div>
        </div>

        <div class=\"rowElem\">
            <label>";
        // line 54
        echo gettext("Auto Cancellation");
        echo "</label>
            <div class=\"formRight moreFields\">
                <ul>
                    <li class=\"sep txt\">
                        <select name=\"batch_cancel_suspended\">
                            <option value=\"1\" ";
        // line 59
        echo ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "batch_cancel_suspended", [], "any", false, false, false, 59)) ? ("selected") : (""));
        echo ">Cancel Suspended Orders</option>
                            <option value=\"0\" ";
        // line 60
        echo ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "batch_cancel_suspended", [], "any", false, false, false, 60)) ? ("") : ("selected"));
        echo ">Do Not Cancel Suspended Orders</option>
                        </select>
                    </li>
                    <li class=\"sep\" style=\"width: 45px\"><input type=\"text\" name=\"batch_cancel_suspended_after_days\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "batch_cancel_suspended_after_days", [], "any", false, false, false, 63), "html", null, true);
        echo "\" placeholder=\"7\"/></li>
                    <li class=\"sep txt\"> days after order suspension with reason</li>
                    <li class=\"sep\" style=\"width: 30%\"><input type=\"text\" name=\"batch_cancel_suspended_reason\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "batch_cancel_suspended_reason", [], "any", false, false, false, 65), "html", null, true);
        echo "\" placeholder=\"\"/></li>
                </ul>
            </div>
            <div class=\"fix\"></div>
        </div>

            <div class=\"rowElem\">
                <label>";
        // line 72
        echo gettext("Suspension reasons");
        echo "</label>
                <div class=\"formRight\">
                    <textarea name=\"suspend_reason_list\" rows=\"10\">";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "suspend_reason_list", [], "any", false, false, false, 74), "html", null, true);
        echo "</textarea>
                </div>
                <div class=\"fix\"></div>
            </div>


            <input type=\"hidden\" name=\"ext\" value=\"mod_order\" />
        <input type=\"submit\" value=\"";
        // line 81
        echo gettext("Update settings");
        echo "\" class=\"greyishBtn submitForm\" />
        </fieldset>
    </form>
</div>

";
    }

    public function getTemplateName()
    {
        return "mod_order_settings.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 81,  217 => 74,  212 => 72,  202 => 65,  197 => 63,  191 => 60,  187 => 59,  179 => 54,  170 => 48,  165 => 46,  152 => 40,  144 => 39,  139 => 37,  128 => 31,  121 => 29,  114 => 27,  109 => 25,  102 => 22,  100 => 21,  94 => 18,  89 => 15,  85 => 14,  78 => 10,  72 => 9,  66 => 8,  63 => 7,  59 => 6,  52 => 3,  48 => 1,  46 => 4,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends request.ajax ? \"layout_blank.phtml\" : \"layout_default.phtml\" %}
{% import \"macro_functions.phtml\" as mf %}
{% block meta_title %}{% trans 'Orders settings' %}{% endblock %}
{% set active_menu = 'system' %}

{% block breadcrumbs %}
<ul>
    <li class=\"firstB\"><a href=\"{{ '/'|alink }}\">{% trans 'Home' %}</a></li>
    <li><a href=\"{{ 'system'|alink }}\">{% trans 'Settings' %}</a></li>
    <li class=\"lastB\">{% trans 'Orders settings' %}</li>
</ul>
{% endblock %}

{% block content %}

<div class=\"widget\">
    <div class=\"head\">
        <h5 class=\"iCog\">{% trans 'Orders settings' %}</h5>
    </div>

    {% set params = admin.extension_config_get({\"ext\":\"mod_order\"}) %}
    <form method=\"post\" action=\"{{ 'api/admin/extension/config_save'|link }}\" class=\"mainForm api-form\" data-api-msg=\"Settings updated\">
        <fieldset>
        <div class=\"rowElem noborder\">
            <label>{% trans 'Expiration date' %}</label>
            <div class=\"formRight\">
                <input type=\"radio\" name=\"order_renewal_logic\" value=\"from_expiration_date\" {% if params.order_renewal_logic == \"from_expiration_date\" or not params.order_renewal_logic %}checked=\"checked\"{% endif %}/><label>Next date is counted from last order expiration date</label>
                <div class=\"clear\"></div>
                <input type=\"radio\" name=\"order_renewal_logic\" value=\"from_today\" {% if params.order_renewal_logic == \"from_today\" %}checked=\"checked\"{% endif %}/><label>Next date is counted from renewal (payment) date</label>
                <div class=\"clear\"></div>
                <input type=\"radio\" name=\"order_renewal_logic\" value=\"from_greater\" {% if params.order_renewal_logic == \"from_greater\" %}checked=\"checked\"{% endif %}/><label>Next date is counted from last expiration date or renewal date whichever is greater</label>
            </div>
            <div class=\"fix\"></div>
        </div>

        <div class=\"rowElem\">
            <label>{% trans 'Show addon orders in orders list (if this is disabled they are shown in master order view \"Addons\" tab)' %}</label>
            <div class=\"formRight\">
                <input type=\"radio\" name=\"show_addons\" value=\"1\"{% if params.show_addons %} checked=\"checked\"{% endif %}/><label>{% trans 'Yes' %}</label>
                <input type=\"radio\" name=\"show_addons\" value=\"0\"{% if not params.show_addons %} checked=\"checked\"{% endif %} /><label>{% trans 'No' %}</label>
            </div>
            <div class=\"fix\"></div>
        </div>

        <div class=\"rowElem\">
            <label>{% trans 'Auto suspend reason' %}</label>
            <div class=\"formRight\">
                <input type=\"text\" name=\"batch_suspend_reason\" value=\"{{ params.batch_suspend_reason }}\" />
            </div>
            <div class=\"fix\"></div>
        </div>

        <div class=\"rowElem\">
            <label>{% trans 'Auto Cancellation' %}</label>
            <div class=\"formRight moreFields\">
                <ul>
                    <li class=\"sep txt\">
                        <select name=\"batch_cancel_suspended\">
                            <option value=\"1\" {{ params.batch_cancel_suspended ? 'selected' : '' }}>Cancel Suspended Orders</option>
                            <option value=\"0\" {{ params.batch_cancel_suspended ? '' : 'selected' }}>Do Not Cancel Suspended Orders</option>
                        </select>
                    </li>
                    <li class=\"sep\" style=\"width: 45px\"><input type=\"text\" name=\"batch_cancel_suspended_after_days\" value=\"{{ params.batch_cancel_suspended_after_days }}\" placeholder=\"7\"/></li>
                    <li class=\"sep txt\"> days after order suspension with reason</li>
                    <li class=\"sep\" style=\"width: 30%\"><input type=\"text\" name=\"batch_cancel_suspended_reason\" value=\"{{ params.batch_cancel_suspended_reason }}\" placeholder=\"\"/></li>
                </ul>
            </div>
            <div class=\"fix\"></div>
        </div>

            <div class=\"rowElem\">
                <label>{% trans 'Suspension reasons' %}</label>
                <div class=\"formRight\">
                    <textarea name=\"suspend_reason_list\" rows=\"10\">{{ params.suspend_reason_list }}</textarea>
                </div>
                <div class=\"fix\"></div>
            </div>


            <input type=\"hidden\" name=\"ext\" value=\"mod_order\" />
        <input type=\"submit\" value=\"{% trans 'Update settings' %}\" class=\"greyishBtn submitForm\" />
        </fieldset>
    </form>
</div>

{% endblock %}", "mod_order_settings.phtml", "/home/lexcicxy/hostshibe.cf/bb-modules/Order/html_admin/mod_order_settings.phtml");
    }
}
