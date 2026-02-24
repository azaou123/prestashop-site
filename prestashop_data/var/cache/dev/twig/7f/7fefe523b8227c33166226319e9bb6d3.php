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

/* @Modules/ps_facetedsearch/src/Hook/Category.php */
class __TwigTemplate_360a233a7f04663bcdbc37d5a1a05ba2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_facetedsearch/src/Hook/Category.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_facetedsearch/src/Hook/Category.php"));

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
use Tools;

class Category extends AbstractHook
{
    const AVAILABLE_HOOKS = [
        'actionCategoryAdd',
        'actionCategoryDelete',
        'actionCategoryUpdate',
    ];

    /**
     * Category addition
     *
     * @param array \$params
     */
    public function actionCategoryAdd(array \$params)
    {
        \$this->addCategoryToDefaultFilter((int) \$params['category']->id);

        // Flush filter block cache in all cases, so a new category shows up
        \$this->module->invalidateLayeredFilterBlockCache();
    }

    /**
     * Category update
     *
     * @param array \$params
     */
    public function actionCategoryUpdate(array \$params)
    {
        /*
         * The category status might (active, inactive) have changed,
         * we have to update the layered cache table structure.
         */
        if (isset(\$params['category']) && !\$params['category']->active) {
            \$this->removeCategoryFromFilterTemplates((int) \$params['category']->id);
        }
    }

    /**
     * Category deletion
     *
     * @param array \$params
     */
    public function actionCategoryDelete(array \$params)
    {
        \$this->removeCategoryFromFilterTemplates((int) \$params['category']->id);
    }

    /**
     * Clean and rebuild category filters
     *
     * @param int \$idCategory
     */
    private function removeCategoryFromFilterTemplates(int \$idCategory)
    {
        // Get all filter templates
        \$filterTemplates = \$this->database->executeS(
            'SELECT * FROM ' . _DB_PREFIX_ . 'layered_filter'
        );

        \$rebuildNeeded = false;

        // Go through each template, check if our category is set for this template.
        // If yes, remove it and update the template.
        foreach (\$filterTemplates as \$template) {
            \$filters = Tools::unSerialize(\$template['filters']);
            if (!in_array((int) \$idCategory, \$filters['categories'])) {
                continue;
            }
            unset(\$filters['categories'][array_search((int) \$idCategory, \$filters['categories'])]);
            \$rebuildNeeded = true;
            \$this->database->execute(
                'UPDATE `' . _DB_PREFIX_ . 'layered_filter` 
                SET `filters` = \"' . pSQL(serialize(\$filters)) . '\", 
                n_categories = ' . (int) count(\$filters['categories']) . ' 
                WHERE `id_layered_filter` = ' . (int) \$template['id_layered_filter']
            );
        }

        // Rebuild filter table only if a category was removed from a filter
        if (\$rebuildNeeded) {
            \$this->module->buildLayeredCategories();
        }

        // Flush cache all the time, because the category could be cached in a category filter block
        \$this->module->invalidateLayeredFilterBlockCache();
    }

    /**
     * Checks if module is configured to automatically add some filter to new categories.
     * If so, it adds the new category.
     *
     * @param int \$idCategory ID of category being created
     */
    public function addCategoryToDefaultFilter(int \$idCategory)
    {
        // Get default template
        \$defaultFilterTemplateId = (int) Configuration::get('PS_LAYERED_DEFAULT_CATEGORY_TEMPLATE');
        if (empty(\$defaultFilterTemplateId)) {
            return;
        }

        // Try to get it's data
        \$template = \$this->module->getFilterTemplate(\$defaultFilterTemplateId);
        if (empty(\$template)) {
            return;
        }

        // Unserialize filters, add our category
        \$filters = Tools::unSerialize(\$template['filters']);
        \$filters['categories'][] = \$idCategory;

        // Update it in database
        \$this->database->execute(
            'UPDATE `' . _DB_PREFIX_ . 'layered_filter` 
            SET `filters` = \"' . pSQL(serialize(\$filters)) . '\", 
            n_categories = ' . (int) count(\$filters['categories']) . ' 
            WHERE `id_layered_filter` = ' . \$defaultFilterTemplateId
        );

        \$this->module->buildLayeredCategories();
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_facetedsearch/src/Hook/Category.php";
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
use Tools;

class Category extends AbstractHook
{
    const AVAILABLE_HOOKS = [
        'actionCategoryAdd',
        'actionCategoryDelete',
        'actionCategoryUpdate',
    ];

    /**
     * Category addition
     *
     * @param array \$params
     */
    public function actionCategoryAdd(array \$params)
    {
        \$this->addCategoryToDefaultFilter((int) \$params['category']->id);

        // Flush filter block cache in all cases, so a new category shows up
        \$this->module->invalidateLayeredFilterBlockCache();
    }

    /**
     * Category update
     *
     * @param array \$params
     */
    public function actionCategoryUpdate(array \$params)
    {
        /*
         * The category status might (active, inactive) have changed,
         * we have to update the layered cache table structure.
         */
        if (isset(\$params['category']) && !\$params['category']->active) {
            \$this->removeCategoryFromFilterTemplates((int) \$params['category']->id);
        }
    }

    /**
     * Category deletion
     *
     * @param array \$params
     */
    public function actionCategoryDelete(array \$params)
    {
        \$this->removeCategoryFromFilterTemplates((int) \$params['category']->id);
    }

    /**
     * Clean and rebuild category filters
     *
     * @param int \$idCategory
     */
    private function removeCategoryFromFilterTemplates(int \$idCategory)
    {
        // Get all filter templates
        \$filterTemplates = \$this->database->executeS(
            'SELECT * FROM ' . _DB_PREFIX_ . 'layered_filter'
        );

        \$rebuildNeeded = false;

        // Go through each template, check if our category is set for this template.
        // If yes, remove it and update the template.
        foreach (\$filterTemplates as \$template) {
            \$filters = Tools::unSerialize(\$template['filters']);
            if (!in_array((int) \$idCategory, \$filters['categories'])) {
                continue;
            }
            unset(\$filters['categories'][array_search((int) \$idCategory, \$filters['categories'])]);
            \$rebuildNeeded = true;
            \$this->database->execute(
                'UPDATE `' . _DB_PREFIX_ . 'layered_filter` 
                SET `filters` = \"' . pSQL(serialize(\$filters)) . '\", 
                n_categories = ' . (int) count(\$filters['categories']) . ' 
                WHERE `id_layered_filter` = ' . (int) \$template['id_layered_filter']
            );
        }

        // Rebuild filter table only if a category was removed from a filter
        if (\$rebuildNeeded) {
            \$this->module->buildLayeredCategories();
        }

        // Flush cache all the time, because the category could be cached in a category filter block
        \$this->module->invalidateLayeredFilterBlockCache();
    }

    /**
     * Checks if module is configured to automatically add some filter to new categories.
     * If so, it adds the new category.
     *
     * @param int \$idCategory ID of category being created
     */
    public function addCategoryToDefaultFilter(int \$idCategory)
    {
        // Get default template
        \$defaultFilterTemplateId = (int) Configuration::get('PS_LAYERED_DEFAULT_CATEGORY_TEMPLATE');
        if (empty(\$defaultFilterTemplateId)) {
            return;
        }

        // Try to get it's data
        \$template = \$this->module->getFilterTemplate(\$defaultFilterTemplateId);
        if (empty(\$template)) {
            return;
        }

        // Unserialize filters, add our category
        \$filters = Tools::unSerialize(\$template['filters']);
        \$filters['categories'][] = \$idCategory;

        // Update it in database
        \$this->database->execute(
            'UPDATE `' . _DB_PREFIX_ . 'layered_filter` 
            SET `filters` = \"' . pSQL(serialize(\$filters)) . '\", 
            n_categories = ' . (int) count(\$filters['categories']) . ' 
            WHERE `id_layered_filter` = ' . \$defaultFilterTemplateId
        );

        \$this->module->buildLayeredCategories();
    }
}
", "@Modules/ps_facetedsearch/src/Hook/Category.php", "/var/www/html/modules/ps_facetedsearch/src/Hook/Category.php");
    }
}
