<?php

/* @bolt/exception/exception.twig */
class __TwigTemplate_1a05bac19e5cec62da595adc19cc1a3536a8cb97b2dd546e6852fbbb8aa63fde extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page_plain' => array($this, 'block_page_plain'),
            'page_main' => array($this, 'block_page_main'),
            'title' => array($this, 'block_title'),
            'exception' => array($this, 'block_exception'),
            'trace' => array($this, 'block_trace'),
            'request' => array($this, 'block_request'),
            'tracedumps' => array($this, 'block_tracedumps'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0\">

    <title>Uncaught Exception: ";
        // line 8
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "class_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "class_name", array()), "unknown")) : ("unknown")), "html", null, true);
        echo "</title>

    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bolt.css", "bolt"), "html", null, true);
        echo "\">
    ";
        // line 11
        if (((isset($context["debug"]) ? $context["debug"] : null) && $this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "snippet", array(), "any", true, true))) {
            // line 12
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bolt_exception.css", "bolt"), "html", null, true);
            echo "\">
        <script src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.2.4.min.js", "bolt"), "html", null, true);
            echo "\" defer></script>
        <script src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bolt_exception.js", "bolt"), "html", null, true);
            echo "\" defer></script>
    ";
        }
        // line 16
        echo "</head>

<body class=\"login exception\">

    ";
        // line 20
        $this->displayBlock('page_plain', $context, $blocks);
        // line 96
        echo "
</body>
</html>

";
        // line 100
        $this->displayBlock('tracedumps', $context, $blocks);
    }

    // line 20
    public function block_page_plain($context, array $blocks = array())
    {
        // line 21
        echo "    <div class=\"container\">

        <div class=\"row\">
            <div class=\"";
        // line 24
        echo twig_escape_filter($this->env, ((array_key_exists("form_class", $context)) ? (_twig_default_filter((isset($context["form_class"]) ? $context["form_class"] : null), "col-md-10 col-md-offset-1 col-sm-12")) : ("col-md-10 col-md-offset-1 col-sm-12")), "html", null, true);
        echo "\">

                <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bolt-logo.png", "bolt"), "html", null, true);
        echo "\" width=\"100\" height=\"41\" alt=\"Bolt\" class=\"logo\">

                <div class=\"panel panel-default\">
                    <div class=\"panel-body\">
                        ";
        // line 30
        $this->displayBlock('page_main', $context, $blocks);
        // line 89
        echo "                    </div>
                </div>

            </div>
        </div>
    </div>
    ";
    }

    // line 30
    public function block_page_main($context, array $blocks = array())
    {
        // line 31
        echo "                        <div class=\"row\">
                            ";
        // line 33
        echo "
                            ";
        // line 34
        $this->displayBlock('title', $context, $blocks);
        // line 37
        echo "
                            ";
        // line 38
        $this->displayBlock('exception', $context, $blocks);
        // line 40
        echo "
                            <p class='exception'>
                                <tt><abbr title=\"";
        // line 42
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "class_fqn", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "class_fqn", array()), "unknown")) : ("unknown")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "class_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "class_name", array()), "unknown")) : ("unknown")), "html", null, true);
        echo "</abbr></tt> in <tt>";
        if ((isset($context["debug"]) ? $context["debug"] : null)) {
            echo "<abbr title=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "file_path", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "file_path", array()), "unknown")) : ("unknown")), "html", null, true);
            echo "\">";
        }
        // line 43
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "file_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "file_name", array()), "unknown")) : ("unknown")), "html", null, true);
        if ((isset($context["debug"]) ? $context["debug"] : null)) {
            echo "</abbr>";
        }
        echo "</tt> line <tt>";
        // line 44
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "object", array(), "any", false, true), "line", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "object", array(), "any", false, true), "line", array()), "unknown")) : ("unknown")), "html", null, true);
        echo "</tt>: <br>
                                <em><strong>";
        // line 45
        echo nl2br(twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "object", array(), "any", false, true), "message", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "object", array(), "any", false, true), "message", array()), "unknown")) : ("unknown")), "html", null, true));
        echo "</strong></em>
                            </p>

                            ";
        // line 48
        if (((isset($context["debug"]) ? $context["debug"] : null) && $this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "snippet", array(), "any", true, true))) {
            // line 49
            echo "<pre class='line-numbers' data-start='";
            echo twig_escape_filter($this->env, max(($this->getAttribute($this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "object", array()), "line", array()) - 5), 1), "html", null, true);
            echo "' data-line='6'><code class='language-php'>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "snippet", array()), "html", null, true);
            // line 51
            echo "</code></pre>";
        }
        // line 53
        echo "
                            <p class='exception'>
                                ";
        // line 56
        echo "                                ";
        $context["query"] = ((((((("Bolt " . (($this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "class_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "class_name", array()), "unknown")) : ("unknown"))) . " in ") . (($this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "file_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "file_name", array()), "unknown")) : ("unknown"))) . " line ") . (($this->getAttribute($this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "object", array(), "any", false, true), "line", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "object", array(), "any", false, true), "line", array()), "unknown")) : ("unknown"))) . ": ") . (($this->getAttribute($this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "object", array(), "any", false, true), "message", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "object", array(), "any", false, true), "message", array()), "unknown")) : ("unknown")));
        // line 57
        echo "                                <a class='btn btn-default' href='https://www.google.com/search?q=";
        echo twig_escape_filter($this->env, twig_urlencode_filter((isset($context["query"]) ? $context["query"] : null)), "html", null, true);
        echo "' target='_blank'>Google this Exception</a>
                            </p>

                            ";
        // line 60
        $this->displayBlock('trace', $context, $blocks);
        // line 65
        echo "
                            <hr>

                            ";
        // line 68
        $this->displayBlock('request', $context, $blocks);
        // line 74
        echo "
                            ";
        // line 75
        if ( !(isset($context["debug"]) ? $context["debug"] : null)) {
            // line 76
            echo "                                <p>Debug is not available, and/or you are not logged on. To see a full backtrace of the
                                    Exception, do one of the following: </p>

                                <ul>
                                    <li>Set <tt>debug: true</tt> in <tt>config.yml</tt>, and make sure you're logged in
                                        to the Bolt Backend.</li>
                                    <li>Set both <tt>debug: true</tt> and <tt>debug_show_loggedoff: true</tt> in
                                        <tt>config.yml</tt>.
                                </ul>
                            ";
        }
        // line 86
        echo "
                        </div>
                        ";
    }

    // line 34
    public function block_title($context, array $blocks = array())
    {
        // line 35
        echo "                                <h1>Uncaught Exception: ";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "class_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "class_name", array()), "unknown")) : ("unknown")), "html", null, true);
        echo "</h1>
                            ";
    }

    // line 38
    public function block_exception($context, array $blocks = array())
    {
        // line 39
        echo "                            ";
    }

    // line 60
    public function block_trace($context, array $blocks = array())
    {
        // line 61
        echo "                                ";
        if ((isset($context["debug"]) ? $context["debug"] : null)) {
            // line 62
            echo "                                    ";
            echo twig_include($this->env, $context, "@bolt/exception/_trace.twig");
            echo "
                                ";
        }
        // line 64
        echo "                            ";
    }

    // line 68
    public function block_request($context, array $blocks = array())
    {
        // line 69
        echo "                                ";
        if (((isset($context["debug"]) ? $context["debug"] : null) && array_key_exists("request", $context))) {
            // line 70
            echo "                                    <hr>
                                    ";
            // line 71
            echo twig_include($this->env, $context, "@bolt/exception/_request.twig");
            echo "
                                ";
        }
        // line 73
        echo "                            ";
    }

    // line 100
    public function block_tracedumps($context, array $blocks = array())
    {
        // line 101
        echo "    ";
        if ((isset($context["debug"]) ? $context["debug"] : null)) {
            // line 102
            echo "        ";
            echo twig_include($this->env, $context, "@bolt/exception/_tracedumps.twig");
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "@bolt/exception/exception.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 102,  267 => 101,  264 => 100,  260 => 73,  255 => 71,  252 => 70,  249 => 69,  246 => 68,  242 => 64,  236 => 62,  233 => 61,  230 => 60,  226 => 39,  223 => 38,  216 => 35,  213 => 34,  207 => 86,  195 => 76,  193 => 75,  190 => 74,  188 => 68,  183 => 65,  181 => 60,  174 => 57,  171 => 56,  167 => 53,  164 => 51,  162 => 50,  158 => 49,  156 => 48,  150 => 45,  146 => 44,  140 => 43,  130 => 42,  126 => 40,  124 => 38,  121 => 37,  119 => 34,  116 => 33,  113 => 31,  110 => 30,  100 => 89,  98 => 30,  91 => 26,  86 => 24,  81 => 21,  78 => 20,  74 => 100,  68 => 96,  66 => 20,  60 => 16,  55 => 14,  51 => 13,  46 => 12,  44 => 11,  40 => 10,  35 => 8,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@bolt/exception/exception.twig", "");
    }
}
