<?php

/* @bolt/components/panel-lastmodified.twig */
class __TwigTemplate_e159500bc977bca8f2c063cadc6fd0a88a674f7e3eda16e1690e6bc1f179a852 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("@bolt/_base/_panel.twig", "@bolt/components/panel-lastmodified.twig", 5);
        $this->blocks = array(
            'panel_class' => array($this, 'block_panel_class'),
            'panel_icon' => array($this, 'block_panel_icon'),
            'panel_head' => array($this, 'block_panel_head'),
            'panel_body' => array($this, 'block_panel_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@bolt/_base/_panel.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_panel_class($context, array $blocks = array())
    {
        echo "panel-lastmodified";
    }

    // line 9
    public function block_panel_icon($context, array $blocks = array())
    {
        echo "fa-clock-o";
    }

    // line 11
    public function block_panel_head($context, array $blocks = array())
    {
        // line 12
        echo "
    ";
        // line 13
        if ((($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "filtered", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "filtered", array()))) : (""))) {
            // line 14
            echo "        ";
            echo "Recent modifications";
            echo "
    ";
        } else {
            // line 16
            echo "        ";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("contenttypes.generic.last-modified", array("%contenttypes%" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array())));
            echo "
    ";
        }
        // line 18
        echo "
";
    }

    // line 21
    public function block_panel_body($context, array $blocks = array())
    {
        // line 22
        echo "
    ";
        // line 23
        $context["macro"] = $this->loadTemplate("@bolt/_macro/_macro.twig", "@bolt/components/panel-lastmodified.twig", 23);
        // line 24
        echo "    ";
        $context["__internal_1c740f443f5d741da3ca55c8e17a01b26d6f1e967da8c5da5ccb1a5283c95863"] = $this->loadTemplate("@bolt/_buic/_moment.twig", "@bolt/components/panel-lastmodified.twig", 24);
        // line 25
        echo "    ";
        $context["__internal_5a5e0115f67eb923e0634a3c48d0faa288b3914576d573680bde8574d96cbe1f"] = $this->loadTemplate("@bolt/changelog/_macros.twig", "@bolt/components/panel-lastmodified.twig", 25);
        // line 26
        echo "
    <ul>
        ";
        // line 28
        if ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "changelog", array(), "any", true, true)) {
            // line 29
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "changelog", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["index"] => $context["entry"]) {
                // line 30
                echo "                <li>
                    ";
                // line 31
                if ((($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "filtered", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "filtered", array()))) : (""))) {
                    // line 32
                    echo "                        ";
                    $context["title"] = $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "singular_name", array());
                    // line 33
                    echo "                    ";
                } else {
                    // line 34
                    echo "                        ";
                    if ($this->getAttribute($context["entry"], "title", array())) {
                        // line 35
                        echo "                            ";
                        $context["title"] = $context["macro"]->getcontentlink_by_id($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), $this->getAttribute($context["entry"], "title", array()), $this->getAttribute($context["entry"], "contentid", array()));
                        // line 36
                        echo "                        ";
                    } else {
                        // line 37
                        echo "                            ";
                        $context["title"] = twig_replace_filter("%name% № %id%", array("%name%" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "singular_name", array()), "%id%" => $this->getAttribute($context["entry"], "contentid", array())));
                        // line 38
                        echo "                        ";
                    }
                    // line 39
                    echo "                        № ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "contentid", array()), "html", null, true);
                    echo ".
                    ";
                }
                // line 41
                echo "                    ";
                echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
                echo "
                    ";
                // line 42
                echo $context["__internal_5a5e0115f67eb923e0634a3c48d0faa288b3914576d573680bde8574d96cbe1f"]->getchangelog_mutation($this->getAttribute($context["entry"], "mutation_type", array()));
                echo "
                    ";
                // line 43
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.by");
                echo " <em>";
                echo $context["macro"]->getuserlink((($this->getAttribute($context["entry"], "ownerid", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entry"], "ownerid", array()), "")) : ("")));
                echo "</em>
                    <small>(";
                // line 44
                echo $context["__internal_1c740f443f5d741da3ca55c8e17a01b26d6f1e967da8c5da5ccb1a5283c95863"]->getbuic_moment($this->getAttribute($context["entry"], "date", array()));
                echo ")</small>
                    <small><a href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("changelogrecordsingle", array("contenttype" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array()), "contentid" => $this->getAttribute($context["entry"], "contentid", array()), "id" => $this->getAttribute($context["entry"], "id", array()))), "html", null, true);
                echo "\">view</a></small>
                </li>
            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 48
                echo "                <li><em>";
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("contenttypes.generic.no-latest", array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array())));
                echo ".</em></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['index'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "        ";
        } else {
            // line 51
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "latest", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
                // line 52
                echo "                <li>
                    № ";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["content"], "id", array()), "html", null, true);
                echo ".
                    ";
                // line 54
                echo $context["macro"]->getcontentlink($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), $context["content"]);
                echo "
                    <small>(";
                // line 55
                echo $context["__internal_1c740f443f5d741da3ca55c8e17a01b26d6f1e967da8c5da5ccb1a5283c95863"]->getbuic_moment($this->getAttribute($context["content"], "datechanged", array()));
                echo ")</small>
                </li>
            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 58
                echo "                <li><em>";
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("contenttypes.generic.no-latest", array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array())));
                echo ".</em></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "        ";
        }
        // line 61
        echo "    </ul>
    ";
        // line 62
        if ((($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "changelog", array(), "any", true, true) && $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contentid", array())) && $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "filtered", array()))) {
            // line 63
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("changelogrecordall", array("contenttype" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array()), "contentid" => $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contentid", array()))), "html", null, true);
            echo "\">
            ";
            // line 64
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.full-list-ellipsis");
            echo "
        </a>
    ";
        }
        // line 67
        echo "
";
    }

    public function getTemplateName()
    {
        return "@bolt/components/panel-lastmodified.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 67,  212 => 64,  207 => 63,  205 => 62,  202 => 61,  199 => 60,  190 => 58,  182 => 55,  178 => 54,  174 => 53,  171 => 52,  165 => 51,  162 => 50,  153 => 48,  145 => 45,  141 => 44,  135 => 43,  131 => 42,  126 => 41,  120 => 39,  117 => 38,  114 => 37,  111 => 36,  108 => 35,  105 => 34,  102 => 33,  99 => 32,  97 => 31,  94 => 30,  88 => 29,  86 => 28,  82 => 26,  79 => 25,  76 => 24,  74 => 23,  71 => 22,  68 => 21,  63 => 18,  57 => 16,  51 => 14,  49 => 13,  46 => 12,  43 => 11,  37 => 9,  31 => 7,  11 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@bolt/components/panel-lastmodified.twig", "");
    }
}
