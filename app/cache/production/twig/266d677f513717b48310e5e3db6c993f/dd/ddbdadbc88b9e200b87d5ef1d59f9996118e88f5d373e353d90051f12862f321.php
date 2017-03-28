<?php

/* partials/_master.twig */
class __TwigTemplate_ee4f1a27075f351ff166a98b4d339f4a0e1ffcc0b1a6b4e695c9226fe3506ec2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'headincludes' => array($this, 'block_headincludes'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
            'bottomincludes' => array($this, 'block_bottomincludes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["main_width"] = (($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "layout", array(), "any", false, true), "main_width", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "layout", array(), "any", false, true), "main_width", array()), 8)) : (8));
        // line 2
        $context["aside_width"] = (($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "layout", array(), "any", false, true), "aside_width", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "layout", array(), "any", false, true), "aside_width", array()), 4)) : (4));
        // line 3
        echo "<!doctype html>
<html class=\"no-js\" lang=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->htmlLang(), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        ";
        // line 11
        echo "        <title>";
        // line 12
        if ($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, strip_tags($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title", array())), "html", null, true);
            echo " | ";
        }
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/sitename"), "method"), "html", null, true);
        // line 14
        if (( !$this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/payoff"), "method"))) {
            echo " | ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/payoff"), "method"), "html", null, true);
        }
        // line 15
        echo "</title> 
        ";
        // line 16
        $this->displayBlock('headincludes', $context, $blocks);
        // line 18
        echo "        <meta name=\"p:domain_verify\" content=\"c70be58aaaf7dee22b7f9d775c49c0cc\"/>
    </head>
    <body>

        ";
        // line 22
        $this->displayBlock('body', $context, $blocks);
        // line 61
        echo "
        ";
        // line 62
        echo twig_include($this->env, $context, "partials/_footer.twig");
        echo "

        ";
        // line 64
        $this->displayBlock('bottomincludes', $context, $blocks);
        // line 66
        echo "        
    </body>
</html>
";
    }

    // line 16
    public function block_headincludes($context, array $blocks = array())
    {
        // line 17
        echo "        ";
    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        // line 23
        echo "
            ";
        // line 24
        if (($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "layout", array()), "variant", array()) != "wide")) {
            // line 25
            echo "                <div class=\"row\">
            ";
        }
        // line 27
        echo "
            ";
        // line 28
        echo twig_include($this->env, $context, "partials/_topbar.twig");
        echo "
            ";
        // line 29
        echo twig_include($this->env, $context, "partials/_header.twig");
        echo "

            ";
        // line 31
        if (($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "layout", array()), "variant", array()) != "wide")) {
            // line 32
            echo "                </div>
            ";
        }
        // line 34
        echo "
            <div class=\"row\">
            
                ";
        // line 37
        if (($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "layout", array()), "aside", array()) == "left")) {
            // line 38
            echo "                    ";
            echo twig_include($this->env, $context, "partials/_aside.twig");
            echo "
                ";
        }
        // line 40
        echo "
                <div class=\"";
        // line 41
        if (!twig_in_filter($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "layout", array()), "aside", array()), array(0 => "left", 1 => "right"))) {
            echo "large-centered";
        }
        echo " large-";
        echo twig_escape_filter($this->env, (isset($context["main_width"]) ? $context["main_width"] : null), "html", null, true);
        echo " columns\">
                    
                    ";
        // line 43
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->widgets("main_top");
        echo "

                    ";
        // line 45
        $this->displayBlock('main', $context, $blocks);
        // line 47
        echo "
                    ";
        // line 48
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->widgets("main_bottom");
        echo "
                    
                    <hr />
                    
                </div>

                ";
        // line 54
        if (($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "layout", array()), "aside", array()) == "right")) {
            // line 55
            echo "                    ";
            echo twig_include($this->env, $context, "partials/_aside.twig");
            echo "
                ";
        }
        // line 57
        echo "
            </div>

        ";
    }

    // line 45
    public function block_main($context, array $blocks = array())
    {
        // line 46
        echo "                    ";
    }

    // line 64
    public function block_bottomincludes($context, array $blocks = array())
    {
        // line 65
        echo "        ";
    }

    public function getTemplateName()
    {
        return "partials/_master.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 65,  185 => 64,  181 => 46,  178 => 45,  171 => 57,  165 => 55,  163 => 54,  154 => 48,  151 => 47,  149 => 45,  144 => 43,  135 => 41,  132 => 40,  126 => 38,  124 => 37,  119 => 34,  115 => 32,  113 => 31,  108 => 29,  104 => 28,  101 => 27,  97 => 25,  95 => 24,  92 => 23,  89 => 22,  85 => 17,  82 => 16,  75 => 66,  73 => 64,  68 => 62,  65 => 61,  63 => 22,  57 => 18,  55 => 16,  52 => 15,  47 => 14,  45 => 13,  40 => 12,  38 => 11,  30 => 4,  27 => 3,  25 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "partials/_master.twig", "");
    }
}
