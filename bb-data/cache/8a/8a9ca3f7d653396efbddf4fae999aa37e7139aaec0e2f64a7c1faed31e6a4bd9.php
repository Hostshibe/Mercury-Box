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

/* mod_page_login.phtml */
class __TwigTemplate_dc7d295492e24608a95a46a1a7cd029622fe7eeee4804eda038df98528cf276e extends \Twig\Template
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
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.phtml") : ("layout_default.phtml")), "mod_page_login.phtml", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.phtml", "mod_page_login.phtml", 3)->unwrap();
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo gettext("Login / Sign up");
    }

    // line 7
    public function block_content_before($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "\t\t<!-- Page Heading/Breadcrumbs -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 11
        echo gettext("Sign In / Create new account");
        echo "</h1>
                <ol class=\"breadcrumb\">
                    <li><a href=\"";
        // line 13
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("");
        echo "\">";
        echo gettext("Home");
        echo "</a></li>
                    <li class=\"active\">";
        // line 14
        echo gettext("Sign In / Create new account");
        echo "</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
";
    }

    // line 21
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "\t<p class=\"text-center\">
\t\t<a class=\"btn btn-primary btn-lg\" data-toggle=\"tab\" href=\"#signin\">";
        // line 23
        echo gettext("Sign in");
        echo "</a>
\t\t<a class=\"btn btn-success btn-lg\" data-toggle=\"tab\" href=\"#register\">";
        // line 24
        echo gettext("Register");
        echo "</a>
\t</p>
\t<div id=\"myTabContent\" class=\"tab-content\">
\t\t<div class=\"tab-pane ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "register", [], "any", false, false, false, 27)) {
            echo "active ";
        }
        echo "well\" id=\"signin\">
\t\t\t<form method=\"post\" action=\"\" class=\"api_form form-horizontal\" data-api-url=\"guest/client/login\" data-api-redirect=\"";
        // line 28
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("");
        echo "\">
\t\t\t\t<legend class=\"text-center\">";
        // line 29
        echo gettext("Sign in");
        echo "</legend>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"email\" class=\"col-sm-4 control-label\">";
        // line 31
        echo gettext("Email Address");
        echo ": </label>
\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t<input type=\"email\" name=\"email\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "email", [], "any", false, false, false, 33), "html", null, true);
        echo "\" required=\"required\" class=\"form-control\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-4 control-label\">";
        // line 37
        echo gettext("Password");
        echo ": </label>
\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" name=\"password\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "password", [], "any", false, false, false, 39), "html", null, true);
        echo "\" required=\"required\" class=\"form-control\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"text-right\">
                    <input type=\"hidden\" name=\"remember\" value=\"1\" />
\t\t\t\t\t<a class=\"btn btn-warning\" href=\"";
        // line 44
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("reset-password");
        echo "\">";
        echo gettext("Reset password");
        echo "</a>
                    <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 45
        echo gettext("Login");
        echo "\">
\t\t\t\t</div>
            </form>
\t\t</div>
\t\t<div class=\"tab-pane ";
        // line 49
        if (twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "register", [], "any", false, false, false, 49)) {
            echo "active ";
        }
        echo "well\" id=\"register\">
\t\t\t<form method=\"post\" action=\"\" class=\"api_form form-horizontal\" data-api-url=\"guest/client/create\" data-api-redirect=\"login\">
\t\t\t\t<legend class=\"text-center\">";
        // line 51
        echo gettext("Become a member to participate in forum, contact support, order new services");
        echo "</legend>
                ";
        // line 52
        $context["r"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "client_required", [], "any", false, false, false, 52);
        // line 53
        echo "\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"email\" class=\"col-sm-4 control-label\">";
        // line 54
        echo gettext("Email Address");
        echo ": </label>
                    <div class=\"col-sm-8\">
\t\t\t\t\t\t<input type=\"email\" name=\"email\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "email", [], "any", false, false, false, 56), "html", null, true);
        echo "\" required=\"required\" id=\"reg-email\" class=\"form-control\">
                    </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-4 control-label\">";
        // line 60
        echo gettext("First Name");
        echo ": </label>
\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t<input type=\"text\" name=\"first_name\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "first_name", [], "any", false, false, false, 62), "html", null, true);
        echo "\" required=\"required\" class=\"form-control\">
\t\t\t\t\t</div>
\t\t\t\t</div>
                ";
        // line 65
        if (twig_in_filter("last_name", ($context["r"] ?? null))) {
            // line 66
            echo "\t\t\t\t<div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">";
            // line 67
            echo gettext("Last Name");
            echo ": </label>
\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t<input type=\"text\" name=\"last_name\" value=\"";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "last_name", [], "any", false, false, false, 69), "html", null, true);
            echo "\" required=\"required\" class=\"form-control\">
\t\t\t\t\t</div>
\t\t\t\t</div>
                ";
        }
        // line 73
        echo "                
                ";
        // line 74
        if (twig_in_filter("company", ($context["r"] ?? null))) {
            // line 75
            echo "\t\t\t\t<div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">";
            // line 76
            echo gettext("Company");
            echo ": </label>
\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t<input type=\"text\" name=\"company\" value=\"";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "company", [], "any", false, false, false, 78), "html", null, true);
            echo "\" required=\"required\" class=\"form-control\">
\t\t\t\t\t</div>
\t\t\t\t</div>
                ";
        }
        // line 82
        echo "                
                ";
        // line 83
        if (twig_in_filter("birthday", ($context["r"] ?? null))) {
            // line 84
            echo "\t\t\t\t<div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">";
            // line 85
            echo gettext("Birthday");
            echo ": </label>
\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t<input type=\"text\" name=\"birthday\" value=\"\" class=\"form-control\">
\t\t\t\t\t</div>
\t\t\t\t</div>
                ";
        }
        // line 91
        echo "                
                ";
        // line 92
        if (twig_in_filter("gender", ($context["r"] ?? null))) {
            // line 93
            echo "\t\t\t\t<div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">";
            // line 94
            echo gettext("You are");
            echo ": </label>
\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t<select name=\"gender\" class=\"form-control\">
\t\t\t\t\t\t\t<option value=\"male\">Male</option>
\t\t\t\t\t\t\t<option value=\"female\">Female</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
                ";
        }
        // line 103
        echo "
                ";
        // line 104
        $context["custom_fields"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "client_custom_fields", [], "any", false, false, false, 104);
        // line 105
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["field_name"] => $context["field"]) {
            // line 106
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, $context["field"], "active", [], "any", false, false, false, 106)) {
                // line 107
                echo "                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\" for=\"";
                // line 108
                echo twig_escape_filter($this->env, $context["field_name"], "html", null, true);
                echo "\">";
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["field"], "title", [], "any", false, false, false, 108))) {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "title", [], "any", false, false, false, 108), "html", null, true);
                } else {
                    echo " ";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["field_name"]), "html", null, true);
                    echo " ";
                }
                echo "</label>
                    <div class=\"col-sm-8\">
                        <input type=\"text\" class=\"form-control\" name=\"";
                // line 110
                echo twig_escape_filter($this->env, $context["field_name"], "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $context["field_name"], "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), $context["field_name"], [], "any", false, false, false, 110), "html", null, true);
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, $context["field"], "required", [], "any", false, false, false, 110)) {
                    echo "required=\"required\"";
                }
                echo ">
                    </div>
                </div>
                ";
            }
            // line 114
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "                
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-4 control-label\">";
        // line 117
        echo gettext("Password");
        echo ": </label>
\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" name=\"password\" value=\"\" required=\"required\" id=\"reg-password\" class=\"form-control\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">";
        // line 124
        echo gettext("Password confirm");
        echo ": </label>
\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" name=\"password_confirm\" value=\"\" required=\"required\" class=\"form-control\">
\t\t\t\t\t</div>
\t\t\t\t</div>\t\t\t
                ";
        // line 129
        echo twig_call_macro($macros["mf"], "macro_recaptcha", [], 129, $context, $this->getSourceContext());
        echo "

                ";
        // line 131
        if (twig_in_filter("address_1", ($context["r"] ?? null))) {
            // line 132
            echo "                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">";
            // line 133
            echo gettext("Address");
            echo ": </label>
\t\t\t\t\t<div class=\"col-sm-8\">
                        <input type=\"text\" class=\"form-control\" name=\"address_1\" value=\"";
            // line 135
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "address_1", [], "any", false, false, false, 135), "html", null, true);
            echo "\">
\t\t\t\t\t</div>
                </div>
                ";
        }
        // line 139
        echo "                    
                ";
        // line 140
        if (twig_in_filter("address_2", ($context["r"] ?? null))) {
            // line 141
            echo "                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">";
            // line 142
            echo gettext("Address 2");
            echo ": </label>
                    <div class=\"col-sm-8\">
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"address_2\" value=\"";
            // line 144
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "address_2", [], "any", false, false, false, 144), "html", null, true);
            echo "\">
                    </div>
\t\t\t\t</div>
                ";
        }
        // line 148
        echo "                    
                ";
        // line 149
        if (twig_in_filter("city", ($context["r"] ?? null))) {
            // line 150
            echo "                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">";
            // line 151
            echo gettext("City");
            echo ": </label>
                    <div class=\"col-sm-8\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"city\" value=\"";
            // line 153
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "city", [], "any", false, false, false, 153), "html", null, true);
            echo "\">
                    </div>
\t\t\t\t</div>
                ";
        }
        // line 157
        echo "                    
                ";
        // line 158
        if (twig_in_filter("country", ($context["r"] ?? null))) {
            // line 159
            echo "                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">";
            // line 160
            echo gettext("Country");
            echo ": </label>
\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t";
            // line 162
            echo twig_call_macro($macros["mf"], "macro_selectbox", ["country", twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_countries", [], "any", false, false, false, 162), twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "country", [], "any", false, false, false, 162), 0, "Select country"], 162, $context, $this->getSourceContext());
            echo "
                    </div>
\t\t\t\t</div>
                ";
        }
        // line 166
        echo "                    
                ";
        // line 167
        if (twig_in_filter("state", ($context["r"] ?? null))) {
            // line 168
            echo "                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">";
            // line 169
            echo gettext("State");
            echo ": </label>
                         ";
            // line 171
            echo "                    <div class=\"col-sm-8\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"state\" value=\"";
            // line 172
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "state", [], "any", false, false, false, 172), "html", null, true);
            echo "\" />
                    </div>
\t\t\t\t</div>
                ";
        }
        // line 176
        echo "                    
                ";
        // line 177
        if (twig_in_filter("postcode", ($context["r"] ?? null))) {
            // line 178
            echo "                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">";
            // line 179
            echo gettext("Zip/Postal Code");
            echo ": </label>
                    <div class=\"col-sm-8\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"postcode\" value=\"";
            // line 181
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "postcode", [], "any", false, false, false, 181), "html", null, true);
            echo "\">
                    </div>
\t\t\t\t</div>
                ";
        }
        // line 185
        echo "                    
                ";
        // line 186
        if (twig_in_filter("phone", ($context["r"] ?? null))) {
            // line 187
            echo "                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">";
            // line 188
            echo gettext("Phone Number");
            echo ": </label>
                    <div class=\"col-sm-8\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"phone_cc\" value=\"";
            // line 190
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "phone_cc", [], "any", false, false, false, 190), "html", null, true);
            echo "\" style=\"width: 40px\"> <input type=\"text\" name=\"phone\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "phone", [], "any", false, false, false, 190), "html", null, true);
            echo "\" style=\"width: 233px\">
                    </div>
\t\t\t\t</div>
                ";
        }
        // line 194
        echo "\t\t\t\t
\t\t\t\t<div class=\"text-right\">
\t\t\t\t\t<input class=\"btn btn-success\" type=\"submit\" value=\"";
        // line 196
        echo gettext("Register");
        echo "\">
\t\t\t\t</div>
\t\t\t\t
\t\t\t</form>
\t\t</div>
\t</div>

";
    }

    // line 205
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 206
        echo "<script type=\"text/javascript\">
\$(function() {

    \$('#password-reset').bind('submit',function(event){
        bb.post(
            'guest/client/reset_password',
            \$(this).serialize(),
            function(result) {
                bb.msg('Password reset confirmation email was sent');
            }
        );
        return false;
    });
});
</script>
";
    }

    public function getTemplateName()
    {
        return "mod_page_login.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  509 => 206,  505 => 205,  493 => 196,  489 => 194,  480 => 190,  475 => 188,  472 => 187,  470 => 186,  467 => 185,  460 => 181,  455 => 179,  452 => 178,  450 => 177,  447 => 176,  440 => 172,  437 => 171,  433 => 169,  430 => 168,  428 => 167,  425 => 166,  418 => 162,  413 => 160,  410 => 159,  408 => 158,  405 => 157,  398 => 153,  393 => 151,  390 => 150,  388 => 149,  385 => 148,  378 => 144,  373 => 142,  370 => 141,  368 => 140,  365 => 139,  358 => 135,  353 => 133,  350 => 132,  348 => 131,  343 => 129,  335 => 124,  325 => 117,  321 => 115,  315 => 114,  300 => 110,  287 => 108,  284 => 107,  281 => 106,  276 => 105,  274 => 104,  271 => 103,  259 => 94,  256 => 93,  254 => 92,  251 => 91,  242 => 85,  239 => 84,  237 => 83,  234 => 82,  227 => 78,  222 => 76,  219 => 75,  217 => 74,  214 => 73,  207 => 69,  202 => 67,  199 => 66,  197 => 65,  191 => 62,  186 => 60,  179 => 56,  174 => 54,  171 => 53,  169 => 52,  165 => 51,  158 => 49,  151 => 45,  145 => 44,  137 => 39,  132 => 37,  125 => 33,  120 => 31,  115 => 29,  111 => 28,  105 => 27,  99 => 24,  95 => 23,  92 => 22,  88 => 21,  78 => 14,  72 => 13,  67 => 11,  62 => 8,  58 => 7,  51 => 5,  47 => 1,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends request.ajax ? \"layout_blank.phtml\" : \"layout_default.phtml\" %}

{% import \"macro_functions.phtml\" as mf %}

{% block meta_title %}{% trans 'Login / Sign up' %}{% endblock %}

{% block content_before %}
\t\t<!-- Page Heading/Breadcrumbs -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">{% trans 'Sign In / Create new account' %}</h1>
                <ol class=\"breadcrumb\">
                    <li><a href=\"{{ ''|link }}\">{% trans 'Home' %}</a></li>
                    <li class=\"active\">{% trans 'Sign In / Create new account' %}</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
{% endblock %}

{% block content %}
\t<p class=\"text-center\">
\t\t<a class=\"btn btn-primary btn-lg\" data-toggle=\"tab\" href=\"#signin\">{% trans 'Sign in' %}</a>
\t\t<a class=\"btn btn-success btn-lg\" data-toggle=\"tab\" href=\"#register\">{% trans 'Register' %}</a>
\t</p>
\t<div id=\"myTabContent\" class=\"tab-content\">
\t\t<div class=\"tab-pane {% if not request.register %}active {% endif %}well\" id=\"signin\">
\t\t\t<form method=\"post\" action=\"\" class=\"api_form form-horizontal\" data-api-url=\"guest/client/login\" data-api-redirect=\"{{ ''|link }}\">
\t\t\t\t<legend class=\"text-center\">{% trans 'Sign in' %}</legend>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"email\" class=\"col-sm-4 control-label\">{% trans 'Email Address' %}: </label>
\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t<input type=\"email\" name=\"email\" value=\"{{ request.email }}\" required=\"required\" class=\"form-control\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-4 control-label\">{% trans 'Password' %}: </label>
\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" name=\"password\" value=\"{{ request.password }}\" required=\"required\" class=\"form-control\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"text-right\">
                    <input type=\"hidden\" name=\"remember\" value=\"1\" />
\t\t\t\t\t<a class=\"btn btn-warning\" href=\"{{ 'reset-password'|link }}\">{% trans 'Reset password' %}</a>
                    <input class=\"btn btn-primary\" type=\"submit\" value=\"{% trans 'Login' %}\">
\t\t\t\t</div>
            </form>
\t\t</div>
\t\t<div class=\"tab-pane {% if request.register %}active {% endif %}well\" id=\"register\">
\t\t\t<form method=\"post\" action=\"\" class=\"api_form form-horizontal\" data-api-url=\"guest/client/create\" data-api-redirect=\"login\">
\t\t\t\t<legend class=\"text-center\">{% trans 'Become a member to participate in forum, contact support, order new services' %}</legend>
                {% set r = guest.client_required %}
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"email\" class=\"col-sm-4 control-label\">{% trans 'Email Address' %}: </label>
                    <div class=\"col-sm-8\">
\t\t\t\t\t\t<input type=\"email\" name=\"email\" value=\"{{ request.email }}\" required=\"required\" id=\"reg-email\" class=\"form-control\">
                    </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-4 control-label\">{% trans 'First Name' %}: </label>
\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t<input type=\"text\" name=\"first_name\" value=\"{{ request.first_name }}\" required=\"required\" class=\"form-control\">
\t\t\t\t\t</div>
\t\t\t\t</div>
                {% if 'last_name' in r %}
\t\t\t\t<div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">{% trans 'Last Name' %}: </label>
\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t<input type=\"text\" name=\"last_name\" value=\"{{ request.last_name }}\" required=\"required\" class=\"form-control\">
\t\t\t\t\t</div>
\t\t\t\t</div>
                {% endif %}
                
                {% if 'company' in r %}
\t\t\t\t<div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">{% trans 'Company' %}: </label>
\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t<input type=\"text\" name=\"company\" value=\"{{ request.company }}\" required=\"required\" class=\"form-control\">
\t\t\t\t\t</div>
\t\t\t\t</div>
                {% endif %}
                
                {% if 'birthday' in r %}
\t\t\t\t<div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">{% trans 'Birthday' %}: </label>
\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t<input type=\"text\" name=\"birthday\" value=\"\" class=\"form-control\">
\t\t\t\t\t</div>
\t\t\t\t</div>
                {% endif %}
                
                {% if 'gender' in r %}
\t\t\t\t<div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">{% trans 'You are' %}: </label>
\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t<select name=\"gender\" class=\"form-control\">
\t\t\t\t\t\t\t<option value=\"male\">Male</option>
\t\t\t\t\t\t\t<option value=\"female\">Female</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
                {% endif %}

                {% set custom_fields = guest.client_custom_fields %}
                {% for field_name, field in custom_fields %}
                {% if field.active %}
                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\" for=\"{{ field_name }}\">{% if field.title is not empty %}{{ field.title }}{% else %} {{ field_name | capitalize }} {% endif %}</label>
                    <div class=\"col-sm-8\">
                        <input type=\"text\" class=\"form-control\" name=\"{{ field_name }}\" id=\"{{ field_name }}\" value=\"{{ attribute(request, field_name) }}\" {% if field.required %}required=\"required\"{% endif %}>
                    </div>
                </div>
                {% endif %}
                {% endfor %}
                
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-4 control-label\">{% trans 'Password' %}: </label>
\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" name=\"password\" value=\"\" required=\"required\" id=\"reg-password\" class=\"form-control\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">{% trans 'Password confirm' %}: </label>
\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" name=\"password_confirm\" value=\"\" required=\"required\" class=\"form-control\">
\t\t\t\t\t</div>
\t\t\t\t</div>\t\t\t
                {{ mf.recaptcha }}

                {% if 'address_1' in r %}
                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">{% trans 'Address' %}: </label>
\t\t\t\t\t<div class=\"col-sm-8\">
                        <input type=\"text\" class=\"form-control\" name=\"address_1\" value=\"{{ request.address_1 }}\">
\t\t\t\t\t</div>
                </div>
                {% endif %}
                    
                {% if 'address_2' in r %}
                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">{% trans 'Address 2' %}: </label>
                    <div class=\"col-sm-8\">
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"address_2\" value=\"{{ request.address_2 }}\">
                    </div>
\t\t\t\t</div>
                {% endif %}
                    
                {% if 'city' in r %}
                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">{% trans 'City' %}: </label>
                    <div class=\"col-sm-8\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"city\" value=\"{{ request.city }}\">
                    </div>
\t\t\t\t</div>
                {% endif %}
                    
                {% if 'country' in r %}
                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">{% trans 'Country' %}: </label>
\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t{{ mf.selectbox('country', guest.system_countries, request.country, 0, 'Select country') }}
                    </div>
\t\t\t\t</div>
                {% endif %}
                    
                {% if 'state' in r %}
                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">{% trans 'State' %}: </label>
                         {# mf.selectbox('state', guest.system_states, request.state, 0, 'Select state') #}
                    <div class=\"col-sm-8\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"state\" value=\"{{ request.state }}\" />
                    </div>
\t\t\t\t</div>
                {% endif %}
                    
                {% if 'postcode' in r %}
                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">{% trans 'Zip/Postal Code' %}: </label>
                    <div class=\"col-sm-8\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"postcode\" value=\"{{ request.postcode }}\">
                    </div>
\t\t\t\t</div>
                {% endif %}
                    
                {% if 'phone' in r %}
                <div class=\"form-group\">
                    <label class=\"col-sm-4 control-label\">{% trans 'Phone Number' %}: </label>
                    <div class=\"col-sm-8\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"phone_cc\" value=\"{{ request.phone_cc }}\" style=\"width: 40px\"> <input type=\"text\" name=\"phone\" value=\"{{ request.phone }}\" style=\"width: 233px\">
                    </div>
\t\t\t\t</div>
                {% endif %}
\t\t\t\t
\t\t\t\t<div class=\"text-right\">
\t\t\t\t\t<input class=\"btn btn-success\" type=\"submit\" value=\"{% trans 'Register' %}\">
\t\t\t\t</div>
\t\t\t\t
\t\t\t</form>
\t\t</div>
\t</div>

{% endblock %}

{% block js %}
<script type=\"text/javascript\">
\$(function() {

    \$('#password-reset').bind('submit',function(event){
        bb.post(
            'guest/client/reset_password',
            \$(this).serialize(),
            function(result) {
                bb.msg('Password reset confirmation email was sent');
            }
        );
        return false;
    });
});
</script>
{% endblock %}", "mod_page_login.phtml", "/home/lexcicxy/hostshibe.cf/bb-themes/bootstrap/html/mod_page_login.phtml");
    }
}
