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

/* @Modules/productcomments/config/admin/services.yml */
class __TwigTemplate_6bbee002ace70f2a0d57ae1f09dfd7b9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/productcomments/config/admin/services.yml"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/productcomments/config/admin/services.yml"));

        // line 1
        echo "imports:
  - { resource: ../common.yml }

services:
    product_comment_criterion_form_data_provider:
        class: 'PrestaShop\\Module\\ProductComment\\Form\\ProductCommentCriterionFormDataProvider'
        public: true
        arguments:
            - '@product_comment_criterion_repository'
            - '@prestashop.core.admin.lang.repository'
            
    product_comment_criterion_form_data_handler:
        class: 'PrestaShop\\Module\\ProductComment\\Form\\ProductCommentCriterionFormDataHandler'
        public: true
        arguments:
            - '@product_comment_criterion_repository'
            - '@prestashop.core.admin.lang.repository'
            - '@doctrine.orm.default_entity_manager'";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/productcomments/config/admin/services.yml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("imports:
  - { resource: ../common.yml }

services:
    product_comment_criterion_form_data_provider:
        class: 'PrestaShop\\Module\\ProductComment\\Form\\ProductCommentCriterionFormDataProvider'
        public: true
        arguments:
            - '@product_comment_criterion_repository'
            - '@prestashop.core.admin.lang.repository'
            
    product_comment_criterion_form_data_handler:
        class: 'PrestaShop\\Module\\ProductComment\\Form\\ProductCommentCriterionFormDataHandler'
        public: true
        arguments:
            - '@product_comment_criterion_repository'
            - '@prestashop.core.admin.lang.repository'
            - '@doctrine.orm.default_entity_manager'", "@Modules/productcomments/config/admin/services.yml", "/var/www/html/modules/productcomments/config/admin/services.yml");
    }
}
