<?php

/* @bolt/components/panel-activity.twig */
class __TwigTemplate_1ac5b628033655613a3cd8444adc8dbb01bf1d7f6811489716b622d52eb3a561 extends Twig_Template
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
        // line 5
        echo twig_include($this->env, $context, "@bolt/components/panel-activity-change.twig", (isset($context["context"]) ? $context["context"] : null));
        echo "
";
        // line 6
        echo twig_include($this->env, $context, "@bolt/components/panel-activity-system.twig", (isset($context["context"]) ? $context["context"] : null));
        echo "
";
    }

    public function getTemplateName()
    {
        return "@bolt/components/panel-activity.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 6,  19 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@bolt/components/panel-activity.twig", "");
    }
}
