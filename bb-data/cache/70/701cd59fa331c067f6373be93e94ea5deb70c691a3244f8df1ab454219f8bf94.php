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

/* __string_template__05bf5c0d0124d05cb6fb12ca3537dcb0e891c1ce5e14f5781d78952a7b6fcb0a */
class __TwigTemplate_779dd852672610b1dc6dd7487afd18c02439be8dba925ce3351e71d2096ff7bd extends \Twig\Template
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

 *";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "first_name", [], "any", false, false, false, 5), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "last_name", [], "any", false, false, false, 5), "html", null, true);
        echo "* has just signed up with ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_company", [], "any", false, false, false, 5), "name", [], "any", false, false, false, 5), "html", null, true);
        echo "

Manage client at ";
        // line 7
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("client/manage");
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "id", [], "any", false, false, false, 7), "html", null, true);
        echo "

";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_company", [], "any", false, false, false, 9), "signature", [], "any", false, false, false, 9), "html", null, true);
        echo "

";
        $___internal_73a9922eed1b833bd88b37fb5f734d3fa9a74860b73eac3fe0501717b7f758a7_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 2
        echo twig_markdown_filter($this->env, $___internal_73a9922eed1b833bd88b37fb5f734d3fa9a74860b73eac3fe0501717b7f758a7_);
    }

    public function getTemplateName()
    {
        return "__string_template__05bf5c0d0124d05cb6fb12ca3537dcb0e891c1ce5e14f5781d78952a7b6fcb0a";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 2,  64 => 9,  57 => 7,  48 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% apply markdown %}
Hi {{ staff.name }},

 *{{ c.first_name }} {{ c.last_name }}* has just signed up with {{ guest.system_company.name }}

Manage client at {{'client/manage'|alink}}/{{c.id}}

{{ guest.system_company.signature }}

{% endapply %}
", "__string_template__05bf5c0d0124d05cb6fb12ca3537dcb0e891c1ce5e14f5781d78952a7b6fcb0a", "");
    }
}
