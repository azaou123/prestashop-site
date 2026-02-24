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

/* @Modules/statscatalog/statscatalog.php */
class __TwigTemplate_764d317fc17498fa5bdef92a7a2bb8a9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/statscatalog/statscatalog.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/statscatalog/statscatalog.php"));

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

class statscatalog extends Module
{
    /**
     * @var string
     */
    private \$join = '';
    /**
     * @var string
     */
    private \$where = '';

    public function __construct()
    {
        \$this->name = 'statscatalog';
        \$this->tab = 'administration';
        \$this->version = '2.0.4';
        \$this->author = 'PrestaShop';
        \$this->need_instance = 0;

        parent::__construct();

        \$this->displayName = \$this->trans('Catalog statistics', [], 'Modules.Statscatalog.Admin');
        \$this->description = \$this->trans('Enrich your stats, have a look at your catalog’s general statistics.', [], 'Modules.Statscatalog.Admin');
        \$this->ps_versions_compliancy = ['min' => '1.7.6.0', 'max' => _PS_VERSION_];
    }

    public function install()
    {
        return parent::install() && \$this->registerHook('displayAdminStatsModules');
    }

    public function getQuery1()
    {
        \$sql = 'SELECT COUNT(DISTINCT p.`id_product`) AS total, SUM(product_shop.`price`) / COUNT(product_shop.`price`) AS average_price, COUNT(DISTINCT i.`id_image`) AS images
\t\t\t\tFROM `' . _DB_PREFIX_ . 'product` p
\t\t\t\t' . Shop::addSqlAssociation('product', 'p') . '
\t\t\t\tLEFT JOIN `' . _DB_PREFIX_ . 'image` i ON i.`id_product` = p.`id_product`
\t\t\t\t' . \$this->join . '
\t\t\t\tWHERE product_shop.`active` = 1
\t\t\t\t\t' . \$this->where;

        return Db::getInstance((bool) _PS_USE_SQL_SLAVE_)->getRow(\$sql);
    }

    public function getTotalPageViewed()
    {
        return Db::getInstance((bool) _PS_USE_SQL_SLAVE_)->getValue('
\t\tSELECT SUM(pv.`counter`)
\t\tFROM `' . _DB_PREFIX_ . 'product` p
\t\t' . Shop::addSqlAssociation('product', 'p') . '
\t\tLEFT JOIN `' . _DB_PREFIX_ . 'page` pa ON p.`id_product` = pa.`id_object`
\t\tLEFT JOIN `' . _DB_PREFIX_ . 'page_type` pt ON (pt.`id_page_type` = pa.`id_page_type` AND pt.`name` IN (\"product.php\", \"product\"))
\t\tLEFT JOIN `' . _DB_PREFIX_ . 'page_viewed` pv ON pv.`id_page` = pa.`id_page`
\t\t' . \$this->join . '
\t\tWHERE product_shop.`active` = 1
\t\t' . \$this->where);
    }

    public function getTotalProductViewed()
    {
        return Db::getInstance((bool) _PS_USE_SQL_SLAVE_)->getValue('
\t\tSELECT COUNT(DISTINCT pa.`id_object`)
\t\tFROM `' . _DB_PREFIX_ . 'page_viewed` pv
\t\tLEFT JOIN `' . _DB_PREFIX_ . 'page` pa ON pv.`id_page` = pa.`id_page`
\t\tLEFT JOIN `' . _DB_PREFIX_ . 'page_type` pt ON pt.`id_page_type` = pa.`id_page_type`
\t\tLEFT JOIN `' . _DB_PREFIX_ . 'product` p ON p.`id_product` = pa.`id_object`
\t\t' . Shop::addSqlAssociation('product', 'p') . '
\t\t' . \$this->join . '
\t\tWHERE pt.`name` IN (\"product.php\", \"product\")
\t\tAND product_shop.`active` = 1
\t\t' . \$this->where);
    }

    public function getTotalBought()
    {
        return Db::getInstance((bool) _PS_USE_SQL_SLAVE_)->getValue('
\t\tSELECT SUM(od.`product_quantity`)
\t\tFROM `' . _DB_PREFIX_ . 'orders` o
\t\tLEFT JOIN `' . _DB_PREFIX_ . 'order_detail` od ON o.`id_order` = od.`id_order`
\t\tLEFT JOIN `' . _DB_PREFIX_ . 'product` p ON p.`id_product` = od.`product_id`
\t\t' . \$this->join . '
\t\tWHERE o.valid = 1
\t\t' . \$this->where);
    }

    public function getProductsNB(\$id_lang)
    {
        \$sql = 'SELECT p.`id_product`
\t\t\t\tFROM `' . _DB_PREFIX_ . 'orders` o
\t\t\t\tLEFT JOIN `' . _DB_PREFIX_ . 'order_detail` od ON o.`id_order` = od.`id_order`
\t\t\t\tLEFT JOIN `' . _DB_PREFIX_ . 'product` p ON p.`id_product` = od.`product_id`
\t\t\t\t' . Shop::addSqlAssociation('product', 'p') . '
\t\t\t\t' . \$this->join . '
\t\t\t\tWHERE o.valid = 1
\t\t\t\t\t' . \$this->where . '
\t\t\t\t\tAND product_shop.`active` = 1
\t\t\t\tGROUP BY p.`id_product`';
        \$precalc = Db::getInstance((bool) _PS_USE_SQL_SLAVE_)->executeS(\$sql);

        \$precalc2 = [];
        foreach (\$precalc as \$array) {
            \$precalc2[] = (int) \$array['id_product'];
        }

        \$sql = 'SELECT p.id_product, pl.name, pl.link_rewrite
\t\t\t\tFROM `' . _DB_PREFIX_ . 'product` p
\t\t\t\t' . Shop::addSqlAssociation('product', 'p') . '
\t\t\t\tLEFT JOIN `' . _DB_PREFIX_ . 'product_lang` pl
\t\t\t\t\tON (pl.`id_product` = p.`id_product` AND pl.id_lang = ' . (int) \$id_lang . Shop::addSqlRestrictionOnLang('pl') . ')
\t\t\t\t' . \$this->join . '
\t\t\t\tWHERE product_shop.`active` = 1
\t\t\t\t\t' . (count(\$precalc2) ? 'AND p.`id_product` NOT IN (' . implode(',', \$precalc2) . ')' : '') . '
\t\t\t\t\t' . \$this->where;
        \$result = Db::getInstance((bool) _PS_USE_SQL_SLAVE_)->executeS(\$sql);

        return ['total' => Db::getInstance((bool) _PS_USE_SQL_SLAVE_)->NumRows(), 'result' => \$result];
    }

    public function hookDisplayAdminStatsModules(\$params)
    {
        \$categories = Category::getCategories(\$this->context->language->id, true, false);
        \$product_token = Tools::getAdminToken('AdminProducts' . (int) Tab::getIdFromClassName('AdminProducts') . (int) \$this->context->employee->id);
        \$irow = 0;

        if (\$id_category = (int) Tools::getValue('id_category')) {
            \$this->join = ' LEFT JOIN `' . _DB_PREFIX_ . 'category_product` cp ON (cp.`id_product` = p.`id_product`)';
            \$this->where = ' AND cp.`id_category` = ' . \$id_category;
        }

        \$result1 = \$this->getQuery1();
        \$total = \$result1['total'];
        \$average_price = \$result1['average_price'];
        \$total_pictures = \$result1['images'];
        \$average_pictures = \$total ? \$total_pictures / \$total : 0;

        \$never_bought = \$this->getProductsNB(\$this->context->language->id);
        \$total_nb = \$never_bought['total'];
        \$products_nb = \$never_bought['result'];

        \$total_bought = \$this->getTotalBought();
        \$average_purchase = \$total ? (\$total_bought / \$total) : 0;

        \$total_page_viewed = \$this->getTotalPageViewed();
        \$average_viewed = \$total ? (\$total_page_viewed / \$total) : 0;
        \$conversion = number_format((float) (\$total_page_viewed ? (\$total_bought / \$total_page_viewed) : 0), 2, '.', '');
        if (\$conversion_reverse = number_format((float) (\$total_bought ? (\$total_page_viewed / \$total_bought) : 0), 2, '.', '')) {
            \$conversion .= \$this->trans('(1 purchase / %d visits)', [\$conversion_reverse], 'Modules.Statscatalog.Admin');
        }

        \$total_nv = \$total - \$this->getTotalProductViewed();

        \$html = '
\t\t<script type=\"text/javascript\">\$(\\'#calendar\\').slideToggle();</script>
\t\t\t<div class=\"panel-heading\">
\t\t\t\t' . \$this->displayName . '
\t\t\t</div>
\t\t\t<form action=\"#\" method=\"post\" id=\"categoriesForm\" class=\"form-horizontal\">
\t\t\t\t<div class=\"row row-margin-bottom\">
\t\t\t\t\t<label class=\"control-label col-lg-3\">
\t\t\t\t\t\t' . \$this->trans('Choose a category', [], 'Modules.Statscatalog.Admin') . '
\t\t\t\t\t</label>
\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t<select name=\"id_category\" onchange=\"\$(\\'#categoriesForm\\').submit();\">
\t\t\t\t\t\t\t<option value=\"0\">' . \$this->trans('All', [], 'Admin.Actions') . '</option>';
        foreach (\$categories as \$category) {
            \$html .= '<option value=\"' . \$category['id_category'] . '\"' . (\$id_category == \$category['id_category'] ? ' selected=\"selected\"' : '') . '>' .
                \$category['name'] . '
\t\t\t\t\t\t\t</option>';
        }
        \$html .= '
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>
\t\t\t<ul class=\"list-group\">
\t\t\t\t<li class=\"list-group-item\">' . \$this->returnLine(\$this->trans('Products available:', [], 'Modules.Statscatalog.Admin'), '<span class=\"badge\">' . (int) \$total) . '</span></li>
\t\t\t\t<li class=\"list-group-item\">' . \$this->returnLine(\$this->trans('Average price (base price):', [], 'Modules.Statscatalog.Admin'), '<span class=\"badge\">' . \$this->context->getCurrentLocale()->formatPrice(\$average_price, \$this->context->currency->iso_code)) . '</span></li>
\t\t\t\t<li class=\"list-group-item\">' . \$this->returnLine(\$this->trans('Product pages viewed:', [], 'Modules.Statscatalog.Admin'), '<span class=\"badge\">' . (int) \$total_page_viewed) . '</span></li>
\t\t\t\t<li class=\"list-group-item\">' . \$this->returnLine(\$this->trans('Products bought:', [], 'Admin.Global'), '<span class=\"badge\">' . (int) \$total_bought) . '</span></li>
\t\t\t\t<li class=\"list-group-item\">' . \$this->returnLine(\$this->trans('Average number of page visits:', [], 'Modules.Statscatalog.Admin'), '<span class=\"badge\">' . number_format((float) \$average_viewed, 2, '.', '')) . '</span></li>
\t\t\t\t<li class=\"list-group-item\">' . \$this->returnLine(\$this->trans('Average number of purchases:', [], 'Modules.Statscatalog.Admin'), '<span class=\"badge\">' . number_format((float) \$average_purchase, 2, '.', '')) . '</span></li>
\t\t\t\t<li class=\"list-group-item\">' . \$this->returnLine(\$this->trans('Images available:', [], 'Modules.Statscatalog.Admin'), '<span class=\"badge\">' . (int) \$total_pictures) . '</span></li>
\t\t\t\t<li class=\"list-group-item\">' . \$this->returnLine(\$this->trans('Average number of images:', [], 'Modules.Statscatalog.Admin'), '<span class=\"badge\">' . number_format((float) \$average_pictures, 2, '.', '')) . '</span></li>
\t\t\t\t<li class=\"list-group-item\">' . \$this->returnLine(\$this->trans('Products never viewed:', [], 'Modules.Statscatalog.Admin'), '<span class=\"badge\">' . (int) \$total_nv . ' / ' . (int) \$total) . '</span></li>
\t\t\t\t<li class=\"list-group-item\">' . \$this->returnLine(\$this->trans('Products never purchased:', [], 'Modules.Statscatalog.Admin'), '<span class=\"badge\">' . (int) \$total_nb . ' / ' . (int) \$total) . '</span></li>
\t\t\t\t<li class=\"list-group-item\">' . \$this->returnLine(\$this->trans('Conversion rate*:', [], 'Modules.Statscatalog.Admin'), '<span class=\"badge\">' . \$conversion) . '</span></li>
\t\t\t</ul>
\t\t\t<div class=\"row row-margin-bottom\">
\t\t\t\t<p>
\t\t\t\t\t<i class=\"icon-asterisk\"></i>' . \$this->trans('Defines the average conversion rate for the product page. It is possible to purchase a product without viewing the product page, so this rate can be greater than 1.', [], 'Modules.Statscatalog.Admin') . '
\t\t\t\t</p>
\t\t\t</div>';

        if (count(\$products_nb) && count(\$products_nb) < 50) {
            \$html .= '
\t\t\t\t<div class=\"panel-heading\">' . \$this->trans('Products never purchased', [], 'Modules.Statscatalog.Admin') . '</div>
\t\t\t\t<table class=\"table\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th><span class=\"title_box active\">' . \$this->trans('ID', [], 'Admin.Global') . '</span></th>
\t\t\t\t\t\t\t<th><span class=\"title_box active\">' . \$this->trans('Name', [], 'Admin.Global') . '</span></th>
\t\t\t\t\t\t\t<th><span class=\"title_box active\">' . \$this->trans('Edit / View', [], 'Modules.Statscatalog.Admin') . '</span></th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>';
            foreach (\$products_nb as \$product) {
                \$html .= '
\t\t\t\t\t<tr' . (\$irow++ % 2 ? ' class=\"alt_row\"' : '') . '>
\t\t\t\t\t\t<td>' . \$product['id_product'] . '</td>
\t\t\t\t\t\t<td>' . \$product['name'] . '</td>
\t\t\t\t\t\t<td class=\"left\">
\t\t\t\t\t\t\t<div class=\"btn-group btn-group-action\">
\t\t\t\t\t\t\t\t<a class=\"btn btn-default\" href=\"' . Tools::safeOutput('index.php?controller=AdminProducts&id_product=' . \$product['id_product'] . '&addproduct&token=' . \$product_token) . '\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-edit\"></i> ' . \$this->trans('Edit', [], 'Admin.Global') . '
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<button data-toggle=\"dropdown\" class=\"btn btn-default dropdown-toggle\" type=\"button\">
\t\t\t\t\t\t\t\t\t<span class=\"caret\">&nbsp;</span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"' . Tools::safeOutput(\$this->context->link->getProductLink(\$product['id_product'], \$product['link_rewrite'])) . '\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-eye-open\"></i> ' . \$this->trans('View', [], 'Admin.Global') . '
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>';
            }
            \$html .= '
\t\t\t\t\t</tbody>
\t\t\t\t</table>';
        }

        return \$html;
    }

    private function returnLine(\$label, \$data)
    {
        return \$label . \$data;
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/statscatalog/statscatalog.php";
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

class statscatalog extends Module
{
    /**
     * @var string
     */
    private \$join = '';
    /**
     * @var string
     */
    private \$where = '';

    public function __construct()
    {
        \$this->name = 'statscatalog';
        \$this->tab = 'administration';
        \$this->version = '2.0.4';
        \$this->author = 'PrestaShop';
        \$this->need_instance = 0;

        parent::__construct();

        \$this->displayName = \$this->trans('Catalog statistics', [], 'Modules.Statscatalog.Admin');
        \$this->description = \$this->trans('Enrich your stats, have a look at your catalog’s general statistics.', [], 'Modules.Statscatalog.Admin');
        \$this->ps_versions_compliancy = ['min' => '1.7.6.0', 'max' => _PS_VERSION_];
    }

    public function install()
    {
        return parent::install() && \$this->registerHook('displayAdminStatsModules');
    }

    public function getQuery1()
    {
        \$sql = 'SELECT COUNT(DISTINCT p.`id_product`) AS total, SUM(product_shop.`price`) / COUNT(product_shop.`price`) AS average_price, COUNT(DISTINCT i.`id_image`) AS images
\t\t\t\tFROM `' . _DB_PREFIX_ . 'product` p
\t\t\t\t' . Shop::addSqlAssociation('product', 'p') . '
\t\t\t\tLEFT JOIN `' . _DB_PREFIX_ . 'image` i ON i.`id_product` = p.`id_product`
\t\t\t\t' . \$this->join . '
\t\t\t\tWHERE product_shop.`active` = 1
\t\t\t\t\t' . \$this->where;

        return Db::getInstance((bool) _PS_USE_SQL_SLAVE_)->getRow(\$sql);
    }

    public function getTotalPageViewed()
    {
        return Db::getInstance((bool) _PS_USE_SQL_SLAVE_)->getValue('
\t\tSELECT SUM(pv.`counter`)
\t\tFROM `' . _DB_PREFIX_ . 'product` p
\t\t' . Shop::addSqlAssociation('product', 'p') . '
\t\tLEFT JOIN `' . _DB_PREFIX_ . 'page` pa ON p.`id_product` = pa.`id_object`
\t\tLEFT JOIN `' . _DB_PREFIX_ . 'page_type` pt ON (pt.`id_page_type` = pa.`id_page_type` AND pt.`name` IN (\"product.php\", \"product\"))
\t\tLEFT JOIN `' . _DB_PREFIX_ . 'page_viewed` pv ON pv.`id_page` = pa.`id_page`
\t\t' . \$this->join . '
\t\tWHERE product_shop.`active` = 1
\t\t' . \$this->where);
    }

    public function getTotalProductViewed()
    {
        return Db::getInstance((bool) _PS_USE_SQL_SLAVE_)->getValue('
\t\tSELECT COUNT(DISTINCT pa.`id_object`)
\t\tFROM `' . _DB_PREFIX_ . 'page_viewed` pv
\t\tLEFT JOIN `' . _DB_PREFIX_ . 'page` pa ON pv.`id_page` = pa.`id_page`
\t\tLEFT JOIN `' . _DB_PREFIX_ . 'page_type` pt ON pt.`id_page_type` = pa.`id_page_type`
\t\tLEFT JOIN `' . _DB_PREFIX_ . 'product` p ON p.`id_product` = pa.`id_object`
\t\t' . Shop::addSqlAssociation('product', 'p') . '
\t\t' . \$this->join . '
\t\tWHERE pt.`name` IN (\"product.php\", \"product\")
\t\tAND product_shop.`active` = 1
\t\t' . \$this->where);
    }

    public function getTotalBought()
    {
        return Db::getInstance((bool) _PS_USE_SQL_SLAVE_)->getValue('
\t\tSELECT SUM(od.`product_quantity`)
\t\tFROM `' . _DB_PREFIX_ . 'orders` o
\t\tLEFT JOIN `' . _DB_PREFIX_ . 'order_detail` od ON o.`id_order` = od.`id_order`
\t\tLEFT JOIN `' . _DB_PREFIX_ . 'product` p ON p.`id_product` = od.`product_id`
\t\t' . \$this->join . '
\t\tWHERE o.valid = 1
\t\t' . \$this->where);
    }

    public function getProductsNB(\$id_lang)
    {
        \$sql = 'SELECT p.`id_product`
\t\t\t\tFROM `' . _DB_PREFIX_ . 'orders` o
\t\t\t\tLEFT JOIN `' . _DB_PREFIX_ . 'order_detail` od ON o.`id_order` = od.`id_order`
\t\t\t\tLEFT JOIN `' . _DB_PREFIX_ . 'product` p ON p.`id_product` = od.`product_id`
\t\t\t\t' . Shop::addSqlAssociation('product', 'p') . '
\t\t\t\t' . \$this->join . '
\t\t\t\tWHERE o.valid = 1
\t\t\t\t\t' . \$this->where . '
\t\t\t\t\tAND product_shop.`active` = 1
\t\t\t\tGROUP BY p.`id_product`';
        \$precalc = Db::getInstance((bool) _PS_USE_SQL_SLAVE_)->executeS(\$sql);

        \$precalc2 = [];
        foreach (\$precalc as \$array) {
            \$precalc2[] = (int) \$array['id_product'];
        }

        \$sql = 'SELECT p.id_product, pl.name, pl.link_rewrite
\t\t\t\tFROM `' . _DB_PREFIX_ . 'product` p
\t\t\t\t' . Shop::addSqlAssociation('product', 'p') . '
\t\t\t\tLEFT JOIN `' . _DB_PREFIX_ . 'product_lang` pl
\t\t\t\t\tON (pl.`id_product` = p.`id_product` AND pl.id_lang = ' . (int) \$id_lang . Shop::addSqlRestrictionOnLang('pl') . ')
\t\t\t\t' . \$this->join . '
\t\t\t\tWHERE product_shop.`active` = 1
\t\t\t\t\t' . (count(\$precalc2) ? 'AND p.`id_product` NOT IN (' . implode(',', \$precalc2) . ')' : '') . '
\t\t\t\t\t' . \$this->where;
        \$result = Db::getInstance((bool) _PS_USE_SQL_SLAVE_)->executeS(\$sql);

        return ['total' => Db::getInstance((bool) _PS_USE_SQL_SLAVE_)->NumRows(), 'result' => \$result];
    }

    public function hookDisplayAdminStatsModules(\$params)
    {
        \$categories = Category::getCategories(\$this->context->language->id, true, false);
        \$product_token = Tools::getAdminToken('AdminProducts' . (int) Tab::getIdFromClassName('AdminProducts') . (int) \$this->context->employee->id);
        \$irow = 0;

        if (\$id_category = (int) Tools::getValue('id_category')) {
            \$this->join = ' LEFT JOIN `' . _DB_PREFIX_ . 'category_product` cp ON (cp.`id_product` = p.`id_product`)';
            \$this->where = ' AND cp.`id_category` = ' . \$id_category;
        }

        \$result1 = \$this->getQuery1();
        \$total = \$result1['total'];
        \$average_price = \$result1['average_price'];
        \$total_pictures = \$result1['images'];
        \$average_pictures = \$total ? \$total_pictures / \$total : 0;

        \$never_bought = \$this->getProductsNB(\$this->context->language->id);
        \$total_nb = \$never_bought['total'];
        \$products_nb = \$never_bought['result'];

        \$total_bought = \$this->getTotalBought();
        \$average_purchase = \$total ? (\$total_bought / \$total) : 0;

        \$total_page_viewed = \$this->getTotalPageViewed();
        \$average_viewed = \$total ? (\$total_page_viewed / \$total) : 0;
        \$conversion = number_format((float) (\$total_page_viewed ? (\$total_bought / \$total_page_viewed) : 0), 2, '.', '');
        if (\$conversion_reverse = number_format((float) (\$total_bought ? (\$total_page_viewed / \$total_bought) : 0), 2, '.', '')) {
            \$conversion .= \$this->trans('(1 purchase / %d visits)', [\$conversion_reverse], 'Modules.Statscatalog.Admin');
        }

        \$total_nv = \$total - \$this->getTotalProductViewed();

        \$html = '
\t\t<script type=\"text/javascript\">\$(\\'#calendar\\').slideToggle();</script>
\t\t\t<div class=\"panel-heading\">
\t\t\t\t' . \$this->displayName . '
\t\t\t</div>
\t\t\t<form action=\"#\" method=\"post\" id=\"categoriesForm\" class=\"form-horizontal\">
\t\t\t\t<div class=\"row row-margin-bottom\">
\t\t\t\t\t<label class=\"control-label col-lg-3\">
\t\t\t\t\t\t' . \$this->trans('Choose a category', [], 'Modules.Statscatalog.Admin') . '
\t\t\t\t\t</label>
\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t<select name=\"id_category\" onchange=\"\$(\\'#categoriesForm\\').submit();\">
\t\t\t\t\t\t\t<option value=\"0\">' . \$this->trans('All', [], 'Admin.Actions') . '</option>';
        foreach (\$categories as \$category) {
            \$html .= '<option value=\"' . \$category['id_category'] . '\"' . (\$id_category == \$category['id_category'] ? ' selected=\"selected\"' : '') . '>' .
                \$category['name'] . '
\t\t\t\t\t\t\t</option>';
        }
        \$html .= '
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>
\t\t\t<ul class=\"list-group\">
\t\t\t\t<li class=\"list-group-item\">' . \$this->returnLine(\$this->trans('Products available:', [], 'Modules.Statscatalog.Admin'), '<span class=\"badge\">' . (int) \$total) . '</span></li>
\t\t\t\t<li class=\"list-group-item\">' . \$this->returnLine(\$this->trans('Average price (base price):', [], 'Modules.Statscatalog.Admin'), '<span class=\"badge\">' . \$this->context->getCurrentLocale()->formatPrice(\$average_price, \$this->context->currency->iso_code)) . '</span></li>
\t\t\t\t<li class=\"list-group-item\">' . \$this->returnLine(\$this->trans('Product pages viewed:', [], 'Modules.Statscatalog.Admin'), '<span class=\"badge\">' . (int) \$total_page_viewed) . '</span></li>
\t\t\t\t<li class=\"list-group-item\">' . \$this->returnLine(\$this->trans('Products bought:', [], 'Admin.Global'), '<span class=\"badge\">' . (int) \$total_bought) . '</span></li>
\t\t\t\t<li class=\"list-group-item\">' . \$this->returnLine(\$this->trans('Average number of page visits:', [], 'Modules.Statscatalog.Admin'), '<span class=\"badge\">' . number_format((float) \$average_viewed, 2, '.', '')) . '</span></li>
\t\t\t\t<li class=\"list-group-item\">' . \$this->returnLine(\$this->trans('Average number of purchases:', [], 'Modules.Statscatalog.Admin'), '<span class=\"badge\">' . number_format((float) \$average_purchase, 2, '.', '')) . '</span></li>
\t\t\t\t<li class=\"list-group-item\">' . \$this->returnLine(\$this->trans('Images available:', [], 'Modules.Statscatalog.Admin'), '<span class=\"badge\">' . (int) \$total_pictures) . '</span></li>
\t\t\t\t<li class=\"list-group-item\">' . \$this->returnLine(\$this->trans('Average number of images:', [], 'Modules.Statscatalog.Admin'), '<span class=\"badge\">' . number_format((float) \$average_pictures, 2, '.', '')) . '</span></li>
\t\t\t\t<li class=\"list-group-item\">' . \$this->returnLine(\$this->trans('Products never viewed:', [], 'Modules.Statscatalog.Admin'), '<span class=\"badge\">' . (int) \$total_nv . ' / ' . (int) \$total) . '</span></li>
\t\t\t\t<li class=\"list-group-item\">' . \$this->returnLine(\$this->trans('Products never purchased:', [], 'Modules.Statscatalog.Admin'), '<span class=\"badge\">' . (int) \$total_nb . ' / ' . (int) \$total) . '</span></li>
\t\t\t\t<li class=\"list-group-item\">' . \$this->returnLine(\$this->trans('Conversion rate*:', [], 'Modules.Statscatalog.Admin'), '<span class=\"badge\">' . \$conversion) . '</span></li>
\t\t\t</ul>
\t\t\t<div class=\"row row-margin-bottom\">
\t\t\t\t<p>
\t\t\t\t\t<i class=\"icon-asterisk\"></i>' . \$this->trans('Defines the average conversion rate for the product page. It is possible to purchase a product without viewing the product page, so this rate can be greater than 1.', [], 'Modules.Statscatalog.Admin') . '
\t\t\t\t</p>
\t\t\t</div>';

        if (count(\$products_nb) && count(\$products_nb) < 50) {
            \$html .= '
\t\t\t\t<div class=\"panel-heading\">' . \$this->trans('Products never purchased', [], 'Modules.Statscatalog.Admin') . '</div>
\t\t\t\t<table class=\"table\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th><span class=\"title_box active\">' . \$this->trans('ID', [], 'Admin.Global') . '</span></th>
\t\t\t\t\t\t\t<th><span class=\"title_box active\">' . \$this->trans('Name', [], 'Admin.Global') . '</span></th>
\t\t\t\t\t\t\t<th><span class=\"title_box active\">' . \$this->trans('Edit / View', [], 'Modules.Statscatalog.Admin') . '</span></th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>';
            foreach (\$products_nb as \$product) {
                \$html .= '
\t\t\t\t\t<tr' . (\$irow++ % 2 ? ' class=\"alt_row\"' : '') . '>
\t\t\t\t\t\t<td>' . \$product['id_product'] . '</td>
\t\t\t\t\t\t<td>' . \$product['name'] . '</td>
\t\t\t\t\t\t<td class=\"left\">
\t\t\t\t\t\t\t<div class=\"btn-group btn-group-action\">
\t\t\t\t\t\t\t\t<a class=\"btn btn-default\" href=\"' . Tools::safeOutput('index.php?controller=AdminProducts&id_product=' . \$product['id_product'] . '&addproduct&token=' . \$product_token) . '\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-edit\"></i> ' . \$this->trans('Edit', [], 'Admin.Global') . '
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<button data-toggle=\"dropdown\" class=\"btn btn-default dropdown-toggle\" type=\"button\">
\t\t\t\t\t\t\t\t\t<span class=\"caret\">&nbsp;</span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"' . Tools::safeOutput(\$this->context->link->getProductLink(\$product['id_product'], \$product['link_rewrite'])) . '\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-eye-open\"></i> ' . \$this->trans('View', [], 'Admin.Global') . '
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>';
            }
            \$html .= '
\t\t\t\t\t</tbody>
\t\t\t\t</table>';
        }

        return \$html;
    }

    private function returnLine(\$label, \$data)
    {
        return \$label . \$data;
    }
}
", "@Modules/statscatalog/statscatalog.php", "/var/www/html/modules/statscatalog/statscatalog.php");
    }
}
