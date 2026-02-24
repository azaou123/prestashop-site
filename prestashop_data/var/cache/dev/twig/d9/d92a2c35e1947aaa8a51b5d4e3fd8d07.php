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

/* @Modules/ps_distributionapiclient/config/services.yml */
class __TwigTemplate_f34c3c753967991470fcb8567a8344a1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_distributionapiclient/config/services.yml"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_distributionapiclient/config/services.yml"));

        // line 1
        echo "parameters:
  ps_cache_dir: !php/const _PS_CACHE_DIR_

services:
  distributionapiclient.cache.filesystem.adapter:
    class: Symfony\\Component\\Cache\\Adapter\\FilesystemAdapter
    arguments:
      - ''
      - !php/const PrestaShop\\Module\\DistributionApiClient\\DistributionApi::CACHE_LIFETIME_SECONDS
      - '%ps_cache_dir%/distribution-api'

  distributionapiclient.cache.provider:
    class: Doctrine\\Common\\Cache\\Psr6\\DoctrineProvider
    factory: [ Doctrine\\Common\\Cache\\Psr6\\DoctrineProvider, wrap ]
    arguments:
      - '@distributionapiclient.cache.filesystem.adapter'

  distributionapiclient.circuit_breaker.cache:
    class: PrestaShop\\Module\\DistributionApiClient\\Middleware\\Cache
    arguments:
      - '@distributionapiclient.cache.provider'

  distributionapiclient.circuit_breaker.handlerstack:
    class: GuzzleHttp\\HandlerStack
    factory: [ 'GuzzleHttp\\HandlerStack', 'create' ]
    calls:
      - push: [ '@distributionapiclient.circuit_breaker.cache' ]

  distributionapiclient.circuit_breaker.factory:
    class: PrestaShop\\CircuitBreaker\\AdvancedCircuitBreakerFactory

  distributionapiclient.circuit_breaker.settings:
    class: PrestaShop\\CircuitBreaker\\FactorySettings
    arguments:
      - !php/const PrestaShop\\Module\\DistributionApiClient\\DistributionApi::ALLOWED_FAILURES
      - !php/const PrestaShop\\Module\\DistributionApiClient\\DistributionApi::TIMEOUT_IN_SECONDS
      - !php/const PrestaShop\\Module\\DistributionApiClient\\DistributionApi::THRESHOLD_SECONDS
    calls:
      - setStorage: [ '@prestashop.core.circuit_breaker.storage' ]
      - setClientOptions:
          - { handler: '@distributionapiclient.circuit_breaker.handlerstack'}

  distributionapiclient.circuit_breaker:
    class: PrestaShop\\CircuitBreaker\\Contract\\CircuitBreakerInterface
    factory: [ '@distributionapiclient.circuit_breaker.factory', 'create' ]
    arguments: [ '@distributionapiclient.circuit_breaker.settings' ]

  PrestaShop\\Module\\DistributionApiClient\\ShopDataProvider:
    class: PrestaShop\\Module\\DistributionApiClient\\ShopDataProvider

  distributionapiclient.distribution_api:
    class: PrestaShop\\Module\\DistributionApiClient\\DistributionApi
    arguments:
      - '@distributionapiclient.circuit_breaker'
      - '@prestashop.module.factory.sourcehandler'
      - '@prestashop.adapter.data_provider.module'
      - '@PrestaShop\\Module\\DistributionApiClient\\ShopDataProvider'
      - \"@=service('prestashop.core.foundation.version').getSemVersion()\"
      - '%ps_cache_dir%/downloads'
    public: true

  PrestaShop\\Module\\DistributionApiClient\\Controller\\Admin\\TopContributorsController:
    autowire: true
    autoconfigure: true
    public: true
    tags: ['controller.service_arguments']
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_distributionapiclient/config/services.yml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("parameters:
  ps_cache_dir: !php/const _PS_CACHE_DIR_

services:
  distributionapiclient.cache.filesystem.adapter:
    class: Symfony\\Component\\Cache\\Adapter\\FilesystemAdapter
    arguments:
      - ''
      - !php/const PrestaShop\\Module\\DistributionApiClient\\DistributionApi::CACHE_LIFETIME_SECONDS
      - '%ps_cache_dir%/distribution-api'

  distributionapiclient.cache.provider:
    class: Doctrine\\Common\\Cache\\Psr6\\DoctrineProvider
    factory: [ Doctrine\\Common\\Cache\\Psr6\\DoctrineProvider, wrap ]
    arguments:
      - '@distributionapiclient.cache.filesystem.adapter'

  distributionapiclient.circuit_breaker.cache:
    class: PrestaShop\\Module\\DistributionApiClient\\Middleware\\Cache
    arguments:
      - '@distributionapiclient.cache.provider'

  distributionapiclient.circuit_breaker.handlerstack:
    class: GuzzleHttp\\HandlerStack
    factory: [ 'GuzzleHttp\\HandlerStack', 'create' ]
    calls:
      - push: [ '@distributionapiclient.circuit_breaker.cache' ]

  distributionapiclient.circuit_breaker.factory:
    class: PrestaShop\\CircuitBreaker\\AdvancedCircuitBreakerFactory

  distributionapiclient.circuit_breaker.settings:
    class: PrestaShop\\CircuitBreaker\\FactorySettings
    arguments:
      - !php/const PrestaShop\\Module\\DistributionApiClient\\DistributionApi::ALLOWED_FAILURES
      - !php/const PrestaShop\\Module\\DistributionApiClient\\DistributionApi::TIMEOUT_IN_SECONDS
      - !php/const PrestaShop\\Module\\DistributionApiClient\\DistributionApi::THRESHOLD_SECONDS
    calls:
      - setStorage: [ '@prestashop.core.circuit_breaker.storage' ]
      - setClientOptions:
          - { handler: '@distributionapiclient.circuit_breaker.handlerstack'}

  distributionapiclient.circuit_breaker:
    class: PrestaShop\\CircuitBreaker\\Contract\\CircuitBreakerInterface
    factory: [ '@distributionapiclient.circuit_breaker.factory', 'create' ]
    arguments: [ '@distributionapiclient.circuit_breaker.settings' ]

  PrestaShop\\Module\\DistributionApiClient\\ShopDataProvider:
    class: PrestaShop\\Module\\DistributionApiClient\\ShopDataProvider

  distributionapiclient.distribution_api:
    class: PrestaShop\\Module\\DistributionApiClient\\DistributionApi
    arguments:
      - '@distributionapiclient.circuit_breaker'
      - '@prestashop.module.factory.sourcehandler'
      - '@prestashop.adapter.data_provider.module'
      - '@PrestaShop\\Module\\DistributionApiClient\\ShopDataProvider'
      - \"@=service('prestashop.core.foundation.version').getSemVersion()\"
      - '%ps_cache_dir%/downloads'
    public: true

  PrestaShop\\Module\\DistributionApiClient\\Controller\\Admin\\TopContributorsController:
    autowire: true
    autoconfigure: true
    public: true
    tags: ['controller.service_arguments']
", "@Modules/ps_distributionapiclient/config/services.yml", "/var/www/html/modules/ps_distributionapiclient/config/services.yml");
    }
}
