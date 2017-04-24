<?php

/* @bolt/editcontent/fields/_html.twig */
class __TwigTemplate_f04e883df1c2dad3360ad4d90c34bd98a0c1895ff4ed0714137df1bdec995643 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 38
        $this->parent = $this->loadTemplate("@bolt/_base/_fieldset.twig", "@bolt/editcontent/fields/_html.twig", 38);
        $this->blocks = array(
            'fieldset_type' => array($this, 'block_fieldset_type'),
            'fieldset_widget' => array($this, 'block_fieldset_widget'),
            'fieldset_label_text' => array($this, 'block_fieldset_label_text'),
            'fieldset_label_info' => array($this, 'block_fieldset_label_info'),
            'fieldset_label_class' => array($this, 'block_fieldset_label_class'),
            'fieldset_controls' => array($this, 'block_fieldset_controls'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@bolt/_base/_fieldset.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["option"] = array("class" => twig_trim_filter(("form-control " . $this->getAttribute(        // line 4
(isset($context["field"]) ? $context["field"] : null), "class", array()))), "height" => (($this->getAttribute(        // line 5
(isset($context["field"]) ? $context["field"] : null), "height", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "height", array()), "")) : ("")), "label" => $this->getAttribute(        // line 6
(isset($context["field"]) ? $context["field"] : null), "label", array()), "required" => (($this->getAttribute(        // line 7
(isset($context["field"]) ? $context["field"] : null), "required", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required", array()), false)) : (false)), "errortext" => (($this->getAttribute(        // line 8
(isset($context["field"]) ? $context["field"] : null), "error", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "error", array()), "")) : ("")), "info" => (($this->getAttribute(        // line 9
(isset($context["field"]) ? $context["field"] : null), "info", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "info", array()), "")) : ("")), "options" => (($this->getAttribute($this->getAttribute(        // line 10
(isset($context["field"]) ? $context["field"] : null), "options", array(), "any", false, true), "ckeditor", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "options", array(), "any", false, true), "ckeditor", array()), "")) : ("")));
        // line 15
        $context["param"] = array();
        // line 17
        if ($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "height", array())) {
            // line 18
            $context["param"] = twig_array_merge((isset($context["param"]) ? $context["param"] : null), array("height" => $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "height", array())));
        }
        // line 21
        if ($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "options", array())) {
            // line 22
            $context["param"] = twig_array_merge((isset($context["param"]) ? $context["param"] : null), array("ckeditor" => $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "options", array())));
        }
        // line 25
        $context["attributes"] = array("html" => array("class" => ($this->getAttribute(        // line 27
(isset($context["option"]) ? $context["option"] : null), "class", array()) . " ckeditor"), "data_errortext" => $this->getAttribute(        // line 28
(isset($context["option"]) ? $context["option"] : null), "errortext", array()), "data_param" => ((        // line 29
(isset($context["param"]) ? $context["param"] : null)) ? (twig_jsonencode_filter((isset($context["param"]) ? $context["param"] : null))) : ("")), "id" =>         // line 30
(isset($context["key"]) ? $context["key"] : null), "name" =>         // line 31
(isset($context["name"]) ? $context["name"] : null), "required" => $this->getAttribute(        // line 32
(isset($context["option"]) ? $context["option"] : null), "required", array())));
        // line 38
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 40
    public function block_fieldset_type($context, array $blocks = array())
    {
        echo "html";
    }

    // line 41
    public function block_fieldset_widget($context, array $blocks = array())
    {
        echo "fieldHtml";
    }

    // line 43
    public function block_fieldset_label_text($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["labelkey"]) ? $context["labelkey"] : null), "html", null, true);
    }

    // line 44
    public function block_fieldset_label_info($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "info", array()), "html", null, true);
    }

    // line 45
    public function block_fieldset_label_class($context, array $blocks = array())
    {
        echo "col-xs-12";
    }

    // line 47
    public function block_fieldset_controls($context, array $blocks = array())
    {
        // line 48
        echo "    <div class=\"col-xs-12\">
        <textarea";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "attr", array(0 => $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "html", array())), "method"), "html", null, true);
        echo ">";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "get", array(0 => (isset($context["contentkey"]) ? $context["contentkey"] : null)), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "get", array(0 => (isset($context["contentkey"]) ? $context["contentkey"] : null)), "method"), "")) : ("")), "html", null, true);
        echo "</textarea>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/fields/_html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 49,  96 => 48,  93 => 47,  87 => 45,  81 => 44,  75 => 43,  69 => 41,  63 => 40,  59 => 38,  57 => 32,  56 => 31,  55 => 30,  54 => 29,  53 => 28,  52 => 27,  51 => 25,  48 => 22,  46 => 21,  43 => 18,  41 => 17,  39 => 15,  37 => 10,  36 => 9,  35 => 8,  34 => 7,  33 => 6,  32 => 5,  31 => 4,  30 => 3,  11 => 38,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@bolt/editcontent/fields/_html.twig", "");
    }
}
