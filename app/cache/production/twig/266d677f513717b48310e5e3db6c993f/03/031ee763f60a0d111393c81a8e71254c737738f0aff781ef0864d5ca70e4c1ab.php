<?php

/* @bolt/exception/database/_failed-connect.twig */
class __TwigTemplate_475a96004fc15726870ba9e85eeef65eb03c88bc387ccf8d328beaf341025756 extends Twig_Template
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
        echo "<h1>
    Bolt could not connect to the configured database.
</h1>

<p>
    Things to check:
</p>
<ul>
    <li>Ensure the ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["platform"]) ? $context["platform"] : null), "html", null, true);
        echo " database is running</li>
    <li>Check the <code>database:</code> parameters are configured correctly in <code>app/config/config.yml</code></li>
    <ul>
        <li>Database name is correct</li>
        <li>User name has access to the named database</li>
        <li>Password is correct</li>
    </ul>
</ul>
";
    }

    public function getTemplateName()
    {
        return "@bolt/exception/database/_failed-connect.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 9,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@bolt/exception/database/_failed-connect.twig", "");
    }
}
