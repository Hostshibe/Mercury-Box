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

/* mod_client_settings.phtml */
class __TwigTemplate_7abf90a6a9eb9acd293b0fc121e499ce3272b83e8e53fc326b894dae0a5f30b7 extends \Twig\Template
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
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.phtml") : ("layout_default.phtml")), "mod_client_settings.phtml", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.phtml", "mod_client_settings.phtml", 2)->unwrap();
        // line 4
        $context["active_menu"] = "system";
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Client settings";
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
        echo gettext("Client settings");
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
";
        // line 16
        $context["params"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "extension_config_get", [0 => ["ext" => "mod_client"]], "method", false, false, false, 16);
        // line 17
        echo "<form method=\"post\" action=\"";
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/extension/config_save");
        echo "\" class=\"mainForm api-form\" data-api-msg=\"";
        echo gettext("Configuration updated");
        echo "\">

<div class=\"widget simpleTabs\">

    <ul class=\"tabs\">
        <li><a href=\"#tab-index\">";
        // line 22
        echo gettext("General");
        echo "</a></li>
        <li><a href=\"#tab-custom-fields\">";
        // line 23
        echo gettext("Custom Fields");
        echo "</a></li>
    </ul>
    
    <div class=\"tabs_container\">
        <div class=\"fix\"></div>
        <div id=\"tab-index\" class=\"tab_content nopadding\">

            <fieldset>
                <div class=\"rowElem noborder\">
                    <label>";
        // line 32
        echo gettext("Allow new signups");
        echo "</label>
                    <div class=\"formRight\">
                        <input type=\"radio\" name=\"allow_signup\" value=\"1\"";
        // line 34
        if (twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "allow_signup", [], "any", false, false, false, 34)) {
            echo " checked=\"checked\"";
        }
        echo "/><label>";
        echo gettext("Yes");
        echo "</label>
                        <input type=\"radio\" name=\"allow_signup\" value=\"0\"";
        // line 35
        if ( !twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "allow_signup", [], "any", false, false, false, 35)) {
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
        // line 40
        echo gettext("Require email confirmation");
        echo "</label>
                    <div class=\"formRight\">
                        <input type=\"radio\" name=\"require_email_confirmation\" value=\"1\"";
        // line 42
        if (twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "require_email_confirmation", [], "any", false, false, false, 42)) {
            echo " checked=\"checked\"";
        }
        echo "/><label>";
        echo gettext("Yes");
        echo "</label>
                        <input type=\"radio\" name=\"require_email_confirmation\" value=\"0\"";
        // line 43
        if ( !twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "require_email_confirmation", [], "any", false, false, false, 43)) {
            echo " checked=\"checked\"";
        }
        echo " /><label>";
        echo gettext("No");
        echo "</label>
                        <span class=\"formNote\">";
        // line 44
        echo gettext("After enabling this feature, all existing users will have to confirm their emails if it was not done before");
        echo ".</span>
                    </div>
                    <div class=\"fix\"></div>
                </div>

                <div class=\"rowElem\">
                    <label>";
        // line 50
        echo gettext("Allow email change");
        echo "</label>
                    <div class=\"formRight\">
                        <input type=\"radio\" name=\"allow_change_email\" value=\"1\"";
        // line 52
        if (twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "allow_change_email", [], "any", false, false, false, 52)) {
            echo " checked=\"checked\"";
        }
        echo "/><label>";
        echo gettext("Yes");
        echo "</label>
                        <input type=\"radio\" name=\"allow_change_email\" value=\"0\"";
        // line 53
        if ( !twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "allow_change_email", [], "any", false, false, false, 53)) {
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
        // line 59
        echo gettext("Required fields");
        echo "</label>
                    <div class=\"formRight\">
                        <select multiple=\"multiple\" class=\"multiple\" title=\"";
        // line 61
        echo gettext("Select required fields");
        echo "\" name=\"required[]\">
                            <optgroup label=\"General\">
                            <option value=\"last_name\" ";
        // line 63
        if (twig_in_filter("last_name", twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "required", [], "any", false, false, false, 63))) {
            echo "selected";
        }
        echo ">";
        echo gettext("Last Name");
        echo "</option>
                            <option value=\"company\" ";
        // line 64
        if (twig_in_filter("company", twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "required", [], "any", false, false, false, 64))) {
            echo "selected";
        }
        echo ">";
        echo gettext("Company");
        echo "</option>
                            <option value=\"gender\" ";
        // line 65
        if (twig_in_filter("gender", twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "required", [], "any", false, false, false, 65))) {
            echo "selected";
        }
        echo ">";
        echo gettext("Gender");
        echo "</option>
                            <option value=\"birthday\" ";
        // line 66
        if (twig_in_filter("birthday", twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "required", [], "any", false, false, false, 66))) {
            echo "selected";
        }
        echo ">";
        echo gettext("Birthday");
        echo "</option>
                            </optgroup>

                            <optgroup label=\"Address\">
                            <option value=\"country\" ";
        // line 70
        if (twig_in_filter("country", twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "required", [], "any", false, false, false, 70))) {
            echo "selected";
        }
        echo ">";
        echo gettext("Country");
        echo "</option>
                            <option value=\"city\" ";
        // line 71
        if (twig_in_filter("city", twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "required", [], "any", false, false, false, 71))) {
            echo "selected";
        }
        echo ">";
        echo gettext("City");
        echo "</option>
                            <option value=\"state\" ";
        // line 72
        if (twig_in_filter("state", twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "required", [], "any", false, false, false, 72))) {
            echo "selected";
        }
        echo ">";
        echo gettext("State");
        echo "</option>
                            <option value=\"address_1\" ";
        // line 73
        if (twig_in_filter("address_1", twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "required", [], "any", false, false, false, 73))) {
            echo "selected";
        }
        echo ">";
        echo gettext("Address Line 1");
        echo "</option>
                            <option value=\"address_2\" ";
        // line 74
        if (twig_in_filter("address_2", twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "required", [], "any", false, false, false, 74))) {
            echo "selected";
        }
        echo ">";
        echo gettext("Address Line 2");
        echo "</option>
                            <option value=\"postcode\" ";
        // line 75
        if (twig_in_filter("last_name", twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "required", [], "any", false, false, false, 75))) {
            echo "selected";
        }
        echo ">";
        echo gettext("Post code");
        echo "</option>
                            <option value=\"phone\" ";
        // line 76
        if (twig_in_filter("phone", twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "required", [], "any", false, false, false, 76))) {
            echo "selected";
        }
        echo ">";
        echo gettext("Phone");
        echo "</option>
                            </optgroup>

                        </select>

                    </div>
                    <div class=\"fix\"></div>
                </div>
                <input type=\"submit\" value=\"";
        // line 84
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" />
            </fieldset>
            
        </div>
        <div id=\"tab-custom-fields\" class=\"tab_content nopadding\">
                <fieldset>
                    ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 91
            echo "                    ";
            $context["field_name"] = ("custom_" . $context["i"]);
            // line 92
            echo "                    ";
            $context["custom_field"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "custom_fields", [], "any", false, false, false, 92), ($context["field_name"] ?? null), [], "any", false, false, false, 92);
            // line 93
            echo "                    <div class=\"rowElem noborder\">
                        <label>";
            // line 94
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "title", [], "any", false, false, false, 94))) {
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "title", [], "any", false, false, false, 94), "html", null, true);
                echo " (";
                echo gettext("Custom_");
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo ") ";
            } else {
                echo gettext("Custom_");
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            }
            echo "</label>
                        <div class=\"formRight\">
                            <input type=\"checkbox\" name=\"custom_fields[";
            // line 96
            echo twig_escape_filter($this->env, ($context["field_name"] ?? null), "html", null, true);
            echo "][active]\" value=\"1\"";
            if (twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "active", [], "any", false, false, false, 96)) {
                echo " checked=\"checked\"";
            }
            echo "/><label>";
            echo gettext("Active");
            echo "</label>
                            <input type=\"checkbox\" name=\"custom_fields[";
            // line 97
            echo twig_escape_filter($this->env, ($context["field_name"] ?? null), "html", null, true);
            echo "][required]\" value=\"1\"";
            if (twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "required", [], "any", false, false, false, 97)) {
                echo " checked=\"checked\"";
            }
            echo "/><label>";
            echo gettext("Required");
            echo "</label>
                            <input type=\"text\" placeholder=\"Field title\" name=\"custom_fields[";
            // line 98
            echo twig_escape_filter($this->env, ($context["field_name"] ?? null), "html", null, true);
            echo "][title]\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["custom_field"] ?? null), "title", [], "any", false, false, false, 98), "html", null, true);
            echo "\" style=\"width: 300px\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <hr/>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "                    <input type=\"submit\" value=\"";
        echo gettext("Update profile");
        echo "\" class=\"greyishBtn submitForm\" />
                </fieldset>
        </div>
    </div>
</div>
    
    <input type=\"hidden\" name=\"ext\" value=\"mod_client\" />
    </form>
";
    }

    public function getTemplateName()
    {
        return "mod_client_settings.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  381 => 104,  367 => 98,  357 => 97,  347 => 96,  332 => 94,  329 => 93,  326 => 92,  323 => 91,  319 => 90,  310 => 84,  295 => 76,  287 => 75,  279 => 74,  271 => 73,  263 => 72,  255 => 71,  247 => 70,  236 => 66,  228 => 65,  220 => 64,  212 => 63,  207 => 61,  202 => 59,  189 => 53,  181 => 52,  176 => 50,  167 => 44,  159 => 43,  151 => 42,  146 => 40,  134 => 35,  126 => 34,  121 => 32,  109 => 23,  105 => 22,  94 => 17,  92 => 16,  89 => 15,  85 => 14,  78 => 10,  72 => 9,  66 => 8,  63 => 7,  59 => 6,  52 => 3,  48 => 1,  46 => 4,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends request.ajax ? \"layout_blank.phtml\" : \"layout_default.phtml\" %}
{% import \"macro_functions.phtml\" as mf %}
{% block meta_title %}Client settings{% endblock %}
{% set active_menu = 'system' %}

{% block breadcrumbs %}
<ul>
    <li class=\"firstB\"><a href=\"{{ '/'|alink }}\">{% trans 'Home' %}</a></li>
    <li><a href=\"{{ 'system'|alink }}\">{% trans 'Settings' %}</a></li>
    <li class=\"lastB\">{% trans 'Client settings' %}</li>
</ul>
{% endblock %}

{% block content %}

{% set params = admin.extension_config_get({\"ext\":\"mod_client\"}) %}
<form method=\"post\" action=\"{{ 'api/admin/extension/config_save'|link }}\" class=\"mainForm api-form\" data-api-msg=\"{% trans 'Configuration updated' %}\">

<div class=\"widget simpleTabs\">

    <ul class=\"tabs\">
        <li><a href=\"#tab-index\">{% trans 'General' %}</a></li>
        <li><a href=\"#tab-custom-fields\">{% trans 'Custom Fields' %}</a></li>
    </ul>
    
    <div class=\"tabs_container\">
        <div class=\"fix\"></div>
        <div id=\"tab-index\" class=\"tab_content nopadding\">

            <fieldset>
                <div class=\"rowElem noborder\">
                    <label>{% trans 'Allow new signups' %}</label>
                    <div class=\"formRight\">
                        <input type=\"radio\" name=\"allow_signup\" value=\"1\"{% if params.allow_signup %} checked=\"checked\"{% endif %}/><label>{% trans 'Yes' %}</label>
                        <input type=\"radio\" name=\"allow_signup\" value=\"0\"{% if not params.allow_signup %} checked=\"checked\"{% endif %} /><label>{% trans 'No' %}</label>
                    </div>
                    <div class=\"fix\"></div>
                </div>
                <div class=\"rowElem\">
                    <label>{% trans 'Require email confirmation' %}</label>
                    <div class=\"formRight\">
                        <input type=\"radio\" name=\"require_email_confirmation\" value=\"1\"{% if params.require_email_confirmation %} checked=\"checked\"{% endif %}/><label>{% trans 'Yes' %}</label>
                        <input type=\"radio\" name=\"require_email_confirmation\" value=\"0\"{% if not params.require_email_confirmation %} checked=\"checked\"{% endif %} /><label>{% trans 'No' %}</label>
                        <span class=\"formNote\">{% trans 'After enabling this feature, all existing users will have to confirm their emails if it was not done before' %}.</span>
                    </div>
                    <div class=\"fix\"></div>
                </div>

                <div class=\"rowElem\">
                    <label>{% trans 'Allow email change' %}</label>
                    <div class=\"formRight\">
                        <input type=\"radio\" name=\"allow_change_email\" value=\"1\"{% if params.allow_change_email %} checked=\"checked\"{% endif %}/><label>{% trans 'Yes' %}</label>
                        <input type=\"radio\" name=\"allow_change_email\" value=\"0\"{% if not params.allow_change_email %} checked=\"checked\"{% endif %} /><label>{% trans 'No' %}</label>
                    </div>
                    <div class=\"fix\"></div>
                </div>

                <div class=\"rowElem\">
                    <label>{% trans 'Required fields' %}</label>
                    <div class=\"formRight\">
                        <select multiple=\"multiple\" class=\"multiple\" title=\"{% trans 'Select required fields' %}\" name=\"required[]\">
                            <optgroup label=\"General\">
                            <option value=\"last_name\" {% if 'last_name' in params.required %}selected{% endif %}>{% trans 'Last Name' %}</option>
                            <option value=\"company\" {% if 'company' in params.required %}selected{% endif %}>{% trans 'Company' %}</option>
                            <option value=\"gender\" {% if 'gender' in params.required %}selected{% endif %}>{% trans 'Gender' %}</option>
                            <option value=\"birthday\" {% if 'birthday' in params.required %}selected{% endif %}>{% trans 'Birthday' %}</option>
                            </optgroup>

                            <optgroup label=\"Address\">
                            <option value=\"country\" {% if 'country' in params.required %}selected{% endif %}>{% trans 'Country' %}</option>
                            <option value=\"city\" {% if 'city' in params.required %}selected{% endif %}>{% trans 'City' %}</option>
                            <option value=\"state\" {% if 'state' in params.required %}selected{% endif %}>{% trans 'State' %}</option>
                            <option value=\"address_1\" {% if 'address_1' in params.required %}selected{% endif %}>{% trans 'Address Line 1' %}</option>
                            <option value=\"address_2\" {% if 'address_2' in params.required %}selected{% endif %}>{% trans 'Address Line 2' %}</option>
                            <option value=\"postcode\" {% if 'last_name' in params.required %}selected{% endif %}>{% trans 'Post code' %}</option>
                            <option value=\"phone\" {% if 'phone' in params.required %}selected{% endif %}>{% trans 'Phone' %}</option>
                            </optgroup>

                        </select>

                    </div>
                    <div class=\"fix\"></div>
                </div>
                <input type=\"submit\" value=\"{% trans 'Update' %}\" class=\"greyishBtn submitForm\" />
            </fieldset>
            
        </div>
        <div id=\"tab-custom-fields\" class=\"tab_content nopadding\">
                <fieldset>
                    {% for i in 1..10 %}
                    {% set field_name = 'custom_' ~ i %}
                    {% set custom_field = attribute(params.custom_fields, field_name) %}
                    <div class=\"rowElem noborder\">
                        <label>{% if custom_field.title is not empty %} {{custom_field.title}} ({% trans 'Custom_' %}{{ i }}) {% else %}{% trans 'Custom_' %}{{ i }}{% endif %}</label>
                        <div class=\"formRight\">
                            <input type=\"checkbox\" name=\"custom_fields[{{ field_name }}][active]\" value=\"1\"{% if custom_field.active %} checked=\"checked\"{% endif %}/><label>{% trans 'Active' %}</label>
                            <input type=\"checkbox\" name=\"custom_fields[{{ field_name }}][required]\" value=\"1\"{% if custom_field.required %} checked=\"checked\"{% endif %}/><label>{% trans 'Required' %}</label>
                            <input type=\"text\" placeholder=\"Field title\" name=\"custom_fields[{{ field_name }}][title]\" value=\"{{custom_field.title}}\" style=\"width: 300px\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <hr/>
                    {% endfor %}
                    <input type=\"submit\" value=\"{% trans 'Update profile' %}\" class=\"greyishBtn submitForm\" />
                </fieldset>
        </div>
    </div>
</div>
    
    <input type=\"hidden\" name=\"ext\" value=\"mod_client\" />
    </form>
{% endblock %}", "mod_client_settings.phtml", "/home/lexcicxy/hostshibe.cf/bb-modules/Client/html_admin/mod_client_settings.phtml");
    }
}
