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

/* partial_footer.phtml */
class __TwigTemplate_13d444a55a7a4859d4a2d8dd1ec4bff0e7c604141bd1e7df81804ee17adbea6e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "    \t<span>&copy; Copyright ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["now"] ?? null), "Y"), "html", null, true);
        echo ". All rights reserved. <a href=\"https://github.com/hostshibe/mercury\" target=\"_blank\">Mercury</a>, powered by <a href=\"http://www.boxbilling.com\" title=\"Billing system\" target=\"_blank\">BoxBilling ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_version", [], "any", false, false, false, 1), "html", null, true);
        echo "</a>
                    <a href=\"#\" title=\"\" id=\"help_popup_button\" style=\"float:right;\">Help</a>
        </span>

        ";
        // line 5
        $this->displayBlock('js', $context, $blocks);
    }

    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "        <script type=\"text/javascript\">
            document.getElementById('help_popup_button').addEventListener('click',function(e){
                e.preventDefault();
                document.getElementById('help_popup').style.display = 'block';
            });
            document.getElementById('help_popup_close').addEventListener('click',function(e){
                e.preventDefault();
                document.getElementById('help_popup').style.display = 'none';
            });
        </script>
        ";
    }

    public function getTemplateName()
    {
        return "partial_footer.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 6,  48 => 5,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    \t<span>&copy; Copyright {{ now|date('Y') }}. All rights reserved. <a href=\"https://github.com/hostshibe/mercury\" target=\"_blank\">Mercury</a>, powered by <a href=\"http://www.boxbilling.com\" title=\"Billing system\" target=\"_blank\">BoxBilling {{ guest.system_version }}</a>
                    <a href=\"#\" title=\"\" id=\"help_popup_button\" style=\"float:right;\">Help</a>
        </span>

        {% block js %}
        <script type=\"text/javascript\">
            document.getElementById('help_popup_button').addEventListener('click',function(e){
                e.preventDefault();
                document.getElementById('help_popup').style.display = 'block';
            });
            document.getElementById('help_popup_close').addEventListener('click',function(e){
                e.preventDefault();
                document.getElementById('help_popup').style.display = 'none';
            });
        </script>
        {% endblock %}", "partial_footer.phtml", "/home/lexcicxy/hostshibe.cf/bb-themes/admin_default/html/partial_footer.phtml");
    }
}
