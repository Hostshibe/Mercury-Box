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

/* partial_addons.phtml */
class __TwigTemplate_d0701241ada1319170e499251a0e82ef3925ac3fa7f3a19d2986cfffb0a7cf97 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "addons", [], "any", false, false, false, 1)) > 0)) {
            // line 2
            echo "<div class=\"addons well\" style=\"display: none;\">
\t<h4>";
            // line 3
            echo gettext("Addons & extras");
            echo "</h4>
\t<ul class=\"list-group\">
\t\t";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "addons", [], "any", false, false, false, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["addon"]) {
                // line 6
                echo "\t\t\t<li class=\"list-group-item\">
\t\t\t\t<h4 class=\"list-group-item-heading\">
\t\t\t\t\t<input type=\"hidden\" name=\"addons[";
                // line 8
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["addon"], "id", [], "any", false, false, false, 8), "html", null, true);
                echo "][selected]\" value=\"0\">
\t\t\t\t\t<input type=\"checkbox\" name=\"addons[";
                // line 9
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["addon"], "id", [], "any", false, false, false, 9), "html", null, true);
                echo "][selected]\" value=\"1\" id=\"addon_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["addon"], "id", [], "any", false, false, false, 9), "html", null, true);
                echo "\">
\t\t\t\t\t";
                // line 10
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["addon"], "title", [], "any", false, false, false, 10), "html", null, true);
                echo "
\t\t\t\t</h4>
\t\t\t\t<p class=\"list-group-item-text form-inline\">
\t\t\t\t\t";
                // line 13
                echo twig_bbmd_filter($this->env, twig_get_attribute($this->env, $this->source, $context["addon"], "description", [], "any", false, false, false, 13));
                echo "
\t\t\t\t\t";
                // line 14
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["addon"], "pricing", [], "any", false, false, false, 14), "type", [], "any", false, false, false, 14) === "recurrent")) {
                    // line 15
                    echo "\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<select name=\"addons[";
                    // line 17
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["addon"], "id", [], "any", false, false, false, 17), "html", null, true);
                    echo "][period]\" class=\"addon-period-selector form-control\" rel=\"addon-periods-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["addon"], "id", [], "any", false, false, false, 17), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t";
                    // line 18
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["addon"], "pricing", [], "any", false, false, false, 18), "recurrent", [], "any", false, false, false, 18));
                    foreach ($context['_seq'] as $context["code"] => $context["prices"]) {
                        // line 19
                        echo "\t\t\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, $context["prices"], "enabled", [], "any", false, false, false, 19)) {
                            // line 20
                            echo "\t\t\t\t\t\t\t\t<option value=\"";
                            echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["periods"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["code"]] ?? null) : null), "html", null, true);
                            echo "</option>
\t\t\t\t\t\t\t\t";
                        }
                        // line 22
                        echo "\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['code'], $context['prices'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 23
                    echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<div id=\"addon-periods-";
                    // line 24
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["addon"], "id", [], "any", false, false, false, 24), "html", null, true);
                    echo "\" class=\"input-group-addon\">
\t\t\t\t\t\t\t";
                    // line 25
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["addon"], "pricing", [], "any", false, false, false, 25), "recurrent", [], "any", false, false, false, 25));
                    foreach ($context['_seq'] as $context["code"] => $context["prices"]) {
                        // line 26
                        echo "\t\t\t\t\t\t\t\t<span class=\"";
                        echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                        echo "\">";
                        echo twig_money_convert($this->env, (twig_get_attribute($this->env, $this->source, $context["prices"], "price", [], "any", false, false, false, 26) + twig_get_attribute($this->env, $this->source, $context["prices"], "setup", [], "any", false, false, false, 26)));
                        echo "</span>
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['code'], $context['prices'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 28
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 32
                echo "
\t\t\t\t\t";
                // line 33
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["addon"], "pricing", [], "any", false, false, false, 33), "type", [], "any", false, false, false, 33) === "once")) {
                    // line 34
                    echo "\t\t\t\t\t\t<h4 class=\"text-right\"><strong>";
                    echo twig_money_convert($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["addon"], "pricing", [], "any", false, false, false, 34), "once", [], "any", false, false, false, 34), "price", [], "any", false, false, false, 34) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["addon"], "pricing", [], "any", false, false, false, 34), "once", [], "any", false, false, false, 34), "setup", [], "any", false, false, false, 34)));
                    echo "</strong></h4>
\t\t\t\t\t";
                }
                // line 36
                echo "
\t\t\t\t\t";
                // line 37
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["addon"], "pricing", [], "any", false, false, false, 37), "type", [], "any", false, false, false, 37) === "free")) {
                    // line 38
                    echo "\t\t\t\t\t\t<h4 class=\"text-right\"><strong>";
                    echo twig_money_convert($this->env, 0);
                    echo "</strong></h4>
\t\t\t\t\t";
                }
                // line 39
                echo "\t
\t\t\t\t</p>\t
\t\t\t</li>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['addon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "\t\t<li class=\"list-group-item\"></li>
\t</ul>
\t<div class=\"text-center\" >
\t\t<button class=\"btn btn-success btn-lg\" type=\"submit\">";
            // line 46
            echo gettext("Order now");
            echo "</button>
\t</div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "partial_addons.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 46,  167 => 43,  158 => 39,  152 => 38,  150 => 37,  147 => 36,  141 => 34,  139 => 33,  136 => 32,  130 => 28,  119 => 26,  115 => 25,  111 => 24,  108 => 23,  102 => 22,  94 => 20,  91 => 19,  87 => 18,  81 => 17,  77 => 15,  75 => 14,  71 => 13,  65 => 10,  59 => 9,  55 => 8,  51 => 6,  47 => 5,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if product.addons|length > 0 %}
<div class=\"addons well\" style=\"display: none;\">
\t<h4>{% trans 'Addons & extras' %}</h4>
\t<ul class=\"list-group\">
\t\t{% for addon in product.addons %}
\t\t\t<li class=\"list-group-item\">
\t\t\t\t<h4 class=\"list-group-item-heading\">
\t\t\t\t\t<input type=\"hidden\" name=\"addons[{{ addon.id }}][selected]\" value=\"0\">
\t\t\t\t\t<input type=\"checkbox\" name=\"addons[{{ addon.id }}][selected]\" value=\"1\" id=\"addon_{{ addon.id }}\">
\t\t\t\t\t{{ addon.title }}
\t\t\t\t</h4>
\t\t\t\t<p class=\"list-group-item-text form-inline\">
\t\t\t\t\t{{ addon.description|bbmd }}
\t\t\t\t\t{% if addon.pricing.type is same as('recurrent') %}
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<select name=\"addons[{{ addon.id }}][period]\" class=\"addon-period-selector form-control\" rel=\"addon-periods-{{ addon.id }}\">
\t\t\t\t\t\t\t{% for code,prices in addon.pricing.recurrent %}
\t\t\t\t\t\t\t\t{% if prices.enabled %}
\t\t\t\t\t\t\t\t<option value=\"{{code}}\">{{ periods[code] }}</option>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<div id=\"addon-periods-{{ addon.id }}\" class=\"input-group-addon\">
\t\t\t\t\t\t\t{% for code,prices in addon.pricing.recurrent %}
\t\t\t\t\t\t\t\t<span class=\"{{code}}\">{{ (prices.price + prices.setup) | money_convert }}</span>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}

\t\t\t\t\t{% if addon.pricing.type is same as('once') %}
\t\t\t\t\t\t<h4 class=\"text-right\"><strong>{{ (addon.pricing.once.price + addon.pricing.once.setup) | money_convert }}</strong></h4>
\t\t\t\t\t{% endif %}

\t\t\t\t\t{% if addon.pricing.type is same as('free') %}
\t\t\t\t\t\t<h4 class=\"text-right\"><strong>{{ 0 | money_convert }}</strong></h4>
\t\t\t\t\t{% endif %}\t
\t\t\t\t</p>\t
\t\t\t</li>
\t\t{% endfor %}
\t\t<li class=\"list-group-item\"></li>
\t</ul>
\t<div class=\"text-center\" >
\t\t<button class=\"btn btn-success btn-lg\" type=\"submit\">{% trans 'Order now' %}</button>
\t</div>
</div>
{% endif %}", "partial_addons.phtml", "/home/lexcicxy/hostshibe.cf/bb-themes/bootstrap/html/partial_addons.phtml");
    }
}
