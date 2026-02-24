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

/* @Modules/gridhtml/CHANGELOG.txt */
class __TwigTemplate_53b8b4bb8c148c5c286f57ca6c263ff1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/gridhtml/CHANGELOG.txt"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/gridhtml/CHANGELOG.txt"));

        // line 1
        echo "2014-04-22 18:58:41 +0200\t// Changelog updated
2014-04-17 11:33:15 +0200\t[-] MO : gridhtml - Fix 1.5 ps_version_compliancy issue
2014-04-16 13:26:45 +0200\t// Missing closing parenthesis.
2014-04-16 12:30:41 +0200\t// gridhtml: mode description translatable.
2014-03-24 15:21:48 +0100\t/ MO gridhtml : ps_versions_compliancy added
2014-03-20 14:35:17 +0100\tInitial commit
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/gridhtml/CHANGELOG.txt";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("2014-04-22 18:58:41 +0200\t// Changelog updated
2014-04-17 11:33:15 +0200\t[-] MO : gridhtml - Fix 1.5 ps_version_compliancy issue
2014-04-16 13:26:45 +0200\t// Missing closing parenthesis.
2014-04-16 12:30:41 +0200\t// gridhtml: mode description translatable.
2014-03-24 15:21:48 +0100\t/ MO gridhtml : ps_versions_compliancy added
2014-03-20 14:35:17 +0100\tInitial commit
", "@Modules/gridhtml/CHANGELOG.txt", "/var/www/html/modules/gridhtml/CHANGELOG.txt");
    }
}
