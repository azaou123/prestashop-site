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

/* @Modules/statsbestcustomers/CHANGELOG.txt */
class __TwigTemplate_1dd264dd36a2b652e9ecb841ffaee86f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/statsbestcustomers/CHANGELOG.txt"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/statsbestcustomers/CHANGELOG.txt"));

        // line 1
        echo "2014-03-31 12:12:00 +0200\t// Typo.
2014-03-27 17:16:48 +0100\t/ MO statsbestcustomers : min ps_versions_compliancy modified (1.5.6.1 => 1.6)
2014-03-24 15:22:38 +0100\t/ MO statsbestcustomers : ps_versions_compliancy added
2014-03-20 14:35:57 +0100\tInitial commit
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/statsbestcustomers/CHANGELOG.txt";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("2014-03-31 12:12:00 +0200\t// Typo.
2014-03-27 17:16:48 +0100\t/ MO statsbestcustomers : min ps_versions_compliancy modified (1.5.6.1 => 1.6)
2014-03-24 15:22:38 +0100\t/ MO statsbestcustomers : ps_versions_compliancy added
2014-03-20 14:35:57 +0100\tInitial commit
", "@Modules/statsbestcustomers/CHANGELOG.txt", "/var/www/html/modules/statsbestcustomers/CHANGELOG.txt");
    }
}
