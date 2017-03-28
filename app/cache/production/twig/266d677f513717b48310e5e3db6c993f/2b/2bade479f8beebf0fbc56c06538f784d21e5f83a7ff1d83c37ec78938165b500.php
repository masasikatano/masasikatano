<?php

/* @bolt/editcontent/_aside-preview.twig */
class __TwigTemplate_ec418925fb3d3e037807c9f734a4c6b7c2ae40eafc8f43a8de802967f800f245 extends Twig_Template
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
        if ( !(($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "viewless", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "viewless", array()), false)) : (false))) {
            // line 2
            echo "<div class=\"btn-group\">
    ";
            // line 3
            if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "routes", array()), "get", array(0 => "preview"), "method")) {
                // line 4
                echo "        <button type=\"button\" class=\"btn btn-default\" id=\"sidebarpreviewbutton\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("preview", array("contenttypeslug" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "singular_slug", array()))), "html", null, true);
                echo "\">
            <i class=\"fa fa-external-link-square\"></i> ";
                // line 5
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.preview");
                echo "
        </button>
    ";
            } else {
                // line 8
                echo "        <button type=\"button\" class=\"btn btn-disabled\">
            <i class=\"fa fa-external-link-square\"></i> ";
                // line 9
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.no-preview");
                echo "
        </button>
    ";
            }
            // line 12
            echo "
    ";
            // line 13
            if ((($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "status", array()) == "published") && $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "link", array(), "any", true, true))) {
                // line 14
                echo "        <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
            <span class=\"caret\"></span>
            <span class=\"sr-only\">Toggle Dropdown</span>
        </button>

        <ul class=\"dropdown-menu pull-right\" role=\"menu\">
            <li>
                <a href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "link", array()), "html", null, true);
                echo "\" target=\"_blank\">
                    <i class=\"fa fa-external-link-square\"></i> ";
                // line 22
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("View (saved version) on site");
                echo "
                </a>
            </li>
        </ul>
    ";
            }
            // line 27
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/_aside-preview.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 27,  64 => 22,  60 => 21,  51 => 14,  49 => 13,  46 => 12,  40 => 9,  37 => 8,  31 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@bolt/editcontent/_aside-preview.twig", "");
    }
}
