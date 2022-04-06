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

/* mod_order_product.phtml */
class __TwigTemplate_9d2e1f473a003e2eea98b07585aa303a474c6002f34636be7c5ab79e608fdb64 extends \Twig\Template
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
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.phtml") : ("layout_default.phtml")), "mod_order_product.phtml", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.phtml", "mod_order_product.phtml", 2)->unwrap();
        // line 5
        $context["periods"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_periods", [], "any", false, false, false, 5);
        // line 6
        $context["pricing"] = twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 6);
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "title", [], "any", false, false, false, 3), "html", null, true);
    }

    // line 8
    public function block_content_before($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "\t\t<!-- Page Heading/Breadcrumbs -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 12
        echo gettext("Configure");
        // line 13
        echo "                    <small>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "title", [], "any", false, false, false, 13), "html", null, true);
        echo "</small>
                </h1>
\t\t\t\t";
        // line 15
        $this->loadTemplate("partial_steps.phtml", "mod_order_product.phtml", 15)->display(twig_array_merge($context, ["selected" => 2, "product" => ($context["product"] ?? null)]));
        // line 16
        echo "            </div>
        </div>
        <!-- /.row -->
";
    }

    // line 20
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "\t\t
\t\t<!-- Content Row -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
\t\t\t<form method=\"post\" action=\"\" class=\"api_form\" data-api-url=\"guest/cart/add_item\" data-api-redirect=\"";
        // line 25
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("cart");
        echo "\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t";
        // line 28
        echo twig_bbmd_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "description", [], "any", false, false, false, 28));
        echo "
\t\t\t\t\t\t\t";
        // line 29
        if ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "form_id", [], "any", false, false, false, 29) && twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "extension_is_on", [0 => ["mod" => "formbuilder"]], "method", false, false, false, 29))) {
            // line 30
            echo "\t\t\t\t\t\t\t\t";
            $this->loadTemplate("mod_formbuilder_build.phtml", "mod_order_product.phtml", 30)->display(twig_array_merge($context, ($context["product"] ?? null)));
            // line 31
            echo "\t\t\t\t\t\t\t";
        }
        // line 32
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<div class=\"well text-center\">
\t\t\t\t\t\t\t\t";
        // line 35
        $this->loadTemplate("partial_currency.phtml", "mod_order_product.phtml", 35)->display($context);
        // line 36
        echo "\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t";
        // line 37
        $this->loadTemplate("partial_pricing.phtml", "mod_order_product.phtml", 37)->display(twig_array_merge($context, ["product" => ($context["product"] ?? null)]));
        // line 38
        echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t";
        // line 42
        $this->loadTemplate("partial_addons.phtml", "mod_order_product.phtml", 42)->display(twig_array_merge($context, ["product" => ($context["product"] ?? null)]));
        // line 43
        echo "\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<input type=\"hidden\" name=\"id\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 45), "html", null, true);
        echo "\" />
\t\t\t</form>
            </div>
        </div>

";
    }

    // line 52
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 53
        echo "<script type=\"text/javascript\">
\$(function() {

    if(\$(\".addons\").length && \$(\".addons\").is(':hidden')) {
        \$('#order-button').one('click', function(){
            \$(this).hide();
            \$('.addons').slideDown('fast');
            return false;
        });
    }

    \$('#period-selector').on('change', function() {
        \$('.period').hide();
        \$('.period.' + \$(this).val()).show();
    });

    \$('.addon-period-selector').change(function(){
        var r = \$(this).attr('rel');
        \$('#' + r + ' span').hide();
        \$('#' + r + ' span.' + \$(this).val()).fadeIn();
    }).trigger('change');
});
</script>
";
    }

    public function getTemplateName()
    {
        return "mod_order_product.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 53,  150 => 52,  140 => 45,  136 => 43,  134 => 42,  128 => 38,  126 => 37,  123 => 36,  121 => 35,  116 => 32,  113 => 31,  110 => 30,  108 => 29,  104 => 28,  98 => 25,  92 => 21,  88 => 20,  81 => 16,  79 => 15,  73 => 13,  71 => 12,  66 => 9,  62 => 8,  55 => 3,  51 => 1,  49 => 6,  47 => 5,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends request.ajax ? \"layout_blank.phtml\" : \"layout_default.phtml\" %}
{% import \"macro_functions.phtml\" as mf %}
{% block meta_title %}{{ product.title }}{% endblock %}

{% set periods = guest.system_periods %}
{% set pricing = product.pricing %}

{% block content_before %}
\t\t<!-- Page Heading/Breadcrumbs -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">{% trans 'Configure' %}
                    <small>{{ product.title }}</small>
                </h1>
\t\t\t\t{% include \"partial_steps.phtml\" with {'selected': 2, 'product': product} %}
            </div>
        </div>
        <!-- /.row -->
{% endblock %}
{% block content %}
\t\t
\t\t<!-- Content Row -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
\t\t\t<form method=\"post\" action=\"\" class=\"api_form\" data-api-url=\"guest/cart/add_item\" data-api-redirect=\"{{ 'cart'|link }}\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t{{ product.description|bbmd }}
\t\t\t\t\t\t\t{% if product.form_id and guest.extension_is_on({\"mod\":\"formbuilder\"}) %}
\t\t\t\t\t\t\t\t{% include 'mod_formbuilder_build.phtml' with product %}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<div class=\"well text-center\">
\t\t\t\t\t\t\t\t{% include 'partial_currency.phtml' %}
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t{% include 'partial_pricing.phtml' with {'product': product} %}
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t{% include 'partial_addons.phtml' with {'product': product} %}
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<input type=\"hidden\" name=\"id\" value=\"{{ product.id }}\" />
\t\t\t</form>
            </div>
        </div>

{% endblock %}

{% block js %}
<script type=\"text/javascript\">
\$(function() {

    if(\$(\".addons\").length && \$(\".addons\").is(':hidden')) {
        \$('#order-button').one('click', function(){
            \$(this).hide();
            \$('.addons').slideDown('fast');
            return false;
        });
    }

    \$('#period-selector').on('change', function() {
        \$('.period').hide();
        \$('.period.' + \$(this).val()).show();
    });

    \$('.addon-period-selector').change(function(){
        var r = \$(this).attr('rel');
        \$('#' + r + ' span').hide();
        \$('#' + r + ' span.' + \$(this).val()).fadeIn();
    }).trigger('change');
});
</script>
{% endblock %}", "mod_order_product.phtml", "/home/lexcicxy/hostshibe.cf/bb-themes/bootstrap/html/mod_order_product.phtml");
    }
}
