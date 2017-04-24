<?php

/* record.twig */
class __TwigTemplate_1355fb753f87db7adcb25e836da920e57bcc0517ca90900b6748a237dfc251bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/_master.twig", "record.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/_master.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        // line 4
        echo "
    <h1>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title", array()), "html", null, true);
        echo "</h1>

    ";
        // line 10
        echo "    ";
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->fields($this->env);
        echo "

    ";
        // line 15
        echo "
    ";
        // line 16
        $this->loadTemplate("partials/_recordfooter.twig", "record.twig", 16)->display(array_merge($context, array("record" => (isset($context["record"]) ? $context["record"] : null), "extended" => true)));
        // line 17
        echo "
";
    }

    public function getTemplateName()
    {
        return "record.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 17,  48 => 16,  45 => 15,  39 => 10,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "record.twig", "");
    }
}
