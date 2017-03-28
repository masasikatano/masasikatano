<?php

/* @bolt/_sub/_configuration_notices.twig */
class __TwigTemplate_3898592601be1533af7f9fdeb1d3c2420db2cfff473a217f3a8be32267e8e1fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'panel_class' => array($this, 'block_panel_class'),
            'panel_alert' => array($this, 'block_panel_alert'),
            'panel_icon' => array($this, 'block_panel_icon'),
            'panel_head' => array($this, 'block_panel_head'),
            'panel_body' => array($this, 'block_panel_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 6
        return $this->loadTemplate((( !twig_test_empty((isset($context["messages"]) ? $context["messages"] : null))) ? ("@bolt/_base/_panel.twig") : ("@bolt/_base/_nothing.twig")), "@bolt/_sub/_configuration_notices.twig", 6);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["messages"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "logger.flash", array(), "array"), "get", array(0 => "configuration"), "method");
        // line 6
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_panel_class($context, array $blocks = array())
    {
        echo "panel-configuration";
    }

    // line 10
    public function block_panel_alert($context, array $blocks = array())
    {
        // line 11
        echo "    class=\"progress-bar progress-bar-info progress-bar-striped active\"
    style=\"width: 100%; text-align: left; color: #333; padding: 10px 14px; margin-bottom: 15px;\"
";
    }

    // line 15
    public function block_panel_icon($context, array $blocks = array())
    {
        echo "fa-bullhorn";
    }

    // line 17
    public function block_panel_head($context, array $blocks = array())
    {
        echo "<b>Configuration Notices</b>";
    }

    // line 19
    public function block_panel_body($context, array $blocks = array())
    {
        // line 20
        echo "    ";
        $context["shown"] = array();
        // line 21
        echo "    <p>
        ";
        // line 22
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.bolt-configuration-issues-detected");
        echo "
    </p>
    <ul>
    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 26
            echo "        ";
            if (!twig_in_filter($context["msg"], (isset($context["shown"]) ? $context["shown"] : null))) {
                // line 27
                echo "            <li>";
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->ymllink($context["msg"]);
                echo "</li>
            ";
                // line 28
                $context["shown"] = twig_array_merge((isset($context["shown"]) ? $context["shown"] : null), array(0 => $context["msg"]));
                // line 29
                echo "        ";
            }
            // line 30
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "    </ul>
";
    }

    public function getTemplateName()
    {
        return "@bolt/_sub/_configuration_notices.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 31,  93 => 30,  90 => 29,  88 => 28,  83 => 27,  80 => 26,  76 => 25,  70 => 22,  67 => 21,  64 => 20,  61 => 19,  55 => 17,  49 => 15,  43 => 11,  40 => 10,  34 => 8,  30 => 6,  28 => 4,  22 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@bolt/_sub/_configuration_notices.twig", "");
    }
}
