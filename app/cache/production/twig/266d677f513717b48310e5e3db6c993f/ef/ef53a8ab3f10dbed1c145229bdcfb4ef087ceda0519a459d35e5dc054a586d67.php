<?php

/* @bolt/files/_files.twig */
class __TwigTemplate_261af5bd349977948ebed6da7b1d4117dae97a2b3446449d1b2321b1be52e327 extends Twig_Template
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
        $context["__internal_b3a4fe9d8e4f6192a5aa0639204c21dbad9b4a47b87c488447c794c880f79e7f"] = $this->loadTemplate("@bolt/_buic/_moment.twig", "@bolt/files/_files.twig", 1);
        // line 2
        echo "
<table class=\"dashboardlisting\">
    <thead>
        <tr>
            <th>";
        // line 6
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.ckeditor-browse-server.files");
        echo "</th>
            <th class=\"hidden-xs hidden-sm\">";
        // line 7
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.ckeditor-browse-server.size");
        echo " / ";
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.ckeditor-browse-server.modified");
        echo "</th>
            <th colspan=\"2\"></th>
        </tr>
    </thead>

    <tbody>
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "files", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
            // line 14
            echo "            <tr>
                ";
            // line 16
            echo "                <td>
                    ";
            // line 17
            if ($this->getAttribute($context["file"], "image", array())) {
                // line 18
                echo "
                        <i class=\"fa fa-fw fa-file-image-o\"></i>

                        ";
                // line 21
                if ($this->getAttribute($context["file"], "public", array())) {
                    // line 22
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->thumbnail($this->getAttribute($context["file"], "path", array()), 1000, 1000, "r"), "html", null, true);
                    echo "\"
                               class=\"magnific\"
                               title=\"Image: ";
                    // line 24
                    echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "filename", array()), "html", null, true);
                    echo "\">
                                <b>";
                    // line 25
                    echo $this->env->getExtension('Bolt\Twig\TwigExtension')->shy($this->env->getExtension('Bolt\Twig\TwigExtension')->excerpt($this->getAttribute($context["file"], "filename", array()), 80));
                    echo "</b>
                            </a>
                        ";
                } else {
                    // line 28
                    echo "                            <b>";
                    echo $this->env->getExtension('Bolt\Twig\TwigExtension')->shy($this->env->getExtension('Bolt\Twig\TwigExtension')->excerpt($this->getAttribute($context["file"], "filename", array()), 80));
                    echo " </b>
                            <i class=\"fa fa-lock\"></i>
                        ";
                }
                // line 31
                echo "
                    ";
            } elseif (twig_in_filter($this->getAttribute(            // line 32
$context["file"], "extension", array()), array(0 => "twig", 1 => "txt", 2 => "html", 3 => "md", 4 => "markdown", 5 => "json", 6 => "htm", 7 => "scss", 8 => "css", 9 => "less", 10 => "js", 11 => "yml"))) {
                // line 33
                echo "
                        <i class=\"fa fa-fw fa-file-code-o\"></i>

                        ";
                // line 36
                if ($this->getAttribute($context["file"], "public", array())) {
                    // line 37
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fileedit", array("namespace" => $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "namespace", array()), "file" => $this->getAttribute($context["file"], "path", array()))), "html", null, true);
                    echo "\">
                                <b>";
                    // line 38
                    echo $this->env->getExtension('Bolt\Twig\TwigExtension')->shy($this->env->getExtension('Bolt\Twig\TwigExtension')->excerpt($this->getAttribute($context["file"], "filename", array()), 80));
                    echo "</b>
                            </a>
                        ";
                } else {
                    // line 41
                    echo "                            <b>";
                    echo $this->env->getExtension('Bolt\Twig\TwigExtension')->shy($this->env->getExtension('Bolt\Twig\TwigExtension')->excerpt($this->getAttribute($context["file"], "filename", array()), 80));
                    echo "</b>
                        ";
                }
                // line 43
                echo "
                        ";
                // line 44
                if ($this->getAttribute($context["file"], "private", array())) {
                    // line 45
                    echo "                            <i class=\"fa fa-lock\"></i>
                        ";
                }
                // line 47
                echo "
                    ";
            } else {
                // line 49
                echo "
                        <i class=\"fa fa-fw fa-link\"></i>

                        ";
                // line 52
                if ($this->getAttribute($context["file"], "public", array())) {
                    // line 53
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "url", array()), "html", null, true);
                    echo "\" target=\"_blank\">
                                <b>";
                    // line 54
                    echo $this->env->getExtension('Bolt\Twig\TwigExtension')->shy($this->env->getExtension('Bolt\Twig\TwigExtension')->excerpt($this->getAttribute($context["file"], "filename", array()), 80));
                    echo "</b>
                            </a>
                        ";
                } else {
                    // line 57
                    echo "                            <b>";
                    echo $this->env->getExtension('Bolt\Twig\TwigExtension')->shy($this->env->getExtension('Bolt\Twig\TwigExtension')->excerpt($this->getAttribute($context["file"], "filename", array()), 80));
                    echo " </b>
                            <i class=\"fa fa-lock\"></i>
                        ";
                }
                // line 60
                echo "                    ";
            }
            // line 61
            echo "                </td>
                ";
            // line 63
            echo "                <td style=\"min-width: 120px;\" class=\"hidden-xs hidden-sm\">
                    <span class=\"buic-moment\" title=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "size", array()), "html", null, true);
            echo " bytes (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "sizeformatted", array(0 => true, 1 => false), "method"), "html", null, true);
            echo ")\">
                        <b>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "sizeformatted", array(0 => true, 1 => true), "method"), "html", null, true);
            echo "</b></span>,
                    ";
            // line 66
            echo $context["__internal_b3a4fe9d8e4f6192a5aa0639204c21dbad9b4a47b87c488447c794c880f79e7f"]->getbuic_moment($this->getAttribute($context["file"], "timestamp", array()));
            echo "
                    ";
            // line 67
            if ($this->getAttribute($context["file"], "image", array())) {
                // line 68
                echo "                        <div class=\"image-dimensions\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "width", array()), "html", null, true);
                echo "<span class=\"times\">×</span>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "height", array()), "html", null, true);
                echo " px</div>
                    ";
            }
            // line 70
            echo "                </td>
                ";
            // line 72
            echo "                <td class=\"listthumb\">
                    ";
            // line 73
            if ($this->getAttribute($context["file"], "image", array())) {
                // line 74
                echo "                        ";
                echo twig_replace_filter($this->env->getExtension('Bolt\Twig\TwigExtension')->showImage($this->getAttribute($context["file"], "path", array()), 54, 40, "c"), array("alt=\"\"" => (("alt=\"" . twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.thumbnail"), "html_attr")) . "\"")));
                echo "
                    ";
            }
            // line 76
            echo "                </td>
                ";
            // line 78
            echo "                <td class=\"actions\" style=\"min-width: 16px;\">

                    <div class=\"btn-group\">

                        ";
            // line 82
            if (( !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/backend/stack/disable", 1 => false), "method") &&  !$this->env->getExtension('Bolt\Twig\TwigExtension')->stacked($this->getAttribute($context["file"], "path", array())))) {
                // line 83
                echo "                            <a href=\"#\" class=\"btn btn-default btn-sm\" data-bolt-addtostack=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "path", array()), "html", null, true);
                echo "\">
                                <i class=\"fa fa-paperclip\"></i>
                                <span class=\"visible-sm-inline visible-xs-inline\">";
                // line 85
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.stack");
                echo "</span>
                                <span class=\"hidden-sm hidden-xs\">";
                // line 86
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.stack-add");
                echo "</span>
                            </a>
                        ";
            }
            // line 89
            echo "
                        ";
            // line 90
            if (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "form", array()) != false)) {
                // line 91
                echo "                            <a class=\"btn dropdown-toggle btn-default btn-sm hidden-xs\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-info-circle\"></i>
                                ";
                // line 93
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.options");
                echo "
                                <span class=\"caret\"></span>
                            </a>

                            <ul class=\"dropdown-menu pull-right hidden-xs\">
                                <li>
                                    <a href=\"#\"
                                       data-action=\"Bolt.files.renameFile('";
                // line 100
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "namespace", array()), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "pathsegments", array()), "/"), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "filename", array()), "html", null, true);
                echo "', this);\">

                                        <i class=\"fa fa-keyboard-o\"></i>
                                        ";
                // line 103
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.rename-foldername", array("%foldername%" => $this->getAttribute($context["file"], "filename", array())));
                echo "
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\" data-action=\"Bolt.files.deleteFile('";
                // line 107
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "namespace", array()), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "path", array()), "html", null, true);
                echo "', this);\">
                                        <i class=\"fa fa-ban\"></i>
                                        ";
                // line 109
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.delete-file-name", array("%filename%" => $this->getAttribute($context["file"], "filename", array())));
                echo "
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\" data-action=\"Bolt.files.duplicateFile('";
                // line 113
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "namespace", array()), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "path", array()), "html", null, true);
                echo "')\">
                                        <i class=\"fa fa-files-o\"></i>
                                        ";
                // line 115
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.duplicate-file-name", array("%filename%" => $this->getAttribute($context["file"], "filename", array())));
                echo "
                                    </a>
                                </li>
                                <li class=\"divider\"></li>
                                <li>
                                    <a class=\"nolink\">
                                        ";
                // line 121
                echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.permissions");
                echo ":
                                        <strong><code>";
                // line 122
                echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "visibility", array()), "html", null, true);
                echo "</code></strong>
                                    </a>
                                </li>
                            </ul>
                        ";
            }
            // line 127
            echo "                    </div>

                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        echo "    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "@bolt/files/_files.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 132,  303 => 127,  295 => 122,  291 => 121,  282 => 115,  275 => 113,  268 => 109,  261 => 107,  254 => 103,  244 => 100,  234 => 93,  230 => 91,  228 => 90,  225 => 89,  219 => 86,  215 => 85,  209 => 83,  207 => 82,  201 => 78,  198 => 76,  192 => 74,  190 => 73,  187 => 72,  184 => 70,  176 => 68,  174 => 67,  170 => 66,  166 => 65,  160 => 64,  157 => 63,  154 => 61,  151 => 60,  144 => 57,  138 => 54,  133 => 53,  131 => 52,  126 => 49,  122 => 47,  118 => 45,  116 => 44,  113 => 43,  107 => 41,  101 => 38,  96 => 37,  94 => 36,  89 => 33,  87 => 32,  84 => 31,  77 => 28,  71 => 25,  67 => 24,  61 => 22,  59 => 21,  54 => 18,  52 => 17,  49 => 16,  46 => 14,  42 => 13,  31 => 7,  27 => 6,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@bolt/files/_files.twig", "");
    }
}
