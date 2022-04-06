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

/* __string_template__e75446b06a41e08a5053105d90699077724ee33c75fee0bdb079367ad252cf33 */
class __TwigTemplate_814cd798a6a2241b754bd63d70008ac4a369650952723c7fce85df21527e4644 extends \Twig\Template
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

This is to remind that your proforma invoice **";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "serie_nr", [], "any", false, false, false, 5), "html", null, true);
        echo "** is due
in ";
        // line 6
        echo twig_escape_filter($this->env, twig_daysleft_filter(twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "due_at", [], "any", false, false, false, 6)), "html", null, true);
        echo " days.   

Amount due: ";
        // line 8
        echo twig_money($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "total", [], "any", false, false, false, 8), twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "currency", [], "any", false, false, false, 8));
        echo "
Due Date: ";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_bb_date(twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "due_at", [], "any", false, false, false, 9)), "html", null, true);
        echo "

You can view and pay the invoice at: ";
        // line 11
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("invoice");
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "hash", [], "any", false, false, false, 11), "html", null, true);
        echo "

You may review your invoice history at any time by logging in to your client area.

Login to members area: ";
        // line 15
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("login", ["email" => twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "email", [], "any", false, false, false, 15)]);
        echo "
View and manage invoices: ";
        // line 16
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("invoice");
        echo "  


";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_company", [], "any", false, false, false, 19), "signature", [], "any", false, false, false, 19), "html", null, true);
        echo "

";
        $___internal_4c5724ee321d13493d6b2b9bb8011b9b9a6b34aaebf1610f369aac74a4b77601_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 2
        echo twig_markdown_filter($this->env, $___internal_4c5724ee321d13493d6b2b9bb8011b9b9a6b34aaebf1610f369aac74a4b77601_);
    }

    public function getTemplateName()
    {
        return "__string_template__e75446b06a41e08a5053105d90699077724ee33c75fee0bdb079367ad252cf33";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 2,  87 => 19,  81 => 16,  77 => 15,  68 => 11,  63 => 9,  59 => 8,  54 => 6,  50 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% apply markdown %}
Hello {{ c.first_name }} {{ c.last_name }},

This is to remind that your proforma invoice **{{ invoice.serie_nr }}** is due
in {{ invoice.due_at|daysleft }} days.   

Amount due: {{ invoice.total | money(invoice.currency) }}
Due Date: {{ invoice.due_at|bb_date }}

You can view and pay the invoice at: {{'invoice'|link}}/{{invoice.hash}}

You may review your invoice history at any time by logging in to your client area.

Login to members area: {{'login'|link({'email' : c.email }) }}
View and manage invoices: {{'invoice'|link}}  


{{ guest.system_company.signature }}

{% endapply %}
", "__string_template__e75446b06a41e08a5053105d90699077724ee33c75fee0bdb079367ad252cf33", "");
    }
}
