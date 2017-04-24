<?php

/* @bolt/editcontent/_taxonomies.twig */
class __TwigTemplate_23e26bc9a8781a0c6bbc5bb519b126ef989ea40259d74b942af129bab4b3759e extends Twig_Template
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
        if ( !$this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "has", array()), "tabs", array())) {
            // line 4
            echo "    <h3>
        ";
            // line 5
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.taxonomy");
            echo "
        <span class=\"label info-pop\" data-html=\"true\" data-title=\"";
            // line 6
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.taxonomy");
            echo "\"
                  data-content=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "translator", array()), "trans", array(0 => "info.taxonomy", 1 => array(), 2 => "infos"), "method"), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.info");
            echo "</span>
    </h3>
";
        }
        // line 10
        echo "
";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "taxonomy", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "taxonomy", array()), array())) : (array())));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["taxonomyslug"]) {
            // line 12
            echo "    ";
            if ($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "taxonomy"), "method", false, true), $context["taxonomyslug"], array(), "array", true, true)) {
                // line 13
                echo "        ";
                $context["taxonomy"] = $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "taxonomy"), "method"), $context["taxonomyslug"], array(), "array");
                // line 14
                echo "
        <div data-bolt-fieldset=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "behaves_like", array()), "html", null, true);
                echo "\">
            ";
                // line 17
                echo "            ";
                if (($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "prefix", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "prefix", array())))) {
                    // line 18
                    echo "                <div class=\"prefix\">
                    ";
                    // line 19
                    echo $this->env->getExtension('Bolt\Twig\TwigExtension')->markdown($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "prefix", array()));
                    echo "
                </div>
            ";
                }
                // line 22
                echo "
            ";
                // line 24
                echo "            ";
                if (($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "behaves_like", array()) == "tags")) {
                    // line 25
                    echo "                ";
                    echo twig_include($this->env, $context, "@bolt/editcontent/fields/_tags.twig");
                    echo "
            ";
                } elseif (($this->getAttribute(                // line 26
(isset($context["taxonomy"]) ? $context["taxonomy"] : null), "behaves_like", array()) == "categories")) {
                    // line 27
                    echo "                ";
                    echo twig_include($this->env, $context, "@bolt/editcontent/fields/_categories.twig");
                    echo "
            ";
                } elseif (($this->getAttribute(                // line 28
(isset($context["taxonomy"]) ? $context["taxonomy"] : null), "behaves_like", array()) == "grouping")) {
                    // line 29
                    echo "                ";
                    echo twig_include($this->env, $context, "@bolt/editcontent/fields/_grouping.twig");
                    echo "
            ";
                }
                // line 31
                echo "
            ";
                // line 33
                echo "            ";
                if (($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "postfix", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "postfix", array())))) {
                    // line 34
                    echo "                <div class=\"postfix\">
                    ";
                    // line 35
                    echo $this->env->getExtension('Bolt\Twig\TwigExtension')->markdown($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "postfix", array()));
                    echo "
                </div>
            ";
                }
                // line 38
                echo "        </div>
    ";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taxonomyslug'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "
";
        // line 42
        if (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "has", array()), "tabs", array()) && twig_in_filter("taxonomy", $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "groups", array())))) {
            // line 43
            echo "    ";
            echo twig_include($this->env, $context, "@bolt/editcontent/_field.twig");
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/_taxonomies.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 43,  148 => 42,  145 => 41,  129 => 38,  123 => 35,  120 => 34,  117 => 33,  114 => 31,  108 => 29,  106 => 28,  101 => 27,  99 => 26,  94 => 25,  91 => 24,  88 => 22,  82 => 19,  79 => 18,  76 => 17,  72 => 15,  69 => 14,  66 => 13,  63 => 12,  46 => 11,  43 => 10,  35 => 7,  31 => 6,  27 => 5,  24 => 4,  22 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@bolt/editcontent/_taxonomies.twig", "");
    }
}
