<?php

/* partials/_header.twig */
class __TwigTemplate_8e461da355858b21f617e88142b285cb66f23c71d14414117494050d3f4643ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- Header bar -->

";
        // line 6
        echo "
";
        // line 7
        $context["headerimage_low"] = (($this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()) . "images/") . twig_random($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "headerimage", array())));
        // line 8
        $context["headerimage"] = (($this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()) . "images/") . twig_random($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "headerimage", array())));
        // line 9
        $context["logoimage"] = (($this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()) . "images/") . twig_random($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "logoimage", array())));
        // line 10
        echo "
";
        // line 12
        echo "<div class=\"large-12 columns headerphoto\" style='background-image: url(";
        echo twig_escape_filter($this->env, (isset($context["headerimage_low"]) ? $context["headerimage_low"] : null), "html", null, true);
        echo ")'>
    <h2 class=\"logo\"><img class=\"logo\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["logoimage"]) ? $context["logoimage"] : null), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/sitename"), "method"), "html", null, true);
        echo "\"></h2>
</div>";
    }

    public function getTemplateName()
    {
        return "partials/_header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 13,  35 => 12,  32 => 10,  30 => 9,  28 => 8,  26 => 7,  23 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "partials/_header.twig", "");
    }
}
