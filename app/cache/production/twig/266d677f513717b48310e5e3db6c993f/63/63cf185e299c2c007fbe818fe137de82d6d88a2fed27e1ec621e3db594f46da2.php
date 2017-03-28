<?php

/* partials/_topbar.twig */
class __TwigTemplate_6887bf5641323849e890a5459c9dea1f0267538903c8c6cd1803f6b9f7040795 extends Twig_Template
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
        echo "<div class=\"title-bar\" data-responsive-toggle=\"example-menu\" data-hide-for=\"medium\">
  <button class=\"menu-icon\" type=\"button\" data-toggle></button>
  <div class=\"title-bar-title\">Menu</div>
</div>

<div class=\"top-bar\" id=\"example-menu\">
  <div class=\"top-bar-left\">
    ";
        // line 8
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->menu($this->env, "", "partials/_sub_menu.twig");
        echo "
  </div>
  <div class=\"top-bar-right\">
    <form method=\"get\" action=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "root", array()), "html", null, true);
        echo "search\" id=\"searchform-inline\" enctype=\"text/plain\">
      <ul class=\"menu\">
        <li><input type=\"search\" value=\"";
        // line 13
        if (array_key_exists("search", $context)) {
            echo twig_escape_filter($this->env, (isset($context["search"]) ? $context["search"] : null));
        }
        echo "\" placeholder=\"";
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.search-ellipsis");
        echo "\" name=\"search\"></li>
        <li><button type=\"submit\" class=\"button secondary\">";
        // line 14
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->trans("general.phrase.search");
        echo "</button></li>
      </ul>
    </form>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "partials/_topbar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 14,  39 => 13,  34 => 11,  28 => 8,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "partials/_topbar.twig", "");
    }
}
