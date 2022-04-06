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

/* mod_forum_index.phtml */
class __TwigTemplate_9101518b7c94806ed3cc1b29a2f42db85f212e9d846c1a8333595daf569591ad extends \Twig\Template
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
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.phtml") : ("layout_default.phtml")), "mod_forum_index.phtml", 1);
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
        echo gettext("Forum");
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
        echo gettext("Forum");
        // line 10
        echo "\t\t\t\t<small>";
        echo gettext("Welcome to our forums. If you wish to become a member and post, you have to be registered member.");
        echo "</small>
\t\t\t\t</h1>
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
        echo "
\t\t";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "forum_get_categories", [], "any", false, false, false, 18));
        foreach ($context['_seq'] as $context["cat_name"] => $context["forums"]) {
            // line 19
            echo "\t\t<h3>";
            echo twig_escape_filter($this->env, $context["cat_name"], "html", null, true);
            echo "</h3>
\t\t<div class=\"list-group\">
\t\t\t";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["forums"]);
            foreach ($context['_seq'] as $context["_key"] => $context["forum"]) {
                // line 22
                echo "\t\t\t<a href=\"";
                if ((twig_get_attribute($this->env, $this->source, $context["forum"], "status", [], "any", false, false, false, 22) != "locked")) {
                    echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/forum");
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["forum"], "slug", [], "any", false, false, false, 22), "html", null, true);
                }
                echo "\" class=\"list-group-item";
                if ((twig_get_attribute($this->env, $this->source, $context["forum"], "status", [], "any", false, false, false, 22) == "locked")) {
                    echo " disabled";
                }
                echo "\">
\t\t\t\t<h4 class=\"list-group-item-heading\">";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["forum"], "title", [], "any", false, false, false, 23), "html", null, true);
                echo "
\t\t\t\t\t<small class=\"pull-right\"><strong>";
                // line 24
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["forum"], "stats", [], "any", false, true, false, 24), "topics_count", [], "any", true, true, false, 24)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["forum"], "stats", [], "any", false, true, false, 24), "topics_count", [], "any", false, false, false, 24), 0)) : (0)), "html", null, true);
                echo " ";
                echo gettext("Threads");
                echo "</strong> - ";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["forum"], "stats", [], "any", false, true, false, 24), "posts_count", [], "any", true, true, false, 24)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["forum"], "stats", [], "any", false, true, false, 24), "posts_count", [], "any", false, false, false, 24), 0)) : (0)), "html", null, true);
                echo " ";
                echo gettext("Posts");
                echo "</small>
\t\t\t\t</h4>
\t\t\t\t<p class=\"list-group-item-text\">";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["forum"], "description", [], "any", false, false, false, 26), "html", null, true);
                echo "</p>
\t\t\t</a>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forum'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['cat_name'], $context['forums'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "            
            ";
        // line 32
        if ((($context["client"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "forum_favorites", [], "any", false, false, false, 32))) {
            // line 33
            echo "\t\t\t<p class=\"text-center\">
\t\t\t\t<a class=\"btn btn-primary\" role=\"button\" data-toggle=\"collapse\" href=\"#favorites\" aria-expanded=\"false\" aria-controls=\"favorites\">";
            // line 34
            echo gettext("Favorite topics");
            echo "</a>
\t\t\t</p>
\t\t\t<div class=\"collapse well\" id=\"favorites\">
            <table class=\"table table-hover\">
                <thead>
                    <tr>
                        <th style=\"width:5%\">&nbsp;</th>
                        <th style=\"width:5%\">&nbsp;</th>
                        <th style=\"width:40%\">";
            // line 42
            echo gettext("Thread / Thread Starter");
            echo "</th>
                        <th>";
            // line 43
            echo gettext("Last post");
            echo "</th>
                        <th>";
            // line 44
            echo gettext("Replies");
            echo "</th>
                        <th>";
            // line 45
            echo gettext("Views");
            echo "</th>
                    </tr>
                </thead>

                <tbody>
                    ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "forum_favorites", [], "any", false, false, false, 50));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["i"] => $context["topic"]) {
                // line 51
                echo "                    <tr class=\"";
                echo twig_escape_filter($this->env, twig_cycle([0 => "odd", 1 => "even"], $context["i"]), "html", null, true);
                echo "\">
                        <td>
                            <span class=\"forum-status ";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["topic"], "status", [], "any", false, false, false, 53), "html", null, true);
                echo "\"></span>
                        </td>
                        <td>
                            <img src=\"";
                // line 56
                echo twig_escape_filter($this->env, twig_gravatar_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["topic"], "first", [], "any", false, false, false, 56), "author", [], "any", false, false, false, 56), "email", [], "any", false, false, false, 56)), "html", null, true);
                echo "?size=30\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["topic"], "first", [], "any", false, false, false, 56), "author", [], "any", false, false, false, 56), "name", [], "any", false, false, false, 56), "html", null, true);
                echo "\" />
                        </td>
                        <td>
                            <a href=\"";
                // line 59
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/forum");
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["topic"], "forum", [], "any", false, false, false, 59), "slug", [], "any", false, false, false, 59), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["topic"], "slug", [], "any", false, false, false, 59), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["topic"], "title", [], "any", false, false, false, 59), "html", null, true);
                echo "</a>
                            <p style=\"font-size: .9em\">";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["topic"], "first", [], "any", false, false, false, 60), "author", [], "any", false, false, false, 60), "name", [], "any", false, false, false, 60), "html", null, true);
                echo "</p>
                        </td>
                        <td>
                            ";
                // line 63
                echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_bb_date(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["topic"], "last", [], "any", false, false, false, 63), "created_at", [], "any", false, false, false, 63)), "html", null, true);
                echo "
                            <p style=\"font-size: .9em\">";
                // line 64
                echo gettext("by");
                echo " <a href=\"";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/forum");
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["topic"], "forum", [], "any", false, false, false, 64), "slug", [], "any", false, false, false, 64), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["topic"], "slug", [], "any", false, false, false, 64), "html", null, true);
                echo "#m-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["topic"], "last", [], "any", false, false, false, 64), "id", [], "any", false, false, false, 64), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["topic"], "last", [], "any", false, false, false, 64), "author", [], "any", false, false, false, 64), "name", [], "any", false, false, false, 64), "html", null, true);
                echo " ";
                echo "</p>
                        </td>
                        <td>";
                // line 66
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["topic"], "stats", [], "any", false, false, false, 66), "posts_count", [], "any", false, false, false, 66), "html", null, true);
                echo "</td>
                        <td>";
                // line 67
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["topic"], "stats", [], "any", false, false, false, 67), "views_count", [], "any", false, false, false, 67), "html", null, true);
                echo "</td>
                    </tr>

                    ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 71
                echo "
                    <tr>
                        <td colspan=\"6\">";
                // line 73
                echo gettext("The list is empty");
                echo "</td>
                    </tr>

                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['topic'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "
                </tbody>

            </table>
\t\t\t</div>
            ";
        }
        // line 83
        echo "

    ";
        // line 85
        if ( !($context["client"] ?? null)) {
            // line 86
            echo "\t<p class=\"text-center\">
\t\t<a class=\"btn btn-primary\" href=\"\" data-toggle=\"modal\" data-target=\"#login\">";
            // line 87
            echo gettext("Login");
            echo "</a>
\t</p>
    ";
        }
        // line 90
        echo "    
";
    }

    public function getTemplateName()
    {
        return "mod_forum_index.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 90,  285 => 87,  282 => 86,  280 => 85,  276 => 83,  268 => 77,  258 => 73,  254 => 71,  245 => 67,  241 => 66,  225 => 64,  221 => 63,  215 => 60,  205 => 59,  197 => 56,  191 => 53,  185 => 51,  180 => 50,  172 => 45,  168 => 44,  164 => 43,  160 => 42,  149 => 34,  146 => 33,  144 => 32,  141 => 31,  134 => 29,  125 => 26,  114 => 24,  110 => 23,  97 => 22,  93 => 21,  87 => 19,  83 => 18,  80 => 17,  76 => 16,  65 => 10,  63 => 9,  58 => 6,  54 => 5,  47 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends request.ajax ? \"layout_blank.phtml\" : \"layout_default.phtml\" %}

{% block meta_title %}{% trans 'Forum' %}{% endblock %}

{% block content_before %}
\t\t<!-- Page Heading/Breadcrumbs -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">{% trans 'Forum' %}
\t\t\t\t<small>{% trans 'Welcome to our forums. If you wish to become a member and post, you have to be registered member.' %}</small>
\t\t\t\t</h1>
            </div>
        </div>
        <!-- /.row -->
{% endblock %}
{% block content %}

\t\t{% for cat_name, forums in guest.forum_get_categories %}
\t\t<h3>{{cat_name}}</h3>
\t\t<div class=\"list-group\">
\t\t\t{%  for forum in forums %}
\t\t\t<a href=\"{% if forum.status != \"locked\" %}{{ '/forum'|link }}/{{forum.slug}}{% endif %}\" class=\"list-group-item{% if forum.status == \"locked\" %} disabled{% endif %}\">
\t\t\t\t<h4 class=\"list-group-item-heading\">{{forum.title}}
\t\t\t\t\t<small class=\"pull-right\"><strong>{{forum.stats.topics_count|default(0)}} {% trans 'Threads' %}</strong> - {{forum.stats.posts_count|default(0)}} {% trans 'Posts' %}</small>
\t\t\t\t</h4>
\t\t\t\t<p class=\"list-group-item-text\">{{forum.description}}</p>
\t\t\t</a>
\t\t\t{% endfor %}
        </div>
        {% endfor %}
            
            {% if client and client.forum_favorites %}
\t\t\t<p class=\"text-center\">
\t\t\t\t<a class=\"btn btn-primary\" role=\"button\" data-toggle=\"collapse\" href=\"#favorites\" aria-expanded=\"false\" aria-controls=\"favorites\">{% trans 'Favorite topics' %}</a>
\t\t\t</p>
\t\t\t<div class=\"collapse well\" id=\"favorites\">
            <table class=\"table table-hover\">
                <thead>
                    <tr>
                        <th style=\"width:5%\">&nbsp;</th>
                        <th style=\"width:5%\">&nbsp;</th>
                        <th style=\"width:40%\">{% trans 'Thread / Thread Starter' %}</th>
                        <th>{% trans 'Last post' %}</th>
                        <th>{% trans 'Replies' %}</th>
                        <th>{% trans 'Views' %}</th>
                    </tr>
                </thead>

                <tbody>
                    {% for i, topic in client.forum_favorites %}
                    <tr class=\"{{ cycle(['odd', 'even'], i) }}\">
                        <td>
                            <span class=\"forum-status {{topic.status}}\"></span>
                        </td>
                        <td>
                            <img src=\"{{ topic.first.author.email|gravatar }}?size=30\" alt=\"{{ topic.first.author.name }}\" />
                        </td>
                        <td>
                            <a href=\"{{ '/forum'|link }}/{{topic.forum.slug}}/{{topic.slug}}\">{{topic.title}}</a>
                            <p style=\"font-size: .9em\">{{ topic.first.author.name }}</p>
                        </td>
                        <td>
                            {{ topic.last.created_at|bb_date }}
                            <p style=\"font-size: .9em\">{% trans 'by' %} <a href=\"{{ '/forum'|link }}/{{topic.forum.slug}}/{{topic.slug}}#m-{{ topic.last.id }}\">{{ topic.last.author.name }} {#<img src=\"{{ topic.last.author.email|gravatar }}?size=15\" alt=\"{{ topic.last.author.name }}\"></a>#}</p>
                        </td>
                        <td>{{ topic.stats.posts_count }}</td>
                        <td>{{ topic.stats.views_count }}</td>
                    </tr>

                    {% else %}

                    <tr>
                        <td colspan=\"6\">{% trans 'The list is empty' %}</td>
                    </tr>

                    {% endfor %}

                </tbody>

            </table>
\t\t\t</div>
            {% endif %}


    {% if not client %}
\t<p class=\"text-center\">
\t\t<a class=\"btn btn-primary\" href=\"\" data-toggle=\"modal\" data-target=\"#login\">{% trans 'Login' %}</a>
\t</p>
    {% endif %}
    
{% endblock %}", "mod_forum_index.phtml", "/home/lexcicxy/hostshibe.cf/bb-themes/bootstrap/html/mod_forum_index.phtml");
    }
}
