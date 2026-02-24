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

/* @Modules/ps_cashondelivery/controllers/front/validation.php */
class __TwigTemplate_0903f28b41b2be2e0561b7268c22527f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_cashondelivery/controllers/front/validation.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_cashondelivery/controllers/front/validation.php"));

        // line 1
        echo "<?php
/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License version 3.0
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License version 3.0
 */

/**
 * This Controller receives customer after approval on checkout page
 */
class Ps_CashondeliveryValidationModuleFrontController extends ModuleFrontController
{
    /**
     * {@inheritdoc}
     */
    public \$ssl = true;

    /**
     * @var PaymentModule
     */
    public \$module;

    /**
     * {@inheritdoc}
     */
    public function postProcess()
    {
        if (false === \$this->checkIfContextIsValid() || false === \$this->checkIfPaymentOptionIsAvailable()) {
            Tools::redirect(\$this->context->link->getPageLink(
                'order',
                true,
                (int) \$this->context->language->id,
                [
                    'step' => 1,
                ]
            ));
        }

        \$customer = new Customer(\$this->context->cart->id_customer);

        if (false === Validate::isLoadedObject(\$customer)) {
            Tools::redirect(\$this->context->link->getPageLink(
                'order',
                true,
                (int) \$this->context->language->id,
                [
                    'step' => 1,
                ]
            ));
        }

        \$this->module->validateOrder(
            (int) \$this->context->cart->id,
            (int) Configuration::getGlobalValue(Ps_Cashondelivery::CONFIG_OS_CASH_ON_DELIVERY),
            (float) \$this->context->cart->getOrderTotal(true, Cart::BOTH),
            \$this->module->displayName,
            null,
            [],
            (int) \$this->context->currency->id,
            false,
            \$customer->secure_key
        );

        Tools::redirect(\$this->context->link->getPageLink(
            'order-confirmation',
            true,
            (int) \$this->context->language->id,
            [
                'id_cart' => (int) \$this->context->cart->id,
                'id_module' => (int) \$this->module->id,
                'id_order' => (int) \$this->module->currentOrder,
                'key' => \$customer->secure_key,
            ]
        ));
    }

    /**
     * Check if the context is valid
     * - Cart is loaded
     * - Cart has a Customer
     * - Cart has a delivery address
     * - Cart has an invoice address
     * - Cart doesn't contains virtual product
     *
     * @return bool
     */
    private function checkIfContextIsValid()
    {
        return true === Validate::isLoadedObject(\$this->context->cart)
            && true === Validate::isUnsignedInt(\$this->context->cart->id_customer)
            && true === Validate::isUnsignedInt(\$this->context->cart->id_address_delivery)
            && true === Validate::isUnsignedInt(\$this->context->cart->id_address_invoice)
            && false === \$this->context->cart->isVirtualCart();
    }

    /**
     * Check that this payment option is still available in case the customer changed
     * his address just before the end of the checkout process
     *
     * @return bool
     */
    private function checkIfPaymentOptionIsAvailable()
    {
        \$modules = Module::getPaymentModules();

        if (empty(\$modules)) {
            return false;
        }

        foreach (\$modules as \$module) {
            if (isset(\$module['name']) && \$this->module->name === \$module['name']) {
                return true;
            }
        }

        return false;
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_cashondelivery/controllers/front/validation.php";
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
 * This source file is subject to the Academic Free License version 3.0
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License version 3.0
 */

/**
 * This Controller receives customer after approval on checkout page
 */
class Ps_CashondeliveryValidationModuleFrontController extends ModuleFrontController
{
    /**
     * {@inheritdoc}
     */
    public \$ssl = true;

    /**
     * @var PaymentModule
     */
    public \$module;

    /**
     * {@inheritdoc}
     */
    public function postProcess()
    {
        if (false === \$this->checkIfContextIsValid() || false === \$this->checkIfPaymentOptionIsAvailable()) {
            Tools::redirect(\$this->context->link->getPageLink(
                'order',
                true,
                (int) \$this->context->language->id,
                [
                    'step' => 1,
                ]
            ));
        }

        \$customer = new Customer(\$this->context->cart->id_customer);

        if (false === Validate::isLoadedObject(\$customer)) {
            Tools::redirect(\$this->context->link->getPageLink(
                'order',
                true,
                (int) \$this->context->language->id,
                [
                    'step' => 1,
                ]
            ));
        }

        \$this->module->validateOrder(
            (int) \$this->context->cart->id,
            (int) Configuration::getGlobalValue(Ps_Cashondelivery::CONFIG_OS_CASH_ON_DELIVERY),
            (float) \$this->context->cart->getOrderTotal(true, Cart::BOTH),
            \$this->module->displayName,
            null,
            [],
            (int) \$this->context->currency->id,
            false,
            \$customer->secure_key
        );

        Tools::redirect(\$this->context->link->getPageLink(
            'order-confirmation',
            true,
            (int) \$this->context->language->id,
            [
                'id_cart' => (int) \$this->context->cart->id,
                'id_module' => (int) \$this->module->id,
                'id_order' => (int) \$this->module->currentOrder,
                'key' => \$customer->secure_key,
            ]
        ));
    }

    /**
     * Check if the context is valid
     * - Cart is loaded
     * - Cart has a Customer
     * - Cart has a delivery address
     * - Cart has an invoice address
     * - Cart doesn't contains virtual product
     *
     * @return bool
     */
    private function checkIfContextIsValid()
    {
        return true === Validate::isLoadedObject(\$this->context->cart)
            && true === Validate::isUnsignedInt(\$this->context->cart->id_customer)
            && true === Validate::isUnsignedInt(\$this->context->cart->id_address_delivery)
            && true === Validate::isUnsignedInt(\$this->context->cart->id_address_invoice)
            && false === \$this->context->cart->isVirtualCart();
    }

    /**
     * Check that this payment option is still available in case the customer changed
     * his address just before the end of the checkout process
     *
     * @return bool
     */
    private function checkIfPaymentOptionIsAvailable()
    {
        \$modules = Module::getPaymentModules();

        if (empty(\$modules)) {
            return false;
        }

        foreach (\$modules as \$module) {
            if (isset(\$module['name']) && \$this->module->name === \$module['name']) {
                return true;
            }
        }

        return false;
    }
}
", "@Modules/ps_cashondelivery/controllers/front/validation.php", "/var/www/html/modules/ps_cashondelivery/controllers/front/validation.php");
    }
}
