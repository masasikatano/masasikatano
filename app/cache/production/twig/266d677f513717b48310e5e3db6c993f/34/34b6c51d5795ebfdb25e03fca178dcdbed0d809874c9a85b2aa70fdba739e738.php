<?php

/* @bolt/exception/database/exception.twig */
class __TwigTemplate_b5b56c2c499ca2641cba8a2fd1a1883a7bb9d91542238ca52544d6dc210106f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@bolt/exception/exception.twig", "@bolt/exception/database/exception.twig", 1);
        $this->blocks = array(
            'exception' => array($this, 'block_exception'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@bolt/exception/exception.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_exception($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if (((isset($context["type"]) ? $context["type"] : null) == "connect")) {
            // line 5
            echo "        ";
            echo twig_include($this->env, $context, "@bolt/exception/database/_failed-connect.twig");
            echo "
    ";
        } elseif ((        // line 6
(isset($context["type"]) ? $context["type"] : null) == "driver")) {
            // line 7
            echo "        ";
            echo twig_include($this->env, $context, "@bolt/exception/database/_driver.twig");
            echo "
    ";
        } elseif ((        // line 8
(isset($context["type"]) ? $context["type"] : null) == "path")) {
            // line 9
            echo "        ";
            echo twig_include($this->env, $context, "@bolt/exception/database/_invalid-path.twig");
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "@bolt/exception/database/exception.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 9,  46 => 8,  41 => 7,  39 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@bolt/exception/database/exception.twig", "");
    }
}
