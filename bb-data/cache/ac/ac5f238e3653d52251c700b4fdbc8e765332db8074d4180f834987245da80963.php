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

/* mod_embed_index.phtml */
class __TwigTemplate_632f89812f8b992b6bb728b983b2e0e38a278565a82abe55099c796a320afde1 extends \Twig\Template
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
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.phtml") : ("layout_default.phtml")), "mod_embed_index.phtml", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $context["active_menu"] = "system";
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Embed parts of BoxBilling";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
<div class=\"widget acc\">
    <div class=\"head\"><h5>Client area login form</h5></div>
    <div class=\"menu_body\">
        <textarea cols=\"2\" rows=\"1\" style=\"width: 100%; padding: 10px 0\"><iframe width=\"215\" height=\"200\" src=\"";
        // line 10
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("embed/loginform");
        echo "\" frameborder=\"0\"></iframe></textarea>
        <p>Copy and paste the embed code to your website.</p>
    </div>
  
    <div class=\"head\"><h5>Domain checker form</h5></div>
    <div class=\"menu_body\">
        <textarea cols=\"2\" rows=\"1\" style=\"width: 100%; padding: 10px 0\"><iframe width=\"360\" height=\"75\" src=\"";
        // line 16
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("embed/domainchecker");
        echo "\" frameborder=\"0\"></iframe></textarea>
        <p>Copy and paste the embed code to your website.</p>
    </div>

    <div class=\"head\"><h5>Contact us form</h5></div>
    <div class=\"menu_body\">
        <textarea cols=\"2\" rows=\"1\" style=\"width: 100%; padding: 10px 0\"><iframe width=\"400\" height=\"310\" src=\"";
        // line 22
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("embed/contact");
        echo "\" frameborder=\"0\"></iframe></textarea>
        <p>Copy and paste the embed code to your website.</p>
    </div>
</div>
<div class=\"fix\"></div>

";
    }

    // line 31
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "<script type=\"text/javascript\">
\$(function() {
\t//===== Accordion =====//

\t\$('div.menu_body:eq(0)').show();
\t\$('.acc .head:eq(0)').show().css({color:\"#2B6893\"});

\t\$(\".acc .head\").click(function() {
\t\t\$(this).css({color:\"#2B6893\"}).next(\"div.menu_body\").slideToggle(300).siblings(\"div.menu_body\").slideUp(\"slow\");
\t\t\$(this).siblings().css({color:\"#404040\"});
\t});

});
</script>
";
    }

    public function getTemplateName()
    {
        return "mod_embed_index.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 33,  96 => 31,  85 => 22,  76 => 16,  67 => 10,  61 => 6,  57 => 5,  50 => 2,  46 => 1,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends request.ajax ? \"layout_blank.phtml\" : \"layout_default.phtml\" %}
{% block meta_title %}Embed parts of BoxBilling{% endblock %}
{% set active_menu = 'system' %}

{% block content %}

<div class=\"widget acc\">
    <div class=\"head\"><h5>Client area login form</h5></div>
    <div class=\"menu_body\">
        <textarea cols=\"2\" rows=\"1\" style=\"width: 100%; padding: 10px 0\"><iframe width=\"215\" height=\"200\" src=\"{{ 'embed/loginform'|link }}\" frameborder=\"0\"></iframe></textarea>
        <p>Copy and paste the embed code to your website.</p>
    </div>
  
    <div class=\"head\"><h5>Domain checker form</h5></div>
    <div class=\"menu_body\">
        <textarea cols=\"2\" rows=\"1\" style=\"width: 100%; padding: 10px 0\"><iframe width=\"360\" height=\"75\" src=\"{{ 'embed/domainchecker'|link }}\" frameborder=\"0\"></iframe></textarea>
        <p>Copy and paste the embed code to your website.</p>
    </div>

    <div class=\"head\"><h5>Contact us form</h5></div>
    <div class=\"menu_body\">
        <textarea cols=\"2\" rows=\"1\" style=\"width: 100%; padding: 10px 0\"><iframe width=\"400\" height=\"310\" src=\"{{ 'embed/contact'|link }}\" frameborder=\"0\"></iframe></textarea>
        <p>Copy and paste the embed code to your website.</p>
    </div>
</div>
<div class=\"fix\"></div>

{% endblock %}


{% block js %}
{% autoescape \"js\" %}
<script type=\"text/javascript\">
\$(function() {
\t//===== Accordion =====//

\t\$('div.menu_body:eq(0)').show();
\t\$('.acc .head:eq(0)').show().css({color:\"#2B6893\"});

\t\$(\".acc .head\").click(function() {
\t\t\$(this).css({color:\"#2B6893\"}).next(\"div.menu_body\").slideToggle(300).siblings(\"div.menu_body\").slideUp(\"slow\");
\t\t\$(this).siblings().css({color:\"#404040\"});
\t});

});
</script>
{% endautoescape %}
{% endblock %}", "mod_embed_index.phtml", "/home/lexcicxy/hostshibe.cf/bb-modules/Embed/html_admin/mod_embed_index.phtml");
    }
}
