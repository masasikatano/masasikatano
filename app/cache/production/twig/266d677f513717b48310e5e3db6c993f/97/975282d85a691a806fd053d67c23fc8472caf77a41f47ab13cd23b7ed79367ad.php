<?php

/* @bolt/dashboard/_recently_edited.twig */
class __TwigTemplate_632e9f4b5e100ddee0040664cc324980934d55b1c4692bfa654699b5b67b9e6b extends Twig_Template
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
        echo "<div class=\"contenttype-title\">
    <span class=\"pull-right\">
            <a href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("overview", array("contenttypeslug" => (isset($context["contenttype"]) ? $context["contenttype"] : null))), "html", null, true);
        echo "\" class=\"morelink\">
                ";
        // line 4
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("contenttypes.generic.show-more", array("%contenttypes%" => (isset($context["contenttype"]) ? $context["contenttype"] : null)));
        echo " »
            </a>
        </span>
        <h3>";
        // line 7
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("contenttypes.generic.recently-edited", array("%contenttypes%" => (isset($context["contenttype"]) ? $context["contenttype"] : null)));
        echo "</h3>
</div>

";
        // line 10
        echo twig_include($this->env, $context, "@bolt/_sub/_record_list_data.twig");
        echo "

<div class=\"buic-listing\" data-bolt-widget=\"buicListing\" data-contenttype=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["contenttype"]) ? $context["contenttype"] : null), "html", null, true);
        echo "\" data-contenttype-name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(twig_first($this->env, (isset($context["multiplecontent"]) ? $context["multiplecontent"] : null)), "contenttype", array()), "singular_name", array()), "html", null, true);
        echo "\" data-bolt_csrf_token=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->token(), "html", null, true);
        echo "\">
    <table class=\"table dashboardlisting listing\">
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["multiplecontent"]) ? $context["multiplecontent"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
            // line 15
            echo "            ";
            $context["listing_vars"] = array("compact" => true, "content" =>             // line 17
$context["content"], "excerptlength" => 280, "permissions" => $this->getAttribute($this->getAttribute(            // line 19
(isset($context["context"]) ? $context["context"] : null), "permissions", array()), (isset($context["contenttype"]) ? $context["contenttype"] : null), array(), "array"), "thumbsize" => 54);
            // line 22
            echo "            ";
            echo twig_include($this->env, $context, array(0 => (("@bolt/custom/listing/" . $this->getAttribute($this->getAttribute($context["content"], "contenttype", array()), "slug", array())) . ".twig"), 1 => "@bolt/_sub/_listing.twig"), (isset($context["listing_vars"]) ? $context["listing_vars"] : null));
            echo "
        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    </table>
</div>
";
    }

    public function getTemplateName()
    {
        return "@bolt/dashboard/_recently_edited.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 24,  75 => 22,  73 => 19,  72 => 17,  70 => 15,  53 => 14,  44 => 12,  39 => 10,  33 => 7,  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@bolt/dashboard/_recently_edited.twig", "");
    }
}
