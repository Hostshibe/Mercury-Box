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

/* __string_template__070ec5ab4051913d7e4d62904da33f5fddbc35cf6a7a2d71df281d43baa4254b */
class __TwigTemplate_e3454b3ffcb56c2ed9fe497dc87fb2d3ecd97de9a62c776c35176ba1b06825e4 extends \Twig\Template
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
        echo "] New Order Placed";
    }

    public function getTemplateName()
    {
        return "__string_template__070ec5ab4051913d7e4d62904da33f5fddbc35cf6a7a2d71df281d43baa4254b";
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
        return new Source("[{{ guest.system_company.name }}] New Order Placed", "__string_template__070ec5ab4051913d7e4d62904da33f5fddbc35cf6a7a2d71df281d43baa4254b", "");
    }
}
