<?php

/* @bolt/editcontent/fields/_meta.twig */
class __TwigTemplate_8405fac6a7eb95e5f8c319273dfa1c945772d2afd063fb54d029628622ddcf06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 50
        $this->parent = $this->loadTemplate("@bolt/_base/_fieldset.twig", "@bolt/editcontent/fields/_meta.twig", 50);
        $this->blocks = array(
            'fieldset_type' => array($this, 'block_fieldset_type'),
            'fieldset_widget' => array($this, 'block_fieldset_widget'),
            'fieldset_label_text' => array($this, 'block_fieldset_label_text'),
            'fieldset_label_class' => array($this, 'block_fieldset_label_class'),
            'fieldset_controls' => array($this, 'block_fieldset_controls'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@bolt/_base/_fieldset.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["attributes"] = array("id" => array("class" => "form-control narrow", "name_id" => "id", "readonly" => true, "type" => "text", "value" => $this->getAttribute($this->getAttribute(        // line 9
(isset($context["context"]) ? $context["context"] : null), "content", array()), "id", array())), "publish" => array("disabled" =>  !$this->getAttribute($this->getAttribute(        // line 13
(isset($context["context"]) ? $context["context"] : null), "can", array()), "publish", array()), "id" => "datepublish", "value" => ((($this->getAttribute($this->getAttribute(        // line 15
(isset($context["context"]) ? $context["context"] : null), "content", array()), "datepublish", array()) == "")) ? (twig_date_format_filter($this->env, "now", "Y-m-d H:i:s")) : ($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "datepublish", array())))), "depublish" => array("disabled" =>  !$this->getAttribute($this->getAttribute(        // line 19
(isset($context["context"]) ? $context["context"] : null), "can", array()), "depublish", array()), "id" => "datedepublish", "value" => $this->getAttribute($this->getAttribute(        // line 21
(isset($context["context"]) ? $context["context"] : null), "values", array()), "datedepublish", array()), "notice" => $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.depublish-date-past")), "status" => array("class" => "form-control", "disabled" => (twig_length_filter($this->env, $this->getAttribute(        // line 27
(isset($context["context"]) ? $context["context"] : null), "allowed_status", array())) <= 1), "id" => "statusselect", "name" => "status"), "ownerid" => array("class" => "form-control", "disabled" =>  !$this->getAttribute($this->getAttribute(        // line 34
(isset($context["context"]) ? $context["context"] : null), "can", array()), "change_ownership", array()), "id" => "ownerid", "name" => "ownerid"), "comment" => array("class" => "form-control", "disabled" =>  !$this->getAttribute($this->getAttribute(        // line 41
(isset($context["context"]) ? $context["context"] : null), "can", array()), "change_ownership", array()), "name_id" => "changelog-comment", "placeholder" => $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Add a brief, optional comment to describe what's changed."), "type" => "text"));
        // line 50
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 52
    public function block_fieldset_type($context, array $blocks = array())
    {
        echo "meta";
    }

    // line 53
    public function block_fieldset_widget($context, array $blocks = array())
    {
        echo "fieldMeta";
    }

    // line 55
    public function block_fieldset_label_text($context, array $blocks = array())
    {
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.meta-information");
    }

    // line 56
    public function block_fieldset_label_class($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ("col-xs-12" . (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "has", array()), "tabs", array())) ? ("") : (" hidden"))), "html", null, true);
    }

    // line 58
    public function block_fieldset_controls($context, array $blocks = array())
    {
        // line 59
        echo "    ";
        $context["__internal_7ab13b499c97e4e5d11768412fa45defee22dc85c8e975cf2138af0bcde450ea"] = $this->loadTemplate("@bolt/_buic/_moment.twig", "@bolt/editcontent/fields/_meta.twig", 59);
        // line 60
        echo "
    <div class=\"col-xs-12\">
        ";
        // line 62
        if ( !$this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "has", array()), "tabs", array())) {
            // line 63
            echo "            <h3>
                ";
            // line 64
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.meta-information");
            echo "
            </h3>
        ";
        }
        // line 67
        echo "
        <div class=\"form-group\">
            <label class=\"col-sm-4 control-label\">";
        // line 69
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.id");
        echo " (№)</label>
            <div class=\"col-sm-8\">
                <input";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "attr", array(0 => $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "id", array())), "method"), "html", null, true);
        echo ">
                ";
        // line 72
        if (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "datecreated", array()) > "1970-01-01 01:01:01")) {
            // line 73
            echo "                    <p class=\"form-control-static\">
                        ";
            // line 74
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("contenttypes.generic.created", array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "slug", array())));
            echo "
                        ";
            // line 75
            echo $context["__internal_7ab13b499c97e4e5d11768412fa45defee22dc85c8e975cf2138af0bcde450ea"]->getbuic_moment($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "datecreated", array()));
            echo "
                        ";
            // line 76
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.edited");
            echo "
                        ";
            // line 77
            echo $context["__internal_7ab13b499c97e4e5d11768412fa45defee22dc85c8e975cf2138af0bcde450ea"]->getbuic_moment($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "datechanged", array()));
            echo ".
                    </p>
                ";
        }
        // line 80
        echo "            </div>
        </div>

        <div class=\"form-group\">
            <label class=\"col-sm-4 control-label\">";
        // line 84
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.status-colon");
        echo "</label>
            <div class=\"col-sm-8\">
                <select";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "attr", array(0 => $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "status", array())), "method"), "html", null, true);
        echo ">
                    ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "allowed_status", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
            // line 88
            echo "                        ";
            $context["attr_opt"] = array("value" =>             // line 89
$context["status"], "selected" => ($this->getAttribute($this->getAttribute(            // line 90
(isset($context["context"]) ? $context["context"] : null), "content", array()), "status", array()) == $context["status"]));
            // line 92
            echo "                        <option";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "attr", array(0 => (isset($context["attr_opt"]) ? $context["attr_opt"] : null)), "method"), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["status_names"]) ? $context["status_names"] : null), $context["status"], array(), "array"), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "                </select>
                <p class=\"form-control-static\">
                    ";
        // line 96
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.status-explanation");
        echo "
                </p>
            </div>
        </div>

        <div class=\"form-group\">
            <label class=\"col-sm-4 control-label\">";
        // line 102
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.publication-date-colon");
        echo "</label>
            <div class=\"col-sm-8\">
                ";
        // line 104
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input_datetime", array(0 => $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "publish", array())), "method"), "html", null, true);
        echo "
            </div>
        </div>

        <div class=\"form-group depublish-group\">
            <label class=\"col-sm-4 control-label\">";
        // line 109
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.depublication-date-colon");
        echo "</label>
            <div class=\"col-sm-8\">
                ";
        // line 111
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "input_datetime", array(0 => $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "depublish", array())), "method"), "html", null, true);
        echo "
                <p class=\"form-control-static\">
                    ";
        // line 113
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.depublish-explanation");
        echo "
                </p>
            </div>
        </div>

        <div class=\"form-group\">
            <label class=\"col-sm-4 control-label\">";
        // line 119
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.owner-colon");
        echo "</label>
            <div class=\"col-sm-8\">
                <select";
        // line 121
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "attr", array(0 => $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "ownerid", array())), "method"), "html", null, true);
        echo ">
                    ";
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 123
            echo "                        ";
            $context["attr_opt"] = array("value" => $this->getAttribute(            // line 124
$context["user"], "id", array()), "selected" => ($this->getAttribute(            // line 125
(isset($context["context"]) ? $context["context"] : null), "contentowner", array()) && ($this->getAttribute($context["user"], "id", array()) == $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contentowner", array()), "id", array()))));
            // line 127
            echo "                        <option";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "attr", array(0 => (isset($context["attr_opt"]) ? $context["attr_opt"] : null)), "method"), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "displayname", array()), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "                </select>
            </div>
        </div>

        ";
        // line 133
        if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/changelog/enabled"), "method")) {
            // line 134
            echo "            <div class=\"form-group\">
                <label class=\"col-sm-4 control-label\">";
            // line 135
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("contenttypes.record.comment-add-colon");
            echo "</label>
                <div class=\"col-sm-8\">
                    <input";
            // line 137
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "attr", array(0 => $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "comment", array())), "method"), "html", null, true);
            echo ">
                </div>
            </div>
        ";
        }
        // line 141
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/fields/_meta.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 141,  249 => 137,  244 => 135,  241 => 134,  239 => 133,  233 => 129,  222 => 127,  220 => 125,  219 => 124,  217 => 123,  213 => 122,  209 => 121,  204 => 119,  195 => 113,  190 => 111,  185 => 109,  177 => 104,  172 => 102,  163 => 96,  159 => 94,  148 => 92,  146 => 90,  145 => 89,  143 => 88,  139 => 87,  135 => 86,  130 => 84,  124 => 80,  118 => 77,  114 => 76,  110 => 75,  106 => 74,  103 => 73,  101 => 72,  97 => 71,  92 => 69,  88 => 67,  82 => 64,  79 => 63,  77 => 62,  73 => 60,  70 => 59,  67 => 58,  61 => 56,  55 => 55,  49 => 53,  43 => 52,  39 => 50,  37 => 41,  36 => 34,  35 => 27,  34 => 21,  33 => 19,  32 => 15,  31 => 13,  30 => 9,  29 => 3,  11 => 50,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@bolt/editcontent/fields/_meta.twig", "");
    }
}
