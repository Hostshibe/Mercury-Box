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

/* partial_pagination.phtml */
class __TwigTemplate_33844c946609ab6cda5faed7f37105b31cd15bbdc5d490bbffa3fd6093f7ae6a extends \Twig\Template
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
        if ((twig_get_attribute($this->env, $this->source, ($context["list"] ?? null), "pages", [], "any", false, false, false, 1) > 1)) {
            // line 2
            $context["page"] = twig_get_attribute($this->env, $this->source, ($context["list"] ?? null), "page", [], "any", false, false, false, 2);
            // line 3
            echo "
<div class=\"text-center\">
\t<ul class=\"pagination\">
\t  ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["list"] ?? null), "pages", [], "any", false, false, false, 6)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 7
                echo "\t\t";
                if (($context["i"] == ($context["page"] ?? null))) {
                    // line 8
                    echo "\t\t<li class=\"active\"><a href=\"#\" onclick=\"return false;\">";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "</a></li>
\t\t";
                } else {
                    // line 10
                    echo "\t\t<li><a href=\"?";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_merge(twig_array_merge([], ($context["request"] ?? null)), ["page" => $context["i"]]));
                    $context['loop'] = [
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    ];
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                        echo twig_escape_filter($this->env, $context["k"], "html", null, true);
                        echo "=";
                        echo twig_escape_filter($this->env, $context["v"], "html", null, true);
                        if ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 10) == false)) {
                            echo "&";
                        }
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "</a></li>
\t\t";
                }
                // line 12
                echo "\t  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "\t</ul>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "partial_pagination.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 13,  100 => 12,  59 => 10,  53 => 8,  50 => 7,  46 => 6,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if list.pages > 1 %}
{% set page = list.page %}

<div class=\"text-center\">
\t<ul class=\"pagination\">
\t  {% for i in 1..list.pages %}
\t\t{% if i == page %}
\t\t<li class=\"active\"><a href=\"#\" onclick=\"return false;\">{{ i }}</a></li>
\t\t{%else%}
\t\t<li><a href=\"?{% for k,v in {}|merge(request)|merge({'page': i}) %}{{k}}={{v}}{% if loop.last == FALSE %}&{%endif%}{% endfor %}\">{{ i }}</a></li>
\t\t{% endif %}
\t  {% endfor %}
\t</ul>
</div>
{% endif %}", "partial_pagination.phtml", "/home/lexcicxy/hostshibe.cf/bb-themes/bootstrap/html/partial_pagination.phtml");
    }
}
