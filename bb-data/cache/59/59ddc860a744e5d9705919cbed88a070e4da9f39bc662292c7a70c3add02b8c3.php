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

/* mod_kb_index.phtml */
class __TwigTemplate_17421f66fbef53851a629880c5f1884c56db678ae6a3f5c6b792015e0282bf5c extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'meta_title' => [$this, 'block_meta_title'],
            'content_before' => [$this, 'block_content_before'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.phtml") : ("layout_default.phtml")), "mod_kb_index.phtml", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        if (twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "q", [], "any", false, false, false, 5)) {
            // line 6
            $context["kbcategories"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "kb_category_get_list", [0 => ["q" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "q", [], "any", false, false, false, 6)]], "method", false, false, false, 6);
        } else {
            // line 8
            $context["kbcategories"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "kb_category_get_list", [], "any", false, false, false, 8);
        }
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo gettext("Knowledge base");
    }

    // line 11
    public function block_content_before($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "\t\t<!-- Page Heading/Breadcrumbs -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 15
        echo gettext("Knowledge base");
        // line 16
        echo "                    <small>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "description", [], "any", false, false, false, 16), "html", null, true);
        echo "</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->
";
    }

    // line 22
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "
\t\t\t\t";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["kbcategories"] ?? null), "list", [], "any", false, false, false, 24));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["category"]) {
            // line 25
            echo "\t\t\t\t<h2 id=\"category-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 25), "html", null, true);
            echo "\">
                    <a href=\"";
            // line 26
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("kb");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 26), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "title", [], "any", false, false, false, 26), "html", null, true);
            echo "</a>
                </h2>
                <hr>
                <div class=\"list-group\">
\t\t\t\t\t";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "articles", [], "any", false, false, false, 30));
            foreach ($context['_seq'] as $context["i"] => $context["article"]) {
                // line 31
                echo "\t\t\t\t\t\t<a href=\"";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/kb");
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "category", [], "any", false, false, false, 31), "slug", [], "any", false, false, false, 31), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "slug", [], "any", false, false, false, 31), "html", null, true);
                echo "\" class=\"list-group-item\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 31), "html", null, true);
                echo "</a>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "\t\t\t\t</div>

                <hr>
\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 37
            echo "\t\t\t\t\t<p>
\t\t\t\t\t\t";
            // line 38
            echo gettext("Try using other keyword. No matches not for keyword:");
            // line 39
            echo "\t\t\t\t\t\t<b>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "q", [], "any", false, false, false, 39), "html", null, true);
            echo "</b>
\t\t\t\t\t</p>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "\t\t\t\t
\t\t\t<div class=\"well\">
                <h4>";
        // line 44
        echo gettext("What are you looking for?");
        echo "</h4>
\t\t\t\t<form method=\"get\" action=\"";
        // line 45
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("kb");
        echo "\">
                    <div class=\"input-group\">
\t\t\t\t\t\t<input name=\"q\" type=\"text\" class=\"form-control\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "q", [], "any", false, false, false, 47), "html", null, true);
        echo "\" placeholder=\"";
        echo gettext("What are you looking for?");
        echo "\">
                        <span class=\"input-group-btn\">
                            <button class=\"btn btn-default\" type=\"submit\"><i class=\"fa fa-search\"></i></button>
                        </span>
                    </div>
\t\t\t\t</form>
            </div>
";
    }

    public function getTemplateName()
    {
        return "mod_kb_index.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 47,  163 => 45,  159 => 44,  155 => 42,  145 => 39,  143 => 38,  140 => 37,  132 => 33,  117 => 31,  113 => 30,  102 => 26,  97 => 25,  92 => 24,  89 => 23,  85 => 22,  74 => 16,  72 => 15,  67 => 12,  63 => 11,  56 => 3,  52 => 1,  49 => 8,  46 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends request.ajax ? \"layout_blank.phtml\" : \"layout_default.phtml\" %}

{% block meta_title %}{%trans 'Knowledge base'%}{% endblock %}

    {% if request.q %}
        {% set kbcategories = guest.kb_category_get_list({\"q\": request.q}) %}
    {% else %}
        {% set kbcategories = guest.kb_category_get_list %}
    {% endif %}

{% block content_before %}
\t\t<!-- Page Heading/Breadcrumbs -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">{% trans 'Knowledge base' %}
                    <small>{{category.description }}</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->
{% endblock %}
{% block content %}

\t\t\t\t{% for i, category in kbcategories.list %}
\t\t\t\t<h2 id=\"category-{{category.id}}\">
                    <a href=\"{{ 'kb'|link }}/{{ category.slug }}\">{{category.title}}</a>
                </h2>
                <hr>
                <div class=\"list-group\">
\t\t\t\t\t{% for i, article in category.articles %}
\t\t\t\t\t\t<a href=\"{{ '/kb'|link }}/{{article.category.slug}}/{{article.slug}}\" class=\"list-group-item\">{{article.title}}</a>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>

                <hr>
\t\t\t\t{% else %}
\t\t\t\t\t<p>
\t\t\t\t\t\t{% trans 'Try using other keyword. No matches not for keyword:' %}
\t\t\t\t\t\t<b>{{ request.q }}</b>
\t\t\t\t\t</p>
\t\t\t\t{% endfor %}
\t\t\t\t
\t\t\t<div class=\"well\">
                <h4>{% trans 'What are you looking for?' %}</h4>
\t\t\t\t<form method=\"get\" action=\"{{ 'kb'|link }}\">
                    <div class=\"input-group\">
\t\t\t\t\t\t<input name=\"q\" type=\"text\" class=\"form-control\" value=\"{{ request.q }}\" placeholder=\"{% trans 'What are you looking for?' %}\">
                        <span class=\"input-group-btn\">
                            <button class=\"btn btn-default\" type=\"submit\"><i class=\"fa fa-search\"></i></button>
                        </span>
                    </div>
\t\t\t\t</form>
            </div>
{% endblock %}
", "mod_kb_index.phtml", "/home/lexcicxy/hostshibe.cf/bb-themes/bootstrap/html/mod_kb_index.phtml");
    }
}
