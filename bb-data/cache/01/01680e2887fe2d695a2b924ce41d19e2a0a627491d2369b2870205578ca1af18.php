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

/* __string_template__638f29537adbe5bb1f9b75ce61c0240e223225fc78e21f8eb8455027d05bbb0c */
class __TwigTemplate_8e830648f35b48e30f70db2656274f0fd03829672a85517024c37840e137a43b extends \Twig\Template
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
        echo "Hi ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["staff"] ?? null), "name", [], "any", false, false, false, 3), "html", null, true);
        echo ",

Client **";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "client", [], "any", false, false, false, 5), "first_name", [], "any", false, false, false, 5), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "client", [], "any", false, false, false, 5), "last_name", [], "any", false, false, false, 5), "html", null, true);
        echo "** placed a new order for **";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "title", [], "any", false, false, false, 5), "html", null, true);
        echo "** on ";
        echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_bb_date(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "created_at", [], "any", false, false, false, 5)), "html", null, true);
        echo "

Manage order ";
        // line 7
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("order/manage");
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "id", [], "any", false, false, false, 7), "html", null, true);
        echo "

";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_company", [], "any", false, false, false, 9), "signature", [], "any", false, false, false, 9), "html", null, true);
        echo "

";
        $___internal_6f75038e6af34d57f87f3b4b59f7b36aa413c8f6b30d20fb1b97e53b7857a921_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 2
        echo twig_markdown_filter($this->env, $___internal_6f75038e6af34d57f87f3b4b59f7b36aa413c8f6b30d20fb1b97e53b7857a921_);
    }

    public function getTemplateName()
    {
        return "__string_template__638f29537adbe5bb1f9b75ce61c0240e223225fc78e21f8eb8455027d05bbb0c";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 2,  66 => 9,  59 => 7,  48 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% apply markdown %}
Hi {{ staff.name }},

Client **{{ order.client.first_name }} {{ order.client.last_name }}** placed a new order for **{{ order.title }}** on {{ order.created_at|bb_date }}

Manage order {{'order/manage'|alink}}/{{order.id}}

{{ guest.system_company.signature }}

{% endapply %}
", "__string_template__638f29537adbe5bb1f9b75ce61c0240e223225fc78e21f8eb8455027d05bbb0c", "");
    }
}
