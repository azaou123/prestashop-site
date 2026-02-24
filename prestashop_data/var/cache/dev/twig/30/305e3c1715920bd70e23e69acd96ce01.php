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

/* @Modules/productcomments/config/common.yml */
class __TwigTemplate_fac453c25e9a6c11cbb1a3c8f8ab6f69 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/productcomments/config/common.yml"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/productcomments/config/common.yml"));

        // line 1
        echo "services:
  _defaults:
    public: true

  product_comment_criterion_repository:
    class: PrestaShop\\Module\\ProductComment\\Repository\\ProductCommentCriterionRepository
    arguments:
      - '@doctrine'
      - '@doctrine.dbal.default_connection'
      - '%database_prefix%'

  product_comment_repository:
    class: PrestaShop\\Module\\ProductComment\\Repository\\ProductCommentRepository
    arguments:
      - '@doctrine'
      - '@doctrine.dbal.default_connection'
      - '%database_prefix%'
      - '@=service(\"prestashop.adapter.legacy.configuration\").get(\"PRODUCT_COMMENTS_ALLOW_GUESTS\")'
      - '@=service(\"prestashop.adapter.legacy.configuration\").get(\"PRODUCT_COMMENTS_MINIMAL_TIME\")'
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/productcomments/config/common.yml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("services:
  _defaults:
    public: true

  product_comment_criterion_repository:
    class: PrestaShop\\Module\\ProductComment\\Repository\\ProductCommentCriterionRepository
    arguments:
      - '@doctrine'
      - '@doctrine.dbal.default_connection'
      - '%database_prefix%'

  product_comment_repository:
    class: PrestaShop\\Module\\ProductComment\\Repository\\ProductCommentRepository
    arguments:
      - '@doctrine'
      - '@doctrine.dbal.default_connection'
      - '%database_prefix%'
      - '@=service(\"prestashop.adapter.legacy.configuration\").get(\"PRODUCT_COMMENTS_ALLOW_GUESTS\")'
      - '@=service(\"prestashop.adapter.legacy.configuration\").get(\"PRODUCT_COMMENTS_MINIMAL_TIME\")'
", "@Modules/productcomments/config/common.yml", "/var/www/html/modules/productcomments/config/common.yml");
    }
}
