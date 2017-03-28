<?php

/* @bolt/_sub/_record_list_data.twig */
class __TwigTemplate_4027526a459242ca73fa81d93d234b9267f07aa0e7cefdfa8f80beb046737717 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("recordlisting.confirm.one", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Are you sure you want to do this for 1 record?")), "html", null, true);
        echo "
";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("recordlisting.confirm.multi", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Are you sure you want to do this for %NUMBER% records?")), "html", null, true);
        echo "
";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("recordlisting.confirm.no-undo", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.no-undo")), "html", null, true);
        echo "
";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("recordlisting.action.cancel", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.cancel")), "html", null, true);
        echo "
";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("recordlisting.action.delete", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("contenttypes.generic.delete", array("%contenttype%" => "%CTNAME%"))), "html", null, true);
        echo "
";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("recordlisting.action.publish", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("contenttypes.generic.publish", array("%contenttype%" => "%CTNAME%"))), "html", null, true);
        echo "
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("recordlisting.action.depublish", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.status-change-held")), "html", null, true);
        echo "
";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("recordlisting.action.draft", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.status-change-draft")), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@bolt/_sub/_record_list_data.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  43 => 7,  39 => 6,  35 => 5,  31 => 4,  27 => 3,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@bolt/_sub/_record_list_data.twig", "");
    }
}
