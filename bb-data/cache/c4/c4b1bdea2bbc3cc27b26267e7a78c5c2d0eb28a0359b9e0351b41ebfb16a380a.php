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

/* partial_pricing.phtml */
class __TwigTemplate_9cc4d4352c937c8ad80ebb2e7c63eb0083451d8a946248c208e500a7accf24b0 extends \Twig\Template
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
        echo "
        <div class=\"total\">
            ";
        // line 3
        if ((twig_get_attribute($this->env, $this->source, ($context["pricing"] ?? null), "type", [], "any", false, false, false, 3) == "free")) {
            // line 4
            echo "            
                ";
            // line 5
            if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "allow_quantity_select", [], "any", false, false, false, 5)) {
                // line 6
                echo "                    <h4>";
                echo gettext("Quantity:");
                echo "</h4>
                    <input type=\"text\" name=\"quantity\" value=\"1\" class=\"form-control\"/>
                    <hr/>
                ";
            }
            // line 10
            echo "                
                <h2><strong>";
            // line 11
            echo gettext("Total price:");
            echo "</strong><br />";
            echo twig_money_convert($this->env, 0);
            echo "</h2>
            ";
        }
        // line 13
        echo "
            ";
        // line 14
        if ((twig_get_attribute($this->env, $this->source, ($context["pricing"] ?? null), "type", [], "any", false, false, false, 14) == "once")) {
            // line 15
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "allow_quantity_select", [], "any", false, false, false, 15)) {
                // line 16
                echo "                    <h4>";
                echo gettext("Quantity:");
                echo "</h4>
                    <input type=\"text\" name=\"quantity\" value=\"1\" class=\"form-control\"/>
                    <hr/>
                ";
            }
            // line 20
            echo "
                <h2><strong>";
            // line 21
            echo gettext("Total price:");
            echo "</strong><br /> ";
            echo twig_money_convert($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pricing"] ?? null), "once", [], "any", false, false, false, 21), "price", [], "any", false, false, false, 21) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pricing"] ?? null), "once", [], "any", false, false, false, 21), "setup", [], "any", false, false, false, 21)));
            echo "</h2>
            ";
        }
        // line 23
        echo "

        ";
        // line 25
        if ((twig_get_attribute($this->env, $this->source, ($context["pricing"] ?? null), "type", [], "any", false, false, false, 25) == "recurrent")) {
            // line 26
            echo "\t\t\t";
            if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "allow_quantity_select", [], "any", false, false, false, 26)) {
                // line 27
                echo "\t\t\t\t<h4>";
                echo gettext("Quantity:");
                echo "</h4>
\t\t\t\t<input type=\"text\" name=\"quantity\" value=\"1\" class=\"form-control\"/>
\t\t\t\t<hr/>
\t\t\t";
            }
            // line 31
            echo "\t\t\t\t\t
\t\t\t<select name=\"period\" id=\"period-selector\" class=\"form-control\">
\t\t\t";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["pricing"] ?? null), "recurrent", [], "any", false, false, false, 33));
            foreach ($context['_seq'] as $context["code"] => $context["prices"]) {
                // line 34
                echo "\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["prices"], "enabled", [], "any", false, false, false, 34)) {
                    // line 35
                    echo "\t\t\t\t<option value=\"";
                    echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                    echo "\"";
                    if ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "period", [], "any", false, false, false, 35) == $context["code"])) {
                        echo " selected=\"selected\"";
                    }
                    echo ">";
                    echo twig_money_convert($this->env, (twig_get_attribute($this->env, $this->source, $context["prices"], "price", [], "any", false, false, false, 35) + twig_get_attribute($this->env, $this->source, $context["prices"], "setup", [], "any", false, false, false, 35)));
                    echo " ";
                    echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["periods"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["code"]] ?? null) : null), "html", null, true);
                    echo "</option>
\t\t\t\t";
                }
                // line 37
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['prices'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "\t\t\t</select>
\t\t\t<hr>
\t\t\t

\t\t\t";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["pricing"] ?? null), "recurrent", [], "any", false, false, false, 42));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            foreach ($context['_seq'] as $context["code"] => $context["prices"]) {
                if ((twig_get_attribute($this->env, $this->source, $context["prices"], "enabled", [], "any", false, false, false, 42) && (twig_get_attribute($this->env, $this->source, $context["prices"], "setup", [], "any", false, false, false, 42) > 0))) {
                    // line 43
                    echo "\t\t\t\t\t<div class=\"period ";
                    echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                    echo "\" style=\"";
                    if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 43)) {
                        echo "display: none;";
                    }
                    echo "\">
\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
                    // line 46
                    echo gettext("Price");
                    echo "</td>
\t\t\t\t\t\t\t\t<td>";
                    // line 47
                    echo twig_money_convert($this->env, twig_get_attribute($this->env, $this->source, $context["prices"], "price", [], "any", false, false, false, 47));
                    echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
                    // line 50
                    echo gettext("Setup Price");
                    echo "</td>
\t\t\t\t\t\t\t\t<td>";
                    // line 51
                    echo twig_money_convert($this->env, twig_get_attribute($this->env, $this->source, $context["prices"], "setup", [], "any", false, false, false, 51));
                    echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['prices'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "        
        ";
        }
        // line 58
        echo "        </div>

        ";
        // line 60
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "addons", [], "any", false, false, false, 60)) > 0)) {
            // line 61
            echo "\t\t\t<button class=\"btn btn-success btn-lg\" type=\"submit\" id=\"order-button\">";
            echo gettext("Continue");
            echo "</button>
        ";
        } else {
            // line 63
            echo "\t\t\t<button class=\"btn btn-success btn-lg\" type=\"submit\" id=\"order-button\">";
            echo gettext("Order now");
            echo "</button>
        ";
        }
    }

    public function getTemplateName()
    {
        return "partial_pricing.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 63,  207 => 61,  205 => 60,  201 => 58,  197 => 56,  182 => 51,  178 => 50,  172 => 47,  168 => 46,  157 => 43,  146 => 42,  140 => 38,  134 => 37,  120 => 35,  117 => 34,  113 => 33,  109 => 31,  101 => 27,  98 => 26,  96 => 25,  92 => 23,  85 => 21,  82 => 20,  74 => 16,  71 => 15,  69 => 14,  66 => 13,  59 => 11,  56 => 10,  48 => 6,  46 => 5,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
        <div class=\"total\">
            {% if pricing.type == 'free' %}
            
                {% if product.allow_quantity_select %}
                    <h4>{% trans 'Quantity:' %}</h4>
                    <input type=\"text\" name=\"quantity\" value=\"1\" class=\"form-control\"/>
                    <hr/>
                {% endif %}
                
                <h2><strong>{% trans 'Total price:' %}</strong><br />{{ 0 | money_convert }}</h2>
            {% endif %}

            {% if pricing.type == 'once'  %}
                {% if product.allow_quantity_select %}
                    <h4>{% trans 'Quantity:' %}</h4>
                    <input type=\"text\" name=\"quantity\" value=\"1\" class=\"form-control\"/>
                    <hr/>
                {% endif %}

                <h2><strong>{% trans 'Total price:' %}</strong><br /> {{ (pricing.once.price + pricing.once.setup) | money_convert }}</h2>
            {% endif %}


        {% if pricing.type == 'recurrent'  %}
\t\t\t{% if product.allow_quantity_select %}
\t\t\t\t<h4>{% trans 'Quantity:' %}</h4>
\t\t\t\t<input type=\"text\" name=\"quantity\" value=\"1\" class=\"form-control\"/>
\t\t\t\t<hr/>
\t\t\t{% endif %}
\t\t\t\t\t
\t\t\t<select name=\"period\" id=\"period-selector\" class=\"form-control\">
\t\t\t{% for code,prices in pricing.recurrent %}
\t\t\t\t{% if prices.enabled %}
\t\t\t\t<option value=\"{{code}}\"{% if request.period == code %} selected=\"selected\"{% endif %}>{{ (prices.price + prices.setup) | money_convert }} {{ periods[code] }}</option>
\t\t\t\t{% endif %}
\t\t\t{% endfor %}
\t\t\t</select>
\t\t\t<hr>
\t\t\t

\t\t\t{% for code,prices in pricing.recurrent if prices.enabled and prices.setup > 0 %}
\t\t\t\t\t<div class=\"period {{code}}\" style=\"{% if not loop.first %}display: none;{% endif %}\">
\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>{% trans 'Price' %}</td>
\t\t\t\t\t\t\t\t<td>{{ prices.price | money_convert }}</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>{% trans 'Setup Price' %}</td>
\t\t\t\t\t\t\t\t<td>{{ prices.setup | money_convert }}</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t{% endfor %}
        
        {% endif %}
        </div>

        {% if product.addons|length > 0 %}
\t\t\t<button class=\"btn btn-success btn-lg\" type=\"submit\" id=\"order-button\">{% trans 'Continue' %}</button>
        {% else %}
\t\t\t<button class=\"btn btn-success btn-lg\" type=\"submit\" id=\"order-button\">{% trans 'Order now' %}</button>
        {% endif %}
", "partial_pricing.phtml", "/home/lexcicxy/hostshibe.cf/bb-themes/bootstrap/html/partial_pricing.phtml");
    }
}
