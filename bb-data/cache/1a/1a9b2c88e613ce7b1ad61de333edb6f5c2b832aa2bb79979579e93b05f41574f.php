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

/* partial_steps.phtml */
class __TwigTemplate_8ceead82af963d8d48b9499d6b768ae44b54a2102774403455455982212e69b1 extends \Twig\Template
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
        echo "<ol class=\"breadcrumb\">
    ";
        // line 2
        if ((($context["selected"] ?? null) == 1)) {
            echo "<li class=\"active\">1 ";
            echo gettext("Select product");
            echo "</a></li>
\t";
        } else {
            // line 3
            echo "<li><a href=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("order");
            echo "\">1 ";
            echo gettext("Select product");
            echo "</a></li>";
        }
        // line 4
        echo "\t";
        if ((($context["selected"] ?? null) == 2)) {
            echo "<li class=\"active\">2 ";
            echo gettext("Configure");
            echo " ";
            if (($context["product"] ?? null)) {
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "title", [], "any", false, false, false, 4), "html", null, true);
            }
            echo "</li>
\t";
        } else {
            // line 5
            echo "<li>2 ";
            echo gettext("Configure");
            echo "</li>";
        }
        // line 6
        echo "\t<li class=\"";
        if ((($context["selected"] ?? null) == 3)) {
            echo "active";
        }
        echo "\">3 ";
        echo gettext("Confirm");
        echo "</li>
\t<li class=\"";
        // line 7
        if ((($context["selected"] ?? null) == 4)) {
            echo "active";
        }
        echo "\">4 ";
        echo gettext("Checkout");
        echo "</li>
</ol>";
    }

    public function getTemplateName()
    {
        return "partial_steps.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 7,  72 => 6,  67 => 5,  54 => 4,  47 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<ol class=\"breadcrumb\">
    {% if selected == 1 %}<li class=\"active\">1 {% trans 'Select product' %}</a></li>
\t{% else %}<li><a href=\"{{ 'order'|link }}\">1 {% trans 'Select product' %}</a></li>{% endif %}
\t{% if selected == 2 %}<li class=\"active\">2 {% trans 'Configure' %} {% if product %} {{ product.title }}{% endif %}</li>
\t{% else %}<li>2 {% trans 'Configure' %}</li>{% endif %}
\t<li class=\"{% if selected == 3 %}active{% endif %}\">3 {% trans 'Confirm' %}</li>
\t<li class=\"{% if selected == 4 %}active{% endif %}\">4 {% trans 'Checkout' %}</li>
</ol>", "partial_steps.phtml", "/home/lexcicxy/hostshibe.cf/bb-themes/bootstrap/html/partial_steps.phtml");
    }
}
