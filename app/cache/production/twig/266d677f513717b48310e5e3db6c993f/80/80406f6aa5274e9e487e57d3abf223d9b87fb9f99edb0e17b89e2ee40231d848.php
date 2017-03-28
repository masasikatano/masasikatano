<?php

/* @bolt/editcontent/_aside-status.twig */
class __TwigTemplate_6699b7314cebd77b70b0fbb738e16ba47fe9f084434ac2bd1fca989a8d234f5b extends Twig_Template
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
        $context["__internal_9ae87b260ae8d11e5977f0761b4f1b8589f89696215e3b8b5359d4d6f9746ef6"] = $this->loadTemplate("@bolt/_buic/_moment.twig", "@bolt/editcontent/_aside-status.twig", 1);
        // line 2
        echo "
<p>
    ";
        // line 4
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Current (saved) status:");
        echo "
    <a href=\"#statusselect\" id=\"lastsavedstatus\" title=\"";
        // line 5
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.change-current-status");
        echo "\">
        <strong>
            <i class=\"fa fa-circle status-";
        // line 7
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "status", array()), $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.none"))) : ($this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.none"))), "html", null, true);
        echo "\"></i>
            ";
        // line 8
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["status_names"]) ? $context["status_names"] : null), $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "status", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["status_names"]) ? $context["status_names"] : null), $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "status", array()), array(), "array"), $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.none"))) : ($this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.none"))), "html", null, true);
        echo "
        </strong>
    </a>
</p>

<p class=\"lastsaved\">
    ";
        // line 14
        if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "id", array()))) {
            // line 15
            echo "    ";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.saved-on-colon");
            echo " <strong>";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->localeDateTime($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "datechanged", array()), "%c");
            echo "</strong>
    <small>(";
            // line 16
            echo $context["__internal_9ae87b260ae8d11e5977f0761b4f1b8589f89696215e3b8b5359d4d6f9746ef6"]->getbuic_moment($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "datechanged", array()));
            echo ")</small>
";
        } else {
            // line 18
            echo "    ";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("contenttypes.generic.not-saved-yet", array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array())));
            echo "
";
        }
        // line 20
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/_aside-status.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 20,  61 => 18,  56 => 16,  49 => 15,  47 => 14,  38 => 8,  34 => 7,  29 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@bolt/editcontent/_aside-status.twig", "");
    }
}
