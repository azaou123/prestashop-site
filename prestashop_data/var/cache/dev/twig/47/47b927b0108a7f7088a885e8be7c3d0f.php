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

/* @Modules/ps_wirepayment/controllers/front/payment.php */
class __TwigTemplate_8ddf09058a68cd79a2b5572592a53831 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_wirepayment/controllers/front/payment.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_wirepayment/controllers/front/payment.php"));

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
class Ps_WirepaymentPaymentModuleFrontController extends ModuleFrontController
{
    public \$ssl = true;

    /**
     * @see FrontController::initContent()
     */
    public function initContent()
    {
        parent::initContent();

        \$cart = \$this->context->cart;
        if (!\$this->module->checkCurrency(\$cart)) {
            Tools::redirect('index.php?controller=order');
        }

        \$total = sprintf(
            \$this->getTranslator()->trans('%1\$s (tax incl.)', [], 'Modules.Wirepayment.Shop'),
            \$this->context->getCurrentLocale()->formatPrice(\$cart->getOrderTotal(true, Cart::BOTH), \$this->context->currency->iso_code)
        );

        \$this->context->smarty->assign([
            'back_url' => \$this->context->link->getPageLink('order', true, null, 'step=3'),
            'confirm_url' => \$this->context->link->getModuleLink('ps_wirepayment', 'validation', [], true),
            'image_url' => \$this->module->getPathUri() . 'ps_wirepayment.jpg',
            'cust_currency' => \$cart->id_currency,
            'currencies' => \$this->module->getCurrency((int) \$cart->id_currency),
            'total' => \$total,
            'this_path' => \$this->module->getPathUri(),
            'this_path_ssl' => Tools::getShopDomainSsl(true, true) . __PS_BASE_URI__ . 'modules/' . \$this->module->name . '/',
        ]);

        \$this->setTemplate('payment_execution.tpl');
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_wirepayment/controllers/front/payment.php";
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
class Ps_WirepaymentPaymentModuleFrontController extends ModuleFrontController
{
    public \$ssl = true;

    /**
     * @see FrontController::initContent()
     */
    public function initContent()
    {
        parent::initContent();

        \$cart = \$this->context->cart;
        if (!\$this->module->checkCurrency(\$cart)) {
            Tools::redirect('index.php?controller=order');
        }

        \$total = sprintf(
            \$this->getTranslator()->trans('%1\$s (tax incl.)', [], 'Modules.Wirepayment.Shop'),
            \$this->context->getCurrentLocale()->formatPrice(\$cart->getOrderTotal(true, Cart::BOTH), \$this->context->currency->iso_code)
        );

        \$this->context->smarty->assign([
            'back_url' => \$this->context->link->getPageLink('order', true, null, 'step=3'),
            'confirm_url' => \$this->context->link->getModuleLink('ps_wirepayment', 'validation', [], true),
            'image_url' => \$this->module->getPathUri() . 'ps_wirepayment.jpg',
            'cust_currency' => \$cart->id_currency,
            'currencies' => \$this->module->getCurrency((int) \$cart->id_currency),
            'total' => \$total,
            'this_path' => \$this->module->getPathUri(),
            'this_path_ssl' => Tools::getShopDomainSsl(true, true) . __PS_BASE_URI__ . 'modules/' . \$this->module->name . '/',
        ]);

        \$this->setTemplate('payment_execution.tpl');
    }
}
", "@Modules/ps_wirepayment/controllers/front/payment.php", "/var/www/html/modules/ps_wirepayment/controllers/front/payment.php");
    }
}
