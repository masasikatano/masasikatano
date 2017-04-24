<?php

/* @bolt/overview/_panel-actions_overview.twig */
class __TwigTemplate_3e0237b23d5f8dd32694f2f8bd739c869de531eb1efd0cbe09021b808db74d3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("@bolt/_base/_panel.twig", "@bolt/overview/_panel-actions_overview.twig", 4);
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

    // line 6
    public function block_panel_class($context, array $blocks = array())
    {
        echo "panel-news";
    }

    // line 8
    public function block_panel_icon($context, array $blocks = array())
    {
        echo "fa-cog";
    }

    // line 10
    public function block_panel_head($context, array $blocks = array())
    {
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("contenttypes.generic.actions-all", array("%contenttypes%" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array())));
    }

    // line 12
    public function block_panel_body($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        if ($this->env->getExtension('Bolt\Twig\TwigExtension')->isAllowed((("contenttype:" . $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array())) . ":create"))) {
            // line 14
            echo "        <a class=\"btn btn-primary\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editcontent", array("contenttypeslug" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array()))), "html", null, true);
            echo "\">
            <i class=\"fa fa-plus\"></i> ";
            // line 15
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("contenttypes.generic.new", array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array())));
            echo "
        </a>
    ";
        }
        // line 18
        echo "
    <p style=\"margin-top: 15px;\"><strong>";
        // line 19
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.filter");
        echo "</strong></p>

    <form class=\"form-inline\">

        ";
        // line 23
        $context["taxonomyfilter"] = false;
        // line 24
        echo "
        <div class=\"form-group\">
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "taxonomy", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "taxonomy", array()), array())) : (array())));
        foreach ($context['_seq'] as $context["_key"] => $context["taxonomy"]) {
            // line 27
            echo "            ";
            if (twig_test_iterable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => (("taxonomy/" . $context["taxonomy"]) . "/options")), "method"))) {
                // line 28
                echo "                ";
                if ($this->env->getExtension('Bolt\Twig\TwigExtension')->request(("taxonomy-" . $context["taxonomy"]))) {
                    // line 29
                    echo "                    ";
                    $context["taxonomyfilter"] = true;
                    // line 30
                    echo "                ";
                }
                // line 31
                echo "                <select name='taxonomy-";
                echo twig_escape_filter($this->env, $context["taxonomy"], "html", null, true);
                echo "' class='form-control'>
                    <option value=''>
                        (";
                // line 33
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array(), "any", false, true), "get", array(0 => (("taxonomy/" . $context["taxonomy"]) . "/name")), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array(), "any", false, true), "get", array(0 => (("taxonomy/" . $context["taxonomy"]) . "/name")), "method"), $context["taxonomy"])) : ($context["taxonomy"])), "html", null, true);
                echo ")
                    </option>
                ";
                // line 35
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => (("taxonomy/" . $context["taxonomy"]) . "/options")), "method"));
                foreach ($context['_seq'] as $context["slug"] => $context["name"]) {
                    // line 36
                    echo "                    <option value='";
                    echo twig_escape_filter($this->env, $context["slug"], "html", null, true);
                    echo "' ";
                    if (($this->env->getExtension('Bolt\Twig\TwigExtension')->request(("taxonomy-" . $context["taxonomy"])) == $context["slug"])) {
                        echo "selected";
                    }
                    echo ">
                        ";
                    // line 37
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo "
                    </option>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['slug'], $context['name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 40
                echo "                </select>
                ";
                // line 41
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.or");
                echo "
            ";
            }
            // line 43
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taxonomy'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "            <input type=\"text\" class=\"form-control\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->request("filter", "", true), "html", null, true);
        echo "\" name=\"filter\" style=\"width: 110px;\" placeholder=\"";
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.keyword-ellipsis");
        echo "\">
        </div>

        <div class=\"form-group\" style=\"display: block; margin-top: 12px;\">
            <button type=\"submit\" class=\"btn btn-tertiary\"><i class=\"fa fa-filter\"></i> ";
        // line 48
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.filter");
        echo "</button>

            ";
        // line 50
        if ((($this->env->getExtension('Bolt\Twig\TwigExtension')->request("filter") || $this->env->getExtension('Bolt\Twig\TwigExtension')->request("order")) || (isset($context["taxonomyfilter"]) ? $context["taxonomyfilter"] : null))) {
            // line 51
            echo "                <a class=\"btn btn-tertiary\" href=\"?\"><i class=\"fa fa-close\"></i> ";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.clear-filter-sort");
            echo "</a>
            ";
        }
        // line 53
        echo "        </div>

    </form>


    ";
        // line 58
        $context["description"] = $this->env->getExtension('Bolt\Twig\TwigExtension')->trans(array(0 => "contenttypes", 1 => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array()), 2 => "description"), array("DEFAULT" => (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "description", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "description", array()))) : (""))));
        // line 59
        echo "    <div class=\"description\">
        ";
        // line 60
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 61
            echo "            ";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->markdown((isset($context["description"]) ? $context["description"] : null));
            echo "
        ";
        }
        // line 63
        echo "    </div>

    <p><strong>";
        // line 65
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.details");
        echo "</strong></p>
    <ul>
        <li>";
        // line 67
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.status-default");
        echo ": ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "default_status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "default_status", array()), "published")) : ("published")), "html", null, true);
        echo "</li>
        <li>";
        // line 68
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.listing-template");
        echo ": <code>";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "listing_template", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "listing_template", array()), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/listing_template"), "method"))) : ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/listing_template"), "method"))), "html", null, true);
        echo "</code></li>
        <li>";
        // line 69
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.template-detail");
        echo ": <code>";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "record_template", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "record_template", array()), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/record_template"), "method"))) : ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/record_template"), "method"))), "html", null, true);
        echo "</code></li>
        ";
        // line 70
        if (twig_test_iterable((($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "taxonomy", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "taxonomy", array()), "")) : ("")))) {
            // line 71
            echo "            <li>";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.taxonomy");
            echo ": ";
            echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "taxonomy", array()), ", "), "html", null, true);
            echo "</li>
        ";
        }
        // line 73
        echo "        ";
        if (twig_test_iterable((($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "relations", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "relations", array()), "")) : ("")))) {
            // line 74
            echo "            <li>
                ";
            // line 75
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.relationships");
            echo ":
                ";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "relations", array()));
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
            foreach ($context['_seq'] as $context["rel"] => $context["data"]) {
                // line 77
                echo "                    ";
                echo twig_escape_filter($this->env, $context["rel"], "html", null, true);
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 78
                echo "                ";
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
            unset($context['_seq'], $context['_iterated'], $context['rel'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "            </li>
        ";
        }
        // line 81
        echo "    </ul>

";
    }

    public function getTemplateName()
    {
        return "@bolt/overview/_panel-actions_overview.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 81,  272 => 79,  258 => 78,  252 => 77,  235 => 76,  231 => 75,  228 => 74,  225 => 73,  217 => 71,  215 => 70,  209 => 69,  203 => 68,  197 => 67,  192 => 65,  188 => 63,  182 => 61,  180 => 60,  177 => 59,  175 => 58,  168 => 53,  162 => 51,  160 => 50,  155 => 48,  145 => 44,  139 => 43,  134 => 41,  131 => 40,  122 => 37,  113 => 36,  109 => 35,  104 => 33,  98 => 31,  95 => 30,  92 => 29,  89 => 28,  86 => 27,  82 => 26,  78 => 24,  76 => 23,  69 => 19,  66 => 18,  60 => 15,  55 => 14,  52 => 13,  49 => 12,  43 => 10,  37 => 8,  31 => 6,  11 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@bolt/overview/_panel-actions_overview.twig", "");
    }
}
