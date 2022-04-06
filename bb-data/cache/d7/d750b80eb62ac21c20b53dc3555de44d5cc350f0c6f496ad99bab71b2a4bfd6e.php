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

/* __string_template__60efe042a16f3841b2194dc2324847d7d0ba9dcf91c4dee4ced6c9fb8fc7ff85 */
class __TwigTemplate_8335ed833248f28b5a9214ce147ef64f4d8a2fae1e42517a5aa35395a1ed1e99 extends \Twig\Template
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
        echo "[";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_company", [], "any", false, false, false, 1), "name", [], "any", false, false, false, 1), "html", null, true);
        echo "] Invoice Created";
    }

    public function getTemplateName()
    {
        return "__string_template__60efe042a16f3841b2194dc2324847d7d0ba9dcf91c4dee4ced6c9fb8fc7ff85";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("[{{ guest.system_company.name }}] Invoice Created", "__string_template__60efe042a16f3841b2194dc2324847d7d0ba9dcf91c4dee4ced6c9fb8fc7ff85", "");
    }
}
