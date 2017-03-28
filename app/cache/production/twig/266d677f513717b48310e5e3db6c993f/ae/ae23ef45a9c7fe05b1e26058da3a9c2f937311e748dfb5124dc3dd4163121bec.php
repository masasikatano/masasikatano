<?php

/* @bolt/extend/_readme.twig */
class __TwigTemplate_4f60e89f9d119b7b4a0ce09bd26adb45c0488cde127b1f58056b6f761612abc8 extends Twig_Template
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
        echo "<div class=\"modal fade\" id=\"readmeModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
                <h4 class=\"modal-title\" id=\"myModalLabel\">Read Me</h4>
            </div>
            <div class=\"modal-body\">
                …
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@bolt/extend/_readme.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@bolt/extend/_readme.twig", "");
    }
}
