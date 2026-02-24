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

/* @Modules/statsnewsletter/statsnewsletter.php */
class __TwigTemplate_86148220170fa709ef0ecbc888527f9a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/statsnewsletter/statsnewsletter.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/statsnewsletter/statsnewsletter.php"));

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

class statsnewsletter extends ModuleGraph
{
    private \$_html = '';
    private \$_query = '';
    private \$_query2 = '';
    private \$_option = '';

    private \$table_name;
    private \$newsletter_module_name;
    private \$newsletter_module_human_readable_name;

    public function __construct()
    {
        \$this->name = 'statsnewsletter';
        \$this->tab = 'analytics_stats';
        \$this->version = '2.0.3';
        \$this->author = 'PrestaShop';
        \$this->need_instance = 0;

        \$this->table_name = _DB_PREFIX_ . 'emailsubscription';
        \$this->newsletter_module_name = 'ps_emailsubscription';
        \$this->newsletter_module_human_readable_name = 'Email subscription';

        parent::__construct();

        \$this->displayName = \$this->trans('Newsletter', array(), 'Admin.Global');
        \$this->description = \$this->trans('Enrich your stats, display a graph showing newsletter registrations.', array(), 'Modules.Statsnewsletter.Admin');
        \$this->ps_versions_compliancy = array('min' => '1.7.1.0', 'max' => _PS_VERSION_);
    }

    public function install()
    {
        return (parent::install() && \$this->registerHook('displayAdminStatsModules'));
    }

    public function hookDisplayAdminStatsModules(\$params)
    {
        if (Module::isInstalled(\$this->newsletter_module_name)) {
            \$totals = \$this->getTotals();
            if (Tools::getValue('export')) {
                \$this->csvExport(array('type' => 'line', 'layers' => 3));
            }
            \$this->_html = '
\t\t\t<div class=\"panel-heading\">
\t\t\t\t'.\$this->displayName.'
\t\t\t</div>
\t\t\t<div class=\"row row-margin-bottom\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t'.\$this->engine(array('type' => 'line', 'layers' => 3)).'
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t<li>'.\$this->trans('Customer registrations:', array(), 'Modules.Statsnewsletter.Admin').' '.(int)\$totals['customers'].'</li>
\t\t\t\t\t\t\t<li>'.\$this->trans('Visitor registrations: ', array(), 'Modules.Statsnewsletter.Admin').' '.(int)\$totals['visitors'].'</li>
\t\t\t\t\t\t\t<li>'.\$this->trans('Both:', array(), 'Modules.Statsnewsletter.Admin').' '.(int)\$totals['both'].'</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<hr/>
\t\t\t\t\t\t<a class=\"btn btn-default export-csv\" href=\"'.Tools::safeOutput(\$_SERVER['REQUEST_URI'].'&export=1').'\">
\t\t\t\t\t\t\t<i class=\"icon-cloud-upload\"></i> '.\$this->trans('CSV Export', array(), 'Modules.Statsnewsletter.Admin').'
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>';
        } else {
            \$this->_html = '<p>'.\$this->trans('The %s module must be installed.', array(\$this->newsletter_module_human_readable_name), 'Modules.Statsnewsletter.Admin').'</p>';
        }

        return \$this->_html;
    }

    private function getTotals()
    {
        \$sql = 'SELECT COUNT(*) as customers
\t\t\t\tFROM `'._DB_PREFIX_.'customer`
\t\t\t\tWHERE 1
\t\t\t\t\t'.Shop::addSqlRestriction(Shop::SHARE_CUSTOMER).'
\t\t\t\t\tAND `newsletter_date_add` BETWEEN '.ModuleGraph::getDateBetween();
        \$result1 = Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow(\$sql);

        \$sql = 'SELECT COUNT(*) as visitors
\t\t\t\tFROM ' . \$this->table_name . '
\t\t\t\tWHERE 1
\t\t\t\t   '.Shop::addSqlRestriction().'
\t\t\t\t\tAND `newsletter_date_add` BETWEEN '.ModuleGraph::getDateBetween();
        \$result2 = Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow(\$sql);
        return array('customers' => \$result1['customers'], 'visitors' => \$result2['visitors'], 'both' => \$result1['customers'] + \$result2['visitors']);
    }

    protected function getData(\$layers)
    {
        \$this->_titles['main'][0] = \$this->trans('Newsletter statistics', array(), 'Modules.Statsnewsletter.Admin');
        \$this->_titles['main'][1] = \$this->trans('customers', array(), 'Admin.Global');
        \$this->_titles['main'][2] = \$this->trans('Visitors', array(), 'Admin.Shopparameters.Feature');
        \$this->_titles['main'][3] = \$this->trans('Both', array(), 'Admin.Advparameters.Feature');

        \$this->_query = 'SELECT newsletter_date_add
\t\t\t\tFROM `'._DB_PREFIX_.'customer`
\t\t\t\tWHERE 1
\t\t\t\t\t'.Shop::addSqlRestriction(Shop::SHARE_CUSTOMER).'
\t\t\t\t\tAND `newsletter_date_add` BETWEEN ';

        \$this->_query2 = 'SELECT newsletter_date_add
\t\t\t\tFROM ' . \$this->table_name . '
\t\t\t\tWHERE 1
\t\t\t\t\t'.Shop::addSqlRestriction(Shop::SHARE_CUSTOMER).'
\t\t\t\t\tAND `newsletter_date_add` BETWEEN ';
        \$this->setDateGraph(\$layers, true);
    }

    protected function setAllTimeValues(\$layers)
    {
        \$result1 = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS(\$this->_query.\$this->getDate());
        \$result2 = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS(\$this->_query2.\$this->getDate());
        foreach (\$result1 as \$row) {
            \$this->_values[0][(int)substr(\$row['newsletter_date_add'], 0, 4)] += 1;
        }
        if (\$result2) {
            foreach (\$result2 as \$row) {
                \$this->_values[1][(int)substr(\$row['newsletter_date_add'], 0, 4)] += 1;
            }
        }
        foreach (\$this->_values[2] as \$key => \$zerofill) {
            \$this->_values[2][\$key] = \$this->_values[0][\$key] + \$this->_values[1][\$key];
        }
    }

    protected function setYearValues(\$layers)
    {
        \$result1 = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS(\$this->_query.\$this->getDate());
        \$result2 = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS(\$this->_query2.\$this->getDate());
        foreach (\$result1 as \$row) {
            \$this->_values[0][(int)substr(\$row['newsletter_date_add'], 5, 2)] += 1;
        }
        if (\$result2) {
            foreach (\$result2 as \$row) {
                \$this->_values[1][(int)substr(\$row['newsletter_date_add'], 5, 2)] += 1;
            }
        }
        foreach (\$this->_values[2] as \$key => \$zerofill) {
            \$this->_values[2][\$key] = \$this->_values[0][\$key] + \$this->_values[1][\$key];
        }
    }

    protected function setMonthValues(\$layers)
    {
        \$result1 = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS(\$this->_query.\$this->getDate());
        \$result2 = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS(\$this->_query2.\$this->getDate());
        foreach (\$result1 as \$row) {
            \$this->_values[0][(int)substr(\$row['newsletter_date_add'], 8, 2)] += 1;
        }
        if (\$result2) {
            foreach (\$result2 as \$row) {
                \$this->_values[1][(int)substr(\$row['newsletter_date_add'], 8, 2)] += 1;
            }
        }
        foreach (\$this->_values[2] as \$key => \$zerofill) {
            \$this->_values[2][\$key] = \$this->_values[0][\$key] + \$this->_values[1][\$key];
        }
    }

    protected function setDayValues(\$layers)
    {
        \$result1 = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS(\$this->_query.\$this->getDate());
        \$result2 = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS(\$this->_query2.\$this->getDate());
        foreach (\$result1 as \$row) {
            \$this->_values[0][(int)substr(\$row['newsletter_date_add'], 11, 2)] += 1;
        }
        if (\$result2) {
            foreach (\$result2 as \$row) {
                \$this->_values[1][(int)substr(\$row['newsletter_date_add'], 11, 2)] += 1;
            }
        }
        foreach (\$this->_values[2] as \$key => \$zerofill) {
            \$this->_values[2][\$key] = \$this->_values[0][\$key] + \$this->_values[1][\$key];
        }
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/statsnewsletter/statsnewsletter.php";
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

class statsnewsletter extends ModuleGraph
{
    private \$_html = '';
    private \$_query = '';
    private \$_query2 = '';
    private \$_option = '';

    private \$table_name;
    private \$newsletter_module_name;
    private \$newsletter_module_human_readable_name;

    public function __construct()
    {
        \$this->name = 'statsnewsletter';
        \$this->tab = 'analytics_stats';
        \$this->version = '2.0.3';
        \$this->author = 'PrestaShop';
        \$this->need_instance = 0;

        \$this->table_name = _DB_PREFIX_ . 'emailsubscription';
        \$this->newsletter_module_name = 'ps_emailsubscription';
        \$this->newsletter_module_human_readable_name = 'Email subscription';

        parent::__construct();

        \$this->displayName = \$this->trans('Newsletter', array(), 'Admin.Global');
        \$this->description = \$this->trans('Enrich your stats, display a graph showing newsletter registrations.', array(), 'Modules.Statsnewsletter.Admin');
        \$this->ps_versions_compliancy = array('min' => '1.7.1.0', 'max' => _PS_VERSION_);
    }

    public function install()
    {
        return (parent::install() && \$this->registerHook('displayAdminStatsModules'));
    }

    public function hookDisplayAdminStatsModules(\$params)
    {
        if (Module::isInstalled(\$this->newsletter_module_name)) {
            \$totals = \$this->getTotals();
            if (Tools::getValue('export')) {
                \$this->csvExport(array('type' => 'line', 'layers' => 3));
            }
            \$this->_html = '
\t\t\t<div class=\"panel-heading\">
\t\t\t\t'.\$this->displayName.'
\t\t\t</div>
\t\t\t<div class=\"row row-margin-bottom\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t'.\$this->engine(array('type' => 'line', 'layers' => 3)).'
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t<li>'.\$this->trans('Customer registrations:', array(), 'Modules.Statsnewsletter.Admin').' '.(int)\$totals['customers'].'</li>
\t\t\t\t\t\t\t<li>'.\$this->trans('Visitor registrations: ', array(), 'Modules.Statsnewsletter.Admin').' '.(int)\$totals['visitors'].'</li>
\t\t\t\t\t\t\t<li>'.\$this->trans('Both:', array(), 'Modules.Statsnewsletter.Admin').' '.(int)\$totals['both'].'</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<hr/>
\t\t\t\t\t\t<a class=\"btn btn-default export-csv\" href=\"'.Tools::safeOutput(\$_SERVER['REQUEST_URI'].'&export=1').'\">
\t\t\t\t\t\t\t<i class=\"icon-cloud-upload\"></i> '.\$this->trans('CSV Export', array(), 'Modules.Statsnewsletter.Admin').'
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>';
        } else {
            \$this->_html = '<p>'.\$this->trans('The %s module must be installed.', array(\$this->newsletter_module_human_readable_name), 'Modules.Statsnewsletter.Admin').'</p>';
        }

        return \$this->_html;
    }

    private function getTotals()
    {
        \$sql = 'SELECT COUNT(*) as customers
\t\t\t\tFROM `'._DB_PREFIX_.'customer`
\t\t\t\tWHERE 1
\t\t\t\t\t'.Shop::addSqlRestriction(Shop::SHARE_CUSTOMER).'
\t\t\t\t\tAND `newsletter_date_add` BETWEEN '.ModuleGraph::getDateBetween();
        \$result1 = Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow(\$sql);

        \$sql = 'SELECT COUNT(*) as visitors
\t\t\t\tFROM ' . \$this->table_name . '
\t\t\t\tWHERE 1
\t\t\t\t   '.Shop::addSqlRestriction().'
\t\t\t\t\tAND `newsletter_date_add` BETWEEN '.ModuleGraph::getDateBetween();
        \$result2 = Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow(\$sql);
        return array('customers' => \$result1['customers'], 'visitors' => \$result2['visitors'], 'both' => \$result1['customers'] + \$result2['visitors']);
    }

    protected function getData(\$layers)
    {
        \$this->_titles['main'][0] = \$this->trans('Newsletter statistics', array(), 'Modules.Statsnewsletter.Admin');
        \$this->_titles['main'][1] = \$this->trans('customers', array(), 'Admin.Global');
        \$this->_titles['main'][2] = \$this->trans('Visitors', array(), 'Admin.Shopparameters.Feature');
        \$this->_titles['main'][3] = \$this->trans('Both', array(), 'Admin.Advparameters.Feature');

        \$this->_query = 'SELECT newsletter_date_add
\t\t\t\tFROM `'._DB_PREFIX_.'customer`
\t\t\t\tWHERE 1
\t\t\t\t\t'.Shop::addSqlRestriction(Shop::SHARE_CUSTOMER).'
\t\t\t\t\tAND `newsletter_date_add` BETWEEN ';

        \$this->_query2 = 'SELECT newsletter_date_add
\t\t\t\tFROM ' . \$this->table_name . '
\t\t\t\tWHERE 1
\t\t\t\t\t'.Shop::addSqlRestriction(Shop::SHARE_CUSTOMER).'
\t\t\t\t\tAND `newsletter_date_add` BETWEEN ';
        \$this->setDateGraph(\$layers, true);
    }

    protected function setAllTimeValues(\$layers)
    {
        \$result1 = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS(\$this->_query.\$this->getDate());
        \$result2 = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS(\$this->_query2.\$this->getDate());
        foreach (\$result1 as \$row) {
            \$this->_values[0][(int)substr(\$row['newsletter_date_add'], 0, 4)] += 1;
        }
        if (\$result2) {
            foreach (\$result2 as \$row) {
                \$this->_values[1][(int)substr(\$row['newsletter_date_add'], 0, 4)] += 1;
            }
        }
        foreach (\$this->_values[2] as \$key => \$zerofill) {
            \$this->_values[2][\$key] = \$this->_values[0][\$key] + \$this->_values[1][\$key];
        }
    }

    protected function setYearValues(\$layers)
    {
        \$result1 = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS(\$this->_query.\$this->getDate());
        \$result2 = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS(\$this->_query2.\$this->getDate());
        foreach (\$result1 as \$row) {
            \$this->_values[0][(int)substr(\$row['newsletter_date_add'], 5, 2)] += 1;
        }
        if (\$result2) {
            foreach (\$result2 as \$row) {
                \$this->_values[1][(int)substr(\$row['newsletter_date_add'], 5, 2)] += 1;
            }
        }
        foreach (\$this->_values[2] as \$key => \$zerofill) {
            \$this->_values[2][\$key] = \$this->_values[0][\$key] + \$this->_values[1][\$key];
        }
    }

    protected function setMonthValues(\$layers)
    {
        \$result1 = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS(\$this->_query.\$this->getDate());
        \$result2 = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS(\$this->_query2.\$this->getDate());
        foreach (\$result1 as \$row) {
            \$this->_values[0][(int)substr(\$row['newsletter_date_add'], 8, 2)] += 1;
        }
        if (\$result2) {
            foreach (\$result2 as \$row) {
                \$this->_values[1][(int)substr(\$row['newsletter_date_add'], 8, 2)] += 1;
            }
        }
        foreach (\$this->_values[2] as \$key => \$zerofill) {
            \$this->_values[2][\$key] = \$this->_values[0][\$key] + \$this->_values[1][\$key];
        }
    }

    protected function setDayValues(\$layers)
    {
        \$result1 = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS(\$this->_query.\$this->getDate());
        \$result2 = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS(\$this->_query2.\$this->getDate());
        foreach (\$result1 as \$row) {
            \$this->_values[0][(int)substr(\$row['newsletter_date_add'], 11, 2)] += 1;
        }
        if (\$result2) {
            foreach (\$result2 as \$row) {
                \$this->_values[1][(int)substr(\$row['newsletter_date_add'], 11, 2)] += 1;
            }
        }
        foreach (\$this->_values[2] as \$key => \$zerofill) {
            \$this->_values[2][\$key] = \$this->_values[0][\$key] + \$this->_values[1][\$key];
        }
    }
}
", "@Modules/statsnewsletter/statsnewsletter.php", "/var/www/html/modules/statsnewsletter/statsnewsletter.php");
    }
}
