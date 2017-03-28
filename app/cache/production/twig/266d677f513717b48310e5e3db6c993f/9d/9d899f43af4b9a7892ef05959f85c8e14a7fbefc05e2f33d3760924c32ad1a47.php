<?php

/* listing.twig */
class __TwigTemplate_e29417b6ddca218e75763f5d623e61318322d6b74242cfe506d39b5c4869fd82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/_master.twig", "listing.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/_master.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        // line 4
        echo "
        ";
        // line 10
        echo "
        ";
        // line 12
        echo "        ";
        if (array_key_exists("taxonomytype", $context)) {
            // line 13
            echo "            <h1>
                ";
            // line 14
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.overview-for");
            echo "
                ";
            // line 15
            if ($this->getAttribute($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "options", array(), "any", false, true), (isset($context["slug"]) ? $context["slug"] : null), array(), "array", true, true)) {
                // line 16
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "options", array()), (isset($context["slug"]) ? $context["slug"] : null), array(), "array"), "html", null, true);
                echo "
                ";
            } else {
                // line 18
                echo "                    ";
                echo twig_escape_filter($this->env, (isset($context["slug"]) ? $context["slug"] : null), "html", null, true);
                echo "
                ";
            }
            // line 20
            echo "            </h1>
            ";
            // line 23
            echo "            ";
            if ( !$this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "has_sortorder", array())) {
                // line 24
                echo "                ";
                // line 25
                echo "                ";
                $context["records"] = $this->env->getExtension('Bolt\Twig\TwigExtension')->order((isset($context["records"]) ? $context["records"] : null), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/listing_sort"), "method"));
                // line 26
                echo "            ";
            }
            // line 27
            echo "        ";
        }
        // line 28
        echo "
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["records"]) ? $context["records"] : null));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 30
            echo "            <article>

                <h2><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "link", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "title", array()), "html", null, true);
            echo "</a></h2>

                ";
            // line 34
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->popup($this->getAttribute($context["record"], "image", array()), 1200, 500);
            echo "

                ";
            // line 37
            echo "                ";
            if ($this->getAttribute($context["record"], "introduction", array())) {
                // line 38
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "introduction", array()), "html", null, true);
                echo "
                ";
            } elseif ($this->getAttribute(            // line 39
$context["record"], "teaser", array())) {
                // line 40
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "teaser", array()), "html", null, true);
                echo "
                ";
            } else {
                // line 42
                echo "                    <p>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "excerpt", array(0 => 300, 1 => false, 2 => ((array_key_exists("search", $context)) ? (_twig_default_filter((isset($context["search"]) ? $context["search"] : null), "")) : (""))), "method"), "html", null, true);
                echo "</p>
                ";
            }
            // line 44
            echo "
                ";
            // line 45
            $this->loadTemplate("partials/_recordfooter.twig", "listing.twig", 45)->display(array_merge($context, array("record" => $context["record"])));
            // line 46
            echo "
            </article>

            ";
            // line 49
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                // line 50
                echo "                <hr>
            ";
            }
            // line 52
            echo "
        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 54
            echo "            <article>

                <h2>";
            // line 56
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.no-content-found");
            echo "</h2>

                <p>
                    ";
            // line 59
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Unfortunately, no content could be found. Try another page, or go to the <a href=\"%paths_root%\">homepage</a>.", array("%paths_root%" => $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "root", array())));
            echo "
                </p>

            </article>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "
        ";
        // line 66
        echo "        ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->pager($this->env, "", 4, "partials/_sub_pager.twig"), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "listing.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 66,  188 => 64,  177 => 59,  171 => 56,  167 => 54,  153 => 52,  149 => 50,  147 => 49,  142 => 46,  140 => 45,  137 => 44,  131 => 42,  125 => 40,  123 => 39,  118 => 38,  115 => 37,  110 => 34,  103 => 32,  99 => 30,  81 => 29,  78 => 28,  75 => 27,  72 => 26,  69 => 25,  67 => 24,  64 => 23,  61 => 20,  55 => 18,  49 => 16,  47 => 15,  43 => 14,  40 => 13,  37 => 12,  34 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "listing.twig", "");
    }
}
