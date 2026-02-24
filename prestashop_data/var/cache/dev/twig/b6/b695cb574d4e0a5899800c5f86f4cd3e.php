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

/* @Modules/ps_wirepayment/controllers/front/validation.php */
class __TwigTemplate_4310838dc199c9ac23d3e42e2d5810cf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_wirepayment/controllers/front/validation.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_wirepayment/controllers/front/validation.php"));

        // line 1
        echo "<?php
/**
 * 2007-2020 PrestaShop and Contributors
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
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2020 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */

/**
 * @since 1.5.0
 *
 * @property Ps_Wirepayment \$module
 */
class Ps_WirepaymentValidationModuleFrontController extends ModuleFrontController
{
    /**
     * @see FrontController::postProcess()
     */
    public function postProcess()
    {
        \$cart = \$this->context->cart;
        if (\$cart->id_customer == 0 || \$cart->id_address_delivery == 0 || \$cart->id_address_invoice == 0 || !\$this->module->active) {
            Tools::redirect('index.php?controller=order&step=1');
        }

        // Check that this payment option is still available in case the customer changed his address just before the end of the checkout process
        \$authorized = false;
        foreach (Module::getPaymentModules() as \$module) {
            if (\$module['name'] == 'ps_wirepayment') {
                \$authorized = true;
                break;
            }
        }
        if (!\$authorized) {
            exit(\$this->module->getTranslator()->trans('This payment method is not available.', [], 'Modules.Wirepayment.Shop'));
        }

        \$customer = new Customer(\$cart->id_customer);
        if (!Validate::isLoadedObject(\$customer)) {
            Tools::redirect('index.php?controller=order&step=1');
        }

        \$currency = \$this->context->currency;
        \$total = (float) \$cart->getOrderTotal(true, Cart::BOTH);
        \$mailVars = [
            '{bankwire_owner}' => Configuration::get('BANK_WIRE_OWNER'),
            '{bankwire_details}' => nl2br(Configuration::get('BANK_WIRE_DETAILS') ?: ''),
            '{bankwire_address}' => nl2br(Configuration::get('BANK_WIRE_ADDRESS') ?: ''),
        ];

        \$this->module->validateOrder(\$cart->id, (int) Configuration::get('PS_OS_BANKWIRE'), \$total, \$this->module->displayName, null, \$mailVars, (int) \$currency->id, false, \$customer->secure_key);
        Tools::redirect('index.php?controller=order-confirmation&id_cart=' . \$cart->id . '&id_module=' . \$this->module->id . '&id_order=' . \$this->module->currentOrder . '&key=' . \$customer->secure_key);
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_wirepayment/controllers/front/validation.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
/**
 * 2007-2020 PrestaShop and Contributors
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
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2020 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */

/**
 * @since 1.5.0
 *
 * @property Ps_Wirepayment \$module
 */
class Ps_WirepaymentValidationModuleFrontController extends ModuleFrontController
{
    /**
     * @see FrontController::postProcess()
     */
    public function postProcess()
    {
        \$cart = \$this->context->cart;
        if (\$cart->id_customer == 0 || \$cart->id_address_delivery == 0 || \$cart->id_address_invoice == 0 || !\$this->module->active) {
            Tools::redirect('index.php?controller=order&step=1');
        }

        // Check that this payment option is still available in case the customer changed his address just before the end of the checkout process
        \$authorized = false;
        foreach (Module::getPaymentModules() as \$module) {
            if (\$module['name'] == 'ps_wirepayment') {
                \$authorized = true;
                break;
            }
        }
        if (!\$authorized) {
            exit(\$this->module->getTranslator()->trans('This payment method is not available.', [], 'Modules.Wirepayment.Shop'));
        }

        \$customer = new Customer(\$cart->id_customer);
        if (!Validate::isLoadedObject(\$customer)) {
            Tools::redirect('index.php?controller=order&step=1');
        }

        \$currency = \$this->context->currency;
        \$total = (float) \$cart->getOrderTotal(true, Cart::BOTH);
        \$mailVars = [
            '{bankwire_owner}' => Configuration::get('BANK_WIRE_OWNER'),
            '{bankwire_details}' => nl2br(Configuration::get('BANK_WIRE_DETAILS') ?: ''),
            '{bankwire_address}' => nl2br(Configuration::get('BANK_WIRE_ADDRESS') ?: ''),
        ];

        \$this->module->validateOrder(\$cart->id, (int) Configuration::get('PS_OS_BANKWIRE'), \$total, \$this->module->displayName, null, \$mailVars, (int) \$currency->id, false, \$customer->secure_key);
        Tools::redirect('index.php?controller=order-confirmation&id_cart=' . \$cart->id . '&id_module=' . \$this->module->id . '&id_order=' . \$this->module->currentOrder . '&key=' . \$customer->secure_key);
    }
}
", "@Modules/ps_wirepayment/controllers/front/validation.php", "/var/www/html/modules/ps_wirepayment/controllers/front/validation.php");
    }
}
