<?php

/* @bolt/editcontent/fields/_image.twig */
class __TwigTemplate_e4e9ef5d97b2c172790358751b1f25298b36573f6ff8b610b8c42e36a18cc3ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 85
        $this->parent = $this->loadTemplate("@bolt/_base/_fieldset.twig", "@bolt/editcontent/fields/_image.twig", 85);
        $this->blocks = array(
            'fieldset_type' => array($this, 'block_fieldset_type'),
            'fieldset_widget' => array($this, 'block_fieldset_widget'),
            'fieldset_label_text' => array($this, 'block_fieldset_label_text'),
            'fieldset_label_info' => array($this, 'block_fieldset_label_info'),
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
        $context["option"] = array("class" => twig_trim_filter(("form-control " . $this->getAttribute(        // line 4
(isset($context["field"]) ? $context["field"] : null), "class", array()))), "label" => $this->getAttribute(        // line 5
(isset($context["field"]) ? $context["field"] : null), "label", array()), "extensions" => (($this->getAttribute(        // line 6
(isset($context["field"]) ? $context["field"] : null), "extensions", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "extensions", array()), array())) : (array())), "attrib" => ((($this->getAttribute(        // line 7
(isset($context["field"]) ? $context["field"] : null), "attrib", array(), "any", true, true) && twig_test_iterable($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "attrib", array())))) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "attrib", array())) : (array(0 => (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "attrib", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "attrib", array()), null)) : (null))))), "upload" => (($this->getAttribute(        // line 8
(isset($context["field"]) ? $context["field"] : null), "upload", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "upload", array()), "")) : ("")), "can_upload" => (($this->getAttribute(        // line 9
(isset($context["field"]) ? $context["field"] : null), "canUpload", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "canUpload", array()), false)) : (false)), "info" => (($this->getAttribute(        // line 10
(isset($context["field"]) ? $context["field"] : null), "info", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "info", array()), "info.upload.image")) : ("info.upload.image")));
        // line 15
        $context["preview_w"] = 200;
        // line 16
        $context["preview_h"] = 150;
        // line 19
        $context["image"] = (((twig_test_iterable($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "get", array(0 => (isset($context["contentkey"]) ? $context["contentkey"] : null)), "method")) &&  !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "content", array()), "get", array(0 => (isset($context["contentkey"]) ? $context["contentkey"] : null)), "method")))) ? ($this->getAttribute($this->getAttribute(        // line 20
(isset($context["context"]) ? $context["context"] : null), "content", array()), "get", array(0 => (isset($context["contentkey"]) ? $context["contentkey"] : null)), "method")) : (array("file" => $this->getAttribute($this->getAttribute(        // line 21
(isset($context["context"]) ? $context["context"] : null), "content", array()), "get", array(0 => (isset($context["contentkey"]) ? $context["contentkey"] : null)), "method"))));
        // line 24
        $context["hattr"] = array("path" => array("class" => ($this->getAttribute(        // line 26
(isset($context["option"]) ? $context["option"] : null), "class", array()) . " wide path"), "id" => ("field-" .         // line 27
(isset($context["key"]) ? $context["key"] : null)), "name" => (        // line 28
(isset($context["name"]) ? $context["name"] : null) . "[file]"), "placeholder" => ((($this->env->getExtension('Bolt\Twig\TwigExtension')->trans("field.general.allowed-filetypes") . " ") . twig_join_filter($this->getAttribute(        // line 29
(isset($context["option"]) ? $context["option"] : null), "extensions", array()), ", ")) . " …"), "type" => "text", "value" => (($this->getAttribute(        // line 31
(isset($context["image"]) ? $context["image"] : null), "file", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "file", array()), "")) : (""))), "path_label" => array("for" => ("field-" .         // line 35
(isset($context["key"]) ? $context["key"] : null))), "upload" => array("accept" => (($this->getAttribute(        // line 39
(isset($context["option"]) ? $context["option"] : null), "extensions", array())) ? (("." . twig_join_filter($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "extensions", array()), ",."))) : ("")), "data-url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("upload", array("handler" => $this->getAttribute(        // line 40
(isset($context["option"]) ? $context["option"] : null), "upload", array())), true), "id" => ("fileupload-" .         // line 41
(isset($context["key"]) ? $context["key"] : null)), "name" => "files[]", "type" => "file"), "preview" => array("alt" => "Preview", "height" =>         // line 48
(isset($context["preview_h"]) ? $context["preview_h"] : null), "src" => (( !twig_test_empty($this->getAttribute(        // line 49
(isset($context["image"]) ? $context["image"] : null), "file", array()))) ? ($this->env->getExtension('Bolt\Twig\TwigExtension')->thumbnail($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "file", array()), (isset($context["preview_w"]) ? $context["preview_w"] : null), (isset($context["preview_h"]) ? $context["preview_h"] : null), "b")) : (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "paths", array()), "app", array()) . "view/img/default_empty_4x3.png"))), "width" =>         // line 50
(isset($context["preview_w"]) ? $context["preview_w"] : null)));
        // line 54
        $context["attribute_fields"] = array();
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "attrib", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "attrib", array()), array())) : (array())));
        foreach ($context['_seq'] as $context["_key"] => $context["attrib"]) {
            // line 56
            $context["aid"] = twig_replace_filter(twig_lower_filter($this->env, $context["attrib"]), array("alt text" => "alt"));
            // line 58
            if (twig_in_filter((isset($context["aid"]) ? $context["aid"] : null), array(0 => "title", 1 => "alt"))) {
                // line 59
                if (((isset($context["aid"]) ? $context["aid"] : null) == "title")) {
                    // line 60
                    $context["atitle"] = $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Title");
                } elseif ((                // line 61
(isset($context["aid"]) ? $context["aid"] : null) == "alt")) {
                    // line 62
                    $context["atitle"] = $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("field.image.label.alt");
                }
                // line 65
                $context["uid"] = (((isset($context["key"]) ? $context["key"] : null) . "-") . (isset($context["aid"]) ? $context["aid"] : null));
                // line 67
                $context["attribute_fields"] = twig_array_merge((isset($context["attribute_fields"]) ? $context["attribute_fields"] : null), array(0 => array("title" =>                 // line 68
(isset($context["atitle"]) ? $context["atitle"] : null), "label" => array("for" =>                 // line 70
(isset($context["uid"]) ? $context["uid"] : null)), "input" => array("class" => "form-control", "id" =>                 // line 74
(isset($context["uid"]) ? $context["uid"] : null), "name" => (((                // line 75
(isset($context["name"]) ? $context["name"] : null) . "[") . (isset($context["aid"]) ? $context["aid"] : null)) . "]"), "type" => "text", "value" => (($this->getAttribute(                // line 77
(isset($context["image"]) ? $context["image"] : null), (isset($context["aid"]) ? $context["aid"] : null), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["image"]) ? $context["image"] : null), (isset($context["aid"]) ? $context["aid"] : null), array(), "array"), "")) : (""))))));
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attrib'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 87
    public function block_fieldset_type($context, array $blocks = array())
    {
        echo "image";
    }

    // line 88
    public function block_fieldset_widget($context, array $blocks = array())
    {
        echo "fieldImage";
    }

    // line 90
    public function block_fieldset_label_text($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["labelkey"]) ? $context["labelkey"] : null), "html", null, true);
    }

    // line 91
    public function block_fieldset_label_info($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "info", array()), "html", null, true);
    }

    // line 92
    public function block_fieldset_label_class($context, array $blocks = array())
    {
        echo "col-xs-12 control-label";
    }

    // line 94
    public function block_fieldset_controls($context, array $blocks = array())
    {
        // line 95
        echo "    <div class=\"col-xs-12 dropzone\">
        <div class=\"row\">
            <div class=\"col-xs-8\">
                ";
        // line 99
        echo "                <div class=\"form-group\">
                    <div class=\"col-sm-12\">
                        <label";
        // line 101
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->hattr($this->getAttribute((isset($context["hattr"]) ? $context["hattr"] : null), "path_label", array()));
        echo ">";
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.path-image-file");
        echo "</label><input";
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->hattr($this->getAttribute((isset($context["hattr"]) ? $context["hattr"] : null), "path", array()));
        echo ">
                    </div>
                </div>

                ";
        // line 106
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attribute_fields"]) ? $context["attribute_fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["afield"]) {
            // line 107
            echo "                    <div class=\"form-group\">
                        <div class=\"col-sm-2\">
                            <label";
            // line 109
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->hattr($this->getAttribute($context["afield"], "label", array()));
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["afield"], "title", array()), "html", null, true);
            echo "</label>
                        </div>
                        <div class=\"col-sm-10\">
                            <input";
            // line 112
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->hattr($this->getAttribute($context["afield"], "input", array()));
            echo ">
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['afield'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "
                ";
        // line 118
        echo "                <div class=\"buic-progress\" data-bolt-widget=\"buicProgress\"></div>

                ";
        // line 121
        echo "                ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "upload_buttons", array(0 => "image", 1 => $this->getAttribute((isset($context["hattr"]) ? $context["hattr"] : null), "upload", array()), 2 => $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "upload", array()), 3 => ($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "can", array()), "upload", array()) && $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "can_upload", array())), 4 => false), "method"), "html", null, true);
        echo "
            </div>

            ";
        // line 125
        echo "            <div class=\"col-xs-4\">
                <div class=\"right-on-large\">
                    <label>";
        // line 127
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.preview");
        echo "</label>
                    <div class=\"content-preview imageholder\">
                        <img";
        // line 129
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->hattr($this->getAttribute((isset($context["hattr"]) ? $context["hattr"] : null), "preview", array()));
        echo ">
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/fields/_image.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 129,  196 => 127,  192 => 125,  185 => 121,  181 => 118,  178 => 116,  168 => 112,  160 => 109,  156 => 107,  151 => 106,  140 => 101,  136 => 99,  131 => 95,  128 => 94,  122 => 92,  116 => 91,  110 => 90,  104 => 88,  98 => 87,  94 => 85,  87 => 77,  86 => 75,  85 => 74,  84 => 70,  83 => 68,  82 => 67,  80 => 65,  77 => 62,  75 => 61,  73 => 60,  71 => 59,  69 => 58,  67 => 56,  63 => 55,  61 => 54,  59 => 50,  58 => 49,  57 => 48,  56 => 41,  55 => 40,  54 => 39,  53 => 35,  52 => 31,  51 => 29,  50 => 28,  49 => 27,  48 => 26,  47 => 24,  45 => 21,  44 => 20,  43 => 19,  41 => 16,  39 => 15,  37 => 10,  36 => 9,  35 => 8,  34 => 7,  33 => 6,  32 => 5,  31 => 4,  30 => 3,  11 => 85,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@bolt/editcontent/fields/_image.twig", "");
    }
}
