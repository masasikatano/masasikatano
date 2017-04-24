<?php

/* @bolt/components/panel-activity-system.twig */
class __TwigTemplate_775c082eb92e947bf922d6516e3330a765e09e07fece6c56fdc6cfbf9f3c2472 extends Twig_Template
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
        return $this->loadTemplate((($this->env->getExtension('Bolt\Twig\TwigExtension')->isAllowed("systemlog")) ? ("@bolt/_base/_panel.twig") : ("@bolt/_base/_nothing.twig")), "@bolt/components/panel-activity-system.twig", 5);
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
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("panel.latest-activity.system");
    }

    // line 13
    public function block_panel_body($context, array $blocks = array())
    {
        // line 14
        echo "
    ";
        // line 15
        $context["macro"] = $this->loadTemplate("@bolt/_macro/_macro.twig", "@bolt/components/panel-activity-system.twig", 15);
        // line 16
        echo "    ";
        $context["__internal_7a9b095f75524d610af4dc54673a7bdd1d42ed69a94891f455db4da15e59acb8"] = $this->loadTemplate("@bolt/_buic/_moment.twig", "@bolt/components/panel-activity-system.twig", 16);
        // line 17
        echo "
    <ul class=\"activity\">
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "system", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 20
            echo "            <li>
                ";
            // line 21
            if (($this->getAttribute($context["log"], "route", array()) == "postLogin")) {
                // line 22
                echo "                    ";
                if (($this->getAttribute($context["log"], "ownerid", array()) == 0)) {
                    // line 23
                    echo "                        <em>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "message", array()), "html", null, true);
                    echo "</em>
                    ";
                } else {
                    // line 25
                    echo "                        <em>";
                    echo $context["macro"]->getuserlink($this->getAttribute($context["log"], "ownerid", array()));
                    echo "</em> ";
                    echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("panel.latest-activity.logged-in");
                    echo "
                    ";
                }
                // line 27
                echo "                ";
            } elseif (($this->getAttribute($context["log"], "route", array()) == "logout")) {
                // line 28
                echo "                    <em>";
                echo $context["macro"]->getuserlink((($this->getAttribute($context["log"], "ownerid", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["log"], "ownerid", array()), "")) : ("")));
                echo "</em> ";
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("panel.latest-activity.logged-out");
                echo "
                ";
            } else {
                // line 30
                echo "                    <em>";
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->shy($this->getAttribute($context["log"], "message", array()));
                echo "</em>
                ";
            }
            // line 32
            echo "                <small>(";
            echo $context["__internal_7a9b095f75524d610af4dc54673a7bdd1d42ed69a94891f455db4da15e59acb8"]->getbuic_moment($this->getAttribute($context["log"], "date", array()));
            echo ")</small>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "    </ul>

    <p><a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("systemlog");
        echo "\" class=\"btn btn-default\">
        <i class=\"fa fa-fw fa-archive\"></i>
        ";
        // line 39
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("panel.latest-activity.button.more");
        echo "
    </a></p>

";
    }

    public function getTemplateName()
    {
        return "@bolt/components/panel-activity-system.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 39,  120 => 37,  116 => 35,  106 => 32,  100 => 30,  92 => 28,  89 => 27,  81 => 25,  75 => 23,  72 => 22,  70 => 21,  67 => 20,  63 => 19,  59 => 17,  56 => 16,  54 => 15,  51 => 14,  48 => 13,  42 => 11,  36 => 9,  30 => 7,  21 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@bolt/components/panel-activity-system.twig", "");
    }
}
