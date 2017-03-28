<?php

/* @bolt/editcontent/fielddata/_taxonomy.twig */
class __TwigTemplate_87ef63e9d39638ecb99dd0233fe399b9b2ece06f4f64f57dcd190a11f75663d5 extends Twig_Template
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
        // line 2
        echo "
";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("field.categories.text.placeholder", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("(no category)")), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/fielddata/_taxonomy.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@bolt/editcontent/fielddata/_taxonomy.twig", "");
    }
}
