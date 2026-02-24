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

/* @Modules/statspersonalinfos/statspersonalinfos.php */
class __TwigTemplate_dd89c3421102ee26a947764ba716e632 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/statspersonalinfos/statspersonalinfos.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/statspersonalinfos/statspersonalinfos.php"));

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

class statspersonalinfos extends ModuleGraph
{
    private \$html = '';
    private \$option;

    public function __construct()
    {
        \$this->name = 'statspersonalinfos';
        \$this->tab = 'analytics_stats';
        \$this->version = '2.0.4';
        \$this->author = 'PrestaShop';
        \$this->need_instance = 0;

        parent::__construct();

        \$this->displayName = \$this->trans('Registered customer information', array(), 'Modules.Statspersonalinfos.Admin');
        \$this->description = \$this->trans('Enrich your stats, add information about your registered customers and learn more about them!', array(), 'Modules.Statspersonalinfos.Admin');
        \$this->ps_versions_compliancy = array('min' => '1.7.1.0', 'max' => _PS_VERSION_);
    }

    public function install()
    {
        return (parent::install() && \$this->registerHook('displayAdminStatsModules'));
    }

    public function hookDisplayAdminStatsModules()
    {
        \$this->html = '
\t\t\t<div class=\"panel-heading\">
\t\t\t\t'.\$this->displayName.'
\t\t\t</div>
\t\t\t<h4>'.\$this->trans('Guide', array(), 'Admin.Global').'</h4>
\t\t\t<div class=\"alert alert-warning\">
\t\t\t\t<h4>'.\$this->trans('Target your audience', array(), 'Modules.Statspersonalinfos.Admin').'</h4>
\t\t\t\t<p>'.
                    \$this->trans('In order for each message to have an impact, you need to know who it is being addressed to. ', array(), 'Modules.Statspersonalinfos.Admin').
                    '<br>'.
                    \$this->trans('Defining your target audience is essential when choosing the right tools to win them over.', array(), 'Modules.Statspersonalinfos.Admin').
                    '<br>'.
                    \$this->trans('It is best to limit an action to a group -- or to groups -- of clients.', array(), 'Modules.Statspersonalinfos.Admin').
                    '<br>'.
                    \$this->trans('Storing registered customer information allows you to accurately define customer profiles so you can adapt your special deals and promotions.', array(), 'Modules.Statspersonalinfos.Admin').'
\t\t\t\t</p>
\t\t\t\t<div>
\t\t\t\t\t'.\$this->trans('You can increase your sales by:', array(), 'Modules.Statspersonalinfos.Admin').'
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li class=\"bullet\">'.\$this->trans('Launching targeted advertisement campaigns.', array(), 'Modules.Statspersonalinfos.Admin').'</li>
\t\t\t\t\t\t<li class=\"bullet\">'.\$this->trans('Contacting a group of clients by email or newsletter.', array(), 'Modules.Statspersonalinfos.Admin').'</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>';
        \$has_customers = (bool)Db::getInstance()->getValue('SELECT id_customer FROM '._DB_PREFIX_.'customer');
        if (\$has_customers) {
            if (Tools::getValue('export')) {
                if (Tools::getValue('exportType') == 'gender') {
                    \$this->csvExport(array(
                        'type' => 'pie',
                        'option' => 'gender'
                    ));
                } elseif (Tools::getValue('exportType') == 'age') {
                    \$this->csvExport(array(
                        'type' => 'pie',
                        'option' => 'age'
                    ));
                } elseif (Tools::getValue('exportType') == 'country') {
                    \$this->csvExport(array(
                        'type' => 'pie',
                        'option' => 'country'
                    ));
                } elseif (Tools::getValue('exportType') == 'currency') {
                    \$this->csvExport(array(
                        'type' => 'pie',
                        'option' => 'currency'
                    ));
                } elseif (Tools::getValue('exportType') == 'language') {
                    \$this->csvExport(array(
                        'type' => 'pie',
                        'option' => 'language'
                    ));
                }
            }

            \$this->html .= '
\t\t\t\t<div class=\"row row-margin-bottom\">
\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t\t'.\$this->engine(array(
                    'type' => 'pie',
                    'option' => 'gender'
                )).'
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t<p>'.\$this->trans('Gender distribution allows you to determine the percentage of men and women shoppers on your store.', array(), 'Modules.Statspersonalinfos.Admin').'</p>
\t\t\t\t\t\t\t<hr/>
\t\t\t\t\t\t\t<a class=\"btn btn-default export-csv\" href=\"'.Tools::safeOutput(\$_SERVER['REQUEST_URI'].'&export=1&exportType=gender').'\">
\t\t\t\t\t\t\t\t<i class=\"icon-cloud-upload\"></i> '.\$this->trans('CSV Export', array(), 'Modules.Statspersonalinfos.Admin').'
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row row-margin-bottom\">
\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t\t'.\$this->engine(array(
                    'type' => 'pie',
                    'option' => 'age'
                )).'
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t<p>'.\$this->trans('Age ranges allow you to better understand target demographics.', array(), 'Modules.Statspersonalinfos.Admin').'</p>
\t\t\t\t\t\t\t<hr/>
\t\t\t\t\t\t\t<a class=\"btn btn-default export-csv\" href=\"'.Tools::safeOutput(\$_SERVER['REQUEST_URI'].'&export=1&exportType=age').'\">
\t\t\t\t\t\t\t\t<i class=\"icon-cloud-upload\"></i> '.\$this->trans('CSV Export', array(), 'Modules.Statspersonalinfos.Admin').'
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row row-margin-bottom\">
\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t\t'.\$this->engine(array(
                    'type' => 'pie',
                    'option' => 'country'
                )).'
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t<p>'.\$this->trans('Country distribution allows you to analyze which part of the World your customers are shopping from.', array(), 'Modules.Statspersonalinfos.Admin').'</p>
\t\t\t\t\t\t\t<hr/>
\t\t\t\t\t\t\t<a class=\"btn btn-default export-csv\" href=\"'.Tools::safeOutput(\$_SERVER['REQUEST_URI'].'&export=1&exportType=country').'\">
\t\t\t\t\t\t\t\t<i class=\"icon-cloud-upload\"></i> '.\$this->trans('CSV Export', array(), 'Modules.Statspersonalinfos.Admin').'
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row row-margin-bottom\">
\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t\t'.\$this->engine(array(
                    'type' => 'pie',
                    'option' => 'currency'
                )).'
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t<p>'.\$this->trans('Currency range allows you to determine which currency your customers are using.', array(), 'Modules.Statspersonalinfos.Admin').'</p>
\t\t\t\t\t\t\t<hr/>
\t\t\t\t\t\t\t<a class=\"btn btn-default export-csv\" href=\"'.Tools::safeOutput(\$_SERVER['REQUEST_URI'].'&export=1&exportType=currency').'\">
\t\t\t\t\t\t\t\t<i class=\"icon-cloud-upload\"></i> '.\$this->trans('CSV Export', array(), 'Modules.Statspersonalinfos.Admin').'
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row row-margin-bottom\">
\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t\t'.\$this->engine(array(
                    'type' => 'pie',
                    'option' => 'language'
                )).'
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t<p>'.\$this->trans('Language distribution allows you to analyze the browsing language used by your customers.', array(), 'Modules.Statspersonalinfos.Admin').'</p>
\t\t\t\t\t\t\t<hr/>
\t\t\t\t\t\t\t<a class=\"btn btn-default export-csv\" href=\"'.Tools::safeOutput(\$_SERVER['REQUEST_URI'].'&export=1&exportType=language').'\">
\t\t\t\t\t\t\t\t<i class=\"icon-cloud-upload\"></i> '.\$this->trans('CSV Export', array(), 'Modules.Statspersonalinfos.Admin').'
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>';
        } else {
            \$this->html .= '<p>'.\$this->trans('No customers have registered yet.', array(), 'Modules.Statspersonalinfos.Admin').'</p>';
        }

        return \$this->html;
    }

    public function setOption(\$option, \$layers = 1)
    {
        \$this->option = \$option;
    }

    protected function getData(\$layers)
    {
        switch (\$this->option) {
            case 'gender':
                \$this->_titles['main'] = \$this->trans('Gender distribution', array(), 'Modules.Statspersonalinfos.Admin');
                \$genders = array(
                    0 => \$this->trans('Male', array(), 'Admin.Shopparameters.Feature'),
                    1 => \$this->trans('Female', array(), 'Admin.Shopparameters.Feature'),
                    2 => \$this->trans('Unknown', array(), 'Admin.Shopparameters.Feature'),
                );

                \$sql = 'SELECT g.type, c.id_gender, COUNT(c.id_customer) AS total
\t\t\t\t\t\tFROM '._DB_PREFIX_.'customer c
\t\t\t\t\t\tLEFT JOIN '._DB_PREFIX_.'gender g ON c.id_gender = g.id_gender
\t\t\t\t\t\tWHERE 1
\t\t\t\t\t\t\t'.Shop::addSqlRestriction(Shop::SHARE_CUSTOMER, 'c').'
\t\t\t\t\t\tGROUP BY c.id_gender';
                \$result = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS(\$sql);

                \$genders_results = array();
                foreach (\$result as \$row) {
                    \$type = (is_null(\$row['type'])) ? 2 : \$row['type'];
                    if (!isset(\$genders_results[\$type])) {
                        \$genders_results[\$type] = 0;
                    }
                    \$genders_results[\$type] += \$row['total'];
                }

                foreach (\$genders_results as \$type => \$total) {
                    \$this->_values[] = \$total;
                    \$this->_legend[] = \$genders[\$type];
                }
                break;

            case 'age':
                \$this->_titles['main'] = \$this->trans('Age range', array(), 'Modules.Statspersonalinfos.Admin');

                // 0 - 18 years
                \$sql = 'SELECT COUNT(`id_customer`) as total
\t\t\t\t\t\tFROM `'._DB_PREFIX_.'customer`
\t\t\t\t\t\tWHERE `birthday` IS NOT NULL
\t\t\t\t\t\t\tAND `birthday` != \"0000-00-00\"
\t\t\t\t\t\t\tAND (YEAR(CURDATE()) - YEAR(`birthday`)) - (RIGHT(CURDATE(), 5) < RIGHT(`birthday`, 5)) < 18
\t\t\t\t\t\t\t'.Shop::addSqlRestriction(Shop::SHARE_CUSTOMER);
                \$result = Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow(\$sql);
                if (isset(\$result['total']) && \$result['total']) {
                    \$this->_values[] = \$result['total'];
                    \$this->_legend[] = \$this->trans('0-18', array(), 'Modules.Statspersonalinfos.Admin');
                }

                // 18 - 24 years
                \$sql = 'SELECT COUNT(`id_customer`) as total
\t\t\t\t\t\tFROM `'._DB_PREFIX_.'customer`
\t\t\t\t\t\tWHERE `birthday` IS NOT NULL
\t\t\t\t\t\t\tAND `birthday` != \"0000-00-00\"
\t\t\t\t\t\t\tAND (YEAR(CURDATE()) - YEAR(`birthday`)) - (RIGHT(CURDATE(), 5) < RIGHT(`birthday`, 5)) >= 18
\t\t\t\t\t\t\tAND (YEAR(CURDATE()) - YEAR(`birthday`)) - (RIGHT(CURDATE(), 5) < RIGHT(`birthday`, 5)) < 25
\t\t\t\t\t\t\t'.Shop::addSqlRestriction(Shop::SHARE_CUSTOMER);
                \$result = Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow(\$sql);
                if (isset(\$result['total']) && \$result['total']) {
                    \$this->_values[] = \$result['total'];
                    \$this->_legend[] = \$this->trans('18-24', array(), 'Modules.Statspersonalinfos.Admin');
                }

                // 25 - 34 years
                \$sql = 'SELECT COUNT(`id_customer`) as total
\t\t\t\t\t\tFROM `'._DB_PREFIX_.'customer`
\t\t\t\t\t\tWHERE `birthday` IS NOT NULL
\t\t\t\t\t\t\tAND `birthday` != \"0000-00-00\"
\t\t\t\t\t\t\tAND (YEAR(CURDATE()) - YEAR(`birthday`)) - (RIGHT(CURDATE(), 5) < RIGHT(`birthday`, 5)) >= 25
\t\t\t\t\t\t\tAND (YEAR(CURDATE()) - YEAR(`birthday`)) - (RIGHT(CURDATE(), 5) < RIGHT(`birthday`, 5)) < 35
\t\t\t\t\t\t\t'.Shop::addSqlRestriction(Shop::SHARE_CUSTOMER);
                \$result = Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow(\$sql);
                if (isset(\$result['total']) && \$result['total']) {
                    \$this->_values[] = \$result['total'];
                    \$this->_legend[] = \$this->trans('25-34', array(), 'Modules.Statspersonalinfos.Admin');
                }

                // 35 - 49 years
                \$sql = 'SELECT COUNT(`id_customer`) as total
\t\t\t\t\t\tFROM `'._DB_PREFIX_.'customer`
\t\t\t\t\t\tWHERE `birthday` IS NOT NULL
\t\t\t\t\t\t\tAND `birthday` != \"0000-00-00\"
\t\t\t\t\t\t\tAND (YEAR(CURDATE()) - YEAR(`birthday`)) - (RIGHT(CURDATE(), 5) < RIGHT(`birthday`, 5)) >= 35
\t\t\t\t\t\t\tAND (YEAR(CURDATE()) - YEAR(`birthday`)) - (RIGHT(CURDATE(), 5) < RIGHT(`birthday`, 5)) < 50
\t\t\t\t\t\t\t'.Shop::addSqlRestriction(Shop::SHARE_CUSTOMER);
                \$result = Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow(\$sql);
                if (isset(\$result['total']) && \$result['total']) {
                    \$this->_values[] = \$result['total'];
                    \$this->_legend[] = \$this->trans('35-49', array(), 'Modules.Statspersonalinfos.Admin');
                }

                // 50 - 59 years
                \$sql = 'SELECT COUNT(`id_customer`) as total
\t\t\t\t\t\tFROM `'._DB_PREFIX_.'customer`
\t\t\t\t\t\tWHERE `birthday` IS NOT NULL
\t\t\t\t\t\t\tAND `birthday` != \"0000-00-00\"
\t\t\t\t\t\t\tAND (YEAR(CURDATE()) - YEAR(`birthday`)) - (RIGHT(CURDATE(), 5) < RIGHT(`birthday`, 5)) >= 50
\t\t\t\t\t\t\tAND (YEAR(CURDATE()) - YEAR(`birthday`)) - (RIGHT(CURDATE(), 5) < RIGHT(`birthday`, 5)) < 60
\t\t\t\t\t\t\t'.Shop::addSqlRestriction(Shop::SHARE_CUSTOMER);
                \$result = Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow(\$sql);
                if (isset(\$result['total']) && \$result['total']) {
                    \$this->_values[] = \$result['total'];
                    \$this->_legend[] = \$this->trans('50-59', array(), 'Modules.Statspersonalinfos.Admin');
                }

                // More than 60 years
                \$sql = 'SELECT COUNT(`id_customer`) as total
\t\t\t\t\t\tFROM `'._DB_PREFIX_.'customer`
\t\t\t\t\t\tWHERE `birthday` IS NOT NULL
\t\t\t\t\t\t\tAND `birthday` != \"0000-00-00\"
\t\t\t\t\t\t\tAND (YEAR(CURDATE()) - YEAR(`birthday`)) - (RIGHT(CURDATE(), 5) < RIGHT(`birthday`, 5)) >= 60
\t\t\t\t\t\t\t'.Shop::addSqlRestriction(Shop::SHARE_CUSTOMER);
                \$result = Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow(\$sql);
                if (isset(\$result['total']) && \$result['total']) {
                    \$this->_values[] = \$result['total'];
                    \$this->_legend[] = \$this->trans('60+', array(), 'Modules.Statspersonalinfos.Admin');
                }

                // Total unknown
                \$sql = 'SELECT COUNT(`id_customer`) as total
\t\t\t\t\t\tFROM `'._DB_PREFIX_.'customer`
\t\t\t\t\t\tWHERE `birthday` IS NULL
\t\t\t\t\t\t\tOR `birthday` = \"0000-00-00\"
\t\t\t\t\t\t\t'.Shop::addSqlRestriction(Shop::SHARE_CUSTOMER);
                \$result = Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow(\$sql);
                if (isset(\$result['total']) && \$result['total']) {
                    \$this->_values[] = \$result['total'];
                    \$this->_legend[] = \$this->trans('Unknown', array(), 'Admin.Shopparameters.Feature');
                }
                break;

            case 'country':
                \$this->_titles['main'] = \$this->trans('Country distribution', array(), 'Modules.Statspersonalinfos.Admin');
                \$sql = 'SELECT cl.`name`, COUNT(c.`id_country`) AS total
\t\t\t\t\t\tFROM `'._DB_PREFIX_.'address` a
\t\t\t\t\t\tLEFT JOIN `'._DB_PREFIX_.'customer` cu ON cu.id_customer = a.id_customer
\t\t\t\t\t\tLEFT JOIN `'._DB_PREFIX_.'country` c ON a.`id_country` = c.`id_country`
\t\t\t\t\t\tLEFT JOIN `'._DB_PREFIX_.'country_lang` cl ON (c.`id_country` = cl.`id_country` AND cl.`id_lang` = ' . (int) \$this->context->language->id . ')
\t\t\t\t\t\tWHERE a.id_customer != 0
\t\t\t\t\t\t\t'.Shop::addSqlRestriction(Shop::SHARE_CUSTOMER, 'cu').'
\t\t\t\t\t\tGROUP BY c.`id_country`';
                \$result = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS(\$sql);
                foreach (\$result as \$row) {
                    \$this->_values[] = \$row['total'];
                    \$this->_legend[] = \$row['name'];
                }
                break;

            case 'currency':
                \$this->_titles['main'] = \$this->trans('Currency distribution', array(), 'Modules.Statspersonalinfos.Admin');
                \$sql = 'SELECT cl.name, c.`iso_code`, COUNT(c.`id_currency`) AS total
\t\t\t\t\t\tFROM `'._DB_PREFIX_.'orders` o
\t\t\t\t\t\tLEFT JOIN `'._DB_PREFIX_.'currency` c ON o.`id_currency` = c.`id_currency`
\t\t\t\t\t\tLEFT JOIN `'._DB_PREFIX_.'currency_lang` cl ON (cl.`id_currency` = c.`id_currency` AND cl.`id_lang` = ' . (int) \$this->context->language->id . ')
\t\t\t\t\t\tWHERE 1
\t\t\t\t\t\t\t'.Shop::addSqlRestriction(Shop::SHARE_ORDER, 'o').'
\t\t\t\t\t\tGROUP BY c.`id_currency`';
                \$result = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS(\$sql);
                foreach (\$result as \$row) {
                    \$this->_values[] = \$row['total'];
                    \$this->_legend[] = \$row['name'] . ' (' . \$row['iso_code'] . ')';
                }
                break;

            case 'language':
                \$this->_titles['main'] = \$this->trans('Language distribution', array(), 'Modules.Statspersonalinfos.Admin');
                \$sql = 'SELECT c.`name`, COUNT(c.`id_lang`) AS total
\t\t\t\t\t\tFROM `'._DB_PREFIX_.'orders` o
\t\t\t\t\t\tLEFT JOIN `'._DB_PREFIX_.'lang` c ON o.`id_lang` = c.`id_lang`
\t\t\t\t\t\tWHERE 1
\t\t\t\t\t\t\t'.Shop::addSqlRestriction(Shop::SHARE_ORDER, 'o').'
\t\t\t\t\t\tGROUP BY c.`id_lang`';
                \$result = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS(\$sql);
                foreach (\$result as \$row) {
                    \$this->_values[] = \$row['total'];
                    \$this->_legend[] = \$row['name'];
                }
                break;
        }
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/statspersonalinfos/statspersonalinfos.php";
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

class statspersonalinfos extends ModuleGraph
{
    private \$html = '';
    private \$option;

    public function __construct()
    {
        \$this->name = 'statspersonalinfos';
        \$this->tab = 'analytics_stats';
        \$this->version = '2.0.4';
        \$this->author = 'PrestaShop';
        \$this->need_instance = 0;

        parent::__construct();

        \$this->displayName = \$this->trans('Registered customer information', array(), 'Modules.Statspersonalinfos.Admin');
        \$this->description = \$this->trans('Enrich your stats, add information about your registered customers and learn more about them!', array(), 'Modules.Statspersonalinfos.Admin');
        \$this->ps_versions_compliancy = array('min' => '1.7.1.0', 'max' => _PS_VERSION_);
    }

    public function install()
    {
        return (parent::install() && \$this->registerHook('displayAdminStatsModules'));
    }

    public function hookDisplayAdminStatsModules()
    {
        \$this->html = '
\t\t\t<div class=\"panel-heading\">
\t\t\t\t'.\$this->displayName.'
\t\t\t</div>
\t\t\t<h4>'.\$this->trans('Guide', array(), 'Admin.Global').'</h4>
\t\t\t<div class=\"alert alert-warning\">
\t\t\t\t<h4>'.\$this->trans('Target your audience', array(), 'Modules.Statspersonalinfos.Admin').'</h4>
\t\t\t\t<p>'.
                    \$this->trans('In order for each message to have an impact, you need to know who it is being addressed to. ', array(), 'Modules.Statspersonalinfos.Admin').
                    '<br>'.
                    \$this->trans('Defining your target audience is essential when choosing the right tools to win them over.', array(), 'Modules.Statspersonalinfos.Admin').
                    '<br>'.
                    \$this->trans('It is best to limit an action to a group -- or to groups -- of clients.', array(), 'Modules.Statspersonalinfos.Admin').
                    '<br>'.
                    \$this->trans('Storing registered customer information allows you to accurately define customer profiles so you can adapt your special deals and promotions.', array(), 'Modules.Statspersonalinfos.Admin').'
\t\t\t\t</p>
\t\t\t\t<div>
\t\t\t\t\t'.\$this->trans('You can increase your sales by:', array(), 'Modules.Statspersonalinfos.Admin').'
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li class=\"bullet\">'.\$this->trans('Launching targeted advertisement campaigns.', array(), 'Modules.Statspersonalinfos.Admin').'</li>
\t\t\t\t\t\t<li class=\"bullet\">'.\$this->trans('Contacting a group of clients by email or newsletter.', array(), 'Modules.Statspersonalinfos.Admin').'</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>';
        \$has_customers = (bool)Db::getInstance()->getValue('SELECT id_customer FROM '._DB_PREFIX_.'customer');
        if (\$has_customers) {
            if (Tools::getValue('export')) {
                if (Tools::getValue('exportType') == 'gender') {
                    \$this->csvExport(array(
                        'type' => 'pie',
                        'option' => 'gender'
                    ));
                } elseif (Tools::getValue('exportType') == 'age') {
                    \$this->csvExport(array(
                        'type' => 'pie',
                        'option' => 'age'
                    ));
                } elseif (Tools::getValue('exportType') == 'country') {
                    \$this->csvExport(array(
                        'type' => 'pie',
                        'option' => 'country'
                    ));
                } elseif (Tools::getValue('exportType') == 'currency') {
                    \$this->csvExport(array(
                        'type' => 'pie',
                        'option' => 'currency'
                    ));
                } elseif (Tools::getValue('exportType') == 'language') {
                    \$this->csvExport(array(
                        'type' => 'pie',
                        'option' => 'language'
                    ));
                }
            }

            \$this->html .= '
\t\t\t\t<div class=\"row row-margin-bottom\">
\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t\t'.\$this->engine(array(
                    'type' => 'pie',
                    'option' => 'gender'
                )).'
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t<p>'.\$this->trans('Gender distribution allows you to determine the percentage of men and women shoppers on your store.', array(), 'Modules.Statspersonalinfos.Admin').'</p>
\t\t\t\t\t\t\t<hr/>
\t\t\t\t\t\t\t<a class=\"btn btn-default export-csv\" href=\"'.Tools::safeOutput(\$_SERVER['REQUEST_URI'].'&export=1&exportType=gender').'\">
\t\t\t\t\t\t\t\t<i class=\"icon-cloud-upload\"></i> '.\$this->trans('CSV Export', array(), 'Modules.Statspersonalinfos.Admin').'
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row row-margin-bottom\">
\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t\t'.\$this->engine(array(
                    'type' => 'pie',
                    'option' => 'age'
                )).'
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t<p>'.\$this->trans('Age ranges allow you to better understand target demographics.', array(), 'Modules.Statspersonalinfos.Admin').'</p>
\t\t\t\t\t\t\t<hr/>
\t\t\t\t\t\t\t<a class=\"btn btn-default export-csv\" href=\"'.Tools::safeOutput(\$_SERVER['REQUEST_URI'].'&export=1&exportType=age').'\">
\t\t\t\t\t\t\t\t<i class=\"icon-cloud-upload\"></i> '.\$this->trans('CSV Export', array(), 'Modules.Statspersonalinfos.Admin').'
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row row-margin-bottom\">
\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t\t'.\$this->engine(array(
                    'type' => 'pie',
                    'option' => 'country'
                )).'
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t<p>'.\$this->trans('Country distribution allows you to analyze which part of the World your customers are shopping from.', array(), 'Modules.Statspersonalinfos.Admin').'</p>
\t\t\t\t\t\t\t<hr/>
\t\t\t\t\t\t\t<a class=\"btn btn-default export-csv\" href=\"'.Tools::safeOutput(\$_SERVER['REQUEST_URI'].'&export=1&exportType=country').'\">
\t\t\t\t\t\t\t\t<i class=\"icon-cloud-upload\"></i> '.\$this->trans('CSV Export', array(), 'Modules.Statspersonalinfos.Admin').'
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row row-margin-bottom\">
\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t\t'.\$this->engine(array(
                    'type' => 'pie',
                    'option' => 'currency'
                )).'
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t<p>'.\$this->trans('Currency range allows you to determine which currency your customers are using.', array(), 'Modules.Statspersonalinfos.Admin').'</p>
\t\t\t\t\t\t\t<hr/>
\t\t\t\t\t\t\t<a class=\"btn btn-default export-csv\" href=\"'.Tools::safeOutput(\$_SERVER['REQUEST_URI'].'&export=1&exportType=currency').'\">
\t\t\t\t\t\t\t\t<i class=\"icon-cloud-upload\"></i> '.\$this->trans('CSV Export', array(), 'Modules.Statspersonalinfos.Admin').'
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row row-margin-bottom\">
\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t\t'.\$this->engine(array(
                    'type' => 'pie',
                    'option' => 'language'
                )).'
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t<p>'.\$this->trans('Language distribution allows you to analyze the browsing language used by your customers.', array(), 'Modules.Statspersonalinfos.Admin').'</p>
\t\t\t\t\t\t\t<hr/>
\t\t\t\t\t\t\t<a class=\"btn btn-default export-csv\" href=\"'.Tools::safeOutput(\$_SERVER['REQUEST_URI'].'&export=1&exportType=language').'\">
\t\t\t\t\t\t\t\t<i class=\"icon-cloud-upload\"></i> '.\$this->trans('CSV Export', array(), 'Modules.Statspersonalinfos.Admin').'
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>';
        } else {
            \$this->html .= '<p>'.\$this->trans('No customers have registered yet.', array(), 'Modules.Statspersonalinfos.Admin').'</p>';
        }

        return \$this->html;
    }

    public function setOption(\$option, \$layers = 1)
    {
        \$this->option = \$option;
    }

    protected function getData(\$layers)
    {
        switch (\$this->option) {
            case 'gender':
                \$this->_titles['main'] = \$this->trans('Gender distribution', array(), 'Modules.Statspersonalinfos.Admin');
                \$genders = array(
                    0 => \$this->trans('Male', array(), 'Admin.Shopparameters.Feature'),
                    1 => \$this->trans('Female', array(), 'Admin.Shopparameters.Feature'),
                    2 => \$this->trans('Unknown', array(), 'Admin.Shopparameters.Feature'),
                );

                \$sql = 'SELECT g.type, c.id_gender, COUNT(c.id_customer) AS total
\t\t\t\t\t\tFROM '._DB_PREFIX_.'customer c
\t\t\t\t\t\tLEFT JOIN '._DB_PREFIX_.'gender g ON c.id_gender = g.id_gender
\t\t\t\t\t\tWHERE 1
\t\t\t\t\t\t\t'.Shop::addSqlRestriction(Shop::SHARE_CUSTOMER, 'c').'
\t\t\t\t\t\tGROUP BY c.id_gender';
                \$result = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS(\$sql);

                \$genders_results = array();
                foreach (\$result as \$row) {
                    \$type = (is_null(\$row['type'])) ? 2 : \$row['type'];
                    if (!isset(\$genders_results[\$type])) {
                        \$genders_results[\$type] = 0;
                    }
                    \$genders_results[\$type] += \$row['total'];
                }

                foreach (\$genders_results as \$type => \$total) {
                    \$this->_values[] = \$total;
                    \$this->_legend[] = \$genders[\$type];
                }
                break;

            case 'age':
                \$this->_titles['main'] = \$this->trans('Age range', array(), 'Modules.Statspersonalinfos.Admin');

                // 0 - 18 years
                \$sql = 'SELECT COUNT(`id_customer`) as total
\t\t\t\t\t\tFROM `'._DB_PREFIX_.'customer`
\t\t\t\t\t\tWHERE `birthday` IS NOT NULL
\t\t\t\t\t\t\tAND `birthday` != \"0000-00-00\"
\t\t\t\t\t\t\tAND (YEAR(CURDATE()) - YEAR(`birthday`)) - (RIGHT(CURDATE(), 5) < RIGHT(`birthday`, 5)) < 18
\t\t\t\t\t\t\t'.Shop::addSqlRestriction(Shop::SHARE_CUSTOMER);
                \$result = Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow(\$sql);
                if (isset(\$result['total']) && \$result['total']) {
                    \$this->_values[] = \$result['total'];
                    \$this->_legend[] = \$this->trans('0-18', array(), 'Modules.Statspersonalinfos.Admin');
                }

                // 18 - 24 years
                \$sql = 'SELECT COUNT(`id_customer`) as total
\t\t\t\t\t\tFROM `'._DB_PREFIX_.'customer`
\t\t\t\t\t\tWHERE `birthday` IS NOT NULL
\t\t\t\t\t\t\tAND `birthday` != \"0000-00-00\"
\t\t\t\t\t\t\tAND (YEAR(CURDATE()) - YEAR(`birthday`)) - (RIGHT(CURDATE(), 5) < RIGHT(`birthday`, 5)) >= 18
\t\t\t\t\t\t\tAND (YEAR(CURDATE()) - YEAR(`birthday`)) - (RIGHT(CURDATE(), 5) < RIGHT(`birthday`, 5)) < 25
\t\t\t\t\t\t\t'.Shop::addSqlRestriction(Shop::SHARE_CUSTOMER);
                \$result = Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow(\$sql);
                if (isset(\$result['total']) && \$result['total']) {
                    \$this->_values[] = \$result['total'];
                    \$this->_legend[] = \$this->trans('18-24', array(), 'Modules.Statspersonalinfos.Admin');
                }

                // 25 - 34 years
                \$sql = 'SELECT COUNT(`id_customer`) as total
\t\t\t\t\t\tFROM `'._DB_PREFIX_.'customer`
\t\t\t\t\t\tWHERE `birthday` IS NOT NULL
\t\t\t\t\t\t\tAND `birthday` != \"0000-00-00\"
\t\t\t\t\t\t\tAND (YEAR(CURDATE()) - YEAR(`birthday`)) - (RIGHT(CURDATE(), 5) < RIGHT(`birthday`, 5)) >= 25
\t\t\t\t\t\t\tAND (YEAR(CURDATE()) - YEAR(`birthday`)) - (RIGHT(CURDATE(), 5) < RIGHT(`birthday`, 5)) < 35
\t\t\t\t\t\t\t'.Shop::addSqlRestriction(Shop::SHARE_CUSTOMER);
                \$result = Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow(\$sql);
                if (isset(\$result['total']) && \$result['total']) {
                    \$this->_values[] = \$result['total'];
                    \$this->_legend[] = \$this->trans('25-34', array(), 'Modules.Statspersonalinfos.Admin');
                }

                // 35 - 49 years
                \$sql = 'SELECT COUNT(`id_customer`) as total
\t\t\t\t\t\tFROM `'._DB_PREFIX_.'customer`
\t\t\t\t\t\tWHERE `birthday` IS NOT NULL
\t\t\t\t\t\t\tAND `birthday` != \"0000-00-00\"
\t\t\t\t\t\t\tAND (YEAR(CURDATE()) - YEAR(`birthday`)) - (RIGHT(CURDATE(), 5) < RIGHT(`birthday`, 5)) >= 35
\t\t\t\t\t\t\tAND (YEAR(CURDATE()) - YEAR(`birthday`)) - (RIGHT(CURDATE(), 5) < RIGHT(`birthday`, 5)) < 50
\t\t\t\t\t\t\t'.Shop::addSqlRestriction(Shop::SHARE_CUSTOMER);
                \$result = Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow(\$sql);
                if (isset(\$result['total']) && \$result['total']) {
                    \$this->_values[] = \$result['total'];
                    \$this->_legend[] = \$this->trans('35-49', array(), 'Modules.Statspersonalinfos.Admin');
                }

                // 50 - 59 years
                \$sql = 'SELECT COUNT(`id_customer`) as total
\t\t\t\t\t\tFROM `'._DB_PREFIX_.'customer`
\t\t\t\t\t\tWHERE `birthday` IS NOT NULL
\t\t\t\t\t\t\tAND `birthday` != \"0000-00-00\"
\t\t\t\t\t\t\tAND (YEAR(CURDATE()) - YEAR(`birthday`)) - (RIGHT(CURDATE(), 5) < RIGHT(`birthday`, 5)) >= 50
\t\t\t\t\t\t\tAND (YEAR(CURDATE()) - YEAR(`birthday`)) - (RIGHT(CURDATE(), 5) < RIGHT(`birthday`, 5)) < 60
\t\t\t\t\t\t\t'.Shop::addSqlRestriction(Shop::SHARE_CUSTOMER);
                \$result = Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow(\$sql);
                if (isset(\$result['total']) && \$result['total']) {
                    \$this->_values[] = \$result['total'];
                    \$this->_legend[] = \$this->trans('50-59', array(), 'Modules.Statspersonalinfos.Admin');
                }

                // More than 60 years
                \$sql = 'SELECT COUNT(`id_customer`) as total
\t\t\t\t\t\tFROM `'._DB_PREFIX_.'customer`
\t\t\t\t\t\tWHERE `birthday` IS NOT NULL
\t\t\t\t\t\t\tAND `birthday` != \"0000-00-00\"
\t\t\t\t\t\t\tAND (YEAR(CURDATE()) - YEAR(`birthday`)) - (RIGHT(CURDATE(), 5) < RIGHT(`birthday`, 5)) >= 60
\t\t\t\t\t\t\t'.Shop::addSqlRestriction(Shop::SHARE_CUSTOMER);
                \$result = Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow(\$sql);
                if (isset(\$result['total']) && \$result['total']) {
                    \$this->_values[] = \$result['total'];
                    \$this->_legend[] = \$this->trans('60+', array(), 'Modules.Statspersonalinfos.Admin');
                }

                // Total unknown
                \$sql = 'SELECT COUNT(`id_customer`) as total
\t\t\t\t\t\tFROM `'._DB_PREFIX_.'customer`
\t\t\t\t\t\tWHERE `birthday` IS NULL
\t\t\t\t\t\t\tOR `birthday` = \"0000-00-00\"
\t\t\t\t\t\t\t'.Shop::addSqlRestriction(Shop::SHARE_CUSTOMER);
                \$result = Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow(\$sql);
                if (isset(\$result['total']) && \$result['total']) {
                    \$this->_values[] = \$result['total'];
                    \$this->_legend[] = \$this->trans('Unknown', array(), 'Admin.Shopparameters.Feature');
                }
                break;

            case 'country':
                \$this->_titles['main'] = \$this->trans('Country distribution', array(), 'Modules.Statspersonalinfos.Admin');
                \$sql = 'SELECT cl.`name`, COUNT(c.`id_country`) AS total
\t\t\t\t\t\tFROM `'._DB_PREFIX_.'address` a
\t\t\t\t\t\tLEFT JOIN `'._DB_PREFIX_.'customer` cu ON cu.id_customer = a.id_customer
\t\t\t\t\t\tLEFT JOIN `'._DB_PREFIX_.'country` c ON a.`id_country` = c.`id_country`
\t\t\t\t\t\tLEFT JOIN `'._DB_PREFIX_.'country_lang` cl ON (c.`id_country` = cl.`id_country` AND cl.`id_lang` = ' . (int) \$this->context->language->id . ')
\t\t\t\t\t\tWHERE a.id_customer != 0
\t\t\t\t\t\t\t'.Shop::addSqlRestriction(Shop::SHARE_CUSTOMER, 'cu').'
\t\t\t\t\t\tGROUP BY c.`id_country`';
                \$result = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS(\$sql);
                foreach (\$result as \$row) {
                    \$this->_values[] = \$row['total'];
                    \$this->_legend[] = \$row['name'];
                }
                break;

            case 'currency':
                \$this->_titles['main'] = \$this->trans('Currency distribution', array(), 'Modules.Statspersonalinfos.Admin');
                \$sql = 'SELECT cl.name, c.`iso_code`, COUNT(c.`id_currency`) AS total
\t\t\t\t\t\tFROM `'._DB_PREFIX_.'orders` o
\t\t\t\t\t\tLEFT JOIN `'._DB_PREFIX_.'currency` c ON o.`id_currency` = c.`id_currency`
\t\t\t\t\t\tLEFT JOIN `'._DB_PREFIX_.'currency_lang` cl ON (cl.`id_currency` = c.`id_currency` AND cl.`id_lang` = ' . (int) \$this->context->language->id . ')
\t\t\t\t\t\tWHERE 1
\t\t\t\t\t\t\t'.Shop::addSqlRestriction(Shop::SHARE_ORDER, 'o').'
\t\t\t\t\t\tGROUP BY c.`id_currency`';
                \$result = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS(\$sql);
                foreach (\$result as \$row) {
                    \$this->_values[] = \$row['total'];
                    \$this->_legend[] = \$row['name'] . ' (' . \$row['iso_code'] . ')';
                }
                break;

            case 'language':
                \$this->_titles['main'] = \$this->trans('Language distribution', array(), 'Modules.Statspersonalinfos.Admin');
                \$sql = 'SELECT c.`name`, COUNT(c.`id_lang`) AS total
\t\t\t\t\t\tFROM `'._DB_PREFIX_.'orders` o
\t\t\t\t\t\tLEFT JOIN `'._DB_PREFIX_.'lang` c ON o.`id_lang` = c.`id_lang`
\t\t\t\t\t\tWHERE 1
\t\t\t\t\t\t\t'.Shop::addSqlRestriction(Shop::SHARE_ORDER, 'o').'
\t\t\t\t\t\tGROUP BY c.`id_lang`';
                \$result = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS(\$sql);
                foreach (\$result as \$row) {
                    \$this->_values[] = \$row['total'];
                    \$this->_legend[] = \$row['name'];
                }
                break;
        }
    }
}
", "@Modules/statspersonalinfos/statspersonalinfos.php", "/var/www/html/modules/statspersonalinfos/statspersonalinfos.php");
    }
}
