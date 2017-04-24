<?php

/* @bolt/_base/_page.twig */
class __TwigTemplate_0e655e6ba122211741c405b05868401316f42c4e6dd687ccb63b0125b3fa2606 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page_plain' => array($this, 'block_page_plain'),
            'page_script' => array($this, 'block_page_script'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 12
        ob_start();
        // line 13
        echo "
";
        // line 14
        $context["page_locale_long"] = $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "locale", array());
        // line 15
        $context["page_locale_short"] = twig_slice($this->env, (isset($context["page_locale_long"]) ? $context["page_locale_long"] : null), 0, 2);
        // line 16
        $context["page_timezone_offset"] = $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "timezone_offset", array());
        // line 17
        echo "
";
        // line 18
        if (twig_test_empty(        $this->renderBlock("page_subtitle", $context, $blocks))) {
            // line 19
            echo "    ";
            $context["page_title"] =             $this->renderBlock("page_title", $context, $blocks);
        } else {
            // line 21
            echo "    ";
            $context["page_title"] = ((            $this->renderBlock("page_title", $context, $blocks) . " » ") .             $this->renderBlock("page_subtitle", $context, $blocks));
        }
        // line 23
        echo "
";
        // line 25
        $context["page_scripts_inc"] = array(0 => "js/lib.js");
        // line 28
        echo "
";
        // line 30
        $context["localepath"] = "js/locale/datepicker/";
        // line 31
        if ($this->env->getExtension('Bolt\Twig\TwigExtension')->fileExists((((($this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "viewpath", array()) . "/") . (isset($context["localepath"]) ? $context["localepath"] : null)) . (isset($context["page_locale_long"]) ? $context["page_locale_long"] : null)) . ".min.js"))) {
            // line 32
            echo "    ";
            $context["page_scripts_inc"] = twig_array_merge((isset($context["page_scripts_inc"]) ? $context["page_scripts_inc"] : null), array(0 => (((isset($context["localepath"]) ? $context["localepath"] : null) . (isset($context["page_locale_long"]) ? $context["page_locale_long"] : null)) . ".min.js")));
        } elseif (((        // line 33
(isset($context["page_locale_short"]) ? $context["page_locale_short"] : null) != "en") && $this->env->getExtension('Bolt\Twig\TwigExtension')->fileExists((((($this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "viewpath", array()) . "/") . (isset($context["localepath"]) ? $context["localepath"] : null)) . (isset($context["page_locale_short"]) ? $context["page_locale_short"] : null)) . ".min.js")))) {
            // line 34
            echo "    ";
            $context["page_scripts_inc"] = twig_array_merge((isset($context["page_scripts_inc"]) ? $context["page_scripts_inc"] : null), array(0 => (((isset($context["localepath"]) ? $context["localepath"] : null) . (isset($context["page_locale_short"]) ? $context["page_locale_short"] : null)) . ".min.js")));
        }
        // line 36
        echo "
";
        // line 38
        $context["localepath"] = "js/locale/moment/";
        // line 39
        if ($this->env->getExtension('Bolt\Twig\TwigExtension')->fileExists((((($this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "viewpath", array()) . "/") . (isset($context["localepath"]) ? $context["localepath"] : null)) . (isset($context["page_locale_long"]) ? $context["page_locale_long"] : null)) . ".min.js"))) {
            // line 40
            echo "    ";
            $context["page_scripts_inc"] = twig_array_merge((isset($context["page_scripts_inc"]) ? $context["page_scripts_inc"] : null), array(0 => (((isset($context["localepath"]) ? $context["localepath"] : null) . (isset($context["page_locale_long"]) ? $context["page_locale_long"] : null)) . ".min.js")));
        } elseif (((        // line 41
(isset($context["page_locale_short"]) ? $context["page_locale_short"] : null) != "en") && $this->env->getExtension('Bolt\Twig\TwigExtension')->fileExists((((($this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "viewpath", array()) . "/") . (isset($context["localepath"]) ? $context["localepath"] : null)) . (isset($context["page_locale_short"]) ? $context["page_locale_short"] : null)) . ".min.js")))) {
            // line 42
            echo "    ";
            $context["page_scripts_inc"] = twig_array_merge((isset($context["page_scripts_inc"]) ? $context["page_scripts_inc"] : null), array(0 => (((isset($context["localepath"]) ? $context["localepath"] : null) . (isset($context["page_locale_short"]) ? $context["page_locale_short"] : null)) . ".min.js")));
        }
        // line 44
        echo "
";
        // line 46
        $context["localepath"] = "js/locale/select2/";
        // line 47
        if ($this->env->getExtension('Bolt\Twig\TwigExtension')->fileExists((((($this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "viewpath", array()) . "/") . (isset($context["localepath"]) ? $context["localepath"] : null)) . (isset($context["page_locale_long"]) ? $context["page_locale_long"] : null)) . ".min.js"))) {
            // line 48
            echo "    ";
            $context["page_scripts_inc"] = twig_array_merge((isset($context["page_scripts_inc"]) ? $context["page_scripts_inc"] : null), array(0 => (((isset($context["localepath"]) ? $context["localepath"] : null) . (isset($context["page_locale_long"]) ? $context["page_locale_long"] : null)) . ".min.js")));
        } elseif (((        // line 49
(isset($context["page_locale_short"]) ? $context["page_locale_short"] : null) != "en") && $this->env->getExtension('Bolt\Twig\TwigExtension')->fileExists((((($this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "viewpath", array()) . "/") . (isset($context["localepath"]) ? $context["localepath"] : null)) . (isset($context["page_locale_short"]) ? $context["page_locale_short"] : null)) . ".min.js")))) {
            // line 50
            echo "    ";
            $context["page_scripts_inc"] = twig_array_merge((isset($context["page_scripts_inc"]) ? $context["page_scripts_inc"] : null), array(0 => (((isset($context["localepath"]) ? $context["localepath"] : null) . (isset($context["page_locale_short"]) ? $context["page_locale_short"] : null)) . ".min.js")));
        }
        // line 52
        echo "
";
        // line 54
        $context["localepath"] = "js/locale/ckeditor/";
        // line 55
        $context["page_locale_long_bcp47"] = twig_lower_filter($this->env, twig_replace_filter((isset($context["page_locale_long"]) ? $context["page_locale_long"] : null), "_", "-"));
        // line 56
        if ($this->env->getExtension('Bolt\Twig\TwigExtension')->fileExists((((($this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "viewpath", array()) . "/") . (isset($context["localepath"]) ? $context["localepath"] : null)) . (isset($context["page_locale_long_bcp47"]) ? $context["page_locale_long_bcp47"] : null)) . ".js"))) {
            // line 57
            echo "    ";
            $context["ckeditor_lang"] = (isset($context["page_locale_long_bcp47"]) ? $context["page_locale_long_bcp47"] : null);
        } else {
            // line 59
            echo "    ";
            $context["ckeditor_lang"] = (isset($context["page_locale_short"]) ? $context["page_locale_short"] : null);
        }
        // line 61
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 64
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["page_locale_short"]) ? $context["page_locale_short"] : null), "html", null, true);
        echo "\">
<head>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0\">

    <title>";
        // line 71
        echo twig_trim_filter(strip_tags((isset($context["page_title"]) ? $context["page_title"] : null)));
        echo " – ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/branding/name"), "method"), "html", null, true);
        echo "</title>

    <link rel=\"stylesheet\" href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/lib.css", "bolt"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bolt.css", "bolt"), "html", null, true);
        echo "\">

    ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["page_scripts_inc"]) ? $context["page_scripts_inc"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 77
            echo "<script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["script"], "bolt"), "html", null, true);
            echo "\"></script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "
    <link rel=\"shortcut icon\" href=\"";
        // line 80
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/branding/favicon"), "method")) ? ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/branding/favicon"), "method")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/favicon-bolt.ico", "bolt"))), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"";
        // line 81
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/branding/apple-touch-icon"), "method")) ? ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/branding/apple-touch-icon"), "method")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/apple-touch-icon.png", "bolt"))), "html", null, true);
        echo "\">
    ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "72x72", 1 => "114x114", 2 => "144x144"));
        foreach ($context['_seq'] as $context["_key"] => $context["size"]) {
            // line 83
            echo "        <link rel=\"apple-touch-icon\" sizes=\"";
            echo twig_escape_filter($this->env, $context["size"], "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => ("general/branding/apple-touch-icon-" . $context["size"])), "method")) ? ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => ("general/branding/apple-touch-icon-" . $context["size"])), "method")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("img/apple-touch-icon-" . $context["size"]) . ".png"), "bolt"))), "html", null, true);
            echo "\">
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['size'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "</head>

<body";
        // line 87
        if ((isset($context["page_bodyclass"]) ? $context["page_bodyclass"] : null)) {
            echo " class=\"";
            echo twig_escape_filter($this->env, (isset($context["page_bodyclass"]) ? $context["page_bodyclass"] : null), "html", null, true);
            echo "\"";
        }
        echo ">

    ";
        // line 89
        $this->displayBlock('page_plain', $context, $blocks);
        // line 90
        echo "
";
        // line 91
        $context["bconfig"] = array("locale" => array("short" =>         // line 93
(isset($context["page_locale_short"]) ? $context["page_locale_short"] : null), "long" =>         // line 94
(isset($context["page_locale_long"]) ? $context["page_locale_long"] : null)), "timezone" => array("offset" =>         // line 97
(isset($context["page_timezone_offset"]) ? $context["page_timezone_offset"] : null)), "buid" => $this->env->getExtension('Bolt\Twig\TwigExtension')->buid(), "paths" => array("bolt" => $this->getAttribute(        // line 101
(isset($context["paths"]) ? $context["paths"] : null), "bolt", array()), "async" => $this->getAttribute(        // line 102
(isset($context["paths"]) ? $context["paths"] : null), "async", array()), "app" => $this->getAttribute(        // line 103
(isset($context["paths"]) ? $context["paths"] : null), "app", array()), "root" => $this->getAttribute(        // line 104
(isset($context["paths"]) ? $context["paths"] : null), "root", array()), "origin" => $this->getAttribute(        // line 105
(isset($context["paths"]) ? $context["paths"] : null), "rooturl", array())), "uploadConfig" => array("maxSize" => $this->getAttribute($this->getAttribute(        // line 108
(isset($context["app"]) ? $context["app"] : null), "filepermissions", array(), "array"), "getMaxUploadSize", array(), "method"), "maxSizeNice" => $this->getAttribute($this->getAttribute(        // line 109
(isset($context["app"]) ? $context["app"] : null), "filepermissions", array(), "array"), "getMaxUploadSizeNice", array(), "method")), "ckeditor" => array("lang" =>         // line 112
(isset($context["ckeditor_lang"]) ? $context["ckeditor_lang"] : null), "images" => (0 + $this->getAttribute(        // line 113
(isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/images"), "method")), "styles" => (0 + $this->getAttribute(        // line 114
(isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/styles"), "method")), "tables" => (0 + $this->getAttribute(        // line 115
(isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/tables"), "method")), "anchor" => (0 + $this->getAttribute(        // line 116
(isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/anchor"), "method")), "fontcolor" => (0 + $this->getAttribute(        // line 117
(isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/fontcolor"), "method")), "align" => (0 + $this->getAttribute(        // line 118
(isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/align"), "method")), "subsuper" => (0 + $this->getAttribute(        // line 119
(isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/subsuper"), "method")), "embed" => (0 + $this->getAttribute(        // line 120
(isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/embed"), "method")), "blockquote" => (0 + $this->getAttribute(        // line 121
(isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/blockquote"), "method")), "ruler" => (0 + $this->getAttribute(        // line 122
(isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/ruler"), "method")), "strike" => (0 + $this->getAttribute(        // line 123
(isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/strike"), "method")), "underline" => (0 + $this->getAttribute(        // line 124
(isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/underline"), "method")), "codesnippet" => (0 + $this->getAttribute(        // line 125
(isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/codesnippet"), "method")), "specialchar" => (0 + $this->getAttribute(        // line 126
(isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/specialchar"), "method")), "ck" => ((twig_test_iterable($this->getAttribute(        // line 127
(isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/ck"), "method"))) ? ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/ck"), "method")) : (false)), "filebrowser" => ((twig_test_iterable($this->getAttribute(        // line 128
(isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/filebrowser"), "method"))) ? ($this->getAttribute(        // line 129
(isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/wysiwyg/filebrowser"), "method")) : (false))), "google_api_key" => $this->getAttribute(        // line 131
(isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/google_api_key"), "method"));
        // line 133
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bolt.js", "bolt"), "html", null, true);
        echo "\" data-config=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["bconfig"]) ? $context["bconfig"] : null)), "html", null, true);
        echo "\" data-jsdata=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "jsdata", array())), "html", null, true);
        echo "\"></script>

";
        // line 135
        $this->displayBlock('page_script', $context, $blocks);
        // line 137
        echo "
</body>
</html>
";
    }

    // line 89
    public function block_page_plain($context, array $blocks = array())
    {
    }

    // line 135
    public function block_page_script($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "@bolt/_base/_page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 135,  254 => 89,  247 => 137,  245 => 135,  235 => 133,  233 => 131,  232 => 129,  231 => 128,  230 => 127,  229 => 126,  228 => 125,  227 => 124,  226 => 123,  225 => 122,  224 => 121,  223 => 120,  222 => 119,  221 => 118,  220 => 117,  219 => 116,  218 => 115,  217 => 114,  216 => 113,  215 => 112,  214 => 109,  213 => 108,  212 => 105,  211 => 104,  210 => 103,  209 => 102,  208 => 101,  207 => 97,  206 => 94,  205 => 93,  204 => 91,  201 => 90,  199 => 89,  190 => 87,  186 => 85,  175 => 83,  171 => 82,  167 => 81,  163 => 80,  160 => 79,  151 => 77,  147 => 76,  142 => 74,  138 => 73,  131 => 71,  122 => 65,  119 => 64,  115 => 61,  111 => 59,  107 => 57,  105 => 56,  103 => 55,  101 => 54,  98 => 52,  94 => 50,  92 => 49,  89 => 48,  87 => 47,  85 => 46,  82 => 44,  78 => 42,  76 => 41,  73 => 40,  71 => 39,  69 => 38,  66 => 36,  62 => 34,  60 => 33,  57 => 32,  55 => 31,  53 => 30,  50 => 28,  48 => 25,  45 => 23,  41 => 21,  37 => 19,  35 => 18,  32 => 17,  30 => 16,  28 => 15,  26 => 14,  23 => 13,  21 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@bolt/_base/_page.twig", "");
    }
}
