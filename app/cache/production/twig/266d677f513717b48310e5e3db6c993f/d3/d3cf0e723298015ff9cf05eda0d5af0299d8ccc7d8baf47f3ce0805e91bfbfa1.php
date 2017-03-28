<?php

/* @bolt/extend/_package.twig */
class __TwigTemplate_b51ee49ba34216180d2b6ffdff187aad6cb6b6b515101031f777c88ee1930946 extends Twig_Template
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
        ob_start();
        // line 2
        echo "    <div class=\"ext-list\"><strong class=\"no-results\">";
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.message.no-bolt-extensions-installed");
        echo "</strong></div>
";
        $context["package_empty"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 4
        echo "
";
        // line 5
        $context["package_item"] = ('' === $tmp = "    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <em class=\"%TYPE%\" title=\"%TYPE%\">%TITLE%%STATUS%%ENABLED%</em>
            <div><em>%VERSION%</em><small>%NAME%</small></div>
        </div>

        <div class=\"panel-body\">
            %DESCRIPTION%
            %KEYWORDS%
            %AUTHORS%
            %CONSTRAINT%
        </div>

        <div class=\"panel-footer\">
            %DETAILS%
            %MANAGE%
        </div>
    </div>
") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 25
        echo "
";
        // line 26
        $context["package_description"] = ('' === $tmp = "    <div class=\"description\">%DESCRIPTION%</div>
") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
";
        // line 30
        $context["package_author"] = ('' === $tmp = "    %AUTHOR%
") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 33
        echo "
";
        // line 34
        $context["package_authors"] = ('' === $tmp = "    <div class=\"author\">%AUTHORS%</div>
") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 37
        echo "
";
        // line 38
        $context["package_keyword"] = ('' === $tmp = "    <span class=\"tag label label-default\">%KEYWORD%</span>&nbsp;
") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 41
        echo "
";
        // line 42
        $context["package_keywords"] = ('' === $tmp = "    <div class=\"tags\">%KEYWORDS%</div>
") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 45
        echo "
";
        // line 49
        ob_start();
        // line 50
        echo "    <div class=\"btn-group pull-right\">
        <button type=\"button\" class=\"btn btn-sm btn-secondary dropdown-toggle\" data-toggle=\"dropdown\">
            <i class=\"fa fa-flag\"></i> ";
        // line 52
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.button.manage");
        echo "
            <span class=\"caret\"></span>
            <span class=\"sr-only\">Toggle Dropdown</span>
        </button>

        <ul class=\"dropdown-menu\" role=\"menu\">
            <li>
                <a href=\"#\" data-request=\"package-available\" data-available=\"%NAME%\" data-toggle=\"modal\" data-target=\"#installModal\">
                    <i class='fa fa-list fa-fw'></i> ";
        // line 60
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.button.link-versions");
        echo "
                </a>
            </li>
            <li>
                <a href=\"%MARKETPLACE_URL%\" target=\"_blank\">
                    <i class=\"fa fa-cart-plus fa-fw\"></i> ";
        // line 65
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.button.link-marketplace");
        echo "
                </a>
            </li>
            <li>
                <a href=\"%REPOSITORY_URL%\" target=\"_blank\">
                    <i class=\"fa fa-file-code-o fa-fw\"></i> ";
        // line 70
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.button.link-repository");
        echo "
                </a>
            </li>
            <li>
                <a href=\"#\" data-request=\"package-depends\" data-toggle=\"modal\" data-target=\"#installModal\" data-needle=\"%NAME%\" data-constraint=\"%VERSION%\">
                    <i class=\"fa fa-group fa-fw\"></i> ";
        // line 75
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.button.package-dependencies");
        echo "
                </a>
            </li>
            <li class=\"divider\"></li>
            <li>
                <a data-request=\"uninstall-package\" class=\"clickspinner\" href=\"%BASEURL%uninstall?package=%NAME%\">
                    <i class=\"fa fa-trash-o fa-fw\"></i> ";
        // line 81
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.button.link-uninstall");
        echo "
                </a>
            </li>
        </ul>
    </div>
";
        $context["package_manage_dropdown_installed"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 87
        echo "
";
        // line 91
        ob_start();
        // line 92
        echo "    <div class=\"btn-group pull-right\">
        <button type=\"button\" class=\"btn btn-sm btn-secondary dropdown-toggle\" data-toggle=\"dropdown\">
            <i class=\"fa fa-flag\"></i> ";
        // line 94
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.button.manage");
        echo "
            <span class=\"caret\"></span>
            <span class=\"sr-only\">Toggle Dropdown</span>
        </button>

        <ul class=\"dropdown-menu\" role=\"menu\">
            <li>
                <a href=\"#\" data-request=\"package-available\" data-available=\"%NAME%\" data-toggle=\"modal\" data-target=\"#installModal\">
                    <i class='fa fa-list fa-fw'></i> ";
        // line 102
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.button.link-versions");
        echo "
                </a>
            </li>
            <li>
                <a href=\"%MARKETPLACE_URL%\" target=\"_blank\">
                    <i class=\"fa fa-cart-plus fa-fw\"></i> ";
        // line 107
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.button.link-marketplace");
        echo "
                </a>
            </li>
            <li>
                <a href=\"%REPOSITORY_URL%\" target=\"_blank\">
                    <i class=\"fa fa-file-code-o fa-fw\"></i> ";
        // line 112
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.button.link-repository");
        echo "
                </a>
            </li>
            <li class=\"divider\"></li>
            <li>
                <a data-request=\"uninstall-package\" class=\"clickspinner\" href=\"%BASEURL%uninstall?package=%NAME%\">
                    <i class=\"fa fa-trash-o fa-fw\"></i> ";
        // line 118
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.button.link-uninstall");
        echo "
                </a>
            </li>
        </ul>
    </div>
";
        $context["package_manage_dropdown_uninstalled"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 124
        echo "


";
        // line 130
        $context["package_left_buttons"] = ('' === $tmp = "    <div class=\"pull-left\">
        %README%
        %THEME%
        %CONFIG%
    </div>
") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 137
        echo "
";
        // line 138
        ob_start();
        // line 139
        echo "    <a data-request=\"package-readme\" data-readme=\"%README%\" class=\"btn btn-sm btn-default\">
        <i class=\"fa fa-quote-right fa-fw\"></i> ";
        // line 140
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.button.link-readme");
        echo "
    </a>
";
        $context["package_readme_button"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 143
        echo "
";
        // line 144
        ob_start();
        // line 145
        echo "    <a data-request=\"package-copy\" data-theme=\"%NAME%\" class=\"btn btn-sm btn-silent-danger\">
        <i class=\"fa fa-copy fa-fw\"></i> ";
        // line 146
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.button.copy-to-theme-folder");
        echo "
    </a>
";
        $context["package_theme_button"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 149
        echo "
";
        // line 150
        ob_start();
        // line 151
        echo "    <a href=\"%CONFIG%\" class=\"btn btn-sm btn-default\">
        <i class=\"fa fa-cog fa-fw\"></i> ";
        // line 152
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.button.link-config");
        echo "
    </a>
";
        $context["package_config_button"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 155
        echo "
";
        // line 156
        ob_start();
        // line 157
        echo "    <tr>
        <td>%NAME%</td>
        <td>%VERSION%</td>
        <td><span class=\"label label-default-%CLASS%\">%BUILDSTATUS%</span></td>
        <td>
            <div class=\"btn-group\"><a href=\"#\" data-request=\"install-package\" class=\"btn btn-primary btn-sm\" data-package=\"%NAME%\" data-version=\"%VERSION%\">
            <i class=\"icon-gears\"></i> ";
        // line 163
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.button.install-this-version");
        echo "</a></div>
        </td>
    </tr>
";
        $context["package_versions"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 167
        echo "
";
        // line 168
        ob_start();
        // line 169
        echo "    <tr data-package=\"%PACKAGE%\">
        <td class=\"ext-list\"><strong class=\"title\">%PACKAGE%</strong></td>
        <td class=\"ext-list\">%PRETTYVERSION%</td>
        <td><a data-request=\"update-package\" class=\"btn btn-sm btn-warning\" data-package=\"%PACKAGE%\" data-version=\"%VERSION%\">";
        // line 172
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.button.install-package");
        echo "</a></td>
    </tr>
";
        $context["package_install_new"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 175
        echo "
";
        // line 176
        ob_start();
        // line 177
        echo "    <tr data-package=\"%PACKAGE%\">
        <td class=\"ext-list\"><strong class=\"title\">%PACKAGE%</strong></td>
        <td class=\"ext-list\">%PRETTYVERSION%</td>
        <td><a data-request=\"update-package\" class=\"btn btn-sm btn-tertiary\" data-package=\"%PACKAGE%\" data-version=\"%VERSION%\">";
        // line 180
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.button.update-package");
        echo "</a></td>
    </tr>
";
        $context["package_install_update"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 183
        echo "
";
        // line 184
        $context["package_error"] = ('' === $tmp = "    <div id=\"extension-error\">
        <h3>%ERROR_TYPE%</h3>
        <code>%ERROR_MESSAGE%</code>
        <p>%ERROR_LOCATION%</p>
    </div>
") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 191
        echo "
";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("extend.packages.empty", twig_trim_filter((isset($context["package_empty"]) ? $context["package_empty"] : null))), "html", null, true);
        echo "
";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("extend.packages.item", $this->env->getExtension('Bolt\Twig\TwigExtension')->pregReplace(twig_trim_filter((isset($context["package_item"]) ? $context["package_item"] : null)), "/>\\s+</", "><")), "html", null, true);
        echo "
";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("extend.packages.description", $this->env->getExtension('Bolt\Twig\TwigExtension')->pregReplace(twig_trim_filter((isset($context["package_description"]) ? $context["package_description"] : null)), "/>\\s+</", "><")), "html", null, true);
        echo "
";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("extend.packages.versions", $this->env->getExtension('Bolt\Twig\TwigExtension')->pregReplace(twig_trim_filter((isset($context["package_versions"]) ? $context["package_versions"] : null)), "/>\\s+</", "><")), "html", null, true);
        echo "
";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("extend.packages.author", $this->env->getExtension('Bolt\Twig\TwigExtension')->pregReplace(twig_trim_filter((isset($context["package_author"]) ? $context["package_author"] : null)), "/>\\s+</", "><")), "html", null, true);
        echo "
";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("extend.packages.authors", $this->env->getExtension('Bolt\Twig\TwigExtension')->pregReplace(twig_trim_filter((isset($context["package_authors"]) ? $context["package_authors"] : null)), "/>\\s+</", "><")), "html", null, true);
        echo "
";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("extend.packages.keyword", $this->env->getExtension('Bolt\Twig\TwigExtension')->pregReplace(twig_trim_filter((isset($context["package_keyword"]) ? $context["package_keyword"] : null)), "/>\\s+</", "><")), "html", null, true);
        echo "
";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("extend.packages.keywords", $this->env->getExtension('Bolt\Twig\TwigExtension')->pregReplace(twig_trim_filter((isset($context["package_keywords"]) ? $context["package_keywords"] : null)), "/>\\s+</", "><")), "html", null, true);
        echo "

";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("extend.packages.manage_dropdown_installed", $this->env->getExtension('Bolt\Twig\TwigExtension')->pregReplace(twig_trim_filter((isset($context["package_manage_dropdown_installed"]) ? $context["package_manage_dropdown_installed"] : null)), "/>\\s+</", "><")), "html", null, true);
        echo "
";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("extend.packages.manage_dropdown_uninstalled", $this->env->getExtension('Bolt\Twig\TwigExtension')->pregReplace(twig_trim_filter((isset($context["package_manage_dropdown_uninstalled"]) ? $context["package_manage_dropdown_uninstalled"] : null)), "/>\\s+</", "><")), "html", null, true);
        echo "
";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("extend.packages.left_buttons", $this->env->getExtension('Bolt\Twig\TwigExtension')->pregReplace(twig_trim_filter((isset($context["package_left_buttons"]) ? $context["package_left_buttons"] : null)), "/>\\s+</", "><")), "html", null, true);
        echo "
";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("extend.packages.theme_button", $this->env->getExtension('Bolt\Twig\TwigExtension')->pregReplace(twig_trim_filter((isset($context["package_theme_button"]) ? $context["package_theme_button"] : null)), "/>\\s+</", "><")), "html", null, true);
        echo "
";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("extend.packages.config_button", $this->env->getExtension('Bolt\Twig\TwigExtension')->pregReplace(twig_trim_filter((isset($context["package_config_button"]) ? $context["package_config_button"] : null)), "/>\\s+</", "><")), "html", null, true);
        echo "
";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("extend.packages.readme_button", $this->env->getExtension('Bolt\Twig\TwigExtension')->pregReplace(twig_trim_filter((isset($context["package_readme_button"]) ? $context["package_readme_button"] : null)), "/>\\s+</", "><")), "html", null, true);
        echo "

";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("extend.packages.install_new", $this->env->getExtension('Bolt\Twig\TwigExtension')->pregReplace(twig_trim_filter((isset($context["package_install_new"]) ? $context["package_install_new"] : null)), "/>\\s+</", "><")), "html", null, true);
        echo "
";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("extend.packages.install_update", $this->env->getExtension('Bolt\Twig\TwigExtension')->pregReplace(twig_trim_filter((isset($context["package_install_update"]) ? $context["package_install_update"] : null)), "/>\\s+</", "><")), "html", null, true);
        echo "
";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("extend.packages.error", $this->env->getExtension('Bolt\Twig\TwigExtension')->pregReplace(twig_trim_filter((isset($context["package_error"]) ? $context["package_error"] : null)), "/>\\s+</", "><")), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@bolt/extend/_package.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  381 => 210,  377 => 209,  373 => 208,  368 => 206,  364 => 205,  360 => 204,  356 => 203,  352 => 202,  348 => 201,  343 => 199,  339 => 198,  335 => 197,  331 => 196,  327 => 195,  323 => 194,  319 => 193,  315 => 192,  312 => 191,  305 => 184,  302 => 183,  296 => 180,  291 => 177,  289 => 176,  286 => 175,  280 => 172,  275 => 169,  273 => 168,  270 => 167,  263 => 163,  255 => 157,  253 => 156,  250 => 155,  244 => 152,  241 => 151,  239 => 150,  236 => 149,  230 => 146,  227 => 145,  225 => 144,  222 => 143,  216 => 140,  213 => 139,  211 => 138,  208 => 137,  201 => 130,  196 => 124,  187 => 118,  178 => 112,  170 => 107,  162 => 102,  151 => 94,  147 => 92,  145 => 91,  142 => 87,  133 => 81,  124 => 75,  116 => 70,  108 => 65,  100 => 60,  89 => 52,  85 => 50,  83 => 49,  80 => 45,  77 => 42,  74 => 41,  71 => 38,  68 => 37,  65 => 34,  62 => 33,  59 => 30,  56 => 29,  53 => 26,  50 => 25,  30 => 5,  27 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@bolt/extend/_package.twig", "");
    }
}
