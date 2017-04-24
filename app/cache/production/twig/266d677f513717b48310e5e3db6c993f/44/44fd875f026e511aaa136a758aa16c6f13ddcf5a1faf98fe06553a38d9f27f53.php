<?php

/* @bolt/dashboard/_aside.twig */
class __TwigTemplate_396449d0095160fa92691541b0edc506f1eb3bcb7221be17f3f6b7c2c9b77ad9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["panels"] = $this->loadTemplate("@bolt/_macro/_panels.twig", "@bolt/dashboard/_aside.twig", 1);
        // line 2
        echo "
";
        // line 4
        echo twig_include($this->env, $context, "@bolt/_sub/_configuration_notices.twig");
        echo "

";
        // line 7
        if ( !(isset($context["bolt_stable"]) ? $context["bolt_stable"] : null)) {
            // line 8
            echo "<div class=\"panel panel-default panel-news\">
    <div class=\"progress-bar progress-bar-warning progress-bar-striped active\" style=\"width: 100%; text-align: left; color: #333; padding: 10px 14px; margin-bottom: 15px;\">
        <b><i class=\"fa fa-fw fa-bullhorn\"></i> Warning: Development version </b>
    </div>
    <div class=\"panel-body\">
        <p>This is a development version of Bolt, so it might contain bugs and unfinished features. Use at your own risk! For 'production' websites, we advise you to stick with the official stable releases.</p>
    </div>
</div>
";
        }
        // line 17
        echo "
";
        // line 19
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->widgets("dashboard_aside_top", "backend");
        echo "

";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dashboardnews"));
        echo "

";
        // line 25
        echo $context["panels"]->getstack(7, true);
        echo "

";
        // line 28
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->widgets("dashboard_aside_middle", "backend");
        echo "

";
        // line 31
        echo "<div data-bolt-widget=\"panelActivity\">
    ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("latestactivity"));
        echo "
</div>

";
        // line 36
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->widgets("dashboard_aside_bottom", "backend");
        echo "

";
        // line 39
        echo "<div id=\"latesttemp\" style=\"display:none; visibility: hidden;\">
    <!-- intentionally left blank -->
</div>
";
    }

    public function getTemplateName()
    {
        return "@bolt/dashboard/_aside.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 39,  74 => 36,  68 => 32,  65 => 31,  60 => 28,  55 => 25,  50 => 22,  45 => 19,  42 => 17,  31 => 8,  29 => 7,  24 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@bolt/dashboard/_aside.twig", "");
    }
}
