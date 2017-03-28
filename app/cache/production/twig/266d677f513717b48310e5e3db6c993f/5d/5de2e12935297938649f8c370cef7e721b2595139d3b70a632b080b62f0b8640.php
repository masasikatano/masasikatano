<?php

/* partials/_footer.twig */
class __TwigTemplate_736d7b1f67f002694bb751622c672ddead88074d86e7c31d7a876a320f64d176 extends Twig_Template
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
        echo "<!-- Footer -->

<footer class=\"row\">
    
    <hr />
    
    <div class=\"large-6 columns\">
        ";
        // line 8
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->menu($this->env, "main", "partials/_sub_menu.twig", array("withsubmenus" => false, "class" => "inline-list align-right"));
        // line 12
        echo "
    </div>

    ";
        // line 15
        echo $this->env->getExtension('Bolt\Twig\TwigExtension')->widgets("footer");
        echo "

</footer>

<script async>
  \tvar cb = function() {
  \tvar l = document.createElement('link'); l.rel = 'stylesheet';
  \tl.href = '";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "css/foundation.css';
  \tvar h = document.getElementsByTagName('head')[0]; h.parentNode.insertBefore(l, h);
  \t};
  \tvar raf = requestAnimationFrame || mozRequestAnimationFrame || webkitRequestAnimationFrame || msRequestAnimationFrame;
  \tif (raf) raf(cb);
  \telse window.addEventListener('load', cb);
</script>

";
        // line 33
        echo "<script src=\"https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js\"></script>
<script async>
    WebFont.load({
      google: {
        families: ['PT Sans']
      }
    });
</script>
<script async>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-81810435-1', 'auto');
    ga('send', 'pageview');
</script>
";
    }

    public function getTemplateName()
    {
        return "partials/_footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 33,  45 => 22,  35 => 15,  30 => 12,  28 => 8,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "partials/_footer.twig", "");
    }
}
