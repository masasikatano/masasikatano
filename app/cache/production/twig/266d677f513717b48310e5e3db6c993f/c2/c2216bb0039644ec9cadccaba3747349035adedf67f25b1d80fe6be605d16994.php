<?php

/* @bolt/_nav/_secondary-configuration.twig */
class __TwigTemplate_2985d955d065b09a56b226fb201c72d929ab8ce7ed3cab566f2de5559029861d extends Twig_Template
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
        $context["config_menu"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "menu.admin", array(), "array"), "get", array(0 => "config"), "method");
        // line 2
        $context["sub"] = array(0 => array("icon" => $this->getAttribute($this->getAttribute(        // line 4
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "users"), "method"), "icon", array()), "label" => $this->getAttribute($this->getAttribute(        // line 5
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "users"), "method"), "label", array()), "link" => $this->getAttribute($this->getAttribute(        // line 6
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "users"), "method"), "uri", array()), "isallowed" => $this->getAttribute($this->getAttribute(        // line 7
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "users"), "method"), "permission", array())), 1 => array("icon" => $this->getAttribute($this->getAttribute(        // line 9
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "config_main"), "method"), "icon", array()), "label" => $this->getAttribute($this->getAttribute(        // line 10
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "config_main"), "method"), "label", array()), "link" => $this->getAttribute($this->getAttribute(        // line 11
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "config_main"), "method"), "uri", array()), "isallowed" => $this->getAttribute($this->getAttribute(        // line 12
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "config_main"), "method"), "permission", array())), 2 => array("icon" => $this->getAttribute($this->getAttribute(        // line 14
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "config_contenttypes"), "method"), "icon", array()), "label" => $this->getAttribute($this->getAttribute(        // line 15
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "config_contenttypes"), "method"), "label", array()), "link" => $this->getAttribute($this->getAttribute(        // line 16
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "config_contenttypes"), "method"), "uri", array()), "isallowed" => $this->getAttribute($this->getAttribute(        // line 17
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "config_contenttypes"), "method"), "permission", array())), 3 => array("icon" => $this->getAttribute($this->getAttribute(        // line 19
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "config_taxonomy"), "method"), "icon", array()), "label" => $this->getAttribute($this->getAttribute(        // line 20
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "config_taxonomy"), "method"), "label", array()), "link" => $this->getAttribute($this->getAttribute(        // line 21
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "config_taxonomy"), "method"), "uri", array()), "isallowed" => $this->getAttribute($this->getAttribute(        // line 22
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "config_taxonomy"), "method"), "permission", array())), 4 => "-", 5 => array("icon" => $this->getAttribute($this->getAttribute(        // line 26
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "config_menu"), "method"), "icon", array()), "label" => $this->getAttribute($this->getAttribute(        // line 27
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "config_menu"), "method"), "label", array()), "link" => $this->getAttribute($this->getAttribute(        // line 28
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "config_menu"), "method"), "uri", array()), "isallowed" => $this->getAttribute($this->getAttribute(        // line 29
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "config_menu"), "method"), "permission", array())), 6 => array("icon" => $this->getAttribute($this->getAttribute(        // line 31
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "config_routing"), "method"), "icon", array()), "label" => $this->getAttribute($this->getAttribute(        // line 32
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "config_routing"), "method"), "label", array()), "link" => $this->getAttribute($this->getAttribute(        // line 33
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "config_routing"), "method"), "uri", array()), "isallowed" => $this->getAttribute($this->getAttribute(        // line 34
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "config_routing"), "method"), "permission", array())), 7 => "-", 8 => array("icon" => $this->getAttribute($this->getAttribute(        // line 38
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "dbcheck"), "method"), "icon", array()), "label" => $this->getAttribute($this->getAttribute(        // line 39
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "dbcheck"), "method"), "label", array()), "link" => $this->getAttribute($this->getAttribute(        // line 40
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "dbcheck"), "method"), "uri", array()), "isallowed" => $this->getAttribute($this->getAttribute(        // line 41
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "dbcheck"), "method"), "permission", array())), 9 => array("icon" => $this->getAttribute($this->getAttribute(        // line 43
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "clearcache"), "method"), "icon", array()), "label" => $this->getAttribute($this->getAttribute(        // line 44
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "clearcache"), "method"), "label", array()), "link" => $this->getAttribute($this->getAttribute(        // line 45
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "clearcache"), "method"), "uri", array()), "isallowed" => $this->getAttribute($this->getAttribute(        // line 46
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "clearcache"), "method"), "permission", array())), 10 => array("icon" => $this->getAttribute($this->getAttribute(        // line 48
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "log_change"), "method"), "icon", array()), "label" => $this->getAttribute($this->getAttribute(        // line 49
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "log_change"), "method"), "label", array()), "link" => $this->getAttribute($this->getAttribute(        // line 50
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "log_change"), "method"), "uri", array()), "isallowed" => $this->getAttribute($this->getAttribute(        // line 51
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "log_change"), "method"), "permission", array())), 11 => array("icon" => $this->getAttribute($this->getAttribute(        // line 53
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "log_system"), "method"), "icon", array()), "label" => $this->getAttribute($this->getAttribute(        // line 54
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "log_system"), "method"), "label", array()), "link" => $this->getAttribute($this->getAttribute(        // line 55
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "log_system"), "method"), "uri", array()), "isallowed" => $this->getAttribute($this->getAttribute(        // line 56
(isset($context["config_menu"]) ? $context["config_menu"] : null), "get", array(0 => "log_system"), "method"), "permission", array())));
        // line 59
        echo "
";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nav"]) ? $context["nav"] : null), "submenu", array(0 => "fa:cogs", 1 => $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.configuration"), 2 => (isset($context["sub"]) ? $context["sub"] : null), 3 => ((isset($context["page_nav"]) ? $context["page_nav"] : null) == "Settings/Configuration")), "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@bolt/_nav/_secondary-configuration.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 60,  63 => 59,  61 => 56,  60 => 55,  59 => 54,  58 => 53,  57 => 51,  56 => 50,  55 => 49,  54 => 48,  53 => 46,  52 => 45,  51 => 44,  50 => 43,  49 => 41,  48 => 40,  47 => 39,  46 => 38,  45 => 34,  44 => 33,  43 => 32,  42 => 31,  41 => 29,  40 => 28,  39 => 27,  38 => 26,  37 => 22,  36 => 21,  35 => 20,  34 => 19,  33 => 17,  32 => 16,  31 => 15,  30 => 14,  29 => 12,  28 => 11,  27 => 10,  26 => 9,  25 => 7,  24 => 6,  23 => 5,  22 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@bolt/_nav/_secondary-configuration.twig", "");
    }
}
