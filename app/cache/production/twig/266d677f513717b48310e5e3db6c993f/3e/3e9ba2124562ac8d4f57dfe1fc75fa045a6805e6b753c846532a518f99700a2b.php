<?php

/* @bolt/_nav/_secondary-search.twig */
class __TwigTemplate_5f8659fa17ce71dd6a65ad94f6edae74dc0100bd08621dfe6118fcb3b30697d2 extends Twig_Template
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
        echo "<li class=\"search\">
    <form class=\"navbar-form\">
        <i class=\"icon fa fa-search\"></i><div class=\"form-group has-feedback omnisearch\" role=\"search\">
            <select class=\"form-control\"></select>
        </div>
    </form>
</li>
";
    }

    public function getTemplateName()
    {
        return "@bolt/_nav/_secondary-search.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@bolt/_nav/_secondary-search.twig", "");
    }
}
