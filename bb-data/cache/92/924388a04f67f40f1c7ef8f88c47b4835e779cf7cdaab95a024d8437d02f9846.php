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

/* mod_massmailer_index.phtml */
class __TwigTemplate_dd4f6a9a17ad1eb592637ca4b9f66425db12b594f556bec4c065cd1a828b8d7d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'meta_title' => [$this, 'block_meta_title'],
            'content' => [$this, 'block_content'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.phtml") : ("layout_default.phtml")), "mod_massmailer_index.phtml", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.phtml", "mod_massmailer_index.phtml", 2)->unwrap();
        // line 4
        $context["active_menu"] = "system";
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Mass mailer";
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "<div class=\"widget simpleTabs\">

    <ul class=\"tabs\">
        <li><a href=\"#tab-index\">";
        // line 10
        echo gettext("Mass Mail Messages");
        echo "</a></li>
        <li><a href=\"#tab-new\">";
        // line 11
        echo gettext("Create new mass mail message");
        echo "</a></li>
        <li><a href=\"#tab-settings\">";
        // line 12
        echo gettext("Settings");
        echo "</a></li>
    </ul>

    <div class=\"tabs_container\">

        <div class=\"fix\"></div>
        <div class=\"tab_content nopadding\" id=\"tab-index\">

        ";
        // line 20
        echo twig_call_macro($macros["mf"], "macro_table_search", [], 20, $context, $this->getSourceContext());
        echo "
        <table class=\"tableStatic wide\">
            <thead>
                <tr>
                    <td style=\"width: 30%\">";
        // line 24
        echo gettext("Subject");
        echo "</td>
                    <td>";
        // line 25
        echo gettext("From");
        echo "</td>
                    <td>";
        // line 26
        echo gettext("Status");
        echo "</td>
                    <td style=\"width: 18%\">&nbsp;</td>
                </tr>
            </thead>

            <tbody>
            ";
        // line 32
        $context["msgs"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "massmailer_get_list", [0 => twig_array_merge(["per_page" => 30, "page" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "page", [], "any", false, false, false, 32)], ($context["request"] ?? null))], "method", false, false, false, 32);
        // line 33
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["msgs"] ?? null), "list", [], "any", false, false, false, 33));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["msg"]) {
            // line 34
            echo "            <tr>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["msg"], "subject", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["msg"], "from_name", [], "any", false, false, false, 36), "html", null, true);
            echo " <br/>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["msg"], "from_email", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_call_macro($macros["mf"], "macro_status_name", [twig_get_attribute($this->env, $this->source, $context["msg"], "status", [], "any", false, false, false, 37)], 37, $context, $this->getSourceContext());
            echo "</td>
                <td class=\"actions\">
                    <a class=\"bb-button btn14 api-link\" href=\"";
            // line 39
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/massmailer/copy", ["id" => twig_get_attribute($this->env, $this->source, $context["msg"], "id", [], "any", false, false, false, 39)]);
            echo "\" data-api-redirect=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("massmailer");
            echo "\" title=\"Copy\"><img src=\"images/icons/dark/baloons.png\" alt=\"\"></a>
                    <a class=\"bb-button btn14\" href=\"";
            // line 40
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/massmailer/message");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["msg"], "id", [], "any", false, false, false, 40), "html", null, true);
            echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a>
                    <a class=\"bb-button btn14 bb-rm-tr api-link\" data-api-confirm=\"Are you sure?\" href=\"";
            // line 41
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/massmailer/delete", ["id" => twig_get_attribute($this->env, $this->source, $context["msg"], "id", [], "any", false, false, false, 41)]);
            echo "\" data-api-redirect=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("massmailer");
            echo "\"><img src=\"images/icons/dark/trash.png\" alt=\"\"></a>
                </td>
            </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 45
            echo "            <tr>
                <td colspan=\"4\">
                    ";
            // line 47
            echo gettext("The list is empty");
            // line 48
            echo "                </td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "            </tbody>
        </table>
        ";
        // line 53
        $this->loadTemplate("partial_pagination.phtml", "mod_massmailer_index.phtml", 53)->display(twig_array_merge($context, ["list" => ($context["msgs"] ?? null), "url" => "massmailer"]));
        // line 54
        echo "        </div>

        <div class=\"tab_content nopadding\" id=\"tab-new\">

            <form method=\"post\" action=\"admin/massmailer/create\" class=\"mainForm api-form\" data-api-jsonp=\"onAfterCreateMM\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>";
        // line 61
        echo gettext("Subject");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"subject\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "subject", [], "any", false, false, false, 63), "html", null, true);
        echo "\" required=\"required\" placeholder=\"Message subject\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <input type=\"submit\" value=\"";
        // line 67
        echo gettext("Create");
        echo "\" class=\"greyishBtn submitForm\" />
                </fieldset>
            </form>
        </div>

        <div class=\"tab_content nopadding\" id=\"tab-settings\">
            <div class=\"help\">
                <h3>";
        // line 74
        echo gettext("Mass Mail Settings");
        echo "</h3>
            </div>
    
            ";
        // line 77
        $context["params"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "extension_config_get", [0 => ["ext" => "mod_massmailer"]], "method", false, false, false, 77);
        // line 78
        echo "
            <form method=\"post\" action=\"admin/extension/config_save\" class=\"mainForm api-form\" data-api-msg=\"";
        // line 79
        echo gettext("Configuration updated");
        echo "\">

                <fieldset>
                    <div class=\"rowElem noborder\">
                        <div class=\"moreFields\">
                            <ul>
                                <li class=\"sep txt\">Send</li>
                                <li style=\"width: 50px\"><input type=\"text\" name=\"limit\" value=\"";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "limit", [], "any", false, false, false, 86), "html", null, true);
        echo "\" placeholder=\"25\"></li>
                                <li class=\"sep txt\"> emails every </li>
                                <li style=\"width: 45px\"><input type=\"text\" name=\"interval\" value=\"";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "interval", [], "any", false, false, false, 88), "html", null, true);
        echo "\" placeholder=\"30\"/></li>
                                <li class=\"sep txt\">seconds until complete</li>
                            </ul>
                        </div> 
                        <div class=\"fix\"></div>
                    </div>
                    
                    <div class=\"rowElem\">
                        <label class=\"topLabel\">";
        // line 96
        echo gettext("Client ID to send test email while creating message");
        echo "</label>
                        <div class=\"formBottom\">
                            <input type=\"text\" value=\"";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "test_client_id", [], "any", false, false, false, 98), "html", null, true);
        echo "\" name=\"test_client_id\" placeholder=\"Test client ID\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    
                    <input type=\"submit\" value=\"";
        // line 103
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" />
                    <input type=\"hidden\" name=\"ext\" value=\"mod_massmailer\" />
                </fieldset>
                
            </form>
        </div>

    </div>
</div>

";
    }

    // line 115
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 116
        echo "<script type=\"text/javascript\">
function onAfterCreateMM(mid)
{
    bb.redirect(\"";
        // line 119
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("massmailer/message");
        echo "/\" + mid);
}
</script>
";
    }

    public function getTemplateName()
    {
        return "mod_massmailer_index.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 119,  280 => 116,  276 => 115,  261 => 103,  253 => 98,  248 => 96,  237 => 88,  232 => 86,  222 => 79,  219 => 78,  217 => 77,  211 => 74,  201 => 67,  194 => 63,  189 => 61,  180 => 54,  178 => 53,  174 => 51,  166 => 48,  164 => 47,  160 => 45,  149 => 41,  143 => 40,  137 => 39,  132 => 37,  126 => 36,  122 => 35,  119 => 34,  113 => 33,  111 => 32,  102 => 26,  98 => 25,  94 => 24,  87 => 20,  76 => 12,  72 => 11,  68 => 10,  63 => 7,  59 => 6,  52 => 3,  48 => 1,  46 => 4,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends request.ajax ? \"layout_blank.phtml\" : \"layout_default.phtml\" %}
{% import \"macro_functions.phtml\" as mf %}
{% block meta_title %}Mass mailer{% endblock %}
{% set active_menu = 'system' %}

{% block content %}
<div class=\"widget simpleTabs\">

    <ul class=\"tabs\">
        <li><a href=\"#tab-index\">{% trans 'Mass Mail Messages' %}</a></li>
        <li><a href=\"#tab-new\">{% trans 'Create new mass mail message' %}</a></li>
        <li><a href=\"#tab-settings\">{% trans 'Settings' %}</a></li>
    </ul>

    <div class=\"tabs_container\">

        <div class=\"fix\"></div>
        <div class=\"tab_content nopadding\" id=\"tab-index\">

        {{ mf.table_search }}
        <table class=\"tableStatic wide\">
            <thead>
                <tr>
                    <td style=\"width: 30%\">{% trans 'Subject' %}</td>
                    <td>{% trans 'From' %}</td>
                    <td>{% trans 'Status' %}</td>
                    <td style=\"width: 18%\">&nbsp;</td>
                </tr>
            </thead>

            <tbody>
            {% set msgs = admin.massmailer_get_list({\"per_page\":30, \"page\":request.page}|merge(request)) %}
            {% for i, msg in msgs.list %}
            <tr>
                <td>{{ msg.subject }}</td>
                <td>{{ msg.from_name }} <br/>{{ msg.from_email }}</td>
                <td>{{ mf.status_name(msg.status) }}</td>
                <td class=\"actions\">
                    <a class=\"bb-button btn14 api-link\" href=\"{{ 'api/admin/massmailer/copy'|link({'id' : msg.id}) }}\" data-api-redirect=\"{{ 'massmailer'|alink }}\" title=\"Copy\"><img src=\"images/icons/dark/baloons.png\" alt=\"\"></a>
                    <a class=\"bb-button btn14\" href=\"{{ '/massmailer/message'|alink }}/{{msg.id}}\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a>
                    <a class=\"bb-button btn14 bb-rm-tr api-link\" data-api-confirm=\"Are you sure?\" href=\"{{ 'api/admin/massmailer/delete'|link({'id' : msg.id}) }}\" data-api-redirect=\"{{ 'massmailer'|alink }}\"><img src=\"images/icons/dark/trash.png\" alt=\"\"></a>
                </td>
            </tr>
            {% else %}
            <tr>
                <td colspan=\"4\">
                    {% trans 'The list is empty' %}
                </td>
            </tr>
            {% endfor %}
            </tbody>
        </table>
        {% include \"partial_pagination.phtml\" with {'list': msgs, 'url':'massmailer'} %}
        </div>

        <div class=\"tab_content nopadding\" id=\"tab-new\">

            <form method=\"post\" action=\"admin/massmailer/create\" class=\"mainForm api-form\" data-api-jsonp=\"onAfterCreateMM\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>{% trans 'Subject' %}:</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"subject\" value=\"{{request.subject}}\" required=\"required\" placeholder=\"Message subject\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <input type=\"submit\" value=\"{% trans 'Create' %}\" class=\"greyishBtn submitForm\" />
                </fieldset>
            </form>
        </div>

        <div class=\"tab_content nopadding\" id=\"tab-settings\">
            <div class=\"help\">
                <h3>{% trans 'Mass Mail Settings' %}</h3>
            </div>
    
            {% set params = admin.extension_config_get({\"ext\":\"mod_massmailer\"}) %}

            <form method=\"post\" action=\"admin/extension/config_save\" class=\"mainForm api-form\" data-api-msg=\"{% trans 'Configuration updated' %}\">

                <fieldset>
                    <div class=\"rowElem noborder\">
                        <div class=\"moreFields\">
                            <ul>
                                <li class=\"sep txt\">Send</li>
                                <li style=\"width: 50px\"><input type=\"text\" name=\"limit\" value=\"{{ params.limit }}\" placeholder=\"25\"></li>
                                <li class=\"sep txt\"> emails every </li>
                                <li style=\"width: 45px\"><input type=\"text\" name=\"interval\" value=\"{{ params.interval }}\" placeholder=\"30\"/></li>
                                <li class=\"sep txt\">seconds until complete</li>
                            </ul>
                        </div> 
                        <div class=\"fix\"></div>
                    </div>
                    
                    <div class=\"rowElem\">
                        <label class=\"topLabel\">{% trans 'Client ID to send test email while creating message' %}</label>
                        <div class=\"formBottom\">
                            <input type=\"text\" value=\"{{ params.test_client_id }}\" name=\"test_client_id\" placeholder=\"Test client ID\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    
                    <input type=\"submit\" value=\"{% trans 'Update' %}\" class=\"greyishBtn submitForm\" />
                    <input type=\"hidden\" name=\"ext\" value=\"mod_massmailer\" />
                </fieldset>
                
            </form>
        </div>

    </div>
</div>

{% endblock %}

{% block js %}
<script type=\"text/javascript\">
function onAfterCreateMM(mid)
{
    bb.redirect(\"{{ 'massmailer/message'|alink }}/\" + mid);
}
</script>
{% endblock %}
", "mod_massmailer_index.phtml", "/home/lexcicxy/hostshibe.cf/bb-modules/Massmailer/html_admin/mod_massmailer_index.phtml");
    }
}
