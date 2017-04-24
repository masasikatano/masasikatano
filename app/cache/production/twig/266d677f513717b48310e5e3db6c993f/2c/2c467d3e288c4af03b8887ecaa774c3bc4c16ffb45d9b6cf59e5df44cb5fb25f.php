<?php

/* @bolt/_macro/_macro.twig */
class __TwigTemplate_633804d78b8f8bf6f15be7804d691ed9edfb2f3bbb5d227679eafb669b76df44 extends Twig_Template
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
        // line 14
        echo "
";
        // line 25
        echo "
";
        // line 34
        echo "
";
        // line 63
        echo "
";
        // line 73
        echo "
";
        // line 85
        echo "
";
        // line 160
        echo "
";
    }

    // line 4
    public function getuserlink($__user_id__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "user_id" => $__user_id__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 5
            echo "    ";
            ob_start();
            // line 6
            echo "        ";
            $context["user"] = $this->env->getExtension('Bolt\Twig\TwigExtension')->getUser((isset($context["user_id"]) ? $context["user_id"] : null));
            // line 7
            echo "        ";
            if ( !twig_test_empty((isset($context["user"]) ? $context["user"] : null))) {
                // line 8
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("useredit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "displayname", array()), "html", null, true);
                echo "</a>
        ";
            } else {
                // line 10
                echo "            ";
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("panel.latest-activity.unknown");
                echo "
        ";
            }
            // line 12
            echo "    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 18
    public function getcontentlink_by_id($__contenttype__ = null, $__title__ = null, $__content_id__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "contenttype" => $__contenttype__,
            "title" => $__title__,
            "content_id" => $__content_id__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 19
            echo "    ";
            ob_start();
            // line 20
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editcontent", array("contenttypeslug" => $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "slug", array()), "id" => (isset($context["content_id"]) ? $context["content_id"] : null))), "html", null, true);
            echo "\">";
            // line 21
            echo _twig_default_filter($this->env->getExtension('Bolt\Twig\TwigExtension')->excerpt((isset($context["title"]) ? $context["title"] : null), 70), (("<em>(" . $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.no-title")) . ")</em>"));
            // line 22
            echo "</a>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 29
    public function getcontentlink($__contenttype__ = null, $__content__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "contenttype" => $__contenttype__,
            "content" => $__content__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 30
            echo "    ";
            $context["crosslinks"] = $this;
            // line 31
            echo "    ";
            $context["title"] = $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "getTitle", array(0 => true), "method");
            // line 32
            echo "    ";
            echo $context["crosslinks"]->getcontentlink_by_id((isset($context["contenttype"]) ? $context["contenttype"] : null), (isset($context["title"]) ? $context["title"] : null), $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()));
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

    // line 38
    public function getattr($__attributes__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $__attributes__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 39
            echo "    ";
            ob_start();
            // line 40
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : null));
            foreach ($context['_seq'] as $context["attrname"] => $context["value"]) {
                // line 41
                echo "            ";
                if (($context["attrname"] == "value")) {
                    // line 42
                    echo "                value=\"";
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "\"
            ";
                } elseif ( !twig_test_empty(                // line 43
$context["value"])) {
                    // line 44
                    echo "                ";
                    if (twig_in_filter($context["attrname"], array(0 => "required", 1 => "disabled", 2 => "selected", 3 => "autofocus", 4 => "multiple", 5 => "readonly"))) {
                        // line 45
                        echo "                    ";
                        echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                        echo "=\"";
                        echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                        echo "\"
                ";
                    } elseif ((                    // line 46
$context["attrname"] == "name_id")) {
                        // line 47
                        echo "                    name=\"";
                        echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                        echo "\" id=\"";
                        echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                        echo "\"
                ";
                    } elseif ((                    // line 48
$context["attrname"] == "class")) {
                        // line 49
                        echo "                    class=\"";
                        echo twig_escape_filter($this->env, twig_trim_filter($context["value"]), "html", null, true);
                        echo "\"
                ";
                    } elseif ((                    // line 50
$context["attrname"] == "style")) {
                        // line 51
                        echo "                    style=\"";
                        echo twig_escape_filter($this->env, twig_trim_filter($context["value"]), "html", null, true);
                        echo "\"
                ";
                    } elseif ((                    // line 52
$context["attrname"] == "checked")) {
                        // line 53
                        echo "                    ";
                        if (($context["value"] != false)) {
                            echo "checked=\"checked\"";
                        }
                        // line 54
                        echo "                ";
                    } elseif (($context["attrname"] == "_bind")) {
                        // line 55
                        echo "                    data-bind=\"";
                        echo twig_escape_filter($this->env, twig_jsonencode_filter(twig_array_merge(array("bind" => $this->getAttribute($context["value"], 0, array(), "array")), (($this->getAttribute($context["value"], 1, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($context["value"], 1, array(), "array"), array())) : (array())))), "html", null, true);
                        echo "\"
                ";
                    } else {
                        // line 57
                        echo "                    ";
                        echo twig_escape_filter($this->env, twig_replace_filter($context["attrname"], array("_" => "-")), "html", null, true);
                        echo "=\"";
                        echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                        echo "\"
                ";
                    }
                    // line 59
                    echo "            ";
                }
                // line 60
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 67
    public function getactionform($__content__ = null, $__action__ = null, $__icon__ = null, $__text__ = null, $__confirmation_text__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "content" => $__content__,
            "action" => $__action__,
            "icon" => $__icon__,
            "text" => $__text__,
            "confirmation_text" => $__confirmation_text__,
            "varargs" => func_num_args() > 5 ? array_slice(func_get_args(), 5) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 68
            echo "    ";
            if (((isset($context["action"]) ? $context["action"] : null) == "held")) {
                // line 69
                echo "        ";
                $context["action"] = "depublish";
                // line 70
                echo "    ";
            }
            // line 71
            echo "    <a href=\"#\" data-listing-cmd=\"record:";
            echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : null), "html", null, true);
            echo "\"><i class=\"fa ";
            echo twig_escape_filter($this->env, (isset($context["icon"]) ? $context["icon"] : null), "html", null, true);
            echo "\"></i> ";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans((isset($context["text"]) ? $context["text"] : null));
            echo "</a>
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

    // line 77
    public function gettypepopover($__types__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "types" => $__types__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 78
            echo "    ";
            $context["types"] = ((array_key_exists("types", $context)) ? (_twig_default_filter((isset($context["types"]) ? $context["types"] : null), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/accept_file_types"), "method"))) : ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/accept_file_types"), "method")));
            // line 79
            echo "    ";
            $context["text"] = ((($this->env->getExtension('Bolt\Twig\TwigExtension')->trans("field.general.allowed-filetypes") . "<code>") . twig_join_filter((isset($context["types"]) ? $context["types"] : null), "</code>, <code>")) . "</code>.");
            // line 80
            echo "    <span class=\"label label-default info-pop\" data-title=\"\" data-html=\"true\" data-content=\"";
            echo twig_escape_filter($this->env, (isset($context["text"]) ? $context["text"] : null), "html", null, true);
            echo "\">
        <i class=\"fa fa-info-circle\"></i>
        ";
            // line 82
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.types");
            echo "
    </span>
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

    // line 100
    public function getinput_datetime($__opt__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "opt" => $__opt__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 101
            echo "    ";
            $context["__internal_2c395bc3b01c6eaf872bb5a5871c27bd27cef2e3afae8f0053f78d814ec73242"] = $this;
            // line 102
            echo "
    ";
            // line 103
            $context["class"] = (twig_replace_filter((($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "class", array()), "")) : ("")), array("form-control" => "")) . " form-control");
            // line 104
            echo "
    ";
            // line 105
            $context["attributes"] = array("data" => array("id" => $this->getAttribute(            // line 107
(isset($context["opt"]) ? $context["opt"] : null), "id", array()), "name" => (($this->getAttribute(            // line 108
(isset($context["opt"]) ? $context["opt"] : null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "name", array()), $this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "id", array()))) : ($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "id", array()))), "value" => $this->getAttribute(            // line 109
(isset($context["opt"]) ? $context["opt"] : null), "value", array()), "type" => "hidden", "class" => "datetime", "data_notice" => (($this->getAttribute(            // line 112
(isset($context["opt"]) ? $context["opt"] : null), "notice", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "notice", array()), "")) : (""))), "date" => array("type" => "text", "disabled" => (($this->getAttribute(            // line 117
(isset($context["opt"]) ? $context["opt"] : null), "disabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "disabled", array()), false)) : (false)), "required" => (($this->getAttribute(            // line 118
(isset($context["opt"]) ? $context["opt"] : null), "required", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "required", array()), false)) : (false)), "class" => twig_trim_filter((            // line 119
(isset($context["class"]) ? $context["class"] : null) . " datepicker")), "data_errortext" => (($this->getAttribute(            // line 120
(isset($context["opt"]) ? $context["opt"] : null), "errortext", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "errortext", array()), "")) : ("")), "data_field_options" => (((($this->getAttribute(            // line 121
(isset($context["opt"]) ? $context["opt"] : null), "options", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "options", array()), false)) : (false))) ? (twig_jsonencode_filter($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "options", array()))) : (""))), "time" => array("type" => "text", "disabled" => (($this->getAttribute(            // line 126
(isset($context["opt"]) ? $context["opt"] : null), "disabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "disabled", array()), false)) : (false)), "required" => (($this->getAttribute(            // line 127
(isset($context["opt"]) ? $context["opt"] : null), "required", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "required", array()), false)) : (false)), "class" => twig_trim_filter((            // line 128
(isset($context["class"]) ? $context["class"] : null) . " timepicker")), "title" => $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.time-format-24-12"), "style" => "margin-right: 6px;"));
            // line 133
            echo "
    <div class=\"datetime-container\">
        <div>
            <div class=\"input-group\">
                <span class=\"input-group-btn\">
                    <button type=\"button\" class=\"btn btn-tertiary\">
                        <i class=\"fa fa-calendar\"></i>
                    </button>
                </span>
                <input";
            // line 142
            echo $context["__internal_2c395bc3b01c6eaf872bb5a5871c27bd27cef2e3afae8f0053f78d814ec73242"]->getattr($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "date", array()));
            echo ">
            </div>
        </div>

        ";
            // line 146
            if (( !$this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "has_time", array(), "any", true, true) || ($this->getAttribute((isset($context["opt"]) ? $context["opt"] : null), "has_time", array()) != false))) {
                // line 147
                echo "            <div>
                <input";
                // line 148
                echo $context["__internal_2c395bc3b01c6eaf872bb5a5871c27bd27cef2e3afae8f0053f78d814ec73242"]->getattr($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "time", array()));
                echo ">
            </div>
        ";
            }
            // line 151
            echo "
        <div>
            <input";
            // line 153
            echo $context["__internal_2c395bc3b01c6eaf872bb5a5871c27bd27cef2e3afae8f0053f78d814ec73242"]->getattr($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "data", array()));
            echo ">
            <button type=\"button\" class=\"btn btn-default btn-xs\">
                <i class=\"fa fa-close\"></i>
            </button>
        </div>
    </div>
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

    // line 169
    public function getupload_buttons($__type__ = null, $__attr_upload__ = null, $__uploadpath__ = null, $__canUpload__ = null, $__multi__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "type" => $__type__,
            "attr_upload" => $__attr_upload__,
            "uploadpath" => $__uploadpath__,
            "canUpload" => $__canUpload__,
            "multi" => $__multi__,
            "varargs" => func_num_args() > 5 ? array_slice(func_get_args(), 5) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 170
            echo "    ";
            $context["__internal_258f577bee4bb156ffd9151c0bd2c9fe0c49ff08bebef5f7af0af061ffb3cad3"] = $this;
            // line 171
            echo "
    ";
            // line 172
            $context["items"] = $this->env->getExtension('Bolt\Twig\TwigExtension')->stackItems(7, ((((isset($context["type"]) ? $context["type"] : null) == "image")) ? ("image") : ("other,document")));
            // line 173
            echo "
    <div class=\"button-wrap fileselectbuttongroup\">

        ";
            // line 177
            echo "        ";
            if ((isset($context["canUpload"]) ? $context["canUpload"] : null)) {
                // line 178
                echo "            <span class=\"btn btn-tertiary btn-sm fileinput-button\">
                <i class=\"fa fa-upload\"></i>
                <span>";
                // line 180
                echo ((((isset($context["type"]) ? $context["type"] : null) == "image")) ? ($this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.upload-image")) : ($this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.upload-file")));
                echo "</span>
                <input";
                // line 181
                echo $context["__internal_258f577bee4bb156ffd9151c0bd2c9fe0c49ff08bebef5f7af0af061ffb3cad3"]->getattr((isset($context["attr_upload"]) ? $context["attr_upload"] : null));
                echo ">
            </span>
        ";
            } else {
                // line 184
                echo "            <button type=\"button\" class=\"btn btn-sm\" disabled=\"disabled\">
                ";
                // line 185
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.upload-not-allowed");
                echo "
                ";
                // line 187
                echo "                ";
                $context["attr_upload"] = twig_array_merge((isset($context["attr_upload"]) ? $context["attr_upload"] : null), array("type" => "hidden"));
                // line 188
                echo "                <input";
                echo $context["__internal_258f577bee4bb156ffd9151c0bd2c9fe0c49ff08bebef5f7af0af061ffb3cad3"]->getattr((isset($context["attr_upload"]) ? $context["attr_upload"] : null));
                echo ">
            </button>
        ";
            }
            // line 191
            echo "
        ";
            // line 193
            echo "        ";
            $context["attr"] = array("class" => "btn btn-tertiary btn-sm", "data-bolt-widget" => array("buicBrowser" => array("namespace" => "files", "path" =>             // line 198
(isset($context["uploadpath"]) ? $context["uploadpath"] : null), "multiselect" =>             // line 199
(isset($context["multi"]) ? $context["multi"] : null))), "type" => "button");
            // line 204
            echo "        <button";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->hattr((isset($context["attr"]) ? $context["attr"] : null));
            echo "><i class=\"fa fa-download\"></i> ";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("field.general.select-from-server");
            echo "</button>

        ";
            // line 207
            echo "        ";
            if (( !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/backend/stack/disable", 1 => false), "method") && (isset($context["items"]) ? $context["items"] : null))) {
                // line 208
                echo "            <div class=\"btn-group\">
                <button type=\"button\" class=\"btn btn-tertiary btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-paperclip\"></i>
                    ";
                // line 211
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("field.general.stack");
                echo "
                    <span class=\"caret\"></span>
                </button>

                <ul class=\"dropdown-menu select-from-stack\">
                    ";
                // line 216
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 217
                    echo "                        ";
                    $context["info"] = ($this->getAttribute($context["item"], "filesize", array()) . (((($this->getAttribute($context["item"], "imagesize", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "imagesize", array()))) : (""))) ? (((", " . $this->getAttribute($context["item"], "imagesize", array())) . " px")) : ("")));
                    // line 218
                    echo "                        <li>
                            <a href=\"#\" data-path=\"";
                    // line 219
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "filepath", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "basename", array()), "html", null, true);
                    echo " <small>(";
                    echo twig_escape_filter($this->env, (isset($context["info"]) ? $context["info"] : null), "html", null, true);
                    echo ")</small></a>
                        </li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 222
                echo "                </ul>
            </div>
        ";
            }
            // line 225
            echo "
    </div>
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
        return "@bolt/_macro/_macro.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  586 => 225,  581 => 222,  568 => 219,  565 => 218,  562 => 217,  558 => 216,  550 => 211,  545 => 208,  542 => 207,  534 => 204,  532 => 199,  531 => 198,  529 => 193,  526 => 191,  519 => 188,  516 => 187,  512 => 185,  509 => 184,  503 => 181,  499 => 180,  495 => 178,  492 => 177,  487 => 173,  485 => 172,  482 => 171,  479 => 170,  463 => 169,  441 => 153,  437 => 151,  431 => 148,  428 => 147,  426 => 146,  419 => 142,  408 => 133,  406 => 128,  405 => 127,  404 => 126,  403 => 121,  402 => 120,  401 => 119,  400 => 118,  399 => 117,  398 => 112,  397 => 109,  396 => 108,  395 => 107,  394 => 105,  391 => 104,  389 => 103,  386 => 102,  383 => 101,  371 => 100,  353 => 82,  347 => 80,  344 => 79,  341 => 78,  329 => 77,  307 => 71,  304 => 70,  301 => 69,  298 => 68,  282 => 67,  266 => 61,  260 => 60,  257 => 59,  249 => 57,  243 => 55,  240 => 54,  235 => 53,  233 => 52,  228 => 51,  226 => 50,  221 => 49,  219 => 48,  212 => 47,  210 => 46,  203 => 45,  200 => 44,  198 => 43,  193 => 42,  190 => 41,  185 => 40,  182 => 39,  170 => 38,  152 => 32,  149 => 31,  146 => 30,  133 => 29,  116 => 22,  114 => 21,  110 => 20,  107 => 19,  93 => 18,  77 => 12,  71 => 10,  63 => 8,  60 => 7,  57 => 6,  54 => 5,  42 => 4,  37 => 160,  34 => 85,  31 => 73,  28 => 63,  25 => 34,  22 => 25,  19 => 14,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@bolt/_macro/_macro.twig", "");
    }
}
