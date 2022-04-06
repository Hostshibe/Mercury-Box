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

/* mod_staff_settings.phtml */
class __TwigTemplate_5c5295b04bc663eba121f6f087f29eb73aea6b720b22a0f45c39f9d58da4d1c0 extends \Twig\Template
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
        return "layout_default.phtml";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.phtml", "mod_staff_settings.phtml", 2)->unwrap();
        // line 4
        $context["active_menu"] = "system";
        // line 1
        $this->parent = $this->loadTemplate("layout_default.phtml", "mod_staff_settings.phtml", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo gettext("Staff");
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
        echo gettext("Staff");
        echo "</li>
</ul>
";
    }

    // line 14
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "<div class=\"widget simpleTabs\">

    <ul class=\"tabs\">
        <li><a href=\"#tab-staff\">";
        // line 18
        echo gettext("Staff");
        echo "</a></li>
        <li><a href=\"#tab-settings\">";
        // line 19
        echo gettext("Settings");
        echo "</a></li>
        <li><a href=\"#tab-new\">";
        // line 20
        echo gettext("New staff member");
        echo "</a></li>
        <li><a href=\"#tab-groups\">";
        // line 21
        echo gettext("Manage groups");
        echo "</a></li>
        <li><a href=\"#tab-new-group\">";
        // line 22
        echo gettext("New group");
        echo "</a></li>
    </ul>

    <div class=\"tabs_container\">
        <div class=\"fix\"></div>
        <div class=\"tab_content nopadding\" id=\"tab-staff\">
            
            ";
        // line 29
        echo twig_call_macro($macros["mf"], "macro_table_search", [], 29, $context, $this->getSourceContext());
        echo "
            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <td colspan=\"2\">";
        // line 33
        echo gettext("Name");
        echo "</td>
                        <td>";
        // line 34
        echo gettext("Email");
        echo "</td>
                        <td>";
        // line 35
        echo gettext("Group");
        echo "</td>
                        <td>";
        // line 36
        echo gettext("Status");
        echo "</td>
                        <td style=\"width: 5%\">&nbsp;</td>
                    </tr>
                </thead>
                
                <tbody>
                ";
        // line 42
        $context["members"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "staff_get_list", [0 => twig_array_merge(["per_page" => 100, "page" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "page", [], "any", false, false, false, 42)], ($context["request"] ?? null))], "method", false, false, false, 42);
        // line 43
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["members"] ?? null), "list", [], "any", false, false, false, 43));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["member"]) {
            // line 44
            echo "                <tr>
                    <td style=\"width: 5%\"><a href=\"";
            // line 45
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("staff/manage");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "id", [], "any", false, false, false, 45), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, twig_gravatar_filter(twig_get_attribute($this->env, $this->source, $context["member"], "email", [], "any", false, false, false, 45)), "html", null, true);
            echo "?size=25\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "id", [], "any", false, false, false, 45), "html", null, true);
            echo "\" /></a></td>
                    <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "name", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                    <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "email", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                    <td><a href=\"";
            // line 48
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/staff/group");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["member"], "group", [], "any", false, false, false, 48), "id", [], "any", false, false, false, 48), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["member"], "group", [], "any", false, false, false, 48), "name", [], "any", false, false, false, 48), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 49
            echo twig_call_macro($macros["mf"], "macro_status_name", [twig_get_attribute($this->env, $this->source, $context["member"], "status", [], "any", false, false, false, 49)], 49, $context, $this->getSourceContext());
            echo "</td>
                    <td style=\"width: 13%\" class=\"actions\">
                        <a class=\"bb-button btn14\" href=\"";
            // line 51
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/staff/manage");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "id", [], "any", false, false, false, 51), "html", null, true);
            echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a>
                        <a class=\"bb-button btn14 bb-rm-tr api-link\" data-api-confirm=\"Are you sure?\" data-api-redirect=\"";
            // line 52
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("staff");
            echo "\" href=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/staff/delete", ["id" => twig_get_attribute($this->env, $this->source, $context["member"], "id", [], "any", false, false, false, 52)]);
            echo "\"><img src=\"images/icons/dark/trash.png\" alt=\"\"></a>
                    </td>
                </tr>
                </tbody>

                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 58
            echo "                <tbody>
                    <tr>
                        <td colspan=\"5\">
                            ";
            // line 61
            echo gettext("The list is empty");
            // line 62
            echo "                        </td>
                    </tr>
                </tbody>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "            </table>

        </div>
        
        <div class=\"fix\"></div>
        <div class=\"tab_content nopadding\" id=\"tab-settings\">
            ";
        // line 72
        $context["params"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "extension_config_get", [0 => ["ext" => "mod_staff"]], "method", false, false, false, 72);
        // line 73
        echo "            <form method=\"post\" action=\"";
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/extension/config_save");
        echo "\" class=\"mainForm api-form\" data-api-msg=\"";
        echo gettext("Configuration updated");
        echo "\">

                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>";
        // line 77
        echo gettext("Check login IP");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"radio\" name=\"check_ip\" value=\"1\" ";
        // line 79
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "check_ip", [], "any", false, false, false, 79) == "1")) {
            echo "checked=\"checked\"";
        }
        echo "/><label>";
        echo gettext("Yes");
        echo "</label>
                            <input type=\"radio\" name=\"check_ip\" value=\"0\" ";
        // line 80
        if ( !twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "check_ip", [], "any", false, false, false, 80)) {
            echo "checked=\"checked\"";
        }
        echo "/><label>";
        echo gettext("No");
        echo "</label>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div id=\"check_ip\" ";
        // line 85
        if ( !twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "check_ip", [], "any", false, false, false, 85)) {
            echo "style=\"display:none;\"";
        }
        echo ">
                        <div class=\"rowElem\">
                            <label class=\"topLabel\">";
        // line 87
        echo gettext("Allowed IPs. One per line");
        echo "</label>
                            <div class=\"formBottom\">
                                <textarea name=\"allowed_ips\" cols=\"5\" rows=\"5\" placeholder=\"";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "system_env", [0 => ["ip" => 1]], "method", false, false, false, 89), "html", null, true);
        echo "\" />";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "allowed_ips", [], "any", false, false, false, 89), "html", null, true);
        echo "</textarea>
                            </div>
                            <div class=\"fix\"></div>
                        </div>
                    </div>

                    <input type=\"submit\" value=\"";
        // line 95
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" />
                    <input type=\"hidden\" name=\"ext\" value=\"mod_staff\" />
                </fieldset>
            </form>

        </div>
        
        <div class=\"fix\"></div>
        <div class=\"tab_content nopadding\" id=\"tab-new\">
            <form method=\"post\" action=\"";
        // line 104
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/staff/create");
        echo "\" class=\"mainForm api-form\" data-api-jsonp=\"onAfterStaffCreate\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>";
        // line 107
        echo gettext("Group");
        echo "</label>
                        <div class=\"formRight\">
                            ";
        // line 109
        echo twig_call_macro($macros["mf"], "macro_selectbox", ["admin_group_id", twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "staff_group_get_pairs", [], "any", false, false, false, 109), "", 1], 109, $context, $this->getSourceContext());
        echo "
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 115
        echo gettext("Name");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"name\" value=\"\" required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 123
        echo gettext("Email");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"email\" name=\"email\" value=\"";
        // line 125
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "email", [], "any", false, false, false, 125), "html", null, true);
        echo "\" required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 130
        echo gettext("Password");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"password\" name=\"password\" required=\"required\" />
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 137
        echo gettext("Signature");
        echo "</label>
                        <div class=\"formRight\">
                            <textarea name=\"signature\" cols=\"5\" rows=\"2\"></textarea>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 144
        echo gettext("Status");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"radio\" name=\"status\" value=\"inactive\" checked=\"checked\"/><label>";
        // line 146
        echo gettext("Inactive");
        echo "</label>
                            <input type=\"radio\" name=\"status\" value=\"active\"/><label>";
        // line 147
        echo gettext("Active");
        echo "</label>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <input type=\"submit\" value=\"";
        // line 152
        echo gettext("Create");
        echo "\" class=\"greyishBtn submitForm\" />
                </fieldset>
            </form>
        </div>
        
        <div class=\"fix\"></div>
        <div class=\"tab_content nopadding\" id=\"tab-groups\">

            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <td>";
        // line 163
        echo gettext("Name");
        echo "</td>
                        <td style=\"width: 13%\">&nbsp;</td>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 168
        $context["groups"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "staff_group_get_list", [0 => ["per_page" => 100, "page" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "page", [], "any", false, false, false, 168)]], "method", false, false, false, 168);
        // line 169
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["groups"] ?? null), "list", [], "any", false, false, false, 169));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["group"]) {
            // line 170
            echo "
                <tr>
                    <td>";
            // line 172
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "name", [], "any", false, false, false, 172), "html", null, true);
            echo "</td>
                    <td class=\"actions\">
                        <a class=\"bb-button btn14\" href=\"";
            // line 174
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/staff/group");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 174), "html", null, true);
            echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a>
                        <a class=\"bb-button btn14 bb-rm-tr api-link\" data-api-confirm=\"Are you sure?\" data-api-redirect=\"";
            // line 175
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("staff");
            echo "\" href=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/staff/group_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 175)]);
            echo "\"><img src=\"images/icons/dark/trash.png\" alt=\"\"></a>
                    </td>
                </tr>
                </tbody>

                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 181
            echo "                <tbody>
                    <tr>
                        <td colspan=\"5\">
                            ";
            // line 184
            echo gettext("The list is empty");
            // line 185
            echo "                        </td>
                    </tr>
                </tbody>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 189
        echo "            </table>

        </div>

        <div class=\"fix\"></div>
        <div class=\"tab_content nopadding\" id=\"tab-new-group\">
            <form method=\"post\" action=\"";
        // line 195
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/staff/group_create");
        echo "\" class=\"mainForm save api-form\" data-api-redirect=\"";
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("extension/settings/staff");
        echo "\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>";
        // line 198
        echo gettext("Name");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"name\" value=\"\" required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <input type=\"submit\" value=\"";
        // line 204
        echo gettext("Create group");
        echo "\" class=\"greyishBtn submitForm\" />
                </fieldset>
            </form>
        </div>

    </div>
</div>

";
    }

    // line 214
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 215
        echo "<script type=\"text/javascript\">
function onAfterStaffCreate(id) {
    bb.redirect(\"";
        // line 217
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("staff/manage");
        echo "/\" + id + '#tab-permissions');
}

\$(function() {
    \$('input[name=check_ip]').click(function(){
        if(\$(this).val() == 1) {
            \$('#check_ip').slideDown();
        } else {
            \$('#check_ip').slideUp();
        }
    });
});

</script>
";
    }

    public function getTemplateName()
    {
        return "mod_staff_settings.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  508 => 217,  504 => 215,  500 => 214,  487 => 204,  478 => 198,  470 => 195,  462 => 189,  453 => 185,  451 => 184,  446 => 181,  433 => 175,  427 => 174,  422 => 172,  418 => 170,  412 => 169,  410 => 168,  402 => 163,  388 => 152,  380 => 147,  376 => 146,  371 => 144,  361 => 137,  351 => 130,  343 => 125,  338 => 123,  327 => 115,  318 => 109,  313 => 107,  307 => 104,  295 => 95,  284 => 89,  279 => 87,  272 => 85,  260 => 80,  252 => 79,  247 => 77,  237 => 73,  235 => 72,  227 => 66,  218 => 62,  216 => 61,  211 => 58,  198 => 52,  192 => 51,  187 => 49,  179 => 48,  175 => 47,  171 => 46,  161 => 45,  158 => 44,  152 => 43,  150 => 42,  141 => 36,  137 => 35,  133 => 34,  129 => 33,  122 => 29,  112 => 22,  108 => 21,  104 => 20,  100 => 19,  96 => 18,  91 => 15,  87 => 14,  80 => 10,  74 => 9,  68 => 8,  65 => 7,  61 => 6,  54 => 3,  49 => 1,  47 => 4,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout_default.phtml\" %}
{% import \"macro_functions.phtml\" as mf %}
{% block meta_title %}{% trans 'Staff' %}{% endblock %}
{% set active_menu = 'system' %}

{% block breadcrumbs %}
<ul>
    <li class=\"firstB\"><a href=\"{{ '/'|alink }}\">{% trans 'Home' %}</a></li>
    <li><a href=\"{{ 'system'|alink }}\">{% trans 'Settings' %}</a></li>
    <li class=\"lastB\">{% trans 'Staff' %}</li>
</ul>
{% endblock %}

{% block content %}
<div class=\"widget simpleTabs\">

    <ul class=\"tabs\">
        <li><a href=\"#tab-staff\">{% trans 'Staff' %}</a></li>
        <li><a href=\"#tab-settings\">{% trans 'Settings' %}</a></li>
        <li><a href=\"#tab-new\">{% trans 'New staff member' %}</a></li>
        <li><a href=\"#tab-groups\">{% trans 'Manage groups' %}</a></li>
        <li><a href=\"#tab-new-group\">{% trans 'New group' %}</a></li>
    </ul>

    <div class=\"tabs_container\">
        <div class=\"fix\"></div>
        <div class=\"tab_content nopadding\" id=\"tab-staff\">
            
            {{ mf.table_search }}
            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <td colspan=\"2\">{% trans 'Name' %}</td>
                        <td>{% trans 'Email' %}</td>
                        <td>{% trans 'Group' %}</td>
                        <td>{% trans 'Status' %}</td>
                        <td style=\"width: 5%\">&nbsp;</td>
                    </tr>
                </thead>
                
                <tbody>
                {% set members = admin.staff_get_list({\"per_page\":100, \"page\":request.page}|merge(request)) %}
                {% for i, member in members.list %}
                <tr>
                    <td style=\"width: 5%\"><a href=\"{{ 'staff/manage'|alink }}/{{ member.id }}\"><img src=\"{{ member.email|gravatar }}?size=25\" alt=\"{{ member.id }}\" /></a></td>
                    <td>{{ member.name }}</td>
                    <td>{{ member.email }}</td>
                    <td><a href=\"{{ '/staff/group'|alink }}/{{member.group.id}}\">{{member.group.name}}</a></td>
                    <td>{{ mf.status_name(member.status) }}</td>
                    <td style=\"width: 13%\" class=\"actions\">
                        <a class=\"bb-button btn14\" href=\"{{ '/staff/manage'|alink }}/{{member.id}}\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a>
                        <a class=\"bb-button btn14 bb-rm-tr api-link\" data-api-confirm=\"Are you sure?\" data-api-redirect=\"{{ 'staff'|alink }}\" href=\"{{ 'api/admin/staff/delete'|link({'id' : member.id}) }}\"><img src=\"images/icons/dark/trash.png\" alt=\"\"></a>
                    </td>
                </tr>
                </tbody>

                {% else %}
                <tbody>
                    <tr>
                        <td colspan=\"5\">
                            {% trans 'The list is empty' %}
                        </td>
                    </tr>
                </tbody>
                {% endfor %}
            </table>

        </div>
        
        <div class=\"fix\"></div>
        <div class=\"tab_content nopadding\" id=\"tab-settings\">
            {% set params = admin.extension_config_get({\"ext\":\"mod_staff\"}) %}
            <form method=\"post\" action=\"{{ 'api/admin/extension/config_save'|link }}\" class=\"mainForm api-form\" data-api-msg=\"{% trans 'Configuration updated' %}\">

                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>{% trans 'Check login IP' %}</label>
                        <div class=\"formRight\">
                            <input type=\"radio\" name=\"check_ip\" value=\"1\" {% if params.check_ip == \"1\" %}checked=\"checked\"{% endif %}/><label>{% trans 'Yes' %}</label>
                            <input type=\"radio\" name=\"check_ip\" value=\"0\" {% if not params.check_ip %}checked=\"checked\"{% endif %}/><label>{% trans 'No' %}</label>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div id=\"check_ip\" {% if not params.check_ip %}style=\"display:none;\"{% endif %}>
                        <div class=\"rowElem\">
                            <label class=\"topLabel\">{% trans 'Allowed IPs. One per line' %}</label>
                            <div class=\"formBottom\">
                                <textarea name=\"allowed_ips\" cols=\"5\" rows=\"5\" placeholder=\"{{ admin.system_env({\"ip\":1}) }}\" />{{ params.allowed_ips }}</textarea>
                            </div>
                            <div class=\"fix\"></div>
                        </div>
                    </div>

                    <input type=\"submit\" value=\"{% trans 'Update' %}\" class=\"greyishBtn submitForm\" />
                    <input type=\"hidden\" name=\"ext\" value=\"mod_staff\" />
                </fieldset>
            </form>

        </div>
        
        <div class=\"fix\"></div>
        <div class=\"tab_content nopadding\" id=\"tab-new\">
            <form method=\"post\" action=\"{{ 'api/admin/staff/create'|link }}\" class=\"mainForm api-form\" data-api-jsonp=\"onAfterStaffCreate\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>{% trans 'Group' %}</label>
                        <div class=\"formRight\">
                            {{ mf.selectbox('admin_group_id', admin.staff_group_get_pairs, '', 1) }}
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>{% trans 'Name' %}</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"name\" value=\"\" required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>{% trans 'Email' %}</label>
                        <div class=\"formRight\">
                            <input type=\"email\" name=\"email\" value=\"{{ request.email }}\" required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>{% trans 'Password' %}</label>
                        <div class=\"formRight\">
                            <input type=\"password\" name=\"password\" required=\"required\" />
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>{% trans 'Signature' %}</label>
                        <div class=\"formRight\">
                            <textarea name=\"signature\" cols=\"5\" rows=\"2\"></textarea>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>{% trans 'Status' %}:</label>
                        <div class=\"formRight\">
                            <input type=\"radio\" name=\"status\" value=\"inactive\" checked=\"checked\"/><label>{% trans 'Inactive' %}</label>
                            <input type=\"radio\" name=\"status\" value=\"active\"/><label>{% trans 'Active' %}</label>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <input type=\"submit\" value=\"{% trans 'Create' %}\" class=\"greyishBtn submitForm\" />
                </fieldset>
            </form>
        </div>
        
        <div class=\"fix\"></div>
        <div class=\"tab_content nopadding\" id=\"tab-groups\">

            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <td>{% trans 'Name' %}</td>
                        <td style=\"width: 13%\">&nbsp;</td>
                    </tr>
                </thead>
                <tbody>
                {% set groups = admin.staff_group_get_list({\"per_page\":100, \"page\":request.page}) %}
                {% for i, group in groups.list %}

                <tr>
                    <td>{{ group.name }}</td>
                    <td class=\"actions\">
                        <a class=\"bb-button btn14\" href=\"{{ '/staff/group'|alink }}/{{group.id}}\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a>
                        <a class=\"bb-button btn14 bb-rm-tr api-link\" data-api-confirm=\"Are you sure?\" data-api-redirect=\"{{ 'staff'|alink }}\" href=\"{{ 'api/admin/staff/group_delete'|link({'id' : group.id}) }}\"><img src=\"images/icons/dark/trash.png\" alt=\"\"></a>
                    </td>
                </tr>
                </tbody>

                {% else %}
                <tbody>
                    <tr>
                        <td colspan=\"5\">
                            {% trans 'The list is empty' %}
                        </td>
                    </tr>
                </tbody>
                {% endfor %}
            </table>

        </div>

        <div class=\"fix\"></div>
        <div class=\"tab_content nopadding\" id=\"tab-new-group\">
            <form method=\"post\" action=\"{{ 'api/admin/staff/group_create'|link }}\" class=\"mainForm save api-form\" data-api-redirect=\"{{ 'extension/settings/staff'|alink }}\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>{% trans 'Name' %}</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"name\" value=\"\" required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <input type=\"submit\" value=\"{% trans 'Create group' %}\" class=\"greyishBtn submitForm\" />
                </fieldset>
            </form>
        </div>

    </div>
</div>

{% endblock %}

{% block js %}
<script type=\"text/javascript\">
function onAfterStaffCreate(id) {
    bb.redirect(\"{{ 'staff/manage'|alink }}/\" + id + '#tab-permissions');
}

\$(function() {
    \$('input[name=check_ip]').click(function(){
        if(\$(this).val() == 1) {
            \$('#check_ip').slideDown();
        } else {
            \$('#check_ip').slideUp();
        }
    });
});

</script>
{% endblock %}", "mod_staff_settings.phtml", "/home/lexcicxy/hostshibe.cf/bb-modules/Staff/html_admin/mod_staff_settings.phtml");
    }
}
