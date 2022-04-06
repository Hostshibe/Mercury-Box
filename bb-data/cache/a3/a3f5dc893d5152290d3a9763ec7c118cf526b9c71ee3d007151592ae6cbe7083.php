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

/* mod_client_profile.phtml */
class __TwigTemplate_52175392287893a2a14b1a4420759115d4f3665f3ce636039fe5c8f380309029 extends \Twig\Template
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
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.phtml") : ("layout_default.phtml")), "mod_client_profile.phtml", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.phtml", "mod_client_profile.phtml", 5)->unwrap();
        // line 6
        $context["profile"] = twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "client_get", [], "any", false, false, false, 6);
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo gettext("Profile details");
    }

    // line 8
    public function block_content_before($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "\t\t<!-- Page Heading/Breadcrumbs -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 12
        echo gettext("Profile details");
        // line 13
        echo "\t\t\t\t\t<small>";
        echo gettext("Keep your profile up to date");
        echo "</small>
\t\t\t\t</h1>
            </div>
        </div>
        <!-- /.row -->
";
    }

    // line 19
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "
        <div class=\"row\">
            <div class=\"col-lg-12\">

                <ul id=\"myTab\" class=\"nav nav-tabs nav-justified\">
\t\t\t\t\t<li class=\"active\"><a href=\"#tab-details\" data-toggle=\"tab\"><i class=\"fa fa-user\"></i> ";
        // line 25
        echo gettext("Details");
        echo "</a></li>
\t\t\t\t\t<li><a href=\"#tab-password\" data-toggle=\"tab\"><i class=\"fa fa-key\"></i> ";
        // line 26
        echo gettext("Password");
        echo "</a></li>
\t\t\t\t\t<li><a href=\"#tab-gravatar\" data-toggle=\"tab\"><i class=\"fa fa-camera\"></i> ";
        // line 27
        echo gettext("Gravatar");
        echo "</a></li>
\t\t\t\t\t<li><a href=\"#tab-currency\" data-toggle=\"tab\"><i class=\"fa fa-money\"></i> ";
        // line 28
        echo gettext("Currency");
        echo "</a></li>
\t\t\t\t\t<li><a href=\"#tab-api\" data-toggle=\"tab\"><i class=\"fa fa-plug\"></i> ";
        // line 29
        echo gettext("API");
        echo "</a></li>
                </ul>

                <div id=\"myTabContent\" class=\"tab-content\">
                    <div class=\"tab-pane fade active in\" id=\"tab-details\">
\t\t\t\t\t\t<h4>";
        // line 34
        echo gettext("Update profile");
        echo "</h4>
\t\t\t\t\t\t<form method=\"post\" action=\"\" class=\"api_form\" data-api-url=\"client/client/update\" data-api-msg=\"";
        // line 35
        echo gettext("Profile updated");
        echo "\">
\t\t\t\t\t\t<div class=\"well row\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"control-group form-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t\t\t<label>";
        // line 40
        echo gettext("Email Address");
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" name=\"email\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "email", [], "any", false, false, false, 41), "html", null, true);
        echo "\" required=\"required\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"control-group form-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t\t\t<label>";
        // line 46
        echo gettext("First Name");
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"first_name\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "first_name", [], "any", false, false, false, 47), "html", null, true);
        echo "\" required=\"required\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"control-group form-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t\t\t<label>";
        // line 52
        echo gettext("Last Name");
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"last_name\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "last_name", [], "any", false, false, false, 53), "html", null, true);
        echo "\" required=\"required\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"control-group form-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t\t\t<label>";
        // line 58
        echo gettext("Company Name");
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"company\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "company", [], "any", false, false, false, 59), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"control-group form-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t\t\t<label>";
        // line 64
        echo gettext("Phone Country Code");
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"phone_cc\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "phone_cc", [], "any", false, false, false, 65), "html", null, true);
        echo "\" required=\"required\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"control-group form-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t\t\t<label>";
        // line 70
        echo gettext("Phone Number");
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"phone\" value=\"";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "phone", [], "any", false, false, false, 71), "html", null, true);
        echo "\" required=\"required\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"control-group form-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t\t\t<label>";
        // line 79
        echo gettext("Address");
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"address_1\" value=\"";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "address_1", [], "any", false, false, false, 80), "html", null, true);
        echo "\" required=\"required\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"control-group form-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t\t\t<label>";
        // line 85
        echo gettext("Address 2");
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"address_2\" value=\"";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "address_2", [], "any", false, false, false, 86), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"control-group form-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t\t\t<label>";
        // line 91
        echo gettext("City");
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"city\" value=\"";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "city", [], "any", false, false, false, 92), "html", null, true);
        echo "\" required=\"required\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"control-group form-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t\t\t<label>";
        // line 97
        echo gettext("Country");
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 98
        echo twig_call_macro($macros["mf"], "macro_selectbox", ["country", twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_countries", [], "any", false, false, false, 98), twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "country", [], "any", false, false, false, 98), 1, "Select country"], 98, $context, $this->getSourceContext());
        echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"control-group form-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t\t\t<label>";
        // line 103
        echo gettext("State");
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 105
        echo "\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"state\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "state", [], "any", false, false, false, 105), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"control-group form-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t\t\t<label>";
        // line 110
        echo gettext("Zip/Postal Code");
        echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"postcode\" value=\"";
        // line 111
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "postcode", [], "any", false, false, false, 111), "html", null, true);
        echo "\" required=\"required\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-12 text-center\">
\t\t\t\t\t\t\t\t<input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 116
        echo gettext("Update profile");
        echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
                    <div class=\"tab-pane fade\" id=\"tab-password\">
                        <h4>";
        // line 122
        echo gettext("Change password");
        echo "</h4>
\t\t\t\t\t\t<form method=\"post\" action=\"\" class=\"api_form\" data-api-url=\"client/client/change_password\" data-api-msg=\"";
        // line 123
        echo gettext("Password changed");
        echo "\">
\t\t\t\t\t\t\t<div class=\"well\">
\t\t\t\t\t\t\t\t<div class=\"control-group form-group\">
\t\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t\t<label>";
        // line 127
        echo gettext("Password");
        echo ": </label>
\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" name=\"password\" value=\"\" required=\"required\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"control-group form-group\">
\t\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t\t<label>";
        // line 133
        echo gettext("Password confirm");
        echo ": </label>
\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" name=\"password_confirm\" value=\"\" required=\"required\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t\t<input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 138
        echo gettext("Change password");
        echo "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
                    <div class=\"tab-pane fade\" id=\"tab-gravatar\">
\t\t\t\t\t\t<h4>";
        // line 144
        echo gettext("Gravatar");
        echo "</h4>
\t\t\t\t\t\t<div class=\"well text-center\">
\t\t\t\t\t\t\t<p><img src=\"";
        // line 146
        echo twig_escape_filter($this->env, twig_gravatar_filter(twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "email", [], "any", false, false, false, 146)), "html", null, true);
        echo "\" alt=\"Gravatar\" /></p>
\t\t\t\t\t\t\t<p>";
        // line 147
        echo gettext("Please register with");
        echo " <b>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "email", [], "any", false, false, false, 147), "html", null, true);
        echo "</b> ";
        echo gettext("at ");
        echo " <a target=\"_blank\" href=\"http://gravatar.com\">Gravatar.com</a> ";
        echo gettext("to change your profile image. Gravatar image updates may not appear immediately.");
        echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-pane fade\" id=\"tab-currency\">
\t\t\t\t\t\t<h4>";
        // line 151
        echo gettext("Currency");
        echo "</h4>
\t\t\t\t\t\t<div class=\"well\">
\t\t\t\t\t\t\t";
        // line 153
        if (twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "currency", [], "any", false, false, false, 153)) {
            // line 154
            echo "\t\t\t\t\t\t\t\t<p>";
            echo gettext("Your profile currency is");
            echo " <em>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "currency", [], "any", false, false, false, 154), "html", null, true);
            echo "</em></p>
\t\t\t\t\t\t\t\t<p>";
            // line 155
            echo gettext("Create new client profile if you want to manage your money in other currency");
            echo "</p>
\t\t\t\t\t\t\t";
        } else {
            // line 157
            echo "\t\t\t\t\t\t\t\t<p>";
            echo gettext("Your profile currency will be defined after your first order. Once your currency is set, all your profile accounting will be managed in that currency and can not be changed.");
            echo "</p>
\t\t\t\t\t\t\t";
        }
        // line 159
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
                    <div class=\"tab-pane fade\" id=\"tab-api\">
\t\t\t\t\t\t<h4>";
        // line 162
        echo gettext("API key");
        echo "</h4>
\t\t\t\t\t\t<div class=\"well\">
\t\t\t\t\t\t\t<p>";
        // line 164
        echo gettext("API key allows integration with external applications. You will need this key for authentication.");
        echo "</p>
\t\t\t\t\t\t\t<p>";
        // line 165
        echo gettext("Warning! Resetting the key will break existing applications using it.");
        echo "</p>
\t\t\t\t\t\t\t";
        // line 166
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "client_api_key_get", [], "any", false, false, false, 166))) {
            // line 167
            echo "\t\t\t\t\t\t\t\t<p class=\"alert alert-info text-center\">
\t\t\t\t\t\t\t\t\t<strong>";
            // line 168
            echo gettext("Your API key");
            echo ":</strong><br />";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "client_api_key_get", [], "any", false, false, false, 168), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<form method=\"post\" action=\"\" class=\"api_form\" data-api-url=\"client/client/api_key_reset\" data-api-msg=\"";
            // line 170
            echo gettext("API key was changed. Please refresh the page.");
            echo "\">
\t\t\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t<input class=\"btn btn-danger\" type=\"submit\" value=\"";
            // line 172
            echo gettext("Reset key");
            echo "\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t";
        } else {
            // line 176
            echo "\t\t\t\t\t\t\t\t<p class=\"alert alert-info text-center\">
\t\t\t\t\t\t\t\t\t<strong>";
            // line 177
            echo gettext("No API key yet");
            echo "</strong>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<form method=\"post\" action=\"\" class=\"api_form\" data-api-url=\"client/client/api_key_reset\" data-api-msg=\"";
            // line 179
            echo gettext("API key was changed. Please refresh the page.");
            echo "\">
\t\t\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t<input class=\"btn btn-success\" type=\"submit\" value=\"";
            // line 181
            echo gettext("Create API key");
            echo "\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t";
        }
        // line 185
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
                </div>

            </div>
        </div>

";
    }

    public function getTemplateName()
    {
        return "mod_client_profile.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  431 => 185,  424 => 181,  419 => 179,  414 => 177,  411 => 176,  404 => 172,  399 => 170,  392 => 168,  389 => 167,  387 => 166,  383 => 165,  379 => 164,  374 => 162,  369 => 159,  363 => 157,  358 => 155,  351 => 154,  349 => 153,  344 => 151,  331 => 147,  327 => 146,  322 => 144,  313 => 138,  305 => 133,  296 => 127,  289 => 123,  285 => 122,  276 => 116,  268 => 111,  264 => 110,  255 => 105,  251 => 103,  243 => 98,  239 => 97,  231 => 92,  227 => 91,  219 => 86,  215 => 85,  207 => 80,  203 => 79,  192 => 71,  188 => 70,  180 => 65,  176 => 64,  168 => 59,  164 => 58,  156 => 53,  152 => 52,  144 => 47,  140 => 46,  132 => 41,  128 => 40,  120 => 35,  116 => 34,  108 => 29,  104 => 28,  100 => 27,  96 => 26,  92 => 25,  85 => 20,  81 => 19,  70 => 13,  68 => 12,  63 => 9,  59 => 8,  52 => 3,  48 => 1,  46 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends request.ajax ? \"layout_blank.phtml\" : \"layout_default.phtml\" %}

{% block meta_title %}{% trans 'Profile details' %}{% endblock %}

{% import \"macro_functions.phtml\" as mf %}
{% set profile = client.client_get %}

{% block content_before %}
\t\t<!-- Page Heading/Breadcrumbs -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">{% trans 'Profile details' %}
\t\t\t\t\t<small>{% trans 'Keep your profile up to date' %}</small>
\t\t\t\t</h1>
            </div>
        </div>
        <!-- /.row -->
{% endblock %}
{% block content %}

        <div class=\"row\">
            <div class=\"col-lg-12\">

                <ul id=\"myTab\" class=\"nav nav-tabs nav-justified\">
\t\t\t\t\t<li class=\"active\"><a href=\"#tab-details\" data-toggle=\"tab\"><i class=\"fa fa-user\"></i> {% trans 'Details' %}</a></li>
\t\t\t\t\t<li><a href=\"#tab-password\" data-toggle=\"tab\"><i class=\"fa fa-key\"></i> {% trans 'Password' %}</a></li>
\t\t\t\t\t<li><a href=\"#tab-gravatar\" data-toggle=\"tab\"><i class=\"fa fa-camera\"></i> {% trans 'Gravatar' %}</a></li>
\t\t\t\t\t<li><a href=\"#tab-currency\" data-toggle=\"tab\"><i class=\"fa fa-money\"></i> {% trans 'Currency' %}</a></li>
\t\t\t\t\t<li><a href=\"#tab-api\" data-toggle=\"tab\"><i class=\"fa fa-plug\"></i> {% trans 'API' %}</a></li>
                </ul>

                <div id=\"myTabContent\" class=\"tab-content\">
                    <div class=\"tab-pane fade active in\" id=\"tab-details\">
\t\t\t\t\t\t<h4>{% trans 'Update profile' %}</h4>
\t\t\t\t\t\t<form method=\"post\" action=\"\" class=\"api_form\" data-api-url=\"client/client/update\" data-api-msg=\"{% trans 'Profile updated' %}\">
\t\t\t\t\t\t<div class=\"well row\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"control-group form-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t\t\t<label>{% trans 'Email Address' %}:</label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" name=\"email\" value=\"{{ profile.email }}\" required=\"required\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"control-group form-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t\t\t<label>{% trans 'First Name' %}:</label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"first_name\" value=\"{{ profile.first_name }}\" required=\"required\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"control-group form-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t\t\t<label>{% trans 'Last Name' %}:</label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"last_name\" value=\"{{ profile.last_name }}\" required=\"required\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"control-group form-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t\t\t<label>{% trans 'Company Name' %}:</label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"company\" value=\"{{ profile.company }}\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"control-group form-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t\t\t<label>{% trans 'Phone Country Code' %}:</label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"phone_cc\" value=\"{{ profile.phone_cc }}\" required=\"required\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"control-group form-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t\t\t<label>{% trans 'Phone Number' %}:</label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"phone\" value=\"{{ profile.phone }}\" required=\"required\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"control-group form-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t\t\t<label>{% trans 'Address' %}:</label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"address_1\" value=\"{{ profile.address_1 }}\" required=\"required\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"control-group form-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t\t\t<label>{% trans 'Address 2' %}:</label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"address_2\" value=\"{{ profile.address_2 }}\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"control-group form-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t\t\t<label>{% trans 'City' %}:</label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"city\" value=\"{{ profile.city }}\" required=\"required\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"control-group form-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t\t\t<label>{% trans 'Country' %}:</label>
\t\t\t\t\t\t\t\t\t\t\t{{ mf.selectbox('country', guest.system_countries, profile.country, 1, 'Select country') }}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"control-group form-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t\t\t<label>{% trans 'State' %}:</label>
\t\t\t\t\t\t\t\t\t\t\t{# mf.selectbox('state', guest.system_states, profile.state, 0, 'Select state') #}
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"state\" value=\"{{ profile.state }}\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"control-group form-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t\t\t<label>{% trans 'Zip/Postal Code' %}:</label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"postcode\" value=\"{{ profile.postcode }}\" required=\"required\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-12 text-center\">
\t\t\t\t\t\t\t\t<input class=\"btn btn-primary\" type=\"submit\" value=\"{% trans 'Update profile' %}\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
                    <div class=\"tab-pane fade\" id=\"tab-password\">
                        <h4>{% trans 'Change password' %}</h4>
\t\t\t\t\t\t<form method=\"post\" action=\"\" class=\"api_form\" data-api-url=\"client/client/change_password\" data-api-msg=\"{% trans 'Password changed' %}\">
\t\t\t\t\t\t\t<div class=\"well\">
\t\t\t\t\t\t\t\t<div class=\"control-group form-group\">
\t\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t\t<label>{% trans 'Password' %}: </label>
\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" name=\"password\" value=\"\" required=\"required\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"control-group form-group\">
\t\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t\t<label>{% trans 'Password confirm' %}: </label>
\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" name=\"password_confirm\" value=\"\" required=\"required\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t\t<input class=\"btn btn-primary\" type=\"submit\" value=\"{% trans 'Change password' %}\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
                    <div class=\"tab-pane fade\" id=\"tab-gravatar\">
\t\t\t\t\t\t<h4>{% trans 'Gravatar' %}</h4>
\t\t\t\t\t\t<div class=\"well text-center\">
\t\t\t\t\t\t\t<p><img src=\"{{ profile.email|gravatar }}\" alt=\"Gravatar\" /></p>
\t\t\t\t\t\t\t<p>{% trans 'Please register with'%} <b>{{ profile.email }}</b> {% trans 'at ' %} <a target=\"_blank\" href=\"http://gravatar.com\">Gravatar.com</a> {% trans 'to change your profile image. Gravatar image updates may not appear immediately.' %}</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-pane fade\" id=\"tab-currency\">
\t\t\t\t\t\t<h4>{% trans 'Currency' %}</h4>
\t\t\t\t\t\t<div class=\"well\">
\t\t\t\t\t\t\t{% if profile.currency %}
\t\t\t\t\t\t\t\t<p>{% trans 'Your profile currency is' %} <em>{{ profile.currency }}</em></p>
\t\t\t\t\t\t\t\t<p>{% trans 'Create new client profile if you want to manage your money in other currency' %}</p>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<p>{% trans 'Your profile currency will be defined after your first order. Once your currency is set, all your profile accounting will be managed in that currency and can not be changed.' %}</p>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
                    <div class=\"tab-pane fade\" id=\"tab-api\">
\t\t\t\t\t\t<h4>{% trans 'API key' %}</h4>
\t\t\t\t\t\t<div class=\"well\">
\t\t\t\t\t\t\t<p>{% trans 'API key allows integration with external applications. You will need this key for authentication.' %}</p>
\t\t\t\t\t\t\t<p>{% trans 'Warning! Resetting the key will break existing applications using it.' %}</p>
\t\t\t\t\t\t\t{% if client.client_api_key_get is not empty %}
\t\t\t\t\t\t\t\t<p class=\"alert alert-info text-center\">
\t\t\t\t\t\t\t\t\t<strong>{% trans 'Your API key' %}:</strong><br />{{ client.client_api_key_get }}
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<form method=\"post\" action=\"\" class=\"api_form\" data-api-url=\"client/client/api_key_reset\" data-api-msg=\"{% trans 'API key was changed. Please refresh the page.' %}\">
\t\t\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t<input class=\"btn btn-danger\" type=\"submit\" value=\"{% trans 'Reset key' %}\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<p class=\"alert alert-info text-center\">
\t\t\t\t\t\t\t\t\t<strong>{% trans 'No API key yet' %}</strong>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<form method=\"post\" action=\"\" class=\"api_form\" data-api-url=\"client/client/api_key_reset\" data-api-msg=\"{% trans 'API key was changed. Please refresh the page.' %}\">
\t\t\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t<input class=\"btn btn-success\" type=\"submit\" value=\"{% trans 'Create API key' %}\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
                </div>

            </div>
        </div>

{% endblock %}", "mod_client_profile.phtml", "/home/lexcicxy/hostshibe.cf/bb-themes/bootstrap/html/mod_client_profile.phtml");
    }
}
