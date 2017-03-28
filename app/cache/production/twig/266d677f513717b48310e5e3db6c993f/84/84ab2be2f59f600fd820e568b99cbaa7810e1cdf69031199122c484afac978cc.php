<?php

/* @bolt/_base/_page-no_nav.twig */
class __TwigTemplate_6e8062407d232f97f7a9b490170a25c49d8f04a1138caebf7b53938ba3bd1dba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("@bolt/_base/_page.twig", "@bolt/_base/_page-no_nav.twig", 9);
        $this->blocks = array(
            'page_plain' => array($this, 'block_page_plain'),
            'page_main' => array($this, 'block_page_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@bolt/_base/_page.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        $context["page_bodyclass"] = "login";
        // line 13
        $context["page_hasnav"] = false;
        // line 15
        $context["page_nav"] = "";
        // line 9
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 17
    public function block_page_plain($context, array $blocks = array())
    {
        // line 18
        echo "
    <div class=\"container\">
        <div class=\"view-site\">
            <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" target=\"_blank\"><i class=\"fa fa-fw fa-external-link-square\"></i> ";
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.view-site");
        echo "</a>
        </div>

        <div class=\"row\">
            <div class=\"";
        // line 25
        echo twig_escape_filter($this->env, ((array_key_exists("form_class", $context)) ? (_twig_default_filter((isset($context["form_class"]) ? $context["form_class"] : null), "col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2")) : ("col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2")), "html", null, true);
        echo "\">

                <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bolt-logo.png", "bolt"), "html", null, true);
        echo "\" width=\"150\" height=\"62\" alt=\"Bolt\" class=\"logo\">

                ";
        // line 29
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->widgets("login_top", "backend");
        echo "

                <div class=\"panel panel-default\">
                    <div class=\"panel-body\">
                        ";
        // line 33
        echo twig_include($this->env, $context, "@bolt/_sub/_messages.twig");
        echo "
                        ";
        // line 34
        $this->displayBlock('page_main', $context, $blocks);
        // line 35
        echo "                    </div>
                </div>

                ";
        // line 38
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->widgets("login_middle", "backend");
        echo "

                ";
        // line 40
        if ((($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "randomquote", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "randomquote", array()), false)) : (false))) {
            // line 41
            echo "                    <blockquote class=\"quote\">";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->randomQuote();
            echo "</blockquote>
                ";
        }
        // line 43
        echo "
                ";
        // line 44
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->widgets("login_bottom", "backend");
        echo "

            </div>
        </div>
    </div>

";
    }

    // line 34
    public function block_page_main($context, array $blocks = array())
    {
        echo "[PAGE_MAIN]";
    }

    public function getTemplateName()
    {
        return "@bolt/_base/_page-no_nav.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 34,  97 => 44,  94 => 43,  88 => 41,  86 => 40,  81 => 38,  76 => 35,  74 => 34,  70 => 33,  63 => 29,  58 => 27,  53 => 25,  44 => 21,  39 => 18,  36 => 17,  32 => 9,  30 => 15,  28 => 13,  26 => 11,  11 => 9,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@bolt/_base/_page-no_nav.twig", "");
    }
}
