<?php

/* partials/_aside.twig */
class __TwigTemplate_ceb0b89c8eb56a7bba61120e7b5e532e684359fb6ff7242a0e2f00f09489d836 extends Twig_Template
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
        echo "<!-- Sidebar -->

<aside class=\"large-";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["aside_width"]) ? $context["aside_width"] : null), "html", null, true);
        echo " columns\">

    ";
        // line 5
        if ($this->env->getExtension('Bolt\Twig\TwigExtension')->hasWidgets("aside_top")) {
            // line 6
            echo "
        ";
            // line 7
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->widgets("aside_top");
            echo "

    ";
        } else {
            // line 10
            echo "
        ";
            // line 12
            echo "        <div class=\"panel\">
            ";
            // line 15
            echo "            ";
            $template_storage = $context['app']['storage'];
            $context['block'] =             $template_storage->getContent("block/about-us", array() );
            // line 16
            echo "
            ";
            // line 19
            echo "            ";
            if ($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "title", array(), "any", true, true)) {
                // line 20
                echo "
                <h5>";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "title", array()), "html", null, true);
                echo "</h5>
                ";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "content", array()), "html", null, true);
                echo "

                ";
                // line 24
                if (($this->env->getExtension('Bolt\Twig\TwigExtension')->link($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "contentlink", array())) || $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "editlink", array(), "method"))) {
                    // line 25
                    echo "                    <p>
                        ";
                    // line 26
                    echo $this->env->getExtension('Bolt\Twig\TwigExtension')->link($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "contentlink", array()), $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.read-more"));
                    echo " /
                        <a href=\"";
                    // line 27
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "editlink", array(), "method"), "html", null, true);
                    echo "\">";
                    echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.edit");
                    echo "</a>
                    </p>
                ";
                }
                // line 30
                echo "
            ";
            } else {
                // line 32
                echo "
                <h5>";
                // line 33
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.missing-about-page");
                echo "</h5>

                <p>";
                // line 35
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.missing-about-page-block");
                echo "</p>

            ";
            }
            // line 38
            echo "
        </div>
    ";
        }
        // line 41
        echo "
    ";
        // line 42
        if ($this->env->getExtension('Bolt\Twig\TwigExtension')->hasWidgets("aside_bottom")) {
            // line 43
            echo "
        ";
            // line 44
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->widgets("aside_bottom");
            echo "

    ";
            // line 47
            echo "
        ";
            // line 49
            echo "
        ";
            // line 52
            echo "    ";
            // line 53
            echo "    ";
            // line 54
            echo "    ";
            // line 55
            echo "    ";
            // line 56
            echo "    ";
            // line 57
            echo "    ";
            echo "#}

    ";
            // line 60
            echo "
    ";
            // line 62
            echo "
    ";
            // line 64
            echo "    ";
            // line 65
            echo "    ";
            // line 66
            echo "    ";
            // line 67
            echo "    ";
            // line 68
            echo "    ";
            // line 69
            echo "    ";
            // line 70
            echo "    ";
            // line 71
            echo "            ";
            // line 72
            echo "
    ";
            // line 74
            echo "
    ";
        }
        // line 76
        echo "    
    <hr />
    
    <h5>Tag Cloud - このサイトの成分</h5>
    
    ";
        // line 81
        $context["list"] = call_user_func_array($this->env->getFunction('taxonomylist')->getCallable(), array("tags", array("limit" => 66, "weighted" => true, "contenttype" => "pages")));
        // line 82
        echo "    
    <ul class=\"tags\">
    ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 85
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", array()), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "    </ul>
    
</aside>

<!-- End Sidebar -->
";
    }

    public function getTemplateName()
    {
        return "partials/_aside.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 87,  187 => 85,  183 => 84,  179 => 82,  177 => 81,  170 => 76,  166 => 74,  163 => 72,  161 => 71,  159 => 70,  157 => 69,  155 => 68,  153 => 67,  151 => 66,  149 => 65,  147 => 64,  144 => 62,  141 => 60,  136 => 57,  134 => 56,  132 => 55,  130 => 54,  128 => 53,  126 => 52,  123 => 49,  120 => 47,  115 => 44,  112 => 43,  110 => 42,  107 => 41,  102 => 38,  96 => 35,  91 => 33,  88 => 32,  84 => 30,  76 => 27,  72 => 26,  69 => 25,  67 => 24,  62 => 22,  58 => 21,  55 => 20,  52 => 19,  49 => 16,  45 => 15,  42 => 12,  39 => 10,  33 => 7,  30 => 6,  28 => 5,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "partials/_aside.twig", "");
    }
}
