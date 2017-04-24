<?php

/* @bolt/overview/overview.twig */
class __TwigTemplate_16dab005a59bf113a262c78ab1e9469e6cc7fba4f7de7b62b8547ad9cc569ade extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 6
        $this->parent = $this->loadTemplate("@bolt/_base/_page-nav.twig", "@bolt/overview/overview.twig", 6);
        $this->blocks = array(
            'page_nav' => array($this, 'block_page_nav'),
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'messages' => array($this, 'block_messages'),
            'page_main' => array($this, 'block_page_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@bolt/_base/_page-nav.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["__internal_3f6c7ad8575e406b15dc0d1d9a03c2cb38e50433223ea3bdafbec4e3ddd87e8e"] = $this->loadTemplate("@bolt/_sub/_record_list.twig", "@bolt/overview/overview.twig", 3);
        // line 4
        $context["panels"] = $this->loadTemplate("@bolt/_macro/_panels.twig", "@bolt/overview/overview.twig", 4);
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
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.overview");
    }

    // line 12
    public function block_page_subtitle($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans(array(0 => "contenttypes", 1 => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array()), 2 => "name", 3 => "plural"), array("DEFAULT" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "name", array())));
        echo "
    ";
        // line 14
        if ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "filter", array())) {
            // line 15
            echo "        <small>(";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("filtered by <em>'%filter%'</em>", array("%filter%" => twig_join_filter($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "filter", array()), ", ")));
            echo ")</small>
    ";
        }
    }

    // line 20
    public function block_messages($context, array $blocks = array())
    {
        echo "";
    }

    // line 22
    public function block_page_main($context, array $blocks = array())
    {
        // line 23
        echo "
    <div class=\"row\">
        <div class=\"col-md-8\">

            ";
        // line 27
        echo twig_include($this->env, $context, "@bolt/_sub/_messages.twig");
        echo "

            ";
        // line 29
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->widgets("overview_below_header", "backend");
        echo "

            ";
        // line 31
        echo $context["__internal_3f6c7ad8575e406b15dc0d1d9a03c2cb38e50433223ea3bdafbec4e3ddd87e8e"]->getrecord_list($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "multiplecontent", array()), $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "permissions", array()), "", "", twig_join_filter($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "filter", array()), " "));
        echo "

            ";
        // line 33
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->widgets("overview_bottom", "backend");
        echo "

        </div>

        <aside class=\"col-md-4\">

            ";
        // line 39
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->widgets("overview_aside_top", "backend");
        echo "

            ";
        // line 41
        echo twig_include($this->env, $context, "@bolt/overview/_panel-actions_overview.twig");
        echo "

            ";
        // line 43
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->widgets("overview_aside_middle", "backend");
        echo "

            ";
        // line 45
        echo $context["panels"]->getlastmodified($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array()));
        echo "

            ";
        // line 47
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->widgets("overview_aside_bottom", "backend");
        echo "

        </aside>
    </div>

";
    }

    public function getTemplateName()
    {
        return "@bolt/overview/overview.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 47,  121 => 45,  116 => 43,  111 => 41,  106 => 39,  97 => 33,  92 => 31,  87 => 29,  82 => 27,  76 => 23,  73 => 22,  67 => 20,  59 => 15,  57 => 14,  52 => 13,  49 => 12,  43 => 10,  37 => 8,  33 => 6,  31 => 4,  29 => 3,  11 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@bolt/overview/overview.twig", "");
    }
}
