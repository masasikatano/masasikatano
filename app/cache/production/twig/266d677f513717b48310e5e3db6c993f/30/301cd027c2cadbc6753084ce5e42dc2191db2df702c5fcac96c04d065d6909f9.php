<?php

/* @bolt/_base/_page-nav.twig */
class __TwigTemplate_e9973f3c9079eec2aaff62794d1ac0761b5d767a656b2492c65b1b7d73f34849 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 10
        $this->parent = $this->loadTemplate("@bolt/_base/_page.twig", "@bolt/_base/_page-nav.twig", 10);
        $this->blocks = array(
            'page_plain' => array($this, 'block_page_plain'),
            'messages' => array($this, 'block_messages'),
            'page_main' => array($this, 'block_page_main'),
            'page_main_extra_content' => array($this, 'block_page_main_extra_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@bolt/_base/_page.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 12
        $context["page_bodyclass"] = "";
        // line 14
        $context["page_hasnav"] = true;
        // line 16
        $context["page_nav"] = _twig_default_filter(        $this->renderBlock("page_nav", $context, $blocks), "NO NAV");
        // line 10
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 18
    public function block_page_plain($context, array $blocks = array())
    {
        // line 19
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("omnisearch.placeholder", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.find")), "html", null, true);
        echo "

    <div id=\"navpage-wrapper\"";
        // line 21
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "cookies", array()), "get", array(0 => "sidebar"), "method")) {
            echo " class=\"nav-secondary-collapsed nav-secondary-collapsed-hoverable\"";
        }
        echo ">
        <nav id=\"navpage-primary\" class=\"navbar navbar-static-top navbar-inverse navbar-bolt\">
            <div class=\"container-fluid\">
                ";
        // line 24
        echo twig_include($this->env, $context, "@bolt/_nav/_primary.twig");
        echo "
            </div>
        </nav>

        <nav id=\"navpage-secondary\" class=\"navbar-default navbar-static-side\">
            ";
        // line 29
        echo twig_include($this->env, $context, "@bolt/_nav/_secondary.twig");
        echo "
        </nav>

        <div id=\"navpage-content\" class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <h1 class=\"page-header\">
                        ";
        // line 36
        if (twig_test_empty(        $this->renderBlock("page_subtitle", $context, $blocks))) {
            // line 37
            echo "                            <strong>";
            $this->displayBlock("page_title", $context, $blocks);
            echo "</strong>
                        ";
        } else {
            // line 39
            echo "                            <strong>";
            $this->displayBlock("page_title", $context, $blocks);
            echo " »</strong>
                            <i style=\"font-style: normal;\">";
            // line 40
            $this->displayBlock("page_subtitle", $context, $blocks);
            echo "</i>
                        ";
        }
        // line 42
        echo "
                        ";
        // line 44
        echo "                        ";
        if (array_key_exists("pager", $context)) {
            // line 45
            echo "                            ";
            $context["pager_ct"] = $this->getAttribute((isset($context["pager"]) ? $context["pager"] : null), $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array()), array(), "array");
            // line 46
            echo "                            ";
            if (((isset($context["pager_ct"]) ? $context["pager_ct"] : null) && ($this->getAttribute((isset($context["pager_ct"]) ? $context["pager_ct"] : null), "totalpages", array()) > 1))) {
                // line 47
                echo "                                <span>
                                    ";
                // line 48
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.showing");
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pager_ct"]) ? $context["pager_ct"] : null), "showing_from", array()), "html", null, true);
                echo " -
                                    ";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pager_ct"]) ? $context["pager_ct"] : null), "showing_to", array()), "html", null, true);
                echo " ";
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.of");
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pager_ct"]) ? $context["pager_ct"] : null), "count", array()), "html", null, true);
                echo "
                                </span>
                            ";
            }
            // line 52
            echo "                        ";
        }
        // line 53
        echo "
                    </h1>
                </div>
            </div>

            ";
        // line 58
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->widgets("below_header", "backend");
        echo "

            ";
        // line 60
        $this->displayBlock('messages', $context, $blocks);
        // line 63
        echo "
            ";
        // line 64
        $this->displayBlock('page_main', $context, $blocks);
        // line 65
        echo "
            ";
        // line 66
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->widgets("footer", "backend");
        echo "

        </div>

        ";
        // line 70
        $this->displayBlock('page_main_extra_content', $context, $blocks);
        // line 72
        echo "
    </div>

    ";
        // line 76
        echo "    ";
        echo twig_include($this->env, $context, "@bolt/_nav/_footer.twig");
        echo "

";
    }

    // line 60
    public function block_messages($context, array $blocks = array())
    {
        // line 61
        echo "                ";
        echo twig_include($this->env, $context, "@bolt/_sub/_messages.twig", array("wrapper" => true));
        echo "
            ";
    }

    // line 64
    public function block_page_main($context, array $blocks = array())
    {
        echo "[PAGE_MAIN]";
    }

    // line 70
    public function block_page_main_extra_content($context, array $blocks = array())
    {
        // line 71
        echo "        ";
    }

    public function getTemplateName()
    {
        return "@bolt/_base/_page-nav.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 71,  185 => 70,  179 => 64,  172 => 61,  169 => 60,  161 => 76,  156 => 72,  154 => 70,  147 => 66,  144 => 65,  142 => 64,  139 => 63,  137 => 60,  132 => 58,  125 => 53,  122 => 52,  112 => 49,  106 => 48,  103 => 47,  100 => 46,  97 => 45,  94 => 44,  91 => 42,  86 => 40,  81 => 39,  75 => 37,  73 => 36,  63 => 29,  55 => 24,  47 => 21,  41 => 19,  38 => 18,  34 => 10,  32 => 16,  30 => 14,  28 => 12,  11 => 10,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@bolt/_base/_page-nav.twig", "");
    }
}
