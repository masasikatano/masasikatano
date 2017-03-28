<?php

/* @bolt/editcontent/fields/_templateselect.twig */
class __TwigTemplate_b2c568589a2e4068a456ae6e6097082e4e446e1596e0765714a239c851e4f9dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 31
        $this->parent = $this->loadTemplate("@bolt/_base/_fieldset.twig", "@bolt/editcontent/fields/_templateselect.twig", 31);
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
        $context["option"] = array("filter" => (($this->getAttribute(        // line 4
(isset($context["field"]) ? $context["field"] : null), "filter", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "filter", array()), array())) : (array())), "label" => $this->getAttribute(        // line 5
(isset($context["field"]) ? $context["field"] : null), "label", array()), "info" => (($this->getAttribute(        // line 6
(isset($context["field"]) ? $context["field"] : null), "info", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "info", array()), "")) : ("")));
        // line 12
        $context["options"] = array();
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Bolt\Twig\TwigExtension')->listTemplates($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "filter", array())));
        foreach ($context['_seq'] as $context["filename"] => $context["name"]) {
            // line 14
            $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : null), array(0 => array("value" =>             // line 15
$context["filename"], "text" => (            // line 16
$context["name"] . ((twig_in_filter($context["filename"], $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "fieldtemplates", array()))) ? (" (+)") : (""))), "selected" => ($this->getAttribute($this->getAttribute(            // line 17
(isset($context["context"]) ? $context["context"] : null), "content", array()), "get", array(0 => (isset($context["contentkey"]) ? $context["contentkey"] : null)), "method") == $context["filename"]))));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['filename'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        $context["buic_opt_select"] = array("clear" => true, "id" =>         // line 24
(isset($context["key"]) ? $context["key"] : null), "name" =>         // line 25
(isset($context["name"]) ? $context["name"] : null), "options" =>         // line 26
(isset($context["options"]) ? $context["options"] : null));
        // line 33
        $context["fieldset_conf"] = array("currentHas" => $this->getAttribute($this->getAttribute(        // line 34
(isset($context["context"]) ? $context["context"] : null), "has", array()), "templatefields", array()), "current" => $this->getAttribute($this->getAttribute(        // line 35
(isset($context["context"]) ? $context["context"] : null), "content", array()), "get", array(0 => (isset($context["contentkey"]) ? $context["contentkey"] : null)), "method"), "fieldTemplates" => $this->getAttribute(        // line 36
(isset($context["context"]) ? $context["context"] : null), "fieldtemplates", array()));
        // line 31
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 39
    public function block_fieldset_type($context, array $blocks = array())
    {
        echo "templateselect";
    }

    // line 40
    public function block_fieldset_widget($context, array $blocks = array())
    {
        echo "fieldTemplateselect";
    }

    // line 42
    public function block_fieldset_label_text($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["labelkey"]) ? $context["labelkey"] : null), "html", null, true);
    }

    // line 43
    public function block_fieldset_label_info($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "info", array()), "html", null, true);
    }

    // line 44
    public function block_fieldset_label_class($context, array $blocks = array())
    {
        echo "col-sm-3";
    }

    // line 45
    public function block_fieldset_label_for($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
    }

    // line 47
    public function block_fieldset_controls($context, array $blocks = array())
    {
        // line 48
        echo "    ";
        $context["__internal_8d82c4915f4a74f654ea2cbb302b74b83ab198c0b44390a3a5f2b0df287a33de"] = $this->loadTemplate("@bolt/_buic/_select.twig", "@bolt/editcontent/fields/_templateselect.twig", 48);
        // line 49
        echo "
    <div class=\"col-sm-9\">
        ";
        // line 51
        echo $context["__internal_8d82c4915f4a74f654ea2cbb302b74b83ab198c0b44390a3a5f2b0df287a33de"]->getbuic_select((isset($context["buic_opt_select"]) ? $context["buic_opt_select"] : null));
        echo "
    </div>
    <div class=\"hidden col-sm-9 col-sm-offset-3\">
        <p class=\"form-control-static\"></p>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/fields/_templateselect.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 51,  107 => 49,  104 => 48,  101 => 47,  95 => 45,  89 => 44,  83 => 43,  77 => 42,  71 => 40,  65 => 39,  61 => 31,  59 => 36,  58 => 35,  57 => 34,  56 => 33,  54 => 26,  53 => 25,  52 => 24,  51 => 22,  45 => 17,  44 => 16,  43 => 15,  42 => 14,  38 => 13,  36 => 12,  34 => 6,  33 => 5,  32 => 4,  31 => 3,  11 => 31,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@bolt/editcontent/fields/_templateselect.twig", "");
    }
}
