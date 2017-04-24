<?php

/* @bolt/editcontent/editcontent.twig */
class __TwigTemplate_3564bd7aca763e16b78e9ffa34fc2265e755afedaa7afda837d27d2a1b77030d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 6
        $this->parent = $this->loadTemplate("@bolt/_base/_page-nav.twig", "@bolt/editcontent/editcontent.twig", 6);
        $this->blocks = array(
            'page_nav' => array($this, 'block_page_nav'),
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'messages' => array($this, 'block_messages'),
            'page_main' => array($this, 'block_page_main'),
            'page_main_extra_content' => array($this, 'block_page_main_extra_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@bolt/_base/_page-nav.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["macro"] = $this->loadTemplate("@bolt/_macro/_macro.twig", "@bolt/editcontent/editcontent.twig", 3);
        // line 4
        $context["__internal_69adef0a221bb9cfa137206acc2c4c2667718af91ae78831b6129fa311512aa5"] = $this->loadTemplate("@bolt/_buic/_moment.twig", "@bolt/editcontent/editcontent.twig", 4);
        // line 6
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_page_nav($context, array $blocks = array())
    {
        echo "Content/*";
    }

    // line 10
    public function block_page_title($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        $context["contenttype"] = array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array()));
        // line 12
        echo "    ";
        if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "title", array()))) {
            // line 13
            echo "        ";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("contenttypes.generic.edit", (isset($context["contenttype"]) ? $context["contenttype"] : null));
            echo "
    ";
        } else {
            // line 15
            echo "        ";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("contenttypes.generic.new", (isset($context["contenttype"]) ? $context["contenttype"] : null));
            echo "
    ";
        }
    }

    // line 19
    public function block_page_subtitle($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, strip_tags((($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "title", array()), "")) : (""))), "html", null, true);
    }

    // line 22
    public function block_messages($context, array $blocks = array())
    {
        echo "";
    }

    // line 24
    public function block_page_main($context, array $blocks = array())
    {
        // line 25
        echo "    ";
        $context["status_names"] = array("published" => $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.published"), "held" => $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.not-published"), "timed" => $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.publish-timed"), "draft" => $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.draft"));
        // line 31
        echo "
    ";
        // line 32
        ob_start();
        echo $context["__internal_69adef0a221bb9cfa137206acc2c4c2667718af91ae78831b6129fa311512aa5"]->getbuic_moment($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "datechanged", array()));
        $context["dateChanged"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 33
        echo "
    ";
        // line 34
        $context["bind_data"] = array("savedon" => ((($this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.saved-on-colon") . " <strong></strong> <small>(") .         // line 35
(isset($context["dateChanged"]) ? $context["dateChanged"] : null)) . ")</small></p>"), "newRecord" => ((($this->getAttribute($this->getAttribute(        // line 36
(isset($context["context"]) ? $context["context"] : null), "content", array()), "id", array()) != 0)) ? (false) : (true)), "msgNotSaved" => $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("contenttypes.generic.saving-impossible", array("%contenttype%" => $this->getAttribute($this->getAttribute(        // line 37
(isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array()))), "hasGroups" => $this->getAttribute($this->getAttribute(        // line 38
(isset($context["context"]) ? $context["context"] : null), "has", array()), "tabs", array()), "singularSlug" => $this->getAttribute($this->getAttribute(        // line 39
(isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "singular_slug", array()));
        // line 41
        echo "
    ";
        // line 42
        $context["attr_form"] = array("_bind" => array(0 => "editcontent", 1 =>         // line 43
(isset($context["bind_data"]) ? $context["bind_data"] : null)), "class" => ("form-horizontal" . (($this->getAttribute($this->getAttribute(        // line 44
(isset($context["context"]) ? $context["context"] : null), "has", array()), "tabs", array())) ? (" tab-content") : (""))), "enctype" => "multipart/form-data", "id" => "editcontent", "method" => "post");
        // line 49
        echo "
    ";
        // line 50
        $context["attributes"] = array("hid_editreferrer" => array("name_id" => "editreferrer", "type" => "hidden", "value" => ((        // line 54
array_key_exists("editreferrer", $context)) ? (_twig_default_filter((isset($context["editreferrer"]) ? $context["editreferrer"] : null), "")) : (""))), "hid_contenttype" => array("name_id" => "contenttype", "type" => "hidden", "value" => $this->getAttribute($this->getAttribute(        // line 60
(isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array())));
        // line 63
        echo "
    <div class=\"row\">
        <div class=\"col-md-8\">

            ";
        // line 67
        echo twig_include($this->env, $context, "@bolt/_sub/_messages.twig");
        echo "

            ";
        // line 69
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->widgets("editcontent_below_header", "backend");
        echo "

            ";
        // line 72
        echo "            ";
        if ($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "has", array()), "tabs", array())) {
            // line 73
            echo "                <ul class=\"nav nav-tabs\" id=\"filtertabs\">
                    ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "groups", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 75
                echo "                        <li";
                echo (($this->getAttribute($context["group"], "is_active", array())) ? (" class=\"active\"") : (""));
                echo " id=\"tabindicator-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "id", array()), "html", null, true);
                echo "\">
                            <a href=\"#";
                // line 76
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "id", array()), "html", null, true);
                echo "\" data-toggle=\"tab\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "label", array()), "html", null, true);
                echo "</a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "                </ul>
            ";
        }
        // line 81
        echo "
            <form";
        // line 82
        echo $context["macro"]->getattr((isset($context["attr_form"]) ? $context["attr_form"] : null));
        echo ">
                ";
        // line 83
        echo twig_include($this->env, $context, "@bolt/_sub/_csrf_token.twig");
        echo "

                <input";
        // line 85
        echo $context["macro"]->getattr($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "hid_editreferrer", array()));
        echo ">
                <input";
        // line 86
        echo $context["macro"]->getattr($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "hid_contenttype", array()));
        echo ">

                ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "groups", array()));
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
        foreach ($context['_seq'] as $context["group_name"] => $context["group"]) {
            // line 89
            echo "
                    ";
            // line 90
            if ($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "has", array()), "tabs", array())) {
                // line 91
                echo "                        <div class=\"tab-pane";
                echo (($this->getAttribute($context["group"], "is_active", array())) ? (" active") : (""));
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "id", array()), "html", null, true);
                echo "\">
                    ";
            }
            // line 93
            echo "
                    ";
            // line 94
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "fields", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
                // line 95
                echo "
                        ";
                // line 96
                if (($context["key"] == "*relations")) {
                    // line 97
                    echo "                            ";
                    echo twig_include($this->env, $context, "@bolt/editcontent/_relations.twig");
                    echo "

                        ";
                } elseif ((                // line 99
$context["key"] == "*taxonomy")) {
                    // line 100
                    echo "                            ";
                    echo twig_include($this->env, $context, "@bolt/editcontent/_taxonomies.twig");
                    echo "

                        ";
                } elseif ((                // line 102
$context["key"] == "*meta")) {
                    // line 103
                    echo "                            <div data-bolt-fieldset=\"meta\">
                                ";
                    // line 104
                    echo twig_include($this->env, $context, "@bolt/editcontent/fields/_meta.twig");
                    echo "
                            </div>

                        ";
                } elseif ((                // line 107
$context["key"] == "*template")) {
                    // line 108
                    echo "                            ";
                    echo twig_include($this->env, $context, "@bolt/editcontent/_templatefields.twig");
                    echo "

                        ";
                } else {
                    // line 111
                    echo "                            ";
                    echo twig_include($this->env, $context, "@bolt/editcontent/_field.twig");
                    echo "
                        ";
                }
                // line 113
                echo "
                    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            echo "
                    ";
            // line 116
            if ($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "has", array()), "tabs", array())) {
                // line 117
                echo "                        </div>
                    ";
            }
            // line 119
            echo "
                ";
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
        unset($context['_seq'], $context['_iterated'], $context['group_name'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "
                <input type=\"hidden\" name=\"_live-editor-preview\" value=\"\"/>

                ";
        // line 124
        echo twig_include($this->env, $context, "@bolt/editcontent/_buttons.twig");
        echo "
            </form>

            ";
        // line 127
        echo twig_include($this->env, $context, "@bolt/editcontent/_includes-data.twig");
        echo "

            ";
        // line 129
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->widgets("editcontent_bottom", "backend");
        echo "

        </div>

        <aside class=\"col-md-4 hidden-sm\">
            ";
        // line 134
        echo twig_include($this->env, $context, "@bolt/editcontent/_aside.twig");
        echo "
        </aside>
    </div>

";
    }

    // line 140
    public function block_page_main_extra_content($context, array $blocks = array())
    {
        // line 141
        echo "    ";
        echo twig_include($this->env, $context, "@bolt/editcontent/_live-editor.twig");
        echo "
";
    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/editcontent.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  355 => 141,  352 => 140,  343 => 134,  335 => 129,  330 => 127,  324 => 124,  319 => 121,  304 => 119,  300 => 117,  298 => 116,  295 => 115,  280 => 113,  274 => 111,  267 => 108,  265 => 107,  259 => 104,  256 => 103,  254 => 102,  248 => 100,  246 => 99,  240 => 97,  238 => 96,  235 => 95,  218 => 94,  215 => 93,  207 => 91,  205 => 90,  202 => 89,  185 => 88,  180 => 86,  176 => 85,  171 => 83,  167 => 82,  164 => 81,  160 => 79,  149 => 76,  142 => 75,  138 => 74,  135 => 73,  132 => 72,  127 => 69,  122 => 67,  116 => 63,  114 => 60,  113 => 54,  112 => 50,  109 => 49,  107 => 44,  106 => 43,  105 => 42,  102 => 41,  100 => 39,  99 => 38,  98 => 37,  97 => 36,  96 => 35,  95 => 34,  92 => 33,  88 => 32,  85 => 31,  82 => 25,  79 => 24,  73 => 22,  67 => 19,  59 => 15,  53 => 13,  50 => 12,  47 => 11,  44 => 10,  38 => 8,  34 => 6,  32 => 4,  30 => 3,  11 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@bolt/editcontent/editcontent.twig", "");
    }
}
