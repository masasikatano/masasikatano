<?php

/* @bolt/components/panel-news-item.twig */
class __TwigTemplate_d53863af4fddb0d97ad397a87b26ad523277fdd1fd07163ef635f7a013cad779 extends Twig_Template
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
        // line 5
        return $this->loadTemplate((($this->getAttribute((isset($context["news"]) ? $context["news"] : null), "title", array(), "any", true, true)) ? ("@bolt/_base/_panel.twig") : ("@bolt/_base/_nothing.twig")), "@bolt/components/panel-news-item.twig", 5);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_panel_class($context, array $blocks = array())
    {
        echo "panel-news";
    }

    // line 9
    public function block_panel_alert($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        if (($this->getAttribute((isset($context["news"]) ? $context["news"] : null), "type", array()) == "alert")) {
            // line 11
            echo "        class=\"progress-bar progress-bar-danger progress-bar-striped active\" style=\"width: 100%; text-align: left; color: #333; padding: 10px 14px; margin-bottom: 15px; font-weight: bold; color: #000;\"
    ";
        } else {
            // line 13
            echo "        class=\"panel-heading\"
    ";
        }
    }

    // line 17
    public function block_panel_icon($context, array $blocks = array())
    {
        echo "fa-bullhorn";
    }

    // line 19
    public function block_panel_head($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : null), "title", array()), "html", null, true);
    }

    // line 21
    public function block_panel_body($context, array $blocks = array())
    {
        // line 22
        echo "    ";
        echo $this->getAttribute((isset($context["news"]) ? $context["news"] : null), "teaser", array());
        echo "
";
    }

    public function getTemplateName()
    {
        return "@bolt/components/panel-news-item.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 22,  65 => 21,  59 => 19,  53 => 17,  47 => 13,  43 => 11,  40 => 10,  37 => 9,  31 => 7,  22 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@bolt/components/panel-news-item.twig", "");
    }
}
