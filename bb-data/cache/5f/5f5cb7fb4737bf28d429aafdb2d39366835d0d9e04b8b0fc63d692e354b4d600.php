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

/* __string_template__6f2cbf4dce2868d78962dd5f558782dc39932b94eff5d94a74b4c0b25bd5bc11 */
class __TwigTemplate_66fdc7e8e53fd28caf23df22b582426eb0a98850d208286ec64aabdc4227474f extends \Twig\Template
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
        echo "] Welcome ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "first_name", [], "any", false, false, false, 1), "html", null, true);
    }

    public function getTemplateName()
    {
        return "__string_template__6f2cbf4dce2868d78962dd5f558782dc39932b94eff5d94a74b4c0b25bd5bc11";
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
        return new Source("[{{ guest.system_company.name }}] Welcome {{ c.first_name }}", "__string_template__6f2cbf4dce2868d78962dd5f558782dc39932b94eff5d94a74b4c0b25bd5bc11", "");
    }
}
