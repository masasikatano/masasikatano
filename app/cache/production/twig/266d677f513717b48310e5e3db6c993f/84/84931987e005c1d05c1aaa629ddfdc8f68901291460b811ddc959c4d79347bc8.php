<?php

/* @bolt/_nav/_secondary-translations.twig */
class __TwigTemplate_8237f71b2b7f9580203eeec7f8cc04974d5cfe94674e660c58601ba0ed4a2216 extends Twig_Template
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
        $context["tr_menu"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "menu.admin", array(), "array"), "get", array(0 => "translations"), "method");
        // line 2
        $context["sub"] = array(0 => array("icon" => $this->getAttribute($this->getAttribute(        // line 4
(isset($context["tr_menu"]) ? $context["tr_menu"] : null), "get", array(0 => "tr_messages"), "method"), "icon", array()), "label" => $this->getAttribute($this->getAttribute(        // line 5
(isset($context["tr_menu"]) ? $context["tr_menu"] : null), "get", array(0 => "tr_messages"), "method"), "label", array()), "link" => $this->getAttribute($this->getAttribute(        // line 6
(isset($context["tr_menu"]) ? $context["tr_menu"] : null), "get", array(0 => "tr_messages"), "method"), "uri", array()), "isallowed" => $this->getAttribute($this->getAttribute(        // line 7
(isset($context["tr_menu"]) ? $context["tr_menu"] : null), "get", array(0 => "tr_messages"), "method"), "permission", array())), 1 => array("icon" => $this->getAttribute($this->getAttribute(        // line 9
(isset($context["tr_menu"]) ? $context["tr_menu"] : null), "get", array(0 => "tr_long_messages"), "method"), "icon", array()), "label" => $this->getAttribute($this->getAttribute(        // line 10
(isset($context["tr_menu"]) ? $context["tr_menu"] : null), "get", array(0 => "tr_long_messages"), "method"), "label", array()), "link" => $this->getAttribute($this->getAttribute(        // line 11
(isset($context["tr_menu"]) ? $context["tr_menu"] : null), "get", array(0 => "tr_long_messages"), "method"), "uri", array()), "isallowed" => $this->getAttribute($this->getAttribute(        // line 12
(isset($context["tr_menu"]) ? $context["tr_menu"] : null), "get", array(0 => "tr_long_messages"), "method"), "permission", array())), 2 => array("icon" => $this->getAttribute($this->getAttribute(        // line 14
(isset($context["tr_menu"]) ? $context["tr_menu"] : null), "get", array(0 => "tr_contenttypes"), "method"), "icon", array()), "label" => $this->getAttribute($this->getAttribute(        // line 15
(isset($context["tr_menu"]) ? $context["tr_menu"] : null), "get", array(0 => "tr_contenttypes"), "method"), "label", array()), "link" => $this->getAttribute($this->getAttribute(        // line 16
(isset($context["tr_menu"]) ? $context["tr_menu"] : null), "get", array(0 => "tr_contenttypes"), "method"), "uri", array()), "isallowed" => $this->getAttribute($this->getAttribute(        // line 17
(isset($context["tr_menu"]) ? $context["tr_menu"] : null), "get", array(0 => "tr_contenttypes"), "method"), "permission", array())));
        // line 20
        echo "
";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nav"]) ? $context["nav"] : null), "submenu", array(0 => "fa:flag", 1 => $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.translations"), 2 => (isset($context["sub"]) ? $context["sub"] : null), 3 => ((isset($context["page_nav"]) ? $context["page_nav"] : null) == "Settings/Translations")), "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@bolt/_nav/_secondary-translations.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 21,  35 => 20,  33 => 17,  32 => 16,  31 => 15,  30 => 14,  29 => 12,  28 => 11,  27 => 10,  26 => 9,  25 => 7,  24 => 6,  23 => 5,  22 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@bolt/_nav/_secondary-translations.twig", "");
    }
}
