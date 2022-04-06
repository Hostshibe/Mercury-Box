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

/* mod_support_tickets.phtml */
class __TwigTemplate_fc16e2be31433fb3d6128d4d0002377df615a2b93e0ffd53aa30d19bfa964cf1 extends \Twig\Template
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
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.phtml") : ("layout_default.phtml")), "mod_support_tickets.phtml", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.phtml", "mod_support_tickets.phtml", 2)->unwrap();
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo gettext("Support tickets");
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
        echo gettext("Support tickets");
        // line 10
        echo "\t\t\t\t\t<small>";
        echo gettext("Need an answer? We are here to help");
        echo "</small>
\t\t\t\t<h1>
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
    <div class=\"list-group\">
\t\t";
        // line 19
        $context["tickets"] = twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "support_ticket_get_list", [0 => ["per_page" => 10, "page" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "page", [], "any", false, false, false, 19)]], "method", false, false, false, 19);
        // line 20
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["tickets"] ?? null), "list", [], "any", false, false, false, 20));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["ticket"]) {
            // line 21
            echo "\t\t<a href=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("support/ticket");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 21), "html", null, true);
            echo "\" class=\"list-group-item ";
            if ((twig_get_attribute($this->env, $this->source, $context["ticket"], "status", [], "any", false, false, false, 21) == "closed")) {
                echo "list-group-item-success";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["ticket"], "status", [], "any", false, false, false, 21) == "on_hold")) {
                echo "list-group-item-warning";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["ticket"], "status", [], "any", false, false, false, 21) == "open")) {
                echo "list-group-item-danger";
            }
            echo "\">
\t\t\t<span class=\"label label-default\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ticket"], "helpdesk", [], "any", false, false, false, 22), "name", [], "any", false, false, false, 22), "html", null, true);
            echo "</span>
\t\t\t<strong>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "subject", [], "any", false, false, false, 23), "html", null, true);
            echo "</strong>
\t\t\t- ";
            // line 24
            echo gettext("Last post");
            echo " ";
            echo twig_escape_filter($this->env, twig_timeago_filter(twig_get_attribute($this->env, $this->source, $context["ticket"], "updated_at", [], "any", false, false, false, 24)), "html", null, true);
            echo " ";
            echo gettext("ago");
            echo " 
\t\t\t<span class=\"pull-right label ";
            // line 25
            if ((twig_get_attribute($this->env, $this->source, $context["ticket"], "status", [], "any", false, false, false, 25) == "open")) {
                echo "label-danger";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["ticket"], "status", [], "any", false, false, false, 25) == "on_hold")) {
                echo "label-warning";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["ticket"], "status", [], "any", false, false, false, 25) == "closed")) {
                echo "label-success";
            } else {
                echo "label-default";
            }
            echo "\">";
            echo twig_call_macro($macros["mf"], "macro_status_name", [twig_get_attribute($this->env, $this->source, $context["ticket"], "status", [], "any", false, false, false, 25)], 25, $context, $this->getSourceContext());
            echo "</span>
\t\t</a>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 27
            echo gettext("The list is empty");
            // line 28
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['ticket'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "\t</div>
\t
\t<div class=\"text-center\">
\t\t";
        // line 32
        $this->loadTemplate("partial_pagination.phtml", "mod_support_tickets.phtml", 32)->display(twig_array_merge($context, ["list" => ($context["tickets"] ?? null)]));
        // line 33
        echo "\t\t<p>
\t\t\t";
        // line 34
        if (twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "extension_is_on", [0 => ["mod" => "kb"]], "method", false, false, false, 34)) {
            echo "<a class=\"btn btn-info\" data-toggle=\"collapse\" data-target=\"#kb\" aria-expanded=\"false\" aria-controls=\"kb\">";
            echo gettext("Knowledge Base");
            echo "</a>";
        }
        // line 35
        echo "\t\t\t<a class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#tickets\">";
        echo gettext("Submit new ticket");
        echo "</a>
\t\t</p>
\t</div>
\t
\t";
        // line 39
        if (twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "extension_is_on", [0 => ["mod" => "kb"]], "method", false, false, false, 39)) {
            // line 40
            echo "\t<div class=\"collapse well\" id=\"kb\">
\t\t<h4>";
            // line 41
            echo gettext("Knowledge Base");
            echo "</h4>
\t\t<div class=\"input-group\">
\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t<span class=\"input-group-btn\"><button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-search\"></i></button></span>
\t\t</div>
\t\t<hr>
\t\t<div class=\"list-group panel\" id=\"kb\">
\t\t";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "kb_category_get_list", [], "any", false, false, false, 48), "list", [], "any", false, false, false, 48));
            foreach ($context['_seq'] as $context["i"] => $context["category"]) {
                // line 49
                echo "\t\t\t<a href=\"#category-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 49), "html", null, true);
                echo "\" class=\"list-group-item text-center\" data-toggle=\"collapse\" data-parent=\"#kb\"><strong>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "title", [], "any", false, false, false, 49), "html", null, true);
                echo "</strong></a>
\t\t\t<div class=\"collapse\" id=\"category-";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 50), "html", null, true);
                echo "\">
\t\t\t";
                // line 51
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "articles", [], "any", false, false, false, 51));
                foreach ($context['_seq'] as $context["i"] => $context["article"]) {
                    // line 52
                    echo "\t\t\t\t<a href=\"";
                    echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/kb");
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "category", [], "any", false, false, false, 52), "slug", [], "any", false, false, false, 52), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "slug", [], "any", false, false, false, 52), "html", null, true);
                    echo "\" class=\"list-group-item\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 52), "html", null, true);
                    echo "</a>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['article'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "\t\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "\t\t</div>\t\t
    </div> 
\t";
        }
        // line 59
        echo "
\t<div class=\"modal fade\" id=\"tickets\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"";
        // line 60
        echo gettext("Open new support ticket regarding this order");
        echo "\">
\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t\t<h4 class=\"modal-title\" id=\"myModalLabel\">";
        // line 65
        echo gettext("Submit new support ticket");
        echo "</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<form method=\"post\" action=\"\" class=\"api_form\" data-api-url=\"client/support/ticket_create\" data-api-tocreated=\"";
        // line 68
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("support/ticket");
        echo "\">
\t\t\t\t\t\t<div class=\"control-group form-group\">
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<label>";
        // line 71
        echo gettext("Help desk");
        echo ":</label>
\t\t\t\t\t\t\t\t";
        // line 72
        echo twig_call_macro($macros["mf"], "macro_selectbox", ["support_helpdesk_id", twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "support_helpdesk_get_pairs", [], "any", false, false, false, 72), twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "support_helpdesk_id", [], "any", false, false, false, 72), 1], 72, $context, $this->getSourceContext());
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"control-group form-group\">
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<label>";
        // line 77
        echo gettext("Subject");
        echo ":</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"subject\" value=\"\" required=\"required\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"control-group form-group\">
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<label>";
        // line 83
        echo gettext("Reason");
        echo ":</label>
\t\t\t\t\t\t\t\t<textarea rows=\"10\" cols=\"100\" class=\"form-control\" name=\"content\" maxlength=\"999\" style=\"resize:none\" required=\"required\" data-provide=\"markdown\" data-iconlibrary=\"fa\">";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "content", [], "any", false, false, false, 84));
        echo "</textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i></button>
\t\t\t\t\t\t<input class=\"btn btn-danger\" type=\"submit\" value=\"";
        // line 90
        echo gettext("Submit");
        echo "\">
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "mod_support_tickets.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 90,  285 => 84,  281 => 83,  272 => 77,  264 => 72,  260 => 71,  254 => 68,  248 => 65,  240 => 60,  237 => 59,  232 => 56,  225 => 54,  210 => 52,  206 => 51,  202 => 50,  195 => 49,  191 => 48,  181 => 41,  178 => 40,  176 => 39,  168 => 35,  162 => 34,  159 => 33,  157 => 32,  152 => 29,  146 => 28,  144 => 27,  126 => 25,  118 => 24,  114 => 23,  110 => 22,  95 => 21,  89 => 20,  87 => 19,  83 => 17,  79 => 16,  68 => 10,  66 => 9,  61 => 6,  57 => 5,  50 => 3,  46 => 1,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends request.ajax ? \"layout_blank.phtml\" : \"layout_default.phtml\" %}
{% import \"macro_functions.phtml\" as mf %}
{% block meta_title %}{% trans 'Support tickets' %}{% endblock %}

{% block content_before %}
\t\t<!-- Page Heading/Breadcrumbs -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">{% trans 'Support tickets' %}
\t\t\t\t\t<small>{% trans 'Need an answer? We are here to help' %}</small>
\t\t\t\t<h1>
            </div>
        </div>
        <!-- /.row -->
{% endblock %}
{% block content %}

    <div class=\"list-group\">
\t\t{% set tickets = client.support_ticket_get_list({\"per_page\":10, \"page\":request.page}) %}
        {% for i, ticket in tickets.list %}
\t\t<a href=\"{{ 'support/ticket'|link }}/{{ticket.id}}\" class=\"list-group-item {% if ticket.status == \"closed\" %}list-group-item-success{% elseif ticket.status == \"on_hold\" %}list-group-item-warning{% elseif ticket.status == \"open\" %}list-group-item-danger{% endif %}\">
\t\t\t<span class=\"label label-default\">{{ticket.helpdesk.name}}</span>
\t\t\t<strong>{{ticket.subject}}</strong>
\t\t\t- {% trans 'Last post' %} {{ ticket.updated_at|timeago }} {% trans 'ago' %} 
\t\t\t<span class=\"pull-right label {% if ticket.status == \"open\" %}label-danger{% elseif ticket.status == \"on_hold\" %}label-warning{% elseif ticket.status == \"closed\" %}label-success{% else %}label-default{% endif %}\">{{ mf.status_name(ticket.status) }}</span>
\t\t</a>
\t\t{% else %}{% trans 'The list is empty' %}
\t\t{% endfor %}
\t</div>
\t
\t<div class=\"text-center\">
\t\t{% include \"partial_pagination.phtml\" with {'list': tickets} %}
\t\t<p>
\t\t\t{% if guest.extension_is_on({\"mod\":'kb'}) %}<a class=\"btn btn-info\" data-toggle=\"collapse\" data-target=\"#kb\" aria-expanded=\"false\" aria-controls=\"kb\">{% trans 'Knowledge Base' %}</a>{% endif %}
\t\t\t<a class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#tickets\">{% trans 'Submit new ticket' %}</a>
\t\t</p>
\t</div>
\t
\t{% if guest.extension_is_on({\"mod\":'kb'}) %}
\t<div class=\"collapse well\" id=\"kb\">
\t\t<h4>{% trans 'Knowledge Base' %}</h4>
\t\t<div class=\"input-group\">
\t\t\t<input type=\"text\" class=\"form-control\">
\t\t\t<span class=\"input-group-btn\"><button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-search\"></i></button></span>
\t\t</div>
\t\t<hr>
\t\t<div class=\"list-group panel\" id=\"kb\">
\t\t{% for i, category in guest.kb_category_get_list.list %}
\t\t\t<a href=\"#category-{{category.id}}\" class=\"list-group-item text-center\" data-toggle=\"collapse\" data-parent=\"#kb\"><strong>{{category.title}}</strong></a>
\t\t\t<div class=\"collapse\" id=\"category-{{category.id}}\">
\t\t\t{% for i, article in category.articles %}
\t\t\t\t<a href=\"{{ '/kb'|link }}/{{article.category.slug}}/{{article.slug}}\" class=\"list-group-item\">{{article.title}}</a>
\t\t\t{% endfor %}
\t\t\t</div>
\t\t{% endfor %}
\t\t</div>\t\t
    </div> 
\t{% endif %}

\t<div class=\"modal fade\" id=\"tickets\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"{% trans 'Open new support ticket regarding this order' %}\">
\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t\t<h4 class=\"modal-title\" id=\"myModalLabel\">{% trans 'Submit new support ticket' %}</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<form method=\"post\" action=\"\" class=\"api_form\" data-api-url=\"client/support/ticket_create\" data-api-tocreated=\"{{ 'support/ticket'|link }}\">
\t\t\t\t\t\t<div class=\"control-group form-group\">
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<label>{% trans 'Help desk' %}:</label>
\t\t\t\t\t\t\t\t{{ mf.selectbox('support_helpdesk_id', client.support_helpdesk_get_pairs, request.support_helpdesk_id, 1) }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"control-group form-group\">
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<label>{% trans 'Subject' %}:</label>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"subject\" value=\"\" required=\"required\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"control-group form-group\">
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<label>{% trans 'Reason' %}:</label>
\t\t\t\t\t\t\t\t<textarea rows=\"10\" cols=\"100\" class=\"form-control\" name=\"content\" maxlength=\"999\" style=\"resize:none\" required=\"required\" data-provide=\"markdown\" data-iconlibrary=\"fa\">{{ request.content|e }}</textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i></button>
\t\t\t\t\t\t<input class=\"btn btn-danger\" type=\"submit\" value=\"{% trans 'Submit' %}\">
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
    </div>

{% endblock %}", "mod_support_tickets.phtml", "/home/lexcicxy/hostshibe.cf/bb-themes/bootstrap/html/mod_support_tickets.phtml");
    }
}
