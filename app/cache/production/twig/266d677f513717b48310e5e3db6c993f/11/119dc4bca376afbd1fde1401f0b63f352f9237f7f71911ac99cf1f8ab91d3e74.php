<?php

/* @bolt/dashboard/_quicklinks-buttons.twig */
class __TwigTemplate_ef1d3f334a6cd8f922bc0b206a3817451ea6f96d6b9c9e734ed08fe53d77123d extends Twig_Template
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
        echo "<div class=\"btn-group\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "contenttypes"), "method"));
        foreach ($context['_seq'] as $context["contenttypeslug"] => $context["contenttype"]) {
            // line 3
            echo "        ";
            if (($this->env->getExtension('Bolt\Twig\TwigExtension')->isAllowed((("contenttype:" . $context["contenttypeslug"]) . ":create")) && $this->env->getExtension('Bolt\Twig\TwigExtension')->isAllowed((("contenttype:" . $context["contenttypeslug"]) . ":view")))) {
                // line 4
                echo "            <a class=\"btn btn-default\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editcontent", array("contenttypeslug" => $context["contenttypeslug"])), "html", null, true);
                echo "\">
                <i class=\"fa fa-plus\"></i> ";
                // line 5
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("contenttypes.generic.new", array("%contenttype%" => $context["contenttypeslug"]));
                echo "
            </a>
        ";
            }
            // line 8
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['contenttypeslug'], $context['contenttype'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@bolt/dashboard/_quicklinks-buttons.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 9,  40 => 8,  34 => 5,  29 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@bolt/dashboard/_quicklinks-buttons.twig", "");
    }
}
