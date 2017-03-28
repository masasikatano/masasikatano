<?php

/* search.twig */
class __TwigTemplate_9f41bd313a5b4aa0bd8a8bff822d8f784c642a0451fb5c8b2b80ae293b6b123a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/_master.twig", "search.twig", 1);
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
        // line 9
        echo "        <h1>
            ";
        // line 10
        if ( !twig_test_empty((isset($context["search"]) ? $context["search"] : null))) {
            // line 11
            echo "                ";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.search-results-for-variable", array("%search%" => (isset($context["search"]) ? $context["search"] : null)));
            echo "
            ";
        } else {
            // line 13
            echo "                ";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.search");
            echo "
            ";
        }
        // line 15
        echo "        </h1>

        ";
        // line 18
        echo "        ";
        $template_storage = $context['app']['storage'];
        $context['block'] =         $template_storage->getContent("block/search-teaser", array() );
        // line 19
        echo "
        ";
        // line 21
        echo "        ";
        if ($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "content", array(), "any", true, true)) {
            // line 22
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "content", array()), "html", null, true);
            echo "
        ";
        }
        // line 24
        echo "
        <form method=\"get\" action=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "root", array()), "html", null, true);
        echo "search\" id=\"searchform-inline\" enctype=\"text/plain\">
            <input type=\"search\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, ((array_key_exists("search", $context)) ? (_twig_default_filter((isset($context["search"]) ? $context["search"] : null))) : ("")), "html", null, true);
        echo "\" placeholder=\"";
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.search-ellipsis");
        echo "\" name=\"search\" >
            <button type=\"submit\" class=\"button\">";
        // line 27
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.search");
        echo "</button>
        </form>

        ";
        // line 30
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
            // line 31
            echo "            <article>

                <h2><a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "link", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "title", array()), "html", null, true);
            echo "</a></h2>

                ";
            // line 35
            if (($this->getAttribute($context["record"], "image", array()) != "")) {
                // line 36
                echo "                    <div class=\"large-4 imageholder\">
                        <a href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->image($this->getAttribute($context["record"], "image", array())), "html", null, true);
                echo "\">
                            <img src=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->thumbnail($this->getAttribute($context["record"], "image", array()), 400, 260), "html", null, true);
                echo "\">
                        </a>
                    </div>
                ";
            }
            // line 42
            echo "
                ";
            // line 44
            echo "                <p>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "excerpt", array(0 => 300, 1 => false, 2 => ((array_key_exists("search", $context)) ? (_twig_default_filter((isset($context["search"]) ? $context["search"] : null), "")) : (""))), "method"), "html", null, true);
            echo "</p>

            </article>

            ";
            // line 48
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                // line 49
                echo "                <hr>
            ";
            }
            // line 51
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
            // line 53
            echo "            <article>

                <p>
                    ";
            // line 56
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.no-result-for-search-term", array("%SEARCHTERM%" => twig_escape_filter($this->env, (isset($context["search"]) ? $context["search"] : null))));
            echo "
                </p>

            </article>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "
        ";
        // line 63
        echo "
";
    }

    public function getTemplateName()
    {
        return "search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 63,  182 => 61,  171 => 56,  166 => 53,  152 => 51,  148 => 49,  146 => 48,  138 => 44,  135 => 42,  128 => 38,  124 => 37,  121 => 36,  119 => 35,  112 => 33,  108 => 31,  90 => 30,  84 => 27,  78 => 26,  74 => 25,  71 => 24,  65 => 22,  62 => 21,  59 => 19,  55 => 18,  51 => 15,  45 => 13,  39 => 11,  37 => 10,  34 => 9,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "search.twig", "");
    }
}
