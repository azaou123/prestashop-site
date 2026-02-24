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

/* @Modules/ps_facetedsearch/src/Hook/ProductSearch.php */
class __TwigTemplate_2a2d6c40b1a3a80cec4ee71fac0843d7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_facetedsearch/src/Hook/ProductSearch.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_facetedsearch/src/Hook/ProductSearch.php"));

        // line 1
        echo "<?php
/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 */

namespace PrestaShop\\Module\\FacetedSearch\\Hook;

use Configuration;
use PrestaShop\\Module\\FacetedSearch\\Filters\\Converter;
use PrestaShop\\Module\\FacetedSearch\\Filters\\DataAccessor;
use PrestaShop\\Module\\FacetedSearch\\Filters\\Provider;
use PrestaShop\\Module\\FacetedSearch\\Product\\SearchFactory;
use PrestaShop\\Module\\FacetedSearch\\Product\\SearchProvider;
use PrestaShop\\Module\\FacetedSearch\\URLSerializer;
use PrestaShop\\PrestaShop\\Core\\Product\\Search\\ProductSearchQuery;
use PrestaShop\\PrestaShop\\Core\\Product\\Search\\SortOrder;

class ProductSearch extends AbstractHook
{
    const AVAILABLE_HOOKS = [
        'productSearchProvider',
    ];

    /**
     * This method returns the search provider to the controller who requested it.
     *
     * @param array \$params
     *
     * @return SearchProvider|null
     */
    public function productSearchProvider(array \$params)
    {
        /*
         * Backward compatibility, required for versions < 8.0
         * We need to assign missing queryType to some controllers, which don't report it.
         * Remove when module minimum compatibility reaches 8.0.
         */
        if (empty(\$params['query']->getQueryType())) {
            \$params['query'] = \$this->assignMissingQueryType(\$params['query']);
        }

        /*
         * Check if the type of query (controller) is supported by our module. If not, we
         * let the core do the search.
         */
        if (\$this->module->isControllerSupported(\$params['query']->getQueryType()) === false) {
            return null;
        }

        // Initialize provider, we will need it right away to check if there are filters setup
        \$provider = new Provider(\$this->module->getDatabase());

        /*
         * If search controller is not specifically enabled, we don't return the instance.
         * This condition will be removed when search controller support is fully implemented.
         */
        if (\$params['query']->getQueryType() === 'search'
            && empty(\$provider->getFiltersForQuery(\$params['query'], (int) \$this->context->shop->id))) {
            return null;
        }

        /*
         * Fix wrong reporting of desired best sales order. BestSalesProductSearchProvider overrides
         * the sort set on the query in BestSalesControllerCore.
         */
        if (\$params['query']->getQueryType() == 'best-sales') {
            \$params['query']->setSortOrder(new SortOrder('product', 'sales', 'desc'));
        }

        // Assign assets
        if ((bool) Configuration::get('PS_USE_JQUERY_UI_SLIDER')) {
            \$this->context->controller->addJqueryUi('ui.slider');
        }
        \$this->context->controller->registerStylesheet(
            'facetedsearch_front',
            '/modules/ps_facetedsearch/views/dist/front.css'
        );
        \$this->context->controller->registerJavascript(
            'facetedsearch_front',
            '/modules/ps_facetedsearch/views/dist/front.js',
            ['position' => 'bottom', 'priority' => 100]
        );

        \$urlSerializer = new URLSerializer();
        \$dataAccessor = new DataAccessor(\$this->module->getDatabase());

        // Return an instance of our searcher, ready to accept requests
        return new SearchProvider(
            \$this->module,
            new Converter(
                \$this->module->getContext(),
                \$this->module->getDatabase(),
                \$urlSerializer,
                \$dataAccessor,
                \$provider
            ),
            \$urlSerializer,
            \$dataAccessor,
            new SearchFactory(),
            \$provider
        );
    }

    /**
     * Assign missing queryType, required for PS versions < 8.0
     *
     * @param ProductSearchQuery \$query
     *
     * @return ProductSearchQuery
     */
    private function assignMissingQueryType(ProductSearchQuery \$query)
    {
        if (!empty(\$query->getIdCategory())) {
            \$query->setQueryType('category');
        } elseif (!empty(\$query->getIdManufacturer())) {
            \$query->setQueryType('manufacturer');
        } elseif (!empty(\$query->getIdSupplier())) {
            \$query->setQueryType('supplier');
        } elseif (!empty(\$query->getSearchString()) || !empty(\$query->getSearchTag())) {
            \$query->setQueryType('search');
        }

        return \$query;
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_facetedsearch/src/Hook/ProductSearch.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 */

namespace PrestaShop\\Module\\FacetedSearch\\Hook;

use Configuration;
use PrestaShop\\Module\\FacetedSearch\\Filters\\Converter;
use PrestaShop\\Module\\FacetedSearch\\Filters\\DataAccessor;
use PrestaShop\\Module\\FacetedSearch\\Filters\\Provider;
use PrestaShop\\Module\\FacetedSearch\\Product\\SearchFactory;
use PrestaShop\\Module\\FacetedSearch\\Product\\SearchProvider;
use PrestaShop\\Module\\FacetedSearch\\URLSerializer;
use PrestaShop\\PrestaShop\\Core\\Product\\Search\\ProductSearchQuery;
use PrestaShop\\PrestaShop\\Core\\Product\\Search\\SortOrder;

class ProductSearch extends AbstractHook
{
    const AVAILABLE_HOOKS = [
        'productSearchProvider',
    ];

    /**
     * This method returns the search provider to the controller who requested it.
     *
     * @param array \$params
     *
     * @return SearchProvider|null
     */
    public function productSearchProvider(array \$params)
    {
        /*
         * Backward compatibility, required for versions < 8.0
         * We need to assign missing queryType to some controllers, which don't report it.
         * Remove when module minimum compatibility reaches 8.0.
         */
        if (empty(\$params['query']->getQueryType())) {
            \$params['query'] = \$this->assignMissingQueryType(\$params['query']);
        }

        /*
         * Check if the type of query (controller) is supported by our module. If not, we
         * let the core do the search.
         */
        if (\$this->module->isControllerSupported(\$params['query']->getQueryType()) === false) {
            return null;
        }

        // Initialize provider, we will need it right away to check if there are filters setup
        \$provider = new Provider(\$this->module->getDatabase());

        /*
         * If search controller is not specifically enabled, we don't return the instance.
         * This condition will be removed when search controller support is fully implemented.
         */
        if (\$params['query']->getQueryType() === 'search'
            && empty(\$provider->getFiltersForQuery(\$params['query'], (int) \$this->context->shop->id))) {
            return null;
        }

        /*
         * Fix wrong reporting of desired best sales order. BestSalesProductSearchProvider overrides
         * the sort set on the query in BestSalesControllerCore.
         */
        if (\$params['query']->getQueryType() == 'best-sales') {
            \$params['query']->setSortOrder(new SortOrder('product', 'sales', 'desc'));
        }

        // Assign assets
        if ((bool) Configuration::get('PS_USE_JQUERY_UI_SLIDER')) {
            \$this->context->controller->addJqueryUi('ui.slider');
        }
        \$this->context->controller->registerStylesheet(
            'facetedsearch_front',
            '/modules/ps_facetedsearch/views/dist/front.css'
        );
        \$this->context->controller->registerJavascript(
            'facetedsearch_front',
            '/modules/ps_facetedsearch/views/dist/front.js',
            ['position' => 'bottom', 'priority' => 100]
        );

        \$urlSerializer = new URLSerializer();
        \$dataAccessor = new DataAccessor(\$this->module->getDatabase());

        // Return an instance of our searcher, ready to accept requests
        return new SearchProvider(
            \$this->module,
            new Converter(
                \$this->module->getContext(),
                \$this->module->getDatabase(),
                \$urlSerializer,
                \$dataAccessor,
                \$provider
            ),
            \$urlSerializer,
            \$dataAccessor,
            new SearchFactory(),
            \$provider
        );
    }

    /**
     * Assign missing queryType, required for PS versions < 8.0
     *
     * @param ProductSearchQuery \$query
     *
     * @return ProductSearchQuery
     */
    private function assignMissingQueryType(ProductSearchQuery \$query)
    {
        if (!empty(\$query->getIdCategory())) {
            \$query->setQueryType('category');
        } elseif (!empty(\$query->getIdManufacturer())) {
            \$query->setQueryType('manufacturer');
        } elseif (!empty(\$query->getIdSupplier())) {
            \$query->setQueryType('supplier');
        } elseif (!empty(\$query->getSearchString()) || !empty(\$query->getSearchTag())) {
            \$query->setQueryType('search');
        }

        return \$query;
    }
}
", "@Modules/ps_facetedsearch/src/Hook/ProductSearch.php", "/var/www/html/modules/ps_facetedsearch/src/Hook/ProductSearch.php");
    }
}
