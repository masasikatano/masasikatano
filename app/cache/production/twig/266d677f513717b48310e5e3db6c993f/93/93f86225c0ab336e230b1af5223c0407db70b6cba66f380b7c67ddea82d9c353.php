<?php

/* @bolt/editcontent/data/_uploads.twig */
class __TwigTemplate_9e78bb280553d704e5ea4cd3b2ce9de2894c54baf88d07c463304d4af5dc42ab extends Twig_Template
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
        // line 2
        echo "
";
        // line 3
        $context["template_upload_error"] = ('' === $tmp = "    <p>There was an error uploading the file. Make sure the file is not corrupt,
    and that the upload-folder is writable.</p>
    <p>Error message:<br><i>%ERROR%<i></p>
") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("field.uploads.template.error", $this->env->getExtension('Bolt\Twig\TwigExtension')->pregReplace(twig_trim_filter((isset($context["template_upload_error"]) ? $context["template_upload_error"] : null)), "/>\\s+</", "><")), "html", null, true);
        echo "

";
        // line 12
        echo "
";
        // line 13
        $context["template_upload_too_large"] = ('' === $tmp = "    <p>File is too large:</p>
    <table>
        <tr><th>Name: </th><td>%FILENAME%</td></tr>
        <tr><th>Size: </th><td>%FILESIZE%</td></tr>
        <tr><th>Maximum size: </th><td>%ALLOWED%</td></tr>
    </table>
") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 21
        echo "
";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("field.uploads.template.large-file", $this->env->getExtension('Bolt\Twig\TwigExtension')->pregReplace(twig_trim_filter((isset($context["template_upload_too_large"]) ? $context["template_upload_too_large"] : null)), "/>\\s+</", "><")), "html", null, true);
        echo "

";
        // line 25
        echo "
";
        // line 26
        $context["template_upload_wrong_type"] = ('' === $tmp = "    <p>File type not allowed:</p>
    <table>
        <tr><th>Name:</th><td>%FILENAME%</td></tr>
        <tr><th>Type:</th><td>%FILETYPE%</td></tr>
        <tr><th>Allowed types:</th><td>%ALLOWED%</td></tr>
    </table>
") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 34
        echo "
";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("field.uploads.template.wrong-type", $this->env->getExtension('Bolt\Twig\TwigExtension')->pregReplace(twig_trim_filter((isset($context["template_upload_wrong_type"]) ? $context["template_upload_wrong_type"] : null)), "/>\\s+</", "><")), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@bolt/editcontent/data/_uploads.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 35,  65 => 34,  57 => 26,  54 => 25,  49 => 22,  46 => 21,  38 => 13,  35 => 12,  30 => 9,  27 => 8,  22 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@bolt/editcontent/data/_uploads.twig", "");
    }
}
