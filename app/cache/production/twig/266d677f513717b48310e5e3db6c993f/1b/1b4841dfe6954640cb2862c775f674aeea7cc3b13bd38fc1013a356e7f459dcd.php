<?php

/* @bolt/editcontent/_field.twig */
class __TwigTemplate_6e52d7706586119d2503e6b18ba6fc49495e4aa0e8a2353dfeb7fafedb1ab10f extends Twig_Template
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
        $context["macro"] = $this->loadTemplate("@bolt/_macro/_macro.twig", "@bolt/editcontent/_field.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["field"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "fields", array()), (isset($context["key"]) ? $context["key"] : null), array(), "array");
        // line 4
        echo "
<div data-bolt-fieldset=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type", array()), "html", null, true);
        echo "\">
    ";
        // line 7
        echo "    ";
        if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "prefix", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "prefix", array())))) {
            // line 8
            echo "        <div class=\"prefix\">
            ";
            // line 9
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->markdown($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "prefix", array()));
            echo "
        </div>
    ";
        }
        // line 12
        echo "
    ";
        // line 14
        echo "    ";
        $context["labelkey"] = (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array())) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array())) : (twig_capitalize_string_filter($this->env, (isset($context["key"]) ? $context["key"] : null))));
        // line 15
        echo "
    ";
        // line 17
        echo "    ";
        $context["templatename"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "fields", array()), $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type", array()), array(), "array"), "template", array());
        // line 18
        echo "    ";
        $context["templatename"] = array(0 => (isset($context["templatename"]) ? $context["templatename"] : null), 1 => ("@bolt/" . (isset($context["templatename"]) ? $context["templatename"] : null)), 2 => "@bolt/editcontent/fields/_not_found.twig");
        // line 19
        echo "    ";
        $this->loadTemplate((isset($context["templatename"]) ? $context["templatename"] : null), "@bolt/editcontent/_field.twig", 19)->display(array_merge($context, array("key" =>         // line 20
(isset($context["key"]) ? $context["key"] : null), "name" =>         // line 21
(isset($context["key"]) ? $context["key"] : null), "contentkey" =>         // line 22
(isset($context["key"]) ? $context["key"] : null))));
        // line 24
        echo "
    ";
        // line 26
        echo "    ";
        if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "postfix", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "postfix", array())))) {
            // line 27
            echo "        <div class=\"postfix\">
            ";
            // line 28
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->markdown($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "postfix", array()));
            echo "
        </div>
    ";
        }
        // line 31
        echo "
    ";
        // line 33
        echo "    ";
        if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "separator", array(), "any", true, true) && ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "separator", array()) == true))) {
            // line 34
            echo "        <hr>
    ";
        }
        // line 36
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/_field.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 36,  87 => 34,  84 => 33,  81 => 31,  75 => 28,  72 => 27,  69 => 26,  66 => 24,  64 => 22,  63 => 21,  62 => 20,  60 => 19,  57 => 18,  54 => 17,  51 => 15,  48 => 14,  45 => 12,  39 => 9,  36 => 8,  33 => 7,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@bolt/editcontent/_field.twig", "");
    }
}
