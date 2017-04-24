<?php

/* @bolt/editcontent/_buttons.twig */
class __TwigTemplate_7f2868c74e534a327f3219a10c9ae73f265f1850f947048476174d3ad5508bb7 extends Twig_Template
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
        $context["__internal_3ca01bd739ad4dbf00cecdd2e54f0547db8268999820479ea3abc24a1d4e3c09"] = $this->loadTemplate("@bolt/_buic/_moment.twig", "@bolt/editcontent/_buttons.twig", 1);
        // line 2
        echo "
<div class=\"form-group hidden-xs\">
    <div class=\"col-xs-12\">

        ";
        // line 7
        echo "        <div class=\"btn-group\">
            <button type=\"button\" class=\"btn btn-primary\" id=\"savecontinuebutton\">
                <i class=\"fa fa-fw fa-flag\"></i> ";
        // line 9
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("contenttypes.generic.save", array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array())));
        echo "
            </button>
            ";
        // line 12
        echo "            <button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\">
                <span class=\"caret\"></span>
                <span class=\"sr-only\">Toggle Dropdown</span>
            </button>
            <ul class=\"dropdown-menu\" role=\"menu\">
                <li>
                    <button type=\"submit\" class=\"btn btn-link\" id=\"savebutton\">
                        <i class=\"fa fa-fw fa-flag\"></i> ";
        // line 19
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.save-and-return-overview");
        echo "
                    </button>
                </li>
                <li>
                    <button type=\"submit\" class=\"btn btn-link\" id=\"savenewbutton\">
                        <i class=\"fa fa-fw fa-flag\"></i> ";
        // line 24
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.save-and-create-new-record");
        echo "
                    </button>
                </li>
            </ul>
        </div>

        ";
        // line 31
        echo "        ";
        if (( !$this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "liveeditor", array(), "any", true, true) || $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "liveeditor", array()))) {
            // line 32
            echo "            <div class=\"btn-group\">
                <button type=\"button\" class=\"btn btn-secondary\" id=\"live-editor-button\">
                    <i class=\"fa fa-pencil\"></i> ";
            // line 34
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.live-edit");
            echo "
                </button>
            </div>
        ";
        }
        // line 38
        echo "
        ";
        // line 40
        echo "        ";
        if ( !(($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "viewless", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array(), "any", false, true), "viewless", array()), false)) : (false))) {
            // line 41
            echo "            <div class=\"btn-group\">
                ";
            // line 42
            if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "routes", array()), "get", array(0 => "preview"), "method")) {
                // line 43
                echo "                    <button type=\"button\" class=\"btn btn-default\" id=\"previewbutton\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("preview", array("contenttypeslug" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "singular_slug", array()))), "html", null, true);
                echo "\">
                        <i class=\"fa fa-external-link-square\"></i> ";
                // line 44
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.preview");
                echo "
                    </button>
                ";
            } else {
                // line 47
                echo "                    <button type=\"button\" class=\"btn btn-disabled\">
                        <i class=\"fa fa-external-link-square\"></i> ";
                // line 48
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.no-preview");
                echo "
                    </button>
                ";
            }
            // line 51
            echo "
                ";
            // line 53
            echo "                ";
            if ((($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "status", array()) == "published") && $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "link", array(), "any", true, true))) {
                // line 54
                echo "                    <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                        <span class=\"caret\"></span>
                        <span class=\"sr-only\">Toggle Dropdown</span>
                    </button>
                    <ul class=\"dropdown-menu\" role=\"menu\">
                        <li>
                            <a href=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "link", array()), "html", null, true);
                echo "\" target=\"_blank\">
                                <i class=\"fa fa-external-link-square\"></i> ";
                // line 61
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("View (saved version) on site");
                echo "
                            </a>
                        </li>
                    </ul>
                ";
            }
            // line 66
            echo "            </div>
        ";
        }
        // line 68
        echo "
        ";
        // line 70
        echo "        <p class=\"lastsaved form-control-static\">
            ";
        // line 71
        if (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "id", array()) != 0)) {
            // line 72
            echo "                ";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.saved-on-colon");
            echo "
                <strong>";
            // line 73
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->localeDateTime($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "datechanged", array()), "%c");
            echo "</strong>
                <small>(";
            // line 74
            echo $context["__internal_3ca01bd739ad4dbf00cecdd2e54f0547db8268999820479ea3abc24a1d4e3c09"]->getbuic_moment($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "datechanged", array()));
            echo ")</small>
            ";
        } else {
            // line 76
            echo "                ";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("contenttypes.generic.not-saved-yet", array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array())));
            echo "
            ";
        }
        // line 78
        echo "        </p>

    </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/_buttons.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 78,  159 => 76,  154 => 74,  150 => 73,  145 => 72,  143 => 71,  140 => 70,  137 => 68,  133 => 66,  125 => 61,  121 => 60,  113 => 54,  110 => 53,  107 => 51,  101 => 48,  98 => 47,  92 => 44,  87 => 43,  85 => 42,  82 => 41,  79 => 40,  76 => 38,  69 => 34,  65 => 32,  62 => 31,  53 => 24,  45 => 19,  36 => 12,  31 => 9,  27 => 7,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@bolt/editcontent/_buttons.twig", "");
    }
}
