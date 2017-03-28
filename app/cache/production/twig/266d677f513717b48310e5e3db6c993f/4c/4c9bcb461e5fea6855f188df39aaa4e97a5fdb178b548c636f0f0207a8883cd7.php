<?php

/* page.twig */
class __TwigTemplate_0badfdba8f2cad6b1a13d0c9efaac20022bb72d0d36ce47131286b22547dc316 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/_master.twig", "page.twig", 1);
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
    <h1>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title", array()), "html", null, true);
        echo "</h1>

    ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "teaser", array()), "html", null, true);
        echo "

    ";
        // line 9
        if (($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "image", array()) != "")) {
            // line 10
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->image($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "image", array())), "html", null, true);
            echo "\">
            <img src=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->thumbnail($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "image", array()), 740, 560), "html", null, true);
            echo "\">
        </a>
    ";
        }
        // line 14
        echo "
    ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "body", array()), "html", null, true);
        echo "

    ";
        // line 18
        echo "    ";
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->fields($this->env, null, false, false, true);
        echo "

    ";
        // line 23
        echo "
    ";
        // line 24
        echo twig_include($this->env, $context, "partials/_recordfooter.twig", array("record" => (isset($context["record"]) ? $context["record"] : null), "extended" => true));
        echo "

    <hr />
    
    <h3>Share</h3>
    <!-- Twitter -->
    <a href=\"https://twitter.com/share?url=";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "uri", array()), "html", null, true);
        echo "&amp;text=";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title", array()), "html", null, true);
        echo "&amp;hashtags=";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "taxonomy", array()));
        foreach ($context['_seq'] as $context["type"] => $context["values"]) {
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["values"]);
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
            foreach ($context['_seq'] as $context["link"] => $context["value"]) {
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ",";
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
            unset($context['_seq'], $context['_iterated'], $context['link'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['values'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "\" target=\"_blank\">
        <img class=\"share\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()) . "images/icon/"), "html", null, true);
        echo "twitter.png\" alt=\"Twitter\" />
    </a>

    <!-- Facebook -->
    <a href=\"http://www.facebook.com/sharer.php?u=";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "uri", array()), "html", null, true);
        echo "\" target=\"_blank\">
        <img class=\"share\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()) . "images/icon/"), "html", null, true);
        echo "facebook.png\" alt=\"Facebook\" />
    </a>

    <!-- Google+ -->
    <a href=\"https://plus.google.com/share?url=";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "uri", array()), "html", null, true);
        echo "\" target=\"_blank\">
        <img class=\"share\" src=\"";
        // line 41
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()) . "images/icon/"), "html", null, true);
        echo "google.png\" alt=\"Google\" />
    </a>

    <!-- Pinterest -->
    <a href=\"http://pinterest.com/pin/create/button/?url=";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "uri", array()), "html", null, true);
        echo "\">
        <img class=\"share\" src=\"";
        // line 46
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()) . "images/icon/"), "html", null, true);
        echo "pinterest.png\" alt=\"Pinterest\" />
    </a>
    
    <!-- Tumblr-->
    <a href=\"http://www.tumblr.com/share/link?url=";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "uri", array()), "html", null, true);
        echo "&amp;title=";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title", array()), "html", null, true);
        echo "\" target=\"_blank\">
        <img class=\"share\" src=\"";
        // line 51
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()) . "images/icon/"), "html", null, true);
        echo "tumblr.png\" alt=\"Tumblr\" />
    </a>

    <!-- Buffer -->
    <a href=\"https://bufferapp.com/add?url=";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "uri", array()), "html", null, true);
        echo "&amp;text=";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title", array()), "html", null, true);
        echo "\" target=\"_blank\">
        <img class=\"share\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()) . "images/icon/"), "html", null, true);
        echo "buffer.png\" alt=\"Buffer\" />
    </a>
    
    <!-- Digg -->
    <a href=\"http://www.digg.com/submit?url=";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "uri", array()), "html", null, true);
        echo "\" target=\"_blank\">
        <img class=\"share\" src=\"";
        // line 61
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()) . "images/icon/"), "html", null, true);
        echo "diggit.png\" alt=\"Digg\" />
    </a>    
    
    <!-- LinkedIn -->
    <a href=\"http://www.linkedin.com/shareArticle?mini=true&amp;url=";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "uri", array()), "html", null, true);
        echo "\" target=\"_blank\">
        <img class=\"share\" src=\"";
        // line 66
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()) . "images/icon/"), "html", null, true);
        echo "linkedin.png\" alt=\"LinkedIn\" />
    </a>
            
    <!-- Reddit -->
    <a href=\"http://reddit.com/submit?url=";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "uri", array()), "html", null, true);
        echo "&amp;title=";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title", array()), "html", null, true);
        echo "\" target=\"_blank\">
        <img class=\"share\" src=\"";
        // line 71
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()) . "images/icon/"), "html", null, true);
        echo "reddit.png\" alt=\"Reddit\" />
    </a>
    
    <!-- StumbleUpon-->
    <a href=\"http://www.stumbleupon.com/submit?url=";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "uri", array()), "html", null, true);
        echo "&amp;title=";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title", array()), "html", null, true);
        echo "\" target=\"_blank\">
        <img class=\"share\" src=\"";
        // line 76
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()) . "images/icon/"), "html", null, true);
        echo "stumbleupon.png\" alt=\"StumbleUpon\" />
    </a>     
    
    <!-- VK -->
    <a href=\"http://vkontakte.ru/share.php?url=";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "uri", array()), "html", null, true);
        echo "\" target=\"_blank\">
        <img class=\"share\" src=\"";
        // line 81
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()) . "images/icon/"), "html", null, true);
        echo "vk.png\" alt=\"VK\" />
    </a>
    
    <!-- Yummly -->
    <a href=\"http://www.yummly.com/urb/verify?url=";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "uri", array()), "html", null, true);
        echo "&amp;title=";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title", array()), "html", null, true);
        echo "\" target=\"_blank\">
        <img class=\"share\" src=\"";
        // line 86
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()) . "images/icon/"), "html", null, true);
        echo "yummly.png\" alt=\"Yummly\" />
    </a>

    <!-- Email -->
    <a href=\"mailto:?Subject=";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title", array()), "html", null, true);
        echo "&amp;Body=I%20saw%20this%20and%20thought%20of%20you!%20 ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "uri", array()), "html", null, true);
        echo "\">
        <img class=\"share\" src=\"";
        // line 91
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()) . "images/icon/"), "html", null, true);
        echo "email.png\" alt=\"Email\" />
    </a>
      
    <!-- Print -->
    <a href=\"javascript:;\" onclick=\"window.print()\">
        <img class=\"share\" src=\"";
        // line 96
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()) . "images/icon/"), "html", null, true);
        echo "print.png\" alt=\"Print\" />
    </a>
  
";
    }

    public function getTemplateName()
    {
        return "page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 96,  273 => 91,  267 => 90,  260 => 86,  254 => 85,  247 => 81,  243 => 80,  236 => 76,  230 => 75,  223 => 71,  217 => 70,  210 => 66,  206 => 65,  199 => 61,  195 => 60,  188 => 56,  182 => 55,  175 => 51,  169 => 50,  162 => 46,  158 => 45,  151 => 41,  147 => 40,  140 => 36,  136 => 35,  129 => 31,  83 => 30,  74 => 24,  71 => 23,  65 => 18,  60 => 15,  57 => 14,  51 => 11,  46 => 10,  44 => 9,  39 => 7,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "page.twig", "");
    }
}
