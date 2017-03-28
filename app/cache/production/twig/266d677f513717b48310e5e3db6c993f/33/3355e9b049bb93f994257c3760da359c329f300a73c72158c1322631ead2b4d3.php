<?php

/* @bolt/_nav/_secondary-filemanagement.twig */
class __TwigTemplate_7a52e8fe53d84e84ce26d4b2a8cb9d0fb30e7b5d6f728732ed2c65022e362e1c extends Twig_Template
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
        $context["files_menu"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "menu.admin", array(), "array"), "get", array(0 => "files"), "method");
        // line 2
        $context["sub"] = array(0 => array("icon" => $this->getAttribute($this->getAttribute(        // line 4
(isset($context["files_menu"]) ? $context["files_menu"] : null), "get", array(0 => "files_uploads"), "method"), "icon", array()), "label" => $this->getAttribute($this->getAttribute(        // line 5
(isset($context["files_menu"]) ? $context["files_menu"] : null), "get", array(0 => "files_uploads"), "method"), "label", array()), "link" => $this->getAttribute($this->getAttribute(        // line 6
(isset($context["files_menu"]) ? $context["files_menu"] : null), "get", array(0 => "files_uploads"), "method"), "uri", array()), "isallowed" => $this->getAttribute($this->getAttribute(        // line 7
(isset($context["files_menu"]) ? $context["files_menu"] : null), "get", array(0 => "files_uploads"), "method"), "permission", array())), 1 => array("icon" => $this->getAttribute($this->getAttribute(        // line 9
(isset($context["files_menu"]) ? $context["files_menu"] : null), "get", array(0 => "files_themes"), "method"), "icon", array()), "label" => $this->getAttribute($this->getAttribute(        // line 10
(isset($context["files_menu"]) ? $context["files_menu"] : null), "get", array(0 => "files_themes"), "method"), "label", array()), "link" => $this->getAttribute($this->getAttribute(        // line 11
(isset($context["files_menu"]) ? $context["files_menu"] : null), "get", array(0 => "files_themes"), "method"), "uri", array()), "isallowed" => $this->getAttribute($this->getAttribute(        // line 12
(isset($context["files_menu"]) ? $context["files_menu"] : null), "get", array(0 => "files_themes"), "method"), "permission", array())));
        // line 15
        echo "
";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nav"]) ? $context["nav"] : null), "submenu", array(0 => "fa:folder-open", 1 => $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.file-management"), 2 => (isset($context["sub"]) ? $context["sub"] : null), 3 => ((isset($context["page_nav"]) ? $context["page_nav"] : null) == "Settings/FileManagement")), "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@bolt/_nav/_secondary-filemanagement.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 16,  31 => 15,  29 => 12,  28 => 11,  27 => 10,  26 => 9,  25 => 7,  24 => 6,  23 => 5,  22 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@bolt/_nav/_secondary-filemanagement.twig", "");
    }
}
