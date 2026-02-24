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

/* @Modules/statssales/statssales.php */
class __TwigTemplate_2807abe5eb9cb45a00545469841ae894 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/statssales/statssales.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/statssales/statssales.php"));

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

class statssales extends ModuleGraph
{
    /**
     * @var string
     */
    private \$html = '';
    /**
     * @var string
     */
    private \$query = '';
    /**
     * @var string
     */
    private \$query_group_by = '';
    /**
     * @var string
     */
    private \$option = '';
    /**
     * @var string
     */
    private \$id_country = '';

    public function __construct()
    {
        \$this->name = 'statssales';
        \$this->tab = 'administration';
        \$this->version = '2.1.0';
        \$this->author = 'PrestaShop';
        \$this->need_instance = 0;

        parent::__construct();

        \$this->displayName = \$this->trans('Sales and orders', [], 'Modules.Statssales.Admin');
        \$this->description = \$this->trans('Enrich your stats, add graphics presenting the evolution of your sales and orders.', [], 'Modules.Statssales.Admin');
        \$this->ps_versions_compliancy = ['min' => '1.7.6.0', 'max' => _PS_VERSION_];
    }

    public function install()
    {
        return parent::install() && \$this->registerHook('displayAdminStatsModules');
    }

    public function hookDisplayAdminStatsModules()
    {
        \$totals = \$this->getTotals();
        \$currency = new Currency((int) Configuration::get('PS_CURRENCY_DEFAULT'));
        if ((\$id_export = (int) Tools::getValue('export')) == 1) {
            \$this->csvExport([
                'layers' => 2,
                'type' => 'line',
                'option' => '1-' . (int) Tools::getValue('id_country'),
            ]);
        } elseif (\$id_export == 2) {
            \$this->csvExport([
                'layers' => 0,
                'type' => 'line',
                'option' => '2-' . (int) Tools::getValue('id_country'),
            ]);
        } elseif (\$id_export == 3) {
            \$this->csvExport([
                'type' => 'pie',
                'option' => '3-' . (int) Tools::getValue('id_country'),
            ]);
        }

        \$this->html = '
\t\t\t<div class=\"panel-heading\">
\t\t\t\t' . \$this->displayName . '
\t\t\t</div>
\t\t\t<h4>' . \$this->trans('Guide', [], 'Admin.Global') . '</h4>
\t\t\t<div class=\"alert alert-warning\">
\t\t\t\t<h4>' . \$this->trans('About order statuses', [], 'Modules.Statssales.Admin') . '</h4>
\t\t\t\t<p>
\t\t\t\t\t' . \$this->trans('In your Back Office, you can modify the following order statuses: Awaiting Check Payment, Payment Accepted, Preparation in Progress, Shipping, Delivered, Canceled, Refund, Payment Error, Out of Stock, and Awaiting Bank Wire Payment.', [], 'Modules.Statssales.Admin') . '<br />
\t\t\t\t\t' . \$this->trans('These order statuses cannot be removed from the Back Office; however you have the option to add more.', [], 'Modules.Statssales.Admin') . '
\t\t\t\t</p>
\t\t\t</div>
\t\t\t<div class=\"alert alert-info\">
\t\t\t\t<p>'
                    . \$this->trans('The following graphs represent the evolution of your shop\\'s orders and sales turnover for a selected period.', [], 'Modules.Statssales.Admin') . '<br/>'
                    . \$this->trans('You should often consult this screen, as it allows you to quickly monitor your shop\\'s sustainability. It also allows you to monitor multiple time periods.', [], 'Modules.Statssales.Admin') . '<br/>'
                    . \$this->trans('Only valid orders are graphically represented.', [], 'Modules.Statssales.Admin')
                . '</p>
\t\t\t</div>
\t\t\t<form action=\"' . Tools::safeOutput(\$_SERVER['REQUEST_URI']) . '\" method=\"post\" class=\"form-horizontal alert\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-4 col-lg-offset-7\">
\t\t\t\t\t\t<select name=\"id_country\">
\t\t\t\t\t\t\t<option value=\"0\"' . ((!Tools::getValue('id_order_state')) ? ' selected=\"selected\"' : '') . '>' . \$this->trans('All countries', [], 'Admin.Global') . '</option>';
        foreach (Country::getCountries(\$this->context->language->id) as \$country) {
            \$this->html .= '<option value=\"' . \$country['id_country'] . '\"' . ((\$country['id_country'] == Tools::getValue('id_country')) ? ' selected=\"selected\"' : '') . '>' . \$country['name'] . '</option>';
        }
        \$this->html .= '</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-1\">
\t\t\t\t\t\t<input type=\"submit\" name=\"submitCountry\" value=\"' . \$this->trans('Filter', [], 'Admin.Global') . '\" class=\"btn btn-default pull-right\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>
\t\t\t<div class=\"row row-margin-bottom\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t' . \$this->engine([
                'type' => 'line',
                'option' => '1-' . (int) Tools::getValue('id_country'),
                'layers' => 2,
            ]) . '
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t<li>' . \$this->trans('Orders placed:', [], 'Modules.Statssales.Admin') . ' <span class=\"totalStats\">' . (int) \$totals['orderCount'] . '</span></li>
\t\t\t\t\t\t\t<li>' . \$this->trans('Products bought:', [], 'Admin.Global') . ' <span class=\"totalStats\">' . (int) \$totals['products'] . '</span></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<hr/>
\t\t\t\t\t\t<a class=\"btn btn-default export-csv\" href=\"' . Tools::safeOutput(\$_SERVER['REQUEST_URI'] . '&export=1') . '\">
\t\t\t\t\t\t\t<i class=\"icon-cloud-upload\"></i> ' . \$this->trans('CSV Export', [], 'Modules.Statssales.Admin') . '
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row row-margin-bottom\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t' . \$this->engine([
                'type' => 'line',
                'option' => '2-' . (int) Tools::getValue('id_country'),
            ]) . '
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t<li>'
            . \$this->trans('Sales:', [], 'Modules.Statssales.Admin')
            . ' '
            . \$this->context->getCurrentLocale()->formatPrice(\$totals['orderSum'], \$currency->iso_code)
            . '</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<hr/>
\t\t\t\t\t\t<a class=\"btn btn-default export-csv\" href=\"' . Tools::safeOutput(\$_SERVER['REQUEST_URI'] . '&export=2') . '\">
\t\t\t\t\t\t\t<i class=\"icon-cloud-upload\"></i> ' . \$this->trans('CSV Export', [], 'Modules.Statssales.Admin') . '
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"alert alert-info\">
\t\t\t\t' . \$this->trans('You can view the distribution of order statuses below.', [], 'Modules.Statssales.Admin') . '
\t\t\t</div>
\t\t\t<div class=\"row row-margin-bottom\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t' . (\$totals['orderCount'] ? \$this->engine([
                'type' => 'pie',
                'option' => '3-' . (int) Tools::getValue('id_country'),
            ]) : \$this->trans('No orders for this period.', [], 'Modules.Statssales.Admin')) . '
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t<a class=\"btn btn-default export-csv\" href=\"' . Tools::safeOutput(\$_SERVER['REQUEST_URI'] . '&export=3') . '\">
\t\t\t\t\t\t\t<i class=\"icon-cloud-upload\"></i> ' . \$this->trans('CSV Export', [], 'Modules.Statssales.Admin') . '
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>';

        return \$this->html;
    }

    private function getTotals()
    {
        \$idCountry = (int) Tools::getValue('id_country');

        \$sql = 'SELECT COUNT(o.`id_order`) as orderCount,';
        // Sum Orders
        \$sql .= 'IFNULL(SUM(o.`total_paid_tax_excl` / o.conversion_rate), 0)';
        // Sum Refunds
        \$sql .= '- IFNULL(SUM((ps.total_products_tax_excl - ps.total_shipping_tax_excl) / ps.conversion_rate), 0)';
        \$sql .= ' as orderSum';
        \$sql .= ' FROM `' . _DB_PREFIX_ . 'orders` o';
        \$sql .= ' LEFT JOIN `' . _DB_PREFIX_ . 'order_slip` ps ON o.id_order = ps.id_order';
        \$sql .= ' INNER JOIN `' . _DB_PREFIX_ . 'order_state` os ON o.current_state = os.id_order_state';
        if (\$idCountry) {
            \$sql .= ' INNER JOIN `' . _DB_PREFIX_ . 'address` a ON o.id_address_delivery = a.id_address';
        }
        \$sql .= ' WHERE o.valid = 1';
        \$sql .= ' AND os.logable = 1';
        \$sql .= Shop::addSqlRestriction(Shop::SHARE_ORDER, 'o');
        if (\$idCountry) {
            \$sql .= ' AND a.id_country = ' . \$idCountry;
        }
        \$sql .= ' AND o.`invoice_date` BETWEEN ' . ModuleGraph::getDateBetween();
        \$result1 = Db::getInstance((bool) _PS_USE_SQL_SLAVE_)->getRow(\$sql);

        \$sql = 'SELECT IFNULL(SUM(od.product_quantity), 0) as products';
        \$sql .= ' FROM `' . _DB_PREFIX_ . 'orders` o';
        \$sql .= ' LEFT JOIN `' . _DB_PREFIX_ . 'order_detail` od ON od.`id_order` = o.`id_order`';
        if ((int) Tools::getValue('id_country')) {
            \$sql .= ' LEFT JOIN `' . _DB_PREFIX_ . 'address` a ON o.id_address_delivery = a.id_address';
        }
        \$sql .= ' WHERE o.valid = 1 ';
        \$sql .= Shop::addSqlRestriction(Shop::SHARE_ORDER, 'o');
        if ((int) Tools::getValue('id_country')) {
            \$sql .= ' AND a.id_country = ' . (int) Tools::getValue('id_country');
        }
        \$sql .= ' AND o.`invoice_date` BETWEEN ' . ModuleGraph::getDateBetween();

        \$result2 = Db::getInstance((bool) _PS_USE_SQL_SLAVE_)->getRow(\$sql);

        return array_merge(\$result1, \$result2);
    }

    public function setOption(\$options, \$layers = 1)
    {
        list(\$this->option, \$this->id_country) = explode('-', \$options);
        switch (\$this->option) {
            case 1:
                \$this->_titles['main'][0] = \$this->trans('Orders placed', [], 'Modules.Statssales.Admin');
                \$this->_titles['main'][1] = \$this->trans('Products bought', [], 'Modules.Statssales.Admin');
                \$this->_titles['main'][2] = \$this->trans('Products:', [], 'Modules.Statssales.Admin');
                break;
            case 2:
                \$currency = new Currency((int) Configuration::get('PS_CURRENCY_DEFAULT'));
                \$this->_titles['main'] = \$this->trans('Sales currency: %s', [\$currency->iso_code], 'Modules.Statssales.Admin');
                break;
            case 3:
                \$this->_titles['main'] = \$this->trans('Percentage of orders per status.', [], 'Modules.Statssales.Admin');
                break;
        }
    }

    protected function getData(\$layers)
    {
        if (\$this->option == 3) {
            return \$this->getStatesData();
        }

        \$this->query = 'SELECT o.`invoice_date`, '
            // Sum Orders
            . 'IFNULL(SUM(o.`total_paid_tax_excl` / o.conversion_rate), 0)'
            // Sum Refunds
            . ' - IFNULL(SUM((ps.total_products_tax_excl - ps.total_shipping_tax_excl) / ps.conversion_rate), 0)'
            . ' as total_paid_real, '
            . ' (SELECT SUM(product_quantity) FROM `' . _DB_PREFIX_ . 'order_detail` WHERE `id_order` = o.`id_order`) as product_quantity'
            . ' FROM `' . _DB_PREFIX_ . 'orders` o'
            . ' LEFT JOIN `' . _DB_PREFIX_ . 'order_slip` ps ON o.id_order = ps.id_order'
            . ' INNER JOIN `' . _DB_PREFIX_ . 'order_state` os ON o.current_state = os.id_order_state'
            . ((int) \$this->id_country ? ' INNER JOIN `' . _DB_PREFIX_ . 'address` a ON o.id_address_delivery = a.id_address' : '')
            . ' WHERE o.valid = 1 AND os.logable = 1'
            . Shop::addSqlRestriction(Shop::SHARE_ORDER, 'o')
            . ((int) \$this->id_country ? ' AND a.id_country = ' . (int) \$this->id_country : '')
            . ' AND o.`invoice_date` BETWEEN ';
        \$this->query_group_by = ' GROUP BY o.id_order';
        \$this->setDateGraph(\$layers, true);
    }

    protected function setAllTimeValues(\$layers)
    {
        \$result = Db::getInstance((bool) _PS_USE_SQL_SLAVE_)->executeS(\$this->query . \$this->getDate() . \$this->query_group_by);
        foreach (\$result as \$row) {
            if (\$this->option == 1) {
                ++\$this->_values[0][(int) substr(\$row['invoice_date'], 0, 4)];
                \$this->_values[1][(int) substr(\$row['invoice_date'], 0, 4)] += \$row['product_quantity'];
            } else {
                \$this->_values[(int) substr(\$row['invoice_date'], 0, 4)] += \$row['total_paid_real'];
            }
        }

        \$this->formatValues();
    }

    protected function setYearValues(\$layers)
    {
        \$result = Db::getInstance((bool) _PS_USE_SQL_SLAVE_)->executeS(\$this->query . \$this->getDate() . \$this->query_group_by);
        foreach (\$result as \$row) {
            \$mounth = (int) substr(\$row['invoice_date'], 5, 2);
            if (\$this->option == 1) {
                if (!isset(\$this->_values[0][\$mounth])) {
                    \$this->_values[0][\$mounth] = 0;
                }
                if (!isset(\$this->_values[1][\$mounth])) {
                    \$this->_values[1][\$mounth] = 0;
                }
                ++\$this->_values[0][\$mounth];
                \$this->_values[1][\$mounth] += \$row['product_quantity'];
            } else {
                if (!isset(\$this->_values[\$mounth])) {
                    \$this->_values[\$mounth] = 0;
                }
                \$this->_values[\$mounth] += \$row['total_paid_real'];
            }
        }

        \$this->formatValues();
    }

    protected function setMonthValues(\$layers)
    {
        \$result = Db::getInstance((bool) _PS_USE_SQL_SLAVE_)->executeS(\$this->query . \$this->getDate() . \$this->query_group_by);
        foreach (\$result as \$row) {
            if (\$this->option == 1) {
                ++\$this->_values[0][(int) substr(\$row['invoice_date'], 8, 2)];
                \$this->_values[1][(int) substr(\$row['invoice_date'], 8, 2)] += \$row['product_quantity'];
            } else {
                \$this->_values[(int) substr(\$row['invoice_date'], 8, 2)] += \$row['total_paid_real'];
            }
        }

        \$this->formatValues();
    }

    protected function setDayValues(\$layers)
    {
        \$result = Db::getInstance((bool) _PS_USE_SQL_SLAVE_)->executeS(\$this->query . \$this->getDate() . \$this->query_group_by);
        foreach (\$result as \$row) {
            if (\$this->option == 1) {
                ++\$this->_values[0][(int) substr(\$row['invoice_date'], 11, 2)];
                \$this->_values[1][(int) substr(\$row['invoice_date'], 11, 2)] += \$row['product_quantity'];
            } else {
                \$this->_values[(int) substr(\$row['invoice_date'], 11, 2)] += \$row['total_paid_real'];
            }
        }

        \$this->formatValues();
    }

    private function formatValues()
    {
        if (\$this->option == 1) {
            return;
        }
        foreach (\$this->_values as \$key => \$value) {
            \$this->_values[\$key] = number_format(\$value, 2);
        }
    }

    private function getStatesData()
    {
        \$result = Db::getInstance((bool) _PS_USE_SQL_SLAVE_)->executeS('
\t\tSELECT osl.`name`, COUNT(oh.`id_order`) as total
\t\tFROM `' . _DB_PREFIX_ . 'order_state` os
\t\tLEFT JOIN `' . _DB_PREFIX_ . 'order_state_lang` osl ON (os.`id_order_state` = osl.`id_order_state` AND osl.`id_lang` = ' . (int) \$this->getLang() . ')
\t\tLEFT JOIN `' . _DB_PREFIX_ . 'order_history` oh ON os.`id_order_state` = oh.`id_order_state`
\t\tLEFT JOIN `' . _DB_PREFIX_ . 'orders` o ON o.`id_order` = oh.`id_order`
\t\t' . ((int) \$this->id_country ? 'LEFT JOIN `' . _DB_PREFIX_ . 'address` a ON o.id_address_delivery = a.id_address' : '') . '
\t\tWHERE oh.`id_order_history` = (
\t\t\tSELECT ios.`id_order_history`
\t\t\tFROM `' . _DB_PREFIX_ . 'order_history` ios
\t\t\tWHERE ios.`id_order` = oh.`id_order`
\t\t\tORDER BY ios.`date_add` DESC, oh.`id_order_history` DESC
\t\t\tLIMIT 1
\t\t)
\t\t' . ((int) \$this->id_country ? 'AND a.id_country = ' . (int) \$this->id_country : '') . '
\t\tAND o.`date_add` BETWEEN ' . ModuleGraph::getDateBetween() . '
\t\tGROUP BY oh.`id_order_state`');
        foreach (\$result as \$row) {
            \$this->_values[] = \$row['total'];
            \$this->_legend[] = \$row['name'];
        }
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/statssales/statssales.php";
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

class statssales extends ModuleGraph
{
    /**
     * @var string
     */
    private \$html = '';
    /**
     * @var string
     */
    private \$query = '';
    /**
     * @var string
     */
    private \$query_group_by = '';
    /**
     * @var string
     */
    private \$option = '';
    /**
     * @var string
     */
    private \$id_country = '';

    public function __construct()
    {
        \$this->name = 'statssales';
        \$this->tab = 'administration';
        \$this->version = '2.1.0';
        \$this->author = 'PrestaShop';
        \$this->need_instance = 0;

        parent::__construct();

        \$this->displayName = \$this->trans('Sales and orders', [], 'Modules.Statssales.Admin');
        \$this->description = \$this->trans('Enrich your stats, add graphics presenting the evolution of your sales and orders.', [], 'Modules.Statssales.Admin');
        \$this->ps_versions_compliancy = ['min' => '1.7.6.0', 'max' => _PS_VERSION_];
    }

    public function install()
    {
        return parent::install() && \$this->registerHook('displayAdminStatsModules');
    }

    public function hookDisplayAdminStatsModules()
    {
        \$totals = \$this->getTotals();
        \$currency = new Currency((int) Configuration::get('PS_CURRENCY_DEFAULT'));
        if ((\$id_export = (int) Tools::getValue('export')) == 1) {
            \$this->csvExport([
                'layers' => 2,
                'type' => 'line',
                'option' => '1-' . (int) Tools::getValue('id_country'),
            ]);
        } elseif (\$id_export == 2) {
            \$this->csvExport([
                'layers' => 0,
                'type' => 'line',
                'option' => '2-' . (int) Tools::getValue('id_country'),
            ]);
        } elseif (\$id_export == 3) {
            \$this->csvExport([
                'type' => 'pie',
                'option' => '3-' . (int) Tools::getValue('id_country'),
            ]);
        }

        \$this->html = '
\t\t\t<div class=\"panel-heading\">
\t\t\t\t' . \$this->displayName . '
\t\t\t</div>
\t\t\t<h4>' . \$this->trans('Guide', [], 'Admin.Global') . '</h4>
\t\t\t<div class=\"alert alert-warning\">
\t\t\t\t<h4>' . \$this->trans('About order statuses', [], 'Modules.Statssales.Admin') . '</h4>
\t\t\t\t<p>
\t\t\t\t\t' . \$this->trans('In your Back Office, you can modify the following order statuses: Awaiting Check Payment, Payment Accepted, Preparation in Progress, Shipping, Delivered, Canceled, Refund, Payment Error, Out of Stock, and Awaiting Bank Wire Payment.', [], 'Modules.Statssales.Admin') . '<br />
\t\t\t\t\t' . \$this->trans('These order statuses cannot be removed from the Back Office; however you have the option to add more.', [], 'Modules.Statssales.Admin') . '
\t\t\t\t</p>
\t\t\t</div>
\t\t\t<div class=\"alert alert-info\">
\t\t\t\t<p>'
                    . \$this->trans('The following graphs represent the evolution of your shop\\'s orders and sales turnover for a selected period.', [], 'Modules.Statssales.Admin') . '<br/>'
                    . \$this->trans('You should often consult this screen, as it allows you to quickly monitor your shop\\'s sustainability. It also allows you to monitor multiple time periods.', [], 'Modules.Statssales.Admin') . '<br/>'
                    . \$this->trans('Only valid orders are graphically represented.', [], 'Modules.Statssales.Admin')
                . '</p>
\t\t\t</div>
\t\t\t<form action=\"' . Tools::safeOutput(\$_SERVER['REQUEST_URI']) . '\" method=\"post\" class=\"form-horizontal alert\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-4 col-lg-offset-7\">
\t\t\t\t\t\t<select name=\"id_country\">
\t\t\t\t\t\t\t<option value=\"0\"' . ((!Tools::getValue('id_order_state')) ? ' selected=\"selected\"' : '') . '>' . \$this->trans('All countries', [], 'Admin.Global') . '</option>';
        foreach (Country::getCountries(\$this->context->language->id) as \$country) {
            \$this->html .= '<option value=\"' . \$country['id_country'] . '\"' . ((\$country['id_country'] == Tools::getValue('id_country')) ? ' selected=\"selected\"' : '') . '>' . \$country['name'] . '</option>';
        }
        \$this->html .= '</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-1\">
\t\t\t\t\t\t<input type=\"submit\" name=\"submitCountry\" value=\"' . \$this->trans('Filter', [], 'Admin.Global') . '\" class=\"btn btn-default pull-right\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>
\t\t\t<div class=\"row row-margin-bottom\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t' . \$this->engine([
                'type' => 'line',
                'option' => '1-' . (int) Tools::getValue('id_country'),
                'layers' => 2,
            ]) . '
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t<li>' . \$this->trans('Orders placed:', [], 'Modules.Statssales.Admin') . ' <span class=\"totalStats\">' . (int) \$totals['orderCount'] . '</span></li>
\t\t\t\t\t\t\t<li>' . \$this->trans('Products bought:', [], 'Admin.Global') . ' <span class=\"totalStats\">' . (int) \$totals['products'] . '</span></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<hr/>
\t\t\t\t\t\t<a class=\"btn btn-default export-csv\" href=\"' . Tools::safeOutput(\$_SERVER['REQUEST_URI'] . '&export=1') . '\">
\t\t\t\t\t\t\t<i class=\"icon-cloud-upload\"></i> ' . \$this->trans('CSV Export', [], 'Modules.Statssales.Admin') . '
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row row-margin-bottom\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t' . \$this->engine([
                'type' => 'line',
                'option' => '2-' . (int) Tools::getValue('id_country'),
            ]) . '
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t<li>'
            . \$this->trans('Sales:', [], 'Modules.Statssales.Admin')
            . ' '
            . \$this->context->getCurrentLocale()->formatPrice(\$totals['orderSum'], \$currency->iso_code)
            . '</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<hr/>
\t\t\t\t\t\t<a class=\"btn btn-default export-csv\" href=\"' . Tools::safeOutput(\$_SERVER['REQUEST_URI'] . '&export=2') . '\">
\t\t\t\t\t\t\t<i class=\"icon-cloud-upload\"></i> ' . \$this->trans('CSV Export', [], 'Modules.Statssales.Admin') . '
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"alert alert-info\">
\t\t\t\t' . \$this->trans('You can view the distribution of order statuses below.', [], 'Modules.Statssales.Admin') . '
\t\t\t</div>
\t\t\t<div class=\"row row-margin-bottom\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t' . (\$totals['orderCount'] ? \$this->engine([
                'type' => 'pie',
                'option' => '3-' . (int) Tools::getValue('id_country'),
            ]) : \$this->trans('No orders for this period.', [], 'Modules.Statssales.Admin')) . '
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t<a class=\"btn btn-default export-csv\" href=\"' . Tools::safeOutput(\$_SERVER['REQUEST_URI'] . '&export=3') . '\">
\t\t\t\t\t\t\t<i class=\"icon-cloud-upload\"></i> ' . \$this->trans('CSV Export', [], 'Modules.Statssales.Admin') . '
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>';

        return \$this->html;
    }

    private function getTotals()
    {
        \$idCountry = (int) Tools::getValue('id_country');

        \$sql = 'SELECT COUNT(o.`id_order`) as orderCount,';
        // Sum Orders
        \$sql .= 'IFNULL(SUM(o.`total_paid_tax_excl` / o.conversion_rate), 0)';
        // Sum Refunds
        \$sql .= '- IFNULL(SUM((ps.total_products_tax_excl - ps.total_shipping_tax_excl) / ps.conversion_rate), 0)';
        \$sql .= ' as orderSum';
        \$sql .= ' FROM `' . _DB_PREFIX_ . 'orders` o';
        \$sql .= ' LEFT JOIN `' . _DB_PREFIX_ . 'order_slip` ps ON o.id_order = ps.id_order';
        \$sql .= ' INNER JOIN `' . _DB_PREFIX_ . 'order_state` os ON o.current_state = os.id_order_state';
        if (\$idCountry) {
            \$sql .= ' INNER JOIN `' . _DB_PREFIX_ . 'address` a ON o.id_address_delivery = a.id_address';
        }
        \$sql .= ' WHERE o.valid = 1';
        \$sql .= ' AND os.logable = 1';
        \$sql .= Shop::addSqlRestriction(Shop::SHARE_ORDER, 'o');
        if (\$idCountry) {
            \$sql .= ' AND a.id_country = ' . \$idCountry;
        }
        \$sql .= ' AND o.`invoice_date` BETWEEN ' . ModuleGraph::getDateBetween();
        \$result1 = Db::getInstance((bool) _PS_USE_SQL_SLAVE_)->getRow(\$sql);

        \$sql = 'SELECT IFNULL(SUM(od.product_quantity), 0) as products';
        \$sql .= ' FROM `' . _DB_PREFIX_ . 'orders` o';
        \$sql .= ' LEFT JOIN `' . _DB_PREFIX_ . 'order_detail` od ON od.`id_order` = o.`id_order`';
        if ((int) Tools::getValue('id_country')) {
            \$sql .= ' LEFT JOIN `' . _DB_PREFIX_ . 'address` a ON o.id_address_delivery = a.id_address';
        }
        \$sql .= ' WHERE o.valid = 1 ';
        \$sql .= Shop::addSqlRestriction(Shop::SHARE_ORDER, 'o');
        if ((int) Tools::getValue('id_country')) {
            \$sql .= ' AND a.id_country = ' . (int) Tools::getValue('id_country');
        }
        \$sql .= ' AND o.`invoice_date` BETWEEN ' . ModuleGraph::getDateBetween();

        \$result2 = Db::getInstance((bool) _PS_USE_SQL_SLAVE_)->getRow(\$sql);

        return array_merge(\$result1, \$result2);
    }

    public function setOption(\$options, \$layers = 1)
    {
        list(\$this->option, \$this->id_country) = explode('-', \$options);
        switch (\$this->option) {
            case 1:
                \$this->_titles['main'][0] = \$this->trans('Orders placed', [], 'Modules.Statssales.Admin');
                \$this->_titles['main'][1] = \$this->trans('Products bought', [], 'Modules.Statssales.Admin');
                \$this->_titles['main'][2] = \$this->trans('Products:', [], 'Modules.Statssales.Admin');
                break;
            case 2:
                \$currency = new Currency((int) Configuration::get('PS_CURRENCY_DEFAULT'));
                \$this->_titles['main'] = \$this->trans('Sales currency: %s', [\$currency->iso_code], 'Modules.Statssales.Admin');
                break;
            case 3:
                \$this->_titles['main'] = \$this->trans('Percentage of orders per status.', [], 'Modules.Statssales.Admin');
                break;
        }
    }

    protected function getData(\$layers)
    {
        if (\$this->option == 3) {
            return \$this->getStatesData();
        }

        \$this->query = 'SELECT o.`invoice_date`, '
            // Sum Orders
            . 'IFNULL(SUM(o.`total_paid_tax_excl` / o.conversion_rate), 0)'
            // Sum Refunds
            . ' - IFNULL(SUM((ps.total_products_tax_excl - ps.total_shipping_tax_excl) / ps.conversion_rate), 0)'
            . ' as total_paid_real, '
            . ' (SELECT SUM(product_quantity) FROM `' . _DB_PREFIX_ . 'order_detail` WHERE `id_order` = o.`id_order`) as product_quantity'
            . ' FROM `' . _DB_PREFIX_ . 'orders` o'
            . ' LEFT JOIN `' . _DB_PREFIX_ . 'order_slip` ps ON o.id_order = ps.id_order'
            . ' INNER JOIN `' . _DB_PREFIX_ . 'order_state` os ON o.current_state = os.id_order_state'
            . ((int) \$this->id_country ? ' INNER JOIN `' . _DB_PREFIX_ . 'address` a ON o.id_address_delivery = a.id_address' : '')
            . ' WHERE o.valid = 1 AND os.logable = 1'
            . Shop::addSqlRestriction(Shop::SHARE_ORDER, 'o')
            . ((int) \$this->id_country ? ' AND a.id_country = ' . (int) \$this->id_country : '')
            . ' AND o.`invoice_date` BETWEEN ';
        \$this->query_group_by = ' GROUP BY o.id_order';
        \$this->setDateGraph(\$layers, true);
    }

    protected function setAllTimeValues(\$layers)
    {
        \$result = Db::getInstance((bool) _PS_USE_SQL_SLAVE_)->executeS(\$this->query . \$this->getDate() . \$this->query_group_by);
        foreach (\$result as \$row) {
            if (\$this->option == 1) {
                ++\$this->_values[0][(int) substr(\$row['invoice_date'], 0, 4)];
                \$this->_values[1][(int) substr(\$row['invoice_date'], 0, 4)] += \$row['product_quantity'];
            } else {
                \$this->_values[(int) substr(\$row['invoice_date'], 0, 4)] += \$row['total_paid_real'];
            }
        }

        \$this->formatValues();
    }

    protected function setYearValues(\$layers)
    {
        \$result = Db::getInstance((bool) _PS_USE_SQL_SLAVE_)->executeS(\$this->query . \$this->getDate() . \$this->query_group_by);
        foreach (\$result as \$row) {
            \$mounth = (int) substr(\$row['invoice_date'], 5, 2);
            if (\$this->option == 1) {
                if (!isset(\$this->_values[0][\$mounth])) {
                    \$this->_values[0][\$mounth] = 0;
                }
                if (!isset(\$this->_values[1][\$mounth])) {
                    \$this->_values[1][\$mounth] = 0;
                }
                ++\$this->_values[0][\$mounth];
                \$this->_values[1][\$mounth] += \$row['product_quantity'];
            } else {
                if (!isset(\$this->_values[\$mounth])) {
                    \$this->_values[\$mounth] = 0;
                }
                \$this->_values[\$mounth] += \$row['total_paid_real'];
            }
        }

        \$this->formatValues();
    }

    protected function setMonthValues(\$layers)
    {
        \$result = Db::getInstance((bool) _PS_USE_SQL_SLAVE_)->executeS(\$this->query . \$this->getDate() . \$this->query_group_by);
        foreach (\$result as \$row) {
            if (\$this->option == 1) {
                ++\$this->_values[0][(int) substr(\$row['invoice_date'], 8, 2)];
                \$this->_values[1][(int) substr(\$row['invoice_date'], 8, 2)] += \$row['product_quantity'];
            } else {
                \$this->_values[(int) substr(\$row['invoice_date'], 8, 2)] += \$row['total_paid_real'];
            }
        }

        \$this->formatValues();
    }

    protected function setDayValues(\$layers)
    {
        \$result = Db::getInstance((bool) _PS_USE_SQL_SLAVE_)->executeS(\$this->query . \$this->getDate() . \$this->query_group_by);
        foreach (\$result as \$row) {
            if (\$this->option == 1) {
                ++\$this->_values[0][(int) substr(\$row['invoice_date'], 11, 2)];
                \$this->_values[1][(int) substr(\$row['invoice_date'], 11, 2)] += \$row['product_quantity'];
            } else {
                \$this->_values[(int) substr(\$row['invoice_date'], 11, 2)] += \$row['total_paid_real'];
            }
        }

        \$this->formatValues();
    }

    private function formatValues()
    {
        if (\$this->option == 1) {
            return;
        }
        foreach (\$this->_values as \$key => \$value) {
            \$this->_values[\$key] = number_format(\$value, 2);
        }
    }

    private function getStatesData()
    {
        \$result = Db::getInstance((bool) _PS_USE_SQL_SLAVE_)->executeS('
\t\tSELECT osl.`name`, COUNT(oh.`id_order`) as total
\t\tFROM `' . _DB_PREFIX_ . 'order_state` os
\t\tLEFT JOIN `' . _DB_PREFIX_ . 'order_state_lang` osl ON (os.`id_order_state` = osl.`id_order_state` AND osl.`id_lang` = ' . (int) \$this->getLang() . ')
\t\tLEFT JOIN `' . _DB_PREFIX_ . 'order_history` oh ON os.`id_order_state` = oh.`id_order_state`
\t\tLEFT JOIN `' . _DB_PREFIX_ . 'orders` o ON o.`id_order` = oh.`id_order`
\t\t' . ((int) \$this->id_country ? 'LEFT JOIN `' . _DB_PREFIX_ . 'address` a ON o.id_address_delivery = a.id_address' : '') . '
\t\tWHERE oh.`id_order_history` = (
\t\t\tSELECT ios.`id_order_history`
\t\t\tFROM `' . _DB_PREFIX_ . 'order_history` ios
\t\t\tWHERE ios.`id_order` = oh.`id_order`
\t\t\tORDER BY ios.`date_add` DESC, oh.`id_order_history` DESC
\t\t\tLIMIT 1
\t\t)
\t\t' . ((int) \$this->id_country ? 'AND a.id_country = ' . (int) \$this->id_country : '') . '
\t\tAND o.`date_add` BETWEEN ' . ModuleGraph::getDateBetween() . '
\t\tGROUP BY oh.`id_order_state`');
        foreach (\$result as \$row) {
            \$this->_values[] = \$row['total'];
            \$this->_legend[] = \$row['name'];
        }
    }
}
", "@Modules/statssales/statssales.php", "/var/www/html/modules/statssales/statssales.php");
    }
}
