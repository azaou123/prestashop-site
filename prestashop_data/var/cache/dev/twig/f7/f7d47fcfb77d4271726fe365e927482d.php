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

/* @Modules/ps_emailalerts/controllers/front/actions.php */
class __TwigTemplate_5643c8e7dea9dc31cba79b8893e6e2fb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_emailalerts/controllers/front/actions.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_emailalerts/controllers/front/actions.php"));

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
 * @since 1.5.0
 */
class Ps_EmailAlertsActionsModuleFrontController extends ModuleFrontController
{
    /**
     * @var int
     */
    public \$id_product;
    public \$id_product_attribute;

    public function init()
    {
        parent::init();

        require_once \$this->module->getLocalPath() . 'MailAlert.php';
        \$this->id_product = (int) Tools::getValue('id_product');
        \$this->id_product_attribute = (int) Tools::getValue('id_product_attribute');
    }

    public function postProcess()
    {
        if (Tools::getValue('process') == 'remove') {
            \$this->processRemove();
        } elseif (Tools::getValue('process') == 'add') {
            \$this->processAdd();
        } elseif (Tools::getValue('process') == 'check') {
            \$this->processCheck();
        }
    }

    /**
     * Remove product alert.
     * Prints 0 if success
     */
    public function processRemove()
    {
        // check if product exists
        \$product = new Product(\$this->id_product);
        if (!Validate::isLoadedObject(\$product)) {
            exit('1');
        }

        \$context = Context::getContext();
        if (MailAlert::deleteAlert(
            (int) \$context->customer->id,
            (string) \$context->customer->email,
            (int) \$product->id,
            (int) \$this->id_product_attribute,
            (int) \$context->shop->id
        )) {
            exit('0');
        }

        exit('1');
    }

    /**
     * Add a favorite product.
     */
    public function processAdd()
    {
        \$context = Context::getContext();

        if (\$context->customer->isLogged()) {
            \$id_customer = (int) \$context->customer->id;
            \$customer = new Customer(\$id_customer);
            \$customer_email = (string) \$customer->email;
        } elseif (Validate::isEmail((string) Tools::getValue('customer_email'))) {
            \$customer_email = (string) Tools::getValue('customer_email');
            \$customer = \$context->customer->getByEmail(\$customer_email);
            \$id_customer = (isset(\$customer->id) && (\$customer->id != null)) ? (int) \$customer->id : 0;
        } else {
            exit(json_encode(
                [
                    'error' => true,
                    'message' => \$this->trans('Your email address is invalid.', [], 'Modules.Emailalerts.Shop'),
                ]
            ));
        }

        \$id_product = (int) Tools::getValue('id_product');
        \$id_product_attribute = (int) Tools::getValue('id_product_attribute');
        \$id_shop = (int) \$context->shop->id;
        \$id_lang = (int) \$context->language->id;
        \$product = new Product(\$id_product, false, \$id_lang, \$id_shop, \$context);

        \$mail_alert = MailAlert::customerHasNotification(\$id_customer, \$id_product, \$id_product_attribute, \$id_shop, null, \$customer_email);

        if (\$mail_alert) {
            exit(json_encode(
                [
                    'error' => true,
                    'message' => \$this->trans('You already have set an alert for this product.', [], 'Modules.Emailalerts.Shop'),
                ]
            ));
        } elseif (!Validate::isLoadedObject(\$product)) {
            exit(json_encode(
                [
                    'error' => true,
                    'message' => \$this->trans('Your email address is invalid.', [], 'Modules.Emailalerts.Shop'),
                ]
            ));
        }

        \$mail_alert = new MailAlert();

        \$mail_alert->id_customer = \$id_customer;
        \$mail_alert->customer_email = \$customer_email;
        \$mail_alert->id_product = \$id_product;
        \$mail_alert->id_product_attribute = \$id_product_attribute;
        \$mail_alert->id_shop = \$id_shop;
        \$mail_alert->id_lang = \$id_lang;

        if (\$mail_alert->add() !== false) {
            exit(json_encode(
                [
                    'error' => false,
                    'message' => \$this->trans('Request notification registered', [], 'Modules.Emailalerts.Shop'),
                ]
            ));
        }

        exit(json_encode(
            [
                'error' => true,
                'message' => \$this->trans('Your email address is invalid.', [], 'Modules.Emailalerts.Shop'),
            ]
        ));
    }

    /**
     * Add a favorite product.
     */
    public function processCheck()
    {
        if (!(int) \$this->context->customer->logged) {
            exit('0');
        }

        \$id_customer = (int) \$this->context->customer->id;

        if (!\$id_product = (int) Tools::getValue('id_product')) {
            exit('0');
        }

        \$id_product_attribute = (int) Tools::getValue('id_product_attribute');

        if (MailAlert::customerHasNotification(\$id_customer, \$id_product, \$id_product_attribute, (int) \$this->context->shop->id)) {
            exit('1');
        }

        exit('0');
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_emailalerts/controllers/front/actions.php";
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
 * @since 1.5.0
 */
class Ps_EmailAlertsActionsModuleFrontController extends ModuleFrontController
{
    /**
     * @var int
     */
    public \$id_product;
    public \$id_product_attribute;

    public function init()
    {
        parent::init();

        require_once \$this->module->getLocalPath() . 'MailAlert.php';
        \$this->id_product = (int) Tools::getValue('id_product');
        \$this->id_product_attribute = (int) Tools::getValue('id_product_attribute');
    }

    public function postProcess()
    {
        if (Tools::getValue('process') == 'remove') {
            \$this->processRemove();
        } elseif (Tools::getValue('process') == 'add') {
            \$this->processAdd();
        } elseif (Tools::getValue('process') == 'check') {
            \$this->processCheck();
        }
    }

    /**
     * Remove product alert.
     * Prints 0 if success
     */
    public function processRemove()
    {
        // check if product exists
        \$product = new Product(\$this->id_product);
        if (!Validate::isLoadedObject(\$product)) {
            exit('1');
        }

        \$context = Context::getContext();
        if (MailAlert::deleteAlert(
            (int) \$context->customer->id,
            (string) \$context->customer->email,
            (int) \$product->id,
            (int) \$this->id_product_attribute,
            (int) \$context->shop->id
        )) {
            exit('0');
        }

        exit('1');
    }

    /**
     * Add a favorite product.
     */
    public function processAdd()
    {
        \$context = Context::getContext();

        if (\$context->customer->isLogged()) {
            \$id_customer = (int) \$context->customer->id;
            \$customer = new Customer(\$id_customer);
            \$customer_email = (string) \$customer->email;
        } elseif (Validate::isEmail((string) Tools::getValue('customer_email'))) {
            \$customer_email = (string) Tools::getValue('customer_email');
            \$customer = \$context->customer->getByEmail(\$customer_email);
            \$id_customer = (isset(\$customer->id) && (\$customer->id != null)) ? (int) \$customer->id : 0;
        } else {
            exit(json_encode(
                [
                    'error' => true,
                    'message' => \$this->trans('Your email address is invalid.', [], 'Modules.Emailalerts.Shop'),
                ]
            ));
        }

        \$id_product = (int) Tools::getValue('id_product');
        \$id_product_attribute = (int) Tools::getValue('id_product_attribute');
        \$id_shop = (int) \$context->shop->id;
        \$id_lang = (int) \$context->language->id;
        \$product = new Product(\$id_product, false, \$id_lang, \$id_shop, \$context);

        \$mail_alert = MailAlert::customerHasNotification(\$id_customer, \$id_product, \$id_product_attribute, \$id_shop, null, \$customer_email);

        if (\$mail_alert) {
            exit(json_encode(
                [
                    'error' => true,
                    'message' => \$this->trans('You already have set an alert for this product.', [], 'Modules.Emailalerts.Shop'),
                ]
            ));
        } elseif (!Validate::isLoadedObject(\$product)) {
            exit(json_encode(
                [
                    'error' => true,
                    'message' => \$this->trans('Your email address is invalid.', [], 'Modules.Emailalerts.Shop'),
                ]
            ));
        }

        \$mail_alert = new MailAlert();

        \$mail_alert->id_customer = \$id_customer;
        \$mail_alert->customer_email = \$customer_email;
        \$mail_alert->id_product = \$id_product;
        \$mail_alert->id_product_attribute = \$id_product_attribute;
        \$mail_alert->id_shop = \$id_shop;
        \$mail_alert->id_lang = \$id_lang;

        if (\$mail_alert->add() !== false) {
            exit(json_encode(
                [
                    'error' => false,
                    'message' => \$this->trans('Request notification registered', [], 'Modules.Emailalerts.Shop'),
                ]
            ));
        }

        exit(json_encode(
            [
                'error' => true,
                'message' => \$this->trans('Your email address is invalid.', [], 'Modules.Emailalerts.Shop'),
            ]
        ));
    }

    /**
     * Add a favorite product.
     */
    public function processCheck()
    {
        if (!(int) \$this->context->customer->logged) {
            exit('0');
        }

        \$id_customer = (int) \$this->context->customer->id;

        if (!\$id_product = (int) Tools::getValue('id_product')) {
            exit('0');
        }

        \$id_product_attribute = (int) Tools::getValue('id_product_attribute');

        if (MailAlert::customerHasNotification(\$id_customer, \$id_product, \$id_product_attribute, (int) \$this->context->shop->id)) {
            exit('1');
        }

        exit('0');
    }
}
", "@Modules/ps_emailalerts/controllers/front/actions.php", "/var/www/html/modules/ps_emailalerts/controllers/front/actions.php");
    }
}
