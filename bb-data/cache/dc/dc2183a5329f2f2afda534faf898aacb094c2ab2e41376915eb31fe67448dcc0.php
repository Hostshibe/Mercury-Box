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

/* mod_theme_preset.phtml */
class __TwigTemplate_15ada696becec3acadd6eda359f15eb1afff8b3fbf80bd49693243f072b54dcb extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'breadcrumbs' => [$this, 'block_breadcrumbs'],
            'meta_title' => [$this, 'block_meta_title'],
            'content' => [$this, 'block_content'],
            'head' => [$this, 'block_head'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.phtml") : ("layout_default.phtml")), "mod_theme_preset.phtml", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $context["active_menu"] = "system";
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "<ul>
    <li class=\"firstB\"><a href=\"";
        // line 6
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/");
        echo "\">";
        echo gettext("Home");
        echo "</a></li>
    <li><a href=\"";
        // line 7
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("system");
        echo "\">";
        echo gettext("Settings");
        echo "</a></li>
    <li><a href=\"";
        // line 8
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("extension/settings/theme");
        echo "\">";
        echo gettext("Themes");
        echo "</a></li>
    <li class=\"lastB\">";
        // line 9
        echo gettext("Settings for");
        echo " ";
        echo twig_escape_filter($this->env, ($context["theme_code"] ?? null), "html", null, true);
        echo "</li>
</ul>
";
    }

    // line 14
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo gettext("Settings for");
        echo " ";
        echo twig_escape_filter($this->env, ($context["theme_code"] ?? null), "html", null, true);
    }

    // line 16
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "
";
        // line 18
        if (($context["error"] ?? null)) {
            // line 19
            echo "<div class=\"nNote nFailure hideit first\">
    <p><strong>";
            // line 20
            echo gettext("IMPORTANT");
            echo ": </strong>";
            echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
            echo "</p>
</div>
";
        }
        // line 23
        echo "
";
        // line 24
        if (($context["info"] ?? null)) {
            // line 25
            echo "<div class=\"nNote nInformation hideit first\">
    <p><strong>";
            // line 26
            echo gettext("INFORMATION");
            echo ": </strong>";
            echo twig_escape_filter($this->env, ($context["info"] ?? null), "html", null, true);
            echo "</p>
</div>
";
        }
        // line 29
        echo "
";
        // line 30
        if (($context["settings_html"] ?? null)) {
            // line 31
            echo "
<div class=\"widget\">
    <div class=\"head\" title=\"";
            // line 33
            echo gettext("Switch to a predefined set of theme settings from the dropdown. Adjust each section and apply the changes once you're done.");
            echo "\">
        <h5 class=\"iMoney\">Your current preset: </h5>
        <select name=\"preset\" style=\"margin-top: 10px;\" onchange=\"bb.post('admin/theme/preset_select', {code: '";
            // line 35
            echo twig_escape_filter($this->env, ($context["theme_code"] ?? null), "html", null, true);
            echo "', preset: \$(this).val() }, function(){ bb.reload(); })\">
            ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["presets"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["preset"]) {
                // line 37
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, $context["preset"], "html", null, true);
                echo "\" ";
                if (($context["preset"] == ($context["current_preset"] ?? null))) {
                    echo "selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["preset"], "html", null, true);
                echo "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['preset'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "        </select>
        ";
            // line 40
            if ((twig_length_filter($this->env, ($context["presets"] ?? null)) > 1)) {
                // line 41
                echo "        <a href=\"";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/theme/preset_delete", ["code" => ($context["theme_code"] ?? null), "preset" => ($context["current_preset"] ?? null)]);
                echo "\" class=\"api-link\" data-api-confirm=\"Are you sure?\" data-api-reload=\"1\">";
                echo gettext("delete this preset");
                echo "</a>
        ";
            }
            // line 43
            echo "    </div>

    <div id=\"theme-settings\">
        <form method=\"post\" action=\"\" enctype=\"multipart/form-data\">

            ";
            // line 48
            echo ($context["settings_html"] ?? null);
            echo "


            <div class=\"actions\">

                <input type=\"checkbox\" name=\"save-current-setting\" value=\"1\" id=\"save-current-setting\">
                <label for=\"save-current-setting\">";
            // line 54
            echo gettext("Save current settings as a new preset called");
            echo "</label>
                <input type=\"text\" name=\"save-current-setting-preset\" placeholder=\"\"/>

                <br/>
                <br/>
                <input type=\"submit\" value=\"";
            // line 59
            echo gettext("Apply changes");
            echo "\" class=\"greyishBtn\"/>
            </div>
        </form>
    </div>
</div>
";
        }
        // line 65
        echo "
";
    }

    // line 68
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 69
        echo "<script src='js/jquery.spectrum.js'></script>
<link rel='stylesheet' href='css/spectrum.css' />
";
    }

    // line 73
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 74
        echo "<script type=\"text/javascript\">

\$(function() {

    \$('#theme-settings fieldset').each(function(index, value){
        \$('<h3 class=\"section-header collapsed\"/>').text(\$(this).find('legend').text()).insertBefore(\$(this));
    });

    \$('#theme-settings h3.section-header').toggle(function() {
        \$(this).removeClass('collapsed').next().show();
    }, function() {
        \$(this).addClass('collapsed').next().hide();
    });

    \$('#theme-settings h3.section-header:first').click();


    //special class \"page\"
    \$(\"#theme-settings select.page\").each(function(){
        var sel = \$(this);
        sel.append('<option value=\"\">None</option>');
        \$.each(";
        // line 95
        echo json_encode(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "page_get_pairs", [], "any", false, false, false, 95));
        echo ", function(index, value){
            sel.append('<option value=\"' + index + '\">' + value + '</option>');
        });
    });

    //special class \"snippet\"
    \$(\"#theme-settings select.snippet\").each(function(){
        var sel = \$(this);
        sel.append('<option value=\"\">None</option>');
        \$.each(";
        // line 104
        echo json_encode(($context["snippets"] ?? null));
        echo ", function(index, value){
            sel.append('<option value=\"' + index + '\">' + value + '</option>');
        });
    });

    //special class \"product\"
    \$(\"#theme-settings select.product\").each(function(){
        var sel = \$(this);
        sel.append('<option value=\"\">None</option>');
        \$.each(";
        // line 113
        echo json_encode(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "product_get_pairs", [], "any", false, false, false, 113));
        echo ", function(index, value){
        sel.append('<option value=\"' + index + '\">' + value + '</option>');
    });
    });


// populate settings values

    //<![CDATA[
    var settings = ";
        // line 122
        echo json_encode(($context["settings"] ?? null));
        echo ";
    //]]>
    \$.each(settings, function(index, value){
        var el = \$('#theme-settings *[name=\"'+ index +'\"]');
        if(el.attr('type') == 'radio') {
            el.filter('[value=\"'+value+'\"]').attr('checked', true);
        } else if(el.attr('type') == 'checkbox') {
            el.attr('checked', true);
        } else {
            el.val(value);
        }
    });

    // show uploaded files
    var uploaded = ";
        // line 136
        echo json_encode(($context["uploaded"] ?? null));
        echo ";
    \$.each(uploaded, function(index, file){
        var input = \$('#theme-settings input[name=\"'+file.name+'\"]');
        \$('<div class=\"asset\">').html('<a href=\"'+ file.url +'\" target=\"_blank\" >'+file.name+'</a>').insertAfter(input);
    });

    //special class \"color\"
    \$(\"#theme-settings input.color\").spectrum({
        showInput: true,
        showButtons: true,
        showAlpha: false,
        clickoutFiresChange: true,
        theme: \"sp-boxbilling\",
        showInitial: true
    });
});

</script>
";
    }

    public function getTemplateName()
    {
        return "mod_theme_preset.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  309 => 136,  292 => 122,  280 => 113,  268 => 104,  256 => 95,  233 => 74,  229 => 73,  223 => 69,  219 => 68,  214 => 65,  205 => 59,  197 => 54,  188 => 48,  181 => 43,  173 => 41,  171 => 40,  168 => 39,  153 => 37,  149 => 36,  145 => 35,  140 => 33,  136 => 31,  134 => 30,  131 => 29,  123 => 26,  120 => 25,  118 => 24,  115 => 23,  107 => 20,  104 => 19,  102 => 18,  99 => 17,  95 => 16,  86 => 14,  77 => 9,  71 => 8,  65 => 7,  59 => 6,  56 => 5,  52 => 4,  48 => 1,  46 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends request.ajax ? \"layout_blank.phtml\" : \"layout_default.phtml\" %}
{% set active_menu = 'system' %}

{% block breadcrumbs %}
<ul>
    <li class=\"firstB\"><a href=\"{{ '/'|alink }}\">{% trans 'Home' %}</a></li>
    <li><a href=\"{{ 'system'|alink }}\">{% trans 'Settings' %}</a></li>
    <li><a href=\"{{ 'extension/settings/theme'|alink }}\">{% trans 'Themes' %}</a></li>
    <li class=\"lastB\">{% trans 'Settings for' %} {{ theme_code }}</li>
</ul>
{% endblock %}


{% block meta_title %}{% trans 'Settings for' %} {{ theme_code }}{% endblock %}

{% block content %}

{% if error %}
<div class=\"nNote nFailure hideit first\">
    <p><strong>{% trans 'IMPORTANT' %}: </strong>{{ error }}</p>
</div>
{% endif %}

{% if info %}
<div class=\"nNote nInformation hideit first\">
    <p><strong>{% trans 'INFORMATION' %}: </strong>{{ info }}</p>
</div>
{% endif %}

{% if settings_html %}

<div class=\"widget\">
    <div class=\"head\" title=\"{% trans \"Switch to a predefined set of theme settings from the dropdown. Adjust each section and apply the changes once you're done.\" %}\">
        <h5 class=\"iMoney\">Your current preset: </h5>
        <select name=\"preset\" style=\"margin-top: 10px;\" onchange=\"bb.post('admin/theme/preset_select', {code: '{{theme_code}}', preset: \$(this).val() }, function(){ bb.reload(); })\">
            {% for preset in presets %}
            <option value=\"{{preset}}\" {% if preset == current_preset%}selected=\"selected\"{% endif %}>{{preset}}</option>
            {% endfor %}
        </select>
        {% if presets|length > 1 %}
        <a href=\"{{ 'api/admin/theme/preset_delete'|link({'code' : theme_code, 'preset' : current_preset}) }}\" class=\"api-link\" data-api-confirm=\"Are you sure?\" data-api-reload=\"1\">{% trans 'delete this preset' %}</a>
        {% endif %}
    </div>

    <div id=\"theme-settings\">
        <form method=\"post\" action=\"\" enctype=\"multipart/form-data\">

            {{ settings_html|raw }}


            <div class=\"actions\">

                <input type=\"checkbox\" name=\"save-current-setting\" value=\"1\" id=\"save-current-setting\">
                <label for=\"save-current-setting\">{% trans 'Save current settings as a new preset called' %}</label>
                <input type=\"text\" name=\"save-current-setting-preset\" placeholder=\"\"/>

                <br/>
                <br/>
                <input type=\"submit\" value=\"{% trans 'Apply changes' %}\" class=\"greyishBtn\"/>
            </div>
        </form>
    </div>
</div>
{% endif %}

{% endblock %}

{% block head %}
<script src='js/jquery.spectrum.js'></script>
<link rel='stylesheet' href='css/spectrum.css' />
{% endblock %}

{% block js %}
<script type=\"text/javascript\">

\$(function() {

    \$('#theme-settings fieldset').each(function(index, value){
        \$('<h3 class=\"section-header collapsed\"/>').text(\$(this).find('legend').text()).insertBefore(\$(this));
    });

    \$('#theme-settings h3.section-header').toggle(function() {
        \$(this).removeClass('collapsed').next().show();
    }, function() {
        \$(this).addClass('collapsed').next().hide();
    });

    \$('#theme-settings h3.section-header:first').click();


    //special class \"page\"
    \$(\"#theme-settings select.page\").each(function(){
        var sel = \$(this);
        sel.append('<option value=\"\">None</option>');
        \$.each({{ admin.page_get_pairs | json_encode | raw }}, function(index, value){
            sel.append('<option value=\"' + index + '\">' + value + '</option>');
        });
    });

    //special class \"snippet\"
    \$(\"#theme-settings select.snippet\").each(function(){
        var sel = \$(this);
        sel.append('<option value=\"\">None</option>');
        \$.each({{ snippets | json_encode | raw }}, function(index, value){
            sel.append('<option value=\"' + index + '\">' + value + '</option>');
        });
    });

    //special class \"product\"
    \$(\"#theme-settings select.product\").each(function(){
        var sel = \$(this);
        sel.append('<option value=\"\">None</option>');
        \$.each({{ admin.product_get_pairs | json_encode | raw }}, function(index, value){
        sel.append('<option value=\"' + index + '\">' + value + '</option>');
    });
    });


// populate settings values

    //<![CDATA[
    var settings = {{ settings | json_encode | raw }};
    //]]>
    \$.each(settings, function(index, value){
        var el = \$('#theme-settings *[name=\"'+ index +'\"]');
        if(el.attr('type') == 'radio') {
            el.filter('[value=\"'+value+'\"]').attr('checked', true);
        } else if(el.attr('type') == 'checkbox') {
            el.attr('checked', true);
        } else {
            el.val(value);
        }
    });

    // show uploaded files
    var uploaded = {{ uploaded | json_encode | raw }};
    \$.each(uploaded, function(index, file){
        var input = \$('#theme-settings input[name=\"'+file.name+'\"]');
        \$('<div class=\"asset\">').html('<a href=\"'+ file.url +'\" target=\"_blank\" >'+file.name+'</a>').insertAfter(input);
    });

    //special class \"color\"
    \$(\"#theme-settings input.color\").spectrum({
        showInput: true,
        showButtons: true,
        showAlpha: false,
        clickoutFiresChange: true,
        theme: \"sp-boxbilling\",
        showInitial: true
    });
});

</script>
{% endblock %}", "mod_theme_preset.phtml", "/home/lexcicxy/hostshibe.cf/bb-modules/Theme/html_admin/mod_theme_preset.phtml");
    }
}
