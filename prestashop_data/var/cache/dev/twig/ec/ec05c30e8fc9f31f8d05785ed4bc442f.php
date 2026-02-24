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

/* @Modules/statsforecast/statsforecast.php */
class __TwigTemplate_c805ceeb22a45f2ee011eba2d2301ca8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/statsforecast/statsforecast.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/statsforecast/statsforecast.php"));

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

class statsforecast extends Module
{
    private \$html = '';
    private \$t1 = 0;
    private \$t2 = 0;
    private \$t3 = 0;
    private \$t4 = 0;
    private \$t5 = 0;
    private \$t6 = 0;
    private \$t7 = 0;
    private \$t8 = 0;

    public function __construct()
    {
        \$this->name = 'statsforecast';
        \$this->tab = 'administration';
        \$this->version = '2.0.4';
        \$this->author = 'PrestaShop';
        \$this->need_instance = 0;

        parent::__construct();

        \$this->displayName = \$this->trans('Stats Dashboard', array(), 'Modules.Statsforecast.Admin');
        \$this->description = \$this->trans('Enrich your stats, add a summary of all your current statistics on your back office.', array(), 'Modules.Statsforecast.Admin');
        \$this->ps_versions_compliancy = array('min' => '1.7.6.0', 'max' => _PS_VERSION_);
    }

    public function install()
    {
        return (parent::install() && \$this->registerHook('displayAdminStatsModules'));
    }

    public function getContent()
    {
        Tools::redirectAdmin('index.php?controller=AdminStats&module=statsforecast&token='.Tools::getAdminTokenLite('AdminStats'));
    }

    public function hookDisplayAdminStatsModules()
    {
        \$ru = AdminController::\$currentIndex.'&module='.\$this->name.'&token='.Tools::getValue('token');

        \$db = Db::getInstance();

        if (!isset(\$this->context->cookie->stats_granularity)) {
            \$this->context->cookie->stats_granularity = 10;
        }
        if (Tools::isSubmit('submitIdZone')) {
            \$this->context->cookie->stats_id_zone = (int)Tools::getValue('stats_id_zone');
        }
        if (Tools::isSubmit('submitGranularity')) {
            \$this->context->cookie->stats_granularity = Tools::getValue('stats_granularity');
        }

        \$currency = \$this->context->currency;
        \$employee = \$this->context->employee;

        \$from = max(strtotime(_PS_CREATION_DATE_.' 00:00:00'), strtotime(\$employee->stats_date_from.' 00:00:00'));
        \$to = strtotime(\$employee->stats_date_to.' 23:59:59');
        \$to2 = min(time(), \$to);
        \$interval = (\$to - \$from) / 60 / 60 / 24;
        \$interval2 = (\$to2 - \$from) / 60 / 60 / 24;
        \$prop30 = \$interval / \$interval2;

        if (\$this->context->cookie->stats_granularity == 7) {
            \$interval_avg = \$interval2 / 30;
        }
        if (\$this->context->cookie->stats_granularity == 4) {
            \$interval_avg = \$interval2 / 365;
        }
        if (\$this->context->cookie->stats_granularity == 10) {
            \$interval_avg = \$interval2;
        }
        if (\$this->context->cookie->stats_granularity == 42) {
            \$interval_avg = \$interval2 / 7;
        }

        \$data_table = array();
        if (\$this->context->cookie->stats_granularity == 10) {
            for (\$i = \$from; \$i <= \$to2; \$i = strtotime('+1 day', \$i)) {
                \$data_table[date('Y-m-d', \$i)] = array(
                    'fix_date' => date('Y-m-d', \$i),
                    'countOrders' => 0,
                    'countProducts' => 0,
                    'totalSales' => 0
                );
            }
        }

        \$date_from_gadd = (\$this->context->cookie->stats_granularity != 42
            ? 'LEFT(date_add, '.(int)\$this->context->cookie->stats_granularity.')'
            : 'IFNULL(MAKEDATE(YEAR(date_add),DAYOFYEAR(date_add)-WEEKDAY(date_add)), CONCAT(YEAR(date_add),\"-01-01*\"))');

        \$date_from_ginvoice = (\$this->context->cookie->stats_granularity != 42
            ? 'LEFT(invoice_date, '.(int)\$this->context->cookie->stats_granularity.')'
            : 'IFNULL(MAKEDATE(YEAR(invoice_date),DAYOFYEAR(invoice_date)-WEEKDAY(invoice_date)), CONCAT(YEAR(invoice_date),\"-01-01*\"))');

        \$result = \$db->query('
\t\tSELECT
\t\t\t'.\$date_from_ginvoice.' as fix_date,
\t\t\tCOUNT(*) as countOrders,
\t\t\tSUM((SELECT SUM(od.product_quantity) FROM '._DB_PREFIX_.'order_detail od WHERE o.id_order = od.id_order)) as countProducts,
\t\t\tSUM(o.total_paid_tax_excl / o.conversion_rate) as totalSales
\t\tFROM '._DB_PREFIX_.'orders o
\t\tWHERE o.valid = 1
\t\tAND o.invoice_date BETWEEN '.ModuleGraph::getDateBetween().'
\t\t'.Shop::addSqlRestriction(Shop::SHARE_ORDER, 'o').'
\t\tGROUP BY '.\$date_from_ginvoice);
        while (\$row = \$db->nextRow(\$result)) {
            \$data_table[\$row['fix_date']] = \$row;
        }

        \$this->html .= '<div>
\t\t\t<div class=\"panel-heading\"><i class=\"icon-dashboard\"></i> '.\$this->displayName.'</div>
\t\t\t<div class=\"alert alert-info\">'.\$this->trans('The listed amounts do not include tax.', array(), 'Modules.Statsforecast.Admin').'</div>
\t\t\t<form id=\"granularity\" action=\"'.Tools::safeOutput(\$ru).'#granularity\" method=\"post\" class=\"form-horizontal\">
\t\t\t\t<div class=\"row row-margin-bottom\">
\t\t\t\t\t<label class=\"control-label col-lg-3\">
\t\t\t\t\t\t'.\$this->trans('Time frame', array(), 'Modules.Statsforecast.Admin').'
\t\t\t\t\t</label>
\t\t\t\t\t<div class=\"col-lg-2\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"submitGranularity\" value=\"1\" />
\t\t\t\t\t\t<select name=\"stats_granularity\" onchange=\"this.form.submit();\">
\t\t\t\t\t\t\t<option value=\"10\">'.\$this->trans('Daily', array(), 'Modules.Statsforecast.Admin').'</option>
\t\t\t\t\t\t\t<option value=\"42\" '.(\$this->context->cookie->stats_granularity == '42' ? 'selected=\"selected\"' : '').'>'.\$this->trans('Weekly', array(), 'Modules.Statsforecast.Admin').'</option>
\t\t\t\t\t\t\t<option value=\"7\" '.(\$this->context->cookie->stats_granularity == '7' ? 'selected=\"selected\"' : '').'>'.\$this->trans('Monthly', array(), 'Modules.Statsforecast.Admin').'</option>
\t\t\t\t\t\t\t<option value=\"4\" '.(\$this->context->cookie->stats_granularity == '4' ? 'selected=\"selected\"' : '').'>'.\$this->trans('Yearly', array(), 'Modules.Statsforecast.Admin').'</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>

\t\t\t<table class=\"table\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Visits', array(), 'Admin.Shopparameters.Feature').'</span></th>
\t\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Registrations', array(), 'Admin.Shopparameters.Feature').'</span></th>
\t\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Placed orders', array(), 'Modules.Statsforecast.Admin').'</span></th>
\t\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Bought items', array(), 'Modules.Statsforecast.Admin').'</span></th>
\t\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Percentage of registrations', array(), 'Modules.Statsforecast.Admin').'</span></th>
\t\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Percentage of orders', array(), 'Modules.Statsforecast.Admin').'</span></th>
\t\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Revenue', array(), 'Modules.Statsforecast.Admin').'</span></th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>';

        \$visit_array = array();
        \$sql = 'SELECT '.\$date_from_gadd.' as fix_date, COUNT(*) as visits
\t\t\t\tFROM '._DB_PREFIX_.'connections c
\t\t\t\tWHERE c.date_add BETWEEN '.ModuleGraph::getDateBetween().'
\t\t\t\t'.Shop::addSqlRestriction(false, 'c').'
\t\t\t\tGROUP BY '.\$date_from_gadd;
        \$visits = Db::getInstance()->query(\$sql);
        while (\$row = \$db->nextRow(\$visits)) {
            \$visit_array[\$row['fix_date']] = \$row['visits'];
        }

        foreach (\$data_table as \$row) {
            \$visits_today = (int)(isset(\$visit_array[\$row['fix_date']]) ? \$visit_array[\$row['fix_date']] : 0);

            \$date_from_greg = (\$this->context->cookie->stats_granularity != 42
                ? 'LIKE \\''.\$row['fix_date'].'%\\''
                : 'BETWEEN \\''.Tools::substr(\$row['fix_date'], 0, 10).' 00:00:00\\' AND DATE_ADD(\\''.Tools::substr(\$row['fix_date'], 0, 8).Tools::substr(\$row['fix_date'], 8, 2).' 23:59:59\\', INTERVAL 7 DAY)');
            \$row['registrations'] = Db::getInstance()->getValue('
\t\t\tSELECT COUNT(*) FROM '._DB_PREFIX_.'customer
\t\t\tWHERE date_add BETWEEN '.ModuleGraph::getDateBetween().'
\t\t\tAND date_add '.\$date_from_greg
                .Shop::addSqlRestriction(Shop::SHARE_CUSTOMER));

            \$this->html .= '
\t\t\t<tr>
\t\t\t\t<td>'.\$row['fix_date'].'</td>
\t\t\t\t<td class=\"text-center\">'.\$visits_today.'</td>
\t\t\t\t<td class=\"text-center\">'.(int)\$row['registrations'].'</td>
\t\t\t\t<td class=\"text-center\">'.(int)\$row['countOrders'].'</td>
\t\t\t\t<td class=\"text-center\">'.(int)\$row['countProducts'].'</td>
\t\t\t\t<td class=\"text-center\">'.(\$visits_today ? round(100 * (int)\$row['registrations'] / \$visits_today, 2).' %' : '-').'</td>
\t\t\t\t<td class=\"text-center\">'.(\$visits_today ? round(100 * (int)\$row['countOrders'] / \$visits_today, 2).' %' : '-').'</td>
\t\t\t\t<td class=\"text-right\">'.\$this->context->getCurrentLocale()->formatPrice(\$row['totalSales'], \$currency->iso_code).'</td>
\t\t\t</tr>';

            \$this->t1 += \$visits_today;
            \$this->t2 += (int)\$row['registrations'];
            \$this->t3 += (int)\$row['countOrders'];
            \$this->t4 += (int)\$row['countProducts'];
            \$this->t8 += \$row['totalSales'];
        }

        \$this->html .= '
\t\t\t\t<tr>
\t\t\t\t\t<th></th>
\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Visits', array(), 'Admin.Shopparameters.Feature').'</span></th>
\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Registrations', array(), 'Admin.Shopparameters.Feature').'</span></th>
\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Placed orders', array(), 'Modules.Statsforecast.Admin').'</span></th>
\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Bought items', array(), 'Modules.Statsforecast.Admin').'</span></th>
\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Percentage of registrations', array(), 'Modules.Statsforecast.Admin').'</span></th>
\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Percentage of orders', array(), 'Modules.Statsforecast.Admin').'</span></th>
\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Revenue', array(), 'Modules.Statsforecast.Admin').'</span></th>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>'.\$this->trans('Total', array(), 'Admin.Global').'</td>
\t\t\t\t\t<td class=\"text-center\">'.(int)\$this->t1.'</td>
\t\t\t\t\t<td class=\"text-center\">'.(int)\$this->t2.'</td>
\t\t\t\t\t<td class=\"text-center\">'.(int)\$this->t3.'</td>
\t\t\t\t\t<td class=\"text-center\">'.(int)\$this->t4.'</td>
\t\t\t\t\t<td class=\"text-center\">--</td>
\t\t\t\t\t<td class=\"text-center\">--</td>
\t\t\t\t\t<td class=\"text-right\">'.\$this->context->getCurrentLocale()->formatPrice(\$this->t8, \$currency->iso_code).'</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>'.\$this->trans('Average', array(), 'Modules.Statsforecast.Admin').'</td>
\t\t\t\t\t<td class=\"text-center\">'.(int)(\$this->t1 / \$interval_avg).'</td>
\t\t\t\t\t<td class=\"text-center\">'.(int)(\$this->t2 / \$interval_avg).'</td>
\t\t\t\t\t<td class=\"text-center\">'.(int)(\$this->t3 / \$interval_avg).'</td>
\t\t\t\t\t<td class=\"text-center\">'.(int)(\$this->t4 / \$interval_avg).'</td>
\t\t\t\t\t<td class=\"text-center\">'.(\$this->t1 ? round(100 * \$this->t2 / \$this->t1, 2).' %' : '-').'</td>
\t\t\t\t\t<td class=\"text-center\">'.(\$this->t1 ? round(100 * \$this->t3 / \$this->t1, 2).' %' : '-').'</td>
\t\t\t\t\t<td class=\"text-right\">'.\$this->context->getCurrentLocale()->formatPrice(\$this->t8 / \$interval_avg, \$currency->iso_code).'</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>'.\$this->trans('Forecast', array(), 'Modules.Statsforecast.Admin').'</td>
\t\t\t\t\t<td class=\"text-center\">'.(int)(\$this->t1 * \$prop30).'</td>
\t\t\t\t\t<td class=\"text-center\">'.(int)(\$this->t2 * \$prop30).'</td>
\t\t\t\t\t<td class=\"text-center\">'.(int)(\$this->t3 * \$prop30).'</td>
\t\t\t\t\t<td class=\"text-center\">'.(int)(\$this->t4 * \$prop30).'</td>
\t\t\t\t\t<td class=\"text-center\">--</td>
\t\t\t\t\t<td class=\"text-center\">--</td>
\t\t\t\t\t<td class=\"text-right\">'.\$this->context->getCurrentLocale()->formatPrice(\$this->t8 * \$prop30, \$currency->iso_code).'</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t</div>';

        \$ca = \$this->getRealCA();

        \$sql = 'SELECT COUNT(DISTINCT c.id_guest)
\t\tFROM '._DB_PREFIX_.'connections c
\t\tWHERE c.date_add BETWEEN '.ModuleGraph::getDateBetween().'
\t\t'.Shop::addSqlRestriction(false, 'c');
        \$visitors = Db::getInstance()->getValue(\$sql);

        \$sql = 'SELECT COUNT(DISTINCT g.id_customer)
\t\tFROM '._DB_PREFIX_.'connections c
\t\tINNER JOIN '._DB_PREFIX_.'guest g ON c.id_guest = g.id_guest
\t\tWHERE g.id_customer != 0
\t\tAND c.date_add BETWEEN '.ModuleGraph::getDateBetween().'
\t\t'.Shop::addSqlRestriction(false, 'c');
        \$customers = Db::getInstance()->getValue(\$sql);

        \$sql = 'SELECT COUNT(DISTINCT c.id_cart)
\t\tFROM '._DB_PREFIX_.'cart c
\t\tINNER JOIN '._DB_PREFIX_.'cart_product cp on c.id_cart = cp.id_cart
\t\tWHERE (c.date_add BETWEEN '.ModuleGraph::getDateBetween().' OR c.date_upd BETWEEN '.ModuleGraph::getDateBetween().')
\t\t'.Shop::addSqlRestriction(false, 'c');
        \$carts = Db::getInstance()->getValue(\$sql);

        \$sql = 'SELECT COUNT(DISTINCT c.id_cart)
\t\tFROM '._DB_PREFIX_.'cart c
\t\tINNER JOIN '._DB_PREFIX_.'cart_product cp on c.id_cart = cp.id_cart
\t\tWHERE (c.date_add BETWEEN '.ModuleGraph::getDateBetween().' OR c.date_upd BETWEEN '.ModuleGraph::getDateBetween().')
\t\tAND id_address_invoice != 0
\t\t'.Shop::addSqlRestriction(false, 'c');
        \$fullcarts = Db::getInstance()->getValue(\$sql);

        \$sql = 'SELECT COUNT(*)
\t\tFROM '._DB_PREFIX_.'orders o
\t\tWHERE o.valid = 1
\t\tAND o.date_add BETWEEN '.ModuleGraph::getDateBetween().'
\t\t'.Shop::addSqlRestriction(Shop::SHARE_ORDER, 'o');
        \$orders = Db::getInstance()->getValue(\$sql);

        \$this->html .= '
\t\t<div class=\"row row-margin-bottom\">
\t\t\t<h4><i class=\"icon-filter\"></i> '.\$this->trans('Conversion', array(), 'Modules.Statsforecast.Admin').'</h4>
\t\t</div>
\t\t<div class=\"row row-margin-bottom\">
\t\t\t<table class=\"table\">
\t\t\t\t<tbody>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td rowspan=\"2\" class=\"text-center\">
\t\t\t\t\t\t\t<p>'.\$this->trans('Visitors', array(), 'Admin.Shopparameters.Feature').'</p>
\t\t\t\t\t\t\t<p>'.\$visitors.'</p>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t<p><i class=\"icon-chevron-right\"></i></p>
\t\t\t\t\t\t\t<p>'.round(100 * \$customers / max(1, \$visitors), 2).' %</p>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t<p>'.\$this->trans('Accounts', array(), 'Modules.Statsforecast.Admin').'</p>
\t\t\t\t\t\t\t<p>'.\$customers.'</p>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t<p><i class=\"icon-chevron-right\"></i></p>
\t\t\t\t\t\t\t<p>'.round(100 * \$fullcarts / max(1, \$customers), 2).' %</p>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td rowspan=\"2\" class=\"text-center\">
\t\t\t\t\t\t\t<p>'.\$this->trans('Full carts', array(), 'Modules.Statsforecast.Admin').'</p>
\t\t\t\t\t\t\t<p>'.\$fullcarts.'</p>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td rowspan=\"2\" class=\"text-center\">
\t\t\t\t\t\t\t<p><i class=\"icon-chevron-right\"></i></p>
\t\t\t\t\t\t\t<p>'.round(100 * \$orders / max(1, \$fullcarts), 2).' %</p>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td rowspan=\"2\" class=\"text-center\">
\t\t\t\t\t\t\t<p>'.\$this->trans('Orders', array(), 'Admin.Global').'</p>
\t\t\t\t\t\t\t<p>'.\$orders.'</p>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td rowspan=\"2\" class=\"text-center\">
\t\t\t\t\t\t\t<p>'.\$this->trans('Registered visitors', array(), 'Modules.Statsforecast.Admin').'</p>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td rowspan=\"2\" class=\"text-center\">
\t\t\t\t\t\t\t<i class=\"icon-chevron-right\"></i>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td rowspan=\"2\" class=\"text-center\">
\t\t\t\t\t\t\t<p>'.round(100 * \$orders / max(1, \$customers), 2).' %</p>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td rowspan=\"2\" class=\"text-center\">
\t\t\t\t\t\t\t<i class=\"icon-chevron-right\"></i>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td rowspan=\"2\" class=\"text-center\">
\t\t\t\t\t\t\t<p>'.\$this->trans('Orders', array(), 'Admin.Global').'</p>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td rowspan=\"2\" class=\"text-center\">
\t\t\t\t\t\t\t<p>'.\$this->trans('Visitors', array(), 'Admin.Shopparameters.Feature').'</p>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td rowspan=\"2\" class=\"text-center\">
\t\t\t\t\t\t\t<i class=\"icon-chevron-right\"></i>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td rowspan=\"2\" class=\"text-center\">
\t\t\t\t\t\t\t<p>'.round(100 * \$orders / max(1, \$visitors), 2).' %</p>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td rowspan=\"2\" class=\"center\">
\t\t\t\t\t\t\t<i class=\"icon-chevron-right\"></i>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td rowspan=\"2\" class=\"text-center\">
\t\t\t\t\t\t\t<p>'.\$this->trans('Orders', array(), 'Admin.Global').'</p>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t<p><i class=\"icon-chevron-right\"></i></p>
\t\t\t\t\t\t\t<p>'.round(100 * \$carts / max(1, \$visitors)).' %</p>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t<p>'.\$this->trans('Carts', array(), 'Admin.Global').'</p>
\t\t\t\t\t\t\t<p>'.\$carts.'</p>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t<p><i class=\"icon-chevron-right\"></i></p>
\t\t\t\t\t\t\t<p>'.round(100 * \$fullcarts / max(1, \$carts)).' %</p>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t\t<div class=\"alert alert-info\">
\t\t\t<p>'.\$this->trans('A simple statistical calculation lets you know the monetary value of your visitors:', array(), 'Modules.Statsforecast.Admin').'</p>
\t\t\t<p>'.\$this->trans('On average, each visitor places an order for this amount:', array(), 'Modules.Statsforecast.Admin').' <b>'.\$this->context->getCurrentLocale()->formatPrice(\$ca['ventil']['total'] / max(1, \$visitors), \$currency->iso_code).'.</b></p>
\t\t\t<p>'.\$this->trans('On average, each registered visitor places an order for this amount:', array(), 'Modules.Statsforecast.Admin').' <b>'.\$this->context->getCurrentLocale()->formatPrice(\$ca['ventil']['total'] / max(1, \$customers), \$currency->iso_code).'</b>.</p>
\t\t</div>';

        \$from = strtotime(\$employee->stats_date_from.' 00:00:00');
        \$to = strtotime(\$employee->stats_date_to.' 23:59:59');
        \$interval = (\$to - \$from) / 60 / 60 / 24;

        \$this->html .= '
\t\t\t<div class=\"row row-margin-bottom\">
\t\t\t\t<h4><i class=\"icon-money\"></i> '.\$this->trans('Payment distribution', array(), 'Modules.Statsforecast.Admin').'</h4>
\t\t\t\t<div class=\"alert alert-info\">'
            .\$this->trans('The amounts include taxes, so you can get an estimation of the commission due to the payment method.', array(), 'Modules.Statsforecast.Admin').'
\t\t\t\t</div>
\t\t\t\t<form id=\"cat\" action=\"'.Tools::safeOutput(\$ru).'#payment\" method=\"post\" class=\"form-horizontal\">
\t\t\t\t\t<div class=\"row row-margin-bottom\">
\t\t\t\t\t\t<label class=\"control-label col-lg-3\">
\t\t\t\t\t\t\t'.\$this->trans('Zone', array(), 'Admin.Global').'
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"submitIdZone\" value=\"1\" />
\t\t\t\t\t\t\t<select name=\"stats_id_zone\" onchange=\"this.form.submit();\">
\t\t\t\t\t\t\t\t<option value=\"0\">'.\$this->trans('-- No filter --', array(), 'Modules.Statsforecast.Admin').'</option>';
        foreach (Zone::getZones() as \$zone) {
            \$this->html .= '<option value=\"'.(int)\$zone['id_zone'].'\" '.(\$this->context->cookie->stats_id_zone == \$zone['id_zone'] ? 'selected=\"selected\"' : '').'>'.\$zone['name'].'</option>';
        }
        \$this->html .= '
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t\t<table class=\"table\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Module', array(), 'Modules.Statsforecast.Admin').'</span></th>
\t\t\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Orders', array(), 'Admin.Global').'</span></th>
\t\t\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Sales', array(), 'Admin.Global').'</span></th>
\t\t\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Average cart value', array(), 'Modules.Statsforecast.Admin').'</span></th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>';
        foreach (\$ca['payment'] as \$payment) {
            \$this->html .= '
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"text-center\">'.\$payment['payment_method'].'</td>
\t\t\t\t\t\t\t<td class=\"text-center\">'.(int)\$payment['nb'].'</td>
\t\t\t\t\t\t\t<td class=\"text-right\">'.\$this->context->getCurrentLocale()->formatPrice(\$payment['total'], \$currency->iso_code).'</td>
\t\t\t\t\t\t\t<td class=\"text-right\">'.\$this->context->getCurrentLocale()->formatPrice(\$payment['total'] / (int)\$payment['nb'], \$currency->iso_code).'</td>
\t\t\t\t\t\t</tr>';
        }
        \$this->html .= '
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t\t<div class=\"row row-margin-bottom\">
\t\t\t\t<h4><i class=\"icon-sitemap\"></i> '.\$this->trans('Category distribution', array(), 'Modules.Statsforecast.Admin').'</h4>
\t\t\t\t<form id=\"cat_1\" action=\"'.Tools::safeOutput(\$ru).'#cat\" method=\"post\" class=\"form-horizontal\">
\t\t\t\t\t<div class=\"row row-margin-bottom\">
\t\t\t\t\t\t<label class=\"control-label col-lg-3\">
\t\t\t\t\t\t\t'.\$this->trans('Zone', array(), 'Admin.Global').'
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"submitIdZone\" value=\"1\" />
\t\t\t\t\t\t\t<select name=\"stats_id_zone\" onchange=\"this.form.submit();\">
\t\t\t\t\t\t\t\t<option value=\"0\">'.\$this->trans('-- No filter --', array(), 'Modules.Statsforecast.Admin').'</option>';
        foreach (Zone::getZones() as \$zone) {
            \$this->html .= '<option value=\"'.(int)\$zone['id_zone'].'\" '.(\$this->context->cookie->stats_id_zone == \$zone['id_zone'] ? 'selected=\"selected\"' : '').'>'.\$zone['name'].'</option>';
        }
        \$this->html .= '
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t\t<table class=\"table\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Category', array(), 'Admin.Catalog.Feature').'</span></th>
\t\t\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Products sold', array(), 'Modules.Statsforecast.Admin').'</span></th>
\t\t\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Sales', array(), 'Admin.Global').'</span></th>
\t\t\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Percentage of products sold', array(), 'Modules.Statsforecast.Admin').'</span></th>
\t\t\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Percentage of sales', array(), 'Modules.Statsforecast.Admin').'</span></th>
\t\t\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Average price', array(), 'Admin.Global').'</span></th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>';
        foreach (\$ca['cat'] as \$catrow) {
            \$this->html .= '
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"text-center\">'.(empty(\$catrow['name']) ? \$this->trans('Unknown', array(), 'Admin.Shopparameters.Feature') : \$catrow['name']).'</td>
\t\t\t\t\t\t\t<td class=\"text-center\">'.\$catrow['orderQty'].'</td>
\t\t\t\t\t\t\t<td class=\"text-right\">'.\$this->context->getCurrentLocale()->formatPrice(\$catrow['orderSum'], \$currency->iso_code).'</td>
\t\t\t\t\t\t\t<td class=\"text-center\">'.number_format((100 * \$catrow['orderQty'] / \$this->t4), 1, '.', ' ').'%</td>
\t\t\t\t\t\t\t<td class=\"text-center\">'.((int)\$ca['ventil']['total'] ? number_format((100 * \$catrow['orderSum'] / \$ca['ventil']['total']), 1, '.', ' ') : '0').'%</td>
\t\t\t\t\t\t\t<td class=\"text-right\">'.\$this->context->getCurrentLocale()->formatPrice(\$catrow['priveAvg'], \$currency->iso_code).'</td>
\t\t\t\t\t\t</tr>';
        }
        \$this->html .= '
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t\t<div class=\"row row-margin-bottom\">
\t\t\t\t<h4><i class=\"icon-flag\"></i> '.\$this->trans('Language distribution', array(), 'Modules.Statsforecast.Admin').'</h4>
\t\t\t\t<table class=\"table\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Language', array(), 'Admin.Global').'</span></th>
\t\t\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Sales', array(), 'Admin.Global').'</span></th>
\t\t\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Percentage', array(), 'Admin.Global').'</span></th>
\t\t\t\t\t\t\t<th class=\"text-center\" colspan=\"2\"><span class=\"title_box active\">'.\$this->trans('Growth', array(), 'Modules.Statsforecast.Admin').'</span></th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>';
        foreach (\$ca['lang'] as \$ophone => \$amount) {
            \$percent = (int)(\$ca['langprev'][\$ophone]) ? number_format((100 * (int) \$amount / \$ca['langprev'][\$ophone]) - 100, 1, '.', ' ') : '&#x221e;';
            \$this->html .= '
\t\t\t\t\t<tr '.((\$percent < 0) ? 'class=\"alt_row\"' : '').'>
\t\t\t\t\t\t<td class=\"text-center\">'.\$ophone.'</td>
\t\t\t\t\t\t<td class=\"text-right\">'.\$this->context->getCurrentLocale()->formatPrice((int) \$amount, \$currency->iso_code).'</td>
\t\t\t\t\t\t<td class=\"text-center\">'.((int)\$ca['ventil']['total'] ? number_format((100 * (int) \$amount / \$ca['ventil']['total']), 1, '.', ' ').'%' : '-').'</td>
\t\t\t\t\t\t<td class=\"text-center\">'.((\$percent > 0 || \$percent == '&#x221e;') ? '<img src=\"../img/admin/arrow_up.png\" alt=\"\" />' : '<img src=\"../img/admin/arrow_down.png\" alt=\"\" /> ').'</td>
\t\t\t\t\t\t<td class=\"text-center\">'.((\$percent > 0 || \$percent == '&#x221e;') ? '+' : '').\$percent.'%</td>
\t\t\t\t\t</tr>';
        }
        \$this->html .= '
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t\t<div class=\"row row-margin-bottom\">
\t\t\t\t<h4><i class=\"icon-map-marker\"></i> '.\$this->trans('Zone distribution', array(), 'Modules.Statsforecast.Admin').'</h4>
\t\t\t\t<table class=\"table\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Zone', array(), 'Admin.Global').'</span></th>
\t\t\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Orders', array(), 'Admin.Global').'</span></th>
\t\t\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Sales', array(), 'Admin.Global').'</span></th>
\t\t\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Percentage of orders', array(), 'Modules.Statsforecast.Admin').'</span></th>
\t\t\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Percentage of sales', array(), 'Modules.Statsforecast.Admin').'</span></th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>';
        foreach (\$ca['zones'] as \$zone) {
            \$this->html .= '
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"text-center\">'.(isset(\$zone['name']) ? \$zone['name'] : \$this->trans('Undefined', array(), 'Admin.Shopparameters.Feature')).'</td>
\t\t\t\t\t\t<td class=\"text-center\">'.(int)(\$zone['nb']).'</td>
\t\t\t\t\t\t<td class=\"text-right\">'.\$this->context->getCurrentLocale()->formatPrice(\$zone['total'], \$currency->iso_code).'</td>
\t\t\t\t\t\t<td class=\"text-center\">'.(\$ca['ventil']['nb'] ? number_format((100 * \$zone['nb'] / \$ca['ventil']['nb']), 1, '.', ' ') : '0').'%</td>
\t\t\t\t\t\t<td class=\"text-center\">'.((int)\$ca['ventil']['total'] ? number_format((100 * \$zone['total'] / \$ca['ventil']['total']), 1, '.', ' ') : '0').'%</td>
\t\t\t\t\t</tr>';
        }
        \$this->html .= '
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t\t<div class=\"row row-margin-bottom\">
\t\t\t\t<h4><i class=\"icon-money\"></i> '.\$this->trans('Currency distribution', array(), 'Modules.Statsforecast.Admin').'</h4>
\t\t\t\t<form id=\"cat_2\" action=\"'.Tools::safeOutput(\$ru).'#currencies\" method=\"post\" class=\"form-horizontal\">
\t\t\t\t\t<div class=\"row row-margin-bottom\">
\t\t\t\t\t\t<label class=\"control-label col-lg-3\">
\t\t\t\t\t\t\t'.\$this->trans('Zone', array(), 'Admin.Global').'
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"submitIdZone\" value=\"1\" />
\t\t\t\t\t\t\t<select name=\"stats_id_zone\" onchange=\"this.form.submit();\">
\t\t\t\t\t\t\t\t<option value=\"0\">'.\$this->trans('-- No filter --', array(), 'Modules.Statsforecast.Admin').'</option>';
        foreach (Zone::getZones() as \$zone) {
            \$this->html .= '<option value=\"'.(int)\$zone['id_zone'].'\" '.(\$this->context->cookie->stats_id_zone == \$zone['id_zone'] ? 'selected=\"selected\"' : '').'>'.\$zone['name'].'</option>';
        }
        \$this->html .= '
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t\t<table class=\"table\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Currency', array(), 'Admin.Global').'</span></th>
\t\t\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Orders', array(), 'Admin.Global').'</span></th>
\t\t\t\t\t\t\t<th class=\"text-right\"><span class=\"title_box active\">'.\$this->trans('Sales (converted)', array(), 'Modules.Statsforecast.Admin').'</span></th>
\t\t\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Percentage of orders', array(), 'Modules.Statsforecast.Admin').'</span></th>
\t\t\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Percentage of sales', array(), 'Modules.Statsforecast.Admin').'</span></th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>';
        foreach (\$ca['currencies'] as \$currency_row) {
            \$this->html .= '
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"text-center\">'.\$currency_row['name'].'</td>
\t\t\t\t\t\t\t<td class=\"text-center\">'.(int)(\$currency_row['nb']).'</td>
\t\t\t\t\t\t\t<td class=\"text-right\">'.\$this->context->getCurrentLocale()->formatPrice(\$currency_row['total'], \$currency->iso_code).'</td>
\t\t\t\t\t\t\t<td class=\"text-center\">'.(\$ca['ventil']['nb'] ? number_format((100 * \$currency_row['nb'] / \$ca['ventil']['nb']), 1, '.', ' ') : '0').'%</td>
\t\t\t\t\t\t\t<td class=\"text-center\">'.((int)\$ca['ventil']['total'] ? number_format((100 * \$currency_row['total'] / \$ca['ventil']['total']), 1, '.', ' ') : '0').'%</td>
\t\t\t\t\t\t</tr>';
        }
        \$this->html .= '
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t\t<div class=\"row row-margin-bottom\">
\t\t\t\t<h4><i class=\"icon-ticket\"></i> '.\$this->trans('Attribute distribution', array(), 'Modules.Statsforecast.Admin').'</h4>
\t\t\t\t<table class=\"table\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Group', array(), 'Admin.Global').'</span></th>
\t\t\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Attribute', array(), 'Admin.Global').'</span></th>
\t\t\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Quantity of products sold', array(), 'Modules.Statsforecast.Admin').'</span></th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>';
        foreach (\$ca['attributes'] as \$attribut) {
            \$this->html .= '
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"text-center\">'.\$attribut['gname'].'</td>
\t\t\t\t\t\t\t<td class=\"text-center\">'.\$attribut['aname'].'</td>
\t\t\t\t\t\t\t<td class=\"text-center\">'.(int)(\$attribut['total']).'</td>
\t\t\t\t\t\t</tr>';
        }
        \$this->html .= '
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>';

        return \$this->html;
    }

    private function getRealCA()
    {
        \$employee = \$this->context->employee;
        \$ca = array();

        \$where = \$join = '';
        if ((int)\$this->context->cookie->stats_id_zone) {
            \$join = ' LEFT JOIN `'._DB_PREFIX_.'address` a ON o.id_address_invoice = a.id_address LEFT JOIN `'._DB_PREFIX_.'country` co ON co.id_country = a.id_country';
            \$where = ' AND co.id_zone = '.(int)\$this->context->cookie->stats_id_zone.' ';
        }

        \$sql = 'SELECT SUM(od.`unit_price_tax_excl` * od.`product_quantity` / o.conversion_rate) as orderSum, SUM(od.product_quantity) as orderQty, cl.name, AVG(od.`unit_price_tax_excl` / o.conversion_rate) as priveAvg
\t\t\t\tFROM `'._DB_PREFIX_.'orders` o
\t\t\t\tSTRAIGHT_JOIN `'._DB_PREFIX_.'order_detail` od ON o.id_order = od.id_order
\t\t\t\tLEFT JOIN `'._DB_PREFIX_.'product` p ON p.id_product = od.product_id
\t\t\t\t'.Shop::addSqlAssociation('product', 'p').'
\t\t\t\tLEFT JOIN `'._DB_PREFIX_.'category_lang` cl ON (product_shop.id_category_default = cl.id_category AND cl.id_lang = '.(int)\$this->context->language->id.Shop::addSqlRestrictionOnLang('cl').')
\t\t\t\t'.\$join.'
\t\t\t\tWHERE o.valid = 1
\t\t\t\t\tAND o.`invoice_date` BETWEEN '.ModuleGraph::getDateBetween().'
\t\t\t\t\t'.\$where.'
\t\t\t\t\t'.Shop::addSqlRestriction(Shop::SHARE_ORDER, 'o').'
\t\t\t\tGROUP BY product_shop.id_category_default';
        \$ca['cat'] = Db::getInstance()->executeS(\$sql);
        uasort(\$ca['cat'], 'statsforecast_sort');

        \$lang_values = '';
        \$sql = 'SELECT l.id_lang, l.iso_code
\t\t\t\tFROM `'._DB_PREFIX_.'lang` l
\t\t\t\t'.Shop::addSqlAssociation('lang', 'l').'
\t\t\t\tWHERE l.active = 1';
        \$languages = Db::getInstance()->executeS(\$sql);
        foreach (\$languages as \$language) {
            \$lang_values .= 'SUM(IF(o.id_lang = '.(int)\$language['id_lang'].', total_paid_tax_excl / o.conversion_rate, 0)) as '.pSQL(\$language['iso_code']).',';
        }
        \$lang_values = rtrim(\$lang_values, ',');

        if (\$lang_values) {
            \$sql = 'SELECT '.\$lang_values.'
\t\t\t\t\tFROM `'._DB_PREFIX_.'orders` o
\t\t\t\t\tWHERE o.valid = 1
\t\t\t\t\tAND o.`invoice_date` BETWEEN '.ModuleGraph::getDateBetween().'
\t\t\t\t\t'.Shop::addSqlRestriction(Shop::SHARE_ORDER, 'o');
            \$ca['lang'] = Db::getInstance()->getRow(\$sql);
            arsort(\$ca['lang']);

            \$sql = 'SELECT '.\$lang_values.'
\t\t\t\t\tFROM `'._DB_PREFIX_.'orders` o
\t\t\t\t\tWHERE o.valid = 1
\t\t\t\t\t\tAND ADDDATE(o.`invoice_date`, interval 30 day) BETWEEN \\''.\$employee->stats_date_from.' 00:00:00\\' AND \\''.min(date('Y-m-d H:i:s'), \$employee->stats_date_to.' 23:59:59').'\\'
\t\t\t\t\t\t'.Shop::addSqlRestriction(Shop::SHARE_ORDER, 'o');
            \$ca['langprev'] = Db::getInstance()->getRow(\$sql);
        } else {
            \$ca['lang'] = array();
            \$ca['langprev'] = array();
        }

        \$sql = 'SELECT reference
\t\t\t\t\tFROM `'._DB_PREFIX_.'orders` o
\t\t\t\t\t'.\$join.'
\t\t\t\t\tWHERE o.valid
\t\t\t\t\t'.\$where.'
\t\t\t\t\t'.Shop::addSqlRestriction(Shop::SHARE_ORDER, 'o').'
\t\t\t\t\tAND o.invoice_date BETWEEN '.ModuleGraph::getDateBetween().'';
        \$result = Db::getInstance()->executeS(\$sql);
        if (count(\$result)) {
            \$references = array();
            foreach (\$result as \$r) {
                \$references[] = \$r['reference'];
            }
            \$sql = 'SELECT op.payment_method, SUM(op.amount / op.conversion_rate) as total, COUNT(DISTINCT op.order_reference) as nb
\t\t\t\t\tFROM `'._DB_PREFIX_.'order_payment` op
\t\t\t\t\tWHERE op.`date_add` BETWEEN '.ModuleGraph::getDateBetween().'
\t\t\t\t\tAND op.order_reference IN (
\t\t\t\t\t\t\"'.implode('\",\"', \$references).'\"
\t\t\t\t\t)
\t\t\t\t\tGROUP BY op.payment_method
\t\t\t\t\tORDER BY total DESC';
            \$ca['payment'] = Db::getInstance()->executeS(\$sql);
        } else {
            \$ca['payment'] = array();
        }

        \$sql = 'SELECT z.name, SUM(o.total_paid_tax_excl / o.conversion_rate) as total, COUNT(*) as nb
\t\t\t\tFROM `'._DB_PREFIX_.'orders` o
\t\t\t\tLEFT JOIN `'._DB_PREFIX_.'address` a ON o.id_address_invoice = a.id_address
\t\t\t\tLEFT JOIN `'._DB_PREFIX_.'country` c ON c.id_country = a.id_country
\t\t\t\tLEFT JOIN `'._DB_PREFIX_.'zone` z ON z.id_zone = c.id_zone
\t\t\t\tWHERE o.valid = 1
\t\t\t\t\tAND o.`invoice_date` BETWEEN '.ModuleGraph::getDateBetween().'
\t\t\t\t\t'.Shop::addSqlRestriction(Shop::SHARE_ORDER, 'o').'
\t\t\t\tGROUP BY c.id_zone
\t\t\t\tORDER BY total DESC';
        \$ca['zones'] = Db::getInstance()->executeS(\$sql);

        \$sql = 'SELECT cu.name, SUM(o.total_paid_tax_excl / o.conversion_rate) as total, COUNT(*) as nb
\t\t\t\tFROM `'._DB_PREFIX_.'orders` o
\t\t\t\tLEFT JOIN `'._DB_PREFIX_.'currency` cu ON o.id_currency = cu.id_currency
\t\t\t\t'.\$join.'
\t\t\t\tWHERE o.valid = 1
\t\t\t\t\tAND o.`invoice_date` BETWEEN '.ModuleGraph::getDateBetween().'
\t\t\t\t\t'.\$where.'
\t\t\t\t\t'.Shop::addSqlRestriction(Shop::SHARE_ORDER, 'o').'
\t\t\t\tGROUP BY o.id_currency
\t\t\t\tORDER BY total DESC';
        \$ca['currencies'] = Db::getInstance()->executeS(\$sql);

        \$sql = 'SELECT SUM(total_paid_tax_excl / o.conversion_rate) as total, COUNT(*) AS nb
\t\t\t\tFROM `'._DB_PREFIX_.'orders` o
\t\t\t\tWHERE o.valid = 1
\t\t\t\t\tAND o.`invoice_date` BETWEEN '.ModuleGraph::getDateBetween().'
\t\t\t\t\t'.Shop::addSqlRestriction(Shop::SHARE_ORDER, 'o');
        \$ca['ventil'] = Db::getInstance()->getRow(\$sql);

        \$sql = 'SELECT /*pac.id_attribute,*/ agl.name as gname, al.name as aname, COUNT(*) as total
\t\t\t\tFROM '._DB_PREFIX_.'orders o
\t\t\t\tLEFT JOIN '._DB_PREFIX_.'order_detail od ON o.id_order = od.id_order
\t\t\t\tINNER JOIN '._DB_PREFIX_.'product_attribute_combination pac ON od.product_attribute_id = pac.id_product_attribute
\t\t\t\tINNER JOIN '._DB_PREFIX_.'attribute a ON pac.id_attribute = a.id_attribute
\t\t\t\tINNER JOIN '._DB_PREFIX_.'attribute_group_lang agl ON (a.id_attribute_group = agl.id_attribute_group AND agl.id_lang = '.(int)\$this->context->language->id.')
\t\t\t\tINNER JOIN '._DB_PREFIX_.'attribute_lang al ON (a.id_attribute = al.id_attribute AND al.id_lang = '.(int)\$this->context->language->id.')
\t\t\t\tWHERE o.valid = 1
\t\t\t\t\tAND o.`invoice_date` BETWEEN '.ModuleGraph::getDateBetween().'
\t\t\t\t\t'.Shop::addSqlRestriction(Shop::SHARE_ORDER, 'o').'
\t\t\t\tGROUP BY pac.id_attribute';
        \$ca['attributes'] = Db::getInstance()->executeS(\$sql);

        return \$ca;
    }
}

function statsforecast_sort(\$a, \$b)
{
    if (\$a['orderSum'] == \$b['orderSum']) {
        return 0;
    }

    return (\$a['orderSum'] > \$b['orderSum']) ? -1 : 1;
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/statsforecast/statsforecast.php";
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

class statsforecast extends Module
{
    private \$html = '';
    private \$t1 = 0;
    private \$t2 = 0;
    private \$t3 = 0;
    private \$t4 = 0;
    private \$t5 = 0;
    private \$t6 = 0;
    private \$t7 = 0;
    private \$t8 = 0;

    public function __construct()
    {
        \$this->name = 'statsforecast';
        \$this->tab = 'administration';
        \$this->version = '2.0.4';
        \$this->author = 'PrestaShop';
        \$this->need_instance = 0;

        parent::__construct();

        \$this->displayName = \$this->trans('Stats Dashboard', array(), 'Modules.Statsforecast.Admin');
        \$this->description = \$this->trans('Enrich your stats, add a summary of all your current statistics on your back office.', array(), 'Modules.Statsforecast.Admin');
        \$this->ps_versions_compliancy = array('min' => '1.7.6.0', 'max' => _PS_VERSION_);
    }

    public function install()
    {
        return (parent::install() && \$this->registerHook('displayAdminStatsModules'));
    }

    public function getContent()
    {
        Tools::redirectAdmin('index.php?controller=AdminStats&module=statsforecast&token='.Tools::getAdminTokenLite('AdminStats'));
    }

    public function hookDisplayAdminStatsModules()
    {
        \$ru = AdminController::\$currentIndex.'&module='.\$this->name.'&token='.Tools::getValue('token');

        \$db = Db::getInstance();

        if (!isset(\$this->context->cookie->stats_granularity)) {
            \$this->context->cookie->stats_granularity = 10;
        }
        if (Tools::isSubmit('submitIdZone')) {
            \$this->context->cookie->stats_id_zone = (int)Tools::getValue('stats_id_zone');
        }
        if (Tools::isSubmit('submitGranularity')) {
            \$this->context->cookie->stats_granularity = Tools::getValue('stats_granularity');
        }

        \$currency = \$this->context->currency;
        \$employee = \$this->context->employee;

        \$from = max(strtotime(_PS_CREATION_DATE_.' 00:00:00'), strtotime(\$employee->stats_date_from.' 00:00:00'));
        \$to = strtotime(\$employee->stats_date_to.' 23:59:59');
        \$to2 = min(time(), \$to);
        \$interval = (\$to - \$from) / 60 / 60 / 24;
        \$interval2 = (\$to2 - \$from) / 60 / 60 / 24;
        \$prop30 = \$interval / \$interval2;

        if (\$this->context->cookie->stats_granularity == 7) {
            \$interval_avg = \$interval2 / 30;
        }
        if (\$this->context->cookie->stats_granularity == 4) {
            \$interval_avg = \$interval2 / 365;
        }
        if (\$this->context->cookie->stats_granularity == 10) {
            \$interval_avg = \$interval2;
        }
        if (\$this->context->cookie->stats_granularity == 42) {
            \$interval_avg = \$interval2 / 7;
        }

        \$data_table = array();
        if (\$this->context->cookie->stats_granularity == 10) {
            for (\$i = \$from; \$i <= \$to2; \$i = strtotime('+1 day', \$i)) {
                \$data_table[date('Y-m-d', \$i)] = array(
                    'fix_date' => date('Y-m-d', \$i),
                    'countOrders' => 0,
                    'countProducts' => 0,
                    'totalSales' => 0
                );
            }
        }

        \$date_from_gadd = (\$this->context->cookie->stats_granularity != 42
            ? 'LEFT(date_add, '.(int)\$this->context->cookie->stats_granularity.')'
            : 'IFNULL(MAKEDATE(YEAR(date_add),DAYOFYEAR(date_add)-WEEKDAY(date_add)), CONCAT(YEAR(date_add),\"-01-01*\"))');

        \$date_from_ginvoice = (\$this->context->cookie->stats_granularity != 42
            ? 'LEFT(invoice_date, '.(int)\$this->context->cookie->stats_granularity.')'
            : 'IFNULL(MAKEDATE(YEAR(invoice_date),DAYOFYEAR(invoice_date)-WEEKDAY(invoice_date)), CONCAT(YEAR(invoice_date),\"-01-01*\"))');

        \$result = \$db->query('
\t\tSELECT
\t\t\t'.\$date_from_ginvoice.' as fix_date,
\t\t\tCOUNT(*) as countOrders,
\t\t\tSUM((SELECT SUM(od.product_quantity) FROM '._DB_PREFIX_.'order_detail od WHERE o.id_order = od.id_order)) as countProducts,
\t\t\tSUM(o.total_paid_tax_excl / o.conversion_rate) as totalSales
\t\tFROM '._DB_PREFIX_.'orders o
\t\tWHERE o.valid = 1
\t\tAND o.invoice_date BETWEEN '.ModuleGraph::getDateBetween().'
\t\t'.Shop::addSqlRestriction(Shop::SHARE_ORDER, 'o').'
\t\tGROUP BY '.\$date_from_ginvoice);
        while (\$row = \$db->nextRow(\$result)) {
            \$data_table[\$row['fix_date']] = \$row;
        }

        \$this->html .= '<div>
\t\t\t<div class=\"panel-heading\"><i class=\"icon-dashboard\"></i> '.\$this->displayName.'</div>
\t\t\t<div class=\"alert alert-info\">'.\$this->trans('The listed amounts do not include tax.', array(), 'Modules.Statsforecast.Admin').'</div>
\t\t\t<form id=\"granularity\" action=\"'.Tools::safeOutput(\$ru).'#granularity\" method=\"post\" class=\"form-horizontal\">
\t\t\t\t<div class=\"row row-margin-bottom\">
\t\t\t\t\t<label class=\"control-label col-lg-3\">
\t\t\t\t\t\t'.\$this->trans('Time frame', array(), 'Modules.Statsforecast.Admin').'
\t\t\t\t\t</label>
\t\t\t\t\t<div class=\"col-lg-2\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"submitGranularity\" value=\"1\" />
\t\t\t\t\t\t<select name=\"stats_granularity\" onchange=\"this.form.submit();\">
\t\t\t\t\t\t\t<option value=\"10\">'.\$this->trans('Daily', array(), 'Modules.Statsforecast.Admin').'</option>
\t\t\t\t\t\t\t<option value=\"42\" '.(\$this->context->cookie->stats_granularity == '42' ? 'selected=\"selected\"' : '').'>'.\$this->trans('Weekly', array(), 'Modules.Statsforecast.Admin').'</option>
\t\t\t\t\t\t\t<option value=\"7\" '.(\$this->context->cookie->stats_granularity == '7' ? 'selected=\"selected\"' : '').'>'.\$this->trans('Monthly', array(), 'Modules.Statsforecast.Admin').'</option>
\t\t\t\t\t\t\t<option value=\"4\" '.(\$this->context->cookie->stats_granularity == '4' ? 'selected=\"selected\"' : '').'>'.\$this->trans('Yearly', array(), 'Modules.Statsforecast.Admin').'</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>

\t\t\t<table class=\"table\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Visits', array(), 'Admin.Shopparameters.Feature').'</span></th>
\t\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Registrations', array(), 'Admin.Shopparameters.Feature').'</span></th>
\t\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Placed orders', array(), 'Modules.Statsforecast.Admin').'</span></th>
\t\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Bought items', array(), 'Modules.Statsforecast.Admin').'</span></th>
\t\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Percentage of registrations', array(), 'Modules.Statsforecast.Admin').'</span></th>
\t\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Percentage of orders', array(), 'Modules.Statsforecast.Admin').'</span></th>
\t\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Revenue', array(), 'Modules.Statsforecast.Admin').'</span></th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>';

        \$visit_array = array();
        \$sql = 'SELECT '.\$date_from_gadd.' as fix_date, COUNT(*) as visits
\t\t\t\tFROM '._DB_PREFIX_.'connections c
\t\t\t\tWHERE c.date_add BETWEEN '.ModuleGraph::getDateBetween().'
\t\t\t\t'.Shop::addSqlRestriction(false, 'c').'
\t\t\t\tGROUP BY '.\$date_from_gadd;
        \$visits = Db::getInstance()->query(\$sql);
        while (\$row = \$db->nextRow(\$visits)) {
            \$visit_array[\$row['fix_date']] = \$row['visits'];
        }

        foreach (\$data_table as \$row) {
            \$visits_today = (int)(isset(\$visit_array[\$row['fix_date']]) ? \$visit_array[\$row['fix_date']] : 0);

            \$date_from_greg = (\$this->context->cookie->stats_granularity != 42
                ? 'LIKE \\''.\$row['fix_date'].'%\\''
                : 'BETWEEN \\''.Tools::substr(\$row['fix_date'], 0, 10).' 00:00:00\\' AND DATE_ADD(\\''.Tools::substr(\$row['fix_date'], 0, 8).Tools::substr(\$row['fix_date'], 8, 2).' 23:59:59\\', INTERVAL 7 DAY)');
            \$row['registrations'] = Db::getInstance()->getValue('
\t\t\tSELECT COUNT(*) FROM '._DB_PREFIX_.'customer
\t\t\tWHERE date_add BETWEEN '.ModuleGraph::getDateBetween().'
\t\t\tAND date_add '.\$date_from_greg
                .Shop::addSqlRestriction(Shop::SHARE_CUSTOMER));

            \$this->html .= '
\t\t\t<tr>
\t\t\t\t<td>'.\$row['fix_date'].'</td>
\t\t\t\t<td class=\"text-center\">'.\$visits_today.'</td>
\t\t\t\t<td class=\"text-center\">'.(int)\$row['registrations'].'</td>
\t\t\t\t<td class=\"text-center\">'.(int)\$row['countOrders'].'</td>
\t\t\t\t<td class=\"text-center\">'.(int)\$row['countProducts'].'</td>
\t\t\t\t<td class=\"text-center\">'.(\$visits_today ? round(100 * (int)\$row['registrations'] / \$visits_today, 2).' %' : '-').'</td>
\t\t\t\t<td class=\"text-center\">'.(\$visits_today ? round(100 * (int)\$row['countOrders'] / \$visits_today, 2).' %' : '-').'</td>
\t\t\t\t<td class=\"text-right\">'.\$this->context->getCurrentLocale()->formatPrice(\$row['totalSales'], \$currency->iso_code).'</td>
\t\t\t</tr>';

            \$this->t1 += \$visits_today;
            \$this->t2 += (int)\$row['registrations'];
            \$this->t3 += (int)\$row['countOrders'];
            \$this->t4 += (int)\$row['countProducts'];
            \$this->t8 += \$row['totalSales'];
        }

        \$this->html .= '
\t\t\t\t<tr>
\t\t\t\t\t<th></th>
\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Visits', array(), 'Admin.Shopparameters.Feature').'</span></th>
\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Registrations', array(), 'Admin.Shopparameters.Feature').'</span></th>
\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Placed orders', array(), 'Modules.Statsforecast.Admin').'</span></th>
\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Bought items', array(), 'Modules.Statsforecast.Admin').'</span></th>
\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Percentage of registrations', array(), 'Modules.Statsforecast.Admin').'</span></th>
\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Percentage of orders', array(), 'Modules.Statsforecast.Admin').'</span></th>
\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Revenue', array(), 'Modules.Statsforecast.Admin').'</span></th>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>'.\$this->trans('Total', array(), 'Admin.Global').'</td>
\t\t\t\t\t<td class=\"text-center\">'.(int)\$this->t1.'</td>
\t\t\t\t\t<td class=\"text-center\">'.(int)\$this->t2.'</td>
\t\t\t\t\t<td class=\"text-center\">'.(int)\$this->t3.'</td>
\t\t\t\t\t<td class=\"text-center\">'.(int)\$this->t4.'</td>
\t\t\t\t\t<td class=\"text-center\">--</td>
\t\t\t\t\t<td class=\"text-center\">--</td>
\t\t\t\t\t<td class=\"text-right\">'.\$this->context->getCurrentLocale()->formatPrice(\$this->t8, \$currency->iso_code).'</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>'.\$this->trans('Average', array(), 'Modules.Statsforecast.Admin').'</td>
\t\t\t\t\t<td class=\"text-center\">'.(int)(\$this->t1 / \$interval_avg).'</td>
\t\t\t\t\t<td class=\"text-center\">'.(int)(\$this->t2 / \$interval_avg).'</td>
\t\t\t\t\t<td class=\"text-center\">'.(int)(\$this->t3 / \$interval_avg).'</td>
\t\t\t\t\t<td class=\"text-center\">'.(int)(\$this->t4 / \$interval_avg).'</td>
\t\t\t\t\t<td class=\"text-center\">'.(\$this->t1 ? round(100 * \$this->t2 / \$this->t1, 2).' %' : '-').'</td>
\t\t\t\t\t<td class=\"text-center\">'.(\$this->t1 ? round(100 * \$this->t3 / \$this->t1, 2).' %' : '-').'</td>
\t\t\t\t\t<td class=\"text-right\">'.\$this->context->getCurrentLocale()->formatPrice(\$this->t8 / \$interval_avg, \$currency->iso_code).'</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>'.\$this->trans('Forecast', array(), 'Modules.Statsforecast.Admin').'</td>
\t\t\t\t\t<td class=\"text-center\">'.(int)(\$this->t1 * \$prop30).'</td>
\t\t\t\t\t<td class=\"text-center\">'.(int)(\$this->t2 * \$prop30).'</td>
\t\t\t\t\t<td class=\"text-center\">'.(int)(\$this->t3 * \$prop30).'</td>
\t\t\t\t\t<td class=\"text-center\">'.(int)(\$this->t4 * \$prop30).'</td>
\t\t\t\t\t<td class=\"text-center\">--</td>
\t\t\t\t\t<td class=\"text-center\">--</td>
\t\t\t\t\t<td class=\"text-right\">'.\$this->context->getCurrentLocale()->formatPrice(\$this->t8 * \$prop30, \$currency->iso_code).'</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t</div>';

        \$ca = \$this->getRealCA();

        \$sql = 'SELECT COUNT(DISTINCT c.id_guest)
\t\tFROM '._DB_PREFIX_.'connections c
\t\tWHERE c.date_add BETWEEN '.ModuleGraph::getDateBetween().'
\t\t'.Shop::addSqlRestriction(false, 'c');
        \$visitors = Db::getInstance()->getValue(\$sql);

        \$sql = 'SELECT COUNT(DISTINCT g.id_customer)
\t\tFROM '._DB_PREFIX_.'connections c
\t\tINNER JOIN '._DB_PREFIX_.'guest g ON c.id_guest = g.id_guest
\t\tWHERE g.id_customer != 0
\t\tAND c.date_add BETWEEN '.ModuleGraph::getDateBetween().'
\t\t'.Shop::addSqlRestriction(false, 'c');
        \$customers = Db::getInstance()->getValue(\$sql);

        \$sql = 'SELECT COUNT(DISTINCT c.id_cart)
\t\tFROM '._DB_PREFIX_.'cart c
\t\tINNER JOIN '._DB_PREFIX_.'cart_product cp on c.id_cart = cp.id_cart
\t\tWHERE (c.date_add BETWEEN '.ModuleGraph::getDateBetween().' OR c.date_upd BETWEEN '.ModuleGraph::getDateBetween().')
\t\t'.Shop::addSqlRestriction(false, 'c');
        \$carts = Db::getInstance()->getValue(\$sql);

        \$sql = 'SELECT COUNT(DISTINCT c.id_cart)
\t\tFROM '._DB_PREFIX_.'cart c
\t\tINNER JOIN '._DB_PREFIX_.'cart_product cp on c.id_cart = cp.id_cart
\t\tWHERE (c.date_add BETWEEN '.ModuleGraph::getDateBetween().' OR c.date_upd BETWEEN '.ModuleGraph::getDateBetween().')
\t\tAND id_address_invoice != 0
\t\t'.Shop::addSqlRestriction(false, 'c');
        \$fullcarts = Db::getInstance()->getValue(\$sql);

        \$sql = 'SELECT COUNT(*)
\t\tFROM '._DB_PREFIX_.'orders o
\t\tWHERE o.valid = 1
\t\tAND o.date_add BETWEEN '.ModuleGraph::getDateBetween().'
\t\t'.Shop::addSqlRestriction(Shop::SHARE_ORDER, 'o');
        \$orders = Db::getInstance()->getValue(\$sql);

        \$this->html .= '
\t\t<div class=\"row row-margin-bottom\">
\t\t\t<h4><i class=\"icon-filter\"></i> '.\$this->trans('Conversion', array(), 'Modules.Statsforecast.Admin').'</h4>
\t\t</div>
\t\t<div class=\"row row-margin-bottom\">
\t\t\t<table class=\"table\">
\t\t\t\t<tbody>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td rowspan=\"2\" class=\"text-center\">
\t\t\t\t\t\t\t<p>'.\$this->trans('Visitors', array(), 'Admin.Shopparameters.Feature').'</p>
\t\t\t\t\t\t\t<p>'.\$visitors.'</p>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t<p><i class=\"icon-chevron-right\"></i></p>
\t\t\t\t\t\t\t<p>'.round(100 * \$customers / max(1, \$visitors), 2).' %</p>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t<p>'.\$this->trans('Accounts', array(), 'Modules.Statsforecast.Admin').'</p>
\t\t\t\t\t\t\t<p>'.\$customers.'</p>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t<p><i class=\"icon-chevron-right\"></i></p>
\t\t\t\t\t\t\t<p>'.round(100 * \$fullcarts / max(1, \$customers), 2).' %</p>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td rowspan=\"2\" class=\"text-center\">
\t\t\t\t\t\t\t<p>'.\$this->trans('Full carts', array(), 'Modules.Statsforecast.Admin').'</p>
\t\t\t\t\t\t\t<p>'.\$fullcarts.'</p>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td rowspan=\"2\" class=\"text-center\">
\t\t\t\t\t\t\t<p><i class=\"icon-chevron-right\"></i></p>
\t\t\t\t\t\t\t<p>'.round(100 * \$orders / max(1, \$fullcarts), 2).' %</p>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td rowspan=\"2\" class=\"text-center\">
\t\t\t\t\t\t\t<p>'.\$this->trans('Orders', array(), 'Admin.Global').'</p>
\t\t\t\t\t\t\t<p>'.\$orders.'</p>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td rowspan=\"2\" class=\"text-center\">
\t\t\t\t\t\t\t<p>'.\$this->trans('Registered visitors', array(), 'Modules.Statsforecast.Admin').'</p>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td rowspan=\"2\" class=\"text-center\">
\t\t\t\t\t\t\t<i class=\"icon-chevron-right\"></i>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td rowspan=\"2\" class=\"text-center\">
\t\t\t\t\t\t\t<p>'.round(100 * \$orders / max(1, \$customers), 2).' %</p>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td rowspan=\"2\" class=\"text-center\">
\t\t\t\t\t\t\t<i class=\"icon-chevron-right\"></i>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td rowspan=\"2\" class=\"text-center\">
\t\t\t\t\t\t\t<p>'.\$this->trans('Orders', array(), 'Admin.Global').'</p>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td rowspan=\"2\" class=\"text-center\">
\t\t\t\t\t\t\t<p>'.\$this->trans('Visitors', array(), 'Admin.Shopparameters.Feature').'</p>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td rowspan=\"2\" class=\"text-center\">
\t\t\t\t\t\t\t<i class=\"icon-chevron-right\"></i>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td rowspan=\"2\" class=\"text-center\">
\t\t\t\t\t\t\t<p>'.round(100 * \$orders / max(1, \$visitors), 2).' %</p>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td rowspan=\"2\" class=\"center\">
\t\t\t\t\t\t\t<i class=\"icon-chevron-right\"></i>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td rowspan=\"2\" class=\"text-center\">
\t\t\t\t\t\t\t<p>'.\$this->trans('Orders', array(), 'Admin.Global').'</p>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t<p><i class=\"icon-chevron-right\"></i></p>
\t\t\t\t\t\t\t<p>'.round(100 * \$carts / max(1, \$visitors)).' %</p>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t<p>'.\$this->trans('Carts', array(), 'Admin.Global').'</p>
\t\t\t\t\t\t\t<p>'.\$carts.'</p>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t<p><i class=\"icon-chevron-right\"></i></p>
\t\t\t\t\t\t\t<p>'.round(100 * \$fullcarts / max(1, \$carts)).' %</p>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t\t<div class=\"alert alert-info\">
\t\t\t<p>'.\$this->trans('A simple statistical calculation lets you know the monetary value of your visitors:', array(), 'Modules.Statsforecast.Admin').'</p>
\t\t\t<p>'.\$this->trans('On average, each visitor places an order for this amount:', array(), 'Modules.Statsforecast.Admin').' <b>'.\$this->context->getCurrentLocale()->formatPrice(\$ca['ventil']['total'] / max(1, \$visitors), \$currency->iso_code).'.</b></p>
\t\t\t<p>'.\$this->trans('On average, each registered visitor places an order for this amount:', array(), 'Modules.Statsforecast.Admin').' <b>'.\$this->context->getCurrentLocale()->formatPrice(\$ca['ventil']['total'] / max(1, \$customers), \$currency->iso_code).'</b>.</p>
\t\t</div>';

        \$from = strtotime(\$employee->stats_date_from.' 00:00:00');
        \$to = strtotime(\$employee->stats_date_to.' 23:59:59');
        \$interval = (\$to - \$from) / 60 / 60 / 24;

        \$this->html .= '
\t\t\t<div class=\"row row-margin-bottom\">
\t\t\t\t<h4><i class=\"icon-money\"></i> '.\$this->trans('Payment distribution', array(), 'Modules.Statsforecast.Admin').'</h4>
\t\t\t\t<div class=\"alert alert-info\">'
            .\$this->trans('The amounts include taxes, so you can get an estimation of the commission due to the payment method.', array(), 'Modules.Statsforecast.Admin').'
\t\t\t\t</div>
\t\t\t\t<form id=\"cat\" action=\"'.Tools::safeOutput(\$ru).'#payment\" method=\"post\" class=\"form-horizontal\">
\t\t\t\t\t<div class=\"row row-margin-bottom\">
\t\t\t\t\t\t<label class=\"control-label col-lg-3\">
\t\t\t\t\t\t\t'.\$this->trans('Zone', array(), 'Admin.Global').'
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"submitIdZone\" value=\"1\" />
\t\t\t\t\t\t\t<select name=\"stats_id_zone\" onchange=\"this.form.submit();\">
\t\t\t\t\t\t\t\t<option value=\"0\">'.\$this->trans('-- No filter --', array(), 'Modules.Statsforecast.Admin').'</option>';
        foreach (Zone::getZones() as \$zone) {
            \$this->html .= '<option value=\"'.(int)\$zone['id_zone'].'\" '.(\$this->context->cookie->stats_id_zone == \$zone['id_zone'] ? 'selected=\"selected\"' : '').'>'.\$zone['name'].'</option>';
        }
        \$this->html .= '
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t\t<table class=\"table\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Module', array(), 'Modules.Statsforecast.Admin').'</span></th>
\t\t\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Orders', array(), 'Admin.Global').'</span></th>
\t\t\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Sales', array(), 'Admin.Global').'</span></th>
\t\t\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Average cart value', array(), 'Modules.Statsforecast.Admin').'</span></th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>';
        foreach (\$ca['payment'] as \$payment) {
            \$this->html .= '
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"text-center\">'.\$payment['payment_method'].'</td>
\t\t\t\t\t\t\t<td class=\"text-center\">'.(int)\$payment['nb'].'</td>
\t\t\t\t\t\t\t<td class=\"text-right\">'.\$this->context->getCurrentLocale()->formatPrice(\$payment['total'], \$currency->iso_code).'</td>
\t\t\t\t\t\t\t<td class=\"text-right\">'.\$this->context->getCurrentLocale()->formatPrice(\$payment['total'] / (int)\$payment['nb'], \$currency->iso_code).'</td>
\t\t\t\t\t\t</tr>';
        }
        \$this->html .= '
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t\t<div class=\"row row-margin-bottom\">
\t\t\t\t<h4><i class=\"icon-sitemap\"></i> '.\$this->trans('Category distribution', array(), 'Modules.Statsforecast.Admin').'</h4>
\t\t\t\t<form id=\"cat_1\" action=\"'.Tools::safeOutput(\$ru).'#cat\" method=\"post\" class=\"form-horizontal\">
\t\t\t\t\t<div class=\"row row-margin-bottom\">
\t\t\t\t\t\t<label class=\"control-label col-lg-3\">
\t\t\t\t\t\t\t'.\$this->trans('Zone', array(), 'Admin.Global').'
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"submitIdZone\" value=\"1\" />
\t\t\t\t\t\t\t<select name=\"stats_id_zone\" onchange=\"this.form.submit();\">
\t\t\t\t\t\t\t\t<option value=\"0\">'.\$this->trans('-- No filter --', array(), 'Modules.Statsforecast.Admin').'</option>';
        foreach (Zone::getZones() as \$zone) {
            \$this->html .= '<option value=\"'.(int)\$zone['id_zone'].'\" '.(\$this->context->cookie->stats_id_zone == \$zone['id_zone'] ? 'selected=\"selected\"' : '').'>'.\$zone['name'].'</option>';
        }
        \$this->html .= '
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t\t<table class=\"table\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Category', array(), 'Admin.Catalog.Feature').'</span></th>
\t\t\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Products sold', array(), 'Modules.Statsforecast.Admin').'</span></th>
\t\t\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Sales', array(), 'Admin.Global').'</span></th>
\t\t\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Percentage of products sold', array(), 'Modules.Statsforecast.Admin').'</span></th>
\t\t\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Percentage of sales', array(), 'Modules.Statsforecast.Admin').'</span></th>
\t\t\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Average price', array(), 'Admin.Global').'</span></th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>';
        foreach (\$ca['cat'] as \$catrow) {
            \$this->html .= '
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"text-center\">'.(empty(\$catrow['name']) ? \$this->trans('Unknown', array(), 'Admin.Shopparameters.Feature') : \$catrow['name']).'</td>
\t\t\t\t\t\t\t<td class=\"text-center\">'.\$catrow['orderQty'].'</td>
\t\t\t\t\t\t\t<td class=\"text-right\">'.\$this->context->getCurrentLocale()->formatPrice(\$catrow['orderSum'], \$currency->iso_code).'</td>
\t\t\t\t\t\t\t<td class=\"text-center\">'.number_format((100 * \$catrow['orderQty'] / \$this->t4), 1, '.', ' ').'%</td>
\t\t\t\t\t\t\t<td class=\"text-center\">'.((int)\$ca['ventil']['total'] ? number_format((100 * \$catrow['orderSum'] / \$ca['ventil']['total']), 1, '.', ' ') : '0').'%</td>
\t\t\t\t\t\t\t<td class=\"text-right\">'.\$this->context->getCurrentLocale()->formatPrice(\$catrow['priveAvg'], \$currency->iso_code).'</td>
\t\t\t\t\t\t</tr>';
        }
        \$this->html .= '
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t\t<div class=\"row row-margin-bottom\">
\t\t\t\t<h4><i class=\"icon-flag\"></i> '.\$this->trans('Language distribution', array(), 'Modules.Statsforecast.Admin').'</h4>
\t\t\t\t<table class=\"table\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Language', array(), 'Admin.Global').'</span></th>
\t\t\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Sales', array(), 'Admin.Global').'</span></th>
\t\t\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Percentage', array(), 'Admin.Global').'</span></th>
\t\t\t\t\t\t\t<th class=\"text-center\" colspan=\"2\"><span class=\"title_box active\">'.\$this->trans('Growth', array(), 'Modules.Statsforecast.Admin').'</span></th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>';
        foreach (\$ca['lang'] as \$ophone => \$amount) {
            \$percent = (int)(\$ca['langprev'][\$ophone]) ? number_format((100 * (int) \$amount / \$ca['langprev'][\$ophone]) - 100, 1, '.', ' ') : '&#x221e;';
            \$this->html .= '
\t\t\t\t\t<tr '.((\$percent < 0) ? 'class=\"alt_row\"' : '').'>
\t\t\t\t\t\t<td class=\"text-center\">'.\$ophone.'</td>
\t\t\t\t\t\t<td class=\"text-right\">'.\$this->context->getCurrentLocale()->formatPrice((int) \$amount, \$currency->iso_code).'</td>
\t\t\t\t\t\t<td class=\"text-center\">'.((int)\$ca['ventil']['total'] ? number_format((100 * (int) \$amount / \$ca['ventil']['total']), 1, '.', ' ').'%' : '-').'</td>
\t\t\t\t\t\t<td class=\"text-center\">'.((\$percent > 0 || \$percent == '&#x221e;') ? '<img src=\"../img/admin/arrow_up.png\" alt=\"\" />' : '<img src=\"../img/admin/arrow_down.png\" alt=\"\" /> ').'</td>
\t\t\t\t\t\t<td class=\"text-center\">'.((\$percent > 0 || \$percent == '&#x221e;') ? '+' : '').\$percent.'%</td>
\t\t\t\t\t</tr>';
        }
        \$this->html .= '
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t\t<div class=\"row row-margin-bottom\">
\t\t\t\t<h4><i class=\"icon-map-marker\"></i> '.\$this->trans('Zone distribution', array(), 'Modules.Statsforecast.Admin').'</h4>
\t\t\t\t<table class=\"table\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Zone', array(), 'Admin.Global').'</span></th>
\t\t\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Orders', array(), 'Admin.Global').'</span></th>
\t\t\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Sales', array(), 'Admin.Global').'</span></th>
\t\t\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Percentage of orders', array(), 'Modules.Statsforecast.Admin').'</span></th>
\t\t\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Percentage of sales', array(), 'Modules.Statsforecast.Admin').'</span></th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>';
        foreach (\$ca['zones'] as \$zone) {
            \$this->html .= '
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"text-center\">'.(isset(\$zone['name']) ? \$zone['name'] : \$this->trans('Undefined', array(), 'Admin.Shopparameters.Feature')).'</td>
\t\t\t\t\t\t<td class=\"text-center\">'.(int)(\$zone['nb']).'</td>
\t\t\t\t\t\t<td class=\"text-right\">'.\$this->context->getCurrentLocale()->formatPrice(\$zone['total'], \$currency->iso_code).'</td>
\t\t\t\t\t\t<td class=\"text-center\">'.(\$ca['ventil']['nb'] ? number_format((100 * \$zone['nb'] / \$ca['ventil']['nb']), 1, '.', ' ') : '0').'%</td>
\t\t\t\t\t\t<td class=\"text-center\">'.((int)\$ca['ventil']['total'] ? number_format((100 * \$zone['total'] / \$ca['ventil']['total']), 1, '.', ' ') : '0').'%</td>
\t\t\t\t\t</tr>';
        }
        \$this->html .= '
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t\t<div class=\"row row-margin-bottom\">
\t\t\t\t<h4><i class=\"icon-money\"></i> '.\$this->trans('Currency distribution', array(), 'Modules.Statsforecast.Admin').'</h4>
\t\t\t\t<form id=\"cat_2\" action=\"'.Tools::safeOutput(\$ru).'#currencies\" method=\"post\" class=\"form-horizontal\">
\t\t\t\t\t<div class=\"row row-margin-bottom\">
\t\t\t\t\t\t<label class=\"control-label col-lg-3\">
\t\t\t\t\t\t\t'.\$this->trans('Zone', array(), 'Admin.Global').'
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"submitIdZone\" value=\"1\" />
\t\t\t\t\t\t\t<select name=\"stats_id_zone\" onchange=\"this.form.submit();\">
\t\t\t\t\t\t\t\t<option value=\"0\">'.\$this->trans('-- No filter --', array(), 'Modules.Statsforecast.Admin').'</option>';
        foreach (Zone::getZones() as \$zone) {
            \$this->html .= '<option value=\"'.(int)\$zone['id_zone'].'\" '.(\$this->context->cookie->stats_id_zone == \$zone['id_zone'] ? 'selected=\"selected\"' : '').'>'.\$zone['name'].'</option>';
        }
        \$this->html .= '
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t\t<table class=\"table\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Currency', array(), 'Admin.Global').'</span></th>
\t\t\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Orders', array(), 'Admin.Global').'</span></th>
\t\t\t\t\t\t\t<th class=\"text-right\"><span class=\"title_box active\">'.\$this->trans('Sales (converted)', array(), 'Modules.Statsforecast.Admin').'</span></th>
\t\t\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Percentage of orders', array(), 'Modules.Statsforecast.Admin').'</span></th>
\t\t\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Percentage of sales', array(), 'Modules.Statsforecast.Admin').'</span></th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>';
        foreach (\$ca['currencies'] as \$currency_row) {
            \$this->html .= '
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"text-center\">'.\$currency_row['name'].'</td>
\t\t\t\t\t\t\t<td class=\"text-center\">'.(int)(\$currency_row['nb']).'</td>
\t\t\t\t\t\t\t<td class=\"text-right\">'.\$this->context->getCurrentLocale()->formatPrice(\$currency_row['total'], \$currency->iso_code).'</td>
\t\t\t\t\t\t\t<td class=\"text-center\">'.(\$ca['ventil']['nb'] ? number_format((100 * \$currency_row['nb'] / \$ca['ventil']['nb']), 1, '.', ' ') : '0').'%</td>
\t\t\t\t\t\t\t<td class=\"text-center\">'.((int)\$ca['ventil']['total'] ? number_format((100 * \$currency_row['total'] / \$ca['ventil']['total']), 1, '.', ' ') : '0').'%</td>
\t\t\t\t\t\t</tr>';
        }
        \$this->html .= '
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t\t<div class=\"row row-margin-bottom\">
\t\t\t\t<h4><i class=\"icon-ticket\"></i> '.\$this->trans('Attribute distribution', array(), 'Modules.Statsforecast.Admin').'</h4>
\t\t\t\t<table class=\"table\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Group', array(), 'Admin.Global').'</span></th>
\t\t\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Attribute', array(), 'Admin.Global').'</span></th>
\t\t\t\t\t\t\t<th class=\"text-center\"><span class=\"title_box active\">'.\$this->trans('Quantity of products sold', array(), 'Modules.Statsforecast.Admin').'</span></th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>';
        foreach (\$ca['attributes'] as \$attribut) {
            \$this->html .= '
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"text-center\">'.\$attribut['gname'].'</td>
\t\t\t\t\t\t\t<td class=\"text-center\">'.\$attribut['aname'].'</td>
\t\t\t\t\t\t\t<td class=\"text-center\">'.(int)(\$attribut['total']).'</td>
\t\t\t\t\t\t</tr>';
        }
        \$this->html .= '
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>';

        return \$this->html;
    }

    private function getRealCA()
    {
        \$employee = \$this->context->employee;
        \$ca = array();

        \$where = \$join = '';
        if ((int)\$this->context->cookie->stats_id_zone) {
            \$join = ' LEFT JOIN `'._DB_PREFIX_.'address` a ON o.id_address_invoice = a.id_address LEFT JOIN `'._DB_PREFIX_.'country` co ON co.id_country = a.id_country';
            \$where = ' AND co.id_zone = '.(int)\$this->context->cookie->stats_id_zone.' ';
        }

        \$sql = 'SELECT SUM(od.`unit_price_tax_excl` * od.`product_quantity` / o.conversion_rate) as orderSum, SUM(od.product_quantity) as orderQty, cl.name, AVG(od.`unit_price_tax_excl` / o.conversion_rate) as priveAvg
\t\t\t\tFROM `'._DB_PREFIX_.'orders` o
\t\t\t\tSTRAIGHT_JOIN `'._DB_PREFIX_.'order_detail` od ON o.id_order = od.id_order
\t\t\t\tLEFT JOIN `'._DB_PREFIX_.'product` p ON p.id_product = od.product_id
\t\t\t\t'.Shop::addSqlAssociation('product', 'p').'
\t\t\t\tLEFT JOIN `'._DB_PREFIX_.'category_lang` cl ON (product_shop.id_category_default = cl.id_category AND cl.id_lang = '.(int)\$this->context->language->id.Shop::addSqlRestrictionOnLang('cl').')
\t\t\t\t'.\$join.'
\t\t\t\tWHERE o.valid = 1
\t\t\t\t\tAND o.`invoice_date` BETWEEN '.ModuleGraph::getDateBetween().'
\t\t\t\t\t'.\$where.'
\t\t\t\t\t'.Shop::addSqlRestriction(Shop::SHARE_ORDER, 'o').'
\t\t\t\tGROUP BY product_shop.id_category_default';
        \$ca['cat'] = Db::getInstance()->executeS(\$sql);
        uasort(\$ca['cat'], 'statsforecast_sort');

        \$lang_values = '';
        \$sql = 'SELECT l.id_lang, l.iso_code
\t\t\t\tFROM `'._DB_PREFIX_.'lang` l
\t\t\t\t'.Shop::addSqlAssociation('lang', 'l').'
\t\t\t\tWHERE l.active = 1';
        \$languages = Db::getInstance()->executeS(\$sql);
        foreach (\$languages as \$language) {
            \$lang_values .= 'SUM(IF(o.id_lang = '.(int)\$language['id_lang'].', total_paid_tax_excl / o.conversion_rate, 0)) as '.pSQL(\$language['iso_code']).',';
        }
        \$lang_values = rtrim(\$lang_values, ',');

        if (\$lang_values) {
            \$sql = 'SELECT '.\$lang_values.'
\t\t\t\t\tFROM `'._DB_PREFIX_.'orders` o
\t\t\t\t\tWHERE o.valid = 1
\t\t\t\t\tAND o.`invoice_date` BETWEEN '.ModuleGraph::getDateBetween().'
\t\t\t\t\t'.Shop::addSqlRestriction(Shop::SHARE_ORDER, 'o');
            \$ca['lang'] = Db::getInstance()->getRow(\$sql);
            arsort(\$ca['lang']);

            \$sql = 'SELECT '.\$lang_values.'
\t\t\t\t\tFROM `'._DB_PREFIX_.'orders` o
\t\t\t\t\tWHERE o.valid = 1
\t\t\t\t\t\tAND ADDDATE(o.`invoice_date`, interval 30 day) BETWEEN \\''.\$employee->stats_date_from.' 00:00:00\\' AND \\''.min(date('Y-m-d H:i:s'), \$employee->stats_date_to.' 23:59:59').'\\'
\t\t\t\t\t\t'.Shop::addSqlRestriction(Shop::SHARE_ORDER, 'o');
            \$ca['langprev'] = Db::getInstance()->getRow(\$sql);
        } else {
            \$ca['lang'] = array();
            \$ca['langprev'] = array();
        }

        \$sql = 'SELECT reference
\t\t\t\t\tFROM `'._DB_PREFIX_.'orders` o
\t\t\t\t\t'.\$join.'
\t\t\t\t\tWHERE o.valid
\t\t\t\t\t'.\$where.'
\t\t\t\t\t'.Shop::addSqlRestriction(Shop::SHARE_ORDER, 'o').'
\t\t\t\t\tAND o.invoice_date BETWEEN '.ModuleGraph::getDateBetween().'';
        \$result = Db::getInstance()->executeS(\$sql);
        if (count(\$result)) {
            \$references = array();
            foreach (\$result as \$r) {
                \$references[] = \$r['reference'];
            }
            \$sql = 'SELECT op.payment_method, SUM(op.amount / op.conversion_rate) as total, COUNT(DISTINCT op.order_reference) as nb
\t\t\t\t\tFROM `'._DB_PREFIX_.'order_payment` op
\t\t\t\t\tWHERE op.`date_add` BETWEEN '.ModuleGraph::getDateBetween().'
\t\t\t\t\tAND op.order_reference IN (
\t\t\t\t\t\t\"'.implode('\",\"', \$references).'\"
\t\t\t\t\t)
\t\t\t\t\tGROUP BY op.payment_method
\t\t\t\t\tORDER BY total DESC';
            \$ca['payment'] = Db::getInstance()->executeS(\$sql);
        } else {
            \$ca['payment'] = array();
        }

        \$sql = 'SELECT z.name, SUM(o.total_paid_tax_excl / o.conversion_rate) as total, COUNT(*) as nb
\t\t\t\tFROM `'._DB_PREFIX_.'orders` o
\t\t\t\tLEFT JOIN `'._DB_PREFIX_.'address` a ON o.id_address_invoice = a.id_address
\t\t\t\tLEFT JOIN `'._DB_PREFIX_.'country` c ON c.id_country = a.id_country
\t\t\t\tLEFT JOIN `'._DB_PREFIX_.'zone` z ON z.id_zone = c.id_zone
\t\t\t\tWHERE o.valid = 1
\t\t\t\t\tAND o.`invoice_date` BETWEEN '.ModuleGraph::getDateBetween().'
\t\t\t\t\t'.Shop::addSqlRestriction(Shop::SHARE_ORDER, 'o').'
\t\t\t\tGROUP BY c.id_zone
\t\t\t\tORDER BY total DESC';
        \$ca['zones'] = Db::getInstance()->executeS(\$sql);

        \$sql = 'SELECT cu.name, SUM(o.total_paid_tax_excl / o.conversion_rate) as total, COUNT(*) as nb
\t\t\t\tFROM `'._DB_PREFIX_.'orders` o
\t\t\t\tLEFT JOIN `'._DB_PREFIX_.'currency` cu ON o.id_currency = cu.id_currency
\t\t\t\t'.\$join.'
\t\t\t\tWHERE o.valid = 1
\t\t\t\t\tAND o.`invoice_date` BETWEEN '.ModuleGraph::getDateBetween().'
\t\t\t\t\t'.\$where.'
\t\t\t\t\t'.Shop::addSqlRestriction(Shop::SHARE_ORDER, 'o').'
\t\t\t\tGROUP BY o.id_currency
\t\t\t\tORDER BY total DESC';
        \$ca['currencies'] = Db::getInstance()->executeS(\$sql);

        \$sql = 'SELECT SUM(total_paid_tax_excl / o.conversion_rate) as total, COUNT(*) AS nb
\t\t\t\tFROM `'._DB_PREFIX_.'orders` o
\t\t\t\tWHERE o.valid = 1
\t\t\t\t\tAND o.`invoice_date` BETWEEN '.ModuleGraph::getDateBetween().'
\t\t\t\t\t'.Shop::addSqlRestriction(Shop::SHARE_ORDER, 'o');
        \$ca['ventil'] = Db::getInstance()->getRow(\$sql);

        \$sql = 'SELECT /*pac.id_attribute,*/ agl.name as gname, al.name as aname, COUNT(*) as total
\t\t\t\tFROM '._DB_PREFIX_.'orders o
\t\t\t\tLEFT JOIN '._DB_PREFIX_.'order_detail od ON o.id_order = od.id_order
\t\t\t\tINNER JOIN '._DB_PREFIX_.'product_attribute_combination pac ON od.product_attribute_id = pac.id_product_attribute
\t\t\t\tINNER JOIN '._DB_PREFIX_.'attribute a ON pac.id_attribute = a.id_attribute
\t\t\t\tINNER JOIN '._DB_PREFIX_.'attribute_group_lang agl ON (a.id_attribute_group = agl.id_attribute_group AND agl.id_lang = '.(int)\$this->context->language->id.')
\t\t\t\tINNER JOIN '._DB_PREFIX_.'attribute_lang al ON (a.id_attribute = al.id_attribute AND al.id_lang = '.(int)\$this->context->language->id.')
\t\t\t\tWHERE o.valid = 1
\t\t\t\t\tAND o.`invoice_date` BETWEEN '.ModuleGraph::getDateBetween().'
\t\t\t\t\t'.Shop::addSqlRestriction(Shop::SHARE_ORDER, 'o').'
\t\t\t\tGROUP BY pac.id_attribute';
        \$ca['attributes'] = Db::getInstance()->executeS(\$sql);

        return \$ca;
    }
}

function statsforecast_sort(\$a, \$b)
{
    if (\$a['orderSum'] == \$b['orderSum']) {
        return 0;
    }

    return (\$a['orderSum'] > \$b['orderSum']) ? -1 : 1;
}
", "@Modules/statsforecast/statsforecast.php", "/var/www/html/modules/statsforecast/statsforecast.php");
    }
}
