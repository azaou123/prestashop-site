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

/* @Modules/statsbestvouchers/statsbestvouchers.php */
class __TwigTemplate_19a0fddbe387722338a68b9076e661c5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/statsbestvouchers/statsbestvouchers.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/statsbestvouchers/statsbestvouchers.php"));

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

class statsbestvouchers extends ModuleGrid
{
    private \$html;
    private \$query;
    private \$columns;
    private \$default_sort_column;
    private \$default_sort_direction;
    private \$empty_message;
    private \$paging_message;

    public function __construct()
    {
        \$this->name = 'statsbestvouchers';
        \$this->tab = 'analytics_stats';
        \$this->version = '2.0.1';
        \$this->author = 'PrestaShop';
        \$this->need_instance = 0;

        parent::__construct();

        \$this->default_sort_column = 'ca';
        \$this->default_sort_direction = 'DESC';
        \$this->empty_message = \$this->trans('Empty recordset returned.', array(), 'Modules.Statsbestvouchers.Admin');
        \$this->paging_message = \$this->trans('Displaying %1\$s of %2\$s', array('{0} - {1}', '{2}'), 'Admin.Global');

        \$this->columns = array(
            array(
                'id' => 'code',
                'header' => \$this->trans('Code', array(), 'Admin.Global'),
                'dataIndex' => 'code',
                'align' => 'left'
            ),
            array(
                'id' => 'name',
                'header' => \$this->trans('Name', array(), 'Admin.Global'),
                'dataIndex' => 'name',
                'align' => 'left'
            ),
            array(
                'id' => 'ca',
                'header' => \$this->trans('Sales', array(), 'Admin.Global'),
                'dataIndex' => 'ca',
                'align' => 'right'
            ),
            array(
                'id' => 'total',
                'header' => \$this->trans('Total used', array(), 'Modules.Statsbestvouchers.Admin'),
                'dataIndex' => 'total',
                'align' => 'center'
            )
        );

        \$this->displayName = \$this->trans('Best vouchers', array(), 'Modules.Statsbestvouchers.Admin');
        \$this->description = \$this->trans('Enrich your stats, add a list of the most used vouchers to the dashboard.', array(), 'Modules.Statsbestvouchers.Admin');
        \$this->ps_versions_compliancy = array('min' => '1.7.6.0', 'max' => _PS_VERSION_);
    }

    public function install()
    {
        return (parent::install() && \$this->registerHook('displayAdminStatsModules'));
    }

    public function hookDisplayAdminStatsModules(\$params)
    {
        \$engine_params = array(
            'id' => 'id_product',
            'title' => \$this->displayName,
            'columns' => \$this->columns,
            'defaultSortColumn' => \$this->default_sort_column,
            'defaultSortDirection' => \$this->default_sort_direction,
            'emptyMessage' => \$this->empty_message,
            'pagingMessage' => \$this->paging_message
        );

        if (Tools::getValue('export')) {
            \$this->csvExport(\$engine_params);
        }

        \$this->html = '
\t\t\t<div class=\"panel-heading\">
\t\t\t\t'.\$this->displayName.'
\t\t\t</div>
\t\t\t'.\$this->engine(\$engine_params).'
\t\t\t<a class=\"btn btn-default export-csv\" href=\"'.Tools::safeOutput(\$_SERVER['REQUEST_URI'].'&export=1').'\">
\t\t\t\t<i class=\"icon-cloud-upload\"></i> '.\$this->trans('CSV Export', array(), 'Admin.Global').'
\t\t\t</a>';

        return \$this->html;
    }

    public function getData()
    {
        \$currency = new Currency(Configuration::get('PS_CURRENCY_DEFAULT'));
        \$this->query = 'SELECT SQL_CALC_FOUND_ROWS cr.code, ocr.name, COUNT(ocr.id_cart_rule) as total, ROUND(SUM(o.total_paid_real) / o.conversion_rate,2) as ca
\t\t\t\tFROM '._DB_PREFIX_.'order_cart_rule ocr
\t\t\t\tLEFT JOIN '._DB_PREFIX_.'orders o ON o.id_order = ocr.id_order
\t\t\t\tLEFT JOIN '._DB_PREFIX_.'cart_rule cr ON cr.id_cart_rule = ocr.id_cart_rule
\t\t\t\tWHERE o.valid = 1
\t\t\t\t\t'.Shop::addSqlRestriction(Shop::SHARE_ORDER, 'o').'
\t\t\t\t\tAND o.invoice_date BETWEEN '.\$this->getDate().'
\t\t\t\tGROUP BY ocr.id_cart_rule';

        if (Validate::IsName(\$this->_sort)) {
            \$this->query .= ' ORDER BY `'.bqSQL(\$this->_sort).'`';
            if (isset(\$this->_direction) && (Tools::strtoupper(\$this->_direction) == 'ASC' || Tools::strtoupper(\$this->_direction) == 'DESC')) {
                \$this->query .= ' '.pSQL(\$this->_direction);
            }
        }

        if ((\$this->_start === 0 || Validate::IsUnsignedInt(\$this->_start)) && Validate::IsUnsignedInt(\$this->_limit)) {
            \$this->query .= ' LIMIT '.(int)\$this->_start.', '.(int)\$this->_limit;
        }

        \$values = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS(\$this->query);
        foreach (\$values as &\$value) {
            \$value['ca'] = \$this->context->getCurrentLocale()->formatPrice(\$value['ca'], \$currency->iso_code);
        }

        \$this->_values = \$values;
        \$this->_totalCount = Db::getInstance(_PS_USE_SQL_SLAVE_)->getValue('SELECT FOUND_ROWS()');
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/statsbestvouchers/statsbestvouchers.php";
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

class statsbestvouchers extends ModuleGrid
{
    private \$html;
    private \$query;
    private \$columns;
    private \$default_sort_column;
    private \$default_sort_direction;
    private \$empty_message;
    private \$paging_message;

    public function __construct()
    {
        \$this->name = 'statsbestvouchers';
        \$this->tab = 'analytics_stats';
        \$this->version = '2.0.1';
        \$this->author = 'PrestaShop';
        \$this->need_instance = 0;

        parent::__construct();

        \$this->default_sort_column = 'ca';
        \$this->default_sort_direction = 'DESC';
        \$this->empty_message = \$this->trans('Empty recordset returned.', array(), 'Modules.Statsbestvouchers.Admin');
        \$this->paging_message = \$this->trans('Displaying %1\$s of %2\$s', array('{0} - {1}', '{2}'), 'Admin.Global');

        \$this->columns = array(
            array(
                'id' => 'code',
                'header' => \$this->trans('Code', array(), 'Admin.Global'),
                'dataIndex' => 'code',
                'align' => 'left'
            ),
            array(
                'id' => 'name',
                'header' => \$this->trans('Name', array(), 'Admin.Global'),
                'dataIndex' => 'name',
                'align' => 'left'
            ),
            array(
                'id' => 'ca',
                'header' => \$this->trans('Sales', array(), 'Admin.Global'),
                'dataIndex' => 'ca',
                'align' => 'right'
            ),
            array(
                'id' => 'total',
                'header' => \$this->trans('Total used', array(), 'Modules.Statsbestvouchers.Admin'),
                'dataIndex' => 'total',
                'align' => 'center'
            )
        );

        \$this->displayName = \$this->trans('Best vouchers', array(), 'Modules.Statsbestvouchers.Admin');
        \$this->description = \$this->trans('Enrich your stats, add a list of the most used vouchers to the dashboard.', array(), 'Modules.Statsbestvouchers.Admin');
        \$this->ps_versions_compliancy = array('min' => '1.7.6.0', 'max' => _PS_VERSION_);
    }

    public function install()
    {
        return (parent::install() && \$this->registerHook('displayAdminStatsModules'));
    }

    public function hookDisplayAdminStatsModules(\$params)
    {
        \$engine_params = array(
            'id' => 'id_product',
            'title' => \$this->displayName,
            'columns' => \$this->columns,
            'defaultSortColumn' => \$this->default_sort_column,
            'defaultSortDirection' => \$this->default_sort_direction,
            'emptyMessage' => \$this->empty_message,
            'pagingMessage' => \$this->paging_message
        );

        if (Tools::getValue('export')) {
            \$this->csvExport(\$engine_params);
        }

        \$this->html = '
\t\t\t<div class=\"panel-heading\">
\t\t\t\t'.\$this->displayName.'
\t\t\t</div>
\t\t\t'.\$this->engine(\$engine_params).'
\t\t\t<a class=\"btn btn-default export-csv\" href=\"'.Tools::safeOutput(\$_SERVER['REQUEST_URI'].'&export=1').'\">
\t\t\t\t<i class=\"icon-cloud-upload\"></i> '.\$this->trans('CSV Export', array(), 'Admin.Global').'
\t\t\t</a>';

        return \$this->html;
    }

    public function getData()
    {
        \$currency = new Currency(Configuration::get('PS_CURRENCY_DEFAULT'));
        \$this->query = 'SELECT SQL_CALC_FOUND_ROWS cr.code, ocr.name, COUNT(ocr.id_cart_rule) as total, ROUND(SUM(o.total_paid_real) / o.conversion_rate,2) as ca
\t\t\t\tFROM '._DB_PREFIX_.'order_cart_rule ocr
\t\t\t\tLEFT JOIN '._DB_PREFIX_.'orders o ON o.id_order = ocr.id_order
\t\t\t\tLEFT JOIN '._DB_PREFIX_.'cart_rule cr ON cr.id_cart_rule = ocr.id_cart_rule
\t\t\t\tWHERE o.valid = 1
\t\t\t\t\t'.Shop::addSqlRestriction(Shop::SHARE_ORDER, 'o').'
\t\t\t\t\tAND o.invoice_date BETWEEN '.\$this->getDate().'
\t\t\t\tGROUP BY ocr.id_cart_rule';

        if (Validate::IsName(\$this->_sort)) {
            \$this->query .= ' ORDER BY `'.bqSQL(\$this->_sort).'`';
            if (isset(\$this->_direction) && (Tools::strtoupper(\$this->_direction) == 'ASC' || Tools::strtoupper(\$this->_direction) == 'DESC')) {
                \$this->query .= ' '.pSQL(\$this->_direction);
            }
        }

        if ((\$this->_start === 0 || Validate::IsUnsignedInt(\$this->_start)) && Validate::IsUnsignedInt(\$this->_limit)) {
            \$this->query .= ' LIMIT '.(int)\$this->_start.', '.(int)\$this->_limit;
        }

        \$values = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS(\$this->query);
        foreach (\$values as &\$value) {
            \$value['ca'] = \$this->context->getCurrentLocale()->formatPrice(\$value['ca'], \$currency->iso_code);
        }

        \$this->_values = \$values;
        \$this->_totalCount = Db::getInstance(_PS_USE_SQL_SLAVE_)->getValue('SELECT FOUND_ROWS()');
    }
}
", "@Modules/statsbestvouchers/statsbestvouchers.php", "/var/www/html/modules/statsbestvouchers/statsbestvouchers.php");
    }
}
