<?php

/* @bolt/files/_upload.twig */
class __TwigTemplate_4f1e2803eb52f7eb97aa0012d4f21ad934d61aae0a0ab4f883e8b66775d8567f extends Twig_Template
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
        echo "<br>
<form method=\"post\" id=\"filescreenuploader\" ";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "form", array()), 'enctype');
        echo ">
    <fieldset>
        <p><strong>";
        // line 4
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.upload-file-to-directory");
        echo "</strong> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "typepopover", array(), "method"), "html", null, true);
        echo "</p>
        ";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "form", array()), 'widget');
        echo "
        <div>
            <button type=\"submit\" class=\"btn btn-primary\" disabled>
                <i class=\"fa fa-fw fa-upload\"></i>
                <span>";
        // line 9
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.upload-file");
        echo "</span>
            </button>
        </div>
    </fieldset>
</form>

<script>
    \$(function() {
        \$('input[type=file]').addClass('btn-secondary').bootstrapFileInput();

        \$('input:file').change(
            function(){
                if (\$(this).val()) {
                    \$('button:submit').removeAttr('disabled');
                }
            }
        );

    });

</script>
";
    }

    public function getTemplateName()
    {
        return "@bolt/files/_upload.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  33 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@bolt/files/_upload.twig", "");
    }
}
