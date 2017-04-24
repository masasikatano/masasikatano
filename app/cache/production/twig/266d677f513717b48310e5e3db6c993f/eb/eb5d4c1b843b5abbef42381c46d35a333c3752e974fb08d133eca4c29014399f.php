<?php

/* partials/_sub_pager.twig */
class __TwigTemplate_f57594c8d852d7bbfc6d292b3ebd06c2e156eb3a2a72b3132322a5371cbddc4e extends Twig_Template
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
        echo "<hr />

";
        // line 3
        $context["link"] = $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "makelink", array(), "method");
        // line 4
        echo "
";
        // line 5
        if (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "totalpages", array()) > 1)) {
            // line 6
            echo "<div class=\"pagination text-center ";
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
            echo "\">
  <ul class=\"pagination\">
";
            // line 9
            if ((($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current", array()) > 1) && ((isset($context["class"]) ? $context["class"] : null) != "narrow"))) {
                // line 10
                echo "    <li><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current", array()) - 1), "html", null, true);
                echo "\" rel=\"noindex, follow\">&#8592; </a></li>
";
            }
            // line 12
            if (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current", array()) > ((isset($context["surr"]) ? $context["surr"] : null) + 1))) {
                // line 13
                echo "    <li><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
                echo 1;
                echo "\">&laquo; 1</a></li>
";
            }
            // line 15
            echo "
";
            // line 17
            if (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current", array()) > ((isset($context["surr"]) ? $context["surr"] : null) + 2))) {
                // line 18
                echo "    <li class=\"disabled\"><a>…</a></li>
";
            }
            // line 20
            echo "
";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(max(1, ($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current", array()) - (isset($context["surr"]) ? $context["surr"] : null))), min(($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current", array()) + (isset($context["surr"]) ? $context["surr"] : null)), $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "totalpages", array()))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 22
                echo "    <li ";
                if (($context["i"] == $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current", array()))) {
                    echo "class='active'";
                }
                echo "><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\" ";
                if (($context["i"] != 1)) {
                    echo "rel=\"noindex, follow\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a></li>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "
";
            // line 26
            if (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current", array()) < (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "totalpages", array()) - (isset($context["surr"]) ? $context["surr"] : null)) - 1))) {
                // line 27
                echo "    <li class=\"disabled\"><a>…</a></li>
";
            }
            // line 29
            echo "
";
            // line 31
            if (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current", array()) < ($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "totalpages", array()) - (isset($context["surr"]) ? $context["surr"] : null)))) {
                // line 32
                echo "    <li><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "totalpages", array()), "html", null, true);
                echo "\" rel=\"noindex, follow\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "totalpages", array()), "html", null, true);
                echo " &raquo; </a></li>
";
            }
            // line 34
            if ((($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current", array()) < $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "totalpages", array())) && ((isset($context["class"]) ? $context["class"] : null) != "narrow"))) {
                // line 35
                echo "    <li><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), "current", array()) + 1), "html", null, true);
                echo "\" rel=\"noindex, follow\">&#8594;</a></li>
";
            }
            // line 37
            echo "  </ul>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/_sub_pager.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 37,  115 => 35,  113 => 34,  104 => 32,  102 => 31,  99 => 29,  95 => 27,  93 => 26,  90 => 24,  70 => 22,  66 => 21,  63 => 20,  59 => 18,  57 => 17,  54 => 15,  47 => 13,  45 => 12,  38 => 10,  36 => 9,  30 => 6,  28 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "partials/_sub_pager.twig", "");
    }
}
