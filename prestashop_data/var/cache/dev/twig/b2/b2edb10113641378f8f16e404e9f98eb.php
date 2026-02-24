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

/* @Modules/ps_distributionapiclient/config/routes.yml */
class __TwigTemplate_5d7c434dd54b3fc43a2d39c58e90b951 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_distributionapiclient/config/routes.yml"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_distributionapiclient/config/routes.yml"));

        // line 1
        echo "ps_distributionapiclient_top_contributors:
  path: /ps_distributionapiclient/top-contributors
  methods: [GET]
  defaults:
    _controller: 'PrestaShop\\Module\\DistributionApiClient\\Controller\\Admin\\TopContributorsController::index'
    _legacy_controller: 'AdminPsdistributionapiclient'
    _legacy_link: 'AdminPsdistributionapiclient'
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_distributionapiclient/config/routes.yml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("ps_distributionapiclient_top_contributors:
  path: /ps_distributionapiclient/top-contributors
  methods: [GET]
  defaults:
    _controller: 'PrestaShop\\Module\\DistributionApiClient\\Controller\\Admin\\TopContributorsController::index'
    _legacy_controller: 'AdminPsdistributionapiclient'
    _legacy_link: 'AdminPsdistributionapiclient'
", "@Modules/ps_distributionapiclient/config/routes.yml", "/var/www/html/modules/ps_distributionapiclient/config/routes.yml");
    }
}
