<?php

/* @bolt/components/panel-stack.twig */
class __TwigTemplate_717b1fd2d6423a3b3a45b6af50d1dac5f6ec748087d924d43473a6bdaee30b49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("@bolt/_base/_panel.twig", "@bolt/components/panel-stack.twig", 5);
        $this->blocks = array(
            'panel_class' => array($this, 'block_panel_class'),
            'panel_icon' => array($this, 'block_panel_icon'),
            'panel_head' => array($this, 'block_panel_head'),
            'panel_body' => array($this, 'block_panel_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@bolt/_base/_panel.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_panel_class($context, array $blocks = array())
    {
        echo "panel-stack";
    }

    // line 9
    public function block_panel_icon($context, array $blocks = array())
    {
        echo "fa-paperclip";
    }

    // line 11
    public function block_panel_head($context, array $blocks = array())
    {
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.stack-files");
    }

    // line 13
    public function block_panel_body($context, array $blocks = array())
    {
        // line 14
        echo "    <fieldset class=\"buic-stack\" data-bolt-widget=\"buicStack\">
        <div class=\"stackholder\">
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "stack", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["idx"] => $context["item"]) {
            if (($context["idx"] < 7)) {
                // line 17
                echo "                <div class=\"stackitem ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "type", array()), "html", null, true);
                echo " info-pop\" data-placement=\"bottom\" data-html=\"true\" data-title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "basename", array()), "html", null, true);
                echo "\" data-content=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "info", array()), "html", null, true);
                echo "\">
                    ";
                // line 18
                if (($this->getAttribute($context["item"], "type", array()) == "image")) {
                    // line 19
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->thumbnail($this->getAttribute($context["item"], "filepath", array()), 100, 100), "html", null, true);
                    echo "\" width=\"100\" height=\"100\" alt=\"";
                    echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.thumbnail");
                    echo "\">
                    ";
                } else {
                    // line 21
                    echo "                       <strong>";
                    echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["item"], "extension", array())), "html", null, true);
                    echo "</strong>
                       <small>";
                    // line 22
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "basename", array()), "html", null, true);
                    echo "</small>
                    ";
                }
                // line 24
                echo "                </div>
            ";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 26
            echo "                <div class=\"empty\">";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.stack-empty");
            echo "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['idx'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "        </div>

        ";
        // line 30
        if ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "canUpload", array())) {
            // line 31
            echo "            <div class=\"buic-progress\" data-bolt-widget=\"buicProgress\"></div>
        ";
        }
        // line 33
        echo "
        <div class=\"stackbuttons\">
            ";
        // line 35
        if ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "canUpload", array())) {
            // line 36
            echo "                <div class=\"btn-group\">
                    <span class=\"btn btn-tertiary fileinput-button\">
                        <i class=\"fa fa-upload\"></i>
                        <span>";
            // line 39
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.upload");
            echo "</span>
                        <input id=\"fileupload-stack\"
                               type=\"file\"
                               name=\"files[]\"
                               data-url=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("upload", array("namespace" => $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "namespace", array())), true), "html", null, true);
            echo "\"
                               accept=\".";
            // line 44
            echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "filetypes", array()), ",."), "html", null, true);
            echo "\">
                    </span>
                </div>
            ";
        }
        // line 48
        echo "
            <div class=\"btn-group\">
                ";
        // line 50
        $context["attr"] = array("class" => "btn btn-tertiary", "data-bolt-widget" => array("buicBrowser" => array("namespace" => "files")), "type" => "button");
        // line 59
        echo "                <button";
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->hattr((isset($context["attr"]) ? $context["attr"] : null));
        echo "><i class=\"fa fa-download\"></i> ";
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.select");
        echo "</button>
            </div>
        </div>

        <div class=\"templates\">
            <div class=\"stackitem image\">
                <img src=\"data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACwAAAAAAQABAAACAkQBADs=\" width=\"100\" height=\"100\" alt=\"";
        // line 65
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.thumbnail");
        echo "\">
            </div>

            <div class=\"stackitem other\">
                <strong></strong>
                <small></small>
            </div>
        </div>
    </fieldset>

";
    }

    public function getTemplateName()
    {
        return "@bolt/components/panel-stack.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 65,  152 => 59,  150 => 50,  146 => 48,  139 => 44,  135 => 43,  128 => 39,  123 => 36,  121 => 35,  117 => 33,  113 => 31,  111 => 30,  107 => 28,  98 => 26,  91 => 24,  86 => 22,  81 => 21,  73 => 19,  71 => 18,  62 => 17,  56 => 16,  52 => 14,  49 => 13,  43 => 11,  37 => 9,  31 => 7,  11 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@bolt/components/panel-stack.twig", "");
    }
}
