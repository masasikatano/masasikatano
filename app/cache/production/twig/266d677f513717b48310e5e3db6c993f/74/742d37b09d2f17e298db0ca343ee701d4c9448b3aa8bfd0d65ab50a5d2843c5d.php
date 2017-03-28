<?php

/* @bolt/files/_folders.twig */
class __TwigTemplate_4eb2fd2ad51a8e1f570ee2f802a8790bc8c2a9cdf5c0f4aabcdf8261e95ef436 extends Twig_Template
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
        $context["__internal_dc1d0a2966a3c54925717dff34b414df0b6dbd503d55ea45eeb83ab30a58640c"] = $this->loadTemplate("@bolt/_buic/_moment.twig", "@bolt/files/_folders.twig", 1);
        // line 2
        echo "
<table class=\"dashboardlisting\">
    <thead>
        <tr>
            <th>";
        // line 6
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.folders");
        echo "</th>
            <th colspan=\"2\">";
        // line 7
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.modified");
        echo "</th>
        </tr>
    </thead>

    <tbody>
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "directories", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["directory"]) {
            // line 13
            echo "            <tr>
                <td>
                    <i class=\"fa fa-fw fa-folder-open-o\"></i>
                    <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("files", array("path" => $this->getAttribute($context["directory"], "path", array()), "namespace" => $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "namespace", array()))), "html", null, true);
            echo "\">
                        <b>";
            // line 17
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->shy($this->env->getExtension('Bolt\Twig\TwigExtension')->excerpt($this->getAttribute($context["directory"], "filename", array()), 60));
            echo "/</b>
                    </a>
                </td>
                <td>
                    ";
            // line 21
            echo $context["__internal_dc1d0a2966a3c54925717dff34b414df0b6dbd503d55ea45eeb83ab30a58640c"]->getbuic_moment($this->getAttribute($context["directory"], "timestamp", array()));
            echo "
                </td>
                <td class=\"actions\">
                ";
            // line 24
            if (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "form", array()) != false)) {
                // line 25
                echo "                    <div class=\"btn-group\">
                    ";
                // line 26
                if ($this->getAttribute($context["directory"], "public", array())) {
                    // line 27
                    echo "
                        <a class=\"btn dropdown-toggle btn-default btn-sm\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-info-circle\"></i>
                            ";
                    // line 30
                    echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.options");
                    echo "
                            <span class=\"caret\"></span>
                        </a>

                        <ul class=\"dropdown-menu pull-right\">
                            <li>
                                <a href=\"#\"
                                   data-action=\"bolt.files.renameFolder('";
                    // line 37
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "namespace", array()), "html", null, true);
                    echo "',
                                                                    '";
                    // line 38
                    echo twig_escape_filter($this->env, twig_last($this->env, twig_get_array_keys_filter($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "pathsegments", array()))), "html", null, true);
                    echo "',
                                                                    '";
                    // line 39
                    echo twig_escape_filter($this->env, $this->getAttribute($context["directory"], "path", array()), "html", null, true);
                    echo "',
                                                                    this);\">

                                    <i class=\"fa fa-keyboard-o\"></i>
                                    ";
                    // line 43
                    echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.rename-foldername", array("%foldername%" => $this->getAttribute($context["directory"], "filename", array())));
                    echo "
                                </a>
                                <a href=\"#\"
                                   class=\"confirm\"
                                   data-action=\"bolt.files.deleteFolder('";
                    // line 47
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "namespace", array()), "html", null, true);
                    echo "',
                                                                    '";
                    // line 48
                    echo twig_escape_filter($this->env, twig_last($this->env, twig_get_array_keys_filter($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "pathsegments", array()))), "html", null, true);
                    echo "',
                                                                    '";
                    // line 49
                    echo twig_escape_filter($this->env, $this->getAttribute($context["directory"], "path", array()), "html", null, true);
                    echo "',
                                                                    this);\">

                                    <i class=\"fa fa-ban\"></i>
                                    ";
                    // line 53
                    echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.delete-directory-name", array("%foldername%" => $this->getAttribute($context["directory"], "filename", array())));
                    echo "
                                </a>
                            </li>
                        </ul>
                    ";
                } else {
                    // line 58
                    echo "                        <a class=\"btn btn-default btn-sm\">
                            <i class=\"fa fa-exclamation-circle\"></i>
                            ";
                    // line 60
                    echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.file-management.message.folder-access-denied");
                    echo "
                        </a>
                    ";
                }
                // line 63
                echo "                    </div>
                ";
            }
            // line 65
            echo "                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['directory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "@bolt/files/_folders.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 68,  146 => 65,  142 => 63,  136 => 60,  132 => 58,  124 => 53,  117 => 49,  113 => 48,  109 => 47,  102 => 43,  95 => 39,  91 => 38,  87 => 37,  77 => 30,  72 => 27,  70 => 26,  67 => 25,  65 => 24,  59 => 21,  52 => 17,  48 => 16,  43 => 13,  39 => 12,  31 => 7,  27 => 6,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@bolt/files/_folders.twig", "");
    }
}
