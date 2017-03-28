<?php

/* @bolt/_macro/_panels.twig */
class __TwigTemplate_2a800a8fdde8164f4de51d67a892a47361db94572ef6c96205ea73f7c7b36040 extends Twig_Template
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
        // line 14
        echo "

";
        // line 29
        echo "

";
    }

    // line 7
    public function getstack($__items__ = null, $__ommit_empty__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "ommit_empty" => $__ommit_empty__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 8
            echo "    ";
            if ( !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/backend/stack/disable", 1 => false), "method")) {
                // line 9
                echo "        ";
                if (( !((array_key_exists("ommit_empty", $context)) ? (_twig_default_filter((isset($context["ommit_empty"]) ? $context["ommit_empty"] : null), false)) : (false)) ||  !twig_test_empty($this->env->getExtension('Bolt\Twig\TwigExtension')->stackItems()))) {
                    // line 10
                    echo "            ";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("stack/show", array("items" => ((array_key_exists("item", $context)) ? (_twig_default_filter((isset($context["item"]) ? $context["item"] : null), 10)) : (10)))));
                    echo "
        ";
                }
                // line 12
                echo "    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 22
    public function getlastmodified($__contenttype_slug__ = null, $__content_id__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "contenttype_slug" => $__contenttype_slug__,
            "content_id" => $__content_id__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 23
            echo "    ";
            if ((((array_key_exists("content_id", $context)) ? (_twig_default_filter((isset($context["content_id"]) ? $context["content_id"] : null), false)) : (false)) ||  !twig_test_empty($this->env->getExtension('Bolt\Twig\TwigExtension')->stackItems()))) {
                // line 24
                echo "        ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lastmodified", array("contenttypeslug" => (isset($context["contenttype_slug"]) ? $context["contenttype_slug"] : null))));
                echo "
    ";
            } else {
                // line 26
                echo "        ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lastmodified", array("contenttypeslug" => (isset($context["contenttype_slug"]) ? $context["contenttype_slug"] : null), "contentid" => (isset($context["content_id"]) ? $context["content_id"] : null))));
                echo "
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 37
    public function getchanges($__contenttype_slug__ = null, $__content_id__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "contenttype_slug" => $__contenttype_slug__,
            "content_id" => $__content_id__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 38
            echo "    ";
            if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/changelog/enabled", 1 => true), "method")) {
                // line 39
                echo "        ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("changelogrecord", array("contenttype" => (isset($context["contenttype_slug"]) ? $context["contenttype_slug"] : null), "contentid" => (isset($context["content_id"]) ? $context["content_id"] : null))));
                echo "
    ";
            }
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
        return "@bolt/_macro/_panels.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 39,  124 => 38,  111 => 37,  92 => 26,  86 => 24,  83 => 23,  70 => 22,  54 => 12,  48 => 10,  45 => 9,  42 => 8,  29 => 7,  23 => 29,  19 => 14,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@bolt/_macro/_panels.twig", "");
    }
}
