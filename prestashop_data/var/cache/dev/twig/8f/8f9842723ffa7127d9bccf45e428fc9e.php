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

/* @Modules/statsbestcategories/CHANGELOG.txt */
class __TwigTemplate_978b0c9ce93eac775bcaa54711b456f3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/statsbestcategories/CHANGELOG.txt"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/statsbestcategories/CHANGELOG.txt"));

        // line 1
        echo "2014-03-27 17:16:31 +0100\t/ MO statsbestcategories : min ps_versions_compliancy modified (1.5.6.1 => 1.6)
2014-03-24 15:22:36 +0100\t/ MO statsbestcategories : ps_versions_compliancy added
2014-03-20 14:35:55 +0100\tInitial commit
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/statsbestcategories/CHANGELOG.txt";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("2014-03-27 17:16:31 +0100\t/ MO statsbestcategories : min ps_versions_compliancy modified (1.5.6.1 => 1.6)
2014-03-24 15:22:36 +0100\t/ MO statsbestcategories : ps_versions_compliancy added
2014-03-20 14:35:55 +0100\tInitial commit
", "@Modules/statsbestcategories/CHANGELOG.txt", "/var/www/html/modules/statsbestcategories/CHANGELOG.txt");
    }
}
