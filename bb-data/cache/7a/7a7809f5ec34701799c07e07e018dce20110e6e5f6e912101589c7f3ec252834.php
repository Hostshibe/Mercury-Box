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

/* mod_order_index.phtml */
class __TwigTemplate_6121b81b7d90dfcb5f484c868a38dce542724cb74c086329b34c49b414586390 extends \Twig\Template
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
            'sidebar' => [$this, 'block_sidebar'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.phtml") : ("layout_default.phtml")), "mod_order_index.phtml", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.phtml", "mod_order_index.phtml", 2)->unwrap();
        // line 5
        $context["periods"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_periods", [], "any", false, false, false, 5);
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo gettext("Order");
    }

    // line 7
    public function block_content_before($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "\t\t<!-- Page Heading/Breadcrumbs -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 11
        echo gettext("Select Product");
        // line 12
        echo "                    <small>";
        echo gettext("Choose products we offer for selling");
        echo "</small>
                </h1>
\t\t\t\t";
        // line 14
        $this->loadTemplate("partial_steps.phtml", "mod_order_index.phtml", 14)->display(twig_array_merge($context, ["selected" => 1]));
        // line 15
        echo "            </div>
        </div>
        <!-- /.row -->
";
    }

    // line 19
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "
        <!-- Content Row -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"panel-group\" id=\"accordion\">
\t\t\t\t";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "product_category_get_list", [], "any", false, false, false, 25), "list", [], "any", false, false, false, 25));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["i"] => $context["category"]) {
            // line 26
            echo "\t\t\t\t\t<div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <h4 class=\"panel-title\">
                                <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse-cat";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 29), "html", null, true);
            echo "\"><strong>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "title", [], "any", false, false, false, 29), "html", null, true);
            echo "</strong> ";
            echo twig_bbmd_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 29));
            echo "</a>
                            </h4>
                        </div>
                        <div id=\"collapse-cat";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 32), "html", null, true);
            echo "\" class=\"panel-collapse collapse\">
\t\t\t\t\t\t\t";
            // line 33
            $context["listing_template"] = (("mod_service" . twig_get_attribute($this->env, $this->source, $context["category"], "type", [], "any", false, false, false, 33)) . "_listing.phtml");
            // line 34
            echo "\t\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_template_exists", [0 => ["file" => ($context["listing_template"] ?? null)]], "method", false, false, false, 34)) {
                // line 35
                echo "\t\t\t\t\t\t\t<div class=\"mod_service";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "type", [], "any", false, false, false, 35), "html", null, true);
                echo " panel-body\">";
                $this->loadTemplate(($context["listing_template"] ?? null), "mod_order_index.phtml", 35)->display($context);
                echo "</div>
\t\t\t\t\t\t\t";
            } else {
                // line 37
                echo "\t\t\t\t\t\t\t<ul class=\"list-group\">
\t\t\t\t\t\t\t";
                // line 38
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "products", [], "any", false, false, false, 38));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 39
                    echo "\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"list-group-item-heading\">";
                    // line 42
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "title", [], "any", false, false, false, 42), "html", null, true);
                    echo "</h4>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"list-group-item-text\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 44
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "icon_url", [], "any", false, false, false, 44)) {
                        // line 45
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 46
                        echo twig_img_tag(twig_get_attribute($this->env, $this->source, $context["product"], "icon_url", [], "any", false, false, false, 46));
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 49
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    echo twig_bbmd_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 49));
                    echo "
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 text-center\">\t
\t\t\t\t\t\t\t\t\t\t\t<p>";
                    // line 53
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "pricing", [], "any", false, false, false, 53), "type", [], "any", false, false, false, 53) == "recurrent")) {
                        // line 54
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo gettext("Starting from");
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"period\" id=\"period-selector\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 56
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "pricing", [], "any", false, false, false, 56), "recurrent", [], "any", false, false, false, 56));
                        foreach ($context['_seq'] as $context["code"] => $context["prices"]) {
                            // line 57
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, $context["prices"], "enabled", [], "any", false, false, false, 57)) {
                                echo "<option value=\"";
                                echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                                echo "\">";
                                echo twig_money_convert($this->env, twig_get_attribute($this->env, $this->source, $context["prices"], "price", [], "any", false, false, false, 57));
                                echo " ";
                                echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["periods"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["code"]] ?? null) : null), "html", null, true);
                                echo "</option>";
                            }
                            // line 58
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['code'], $context['prices'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 59
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>\t
\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 61
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo gettext("Starting from");
                        echo " <strong>";
                        echo twig_money_convert($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price_starting_from", [], "any", false, false, false, 61));
                        echo "</strong>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 62
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-success pull-right\" href=\"";
                    // line 63
                    echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/order");
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "slug", [], "any", false, false, false, 63), "html", null, true);
                    echo "\"><i class=\"fa fa-shopping-cart\"></i> ";
                    echo gettext("Order now");
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 68
                echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t";
            }
            // line 69
            echo "\t\t
\t\t\t\t\t\t\t

                        </div>
                    </div>
                    <!-- /.panel -->
\t\t\t\t\t
\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "
                </div>
                <!-- /.panel-group -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
\t\t
";
    }

    // line 87
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 88
        echo "\t<div class=\"well\">
\t\t";
        // line 89
        $this->loadTemplate("partial_currency.phtml", "mod_order_index.phtml", 89)->display($context);
        // line 90
        echo "\t</div>
";
    }

    public function getTemplateName()
    {
        return "mod_order_index.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 90,  285 => 89,  282 => 88,  278 => 87,  266 => 77,  245 => 69,  241 => 68,  226 => 63,  223 => 62,  215 => 61,  211 => 59,  205 => 58,  194 => 57,  190 => 56,  184 => 54,  182 => 53,  174 => 49,  168 => 46,  165 => 45,  163 => 44,  158 => 42,  153 => 39,  149 => 38,  146 => 37,  138 => 35,  135 => 34,  133 => 33,  129 => 32,  119 => 29,  114 => 26,  97 => 25,  90 => 20,  86 => 19,  79 => 15,  77 => 14,  71 => 12,  69 => 11,  64 => 8,  60 => 7,  53 => 3,  49 => 1,  47 => 5,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends request.ajax ? \"layout_blank.phtml\" : \"layout_default.phtml\" %}
{% import \"macro_functions.phtml\" as mf %}
{% block meta_title %}{% trans 'Order' %}{% endblock %}

{% set periods = guest.system_periods %}

{% block content_before %}
\t\t<!-- Page Heading/Breadcrumbs -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">{% trans 'Select Product' %}
                    <small>{% trans 'Choose products we offer for selling' %}</small>
                </h1>
\t\t\t\t{% include \"partial_steps.phtml\" with {'selected': 1} %}
            </div>
        </div>
        <!-- /.row -->
{% endblock %}
{% block content %}

        <!-- Content Row -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"panel-group\" id=\"accordion\">
\t\t\t\t{% for i, category in guest.product_category_get_list.list %}
\t\t\t\t\t<div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <h4 class=\"panel-title\">
                                <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse-cat{{category.id}}\"><strong>{{ category.title }}</strong> {{ category.description|bbmd }}</a>
                            </h4>
                        </div>
                        <div id=\"collapse-cat{{category.id}}\" class=\"panel-collapse collapse\">
\t\t\t\t\t\t\t{% set listing_template = 'mod_service'~category.type~'_listing.phtml' %}
\t\t\t\t\t\t\t{% if guest.system_template_exists({\"file\":listing_template}) %}
\t\t\t\t\t\t\t<div class=\"mod_service{{category.type}} panel-body\">{% include listing_template %}</div>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<ul class=\"list-group\">
\t\t\t\t\t\t\t{% for product in category.products %}
\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"list-group-item-heading\">{{ product.title }}</h4>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"list-group-item-text\">
\t\t\t\t\t\t\t\t\t\t\t\t{% if product.icon_url %}
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ product.icon_url | img_tag }}
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t{{ product.description|bbmd }}
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 text-center\">\t
\t\t\t\t\t\t\t\t\t\t\t<p>{% if product.pricing.type == 'recurrent' %}
\t\t\t\t\t\t\t\t\t\t\t\t{% trans 'Starting from' %} 
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"period\" id=\"period-selector\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t{% for code,prices in product.pricing.recurrent %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% if prices.enabled %}<option value=\"{{code}}\">{{ prices.price | money_convert }} {{ periods[code] }}</option>{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t</select>\t
\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t{% trans 'Starting from' %} <strong>{{ product.price_starting_from | money_convert }}</strong>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}</p>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-success pull-right\" href=\"{{ '/order'|link }}/{{ product.slug }}\"><i class=\"fa fa-shopping-cart\"></i> {% trans 'Order now' %}</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t{% endif %}\t\t
\t\t\t\t\t\t\t

                        </div>
                    </div>
                    <!-- /.panel -->
\t\t\t\t\t
\t\t\t\t{% endfor %}

                </div>
                <!-- /.panel-group -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
\t\t
{% endblock %}

{% block sidebar %}
\t<div class=\"well\">
\t\t{% include 'partial_currency.phtml' %}
\t</div>
{% endblock %}", "mod_order_index.phtml", "/home/lexcicxy/hostshibe.cf/bb-themes/bootstrap/html/mod_order_index.phtml");
    }
}
