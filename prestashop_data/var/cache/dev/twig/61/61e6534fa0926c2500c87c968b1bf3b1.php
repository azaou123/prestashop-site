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

/* @Modules/statssearch/statssearch.php */
class __TwigTemplate_ce4730474315322a0a696f91cacffeb9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/statssearch/statssearch.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/statssearch/statssearch.php"));

        // line 1
        echo "<?php
/**
 * 2007-2020 PrestaShop SA and Contributors
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
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
 * needs please refer to https://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2020 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */

if (!defined('_PS_VERSION_')) {
    exit;
}

class statssearch extends ModuleGraph
{
    private \$html = '';
    private \$query = '';
    private \$query_group_by = '';

    public function __construct()
    {
        \$this->name = 'statssearch';
        \$this->tab = 'analytics_stats';
        \$this->version = '2.0.2';
        \$this->author = 'PrestaShop';
        \$this->need_instance = 0;

        parent::__construct();

        \$this->query = 'SELECT `keywords`, COUNT(TRIM(`keywords`)) as occurences, MAX(results) as total
\t\t\t\tFROM `'._DB_PREFIX_.'statssearch`
\t\t\t\tWHERE 1
\t\t\t\t\t'.Shop::addSqlRestriction().'
\t\t\t\t\tAND `date_add` BETWEEN ';

        \$this->query_group_by = 'GROUP BY `keywords`
\t\t\t\tHAVING occurences > 1
\t\t\t\tORDER BY occurences DESC';

        \$this->displayName = \$this->trans('Shop search', array(), 'Modules.Statssearch.Admin');
        \$this->description = \$this->trans('Enrich your stats, add a tab showing what keywords have been searched by your visitors.', array(), 'Modules.Statssearch.Admin');
        \$this->ps_versions_compliancy = array('min' => '1.7.1.0', 'max' => _PS_VERSION_);
    }

    public function install()
    {
        if (!parent::install() || !\$this->registerHook('actionSearch') || !\$this->registerHook('displayAdminStatsModules')) {
            return false;
        }

        return Db::getInstance()->execute('
\t\tCREATE TABLE `'._DB_PREFIX_.'statssearch` (
\t\t\tid_statssearch INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
\t\t\tid_shop INTEGER UNSIGNED NOT NULL DEFAULT \\'1\\',
\t\t  \tid_shop_group INTEGER UNSIGNED NOT NULL DEFAULT \\'1\\',
\t\t\tkeywords VARCHAR(255) NOT NULL,
\t\t\tresults INT(6) NOT NULL DEFAULT 0,
\t\t\tdate_add DATETIME NOT NULL,
\t\t\tPRIMARY KEY(id_statssearch)
\t\t) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8');
    }

    public function uninstall()
    {
        if (!parent::uninstall()) {
            return false;
        }

        return (Db::getInstance()->execute('DROP TABLE `'._DB_PREFIX_.'statssearch`'));
    }

    /**
     * Insert keywords in statssearch table when a search is launched on FO
     */
    public function hookActionSearch(\$params)
    {
        \$sql = 'INSERT INTO `'._DB_PREFIX_.'statssearch` (`id_shop`, `id_shop_group`, `keywords`, `results`, `date_add`)
\t\t\t\tVALUES ('.(int)\$this->context->shop->id.', '.(int)\$this->context->shop->id_shop_group.', \\''.pSQL(\$params['expr']).'\\', '.(int)\$params['total'].', NOW())';
        Db::getInstance()->execute(\$sql);
    }

    public function hookDisplayAdminStatsModules()
    {
        if (Tools::getValue('export')) {
            \$this->csvExport(array('type' => 'pie'));
        }

        \$result = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS(\$this->query.ModuleGraph::getDateBetween().\$this->query_group_by);
        \$this->html = '
\t\t<div class=\"panel-heading\">
\t\t\t'.\$this->displayName.'
\t\t</div>';
        \$table = '
\t\t<table class=\"table\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th><span class=\"title_box active\">'.\$this->trans('Keywords', array(), 'Modules.Statssearch.Admin').'</span></th>
\t\t\t\t\t<th><span class=\"title_box active\">'.\$this->trans('Occurrences', array(), 'Modules.Statssearch.Admin').'</span></th>
\t\t\t\t\t<th><span class=\"title_box active\">'.\$this->trans('Results', array(), 'Modules.Statssearch.Admin').'</span></th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>';

        foreach (\$result as \$row) {
            if (Tools::strlen(\$row['keywords']) >= Configuration::get('PS_SEARCH_MINWORDLEN')) {
                \$table .= '<tr>
\t\t\t\t\t<td>'.\$row['keywords'].'</td>
\t\t\t\t\t<td>'.\$row['occurences'].'</td>
\t\t\t\t\t<td>'.\$row['total'].'</td>
\t\t\t\t</tr>';
            }
        }
        \$table .= '
\t\t\t</tbody>
\t\t</table>';

        if (count(\$result)) {
            \$this->html .= '<div>'.\$this->engine(array('type' => 'pie')).'</div>
\t\t\t\t\t\t\t<a class=\"btn btn-default\" href=\"'.Tools::safeOutput(\$_SERVER['REQUEST_URI']).'&export=1\">
\t\t\t\t\t\t\t\t<i class=\"icon-cloud-upload\"></i> '.\$this->trans('CSV Export', array(), 'Modules.Statssearch.Admin').'
\t\t\t\t\t\t\t</a>'.\$table;
        } else {
            \$this->html .= '<p>'.\$this->trans('Cannot find any keywords that have been searched for more than once.', array(), 'Modules.Statssearch.Admin').'</p>';
        }

        return \$this->html;
    }

    protected function getData(\$layers)
    {
        \$this->_titles['main'] = \$this->trans('Top 10 keywords', array(), 'Modules.Statssearch.Admin');
        \$total_result = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS(\$this->query.\$this->getDate().\$this->query_group_by);
        \$total = 0;
        \$total2 = 0;
        foreach (\$total_result as \$total_row) {
            \$total += \$total_row['occurences'];
        }
        \$result = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS(\$this->query.\$this->getDate().\$this->query_group_by.' LIMIT 9');
        foreach (\$result as \$row) {
            if (!\$row['occurences']) {
                continue;
            }
            \$this->_legend[] = \$row['keywords'];
            \$this->_values[] = \$row['occurences'];
            \$total2 += \$row['occurences'];
        }
        if (\$total > \$total2) {
            \$this->_legend[] = \$this->trans('Others', array(), 'Modules.Statssearch.Admin');
            \$this->_values[] = \$total - \$total2;
        }
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/statssearch/statssearch.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
/**
 * 2007-2020 PrestaShop SA and Contributors
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
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
 * needs please refer to https://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2020 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */

if (!defined('_PS_VERSION_')) {
    exit;
}

class statssearch extends ModuleGraph
{
    private \$html = '';
    private \$query = '';
    private \$query_group_by = '';

    public function __construct()
    {
        \$this->name = 'statssearch';
        \$this->tab = 'analytics_stats';
        \$this->version = '2.0.2';
        \$this->author = 'PrestaShop';
        \$this->need_instance = 0;

        parent::__construct();

        \$this->query = 'SELECT `keywords`, COUNT(TRIM(`keywords`)) as occurences, MAX(results) as total
\t\t\t\tFROM `'._DB_PREFIX_.'statssearch`
\t\t\t\tWHERE 1
\t\t\t\t\t'.Shop::addSqlRestriction().'
\t\t\t\t\tAND `date_add` BETWEEN ';

        \$this->query_group_by = 'GROUP BY `keywords`
\t\t\t\tHAVING occurences > 1
\t\t\t\tORDER BY occurences DESC';

        \$this->displayName = \$this->trans('Shop search', array(), 'Modules.Statssearch.Admin');
        \$this->description = \$this->trans('Enrich your stats, add a tab showing what keywords have been searched by your visitors.', array(), 'Modules.Statssearch.Admin');
        \$this->ps_versions_compliancy = array('min' => '1.7.1.0', 'max' => _PS_VERSION_);
    }

    public function install()
    {
        if (!parent::install() || !\$this->registerHook('actionSearch') || !\$this->registerHook('displayAdminStatsModules')) {
            return false;
        }

        return Db::getInstance()->execute('
\t\tCREATE TABLE `'._DB_PREFIX_.'statssearch` (
\t\t\tid_statssearch INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
\t\t\tid_shop INTEGER UNSIGNED NOT NULL DEFAULT \\'1\\',
\t\t  \tid_shop_group INTEGER UNSIGNED NOT NULL DEFAULT \\'1\\',
\t\t\tkeywords VARCHAR(255) NOT NULL,
\t\t\tresults INT(6) NOT NULL DEFAULT 0,
\t\t\tdate_add DATETIME NOT NULL,
\t\t\tPRIMARY KEY(id_statssearch)
\t\t) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8');
    }

    public function uninstall()
    {
        if (!parent::uninstall()) {
            return false;
        }

        return (Db::getInstance()->execute('DROP TABLE `'._DB_PREFIX_.'statssearch`'));
    }

    /**
     * Insert keywords in statssearch table when a search is launched on FO
     */
    public function hookActionSearch(\$params)
    {
        \$sql = 'INSERT INTO `'._DB_PREFIX_.'statssearch` (`id_shop`, `id_shop_group`, `keywords`, `results`, `date_add`)
\t\t\t\tVALUES ('.(int)\$this->context->shop->id.', '.(int)\$this->context->shop->id_shop_group.', \\''.pSQL(\$params['expr']).'\\', '.(int)\$params['total'].', NOW())';
        Db::getInstance()->execute(\$sql);
    }

    public function hookDisplayAdminStatsModules()
    {
        if (Tools::getValue('export')) {
            \$this->csvExport(array('type' => 'pie'));
        }

        \$result = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS(\$this->query.ModuleGraph::getDateBetween().\$this->query_group_by);
        \$this->html = '
\t\t<div class=\"panel-heading\">
\t\t\t'.\$this->displayName.'
\t\t</div>';
        \$table = '
\t\t<table class=\"table\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th><span class=\"title_box active\">'.\$this->trans('Keywords', array(), 'Modules.Statssearch.Admin').'</span></th>
\t\t\t\t\t<th><span class=\"title_box active\">'.\$this->trans('Occurrences', array(), 'Modules.Statssearch.Admin').'</span></th>
\t\t\t\t\t<th><span class=\"title_box active\">'.\$this->trans('Results', array(), 'Modules.Statssearch.Admin').'</span></th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>';

        foreach (\$result as \$row) {
            if (Tools::strlen(\$row['keywords']) >= Configuration::get('PS_SEARCH_MINWORDLEN')) {
                \$table .= '<tr>
\t\t\t\t\t<td>'.\$row['keywords'].'</td>
\t\t\t\t\t<td>'.\$row['occurences'].'</td>
\t\t\t\t\t<td>'.\$row['total'].'</td>
\t\t\t\t</tr>';
            }
        }
        \$table .= '
\t\t\t</tbody>
\t\t</table>';

        if (count(\$result)) {
            \$this->html .= '<div>'.\$this->engine(array('type' => 'pie')).'</div>
\t\t\t\t\t\t\t<a class=\"btn btn-default\" href=\"'.Tools::safeOutput(\$_SERVER['REQUEST_URI']).'&export=1\">
\t\t\t\t\t\t\t\t<i class=\"icon-cloud-upload\"></i> '.\$this->trans('CSV Export', array(), 'Modules.Statssearch.Admin').'
\t\t\t\t\t\t\t</a>'.\$table;
        } else {
            \$this->html .= '<p>'.\$this->trans('Cannot find any keywords that have been searched for more than once.', array(), 'Modules.Statssearch.Admin').'</p>';
        }

        return \$this->html;
    }

    protected function getData(\$layers)
    {
        \$this->_titles['main'] = \$this->trans('Top 10 keywords', array(), 'Modules.Statssearch.Admin');
        \$total_result = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS(\$this->query.\$this->getDate().\$this->query_group_by);
        \$total = 0;
        \$total2 = 0;
        foreach (\$total_result as \$total_row) {
            \$total += \$total_row['occurences'];
        }
        \$result = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS(\$this->query.\$this->getDate().\$this->query_group_by.' LIMIT 9');
        foreach (\$result as \$row) {
            if (!\$row['occurences']) {
                continue;
            }
            \$this->_legend[] = \$row['keywords'];
            \$this->_values[] = \$row['occurences'];
            \$total2 += \$row['occurences'];
        }
        if (\$total > \$total2) {
            \$this->_legend[] = \$this->trans('Others', array(), 'Modules.Statssearch.Admin');
            \$this->_values[] = \$total - \$total2;
        }
    }
}
", "@Modules/statssearch/statssearch.php", "/var/www/html/modules/statssearch/statssearch.php");
    }
}
