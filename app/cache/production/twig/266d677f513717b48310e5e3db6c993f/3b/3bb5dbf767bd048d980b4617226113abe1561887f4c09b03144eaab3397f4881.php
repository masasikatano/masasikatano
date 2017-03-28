<?php

/* @bolt/extend/extend.twig */
class __TwigTemplate_c10bd12de4df4328f51cc38ae6359191893a7ef62320fe69d13846b57116c776 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("@bolt/_base/_page-nav.twig", "@bolt/extend/extend.twig", 3);
        $this->blocks = array(
            'page_nav' => array($this, 'block_page_nav'),
            'page_title' => array($this, 'block_page_title'),
            'messages' => array($this, 'block_messages'),
            'page_main' => array($this, 'block_page_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@bolt/_base/_page-nav.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_page_nav($context, array $blocks = array())
    {
        echo "ExtendBolt";
    }

    // line 7
    public function block_page_title($context, array $blocks = array())
    {
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.pagetitle", array("%BOLTNAME%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "get", array(0 => "general/branding/name"), "method")));
    }

    // line 10
    public function block_messages($context, array $blocks = array())
    {
        echo "";
    }

    // line 12
    public function block_page_main($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        echo twig_include($this->env, $context, "@bolt/extend/_package.twig");
        echo "

    ";
        // line 15
        if ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "messages", array())) {
            // line 16
            echo "        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"alert alert-info alert-dismissible\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                    ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "messages", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 21
                echo "                        ";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "<br>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "                </div>
            </div>
        </div>
    ";
        }
        // line 27
        echo "
    <div class=\"row extend-bolt-container\">
        <div class=\"col-md-9\">

            ";
        // line 31
        if ( !$this->getAttribute((isset($context["context"]) ? $context["context"] : null), "writeable", array())) {
            // line 32
            echo "            ";
            $context["msg"] = $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.message.ext-dir-missing", array("%DIRECTORY%" => $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "extensionsPath", array())));
            // line 33
            echo "            <div class=\"alert alert-warning alert-dismissible\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                    ";
            // line 35
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->ymllink((isset($context["msg"]) ? $context["msg"] : null));
            echo "
            </div>
            ";
        }
        // line 38
        echo "
            ";
        // line 39
        if ( !$this->getAttribute((isset($context["context"]) ? $context["context"] : null), "enabled", array())) {
            // line 40
            echo "            ";
            $context["msg"] = $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.message.loading-disabled", array("%CONFIG%" => $this->env->getExtension('Bolt\Twig\TwigExtension')->ymllink("config.yml")));
            // line 41
            echo "            <div class=\"alert alert-warning alert-dismissible\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                    ";
            // line 43
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->ymllink((isset($context["msg"]) ? $context["msg"] : null));
            echo "
            </div>
            ";
        }
        // line 46
        echo "
            ";
        // line 47
        echo twig_include($this->env, $context, "@bolt/_sub/_messages.twig");
        echo "

            <section>
                <h2>";
        // line 50
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.headline.install-new-extension");
        echo "</h2>
                <p>
                    ";
        // line 52
        if (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "writeable", array()) && $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "online", array()))) {
            // line 53
            echo "                    ";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.message.add-extension-with-form");
            echo "
                    ";
        }
        // line 55
        echo "                    ";
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.message.discover-by-visiting");
        echo "
                    <a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "site", array()), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "site", array()), "html", null, true);
        echo "</a>
                </p>
                ";
        // line 58
        if (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "writeable", array()) && $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "online", array()))) {
            // line 59
            echo "                <div class=\"install-container\">
                        <div class=\"auto-search hide-block\"></div>
                        <input type=\"text\" name=\"check-package\" placeholder=\"Extension name eg: bolt/widget\">
                        <a class=\"btn btn-primary check-package\" data-request=\"check-package\" data-toggle=\"modal\" data-target=\"#installModal\">
                            <i class=\"icon-gears\"></i> ";
            // line 63
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.button.browse-versions");
            echo "
                        </a>

                        <div class=\"modal fade\" id=\"installModal\" tabindex=\"-1\" role=\"dialog\">
                            <div class=\"modal-dialog\">
                                <div class=\"modal-content\">
                                    ";
            // line 69
            echo twig_include($this->env, $context, "@bolt/extend/_action-modal.twig");
            echo "
                                </div>
                            </div>
                        </div>
                </div>
                ";
        }
        // line 75
        echo "            </section>

            <hr>

            ";
        // line 80
        echo "            ";
        echo twig_include($this->env, $context, "@bolt/extend/_feedback.twig");
        echo "

            <section class=\"installed-container\">
                <h2>";
        // line 83
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.headline.currently-installed");
        echo "</h2>
                ";
        // line 84
        if ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "writeable", array())) {
            // line 85
            echo "                <pre class=\"installed console\" data-request=\"installed\">";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.message.checking-installed-packages");
            echo "..</pre>
                ";
        } else {
            // line 87
            echo "                <pre class=\"installed\">";
            echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.message.no-package-check-in-readmode");
            echo "</pre>
                ";
        }
        // line 89
        echo "                <div class=\"installed-list hide-block\">
                    <div class=\"installed-list-items\">

                    </div>
                </div>
            </section>

            ";
        // line 97
        echo "            ";
        echo twig_include($this->env, $context, "@bolt/extend/_readme.twig");
        echo "

        </div>

        <aside class=\"col-md-3\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\"><i class=\"fa fa-cog fa-fw\"></i>";
        // line 103
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.options");
        echo "</div>
                <div class=\"panel-body\">
                        <p><strong>";
        // line 105
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.message.check-for-updates");
        echo "</strong></p>
                        <div class=\"btn-group\">
                            <a class=\"btn btn-tertiary";
        // line 107
        if (( !$this->getAttribute((isset($context["context"]) ? $context["context"] : null), "writeable", array()) ||  !$this->getAttribute((isset($context["context"]) ? $context["context"] : null), "online", array()))) {
            echo " disabled";
        }
        echo " clickspinner\" data-request=\"update-check\">
                                <i class=\"fa fa-refresh fa-fw\"></i> ";
        // line 108
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.button.update-check");
        echo "
                            </a>
                        </div>
                        <p>";
        // line 111
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.message.shows-updates");
        echo "</p>
                        <hr>
                        <p><strong>";
        // line 113
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.message.maintenance");
        echo "</strong></p>
                        <div class=\"btn-group\">
                            <a class=\"btn btn-tertiary";
        // line 115
        if (( !$this->getAttribute((isset($context["context"]) ? $context["context"] : null), "writeable", array()) ||  !$this->getAttribute((isset($context["context"]) ? $context["context"] : null), "online", array()))) {
            echo " disabled";
        }
        echo " clickspinner\" data-request=\"update-run\">
                                <i class=\"fa fa-refresh fa-fw\"></i> ";
        // line 116
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.button.update-all");
        echo "
                            </a>
                            <button type=\"button\" class=\"btn btn-tertiary dropdown-toggle\" data-toggle=\"dropdown\">
                                <span class=\"caret\"></span>
                                <span class=\"sr-only\">Toggle Dropdown</span>
                            </button>
                            <ul class=\"dropdown-menu pull-right\" role=\"menu\">
                                <li>
                                    <a href=\"#\" class=\"";
        // line 124
        if (( !$this->getAttribute((isset($context["context"]) ? $context["context"] : null), "writeable", array()) ||  !$this->getAttribute((isset($context["context"]) ? $context["context"] : null), "online", array()))) {
            echo " disabled";
        }
        echo " clickspinner\" data-request=\"install-run\">
                                        <i class=\"fa fa-download fa-fw\"></i> ";
        // line 125
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.button.install-all");
        echo "
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"";
        // line 129
        if (( !$this->getAttribute((isset($context["context"]) ? $context["context"] : null), "writeable", array()) ||  !$this->getAttribute((isset($context["context"]) ? $context["context"] : null), "online", array()))) {
            echo " disabled";
        }
        echo " clickspinner\" data-request=\"autoload-dump\">
                                        <i class=\"fa fa-refresh fa-fw\"></i> ";
        // line 130
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.button.autoload-dump");
        echo "
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <p>
                            <strong>";
        // line 136
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.button.update-all");
        echo ":</strong>
                            ";
        // line 137
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.message.installs-updates");
        echo "
                        </p>
                        <p>
                            <strong>";
        // line 140
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.button.install-all");
        echo ":</strong>
                            ";
        // line 141
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.message.installs-all-listed-packages");
        echo "
                        </p>
                        <p>
                            <strong>";
        // line 144
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.button.autoload-dump");
        echo ":</strong>
                            ";
        // line 145
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.message.autoload-dump");
        echo "
                        </p>
                </div>
            </div>
        </aside>

    </div>

    ";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("extend.text.autoloader-start", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.message.autoloader-start")), "html", null, true);
        echo "
    ";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("extend.text.autoloader-update", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.message.autoloader-update")), "html", null, true);
        echo "
    ";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("extend.text.bad-json", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.message.bad-json")), "html", null, true);
        echo "
    ";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("extend.text.confirm-remove", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.message.confirm-remove")), "html", null, true);
        echo "
    ";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("extend.text.copying", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.message.copying")), "html", null, true);
        echo "
    ";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("extend.text.install-all", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.message.install-all")), "html", null, true);
        echo "
    ";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("extend.text.install-running", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.message.installation-running")), "html", null, true);
        echo "
    ";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("extend.text.installing", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.message.installing")), "html", null, true);
        echo "
    ";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("extend.text.no-stable", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.message.no-stable-versions-available")), "html", null, true);
        echo "
    ";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("extend.text.no-test", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.message.no-test-versions-available")), "html", null, true);
        echo "
    ";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("extend.text.overwrite", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.message.overwrite")), "html", null, true);
        echo "
    ";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("extend.text.removing", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.message.removing")), "html", null, true);
        echo "
    ";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("extend.text.running-update", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.message.running-update")), "html", null, true);
        echo "
    ";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("extend.text.running-update-all", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.message.running-update-all")), "html", null, true);
        echo "
    ";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("extend.text.updating", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.message.updating")), "html", null, true);
        echo "
    ";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("extend.text.updated", $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("page.extend.message.updated")), "html", null, true);
        echo "

    ";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("extend.siteurl", $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "site", array())), "html", null, true);
        echo "
    ";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("extend.baseurl", (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "resources", array(), "array"), "url", array(0 => "bolt"), "method") . twig_trim_filter("extend", "/")) . "/")), "html", null, true);
        echo "
    ";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt\Twig\TwigExtension')->addData("extend.rootpath", $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "rootpath", array())), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "@bolt/extend/extend.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  419 => 172,  415 => 171,  411 => 170,  406 => 168,  402 => 167,  398 => 166,  394 => 165,  390 => 164,  386 => 163,  382 => 162,  378 => 161,  374 => 160,  370 => 159,  366 => 158,  362 => 157,  358 => 156,  354 => 155,  350 => 154,  346 => 153,  335 => 145,  331 => 144,  325 => 141,  321 => 140,  315 => 137,  311 => 136,  302 => 130,  296 => 129,  289 => 125,  283 => 124,  272 => 116,  266 => 115,  261 => 113,  256 => 111,  250 => 108,  244 => 107,  239 => 105,  234 => 103,  224 => 97,  215 => 89,  209 => 87,  203 => 85,  201 => 84,  197 => 83,  190 => 80,  184 => 75,  175 => 69,  166 => 63,  160 => 59,  158 => 58,  151 => 56,  146 => 55,  140 => 53,  138 => 52,  133 => 50,  127 => 47,  124 => 46,  118 => 43,  114 => 41,  111 => 40,  109 => 39,  106 => 38,  100 => 35,  96 => 33,  93 => 32,  91 => 31,  85 => 27,  79 => 23,  70 => 21,  66 => 20,  60 => 16,  58 => 15,  52 => 13,  49 => 12,  43 => 10,  37 => 7,  31 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@bolt/extend/extend.twig", "");
    }
}
