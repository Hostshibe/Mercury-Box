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

/* __string_template__fd5f475ffed5b2a220360ad8ab1852c21523b1617b3e018af5592c364f7c9367 */
class __TwigTemplate_18654b4061e0fb4ef3613d4690a650242a318317d96546bd3c4c6ad3ff980753 extends \Twig\Template
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

Please verify your email by clicking on the link below:

";
        // line 7
        echo twig_escape_filter($this->env, ($context["email_confirmation_link"] ?? null), "html", null, true);
        echo "

To login, visit ";
        // line 9
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("login", ["email" => twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "email", [], "any", false, false, false, 9)]);
        echo "
Edit your profile at ";
        // line 10
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("client/me");
        echo "

";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_company", [], "any", false, false, false, 12), "signature", [], "any", false, false, false, 12), "html", null, true);
        echo "

";
        $___internal_1dfc50e3afdc81329d75e7b1ac181fd3c1934951940d4de5d8be9f2ab3470c29_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 2
        echo twig_markdown_filter($this->env, $___internal_1dfc50e3afdc81329d75e7b1ac181fd3c1934951940d4de5d8be9f2ab3470c29_);
    }

    public function getTemplateName()
    {
        return "__string_template__fd5f475ffed5b2a220360ad8ab1852c21523b1617b3e018af5592c364f7c9367";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 2,  66 => 12,  61 => 10,  57 => 9,  52 => 7,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% apply markdown %}
Hello {{ c.first_name }} {{ c.last_name }},

Please verify your email by clicking on the link below:

{{email_confirmation_link}}

To login, visit {{'login'|link({'email' : c.email }) }}
Edit your profile at {{'client/me'|link}}

{{ guest.system_company.signature }}

{% endapply %}
", "__string_template__fd5f475ffed5b2a220360ad8ab1852c21523b1617b3e018af5592c364f7c9367", "");
    }
}
