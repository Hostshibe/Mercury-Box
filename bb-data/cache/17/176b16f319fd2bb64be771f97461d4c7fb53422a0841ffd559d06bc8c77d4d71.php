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

/* mod_support_contact_us.phtml */
class __TwigTemplate_0dd3d5fa8c2bac97cd8c8292f2e9edbff38d132a89574364ece07bf21543ef88 extends \Twig\Template
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
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.phtml") : ("layout_default.phtml")), "mod_support_contact_us.phtml", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.phtml", "mod_support_contact_us.phtml", 2)->unwrap();
        // line 5
        $context["company"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_company", [], "any", false, false, false, 5);
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo gettext("Contact us");
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
        echo gettext("Contact us");
        echo "</h1>
\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t<li><a href=\"";
        // line 13
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("");
        echo "\">";
        echo gettext("Home");
        echo "</a></li>
\t\t\t\t\t<li class=\"active\">";
        // line 14
        echo gettext("Contact us");
        echo "</li>
\t\t\t\t</ol>
            </div>
        </div>
        <!-- /.row -->
";
    }

    // line 20
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "
\t\t<!-- Content Row -->
        <div class=\"row\">
\t\t\t<!-- Contact form -->
\t\t\t<div class=\"col-md-8\">
                <form method=\"post\" action=\"\" class=\"api_form\" data-api-url=\"guest/support/ticket_create\" data-api-tocreated=\"";
        // line 26
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("support/contact-us/conversation");
        echo "\">
                    <div class=\"control-group form-group\">
                        <div class=\"controls\">
                            <label>";
        // line 29
        echo gettext("Name");
        echo ":</label>
                            <input type=\"text\" class=\"form-control\" name=\"name\" value=\"";
        // line 30
        if (($context["client"] ?? null)) {
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "first_name", [], "any", false, false, false, 30) . " ") . twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "last_name", [], "any", false, false, false, 30)), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "name", [], "any", false, false, false, 30), "html", null, true);
        }
        echo "\" required=\"required\">
                        </div>
                    </div>
                    <div class=\"control-group form-group\">
                        <div class=\"controls\">
                            <label>";
        // line 35
        echo gettext("Email address");
        echo ":</label>
                            <input type=\"email\" class=\"form-control\" name=\"email\" value=\"";
        // line 36
        if (($context["client"] ?? null)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "email", [], "any", false, false, false, 36), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "name", [], "any", false, false, false, 36), "html", null, true);
        }
        echo "\" required=\"required\">
                        </div>
                    </div>
\t\t\t\t\t<div class=\"control-group form-group\">
                        <div class=\"controls\">
                            <label>";
        // line 41
        echo gettext("Subject");
        echo ":</label>
                            <input type=\"text\" class=\"form-control\" name=\"subject\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "subject", [], "any", false, false, false, 42), "html", null, true);
        echo "\" required=\"required\">
                        </div>
                    </div>
                    <div class=\"control-group form-group\">
                        <div class=\"controls\">
                            <label>";
        // line 47
        echo gettext("Message");
        echo ":</label>
                            <textarea rows=\"10\" cols=\"100\" class=\"form-control\" name=\"message\" maxlength=\"999\" style=\"resize:none\" required=\"required\" data-provide=\"markdown\" data-iconlibrary=\"fa\">";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "message", [], "any", false, false, false, 48), "html", null, true);
        echo "</textarea>
                        </div>
                    </div>
\t\t\t\t\t
\t\t\t\t\t";
        // line 52
        echo twig_call_macro($macros["mf"], "macro_recaptcha", [], 52, $context, $this->getSourceContext());
        echo "
\t\t\t\t\t<input type=\"hidden\" name=\"anti-spam\" value=\"1\" id=\"anti-spam\" required=\"required\"/>
\t\t\t\t\t
                    <div id=\"success\"></div>
                    <!-- For success/fail messages -->
\t\t\t\t\t<input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 57
        echo gettext("Send");
        echo "\" />
                </form>
            </div>
            <!-- Contact Details Column -->
            <div class=\"col-md-4\">
                <h3>Contact Details</h3>
\t\t\t\t<h4>";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "name", [], "any", false, false, false, 63), "html", null, true);
        echo "</h4>
                <p>
                    ";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "address_1", [], "any", false, false, false, 65), "html", null, true);
        echo "<br />";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "address_2", [], "any", false, false, false, 65), "html", null, true);
        echo "<br />";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "address_3", [], "any", false, false, false, 65), "html", null, true);
        echo "<br />
                </p>
                <p><i class=\"fa fa-phone\"></i> 
                    Phone: ";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "tel", [], "any", false, false, false, 68), "html", null, true);
        echo "</p>\t
                <p><i class=\"fa fa-envelope-o\"></i> 
                    E-mail: <a href=\"mailto:";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "email", [], "any", false, false, false, 70), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "email", [], "any", false, false, false, 70), "html", null, true);
        echo "</a></p>
                <p><i class=\"fa fa-globe\"></i> 
                    Web: <a href=\"";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "www", [], "any", false, false, false, 72), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "www", [], "any", false, false, false, 72), "html", null, true);
        echo "</a></p>
            </div>
        </div>
        <!-- /.row -->

";
    }

    // line 79
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 80
        echo "<script type=\"text/javascript\">
\$(function() {
    \$('#anti-spam').remove();

    \$('#public-ticket-create').bind('submit',function(event){
        bb.post(
            'guest/support/ticket_create',
            \$(this).serialize(),
            function(result) {
                bb.redirect('";
        // line 89
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("support/contact-us/conversation");
        echo "' + '/' + result);
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
        return "mod_support_contact_us.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 89,  222 => 80,  218 => 79,  206 => 72,  199 => 70,  194 => 68,  184 => 65,  179 => 63,  170 => 57,  162 => 52,  155 => 48,  151 => 47,  143 => 42,  139 => 41,  127 => 36,  123 => 35,  111 => 30,  107 => 29,  101 => 26,  94 => 21,  90 => 20,  80 => 14,  74 => 13,  69 => 11,  64 => 8,  60 => 7,  53 => 3,  49 => 1,  47 => 5,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends request.ajax ? \"layout_blank.phtml\" : \"layout_default.phtml\" %}
{% import \"macro_functions.phtml\" as mf %}
{% block meta_title %}{% trans 'Contact us' %}{% endblock %}

{% set company = guest.system_company %}

{% block content_before %}
\t\t<!-- Page Heading/Breadcrumbs -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">{% trans 'Contact us' %}</h1>
\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t<li><a href=\"{{''|link }}\">{% trans 'Home' %}</a></li>
\t\t\t\t\t<li class=\"active\">{% trans 'Contact us' %}</li>
\t\t\t\t</ol>
            </div>
        </div>
        <!-- /.row -->
{% endblock %}
{% block content %}

\t\t<!-- Content Row -->
        <div class=\"row\">
\t\t\t<!-- Contact form -->
\t\t\t<div class=\"col-md-8\">
                <form method=\"post\" action=\"\" class=\"api_form\" data-api-url=\"guest/support/ticket_create\" data-api-tocreated=\"{{ 'support/contact-us/conversation'|link }}\">
                    <div class=\"control-group form-group\">
                        <div class=\"controls\">
                            <label>{% trans 'Name' %}:</label>
                            <input type=\"text\" class=\"form-control\" name=\"name\" value=\"{% if client %}{{ (profile.first_name ~ \" \" ~ profile.last_name) }}{% else %}{{request.name}}{% endif %}\" required=\"required\">
                        </div>
                    </div>
                    <div class=\"control-group form-group\">
                        <div class=\"controls\">
                            <label>{% trans 'Email address' %}:</label>
                            <input type=\"email\" class=\"form-control\" name=\"email\" value=\"{% if client %}{{ profile.email }}{% else %}{{request.name}}{% endif %}\" required=\"required\">
                        </div>
                    </div>
\t\t\t\t\t<div class=\"control-group form-group\">
                        <div class=\"controls\">
                            <label>{% trans 'Subject' %}:</label>
                            <input type=\"text\" class=\"form-control\" name=\"subject\" value=\"{{request.subject}}\" required=\"required\">
                        </div>
                    </div>
                    <div class=\"control-group form-group\">
                        <div class=\"controls\">
                            <label>{% trans 'Message' %}:</label>
                            <textarea rows=\"10\" cols=\"100\" class=\"form-control\" name=\"message\" maxlength=\"999\" style=\"resize:none\" required=\"required\" data-provide=\"markdown\" data-iconlibrary=\"fa\">{{request.message}}</textarea>
                        </div>
                    </div>
\t\t\t\t\t
\t\t\t\t\t{{ mf.recaptcha }}
\t\t\t\t\t<input type=\"hidden\" name=\"anti-spam\" value=\"1\" id=\"anti-spam\" required=\"required\"/>
\t\t\t\t\t
                    <div id=\"success\"></div>
                    <!-- For success/fail messages -->
\t\t\t\t\t<input class=\"btn btn-primary\" type=\"submit\" value=\"{% trans 'Send' %}\" />
                </form>
            </div>
            <!-- Contact Details Column -->
            <div class=\"col-md-4\">
                <h3>Contact Details</h3>
\t\t\t\t<h4>{{ company.name }}</h4>
                <p>
                    {{ company.address_1 }}<br />{{ company.address_2 }}<br />{{ company.address_3 }}<br />
                </p>
                <p><i class=\"fa fa-phone\"></i> 
                    Phone: {{ company.tel }}</p>\t
                <p><i class=\"fa fa-envelope-o\"></i> 
                    E-mail: <a href=\"mailto:{{ company.email }}\">{{ company.email }}</a></p>
                <p><i class=\"fa fa-globe\"></i> 
                    Web: <a href=\"{{ company.www }}\">{{ company.www }}</a></p>
            </div>
        </div>
        <!-- /.row -->

{% endblock %}

{% block js %}
<script type=\"text/javascript\">
\$(function() {
    \$('#anti-spam').remove();

    \$('#public-ticket-create').bind('submit',function(event){
        bb.post(
            'guest/support/ticket_create',
            \$(this).serialize(),
            function(result) {
                bb.redirect('{{ 'support/contact-us/conversation'|link }}' + '/' + result);
            }
        );
        return false;
    });
});
</script>
{% endblock %}
", "mod_support_contact_us.phtml", "/home/lexcicxy/hostshibe.cf/bb-themes/bootstrap/html/mod_support_contact_us.phtml");
    }
}
