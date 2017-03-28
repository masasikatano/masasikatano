<?php

/* @bolt/_base/_listing.twig */
class __TwigTemplate_cd7ccd00ab63698d57e8accdaa0f6fb313a8faba65107ab7e0f97dbfb6ada64e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'listing_columns' => array($this, 'block_listing_columns'),
            'listing_header' => array($this, 'block_listing_header'),
            'listing_id' => array($this, 'block_listing_id'),
            'listing_content' => array($this, 'block_listing_content'),
            'listing_meta' => array($this, 'block_listing_meta'),
            'listing_actions' => array($this, 'block_listing_actions'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["macro"] = $this->loadTemplate("@bolt/_macro/_macro.twig", "@bolt/_base/_listing.twig", 1);
        // line 2
        $context["__internal_31cda5ff7dfc40b9fe094fc310ae41314f50774a01e4f7e46679b0264501e896"] = $this->loadTemplate("@bolt/_buic/_moment.twig", "@bolt/_base/_listing.twig", 2);
        // line 3
        $context["__internal_822b898c54200abccd668c624340f52790f1bb43ef533d7d7c2bc76eaa1ef4ec"] = $this;
        // line 4
        echo "
";
        // line 13
        echo "
";
        // line 25
        echo "
";
        // line 26
        $context["modifiable"] = (((($this->getAttribute((isset($context["permissions"]) ? $context["permissions"] : null), "create", array()) || $this->getAttribute((isset($context["permissions"]) ? $context["permissions"] : null), "edit", array())) || $this->getAttribute((isset($context["permissions"]) ? $context["permissions"] : null), "delete", array())) || $this->getAttribute((isset($context["permissions"]) ? $context["permissions"] : null), "publish", array())) || $this->getAttribute((isset($context["permissions"]) ? $context["permissions"] : null), "depublish", array()));
        // line 27
        echo "
";
        // line 28
        $context["prop"] = array("extended" =>  !        // line 29
(isset($context["compact"]) ? $context["compact"] : null), "has_groupname" => $this->getAttribute($this->getAttribute(        // line 30
(isset($context["content"]) ? $context["content"] : null), "group", array(), "any", false, true), "name", array(), "any", true, true), "nextgroup" => ((        // line 31
array_key_exists("new_group", $context)) ? (_twig_default_filter((isset($context["new_group"]) ? $context["new_group"] : null), false)) : (false)), "unordered" => ($this->env->getExtension('Bolt\Twig\TwigExtension')->request("order") == ""), "first" => $this->getAttribute(        // line 33
(isset($context["loop"]) ? $context["loop"] : null), "first", array()), "last" => $this->getAttribute(        // line 34
(isset($context["loop"]) ? $context["loop"] : null), "last", array()));
        // line 36
        echo "
";
        // line 37
        $context["local"] = array("row_heading" => ((($this->getAttribute(        // line 38
(isset($context["prop"]) ? $context["prop"] : null), "extended", array()) && $this->getAttribute((isset($context["prop"]) ? $context["prop"] : null), "unordered", array())) && $this->getAttribute((isset($context["prop"]) ? $context["prop"] : null), "has_groupname", array())) && ($this->getAttribute((isset($context["prop"]) ? $context["prop"] : null), "first", array()) || $this->getAttribute((isset($context["prop"]) ? $context["prop"] : null), "nextgroup", array()))), "row_header" => ($this->getAttribute(        // line 39
(isset($context["prop"]) ? $context["prop"] : null), "extended", array()) && ($this->getAttribute((isset($context["prop"]) ? $context["prop"] : null), "first", array()) || (($this->getAttribute((isset($context["prop"]) ? $context["prop"] : null), "has_groupname", array()) && $this->getAttribute((isset($context["prop"]) ? $context["prop"] : null), "nextgroup", array())) && $this->getAttribute((isset($context["prop"]) ? $context["prop"] : null), "unordered", array())))));
        // line 41
        echo "
";
        // line 45
        if (($this->getAttribute((isset($context["local"]) ? $context["local"] : null), "row_heading", array()) || (($this->getAttribute((isset($context["internal"]) ? $context["internal"] : null), "heading", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["internal"]) ? $context["internal"] : null), "heading", array()))) : ("")))) {
            // line 46
            echo "    ";
            if ( !$this->getAttribute((isset($context["prop"]) ? $context["prop"] : null), "first", array())) {
                // line 47
                echo "        ";
                echo $context["__internal_822b898c54200abccd668c624340f52790f1bb43ef533d7d7c2bc76eaa1ef4ec"]->gettbody_end((($this->getAttribute((isset($context["internal"]) ? $context["internal"] : null), "selection_toolbar", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["internal"]) ? $context["internal"] : null), "selection_toolbar", array()))) : ("")));
                echo "
    ";
            }
            // line 49
            echo "
    ";
            // line 50
            echo $context["__internal_822b898c54200abccd668c624340f52790f1bb43ef533d7d7c2bc76eaa1ef4ec"]->gettbody_beg((isset($context["local"]) ? $context["local"] : null), (isset($context["modifiable"]) ? $context["modifiable"] : null));
            echo "

    <tr class=\"heading\">
        ";
            // line 53
            if (false) {
                // line 54
                echo "            ";
                $this->displayBlock('listing_columns', $context, $blocks);
                // line 55
                echo "        ";
            }
            // line 56
            echo "        ";
            if ((isset($context["compact"]) ? $context["compact"] : null)) {
                // line 57
                echo "            ";
                $context["columns"] = (                $this->renderBlock("listing_columns", $context, $blocks) - 1);
                // line 58
                echo "        ";
            } else {
                // line 59
                echo "            ";
                $context["columns"] =                 $this->renderBlock("listing_columns", $context, $blocks);
                // line 60
                echo "        ";
            }
            // line 61
            echo "        <th colspan=\"";
            echo twig_escape_filter($this->env, (isset($context["columns"]) ? $context["columns"] : null), "html", null, true);
            echo "\">
            ";
            // line 62
            if ((($this->getAttribute((isset($context["internal"]) ? $context["internal"] : null), "heading", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["internal"]) ? $context["internal"] : null), "heading", array()))) : (""))) {
                // line 63
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["internal"]) ? $context["internal"] : null), "heading", array()), "html", null, true);
                echo "
            ";
            } else {
                // line 65
                echo "                ";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "group", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "group", array(), "any", false, true), "name", array()), $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("(no group)"))) : ($this->env->getExtension('Bolt\Twig\TwigExtension')->trans("(no group)"))), "html", null, true);
                echo "
            ";
            }
            // line 67
            echo "        </th>
    </tr>
";
        } elseif ($this->getAttribute(        // line 69
(isset($context["prop"]) ? $context["prop"] : null), "first", array())) {
            // line 70
            echo "    ";
            echo $context["__internal_822b898c54200abccd668c624340f52790f1bb43ef533d7d7c2bc76eaa1ef4ec"]->gettbody_beg((isset($context["local"]) ? $context["local"] : null), (isset($context["modifiable"]) ? $context["modifiable"] : null));
            echo "
";
        }
        // line 72
        echo "
";
        // line 76
        if ($this->getAttribute((isset($context["local"]) ? $context["local"] : null), "row_header", array())) {
            // line 77
            echo "    ";
            // line 78
            echo "    ";
            $context["params"] = array();
            // line 79
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "all", array()));
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                if (($context["key"] != "order")) {
                    // line 80
                    echo "        ";
                    $context["params"] = twig_array_merge((isset($context["params"]) ? $context["params"] : null), array($context["key"] => $context["val"]));
                    // line 81
                    echo "    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "    ";
            $context["link"] = ((("?" . twig_urlencode_filter((isset($context["params"]) ? $context["params"] : null))) . ((twig_length_filter($this->env, (isset($context["params"]) ? $context["params"] : null))) ? ("&") : (""))) . "order=");
            // line 83
            echo "    ";
            // line 84
            echo "
    <tr class=\"header\">
        ";
            // line 86
            $this->displayBlock('listing_header', $context, $blocks);
            // line 126
            echo "    </tr>
";
        }
        // line 128
        echo "
";
        // line 132
        echo "<tr ";
        if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "status", array()) != "published")) {
            echo "class=\"dim\"";
        }
        if ((isset($context["modifiable"]) ? $context["modifiable"] : null)) {
            echo " id=\"item_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()), "html", null, true);
            echo "\"";
        }
        echo ">

    ";
        // line 135
        echo "    ";
        $this->displayBlock('listing_id', $context, $blocks);
        // line 146
        echo "
    ";
        // line 148
        echo "    ";
        $this->displayBlock('listing_content', $context, $blocks);
        // line 182
        echo "
    ";
        // line 183
        if ($this->getAttribute((isset($context["prop"]) ? $context["prop"] : null), "extended", array())) {
            // line 184
            echo "        ";
            $this->displayBlock('listing_meta', $context, $blocks);
            // line 206
            echo "    ";
        }
        // line 207
        echo "
    ";
        // line 209
        echo "    ";
        $this->displayBlock('listing_actions', $context, $blocks);
        // line 320
        echo "</tr>

";
        // line 322
        if ($this->getAttribute((isset($context["prop"]) ? $context["prop"] : null), "last", array())) {
            // line 323
            echo "    ";
            echo $context["__internal_822b898c54200abccd668c624340f52790f1bb43ef533d7d7c2bc76eaa1ef4ec"]->gettbody_end((($this->getAttribute((isset($context["internal"]) ? $context["internal"] : null), "selection_toolbar", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["internal"]) ? $context["internal"] : null), "selection_toolbar", array()))) : ("")));
            echo "
";
        }
    }

    // line 54
    public function block_listing_columns($context, array $blocks = array())
    {
        echo "6";
    }

    // line 86
    public function block_listing_header($context, array $blocks = array())
    {
        // line 87
        echo "            ";
        $context["__internal_00674f44566f6b4dbd7b3d5a18b1b85ae694fa09e97a3179c75ec386aa1ddac5"] = $this->loadTemplate("@bolt/_buic/_listing.twig", "@bolt/_base/_listing.twig", 87);
        // line 88
        echo "
            ";
        // line 90
        echo "            ";
        if (($this->getAttribute((isset($context["prop"]) ? $context["prop"] : null), "extended", array()) && (isset($context["modifiable"]) ? $context["modifiable"] : null))) {
            // line 91
            echo "                <th class=\"menu hidden-xs\">
                    <div class=\"btn-group\">
                        <button class=\"btn btn-default btn-xs dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <span class=\"caret\"></span>
                        </button>
                        <ul class=\"dropdown-menu\">
                            <li class=\"select-all\"><a href=\"#\">";
            // line 97
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.select-all");
            echo "</a></li>
                            <li class=\"hidden select-none\"><a href=\"#\">";
            // line 98
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.select-none");
            echo "</a></li>
                            <li class=\"hidden divider\" role=\"separator\"></li>
                            <li class=\"hidden dropdown-header\">";
            // line 100
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.selection");
            echo " (#):</li>
                            <li class=\"hidden\"><a href=\"#\">• ";
            // line 101
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.delete");
            echo "</a></li>
                            <li class=\"hidden disabled\"><a href=\"#\">• ";
            // line 102
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.publish");
            echo "</a></li>
                            <li class=\"hidden disabled\"><a href=\"#\">• ";
            // line 103
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.depublish");
            echo "</a></li>
                        </ul>
                    </div>
                </th>
            ";
        } else {
            // line 108
            echo "                <th style=\"margin: 0; padding: 0;\"></th>
            ";
        }
        // line 110
        echo "
            ";
        // line 112
        echo "            <th class=\"hidden-xs\">";
        echo $context["__internal_00674f44566f6b4dbd7b3d5a18b1b85ae694fa09e97a3179c75ec386aa1ddac5"]->getbuic_listing_slink("id", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.id"));
        echo "</th>

            ";
        // line 115
        echo "            <th style=\"width:80%\">";
        echo $context["__internal_00674f44566f6b4dbd7b3d5a18b1b85ae694fa09e97a3179c75ec386aa1ddac5"]->getbuic_listing_slink(twig_first($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "TitleColumnName", array(), "method")), (($this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Title") . " / ") . $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Excerpt")));
        echo "</th>

            ";
        // line 118
        echo "            <th class=\"listthumb\"></th>

            ";
        // line 121
        echo "            <th class=\"username hidden-sm hidden-xs\">";
        echo $context["__internal_00674f44566f6b4dbd7b3d5a18b1b85ae694fa09e97a3179c75ec386aa1ddac5"]->getbuic_listing_slink("datecreated", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.meta"));
        echo "</th>

            ";
        // line 124
        echo "            <th><span class=\"hidden-xs\">";
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.action-plural");
        echo "</span></th>
        ";
    }

    // line 135
    public function block_listing_id($context, array $blocks = array())
    {
        // line 136
        echo "        ";
        // line 137
        echo "        ";
        if (($this->getAttribute((isset($context["prop"]) ? $context["prop"] : null), "extended", array()) && $this->getAttribute((isset($context["permissions"]) ? $context["permissions"] : null), "delete", array()))) {
            // line 138
            echo "            <td class=\"check hidden-xs\"><input type=\"checkbox\" name=\"checkRow\"></td>
        ";
        } else {
            // line 140
            echo "            <td style=\"margin: 0; padding: 0;\"></td>
        ";
        }
        // line 142
        echo "
        ";
        // line 144
        echo "        <td class=\"id hidden-xs\">№ ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()), "html", null, true);
        echo "</td>
    ";
    }

    // line 148
    public function block_listing_content($context, array $blocks = array())
    {
        // line 149
        echo "        ";
        // line 150
        echo "        <td class=\"excerpt ";
        if ($this->getAttribute((isset($context["prop"]) ? $context["prop"] : null), "extended", array())) {
            echo "large";
        }
        echo "\">
            ";
        // line 151
        $context["title"] = (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "getTitle", array(0 => true), "method", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "getTitle", array(0 => true), "method"), (("<em>(" . $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.no-title")) . ")</em>"))) : ((("<em>(" . $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.no-title")) . ")</em>")));
        // line 152
        echo "            <span>
                <strong class=\"visible-xs\">№ ";
        // line 153
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()), "html", null, true);
        echo ". </strong>
                <strong>
                    ";
        // line 155
        if ((isset($context["modifiable"]) ? $context["modifiable"] : null)) {
            // line 156
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editcontent", array("contenttypeslug" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contenttype", array()), "slug", array()), "id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()))), "html", null, true);
            echo "\" title=\"Slug: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "slug", array()), "html", null, true);
            echo "\">
                            ";
            // line 157
            echo (isset($context["title"]) ? $context["title"] : null);
            // line 158
            echo "</a>
                    ";
        } else {
            // line 160
            echo "                        ";
            echo (isset($context["title"]) ? $context["title"] : null);
            echo "
                    ";
        }
        // line 162
        echo "                </strong>
                ";
        // line 163
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "excerpt", array(0 => ((isset($context["excerptlength"]) ? $context["excerptlength"] : null) - twig_length_filter($this->env, (isset($context["title"]) ? $context["title"] : null))), 1 => false, 2 => ((array_key_exists("filter", $context)) ? (_twig_default_filter((isset($context["filter"]) ? $context["filter"] : null))) : (""))), "method"), "html", null, true);
        echo "
            </span>
        </td>

        ";
        // line 168
        echo "        <td class=\"listthumb\">
            ";
        // line 169
        if ( !twig_test_empty($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "getImage", array()))) {
            // line 170
            echo "                ";
            // line 171
            echo "                ";
            // line 172
            echo "                ";
            $context["thumb_height"] = twig_round(((isset($context["thumbsize"]) ? $context["thumbsize"] : null) * 0.75));
            // line 173
            echo "                ";
            $context["thumb_small"] = $this->env->getExtension('Bolt\Twig\TwigExtension')->thumbnail($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "getImage", array()), (isset($context["thumbsize"]) ? $context["thumbsize"] : null), (isset($context["thumb_height"]) ? $context["thumb_height"] : null), "c");
            // line 174
            echo "                ";
            $context["thumb_large"] = $this->env->getExtension('Bolt\Twig\TwigExtension')->thumbnail($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "getImage", array()), 1000, 800, "r");
            // line 175
            echo "                ";
            $context["thumb_title"] = (($this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Image") . ": ") . $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "getImage", array()));
            // line 176
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["thumb_large"]) ? $context["thumb_large"] : null), "html", null, true);
            echo "\" class=\"magnific\" title=\"";
            echo twig_escape_filter($this->env, (isset($context["thumb_title"]) ? $context["thumb_title"] : null), "html", null, true);
            echo "\">
                    <img src=\"";
            // line 177
            echo twig_escape_filter($this->env, (isset($context["thumb_small"]) ? $context["thumb_small"] : null), "html", null, true);
            echo "\" width=\"";
            echo twig_escape_filter($this->env, (isset($context["thumbsize"]) ? $context["thumbsize"] : null), "html", null, true);
            echo "\" height=\"";
            echo twig_escape_filter($this->env, (isset($context["thumb_height"]) ? $context["thumb_height"] : null), "html", null, true);
            echo "\" alt=\"";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.thumbnail");
            echo "\">
                </a>
            ";
        }
        // line 180
        echo "        </td>
    ";
    }

    // line 184
    public function block_listing_meta($context, array $blocks = array())
    {
        // line 185
        echo "            ";
        // line 186
        echo "            <td class=\"username hidden-sm hidden-xs\">
                <i class=\"fa fa-user fa-fw\"></i>
                ";
        // line 188
        if ($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "user", array(), "any", false, true), "displayname", array(), "any", true, true)) {
            // line 189
            echo "                ";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->excerpt($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "user", array()), "displayname", array()), 15);
            echo "
            ";
        } else {
            // line 191
            echo "                <s>";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->excerpt($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "values", array()), "ownerid", array()), 15);
            echo "</s>
                ";
        }
        // line 192
        echo "<br>
                ";
        // line 193
        if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "status", array()) == "timed")) {
            // line 194
            echo "                    <i class=\"fa fa-clock-o status-timed fa-fw\"></i> ";
            echo $context["__internal_31cda5ff7dfc40b9fe094fc310ae41314f50774a01e4f7e46679b0264501e896"]->getbuic_moment($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datepublish", array()));
            echo "<br>
                ";
        } else {
            // line 196
            echo "                    <i class=\"fa fa-circle status-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "status", array()), "html", null, true);
            echo " fa-fw\"></i> ";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->localeDateTime($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datepublish", array()), "%x");
            echo "<br>
                ";
        }
        // line 198
        echo "                ";
        if ( !twig_test_empty((($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "sortorder", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "sortorder", array()))) : ("")))) {
            // line 199
            echo "                    <i class=\"fa fa-align-left fa-fw\"></i>
                    <a href=\"";
            // line 200
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editcontent", array("contenttypeslug" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contenttype", array()), "slug", array()), "id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()))), "html", null, true);
            echo "#taxonomy\" >
                        ";
            // line 201
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.order-colon-sort", array("%sort%" => $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "sortorder", array())));
            echo "
                    </a>
                ";
        }
        // line 204
        echo "            </td>
        ";
    }

    // line 209
    public function block_listing_actions($context, array $blocks = array())
    {
        // line 210
        echo "        ";
        // line 211
        echo "        <td class=\"actions\">
            <div class=\"btn-group\">
                ";
        // line 213
        if ((isset($context["modifiable"]) ? $context["modifiable"] : null)) {
            // line 214
            echo "                    <a class=\"btn btn-default btn-xs hidden-xs\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editcontent", array("contenttypeslug" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contenttype", array()), "slug", array()), "id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()))), "html", null, true);
            echo "\">
                        <i class=\"fa fa-edit\"></i> ";
            // line 215
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.edit");
            echo "
                    </a>
                ";
        }
        // line 218
        echo "                <button type=\"button\" class=\"btn btn-default dropdown-toggle btn-xs\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-info-sign\"></i> <span class=\"caret\"></span>
                </button>

                <ul class=\"dropdown-menu pull-right\">
                    ";
        // line 223
        if ((($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "status", array()) == "published") &&  !twig_test_empty($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "link", array())))) {
            // line 224
            echo "                        <li>
                            <a href=\"";
            // line 225
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "link", array()), "html", null, true);
            echo "\" target=\"_blank\">
                                <i class=\"fa fa-external-link-square\"></i> ";
            // line 226
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.view-on-site");
            echo "
                            </a>
                        </li>
                    ";
        }
        // line 230
        echo "                    ";
        if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "relation", array())) {
            // line 231
            echo "                        <li>
                            <a href=\"";
            // line 232
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("relatedto", array("contenttypeslug" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contenttype", array()), "slug", array()), "id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()))), "html", null, true);
            echo "\">
                                <i class=\"fa fa-link\"></i> ";
            // line 233
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.view-related");
            echo "
                            </a>
                        </li>
                    ";
        }
        // line 237
        echo "
                    ";
        // line 238
        $context["__internal_b888c0182cfe2184a220a63b5d0533b041e932af7295765d95061570504e5f97"] = $this;
        // line 239
        echo "                    ";
        if ((isset($context["modifiable"]) ? $context["modifiable"] : null)) {
            // line 240
            echo "                        ";
            if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "status", array()) != "published")) {
                // line 241
                echo "                            ";
                if ($this->getAttribute((isset($context["permissions"]) ? $context["permissions"] : null), "publish", array())) {
                    // line 242
                    echo "                                <li>";
                    echo $context["macro"]->getactionform((isset($context["content"]) ? $context["content"] : null), "publish", "fa-circle status-published", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("contenttypes.generic.publish", array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contenttype", array()), "slug", array()))));
                    echo "</li>
                            ";
                }
                // line 244
                echo "                        ";
            } else {
                // line 245
                echo "                            ";
                if ($this->getAttribute((isset($context["permissions"]) ? $context["permissions"] : null), "depublish", array())) {
                    // line 246
                    echo "                                <li>";
                    echo $context["macro"]->getactionform((isset($context["content"]) ? $context["content"] : null), "held", "fa-circle status-held", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.status-change-held"));
                    echo "</li>
                                <li>";
                    // line 247
                    echo $context["macro"]->getactionform((isset($context["content"]) ? $context["content"] : null), "draft", "fa-circle status-draft", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.status-change-draft"));
                    echo "</li>

                            ";
                }
                // line 250
                echo "                        ";
            }
            // line 251
            echo "                        ";
            if ($this->getAttribute((isset($context["permissions"]) ? $context["permissions"] : null), "create", array())) {
                // line 252
                echo "                            <li>
                                <a href=\"";
                // line 253
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editcontent", array("contenttypeslug" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contenttype", array()), "slug", array()), "id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()), "duplicate" => 1)), "html", null, true);
                echo "\">
                                    <i class=\"fa fa-copy\"></i> ";
                // line 254
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("contenttypes.generic.duplicate", array("%contenttype%" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contenttype", array()), "slug", array())));
                echo "
                                </a>
                            </li>
                        ";
            }
            // line 258
            echo "                        ";
            if ($this->getAttribute((isset($context["permissions"]) ? $context["permissions"] : null), "delete", array())) {
                // line 259
                echo "                            <li>
                                ";
                // line 260
                echo $context["macro"]->getactionform((isset($context["content"]) ? $context["content"] : null), "delete", "fa-trash", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("contenttypes.generic.delete", array("%contenttype%" => $this->getAttribute($this->getAttribute(                // line 262
(isset($context["content"]) ? $context["content"] : null), "contenttype", array()), "slug", array()))), (("Are you sure you want to delete '" . $this->getAttribute(                // line 263
(isset($context["content"]) ? $context["content"] : null), "getTitle", array())) . "'?"));
                echo "
                            </li>
                        ";
            }
            // line 266
            echo "                        <li class=\"divider\"></li>
                    ";
        }
        // line 268
        echo "                    <li>
                        <a class=\"nolink\">
                            ";
        // line 270
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.author-colon");
        echo " <strong><i class=\"fa fa-user\"></i>
                                ";
        // line 271
        if ($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "user", array(), "any", false, true), "displayname", array(), "any", true, true)) {
            // line 272
            echo "                                    ";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->excerpt($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "user", array()), "displayname", array()), 15);
            echo "
                                ";
        } else {
            // line 274
            echo "                                    <s>user ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "values", array()), "ownerid", array()), "html", null, true);
            echo "</s>
                                ";
        }
        // line 275
        echo "</strong>
                        </a>
                    </li>
                    <li>
                        <a class=\"nolink\">";
        // line 279
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.status-current-colon");
        echo "<strong>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "status", array()), "html", null, true);
        echo "</strong></a>
                    </li>
                    <li>
                        <a class=\"nolink\">";
        // line 282
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.slug-colon");
        echo "
                            <code title=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "slug", array()), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->excerpt($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "slug", array()), 24);
        echo "</code>
                        </a>
                    </li>
                    <li>
                        <a class=\"nolink\">";
        // line 287
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.created-on-colon");
        echo "
                            <i class=\"fa fa-asterisk\"></i> ";
        // line 288
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datecreated", array()), "Y-m-d H:i"), "html", null, true);
        echo "
                        </a>
                    </li>
                    <li>
                        <a class=\"nolink\">";
        // line 292
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.published-on-colon");
        echo "
                            <i class=\"fa fa-calendar\"></i> ";
        // line 293
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datepublish", array()), "Y-m-d H:i"), "html", null, true);
        echo "
                        </a>
                    </li>
                    <li>
                        <a class=\"nolink\">";
        // line 297
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.last-edited-on-colon");
        echo "
                            <i class=\"fa fa-refresh\"></i> ";
        // line 298
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datechanged", array()), "Y-m-d H:i"), "html", null, true);
        echo "
                        </a>
                    </li>
                    ";
        // line 301
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "taxonomy", array()));
        foreach ($context['_seq'] as $context["taxonomyslug"] => $context["values"]) {
            // line 302
            echo "                        ";
            if ((twig_length_filter($this->env, $context["values"]) > 1)) {
                // line 303
                echo "                            <li>
                                <a class=\"nolink\">";
                // line 304
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "taxonomy"), "method"), $context["taxonomyslug"], array(), "array"), "name", array()), "html", null, true);
                echo ":
                                    <i class=\"fa fa-tag\"></i> ";
                // line 305
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->excerpt(twig_join_filter($context["values"], ", "), 24);
                echo "
                                </a>
                            </li>
                        ";
            } else {
                // line 309
                echo "                            <li>
                                <a class=\"nolink\">";
                // line 310
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "get", array(0 => "taxonomy"), "method"), $context["taxonomyslug"], array(), "array"), "singular_name", array()), "html", null, true);
                echo ":
                                    <i class=\"fa fa-tag\"></i> ";
                // line 311
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->excerpt(twig_first($this->env, $context["values"]), 24);
                echo "
                                </a>
                            </li>
                        ";
            }
            // line 315
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['taxonomyslug'], $context['values'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 316
        echo "                </ul>
            </div>
        </td>
    ";
    }

    // line 5
    public function gettbody_beg($__local__ = null, $__modifiable__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "local" => $__local__,
            "modifiable" => $__modifiable__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 6
            echo "    ";
            $context["class"] = array(0 => ((            // line 7
(isset($context["modifiable"]) ? $context["modifiable"] : null)) ? ("sortable") : ("")), 1 => ((($this->getAttribute(            // line 8
(isset($context["local"]) ? $context["local"] : null), "row_heading", array()) && $this->getAttribute((isset($context["local"]) ? $context["local"] : null), "row_header", array()))) ? ("striping_even") : ("striping_odd")));
            // line 10
            echo "
<tbody";
            // line 11
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->hclass((isset($context["class"]) ? $context["class"] : null));
            echo " data-bolt-widget=\"buicListingPart\">
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

    // line 14
    public function gettbody_end($__toolbar__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "toolbar" => $__toolbar__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 15
            if ((isset($context["toolbar"]) ? $context["toolbar"] : null)) {
                // line 16
                echo "    <tr class=\"selectiontoolbar hidden\">
        <td colspan=\"";
                // line 17
                $this->displayBlock("listing_columns", $context, $blocks);
                echo "\">
            <i class=\"fa fa-fw fa-rotate-270 fa-mail-forward\"></i><div class=\"count\">0</div>
            ";
                // line 19
                echo twig_escape_filter($this->env, (isset($context["toolbar"]) ? $context["toolbar"] : null), "html", null, true);
                echo "
        </td>
    </tr>
";
            }
            // line 23
            echo "</tbody>
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
        return "@bolt/_base/_listing.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  844 => 23,  837 => 19,  832 => 17,  829 => 16,  827 => 15,  815 => 14,  798 => 11,  795 => 10,  793 => 8,  792 => 7,  790 => 6,  777 => 5,  770 => 316,  764 => 315,  757 => 311,  753 => 310,  750 => 309,  743 => 305,  739 => 304,  736 => 303,  733 => 302,  729 => 301,  723 => 298,  719 => 297,  712 => 293,  708 => 292,  701 => 288,  697 => 287,  688 => 283,  684 => 282,  676 => 279,  670 => 275,  664 => 274,  658 => 272,  656 => 271,  652 => 270,  648 => 268,  644 => 266,  638 => 263,  637 => 262,  636 => 260,  633 => 259,  630 => 258,  623 => 254,  619 => 253,  616 => 252,  613 => 251,  610 => 250,  604 => 247,  599 => 246,  596 => 245,  593 => 244,  587 => 242,  584 => 241,  581 => 240,  578 => 239,  576 => 238,  573 => 237,  566 => 233,  562 => 232,  559 => 231,  556 => 230,  549 => 226,  545 => 225,  542 => 224,  540 => 223,  533 => 218,  527 => 215,  522 => 214,  520 => 213,  516 => 211,  514 => 210,  511 => 209,  506 => 204,  500 => 201,  496 => 200,  493 => 199,  490 => 198,  482 => 196,  476 => 194,  474 => 193,  471 => 192,  465 => 191,  459 => 189,  457 => 188,  453 => 186,  451 => 185,  448 => 184,  443 => 180,  431 => 177,  424 => 176,  421 => 175,  418 => 174,  415 => 173,  412 => 172,  410 => 171,  408 => 170,  406 => 169,  403 => 168,  396 => 163,  393 => 162,  387 => 160,  383 => 158,  381 => 157,  374 => 156,  372 => 155,  367 => 153,  364 => 152,  362 => 151,  355 => 150,  353 => 149,  350 => 148,  343 => 144,  340 => 142,  336 => 140,  332 => 138,  329 => 137,  327 => 136,  324 => 135,  317 => 124,  311 => 121,  307 => 118,  301 => 115,  295 => 112,  292 => 110,  288 => 108,  280 => 103,  276 => 102,  272 => 101,  268 => 100,  263 => 98,  259 => 97,  251 => 91,  248 => 90,  245 => 88,  242 => 87,  239 => 86,  233 => 54,  225 => 323,  223 => 322,  219 => 320,  216 => 209,  213 => 207,  210 => 206,  207 => 184,  205 => 183,  202 => 182,  199 => 148,  196 => 146,  193 => 135,  180 => 132,  177 => 128,  173 => 126,  171 => 86,  167 => 84,  165 => 83,  162 => 82,  155 => 81,  152 => 80,  146 => 79,  143 => 78,  141 => 77,  139 => 76,  136 => 72,  130 => 70,  128 => 69,  124 => 67,  118 => 65,  112 => 63,  110 => 62,  105 => 61,  102 => 60,  99 => 59,  96 => 58,  93 => 57,  90 => 56,  87 => 55,  84 => 54,  82 => 53,  76 => 50,  73 => 49,  67 => 47,  64 => 46,  62 => 45,  59 => 41,  57 => 39,  56 => 38,  55 => 37,  52 => 36,  50 => 34,  49 => 33,  48 => 31,  47 => 30,  46 => 29,  45 => 28,  42 => 27,  40 => 26,  37 => 25,  34 => 13,  31 => 4,  29 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@bolt/_base/_listing.twig", "");
    }
}
