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

/* mod_support_settings.phtml */
class __TwigTemplate_07eede64a9b92818233d014219a4c340cba4b5a7a141ba1b24016278cde88e47 extends \Twig\Template
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
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.phtml") : ("layout_default.phtml")), "mod_support_settings.phtml", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.phtml", "mod_support_settings.phtml", 2)->unwrap();
        // line 4
        $context["active_menu"] = "system";
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo gettext("Support settings");
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
        echo gettext("Support settings");
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
<div class=\"widget simpleTabs\">

    <ul class=\"tabs\">
        <li><a href=\"#tab-index\">";
        // line 19
        echo gettext("Settings");
        echo "</a></li>
        <li><a href=\"#tab-helpdesks\">";
        // line 20
        echo gettext("Help desks");
        echo "</a></li>
        <li><a href=\"#tab-new-helpdesk\">";
        // line 21
        echo gettext("New help desk");
        echo "</a></li>
    </ul>

    <div class=\"tabs_container\">
        <div class=\"fix\"></div>
        <div class=\"tab_content nopadding\" id=\"tab-index\">

            ";
        // line 28
        $context["params"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "extension_config_get", [0 => ["ext" => "mod_support"]], "method", false, false, false, 28);
        // line 29
        echo "
            <form method=\"post\" action=\"";
        // line 30
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/extension/config_save");
        echo "\" class=\"mainForm api-form\" data-api-msg=\"";
        echo gettext("Configuration updated");
        echo "\">

                <fieldset>
                    <legend>";
        // line 33
        echo gettext("Auto responder settings");
        echo "</legend>
                    <div class=\"rowElem noborder\">
                        <label>";
        // line 35
        echo gettext("Enable auto responder");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"radio\" name=\"autorespond_enable\" value=\"1\" ";
        // line 37
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "autorespond_enable", [], "any", false, false, false, 37) == "1")) {
            echo "checked=\"checked\"";
        }
        echo "/><label>";
        echo gettext("Yes");
        echo "</label>
                            <input type=\"radio\" name=\"autorespond_enable\" value=\"0\" ";
        // line 38
        if ( !twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "autorespond_enable", [], "any", false, false, false, 38)) {
            echo "checked=\"checked\"";
        }
        echo "/><label>";
        echo gettext("No");
        echo "</label>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div id=\"autorespond_enable\" ";
        // line 43
        if ( !twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "autorespond_enable", [], "any", false, false, false, 43)) {
            echo "style=\"display:none;\"";
        }
        echo ">
                    <div class=\"rowElem\">
                        <label class=\"\">";
        // line 45
        echo gettext("Auto respond message");
        echo "</label>
                        <div class=\"formRight\">
                            <select name=\"autorespond_message_id\" style=\"width: 250px;\">
                                ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "support_canned_get_list", [0 => ["per_page" => 90]], "method", false, false, false, 48), "list", [], "any", false, false, false, 48));
        foreach ($context['_seq'] as $context["_key"] => $context["response"]) {
            // line 49
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["response"], "id", [], "any", false, false, false, 49), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "autorespond_message_id", [], "any", false, false, false, 49) == twig_get_attribute($this->env, $this->source, $context["response"], "id", [], "any", false, false, false, 49))) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["response"], "title", [], "any", false, false, false, 49), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['response'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                            </select>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
        </div>
        </fieldset>

        <fieldset>
            <legend>";
        // line 59
        echo gettext("Delay message - selected canned response message will be added to default reply message");
        echo "</legend>
            <div class=\"rowElem noborder\">
                <label>";
        // line 61
        echo gettext("Enable delay message");
        echo "</label>
                <div class=\"formRight\">
                    <input type=\"radio\" name=\"delay_enable\" value=\"1\" ";
        // line 63
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "delay_enable", [], "any", false, false, false, 63) == "1")) {
            echo "checked=\"checked\"";
        }
        echo "/><label>";
        echo gettext("Yes");
        echo "</label>
                    <input type=\"radio\" name=\"delay_enable\" value=\"0\" ";
        // line 64
        if ( !twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "delay_enable", [], "any", false, false, false, 64)) {
            echo "checked=\"checked\"";
        }
        echo "/><label>";
        echo gettext("No");
        echo "</label>
                </div>
                <div class=\"fix\"></div>
            </div>

            <div id=\"delay_enable\" ";
        // line 69
        if ( !twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "delay_enable", [], "any", false, false, false, 69)) {
            echo "style=\"display:none;\"";
        }
        echo ">
            <div class=\"rowElem\">
                <label class=\"\">";
        // line 71
        echo gettext("Delay hours");
        echo "</label>
                <div class=\"formRight\">
                    <input type=\"text\" name=\"delay_hours\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "delay_hours", [], "any", true, true, false, 73)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "delay_hours", [], "any", false, false, false, 73), 24)) : (24)), "html", null, true);
        echo "\" style=\"width: 40px;\" placeholder=\"24\"/>
                </div>
                <div class=\"fix\"></div>
            </div>

            <div class=\"rowElem\">
                <label class=\"\">";
        // line 79
        echo gettext("Delay reply");
        echo "</label>
                <div class=\"formRight\">
                    <select name=\"delay_message_id\" style=\"width: 250px;\">
                        ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "support_canned_get_list", [0 => ["per_page" => 90]], "method", false, false, false, 82), "list", [], "any", false, false, false, 82));
        foreach ($context['_seq'] as $context["_key"] => $context["response"]) {
            // line 83
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["response"], "id", [], "any", false, false, false, 83), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "delay_message_id", [], "any", false, false, false, 83) == twig_get_attribute($this->env, $this->source, $context["response"], "id", [], "any", false, false, false, 83))) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["response"], "title", [], "any", false, false, false, 83), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['response'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "                    </select>
                </div>
                <div class=\"fix\"></div>
            </div>
    </div>

    <legend>";
        // line 91
        echo gettext("Wait time - how many hours user needs to wait until consequent ticket submission");
        echo "</legend>
    <div class=\"rowElem noborder\">
        <label>";
        // line 93
        echo gettext("Wait time in hours");
        echo "</label>
        <div class=\"formRight\">
            <input type=\"text\" name=\"wait_hours\"  value=\"";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "wait_hours", [], "any", false, false, false, 95), "html", null, true);
        echo "\" />
        </div>
        <div class=\"fix\"></div>
    </div>

    <input type=\"submit\" value=\"";
        // line 100
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" />
    <input type=\"hidden\" name=\"ext\" value=\"mod_support\" />
    </fieldset>
    </form>
        </div>

        <div class=\"tab_content nopadding\" id=\"tab-helpdesks\">

            ";
        // line 108
        echo twig_call_macro($macros["mf"], "macro_table_search", [], 108, $context, $this->getSourceContext());
        echo "
            <table class=\"tableStatic wide\">
                <thead>
                <tr>
                    <th style=\"width: 40%\">";
        // line 112
        echo gettext("Title");
        echo "</th>
                    <th>";
        // line 113
        echo gettext("Email");
        echo "</th>
                    <th>";
        // line 114
        echo gettext("Close tickets after");
        echo "</th>
                    <th style=\"width: 13%\">&nbsp;</th>
                </tr>
                </thead>

                <tbody>
                ";
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "support_helpdesk_get_list", [0 => twig_array_merge(["per_page" => 50, "page" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "page", [], "any", false, false, false, 120)], ($context["request"] ?? null))], "method", false, false, false, 120), "list", [], "any", false, false, false, 120));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["helpdesk"]) {
            // line 121
            echo "                <tr>
                    <td>";
            // line 122
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["helpdesk"], "name", [], "any", false, false, false, 122), "html", null, true);
            echo "</td>
                    <td>";
            // line 123
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["helpdesk"], "email", [], "any", false, false, false, 123), "html", null, true);
            echo "</td>
                    <td>";
            // line 124
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["helpdesk"], "close_after", [], "any", false, false, false, 124), "html", null, true);
            echo " hour(s)</td>
                    <td class=\"actions\">
                        <a class=\"bb-button btn14\" href=\"";
            // line 126
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/support/helpdesk");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["helpdesk"], "id", [], "any", false, false, false, 126), "html", null, true);
            echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a>
                        <a class=\"bb-button btn14 bb-rm-tr api-link\" data-api-confirm=\"Are you sure?\" data-api-redirect=\"";
            // line 127
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("extension/settings/support");
            echo "\" href=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/support/helpdesk_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["helpdesk"], "id", [], "any", false, false, false, 127)]);
            echo "\"><img src=\"images/icons/dark/trash.png\" alt=\"\"></a>
                    </td>
                </tr>
                </tbody>

                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 133
            echo "                <tbody>
                <tr>
                    <td colspan=\"4\">
                        ";
            // line 136
            echo gettext("The list is empty");
            // line 137
            echo "                    </td>
                </tr>
                </tbody>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['helpdesk'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "            </table>

        </div>

        <div class=\"tab_content nopadding\" id=\"tab-new-helpdesk\">

            <form method=\"post\" action=\"";
        // line 147
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/support/helpdesk_create");
        echo "\" class=\"mainForm save api-form\" data-api-redirect=\"";
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("extension/settings/support");
        echo "\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>";
        // line 150
        echo gettext("Title");
        echo "</label>
                        <div class=\"formRight noborder\">
                            <input type=\"text\" name=\"name\" value=\"";
        // line 152
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["helpdesk"] ?? null), "name", [], "any", false, false, false, 152), "html", null, true);
        echo "\" required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 157
        echo gettext("Email");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"email\" value=\"";
        // line 159
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["helpdesk"] ?? null), "email", [], "any", false, false, false, 159), "html", null, true);
        echo "\" required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 164
        echo gettext("Signature");
        echo "</label>
                        <div class=\"formRight\">
                            <textarea name=\"signature\" cols=\"5\" rows=\"3\">";
        // line 166
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["helpdesk"] ?? null), "signature", [], "any", false, false, false, 166), "html", null, true);
        echo "</textarea>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 171
        echo gettext("Close after");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"close_after\" value=\"";
        // line 173
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["helpdesk"] ?? null), "close_after", [], "any", true, true, false, 173)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["helpdesk"] ?? null), "close_after", [], "any", false, false, false, 173), "48")) : ("48")), "html", null, true);
        echo "\" required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 178
        echo gettext("Can reopen");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"radio\" name=\"can_reopen\" value=\"1\" checked=\"checked\"/><label>";
        // line 180
        echo gettext("Yes");
        echo "</label>
                            <input type=\"radio\" name=\"can_reopen\" value=\"0\"/><label>";
        // line 181
        echo gettext("No");
        echo "</label>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <input type=\"submit\" value=\"";
        // line 186
        echo gettext("Create");
        echo "\" class=\"greyishBtn submitForm\" />
                    <input type=\"hidden\" name=\"id\" value=\"";
        // line 187
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["helpdesk"] ?? null), "id", [], "any", false, false, false, 187), "html", null, true);
        echo "\"/>
                </fieldset>
            </form>

        </div>
    </div>

</div>
";
    }

    // line 198
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 199
        echo "<script type=\"text/javascript\">
    
\$(function() {
    \$('input[name=autorespond_enable]').click(function(){
        if(\$(this).val() == 1) {
            \$('#autorespond_enable').slideDown();
        } else {
            \$('#autorespond_enable').slideUp();
        }
    });
    
    \$('input[name=delay_enable]').click(function(){
        if(\$(this).val() == 1) {
            \$('#delay_enable').slideDown();
        } else {
            \$('#delay_enable').slideUp();
        }
    });
});

</script>
";
    }

    public function getTemplateName()
    {
        return "mod_support_settings.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  498 => 199,  494 => 198,  481 => 187,  477 => 186,  469 => 181,  465 => 180,  460 => 178,  452 => 173,  447 => 171,  439 => 166,  434 => 164,  426 => 159,  421 => 157,  413 => 152,  408 => 150,  400 => 147,  392 => 141,  383 => 137,  381 => 136,  376 => 133,  363 => 127,  357 => 126,  352 => 124,  348 => 123,  344 => 122,  341 => 121,  336 => 120,  327 => 114,  323 => 113,  319 => 112,  312 => 108,  301 => 100,  293 => 95,  288 => 93,  283 => 91,  275 => 85,  260 => 83,  256 => 82,  250 => 79,  241 => 73,  236 => 71,  229 => 69,  217 => 64,  209 => 63,  204 => 61,  199 => 59,  189 => 51,  174 => 49,  170 => 48,  164 => 45,  157 => 43,  145 => 38,  137 => 37,  132 => 35,  127 => 33,  119 => 30,  116 => 29,  114 => 28,  104 => 21,  100 => 20,  96 => 19,  90 => 15,  86 => 14,  79 => 10,  73 => 9,  67 => 8,  64 => 7,  60 => 6,  53 => 3,  49 => 1,  47 => 4,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends request.ajax ? \"layout_blank.phtml\" : \"layout_default.phtml\" %}
{% import \"macro_functions.phtml\" as mf %}
{% block meta_title %}{% trans 'Support settings' %}{% endblock %}
{% set active_menu = 'system' %}

{% block breadcrumbs %}
<ul>
    <li class=\"firstB\"><a href=\"{{ '/'|alink }}\">{% trans 'Home' %}</a></li>
    <li><a href=\"{{ 'system'|alink }}\">{% trans 'Settings' %}</a></li>
    <li class=\"lastB\">{% trans 'Support settings' %}</li>
</ul>
{% endblock %}

{% block content %}

<div class=\"widget simpleTabs\">

    <ul class=\"tabs\">
        <li><a href=\"#tab-index\">{% trans 'Settings' %}</a></li>
        <li><a href=\"#tab-helpdesks\">{% trans 'Help desks' %}</a></li>
        <li><a href=\"#tab-new-helpdesk\">{% trans 'New help desk' %}</a></li>
    </ul>

    <div class=\"tabs_container\">
        <div class=\"fix\"></div>
        <div class=\"tab_content nopadding\" id=\"tab-index\">

            {% set params = admin.extension_config_get({\"ext\":\"mod_support\"}) %}

            <form method=\"post\" action=\"{{ 'api/admin/extension/config_save'|link }}\" class=\"mainForm api-form\" data-api-msg=\"{% trans 'Configuration updated' %}\">

                <fieldset>
                    <legend>{% trans 'Auto responder settings' %}</legend>
                    <div class=\"rowElem noborder\">
                        <label>{% trans 'Enable auto responder' %}</label>
                        <div class=\"formRight\">
                            <input type=\"radio\" name=\"autorespond_enable\" value=\"1\" {% if params.autorespond_enable == \"1\" %}checked=\"checked\"{% endif %}/><label>{% trans 'Yes' %}</label>
                            <input type=\"radio\" name=\"autorespond_enable\" value=\"0\" {% if not params.autorespond_enable %}checked=\"checked\"{% endif %}/><label>{% trans 'No' %}</label>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div id=\"autorespond_enable\" {% if not params.autorespond_enable %}style=\"display:none;\"{% endif %}>
                    <div class=\"rowElem\">
                        <label class=\"\">{% trans 'Auto respond message' %}</label>
                        <div class=\"formRight\">
                            <select name=\"autorespond_message_id\" style=\"width: 250px;\">
                                {% for response in admin.support_canned_get_list({\"per_page\":90}).list %}
                                <option value=\"{{ response.id }}\" {% if params.autorespond_message_id == response.id %}selected=\"selected\"{% endif %}>{{ response.title }}</option>
                                {% endfor %}
                            </select>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
        </div>
        </fieldset>

        <fieldset>
            <legend>{% trans 'Delay message - selected canned response message will be added to default reply message' %}</legend>
            <div class=\"rowElem noborder\">
                <label>{% trans 'Enable delay message' %}</label>
                <div class=\"formRight\">
                    <input type=\"radio\" name=\"delay_enable\" value=\"1\" {% if params.delay_enable == \"1\" %}checked=\"checked\"{% endif %}/><label>{% trans 'Yes' %}</label>
                    <input type=\"radio\" name=\"delay_enable\" value=\"0\" {% if not params.delay_enable %}checked=\"checked\"{% endif %}/><label>{% trans 'No' %}</label>
                </div>
                <div class=\"fix\"></div>
            </div>

            <div id=\"delay_enable\" {% if not params.delay_enable %}style=\"display:none;\"{% endif %}>
            <div class=\"rowElem\">
                <label class=\"\">{% trans 'Delay hours' %}</label>
                <div class=\"formRight\">
                    <input type=\"text\" name=\"delay_hours\" value=\"{{ params.delay_hours|default(24) }}\" style=\"width: 40px;\" placeholder=\"24\"/>
                </div>
                <div class=\"fix\"></div>
            </div>

            <div class=\"rowElem\">
                <label class=\"\">{% trans 'Delay reply' %}</label>
                <div class=\"formRight\">
                    <select name=\"delay_message_id\" style=\"width: 250px;\">
                        {% for response in admin.support_canned_get_list({\"per_page\":90}).list %}
                        <option value=\"{{ response.id }}\" {% if params.delay_message_id == response.id %}selected=\"selected\"{% endif %}>{{ response.title }}</option>
                        {% endfor %}
                    </select>
                </div>
                <div class=\"fix\"></div>
            </div>
    </div>

    <legend>{% trans 'Wait time - how many hours user needs to wait until consequent ticket submission' %}</legend>
    <div class=\"rowElem noborder\">
        <label>{% trans 'Wait time in hours' %}</label>
        <div class=\"formRight\">
            <input type=\"text\" name=\"wait_hours\"  value=\"{{ params.wait_hours }}\" />
        </div>
        <div class=\"fix\"></div>
    </div>

    <input type=\"submit\" value=\"{% trans 'Update' %}\" class=\"greyishBtn submitForm\" />
    <input type=\"hidden\" name=\"ext\" value=\"mod_support\" />
    </fieldset>
    </form>
        </div>

        <div class=\"tab_content nopadding\" id=\"tab-helpdesks\">

            {{ mf.table_search }}
            <table class=\"tableStatic wide\">
                <thead>
                <tr>
                    <th style=\"width: 40%\">{% trans 'Title' %}</th>
                    <th>{% trans 'Email' %}</th>
                    <th>{% trans 'Close tickets after' %}</th>
                    <th style=\"width: 13%\">&nbsp;</th>
                </tr>
                </thead>

                <tbody>
                {% for helpdesk in admin.support_helpdesk_get_list({\"per_page\":50, \"page\":request.page}|merge(request)).list %}
                <tr>
                    <td>{{ helpdesk.name }}</td>
                    <td>{{ helpdesk.email }}</td>
                    <td>{{ helpdesk.close_after }} hour(s)</td>
                    <td class=\"actions\">
                        <a class=\"bb-button btn14\" href=\"{{ '/support/helpdesk'|alink }}/{{helpdesk.id}}\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a>
                        <a class=\"bb-button btn14 bb-rm-tr api-link\" data-api-confirm=\"Are you sure?\" data-api-redirect=\"{{ 'extension/settings/support'|alink }}\" href=\"{{ 'api/admin/support/helpdesk_delete'|link({'id' : helpdesk.id}) }}\"><img src=\"images/icons/dark/trash.png\" alt=\"\"></a>
                    </td>
                </tr>
                </tbody>

                {% else %}
                <tbody>
                <tr>
                    <td colspan=\"4\">
                        {% trans 'The list is empty' %}
                    </td>
                </tr>
                </tbody>
                {% endfor %}
            </table>

        </div>

        <div class=\"tab_content nopadding\" id=\"tab-new-helpdesk\">

            <form method=\"post\" action=\"{{ 'api/admin/support/helpdesk_create'|link }}\" class=\"mainForm save api-form\" data-api-redirect=\"{{ 'extension/settings/support'|alink }}\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>{% trans 'Title' %}</label>
                        <div class=\"formRight noborder\">
                            <input type=\"text\" name=\"name\" value=\"{{ helpdesk.name }}\" required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>{% trans 'Email' %}</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"email\" value=\"{{ helpdesk.email }}\" required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>{% trans 'Signature' %}</label>
                        <div class=\"formRight\">
                            <textarea name=\"signature\" cols=\"5\" rows=\"3\">{{ helpdesk.signature }}</textarea>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>{% trans 'Close after' %}</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"close_after\" value=\"{{ helpdesk.close_after|default('48') }}\" required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>{% trans 'Can reopen' %}</label>
                        <div class=\"formRight\">
                            <input type=\"radio\" name=\"can_reopen\" value=\"1\" checked=\"checked\"/><label>{% trans 'Yes' %}</label>
                            <input type=\"radio\" name=\"can_reopen\" value=\"0\"/><label>{% trans 'No' %}</label>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <input type=\"submit\" value=\"{% trans 'Create' %}\" class=\"greyishBtn submitForm\" />
                    <input type=\"hidden\" name=\"id\" value=\"{{ helpdesk.id }}\"/>
                </fieldset>
            </form>

        </div>
    </div>

</div>
{% endblock %}


{% block js %}
<script type=\"text/javascript\">
    
\$(function() {
    \$('input[name=autorespond_enable]').click(function(){
        if(\$(this).val() == 1) {
            \$('#autorespond_enable').slideDown();
        } else {
            \$('#autorespond_enable').slideUp();
        }
    });
    
    \$('input[name=delay_enable]').click(function(){
        if(\$(this).val() == 1) {
            \$('#delay_enable').slideDown();
        } else {
            \$('#delay_enable').slideUp();
        }
    });
});

</script>
{% endblock %}", "mod_support_settings.phtml", "/home/lexcicxy/hostshibe.cf/bb-modules/Support/html_admin/mod_support_settings.phtml");
    }
}
