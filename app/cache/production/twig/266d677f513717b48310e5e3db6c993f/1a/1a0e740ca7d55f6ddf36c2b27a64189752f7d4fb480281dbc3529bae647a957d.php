<?php

/* @bolt/extend/_action-modal.twig */
class __TwigTemplate_22bc563338ad28e1928c312e2417a762a8882e3832647168ae36665a0cc8b8e9 extends Twig_Template
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
        echo "<div class=\"modal-header\">
    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">
        <span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span>
    </button>
    <h4 class=\"modal-title\">";
        // line 5
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.headline.installing-package");
        echo "</h4>
</div>

<div class=\"modal-body\">
    <div class=\"row\">
        <div class=\"col-md-12\">

            <div class=\"loader\">
                <i class=\"fa fa-spin fa-spinner\"></i> <span class=\"message\">Checking available versions…</span>
            </div>

            <div class=\"install-response-container hide-block\">
                <h3>";
        // line 17
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.headline.installing-package");
        echo "</h3>
                <pre class=\"install-response console\">";
        // line 18
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.message.installing-selected-package");
        echo "</pre>
            </div>

            <div class=\"dependency-response-container hide-block\">
                <h3>";
        // line 22
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Dependencies");
        echo "</h3>
                <pre class=\"dependency-response console\">";
        // line 23
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("Finding packages that require this one…");
        echo "</pre>
            </div>

            <div class=\"install-latest-container hide-block\">

                <div class=\"latest-version-container\">
                    <h3>";
        // line 29
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.headline.latest-version");
        echo "</h3>
                    <p>";
        // line 30
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.message.latest-version");
        echo "</p>
                    <table class=\"dashboardlisting table\">
                        <thead>
                            <tr>
                                <th>";
        // line 34
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.listheader.extension");
        echo "</th>
                                <th>";
        // line 35
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.listheader.version");
        echo "</th>
                                <th>";
        // line 36
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.listheader.status");
        echo "</th>
                                <th>";
        // line 37
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.listheader.actions");
        echo "</th>
                            </tr>
                        </thead>
                        <tbody class=\"installed-version-item\">
                            <tr>
                                <td colspan=\"4\"><strong>";
        // line 42
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.message.no-stable-versions-available");
        echo "</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <a class=\"btn btn-secondary\" data-request=\"show-all\">
                    <i class=\"fa fa-list fa-fw\"></i> ";
        // line 49
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.button.show-all-versions");
        echo "
                </a>

            </div>


            <div class=\"install-version-container hide-block\">

                <div class=\"stable-version-container\">
                    <h3>";
        // line 58
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.headline.stable-versions");
        echo "</h3>
                    <p>";
        // line 59
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.message.marked-as-stable");
        echo "</p>
                    <table class=\"dashboardlisting table\">
                        <thead>
                            <tr>
                                <th>";
        // line 63
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.listheader.extension");
        echo "</th>
                                <th>";
        // line 64
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.listheader.version");
        echo "</th>
                                <th>";
        // line 65
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.listheader.status");
        echo "</th>
                                <th>";
        // line 66
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.listheader.actions");
        echo "</th>
                            </tr>
                        </thead>
                        <tbody class=\"installed-version-item\">
                            <tr>
                                <td colspan=\"4\"><strong>";
        // line 71
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.message.no-stable-versions-available");
        echo "</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class=\"dev-version-container\">
                    <h3>";
        // line 78
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.headline.test-versions");
        echo "</h3>
                    <p>";
        // line 79
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.message.compatible-unstable-versions");
        echo "</p>
                    <table class=\"dashboardlisting table\">
                        <thead>
                            <tr>
                                <th>";
        // line 83
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.listheader.extension");
        echo "</th>
                                <th>";
        // line 84
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.listheader.version");
        echo "</th>
                                <th>";
        // line 85
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.listheader.status");
        echo "</th>
                                <th>";
        // line 86
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.listheader.actions");
        echo "</th>
                            </tr>
                        </thead>
                        <tbody class=\"installed-version-item\">
                            <tr>
                                <td colspan=\"4\"><strong>";
        // line 91
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.message.no-test-versions-available");
        echo "</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>

            <div class=\"theme-postinstall\">
                <div class=\"theme-generation-container hide-block\">
                    <h3>";
        // line 101
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.headline.theme-installation-complete");
        echo "</h3>
                    <p>";
        // line 102
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.message.before-theme-start");
        echo "</p>
                    <fieldset>
                        <input type=\"text\" id=\"theme-name\" placeholder=\"Optionally change theme name\">
                        <a href=\"#\" class=\"theme-generator btn btn-primary\" data-request=\"generate-theme\" data-theme=\"\">Generate Theme</a>
                    </fieldset>
                </div>
                <div class=\"theme-generate-response alert alert-info hide-block\"></div>
            </div>

            <div class=\"extension-dependencies hide-block\">
                <h3>";
        // line 112
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.message.package-dependencies");
        echo ":</h3>
                <ul class=\"extension-dependencies-list\">
                </ul>
            </div>

            <div class=\"extension-postinstall hide-block\">
                <div class=\"modal-success hide-block\">
                    <h3>";
        // line 119
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.headline.installation-complete");
        echo "</h3>
                    <p>";
        // line 120
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.message.start-using-extension");
        echo "</p>
                </div>

                <div class=\"modal-failed hide-block\"></div>
            </div>

        </div>
    </div>
</div>

<div class=\"modal-footer postinstall-footer hide-block\">
    ";
        // line 134
        echo "    <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">Close</button>
</div>
";
    }

    public function getTemplateName()
    {
        return "@bolt/extend/_action-modal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 134,  233 => 120,  229 => 119,  219 => 112,  206 => 102,  202 => 101,  189 => 91,  181 => 86,  177 => 85,  173 => 84,  169 => 83,  162 => 79,  158 => 78,  148 => 71,  140 => 66,  136 => 65,  132 => 64,  128 => 63,  121 => 59,  117 => 58,  105 => 49,  95 => 42,  87 => 37,  83 => 36,  79 => 35,  75 => 34,  68 => 30,  64 => 29,  55 => 23,  51 => 22,  44 => 18,  40 => 17,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@bolt/extend/_action-modal.twig", "");
    }
}
