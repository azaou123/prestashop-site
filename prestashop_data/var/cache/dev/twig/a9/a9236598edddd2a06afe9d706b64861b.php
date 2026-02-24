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

/* @Modules/statscarrier/statscarrier.php */
class __TwigTemplate_505c22633a2b27b23ceffd72b5aae38b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/statscarrier/statscarrier.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/statscarrier/statscarrier.php"));

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

class statscarrier extends ModuleGraph
{
    private \$html = '';
    private \$option = '';

    public function __construct()
    {
        \$this->name = 'statscarrier';
        \$this->tab = 'analytics_stats';
        \$this->version = '2.0.1';
        \$this->author = 'PrestaShop';
        \$this->need_instance = 0;

        parent::__construct();

        \$this->displayName = \$this->trans('Carrier distribution', array(), 'Modules.Statscarrier.Admin');
        \$this->description = \$this->trans('Enrich your stats, add a pie chart illustrating your carriers’ distribution.', array(), 'Modules.Statscarrier.Admin');
        \$this->ps_versions_compliancy = array('min' => '1.7.1.0', 'max' => _PS_VERSION_);
    }

    public function install()
    {
        return (parent::install() && \$this->registerHook('displayAdminStatsModules'));
    }

    public function hookDisplayAdminStatsModules(\$params)
    {
        \$sql = 'SELECT COUNT(o.`id_order`) as total
\t\t\t\tFROM `'._DB_PREFIX_.'orders` o
\t\t\t\tWHERE o.`date_add` BETWEEN '.ModuleGraph::getDateBetween().'
\t\t\t\t\t'.Shop::addSqlRestriction(Shop::SHARE_ORDER, 'o').'
\t\t\t\t\t'.((int)Tools::getValue('id_order_state') ? 'AND (SELECT oh.id_order_state FROM `'._DB_PREFIX_.'order_history` oh WHERE o.id_order = oh.id_order ORDER BY oh.date_add DESC, oh.id_order_history DESC LIMIT 1) = '.(int)Tools::getValue('id_order_state') : '');
        \$result = Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow(\$sql);
        \$states = OrderState::getOrderStates(\$this->context->language->id);

        if (Tools::getValue('export')) {
            \$this->csvExport(array('type' => 'pie', 'option' => Tools::getValue('id_order_state')));
        }
        \$this->html = '
\t\t\t<div class=\"panel-heading\">
\t\t\t\t'.\$this->displayName.'
\t\t\t</div>
\t\t\t<form action=\"'.Tools::safeOutput(\$_SERVER['REQUEST_URI']).'\" method=\"post\" class=\"form-horizontal alert\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-5 col-lg-offset-6\">
\t\t\t\t\t\t<select name=\"id_order_state\">
\t\t\t\t\t\t\t<option value=\"0\"'.((!Tools::getValue('id_order_state')) ? ' selected=\"selected\"' : '').'>'.\$this->trans('All', array(), 'Admin.Global').'</option>';
        foreach (\$states as \$state) {
            \$this->html .= '<option value=\"'.\$state['id_order_state'].'\"'.((\$state['id_order_state'] == Tools::getValue('id_order_state')) ? ' selected=\"selected\"' : '').'>'.\$state['name'].'</option>';
        }
        \$this->html .= '</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-1\">
\t\t\t\t\t\t<input type=\"submit\" name=\"submitState\" value=\"'.\$this->trans('Filter', array(), 'Admin.Global').'\" class=\"btn btn-default pull-right\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>

\t\t\t<div class=\"alert alert-info\">
\t\t\t\t'.\$this->trans('This graph represents the carrier distribution for your orders. You can also narrow the focus of the graph to display distribution for a particular order status.', array(), 'Modules.Statscarrier.Admin').'
\t\t\t</div>
\t\t\t<div class=\"row row-margin-bottom\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t'.(\$result['total'] ? \$this->engine(array(
                    'type' => 'pie',
                    'option' => Tools::getValue('id_order_state')
                )).'
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t<a href=\"'.Tools::safeOutput(\$_SERVER['REQUEST_URI'].'&export=1&exportType=language').'\" class=\"btn btn-default\">
\t\t\t\t\t\t\t<i class=\"icon-cloud-upload\"></i> '.\$this->trans('CSV Export', array(), 'Admin.Global').'
\t\t\t\t\t\t</a>' : \$this->trans('No valid orders have been received for this period.', array(), 'Modules.Statscarrier.Admin')).'
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>';

        return \$this->html;
    }

    public function setOption(\$option, \$layers = 1)
    {
        \$this->option = (int)\$option;
    }

    protected function getData(\$layers)
    {
        \$state_query = '';
        if ((int)\$this->option) {
            \$state_query = 'AND (
\t\t\t\tSELECT oh.id_order_state FROM `'._DB_PREFIX_.'order_history` oh
\t\t\t\tWHERE o.id_order = oh.id_order
\t\t\t\tORDER BY oh.date_add DESC, oh.id_order_history DESC
\t\t\t\tLIMIT 1) = '.(int)\$this->option;
        }
        \$this->_titles['main'] = \$this->trans('Percentage of orders listed by carrier.', array(), 'Modules.Statscarrier.Admin');

        \$sql = 'SELECT c.name, COUNT(DISTINCT o.`id_order`) as total
\t\t\t\tFROM `'._DB_PREFIX_.'carrier` c
\t\t\t\tLEFT JOIN `'._DB_PREFIX_.'orders` o ON o.id_carrier = c.id_carrier
\t\t\t\tWHERE o.`date_add` BETWEEN '.ModuleGraph::getDateBetween().'
\t\t\t\t\t'.Shop::addSqlRestriction(Shop::SHARE_ORDER, 'o').'
\t\t\t\t\t'.\$state_query.'
\t\t\t\tGROUP BY c.`id_carrier`';
        \$result = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS(\$sql);
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
        return "@Modules/statscarrier/statscarrier.php";
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

class statscarrier extends ModuleGraph
{
    private \$html = '';
    private \$option = '';

    public function __construct()
    {
        \$this->name = 'statscarrier';
        \$this->tab = 'analytics_stats';
        \$this->version = '2.0.1';
        \$this->author = 'PrestaShop';
        \$this->need_instance = 0;

        parent::__construct();

        \$this->displayName = \$this->trans('Carrier distribution', array(), 'Modules.Statscarrier.Admin');
        \$this->description = \$this->trans('Enrich your stats, add a pie chart illustrating your carriers’ distribution.', array(), 'Modules.Statscarrier.Admin');
        \$this->ps_versions_compliancy = array('min' => '1.7.1.0', 'max' => _PS_VERSION_);
    }

    public function install()
    {
        return (parent::install() && \$this->registerHook('displayAdminStatsModules'));
    }

    public function hookDisplayAdminStatsModules(\$params)
    {
        \$sql = 'SELECT COUNT(o.`id_order`) as total
\t\t\t\tFROM `'._DB_PREFIX_.'orders` o
\t\t\t\tWHERE o.`date_add` BETWEEN '.ModuleGraph::getDateBetween().'
\t\t\t\t\t'.Shop::addSqlRestriction(Shop::SHARE_ORDER, 'o').'
\t\t\t\t\t'.((int)Tools::getValue('id_order_state') ? 'AND (SELECT oh.id_order_state FROM `'._DB_PREFIX_.'order_history` oh WHERE o.id_order = oh.id_order ORDER BY oh.date_add DESC, oh.id_order_history DESC LIMIT 1) = '.(int)Tools::getValue('id_order_state') : '');
        \$result = Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow(\$sql);
        \$states = OrderState::getOrderStates(\$this->context->language->id);

        if (Tools::getValue('export')) {
            \$this->csvExport(array('type' => 'pie', 'option' => Tools::getValue('id_order_state')));
        }
        \$this->html = '
\t\t\t<div class=\"panel-heading\">
\t\t\t\t'.\$this->displayName.'
\t\t\t</div>
\t\t\t<form action=\"'.Tools::safeOutput(\$_SERVER['REQUEST_URI']).'\" method=\"post\" class=\"form-horizontal alert\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-5 col-lg-offset-6\">
\t\t\t\t\t\t<select name=\"id_order_state\">
\t\t\t\t\t\t\t<option value=\"0\"'.((!Tools::getValue('id_order_state')) ? ' selected=\"selected\"' : '').'>'.\$this->trans('All', array(), 'Admin.Global').'</option>';
        foreach (\$states as \$state) {
            \$this->html .= '<option value=\"'.\$state['id_order_state'].'\"'.((\$state['id_order_state'] == Tools::getValue('id_order_state')) ? ' selected=\"selected\"' : '').'>'.\$state['name'].'</option>';
        }
        \$this->html .= '</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-1\">
\t\t\t\t\t\t<input type=\"submit\" name=\"submitState\" value=\"'.\$this->trans('Filter', array(), 'Admin.Global').'\" class=\"btn btn-default pull-right\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>

\t\t\t<div class=\"alert alert-info\">
\t\t\t\t'.\$this->trans('This graph represents the carrier distribution for your orders. You can also narrow the focus of the graph to display distribution for a particular order status.', array(), 'Modules.Statscarrier.Admin').'
\t\t\t</div>
\t\t\t<div class=\"row row-margin-bottom\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t'.(\$result['total'] ? \$this->engine(array(
                    'type' => 'pie',
                    'option' => Tools::getValue('id_order_state')
                )).'
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t<a href=\"'.Tools::safeOutput(\$_SERVER['REQUEST_URI'].'&export=1&exportType=language').'\" class=\"btn btn-default\">
\t\t\t\t\t\t\t<i class=\"icon-cloud-upload\"></i> '.\$this->trans('CSV Export', array(), 'Admin.Global').'
\t\t\t\t\t\t</a>' : \$this->trans('No valid orders have been received for this period.', array(), 'Modules.Statscarrier.Admin')).'
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>';

        return \$this->html;
    }

    public function setOption(\$option, \$layers = 1)
    {
        \$this->option = (int)\$option;
    }

    protected function getData(\$layers)
    {
        \$state_query = '';
        if ((int)\$this->option) {
            \$state_query = 'AND (
\t\t\t\tSELECT oh.id_order_state FROM `'._DB_PREFIX_.'order_history` oh
\t\t\t\tWHERE o.id_order = oh.id_order
\t\t\t\tORDER BY oh.date_add DESC, oh.id_order_history DESC
\t\t\t\tLIMIT 1) = '.(int)\$this->option;
        }
        \$this->_titles['main'] = \$this->trans('Percentage of orders listed by carrier.', array(), 'Modules.Statscarrier.Admin');

        \$sql = 'SELECT c.name, COUNT(DISTINCT o.`id_order`) as total
\t\t\t\tFROM `'._DB_PREFIX_.'carrier` c
\t\t\t\tLEFT JOIN `'._DB_PREFIX_.'orders` o ON o.id_carrier = c.id_carrier
\t\t\t\tWHERE o.`date_add` BETWEEN '.ModuleGraph::getDateBetween().'
\t\t\t\t\t'.Shop::addSqlRestriction(Shop::SHARE_ORDER, 'o').'
\t\t\t\t\t'.\$state_query.'
\t\t\t\tGROUP BY c.`id_carrier`';
        \$result = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS(\$sql);
        foreach (\$result as \$row) {
            \$this->_values[] = \$row['total'];
            \$this->_legend[] = \$row['name'];
        }
    }
}
", "@Modules/statscarrier/statscarrier.php", "/var/www/html/modules/statscarrier/statscarrier.php");
    }
}
