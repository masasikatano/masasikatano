<?php

/* _sub_taxonomylinks.twig */
class __TwigTemplate_b3eab450e7ae7626ad8de63aaa6dc54d93c0d7b51f807ad959d200284b87a751 extends Twig_Template
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
        if ($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "taxonomy", array(), "any", true, true)) {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "taxonomy", array()));
            foreach ($context['_seq'] as $context["type"] => $context["values"]) {
                // line 3
                echo "        <ul class=\"tags\">
        ";
                // line 4
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["values"]);
                foreach ($context['_seq'] as $context["link"] => $context["value"]) {
                    // line 5
                    echo "            <li><a href=\"";
                    echo twig_escape_filter($this->env, $context["link"], "html", null, true);
                    echo "\" >";
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "</a></li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['link'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 7
                echo "        </ul>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['values'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "_sub_taxonomylinks.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 7,  33 => 5,  29 => 4,  26 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "_sub_taxonomylinks.twig", "");
    }
}
