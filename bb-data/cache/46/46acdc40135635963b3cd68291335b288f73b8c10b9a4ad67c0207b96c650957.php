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

/* __string_template__287dc46ec3e0a08d2c4c9cc2b285831dc6931f648040bd414f796d8cde3ce024 */
class __TwigTemplate_65ea30c5adab6f7a3eaa6b16206af0785f0951c0543e1ecf259bc90f38ad9c19 extends \Twig\Template
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
";
        // line 2
        ob_start();
        // line 3
        echo "Hello ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "first_name", [], "any", false, false, false, 3), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "last_name", [], "any", false, false, false, 3), "html", null, true);
        echo ",

This is a payment receipt for Invoice **";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "serie_nr", [], "any", false, false, false, 5), "html", null, true);
        echo "** issued on
";
        // line 6
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "created_at", [], "any", false, false, false, 6), "Y-m-d"), "html", null, true);
        echo "

Total Paid: ";
        // line 8
        echo twig_money($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "total", [], "any", false, false, false, 8), twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "currency", [], "any", false, false, false, 8));
        echo "

You may review your invoice history at any time by logging in to your client area.
Note: This email serves as an official receipt for this payment.

Login to members area: ";
        // line 13
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("login", ["email" => twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "email", [], "any", false, false, false, 13)]);
        echo "
View invoice: ";
        // line 14
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("invoice");
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "hash", [], "any", false, false, false, 14), "html", null, true);
        echo "

";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_company", [], "any", false, false, false, 16), "signature", [], "any", false, false, false, 16), "html", null, true);
        echo "

";
        $___internal_8376fe366b65a93a1d82f9da4485ffdd6e82af7e1cd872ff9bdbfa649479902d_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 2
        echo twig_markdown_filter($this->env, $___internal_8376fe366b65a93a1d82f9da4485ffdd6e82af7e1cd872ff9bdbfa649479902d_);
    }

    public function getTemplateName()
    {
        return "__string_template__287dc46ec3e0a08d2c4c9cc2b285831dc6931f648040bd414f796d8cde3ce024";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 2,  78 => 16,  71 => 14,  67 => 13,  59 => 8,  54 => 6,  50 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% apply markdown %}
Hello {{ c.first_name }} {{ c.last_name }},

This is a payment receipt for Invoice **{{ invoice.serie_nr }}** issued on
{{invoice.created_at|date('Y-m-d')}}

Total Paid: {{ invoice.total | money(invoice.currency) }}

You may review your invoice history at any time by logging in to your client area.
Note: This email serves as an official receipt for this payment.

Login to members area: {{'login'|link({'email' : c.email }) }}
View invoice: {{'invoice'|link}}/{{invoice.hash}}

{{ guest.system_company.signature }}

{% endapply %}
", "__string_template__287dc46ec3e0a08d2c4c9cc2b285831dc6931f648040bd414f796d8cde3ce024", "");
    }
}
