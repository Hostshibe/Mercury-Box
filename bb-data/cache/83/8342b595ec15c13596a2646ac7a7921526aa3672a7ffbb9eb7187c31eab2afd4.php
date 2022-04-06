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

/* mod_custompages_index.phtml */
class __TwigTemplate_174257accea2d79a5e1cf4b412f7de10d5e235b3ba680b8f3e9b67eba01ddf4a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'meta_title' => [$this, 'block_meta_title'],
            'content' => [$this, 'block_content'],
            'js' => [$this, 'block_js'],
            'head' => [$this, 'block_head'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "layout_default.phtml";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.phtml", "mod_custompages_index.phtml", 1)->unwrap();
        // line 3
        $context["active_menu"] = "extensions";
        // line 2
        $this->parent = $this->loadTemplate("layout_default.phtml", "mod_custompages_index.phtml", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo gettext("Custom Pages");
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "<div class=\"widget simpleTabs\">

    <ul class=\"tabs\">
        <li><a href=\"#tab-index\">";
        // line 10
        echo gettext("Custom Pages");
        echo "</a></li>
        <li><a href=\"#tab-new\">";
        // line 11
        echo gettext("New Custom Page");
        echo "</a></li>
    </ul>

    <div class=\"tabs_container\">

        <div class=\"fix\"></div>
        <div class=\"tab_content nopadding\" id=\"tab-index\">
            ";
        // line 18
        echo twig_call_macro($macros["mf"], "macro_table_search", [], 18, $context, $this->getSourceContext());
        echo "
            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <td style=\"width: 2%\"><input type=\"checkbox\" class=\"batch-delete-master-checkbox\"/></td>
                        <td>";
        // line 23
        echo gettext("ID");
        echo "</td>
                        <td>";
        // line 24
        echo gettext("Title");
        echo "</td>
                        <td>";
        // line 25
        echo gettext("Slug");
        echo "</td>
                        <td width=\"13%\">&nbsp;</td>
                    </tr>
                </thead>

                <tbody>
                    ";
        // line 31
        $context["pages"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "custompages_get_list", [0 => twig_array_merge(["per_page" => 30, "page" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "page", [], "any", false, false, false, 31)], ($context["request"] ?? null))], "method", false, false, false, 31);
        // line 32
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["pages"] ?? null), "list", [], "any", false, false, false, 32));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 33
            echo "                    <tr>
                        <td><input type=\"checkbox\" class=\"batch-delete-checkbox\" data-item-id=\"";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "id", [], "any", false, false, false, 34), "html", null, true);
            echo "\"/></td>
                        <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "id", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                        <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "title", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                        <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "slug", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                        <td>
                            <a class=\"btn14\" href=\"";
            // line 39
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("page");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "slug", [], "any", false, false, false, 39), "html", null, true);
            echo "\" title=\"";
            echo gettext("View");
            echo "\"><img src=\"images/icons/dark/view.png\" alt=\"\"></a>
                            <a class=\"btn14\" href=\"";
            // line 40
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("custompages");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "id", [], "any", false, false, false, 40), "html", null, true);
            echo "\" title=\"";
            echo gettext("Edit");
            echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a>
                            <a class=\"btn14 bb-rm-tr api-link\" href=\"";
            // line 41
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/custompages/delete", ["id" => twig_get_attribute($this->env, $this->source, $context["page"], "id", [], "any", false, false, false, 41)]);
            echo "\" title=\"";
            echo gettext("Delete");
            echo "\" data-api-confirm=\"Are you sure?\" data-api-reload=\"1\"><img src=\"images/icons/dark/trash.png\" alt=\"\"></a>
                        </td>
                    </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 45
            echo "                    <tr>
                        <td colspan=\"7\">";
            // line 46
            echo gettext("The list is empty");
            echo "</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                </tbody>
            </table>

            ";
        // line 52
        $this->loadTemplate("partial_batch_delete.phtml", "mod_custompages_index.phtml", 52)->display(twig_array_merge($context, ["action" => "admin/custompages/batch_delete"]));
        // line 53
        echo "            ";
        $this->loadTemplate("partial_pagination.phtml", "mod_custompages_index.phtml", 53)->display(twig_array_merge($context, ["list" => ($context["pages"] ?? null), "url" => "custompages"]));
        // line 54
        echo "        </div>

        <div class=\"fix\"></div>

        <div class=\"tab_content nopadding\" id=\"tab-new\">

            <form method=\"post\" action=\"";
        // line 60
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/custompages/create");
        echo "\" class=\"mainForm api-form save\" data-api-redirect=\"";
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("custompages");
        echo "\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>";
        // line 63
        echo gettext("Title");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"title\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "title", [], "any", false, false, false, 65), "html", null, true);
        echo "\" required=\"required\" placeholder=\"";
        echo gettext("Enter page title here.");
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 70
        echo gettext("Meta Description");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"description\" value=\"";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "description", [], "any", false, false, false, 72), "html", null, true);
        echo "\" placeholder=\"";
        echo gettext("Enter page meta description here.");
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 77
        echo gettext("Meta Keywords");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"keywords\" value=\"";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "keywords", [], "any", false, false, false, 79), "html", null, true);
        echo "\" placeholder=\"";
        echo gettext("Enter page meta keywords here.");
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 84
        echo gettext("Content");
        echo ":</label>
                        <div class=\"formRight\">
                            <textarea class=\"bb-textarea\" name=\"content\" cols=\"5\" rows=\"5\" required=\"required\" placeholder=\"";
        // line 86
        echo gettext("Enter page content here.");
        echo "\"></textarea>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <input type=\"submit\" value=\"";
        // line 90
        echo gettext("Create");
        echo "\" class=\"greyishBtn submitForm\" />
                </fieldset>
            </form>
        </div>

    </div>
</div>

";
    }

    // line 100
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 101
        echo "


";
    }

    // line 106
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_call_macro($macros["mf"], "macro_bb_editor", [".bb-textarea"], 106, $context, $this->getSourceContext());
    }

    public function getTemplateName()
    {
        return "mod_custompages_index.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 106,  276 => 101,  272 => 100,  259 => 90,  252 => 86,  247 => 84,  237 => 79,  232 => 77,  222 => 72,  217 => 70,  207 => 65,  202 => 63,  194 => 60,  186 => 54,  183 => 53,  181 => 52,  176 => 49,  167 => 46,  164 => 45,  153 => 41,  145 => 40,  137 => 39,  132 => 37,  128 => 36,  124 => 35,  120 => 34,  117 => 33,  111 => 32,  109 => 31,  100 => 25,  96 => 24,  92 => 23,  84 => 18,  74 => 11,  70 => 10,  65 => 7,  61 => 6,  54 => 4,  49 => 2,  47 => 3,  45 => 1,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% import \"macro_functions.phtml\" as mf %}
{% extends \"layout_default.phtml\" %}
{% set active_menu = 'extensions' %}
{% block meta_title %}{% trans 'Custom Pages' %}{% endblock %}

{% block content %}
<div class=\"widget simpleTabs\">

    <ul class=\"tabs\">
        <li><a href=\"#tab-index\">{% trans 'Custom Pages' %}</a></li>
        <li><a href=\"#tab-new\">{% trans 'New Custom Page' %}</a></li>
    </ul>

    <div class=\"tabs_container\">

        <div class=\"fix\"></div>
        <div class=\"tab_content nopadding\" id=\"tab-index\">
            {{ mf.table_search }}
            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <td style=\"width: 2%\"><input type=\"checkbox\" class=\"batch-delete-master-checkbox\"/></td>
                        <td>{% trans 'ID' %}</td>
                        <td>{% trans 'Title' %}</td>
                        <td>{% trans 'Slug' %}</td>
                        <td width=\"13%\">&nbsp;</td>
                    </tr>
                </thead>

                <tbody>
                    {% set pages = admin.custompages_get_list({\"per_page\":30, \"page\":request.page}|merge(request)) %}
                    {% for page in pages.list %}
                    <tr>
                        <td><input type=\"checkbox\" class=\"batch-delete-checkbox\" data-item-id=\"{{ page.id }}\"/></td>
                        <td>{{ page.id }}</td>
                        <td>{{ page.title }}</td>
                        <td>{{ page.slug }}</td>
                        <td>
                            <a class=\"btn14\" href=\"{{ 'page'|link }}/{{ page.slug }}\" title=\"{% trans 'View' %}\"><img src=\"images/icons/dark/view.png\" alt=\"\"></a>
                            <a class=\"btn14\" href=\"{{ 'custompages'|alink }}/{{ page.id }}\" title=\"{% trans 'Edit' %}\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a>
                            <a class=\"btn14 bb-rm-tr api-link\" href=\"{{ 'api/admin/custompages/delete'|link({'id' : page.id}) }}\" title=\"{% trans 'Delete' %}\" data-api-confirm=\"Are you sure?\" data-api-reload=\"1\"><img src=\"images/icons/dark/trash.png\" alt=\"\"></a>
                        </td>
                    </tr>
                    {% else %}
                    <tr>
                        <td colspan=\"7\">{% trans 'The list is empty' %}</td>
                    </tr>
                    {% endfor %}
                </tbody>
            </table>

            {% include \"partial_batch_delete.phtml\" with {'action' : 'admin/custompages/batch_delete'} %}
            {% include \"partial_pagination.phtml\" with {'list': pages, 'url':'custompages'} %}
        </div>

        <div class=\"fix\"></div>

        <div class=\"tab_content nopadding\" id=\"tab-new\">

            <form method=\"post\" action=\"{{ 'api/admin/custompages/create'|link }}\" class=\"mainForm api-form save\" data-api-redirect=\"{{ 'custompages'|alink }}\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>{% trans 'Title' %}:</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"title\" value=\"{{request.title}}\" required=\"required\" placeholder=\"{% trans 'Enter page title here.' %}\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>{% trans 'Meta Description' %}:</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"description\" value=\"{{request.description}}\" placeholder=\"{% trans 'Enter page meta description here.' %}\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>{% trans 'Meta Keywords' %}:</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"keywords\" value=\"{{request.keywords}}\" placeholder=\"{% trans 'Enter page meta keywords here.' %}\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>{% trans 'Content' %}:</label>
                        <div class=\"formRight\">
                            <textarea class=\"bb-textarea\" name=\"content\" cols=\"5\" rows=\"5\" required=\"required\" placeholder=\"{% trans 'Enter page content here.' %}\"></textarea>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <input type=\"submit\" value=\"{% trans 'Create' %}\" class=\"greyishBtn submitForm\" />
                </fieldset>
            </form>
        </div>

    </div>
</div>

{% endblock %}

{% block js %}



{% endblock %}

{% block head %}{{ mf.bb_editor('.bb-textarea') }}{% endblock %}", "mod_custompages_index.phtml", "/home/lexcicxy/hostshibe.cf/bb-modules/Custompages/html_admin/mod_custompages_index.phtml");
    }
}
