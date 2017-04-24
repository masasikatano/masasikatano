<?php

/* @bolt/_buic/_listing.twig */
class __TwigTemplate_cb3d0cb58ff2f611700c7ca277b3dcec6223aa63f86fa67918011cadd6b3aea3 extends Twig_Template
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
    }

    // line 1
    public function getbuic_listing_slink($__id__ = null, $__text__ = null, $__paramname__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "id" => $__id__,
            "text" => $__text__,
            "paramname" => $__paramname__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            $context["paramname"] = ((array_key_exists("paramname", $context)) ? (_twig_default_filter((isset($context["paramname"]) ? $context["paramname"] : null), "order")) : ("order"));
            // line 3
            echo "
    ";
            // line 4
            $context["params"] = array();
            // line 5
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "all", array()));
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                if (($context["key"] != (isset($context["paramname"]) ? $context["paramname"] : null))) {
                    // line 6
                    echo "        ";
                    $context["params"] = twig_array_merge((isset($context["params"]) ? $context["params"] : null), array($context["key"] => $context["val"]));
                    // line 7
                    echo "    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "
    ";
            // line 9
            if (($this->env->getExtension('Bolt\Twig\TwigExtension')->request((isset($context["paramname"]) ? $context["paramname"] : null)) == (isset($context["id"]) ? $context["id"] : null))) {
                // line 10
                echo "        ";
                $context["class"] = "order-asc";
                // line 11
                echo "        ";
                $context["params"] = twig_array_merge((isset($context["params"]) ? $context["params"] : null), array((isset($context["paramname"]) ? $context["paramname"] : null) => ("-" . (isset($context["id"]) ? $context["id"] : null))));
                // line 12
                echo "    ";
            } elseif (($this->env->getExtension('Bolt\Twig\TwigExtension')->request((isset($context["paramname"]) ? $context["paramname"] : null)) == ("-" . (isset($context["id"]) ? $context["id"] : null)))) {
                // line 13
                echo "        ";
                $context["class"] = "order-desc";
                // line 14
                echo "    ";
            } else {
                // line 15
                echo "        ";
                $context["class"] = "order-none";
                // line 16
                echo "        ";
                $context["params"] = twig_array_merge((isset($context["params"]) ? $context["params"] : null), array((isset($context["paramname"]) ? $context["paramname"] : null) => (isset($context["id"]) ? $context["id"] : null)));
                // line 17
                echo "    ";
            }
            // line 18
            echo "
    <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, ("?" . twig_urlencode_filter((isset($context["params"]) ? $context["params"] : null))), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["text"]) ? $context["text"] : null), "html", null, true);
            echo "</a>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@bolt/_buic/_listing.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 19,  88 => 18,  85 => 17,  82 => 16,  79 => 15,  76 => 14,  73 => 13,  70 => 12,  67 => 11,  64 => 10,  62 => 9,  59 => 8,  52 => 7,  49 => 6,  43 => 5,  41 => 4,  38 => 3,  35 => 2,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@bolt/_buic/_listing.twig", "");
    }
}
