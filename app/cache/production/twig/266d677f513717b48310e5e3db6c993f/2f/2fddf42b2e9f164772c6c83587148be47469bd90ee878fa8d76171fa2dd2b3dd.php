<?php

/* @bolt/editcontent/_aside.twig */
class __TwigTemplate_f5306f83971d3f739675fad7fe87e2918e2535f9a8ef1c28ea52aac7eee35a2f extends Twig_Template
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
        $context["panels"] = $this->loadTemplate("@bolt/_macro/_panels.twig", "@bolt/editcontent/_aside.twig", 1);
        // line 2
        echo "
";
        // line 3
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->widgets("editcontent_aside_top", "backend");
        echo "

<div class=\"panel panel-default\">
    <div class=\"panel-heading\">
        <i class=\"fa fa-cog fa-fw\"></i> ";
        // line 7
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("contenttypes.generic.actions-one", array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array())));
        echo "
    </div>

    <div class=\"panel-body\">
        ";
        // line 11
        echo twig_include($this->env, $context, "@bolt/editcontent/_aside-save.twig");
        echo "
        ";
        // line 12
        echo twig_include($this->env, $context, "@bolt/editcontent/_aside-live-editor.twig");
        echo "
        ";
        // line 13
        echo twig_include($this->env, $context, "@bolt/editcontent/_aside-preview.twig");
        echo "
        ";
        // line 14
        echo twig_include($this->env, $context, "@bolt/editcontent/_aside-status.twig");
        echo "
        ";
        // line 15
        if (($this->env->getExtension('Bolt\Twig\TwigExtension')->isAllowed("delete", $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array())) &&  !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "id", array())))) {
            // line 16
            echo "            ";
            echo twig_include($this->env, $context, "@bolt/editcontent/_aside-delete.twig");
            echo "
        ";
        }
        // line 18
        echo "    </div>
</div>

";
        // line 21
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->widgets("editcontent_aside_middle", "backend");
        echo "

";
        // line 23
        echo $context["panels"]->getchanges($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array()), (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "id", array()), null)) : (null)));
        echo "

";
        // line 25
        echo $context["panels"]->getlastmodified($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array()), $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "id", array()));
        echo "

";
        // line 27
        echo $context["panels"]->getstack(5);
        echo "

";
        // line 29
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->widgets("editcontent_aside_bottom", "backend");
        echo "
";
    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/_aside.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 29,  82 => 27,  77 => 25,  72 => 23,  67 => 21,  62 => 18,  56 => 16,  54 => 15,  50 => 14,  46 => 13,  42 => 12,  38 => 11,  31 => 7,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@bolt/editcontent/_aside.twig", "");
    }
}
