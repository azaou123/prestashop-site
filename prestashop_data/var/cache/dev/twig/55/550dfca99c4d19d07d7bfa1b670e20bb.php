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

/* @Modules/ps_facetedsearch/src/Adapter/InterfaceAdapter.php */
class __TwigTemplate_c6bca53718b45c68ef6061c8102fa867 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_facetedsearch/src/Adapter/InterfaceAdapter.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_facetedsearch/src/Adapter/InterfaceAdapter.php"));

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

namespace PrestaShop\\Module\\FacetedSearch\\Adapter;

interface InterfaceAdapter
{
    /**
     * Set order by field
     *
     * @param string \$fieldName
     *
     * @return self
     */
    public function setOrderField(\$fieldName);

    /**
     * Set the order by direction for the given field
     *
     * @param string \$direction
     *
     * @return self
     */
    public function setOrderDirection(\$direction);

    /**
     * Execute the search
     *
     * @return mixed
     */
    public function execute();

    /**
     * Get the current query
     *
     * @return string
     */
    public function getQuery();

    /**
     * Get the min & max value of the field filedName associated with the current search
     *
     * @param string \$fieldName
     *
     * @return mixed
     */
    public function getMinMaxValue(\$fieldName);

    /**
     * Get the min & max value of the price associated with the current search
     *
     * @return array
     */
    public function getMinMaxPriceValue();

    /**
     * Return order direction associated with the current search
     *
     * @return mixed
     */
    public function getOrderDirection();

    /**
     * Return order field associated with the current search
     *
     * @return mixed
     */
    public function getOrderField();

    /**
     * Return all group fields associated with the current search
     *
     * @return mixed
     */
    public function getGroupFields();

    /**
     * Return all selected fields associated with the current search
     *
     * @return mixed
     */
    public function getSelectFields();

    /**
     * Return all the filters associated with the current search
     *
     * @return mixed
     */
    public function getFilters();

    /**
     * Return all the operations filters associated with the current search
     *
     * @return mixed
     */
    public function getOperationsFilters();

    /**
     * Return the number of results associated for the current search
     *
     * @return int
     */
    public function count();

    /**
     * Move the current search into the \"initialPopulation\"
     * This initialPopulation will be used to generate the first derived table 'FROM (SELECT ...)' in the final query
     * e.g. : SELECT ... FROM (initialPopulation) p JOIN ....
     */
    public function useFiltersAsInitialPopulation();

    /**
     * Create a new SearchAdapter, keeping the initialPopulation of the current Search
     *
     * @param string \$resetFilter reset this filter inside the initialPopulation
     * @param bool \$skipInitialPopulation if enable, do not copy the initialPopulation filter
     *
     * @return InterfaceAdapter
     */
    public function getFilteredSearchAdapter(\$resetFilter = null, \$skipInitialPopulation = false);

    /**
     * Add a new filter with filterName, operator & values to the current search
     * If several values are provided with the = operator, it's converted automatically to a IN () in the final query
     *
     * @param string \$filterName
     * @param array \$values
     * @param string \$operator
     *
     * @return self
     */
    public function addFilter(\$filterName, \$values, \$operator = '=');

    /**
     * Add a stack of operations with filterName. Operations must contains filterName, values and to the current search
     *
     * @param string \$filterName
     * @param array \$operations
     *
     * @return self
     */
    public function addOperationsFilter(\$filterName, array \$operations);

    /**
     * Add fieldName in the current search result. If the field already exists, it's skipped.
     *
     * @param string \$fieldName
     *
     * @return self
     */
    public function addSelectField(\$fieldName);

    /**
     * Returns the number of distinct products, group by fieldName values
     *
     * @param string \$fieldName
     *
     * @return mixed
     */
    public function valueCount(\$fieldName = null);

    /**
     * Reset the operations filters
     *
     * @return self
     */
    public function resetOperationsFilters();

    /**
     * Reset the operations filter for the given filterName
     *
     * @param string \$filterName
     *
     * @return self
     */
    public function resetOperationsFilter(\$filterName);

    /**
     * Reset the filter for the given filterName
     *
     * @param string \$filterName
     *
     * @return self
     */
    public function resetFilter(\$filterName);

    /**
     * Return the filter associated with filterName
     *
     * @param string \$filterName
     *
     * @return mixed
     */
    public function getFilter(\$filterName);

    /**
     * Set the filterName to the given array value
     *
     * @param string \$filterName
     * @param mixed \$value
     *
     * @return mixed
     */
    public function setFilter(\$filterName, \$value);

    /**
     * Return the current initialPopulation
     *
     * @return self|null
     */
    public function getInitialPopulation();

    /**
     * Return all the filters / groupFields / selectFields
     *
     * @return self
     */
    public function resetAll();

    /**
     * Copy all the filters & operationsFilters from adapter to the current search
     *
     * @param InterfaceAdapter \$adapter
     */
    public function copyFilters(InterfaceAdapter \$adapter);

    /**
     * Set all the select fields
     *
     * @param array \$selectFields
     *
     * @return self
     */
    public function setSelectFields(\$selectFields);

    /**
     * Reset all the select fields
     *
     * @return self
     */
    public function resetSelectField();

    /**
     * Add a group by field
     *
     * @param string \$groupField
     *
     * @return self
     */
    public function addGroupBy(\$groupField);

    /**
     * Set the group by fields
     *
     * @param array \$groupFields
     *
     * @return self
     */
    public function setGroupFields(\$groupFields);

    /**
     * Reset the group by conditions
     *
     * @return self
     */
    public function resetGroupBy();
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_facetedsearch/src/Adapter/InterfaceAdapter.php";
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

namespace PrestaShop\\Module\\FacetedSearch\\Adapter;

interface InterfaceAdapter
{
    /**
     * Set order by field
     *
     * @param string \$fieldName
     *
     * @return self
     */
    public function setOrderField(\$fieldName);

    /**
     * Set the order by direction for the given field
     *
     * @param string \$direction
     *
     * @return self
     */
    public function setOrderDirection(\$direction);

    /**
     * Execute the search
     *
     * @return mixed
     */
    public function execute();

    /**
     * Get the current query
     *
     * @return string
     */
    public function getQuery();

    /**
     * Get the min & max value of the field filedName associated with the current search
     *
     * @param string \$fieldName
     *
     * @return mixed
     */
    public function getMinMaxValue(\$fieldName);

    /**
     * Get the min & max value of the price associated with the current search
     *
     * @return array
     */
    public function getMinMaxPriceValue();

    /**
     * Return order direction associated with the current search
     *
     * @return mixed
     */
    public function getOrderDirection();

    /**
     * Return order field associated with the current search
     *
     * @return mixed
     */
    public function getOrderField();

    /**
     * Return all group fields associated with the current search
     *
     * @return mixed
     */
    public function getGroupFields();

    /**
     * Return all selected fields associated with the current search
     *
     * @return mixed
     */
    public function getSelectFields();

    /**
     * Return all the filters associated with the current search
     *
     * @return mixed
     */
    public function getFilters();

    /**
     * Return all the operations filters associated with the current search
     *
     * @return mixed
     */
    public function getOperationsFilters();

    /**
     * Return the number of results associated for the current search
     *
     * @return int
     */
    public function count();

    /**
     * Move the current search into the \"initialPopulation\"
     * This initialPopulation will be used to generate the first derived table 'FROM (SELECT ...)' in the final query
     * e.g. : SELECT ... FROM (initialPopulation) p JOIN ....
     */
    public function useFiltersAsInitialPopulation();

    /**
     * Create a new SearchAdapter, keeping the initialPopulation of the current Search
     *
     * @param string \$resetFilter reset this filter inside the initialPopulation
     * @param bool \$skipInitialPopulation if enable, do not copy the initialPopulation filter
     *
     * @return InterfaceAdapter
     */
    public function getFilteredSearchAdapter(\$resetFilter = null, \$skipInitialPopulation = false);

    /**
     * Add a new filter with filterName, operator & values to the current search
     * If several values are provided with the = operator, it's converted automatically to a IN () in the final query
     *
     * @param string \$filterName
     * @param array \$values
     * @param string \$operator
     *
     * @return self
     */
    public function addFilter(\$filterName, \$values, \$operator = '=');

    /**
     * Add a stack of operations with filterName. Operations must contains filterName, values and to the current search
     *
     * @param string \$filterName
     * @param array \$operations
     *
     * @return self
     */
    public function addOperationsFilter(\$filterName, array \$operations);

    /**
     * Add fieldName in the current search result. If the field already exists, it's skipped.
     *
     * @param string \$fieldName
     *
     * @return self
     */
    public function addSelectField(\$fieldName);

    /**
     * Returns the number of distinct products, group by fieldName values
     *
     * @param string \$fieldName
     *
     * @return mixed
     */
    public function valueCount(\$fieldName = null);

    /**
     * Reset the operations filters
     *
     * @return self
     */
    public function resetOperationsFilters();

    /**
     * Reset the operations filter for the given filterName
     *
     * @param string \$filterName
     *
     * @return self
     */
    public function resetOperationsFilter(\$filterName);

    /**
     * Reset the filter for the given filterName
     *
     * @param string \$filterName
     *
     * @return self
     */
    public function resetFilter(\$filterName);

    /**
     * Return the filter associated with filterName
     *
     * @param string \$filterName
     *
     * @return mixed
     */
    public function getFilter(\$filterName);

    /**
     * Set the filterName to the given array value
     *
     * @param string \$filterName
     * @param mixed \$value
     *
     * @return mixed
     */
    public function setFilter(\$filterName, \$value);

    /**
     * Return the current initialPopulation
     *
     * @return self|null
     */
    public function getInitialPopulation();

    /**
     * Return all the filters / groupFields / selectFields
     *
     * @return self
     */
    public function resetAll();

    /**
     * Copy all the filters & operationsFilters from adapter to the current search
     *
     * @param InterfaceAdapter \$adapter
     */
    public function copyFilters(InterfaceAdapter \$adapter);

    /**
     * Set all the select fields
     *
     * @param array \$selectFields
     *
     * @return self
     */
    public function setSelectFields(\$selectFields);

    /**
     * Reset all the select fields
     *
     * @return self
     */
    public function resetSelectField();

    /**
     * Add a group by field
     *
     * @param string \$groupField
     *
     * @return self
     */
    public function addGroupBy(\$groupField);

    /**
     * Set the group by fields
     *
     * @param array \$groupFields
     *
     * @return self
     */
    public function setGroupFields(\$groupFields);

    /**
     * Reset the group by conditions
     *
     * @return self
     */
    public function resetGroupBy();
}
", "@Modules/ps_facetedsearch/src/Adapter/InterfaceAdapter.php", "/var/www/html/modules/ps_facetedsearch/src/Adapter/InterfaceAdapter.php");
    }
}
