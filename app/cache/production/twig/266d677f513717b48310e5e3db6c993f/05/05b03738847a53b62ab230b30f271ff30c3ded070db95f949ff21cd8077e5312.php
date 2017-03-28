<?php

/* @bolt/files/files.twig */
class __TwigTemplate_336b326443153c360ac36d2b0fb8ee176114058f08de980f65658771ce0bd947 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 6
        $this->parent = $this->loadTemplate("@bolt/_base/_page-nav.twig", "@bolt/files/files.twig", 6);
        $this->blocks = array(
            'page_nav' => array($this, 'block_page_nav'),
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'page_main' => array($this, 'block_page_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@bolt/_base/_page-nav.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["macro"] = $this->loadTemplate("@bolt/_macro/_macro.twig", "@bolt/files/files.twig", 3);
        // line 4
        $context["__internal_f381502e350e4e561f0134eddf4c77cd2e5fc1cbb3b48b2d456958c28406c0cd"] = $this->loadTemplate("@bolt/_macro/_files_path.twig", "@bolt/files/files.twig", 4);
        // line 6
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_page_nav($context, array $blocks = array())
    {
        echo "Settings/FileManagement";
    }

    // line 10
    public function block_page_title($context, array $blocks = array())
    {
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.file-management.title");
    }

    // line 11
    public function block_page_subtitle($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "namespace", array()) . "/") . twig_last($this->env, twig_get_array_keys_filter($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "pathsegments", array())))), "html", null, true);
    }

    // line 13
    public function block_page_main($context, array $blocks = array())
    {
        // line 14
        echo "
    ";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("files.msg.create_folder", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.file-management.message.create-folder")), "html", null, true);
        echo "
    ";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("files.msg.create_file", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.file-management.message.create-file")), "html", null, true);
        echo "
    ";
        // line 17
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "directories", array())) > 0)) {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("files.msg.rename_folder", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.file-management.message.create-folder")), "html", null, true);
            echo "
        ";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("files.msg.delete_folder", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Do you really want to delete %FOLDERNAME%?")), "html", null, true);
            echo "
    ";
        }
        // line 21
        echo "    ";
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "files", array())) > 0)) {
            // line 22
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("files.msg.rename_file", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.file-management.message.create-file")), "html", null, true);
            echo "
        ";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("files.msg.delete_file", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Are you sure you want to delete %FILENAME%?")), "html", null, true);
            echo "
    ";
        }
        // line 25
        echo "
    <div class=\"row\">
        <div class=\"col-xs-12\">

            ";
        // line 29
        echo $context["__internal_f381502e350e4e561f0134eddf4c77cd2e5fc1cbb3b48b2d456958c28406c0cd"]->getfiles_path($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "pathsegments", array()), $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "namespace", array()), array("path" => "", "namespace" => $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "namespace", array())));
        echo "

            ";
        // line 31
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->widgets("files_below_header", "backend");
        echo "

            ";
        // line 33
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "directories", array())) > 0)) {
            // line 34
            echo "                ";
            echo twig_include($this->env, $context, "@bolt/files/_folders.twig");
            echo "
            ";
        }
        // line 36
        echo "
            <p>
                <a href=\"#\" class=\"btn btn-default\"
                   data-action=\"Bolt.files.createFile('";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "namespace", array()), "html", null, true);
        echo "',
                                                    '";
        // line 40
        echo twig_escape_filter($this->env, twig_last($this->env, twig_get_array_keys_filter($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "pathsegments", array()))), "html", null, true);
        echo "',
                                                    this);\">
                    <i class=\"fa fa-fw fa-plus\"></i>
                    ";
        // line 43
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.file-management.label.create-file");
        echo "
                </a>
                <a href=\"#\" class=\"btn btn-default\"
                   data-action=\"Bolt.files.createFolder('";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "namespace", array()), "html", null, true);
        echo "',
                                                    '";
        // line 47
        echo twig_escape_filter($this->env, twig_last($this->env, twig_get_array_keys_filter($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "pathsegments", array()))), "html", null, true);
        echo "',
                                                    this);\">
                    <i class=\"fa fa-fw fa-plus\"></i>
                    ";
        // line 50
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.file-management.label.create-folder");
        echo "
                </a>
            </p>

            ";
        // line 54
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "files", array())) > 0)) {
            // line 55
            echo "                ";
            echo twig_include($this->env, $context, "@bolt/files/_files.twig");
            echo "
            ";
        }
        // line 57
        echo "
            ";
        // line 59
        echo "            ";
        if (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "form", array()) != false)) {
            // line 60
            echo "                ";
            echo twig_include($this->env, $context, "@bolt/files/_upload.twig");
            echo "
            ";
        } else {
            // line 62
            echo "                <p><i class=\"fa fa-fw fa-exclamation-sign\"></i> ";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.file-management.message.access-denied");
            echo "</p>
            ";
        }
        // line 64
        echo "
            ";
        // line 65
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->widgets("files_bottom", "backend");
        echo "

        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "@bolt/files/files.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 65,  181 => 64,  175 => 62,  169 => 60,  166 => 59,  163 => 57,  157 => 55,  155 => 54,  148 => 50,  142 => 47,  138 => 46,  132 => 43,  126 => 40,  122 => 39,  117 => 36,  111 => 34,  109 => 33,  104 => 31,  99 => 29,  93 => 25,  88 => 23,  83 => 22,  80 => 21,  75 => 19,  70 => 18,  68 => 17,  64 => 16,  60 => 15,  57 => 14,  54 => 13,  48 => 11,  42 => 10,  36 => 8,  32 => 6,  30 => 4,  28 => 3,  11 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@bolt/files/files.twig", "");
    }
}
