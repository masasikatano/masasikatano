<?php

/* @bolt/_buic/_info.twig */
class __TwigTemplate_bfc22bb829d1fcdfb91f2c3964b8c0f58865cf66758beee68c556fb0187c85e4 extends Twig_Template
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
    }

    // line 7
    public function getbuic_info($__label__ = null, $__id__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "id" => $__id__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 8
            echo "    ";
            $context["attributes"] = array("class" => "info-pop fa fa-info-circle", "data-content" => $this->getAttribute($this->getAttribute(            // line 10
(isset($context["app"]) ? $context["app"] : null), "translator", array()), "trans", array(0 => (isset($context["id"]) ? $context["id"] : null), 1 => array(), 2 => "infos"), "method"), "data-html" => true, "data-title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(            // line 12
(isset($context["label"]) ? $context["label"] : null)));
            // line 14
            echo "    <i";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->hattr((isset($context["attributes"]) ? $context["attributes"] : null));
            echo "><span class=\"sr-only\">";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.info");
            echo "</span></i>
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
        return "@bolt/_buic/_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 14,  37 => 12,  36 => 10,  34 => 8,  21 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@bolt/_buic/_info.twig", "");
    }
}
