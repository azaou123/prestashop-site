<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Modules/ps_distributionapiclient/views/js/vue/index.html */
class __TwigTemplate_a967e94175827bf5f02f112758b45f73 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_distributionapiclient/views/js/vue/index.html"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_distributionapiclient/views/js/vue/index.html"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"UTF-8\">
    <link rel=\"icon\" href=\"/modules/ps_distributionapiclient/views/js/vue/favicon.ico\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Community: Wall of Fame</title>
    <script type=\"module\" crossorigin src=\"/modules/ps_distributionapiclient/views/js/vue/assets/index.js\"></script>
    
  </head>
  <body>
    <div id=\"wall-of-fame-vue-app\"></div>
  </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_distributionapiclient/views/js/vue/index.html";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"UTF-8\">
    <link rel=\"icon\" href=\"/modules/ps_distributionapiclient/views/js/vue/favicon.ico\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Community: Wall of Fame</title>
    <script type=\"module\" crossorigin src=\"/modules/ps_distributionapiclient/views/js/vue/assets/index.js\"></script>
    
  </head>
  <body>
    <div id=\"wall-of-fame-vue-app\"></div>
  </body>
</html>
", "@Modules/ps_distributionapiclient/views/js/vue/index.html", "/var/www/html/modules/ps_distributionapiclient/views/js/vue/index.html");
    }
}
