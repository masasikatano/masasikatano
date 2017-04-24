<?php

/* @bolt/_buic/_select.twig */
class __TwigTemplate_b70dadaca6b4666ea621893d6dd7bc43bdf1f948771e4f5aec4ed4697d739e49 extends Twig_Template
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

    // line 23
    public function getbuic_select($__opt__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "opt" => $__opt__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 24
            echo "    ";
            ob_start();
            // line 25
            echo "        ";
            $context["options"] = (($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "options", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "options", array()), array())) : (array()));
            // line 26
            echo "        ";
            $context["multiple"] = (($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "multiple", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "multiple", array()), false)) : (false));
            // line 27
            echo "
        ";
            // line 29
            echo "        ";
            if ( !(isset($context["multiple"]) ? $context["multiple"] : null)) {
                // line 30
                echo "            ";
                $context["has_empty_val"] = false;
                // line 31
                echo "            ";
                $context["has_selected_val"] = false;
                // line 32
                echo "
            ";
                // line 33
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 34
                    echo "                ";
                    if (($this->getAttribute($context["option"], "value", array()) == "")) {
                        // line 35
                        echo "                    ";
                        $context["has_empty_val"] = true;
                        // line 36
                        echo "                ";
                    }
                    // line 37
                    echo "                ";
                    if ($this->getAttribute($context["option"], "selected", array())) {
                        // line 38
                        echo "                    ";
                        $context["has_selected_val"] = true;
                        // line 39
                        echo "                ";
                    }
                    // line 40
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 41
                echo "
            ";
                // line 42
                if ( !(isset($context["has_empty_val"]) ? $context["has_empty_val"] : null)) {
                    // line 43
                    echo "                ";
                    $context["options"] = twig_array_merge(array(0 => array("value" => "", "text" => "", "selected" =>  !(isset($context["has_selected_val"]) ? $context["has_selected_val"] : null))), (isset($context["options"]) ? $context["options"] : null));
                    // line 44
                    echo "            ";
                }
                // line 45
                echo "        ";
            }
            // line 46
            echo "
        ";
            // line 47
            $context["conf"] = array("all" => (($this->getAttribute(            // line 48
(isset($context["opt"]) ? $context["opt"] : null), "all", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "all", array()), false)) : (false)), "class" => (($this->getAttribute(            // line 49
(isset($context["opt"]) ? $context["opt"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "class", array()))) : ("")), "clear" => (($this->getAttribute(            // line 50
(isset($context["opt"]) ? $context["opt"] : null), "clear", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "clear", array()), false)) : (false)), "disabled" => (($this->getAttribute(            // line 51
(isset($context["opt"]) ? $context["opt"] : null), "disabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "disabled", array()), false)) : (false)), "id" => (($this->getAttribute(            // line 52
(isset($context["opt"]) ? $context["opt"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "id", array()), (($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "name+id", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "name+id", array(), "array"), "")) : ("")))) : ((($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "name+id", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "name+id", array(), "array"), "")) : ("")))), "multiple" =>             // line 53
(isset($context["multiple"]) ? $context["multiple"] : null), "name" => (($this->getAttribute(            // line 54
(isset($context["opt"]) ? $context["opt"] : null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "name", array()), (($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "name+id", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "name+id", array(), "array"), "")) : ("")))) : ((($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "name+id", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "name+id", array(), "array"), "")) : ("")))), "options" =>             // line 55
(isset($context["options"]) ? $context["options"] : null), "required" => (($this->getAttribute(            // line 56
(isset($context["opt"]) ? $context["opt"] : null), "required", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "required", array()), false)) : (false)));
            // line 58
            echo "
        ";
            // line 59
            $context["attributes"] = array("disabled" => $this->getAttribute(            // line 60
(isset($context["conf"]) ? $context["conf"] : null), "disabled", array()), "id" => $this->getAttribute(            // line 61
(isset($context["conf"]) ? $context["conf"] : null), "id", array()), "multiple" => $this->getAttribute(            // line 62
(isset($context["conf"]) ? $context["conf"] : null), "multiple", array()), "name" => $this->getAttribute(            // line 63
(isset($context["conf"]) ? $context["conf"] : null), "name", array()), "required" => $this->getAttribute(            // line 64
(isset($context["conf"]) ? $context["conf"] : null), "required", array()));
            // line 66
            echo "
        <div";
            // line 67
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->hclass(array(0 => "buic-select", 1 => $this->getAttribute((isset($context["conf"]) ? $context["conf"] : null), "class", array())));
            echo " data-bolt-widget=\"buicSelect\">
            <div>
                <div>
                    <select";
            // line 70
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->hattr((isset($context["attributes"]) ? $context["attributes"] : null));
            echo ">
                        ";
            // line 71
            $context["last_optgroup"] = false;
            // line 72
            echo "
                        ";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["conf"]) ? $context["conf"] : null), "options", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 74
                echo "                            ";
                // line 75
                echo "                            ";
                $context["optgroup"] = (($this->getAttribute($context["option"], "group", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["option"], "group", array()), false)) : (false));
                // line 76
                echo "                            ";
                if (((isset($context["optgroup"]) ? $context["optgroup"] : null) != (isset($context["last_optgroup"]) ? $context["last_optgroup"] : null))) {
                    // line 77
                    echo "                                ";
                    if (((isset($context["last_optgroup"]) ? $context["last_optgroup"] : null) != false)) {
                        // line 78
                        echo "                                    </optgroup>
                                ";
                    }
                    // line 80
                    echo "                                ";
                    if (((isset($context["optgroup"]) ? $context["optgroup"] : null) != false)) {
                        // line 81
                        echo "                                    <optgroup label=\"";
                        echo twig_escape_filter($this->env, (isset($context["optgroup"]) ? $context["optgroup"] : null), "html", null, true);
                        echo "\">
                                ";
                    }
                    // line 83
                    echo "                                ";
                    $context["last_optgroup"] = (isset($context["optgroup"]) ? $context["optgroup"] : null);
                    // line 84
                    echo "                            ";
                }
                // line 85
                echo "
                            ";
                // line 87
                echo "                            ";
                $context["opttext"] = strip_tags((($this->getAttribute($context["option"], "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["option"], "text", array()), $this->getAttribute($context["option"], "value", array()))) : ($this->getAttribute($context["option"], "value", array()))));
                // line 88
                echo "                            ";
                $context["optattr"] = array("value!" => $this->getAttribute(                // line 89
$context["option"], "value", array()), "selected" => (($this->getAttribute(                // line 90
$context["option"], "selected", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["option"], "selected", array()), false)) : (false)), "label" => (((($this->getAttribute(                // line 91
$context["option"], "value", array()) == "") && ((isset($context["opttext"]) ? $context["opttext"] : null) == ""))) ? ("–") : (false)));
                // line 93
                echo "                            <option";
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->hattr((isset($context["optattr"]) ? $context["optattr"] : null));
                echo ">";
                echo twig_escape_filter($this->env, (isset($context["opttext"]) ? $context["opttext"] : null), "html", null, true);
                echo "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "
                        ";
            // line 97
            echo "                        ";
            if (((isset($context["last_optgroup"]) ? $context["last_optgroup"] : null) != false)) {
                // line 98
                echo "                            </optgroup>
                        ";
            }
            // line 100
            echo "
                    </select>
                </div>
                ";
            // line 103
            if (($this->getAttribute((isset($context["conf"]) ? $context["conf"] : null), "clear", array()) || $this->getAttribute((isset($context["conf"]) ? $context["conf"] : null), "all", array()))) {
                // line 104
                echo "                    <div>
                        ";
                // line 105
                if ($this->getAttribute((isset($context["conf"]) ? $context["conf"] : null), "clear", array())) {
                    // line 106
                    echo "                            <button type=\"button\" class=\"btn select-none\">
                                <span class=\"sr-only\">";
                    // line 107
                    echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.select-none");
                    echo "</span>
                            </button>
                        ";
                }
                // line 110
                echo "                        ";
                if ($this->getAttribute((isset($context["conf"]) ? $context["conf"] : null), "all", array())) {
                    // line 111
                    echo "                            <button type=\"button\" class=\"btn select-all\">
                                <span class=\"sr-only\">";
                    // line 112
                    echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.select-all");
                    echo "</span>
                            </button>
                        ";
                }
                // line 115
                echo "                    </div>
                ";
            }
            // line 117
            echo "            </div>
        </div>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
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
        return "@bolt/_buic/_select.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 117,  241 => 115,  235 => 112,  232 => 111,  229 => 110,  223 => 107,  220 => 106,  218 => 105,  215 => 104,  213 => 103,  208 => 100,  204 => 98,  201 => 97,  198 => 95,  187 => 93,  185 => 91,  184 => 90,  183 => 89,  181 => 88,  178 => 87,  175 => 85,  172 => 84,  169 => 83,  163 => 81,  160 => 80,  156 => 78,  153 => 77,  150 => 76,  147 => 75,  145 => 74,  141 => 73,  138 => 72,  136 => 71,  132 => 70,  126 => 67,  123 => 66,  121 => 64,  120 => 63,  119 => 62,  118 => 61,  117 => 60,  116 => 59,  113 => 58,  111 => 56,  110 => 55,  109 => 54,  108 => 53,  107 => 52,  106 => 51,  105 => 50,  104 => 49,  103 => 48,  102 => 47,  99 => 46,  96 => 45,  93 => 44,  90 => 43,  88 => 42,  85 => 41,  79 => 40,  76 => 39,  73 => 38,  70 => 37,  67 => 36,  64 => 35,  61 => 34,  57 => 33,  54 => 32,  51 => 31,  48 => 30,  45 => 29,  42 => 27,  39 => 26,  36 => 25,  33 => 24,  21 => 23,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@bolt/_buic/_select.twig", "");
    }
}
