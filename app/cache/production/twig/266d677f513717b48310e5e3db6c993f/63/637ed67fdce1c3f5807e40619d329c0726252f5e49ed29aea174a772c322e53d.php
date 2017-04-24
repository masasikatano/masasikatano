<?php

/* @bolt/editcontent/fielddata/_templateselect.twig */
class __TwigTemplate_7ffa8f1e4f3b7bac6c27d1fa886957d14e3f72240bd2dc901a76840d664bdf8e extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("field.templateselect.template.warning", "<strong>%STATUS%:</strong> %MESSAGE%"), "html", null, true);
        echo "

";
        // line 6
        echo "
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("field.templateselect.message.change", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.warning-template")), "html", null, true);
        echo "
";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("field.templateselect.message.warning", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.warning-templatefields-loss")), "html", null, true);
        echo "
";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("field.templateselect.message.status", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.warning")), "html", null, true);
        echo "
";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("field.templateselect.text.default", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("(default template)")), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/fielddata/_templateselect.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 10,  38 => 9,  34 => 8,  30 => 7,  27 => 6,  22 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@bolt/editcontent/fielddata/_templateselect.twig", "");
    }
}
