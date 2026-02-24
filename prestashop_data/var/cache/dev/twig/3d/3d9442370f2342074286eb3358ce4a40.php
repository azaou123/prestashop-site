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

/* @Modules/ps_googleanalytics/classes/Hook/HookActionOrderStatusPostUpdate.php */
class __TwigTemplate_23ecc32db80c0f59676cd3fe2322a4a9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_googleanalytics/classes/Hook/HookActionOrderStatusPostUpdate.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_googleanalytics/classes/Hook/HookActionOrderStatusPostUpdate.php"));

        // line 1
        echo "<?php
/**
 * Copyright since 2007 PrestaShop SA and Contributors
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
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */

namespace PrestaShop\\Module\\Ps_Googleanalytics\\Hooks;

use Configuration;
use Context;
use Db;
use Ps_Googleanalytics;

class HookActionOrderStatusPostUpdate implements HookInterface
{
    /**
     * @var Ps_Googleanalytics
     */
    private \$module;

    /**
     * @var Context
     */
    private \$context;

    /**
     * @var array
     */
    private \$params;

    public function __construct(Ps_Googleanalytics \$module, Context \$context)
    {
        \$this->module = \$module;
        \$this->context = \$context;
    }

    /**
     * run
     *
     * @return void
     */
    public function run()
    {
        // If we do not have an order or a new order status, we return
        if (empty(\$this->params['id_order']) || empty(\$this->params['newOrderStatus']->id)) {
            return;
        }

        // We get all states in which the merchant want to have refund sent and check if the new state being set belongs there
        \$gaCancelledStates = json_decode(Configuration::get('GA_CANCELLED_STATES'), true);
        if (empty(\$gaCancelledStates) || !in_array(\$this->params['newOrderStatus']->id, \$gaCancelledStates)) {
            return;
        }

        // We check if the refund was already sent to Google Analytics
        \$gaRefundSent = Db::getInstance()->getValue(
            'SELECT id_order FROM `' . _DB_PREFIX_ . 'ganalytics` WHERE id_order = ' . (int) \$this->params['id_order'] . ' AND refund_sent = 1'
        );

        // If it was not already refunded
        if (\$gaRefundSent === false) {
            // We refund it and set the \"sent\" flag to true
            \$jsCode = \$this->getGoogleAnalytics4(\$this->params['id_order']);
            \$this->context->cookie->ga_admin_refund = \$jsCode;
            \$this->context->cookie->write();

            // We save this information to database
            Db::getInstance()->execute(
                'UPDATE `' . _DB_PREFIX_ . 'ganalytics` SET refund_sent = 1 WHERE id_order = ' . (int) \$this->params['id_order']
            );
        }
    }

    /**
     * setParams
     *
     * @param array \$params
     */
    public function setParams(\$params)
    {
        \$this->params = \$params;
    }

    /**
     * @param int \$idOrder
     */
    protected function getGoogleAnalytics4(\$idOrder)
    {
        \$eventData = [
            'transaction_id' => (int) \$idOrder,
        ];

        return \$this->module->getTools()->renderEvent(
            'refund',
            \$eventData
        );
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_googleanalytics/classes/Hook/HookActionOrderStatusPostUpdate.php";
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
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */

namespace PrestaShop\\Module\\Ps_Googleanalytics\\Hooks;

use Configuration;
use Context;
use Db;
use Ps_Googleanalytics;

class HookActionOrderStatusPostUpdate implements HookInterface
{
    /**
     * @var Ps_Googleanalytics
     */
    private \$module;

    /**
     * @var Context
     */
    private \$context;

    /**
     * @var array
     */
    private \$params;

    public function __construct(Ps_Googleanalytics \$module, Context \$context)
    {
        \$this->module = \$module;
        \$this->context = \$context;
    }

    /**
     * run
     *
     * @return void
     */
    public function run()
    {
        // If we do not have an order or a new order status, we return
        if (empty(\$this->params['id_order']) || empty(\$this->params['newOrderStatus']->id)) {
            return;
        }

        // We get all states in which the merchant want to have refund sent and check if the new state being set belongs there
        \$gaCancelledStates = json_decode(Configuration::get('GA_CANCELLED_STATES'), true);
        if (empty(\$gaCancelledStates) || !in_array(\$this->params['newOrderStatus']->id, \$gaCancelledStates)) {
            return;
        }

        // We check if the refund was already sent to Google Analytics
        \$gaRefundSent = Db::getInstance()->getValue(
            'SELECT id_order FROM `' . _DB_PREFIX_ . 'ganalytics` WHERE id_order = ' . (int) \$this->params['id_order'] . ' AND refund_sent = 1'
        );

        // If it was not already refunded
        if (\$gaRefundSent === false) {
            // We refund it and set the \"sent\" flag to true
            \$jsCode = \$this->getGoogleAnalytics4(\$this->params['id_order']);
            \$this->context->cookie->ga_admin_refund = \$jsCode;
            \$this->context->cookie->write();

            // We save this information to database
            Db::getInstance()->execute(
                'UPDATE `' . _DB_PREFIX_ . 'ganalytics` SET refund_sent = 1 WHERE id_order = ' . (int) \$this->params['id_order']
            );
        }
    }

    /**
     * setParams
     *
     * @param array \$params
     */
    public function setParams(\$params)
    {
        \$this->params = \$params;
    }

    /**
     * @param int \$idOrder
     */
    protected function getGoogleAnalytics4(\$idOrder)
    {
        \$eventData = [
            'transaction_id' => (int) \$idOrder,
        ];

        return \$this->module->getTools()->renderEvent(
            'refund',
            \$eventData
        );
    }
}
", "@Modules/ps_googleanalytics/classes/Hook/HookActionOrderStatusPostUpdate.php", "/var/www/html/modules/ps_googleanalytics/classes/Hook/HookActionOrderStatusPostUpdate.php");
    }
}
