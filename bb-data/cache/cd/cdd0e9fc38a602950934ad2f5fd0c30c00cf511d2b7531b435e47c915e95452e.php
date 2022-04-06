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

/* mod_extension_index.phtml */
class __TwigTemplate_954e087659b1498d8fd57b070a440d670a6a99a77b71e251c4d0a62cec47c84f extends \Twig\Template
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
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.phtml") : ("layout_default.phtml")), "mod_extension_index.phtml", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.phtml", "mod_extension_index.phtml", 2)->unwrap();
        // line 4
        $context["active_menu"] = "extensions";
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo gettext("Extensions");
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
        echo gettext("Extensions");
        echo "</a></li>
        <li><a href=\"#tab-core\">";
        // line 11
        echo gettext("Update BoxBilling");
        echo "</a></li>
        <li><a href=\"#tab-about\">";
        // line 12
        echo gettext("Learn more about extensions");
        echo "</a></li>
        <li><a href=\"#tab-hooks\">";
        // line 13
        echo gettext("Hooks");
        echo "</a></li>
    </ul>

    <div class=\"tabs_container\">

        <div class=\"fix\"></div>
        <div class=\"tab_content nopadding\" id=\"tab-index\">
            <div class=\"help\">
                <h5>BoxBilling extensions</h5>
                <p>";
        // line 22
        echo gettext("Activate or deactivate extensions");
        echo "</p>
            </div>
            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <td width=\"3%\">&nbsp;</td>
                        <td width=\"20%\">";
        // line 28
        echo gettext("Extension");
        echo "</td>
                        <td>";
        // line 29
        echo gettext("Description");
        echo "</td>
                        <td style=\"width: 21%;\">";
        // line 30
        echo gettext("Actions");
        echo "</td>
                    </tr>
                </thead>

                <tbody>
                ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "extension_get_list", [], "any", false, false, false, 35));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["ext"]) {
            // line 36
            echo "                <tr>
                    <td><img src=\"";
            // line 37
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["ext"], "icon_url", [], "any", true, true, false, 37)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["ext"], "icon_url", [], "any", false, false, false, 37), "images/icons/middlenav/cog.png")) : ("images/icons/middlenav/cog.png")), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ext"], "name", [], "any", false, false, false, 37), "html", null, true);
            echo "\" style=\"width: 32px; height: 32px;\"/></td>
                    <td><strong>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ext"], "name", [], "any", false, false, false, 38), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ext"], "version", [], "any", false, false, false, 38), "html", null, true);
            echo "<br />by <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ext"], "author_url", [], "any", false, false, false, 38), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ext"], "author", [], "any", false, false, false, 38), "html", null, true);
            echo "</a></td>
                    <td>
                        ";
            // line 40
            echo twig_bbmd_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ext"], "description", [], "any", false, false, false, 40));
            echo "
                        <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ext"], "project_url", [], "any", false, false, false, 41), "html", null, true);
            echo "\" target=\"_blank\" title=\"Project details\">Learn more</a>
                    </td>
                    <td>
                        ";
            // line 44
            if ((twig_get_attribute($this->env, $this->source, $context["ext"], "type", [], "any", false, false, false, 44) == "mod")) {
                // line 45
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["ext"], "status", [], "any", false, false, false, 45) == "installed")) {
                    // line 46
                    echo "                            <a class=\"api-link bb-button btn14\" href=\"";
                    echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/extension/deactivate", ["type" => twig_get_attribute($this->env, $this->source, $context["ext"], "type", [], "any", false, false, false, 46), "id" => twig_get_attribute($this->env, $this->source, $context["ext"], "id", [], "any", false, false, false, 46)]);
                    echo "\" data-api-confirm=\"Are you sure?\" data-api-reload=\"Module was deactivated\" title=\"";
                    echo gettext("Deactivate");
                    echo "\"><img src=\"images/icons/dark/close.png\" alt=\"\" class=\"icon\"></a>
                            ";
                } else {
                    // line 48
                    echo "                            <a class=\"btnIconLeft mr10 api-link\" href=\"";
                    echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/extension/activate", ["type" => twig_get_attribute($this->env, $this->source, $context["ext"], "type", [], "any", false, false, false, 48), "id" => twig_get_attribute($this->env, $this->source, $context["ext"], "id", [], "any", false, false, false, 48)]);
                    echo "\" data-api-confirm=\"Are you sure?\" data-api-jsonp=\"onAfterModuleActivated\"><img src=\"images/icons/dark/cog.png\" alt=\"\" class=\"icon\"><span>Activate</span></a>
                            ";
                }
                // line 50
                echo "                        ";
            } else {
                // line 51
                echo "                        &nbsp;
                        ";
            }
            // line 53
            echo "
                        ";
            // line 54
            if (twig_get_attribute($this->env, $this->source, $context["ext"], "has_settings", [], "any", false, false, false, 54)) {
                // line 55
                echo "                            <a class=\"bb-button btn14\" href=\"";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("extension/settings");
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ext"], "id", [], "any", false, false, false, 55), "html", null, true);
                echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\" class=\"icon\" title=\"";
                echo gettext("Module settings");
                echo "\"></a>
                        ";
            }
            // line 57
            echo "                    </td>
                </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 60
            echo "                    <tr>
                        <td colspan=\"4\">
                            ";
            // line 62
            echo gettext("The list is empty");
            // line 63
            echo "                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ext'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                </tbody>
                <tfoot>
                    <tr>
                        <td colspan=\"4\"></td>
                    </tr>
                </tfoot>
            </table>

            <div class=\"help\">
                <h5>BoxBilling modules on extension site</h5>
            </div>
            ";
        // line 77
        $this->loadTemplate("partial_extensions.phtml", "mod_extension_index.phtml", 77)->display($context);
        // line 78
        echo "        </div>

        <div class=\"tab_content nopadding\" id=\"tab-hooks\">
            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <td>";
        // line 84
        echo gettext("Extension");
        echo "</td>
                        <td>";
        // line 85
        echo gettext("Hook");
        echo "</td>
                    </tr>
                </thead>

                <tbody>
                ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hook_get_list", [0 => ["per_page" => 90]], "method", false, false, false, 90), "list", [], "any", false, false, false, 90));
        foreach ($context['_seq'] as $context["_key"] => $context["hook"]) {
            // line 91
            echo "                <tr>
                    <td>
                        ";
            // line 93
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hook"], "rel_id", [], "any", false, false, false, 93)), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hook"], "event", [], "any", false, false, false, 96), "html", null, true);
            echo "
                    </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hook'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "                </tbody>
            </table>
        </div>
            
        <div class=\"tab_content nopadding\" id=\"tab-core\">
            <div class=\"help\">
                <h3>";
        // line 106
        echo gettext("Automatic update");
        echo "</h3>
                <p>";
        // line 107
        echo gettext("Automatic updater is a tool to update BoxBilling to latest version in one click. Works on these hosting environments where PHP has permissions to overwrite files uploaded via FTP.");
        echo "</p>
            </div>

            <div class=\"body\">
                <a href=\"";
        // line 111
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/extension/update_core");
        echo "\" title=\"\" class=\"btnIconLeft mr10 mt5 api-link\" data-api-confirm=\"Make sure that you have made database and files backups before proceeding with automatic update. Click OK when you are ready to continue.\" data-api-msg=\"Update complete\"><img src=\"images/icons/dark/cog.png\" alt=\"\" class=\"icon\"><span>Update BoxBilling</span></a>
            </div>

            <div class=\"help\">
                <h3>";
        // line 115
        echo gettext("Manual update");
        echo "</h3>
                <p>";
        // line 116
        echo gettext("Manual update is a solution when auto updater can not work on current installation environment");
        echo "</p>
            </div>

            <div class=\"body list arrowGreen\">
                <ul>
                    <li>Download latest BoxBilling from <a href=\"https://github.com/boxbilling/boxbilling/releases\" target=\"_blank\">Our Github</a></li>
                    <li>Extract files at your computer</li>
                    <li>Upload (overwrite) extracted files via FTP to <strong>";
        // line 123
        echo twig_escape_filter($this->env, twig_constant("BB_PATH_ROOT"), "html", null, true);
        echo "</strong></li>
                    <li>When upload is complete, execute <a href=\"";
        // line 124
        echo twig_escape_filter($this->env, twig_constant("BB_URL"), "html", null, true);
        echo "bb-update.php\" target=\"_blank\">";
        echo twig_escape_filter($this->env, twig_constant("BB_URL"), "html", null, true);
        echo "bb-update.php</a> in your browser</li>
                    <li>Your BoxBilling is now updated to latest version.</li>
                </ul>
            </div>
        </div>
        
        <div class=\"tab_content nopadding\" id=\"tab-about\">
            <div class=\"help\">
                <h3>";
        // line 132
        echo gettext("Extending BoxBilling");
        echo "</h3>
                <p>";
        // line 133
        echo gettext("BoxBilling gives developers all the capabilities to customize, integrate & extend the core system into your own website & applications.");
        echo "</p>
            </div>
            <div class=\"body\">
                <h2 class=\"pt20\">More extensions</h2>
                <p>If you can not find extensions you are looking for in this admin area, please visit extensions site at <a href=\"http://extensions.boxbilling.com\" target=\"_blank\">http://extensions.boxbilling.com</a></p>

                <h2 class=\"pt20\">How to create new extension</h2>
                <div class=\"pt20 list arrowGrey\">
                    <ul>
                        <li>Create free account at <a href=\"https://github.com/signup/free\" target=\"_blank\">Github</a></li>
                        <li>Create new public repository dedicated for extension only</li>
                        <li>Repository must have plugin json file. <a href=\"http://extensions.boxbilling.com/article/getting-started\" target=\"_blank\">More information</a></li>
                        <li>Login to <a href=\"http://extensions.boxbilling.com/\" target=\"_blank\">BoxBilling extensions site</a> with github account.</li>
                        <li>If your repository contains valid json file, it can be registered in extensions site.</li>
                        <li>Registered extensions can be visible in every BoxBilling admin area.</li>
                    </ul>
                </div>

                <h2 class=\"pt20\">Supported extension types</h2>
                <div class=\"pt20 list arrowGrey\">
                    <ul>
                        <li>Payment gateways</li>
                        <li>Server managers</li>
                        <li>Domain registrars</li>
                        <li>Client area themes</li>
                        <li>Admin area themes</li>
                        <li>Translations for client and admin areas</li>
                        <li>Event hooks - Hooks can be injected into the process, change its behaviour, stop executing actions</li>
                        <li>API module - External program which uses BoxBilling API</li>
                    </ul>
                </div>

                <h2 class=\"pt20\">Extension support</h2>
                <p>Contact extensions developers directly for support. You can find issue tracker on extension site.</p>
            </div>
        </div>
    </div>
</div>

";
    }

    // line 174
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 175
        echo "<script type=\"text/javascript\">
    function onAfterUpdate(result) {
    
    }

    function onAfterModuleActivated(result) {
        if(result.redirect && result.type == 'mod') {
            bb.redirect(\"";
        // line 182
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("");
        echo "/\" + result.id);
        } else if(result.has_settings) {
            bb.redirect(\"";
        // line 184
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("extension/settings");
        echo "/\"+result.id);
        } else {
            bb.reload();
        }
    }
</script>
";
    }

    public function getTemplateName()
    {
        return "mod_extension_index.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  396 => 184,  391 => 182,  382 => 175,  378 => 174,  334 => 133,  330 => 132,  317 => 124,  313 => 123,  303 => 116,  299 => 115,  292 => 111,  285 => 107,  281 => 106,  273 => 100,  263 => 96,  257 => 93,  253 => 91,  249 => 90,  241 => 85,  237 => 84,  229 => 78,  227 => 77,  214 => 66,  206 => 63,  204 => 62,  200 => 60,  193 => 57,  183 => 55,  181 => 54,  178 => 53,  174 => 51,  171 => 50,  165 => 48,  157 => 46,  154 => 45,  152 => 44,  146 => 41,  142 => 40,  131 => 38,  125 => 37,  122 => 36,  117 => 35,  109 => 30,  105 => 29,  101 => 28,  92 => 22,  80 => 13,  76 => 12,  72 => 11,  68 => 10,  63 => 7,  59 => 6,  52 => 3,  48 => 1,  46 => 4,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends request.ajax ? \"layout_blank.phtml\" : \"layout_default.phtml\" %}
{% import \"macro_functions.phtml\" as mf %}
{% block meta_title %}{% trans 'Extensions' %}{% endblock %}
{% set active_menu = 'extensions' %}

{% block content %}
<div class=\"widget simpleTabs\">

    <ul class=\"tabs\">
        <li><a href=\"#tab-index\">{% trans 'Extensions' %}</a></li>
        <li><a href=\"#tab-core\">{% trans 'Update BoxBilling' %}</a></li>
        <li><a href=\"#tab-about\">{% trans 'Learn more about extensions' %}</a></li>
        <li><a href=\"#tab-hooks\">{% trans 'Hooks' %}</a></li>
    </ul>

    <div class=\"tabs_container\">

        <div class=\"fix\"></div>
        <div class=\"tab_content nopadding\" id=\"tab-index\">
            <div class=\"help\">
                <h5>BoxBilling extensions</h5>
                <p>{% trans %}Activate or deactivate extensions{% endtrans %}</p>
            </div>
            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <td width=\"3%\">&nbsp;</td>
                        <td width=\"20%\">{% trans 'Extension' %}</td>
                        <td>{% trans 'Description' %}</td>
                        <td style=\"width: 21%;\">{% trans 'Actions' %}</td>
                    </tr>
                </thead>

                <tbody>
                {% for ext in admin.extension_get_list %}
                <tr>
                    <td><img src=\"{{ ext.icon_url|default('images/icons/middlenav/cog.png') }}\" alt=\"{{ext.name}}\" style=\"width: 32px; height: 32px;\"/></td>
                    <td><strong>{{ ext.name }}</strong> {{ ext.version }}<br />by <a href=\"{{ ext.author_url }}\" target=\"_blank\">{{ ext.author }}</a></td>
                    <td>
                        {{ ext.description|bbmd }}
                        <a href=\"{{ ext.project_url }}\" target=\"_blank\" title=\"Project details\">Learn more</a>
                    </td>
                    <td>
                        {% if ext.type == 'mod' %}
                            {% if ext.status == 'installed' %}
                            <a class=\"api-link bb-button btn14\" href=\"{{ 'api/admin/extension/deactivate' |link({'type' : ext.type, 'id' : ext.id}) }}\" data-api-confirm=\"Are you sure?\" data-api-reload=\"Module was deactivated\" title=\"{% trans 'Deactivate' %}\"><img src=\"images/icons/dark/close.png\" alt=\"\" class=\"icon\"></a>
                            {% else %}
                            <a class=\"btnIconLeft mr10 api-link\" href=\"{{ 'api/admin/extension/activate' |link({'type' : ext.type, 'id' : ext.id}) }}\" data-api-confirm=\"Are you sure?\" data-api-jsonp=\"onAfterModuleActivated\"><img src=\"images/icons/dark/cog.png\" alt=\"\" class=\"icon\"><span>Activate</span></a>
                            {% endif %}
                        {% else %}
                        &nbsp;
                        {% endif %}

                        {% if ext.has_settings %}
                            <a class=\"bb-button btn14\" href=\"{{ 'extension/settings'|alink }}/{{ext.id}}\"><img src=\"images/icons/dark/pencil.png\" alt=\"\" class=\"icon\" title=\"{% trans 'Module settings' %}\"></a>
                        {% endif %}
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
                <tfoot>
                    <tr>
                        <td colspan=\"4\"></td>
                    </tr>
                </tfoot>
            </table>

            <div class=\"help\">
                <h5>BoxBilling modules on extension site</h5>
            </div>
            {% include \"partial_extensions.phtml\" %}
        </div>

        <div class=\"tab_content nopadding\" id=\"tab-hooks\">
            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <td>{% trans 'Extension' %}</td>
                        <td>{% trans 'Hook' %}</td>
                    </tr>
                </thead>

                <tbody>
                {% for hook in admin.hook_get_list({\"per_page\":90}).list %}
                <tr>
                    <td>
                        {{ hook.rel_id | capitalize}}
                    </td>
                    <td>
                        {{ hook.event }}
                    </td>
                </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
            
        <div class=\"tab_content nopadding\" id=\"tab-core\">
            <div class=\"help\">
                <h3>{% trans 'Automatic update' %}</h3>
                <p>{% trans %}Automatic updater is a tool to update BoxBilling to latest version in one click. Works on these hosting environments where PHP has permissions to overwrite files uploaded via FTP.{% endtrans %}</p>
            </div>

            <div class=\"body\">
                <a href=\"{{ 'api/admin/extension/update_core'|link }}\" title=\"\" class=\"btnIconLeft mr10 mt5 api-link\" data-api-confirm=\"Make sure that you have made database and files backups before proceeding with automatic update. Click OK when you are ready to continue.\" data-api-msg=\"Update complete\"><img src=\"images/icons/dark/cog.png\" alt=\"\" class=\"icon\"><span>Update BoxBilling</span></a>
            </div>

            <div class=\"help\">
                <h3>{% trans %}Manual update{% endtrans %}</h3>
                <p>{% trans %}Manual update is a solution when auto updater can not work on current installation environment{% endtrans %}</p>
            </div>

            <div class=\"body list arrowGreen\">
                <ul>
                    <li>Download latest BoxBilling from <a href=\"https://github.com/boxbilling/boxbilling/releases\" target=\"_blank\">Our Github</a></li>
                    <li>Extract files at your computer</li>
                    <li>Upload (overwrite) extracted files via FTP to <strong>{{ constant('BB_PATH_ROOT') }}</strong></li>
                    <li>When upload is complete, execute <a href=\"{{constant('BB_URL')}}bb-update.php\" target=\"_blank\">{{constant('BB_URL')}}bb-update.php</a> in your browser</li>
                    <li>Your BoxBilling is now updated to latest version.</li>
                </ul>
            </div>
        </div>
        
        <div class=\"tab_content nopadding\" id=\"tab-about\">
            <div class=\"help\">
                <h3>{% trans 'Extending BoxBilling' %}</h3>
                <p>{% trans %}BoxBilling gives developers all the capabilities to customize, integrate & extend the core system into your own website & applications.{% endtrans %}</p>
            </div>
            <div class=\"body\">
                <h2 class=\"pt20\">More extensions</h2>
                <p>If you can not find extensions you are looking for in this admin area, please visit extensions site at <a href=\"http://extensions.boxbilling.com\" target=\"_blank\">http://extensions.boxbilling.com</a></p>

                <h2 class=\"pt20\">How to create new extension</h2>
                <div class=\"pt20 list arrowGrey\">
                    <ul>
                        <li>Create free account at <a href=\"https://github.com/signup/free\" target=\"_blank\">Github</a></li>
                        <li>Create new public repository dedicated for extension only</li>
                        <li>Repository must have plugin json file. <a href=\"http://extensions.boxbilling.com/article/getting-started\" target=\"_blank\">More information</a></li>
                        <li>Login to <a href=\"http://extensions.boxbilling.com/\" target=\"_blank\">BoxBilling extensions site</a> with github account.</li>
                        <li>If your repository contains valid json file, it can be registered in extensions site.</li>
                        <li>Registered extensions can be visible in every BoxBilling admin area.</li>
                    </ul>
                </div>

                <h2 class=\"pt20\">Supported extension types</h2>
                <div class=\"pt20 list arrowGrey\">
                    <ul>
                        <li>Payment gateways</li>
                        <li>Server managers</li>
                        <li>Domain registrars</li>
                        <li>Client area themes</li>
                        <li>Admin area themes</li>
                        <li>Translations for client and admin areas</li>
                        <li>Event hooks - Hooks can be injected into the process, change its behaviour, stop executing actions</li>
                        <li>API module - External program which uses BoxBilling API</li>
                    </ul>
                </div>

                <h2 class=\"pt20\">Extension support</h2>
                <p>Contact extensions developers directly for support. You can find issue tracker on extension site.</p>
            </div>
        </div>
    </div>
</div>

{% endblock %}

{% block js %}
<script type=\"text/javascript\">
    function onAfterUpdate(result) {
    
    }

    function onAfterModuleActivated(result) {
        if(result.redirect && result.type == 'mod') {
            bb.redirect(\"{{ '' | alink}}/\" + result.id);
        } else if(result.has_settings) {
            bb.redirect(\"{{ 'extension/settings'|alink }}/\"+result.id);
        } else {
            bb.reload();
        }
    }
</script>
{% endblock %}
", "mod_extension_index.phtml", "/home/lexcicxy/hostshibe.cf/bb-themes/admin_default/html/mod_extension_index.phtml");
    }
}
