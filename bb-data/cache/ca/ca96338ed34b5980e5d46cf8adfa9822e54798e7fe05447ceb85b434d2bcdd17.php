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

/* __string_template__6384d7498e061a983796a0b6a0e6cff59f88c19512be044538d4f34809325fc9 */
class __TwigTemplate_ce1ee990a23438d9f1ee424d61bffa7748fd4bc24339ec14e2f01b2a91a9459a extends \Twig\Template
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
        echo "] Payment Reminder";
    }

    public function getTemplateName()
    {
        return "__string_template__6384d7498e061a983796a0b6a0e6cff59f88c19512be044538d4f34809325fc9";
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
        return new Source("[{{ guest.system_company.name }}] Payment Reminder", "__string_template__6384d7498e061a983796a0b6a0e6cff59f88c19512be044538d4f34809325fc9", "");
    }
}
