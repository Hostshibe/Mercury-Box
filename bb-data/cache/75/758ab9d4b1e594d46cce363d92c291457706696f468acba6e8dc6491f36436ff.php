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

/* mod_currency_settings.phtml */
class __TwigTemplate_5e0ac5e6f1fd08135aef9c391c889571fada66890cfaa3c033ed2e2b316ff14d extends \Twig\Template
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
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.phtml") : ("layout_default.phtml")), "mod_currency_settings.phtml", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.phtml", "mod_currency_settings.phtml", 2)->unwrap();
        // line 3
        $context["active_menu"] = "system";
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo gettext("Currency settings");
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
        echo gettext("Currency settings");
        echo "</li>
</ul>
";
    }

    // line 15
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "
<div class=\"widget simpleTabs\">

    <ul class=\"tabs\">
        <li><a href=\"#tab-currencies\">";
        // line 20
        echo gettext("Currencies");
        echo "</a></li>
        <li><a href=\"#tab-new-currency\">";
        // line 21
        echo gettext("Add new currency");
        echo "</a></li>
        <li><a href=\"#tab-api-settings\">";
        // line 22
        echo gettext("Settings");
        echo "</a></li>
        <li><a href=\"#tab-converter\">";
        // line 23
        echo gettext("Converter");
        echo "</a></li>
    </ul>

    <div class=\"tabs_container\">
        <div class=\"fix\"></div>
        <div class=\"tab_content nopadding\" id=\"tab-currencies\">

            <div class=\"help\">
                <h3>";
        // line 31
        echo gettext("Manage currencies");
        echo "</h3>
                <p>";
        // line 32
        echo gettext("Default currency is the one you manage all your prices in admin area. If your client in client area chooses other than default currency, prices will be recalculated according to conversion rate. You can have only one default currency. You can not add same currency once again. Changing default currency is not recommended when active orders are available. Nothing is recalculated on default currency change. Your income is calculated in default currency. Changing default currency after you have paid invoices will distort income statistics. Currency rates are taken from European Central Bank and currencylayer.");
        echo "</p>
            </div>

            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <th>";
        // line 38
        echo gettext("ISO code");
        echo "</th>
                        <th>";
        // line 39
        echo gettext("Title");
        echo "</th>
                        <th>";
        // line 40
        echo gettext("Conversion rate");
        echo "</th>
                        <th>";
        // line 41
        echo gettext("Example price");
        echo "</th>
                        <th style=\"width:17%\">&nbsp;</th>
                    </tr>
                </thead>

                <tbody>
                ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "currency_get_list", [], "any", false, false, false, 47), "list", [], "any", false, false, false, 47));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 48
            echo "                  <tr>
                      <td>";
            // line 49
            if (twig_get_attribute($this->env, $this->source, $context["currency"], "default", [], "any", false, false, false, 49)) {
                echo "<strong>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 49), "html", null, true);
                echo "</strong>";
            } else {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 49), "html", null, true);
            }
            echo "</td>
                      <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                      <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["currency"], "conversion_rate", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
                      <td>";
            // line 52
            echo twig_call_macro($macros["mf"], "macro_currency_format", [1], 52, $context, $this->getSourceContext());
            echo " = ";
            echo twig_call_macro($macros["mf"], "macro_currency", [1, twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 52)], 52, $context, $this->getSourceContext());
            echo "</td>
                      <td class=\"actions\">
                          <a class=\"bb-button btn14\" href=\"";
            // line 54
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/currency/manage");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 54), "html", null, true);
            echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a>
                          <a class=\"bb-button btn14 bb-rm-tr api-link\" data-api-redirect=\"";
            // line 55
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("extension/settings/currency");
            echo "\" data-api-confirm=\"Are you sure?\" href=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/currency/delete", ["code" => twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 55)]);
            echo "\"><img src=\"images/icons/dark/trash.png\" alt=\"\"></a>
                          ";
            // line 56
            if ( !twig_get_attribute($this->env, $this->source, $context["currency"], "default", [], "any", false, false, false, 56)) {
                // line 57
                echo "                          <a class=\"bb-button btn14 api-link\" data-api-redirect=\"";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("extension/settings/currency");
                echo "\" href=\"";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/currency/set_default", ["code" => twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 57)]);
                echo "\" title=\"Set as default\" class=\"rightDir\"><img src=\"images/icons/dark/star.png\" alt=\"\"></a>
                          ";
            }
            // line 59
            echo "                      </td>
                  </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 62
            echo "                  <tr>
                      <td colspan=\"5\">
                          ";
            // line 64
            echo gettext("The list is empty");
            // line 65
            echo "                      </td>
                  </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                </tbody>

                <tfoot>
                    <tr>
                        <td colspan=\"5\">
                            <div class=\"aligncenter\">
                                <a href=\"";
        // line 74
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/currency/update_rates");
        echo "\" data-api-redirect=\"";
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("extension/settings/currency");
        echo "\" class=\"btn55 mr10 api-link\"><img src=\"images/icons/middlenav/refresh4.png\" alt=\"\"><span>";
        echo gettext("Update Rates");
        echo "</span></a>
                            </div>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>

        <div class=\"tab_content nopadding\" id=\"tab-new-currency\">

            <form method=\"post\" action=\"";
        // line 84
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/currency/create");
        echo "\" class=\"mainForm save api-form\" data-api-redirect=\"";
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("extension/settings/currency");
        echo "\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>";
        // line 87
        echo gettext("Code");
        echo ":</label>
                        <div class=\"formRight\">
                            ";
        // line 89
        echo twig_call_macro($macros["mf"], "macro_selectbox", ["code", twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "currency_get_pairs", [], "any", false, false, false, 89), "USD", 1], 89, $context, $this->getSourceContext());
        echo "
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 94
        echo gettext("Title");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"title\" value=\"\" required=\"required\">
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 101
        echo gettext("Conversion rate");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"conversion_rate\" value=\"1\" required=\"required\">
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 108
        echo gettext("Format");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"format\" value=\"\$ ";
        // line 110
        echo "{{price}}";
        echo "\" required=\"required\">
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <input type=\"submit\" value=\"";
        // line 115
        echo gettext("Add");
        echo "\" class=\"greyishBtn submitForm\" />
                </fieldset>
            </form>


        </div>
        
        <div class=\"tab_content nopadding\" id=\"tab-api-settings\">
            <div class=\"help\">
                <h3>";
        // line 124
        echo gettext("Adjust settings for currency rate updater");
        echo "</h3>
                <p>BoxBilling uses data grabbed from <a href=\"https://www.ecb.europa.eu/home/html/index.en.html\">European Central Bank</a> for conversions from Euro to other currencies, and <a href=\"https://currencylayer.com/\">currencylayer</a> for conversations from US Dollar to other currencies.<br />If you choose Euro as your default currency, data from European Central Bank will be used, if you choose US Dollar, data from currencylayer will be used.<br />While European Central Bank decided to keep it's API free to everyone, you won't need an autorization key to use ECB's data. However, you'll need an API key to use currencylayer.<br />You can <a href=\"https://currencylayer.com/product\">grab your API key</a> from currencylayer's website. BoxBilling doesn't make any profits from your purchases on currencylayer.com</p>
                <p><b>BoxBilling does not take any responsibilities for data grabbed from 3rd party sources, including European Central Bank and currencylayer.</b></p>
            </div>
            <form method=\"post\" action=\"";
        // line 128
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/currency/update_rate_settings");
        echo "\" class=\"mainForm save api-form\" data-api-msg=\"Successfully updated settings\">
            <fieldset>
                <div class=\"rowElem noborder\">
                    <label>";
        // line 131
        echo gettext("API key for currencylayer");
        echo ":</label>
                    <div class=\"formRight\">
                        <input type=\"text\" name=\"currencylayer_key\" value=\"";
        // line 133
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "currency_get_key", [], "any", false, false, false, 133), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"fix\"></div>
                </div>
                <div class=\"rowElem\">
                <label>";
        // line 138
        echo gettext("Enable CRON jobs");
        echo ":</label>
                <p>If you enable this, conversion rates will be automatically updated whenever the CRON job fires up.</p>
                <div class=\"formRight\">
                    <input type=\"radio\" name=\"crons_enabled\" value=\"1\" ";
        // line 141
        if ((twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "currency_is_cron_enabled", [], "any", false, false, false, 141) == 1)) {
            echo "checked=\"checked\"";
        }
        echo "><label>Enabled</label>
                    <input type=\"radio\" name=\"crons_enabled\" value=\"0\" ";
        // line 142
        if ((twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "currency_is_cron_enabled", [], "any", false, false, false, 142) == 0)) {
            echo "checked=\"checked\"";
        }
        echo "><label>Disabled</label>
                </div>
                <div class=\"fix\"></div>
            </div>
                <input type=\"submit\" value=\"";
        // line 146
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" />
            </fieldset>
            </form>
        </div>

        <div class=\"tab_content nopadding\" id=\"tab-converter\">

            <form method=\"post\" action=\"\" class=\"mainForm\">
                <fieldset>
                    <div class=\"rowElem\">
                        <div class=\"moreFields\">
                            <ul>
                                <li style=\"width: 100px\"><input type=\"text\" name=\"amount\" value=\"\" required=\"required\" onkeyup=\"doConvert();\" placeholder=\"";
        // line 158
        echo gettext("Amount");
        echo "\"></li>
                                <li class=\"sep txt\">";
        // line 159
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "currency_get", [], "any", false, false, false, 159), "code", [], "any", false, false, false, 159), "html", null, true);
        echo " = </li>
                                <li class=\"sep txt\"></li>
                                <li style=\"width: 100px\"><input type=\"text\" id=\"converted_result\" value=\"\" placeholder=\"";
        // line 161
        echo gettext("Result");
        echo "\" readonly=\"readonly\"></li>
                                <li class=\"sep txt\"></li>
                                <li style=\"width: 100px\">";
        // line 163
        echo twig_call_macro($macros["mf"], "macro_selectbox", ["to", twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "currency_get_pairs", [], "any", false, false, false, 163)], 163, $context, $this->getSourceContext());
        echo "</li>
                            </ul>
                        </div> 
                        <div class=\"fix\"></div>
                    </div>
                </fieldset>
            </form>

        </div>
    </div>
</div>

";
    }

    // line 177
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 178
        echo "<script type=\"text/javascript\">
    function doConvert() {
        var price = \$('input[name=\"amount\"]').val();
        var code = \$('select[name=\"to\"]').val();
        bb.post('guest/currency/format', {price:price, code: code}, function(result){
            \$('#converted_result').val(result);
        });
        return false;
    };
</script>
";
    }

    public function getTemplateName()
    {
        return "mod_currency_settings.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  417 => 178,  413 => 177,  396 => 163,  391 => 161,  386 => 159,  382 => 158,  367 => 146,  358 => 142,  352 => 141,  346 => 138,  338 => 133,  333 => 131,  327 => 128,  320 => 124,  308 => 115,  300 => 110,  295 => 108,  285 => 101,  275 => 94,  267 => 89,  262 => 87,  254 => 84,  237 => 74,  229 => 68,  221 => 65,  219 => 64,  215 => 62,  208 => 59,  200 => 57,  198 => 56,  192 => 55,  186 => 54,  179 => 52,  175 => 51,  171 => 50,  161 => 49,  158 => 48,  153 => 47,  144 => 41,  140 => 40,  136 => 39,  132 => 38,  123 => 32,  119 => 31,  108 => 23,  104 => 22,  100 => 21,  96 => 20,  90 => 16,  86 => 15,  79 => 10,  73 => 9,  67 => 8,  64 => 7,  60 => 6,  53 => 4,  49 => 1,  47 => 3,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends request.ajax ? \"layout_blank.phtml\" : \"layout_default.phtml\" %}
{% import \"macro_functions.phtml\" as mf %}
{% set active_menu = 'system' %}
{% block meta_title %}{% trans 'Currency settings' %}{% endblock %}

{% block breadcrumbs %}
<ul>
    <li class=\"firstB\"><a href=\"{{ '/'|alink }}\">{% trans 'Home' %}</a></li>
    <li><a href=\"{{ 'system'|alink }}\">{% trans 'Settings' %}</a></li>
    <li class=\"lastB\">{% trans 'Currency settings' %}</li>
</ul>
{% endblock %}


{% block content %}

<div class=\"widget simpleTabs\">

    <ul class=\"tabs\">
        <li><a href=\"#tab-currencies\">{% trans 'Currencies' %}</a></li>
        <li><a href=\"#tab-new-currency\">{% trans 'Add new currency' %}</a></li>
        <li><a href=\"#tab-api-settings\">{% trans 'Settings' %}</a></li>
        <li><a href=\"#tab-converter\">{% trans 'Converter' %}</a></li>
    </ul>

    <div class=\"tabs_container\">
        <div class=\"fix\"></div>
        <div class=\"tab_content nopadding\" id=\"tab-currencies\">

            <div class=\"help\">
                <h3>{% trans 'Manage currencies' %}</h3>
                <p>{% trans 'Default currency is the one you manage all your prices in admin area. If your client in client area chooses other than default currency, prices will be recalculated according to conversion rate. You can have only one default currency. You can not add same currency once again. Changing default currency is not recommended when active orders are available. Nothing is recalculated on default currency change. Your income is calculated in default currency. Changing default currency after you have paid invoices will distort income statistics. Currency rates are taken from European Central Bank and currencylayer.' %}</p>
            </div>

            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <th>{% trans 'ISO code' %}</th>
                        <th>{% trans 'Title' %}</th>
                        <th>{% trans 'Conversion rate' %}</th>
                        <th>{% trans 'Example price' %}</th>
                        <th style=\"width:17%\">&nbsp;</th>
                    </tr>
                </thead>

                <tbody>
                {% for currency in admin.currency_get_list.list %}
                  <tr>
                      <td>{% if currency.default %}<strong>{{ currency.code }}</strong>{% else %}{{ currency.code }}{% endif %}</td>
                      <td>{{ currency.title }}</td>
                      <td>{{ currency.conversion_rate }}</td>
                      <td>{{ mf.currency_format(1) }} = {{ mf.currency(1, currency.code) }}</td>
                      <td class=\"actions\">
                          <a class=\"bb-button btn14\" href=\"{{ '/currency/manage'|alink }}/{{currency.code}}\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a>
                          <a class=\"bb-button btn14 bb-rm-tr api-link\" data-api-redirect=\"{{'extension/settings/currency'|alink}}\" data-api-confirm=\"Are you sure?\" href=\"{{'api/admin/currency/delete'|link({'code' : currency.code})}}\"><img src=\"images/icons/dark/trash.png\" alt=\"\"></a>
                          {% if not currency.default %}
                          <a class=\"bb-button btn14 api-link\" data-api-redirect=\"{{'extension/settings/currency'|alink}}\" href=\"{{'api/admin/currency/set_default' | link({'code' : currency.code})}}\" title=\"Set as default\" class=\"rightDir\"><img src=\"images/icons/dark/star.png\" alt=\"\"></a>
                          {% endif %}
                      </td>
                  </tr>
                {% else %}
                  <tr>
                      <td colspan=\"5\">
                          {% trans 'The list is empty' %}
                      </td>
                  </tr>
                {% endfor %}
                </tbody>

                <tfoot>
                    <tr>
                        <td colspan=\"5\">
                            <div class=\"aligncenter\">
                                <a href=\"{{'api/admin/currency/update_rates'|link}}\" data-api-redirect=\"{{'extension/settings/currency'|alink}}\" class=\"btn55 mr10 api-link\"><img src=\"images/icons/middlenav/refresh4.png\" alt=\"\"><span>{% trans 'Update Rates' %}</span></a>
                            </div>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>

        <div class=\"tab_content nopadding\" id=\"tab-new-currency\">

            <form method=\"post\" action=\"{{ 'api/admin/currency/create'|link }}\" class=\"mainForm save api-form\" data-api-redirect=\"{{ 'extension/settings/currency'|alink }}\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>{% trans 'Code' %}:</label>
                        <div class=\"formRight\">
                            {{ mf.selectbox('code', admin.currency_get_pairs, 'USD', 1) }}
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>{% trans 'Title' %}:</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"title\" value=\"\" required=\"required\">
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>{% trans 'Conversion rate' %}:</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"conversion_rate\" value=\"1\" required=\"required\">
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>{% trans 'Format' %}:</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"format\" value=\"\$ {{'{{price}}'}}\" required=\"required\">
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <input type=\"submit\" value=\"{% trans 'Add' %}\" class=\"greyishBtn submitForm\" />
                </fieldset>
            </form>


        </div>
        
        <div class=\"tab_content nopadding\" id=\"tab-api-settings\">
            <div class=\"help\">
                <h3>{% trans 'Adjust settings for currency rate updater' %}</h3>
                <p>BoxBilling uses data grabbed from <a href=\"https://www.ecb.europa.eu/home/html/index.en.html\">European Central Bank</a> for conversions from Euro to other currencies, and <a href=\"https://currencylayer.com/\">currencylayer</a> for conversations from US Dollar to other currencies.<br />If you choose Euro as your default currency, data from European Central Bank will be used, if you choose US Dollar, data from currencylayer will be used.<br />While European Central Bank decided to keep it's API free to everyone, you won't need an autorization key to use ECB's data. However, you'll need an API key to use currencylayer.<br />You can <a href=\"https://currencylayer.com/product\">grab your API key</a> from currencylayer's website. BoxBilling doesn't make any profits from your purchases on currencylayer.com</p>
                <p><b>BoxBilling does not take any responsibilities for data grabbed from 3rd party sources, including European Central Bank and currencylayer.</b></p>
            </div>
            <form method=\"post\" action=\"{{ 'api/admin/currency/update_rate_settings'|link }}\" class=\"mainForm save api-form\" data-api-msg=\"Successfully updated settings\">
            <fieldset>
                <div class=\"rowElem noborder\">
                    <label>{% trans 'API key for currencylayer' %}:</label>
                    <div class=\"formRight\">
                        <input type=\"text\" name=\"currencylayer_key\" value=\"{{admin.currency_get_key}}\">
                    </div>
                    <div class=\"fix\"></div>
                </div>
                <div class=\"rowElem\">
                <label>{% trans 'Enable CRON jobs' %}:</label>
                <p>If you enable this, conversion rates will be automatically updated whenever the CRON job fires up.</p>
                <div class=\"formRight\">
                    <input type=\"radio\" name=\"crons_enabled\" value=\"1\" {% if admin.currency_is_cron_enabled == 1 %}checked=\"checked\"{% endif %}><label>Enabled</label>
                    <input type=\"radio\" name=\"crons_enabled\" value=\"0\" {% if admin.currency_is_cron_enabled == 0 %}checked=\"checked\"{% endif %}><label>Disabled</label>
                </div>
                <div class=\"fix\"></div>
            </div>
                <input type=\"submit\" value=\"{% trans 'Update' %}\" class=\"greyishBtn submitForm\" />
            </fieldset>
            </form>
        </div>

        <div class=\"tab_content nopadding\" id=\"tab-converter\">

            <form method=\"post\" action=\"\" class=\"mainForm\">
                <fieldset>
                    <div class=\"rowElem\">
                        <div class=\"moreFields\">
                            <ul>
                                <li style=\"width: 100px\"><input type=\"text\" name=\"amount\" value=\"\" required=\"required\" onkeyup=\"doConvert();\" placeholder=\"{% trans 'Amount' %}\"></li>
                                <li class=\"sep txt\">{{ guest.currency_get.code }} = </li>
                                <li class=\"sep txt\"></li>
                                <li style=\"width: 100px\"><input type=\"text\" id=\"converted_result\" value=\"\" placeholder=\"{% trans 'Result' %}\" readonly=\"readonly\"></li>
                                <li class=\"sep txt\"></li>
                                <li style=\"width: 100px\">{{ mf.selectbox('to', guest.currency_get_pairs) }}</li>
                            </ul>
                        </div> 
                        <div class=\"fix\"></div>
                    </div>
                </fieldset>
            </form>

        </div>
    </div>
</div>

{% endblock %}

{% block js %}
<script type=\"text/javascript\">
    function doConvert() {
        var price = \$('input[name=\"amount\"]').val();
        var code = \$('select[name=\"to\"]').val();
        bb.post('guest/currency/format', {price:price, code: code}, function(result){
            \$('#converted_result').val(result);
        });
        return false;
    };
</script>
{% endblock %}
", "mod_currency_settings.phtml", "/home/lexcicxy/hostshibe.cf/bb-modules/Currency/html_admin/mod_currency_settings.phtml");
    }
}
