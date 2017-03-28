<?php

/* @bolt/editcontent/_includes-data.twig */
class __TwigTemplate_db35cb483730b01fbf142b1c992febfa38e6411e8e192e251283e662063fa949 extends Twig_Template
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
        echo "
";
        // line 3
        ob_start();
        // line 4
        echo "    <div id=\"";
        echo "%NOTICE_ID%";
        echo "\" class=\"alert alert-danger alert-dismissible\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
        <label for=\"%FIELD_ID%\">";
        // line 6
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.field-fieldname");
        echo "</label>
        %MESSAGE%
    </div>
";
        $context["template_alertbox"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "
";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("validation.alertbox", twig_trim_filter((isset($context["template_alertbox"]) ? $context["template_alertbox"] : null))), "html", null, true);
        echo "
";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("validation.generic_msg", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.required-is-or-match-pattern")), "html", null, true);
        echo "

";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("editcontent.msg.change_quit", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.warning-unfinished-changes-loss")), "html", null, true);
        echo "
";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("editcontent.msg.saving", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.saving-ellipsis")), "html", null, true);
        echo "

";
        // line 18
        echo "
";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "fieldtypes", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 20
            echo "    ";
            echo twig_include($this->env, $context, (("@bolt/editcontent/fielddata/_" . $context["type"]) . ".twig"), array(), true, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
";
        // line 24
        echo "
";
        // line 25
        if ((((twig_in_filter("file", $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "fieldtypes", array())) || twig_in_filter("filelist", $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "fieldtypes", array()))) || twig_in_filter("image", $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "fieldtypes", array()))) || twig_in_filter("imagelist", $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "fieldtypes", array())))) {
            // line 26
            echo "    ";
            echo twig_include($this->env, $context, "@bolt/editcontent/data/_uploads.twig");
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/_includes-data.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 26,  101 => 25,  98 => 24,  95 => 22,  78 => 20,  61 => 19,  58 => 18,  53 => 15,  49 => 14,  44 => 12,  40 => 11,  37 => 10,  30 => 6,  24 => 4,  22 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@bolt/editcontent/_includes-data.twig", "");
    }
}
