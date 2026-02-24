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

/* @Modules/statsproduct/statsproduct.php */
class __TwigTemplate_7ae79cb197207ed091659b07a0c9c178 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/statsproduct/statsproduct.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/statsproduct/statsproduct.php"));

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

class statsproduct extends ModuleGraph
{
    private \$html = '';
    private \$query = [];
    private \$option = 0;
    private \$id_product = 0;

    public function __construct()
    {
        \$this->name = 'statsproduct';
        \$this->tab = 'administration';
        \$this->version = '2.1.3';
        \$this->author = 'PrestaShop';
        \$this->need_instance = 0;

        parent::__construct();

        \$this->displayName = \$this->trans('Product details', [], 'Modules.Statsproduct.Admin');
        \$this->description = \$this->trans('Enrich your stats, add detailed statistics for each product of your catalog.', [], 'Modules.Statsproduct.Admin');
        \$this->ps_versions_compliancy = ['min' => '1.7.6.0', 'max' => _PS_VERSION_];
    }

    public function install()
    {
        return parent::install() && \$this->registerHook('displayAdminStatsModules');
    }

    public function getTotalBought(\$id_product)
    {
        \$date_between = ModuleGraph::getDateBetween();
        \$sql = 'SELECT SUM(od.`product_quantity`) AS total
\t\t\t\tFROM `' . _DB_PREFIX_ . 'order_detail` od
\t\t\t\tLEFT JOIN `' . _DB_PREFIX_ . 'orders` o ON o.`id_order` = od.`id_order`
\t\t\t\tWHERE od.`product_id` = ' . (int) \$id_product . '
\t\t\t\t\t' . Shop::addSqlRestriction(Shop::SHARE_ORDER, 'o') . '
\t\t\t\t\tAND o.valid = 1
\t\t\t\t\tAND o.`date_add` BETWEEN ' . \$date_between;

        return (int) Db::getInstance((bool) _PS_USE_SQL_SLAVE_)->getValue(\$sql);
    }

    public function getTotalSales(\$id_product)
    {
        \$date_between = ModuleGraph::getDateBetween();
        \$sql = 'SELECT SUM(od.`total_price_tax_excl`) AS total
\t\t\t\tFROM `' . _DB_PREFIX_ . 'order_detail` od
\t\t\t\tLEFT JOIN `' . _DB_PREFIX_ . 'orders` o ON o.`id_order` = od.`id_order`
\t\t\t\tWHERE od.`product_id` = ' . (int) \$id_product . '
\t\t\t\t\t' . Shop::addSqlRestriction(Shop::SHARE_ORDER, 'o') . '
\t\t\t\t\tAND o.valid = 1
\t\t\t\t\tAND o.`date_add` BETWEEN ' . \$date_between;

        return (float) Db::getInstance((bool) _PS_USE_SQL_SLAVE_)->getValue(\$sql);
    }

    public function getTotalViewed(\$id_product)
    {
        \$date_between = ModuleGraph::getDateBetween();
        \$sql = 'SELECT SUM(pv.`counter`) AS total
\t\t\t\tFROM `' . _DB_PREFIX_ . 'page_viewed` pv
\t\t\t\tLEFT JOIN `' . _DB_PREFIX_ . 'date_range` dr ON pv.`id_date_range` = dr.`id_date_range`
\t\t\t\tLEFT JOIN `' . _DB_PREFIX_ . 'page` p ON pv.`id_page` = p.`id_page`
\t\t\t\tLEFT JOIN `' . _DB_PREFIX_ . 'page_type` pt ON pt.`id_page_type` = p.`id_page_type`
\t\t\t\tWHERE pt.`name` = \\'product\\'
\t\t\t\t\t' . Shop::addSqlRestriction(false, 'pv') . '
\t\t\t\t\tAND p.`id_object` = ' . (int) \$id_product . '
\t\t\t\t\tAND dr.`time_start` BETWEEN ' . \$date_between . '
\t\t\t\t\tAND dr.`time_end` BETWEEN ' . \$date_between;
        \$result = Db::getInstance((bool) _PS_USE_SQL_SLAVE_)->getRow(\$sql);

        return isset(\$result['total']) ? \$result['total'] : 0;
    }

    private function getProducts(\$id_lang)
    {
        \$sql = 'SELECT p.`id_product`, p.reference, pl.`name`, IFNULL(stock.quantity, 0) as quantity
\t\t\t\tFROM `' . _DB_PREFIX_ . 'product` p
\t\t\t\t' . Product::sqlStock('p', 0) . '
\t\t\t\tLEFT JOIN `' . _DB_PREFIX_ . 'product_lang` pl ON p.`id_product` = pl.`id_product`' . Shop::addSqlRestrictionOnLang('pl') . '
\t\t\t\t' . Shop::addSqlAssociation('product', 'p') . '
\t\t\t\t' . (Tools::getValue('id_category') ? 'LEFT JOIN `' . _DB_PREFIX_ . 'category_product` cp ON p.`id_product` = cp.`id_product`' : '') . '
\t\t\t\tWHERE pl.`id_lang` = ' . (int) \$id_lang . '
\t\t\t\t\t' . (Tools::getValue('id_category') ? 'AND cp.id_category = ' . (int) Tools::getValue('id_category') : '');
        if (version_compare(_PS_VERSION_, '1.7.0.0', '>=')) {
            \$sql .= ' AND p.state = ' . Product::STATE_SAVED;
        }
        \$sql .= ' ORDER BY pl.`name`';

        return Db::getInstance((bool) _PS_USE_SQL_SLAVE_)->executeS(\$sql);
    }

    private function getSales(\$id_product)
    {
        \$sql = 'SELECT o.date_add, o.id_order, o.id_customer, od.product_quantity, (od.unit_price_tax_excl * od.product_quantity) as total, od.tax_name, od.product_name
\t\t\t\tFROM `' . _DB_PREFIX_ . 'orders` o
\t\t\t\tLEFT JOIN `' . _DB_PREFIX_ . 'order_detail` od ON o.id_order = od.id_order
\t\t\t\tWHERE o.date_add BETWEEN ' . \$this->getDate() . '
\t\t\t\t\t' . Shop::addSqlRestriction(Shop::SHARE_ORDER, 'o') . '
\t\t\t\t\tAND o.valid = 1
\t\t\t\t\tAND od.product_id = ' . (int) \$id_product;

        return Db::getInstance((bool) _PS_USE_SQL_SLAVE_)->executeS(\$sql);
    }

    private function getCrossSales(\$id_product, \$id_lang)
    {
        \$sql = 'SELECT pl.name as pname, pl.id_product, SUM(od.product_quantity) as pqty, AVG(od.unit_price_tax_excl) as pprice
\t\t\t\tFROM `' . _DB_PREFIX_ . 'orders` o
\t\t\t\tLEFT JOIN `' . _DB_PREFIX_ . 'order_detail` od ON o.id_order = od.id_order
\t\t\t\tLEFT JOIN `' . _DB_PREFIX_ . 'product_lang` pl ON (pl.id_product = od.product_id AND pl.id_lang = ' . (int) \$id_lang . Shop::addSqlRestrictionOnLang('pl') . ')
\t\t\t\tWHERE o.id_customer IN (
\t\t\t\t\t\tSELECT o.id_customer
\t\t\t\t\t\tFROM `' . _DB_PREFIX_ . 'orders` o
\t\t\t\t\t\tLEFT JOIN `' . _DB_PREFIX_ . 'order_detail` od ON o.id_order = od.id_order
\t\t\t\t\t\tWHERE o.date_add BETWEEN ' . \$this->getDate() . '
\t\t\t\t\t\tAND o.valid = 1
\t\t\t\t\t\tAND od.product_id = ' . (int) \$id_product . '
\t\t\t\t\t)
\t\t\t\t\t' . Shop::addSqlRestriction(Shop::SHARE_ORDER, 'o') . '
\t\t\t\t\tAND o.date_add BETWEEN ' . \$this->getDate() . '
\t\t\t\t\tAND o.valid = 1
\t\t\t\t\tAND od.product_id != ' . (int) \$id_product . '
\t\t\t\tGROUP BY od.product_id
\t\t\t\tORDER BY pqty DESC';

        return Db::getInstance((bool) _PS_USE_SQL_SLAVE_)->executeS(\$sql);
    }

    public function hookDisplayAdminStatsModules()
    {
        \$id_category = (int) Tools::getValue('id_category');
        \$currency = Context::getContext()->currency;

        if (Tools::getValue('export')) {
            if (!Tools::getValue('exportType')) {
                \$this->csvExport([
                    'layers' => 2,
                    'type' => 'line',
                    'option' => '42',
                ]);
            }
        }

        \$this->html = '
\t\t\t<div class=\"panel-heading\">
\t\t\t\t' . \$this->displayName . '
\t\t\t</div>
\t\t\t<h4>' . \$this->trans('Guide', [], 'Admin.Global') . '</h4>
\t\t\t<div class=\"alert alert-warning\">
\t\t\t\t<h4>' . \$this->trans('Number of purchases compared to number of views', [], 'Modules.Statsproduct.Admin') . '</h4>
\t\t\t\t\t' . \$this->trans('After choosing a category and selecting a product, informational graphs will appear.', [], 'Modules.Statsproduct.Admin') . '
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li class=\"bullet\">' . \$this->trans('If you notice that a product is often purchased but viewed infrequently, you should display it more prominently in your Front Office.', [], 'Modules.Statsproduct.Admin') . '</li>
\t\t\t\t\t\t<li class=\"bullet\">' . \$this->trans('On the other hand, if a product has many views but is not often purchased, we advise you to check or modify this product\\'s information, description and photography again, see if you can find something better.', [], 'Modules.Statsproduct.Admin') . '
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t</div>';
        if (\$id_product = (int) Tools::getValue('id_product')) {
            if (Tools::getValue('export')) {
                if (Tools::getValue('exportType') == 1) {
                    \$this->csvExport([
                        'layers' => 2,
                        'type' => 'line',
                        'option' => '1-' . \$id_product,
                    ]);
                } elseif (Tools::getValue('exportType') == 2) {
                    \$this->csvExport([
                        'type' => 'pie',
                        'option' => '3-' . \$id_product,
                    ]);
                }
            }
            \$product = new Product(\$id_product, false, \$this->context->language->id);
            \$total_bought = \$this->getTotalBought(\$product->id);
            \$total_sales = \$this->getTotalSales(\$product->id);
            \$total_viewed = \$this->getTotalViewed(\$product->id);
            \$this->html .= '<h4>' . \$product->name . ' - ' . \$this->trans('Details', [], 'Modules.Statsproduct.Admin') . '</h4>
\t\t\t<div class=\"row row-margin-bottom\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t' . \$this->engine([
                    'layers' => 2,
                    'type' => 'line',
                    'option' => '1-' . \$id_product,
                ]) . '
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t<li>' . \$this->trans('Total bought', [], 'Modules.Statsproduct.Admin') . ' ' . \$total_bought . '</li>
\t\t\t\t\t\t\t<li>' . \$this->trans('Sales (tax excluded)', [], 'Modules.Statsproduct.Admin') . ' ' . \$this->context->getCurrentLocale()->formatPrice(\$total_sales, \$currency->iso_code) . '</li>
\t\t\t\t\t\t\t<li>' . \$this->trans('Total Viewed', [], 'Modules.Statsproduct.Admin') . ' ' . \$total_viewed . '</li>
\t\t\t\t\t\t\t<li>' . \$this->trans('Conversion rate', [], 'Modules.Statsproduct.Admin') . ' ' . number_format(\$total_viewed ? \$total_bought / \$total_viewed : 0, 2) . '</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<a class=\"btn btn-default export-csv\" href=\"' . Tools::safeOutput(\$_SERVER['REQUEST_URI']) . '&export=1&exportType=1\">
\t\t\t\t\t\t\t<i class=\"icon-cloud-upload\"></i> ' . \$this->trans('CSV Export', [], 'Modules.Statsproduct.Admin') . '
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>';
            if (\$has_attribute = \$product->hasAttributes() && \$total_bought) {
                \$this->html .= '
\t\t\t\t<h3 class=\"space\">' . \$this->trans('Attribute sales distribution', [], 'Modules.Statsproduct.Admin') . '</h3>
\t\t\t\t<center>' . \$this->engine(['type' => 'pie', 'option' => '3-' . \$id_product]) . '</center><br />
\t\t\t\t<a href=\"' . Tools::safeOutput(\$_SERVER['REQUEST_URI']) . '&export=1&exportType=2\"><img src=\"../img/admin/asterisk.gif\" alt=\"\"/>' . \$this->trans('CSV Export', [], 'Modules.Statsproduct.Admin') . '</a>';
            }
            if (\$total_bought) {
                \$sales = \$this->getSales(\$id_product);
                \$this->html .= '
\t\t\t\t<h4>' . \$this->trans('Sales', [], 'Admin.Global') . '</h4>
\t\t\t\t<div style=\"overflow-y:scroll;height:' . min(400, (count(\$sales) + 1) * 32) . 'px\">
\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t<span class=\"title_box  active\">' . \$this->trans('Date', [], 'Admin.Global') . '</span>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t<span class=\"title_box  active\">' . \$this->trans('Order', [], 'Admin.Global') . '</span>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t<span class=\"title_box  active\">' . \$this->trans('Customer', [], 'Admin.Global') . '</span>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t' . (\$has_attribute ? '<th><span class=\"title_box  active\">' . \$this->trans('Attribute', [], 'Admin.Global') . '</span></th>' : '') . '
\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t<span class=\"title_box  active\">' . \$this->trans('Quantity', [], 'Admin.Global') . '</span>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t<span class=\"title_box  active\">' . \$this->trans('Price', [], 'Admin.Global') . '</span>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>';
                \$token_order = Tools::getAdminToken('AdminOrders' . (int) Tab::getIdFromClassName('AdminOrders') . (int) \$this->context->employee->id);
                \$token_customer = Tools::getAdminToken('AdminCustomers' . (int) Tab::getIdFromClassName('AdminCustomers') . (int) \$this->context->employee->id);
                foreach (\$sales as \$sale) {
                    \$this->html .= '
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>' . Tools::displayDate(\$sale['date_add']) . '</td>
\t\t\t\t\t\t\t<td class=\"text-center\"><a href=\"?controller=AdminOrders&id_order=' . \$sale['id_order'] . '&vieworder&token=' . \$token_order . '\">' . (int) \$sale['id_order'] . '</a></td>
\t\t\t\t\t\t\t<td class=\"text-center\"><a href=\"?controller=AdminCustomers&id_customer=' . \$sale['id_customer'] . '&viewcustomer&token=' . \$token_customer . '\">' . (int) \$sale['id_customer'] . '</a></td>
\t\t\t\t\t\t\t' . (\$has_attribute ? '<td>' . \$sale['product_name'] . '</td>' : '') . '
\t\t\t\t\t\t\t<td>' . (int) \$sale['product_quantity'] . '</td>
\t\t\t\t\t\t\t<td>' . \$this->context->getCurrentLocale()->formatPrice(\$sale['total'], \$currency->iso_code) . '</td>
\t\t\t\t\t\t</tr>';
                }
                \$this->html .= '
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>';

                \$cross_selling = \$this->getCrossSales(\$id_product, \$this->context->language->id);
                if (count(\$cross_selling)) {
                    \$this->html .= '
\t\t\t\t\t<h4>' . \$this->trans('Cross selling', [], 'Modules.Statsproduct.Admin') . '</h4>
\t\t\t\t\t<div style=\"overflow-y:scroll;height:200px\">
\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t<span class=\"title_box active\">' . \$this->trans('Product name', [], 'Admin.Shopparameters.Feature') . '</span>
\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t<span class=\"title_box active\">' . \$this->trans('Quantity sold', [], 'Admin.Global') . '</span>
\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t<span class=\"title_box active\">' . \$this->trans('Average price', [], 'Admin.Global') . '</span>
\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>';
                    \$token_products = Tools::getAdminToken('AdminProducts' . (int) Tab::getIdFromClassName('AdminProducts') . (int) \$this->context->employee->id);
                    foreach (\$cross_selling as \$selling) {
                        \$this->html .= '
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td><a href=\"?controller=AdminProducts&id_product=' . (int) \$selling['id_product'] . '&addproduct&token=' . \$token_products . '\">' . \$selling['pname'] . '</a></td>
\t\t\t\t\t\t\t\t<td class=\"text-center\">' . (int) \$selling['pqty'] . '</td>
\t\t\t\t\t\t\t\t<td class=\"text-right\">' . \$this->context->getCurrentLocale()->formatPrice(\$selling['pprice'], \$currency->iso_code) . '</td>
\t\t\t\t\t\t\t</tr>';
                    }
                    \$this->html .= '
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>';
                }
            }
        } else {
            \$categories = Category::getCategories((int) \$this->context->language->id, true, false);
            \$this->html .= '
\t\t\t<form action=\"#\" method=\"post\" id=\"categoriesForm\" class=\"form-horizontal\">
\t\t\t\t<div class=\"row row-margin-bottom\">
\t\t\t\t\t<label class=\"control-label col-lg-3\">
\t\t\t\t\t\t<span title=\"\" data-toggle=\"tooltip\" class=\"label-tooltip\" data-original-title=\"' . \$this->trans('Click on a product to access its statistics!', [], 'Modules.Statsproduct.Admin') . '\">
\t\t\t\t\t\t\t' . \$this->trans('Choose a category', [], 'Modules.Statsproduct.Admin') . '
\t\t\t\t\t\t</span>
\t\t\t\t\t</label>
\t\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t\t<select name=\"id_category\" onchange=\"\$(\\'#categoriesForm\\').submit();\">
\t\t\t\t\t\t\t<option value=\"0\">' . \$this->trans('All', [], 'Admin.Global') . '</option>';
            foreach (\$categories as \$category) {
                \$this->html .= '<option value=\"' . \$category['id_category'] . '\"' . (\$id_category == \$category['id_category'] ? ' selected=\"selected\"' : '') . '>' . \$category['name'] . '</option>';
            }
            \$this->html .= '
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>
\t\t\t<h4>' . \$this->trans('Products available', [], 'Modules.Statsproduct.Admin') . '</h4>
\t\t\t<table class=\"table\" style=\"border: 0; cellspacing: 0;\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t<span class=\"title_box  active\">' . \$this->trans('Reference', [], 'Admin.Global') . '</span>
\t\t\t\t\t\t</th>
\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t<span class=\"title_box  active\">' . \$this->trans('Name', [], 'Admin.Global') . '</span>
\t\t\t\t\t\t</th>
\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t<span class=\"title_box  active\">' . \$this->trans('Available quantity for sale', [], 'Admin.Global') . '</span>
\t\t\t\t\t\t</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>';

            foreach (\$this->getProducts(\$this->context->language->id) as \$product) {
                \$this->html .= '
\t\t\t\t<tr>
\t\t\t\t\t<td>' . \$product['reference'] . '</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"' . Tools::safeOutput(AdminController::\$currentIndex . '&token=' . Tools::getValue('token') . '&module=' . \$this->name . '&id_product=' . \$product['id_product']) . '\">' . \$product['name'] . '</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>' . \$product['quantity'] . '</td>
\t\t\t\t</tr>';
            }

            \$this->html .= '
\t\t\t\t</tbody>
\t\t\t</table>
\t\t\t<a class=\"btn btn-default export-csv\" href=\"' . Tools::safeOutput(\$_SERVER['REQUEST_URI'] . '&export=1') . '\">
\t\t\t\t<i class=\"icon-cloud-upload\"></i> ' . \$this->trans('CSV Export', [], 'Modules.Statsproduct.Admin') . '
\t\t\t</a>';
        }

        return \$this->html;
    }

    public function setOption(\$option, \$layers = 1)
    {
        \$options = explode('-', \$option);
        if (count(\$options) === 2) {
            list(\$this->option, \$this->id_product) = \$options;
        } else {
            \$this->option = \$option;
        }
        \$date_between = \$this->getDate();
        switch (\$this->option) {
            case 1:
                \$this->_titles['main'][0] = \$this->trans('Popularity', [], 'Modules.Statsproduct.Admin');
                \$this->_titles['main'][1] = \$this->trans('Sales', [], 'Admin.Global');
                \$this->_titles['main'][2] = \$this->trans('Visits (x100)', [], 'Modules.Statsproduct.Admin');
          \$this->query = [];
                \$this->query[0] = 'SELECT o.`date_add`, SUM(od.`product_quantity`) AS total
\t\t\t\t\t\tFROM `' . _DB_PREFIX_ . 'order_detail` od
\t\t\t\t\t\tLEFT JOIN `' . _DB_PREFIX_ . 'orders` o ON o.`id_order` = od.`id_order`
\t\t\t\t\t\tWHERE od.`product_id` = ' . (int) \$this->id_product . '
\t\t\t\t\t\t\t' . Shop::addSqlRestriction(Shop::SHARE_ORDER, 'o') . '
\t\t\t\t\t\t\tAND o.valid = 1
\t\t\t\t\t\t\tAND o.`date_add` BETWEEN ' . \$date_between . '
\t\t\t\t\t\tGROUP BY o.`date_add`';

                \$this->query[1] = 'SELECT dr.`time_start` AS date_add, (SUM(pv.`counter`) / 100) AS total
\t\t\t\t\t\tFROM `' . _DB_PREFIX_ . 'page_viewed` pv
\t\t\t\t\t\tLEFT JOIN `' . _DB_PREFIX_ . 'date_range` dr ON pv.`id_date_range` = dr.`id_date_range`
\t\t\t\t\t\tLEFT JOIN `' . _DB_PREFIX_ . 'page` p ON pv.`id_page` = p.`id_page`
\t\t\t\t\t\tLEFT JOIN `' . _DB_PREFIX_ . 'page_type` pt ON pt.`id_page_type` = p.`id_page_type`
\t\t\t\t\t\tWHERE pt.`name` = \\'product\\'
\t\t\t\t\t\t\t' . Shop::addSqlRestriction(false, 'pv') . '
\t\t\t\t\t\t\tAND p.`id_object` = ' . (int) \$this->id_product . '
\t\t\t\t\t\t\tAND dr.`time_start` BETWEEN ' . \$date_between . '
\t\t\t\t\t\t\tAND dr.`time_end` BETWEEN ' . \$date_between . '
\t\t\t\t\t\tGROUP BY dr.`time_start`';
                break;

            case 3:
                \$this->query = 'SELECT product_attribute_id, SUM(od.`product_quantity`) AS total, od.product_name AS product_name
\t\t\t\t\t\tFROM `' . _DB_PREFIX_ . 'orders` o
\t\t\t\t\t\tLEFT JOIN `' . _DB_PREFIX_ . 'order_detail` od ON o.`id_order` = od.`id_order`
\t\t\t\t\t\tWHERE od.`product_id` = ' . (int) \$this->id_product . '
\t\t\t\t\t\t\t' . Shop::addSqlRestriction(Shop::SHARE_ORDER, 'o') . '
\t\t\t\t\t\t\tAND o.valid = 1
\t\t\t\t\t\t\tAND o.`date_add` BETWEEN ' . \$date_between . '
\t\t\t\t\t\tGROUP BY od.`product_attribute_id`';
                \$this->_titles['main'] = \$this->trans('Attributes', [], 'Admin.Global');
                break;

            case 42:
                \$this->_titles['main'][1] = \$this->trans('Reference', [], 'Admin.Global');
                \$this->_titles['main'][2] = \$this->trans('Name', [], 'Admin.Global');
                \$this->_titles['main'][3] = \$this->trans('Stock', [], 'Modules.Statsproduct.Admin');
                break;
        }
    }

    protected function getData(\$layers)
    {
        if (\$this->option == 42) {
            \$products = \$this->getProducts(\$this->context->language->id);
            foreach (\$products as \$product) {
                \$this->_values[0][] = \$product['reference'];
                \$this->_values[1][] = \$product['name'];
                \$this->_values[2][] = \$product['quantity'];
                \$this->_legend[] = \$product['id_product'];
            }
        } elseif (\$this->option != 3) {
            \$this->setDateGraph(\$layers, true);
        } else {
            \$result = Db::getInstance((bool) _PS_USE_SQL_SLAVE_)->executeS(\$this->query);
            foreach (\$result as \$row) {
                \$this->_values[] = \$row['total'];
                \$this->_legend[] = \$row['product_name'];
            }
        }
    }

    protected function setAllTimeValues(\$layers)
    {
        for (\$i = 0; \$i < \$layers; ++\$i) {
            \$result = Db::getInstance((bool) _PS_USE_SQL_SLAVE_)->executeS(\$this->query[\$i]);
            foreach (\$result as \$row) {
                \$this->_values[\$i][(int) substr(\$row['date_add'], 0, 4)] += \$row['total'];
            }
        }
    }

    protected function setYearValues(\$layers)
    {
        for (\$i = 0; \$i < \$layers; ++\$i) {
            \$result = Db::getInstance((bool) _PS_USE_SQL_SLAVE_)->executeS(\$this->query[\$i]);
            foreach (\$result as \$row) {
                \$this->_values[\$i][(int) substr(\$row['date_add'], 5, 2)] += \$row['total'];
            }
        }
    }

    protected function setMonthValues(\$layers)
    {
        for (\$i = 0; \$i < \$layers; ++\$i) {
            \$result = Db::getInstance((bool) _PS_USE_SQL_SLAVE_)->executeS(\$this->query[\$i]);
            foreach (\$result as \$row) {
                \$this->_values[\$i][(int) substr(\$row['date_add'], 8, 2)] += \$row['total'];
            }
        }
    }

    protected function setDayValues(\$layers)
    {
        for (\$i = 0; \$i < \$layers; ++\$i) {
            \$result = Db::getInstance((bool) _PS_USE_SQL_SLAVE_)->executeS(\$this->query[\$i]);
            foreach (\$result as \$row) {
                \$this->_values[\$i][(int) substr(\$row['date_add'], 11, 2)] += \$row['total'];
            }
        }
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/statsproduct/statsproduct.php";
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

class statsproduct extends ModuleGraph
{
    private \$html = '';
    private \$query = [];
    private \$option = 0;
    private \$id_product = 0;

    public function __construct()
    {
        \$this->name = 'statsproduct';
        \$this->tab = 'administration';
        \$this->version = '2.1.3';
        \$this->author = 'PrestaShop';
        \$this->need_instance = 0;

        parent::__construct();

        \$this->displayName = \$this->trans('Product details', [], 'Modules.Statsproduct.Admin');
        \$this->description = \$this->trans('Enrich your stats, add detailed statistics for each product of your catalog.', [], 'Modules.Statsproduct.Admin');
        \$this->ps_versions_compliancy = ['min' => '1.7.6.0', 'max' => _PS_VERSION_];
    }

    public function install()
    {
        return parent::install() && \$this->registerHook('displayAdminStatsModules');
    }

    public function getTotalBought(\$id_product)
    {
        \$date_between = ModuleGraph::getDateBetween();
        \$sql = 'SELECT SUM(od.`product_quantity`) AS total
\t\t\t\tFROM `' . _DB_PREFIX_ . 'order_detail` od
\t\t\t\tLEFT JOIN `' . _DB_PREFIX_ . 'orders` o ON o.`id_order` = od.`id_order`
\t\t\t\tWHERE od.`product_id` = ' . (int) \$id_product . '
\t\t\t\t\t' . Shop::addSqlRestriction(Shop::SHARE_ORDER, 'o') . '
\t\t\t\t\tAND o.valid = 1
\t\t\t\t\tAND o.`date_add` BETWEEN ' . \$date_between;

        return (int) Db::getInstance((bool) _PS_USE_SQL_SLAVE_)->getValue(\$sql);
    }

    public function getTotalSales(\$id_product)
    {
        \$date_between = ModuleGraph::getDateBetween();
        \$sql = 'SELECT SUM(od.`total_price_tax_excl`) AS total
\t\t\t\tFROM `' . _DB_PREFIX_ . 'order_detail` od
\t\t\t\tLEFT JOIN `' . _DB_PREFIX_ . 'orders` o ON o.`id_order` = od.`id_order`
\t\t\t\tWHERE od.`product_id` = ' . (int) \$id_product . '
\t\t\t\t\t' . Shop::addSqlRestriction(Shop::SHARE_ORDER, 'o') . '
\t\t\t\t\tAND o.valid = 1
\t\t\t\t\tAND o.`date_add` BETWEEN ' . \$date_between;

        return (float) Db::getInstance((bool) _PS_USE_SQL_SLAVE_)->getValue(\$sql);
    }

    public function getTotalViewed(\$id_product)
    {
        \$date_between = ModuleGraph::getDateBetween();
        \$sql = 'SELECT SUM(pv.`counter`) AS total
\t\t\t\tFROM `' . _DB_PREFIX_ . 'page_viewed` pv
\t\t\t\tLEFT JOIN `' . _DB_PREFIX_ . 'date_range` dr ON pv.`id_date_range` = dr.`id_date_range`
\t\t\t\tLEFT JOIN `' . _DB_PREFIX_ . 'page` p ON pv.`id_page` = p.`id_page`
\t\t\t\tLEFT JOIN `' . _DB_PREFIX_ . 'page_type` pt ON pt.`id_page_type` = p.`id_page_type`
\t\t\t\tWHERE pt.`name` = \\'product\\'
\t\t\t\t\t' . Shop::addSqlRestriction(false, 'pv') . '
\t\t\t\t\tAND p.`id_object` = ' . (int) \$id_product . '
\t\t\t\t\tAND dr.`time_start` BETWEEN ' . \$date_between . '
\t\t\t\t\tAND dr.`time_end` BETWEEN ' . \$date_between;
        \$result = Db::getInstance((bool) _PS_USE_SQL_SLAVE_)->getRow(\$sql);

        return isset(\$result['total']) ? \$result['total'] : 0;
    }

    private function getProducts(\$id_lang)
    {
        \$sql = 'SELECT p.`id_product`, p.reference, pl.`name`, IFNULL(stock.quantity, 0) as quantity
\t\t\t\tFROM `' . _DB_PREFIX_ . 'product` p
\t\t\t\t' . Product::sqlStock('p', 0) . '
\t\t\t\tLEFT JOIN `' . _DB_PREFIX_ . 'product_lang` pl ON p.`id_product` = pl.`id_product`' . Shop::addSqlRestrictionOnLang('pl') . '
\t\t\t\t' . Shop::addSqlAssociation('product', 'p') . '
\t\t\t\t' . (Tools::getValue('id_category') ? 'LEFT JOIN `' . _DB_PREFIX_ . 'category_product` cp ON p.`id_product` = cp.`id_product`' : '') . '
\t\t\t\tWHERE pl.`id_lang` = ' . (int) \$id_lang . '
\t\t\t\t\t' . (Tools::getValue('id_category') ? 'AND cp.id_category = ' . (int) Tools::getValue('id_category') : '');
        if (version_compare(_PS_VERSION_, '1.7.0.0', '>=')) {
            \$sql .= ' AND p.state = ' . Product::STATE_SAVED;
        }
        \$sql .= ' ORDER BY pl.`name`';

        return Db::getInstance((bool) _PS_USE_SQL_SLAVE_)->executeS(\$sql);
    }

    private function getSales(\$id_product)
    {
        \$sql = 'SELECT o.date_add, o.id_order, o.id_customer, od.product_quantity, (od.unit_price_tax_excl * od.product_quantity) as total, od.tax_name, od.product_name
\t\t\t\tFROM `' . _DB_PREFIX_ . 'orders` o
\t\t\t\tLEFT JOIN `' . _DB_PREFIX_ . 'order_detail` od ON o.id_order = od.id_order
\t\t\t\tWHERE o.date_add BETWEEN ' . \$this->getDate() . '
\t\t\t\t\t' . Shop::addSqlRestriction(Shop::SHARE_ORDER, 'o') . '
\t\t\t\t\tAND o.valid = 1
\t\t\t\t\tAND od.product_id = ' . (int) \$id_product;

        return Db::getInstance((bool) _PS_USE_SQL_SLAVE_)->executeS(\$sql);
    }

    private function getCrossSales(\$id_product, \$id_lang)
    {
        \$sql = 'SELECT pl.name as pname, pl.id_product, SUM(od.product_quantity) as pqty, AVG(od.unit_price_tax_excl) as pprice
\t\t\t\tFROM `' . _DB_PREFIX_ . 'orders` o
\t\t\t\tLEFT JOIN `' . _DB_PREFIX_ . 'order_detail` od ON o.id_order = od.id_order
\t\t\t\tLEFT JOIN `' . _DB_PREFIX_ . 'product_lang` pl ON (pl.id_product = od.product_id AND pl.id_lang = ' . (int) \$id_lang . Shop::addSqlRestrictionOnLang('pl') . ')
\t\t\t\tWHERE o.id_customer IN (
\t\t\t\t\t\tSELECT o.id_customer
\t\t\t\t\t\tFROM `' . _DB_PREFIX_ . 'orders` o
\t\t\t\t\t\tLEFT JOIN `' . _DB_PREFIX_ . 'order_detail` od ON o.id_order = od.id_order
\t\t\t\t\t\tWHERE o.date_add BETWEEN ' . \$this->getDate() . '
\t\t\t\t\t\tAND o.valid = 1
\t\t\t\t\t\tAND od.product_id = ' . (int) \$id_product . '
\t\t\t\t\t)
\t\t\t\t\t' . Shop::addSqlRestriction(Shop::SHARE_ORDER, 'o') . '
\t\t\t\t\tAND o.date_add BETWEEN ' . \$this->getDate() . '
\t\t\t\t\tAND o.valid = 1
\t\t\t\t\tAND od.product_id != ' . (int) \$id_product . '
\t\t\t\tGROUP BY od.product_id
\t\t\t\tORDER BY pqty DESC';

        return Db::getInstance((bool) _PS_USE_SQL_SLAVE_)->executeS(\$sql);
    }

    public function hookDisplayAdminStatsModules()
    {
        \$id_category = (int) Tools::getValue('id_category');
        \$currency = Context::getContext()->currency;

        if (Tools::getValue('export')) {
            if (!Tools::getValue('exportType')) {
                \$this->csvExport([
                    'layers' => 2,
                    'type' => 'line',
                    'option' => '42',
                ]);
            }
        }

        \$this->html = '
\t\t\t<div class=\"panel-heading\">
\t\t\t\t' . \$this->displayName . '
\t\t\t</div>
\t\t\t<h4>' . \$this->trans('Guide', [], 'Admin.Global') . '</h4>
\t\t\t<div class=\"alert alert-warning\">
\t\t\t\t<h4>' . \$this->trans('Number of purchases compared to number of views', [], 'Modules.Statsproduct.Admin') . '</h4>
\t\t\t\t\t' . \$this->trans('After choosing a category and selecting a product, informational graphs will appear.', [], 'Modules.Statsproduct.Admin') . '
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li class=\"bullet\">' . \$this->trans('If you notice that a product is often purchased but viewed infrequently, you should display it more prominently in your Front Office.', [], 'Modules.Statsproduct.Admin') . '</li>
\t\t\t\t\t\t<li class=\"bullet\">' . \$this->trans('On the other hand, if a product has many views but is not often purchased, we advise you to check or modify this product\\'s information, description and photography again, see if you can find something better.', [], 'Modules.Statsproduct.Admin') . '
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t</div>';
        if (\$id_product = (int) Tools::getValue('id_product')) {
            if (Tools::getValue('export')) {
                if (Tools::getValue('exportType') == 1) {
                    \$this->csvExport([
                        'layers' => 2,
                        'type' => 'line',
                        'option' => '1-' . \$id_product,
                    ]);
                } elseif (Tools::getValue('exportType') == 2) {
                    \$this->csvExport([
                        'type' => 'pie',
                        'option' => '3-' . \$id_product,
                    ]);
                }
            }
            \$product = new Product(\$id_product, false, \$this->context->language->id);
            \$total_bought = \$this->getTotalBought(\$product->id);
            \$total_sales = \$this->getTotalSales(\$product->id);
            \$total_viewed = \$this->getTotalViewed(\$product->id);
            \$this->html .= '<h4>' . \$product->name . ' - ' . \$this->trans('Details', [], 'Modules.Statsproduct.Admin') . '</h4>
\t\t\t<div class=\"row row-margin-bottom\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t' . \$this->engine([
                    'layers' => 2,
                    'type' => 'line',
                    'option' => '1-' . \$id_product,
                ]) . '
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t<li>' . \$this->trans('Total bought', [], 'Modules.Statsproduct.Admin') . ' ' . \$total_bought . '</li>
\t\t\t\t\t\t\t<li>' . \$this->trans('Sales (tax excluded)', [], 'Modules.Statsproduct.Admin') . ' ' . \$this->context->getCurrentLocale()->formatPrice(\$total_sales, \$currency->iso_code) . '</li>
\t\t\t\t\t\t\t<li>' . \$this->trans('Total Viewed', [], 'Modules.Statsproduct.Admin') . ' ' . \$total_viewed . '</li>
\t\t\t\t\t\t\t<li>' . \$this->trans('Conversion rate', [], 'Modules.Statsproduct.Admin') . ' ' . number_format(\$total_viewed ? \$total_bought / \$total_viewed : 0, 2) . '</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<a class=\"btn btn-default export-csv\" href=\"' . Tools::safeOutput(\$_SERVER['REQUEST_URI']) . '&export=1&exportType=1\">
\t\t\t\t\t\t\t<i class=\"icon-cloud-upload\"></i> ' . \$this->trans('CSV Export', [], 'Modules.Statsproduct.Admin') . '
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>';
            if (\$has_attribute = \$product->hasAttributes() && \$total_bought) {
                \$this->html .= '
\t\t\t\t<h3 class=\"space\">' . \$this->trans('Attribute sales distribution', [], 'Modules.Statsproduct.Admin') . '</h3>
\t\t\t\t<center>' . \$this->engine(['type' => 'pie', 'option' => '3-' . \$id_product]) . '</center><br />
\t\t\t\t<a href=\"' . Tools::safeOutput(\$_SERVER['REQUEST_URI']) . '&export=1&exportType=2\"><img src=\"../img/admin/asterisk.gif\" alt=\"\"/>' . \$this->trans('CSV Export', [], 'Modules.Statsproduct.Admin') . '</a>';
            }
            if (\$total_bought) {
                \$sales = \$this->getSales(\$id_product);
                \$this->html .= '
\t\t\t\t<h4>' . \$this->trans('Sales', [], 'Admin.Global') . '</h4>
\t\t\t\t<div style=\"overflow-y:scroll;height:' . min(400, (count(\$sales) + 1) * 32) . 'px\">
\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t<span class=\"title_box  active\">' . \$this->trans('Date', [], 'Admin.Global') . '</span>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t<span class=\"title_box  active\">' . \$this->trans('Order', [], 'Admin.Global') . '</span>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t<span class=\"title_box  active\">' . \$this->trans('Customer', [], 'Admin.Global') . '</span>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t' . (\$has_attribute ? '<th><span class=\"title_box  active\">' . \$this->trans('Attribute', [], 'Admin.Global') . '</span></th>' : '') . '
\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t<span class=\"title_box  active\">' . \$this->trans('Quantity', [], 'Admin.Global') . '</span>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t<span class=\"title_box  active\">' . \$this->trans('Price', [], 'Admin.Global') . '</span>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>';
                \$token_order = Tools::getAdminToken('AdminOrders' . (int) Tab::getIdFromClassName('AdminOrders') . (int) \$this->context->employee->id);
                \$token_customer = Tools::getAdminToken('AdminCustomers' . (int) Tab::getIdFromClassName('AdminCustomers') . (int) \$this->context->employee->id);
                foreach (\$sales as \$sale) {
                    \$this->html .= '
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>' . Tools::displayDate(\$sale['date_add']) . '</td>
\t\t\t\t\t\t\t<td class=\"text-center\"><a href=\"?controller=AdminOrders&id_order=' . \$sale['id_order'] . '&vieworder&token=' . \$token_order . '\">' . (int) \$sale['id_order'] . '</a></td>
\t\t\t\t\t\t\t<td class=\"text-center\"><a href=\"?controller=AdminCustomers&id_customer=' . \$sale['id_customer'] . '&viewcustomer&token=' . \$token_customer . '\">' . (int) \$sale['id_customer'] . '</a></td>
\t\t\t\t\t\t\t' . (\$has_attribute ? '<td>' . \$sale['product_name'] . '</td>' : '') . '
\t\t\t\t\t\t\t<td>' . (int) \$sale['product_quantity'] . '</td>
\t\t\t\t\t\t\t<td>' . \$this->context->getCurrentLocale()->formatPrice(\$sale['total'], \$currency->iso_code) . '</td>
\t\t\t\t\t\t</tr>';
                }
                \$this->html .= '
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>';

                \$cross_selling = \$this->getCrossSales(\$id_product, \$this->context->language->id);
                if (count(\$cross_selling)) {
                    \$this->html .= '
\t\t\t\t\t<h4>' . \$this->trans('Cross selling', [], 'Modules.Statsproduct.Admin') . '</h4>
\t\t\t\t\t<div style=\"overflow-y:scroll;height:200px\">
\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t<span class=\"title_box active\">' . \$this->trans('Product name', [], 'Admin.Shopparameters.Feature') . '</span>
\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t<span class=\"title_box active\">' . \$this->trans('Quantity sold', [], 'Admin.Global') . '</span>
\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t<span class=\"title_box active\">' . \$this->trans('Average price', [], 'Admin.Global') . '</span>
\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>';
                    \$token_products = Tools::getAdminToken('AdminProducts' . (int) Tab::getIdFromClassName('AdminProducts') . (int) \$this->context->employee->id);
                    foreach (\$cross_selling as \$selling) {
                        \$this->html .= '
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td><a href=\"?controller=AdminProducts&id_product=' . (int) \$selling['id_product'] . '&addproduct&token=' . \$token_products . '\">' . \$selling['pname'] . '</a></td>
\t\t\t\t\t\t\t\t<td class=\"text-center\">' . (int) \$selling['pqty'] . '</td>
\t\t\t\t\t\t\t\t<td class=\"text-right\">' . \$this->context->getCurrentLocale()->formatPrice(\$selling['pprice'], \$currency->iso_code) . '</td>
\t\t\t\t\t\t\t</tr>';
                    }
                    \$this->html .= '
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>';
                }
            }
        } else {
            \$categories = Category::getCategories((int) \$this->context->language->id, true, false);
            \$this->html .= '
\t\t\t<form action=\"#\" method=\"post\" id=\"categoriesForm\" class=\"form-horizontal\">
\t\t\t\t<div class=\"row row-margin-bottom\">
\t\t\t\t\t<label class=\"control-label col-lg-3\">
\t\t\t\t\t\t<span title=\"\" data-toggle=\"tooltip\" class=\"label-tooltip\" data-original-title=\"' . \$this->trans('Click on a product to access its statistics!', [], 'Modules.Statsproduct.Admin') . '\">
\t\t\t\t\t\t\t' . \$this->trans('Choose a category', [], 'Modules.Statsproduct.Admin') . '
\t\t\t\t\t\t</span>
\t\t\t\t\t</label>
\t\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t\t<select name=\"id_category\" onchange=\"\$(\\'#categoriesForm\\').submit();\">
\t\t\t\t\t\t\t<option value=\"0\">' . \$this->trans('All', [], 'Admin.Global') . '</option>';
            foreach (\$categories as \$category) {
                \$this->html .= '<option value=\"' . \$category['id_category'] . '\"' . (\$id_category == \$category['id_category'] ? ' selected=\"selected\"' : '') . '>' . \$category['name'] . '</option>';
            }
            \$this->html .= '
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>
\t\t\t<h4>' . \$this->trans('Products available', [], 'Modules.Statsproduct.Admin') . '</h4>
\t\t\t<table class=\"table\" style=\"border: 0; cellspacing: 0;\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t<span class=\"title_box  active\">' . \$this->trans('Reference', [], 'Admin.Global') . '</span>
\t\t\t\t\t\t</th>
\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t<span class=\"title_box  active\">' . \$this->trans('Name', [], 'Admin.Global') . '</span>
\t\t\t\t\t\t</th>
\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t<span class=\"title_box  active\">' . \$this->trans('Available quantity for sale', [], 'Admin.Global') . '</span>
\t\t\t\t\t\t</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>';

            foreach (\$this->getProducts(\$this->context->language->id) as \$product) {
                \$this->html .= '
\t\t\t\t<tr>
\t\t\t\t\t<td>' . \$product['reference'] . '</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"' . Tools::safeOutput(AdminController::\$currentIndex . '&token=' . Tools::getValue('token') . '&module=' . \$this->name . '&id_product=' . \$product['id_product']) . '\">' . \$product['name'] . '</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>' . \$product['quantity'] . '</td>
\t\t\t\t</tr>';
            }

            \$this->html .= '
\t\t\t\t</tbody>
\t\t\t</table>
\t\t\t<a class=\"btn btn-default export-csv\" href=\"' . Tools::safeOutput(\$_SERVER['REQUEST_URI'] . '&export=1') . '\">
\t\t\t\t<i class=\"icon-cloud-upload\"></i> ' . \$this->trans('CSV Export', [], 'Modules.Statsproduct.Admin') . '
\t\t\t</a>';
        }

        return \$this->html;
    }

    public function setOption(\$option, \$layers = 1)
    {
        \$options = explode('-', \$option);
        if (count(\$options) === 2) {
            list(\$this->option, \$this->id_product) = \$options;
        } else {
            \$this->option = \$option;
        }
        \$date_between = \$this->getDate();
        switch (\$this->option) {
            case 1:
                \$this->_titles['main'][0] = \$this->trans('Popularity', [], 'Modules.Statsproduct.Admin');
                \$this->_titles['main'][1] = \$this->trans('Sales', [], 'Admin.Global');
                \$this->_titles['main'][2] = \$this->trans('Visits (x100)', [], 'Modules.Statsproduct.Admin');
          \$this->query = [];
                \$this->query[0] = 'SELECT o.`date_add`, SUM(od.`product_quantity`) AS total
\t\t\t\t\t\tFROM `' . _DB_PREFIX_ . 'order_detail` od
\t\t\t\t\t\tLEFT JOIN `' . _DB_PREFIX_ . 'orders` o ON o.`id_order` = od.`id_order`
\t\t\t\t\t\tWHERE od.`product_id` = ' . (int) \$this->id_product . '
\t\t\t\t\t\t\t' . Shop::addSqlRestriction(Shop::SHARE_ORDER, 'o') . '
\t\t\t\t\t\t\tAND o.valid = 1
\t\t\t\t\t\t\tAND o.`date_add` BETWEEN ' . \$date_between . '
\t\t\t\t\t\tGROUP BY o.`date_add`';

                \$this->query[1] = 'SELECT dr.`time_start` AS date_add, (SUM(pv.`counter`) / 100) AS total
\t\t\t\t\t\tFROM `' . _DB_PREFIX_ . 'page_viewed` pv
\t\t\t\t\t\tLEFT JOIN `' . _DB_PREFIX_ . 'date_range` dr ON pv.`id_date_range` = dr.`id_date_range`
\t\t\t\t\t\tLEFT JOIN `' . _DB_PREFIX_ . 'page` p ON pv.`id_page` = p.`id_page`
\t\t\t\t\t\tLEFT JOIN `' . _DB_PREFIX_ . 'page_type` pt ON pt.`id_page_type` = p.`id_page_type`
\t\t\t\t\t\tWHERE pt.`name` = \\'product\\'
\t\t\t\t\t\t\t' . Shop::addSqlRestriction(false, 'pv') . '
\t\t\t\t\t\t\tAND p.`id_object` = ' . (int) \$this->id_product . '
\t\t\t\t\t\t\tAND dr.`time_start` BETWEEN ' . \$date_between . '
\t\t\t\t\t\t\tAND dr.`time_end` BETWEEN ' . \$date_between . '
\t\t\t\t\t\tGROUP BY dr.`time_start`';
                break;

            case 3:
                \$this->query = 'SELECT product_attribute_id, SUM(od.`product_quantity`) AS total, od.product_name AS product_name
\t\t\t\t\t\tFROM `' . _DB_PREFIX_ . 'orders` o
\t\t\t\t\t\tLEFT JOIN `' . _DB_PREFIX_ . 'order_detail` od ON o.`id_order` = od.`id_order`
\t\t\t\t\t\tWHERE od.`product_id` = ' . (int) \$this->id_product . '
\t\t\t\t\t\t\t' . Shop::addSqlRestriction(Shop::SHARE_ORDER, 'o') . '
\t\t\t\t\t\t\tAND o.valid = 1
\t\t\t\t\t\t\tAND o.`date_add` BETWEEN ' . \$date_between . '
\t\t\t\t\t\tGROUP BY od.`product_attribute_id`';
                \$this->_titles['main'] = \$this->trans('Attributes', [], 'Admin.Global');
                break;

            case 42:
                \$this->_titles['main'][1] = \$this->trans('Reference', [], 'Admin.Global');
                \$this->_titles['main'][2] = \$this->trans('Name', [], 'Admin.Global');
                \$this->_titles['main'][3] = \$this->trans('Stock', [], 'Modules.Statsproduct.Admin');
                break;
        }
    }

    protected function getData(\$layers)
    {
        if (\$this->option == 42) {
            \$products = \$this->getProducts(\$this->context->language->id);
            foreach (\$products as \$product) {
                \$this->_values[0][] = \$product['reference'];
                \$this->_values[1][] = \$product['name'];
                \$this->_values[2][] = \$product['quantity'];
                \$this->_legend[] = \$product['id_product'];
            }
        } elseif (\$this->option != 3) {
            \$this->setDateGraph(\$layers, true);
        } else {
            \$result = Db::getInstance((bool) _PS_USE_SQL_SLAVE_)->executeS(\$this->query);
            foreach (\$result as \$row) {
                \$this->_values[] = \$row['total'];
                \$this->_legend[] = \$row['product_name'];
            }
        }
    }

    protected function setAllTimeValues(\$layers)
    {
        for (\$i = 0; \$i < \$layers; ++\$i) {
            \$result = Db::getInstance((bool) _PS_USE_SQL_SLAVE_)->executeS(\$this->query[\$i]);
            foreach (\$result as \$row) {
                \$this->_values[\$i][(int) substr(\$row['date_add'], 0, 4)] += \$row['total'];
            }
        }
    }

    protected function setYearValues(\$layers)
    {
        for (\$i = 0; \$i < \$layers; ++\$i) {
            \$result = Db::getInstance((bool) _PS_USE_SQL_SLAVE_)->executeS(\$this->query[\$i]);
            foreach (\$result as \$row) {
                \$this->_values[\$i][(int) substr(\$row['date_add'], 5, 2)] += \$row['total'];
            }
        }
    }

    protected function setMonthValues(\$layers)
    {
        for (\$i = 0; \$i < \$layers; ++\$i) {
            \$result = Db::getInstance((bool) _PS_USE_SQL_SLAVE_)->executeS(\$this->query[\$i]);
            foreach (\$result as \$row) {
                \$this->_values[\$i][(int) substr(\$row['date_add'], 8, 2)] += \$row['total'];
            }
        }
    }

    protected function setDayValues(\$layers)
    {
        for (\$i = 0; \$i < \$layers; ++\$i) {
            \$result = Db::getInstance((bool) _PS_USE_SQL_SLAVE_)->executeS(\$this->query[\$i]);
            foreach (\$result as \$row) {
                \$this->_values[\$i][(int) substr(\$row['date_add'], 11, 2)] += \$row['total'];
            }
        }
    }
}
", "@Modules/statsproduct/statsproduct.php", "/var/www/html/modules/statsproduct/statsproduct.php");
    }
}
