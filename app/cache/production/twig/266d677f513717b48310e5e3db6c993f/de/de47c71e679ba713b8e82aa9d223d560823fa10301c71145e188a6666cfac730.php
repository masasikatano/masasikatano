<?php

/* @bolt/extend/_feedback.twig */
class __TwigTemplate_4f28a145aaef908a084e617b1bc0dbd4bd67b9363de4425a138a6c51801dddda extends Twig_Template
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
        echo "<div class=\"update-container hide-block\">
    <h3 class=\"update-output-title\">";
        // line 2
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.headline.updates");
        echo "</h3>
    <div class=\"update-output-console hide-block\">
        ";
        // line 4
        if ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "writeable", array())) {
            // line 5
            echo "            <pre class=\"update-output-element console\">";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.message.checking-for-updates");
            echo "</pre>
        ";
        } else {
            // line 7
            echo "            <pre class=\"update-output-element\">";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.message.no-update-check-in-readmode");
            echo "</pre>
        ";
        }
        // line 9
        echo "    </div>

    <div class=\"update-output-notice\"></div>

    <div class=\"update-list hide-block\">
        <table class=\"dashboardlisting table\">
            <thead>
            <tr>
                <th>";
        // line 17
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.listheader.extension");
        echo "</th>
                <th>";
        // line 18
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.listheader.version");
        echo "</th>
                <th>";
        // line 19
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.listheader.actions");
        echo "</th>
            </tr>
            </thead>
            <tbody class=\"update-list-items\">

            </tbody>
        </table>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@bolt/extend/_feedback.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 19,  55 => 18,  51 => 17,  41 => 9,  35 => 7,  29 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@bolt/extend/_feedback.twig", "");
    }
}
