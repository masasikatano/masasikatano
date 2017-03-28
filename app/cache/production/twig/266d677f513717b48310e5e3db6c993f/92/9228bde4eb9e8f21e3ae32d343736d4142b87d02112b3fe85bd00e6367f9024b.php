<?php

/* @bolt/_base/_fieldset.twig */
class __TwigTemplate_886d1e1a85852a8952a9dbd5592af514e51028a4cc9f3bc1b7adbc2c3126986c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fieldset_label_text' => array($this, 'block_fieldset_label_text'),
            'fieldset_controls' => array($this, 'block_fieldset_controls'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["__internal_1799663ce330a1ac0011ae23b60520953afba16de2355c47d97a03c4c3c4750a"] = $this->loadTemplate("@bolt/_buic/_info.twig", "@bolt/_base/_fieldset.twig", 1);
        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $context["widget_name"] =         $this->renderBlock("fieldset_widget", $context, $blocks);
        // line 6
        echo "
";
        // line 7
        if ( !(isset($context["widget_name"]) ? $context["widget_name"] : null)) {
            // line 8
            echo "    ";
            $context["data_bolt_widget"] = "";
        } elseif (twig_test_iterable(((        // line 9
array_key_exists("fieldset_conf", $context)) ? (_twig_default_filter((isset($context["fieldset_conf"]) ? $context["fieldset_conf"] : null))) : ("")))) {
            // line 10
            echo "    ";
            $context["data_bolt_widget"] = twig_jsonencode_filter(array((isset($context["widget_name"]) ? $context["widget_name"] : null) => (isset($context["fieldset_conf"]) ? $context["fieldset_conf"] : null)));
        } else {
            // line 12
            echo "    ";
            $context["data_bolt_widget"] = (isset($context["widget_name"]) ? $context["widget_name"] : null);
        }
        // line 14
        echo "
";
        // line 15
        $context["attributes_fieldset"] = array("class" => ("form-group bolt-field-" .         $this->renderBlock("fieldset_type", $context, $blocks)), "data-bolt-widget" =>         // line 17
(isset($context["data_bolt_widget"]) ? $context["data_bolt_widget"] : null));
        // line 19
        echo "
";
        // line 20
        $context["attributes_label"] = array("class" => (("main " .         $this->renderBlock("fieldset_label_class", $context, $blocks)) . (((        $this->renderBlock("fieldset_label_class", $context, $blocks) == "col-xs-12")) ? ("") : (" control-label"))), "for" =>         $this->renderBlock("fieldset_label_for", $context, $blocks));
        // line 24
        echo "
";
        // line 25
        if (        $this->renderBlock("fieldset_label_info", $context, $blocks)) {
            // line 26
            echo "    ";
            $context["field_info"] = $context["__internal_1799663ce330a1ac0011ae23b60520953afba16de2355c47d97a03c4c3c4750a"]->getbuic_info(            $this->renderBlock("fieldset_label_text", $context, $blocks),             $this->renderBlock("fieldset_label_info", $context, $blocks));
        }
        // line 28
        echo "
";
        // line 30
        echo "
<fieldset";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "attr", array(0 => (isset($context["attributes_fieldset"]) ? $context["attributes_fieldset"] : null)), "method"), "html", null, true);
        echo ">
    <legend class=\"sr-only\">";
        // line 32
        $this->displayBlock('fieldset_label_text', $context, $blocks);
        echo "</legend>
    ";
        // line 33
        if (        $this->renderBlock("fieldset_label_text", $context, $blocks)) {
            // line 34
            echo "        <label";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "attr", array(0 => (isset($context["attributes_label"]) ? $context["attributes_label"] : null)), "method"), "html", null, true);
            echo ">";
            $this->displayBlock("fieldset_label_text", $context, $blocks);
            echo ": ";
            echo twig_escape_filter($this->env, ((array_key_exists("field_info", $context)) ? (_twig_default_filter((isset($context["field_info"]) ? $context["field_info"] : null), "")) : ("")), "html", null, true);
            echo "</label>
    ";
        }
        // line 36
        echo "    ";
        $this->displayBlock('fieldset_controls', $context, $blocks);
        // line 37
        echo "</fieldset>
";
    }

    // line 32
    public function block_fieldset_label_text($context, array $blocks = array())
    {
    }

    // line 36
    public function block_fieldset_controls($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "@bolt/_base/_fieldset.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 36,  103 => 32,  98 => 37,  95 => 36,  85 => 34,  83 => 33,  79 => 32,  75 => 31,  72 => 30,  69 => 28,  65 => 26,  63 => 25,  60 => 24,  58 => 20,  55 => 19,  53 => 17,  52 => 15,  49 => 14,  45 => 12,  41 => 10,  39 => 9,  36 => 8,  34 => 7,  31 => 6,  29 => 5,  26 => 4,  23 => 2,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@bolt/_base/_fieldset.twig", "");
    }
}
