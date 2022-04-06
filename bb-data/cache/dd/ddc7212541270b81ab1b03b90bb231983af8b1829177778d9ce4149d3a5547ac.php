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

/* mod_extension_languages.phtml */
class __TwigTemplate_6b30d610009d289b08e498b5219785fa45c216c29534ea5406a715a19b295c4a extends \Twig\Template
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
        // line 3
        $context["active_menu"] = "extensions";
        // line 1
        $this->parent = $this->loadTemplate("layout_default.phtml", "mod_extension_languages.phtml", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Client area languages";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div class=\"widget simpleTabs\">

    <ul class=\"tabs\">
        <li><a href=\"#tab-index\">";
        // line 9
        echo gettext("Client area languages");
        echo "</a></li>
        <li><a href=\"#tab-new\">";
        // line 10
        echo gettext("New language");
        echo "</a></li>
    </ul>

    <div class=\"tabs_container\">
        <div class=\"fix\"></div>
        <div class=\"tab_content nopadding\" id=\"tab-index\">
            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <td>";
        // line 19
        echo gettext("Language");
        echo "</td>
                        <td>";
        // line 20
        echo gettext("Code");
        echo "</td>
                    </tr>
                </thead>

                <tbody>
                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "extension_languages", [], "any", false, false, false, 25));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 26
            echo "                <tr>
                    <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lang"], "title", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                    <td style=\"width: 10%\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lang"], "locale", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                </tr>
                </tbody>

                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 33
            echo "                <tbody>
                    <tr>
                        <td colspan=\"2\">
                            ";
            // line 36
            echo gettext("The list is empty");
            // line 37
            echo "                        </td>
                    </tr>
                </tbody>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "            </table>
        </div>
        
        <div class=\"tab_content nopadding\" id=\"tab-new\">
            ";
        // line 45
        $this->loadTemplate("partial_extensions.phtml", "mod_extension_languages.phtml", 45)->display(twig_to_array(["type" => "translation", "header" => "List of translations on extensions site"]));
        // line 46
        echo "            <div class=\"body\">
                <h1 class=\"pt10\">";
        // line 47
        echo gettext("BoxBilling in your language");
        echo "</h1>
                <p>";
        // line 48
        echo gettext("Although BoxBilling displays in U.S. English by default, the software has the built-in capability to be used in any language. Follow instructions bellow to install new language.");
        echo "</p>
                
                <div class=\"pt20 list arrowGrey\">
                    <ul>
                        <li>";
        // line 52
        echo gettext("Check if your language translation file is available at");
        echo " <a href=\"https://www.transifex.com/projects/p/boxbilling/\" target=\"_blank\">";
        echo gettext("BoxBilling translations repository");
        echo "</a></li>
                        <li>";
        // line 53
        echo gettext("Download language files and place them to");
        echo " <strong>";
        echo twig_escape_filter($this->env, twig_constant("BB_PATH_LANGS"), "html", null, true);
        echo "</strong></li>
                        <li>";
        // line 54
        echo gettext("Language will be automatically available and can be changed in client area");
        echo "</li>
                        <li>";
        // line 55
        echo gettext("Read");
        echo " <a href=\"http://docs.boxbilling.com/en/latest/reference/language.html\" title=\"Installing BoxBilling in Your Language\" target=\"_blank\">";
        echo gettext("Installing BoxBilling in Your Language");
        echo "</a> ";
        echo gettext("to learn how to install files that will transform BoxBilling so it displays in your language.");
        echo "</li>
                        <li>";
        // line 56
        echo gettext("Translations can be made with");
        echo " <a href=\"http://www.poedit.net/\" target=\"_blank\">http://www.poedit.net/</a> ";
        echo gettext("software");
        echo "</li>
                    </ul>
                </div>

                <h5 class=\"pt20\">";
        // line 60
        echo gettext("Changing default language");
        echo "</h5>
                <p>";
        // line 61
        echo gettext("Default language can be set in");
        echo " <em>bb-config.php</em> parameter <strong>define('BB_LOCALE', 'en_US');</strong></p>

                <h5 class=\"pt20\">";
        // line 63
        echo gettext("Removing language");
        echo "</h5>
                <p>";
        // line 64
        echo gettext("Removing languages from BoxBilling is really simple. Just delete language folder you wish from");
        echo " <strong>";
        echo twig_escape_filter($this->env, twig_constant("BB_PATH_LANGS"), "html", null, true);
        echo "</strong></p>
            </div>
        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "mod_extension_languages.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 64,  196 => 63,  191 => 61,  187 => 60,  178 => 56,  170 => 55,  166 => 54,  160 => 53,  154 => 52,  147 => 48,  143 => 47,  140 => 46,  138 => 45,  132 => 41,  123 => 37,  121 => 36,  116 => 33,  106 => 28,  102 => 27,  99 => 26,  94 => 25,  86 => 20,  82 => 19,  70 => 10,  66 => 9,  61 => 6,  57 => 5,  50 => 2,  45 => 1,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout_default.phtml\" %}
{% block meta_title %}Client area languages{% endblock %}
{% set active_menu = 'extensions' %}

{% block content %}
<div class=\"widget simpleTabs\">

    <ul class=\"tabs\">
        <li><a href=\"#tab-index\">{% trans 'Client area languages' %}</a></li>
        <li><a href=\"#tab-new\">{% trans 'New language' %}</a></li>
    </ul>

    <div class=\"tabs_container\">
        <div class=\"fix\"></div>
        <div class=\"tab_content nopadding\" id=\"tab-index\">
            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <td>{% trans 'Language' %}</td>
                        <td>{% trans 'Code' %}</td>
                    </tr>
                </thead>

                <tbody>
                {% for lang in admin.extension_languages %}
                <tr>
                    <td>{{ lang.title }}</td>
                    <td style=\"width: 10%\">{{ lang.locale }}</td>
                </tr>
                </tbody>

                {% else %}
                <tbody>
                    <tr>
                        <td colspan=\"2\">
                            {% trans 'The list is empty' %}
                        </td>
                    </tr>
                </tbody>
                {% endfor %}
            </table>
        </div>
        
        <div class=\"tab_content nopadding\" id=\"tab-new\">
            {% include \"partial_extensions.phtml\" with {'type': 'translation', 'header':\"List of translations on extensions site\"} only %}
            <div class=\"body\">
                <h1 class=\"pt10\">{% trans 'BoxBilling in your language' %}</h1>
                <p>{% trans %}Although BoxBilling displays in U.S. English by default, the software has the built-in capability to be used in any language. Follow instructions bellow to install new language.{% endtrans %}</p>
                
                <div class=\"pt20 list arrowGrey\">
                    <ul>
                        <li>{% trans %}Check if your language translation file is available at{% endtrans %} <a href=\"https://www.transifex.com/projects/p/boxbilling/\" target=\"_blank\">{% trans %}BoxBilling translations repository{% endtrans %}</a></li>
                        <li>{% trans %}Download language files and place them to{% endtrans %} <strong>{{ constant('BB_PATH_LANGS') }}</strong></li>
                        <li>{% trans %}Language will be automatically available and can be changed in client area{% endtrans %}</li>
                        <li>{% trans %}Read{% endtrans %} <a href=\"http://docs.boxbilling.com/en/latest/reference/language.html\" title=\"Installing BoxBilling in Your Language\" target=\"_blank\">{% trans %}Installing BoxBilling in Your Language{% endtrans %}</a> {% trans %}to learn how to install files that will transform BoxBilling so it displays in your language.{% endtrans %}</li>
                        <li>{% trans %}Translations can be made with{% endtrans %} <a href=\"http://www.poedit.net/\" target=\"_blank\">http://www.poedit.net/</a> {% trans %}software{% endtrans %}</li>
                    </ul>
                </div>

                <h5 class=\"pt20\">{% trans 'Changing default language' %}</h5>
                <p>{% trans %}Default language can be set in{% endtrans %} <em>bb-config.php</em> parameter <strong>define('BB_LOCALE', 'en_US');</strong></p>

                <h5 class=\"pt20\">{% trans 'Removing language' %}</h5>
                <p>{% trans %}Removing languages from BoxBilling is really simple. Just delete language folder you wish from{% endtrans %} <strong>{{ constant('BB_PATH_LANGS') }}</strong></p>
            </div>
        </div>
    </div>
</div>

{% endblock %}
", "mod_extension_languages.phtml", "/home/lexcicxy/hostshibe.cf/bb-themes/admin_default/html/mod_extension_languages.phtml");
    }
}
