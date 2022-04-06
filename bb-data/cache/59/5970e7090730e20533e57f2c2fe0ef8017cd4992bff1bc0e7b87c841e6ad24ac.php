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

/* layout_default.phtml */
class __TwigTemplate_3eb9aec3c22651f1b42f42c67e68399cf85c218f6ea194cb89df5d530c329e63 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'meta_title' => [$this, 'block_meta_title'],
            'meta_description' => [$this, 'block_meta_description'],
            'meta_keywords' => [$this, 'block_meta_keywords'],
            'js' => [$this, 'block_js'],
            'opengraph' => [$this, 'block_opengraph'],
            'head' => [$this, 'block_head'],
            'content_banner' => [$this, 'block_content_banner'],
            'sidebar' => [$this, 'block_sidebar'],
            'sidebar2' => [$this, 'block_sidebar2'],
            'content_before' => [$this, 'block_content_before'],
            'content' => [$this, 'block_content'],
            'content_after' => [$this, 'block_content_after'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["company"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_company", [], "any", false, false, false, 1);
        // line 2
        echo "<!DOCTYPE html>
<html>
<head>
    <title>";
        // line 5
        $this->displayBlock('meta_title', $context, $blocks);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "meta_title", [], "any", false, false, false, 5), "html", null, true);
        echo "</title>

    <meta property=\"bb:url\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_constant("BB_URL"), "html", null, true);
        echo "\"/>
    <meta property=\"bb:client_area\" content=\"";
        // line 8
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/");
        echo "\"/>
    
    <meta name=\"description\" content=\"";
        // line 10
        $this->displayBlock('meta_description', $context, $blocks);
        echo "\" />
    <meta name=\"keywords\" content=\"";
        // line 11
        $this->displayBlock('meta_keywords', $context, $blocks);
        echo "\" />
    <meta name=\"robots\" content=\"";
        // line 12
        if (((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "meta_robots", [], "any", true, true, false, 12)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "meta_robots", [], "any", false, false, false, 12))) : (""))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "meta_robots", [], "any", false, false, false, 12), "html", null, true);
        } else {
            echo "index, follow";
        }
        echo "\" />
\t<meta name=\"author\" content=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "meta_author", [], "any", false, false, false, 13), "html", null, true);
        echo "\">
    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />

    <link rel=\"shortcut icon\" href=\"";
        // line 16
        echo twig_asset_url($this->env, "favicon.ico");
        echo "\" />
\t
\t<!-- Bootstrap Core CSS -->
\t";
        // line 19
        if ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "theme", [], "any", false, false, false, 19) != "default")) {
            echo "<link href=\"";
            echo twig_asset_url($this->env, "css/themes/theme-");
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "theme", [], "any", false, false, false, 19), "html", null, true);
            echo ".min.css\" rel=\"stylesheet\">
\t";
        } else {
            // line 20
            echo "<link href=\"";
            echo twig_asset_url($this->env, "css/bootstrap.min.css");
            echo "\" rel=\"stylesheet\">
\t";
        }
        // line 22
        echo "\t
\t<!-- Bootstrap Markdown Editor -->
    <link href=\"";
        // line 24
        echo twig_asset_url($this->env, "css/bootstrap-markdown.min.css");
        echo "\" rel=\"stylesheet\">

    <!-- Theme CSS -->
    <link href=\"";
        // line 27
        echo twig_asset_url($this->env, "css/modern-business.css");
        echo "\" rel=\"stylesheet\">
\t
\t";
        // line 29
        if (((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "inject_css", [], "any", true, true, false, 29)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "inject_css", [], "any", false, false, false, 29))) : (""))) {
            // line 30
            echo "\t<!-- Custom CSS -->
\t<style>
\t\t";
            // line 32
            echo twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "inject_css", [], "any", false, false, false, 32);
            echo "
\t</style>
\t";
        }
        // line 35
        echo "
    <!-- Custom Fonts -->
    <link href=\"";
        // line 37
        echo twig_asset_url($this->env, "font-awesome/css/font-awesome.min.css");
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t
\t<!-- jQuery -->
    <script src=\"";
        // line 40
        echo twig_asset_url($this->env, "js/jquery.js");
        echo "\"></script>
\t
\t<!-- BoxBilling -->
    <script src=\"";
        // line 43
        echo twig_asset_url($this->env, "js/bb-jquery.js");
        echo "\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"";
        // line 46
        echo twig_asset_url($this->env, "js/bootstrap.min.js");
        echo "\"></script>
\t
\t<!-- Bootstrap Markdown Editor -->
\t<script src=\"";
        // line 49
        echo twig_asset_url($this->env, "js/bootstrap-markdown.js");
        echo "\"></script>
\t<script src=\"";
        // line 50
        echo twig_asset_url($this->env, "js/to-markdown.js");
        echo "\"></script>
\t<script src=\"";
        // line 51
        echo twig_asset_url($this->env, "js/markdown.js");
        echo "\"></script>
\t
\t<!-- Bootbox Alerts JavaScript -->
    <script src=\"";
        // line 54
        echo twig_asset_url($this->env, "js/bootbox.min.js");
        echo "\"></script>
\t
\t";
        // line 56
        if (((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "inject_javascript", [], "any", true, true, false, 56)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "inject_javascript", [], "any", false, false, false, 56))) : (""))) {
            // line 57
            echo "\t<!-- Custom Javascript -->
\t<script>
\t\t";
            // line 59
            echo twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "inject_javascript", [], "any", false, false, false, 59);
            echo "
\t</script>
\t";
        }
        // line 62
        echo "\t
\t";
        // line 63
        $this->displayBlock('js', $context, $blocks);
        // line 64
        echo "
    ";
        // line 65
        $this->displayBlock('opengraph', $context, $blocks);
        // line 66
        echo "    ";
        $this->displayBlock('head', $context, $blocks);
        // line 67
        echo "</head>

<body>
";
        // line 70
        if (twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "extension_is_on", [0 => ["mod" => "cookieconsent"]], "method", false, false, false, 70)) {
            // line 71
            echo "    ";
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = null;
            try {
                $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 =                 $this->loadTemplate("mod_cookieconsent_index.phtml", "layout_default.phtml", 71);
            } catch (LoaderError $e) {
                // ignore missing template
            }
            if ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) {
                $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4->display($context);
            }
        }
        // line 73
        echo "
\t<!-- Navigation -->
    <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
        <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#mainmenu\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"";
        // line 85
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("");
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "name", [], "any", false, false, false, 85), "html", null, true);
        echo "</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"mainmenu\">
\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t<li><a href=\"";
        // line 90
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("cart");
        echo "\" title=\"";
        echo gettext("Shopping cart");
        echo "\"><i class=\"fa fa-shopping-cart\"></i> ";
        echo gettext("Shopping cart");
        echo "</a></li>
\t\t\t\t\t";
        // line 91
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "side_menu_home", [], "any", false, false, false, 91)) {
            echo "<li class=\"visible-xs\"><a href=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("");
            echo "\" title=\"";
            echo gettext("Home");
            echo "\" ><i class=\"fa fa-home\"></i> ";
            echo gettext("Home");
            echo "</a></li>";
        }
        // line 92
        echo "\t\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "side_menu_order", [], "any", false, false, false, 92)) {
            echo "<li class=\"visible-xs\"><a href=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/order");
            echo "\" title=\"";
            echo gettext("Order");
            echo "\" ><i class=\"fa fa-shopping-cart\"></i> ";
            echo gettext("Order");
            echo "</a></li>";
        }
        // line 93
        echo "\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "side_menu_blog", [], "any", false, false, false, 93) && twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "extension_is_on", [0 => ["mod" => "news"]], "method", false, false, false, 93))) {
            echo "<li class=\"visible-xs\"><a href=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/news");
            echo "\" title=\"";
            echo gettext("Blog");
            echo "\" ><i class=\"fa fa-bullhorn\"></i> ";
            echo gettext("Blog");
            echo "</a></li>";
        }
        // line 94
        echo "\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "side_menu_forum", [], "any", false, false, false, 94) && twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "extension_is_on", [0 => ["mod" => "forum"]], "method", false, false, false, 94))) {
            echo "<li class=\"visible-xs\"><a href=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/forum");
            echo "\"><i class=\"fa fa-comments\"></i> ";
            echo gettext("Forum");
            echo "</a></li>";
        }
        // line 95
        echo "\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "side_menu_kb", [], "any", false, false, false, 95) && twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "extension_is_on", [0 => ["mod" => "kb"]], "method", false, false, false, 95))) {
            echo "<li class=\"visible-xs\"><a href=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("kb");
            echo "\" title=\"";
            echo gettext("Knowledge Base");
            echo "\"><i class=\"fa fa-graduation-cap\"></i> ";
            echo gettext("Knowledge Base");
            echo "</a></li>";
        }
        // line 96
        echo "\t\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "side_menu_contact", [], "any", false, false, false, 96)) {
            echo "<li class=\"visible-xs\"><a href=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/support/contact-us");
            echo "\"><i class=\"fa fa-envelope\"></i> ";
            echo gettext("Contact us");
            echo "</a></li>";
        }
        // line 97
        echo "\t\t\t\t\t";
        if (($context["client"] ?? null)) {
            // line 98
            echo "\t\t\t\t\t";
            $context["profile"] = twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "client_get", [], "any", false, false, false, 98);
            // line 99
            echo "\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "side_menu_services", [], "any", false, false, false, 99)) {
                echo "<li class=\"visible-xs\"><a href=\"";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("order/service");
                echo "\" title=\"";
                echo gettext("Services");
                echo "\"><i class=\"fa fa-cog\"></i> ";
                echo gettext("Services");
                echo "</a></li>";
            }
            // line 100
            echo "\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "side_menu_support", [], "any", false, false, false, 100)) {
                echo "<li class=\"visible-xs\"><a href=\"";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("support");
                echo "\" title=\"";
                echo gettext("Tickets");
                echo "\"><i class=\"fa fa-life-ring\"></i> ";
                echo gettext("Support");
                echo "</a></li>";
            }
            // line 101
            echo "\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "side_menu_invoices", [], "any", false, false, false, 101)) {
                echo "<li class=\"visible-xs\"><a href=\"";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("invoice");
                echo "\" title=\"";
                echo gettext("Invoices");
                echo "\"><i class=\"fa fa-credit-card\"></i> ";
                echo gettext("Invoices test");
                echo "</a></li>";
            }
            // line 102
            echo "\t\t\t\t\t\t<li><a href=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("");
            echo "\" title=\"";
            echo gettext("Dashboard");
            echo "\"><i class=\"fa fa-home\"></i> ";
            echo gettext("Dashboard");
            echo "</a></li>
\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fa fa-user\"></i> ";
            // line 104
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "first_name", [], "any", false, false, false, 104) . " ") . twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "last_name", [], "any", false, false, false, 104)), "html", null, true);
            echo " <span class=\"caret\"></span></a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 106
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("client/me");
            echo "\" title=\"";
            echo gettext("Profile");
            echo "\"><i class=\"fa fa-user\"></i> ";
            echo gettext("Manage profile");
            echo "</a></li>
\t\t\t\t\t\t\t\t";
            // line 107
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "show_client_emails", [], "any", false, false, false, 107)) {
                echo "<li><a href=\"";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("email");
                echo "\" title=\"";
                echo gettext("Emails");
                echo "\"><i class=\"fa fa-envelope\"></i> ";
                echo gettext("Emails");
                echo "</a></li>";
            }
            // line 108
            echo "\t\t\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "show_client_balance", [], "any", false, false, false, 108)) {
                echo "<li><a href=\"";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("client/balance");
                echo "\"><i class=\"fa fa-bank\"></i> ";
                echo gettext("Balance");
                echo ": ";
                echo twig_money($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "balance", [], "any", false, false, false, 108), twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "currency", [], "any", false, false, false, 108));
                echo "</a></li>";
            }
            // line 109
            echo "\t\t\t\t\t\t\t\t<li><a href=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("client/logout");
            echo "\" title=\"";
            echo gettext("Sign out");
            echo "\"><i class=\"fa fa-sign-out\"></i> ";
            echo gettext("Sign out");
            echo "</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        } else {
            // line 112
            echo "\t\t\t
\t\t\t\t\t\t<li><a href=\"\" data-toggle=\"modal\" data-target=\"#login\">";
            // line 113
            echo gettext("Sign in");
            echo "</a></li>
\t\t\t\t\t\t<li><a href=\"";
            // line 114
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("login", ["register" => 1]);
            echo "\">";
            echo gettext("Register");
            echo "</a></li>
\t\t\t\t\t";
        }
        // line 116
        echo "\t\t\t\t</ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

";
        // line 123
        $this->displayBlock('content_banner', $context, $blocks);
        // line 124
        echo "<div class=\"container\">
\t<div class=\"row\">
\t\t<div class=\"col-sm-12\">
\t\t\t
\t\t</div>
\t\t
\t";
        // line 130
        if ((($context["side_menu"] ?? null) == "hidden")) {
            // line 131
            echo "\t\t<div class=\"col-sm-12\">
\t";
        } else {
            // line 133
            echo "\t\t<div class=\"col-sm-3\">
\t\t\t";
            // line 134
            if (twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "logo_url", [], "any", false, false, false, 134)) {
                echo "<h1><a href=\"";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("");
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "logo_url", [], "any", false, false, false, 134), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "name", [], "any", false, false, false, 134), "html", null, true);
                echo "\" class=\"img-responsive center-block\" /></a></h1>
\t\t\t";
            } else {
                // line 135
                echo "<h1><a href=\"";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("");
                echo "\"><img src=\" ";
                echo twig_asset_url($this->env, "images/logo.png");
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "name", [], "any", false, false, false, 135), "html", null, true);
                echo "\" class=\"img-responsive center-block\" /></a></h1>
\t\t\t";
            }
            // line 137
            echo "\t\t\t<div class=\"hidden-xs\">";
            $this->loadTemplate("partial_menu.phtml", "layout_default.phtml", 137)->display($context);
            echo "</div>

\t\t\t<!--";
            // line 139
            $context["languages"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "extension_languages", [], "any", false, false, false, 139);
            // line 140
            echo "\t\t\t\t";
            if ((twig_length_filter($this->env, ($context["languages"] ?? null)) > 1)) {
                // line 141
                echo "\t\t\t\t\t<h2>";
                echo gettext("Select language");
                echo "</h2>
\t\t\t\t\t\t\t<select name=\"lang\">
\t\t\t\t\t\t\t";
                // line 143
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                    // line 144
                    echo "\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_escape_filter($this->env, $context["lang"], "html", null, true);
                    echo "\" >";
                    echo twig_escape_filter($this->env, gettext($context["lang"]), "html", null, true);
                    echo "</option>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 146
                echo "\t\t\t\t\t\t\t</select>
\t\t\t\t";
            }
            // line 147
            echo "-->
\t\t\t
\t\t\t";
            // line 149
            $this->displayBlock('sidebar', $context, $blocks);
            // line 150
            echo "\t\t\t
\t\t\t";
            // line 151
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "sidebar_note_enabled", [], "any", false, false, false, 151)) {
                // line 152
                echo "            <div class=\"well well-sm\">
                <h4>";
                // line 153
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "sidebar_note_title", [], "any", false, false, false, 153), "html", null, true);
                echo "</h4>
                <p>";
                // line 154
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "sidebar_note_content", [], "any", false, false, false, 154), "html", null, true);
                echo "</p>
            </div>
            ";
            }
            // line 156
            echo "\t
\t\t\t
\t\t\t";
            // line 158
            $this->displayBlock('sidebar2', $context, $blocks);
            // line 159
            echo "\t\t</div>
\t\t<div class=\"col-sm-9\">
\t";
        }
        // line 161
        echo "\t
\t\t\t";
        // line 162
        $this->displayBlock('content_before', $context, $blocks);
        // line 163
        echo "\t\t\t";
        $this->loadTemplate("partial_message.phtml", "layout_default.phtml", 163)->display($context);
        // line 164
        echo "\t\t\t";
        $this->displayBlock('content', $context, $blocks);
        // line 165
        echo "\t\t\t";
        $this->displayBlock('content_after', $context, $blocks);
        // line 166
        echo "
\t\t\t";
        // line 167
        if ( !($context["client"] ?? null)) {
            // line 168
            echo "\t\t\t<div class=\"modal fade\" id=\"login\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"";
            echo gettext("Login to client area");
            echo "\">
\t\t\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t\t\t\t<h4 class=\"modal-title\" id=\"myModalLabel\">";
            // line 173
            echo gettext("Login to client area");
            echo "</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t<form action=\"\" method=\"post\" class=\"api_form\" data-api-url=\"";
            // line 176
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/guest/client/login");
            echo "\" data-api-reload=\"1\">
\t\t\t\t\t\t\t\t<div class=\"control-group form-group\">
\t\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t\t<label>";
            // line 179
            echo gettext("Email address");
            echo ":</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" name=\"email\" value=\"";
            // line 180
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "email", [], "any", false, false, false, 180), "html", null, true);
            echo "\" required=\"required\" placeholder=\"";
            echo gettext("Email address");
            echo "\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"control-group form-group\">
\t\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t\t<label>";
            // line 185
            echo gettext("Password");
            echo ":</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" name=\"password\" value=\"\" required=\"required\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"remember\" value=\"1\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i></button>
\t\t\t\t\t\t\t\t<a class=\"btn btn-success\" href=\"";
            // line 193
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/login", ["register" => 1]);
            echo "\">";
            echo gettext("Create new account");
            echo "</a>
\t\t\t\t\t\t\t\t<a class=\"btn btn-warning\" href=\"";
            // line 194
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("reset-password");
            echo "\">";
            echo gettext("Reset password");
            echo "</a>
\t\t\t\t\t\t\t\t<input class=\"btn btn-primary\" type=\"submit\" value=\"";
            // line 195
            echo gettext("Sign in");
            echo "\">
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        // line 202
        echo "\t\t</div>      
\t</div>

\t";
        // line 205
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "show_page_footer", [], "any", false, false, false, 205)) {
            // line 206
            echo "        <!-- Footer -->
\t\t<hr>
        <footer>
\t\t\t<div class=\"row text-center\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<p>
\t\t\t\t\t\t";
            // line 212
            if (((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_signature", [], "any", true, true, false, 212)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_signature", [], "any", false, false, false, 212))) : (""))) {
                echo twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_signature", [], "any", false, false, false, 212);
                echo "
\t\t\t\t\t\t";
            } else {
                // line 213
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "name", [], "any", false, false, false, 213), "html", null, true);
                echo " - © ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["now"] ?? null), "Y"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "signature", [], "any", false, false, false, 213), "html", null, true);
                echo "
\t\t\t\t\t\t";
            }
            // line 215
            echo "\t\t\t\t\t</p>
\t\t\t\t\t<ul class=\"list-inline\">
                        <li><a href=\"";
            // line 217
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/about-us");
            echo "\">";
            echo gettext("About us");
            echo "</a></li>
                        <li><a href=\"";
            // line 218
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/tos");
            echo "\">";
            echo gettext("Terms and Conditions");
            echo "</a></li>
                        <li><a href=\"";
            // line 219
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/privacy-policy");
            echo "\">";
            echo gettext("Privacy Policy");
            echo "</a></li><br />
\t\t\t\t\t\t";
            // line 220
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
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
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 221
                echo "\t\t\t\t\t\t\t";
                if ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["settings"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[(("footer_link_" . twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 221)) . "_enabled")] ?? null) : null)) {
                    // line 222
                    echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t";
                    // line 223
                    if ((twig_in_filter("http://", (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["settings"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[(("footer_link_" . twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 223)) . "_page")] ?? null) : null)) || twig_in_filter("https://", (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["settings"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[(("footer_link_" . twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 223)) . "_page")] ?? null) : null)))) {
                        // line 224
                        echo "\t\t\t\t\t\t\t\t<a href=\"";
                        echo twig_escape_filter($this->env, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["settings"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[(("footer_link_" . twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 224)) . "_page")] ?? null) : null), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["settings"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[(("footer_link_" . twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 224)) . "_title")] ?? null) : null), "html", null, true);
                        echo "</a>
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 226
                        echo "\t\t\t\t\t\t\t\t<a href=\"";
                        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["settings"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[(("footer_link_" . twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 226)) . "_page")] ?? null) : null));
                        echo "\">";
                        echo twig_escape_filter($this->env, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["settings"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[(("footer_link_" . twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 226)) . "_title")] ?? null) : null), "html", null, true);
                        echo "</a>
\t\t\t\t\t\t\t\t";
                    }
                    // line 228
                    echo "\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                }
                // line 230
                echo "\t\t\t\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 231
            echo "\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "extension_is_on", [0 => ["mod" => "branding"]], "method", false, false, false, 231) || twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_branding_enabled", [], "any", false, false, false, 231))) {
                // line 232
                echo "\t\t\t\t\t\t\t<li><a href=\"https://github.com/boxbilling/boxbilling\" title=\"Billing Software\" target=\"_blank\">";
                echo gettext("Powered by the BoxBilling Community");
                echo "</a></li>
\t\t\t\t\t\t";
            }
            // line 234
            echo "                    </ul>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t";
            // line 237
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_to_top_enabled", [], "any", false, false, false, 237)) {
                echo "<a href=\"#top\" class=\"btn btn-default pull-right\"><i class=\"fa fa-arrow-up\"></i> ";
                echo gettext("Top");
                echo "</a>";
            }
            // line 238
            echo "\t\t\t</div>
        </footer>
\t";
        }
        // line 241
        echo "    </div>
    <!-- /.container -->
<noscript>NOTE: Many features on BoxBilling require Javascript and cookies. You can enable both via your browser's preference settings.</noscript>
</body>
</html>
";
    }

    // line 5
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 10
    public function block_meta_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "meta_description", [], "any", false, false, false, 10), "html", null, true);
    }

    // line 11
    public function block_meta_keywords($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "meta_keywords", [], "any", false, false, false, 11), "html", null, true);
    }

    // line 63
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 65
    public function block_opengraph($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 66
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 123
    public function block_content_banner($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 149
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 158
    public function block_sidebar2($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 162
    public function block_content_before($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 164
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 165
    public function block_content_after($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "layout_default.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  854 => 165,  848 => 164,  842 => 162,  836 => 158,  830 => 149,  824 => 123,  818 => 66,  812 => 65,  806 => 63,  799 => 11,  792 => 10,  786 => 5,  777 => 241,  772 => 238,  766 => 237,  761 => 234,  755 => 232,  752 => 231,  738 => 230,  734 => 228,  726 => 226,  718 => 224,  716 => 223,  713 => 222,  710 => 221,  693 => 220,  687 => 219,  681 => 218,  675 => 217,  671 => 215,  662 => 213,  656 => 212,  648 => 206,  646 => 205,  641 => 202,  631 => 195,  625 => 194,  619 => 193,  608 => 185,  598 => 180,  594 => 179,  588 => 176,  582 => 173,  573 => 168,  571 => 167,  568 => 166,  565 => 165,  562 => 164,  559 => 163,  557 => 162,  554 => 161,  549 => 159,  547 => 158,  543 => 156,  537 => 154,  533 => 153,  530 => 152,  528 => 151,  525 => 150,  523 => 149,  519 => 147,  515 => 146,  504 => 144,  500 => 143,  494 => 141,  491 => 140,  489 => 139,  483 => 137,  473 => 135,  462 => 134,  459 => 133,  455 => 131,  453 => 130,  445 => 124,  443 => 123,  434 => 116,  427 => 114,  423 => 113,  420 => 112,  408 => 109,  397 => 108,  387 => 107,  379 => 106,  374 => 104,  364 => 102,  353 => 101,  342 => 100,  331 => 99,  328 => 98,  325 => 97,  316 => 96,  305 => 95,  296 => 94,  285 => 93,  274 => 92,  264 => 91,  256 => 90,  246 => 85,  232 => 73,  220 => 71,  218 => 70,  213 => 67,  210 => 66,  208 => 65,  205 => 64,  203 => 63,  200 => 62,  194 => 59,  190 => 57,  188 => 56,  183 => 54,  177 => 51,  173 => 50,  169 => 49,  163 => 46,  157 => 43,  151 => 40,  145 => 37,  141 => 35,  135 => 32,  131 => 30,  129 => 29,  124 => 27,  118 => 24,  114 => 22,  108 => 20,  100 => 19,  94 => 16,  88 => 13,  80 => 12,  76 => 11,  72 => 10,  67 => 8,  63 => 7,  56 => 5,  51 => 2,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set company  = guest.system_company %}
<!DOCTYPE html>
<html>
<head>
    <title>{% block meta_title %}{% endblock %} {{ settings.meta_title }}</title>

    <meta property=\"bb:url\" content=\"{{ constant('BB_URL') }}\"/>
    <meta property=\"bb:client_area\" content=\"{{ '/'|link }}\"/>
    
    <meta name=\"description\" content=\"{% block meta_description %}{{ settings.meta_description }}{% endblock %}\" />
    <meta name=\"keywords\" content=\"{% block meta_keywords %}{{ settings.meta_keywords }}{% endblock %}\" />
    <meta name=\"robots\" content=\"{% if settings.meta_robots|default %}{{ settings.meta_robots }}{% else %}index, follow{% endif %}\" />
\t<meta name=\"author\" content=\"{{ settings.meta_author }}\">
    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />

    <link rel=\"shortcut icon\" href=\"{{ 'favicon.ico' | asset_url }}\" />
\t
\t<!-- Bootstrap Core CSS -->
\t{% if settings.theme != \"default\" %}<link href=\"{{ 'css/themes/theme-' | asset_url }}{{ settings.theme }}.min.css\" rel=\"stylesheet\">
\t{% else %}<link href=\"{{ 'css/bootstrap.min.css' | asset_url }}\" rel=\"stylesheet\">
\t{% endif %}
\t
\t<!-- Bootstrap Markdown Editor -->
    <link href=\"{{ 'css/bootstrap-markdown.min.css' | asset_url }}\" rel=\"stylesheet\">

    <!-- Theme CSS -->
    <link href=\"{{ 'css/modern-business.css' | asset_url }}\" rel=\"stylesheet\">
\t
\t{% if settings.inject_css|default %}
\t<!-- Custom CSS -->
\t<style>
\t\t{{ settings.inject_css|raw }}
\t</style>
\t{% endif %}

    <!-- Custom Fonts -->
    <link href=\"{{ 'font-awesome/css/font-awesome.min.css' | asset_url }}\" rel=\"stylesheet\" type=\"text/css\">
\t
\t<!-- jQuery -->
    <script src=\"{{ 'js/jquery.js' | asset_url }}\"></script>
\t
\t<!-- BoxBilling -->
    <script src=\"{{ 'js/bb-jquery.js' | asset_url }}\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"{{ 'js/bootstrap.min.js' | asset_url }}\"></script>
\t
\t<!-- Bootstrap Markdown Editor -->
\t<script src=\"{{ 'js/bootstrap-markdown.js' | asset_url }}\"></script>
\t<script src=\"{{ 'js/to-markdown.js' | asset_url }}\"></script>
\t<script src=\"{{ 'js/markdown.js' | asset_url }}\"></script>
\t
\t<!-- Bootbox Alerts JavaScript -->
    <script src=\"{{ 'js/bootbox.min.js' | asset_url }}\"></script>
\t
\t{% if settings.inject_javascript|default %}
\t<!-- Custom Javascript -->
\t<script>
\t\t{{ settings.inject_javascript|raw }}
\t</script>
\t{% endif %}
\t
\t{% block js %}{% endblock %}

    {% block opengraph %}{% endblock %}
    {% block head %}{% endblock %}
</head>

<body>
{% if guest.extension_is_on({\"mod\":\"cookieconsent\"}) %}
    {% include 'mod_cookieconsent_index.phtml' ignore missing%}
{% endif %}

\t<!-- Navigation -->
    <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
        <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#mainmenu\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"{{''|link }}\">{{company.name}}</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"mainmenu\">
\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t<li><a href=\"{{ 'cart'|link }}\" title=\"{% trans 'Shopping cart' %}\"><i class=\"fa fa-shopping-cart\"></i> {% trans 'Shopping cart' %}</a></li>
\t\t\t\t\t{% if settings.side_menu_home %}<li class=\"visible-xs\"><a href=\"{{ ''|link }}\" title=\"{% trans 'Home' %}\" ><i class=\"fa fa-home\"></i> {% trans 'Home' %}</a></li>{% endif %}
\t\t\t\t\t{% if settings.side_menu_order %}<li class=\"visible-xs\"><a href=\"{{ '/order'|link }}\" title=\"{% trans 'Order' %}\" ><i class=\"fa fa-shopping-cart\"></i> {% trans 'Order' %}</a></li>{% endif %}
\t\t\t\t\t{% if settings.side_menu_blog and guest.extension_is_on({\"mod\":\"news\"}) %}<li class=\"visible-xs\"><a href=\"{{ '/news'|link }}\" title=\"{% trans 'Blog' %}\" ><i class=\"fa fa-bullhorn\"></i> {% trans 'Blog' %}</a></li>{% endif %}
\t\t\t\t\t{% if settings.side_menu_forum and guest.extension_is_on({\"mod\":\"forum\"}) %}<li class=\"visible-xs\"><a href=\"{{ '/forum'|link }}\"><i class=\"fa fa-comments\"></i> {% trans 'Forum' %}</a></li>{% endif %}
\t\t\t\t\t{% if settings.side_menu_kb and guest.extension_is_on({\"mod\":\"kb\"}) %}<li class=\"visible-xs\"><a href=\"{{ 'kb'|link }}\" title=\"{% trans 'Knowledge Base' %}\"><i class=\"fa fa-graduation-cap\"></i> {% trans 'Knowledge Base' %}</a></li>{% endif %}
\t\t\t\t\t{% if settings.side_menu_contact %}<li class=\"visible-xs\"><a href=\"{{ '/support/contact-us'|link }}\"><i class=\"fa fa-envelope\"></i> {% trans 'Contact us' %}</a></li>{% endif %}
\t\t\t\t\t{% if client %}
\t\t\t\t\t{% set profile = client.client_get %}
\t\t\t\t\t\t{% if settings.side_menu_services %}<li class=\"visible-xs\"><a href=\"{{ 'order/service'|link }}\" title=\"{% trans 'Services' %}\"><i class=\"fa fa-cog\"></i> {% trans 'Services' %}</a></li>{% endif %}
\t\t\t\t\t\t{% if settings.side_menu_support %}<li class=\"visible-xs\"><a href=\"{{ 'support'|link }}\" title=\"{% trans 'Tickets' %}\"><i class=\"fa fa-life-ring\"></i> {% trans 'Support' %}</a></li>{% endif %}
\t\t\t\t\t\t{% if settings.side_menu_invoices %}<li class=\"visible-xs\"><a href=\"{{ 'invoice'|link }}\" title=\"{% trans 'Invoices' %}\"><i class=\"fa fa-credit-card\"></i> {% trans 'Invoices test' %}</a></li>{% endif %}
\t\t\t\t\t\t<li><a href=\"{{ ''|link }}\" title=\"{% trans 'Dashboard' %}\"><i class=\"fa fa-home\"></i> {% trans 'Dashboard' %}</a></li>
\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fa fa-user\"></i> {{ (profile.first_name ~ \" \" ~ profile.last_name) }} <span class=\"caret\"></span></a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t<li><a href=\"{{ 'client/me'|link }}\" title=\"{% trans 'Profile' %}\"><i class=\"fa fa-user\"></i> {% trans 'Manage profile' %}</a></li>
\t\t\t\t\t\t\t\t{% if settings.show_client_emails %}<li><a href=\"{{ 'email'|link }}\" title=\"{% trans 'Emails'%}\"><i class=\"fa fa-envelope\"></i> {% trans 'Emails'%}</a></li>{% endif %}
\t\t\t\t\t\t\t\t{% if settings.show_client_balance %}<li><a href=\"{{ 'client/balance'|link }}\"><i class=\"fa fa-bank\"></i> {% trans 'Balance' %}: {{ profile.balance | money(profile.currency) }}</a></li>{% endif %}
\t\t\t\t\t\t\t\t<li><a href=\"{{ 'client/logout'|link }}\" title=\"{% trans 'Sign out' %}\"><i class=\"fa fa-sign-out\"></i> {% trans 'Sign out' %}</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t{% else %}\t\t\t
\t\t\t\t\t\t<li><a href=\"\" data-toggle=\"modal\" data-target=\"#login\">{% trans 'Sign in' %}</a></li>
\t\t\t\t\t\t<li><a href=\"{{ 'login'|link({'register' : 1}) }}\">{% trans 'Register' %}</a></li>
\t\t\t\t\t{% endif %}
\t\t\t\t</ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

{% block content_banner %}{% endblock %}
<div class=\"container\">
\t<div class=\"row\">
\t\t<div class=\"col-sm-12\">
\t\t\t
\t\t</div>
\t\t
\t{% if side_menu == 'hidden' %}
\t\t<div class=\"col-sm-12\">
\t{% else %}
\t\t<div class=\"col-sm-3\">
\t\t\t{% if company.logo_url %}<h1><a href=\"{{ ''|link }}\"><img src=\"{{company.logo_url}}\" alt=\"{{company.name}}\" class=\"img-responsive center-block\" /></a></h1>
\t\t\t{% else %}<h1><a href=\"{{ ''|link }}\"><img src=\" {{ 'images/logo.png' | asset_url }}\" alt=\"{{company.name}}\" class=\"img-responsive center-block\" /></a></h1>
\t\t\t{% endif %}
\t\t\t<div class=\"hidden-xs\">{% include \"partial_menu.phtml\" %}</div>

\t\t\t<!--{% set languages = guest.extension_languages %}
\t\t\t\t{% if languages|length > 1 %}
\t\t\t\t\t<h2>{% trans 'Select language' %}</h2>
\t\t\t\t\t\t\t<select name=\"lang\">
\t\t\t\t\t\t\t{% for lang in languages %}
\t\t\t\t\t\t\t\t<option value=\"{{ lang }}\" >{{ lang|trans }}</option>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</select>
\t\t\t\t{% endif %}-->
\t\t\t
\t\t\t{% block sidebar %}{% endblock %}
\t\t\t
\t\t\t{% if settings.sidebar_note_enabled %}
            <div class=\"well well-sm\">
                <h4>{{ settings.sidebar_note_title }}</h4>
                <p>{{ settings.sidebar_note_content }}</p>
            </div>
            {% endif %}\t
\t\t\t
\t\t\t{% block sidebar2 %}{% endblock %}
\t\t</div>
\t\t<div class=\"col-sm-9\">
\t{% endif %}\t
\t\t\t{% block content_before %}{% endblock %}
\t\t\t{% include \"partial_message.phtml\" %}
\t\t\t{% block content %}{% endblock %}
\t\t\t{% block content_after %}{% endblock %}

\t\t\t{% if not client %}
\t\t\t<div class=\"modal fade\" id=\"login\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"{% trans 'Login to client area' %}\">
\t\t\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t\t\t\t\t\t<h4 class=\"modal-title\" id=\"myModalLabel\">{% trans 'Login to client area' %}</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t<form action=\"\" method=\"post\" class=\"api_form\" data-api-url=\"{{ 'api/guest/client/login'|link }}\" data-api-reload=\"1\">
\t\t\t\t\t\t\t\t<div class=\"control-group form-group\">
\t\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t\t<label>{% trans 'Email address' %}:</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" name=\"email\" value=\"{{ request.email }}\" required=\"required\" placeholder=\"{% trans 'Email address' %}\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"control-group form-group\">
\t\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t\t<label>{% trans 'Password' %}:</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" name=\"password\" value=\"\" required=\"required\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"remember\" value=\"1\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i></button>
\t\t\t\t\t\t\t\t<a class=\"btn btn-success\" href=\"{{ '/login'|link({'register' : 1}) }}\">{% trans 'Create new account' %}</a>
\t\t\t\t\t\t\t\t<a class=\"btn btn-warning\" href=\"{{ 'reset-password'|link }}\">{% trans 'Reset password' %}</a>
\t\t\t\t\t\t\t\t<input class=\"btn btn-primary\" type=\"submit\" value=\"{% trans 'Sign in' %}\">
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t{% endif %}
\t\t</div>      
\t</div>

\t{% if settings.show_page_footer %}
        <!-- Footer -->
\t\t<hr>
        <footer>
\t\t\t<div class=\"row text-center\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<p>
\t\t\t\t\t\t{% if settings.footer_signature|default %}{{ settings.footer_signature|raw }}
\t\t\t\t\t\t{% else %}{{ company.name }} - © {{ now|date('Y') }} {{ company.signature }}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</p>
\t\t\t\t\t<ul class=\"list-inline\">
                        <li><a href=\"{{ '/about-us'|link }}\">{% trans 'About us' %}</a></li>
                        <li><a href=\"{{ '/tos'|link }}\">{% trans 'Terms and Conditions' %}</a></li>
                        <li><a href=\"{{ '/privacy-policy'|link }}\">{% trans 'Privacy Policy' %}</a></li><br />
\t\t\t\t\t\t{% for i in 1..5 %}
\t\t\t\t\t\t\t{% if settings['footer_link_' ~ loop.index ~ '_enabled'] %}
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t{% if 'http://' in settings['footer_link_' ~ loop.index ~ '_page'] or  'https://' in settings['footer_link_' ~ loop.index ~ '_page'] %}
\t\t\t\t\t\t\t\t<a href=\"{{ settings['footer_link_' ~ loop.index ~ '_page'] }}\">{{ settings['footer_link_' ~ loop.index ~ '_title'] }}</a>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<a href=\"{{ settings['footer_link_' ~ loop.index ~ '_page'] | link }}\">{{ settings['footer_link_' ~ loop.index ~ '_title'] }}</a>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t{% if guest.extension_is_on({\"mod\":'branding'}) or settings.footer_branding_enabled %}
\t\t\t\t\t\t\t<li><a href=\"https://github.com/boxbilling/boxbilling\" title=\"Billing Software\" target=\"_blank\">{% trans 'Powered by the BoxBilling Community' %}</a></li>
\t\t\t\t\t\t{% endif %}
                    </ul>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t{% if settings.footer_to_top_enabled %}<a href=\"#top\" class=\"btn btn-default pull-right\"><i class=\"fa fa-arrow-up\"></i> {% trans 'Top' %}</a>{% endif %}
\t\t\t</div>
        </footer>
\t{% endif %}
    </div>
    <!-- /.container -->
<noscript>NOTE: Many features on BoxBilling require Javascript and cookies. You can enable both via your browser's preference settings.</noscript>
</body>
</html>
", "layout_default.phtml", "/home/lexcicxy/hostshibe.cf/bb-themes/bootstrap/html/layout_default.phtml");
    }
}
