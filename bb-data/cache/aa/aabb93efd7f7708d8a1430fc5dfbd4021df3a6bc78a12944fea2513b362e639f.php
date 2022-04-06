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

/* partial_menu.phtml */
class __TwigTemplate_f1a98e3b5155a0f3bcb4ecbfd862243f0287d9cc168d5d39818eacea557de058 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"list-group\">
\t";
        // line 2
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "side_menu_home", [], "any", false, false, false, 2)) {
            echo "<a href=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("");
            echo "\" title=\"";
            echo gettext("Home");
            echo "\" class=\"list-group-item";
            if ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "_url", [], "any", false, false, false, 2) == "/")) {
                echo " active";
            }
            echo "\" ><i class=\"fa fa-home\"></i> ";
            echo gettext("Home");
            echo "</a>";
        }
        // line 3
        echo "\t";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "side_menu_order", [], "any", false, false, false, 3)) {
            echo "<a href=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/order");
            echo "\" title=\"";
            echo gettext("Order");
            echo "\" class=\"list-group-item";
            if ((is_string($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "_url", [], "any", false, false, false, 3)) && is_string($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = "/order/service") && ('' === $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 || 0 === strpos($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144)))) {
            } elseif ((is_string($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "_url", [], "any", false, false, false, 3)) && is_string($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = "/order") && ('' === $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 || 0 === strpos($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b, $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002)))) {
                echo " active";
            }
            echo "\" ><i class=\"fa fa-shopping-cart\"></i> ";
            echo gettext("Order");
            echo "</a>";
        }
        // line 4
        echo "\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "side_menu_blog", [], "any", false, false, false, 4) && twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "extension_is_on", [0 => ["mod" => "news"]], "method", false, false, false, 4))) {
            echo "<a href=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/news");
            echo "\" title=\"";
            echo gettext("Blog");
            echo "\" class=\"list-group-item";
            if ((is_string($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "_url", [], "any", false, false, false, 4)) && is_string($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = "/news") && ('' === $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 || 0 === strpos($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4, $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666)))) {
                echo " active";
            }
            echo "\" ><i class=\"fa fa-bullhorn\"></i> ";
            echo gettext("Blog");
            echo "</a>";
        }
        // line 5
        echo "\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "side_menu_forum", [], "any", false, false, false, 5) && twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "extension_is_on", [0 => ["mod" => "forum"]], "method", false, false, false, 5))) {
            echo "<a class=\"list-group-item";
            if ((is_string($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "_url", [], "any", false, false, false, 5)) && is_string($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = "/forum") && ('' === $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 || 0 === strpos($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e, $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52)))) {
                echo " active";
            }
            echo "\" href=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/forum");
            echo "\"><i class=\"fa fa-comments\"></i> ";
            echo gettext("Forum");
            echo "</a>";
        }
        // line 6
        echo "\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "side_menu_kb", [], "any", false, false, false, 6) && twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "extension_is_on", [0 => ["mod" => "kb"]], "method", false, false, false, 6))) {
            echo "<a href=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("kb");
            echo "\" title=\"";
            echo gettext("Knowledge Base");
            echo "\" class=\"list-group-item";
            if ((is_string($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "_url", [], "any", false, false, false, 6)) && is_string($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = "/kb") && ('' === $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 || 0 === strpos($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136, $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386)))) {
                echo " active";
            }
            echo "\"><i class=\"fa fa-graduation-cap\"></i> ";
            echo gettext("Knowledge Base");
            echo "</a>";
        }
        // line 7
        echo "\t";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "side_menu_contact", [], "any", false, false, false, 7)) {
            echo "<a class=\"list-group-item";
            if ((is_string($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "_url", [], "any", false, false, false, 7)) && is_string($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = "/support/contact-us") && ('' === $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae || 0 === strpos($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9, $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae)))) {
                echo " active";
            }
            echo "\" href=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/support/contact-us");
            echo "\"><i class=\"fa fa-envelope\"></i> ";
            echo gettext("Contact us");
            echo "</a>";
        }
        // line 8
        echo "</div>
";
        // line 9
        if (($context["client"] ?? null)) {
            // line 10
            echo "\t<div class=\"list-group\">
\t\t";
            // line 11
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "side_menu_services", [], "any", false, false, false, 11)) {
                echo "<a href=\"";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("order/service");
                echo "\" title=\"";
                echo gettext("Services");
                echo "\" class=\"list-group-item";
                if ((is_string($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "_url", [], "any", false, false, false, 11)) && is_string($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = "/order/service") && ('' === $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 || 0 === strpos($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f, $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40)))) {
                    echo " list-group-item-success";
                }
                echo "\"><span style=\"color: white;\"><i class=\"fa fa-cog\"></i> ";
                echo gettext("Services");
                echo "</span></a>";
            }
            // line 12
            echo "\t\t";
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "side_menu_support", [], "any", false, false, false, 12)) {
                echo "<a href=\"";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("support");
                echo "\" title=\"";
                echo gettext("Tickets");
                echo "\" class=\"list-group-item";
                if ((is_string($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "_url", [], "any", false, false, false, 12)) && is_string($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = "/support") && ('' === $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 || 0 === strpos($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f, $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760)))) {
                    echo " list-group-item-info";
                }
                echo "\"><span style=\"color: white;\"><i class=\"fa fa-life-ring\"></i> ";
                echo gettext("Support");
                echo "</span></a>";
            }
            // line 13
            echo "\t\t";
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "side_menu_invoices", [], "any", false, false, false, 13)) {
                echo "<a href=\"";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("invoice");
                echo "\" title=\"";
                echo gettext("Invoices");
                echo "\" class=\"list-group-item";
                if ((is_string($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "_url", [], "any", false, false, false, 13)) && is_string($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = "/invoice") && ('' === $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b || 0 === strpos($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce, $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b)))) {
                    echo " list-group-item-danger";
                }
                echo "\"><span style=\"color: white;\"><i class=\"fa fa-credit-card\"></i> ";
                echo gettext("Invoices");
                echo "</span></a>";
            }
            // line 14
            echo "\t\t<a href=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/client/balance");
            echo "\" title=\"";
            echo gettext("Payment history");
            echo "\" class=\"list-group-item\" ><span style=\"color: white;\"><i class=\"fa fa-archive\"></i> ";
            echo gettext("Payment history");
            echo "</span></a>
\t\t<a href=\"https://panel.hostshibe.gq\" title=\"";
            // line 15
            echo gettext("Panel");
            echo "\" class=\"list-group-item\"><span style=\"color: white;\"><i class=\"fa fa-server\"></i> ";
            echo gettext("Panel");
            echo "</span></a>
\t</div>
";
        } else {
            // line 18
            echo "\t<div class=\"list-group\">
\t\t";
            // line 19
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "side_menu_register", [], "any", false, false, false, 19)) {
                echo "<a href=\"";
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/login");
                echo "\" title=\"";
                echo gettext("Sign in / Register");
                echo "\" class=\"list-group-item list-group-item-success\" >";
                echo gettext("Sign in / Register");
                echo "</a>";
            }
            // line 20
            echo "\t</div>
";
        }
        // line 22
        echo "
";
    }

    public function getTemplateName()
    {
        return "partial_menu.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 22,  208 => 20,  198 => 19,  195 => 18,  187 => 15,  178 => 14,  163 => 13,  148 => 12,  134 => 11,  131 => 10,  129 => 9,  126 => 8,  113 => 7,  98 => 6,  85 => 5,  70 => 4,  54 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"list-group\">
\t{% if settings.side_menu_home %}<a href=\"{{ ''|link }}\" title=\"{% trans 'Home' %}\" class=\"list-group-item{% if request._url == '/' %} active{% endif %}\" ><i class=\"fa fa-home\"></i> {% trans 'Home' %}</a>{% endif %}
\t{% if settings.side_menu_order %}<a href=\"{{ '/order'|link }}\" title=\"{% trans 'Order' %}\" class=\"list-group-item{% if request._url starts with '/order/service' %}{% elseif request._url starts with '/order' %} active{% endif %}\" ><i class=\"fa fa-shopping-cart\"></i> {% trans 'Order' %}</a>{% endif %}
\t{% if settings.side_menu_blog and guest.extension_is_on({\"mod\":\"news\"}) %}<a href=\"{{ '/news'|link }}\" title=\"{% trans 'Blog' %}\" class=\"list-group-item{% if request._url starts with '/news' %} active{% endif %}\" ><i class=\"fa fa-bullhorn\"></i> {% trans 'Blog' %}</a>{% endif %}
\t{% if settings.side_menu_forum and guest.extension_is_on({\"mod\":\"forum\"}) %}<a class=\"list-group-item{% if request._url starts with '/forum' %} active{% endif %}\" href=\"{{ '/forum'|link }}\"><i class=\"fa fa-comments\"></i> {% trans 'Forum' %}</a>{% endif %}
\t{% if settings.side_menu_kb and guest.extension_is_on({\"mod\":\"kb\"}) %}<a href=\"{{ 'kb'|link }}\" title=\"{% trans 'Knowledge Base' %}\" class=\"list-group-item{% if request._url starts with '/kb' %} active{% endif %}\"><i class=\"fa fa-graduation-cap\"></i> {% trans 'Knowledge Base' %}</a>{% endif %}
\t{% if settings.side_menu_contact %}<a class=\"list-group-item{% if request._url starts with '/support/contact-us' %} active{% endif %}\" href=\"{{ '/support/contact-us'|link }}\"><i class=\"fa fa-envelope\"></i> {% trans 'Contact us' %}</a>{% endif %}
</div>
{% if client %}
\t<div class=\"list-group\">
\t\t{% if settings.side_menu_services %}<a href=\"{{ 'order/service'|link }}\" title=\"{% trans 'Services' %}\" class=\"list-group-item{% if request._url starts with '/order/service' %} list-group-item-success{% endif %}\"><span style=\"color: white;\"><i class=\"fa fa-cog\"></i> {% trans 'Services' %}</span></a>{% endif %}
\t\t{% if settings.side_menu_support %}<a href=\"{{ 'support'|link }}\" title=\"{% trans 'Tickets' %}\" class=\"list-group-item{% if request._url starts with '/support' %} list-group-item-info{% endif %}\"><span style=\"color: white;\"><i class=\"fa fa-life-ring\"></i> {% trans 'Support' %}</span></a>{% endif %}
\t\t{% if settings.side_menu_invoices %}<a href=\"{{ 'invoice'|link }}\" title=\"{% trans 'Invoices' %}\" class=\"list-group-item{% if request._url starts with '/invoice' %} list-group-item-danger{% endif %}\"><span style=\"color: white;\"><i class=\"fa fa-credit-card\"></i> {% trans 'Invoices' %}</span></a>{% endif %}
\t\t<a href=\"{{ '/client/balance'|link }}\" title=\"{% trans 'Payment history' %}\" class=\"list-group-item\" ><span style=\"color: white;\"><i class=\"fa fa-archive\"></i> {% trans 'Payment history' %}</span></a>
\t\t<a href=\"https://panel.hostshibe.gq\" title=\"{% trans 'Panel' %}\" class=\"list-group-item\"><span style=\"color: white;\"><i class=\"fa fa-server\"></i> {% trans 'Panel' %}</span></a>
\t</div>
{% else %}
\t<div class=\"list-group\">
\t\t{% if settings.side_menu_register %}<a href=\"{{ '/login'|link }}\" title=\"{% trans 'Sign in / Register' %}\" class=\"list-group-item list-group-item-success\" >{% trans 'Sign in / Register' %}</a>{% endif %}
\t</div>
{% endif %}

", "partial_menu.phtml", "/home/lexcicxy/hostshibe.cf/bb-themes/bootstrap/html/partial_menu.phtml");
    }
}
