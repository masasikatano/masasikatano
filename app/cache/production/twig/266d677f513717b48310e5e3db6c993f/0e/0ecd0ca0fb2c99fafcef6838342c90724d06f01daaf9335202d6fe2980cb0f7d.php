<?php

/* @bolt/editcontent/fields/_text.twig */
class __TwigTemplate_fe0b9a15e2715aa51736a986e8bbbd8b8887036b91593e31c8a8b9db240fd84e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 40
        $this->parent = $this->loadTemplate("@bolt/_base/_fieldset.twig", "@bolt/editcontent/fields/_text.twig", 40);
        $this->blocks = array(
            'fieldset_type' => array($this, 'block_fieldset_type'),
            'fieldset_widget' => array($this, 'block_fieldset_widget'),
            'fieldset_label_text' => array($this, 'block_fieldset_label_text'),
            'fieldset_label_info' => array($this, 'block_fieldset_label_info'),
            'fieldset_label_class' => array($this, 'block_fieldset_label_class'),
            'fieldset_label_for' => array($this, 'block_fieldset_label_for'),
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
(isset($context["field"]) ? $context["field"] : null), "class", array()))), "label" => $this->getAttribute(        // line 5
(isset($context["field"]) ? $context["field"] : null), "label", array()), "pattern" => (($this->getAttribute(        // line 6
(isset($context["field"]) ? $context["field"] : null), "pattern", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "pattern", array()), "")) : ("")), "placeholder" => (($this->getAttribute(        // line 7
(isset($context["field"]) ? $context["field"] : null), "placeholder", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "placeholder", array()), "")) : ("")), "required" => (($this->getAttribute(        // line 8
(isset($context["field"]) ? $context["field"] : null), "required", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required", array()), false)) : (false)), "errortext" => (($this->getAttribute(        // line 9
(isset($context["field"]) ? $context["field"] : null), "error", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "error", array()), "")) : ("")), "readonly" => (($this->getAttribute(        // line 10
(isset($context["field"]) ? $context["field"] : null), "readonly", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "readonly", array()), false)) : (false)), "title" => (($this->getAttribute(        // line 11
(isset($context["field"]) ? $context["field"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "title", array()), "")) : ("")), "variant" => $this->getAttribute(        // line 12
(isset($context["field"]) ? $context["field"] : null), "variant", array()), "info" => (($this->getAttribute(        // line 13
(isset($context["field"]) ? $context["field"] : null), "info", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "info", array()), "")) : ("")));
        // line 19
        $context["attributes"] = array("text" => array("class" => $this->getAttribute(        // line 21
(isset($context["option"]) ? $context["option"] : null), "class", array()), "data_errortext" => $this->getAttribute(        // line 22
(isset($context["option"]) ? $context["option"] : null), "errortext", array()), "id" =>         // line 23
(isset($context["key"]) ? $context["key"] : null), "maxlength" => 255, "name" =>         // line 25
(isset($context["name"]) ? $context["name"] : null), "pattern" => ((($this->getAttribute(        // line 26
(isset($context["option"]) ? $context["option"] : null), "pattern", array()) && !twig_in_filter($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "pattern", array()), array(0 => "url", 1 => "email")))) ? ($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "pattern", array())) : ("")), "placeholder" => $this->getAttribute(        // line 27
(isset($context["option"]) ? $context["option"] : null), "placeholder", array()), "readonly" => $this->getAttribute(        // line 28
(isset($context["option"]) ? $context["option"] : null), "readonly", array()), "required" => $this->getAttribute(        // line 29
(isset($context["option"]) ? $context["option"] : null), "required", array()), "title" => $this->getAttribute(        // line 30
(isset($context["option"]) ? $context["option"] : null), "title", array()), "type" => ((twig_in_filter($this->getAttribute(        // line 31
(isset($context["option"]) ? $context["option"] : null), "pattern", array()), array(0 => "url", 1 => "email"))) ? ($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "pattern", array())) : ("text")), "value" => (($this->getAttribute($this->getAttribute(        // line 32
(isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "get", array(0 => (isset($context["contentkey"]) ? $context["contentkey"] : null)), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "get", array(0 => (isset($context["contentkey"]) ? $context["contentkey"] : null)), "method"), "")) : (""))));
        // line 36
        $context["class"] = ((($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "variant", array()) == "inline")) ? (array(0 => "col-sm-3", 1 => "col-sm-9")) : (array(0 => "col-xs-12", 1 => "col-xs-12")));
        // line 40
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 42
    public function block_fieldset_type($context, array $blocks = array())
    {
        echo "text";
    }

    // line 43
    public function block_fieldset_widget($context, array $blocks = array())
    {
        echo "fieldText";
    }

    // line 45
    public function block_fieldset_label_text($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["labelkey"]) ? $context["labelkey"] : null), "html", null, true);
    }

    // line 46
    public function block_fieldset_label_info($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "info", array()), "html", null, true);
    }

    // line 47
    public function block_fieldset_label_class($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ("control-label " . $this->getAttribute((isset($context["class"]) ? $context["class"] : null), 0, array(), "array")), "html", null, true);
    }

    // line 48
    public function block_fieldset_label_for($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
    }

    // line 50
    public function block_fieldset_controls($context, array $blocks = array())
    {
        // line 51
        echo "    <div class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["class"]) ? $context["class"] : null), 1, array(), "array"), "html", null, true);
        echo "\">
        <input";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "attr", array(0 => $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "text", array())), "method"), "html", null, true);
        echo ">
    </div>
";
    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/fields/_text.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 52,  101 => 51,  98 => 50,  92 => 48,  86 => 47,  80 => 46,  74 => 45,  68 => 43,  62 => 42,  58 => 40,  56 => 36,  54 => 32,  53 => 31,  52 => 30,  51 => 29,  50 => 28,  49 => 27,  48 => 26,  47 => 25,  46 => 23,  45 => 22,  44 => 21,  43 => 19,  41 => 13,  40 => 12,  39 => 11,  38 => 10,  37 => 9,  36 => 8,  35 => 7,  34 => 6,  33 => 5,  32 => 4,  31 => 3,  11 => 40,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@bolt/editcontent/fields/_text.twig", "");
    }
}
