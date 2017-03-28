<?php

/* @bolt/editcontent/fields/_tags.twig */
class __TwigTemplate_cf7bf987d0764168cdd48b888d715f650cfdcce65929240581228ff1bb8a702f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("@bolt/_base/_fieldset.twig", "@bolt/editcontent/fields/_tags.twig", 25);
        $this->blocks = array(
            'fieldset_type' => array($this, 'block_fieldset_type'),
            'fieldset_widget' => array($this, 'block_fieldset_widget'),
            'fieldset_label_text' => array($this, 'block_fieldset_label_text'),
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
        // line 4
        $context["options"] = array();
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "get", array(0 => $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array())), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "get", array(0 => $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array())), "method"), array())) : (array())));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 6
            $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : null), array(0 => array("value" => $this->getAttribute(            // line 7
$context["tag"], "slug", array()), "text" => $this->getAttribute(            // line 8
$context["tag"], "name", array()), "selected" => true)));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        $context["buic_opt_select"] = array("clear" => true, "id" => ("taxonomy-" . $this->getAttribute(        // line 16
(isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array())), "multiple" => true, "name" => (("taxonomy[" . $this->getAttribute(        // line 18
(isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array())) . "][]"), "options" =>         // line 19
(isset($context["options"]) ? $context["options"] : null), "class" => "tags-select2");
        // line 30
        $context["fieldset_conf"] = array("slug" => $this->getAttribute(        // line 31
(isset($context["taxonomy"]) ? $context["taxonomy"] : null), "slug", array()), "allowSpaces" => $this->getAttribute(        // line 32
(isset($context["taxonomy"]) ? $context["taxonomy"] : null), "allow_spaces", array()));
        // line 25
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_fieldset_type($context, array $blocks = array())
    {
        echo "tags";
    }

    // line 28
    public function block_fieldset_widget($context, array $blocks = array())
    {
        echo "fieldTags";
    }

    // line 35
    public function block_fieldset_label_text($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "name", array()), "html", null, true);
    }

    // line 36
    public function block_fieldset_label_class($context, array $blocks = array())
    {
        echo "col-sm-3";
    }

    // line 38
    public function block_fieldset_controls($context, array $blocks = array())
    {
        // line 39
        echo "    ";
        $context["__internal_0f046979ec51c3977d0db914427b4b55dc4f2f8f2573199260b05bbe8adf3362"] = $this->loadTemplate("@bolt/_buic/_select.twig", "@bolt/editcontent/fields/_tags.twig", 39);
        // line 40
        echo "
    <div class=\"col-sm-9\">
        ";
        // line 42
        echo $context["__internal_0f046979ec51c3977d0db914427b4b55dc4f2f8f2573199260b05bbe8adf3362"]->getbuic_select((isset($context["buic_opt_select"]) ? $context["buic_opt_select"] : null));
        echo "
        ";
        // line 43
        if ($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "tagcloud", array())) {
            // line 44
            echo "            <div class=\"tagcloud\"></div>
        ";
        }
        // line 46
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/fields/_tags.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 46,  96 => 44,  94 => 43,  90 => 42,  86 => 40,  83 => 39,  80 => 38,  74 => 36,  68 => 35,  62 => 28,  56 => 27,  52 => 25,  50 => 32,  49 => 31,  48 => 30,  46 => 19,  45 => 18,  44 => 16,  43 => 14,  37 => 8,  36 => 7,  35 => 6,  31 => 5,  29 => 4,  11 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@bolt/editcontent/fields/_tags.twig", "");
    }
}
