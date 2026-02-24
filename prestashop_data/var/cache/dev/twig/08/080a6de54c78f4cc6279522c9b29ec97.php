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

/* @Modules/ps_googleanalytics/classes/Hook/HookDisplayOrderConfirmation.php */
class __TwigTemplate_2ff05d8f63a7c6ed7ce3f5abbb2e2c34 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_googleanalytics/classes/Hook/HookDisplayOrderConfirmation.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_googleanalytics/classes/Hook/HookDisplayOrderConfirmation.php"));

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

use Cart;
use Configuration;
use Context;
use PrestaShop\\Module\\Ps_Googleanalytics\\Handler\\GanalyticsJsHandler;
use PrestaShop\\Module\\Ps_Googleanalytics\\Repository\\GanalyticsRepository;
use PrestaShop\\Module\\Ps_Googleanalytics\\Wrapper\\OrderWrapper;
use PrestaShop\\Module\\Ps_Googleanalytics\\Wrapper\\ProductWrapper;
use Ps_Googleanalytics;
use Validate;

class HookDisplayOrderConfirmation implements HookInterface
{
    private \$module;
    private \$context;
    private \$params;

    public function __construct(Ps_Googleanalytics \$module, Context \$context)
    {
        \$this->module = \$module;
        \$this->context = \$context;
    }

    /**
     * run
     *
     * @return string
     */
    public function run()
    {
        \$gaScripts = '';
        \$order = \$this->params['order'];

        if (!Validate::isLoadedObject(\$order) || \$order->getCurrentState() == (int) Configuration::get('PS_OS_ERROR')) {
            return \$gaScripts;
        }

        // Load up our handlers and repositories
        \$ganalyticsRepository = new GanalyticsRepository();
        \$gaTagHandler = new GanalyticsJsHandler(\$this->module, \$this->context);
        \$productWrapper = new ProductWrapper(\$this->context);
        \$orderWrapper = new OrderWrapper(\$this->context);

        // If it's a completely new order, add order to repository, so we can later mark it as sent
        if (empty(\$ganalyticsRepository->findGaOrderByOrderId((int) \$order->id))) {
            \$ganalyticsRepository->addOrder((int) \$order->id, (int) \$order->id_shop);
        }

        // If the customer is revisiting confirmation screen and the order was already sent, we don't do anything
        if (\$ganalyticsRepository->hasOrderBeenAlreadySent((int) \$order->id)) {
            return \$gaScripts;
        }

        // Prepare transaction data
        \$orderData = \$orderWrapper->wrapOrder(\$order);

        // Prepare order products, if the cart still exists
        \$orderProducts = [];
        \$cart = new Cart(\$order->id_cart);
        if (Validate::isLoadedObject(\$cart)) {
            \$orderProducts = \$productWrapper->prepareItemListFromProductList(\$cart->getProducts(), true);
        }

        // Add payment event
        \$gaScripts .= \$this->module->getTools()->renderEvent(
            'add_payment_info',
            [
                'currency' => \$orderData['currency'],
                'value' => (float) \$orderData['value'],
                'payment_type' => \$orderData['payment_type'],
                'items' => \$orderProducts,
            ]
        );

        // Render transaction code
        \$gaScripts .= \$this->module->getTools()->renderPurchaseEvent(
            \$orderProducts,
            \$orderData,
            \$this->context->link->getModuleLink('ps_googleanalytics', 'ajax', [], true)
        );

        return \$gaTagHandler->generate(\$gaScripts);
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
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_googleanalytics/classes/Hook/HookDisplayOrderConfirmation.php";
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

use Cart;
use Configuration;
use Context;
use PrestaShop\\Module\\Ps_Googleanalytics\\Handler\\GanalyticsJsHandler;
use PrestaShop\\Module\\Ps_Googleanalytics\\Repository\\GanalyticsRepository;
use PrestaShop\\Module\\Ps_Googleanalytics\\Wrapper\\OrderWrapper;
use PrestaShop\\Module\\Ps_Googleanalytics\\Wrapper\\ProductWrapper;
use Ps_Googleanalytics;
use Validate;

class HookDisplayOrderConfirmation implements HookInterface
{
    private \$module;
    private \$context;
    private \$params;

    public function __construct(Ps_Googleanalytics \$module, Context \$context)
    {
        \$this->module = \$module;
        \$this->context = \$context;
    }

    /**
     * run
     *
     * @return string
     */
    public function run()
    {
        \$gaScripts = '';
        \$order = \$this->params['order'];

        if (!Validate::isLoadedObject(\$order) || \$order->getCurrentState() == (int) Configuration::get('PS_OS_ERROR')) {
            return \$gaScripts;
        }

        // Load up our handlers and repositories
        \$ganalyticsRepository = new GanalyticsRepository();
        \$gaTagHandler = new GanalyticsJsHandler(\$this->module, \$this->context);
        \$productWrapper = new ProductWrapper(\$this->context);
        \$orderWrapper = new OrderWrapper(\$this->context);

        // If it's a completely new order, add order to repository, so we can later mark it as sent
        if (empty(\$ganalyticsRepository->findGaOrderByOrderId((int) \$order->id))) {
            \$ganalyticsRepository->addOrder((int) \$order->id, (int) \$order->id_shop);
        }

        // If the customer is revisiting confirmation screen and the order was already sent, we don't do anything
        if (\$ganalyticsRepository->hasOrderBeenAlreadySent((int) \$order->id)) {
            return \$gaScripts;
        }

        // Prepare transaction data
        \$orderData = \$orderWrapper->wrapOrder(\$order);

        // Prepare order products, if the cart still exists
        \$orderProducts = [];
        \$cart = new Cart(\$order->id_cart);
        if (Validate::isLoadedObject(\$cart)) {
            \$orderProducts = \$productWrapper->prepareItemListFromProductList(\$cart->getProducts(), true);
        }

        // Add payment event
        \$gaScripts .= \$this->module->getTools()->renderEvent(
            'add_payment_info',
            [
                'currency' => \$orderData['currency'],
                'value' => (float) \$orderData['value'],
                'payment_type' => \$orderData['payment_type'],
                'items' => \$orderProducts,
            ]
        );

        // Render transaction code
        \$gaScripts .= \$this->module->getTools()->renderPurchaseEvent(
            \$orderProducts,
            \$orderData,
            \$this->context->link->getModuleLink('ps_googleanalytics', 'ajax', [], true)
        );

        return \$gaTagHandler->generate(\$gaScripts);
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
}
", "@Modules/ps_googleanalytics/classes/Hook/HookDisplayOrderConfirmation.php", "/var/www/html/modules/ps_googleanalytics/classes/Hook/HookDisplayOrderConfirmation.php");
    }
}
