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

/* @Modules/ps_facetedsearch/src/Adapter/AbstractAdapter.php */
class __TwigTemplate_6997e4b9b9501e58d630a0c63a522b72 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_facetedsearch/src/Adapter/AbstractAdapter.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_facetedsearch/src/Adapter/AbstractAdapter.php"));

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

use Doctrine\\Common\\Collections\\ArrayCollection;

abstract class AbstractAdapter implements InterfaceAdapter
{
    /**
     * @var ArrayCollection
     */
    protected \$filters;

    /**
     * @var ArrayCollection
     */
    protected \$operationsFilters;

    /**
     * @var ArrayCollection
     */
    protected \$selectFields;

    /**
     * @var ArrayCollection
     */
    protected \$groupFields;

    protected \$orderField = 'id_product';

    protected \$orderDirection = 'DESC';

    /** @var InterfaceAdapter */
    protected \$initialPopulation = null;

    public function __construct()
    {
        \$this->groupFields = new ArrayCollection();
        \$this->selectFields = new ArrayCollection();
        \$this->filters = new ArrayCollection();
        \$this->operationsFilters = new ArrayCollection();
    }

    public function __clone()
    {
        \$this->filters = clone \$this->filters;
        \$this->operationsFilters = clone \$this->operationsFilters;
        \$this->groupFields = clone \$this->groupFields;
        \$this->selectFields = clone \$this->selectFields;
    }

    /**
     * {@inheritdoc}
     */
    public function getInitialPopulation()
    {
        return \$this->initialPopulation;
    }

    /**
     * {@inheritdoc}
     */
    public function resetFilter(\$filterName)
    {
        if (\$this->filters->offsetExists(\$filterName)) {
            \$this->filters->offsetUnset(\$filterName);
        }

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function resetOperationsFilter(\$filterName)
    {
        if (\$this->operationsFilters->offsetExists(\$filterName)) {
            \$this->operationsFilters->offsetUnset(\$filterName);
        }

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function resetOperationsFilters()
    {
        \$this->operationsFilters = new ArrayCollection();

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function resetAll()
    {
        \$this->selectFields = new ArrayCollection();
        \$this->groupFields = new ArrayCollection();
        \$this->filters = new ArrayCollection();
        \$this->operationsFilters = new ArrayCollection();

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function getFilter(\$filterName)
    {
        if (isset(\$this->filters[\$filterName])) {
            return \$this->filters[\$filterName];
        }

        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function getOrderDirection()
    {
        return \$this->orderDirection;
    }

    /**
     * {@inheritdoc}
     */
    public function getOrderField()
    {
        return \$this->orderField;
    }

    /**
     * {@inheritdoc}
     */
    public function getGroupFields()
    {
        return \$this->groupFields;
    }

    /**
     * {@inheritdoc}
     */
    public function getSelectFields()
    {
        return \$this->selectFields;
    }

    /**
     * {@inheritdoc}
     */
    public function getFilters()
    {
        return \$this->filters;
    }

    /**
     * {@inheritdoc}
     */
    public function getOperationsFilters()
    {
        return \$this->operationsFilters;
    }

    /**
     * {@inheritdoc}
     */
    public function copyFilters(InterfaceAdapter \$adapter)
    {
        \$this->filters = clone \$adapter->getFilters();
        \$this->operationsFilters = clone \$adapter->getOperationsFilters();
    }

    /**
     * {@inheritdoc}
     */
    public function addFilter(\$filterName, \$values, \$operator = '=')
    {
        \$filters = \$this->filters->get(\$filterName);
        if (!isset(\$filters[\$operator])) {
            \$filters[\$operator] = [];
        }

        \$filters[\$operator][] = \$values;
        \$this->filters->set(\$filterName, \$filters);

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function addOperationsFilter(\$filterName, array \$operations = [])
    {
        \$this->operationsFilters->set(\$filterName, \$operations);

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function addSelectField(\$fieldName)
    {
        if (!\$this->selectFields->contains(\$fieldName)) {
            \$this->selectFields->add(\$fieldName);
        }

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function setSelectFields(\$selectFields)
    {
        \$this->selectFields = new ArrayCollection(\$selectFields);

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function resetSelectField()
    {
        \$this->selectFields = new ArrayCollection();

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function addGroupBy(\$groupField)
    {
        \$this->groupFields->add(\$groupField);

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function setGroupFields(\$groupFields)
    {
        \$this->groupFields = new ArrayCollection(\$groupFields);

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function resetGroupBy()
    {
        \$this->groupFields = new ArrayCollection();

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function setFilter(\$filterName, \$value)
    {
        if (\$value !== null) {
            \$this->filters->set(\$filterName, \$value);
        }

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function setOrderField(\$fieldName)
    {
        \$this->orderField = \$fieldName;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function setOrderDirection(\$direction)
    {
        \$this->orderDirection = \$direction === 'desc' ? 'desc' : 'asc';

        return \$this;
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_facetedsearch/src/Adapter/AbstractAdapter.php";
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

use Doctrine\\Common\\Collections\\ArrayCollection;

abstract class AbstractAdapter implements InterfaceAdapter
{
    /**
     * @var ArrayCollection
     */
    protected \$filters;

    /**
     * @var ArrayCollection
     */
    protected \$operationsFilters;

    /**
     * @var ArrayCollection
     */
    protected \$selectFields;

    /**
     * @var ArrayCollection
     */
    protected \$groupFields;

    protected \$orderField = 'id_product';

    protected \$orderDirection = 'DESC';

    /** @var InterfaceAdapter */
    protected \$initialPopulation = null;

    public function __construct()
    {
        \$this->groupFields = new ArrayCollection();
        \$this->selectFields = new ArrayCollection();
        \$this->filters = new ArrayCollection();
        \$this->operationsFilters = new ArrayCollection();
    }

    public function __clone()
    {
        \$this->filters = clone \$this->filters;
        \$this->operationsFilters = clone \$this->operationsFilters;
        \$this->groupFields = clone \$this->groupFields;
        \$this->selectFields = clone \$this->selectFields;
    }

    /**
     * {@inheritdoc}
     */
    public function getInitialPopulation()
    {
        return \$this->initialPopulation;
    }

    /**
     * {@inheritdoc}
     */
    public function resetFilter(\$filterName)
    {
        if (\$this->filters->offsetExists(\$filterName)) {
            \$this->filters->offsetUnset(\$filterName);
        }

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function resetOperationsFilter(\$filterName)
    {
        if (\$this->operationsFilters->offsetExists(\$filterName)) {
            \$this->operationsFilters->offsetUnset(\$filterName);
        }

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function resetOperationsFilters()
    {
        \$this->operationsFilters = new ArrayCollection();

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function resetAll()
    {
        \$this->selectFields = new ArrayCollection();
        \$this->groupFields = new ArrayCollection();
        \$this->filters = new ArrayCollection();
        \$this->operationsFilters = new ArrayCollection();

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function getFilter(\$filterName)
    {
        if (isset(\$this->filters[\$filterName])) {
            return \$this->filters[\$filterName];
        }

        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function getOrderDirection()
    {
        return \$this->orderDirection;
    }

    /**
     * {@inheritdoc}
     */
    public function getOrderField()
    {
        return \$this->orderField;
    }

    /**
     * {@inheritdoc}
     */
    public function getGroupFields()
    {
        return \$this->groupFields;
    }

    /**
     * {@inheritdoc}
     */
    public function getSelectFields()
    {
        return \$this->selectFields;
    }

    /**
     * {@inheritdoc}
     */
    public function getFilters()
    {
        return \$this->filters;
    }

    /**
     * {@inheritdoc}
     */
    public function getOperationsFilters()
    {
        return \$this->operationsFilters;
    }

    /**
     * {@inheritdoc}
     */
    public function copyFilters(InterfaceAdapter \$adapter)
    {
        \$this->filters = clone \$adapter->getFilters();
        \$this->operationsFilters = clone \$adapter->getOperationsFilters();
    }

    /**
     * {@inheritdoc}
     */
    public function addFilter(\$filterName, \$values, \$operator = '=')
    {
        \$filters = \$this->filters->get(\$filterName);
        if (!isset(\$filters[\$operator])) {
            \$filters[\$operator] = [];
        }

        \$filters[\$operator][] = \$values;
        \$this->filters->set(\$filterName, \$filters);

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function addOperationsFilter(\$filterName, array \$operations = [])
    {
        \$this->operationsFilters->set(\$filterName, \$operations);

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function addSelectField(\$fieldName)
    {
        if (!\$this->selectFields->contains(\$fieldName)) {
            \$this->selectFields->add(\$fieldName);
        }

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function setSelectFields(\$selectFields)
    {
        \$this->selectFields = new ArrayCollection(\$selectFields);

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function resetSelectField()
    {
        \$this->selectFields = new ArrayCollection();

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function addGroupBy(\$groupField)
    {
        \$this->groupFields->add(\$groupField);

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function setGroupFields(\$groupFields)
    {
        \$this->groupFields = new ArrayCollection(\$groupFields);

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function resetGroupBy()
    {
        \$this->groupFields = new ArrayCollection();

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function setFilter(\$filterName, \$value)
    {
        if (\$value !== null) {
            \$this->filters->set(\$filterName, \$value);
        }

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function setOrderField(\$fieldName)
    {
        \$this->orderField = \$fieldName;

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function setOrderDirection(\$direction)
    {
        \$this->orderDirection = \$direction === 'desc' ? 'desc' : 'asc';

        return \$this;
    }
}
", "@Modules/ps_facetedsearch/src/Adapter/AbstractAdapter.php", "/var/www/html/modules/ps_facetedsearch/src/Adapter/AbstractAdapter.php");
    }
}
