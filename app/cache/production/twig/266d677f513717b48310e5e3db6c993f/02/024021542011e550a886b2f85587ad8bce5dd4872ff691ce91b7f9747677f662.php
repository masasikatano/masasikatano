<?php

/* @bolt/_sub/_messages.twig */
class __TwigTemplate_966070fd551bde3e4405559247d5dbd3adb1d0159e4933275bd0dcf9bd22b838 extends Twig_Template
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
        // line 27
        echo "
";
        // line 28
        $context["self"] = $this;
        // line 29
        if (((array_key_exists("wrapper", $context) && (isset($context["wrapper"]) ? $context["wrapper"] : null)) &&  !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "logger.flash", array(), "array"), "keys", array(), "method")))) {
            // line 30
            echo "    <div class=\"row\">
        <div class=\"col-md-8\">
            ";
            // line 32
            echo $context["self"]->getflashbag((isset($context["user"]) ? $context["user"] : null));
            echo "
        </div>
    </div>
";
        } else {
            // line 36
            echo "    ";
            echo $context["self"]->getflashbag((isset($context["user"]) ? $context["user"] : null));
            echo "
";
        }
        // line 38
        echo "
";
        // line 40
        echo "<noscript>
    <div class=\"alert alert-danger\">
        <p>";
        // line 42
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("generic.noscript.message");
        echo "</p>
    </div>
</noscript>
";
    }

    // line 1
    public function getflashbag()
    {
        $context = $this->env->mergeGlobals(array(
            "varargs" => func_num_args() > 0 ? array_slice(func_get_args(), 0) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            $context["self"] = $this;
            // line 3
            echo "
    ";
            // line 5
            echo "    ";
            if (((isset($context["user"]) ? $context["user"] : null) != null)) {
                // line 6
                echo "        ";
                echo $context["self"]->getmessages("danger");
                echo "
        ";
                // line 7
                echo $context["self"]->getmessages("warning");
                echo "
    ";
            }
            // line 9
            echo "
    ";
            // line 10
            echo $context["self"]->getmessages("error", "danger");
            echo "
    ";
            // line 11
            echo $context["self"]->getmessages("success");
            echo "
    ";
            // line 12
            echo $context["self"]->getmessages("info");
            echo "
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

    // line 15
    public function getmessages($__key__ = null, $__class__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "key" => $__key__,
            "class" => $__class__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 16
            echo "    ";
            $context["shown"] = array();
            // line 17
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "logger.flash", array(), "array"), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 18
                echo "        ";
                if (!twig_in_filter($context["msg"], (isset($context["shown"]) ? $context["shown"] : null))) {
                    // line 19
                    echo "            <div class=\"alert alert-";
                    echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) ? $context["class"] : null), (isset($context["key"]) ? $context["key"] : null))) : ((isset($context["key"]) ? $context["key"] : null))), "html", null, true);
                    echo " alert-dismissible\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                ";
                    // line 21
                    echo $this->env->getExtension('Bolt\Twig\TwigExtension')->ymllink($context["msg"]);
                    echo "
            </div>
            ";
                    // line 23
                    $context["shown"] = twig_array_merge((isset($context["shown"]) ? $context["shown"] : null), array(0 => $context["msg"]));
                    // line 24
                    echo "        ";
                }
                // line 25
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
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
        return "@bolt/_sub/_messages.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 25,  156 => 24,  154 => 23,  149 => 21,  143 => 19,  140 => 18,  135 => 17,  132 => 16,  119 => 15,  102 => 12,  98 => 11,  94 => 10,  91 => 9,  86 => 7,  81 => 6,  78 => 5,  75 => 3,  72 => 2,  61 => 1,  53 => 42,  49 => 40,  46 => 38,  40 => 36,  33 => 32,  29 => 30,  27 => 29,  25 => 28,  22 => 27,  19 => 14,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@bolt/_sub/_messages.twig", "");
    }
}
