<?php

/* @bolt/_nav/_secondary-extensions.twig */
class __TwigTemplate_fe6290a7002bc8447f134ec43fc2a28ef6a7b826bcf24e301ff7db715177facc extends Twig_Template
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
        // line 2
        $context["sub"] = array();
        // line 3
        $context["extend_menu"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "menu.admin", array(), "array"), "get", array(0 => "extend"), "method");
        // line 4
        echo "
";
        // line 5
        if ($this->env->getExtension('Bolt\Twig\TwigExtension')->isAllowed("extensions||extensions:config")) {
            // line 6
            echo "
    ";
            // line 8
            echo "    ";
            $context["sub"] = twig_array_merge((isset($context["sub"]) ? $context["sub"] : null), array(0 => array("icon" => $this->getAttribute(            // line 10
(isset($context["extend_menu"]) ? $context["extend_menu"] : null), "icon", array()), "label" => $this->getAttribute(            // line 11
(isset($context["extend_menu"]) ? $context["extend_menu"] : null), "label", array()), "link" => $this->getAttribute(            // line 12
(isset($context["extend_menu"]) ? $context["extend_menu"] : null), "uri", array()), "isallowed" => $this->getAttribute(            // line 13
(isset($context["extend_menu"]) ? $context["extend_menu"] : null), "permission", array()))));
            // line 16
            echo "
    ";
            // line 18
            echo "    ";
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["extend_menu"]) ? $context["extend_menu"] : null), "children", array())) > 0)) {
                // line 19
                echo "        ";
                $context["sub"] = twig_array_merge((isset($context["sub"]) ? $context["sub"] : null), array(0 => "-"));
                // line 20
                echo "    ";
            }
            // line 21
            echo "

";
        }
        // line 24
        echo "
";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["extend_menu"]) ? $context["extend_menu"] : null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["extend_submenu"]) {
            // line 27
            echo "    ";
            $context["sub"] = twig_array_merge((isset($context["sub"]) ? $context["sub"] : null), array(0 => array("icon" => (($this->getAttribute(            // line 29
$context["extend_submenu"], "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["extend_submenu"], "icon", array()), "fa:briefcase")) : ("fa:briefcase")), "label" => $this->getAttribute(            // line 30
$context["extend_submenu"], "label", array()), "link" => $this->getAttribute(            // line 31
$context["extend_submenu"], "uri", array()), "isallowed" => $this->getAttribute(            // line 32
$context["extend_submenu"], "permission", array()))));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extend_submenu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "
";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nav"]) ? $context["nav"] : null), "submenu", array(0 => "fa:cubes", 1 => $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.extras"), 2 => (isset($context["sub"]) ? $context["sub"] : null), 3 => ((isset($context["page_nav"]) ? $context["page_nav"] : null) == "Settings/ExtendBolt")), "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@bolt/_nav/_secondary-extensions.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 37,  73 => 36,  67 => 32,  66 => 31,  65 => 30,  64 => 29,  62 => 27,  58 => 26,  55 => 24,  50 => 21,  47 => 20,  44 => 19,  41 => 18,  38 => 16,  36 => 13,  35 => 12,  34 => 11,  33 => 10,  31 => 8,  28 => 6,  26 => 5,  23 => 4,  21 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@bolt/_nav/_secondary-extensions.twig", "");
    }
}
