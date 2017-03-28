<?php

/* @bolt/editcontent/fields/_slug.twig */
class __TwigTemplate_a7d75cf20468fd468ef0401442a90bf5130b9ee6bb866cc2a1b35dd3ddc853de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 47
        $this->parent = $this->loadTemplate("@bolt/_base/_fieldset.twig", "@bolt/editcontent/fields/_slug.twig", 47);
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
        $context["option"] = array("uses" => ((twig_test_iterable((($this->getAttribute(        // line 4
(isset($context["field"]) ? $context["field"] : null), "uses", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "uses", array()), array())) : (array())))) ? ((($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "uses", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "uses", array()), array())) : (array()))) : (array(0 => $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "uses", array())))), "viewless" => (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 5
(isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "contenttype", array(), "any", false, true), "viewless", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array(), "any", false, true), "contenttype", array(), "any", false, true), "viewless", array()), false)) : (false)));
        // line 10
        $context["is_empty"] = ($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "get", array(0 => (isset($context["contentkey"]) ? $context["contentkey"] : null)), "method") == "");
        // line 11
        $context["has_uses"] = (twig_length_filter($this->env, $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "uses", array())) > 0);
        // line 13
        if ((isset($context["is_empty"]) ? $context["is_empty"] : null)) {
            // line 14
            $context["mode"] = (((isset($context["has_uses"]) ? $context["has_uses"] : null)) ? ("linked") : ("editable"));
        } else {
            // line 16
            $context["mode"] = "locked";
        }
        // line 19
        $context["uses"] = array();
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "uses", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 21
            $context["uses"] = twig_array_merge((isset($context["uses"]) ? $context["uses"] : null), array(0 => (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "fields", array()), $context["key"], array(), "array"), "label", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "fields", array()), $context["key"], array(), "array"), "label", array())) : (twig_capitalize_string_filter($this->env, $context["key"])))));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        $context["attributes"] = array("slug" => array("class" => "form-control", "id" =>         // line 28
(isset($context["key"]) ? $context["key"] : null), "name" =>         // line 29
(isset($context["name"]) ? $context["name"] : null), "readonly" => (        // line 30
(isset($context["mode"]) ? $context["mode"] : null) != "editable"), "type" => "text", "value" => $this->getAttribute($this->getAttribute(        // line 32
(isset($context["context"]) ? $context["context"] : null), "content", array()), "get", array(0 => (isset($context["key"]) ? $context["key"] : null)), "method")));
        // line 36
        $context["trans"] = array("label_alias" => $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("field.slug.unique-alias"), "label_permalink" => $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("field.slug.permalink"), "menu_edit" => $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("field.slug.button.edit"), "menu_generate" => $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("field.slug.button.generate"), "menu_lock" => $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("field.slug.button.lock"), "warning" => $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("field.slug.message.warning"));
        // line 49
        $context["fieldset_conf"] = array("contentId" => $this->getAttribute($this->getAttribute(        // line 50
(isset($context["context"]) ? $context["context"] : null), "content", array()), "id", array()), "key" =>         // line 51
(isset($context["key"]) ? $context["key"] : null), "slug" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 52
(isset($context["context"]) ? $context["context"] : null), "content", array()), "contenttype", array()), "slug", array()), "uses" => $this->getAttribute(        // line 53
(isset($context["option"]) ? $context["option"] : null), "uses", array()));
        // line 47
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 56
    public function block_fieldset_type($context, array $blocks = array())
    {
        echo "slug";
    }

    // line 57
    public function block_fieldset_widget($context, array $blocks = array())
    {
        echo "fieldSlug";
    }

    // line 59
    public function block_fieldset_label_text($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "viewless", array())) ? ($this->getAttribute((isset($context["trans"]) ? $context["trans"] : null), "label_alias", array())) : ($this->getAttribute((isset($context["trans"]) ? $context["trans"] : null), "label_permalink", array()))), "html", null, true);
    }

    // line 60
    public function block_fieldset_label_class($context, array $blocks = array())
    {
        echo "col-sm-12";
    }

    // line 62
    public function block_fieldset_controls($context, array $blocks = array())
    {
        // line 63
        echo "    <div class=\"col-sm-12\">
        <div class=\"input-group ";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["mode"]) ? $context["mode"] : null), "html", null, true);
        echo "\">";
        // line 66
        echo "            <span class=\"input-group-addon\">";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "route_prefix", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "route_prefix", array()), (("/" . $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "singular_slug", array())) . "/"))) : ((("/" . $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "contenttype", array()), "singular_slug", array())) . "/"))), "html", null, true);
        echo "</span>

            <input";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "attr", array(0 => $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "slug", array())), "method"), "html", null, true);
        echo ">

            <div class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <span class=\"caret\"></span>
                </button>
                <ul class=\"dropdown-menu dropdown-menu-right\">
                    <li class=\"lock";
        // line 75
        echo ((((isset($context["mode"]) ? $context["mode"] : null) == "locked")) ? (" disabled") : (""));
        echo "\">
                        <a href=\"#\"><i class=\"fa fa-fw fa-lock\"></i> ";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trans"]) ? $context["trans"] : null), "menu_lock", array()), "html", null, true);
        echo "</a>
                    </li>
                    ";
        // line 78
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "uses", array()))) {
            // line 79
            echo "                        <li class=\"link";
            echo ((((isset($context["mode"]) ? $context["mode"] : null) == "linked")) ? (" disabled") : (""));
            echo "\" style=\"min-width: 200px;\">
                            <a href=\"#\"><i class=\"fa fa-fw fa-link\"></i> <span>";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trans"]) ? $context["trans"] : null), "menu_generate", array()), "html", null, true);
            echo " <var>";
            echo twig_escape_filter($this->env, twig_join_filter((isset($context["uses"]) ? $context["uses"] : null), " + "), "html", null, true);
            echo "</var></span></a>
                        </li>
                    ";
        }
        // line 83
        echo "                    <li class=\"edit";
        echo ((((isset($context["mode"]) ? $context["mode"] : null) == "editable")) ? (" disabled") : (""));
        echo "\">
                        <a href=\"#\"><i class=\"fa fa-fw fa-pencil\"></i> ";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trans"]) ? $context["trans"] : null), "menu_edit", array()), "html", null, true);
        echo "</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    ";
        // line 90
        if ( !(isset($context["is_empty"]) ? $context["is_empty"] : null)) {
            // line 91
            echo "        <div class=\"col-sm-12 warning hidden\">
            <i class=\"fa fa-exclamation-triangle\"></i> ";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trans"]) ? $context["trans"] : null), "warning", array()), "html", null, true);
            echo "
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/fields/_slug.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 92,  164 => 91,  162 => 90,  153 => 84,  148 => 83,  140 => 80,  135 => 79,  133 => 78,  128 => 76,  124 => 75,  114 => 68,  108 => 66,  105 => 64,  102 => 63,  99 => 62,  93 => 60,  87 => 59,  81 => 57,  75 => 56,  71 => 47,  69 => 53,  68 => 52,  67 => 51,  66 => 50,  65 => 49,  63 => 36,  61 => 32,  60 => 30,  59 => 29,  58 => 28,  57 => 25,  51 => 21,  47 => 20,  45 => 19,  42 => 16,  39 => 14,  37 => 13,  35 => 11,  33 => 10,  31 => 5,  30 => 4,  29 => 3,  11 => 47,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@bolt/editcontent/fields/_slug.twig", "");
    }
}
