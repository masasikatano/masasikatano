<?php

/* @bolt/changelog/_macros.twig */
class __TwigTemplate_29ea10637b07b3e6daea11e8048f224945c462c98fb013dee602521695637091 extends Twig_Template
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
        // line 23
        echo "
";
        // line 225
        echo "

";
    }

    // line 1
    public function getchangelog_pager($__currentpage__ = null, $__pagecount__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "currentpage" => $__currentpage__,
            "pagecount" => $__pagecount__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "        <ul class=\"pagination pagination-centered\">
            ";
            // line 3
            if (((isset($context["currentpage"]) ? $context["currentpage"] : null) > 1)) {
                // line 4
                echo "                <li><a href=\"?page=1\"><i style=\"font-weight: bold\" class=\"fa fa-angle-double-left\"></i></a></li>
                <li><a href=\"?page=";
                // line 5
                echo twig_escape_filter($this->env, ((isset($context["currentpage"]) ? $context["currentpage"] : null) - 1), "html", null, true);
                echo "\"><i style=\"font-weight: bold\" class=\"fa fa-angle-left\"></i></a></li>
            ";
            } else {
                // line 7
                echo "                <li class=\"disabled\"><span><i style=\"font-weight: bold\" class=\"fa fa-angle-double-left\"></i></span></li>
                <li class=\"disabled\"><span><i style=\"font-weight: bold\" class=\"fa fa-angle-left\"></i></span></li>
            ";
            }
            // line 10
            echo "
            <li><span>";
            // line 11
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.page");
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["currentpage"]) ? $context["currentpage"] : null), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, (isset($context["pagecount"]) ? $context["pagecount"] : null), "html", null, true);
            echo "</span></li>

            ";
            // line 13
            if (((isset($context["currentpage"]) ? $context["currentpage"] : null) < (isset($context["pagecount"]) ? $context["pagecount"] : null))) {
                // line 14
                echo "                <li><a href=\"?page=";
                echo twig_escape_filter($this->env, ((isset($context["currentpage"]) ? $context["currentpage"] : null) + 1), "html", null, true);
                echo "\"><i style=\"font-weight: bold\" class=\"fa fa-angle-right\"></i></a></li>
                <li><a href=\"?page=";
                // line 15
                echo twig_escape_filter($this->env, (isset($context["pagecount"]) ? $context["pagecount"] : null), "html", null, true);
                echo "\"><i style=\"font-weight: bold\" class=\"fa fa-angle-double-right\"></i></a></li>
            ";
            } else {
                // line 17
                echo "                <li class=\"disabled\"><span><i style=\"font-weight: bold\" class=\"fa fa-angle-right\"></i></span></li>
                <li class=\"disabled\"><span><i style=\"font-weight: bold\" class=\"fa fa-angle-double-right\"></i></span></li>
            ";
            }
            // line 20
            echo "        </ul>

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

    // line 24
    public function getchangelog_details($__entry__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "entry" => $__entry__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 25
            echo "    ";
            $context["macro"] = $this->loadTemplate("@bolt/_macro/_macro.twig", "@bolt/changelog/_macros.twig", 25);
            // line 26
            echo "    ";
            $context["__internal_1788875b7bab0dd12bb2f7ae37358d5f3ba3d1e618d5128fc96ab63e863d73a8"] = $this->loadTemplate("@bolt/_buic/_moment.twig", "@bolt/changelog/_macros.twig", 26);
            // line 27
            echo "
    ";
            // line 28
            $context["preview_w"] = 200;
            // line 29
            echo "    ";
            $context["preview_h"] = 150;
            // line 30
            echo "
    <h3>
        \"<a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editcontent", array("contenttypeslug" => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "contenttype", array()), "id" => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "contentid", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "title", array()), "html", null, true);
            echo "</a>\"
        <em><span class=\"time\">";
            // line 33
            echo $this->getAttribute($this, "changelog_mutation", array(0 => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "mutation_type", array())), "method");
            echo " ";
            echo $context["__internal_1788875b7bab0dd12bb2f7ae37358d5f3ba3d1e618d5128fc96ab63e863d73a8"]->getbuic_moment($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "date", array()));
            echo "</span>
        ";
            // line 34
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.by");
            echo "</em> <strong>";
            echo $context["macro"]->getuserlink((($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "ownerid", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "ownerid", array()), "")) : ("")));
            echo "</strong>
    </h3>

    <div class=\"changelog-details\">
        <div class=\"user\">
           <i class=\"icon icon-user\"></i>
        </div>

        <div class=\"body\">
            <p>
                ";
            // line 44
            if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "general/changelog/enabled"), "method")) {
                // line 45
                echo "                    ";
                if ($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "comment", array())) {
                    echo "<h4><strong>Comment</strong>: ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "comment", array()), "html", null, true);
                    echo "</h4>";
                }
                // line 46
                echo "                ";
            }
            // line 47
            echo "            </p>

            <table class=\"table table-bordered table-condensed table-changelog-details\">
                <thead>
                    <tr>
                        <th>";
            // line 52
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.field");
            echo "</th>
                        <th>";
            // line 53
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.value-old");
            echo "</th>
                        <th>";
            // line 54
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.value-new");
            echo "</th>
                    </tr>
                </thead>
                <tbody>
                ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "changedfields", array()));
            foreach ($context['_seq'] as $context["key"] => $context["field"]) {
                // line 59
                echo "                    <tr>
                        <td><strong>";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "label", array()), "html", null, true);
                echo "</strong></td>

                        ";
                // line 62
                if (($this->getAttribute($context["field"], "type", array()) == "normal")) {
                    // line 63
                    echo "                            <td class=\"change-log-item\">
                                ";
                    // line 64
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()), "html", null, true);
                    echo "
                            </td>
                            <td class=\"change-log-item\">
                                ";
                    // line 67
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()), "html", null, true);
                    echo "
                            </td>
                        ";
                } elseif (($this->getAttribute(                // line 69
$context["field"], "type", array()) == "html")) {
                    // line 70
                    echo "                            <td class=\"change-log-item\">
                                ";
                    // line 71
                    echo $this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array());
                    echo "
                            </td>
                            <td class=\"change-log-item\">
                                ";
                    // line 74
                    echo $this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array());
                    echo "
                            </td>
                        ";
                } elseif (($this->getAttribute(                // line 76
$context["field"], "type", array()) == "filelist")) {
                    // line 77
                    echo "                            <td class=\"change-log-item\">
                                ";
                    // line 78
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                        // line 79
                        echo "                                    <strong>File:</strong> ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "filename", array()), "html", null, true);
                        echo "<br>
                                    <strong>Title:</strong> ";
                        // line 80
                        echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "title", array()), "html", null, true);
                        echo "

                                    ";
                        // line 82
                        if ( !$this->getAttribute($context["loop"], "last", array())) {
                            // line 83
                            echo "                                    <br><br>
                                    ";
                        }
                        // line 85
                        echo "                                ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 86
                    echo "                            </td>
                            <td class=\"change-log-item\">
                                ";
                    // line 88
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                        // line 89
                        echo "                                    <strong>File:</strong> ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "filename", array()), "html", null, true);
                        echo "<br>
                                    <strong>Title:</strong> ";
                        // line 90
                        echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "title", array()), "html", null, true);
                        echo "

                                    ";
                        // line 92
                        if ( !$this->getAttribute($context["loop"], "last", array())) {
                            // line 93
                            echo "                                    <br><br>
                                    ";
                        }
                        // line 95
                        echo "                                ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 96
                    echo "                            </td>
                        ";
                } elseif (($this->getAttribute(                // line 97
$context["field"], "type", array()) == "geolocation")) {
                    // line 98
                    echo "                            <td class=\"change-log-item\">
                                <strong>Address:</strong> ";
                    // line 99
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()), "address", array()), "html", null, true);
                    echo "<br>
                                <strong>Latitude:</strong> ";
                    // line 100
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()), "latitude", array()), "html", null, true);
                    echo "<br>
                                <strong>Longitude:</strong> ";
                    // line 101
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()), "longitude", array()), "html", null, true);
                    echo "<br>
                                <strong>Matched address:</strong> ";
                    // line 102
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()), "formatted_address", array()), "html", null, true);
                    echo "
                            </td>
                            <td class=\"change-log-item\">
                                <strong>Address:</strong> ";
                    // line 105
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()), "address", array()), "html", null, true);
                    echo "<br>
                                <strong>Latitude:</strong> ";
                    // line 106
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()), "latitude", array()), "html", null, true);
                    echo "<br>
                                <strong>Longitude:</strong> ";
                    // line 107
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()), "longitude", array()), "html", null, true);
                    echo "<br>
                                <strong>Matched address:</strong> ";
                    // line 108
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()), "formatted_address", array()), "html", null, true);
                    echo "
                            </td>
                        ";
                } elseif (($this->getAttribute(                // line 110
$context["field"], "type", array()) == "image")) {
                    // line 111
                    echo "                            <td class=\"change-log-item\">
                                <strong>File:</strong> ";
                    // line 112
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()), "file", array()), "html", null, true);
                    echo "<br>
                                <strong>Title:</strong> ";
                    // line 113
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()), "title", array()), "html", null, true);
                    echo "<br>
                                <div class=\"content-preview imageholder\" id=\"thumbnail-";
                    // line 114
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\">
                                ";
                    // line 115
                    if (($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()), "file", array()) != "")) {
                        // line 116
                        echo "                                    ";
                        $context["preview_path"] = $this->env->getExtension('Bolt\Twig\TwigExtension')->thumbnail($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()), "file", array()), (isset($context["preview_w"]) ? $context["preview_w"] : null), (isset($context["preview_h"]) ? $context["preview_h"] : null), "c");
                        // line 117
                        echo "                                    <img src=\"";
                        echo twig_escape_filter($this->env, (isset($context["preview_path"]) ? $context["preview_path"] : null), "html", null, true);
                        echo "\" alt=\"Preview\" width=\"";
                        echo twig_escape_filter($this->env, (isset($context["preview_w"]) ? $context["preview_w"] : null), "html", null, true);
                        echo "\" height=\"";
                        echo twig_escape_filter($this->env, (isset($context["preview_h"]) ? $context["preview_h"] : null), "html", null, true);
                        echo "\">
                                ";
                    }
                    // line 119
                    echo "                                </div>
                            </td>
                            <td class=\"change-log-item\">
                                <strong>File:</strong> ";
                    // line 122
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()), "file", array()), "html", null, true);
                    echo "<br>
                                <strong>Title:</strong> ";
                    // line 123
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()), "title", array()), "html", null, true);
                    echo "<br>
                                <div class=\"content-preview imageholder\" id=\"thumbnail-";
                    // line 124
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\">
                                ";
                    // line 125
                    if (($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()), "file", array()) != "")) {
                        // line 126
                        echo "                                    ";
                        $context["preview_path"] = $this->env->getExtension('Bolt\Twig\TwigExtension')->thumbnail($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()), "file", array()), (isset($context["preview_w"]) ? $context["preview_w"] : null), (isset($context["preview_h"]) ? $context["preview_h"] : null), "c");
                        // line 127
                        echo "                                    <img src=\"";
                        echo twig_escape_filter($this->env, (isset($context["preview_path"]) ? $context["preview_path"] : null), "html", null, true);
                        echo "\" alt=\"Preview\" width=\"";
                        echo twig_escape_filter($this->env, (isset($context["preview_w"]) ? $context["preview_w"] : null), "html", null, true);
                        echo "\" height=\"";
                        echo twig_escape_filter($this->env, (isset($context["preview_h"]) ? $context["preview_h"] : null), "html", null, true);
                        echo "\">
                                ";
                    }
                    // line 129
                    echo "                                </div>
                            </td>
                        ";
                } elseif (($this->getAttribute(                // line 131
$context["field"], "type", array()) == "imagelist")) {
                    // line 132
                    echo "                            <td class=\"change-log-item\">
                                ";
                    // line 133
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                        // line 134
                        echo "                                    <strong>File:</strong> ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "filename", array()), "html", null, true);
                        echo "<br>
                                    <strong>Title:</strong> ";
                        // line 135
                        echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "title", array()), "html", null, true);
                        echo "<br>
                                    <div class=\"content-preview imageholder\" id=\"thumbnail-";
                        // line 136
                        echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                        echo "\">
                                    ";
                        // line 137
                        if (($this->getAttribute($context["image"], "filename", array()) != "")) {
                            // line 138
                            echo "                                        ";
                            $context["preview_path"] = $this->env->getExtension('Bolt\Twig\TwigExtension')->thumbnail($this->getAttribute($context["image"], "filename", array()), (isset($context["preview_w"]) ? $context["preview_w"] : null), (isset($context["preview_h"]) ? $context["preview_h"] : null), "c");
                            // line 139
                            echo "                                        <img src=\"";
                            echo twig_escape_filter($this->env, (isset($context["preview_path"]) ? $context["preview_path"] : null), "html", null, true);
                            echo "\" alt=\"Preview\" width=\"";
                            echo twig_escape_filter($this->env, (isset($context["preview_w"]) ? $context["preview_w"] : null), "html", null, true);
                            echo "\" height=\"";
                            echo twig_escape_filter($this->env, (isset($context["preview_h"]) ? $context["preview_h"] : null), "html", null, true);
                            echo "\">
                                    ";
                        }
                        // line 141
                        echo "                                    </div>

                                    ";
                        // line 143
                        if ( !$this->getAttribute($context["loop"], "last", array())) {
                            // line 144
                            echo "                                    <br>
                                    ";
                        }
                        // line 146
                        echo "                                ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 147
                    echo "                            </td>
                            <td class=\"change-log-item\">
                                ";
                    // line 149
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                        // line 150
                        echo "                                    <strong>File:</strong> ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "filename", array()), "html", null, true);
                        echo "<br>
                                    <strong>Title:</strong> ";
                        // line 151
                        echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "title", array()), "html", null, true);
                        echo "<br>
                                    <div class=\"content-preview imageholder\" id=\"thumbnail-";
                        // line 152
                        echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                        echo "\">
                                    ";
                        // line 153
                        if (($this->getAttribute($context["image"], "filename", array()) != "")) {
                            // line 154
                            echo "                                        ";
                            $context["preview_path"] = $this->env->getExtension('Bolt\Twig\TwigExtension')->thumbnail($this->getAttribute($context["image"], "filename", array()), (isset($context["preview_w"]) ? $context["preview_w"] : null), (isset($context["preview_h"]) ? $context["preview_h"] : null), "c");
                            // line 155
                            echo "                                        <img src=\"";
                            echo twig_escape_filter($this->env, (isset($context["preview_path"]) ? $context["preview_path"] : null), "html", null, true);
                            echo "\" alt=\"Preview\" width=\"";
                            echo twig_escape_filter($this->env, (isset($context["preview_w"]) ? $context["preview_w"] : null), "html", null, true);
                            echo "\" height=\"";
                            echo twig_escape_filter($this->env, (isset($context["preview_h"]) ? $context["preview_h"] : null), "html", null, true);
                            echo "\">
                                    ";
                        }
                        // line 157
                        echo "                                    </div>

                                    ";
                        // line 159
                        if ( !$this->getAttribute($context["loop"], "last", array())) {
                            // line 160
                            echo "                                    <br>
                                    ";
                        }
                        // line 162
                        echo "                                ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 163
                    echo "                            </td>
                        ";
                } elseif ((($this->getAttribute(                // line 164
$context["field"], "type", array()) == "markdown") || ($this->getAttribute($context["field"], "type", array()) == "textarea"))) {
                    // line 165
                    echo "                            <td class=\"change-log-item\">
                                <pre style=\"white-space: pre-wrap; background-color: inherit; border: 0;\">";
                    // line 166
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()), "html", null, true);
                    echo "</pre>
                            </td>
                            <td class=\"change-log-item\">
                                <pre style=\"white-space: pre-wrap; background-color: inherit; border: 0;\">";
                    // line 169
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()), "html", null, true);
                    echo "</pre>
                            </td>
                        ";
                } elseif (($this->getAttribute(                // line 171
$context["field"], "type", array()) == "select")) {
                    // line 172
                    echo "                            <td class=\"change-log-item\">
                                ";
                    // line 173
                    if (twig_test_iterable($this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()))) {
                        // line 174
                        echo "                                    <ul>
                                    ";
                        // line 175
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["select"]) {
                            // line 176
                            echo "                                        <li>";
                            echo twig_escape_filter($this->env, $context["select"], "html", null, true);
                            echo "</li>
                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['select'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 178
                        echo "                                    </ul>
                                ";
                    } else {
                        // line 180
                        echo "                                    ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()), "html", null, true);
                        echo "
                                ";
                    }
                    // line 182
                    echo "                            </td>
                            <td class=\"change-log-item\">
                                ";
                    // line 184
                    if (twig_test_iterable($this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()))) {
                        // line 185
                        echo "                                    <ul>
                                    ";
                        // line 186
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["select"]) {
                            // line 187
                            echo "                                        <li>";
                            echo twig_escape_filter($this->env, $context["select"], "html", null, true);
                            echo "</li>
                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['select'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 189
                        echo "                                    </ul>
                                ";
                    } else {
                        // line 191
                        echo "                                    ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()), "html", null, true);
                        echo "
                                ";
                    }
                    // line 193
                    echo "                            </td>
                        ";
                } elseif (($this->getAttribute(                // line 194
$context["field"], "type", array()) == "video")) {
                    // line 195
                    echo "                            <td class=\"change-log-item\">
                                <strong>Title:</strong> ";
                    // line 196
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()), "title", array()), "html", null, true);
                    echo "<br>
                                <strong>URL:</strong> ";
                    // line 197
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()), "url", array()), "html", null, true);
                    echo "<br>
                                <strong>Size:</strong> ";
                    // line 198
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()), "width", array()), "html", null, true);
                    echo " x ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()), "height", array()), "html", null, true);
                    echo "<br>
                                <div class=\"imageholder\" id=\"thumbnail-";
                    // line 199
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\">
                                    ";
                    // line 200
                    if ((($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "before", array(), "any", false, true), "render", array(), "any", false, true), "thumbnail", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "before", array(), "any", false, true), "render", array(), "any", false, true), "thumbnail", array()), "")) : (""))) {
                        // line 201
                        echo "                                        <img src=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "before", array()), "render", array()), "thumbnail", array()), "html", null, true);
                        echo "\" width=\"200\" height=\"150\">
                                    ";
                    }
                    // line 203
                    echo "                                </div>
                                <div class=\"hidden video\" id=\"";
                    // line 204
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\">";
                    echo $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()), "html", array());
                    echo "</div>
                            </td>
                            <td class=\"change-log-item\">
                                <strong>Title:</strong> ";
                    // line 207
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()), "title", array()), "html", null, true);
                    echo "<br>
                                <strong>URL:</strong> ";
                    // line 208
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()), "url", array()), "html", null, true);
                    echo "<br>
                                <strong>Size:</strong> ";
                    // line 209
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()), "width", array()), "html", null, true);
                    echo " x ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()), "height", array()), "html", null, true);
                    echo "<br>
                                <div class=\"imageholder\" id=\"thumbnail-";
                    // line 210
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\">
                                    ";
                    // line 211
                    if ((($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "after", array(), "any", false, true), "render", array(), "any", false, true), "thumbnail", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "after", array(), "any", false, true), "render", array(), "any", false, true), "thumbnail", array()), "")) : (""))) {
                        // line 212
                        echo "                                        <img src=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()), "thumbnail", array()), "html", null, true);
                        echo "\" width=\"";
                        echo twig_escape_filter($this->env, (isset($context["preview_w"]) ? $context["preview_w"] : null), "html", null, true);
                        echo "\" height=\"";
                        echo twig_escape_filter($this->env, (isset($context["preview_h"]) ? $context["preview_h"] : null), "html", null, true);
                        echo "\">
                                    ";
                    }
                    // line 214
                    echo "                                </div>
                                <div class=\"hidden video\" id=\"";
                    // line 215
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\">";
                    echo $this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "after", array()), "render", array()), "html", array());
                    echo "</div>
                            </td>
                        ";
                }
                // line 218
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 220
            echo "                </tbody>
            </table>
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

    // line 227
    public function getchangelog_mutation($__raw__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "raw" => $__raw__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 228
            echo "    ";
            $context["mapping"] = array("UPDATE" => "changed", "INSERT" => "created", "DELETE" => "deleted", "HOLD" => "put on hold", "PUBLISH" => "published", "DRAFT" => "depublished");
            // line 229
            echo "    ";
            if ($this->getAttribute((isset($context["mapping"]) ? $context["mapping"] : null), (isset($context["raw"]) ? $context["raw"] : null), array(), "array", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mapping"]) ? $context["mapping"] : null), (isset($context["raw"]) ? $context["raw"] : null), array(), "array"), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, (isset($context["raw"]) ? $context["raw"] : null), "html", null, true);
            }
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
        return "@bolt/changelog/_macros.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  812 => 229,  809 => 228,  797 => 227,  778 => 220,  771 => 218,  763 => 215,  760 => 214,  750 => 212,  748 => 211,  744 => 210,  738 => 209,  734 => 208,  730 => 207,  722 => 204,  719 => 203,  713 => 201,  711 => 200,  707 => 199,  701 => 198,  697 => 197,  693 => 196,  690 => 195,  688 => 194,  685 => 193,  679 => 191,  675 => 189,  666 => 187,  662 => 186,  659 => 185,  657 => 184,  653 => 182,  647 => 180,  643 => 178,  634 => 176,  630 => 175,  627 => 174,  625 => 173,  622 => 172,  620 => 171,  615 => 169,  609 => 166,  606 => 165,  604 => 164,  601 => 163,  587 => 162,  583 => 160,  581 => 159,  577 => 157,  567 => 155,  564 => 154,  562 => 153,  558 => 152,  554 => 151,  549 => 150,  532 => 149,  528 => 147,  514 => 146,  510 => 144,  508 => 143,  504 => 141,  494 => 139,  491 => 138,  489 => 137,  485 => 136,  481 => 135,  476 => 134,  459 => 133,  456 => 132,  454 => 131,  450 => 129,  440 => 127,  437 => 126,  435 => 125,  431 => 124,  427 => 123,  423 => 122,  418 => 119,  408 => 117,  405 => 116,  403 => 115,  399 => 114,  395 => 113,  391 => 112,  388 => 111,  386 => 110,  381 => 108,  377 => 107,  373 => 106,  369 => 105,  363 => 102,  359 => 101,  355 => 100,  351 => 99,  348 => 98,  346 => 97,  343 => 96,  329 => 95,  325 => 93,  323 => 92,  318 => 90,  313 => 89,  296 => 88,  292 => 86,  278 => 85,  274 => 83,  272 => 82,  267 => 80,  262 => 79,  245 => 78,  242 => 77,  240 => 76,  235 => 74,  229 => 71,  226 => 70,  224 => 69,  219 => 67,  213 => 64,  210 => 63,  208 => 62,  203 => 60,  200 => 59,  196 => 58,  189 => 54,  185 => 53,  181 => 52,  174 => 47,  171 => 46,  164 => 45,  162 => 44,  147 => 34,  141 => 33,  135 => 32,  131 => 30,  128 => 29,  126 => 28,  123 => 27,  120 => 26,  117 => 25,  105 => 24,  88 => 20,  83 => 17,  78 => 15,  73 => 14,  71 => 13,  62 => 11,  59 => 10,  54 => 7,  49 => 5,  46 => 4,  44 => 3,  41 => 2,  28 => 1,  22 => 225,  19 => 23,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@bolt/changelog/_macros.twig", "");
    }
}
