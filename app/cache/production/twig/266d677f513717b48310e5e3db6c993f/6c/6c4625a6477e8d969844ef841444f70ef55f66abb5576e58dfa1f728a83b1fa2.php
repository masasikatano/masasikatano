<?php

/* partials/_sub_menu.twig */
class __TwigTemplate_9a70101e1d47d620d64f55d47190605c556013be57291a070c4ce3e968a1c14e extends Twig_Template
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
        // line 6
        echo "
";
        // line 8
        if ( !array_key_exists("withsubmenus", $context)) {
            // line 9
            echo "    ";
            $context["withsubmenus"] = true;
        }
        // line 11
        echo "
";
        // line 38
        echo "
";
        // line 40
        $context["__internal_18e6de788db31dd84090037508dcb6185261a3e2d0da39e816922c8c723a001a"] = $this;
        // line 41
        echo "
";
        // line 43
        echo "<ul  class=\"menu vertical medium-horizontal ";
        echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) ? $context["class"] : null), "")) : ("")), "html", null, true);
        echo "\" data-responsive-menu=\"accordion medium-dropdown\">
";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menu"]) ? $context["menu"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 45
            echo "    ";
            if ($this->getAttribute($context["item"], "label", array(), "any", true, true)) {
                // line 46
                echo "        ";
                echo $context["__internal_18e6de788db31dd84090037508dcb6185261a3e2d0da39e816922c8c723a001a"]->getdisplay_menu_item($context["item"], $context["loop"], "", (isset($context["withsubmenus"]) ? $context["withsubmenus"] : null));
                echo "
    ";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "</ul>

";
    }

    // line 14
    public function getdisplay_menu_item($__item__ = null, $__loop__ = null, $__extraclass__ = null, $__withsubmenus__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "item" => $__item__,
            "loop" => $__loop__,
            "extraclass" => $__extraclass__,
            "withsubmenus" => $__withsubmenus__,
            "varargs" => func_num_args() > 4 ? array_slice(func_get_args(), 4) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 15
            echo "    ";
            $context["__internal_56a9b313796a8270842b07bea81b496707e788022843db6a1099187105e73e3b"] = $this;
            // line 16
            echo "    ";
            ob_start();
            // line 17
            echo "    <li class=\"index-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index", array()), "html", null, true);
            // line 18
            echo ((((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "path", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "path", array()), "")) : ("")) == "homepage")) ? (" menu-text") : (""));
            // line 19
            echo (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first", array())) ? (" first") : (""));
            // line 20
            echo (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last", array())) ? (" last") : (""));
            // line 21
            echo ((((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "submenu", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "submenu", array()), false)) : (false)) && (isset($context["withsubmenus"]) ? $context["withsubmenus"] : null))) ? (" is-dropdown-submenu-parent") : (""));
            // line 22
            echo (($this->env->getExtension('Bolt\Twig\TwigExtension')->current((isset($context["item"]) ? $context["item"] : null))) ? (" active") : (""));
            echo "\">

        <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link", array()), "html", null, true);
            echo "\" title='";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title", array()), "")) : ("")));
            echo "' class='";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "class", array()), "")) : ("")), "html", null, true);
            echo "'>";
            // line 25
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label", array()), "-")) : ("-")), "html", null, true);
            // line 26
            echo "</a>

        ";
            // line 28
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "submenu", array(), "any", true, true) && (isset($context["withsubmenus"]) ? $context["withsubmenus"] : null))) {
                // line 29
                echo "            <ul class=\"menu submenu vertical\" data-submenu>
                ";
                // line 30
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "submenu", array()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["submenu"]) {
                    // line 31
                    echo "                    ";
                    echo $context["__internal_56a9b313796a8270842b07bea81b496707e788022843db6a1099187105e73e3b"]->getdisplay_menu_item($context["submenu"], $context["loop"]);
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submenu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "            </ul>
        ";
            }
            // line 35
            echo "    </li>
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
        return "partials/_sub_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 35,  177 => 33,  160 => 31,  143 => 30,  140 => 29,  138 => 28,  134 => 26,  132 => 25,  125 => 24,  120 => 22,  118 => 21,  116 => 20,  114 => 19,  112 => 18,  109 => 17,  106 => 16,  103 => 15,  88 => 14,  82 => 49,  64 => 46,  61 => 45,  44 => 44,  39 => 43,  36 => 41,  34 => 40,  31 => 38,  28 => 11,  24 => 9,  22 => 8,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "partials/_sub_menu.twig", "");
    }
}
