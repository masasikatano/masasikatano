<?php

/* @bolt/_sub/_record_list.twig */
class __TwigTemplate_68c57908e93dfc2e970eb0ee68a821a0c9a8faf4c944d30e962987d0fd5e72af extends Twig_Template
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
    public function getrecord_list($__contenttype__ = null, $__multiplecontent__ = null, $__permissions__ = null, $__extra_classes__ = null, $__async__ = null, $__filter__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "contenttype" => $__contenttype__,
            "multiplecontent" => $__multiplecontent__,
            "permissions" => $__permissions__,
            "extra_classes" => $__extra_classes__,
            "async" => $__async__,
            "filter" => $__filter__,
            "varargs" => func_num_args() > 6 ? array_slice(func_get_args(), 6) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            $context["async"] = ((array_key_exists("async", $context)) ? (_twig_default_filter((isset($context["async"]) ? $context["async"] : null), false)) : (false));
            // line 3
            echo "    ";
            $context["lastgroup"] = "----";
            // line 4
            echo "    ";
            $context["any_deletable"] = false;
            // line 5
            echo "    ";
            $context["any_editable"] = false;
            // line 6
            echo "    ";
            $context["includes"] = array(0 => (("@bolt/custom/listing/" . $this->getAttribute(            // line 7
(isset($context["contenttype"]) ? $context["contenttype"] : null), "slug", array())) . ".twig"), 1 => "@bolt/_sub/_listing.twig");
            // line 10
            echo "
    ";
            // line 11
            if ( !(isset($context["async"]) ? $context["async"] : null)) {
                // line 12
                echo "        ";
                echo twig_include($this->env, $context, "@bolt/_sub/_record_list_data.twig");
                echo "
    ";
            }
            // line 14
            echo "
    ";
            // line 15
            ob_start();
            // line 16
            echo "        <button type=\"button\" data-stb-cmd=\"record:delete\" class=\"danger separator\"><i class=\"fa fa-trash\"></i> ";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.delete");
            echo "</button>
        <button type=\"button\" data-stb-cmd=\"record:publish\"><i class=\"fa fa-circle status-published\"></i> ";
            // line 17
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.publish");
            echo "</button>
        <button type=\"button\" data-stb-cmd=\"record:depublish\"><i class=\"fa fa-circle status-held\"></i> ";
            // line 18
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.depublish");
            echo "</button>
        <button type=\"button\" data-stb-cmd=\"record:draft\"><i class=\"fa fa-circle status-draft\"></i> ";
            // line 19
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.draft");
            echo "</button>
    ";
            $context["selection_toolbar"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 21
            echo "
    ";
            // line 22
            if ( !(isset($context["async"]) ? $context["async"] : null)) {
                // line 23
                echo "        <div class=\"buic-listing\" data-bolt-widget=\"buicListing\" data-contenttype=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "slug", array()), "html", null, true);
                echo "\" data-contenttype-name=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "singular_name", array()), "html", null, true);
                echo "\" data-bolt_csrf_token=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->token(), "html", null, true);
                echo "\">
    ";
            }
            // line 25
            echo "        <table class=\"";
            echo twig_escape_filter($this->env, (isset($context["extra_classes"]) ? $context["extra_classes"] : null), "html", null, true);
            echo " dashboardlisting listing\">
            ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["multiplecontent"]) ? $context["multiplecontent"] : null));
            $context['_iterated'] = false;
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
                // line 27
                echo "                ";
                $context["editable"] = $this->getAttribute((isset($context["permissions"]) ? $context["permissions"] : null), "edit", array());
                // line 28
                echo "                ";
                if ((isset($context["editable"]) ? $context["editable"] : null)) {
                    // line 29
                    echo "                    ";
                    $context["any_editable"] = true;
                    // line 30
                    echo "                ";
                }
                // line 31
                echo "                ";
                $context["deletable"] = $this->getAttribute((isset($context["permissions"]) ? $context["permissions"] : null), "delete", array());
                // line 32
                echo "                ";
                if ((isset($context["deletable"]) ? $context["deletable"] : null)) {
                    // line 33
                    echo "                    ";
                    $context["any_deletable"] = true;
                    // line 34
                    echo "                ";
                }
                // line 35
                echo "
                ";
                // line 36
                $context["new_group"] = ($this->getAttribute($this->getAttribute($context["content"], "group", array(), "any", false, true), "name", array(), "any", true, true) && ($this->getAttribute($context["loop"], "first", array()) || ($this->getAttribute($this->getAttribute($context["content"], "group", array()), "name", array()) != (isset($context["lastgroup"]) ? $context["lastgroup"] : null))));
                // line 37
                echo "
                ";
                // line 38
                $context["listing_vars"] = array("compact" => false, "content" =>                 // line 40
$context["content"], "excerptlength" => 380, "permissions" =>                 // line 42
(isset($context["permissions"]) ? $context["permissions"] : null), "thumbsize" => 80, "internal" => array("selection_toolbar" =>                 // line 45
(isset($context["selection_toolbar"]) ? $context["selection_toolbar"] : null)), "filter" =>                 // line 47
(isset($context["filter"]) ? $context["filter"] : null));
                // line 49
                echo "                ";
                echo twig_include($this->env, $context, (isset($context["includes"]) ? $context["includes"] : null), (isset($context["listing_vars"]) ? $context["listing_vars"] : null));
                echo "

                ";
                // line 51
                if (($this->getAttribute($this->getAttribute($context["content"], "group", array(), "any", false, true), "name", array(), "any", true, true) && ($this->getAttribute($context["loop"], "first", array()) || ($this->getAttribute($this->getAttribute($context["content"], "group", array()), "name", array()) != (isset($context["lastgroup"]) ? $context["lastgroup"] : null))))) {
                    // line 52
                    echo "                    ";
                    $context["lastgroup"] = $this->getAttribute($this->getAttribute($context["content"], "group", array()), "name", array());
                    // line 53
                    echo "                ";
                }
                // line 54
                echo "            ";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            if (!$context['_iterated']) {
                // line 55
                echo "                ";
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("contenttypes.generic.none-available", array("%contenttypes%" => $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "slug", array())));
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "        </table>

        ";
            // line 59
            $context["__internal_9478f8e7d779e9aa549c7807fc4ec8206260625e0d755628a360f16c1739a83f"] = $this->loadTemplate("@bolt/_macro/_pager.twig", "@bolt/_sub/_record_list.twig", 59);
            // line 60
            echo "        ";
            echo $context["__internal_9478f8e7d779e9aa549c7807fc4ec8206260625e0d755628a360f16c1739a83f"]->getpager($this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "slug", array()));
            echo "
    ";
            // line 61
            if ( !(isset($context["async"]) ? $context["async"] : null)) {
                // line 62
                echo "        </div>
    ";
            }
            // line 64
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

    public function getTemplateName()
    {
        return "@bolt/_sub/_record_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 64,  213 => 62,  211 => 61,  206 => 60,  204 => 59,  200 => 57,  191 => 55,  178 => 54,  175 => 53,  172 => 52,  170 => 51,  164 => 49,  162 => 47,  161 => 45,  160 => 42,  159 => 40,  158 => 38,  155 => 37,  153 => 36,  150 => 35,  147 => 34,  144 => 33,  141 => 32,  138 => 31,  135 => 30,  132 => 29,  129 => 28,  126 => 27,  108 => 26,  103 => 25,  93 => 23,  91 => 22,  88 => 21,  83 => 19,  79 => 18,  75 => 17,  70 => 16,  68 => 15,  65 => 14,  59 => 12,  57 => 11,  54 => 10,  52 => 7,  50 => 6,  47 => 5,  44 => 4,  41 => 3,  38 => 2,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@bolt/_sub/_record_list.twig", "");
    }
}
