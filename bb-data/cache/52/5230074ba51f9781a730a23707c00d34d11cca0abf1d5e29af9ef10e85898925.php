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

/* __string_template__7473f9235472556c07fbb28ca81cd32d5ba059251520938a113322cf9d63e9cf */
class __TwigTemplate_ef6e2a346908405d084ed85d6349d88f981b5d275df0b5d0db4566ebfa89f3be extends \Twig\Template
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
        echo "] Please confirm your email address ";
    }

    public function getTemplateName()
    {
        return "__string_template__7473f9235472556c07fbb28ca81cd32d5ba059251520938a113322cf9d63e9cf";
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
        return new Source("[{{ guest.system_company.name }}] Please confirm your email address ", "__string_template__7473f9235472556c07fbb28ca81cd32d5ba059251520938a113322cf9d63e9cf", "");
    }
}
