<?php

/* _sub_fields.twig */
class __TwigTemplate_44df48076f19d2dd310f0f7e2f3820b18f51cb655fa5517c448fa593942cf972 extends Twig_Template
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
        // line 13
        echo "
";
        // line 15
        echo "
";
        // line 18
        $context["omittedkeys"] = array(0 => "id", 1 => "slug", 2 => "datecreated", 3 => "datechanged", 4 => "datepublish", 5 => "datedepublish", 6 => "username", 7 => "status", 8 => "ownerid", 9 => "templatefields");
        // line 19
        echo "
";
        // line 22
        if ((twig_test_iterable((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "contenttype", array(), "any", false, true), "fields", array(), "any", false, true), "slug", array(), "any", false, true), "uses", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "contenttype", array(), "any", false, true), "fields", array(), "any", false, true), "slug", array(), "any", false, true), "uses", array()), null)) : (null))) && ((isset($context["skip_uses"]) ? $context["skip_uses"] : null) == true))) {
            // line 23
            echo "    ";
            $context["omittedkeys"] = twig_array_merge((isset($context["omittedkeys"]) ? $context["omittedkeys"] : null), $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "contenttype", array()), "fields", array()), "slug", array()), "uses", array()));
        }
        // line 25
        echo "
";
        // line 27
        if (twig_test_iterable((isset($context["exclude"]) ? $context["exclude"] : null))) {
            // line 28
            echo "    ";
            $context["omittedkeys"] = twig_array_merge((isset($context["omittedkeys"]) ? $context["omittedkeys"] : null), (isset($context["exclude"]) ? $context["exclude"] : null));
        }
        // line 30
        echo "
";
        // line 32
        echo "
";
        // line 43
        echo "
";
        // line 53
        echo "
";
        // line 81
        echo "
";
        // line 120
        echo "
";
        // line 121
        $context["macro"] = $this;
        // line 122
        echo "
";
        // line 124
        echo "
";
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "values", array()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            if (!twig_in_filter($context["key"], (isset($context["omittedkeys"]) ? $context["omittedkeys"] : null))) {
                // line 127
                echo "
    ";
                // line 130
                echo "    ";
                if (((isset($context["common"]) ? $context["common"] : null) == true)) {
                    // line 131
                    echo "
        ";
                    // line 132
                    $context["fieldtype"] = $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "fieldtype", array(0 => $context["key"]), "method");
                    // line 133
                    echo "        ";
                    echo $context["macro"]->getcommonfields($context["key"], $context["value"], (isset($context["fieldtype"]) ? $context["fieldtype"] : null), $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "contenttype", array()));
                    echo "

    ";
                }
                // line 136
                echo "
    ";
                // line 138
                echo "    ";
                if (((isset($context["extended"]) ? $context["extended"] : null) == true)) {
                    // line 139
                    echo "
        ";
                    // line 140
                    $context["fieldtype"] = $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "fieldtype", array(0 => $context["key"]), "method");
                    // line 141
                    echo "        ";
                    echo $context["macro"]->getextendedfields($context["key"], $context["value"], (isset($context["fieldtype"]) ? $context["fieldtype"] : null));
                    echo "

    ";
                }
                // line 144
                echo "
    ";
                // line 146
                echo "    ";
                if ((((isset($context["repeaters"]) ? $context["repeaters"] : null) == true) && ($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "fieldtype", array(0 => $context["key"]), "method") == "repeater"))) {
                    // line 147
                    echo "
        ";
                    // line 148
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["value"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["repeater"]) {
                        // line 149
                        echo "
            ";
                        // line 150
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["repeater"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["repeaterfield"]) {
                            // line 151
                            echo "
                ";
                            // line 152
                            $context["fieldtype"] = $this->getAttribute($context["repeaterfield"], "getFieldtype", array(), "method");
                            // line 153
                            echo "                ";
                            $context["value"] = $this->getAttribute($context["repeaterfield"], "getValue", array(), "method");
                            // line 154
                            echo "                ";
                            echo $context["macro"]->getcommonfields("", $context["value"], (isset($context["fieldtype"]) ? $context["fieldtype"] : null), $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "contenttype", array()));
                            echo "
                ";
                            // line 155
                            echo $context["macro"]->getextendedfields("", $context["value"], (isset($context["fieldtype"]) ? $context["fieldtype"] : null));
                            echo "

            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['repeaterfield'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 158
                        echo "
        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['repeater'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 160
                    echo "
    ";
                }
                // line 162
                echo "
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 164
        echo "
";
        // line 166
        $context["templatefields"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "values", array(), "any", false, true), "templatefields", array(), "any", false, true), "values", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "values", array(), "any", false, true), "templatefields", array(), "any", false, true), "values", array()))) : (""));
        // line 167
        if ((array_key_exists("templatefields", $context) &&  !twig_test_empty((isset($context["templatefields"]) ? $context["templatefields"] : null)))) {
            // line 168
            echo "
    ";
            // line 171
            echo "    ";
            $context["templatefieldsfieldtypes"] = $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "contenttype", array()), "templatefields", array())), "fields");
            // line 172
            echo "
    ";
            // line 173
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["templatefields"]) ? $context["templatefields"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                if (!twig_in_filter($context["key"], (isset($context["omittedkeys"]) ? $context["omittedkeys"] : null))) {
                    // line 174
                    echo "
        ";
                    // line 175
                    $context["fieldtype"] = $this->getAttribute($this->getAttribute((isset($context["templatefieldsfieldtypes"]) ? $context["templatefieldsfieldtypes"] : null), $context["key"]), "type");
                    // line 176
                    echo "        ";
                    echo $context["macro"]->getcommonfields($context["key"], $context["value"], (isset($context["fieldtype"]) ? $context["fieldtype"] : null), $this->getAttribute((isset($context["record"]) ? $context["record"] : null), "contenttype", array()));
                    echo "
        ";
                    // line 177
                    echo $context["macro"]->getextendedfields($context["key"], $context["value"], (isset($context["fieldtype"]) ? $context["fieldtype"] : null));
                    echo "

    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 180
            echo "
";
        }
    }

    // line 36
    public function getparsetextfield($__key__ = null, $__value__ = null, $__contenttype__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "key" => $__key__,
            "value" => $__value__,
            "contenttype" => $__contenttype__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 37
            echo "    ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "fields", array(), "any", false, true), (isset($context["key"]) ? $context["key"] : null), array(), "array", false, true), "allowtwig", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "fields", array()), (isset($context["key"]) ? $context["key"] : null), array(), "array"), "allowtwig", array()) == true))) {
                // line 38
                echo "        ";
                $context["value"] = $this->env->getExtension('Bolt\Twig\TwigExtension')->twig((isset($context["value"]) ? $context["value"] : null));
                // line 39
                echo "    ";
            }
            // line 40
            echo "
    <div ";
            // line 41
            if ( !twig_test_empty((isset($context["key"]) ? $context["key"] : null))) {
                echo "data-bolt-field=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "</div>
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

    // line 44
    public function getimagelistfield($__images__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "images" => $__images__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 45
            echo "    <div class=\"bolt-imagelist\">
        ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 47
                echo "            <div class=\"bolt-imageholder\">
                ";
                // line 48
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->popup($this->getAttribute($context["image"], "filename", array()), 200, 0);
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "    </div>
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

    // line 55
    public function getcommonfields($__key__ = null, $__value__ = null, $__fieldtype__ = null, $__contenttype__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "key" => $__key__,
            "value" => $__value__,
            "fieldtype" => $__fieldtype__,
            "contenttype" => $__contenttype__,
            "varargs" => func_num_args() > 4 ? array_slice(func_get_args(), 4) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 56
            echo "        ";
            $context["macro"] = $this;
            // line 57
            echo "
        ";
            // line 59
            echo "        ";
            if (twig_in_filter((isset($context["fieldtype"]) ? $context["fieldtype"] : null), array(0 => "html", 1 => "textarea", 2 => "text"))) {
                // line 60
                echo "            ";
                echo $context["macro"]->getparsetextfield((isset($context["key"]) ? $context["key"] : null), (isset($context["value"]) ? $context["value"] : null), (isset($context["contenttype"]) ? $context["contenttype"] : null));
                echo "
        ";
            }
            // line 62
            echo "
        ";
            // line 64
            echo "        ";
            if (((isset($context["fieldtype"]) ? $context["fieldtype"] : null) == "markdown")) {
                // line 65
                echo "            ";
                echo $context["macro"]->getparsetextfield((isset($context["key"]) ? $context["key"] : null), $this->env->getExtension('Bolt\Twig\TwigExtension')->markdown((isset($context["value"]) ? $context["value"] : null)), (isset($context["contenttype"]) ? $context["contenttype"] : null));
                echo "
        ";
            }
            // line 67
            echo "
        ";
            // line 69
            echo "        ";
            if (((isset($context["fieldtype"]) ? $context["fieldtype"] : null) == "image")) {
                // line 70
                echo "            ";
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->popup((isset($context["value"]) ? $context["value"] : null), 1200, 0);
                echo "
        ";
            }
            // line 72
            echo "
        ";
            // line 74
            echo "        ";
            if ((((isset($context["fieldtype"]) ? $context["fieldtype"] : null) == "video") && $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "responsive", array(), "any", true, true))) {
                // line 75
                echo "            <div class=\"flex-video ";
                echo ((($this->getAttribute((isset($context["value"]) ? $context["value"] : null), "ratio", array()) > 1.5)) ? ("widescreen") : (""));
                echo "\">
                ";
                // line 76
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "responsive", array()), "html", null, true);
                echo "
            </div>
        ";
            }
            // line 79
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

    // line 83
    public function getextendedfields($__key__ = null, $__value__ = null, $__fieldtype__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "key" => $__key__,
            "value" => $__value__,
            "fieldtype" => $__fieldtype__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 84
            echo "
        ";
            // line 86
            echo "        ";
            if ((((isset($context["fieldtype"]) ? $context["fieldtype"] : null) == "geolocation") && $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "latitude", array(), "any", true, true))) {
                // line 87
                echo "            <img src=\"http://maps.googleapis.com/maps/api/staticmap?center=";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "latitude", array()), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "longitude", array()), "html", null, true);
                echo "&amp;zoom=14&amp;size=617x300&amp;sensor=false&amp;markers=";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "latitude", array()), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "longitude", array()), "html", null, true);
                echo "\">
        ";
            }
            // line 89
            echo "
        ";
            // line 91
            echo "        ";
            if ((((isset($context["fieldtype"]) ? $context["fieldtype"] : null) == "select") &&  !twig_test_empty((isset($context["value"]) ? $context["value"] : null)))) {
                // line 92
                echo "            <p><strong>";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo ": </strong>
                ";
                // line 93
                echo twig_escape_filter($this->env, twig_join_filter((isset($context["value"]) ? $context["value"] : null), ", "), "html", null, true);
                echo "
            </p>
        ";
            }
            // line 96
            echo "
        ";
            // line 98
            echo "        ";
            if (((isset($context["fieldtype"]) ? $context["fieldtype"] : null) == "checkbox")) {
                // line 99
                echo "                <p>Checkbox ";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo ": ";
                echo (((isset($context["value"]) ? $context["value"] : null)) ? ("checked") : ("not checked"));
                echo "</p>
        ";
            }
            // line 101
            echo "
        ";
            // line 103
            echo "        ";
            if ((((isset($context["fieldtype"]) ? $context["fieldtype"] : null) == "imagelist") &&  !twig_test_empty((isset($context["value"]) ? $context["value"] : null)))) {
                // line 104
                echo "            ";
                echo $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "imagelistfield", array(0 => (isset($context["value"]) ? $context["value"] : null)), "method");
                echo "
        ";
            }
            // line 106
            echo "
        ";
            // line 109
            echo "        ";
            if ((twig_in_filter((isset($context["fieldtype"]) ? $context["fieldtype"] : null), array(0 => "filelist", 1 => "datetime", 2 => "date", 3 => "integer", 4 => "float")) &&  !twig_test_empty((isset($context["value"]) ? $context["value"] : null)))) {
                // line 110
                echo "            <p><strong>";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo ": </strong>
                ";
                // line 111
                if (twig_test_iterable((isset($context["value"]) ? $context["value"] : null))) {
                    // line 112
                    echo "                    ";
                    echo $this->env->getExtension('Bolt\Twig\DumpExtension')->dump($this->env, $context, (isset($context["value"]) ? $context["value"] : null));
                    echo "
                ";
                } else {
                    // line 114
                    echo "                    ";
                    echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                    echo "
                ";
                }
                // line 116
                echo "            </p>
        ";
            }
            // line 118
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

    public function getTemplateName()
    {
        return "_sub_fields.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  507 => 118,  503 => 116,  497 => 114,  491 => 112,  489 => 111,  484 => 110,  481 => 109,  478 => 106,  472 => 104,  469 => 103,  466 => 101,  458 => 99,  455 => 98,  452 => 96,  446 => 93,  441 => 92,  438 => 91,  435 => 89,  423 => 87,  420 => 86,  417 => 84,  403 => 83,  387 => 79,  381 => 76,  376 => 75,  373 => 74,  370 => 72,  364 => 70,  361 => 69,  358 => 67,  352 => 65,  349 => 64,  346 => 62,  340 => 60,  337 => 59,  334 => 57,  331 => 56,  316 => 55,  300 => 51,  291 => 48,  288 => 47,  284 => 46,  281 => 45,  269 => 44,  246 => 41,  243 => 40,  240 => 39,  237 => 38,  234 => 37,  220 => 36,  214 => 180,  204 => 177,  199 => 176,  197 => 175,  194 => 174,  189 => 173,  186 => 172,  183 => 171,  180 => 168,  178 => 167,  176 => 166,  173 => 164,  165 => 162,  161 => 160,  154 => 158,  145 => 155,  140 => 154,  137 => 153,  135 => 152,  132 => 151,  128 => 150,  125 => 149,  121 => 148,  118 => 147,  115 => 146,  112 => 144,  105 => 141,  103 => 140,  100 => 139,  97 => 138,  94 => 136,  87 => 133,  85 => 132,  82 => 131,  79 => 130,  76 => 127,  71 => 126,  68 => 124,  65 => 122,  63 => 121,  60 => 120,  57 => 81,  54 => 53,  51 => 43,  48 => 32,  45 => 30,  41 => 28,  39 => 27,  36 => 25,  32 => 23,  30 => 22,  27 => 19,  25 => 18,  22 => 15,  19 => 13,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "_sub_fields.twig", "");
    }
}
