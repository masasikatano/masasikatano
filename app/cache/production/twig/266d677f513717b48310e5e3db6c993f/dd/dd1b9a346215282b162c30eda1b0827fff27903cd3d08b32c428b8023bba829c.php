<?php

/* @bolt/async/record_list.twig */
class __TwigTemplate_d671251de4481dbfb22801fa23e2981e7fcc539a248fd6ef9362cc7259c830d9 extends Twig_Template
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
        $context["__internal_48d66a5f3fd4325c38c0018a93f77ea46a22c66d130f2231be8d9e7171a6c92f"] = $this->loadTemplate("@bolt/_sub/_record_list.twig", "@bolt/async/record_list.twig", 1);
        // line 2
        echo "
";
        // line 3
        echo $context["__internal_48d66a5f3fd4325c38c0018a93f77ea46a22c66d130f2231be8d9e7171a6c92f"]->getrecord_list($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "multiplecontent", array()), $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "permissions", array()), "", true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@bolt/async/record_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@bolt/async/record_list.twig", "");
    }
}
