<?php

/* @bolt/_nav/_footer.twig */
class __TwigTemplate_1b83bbb1b7adbe86bdf46c203e7124a9d8ec2f2c3308c2ca93e36ce0d23892c4 extends Twig_Template
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
        if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/branding/provided_link"), "method"))) {
            // line 2
            echo "
    <footer id=\"bolt-footer\" class=\"hidden-xs ";
            // line 3
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "cookies", array()), "get", array(0 => "sidebar"), "method")) {
                echo "bolt-footer-hidden";
            }
            echo "\">
        ";
            // line 4
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.provided-by-colon");
            echo "
        ";
            // line 5
            echo $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/branding/provided_link"), "method");
            echo " &ndash;
        <i class=\"fa fa-cog\"></i> <b>Bolt ";
            // line 6
            echo twig_escape_filter($this->env, (isset($context["bolt_version"]) ? $context["bolt_version"] : null), "html", null, true);
            echo "</b>:
        <i class=\"fa fa-heart\"></i > <a href=\"";
            // line 7
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("about");
            echo "\">";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.about");
            echo "</a> &ndash;
        <i class=\"fa fa-external-link-square\"></i> <a href=\"http://bolt.cm\" target=\"_blank\">Bolt.cm</a>
    </footer>

";
        } else {
            // line 12
            echo "
    <footer id=\"bolt-footer\" class=\"hidden-xs bolt-footer-mini ";
            // line 13
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "cookies", array()), "get", array(0 => "sidebar"), "method")) {
                echo "bolt-footer-hidden";
            }
            echo "\">
        <i class=\"fa fa-cog\"></i> <a href=\"http://bolt.cm\" target=\"_blank\">Bolt ";
            // line 14
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["bolt_version"]) ? $context["bolt_version"] : null), array("alpha" => "α", " beta " => "β")), "html", null, true);
            echo "</a> &ndash;
        <i class=\"fa fa-heart\"></i > <a href=\"";
            // line 15
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("about");
            echo "\">";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.about");
            echo "</a>
    </footer>

";
        }
    }

    public function getTemplateName()
    {
        return "@bolt/_nav/_footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 15,  61 => 14,  55 => 13,  52 => 12,  42 => 7,  38 => 6,  34 => 5,  30 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@bolt/_nav/_footer.twig", "");
    }
}
