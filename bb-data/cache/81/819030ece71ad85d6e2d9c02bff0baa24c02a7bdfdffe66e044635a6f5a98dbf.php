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

/* mod_servicehosting_order.phtml */
class __TwigTemplate_e9fdbf842956b04bcf9417d29cda800637d7eb259166aff34e5cffb8f5d9da9f extends \Twig\Template
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
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.phtml") : ("layout_default.phtml")), "mod_servicehosting_order.phtml", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.phtml", "mod_servicehosting_order.phtml", 2)->unwrap();
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "title", [], "any", false, false, false, 3), "html", null, true);
    }

    // line 5
    public function block_content_before($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "\t\t<!-- Page Heading/Breadcrumbs -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "title", [], "any", false, false, false, 9), "html", null, true);
        echo "</h1>
\t\t\t\t";
        // line 11
        echo "\t\t\t\t";
        $this->loadTemplate("partial_steps.phtml", "mod_servicehosting_order.phtml", 11)->display(twig_array_merge($context, ["selected" => 2, "product" => ($context["product"] ?? null)]));
        // line 12
        echo "            </div>
        </div>
        <!-- /.row -->
";
    }

    // line 16
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "
";
        // line 18
        $context["periods"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_periods", [], "any", false, false, false, 18);
        // line 19
        $context["pricing"] = twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 19);
        // line 20
        echo "
<form method=\"post\" action=\"\" class=\"api_form\" data-api-url=\"guest/cart/add_item\" data-api-redirect=\"";
        // line 21
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("cart");
        echo "\">
\t";
        // line 23
        echo "
<div class=\"row\">
\t<div class=\"col-sm-12\">
\t<ul class=\"nav nav-tabs nav-justified\" id=\"tabs\">
        <li class=\"active\"><a href=\"#owndomain\" data-toggle=\"tab\" rel=\"owndomain\"><i class=\"fa fa-tree\"></i> ";
        // line 27
        echo gettext("Use own");
        echo "</a></li>
\t\t<li class=\"\"><a href=\"#register\" data-toggle=\"tab\" rel=\"register\"><i class=\"fa fa-tree\"></i> ";
        // line 28
        echo gettext("Register new domain");
        echo "</a></li>
        <li class=\"\"><a href=\"#transfer\" data-toggle=\"tab\" rel=\"transfer\"><i class=\"fa fa-car\"></i> ";
        // line 29
        echo gettext("Transfer my domain");
        echo "</a></li>
     </ul>
\t</div>
\t
\t<div class=\"tab-content text-center well col-sm-12\">
\t\t<div class=\"tab-pane fade active in\" id=\"owndomain\">
            <h4>";
        // line 35
        echo gettext("I will use my existing domain and update nameservers");
        echo "</h4>
\t\t\t<div class=\"form-group form-inline\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<div class=\"input-group-addon\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"domain[owndomain_sld]\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "owndomain_sld", [], "any", false, false, false, 39), "html", null, true);
        echo "\" placeholder=\"";
        echo gettext("Enter your domain name");
        echo "\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"input-group-addon\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"domain[owndomain_tld]\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "owndomain_tld", [], "any", true, true, false, 42)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "owndomain_tld", [], "any", false, false, false, 42), ".com")) : (".com")), "html", null, true);
        echo "\" >
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"tab-pane fade in\" id=\"register\">
            <h4>";
        // line 48
        echo gettext("Register new domain");
        echo "</h4>
\t\t\t<div class=\"form-group form-horizontal\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<div class=\"input-group-addon\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"domain[register_sld]\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "register_sld", [], "any", false, false, false, 52), "html", null, true);
        echo "\" placeholder=\"";
        echo gettext("Enter your domain name");
        echo "\">
                    </div>
\t\t\t\t\t<div class=\"input-group-addon\">
\t\t\t\t\t\t";
        // line 55
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "config", [], "any", false, false, false, 55), "free_domain", [], "any", false, false, false, 55) == 1)) {
            // line 56
            echo "\t\t\t\t\t\t\t";
            $context["tlds"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "serviceHosting_free_tlds", [0 => ["product_id" => twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 56)]], "method", false, false, false, 56);
            // line 57
            echo "\t\t\t\t\t\t";
        } else {
            // line 58
            echo "\t\t\t\t\t\t\t";
            $context["tlds"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "serviceDomain_tlds", [0 => ["allow_register" => 1]], "method", false, false, false, 58);
            // line 59
            echo "\t\t\t\t\t\t";
        }
        // line 60
        echo "\t\t\t\t\t\t";
        echo twig_call_macro($macros["mf"], "macro_selectboxtld", ["domain[register_tld]", ($context["tlds"] ?? null)], 60, $context, $this->getSourceContext());
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"input-group-addon\">
\t\t\t\t\t\t<button class=\"btn btn-success btn-sm\" type=\"button\" id=\"domain-check\">";
        // line 63
        echo gettext("Check");
        echo "</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-group col-md-4 col-md-offset-8\">
                    <div id=\"domain-config\" style=\"display:none;\">
\t\t\t\t\t\t<hr>
                        <h4>";
        // line 70
        echo gettext("Period");
        echo ":</h4>
                        ";
        // line 71
        echo twig_call_macro($macros["mf"], "macro_selectbox", ["domain[register_years]", []], 71, $context, $this->getSourceContext());
        echo "
                    </div>
\t\t\t</div>
\t\t\t
\t\t\t
\t\t</div>
\t\t<div class=\"tab-pane fade in\" id=\"transfer\">
            <h4>";
        // line 78
        echo gettext("Transfer your domain from another registrar");
        echo "</h4>
\t\t\t<div class=\"form-group form-horizontal\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<div class=\"input-group-addon\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"domain[transfer_sld]\" value=\"";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "transfer_sld", [], "any", false, false, false, 82), "html", null, true);
        echo "\" placeholder=\"";
        echo gettext("Enter your domain name");
        echo "\">
                    </div>
\t\t\t\t\t<div class=\"input-group-addon\">
\t\t\t\t\t\t";
        // line 85
        echo twig_call_macro($macros["mf"], "macro_selectboxtld", ["domain[transfer_tld]", twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "serviceDomain_tlds", [0 => ["allow_transfer" => 1]], "method", false, false, false, 85)], 85, $context, $this->getSourceContext());
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"input-group-addon\">
\t\t\t\t\t\t<button class=\"btn btn-success btn-sm\" type=\"button\" id=\"transfer-check\">";
        // line 88
        echo gettext("Check");
        echo "</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-group col-md-4 col-md-offset-8\">
                <div id=\"domain-transfer-config\" style=\"display:none;\">
\t\t\t\t\t<hr>
                    <h4>";
        // line 95
        echo gettext("Transfer price");
        echo ": <span id=\"transfer-price\"></span></h4>
                     <input type=\"text\" class=\"form-control\" name=\"domain[transfer_code]\" value=\"";
        // line 96
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "transfer_code", [], "any", false, false, false, 96), "html", null, true);
        echo "\" placeholder=\"";
        echo gettext("Enter domain transfer code");
        echo "\">
                </div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"col-md-4 col-md-offset-8 text-center\">
\t\t";
        // line 102
        $this->loadTemplate("partial_currency.phtml", "mod_servicehosting_order.phtml", 102)->display($context);
        // line 103
        echo "\t\t<hr>
\t\t";
        // line 104
        $this->loadTemplate("partial_pricing.phtml", "mod_servicehosting_order.phtml", 104)->display(twig_array_merge($context, ["product" => ($context["product"] ?? null)]));
        // line 105
        echo "\t</div>
</div>
    ";
        // line 107
        $this->loadTemplate("partial_addons.phtml", "mod_servicehosting_order.phtml", 107)->display(twig_array_merge($context, ["product" => ($context["product"] ?? null)]));
        // line 108
        echo "    
    <input type=\"hidden\" name=\"domain[action]\" value=\"owndomain\" id=\"domain-action\"/>
    <input type=\"hidden\" name=\"id\" value=\"";
        // line 110
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 110), "html", null, true);
        echo "\" />
</form>
";
    }

    // line 114
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 115
        $context["currency"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "cart_get_currency", [], "any", false, false, false, 115);
        // line 116
        echo "<script type=\"text/javascript\">
\$(function() {

\t\$('#tabs li a').bind('click', function (){
        \$('#domain-action').val(\$(this).attr('rel'));
    });
    \$('#tabs li a:first').click();

    \$('#transfer-check').bind('click',function(event){
        var sld = \$('input[name=\"domain[transfer_sld]\"]').val();
        var tld = \$('select[name=\"domain[transfer_tld]\"]').val();
        var domain = sld + tld;
        bb.post(
            'guest/servicedomain/can_be_transferred',
            { sld: sld, tld: tld },
            function(result) {
                setTransferPricing(tld);
                \$('#domain-transfer-config').fadeIn('slow');
            }
        );
        return false;
    });

    \$('#domain-check').bind('click',function(event){
        var sld = \$('input[name=\"domain[register_sld]\"]').val();
        var tld = \$('select[name=\"domain[register_tld]\"]').val();
        var domain = sld + tld;
        bb.post(
            'guest/servicedomain/check',
            { sld: sld, tld: tld },
            function(result) {
                setRegistrationPricing(tld);
                \$('#domain-config').fadeIn('slow');
            }
        );
        return false;
    });

    if(\$(\".addons\").length && \$(\".addons\").is(':hidden')) {
        \$('#order-button').one('click', function(){
            \$(this).slideUp('fast');
            \$('.addons').slideDown('fast');
            return false;
        });
    }

    \$('#period-selector').change(function(){
        \$('.period').hide();
        \$('.period.' + \$(this).val()).show();
    }).trigger('change');

    \$('.addon-period-selector').change(function(){
        var r = \$(this).attr('rel');
        \$('#' + r + ' span').hide();
        \$('#' + r + ' span.' + \$(this).val()).fadeIn();
    }).trigger('change');

    function setRegistrationPricing(tld)
    {
        bb.post(
            'guest/servicedomain/pricing',
            { tld: tld },
            function(result) {
                var s = \$(\"select[name='domain[register_years]']\");
                s.find('option').remove();
                for (i=1;i<6;i++) {
                    var price = bb.currency(result.price_registration, ";
        // line 182
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currency"] ?? null), "conversion_rate", [], "any", false, false, false, 182), "html", null, true);
        echo ", \"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currency"] ?? null), "code", [], "any", false, false, false, 182), "html", null, true);
        echo "\", i);
                    s.append(new Option(i + \"";
        // line 183
        echo gettext(" Year/s @ ");
        echo "\" + price, i));
                }
            }
        );
    }

    function setTransferPricing(tld)
    {
        bb.post(
            'guest/servicedomain/pricing',
            { tld: tld },
            function(result) {
                var price = bb.currency(result.price_transfer, ";
        // line 195
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currency"] ?? null), "conversion_rate", [], "any", false, false, false, 195), "html", null, true);
        echo ", \"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currency"] ?? null), "code", [], "any", false, false, false, 195), "html", null, true);
        echo "\");
                \$('#transfer-price').text(price);
            }
        );
    }
});
</script>
";
    }

    public function getTemplateName()
    {
        return "mod_servicehosting_order.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  371 => 195,  356 => 183,  350 => 182,  282 => 116,  280 => 115,  276 => 114,  269 => 110,  265 => 108,  263 => 107,  259 => 105,  257 => 104,  254 => 103,  252 => 102,  241 => 96,  237 => 95,  227 => 88,  221 => 85,  213 => 82,  206 => 78,  196 => 71,  192 => 70,  182 => 63,  175 => 60,  172 => 59,  169 => 58,  166 => 57,  163 => 56,  161 => 55,  153 => 52,  146 => 48,  137 => 42,  129 => 39,  122 => 35,  113 => 29,  109 => 28,  105 => 27,  99 => 23,  95 => 21,  92 => 20,  90 => 19,  88 => 18,  85 => 17,  81 => 16,  74 => 12,  71 => 11,  67 => 9,  62 => 6,  58 => 5,  51 => 3,  47 => 1,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends request.ajax ? \"layout_blank.phtml\" : \"layout_default.phtml\" %}
{% import \"macro_functions.phtml\" as mf %}
{% block meta_title %}{{product.title}}{% endblock %}

{% block content_before %}
\t\t<!-- Page Heading/Breadcrumbs -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">{{ product.title }}</h1>
\t\t\t\t{#{ product.description|bbmd }#}
\t\t\t\t{% include \"partial_steps.phtml\" with {'selected': 2, 'product': product} %}
            </div>
        </div>
        <!-- /.row -->
{% endblock %}
{% block content %}

{% set periods = guest.system_periods %}
{% set pricing = product.pricing %}

<form method=\"post\" action=\"\" class=\"api_form\" data-api-url=\"guest/cart/add_item\" data-api-redirect=\"{{ 'cart'|link }}\">
\t{#<h2 class=\"dark-icon i-services\">{% trans 'Domain configuration' %}</h2>#}

<div class=\"row\">
\t<div class=\"col-sm-12\">
\t<ul class=\"nav nav-tabs nav-justified\" id=\"tabs\">
        <li class=\"active\"><a href=\"#owndomain\" data-toggle=\"tab\" rel=\"owndomain\"><i class=\"fa fa-tree\"></i> {% trans 'Use own' %}</a></li>
\t\t<li class=\"\"><a href=\"#register\" data-toggle=\"tab\" rel=\"register\"><i class=\"fa fa-tree\"></i> {% trans 'Register new domain' %}</a></li>
        <li class=\"\"><a href=\"#transfer\" data-toggle=\"tab\" rel=\"transfer\"><i class=\"fa fa-car\"></i> {% trans 'Transfer my domain' %}</a></li>
     </ul>
\t</div>
\t
\t<div class=\"tab-content text-center well col-sm-12\">
\t\t<div class=\"tab-pane fade active in\" id=\"owndomain\">
            <h4>{% trans 'I will use my existing domain and update nameservers' %}</h4>
\t\t\t<div class=\"form-group form-inline\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<div class=\"input-group-addon\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"domain[owndomain_sld]\" value=\"{{ request.owndomain_sld }}\" placeholder=\"{% trans 'Enter your domain name' %}\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"input-group-addon\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"domain[owndomain_tld]\" value=\"{{ request.owndomain_tld|default('.com') }}\" >
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"tab-pane fade in\" id=\"register\">
            <h4>{% trans 'Register new domain' %}</h4>
\t\t\t<div class=\"form-group form-horizontal\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<div class=\"input-group-addon\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"domain[register_sld]\" value=\"{{ request.register_sld }}\" placeholder=\"{% trans 'Enter your domain name' %}\">
                    </div>
\t\t\t\t\t<div class=\"input-group-addon\">
\t\t\t\t\t\t{% if product.config.free_domain == 1 %}
\t\t\t\t\t\t\t{% set tlds = guest.serviceHosting_free_tlds({'product_id' : product.id}) %}
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t{% set tlds = guest.serviceDomain_tlds({\"allow_register\":1})%}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{{ mf.selectboxtld('domain[register_tld]', tlds)}}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"input-group-addon\">
\t\t\t\t\t\t<button class=\"btn btn-success btn-sm\" type=\"button\" id=\"domain-check\">{% trans 'Check' %}</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-group col-md-4 col-md-offset-8\">
                    <div id=\"domain-config\" style=\"display:none;\">
\t\t\t\t\t\t<hr>
                        <h4>{% trans 'Period' %}:</h4>
                        {{ mf.selectbox('domain[register_years]', {}) }}
                    </div>
\t\t\t</div>
\t\t\t
\t\t\t
\t\t</div>
\t\t<div class=\"tab-pane fade in\" id=\"transfer\">
            <h4>{% trans 'Transfer your domain from another registrar' %}</h4>
\t\t\t<div class=\"form-group form-horizontal\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<div class=\"input-group-addon\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"domain[transfer_sld]\" value=\"{{ request.transfer_sld }}\" placeholder=\"{% trans 'Enter your domain name' %}\">
                    </div>
\t\t\t\t\t<div class=\"input-group-addon\">
\t\t\t\t\t\t{{ mf.selectboxtld('domain[transfer_tld]', guest.serviceDomain_tlds({\"allow_transfer\":1})) }}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"input-group-addon\">
\t\t\t\t\t\t<button class=\"btn btn-success btn-sm\" type=\"button\" id=\"transfer-check\">{% trans 'Check' %}</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-group col-md-4 col-md-offset-8\">
                <div id=\"domain-transfer-config\" style=\"display:none;\">
\t\t\t\t\t<hr>
                    <h4>{% trans 'Transfer price'%}: <span id=\"transfer-price\"></span></h4>
                     <input type=\"text\" class=\"form-control\" name=\"domain[transfer_code]\" value=\"{{ request.transfer_code }}\" placeholder=\"{% trans 'Enter domain transfer code' %}\">
                </div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"col-md-4 col-md-offset-8 text-center\">
\t\t{% include 'partial_currency.phtml' %}
\t\t<hr>
\t\t{% include 'partial_pricing.phtml' with {'product': product} %}
\t</div>
</div>
    {% include 'partial_addons.phtml' with {'product': product} %}
    
    <input type=\"hidden\" name=\"domain[action]\" value=\"owndomain\" id=\"domain-action\"/>
    <input type=\"hidden\" name=\"id\" value=\"{{ product.id }}\" />
</form>
{% endblock %}

{% block js %}
{% set currency = guest.cart_get_currency %}
<script type=\"text/javascript\">
\$(function() {

\t\$('#tabs li a').bind('click', function (){
        \$('#domain-action').val(\$(this).attr('rel'));
    });
    \$('#tabs li a:first').click();

    \$('#transfer-check').bind('click',function(event){
        var sld = \$('input[name=\"domain[transfer_sld]\"]').val();
        var tld = \$('select[name=\"domain[transfer_tld]\"]').val();
        var domain = sld + tld;
        bb.post(
            'guest/servicedomain/can_be_transferred',
            { sld: sld, tld: tld },
            function(result) {
                setTransferPricing(tld);
                \$('#domain-transfer-config').fadeIn('slow');
            }
        );
        return false;
    });

    \$('#domain-check').bind('click',function(event){
        var sld = \$('input[name=\"domain[register_sld]\"]').val();
        var tld = \$('select[name=\"domain[register_tld]\"]').val();
        var domain = sld + tld;
        bb.post(
            'guest/servicedomain/check',
            { sld: sld, tld: tld },
            function(result) {
                setRegistrationPricing(tld);
                \$('#domain-config').fadeIn('slow');
            }
        );
        return false;
    });

    if(\$(\".addons\").length && \$(\".addons\").is(':hidden')) {
        \$('#order-button').one('click', function(){
            \$(this).slideUp('fast');
            \$('.addons').slideDown('fast');
            return false;
        });
    }

    \$('#period-selector').change(function(){
        \$('.period').hide();
        \$('.period.' + \$(this).val()).show();
    }).trigger('change');

    \$('.addon-period-selector').change(function(){
        var r = \$(this).attr('rel');
        \$('#' + r + ' span').hide();
        \$('#' + r + ' span.' + \$(this).val()).fadeIn();
    }).trigger('change');

    function setRegistrationPricing(tld)
    {
        bb.post(
            'guest/servicedomain/pricing',
            { tld: tld },
            function(result) {
                var s = \$(\"select[name='domain[register_years]']\");
                s.find('option').remove();
                for (i=1;i<6;i++) {
                    var price = bb.currency(result.price_registration, {{ currency.conversion_rate }}, \"{{ currency.code }}\", i);
                    s.append(new Option(i + \"{% trans ' Year/s @ ' %}\" + price, i));
                }
            }
        );
    }

    function setTransferPricing(tld)
    {
        bb.post(
            'guest/servicedomain/pricing',
            { tld: tld },
            function(result) {
                var price = bb.currency(result.price_transfer, {{ currency.conversion_rate }}, \"{{ currency.code }}\");
                \$('#transfer-price').text(price);
            }
        );
    }
});
</script>
{% endblock %}", "mod_servicehosting_order.phtml", "/home/lexcicxy/hostshibe.cf/bb-themes/bootstrap/html/mod_servicehosting_order.phtml");
    }
}
