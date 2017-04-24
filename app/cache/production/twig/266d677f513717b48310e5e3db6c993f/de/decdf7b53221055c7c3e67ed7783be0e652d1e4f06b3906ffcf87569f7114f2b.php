<?php

/* @bolt/_nav/_secondary.twig */
class __TwigTemplate_c4f454488f058639836801cb22895f483021486eeda1e6f909f977d8ce346a1e extends Twig_Template
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
        $context["nav"] = $this->loadTemplate("@bolt/_nav/_macros.twig", "@bolt/_nav/_secondary.twig", 1);
        // line 2
        echo "
<ul class=\"nav\">
    ";
        // line 4
        if ( !(null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "get", array(0 => "authentication"), "method"))) {
            // line 5
            echo "
        ";
            // line 7
            echo "        ";
            echo twig_include($this->env, $context, "@bolt/_nav/_secondary-search.twig");
            echo "

        ";
            // line 10
            echo "        ";
            echo $context["nav"]->getlink("fa:dashboard", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.dashboard"), "dashboard", ((isset($context["page_nav"]) ? $context["page_nav"] : null) == "Dashboard"));
            echo "

        ";
            // line 13
            echo "        <li class=\"visible-xs\">
            <a href=\"";
            // line 14
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\" target=\"_blank\"><i class=\"icon fa fa-external-link-square\"></i> ";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.view-site");
            echo "</a>
        </li>

        ";
            // line 18
            echo "        ";
            echo $context["nav"]->getheading($this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Content"), "fa:file-text");
            echo "
        ";
            // line 19
            echo twig_include($this->env, $context, "@bolt/_nav/_secondary-content.twig");
            echo "

        ";
            // line 22
            echo "        ";
            if ($this->env->getExtension('Bolt\Twig\TwigExtension')->isAllowed("settings")) {
                // line 23
                echo "            ";
                ob_start();
                echo twig_include($this->env, $context, "@bolt/_nav/_secondary-configuration.twig");
                $context["nav_config"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 24
                echo "            ";
                ob_start();
                echo twig_include($this->env, $context, "@bolt/_nav/_secondary-filemanagement.twig");
                $context["nav_files"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 25
                echo "            ";
                ob_start();
                echo twig_include($this->env, $context, "@bolt/_nav/_secondary-translations.twig");
                $context["nav_trans"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 26
                echo "            ";
                // line 27
                echo "            ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "menu.admin", array(), "array"), "get", array(0 => "extend"), "method"), "children", array()) || $this->env->getExtension('Bolt\Twig\TwigExtension')->isAllowed("extensions||extensions:config"))) {
                    // line 28
                    echo "                ";
                    ob_start();
                    echo twig_include($this->env, $context, "@bolt/_nav/_secondary-extensions.twig");
                    $context["nav_extend"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                    // line 29
                    echo "            ";
                } else {
                    // line 30
                    echo "                ";
                    $context["nav_extend"] = "";
                    // line 31
                    echo "            ";
                }
                // line 32
                echo "
            ";
                // line 33
                if ((((twig_trim_filter((isset($context["nav_config"]) ? $context["nav_config"] : null)) || twig_trim_filter((isset($context["nav_files"]) ? $context["nav_files"] : null))) || twig_trim_filter((isset($context["nav_trans"]) ? $context["nav_trans"] : null))) || twig_trim_filter((isset($context["nav_extend"]) ? $context["nav_extend"] : null)))) {
                    // line 34
                    echo "                ";
                    echo $context["nav"]->getheading($this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.settings"), "fa:wrench");
                    echo "

                ";
                    // line 36
                    echo twig_escape_filter($this->env, (isset($context["nav_config"]) ? $context["nav_config"] : null), "html", null, true);
                    echo "
                ";
                    // line 37
                    echo twig_escape_filter($this->env, (isset($context["nav_files"]) ? $context["nav_files"] : null), "html", null, true);
                    echo "
                ";
                    // line 38
                    echo twig_escape_filter($this->env, (isset($context["nav_trans"]) ? $context["nav_trans"] : null), "html", null, true);
                    echo "
                ";
                    // line 39
                    echo twig_escape_filter($this->env, (isset($context["nav_extend"]) ? $context["nav_extend"] : null), "html", null, true);
                    echo "
            ";
                }
                // line 41
                echo "
        ";
            }
            // line 43
            echo "

        ";
            // line 45
            echo $context["nav"]->getcollapse();
            echo "

    ";
        } else {
            // line 48
            echo "
        ";
            // line 50
            echo "        <li>
            <a href=\"";
            // line 51
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\" target=\"_blank\"><i class=\"fa fa-external-link-square\"></i> ";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.view-site");
            echo "</a>
        </li>

        ";
            // line 55
            echo "        <li>
            <a href=\"";
            // line 56
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\"><i class=\"fa fa-signin\"></i> ";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.login");
            echo "</a>
        </li>
    ";
        }
        // line 59
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "@bolt/_nav/_secondary.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 59,  159 => 56,  156 => 55,  148 => 51,  145 => 50,  142 => 48,  136 => 45,  132 => 43,  128 => 41,  123 => 39,  119 => 38,  115 => 37,  111 => 36,  105 => 34,  103 => 33,  100 => 32,  97 => 31,  94 => 30,  91 => 29,  86 => 28,  83 => 27,  81 => 26,  76 => 25,  71 => 24,  66 => 23,  63 => 22,  58 => 19,  53 => 18,  45 => 14,  42 => 13,  36 => 10,  30 => 7,  27 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@bolt/_nav/_secondary.twig", "");
    }
}
