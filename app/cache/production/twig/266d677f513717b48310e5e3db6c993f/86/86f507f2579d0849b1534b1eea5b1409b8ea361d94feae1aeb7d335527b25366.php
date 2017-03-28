<?php

/* partials/_recordfooter.twig */
class __TwigTemplate_11deb3816fc3d728da63e136b3a31db081cc74e386c68e0c2cb611dff16111da extends Twig_Template
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
        echo "<p 1
class=\"meta\">
    ";
        // line 3
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.written-by-on", array("%name%" => (($this->getAttribute($this->getAttribute(        // line 4
(isset($context["record"]) ? $context["record"] : null), "user", array(), "any", false, true), "displayname", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "user", array(), "any", false, true), "displayname", array()), $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Unknown"))) : ($this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Unknown"))), "%date%" => $this->env->getExtension('Bolt\Twig\TwigExtension')->localeDateTime($this->getAttribute(        // line 5
(isset($context["record"]) ? $context["record"] : null), "datepublish", array()), "%A %B %e, %Y")));
        // line 6
        echo "
</p>

";
        // line 9
        if (((array_key_exists("extended", $context)) ? (_twig_default_filter((isset($context["extended"]) ? $context["extended"] : null))) : (""))) {
            // line 10
            echo "    
    <p class=\"meta\">
        ";
            // line 13
            echo "        ";
            // line 15
            echo "        ";
            echo twig_include($this->env, $context, "_sub_taxonomylinks.twig", array("record" => (isset($context["record"]) ? $context["record"] : null)));
            echo "
    </p>

    ";
            // line 18
            $context["previous"] = $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "previous", array(0 => "id"), "method");
            // line 19
            echo "    ";
            $context["next"] = $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "next", array(0 => "id"), "method");
            // line 20
            echo "    ";
            if (((isset($context["previous"]) ? $context["previous"] : null) || (isset($context["next"]) ? $context["next"] : null))) {
                // line 21
                echo "        <p class=\"meta\">
            ";
                // line 22
                if ((isset($context["previous"]) ? $context["previous"] : null)) {
                    // line 23
                    echo "                <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["previous"]) ? $context["previous"] : null), "link", array()), "html", null, true);
                    echo "\">&laquo; ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["previous"]) ? $context["previous"] : null), "title", array()), "html", null, true);
                    echo "</a>
            ";
                }
                // line 25
                echo "            ";
                if (((isset($context["previous"]) ? $context["previous"] : null) && (isset($context["next"]) ? $context["next"] : null))) {
                    // line 26
                    echo "            -
            ";
                }
                // line 28
                echo "            ";
                if ((isset($context["next"]) ? $context["next"] : null)) {
                    // line 29
                    echo "                <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["next"]) ? $context["next"] : null), "link", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["next"]) ? $context["next"] : null), "title", array()), "html", null, true);
                    echo " &raquo;</a>
            ";
                }
                // line 31
                echo "        </p>
    ";
            }
            // line 33
            echo "
    ";
            // line 34
            $context["relatedrecords"] = $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "related", array(), "method");
            // line 35
            echo "    ";
            if ( !twig_test_empty((isset($context["relatedrecords"]) ? $context["relatedrecords"] : null))) {
                // line 36
                echo "        <p class=\"meta\">";
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.related-content");
                echo "
        <ul>
            ";
                // line 38
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["relatedrecords"]) ? $context["relatedrecords"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["related"]) {
                    // line 39
                    echo "                <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["related"], "link", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["related"], "title", array()), "html", null, true);
                    echo "</a></li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['related'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 41
                echo "        </ul>
        </p>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "partials/_recordfooter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 41,  108 => 39,  104 => 38,  98 => 36,  95 => 35,  93 => 34,  90 => 33,  86 => 31,  78 => 29,  75 => 28,  71 => 26,  68 => 25,  60 => 23,  58 => 22,  55 => 21,  52 => 20,  49 => 19,  47 => 18,  40 => 15,  38 => 13,  34 => 10,  32 => 9,  27 => 6,  25 => 5,  24 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "partials/_recordfooter.twig", "");
    }
}
