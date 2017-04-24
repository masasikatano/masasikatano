<?php

/* notfound.twig */
class __TwigTemplate_63bade20d659810cc0a4966b8e922dd9df46d450baf3671bdc95b69557d2020f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/_master.twig", "notfound.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/_master.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $template_storage = $context['app']['storage'];
        $context['record'] =         $template_storage->getContent("blocks/404-not-found", array() );
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title", array()), "404 not found")) : ("404 not found")), "html", null, true);
        echo "
";
    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        // line 10
        echo "    <div class=\"row\">
        <div class=\"large-12 columns\">

        ";
        // line 14
        echo "        ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method") == "/styleguide")) {
            // line 15
            echo "            ";
            echo twig_include($this->env, $context, "styleguide.twig");
            echo "
        ";
        } else {
            // line 17
            echo "            <h1>";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "title", array()), "404 not found")) : ("404 not found")), "html", null, true);
            echo "</h1>

            ";
            // line 19
            if ($this->env->getExtension('Bolt\Twig\TwigExtension')->fields($this->env, (isset($context["record"]) ? $context["record"] : null))) {
                // line 20
                echo "                ";
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->fields($this->env, (isset($context["record"]) ? $context["record"] : null));
                echo "
            ";
            } else {
                // line 22
                echo "                <p>
                    The requested page was not found.
                </p>

                <div class=\"primary callout\" data-closable>
                    <h5>Add a Blocks record with slug '404-not-found' to customize this message. </h5>
                    <p>If it's not showing up here, doublecheck that the <tt>slug</tt> is correct, and that the Block is published.</p>
                    <button class=\"close-button\" aria-label=\"Dismiss alert\" type=\"button\" data-close>
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
            ";
            }
            // line 34
            echo "
        ";
        }
        // line 36
        echo "
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "notfound.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 36,  88 => 34,  74 => 22,  68 => 20,  66 => 19,  60 => 17,  54 => 15,  51 => 14,  46 => 10,  43 => 9,  36 => 6,  33 => 5,  29 => 1,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "notfound.twig", "");
    }
}
