<?php

/* @bolt/components/panel-activity-change.twig */
class __TwigTemplate_51034fcce19d458029898863378e9a1218b324d2ea07ae60789f6c78d50d587c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'panel_class' => array($this, 'block_panel_class'),
            'panel_icon' => array($this, 'block_panel_icon'),
            'panel_head' => array($this, 'block_panel_head'),
            'panel_body' => array($this, 'block_panel_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 5
        return $this->loadTemplate((($this->env->getExtension('Bolt\Twig\TwigExtension')->isAllowed("changelog")) ? ("@bolt/_base/_panel.twig") : ("@bolt/_base/_nothing.twig")), "@bolt/components/panel-activity-change.twig", 5);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_panel_class($context, array $blocks = array())
    {
        echo "panel-activity";
    }

    // line 9
    public function block_panel_icon($context, array $blocks = array())
    {
        echo "fa-clock-o";
    }

    // line 11
    public function block_panel_head($context, array $blocks = array())
    {
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("panel.latest-activity.change");
    }

    // line 13
    public function block_panel_body($context, array $blocks = array())
    {
        // line 14
        echo "
    ";
        // line 15
        $context["macro"] = $this->loadTemplate("@bolt/_macro/_macro.twig", "@bolt/components/panel-activity-change.twig", 15);
        // line 16
        echo "    ";
        $context["__internal_fc8d866d6e1e240229bd86acc50d68b701fb42fe7759aa249106ae972d7dfdcf"] = $this->loadTemplate("@bolt/_buic/_moment.twig", "@bolt/components/panel-activity-change.twig", 16);
        // line 17
        echo "
    <ul class=\"activity\">
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "change", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 20
            echo "            <li>
                ";
            // line 21
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array(), "any", false, true), "get", array(0 => "contenttypes"), "method", false, true), $this->getAttribute($context["log"], "contenttype", array()), array(), "array", true, true)) {
                // line 22
                echo "                    ";
                $context["contenttype"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "contenttypes"), "method"), $this->getAttribute($context["log"], "contenttype", array()), array(), "array");
                // line 23
                echo "                    ";
                $context["contenttype_display_name"] = $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "singular_name", array());
                // line 24
                echo "                    ";
                $context["content_display_name"] = $context["macro"]->getcontentlink_by_id((isset($context["contenttype"]) ? $context["contenttype"] : null), $this->getAttribute($context["log"], "title", array()), $this->getAttribute($context["log"], "contentid", array()));
                // line 25
                echo "                ";
            } else {
                // line 26
                echo "                    ";
                $context["contenttype_display_name"] = $this->getAttribute($context["log"], "contenttype", array());
                // line 27
                echo "                    ";
                $context["content_display_name"] = $this->getAttribute($context["log"], "title", array());
                // line 28
                echo "                ";
            }
            // line 29
            echo "
                ";
            // line 30
            if (($this->getAttribute($context["log"], "mutation_type", array()) == "INSERT")) {
                // line 31
                echo "                    ";
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("panel.latest-activity.created");
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["contenttype_display_name"]) ? $context["contenttype_display_name"] : null), "html", null, true);
                echo "
                ";
            } elseif (($this->getAttribute(            // line 32
$context["log"], "mutation_type", array()) == "UPDATE")) {
                // line 33
                echo "                    ";
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("panel.latest-activity.saved");
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["contenttype_display_name"]) ? $context["contenttype_display_name"] : null), "html", null, true);
                echo "
                ";
            } elseif (($this->getAttribute(            // line 34
$context["log"], "mutation_type", array()) == "DELETE")) {
                // line 35
                echo "                    ";
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("panel.latest-activity.deleted");
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["contenttype_display_name"]) ? $context["contenttype_display_name"] : null), "html", null, true);
                echo "
                ";
            }
            // line 37
            echo "                \"<strong>";
            echo twig_escape_filter($this->env, (isset($context["content_display_name"]) ? $context["content_display_name"] : null), "html", null, true);
            echo "</strong>\" ";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("panel.latest-activity.by");
            echo "
                <em>";
            // line 38
            echo $context["macro"]->getuserlink((($this->getAttribute($context["log"], "ownerid", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["log"], "ownerid", array()), "")) : ("")));
            echo "</em>
                <small>(";
            // line 39
            echo $context["__internal_fc8d866d6e1e240229bd86acc50d68b701fb42fe7759aa249106ae972d7dfdcf"]->getbuic_moment($this->getAttribute($context["log"], "date", array()));
            echo ")</small>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "    </ul>

    <p><a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("changelog");
        echo "\" class=\"btn btn-default\">
        <i class=\"fa fa-fw fa-archive\"></i>
        ";
        // line 46
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("panel.latest-activity.button.more");
        echo "
    </a></p>

";
    }

    public function getTemplateName()
    {
        return "@bolt/components/panel-activity-change.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 46,  148 => 44,  144 => 42,  135 => 39,  131 => 38,  124 => 37,  116 => 35,  114 => 34,  107 => 33,  105 => 32,  98 => 31,  96 => 30,  93 => 29,  90 => 28,  87 => 27,  84 => 26,  81 => 25,  78 => 24,  75 => 23,  72 => 22,  70 => 21,  67 => 20,  63 => 19,  59 => 17,  56 => 16,  54 => 15,  51 => 14,  48 => 13,  42 => 11,  36 => 9,  30 => 7,  21 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@bolt/components/panel-activity-change.twig", "");
    }
}
