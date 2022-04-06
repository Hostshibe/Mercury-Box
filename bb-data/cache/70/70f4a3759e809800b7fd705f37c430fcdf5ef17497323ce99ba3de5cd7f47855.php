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

/* mod_news_index.phtml */
class __TwigTemplate_270bb224c791a9787063a0d95fc33aa64509f6dc7096ad737e3ae106feeac9f2 extends \Twig\Template
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
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.phtml") : ("layout_default.phtml")), "mod_news_index.phtml", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo gettext("Blog");
    }

    // line 5
    public function block_content_before($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "\t\t<!-- Page Heading/Breadcrumbs -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 9
        echo gettext("News & Announcements");
        // line 10
        echo "                    <small>";
        echo gettext("Track our latest posts");
        echo "</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->
";
    }

    // line 16
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "\t\t
\t\t<!-- Blog Post Row -->
    ";
        // line 19
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "news_get_list", [0 => ["page" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "page", [], "any", false, false, false, 19), "per_page" => 5]], "method", false, false, false, 19);
        // line 20
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "list", [], "any", false, false, false, 20));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["i"] => $context["post"]) {
            // line 21
            echo "\t\t<div class=\"row\">
\t\t\t";
            // line 22
            if (twig_get_attribute($this->env, $this->source, $context["post"], "image", [], "any", false, false, false, 22)) {
                // line 23
                echo "\t\t\t<div class=\"col-md-6\">
                <a href=\"";
                // line 24
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/news");
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 24), "html", null, true);
                echo "\">
                   <img class=\"img-responsive img-hover\" src=\"";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "image", [], "any", false, false, false, 25), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 25), "html", null, true);
                echo "\">
                </a>
            </div>
\t\t\t<div class=\"col-md-6\">
\t\t\t";
            } else {
                // line 30
                echo "            <div class=\"col-md-12\">
\t\t\t";
            }
            // line 32
            echo "                <h3><a href=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/news");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 32), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 32), "html", null, true);
            echo "</a><h3>
\t\t\t\t<h4>";
            // line 33
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "updated_at", [], "any", false, false, false, 33), "Y-m-d h:i"), "html", null, true);
            echo "</h4>
                <p>
\t\t\t\t\t";
            // line 35
            if (twig_get_attribute($this->env, $this->source, $context["post"], "excerpt", [], "any", false, false, false, 35)) {
                // line 36
                echo "\t\t\t\t\t\t";
                echo twig_bbmd_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "excerpt", [], "any", false, false, false, 36));
                echo "
\t\t\t\t\t";
            } else {
                // line 38
                echo "\t\t\t\t\t\t";
                echo twig_bbmd_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "content", [], "any", false, false, false, 38));
                echo "
\t\t\t\t\t";
            }
            // line 40
            echo "\t\t\t\t</p>
                <a class=\"btn btn-primary\" href=\"";
            // line 41
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/news");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 41), "html", null, true);
            echo "\">";
            echo gettext("Read more..");
            echo " <i class=\"fa fa-angle-right\"></i></a>
            </div>
        </div>
\t\t";
            // line 44
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 44)) {
                echo "<hr>";
            }
            // line 45
            echo "    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 46
            echo "    <p>The list is empty</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        <!-- /.row -->
\t\t
\t";
        // line 50
        $this->loadTemplate("partial_pagination.phtml", "mod_news_index.phtml", 50)->display(twig_array_merge($context, ["list" => ($context["posts"] ?? null)]));
        // line 51
        echo "
";
    }

    public function getTemplateName()
    {
        return "mod_news_index.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 51,  202 => 50,  198 => 48,  191 => 46,  178 => 45,  174 => 44,  164 => 41,  161 => 40,  155 => 38,  149 => 36,  147 => 35,  142 => 33,  133 => 32,  129 => 30,  119 => 25,  113 => 24,  110 => 23,  108 => 22,  105 => 21,  86 => 20,  84 => 19,  80 => 17,  76 => 16,  65 => 10,  63 => 9,  58 => 6,  54 => 5,  47 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends request.ajax ? \"layout_blank.phtml\" : \"layout_default.phtml\" %}

{% block meta_title %}{% trans 'Blog'%}{% endblock %}

{% block content_before %}
\t\t<!-- Page Heading/Breadcrumbs -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">{% trans 'News & Announcements' %}
                    <small>{% trans 'Track our latest posts' %}</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->
{% endblock %}
{% block content %}
\t\t
\t\t<!-- Blog Post Row -->
    {% set posts = guest.news_get_list({\"page\":request.page,\"per_page\": 5}) %}
    {% for i, post in posts.list %}
\t\t<div class=\"row\">
\t\t\t{% if post.image %}
\t\t\t<div class=\"col-md-6\">
                <a href=\"{{ '/news'|link }}/{{post.slug}}\">
                   <img class=\"img-responsive img-hover\" src=\"{{post.image}}\" alt=\"{{post.title}}\">
                </a>
            </div>
\t\t\t<div class=\"col-md-6\">
\t\t\t{% else %}
            <div class=\"col-md-12\">
\t\t\t{% endif %}
                <h3><a href=\"{{ '/news'|link }}/{{post.slug}}\">{{post.title}}</a><h3>
\t\t\t\t<h4>{{post.updated_at|date('Y-m-d h:i')}}</h4>
                <p>
\t\t\t\t\t{% if post.excerpt %}
\t\t\t\t\t\t{{post.excerpt|bbmd}}
\t\t\t\t\t{% else %}
\t\t\t\t\t\t{{ post.content|bbmd }}
\t\t\t\t\t{% endif %}
\t\t\t\t</p>
                <a class=\"btn btn-primary\" href=\"{{ '/news'|link }}/{{post.slug}}\">{% trans 'Read more..' %} <i class=\"fa fa-angle-right\"></i></a>
            </div>
        </div>
\t\t{% if not loop.last %}<hr>{% endif %}
    {% else %}
    <p>The list is empty</p>
    {% endfor %}
        <!-- /.row -->
\t\t
\t{% include \"partial_pagination.phtml\" with {'list': posts} %}

{% endblock %}", "mod_news_index.phtml", "/home/lexcicxy/hostshibe.cf/bb-themes/bootstrap/html/mod_news_index.phtml");
    }
}
