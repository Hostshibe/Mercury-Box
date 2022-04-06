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

/* __string_template__a98de53423ef7ce83e9f419f3ca13731c9c9e82fa4f2fbb3325b9bce2a00695b */
class __TwigTemplate_a89c9c067c87d248cb9023a20da66563247bb92cc3af0b0b26b5b6b960b2ab8e extends \Twig\Template
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

Thank you for signing up with us. Your new account has been setup and you can now login to our client area using the details below.


Email: ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "email", [], "any", false, false, false, 8), "html", null, true);
        echo "    
Password: ";
        // line 9
        echo twig_escape_filter($this->env, ($context["password"] ?? null), "html", null, true);
        echo "

";
        // line 11
        if (($context["require_email_confirmation"] ?? null)) {
            // line 12
            echo "
Approve your email by clicking on the link below:

";
            // line 15
            echo twig_escape_filter($this->env, ($context["email_confirmation_link"] ?? null), "html", null, true);
            echo "

";
        }
        // line 18
        echo "
To login, visit ";
        // line 19
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("login", ["email" => twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "email", [], "any", false, false, false, 19)]);
        echo "
Edit your profile at ";
        // line 20
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("client/me");
        echo "

";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_company", [], "any", false, false, false, 22), "signature", [], "any", false, false, false, 22), "html", null, true);
        echo "

";
        $___internal_11208fb7efa85627ee433d340307d97d381eb24d95c3b60e89e8051ac6abc23b_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 2
        echo twig_markdown_filter($this->env, $___internal_11208fb7efa85627ee433d340307d97d381eb24d95c3b60e89e8051ac6abc23b_);
    }

    public function getTemplateName()
    {
        return "__string_template__a98de53423ef7ce83e9f419f3ca13731c9c9e82fa4f2fbb3325b9bce2a00695b";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 2,  87 => 22,  82 => 20,  78 => 19,  75 => 18,  69 => 15,  64 => 12,  62 => 11,  57 => 9,  53 => 8,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% apply markdown %}
Hello {{ c.first_name }} {{ c.last_name }},

Thank you for signing up with us. Your new account has been setup and you can now login to our client area using the details below.


Email: {{c.email}}    
Password: {{password}}

{% if require_email_confirmation %}

Approve your email by clicking on the link below:

{{email_confirmation_link}}

{% endif %}

To login, visit {{'login'|link({'email' : c.email }) }}
Edit your profile at {{'client/me'|link}}

{{ guest.system_company.signature }}

{% endapply %}
", "__string_template__a98de53423ef7ce83e9f419f3ca13731c9c9e82fa4f2fbb3325b9bce2a00695b", "");
    }
}
