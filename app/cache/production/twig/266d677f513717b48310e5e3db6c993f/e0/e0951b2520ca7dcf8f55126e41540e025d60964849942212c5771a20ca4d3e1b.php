<?php

/* @bolt/_nav/_secondary-content.twig */
class __TwigTemplate_8426da70874df8e4cf2824470e1d1b25b05ca7de8c43399fe65e3e1ad1c48560 extends Twig_Template
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
        $context["definedSubs"] = array();
        // line 2
        echo "
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "contenttypes"), "method"));
        foreach ($context['_seq'] as $context["slug"] => $context["contenttype"]) {
            // line 4
            echo "    ";
            if ($this->env->getExtension('Bolt\Twig\TwigExtension')->isAllowed(("contenttype:" . $context["slug"]))) {
                // line 5
                echo "        ";
                $context["sub_view"] = array("icon" => (($this->getAttribute(                // line 6
$context["contenttype"], "icon_many", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["contenttype"], "icon_many", array()), (($this->getAttribute($context["contenttype"], "show_in_menu", array())) ? ("fa:files-o") : ("fa:th-list")))) : ((($this->getAttribute($context["contenttype"], "show_in_menu", array())) ? ("fa:files-o") : ("fa:th-list")))), "label" => $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("contenttypes.generic.view", array("%contenttypes%" => $this->getAttribute(                // line 7
$context["contenttype"], "name", array()))), "link" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("overview", array("contenttypeslug" =>                 // line 8
$context["slug"])));
                // line 10
                echo "        ";
                $context["sub_new"] = array("icon" => "fa:plus", "label" => $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("contenttypes.generic.new", array("%contenttype%" => $this->getAttribute(                // line 12
$context["contenttype"], "singular_name", array()))), "link" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editcontent", array("contenttypeslug" =>                 // line 13
$context["slug"])), "isallowed" => (("contenttype:" .                 // line 14
$context["slug"]) . ":create"));
                // line 16
                echo "        ";
                $context["sub"] = array(0 => (isset($context["sub_view"]) ? $context["sub_view"] : null), 1 => (isset($context["sub_new"]) ? $context["sub_new"] : null), 2 => "-");
                // line 17
                echo "
        ";
                // line 19
                echo "        ";
                if (($this->getAttribute($context["contenttype"], "show_in_menu", array()) == "true")) {
                    // line 20
                    echo "
            ";
                    // line 21
                    $template_storage = $context['app']['storage'];
                    $context['records'] =                     $template_storage->getContent((isset($context["slug"]) ? $context["slug"] : null), array("limit" => 4, "hydrate" => false, "order" => "-datechanged") );
                    // line 22
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["records"]) ? $context["records"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
                        // line 23
                        echo "                ";
                        $context["sub"] = twig_array_merge((isset($context["sub"]) ? $context["sub"] : null), array(0 => array("icon" => (($this->getAttribute(                        // line 25
$context["contenttype"], "icon_one", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["contenttype"], "icon_one", array()), "fa:file-text-o")) : ("fa:file-text-o")), "label" => twig_trim_filter(twig_replace_filter($this->getAttribute(                        // line 26
$context["record"], "excerpt", array(0 => 80, 1 => true), "method"), array("</b>" => "&nbsp;</b>"))), "link" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editcontent", array("contenttypeslug" =>                         // line 27
$context["slug"], "id" => $this->getAttribute($context["record"], "id", array()))))));
                        // line 30
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 31
                    echo "
            ";
                    // line 32
                    $context["label"] = $this->env->getExtension('Bolt\Twig\TwigExtension')->trans(array(0 => "contenttypes", 1 => $this->getAttribute($context["contenttype"], "slug", array()), 2 => "name", 3 => "plural"), array("DEFAULT" => $this->getAttribute($context["contenttype"], "name", array())));
                    // line 33
                    echo "            ";
                    $context["active"] = (((isset($context["page_nav"]) ? $context["page_nav"] : null) == "Content/*") && ((($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "slug", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "slug", array()))) : ("")) == $context["slug"]));
                    // line 34
                    echo "
            ";
                    // line 35
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nav"]) ? $context["nav"] : null), "submenu", array(0 => (($this->getAttribute($context["contenttype"], "icon_many", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["contenttype"], "icon_many", array()), "")) : ("")), 1 => (isset($context["label"]) ? $context["label"] : null), 2 => (isset($context["sub"]) ? $context["sub"] : null), 3 => (isset($context["active"]) ? $context["active"] : null), 4 => true), "method"), "html", null, true);
                    echo "

        ";
                    // line 38
                    echo "        ";
                } else {
                    // line 39
                    echo "
            ";
                    // line 40
                    $context["sub_view"] = array("icon" => (($this->getAttribute(                    // line 41
$context["contenttype"], "icon_many", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["contenttype"], "icon_many", array()), (($this->getAttribute($context["contenttype"], "show_in_menu", array())) ? ("fa:files-o") : ("fa:th-list")))) : ((($this->getAttribute($context["contenttype"], "show_in_menu", array())) ? ("fa:files-o") : ("fa:th-list")))), "label" => $this->env->getExtension('Bolt\Twig\TwigExtension')->trans(array(0 => "contenttypes", 1 => $this->getAttribute(                    // line 42
$context["contenttype"], "slug", array()), 2 => "name", 3 => "plural"), array("DEFAULT" => $this->getAttribute($context["contenttype"], "name", array()))), "link" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("overview", array("contenttypeslug" =>                     // line 43
$context["slug"])));
                    // line 45
                    echo "
            ";
                    // line 46
                    $context["key"] = (($this->getAttribute($context["contenttype"], "show_in_menu", array())) ? ($this->getAttribute($context["contenttype"], "show_in_menu", array())) : ($this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.other-content")));
                    // line 47
                    echo "            ";
                    if ($this->getAttribute((isset($context["definedSubs"]) ? $context["definedSubs"] : null), (isset($context["key"]) ? $context["key"] : null), array(), "array", true, true)) {
                        // line 48
                        echo "                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["definedSubs"]) ? $context["definedSubs"] : null));
                        foreach ($context['_seq'] as $context["submenuName"] => $context["submenudef"]) {
                            // line 49
                            echo "                    ";
                            if (((isset($context["key"]) ? $context["key"] : null) == $context["submenuName"])) {
                                // line 50
                                echo "                        ";
                                $context["submenudef"] = twig_array_merge($context["submenudef"], array(0 => (isset($context["sub_view"]) ? $context["sub_view"] : null)));
                                // line 51
                                echo "                        ";
                                $context["definedSubs"] = twig_array_merge((isset($context["definedSubs"]) ? $context["definedSubs"] : null), array($context["submenuName"] => $context["submenudef"]));
                                // line 52
                                echo "                    ";
                            }
                            // line 53
                            echo "                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['submenuName'], $context['submenudef'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 54
                        echo "            ";
                    } else {
                        // line 55
                        echo "                ";
                        $context["definedSubs"] = twig_array_merge((isset($context["definedSubs"]) ? $context["definedSubs"] : null), array((isset($context["key"]) ? $context["key"] : null) => array(0 => (isset($context["sub_view"]) ? $context["sub_view"] : null))));
                        // line 56
                        echo "            ";
                    }
                    // line 57
                    echo "
        ";
                }
                // line 59
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['slug'], $context['contenttype'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "
";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["definedSubs"]) ? $context["definedSubs"] : null));
        foreach ($context['_seq'] as $context["submenuName"] => $context["submenudef"]) {
            // line 64
            echo "    ";
            // line 65
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nav"]) ? $context["nav"] : null), "submenu", array(0 => "fa:th-list", 1 => $context["submenuName"], 2 => $context["submenudef"], 3 => false, 4 => false, 5 => false, 6 => true), "method"), "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['submenuName'], $context['submenudef'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "@bolt/_nav/_secondary-content.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 65,  160 => 64,  156 => 63,  153 => 61,  146 => 59,  142 => 57,  139 => 56,  136 => 55,  133 => 54,  127 => 53,  124 => 52,  121 => 51,  118 => 50,  115 => 49,  110 => 48,  107 => 47,  105 => 46,  102 => 45,  100 => 43,  99 => 42,  98 => 41,  97 => 40,  94 => 39,  91 => 38,  86 => 35,  83 => 34,  80 => 33,  78 => 32,  75 => 31,  69 => 30,  67 => 27,  66 => 26,  65 => 25,  63 => 23,  58 => 22,  55 => 21,  52 => 20,  49 => 19,  46 => 17,  43 => 16,  41 => 14,  40 => 13,  39 => 12,  37 => 10,  35 => 8,  34 => 7,  33 => 6,  31 => 5,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@bolt/_nav/_secondary-content.twig", "");
    }
}
