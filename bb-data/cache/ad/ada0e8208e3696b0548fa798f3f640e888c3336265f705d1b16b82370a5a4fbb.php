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

/* mod_forum_settings.phtml */
class __TwigTemplate_d0f99b91bd6fcd36c4238e563134e2378a92effd0744faa1e85e4158fe2c1b02 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'meta_title' => [$this, 'block_meta_title'],
            'breadcrumbs' => [$this, 'block_breadcrumbs'],
            'content' => [$this, 'block_content'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.phtml") : ("layout_default.phtml")), "mod_forum_settings.phtml", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.phtml", "mod_forum_settings.phtml", 2)->unwrap();
        // line 4
        $context["active_menu"] = "system";
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo gettext("Forum settings");
    }

    // line 6
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "<ul>
    <li class=\"firstB\"><a href=\"";
        // line 8
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/");
        echo "\">";
        echo gettext("Home");
        echo "</a></li>
    <li><a href=\"";
        // line 9
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("system");
        echo "\">";
        echo gettext("Settings");
        echo "</a></li>
    <li class=\"lastB\">";
        // line 10
        echo gettext("Forum settings");
        echo "</li>
</ul>
";
    }

    // line 15
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "
<div class=\"widget\">
    <div class=\"head\">
        <h5 class=\"iCog\">";
        // line 19
        echo gettext("Forum settings");
        echo "</h5>
    </div>

    ";
        // line 22
        $context["params"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "extension_config_get", [0 => ["ext" => "mod_forum"]], "method", false, false, false, 22);
        // line 23
        echo "    
    <form method=\"post\" action=\"";
        // line 24
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/extension/config_save");
        echo "\" class=\"mainForm api-form\" data-api-msg=\"";
        echo gettext("Configuration updated");
        echo "\">
        <fieldset>
            <div class=\"rowElem noborder\">
                <label>";
        // line 27
        echo gettext("Forum points");
        echo "</label>
                <div class=\"formRight\">
                    <input type=\"radio\" name=\"forum_points_enable\" value=\"1\"";
        // line 29
        if (twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "forum_points_enable", [], "any", false, false, false, 29)) {
            echo " checked=\"checked\"";
        }
        echo "/><label>";
        echo gettext("Enabled");
        echo "</label>
                    <input type=\"radio\" name=\"forum_points_enable\" value=\"0\"";
        // line 30
        if ( !twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "forum_points_enable", [], "any", false, false, false, 30)) {
            echo " checked=\"checked\"";
        }
        echo " /><label>";
        echo gettext("Disabled");
        echo "</label>
                </div>
                <div class=\"fix\"></div>
            </div>

            <div id=\"forum_points_block\" ";
        // line 35
        if ( !twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "forum_points_enable", [], "any", false, false, false, 35)) {
            echo "style=\"display:none;\"";
        }
        echo ">
            <div class=\"rowElem\">
                <div class=\"formBottom moreFields\">
                    <ul>
                        <li class=\"sep txt\">Give</li>
                        <li style=\"width: 50px\"><input type=\"text\" name=\"points\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "points", [], "any", false, false, false, 40), "html", null, true);
        echo "\" placeholder=\"0\"></li>
                        <li class=\"sep txt\">points if post length is longer than</li>
                        <li style=\"width: 50px\">
                            <input type=\"text\" name=\"post_length\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "post_length", [], "any", false, false, false, 43), "html", null, true);
        echo "\" placeholder=\"0\"/>
                        </li>
                        <li class=\"sep txt\">symbols</li>
                    </ul>
                </div>
                <div class=\"fix\"></div>
            </div>
            
            <table class=\"tableStatic wide with-tbb\">
                <thead>
                    <tr>
                        <td style=\"width: 5%\">
                            <input type=\"checkbox\" id=\"perm-check\" /> 
                        </td>
                        <td>";
        // line 57
        echo gettext("Give points for posting in selected forums");
        echo "</td>
                    </tr>
                </thead>
                
                <tbody>
                ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "forum_get_categories", [], "any", false, false, false, 62));
        foreach ($context['_seq'] as $context["category"] => $context["forums"]) {
            // line 63
            echo "                <tr class=\"group\">
                    <th colspan=\"2\">";
            // line 64
            echo twig_escape_filter($this->env, $context["category"], "html", null, true);
            echo "</th>
                </tr>
                ";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["forums"]);
            foreach ($context['_seq'] as $context["_key"] => $context["forum"]) {
                // line 67
                echo "                <tr>
                    <td>
                        <input type=\"checkbox\" name=\"points_forums[]\" value=\"";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["forum"], "id", [], "any", false, false, false, 69), "html", null, true);
                echo "\" class=\"perm\" ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["forum"], "id", [], "any", false, false, false, 69), twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "points_forums", [], "any", false, false, false, 69))) {
                    echo "checked=\"checked\"";
                }
                echo "/>
                    </td>
                    <td>";
                // line 71
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["forum"], "title", [], "any", false, false, false, 71), "html", null, true);
                echo "</td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forum'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['category'], $context['forums'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                </tbody>
            </table>
            <br/>
            </div>
            
            <input type=\"submit\" value=\"";
        // line 80
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" />
            <input type=\"hidden\" name=\"ext\" value=\"mod_forum\" />
        </fieldset>
    </form>
</div>

";
    }

    // line 88
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 89
        echo "<script type=\"text/javascript\">
    
\$(function() {
    \$('input[name=forum_points_enable]').click(function(){
        if(\$(this).val() == 1) {
            \$('#forum_points_block').slideDown();
        } else {
            \$('#forum_points_block').slideUp();
        }
    });

    \$('#perm-check').click(function(){
        if(\$('#perm-check').is(':checked')) {
            \$('.perm').prop('checked', true);
        } else {
            \$('.perm').prop('checked', false);
        }
        \$.uniform.update(\".perm\");
    });
});

</script>
";
    }

    public function getTemplateName()
    {
        return "mod_forum_settings.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 89,  242 => 88,  231 => 80,  224 => 75,  218 => 74,  209 => 71,  200 => 69,  196 => 67,  192 => 66,  187 => 64,  184 => 63,  180 => 62,  172 => 57,  155 => 43,  149 => 40,  139 => 35,  127 => 30,  119 => 29,  114 => 27,  106 => 24,  103 => 23,  101 => 22,  95 => 19,  90 => 16,  86 => 15,  79 => 10,  73 => 9,  67 => 8,  64 => 7,  60 => 6,  53 => 3,  49 => 1,  47 => 4,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends request.ajax ? \"layout_blank.phtml\" : \"layout_default.phtml\" %}
{% import \"macro_functions.phtml\" as mf %}
{% block meta_title %}{% trans 'Forum settings' %}{% endblock %}
{% set active_menu = 'system' %}

{% block breadcrumbs %}
<ul>
    <li class=\"firstB\"><a href=\"{{ '/'|alink }}\">{% trans 'Home' %}</a></li>
    <li><a href=\"{{ 'system'|alink }}\">{% trans 'Settings' %}</a></li>
    <li class=\"lastB\">{% trans 'Forum settings' %}</li>
</ul>
{% endblock %}


{% block content %}

<div class=\"widget\">
    <div class=\"head\">
        <h5 class=\"iCog\">{% trans 'Forum settings' %}</h5>
    </div>

    {% set params = admin.extension_config_get({\"ext\":\"mod_forum\"}) %}
    
    <form method=\"post\" action=\"{{ 'api/admin/extension/config_save'|link }}\" class=\"mainForm api-form\" data-api-msg=\"{% trans 'Configuration updated' %}\">
        <fieldset>
            <div class=\"rowElem noborder\">
                <label>{% trans 'Forum points' %}</label>
                <div class=\"formRight\">
                    <input type=\"radio\" name=\"forum_points_enable\" value=\"1\"{% if params.forum_points_enable %} checked=\"checked\"{% endif %}/><label>{% trans 'Enabled' %}</label>
                    <input type=\"radio\" name=\"forum_points_enable\" value=\"0\"{% if not params.forum_points_enable %} checked=\"checked\"{% endif %} /><label>{% trans 'Disabled' %}</label>
                </div>
                <div class=\"fix\"></div>
            </div>

            <div id=\"forum_points_block\" {% if not params.forum_points_enable %}style=\"display:none;\"{% endif %}>
            <div class=\"rowElem\">
                <div class=\"formBottom moreFields\">
                    <ul>
                        <li class=\"sep txt\">Give</li>
                        <li style=\"width: 50px\"><input type=\"text\" name=\"points\" value=\"{{ params.points }}\" placeholder=\"0\"></li>
                        <li class=\"sep txt\">points if post length is longer than</li>
                        <li style=\"width: 50px\">
                            <input type=\"text\" name=\"post_length\" value=\"{{params.post_length}}\" placeholder=\"0\"/>
                        </li>
                        <li class=\"sep txt\">symbols</li>
                    </ul>
                </div>
                <div class=\"fix\"></div>
            </div>
            
            <table class=\"tableStatic wide with-tbb\">
                <thead>
                    <tr>
                        <td style=\"width: 5%\">
                            <input type=\"checkbox\" id=\"perm-check\" /> 
                        </td>
                        <td>{% trans 'Give points for posting in selected forums' %}</td>
                    </tr>
                </thead>
                
                <tbody>
                {% for category, forums in admin.forum_get_categories %}
                <tr class=\"group\">
                    <th colspan=\"2\">{{category}}</th>
                </tr>
                {% for forum in forums %}
                <tr>
                    <td>
                        <input type=\"checkbox\" name=\"points_forums[]\" value=\"{{forum.id}}\" class=\"perm\" {% if forum.id in params.points_forums %}checked=\"checked\"{%endif%}/>
                    </td>
                    <td>{{forum.title}}</td>
                </tr>
                {% endfor %}
                {% endfor %}
                </tbody>
            </table>
            <br/>
            </div>
            
            <input type=\"submit\" value=\"{% trans 'Update' %}\" class=\"greyishBtn submitForm\" />
            <input type=\"hidden\" name=\"ext\" value=\"mod_forum\" />
        </fieldset>
    </form>
</div>

{% endblock %}

{% block js %}
<script type=\"text/javascript\">
    
\$(function() {
    \$('input[name=forum_points_enable]').click(function(){
        if(\$(this).val() == 1) {
            \$('#forum_points_block').slideDown();
        } else {
            \$('#forum_points_block').slideUp();
        }
    });

    \$('#perm-check').click(function(){
        if(\$('#perm-check').is(':checked')) {
            \$('.perm').prop('checked', true);
        } else {
            \$('.perm').prop('checked', false);
        }
        \$.uniform.update(\".perm\");
    });
});

</script>
{% endblock %}", "mod_forum_settings.phtml", "/home/lexcicxy/hostshibe.cf/bb-modules/Forum/html_admin/mod_forum_settings.phtml");
    }
}
