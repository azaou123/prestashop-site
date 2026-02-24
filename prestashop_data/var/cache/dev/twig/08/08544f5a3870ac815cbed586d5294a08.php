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

/* @Modules/ps_linklist/config/services.yml */
class __TwigTemplate_445657f28869e43acd86096cc3eeef7f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_linklist/config/services.yml"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_linklist/config/services.yml"));

        // line 1
        echo "services:
  _defaults:
    public: true

  prestashop.module.link_block.cache:
    class: PrestaShop\\Module\\LinkList\\Cache\\LegacyLinkBlockCache

  prestashop.module.link_block.repository:
    class: PrestaShop\\Module\\LinkList\\Repository\\LinkBlockRepository
    arguments:
      \$connection: '@doctrine.dbal.default_connection'
      \$dbPrefix: '%database_prefix%'
      \$languages: '@=service(\"prestashop.adapter.legacy.context\").getLanguages(false, service(\"prestashop.adapter.shop.context\").getContextShopID())'
      \$translator: '@translator'
      \$isMultiStoreUsed: '@=service(\"prestashop.adapter.feature.multistore\").isUsed()'
      \$multiStoreContext: '@prestashop.adapter.shop.context'
      \$objectModelHandler: '@prestashop.module.link_block.adapter.object_model_handler'

  # Grid data query builder
  prestashop.module.link_block.grid.query_builder:
    class: PrestaShop\\Module\\LinkList\\Core\\Grid\\Query\\LinkBlockQueryBuilder
    arguments:
      \$connection: '@doctrine.dbal.default_connection'
      \$dbPrefix: '%database_prefix%'

  # Grid Data Factory
  prestashop.module.link_block.grid.data_factory:
    class: '%prestashop.core.grid.data.factory.doctrine_grid_data_factory%'
    arguments:
      \$gridQueryBuilder: '@prestashop.module.link_block.grid.query_builder'
      \$hookDispatcher: '@prestashop.core.hook.dispatcher'
      \$queryParser: '@prestashop.core.grid.query.doctrine_query_parser'
      \$gridId: 'link_block'

  # Link block grid Factory
  prestashop.module.link_block.grid.factory:
    class: PrestaShop\\Module\\LinkList\\Core\\Grid\\LinkBlockGridFactory
    arguments:
      \$translator: '@translator'
      \$hookDispatcher: '@prestashop.core.hook.dispatcher'
      \$dataFactory: '@prestashop.module.link_block.grid.data_factory'
      \$filterFormFactory: '@prestashop.core.grid.filter.form_factory'
      \$shopContext: '@prestashop.adapter.shop.context'

  # Grid position definition
  prestashop.module.link_block.grid.position_definition:
    class: 'PrestaShop\\PrestaShop\\Core\\Grid\\Position\\PositionDefinition'
    arguments:
      \$table: 'link_block'
      \$idField: 'id_link_block'
      \$positionField: 'position'
      \$parentIdField: 'id_hook'

  # Link block form data provider
  prestashop.module.link_block.form_provider:
    class: PrestaShop\\Module\\LinkList\\Form\\LinkBlockFormDataProvider
    arguments:
      \$repository: '@prestashop.module.link_block.repository'
      \$cache: '@prestashop.module.link_block.cache'
      \$languages: '@=service(\"prestashop.adapter.legacy.context\").getLanguages(false, service(\"prestashop.adapter.shop.context\").getContextShopID())'
      \$shopContext: '@prestashop.adapter.shop.context'
      \$configuration: '@prestashop.adapter.legacy.configuration'

  # Form choices providers
  prestashop.module.link_block.choice_provider.hook:
    class: PrestaShop\\Module\\LinkList\\Form\\ChoiceProvider\\HookChoiceProvider
    arguments:
      \$connection: '@doctrine.dbal.default_connection'
      \$dbPrefix: '%database_prefix%'

  prestashop.module.link_block.choice_provider.cms_category:
    class: PrestaShop\\Module\\LinkList\\Form\\ChoiceProvider\\CMSCategoryChoiceProvider
    arguments:
      \$connection: '@doctrine.dbal.default_connection'
      \$dbPrefix: '%database_prefix%'
      \$idLang: '@=service(\"prestashop.adapter.legacy.context\").getLanguage().id'
      \$shopIds: '@=service(\"prestashop.adapter.shop.context\").getContextListShopID()'

  prestashop.module.link_block.choice_provider.category:
    class: PrestaShop\\Module\\LinkList\\Form\\ChoiceProvider\\CategoryChoiceProvider
    arguments:
      \$connection: '@doctrine.dbal.default_connection'
      \$dbPrefix: '%database_prefix%'
      \$idLang: '@=service(\"prestashop.adapter.legacy.context\").getLanguage().id'
      \$shopIds: '@=service(\"prestashop.adapter.shop.context\").getContextListShopID()'

  prestashop.module.link_block.choice_provider.cms_page:
    class: PrestaShop\\Module\\LinkList\\Form\\ChoiceProvider\\CMSPageChoiceProvider
    arguments:
      \$connection: '@doctrine.dbal.default_connection'
      \$dbPrefix: '%database_prefix%'
      \$categories: '@=service(\"prestashop.module.link_block.choice_provider.cms_category\").getChoices()'
      \$idLang: '@=service(\"prestashop.adapter.legacy.context\").getLanguage().id'
      \$shopIds: '@=service(\"prestashop.adapter.shop.context\").getContextListShopID()'

  prestashop.module.link_block.choice_provider.product_page:
    class: PrestaShop\\Module\\LinkList\\Form\\ChoiceProvider\\PageChoiceProvider
    arguments:
      \$connection: '@doctrine.dbal.default_connection'
      \$dbPrefix: '%database_prefix%'
      \$idLang: '@=service(\"prestashop.adapter.legacy.context\").getLanguage().id'
      \$shopIds: '@=service(\"prestashop.adapter.shop.context\").getContextListShopID()'
      \$pageNames:
        - 'prices-drop'
        - 'new-products'
        - 'best-sales'

  prestashop.module.link_block.choice_provider.static_page:
    class: PrestaShop\\Module\\LinkList\\Form\\ChoiceProvider\\PageChoiceProvider
    arguments:
      \$connection: '@doctrine.dbal.default_connection'
      \$dbPrefix: '%database_prefix%'
      \$idLang: '@=service(\"prestashop.adapter.legacy.context\").getLanguage().id'
      \$shopIds: '@=service(\"prestashop.adapter.shop.context\").getContextListShopID()'
      \$pageNames:
        - 'contact'
        - 'sitemap'
        - 'stores'
        - 'authentication'
        - 'registration'
        - 'my-account'

  # Form types
  prestashop.module.link_block.form_type:
    class: PrestaShop\\Module\\LinkList\\Form\\Type\\LinkBlockType
    parent: 'form.type.translatable.aware'
    public: true
    arguments:
      \$hookChoices: '@=service(\"prestashop.module.link_block.choice_provider.hook\").getChoices()'
      \$cmsPageChoices: '@=service(\"prestashop.module.link_block.choice_provider.cms_page\").getChoices()'
      \$productPageChoices: '@=service(\"prestashop.module.link_block.choice_provider.product_page\").getChoices()'
      \$staticPageChoices: '@=service(\"prestashop.module.link_block.choice_provider.static_page\").getChoices()'
      \$categoryChoices: '@=service(\"prestashop.module.link_block.choice_provider.category\").getChoices()'
      \$isMultiStoreUsed: '@=service(\"prestashop.adapter.feature.multistore\").isUsed()'
    tags:
      - { name: form.type }

  prestashop.module.link_block.custom_url_type:
    class: PrestaShop\\Module\\LinkList\\Form\\Type\\CustomUrlType
    parent: 'form.type.translatable.aware'
    public: true
    tags:
    - { name: form.type }

  # Link block form handler
  prestashop.module.link_block.form_handler:
    class: 'PrestaShop\\PrestaShop\\Core\\Form\\FormHandler'
    arguments:
      \$formBuilder: '@=service(\"form.factory\").createBuilder()'
      \$hookDispatcher: '@prestashop.core.hook.dispatcher'
      \$formDataProvider: '@prestashop.module.link_block.form_provider'
      \$formTypes:
        'link_block': 'PrestaShop\\Module\\LinkList\\Form\\Type\\LinkBlockType'
      \$hookName: 'AdminLinkWidget'

  prestashop.module.link_block.adapter.object_model_handler:
    class: 'PrestaShop\\Module\\LinkList\\Adapter\\ObjectModelHandler'

  PrestaShop\\Module\\LinkList\\Form\\Type\\TranslateCustomUrlType:
    parent: 'form.type.translatable.aware'
    public: true
    arguments:
      - \"@=service('prestashop.adapter.legacy.context').getAvailableLanguages()\"
      - '@router.default'
      - \"@=service('prestashop.adapter.legacy.configuration').getBoolean('PS_BO_ALLOW_EMPLOYEE_FORM_LANG')\"
      - \"@=service('prestashop.adapter.legacy.context').getContext().cookie.employee_form_lang\"
      - \"@=service('prestashop.adapter.legacy.configuration').getInt('PS_LANG_DEFAULT')\"
    tags:
      - { name: form.type }
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_linklist/config/services.yml";
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

  prestashop.module.link_block.cache:
    class: PrestaShop\\Module\\LinkList\\Cache\\LegacyLinkBlockCache

  prestashop.module.link_block.repository:
    class: PrestaShop\\Module\\LinkList\\Repository\\LinkBlockRepository
    arguments:
      \$connection: '@doctrine.dbal.default_connection'
      \$dbPrefix: '%database_prefix%'
      \$languages: '@=service(\"prestashop.adapter.legacy.context\").getLanguages(false, service(\"prestashop.adapter.shop.context\").getContextShopID())'
      \$translator: '@translator'
      \$isMultiStoreUsed: '@=service(\"prestashop.adapter.feature.multistore\").isUsed()'
      \$multiStoreContext: '@prestashop.adapter.shop.context'
      \$objectModelHandler: '@prestashop.module.link_block.adapter.object_model_handler'

  # Grid data query builder
  prestashop.module.link_block.grid.query_builder:
    class: PrestaShop\\Module\\LinkList\\Core\\Grid\\Query\\LinkBlockQueryBuilder
    arguments:
      \$connection: '@doctrine.dbal.default_connection'
      \$dbPrefix: '%database_prefix%'

  # Grid Data Factory
  prestashop.module.link_block.grid.data_factory:
    class: '%prestashop.core.grid.data.factory.doctrine_grid_data_factory%'
    arguments:
      \$gridQueryBuilder: '@prestashop.module.link_block.grid.query_builder'
      \$hookDispatcher: '@prestashop.core.hook.dispatcher'
      \$queryParser: '@prestashop.core.grid.query.doctrine_query_parser'
      \$gridId: 'link_block'

  # Link block grid Factory
  prestashop.module.link_block.grid.factory:
    class: PrestaShop\\Module\\LinkList\\Core\\Grid\\LinkBlockGridFactory
    arguments:
      \$translator: '@translator'
      \$hookDispatcher: '@prestashop.core.hook.dispatcher'
      \$dataFactory: '@prestashop.module.link_block.grid.data_factory'
      \$filterFormFactory: '@prestashop.core.grid.filter.form_factory'
      \$shopContext: '@prestashop.adapter.shop.context'

  # Grid position definition
  prestashop.module.link_block.grid.position_definition:
    class: 'PrestaShop\\PrestaShop\\Core\\Grid\\Position\\PositionDefinition'
    arguments:
      \$table: 'link_block'
      \$idField: 'id_link_block'
      \$positionField: 'position'
      \$parentIdField: 'id_hook'

  # Link block form data provider
  prestashop.module.link_block.form_provider:
    class: PrestaShop\\Module\\LinkList\\Form\\LinkBlockFormDataProvider
    arguments:
      \$repository: '@prestashop.module.link_block.repository'
      \$cache: '@prestashop.module.link_block.cache'
      \$languages: '@=service(\"prestashop.adapter.legacy.context\").getLanguages(false, service(\"prestashop.adapter.shop.context\").getContextShopID())'
      \$shopContext: '@prestashop.adapter.shop.context'
      \$configuration: '@prestashop.adapter.legacy.configuration'

  # Form choices providers
  prestashop.module.link_block.choice_provider.hook:
    class: PrestaShop\\Module\\LinkList\\Form\\ChoiceProvider\\HookChoiceProvider
    arguments:
      \$connection: '@doctrine.dbal.default_connection'
      \$dbPrefix: '%database_prefix%'

  prestashop.module.link_block.choice_provider.cms_category:
    class: PrestaShop\\Module\\LinkList\\Form\\ChoiceProvider\\CMSCategoryChoiceProvider
    arguments:
      \$connection: '@doctrine.dbal.default_connection'
      \$dbPrefix: '%database_prefix%'
      \$idLang: '@=service(\"prestashop.adapter.legacy.context\").getLanguage().id'
      \$shopIds: '@=service(\"prestashop.adapter.shop.context\").getContextListShopID()'

  prestashop.module.link_block.choice_provider.category:
    class: PrestaShop\\Module\\LinkList\\Form\\ChoiceProvider\\CategoryChoiceProvider
    arguments:
      \$connection: '@doctrine.dbal.default_connection'
      \$dbPrefix: '%database_prefix%'
      \$idLang: '@=service(\"prestashop.adapter.legacy.context\").getLanguage().id'
      \$shopIds: '@=service(\"prestashop.adapter.shop.context\").getContextListShopID()'

  prestashop.module.link_block.choice_provider.cms_page:
    class: PrestaShop\\Module\\LinkList\\Form\\ChoiceProvider\\CMSPageChoiceProvider
    arguments:
      \$connection: '@doctrine.dbal.default_connection'
      \$dbPrefix: '%database_prefix%'
      \$categories: '@=service(\"prestashop.module.link_block.choice_provider.cms_category\").getChoices()'
      \$idLang: '@=service(\"prestashop.adapter.legacy.context\").getLanguage().id'
      \$shopIds: '@=service(\"prestashop.adapter.shop.context\").getContextListShopID()'

  prestashop.module.link_block.choice_provider.product_page:
    class: PrestaShop\\Module\\LinkList\\Form\\ChoiceProvider\\PageChoiceProvider
    arguments:
      \$connection: '@doctrine.dbal.default_connection'
      \$dbPrefix: '%database_prefix%'
      \$idLang: '@=service(\"prestashop.adapter.legacy.context\").getLanguage().id'
      \$shopIds: '@=service(\"prestashop.adapter.shop.context\").getContextListShopID()'
      \$pageNames:
        - 'prices-drop'
        - 'new-products'
        - 'best-sales'

  prestashop.module.link_block.choice_provider.static_page:
    class: PrestaShop\\Module\\LinkList\\Form\\ChoiceProvider\\PageChoiceProvider
    arguments:
      \$connection: '@doctrine.dbal.default_connection'
      \$dbPrefix: '%database_prefix%'
      \$idLang: '@=service(\"prestashop.adapter.legacy.context\").getLanguage().id'
      \$shopIds: '@=service(\"prestashop.adapter.shop.context\").getContextListShopID()'
      \$pageNames:
        - 'contact'
        - 'sitemap'
        - 'stores'
        - 'authentication'
        - 'registration'
        - 'my-account'

  # Form types
  prestashop.module.link_block.form_type:
    class: PrestaShop\\Module\\LinkList\\Form\\Type\\LinkBlockType
    parent: 'form.type.translatable.aware'
    public: true
    arguments:
      \$hookChoices: '@=service(\"prestashop.module.link_block.choice_provider.hook\").getChoices()'
      \$cmsPageChoices: '@=service(\"prestashop.module.link_block.choice_provider.cms_page\").getChoices()'
      \$productPageChoices: '@=service(\"prestashop.module.link_block.choice_provider.product_page\").getChoices()'
      \$staticPageChoices: '@=service(\"prestashop.module.link_block.choice_provider.static_page\").getChoices()'
      \$categoryChoices: '@=service(\"prestashop.module.link_block.choice_provider.category\").getChoices()'
      \$isMultiStoreUsed: '@=service(\"prestashop.adapter.feature.multistore\").isUsed()'
    tags:
      - { name: form.type }

  prestashop.module.link_block.custom_url_type:
    class: PrestaShop\\Module\\LinkList\\Form\\Type\\CustomUrlType
    parent: 'form.type.translatable.aware'
    public: true
    tags:
    - { name: form.type }

  # Link block form handler
  prestashop.module.link_block.form_handler:
    class: 'PrestaShop\\PrestaShop\\Core\\Form\\FormHandler'
    arguments:
      \$formBuilder: '@=service(\"form.factory\").createBuilder()'
      \$hookDispatcher: '@prestashop.core.hook.dispatcher'
      \$formDataProvider: '@prestashop.module.link_block.form_provider'
      \$formTypes:
        'link_block': 'PrestaShop\\Module\\LinkList\\Form\\Type\\LinkBlockType'
      \$hookName: 'AdminLinkWidget'

  prestashop.module.link_block.adapter.object_model_handler:
    class: 'PrestaShop\\Module\\LinkList\\Adapter\\ObjectModelHandler'

  PrestaShop\\Module\\LinkList\\Form\\Type\\TranslateCustomUrlType:
    parent: 'form.type.translatable.aware'
    public: true
    arguments:
      - \"@=service('prestashop.adapter.legacy.context').getAvailableLanguages()\"
      - '@router.default'
      - \"@=service('prestashop.adapter.legacy.configuration').getBoolean('PS_BO_ALLOW_EMPLOYEE_FORM_LANG')\"
      - \"@=service('prestashop.adapter.legacy.context').getContext().cookie.employee_form_lang\"
      - \"@=service('prestashop.adapter.legacy.configuration').getInt('PS_LANG_DEFAULT')\"
    tags:
      - { name: form.type }
", "@Modules/ps_linklist/config/services.yml", "/var/www/html/modules/ps_linklist/config/services.yml");
    }
}
