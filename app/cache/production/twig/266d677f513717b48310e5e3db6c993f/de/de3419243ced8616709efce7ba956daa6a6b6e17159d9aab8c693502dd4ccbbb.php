<?php

/* @bolt/dashboard/dashboard.twig */
class __TwigTemplate_de65e93a7b1a3c991bcf1467d7b3c1f70c388835dc7507db2361ab4ac72f04e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("@bolt/_base/_page-nav.twig", "@bolt/dashboard/dashboard.twig", 3);
        $this->blocks = array(
            'page_nav' => array($this, 'block_page_nav'),
            'page_title' => array($this, 'block_page_title'),
            'messages' => array($this, 'block_messages'),
            'page_main' => array($this, 'block_page_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@bolt/_base/_page-nav.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_page_nav($context, array $blocks = array())
    {
        echo "Dashboard";
    }

    // line 7
    public function block_page_title($context, array $blocks = array())
    {
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.dashboard.title");
    }

    // line 10
    public function block_messages($context, array $blocks = array())
    {
        echo "";
    }

    // line 12
    public function block_page_main($context, array $blocks = array())
    {
        // line 13
        echo "
    <div class=\"row\">
        <div class=\"col-md-8\">

            ";
        // line 17
        echo twig_include($this->env, $context, "@bolt/_sub/_messages.twig");
        echo "

            ";
        // line 19
        if ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "suggestloripsum", array())) {
            // line 20
            echo "                ";
            echo twig_include($this->env, $context, "@bolt/dashboard/_suggestloripsum.twig");
            echo "
            ";
        }
        // line 22
        echo "
            ";
        // line 23
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->widgets("dashboard_below_header", "backend");
        echo "

            <div class=\"quicklinks\">
                ";
        // line 26
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "contenttypes"), "method")) > 3)) {
            // line 27
            echo "                    ";
            echo twig_include($this->env, $context, "@bolt/dashboard/_quicklinks-dropdown.twig");
            echo "
                ";
        } else {
            // line 29
            echo "                    ";
            echo twig_include($this->env, $context, "@bolt/dashboard/_quicklinks-buttons.twig");
            echo "
                ";
        }
        // line 31
        echo "            </div>

            ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "latest", array()));
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
        foreach ($context['_seq'] as $context["contenttype"] => $context["multiplecontent"]) {
            // line 34
            echo "                ";
            if ($context["multiplecontent"]) {
                // line 35
                echo "                    ";
                echo twig_include($this->env, $context, "@bolt/dashboard/_recently_edited.twig");
                echo "
                ";
            }
            // line 37
            echo "            ";
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
        unset($context['_seq'], $context['_iterated'], $context['contenttype'], $context['multiplecontent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
            ";
        // line 39
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->widgets("dashboard_bottom", "backend");
        echo "

        </div>

        <aside class=\"col-md-4\">
            ";
        // line 44
        echo twig_include($this->env, $context, "@bolt/dashboard/_aside.twig");
        echo "
        </aside>

    </div>

";
    }

    public function getTemplateName()
    {
        return "@bolt/dashboard/dashboard.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 44,  141 => 39,  138 => 38,  124 => 37,  118 => 35,  115 => 34,  98 => 33,  94 => 31,  88 => 29,  82 => 27,  80 => 26,  74 => 23,  71 => 22,  65 => 20,  63 => 19,  58 => 17,  52 => 13,  49 => 12,  43 => 10,  37 => 7,  31 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@bolt/dashboard/dashboard.twig", "");
    }
}
