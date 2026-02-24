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

/* @Modules/statsbestmanufacturers/statsbestmanufacturers.php */
class __TwigTemplate_e6ac8571d59681ebf5073f83709db596 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/statsbestmanufacturers/statsbestmanufacturers.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/statsbestmanufacturers/statsbestmanufacturers.php"));

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
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 */
if (!defined('_PS_VERSION_')) {
    exit;
}

class statsbestmanufacturers extends ModuleGrid
{
    private \$html = null;
    private \$query = null;
    private \$columns = null;
    private \$default_sort_column = null;
    private \$default_sort_direction = null;
    private \$empty_message = null;
    private \$paging_message = null;

    public function __construct()
    {
        \$this->name = 'statsbestmanufacturers';
        \$this->tab = 'administration';
        \$this->version = '2.0.3';
        \$this->author = 'PrestaShop';
        \$this->need_instance = 0;

        parent::__construct();

        \$this->default_sort_column = 'sales';
        \$this->default_sort_direction = 'DESC';
        \$this->empty_message = \$this->trans('Empty recordset returned.', [], 'Admin.Notifications.Info');
        \$this->paging_message = \$this->trans('Displaying %1\$s of %2\$s', ['{0} - {1}', '{2}'], 'Admin.Global');

        \$this->columns = [
            [
                'id' => 'name',
                'header' => \$this->trans('Name', [], 'Admin.Global'),
                'dataIndex' => 'name',
                'align' => 'center',
                'width' => 200,
            ],
            [
                'id' => 'quantity',
                'header' => \$this->trans('Quantity sold', [], 'Admin.Global'),
                'dataIndex' => 'quantity',
                'width' => 60,
                'align' => 'center',
            ],
            [
                'id' => 'sales',
                'header' => \$this->trans('Total paid', [], 'Modules.Statsbestmanufacturers.Admin'),
                'dataIndex' => 'sales',
                'width' => 60,
                'align' => 'center',
            ],
        ];

        \$this->displayName = \$this->trans('Best brands', [], 'Modules.Statsbestmanufacturers.Admin');
        \$this->description = \$this->trans('Enrich your stats: add a list of the best-selling brands to your dashboard.', [], 'Modules.Statsbestmanufacturers.Admin');
        \$this->ps_versions_compliancy = ['min' => '1.7.1.0', 'max' => _PS_VERSION_];
    }

    public function install()
    {
        return parent::install() && \$this->registerHook('displayAdminStatsModules');
    }

    public function hookDisplayAdminStatsModules(\$params)
    {
        \$engine_params = [
            'id' => 'id_category',
            'title' => \$this->displayName,
            'columns' => \$this->columns,
            'defaultSortColumn' => \$this->default_sort_column,
            'defaultSortDirection' => \$this->default_sort_direction,
            'emptyMessage' => \$this->empty_message,
            'pagingMessage' => \$this->paging_message,
        ];

        if (Tools::getValue('export') == 1) {
            \$this->csvExport(\$engine_params);
        }
        \$this->html = '
\t\t\t<div class=\"panel-heading\">
\t\t\t\t' . \$this->displayName . '
\t\t\t</div>
\t\t\t' . \$this->engine(\$engine_params) . '
\t\t\t<a class=\"btn btn-default export-csv\" href=\"' . Tools::safeOutput(\$_SERVER['REQUEST_URI'] . '&export=1') . '\">
\t\t\t\t<i class=\"icon-cloud-upload\"></i> ' . \$this->trans('CSV Export', [], 'Admin.Global') . '
\t\t\t</a>';

        return \$this->html;
    }

    public function getTotalCount()
    {
        \$sql = 'SELECT COUNT(DISTINCT(m.id_manufacturer))
\t\t\t\tFROM ' . _DB_PREFIX_ . 'order_detail od
\t\t\t\tLEFT JOIN ' . _DB_PREFIX_ . 'product p ON (p.id_product = od.product_id)
\t\t\t\tLEFT JOIN ' . _DB_PREFIX_ . 'orders o ON (o.id_order = od.id_order)
\t\t\t\tLEFT JOIN ' . _DB_PREFIX_ . 'manufacturer m ON (m.id_manufacturer = p.id_manufacturer)
\t\t\t\tWHERE o.invoice_date BETWEEN ' . \$this->getDate()
            . Shop::addSqlRestriction(Shop::SHARE_ORDER, 'o') .
            'AND o.valid = 1
\t\t\tAND m.id_manufacturer IS NOT NULL';

        return Db::getInstance()->getValue(\$sql);
    }

    public function getData()
    {
        \$this->_totalCount = \$this->getTotalCount();

        \$this->query = 'SELECT m.name, SUM(od.product_quantity) as quantity, ROUND(SUM(od.product_quantity * od.unit_price_tax_excl) / c.conversion_rate, 2) as sales
\t\t\t\tFROM ' . _DB_PREFIX_ . 'order_detail od
\t\t\t\tLEFT JOIN ' . _DB_PREFIX_ . 'product p ON (p.id_product = od.product_id)
\t\t\t\tLEFT JOIN ' . _DB_PREFIX_ . 'orders o ON (o.id_order = od.id_order)
\t\t\t\tLEFT JOIN ' . _DB_PREFIX_ . 'currency c ON (c.id_currency = o.id_currency)
\t\t\t\tLEFT JOIN ' . _DB_PREFIX_ . 'manufacturer m ON (m.id_manufacturer = p.id_manufacturer)
\t\t\t\tWHERE o.invoice_date BETWEEN ' . \$this->getDate() . '
\t\t\t\t\t' . Shop::addSqlRestriction(Shop::SHARE_ORDER, 'o') . '
\t\t\t\t\tAND o.valid = 1
\t\t\t\t\tAND m.id_manufacturer IS NOT NULL
\t\t\t\tGROUP BY p.id_manufacturer';

        if (Validate::IsName(\$this->_sort)) {
            \$this->query .= ' ORDER BY `' . bqSQL(\$this->_sort) . '`';
            if (isset(\$this->_direction) && Validate::isSortDirection(\$this->_direction)) {
                \$this->query .= ' ' . \$this->_direction;
            }
        }

        if ((\$this->_start === 0 || Validate::IsUnsignedInt(\$this->_start)) && Validate::IsUnsignedInt(\$this->_limit)) {
            \$this->query .= ' LIMIT ' . (int) \$this->_start . ', ' . (int) \$this->_limit;
        }

        \$this->_values = Db::getInstance()->executeS(\$this->query);
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/statsbestmanufacturers/statsbestmanufacturers.php";
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
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 */
if (!defined('_PS_VERSION_')) {
    exit;
}

class statsbestmanufacturers extends ModuleGrid
{
    private \$html = null;
    private \$query = null;
    private \$columns = null;
    private \$default_sort_column = null;
    private \$default_sort_direction = null;
    private \$empty_message = null;
    private \$paging_message = null;

    public function __construct()
    {
        \$this->name = 'statsbestmanufacturers';
        \$this->tab = 'administration';
        \$this->version = '2.0.3';
        \$this->author = 'PrestaShop';
        \$this->need_instance = 0;

        parent::__construct();

        \$this->default_sort_column = 'sales';
        \$this->default_sort_direction = 'DESC';
        \$this->empty_message = \$this->trans('Empty recordset returned.', [], 'Admin.Notifications.Info');
        \$this->paging_message = \$this->trans('Displaying %1\$s of %2\$s', ['{0} - {1}', '{2}'], 'Admin.Global');

        \$this->columns = [
            [
                'id' => 'name',
                'header' => \$this->trans('Name', [], 'Admin.Global'),
                'dataIndex' => 'name',
                'align' => 'center',
                'width' => 200,
            ],
            [
                'id' => 'quantity',
                'header' => \$this->trans('Quantity sold', [], 'Admin.Global'),
                'dataIndex' => 'quantity',
                'width' => 60,
                'align' => 'center',
            ],
            [
                'id' => 'sales',
                'header' => \$this->trans('Total paid', [], 'Modules.Statsbestmanufacturers.Admin'),
                'dataIndex' => 'sales',
                'width' => 60,
                'align' => 'center',
            ],
        ];

        \$this->displayName = \$this->trans('Best brands', [], 'Modules.Statsbestmanufacturers.Admin');
        \$this->description = \$this->trans('Enrich your stats: add a list of the best-selling brands to your dashboard.', [], 'Modules.Statsbestmanufacturers.Admin');
        \$this->ps_versions_compliancy = ['min' => '1.7.1.0', 'max' => _PS_VERSION_];
    }

    public function install()
    {
        return parent::install() && \$this->registerHook('displayAdminStatsModules');
    }

    public function hookDisplayAdminStatsModules(\$params)
    {
        \$engine_params = [
            'id' => 'id_category',
            'title' => \$this->displayName,
            'columns' => \$this->columns,
            'defaultSortColumn' => \$this->default_sort_column,
            'defaultSortDirection' => \$this->default_sort_direction,
            'emptyMessage' => \$this->empty_message,
            'pagingMessage' => \$this->paging_message,
        ];

        if (Tools::getValue('export') == 1) {
            \$this->csvExport(\$engine_params);
        }
        \$this->html = '
\t\t\t<div class=\"panel-heading\">
\t\t\t\t' . \$this->displayName . '
\t\t\t</div>
\t\t\t' . \$this->engine(\$engine_params) . '
\t\t\t<a class=\"btn btn-default export-csv\" href=\"' . Tools::safeOutput(\$_SERVER['REQUEST_URI'] . '&export=1') . '\">
\t\t\t\t<i class=\"icon-cloud-upload\"></i> ' . \$this->trans('CSV Export', [], 'Admin.Global') . '
\t\t\t</a>';

        return \$this->html;
    }

    public function getTotalCount()
    {
        \$sql = 'SELECT COUNT(DISTINCT(m.id_manufacturer))
\t\t\t\tFROM ' . _DB_PREFIX_ . 'order_detail od
\t\t\t\tLEFT JOIN ' . _DB_PREFIX_ . 'product p ON (p.id_product = od.product_id)
\t\t\t\tLEFT JOIN ' . _DB_PREFIX_ . 'orders o ON (o.id_order = od.id_order)
\t\t\t\tLEFT JOIN ' . _DB_PREFIX_ . 'manufacturer m ON (m.id_manufacturer = p.id_manufacturer)
\t\t\t\tWHERE o.invoice_date BETWEEN ' . \$this->getDate()
            . Shop::addSqlRestriction(Shop::SHARE_ORDER, 'o') .
            'AND o.valid = 1
\t\t\tAND m.id_manufacturer IS NOT NULL';

        return Db::getInstance()->getValue(\$sql);
    }

    public function getData()
    {
        \$this->_totalCount = \$this->getTotalCount();

        \$this->query = 'SELECT m.name, SUM(od.product_quantity) as quantity, ROUND(SUM(od.product_quantity * od.unit_price_tax_excl) / c.conversion_rate, 2) as sales
\t\t\t\tFROM ' . _DB_PREFIX_ . 'order_detail od
\t\t\t\tLEFT JOIN ' . _DB_PREFIX_ . 'product p ON (p.id_product = od.product_id)
\t\t\t\tLEFT JOIN ' . _DB_PREFIX_ . 'orders o ON (o.id_order = od.id_order)
\t\t\t\tLEFT JOIN ' . _DB_PREFIX_ . 'currency c ON (c.id_currency = o.id_currency)
\t\t\t\tLEFT JOIN ' . _DB_PREFIX_ . 'manufacturer m ON (m.id_manufacturer = p.id_manufacturer)
\t\t\t\tWHERE o.invoice_date BETWEEN ' . \$this->getDate() . '
\t\t\t\t\t' . Shop::addSqlRestriction(Shop::SHARE_ORDER, 'o') . '
\t\t\t\t\tAND o.valid = 1
\t\t\t\t\tAND m.id_manufacturer IS NOT NULL
\t\t\t\tGROUP BY p.id_manufacturer';

        if (Validate::IsName(\$this->_sort)) {
            \$this->query .= ' ORDER BY `' . bqSQL(\$this->_sort) . '`';
            if (isset(\$this->_direction) && Validate::isSortDirection(\$this->_direction)) {
                \$this->query .= ' ' . \$this->_direction;
            }
        }

        if ((\$this->_start === 0 || Validate::IsUnsignedInt(\$this->_start)) && Validate::IsUnsignedInt(\$this->_limit)) {
            \$this->query .= ' LIMIT ' . (int) \$this->_start . ', ' . (int) \$this->_limit;
        }

        \$this->_values = Db::getInstance()->executeS(\$this->query);
    }
}
", "@Modules/statsbestmanufacturers/statsbestmanufacturers.php", "/var/www/html/modules/statsbestmanufacturers/statsbestmanufacturers.php");
    }
}
