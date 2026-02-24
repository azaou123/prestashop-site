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

/* @Modules/psgdpr/controllers/admin/AdminAjaxPsgdprController.php */
class __TwigTemplate_f3c1183910b728211554bfc2cb91ccb8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/psgdpr/controllers/admin/AdminAjaxPsgdprController.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/psgdpr/controllers/admin/AdminAjaxPsgdprController.php"));

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
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 */
class AdminAjaxPsgdprController extends ModuleAdminController
{
    /**
     * @var Psgdpr
     */
    public \$module;

    /**
     * This function allow to delete users
     */
    public function ajaxProcessDeleteCustomer()
    {
        \$delete = Tools::getValue('delete');
        \$value = Tools::getValue('value');
        \$this->module->deleteCustomer(\$delete, \$value);
    }

    /**
     * Return all customers matches for the search
     *
     * @throws PrestaShopDatabaseException
     */
    public function ajaxProcessSearchCustomers()
    {
        \$searches = explode(' ', Tools::getValue('customer_search'));
        \$customers = [];
        \$searches = array_unique(\$searches);
        foreach (\$searches as \$search) {
            if (!empty(\$search) && \$results = Customer::searchByName(\$search, 50)) {
                foreach (\$results as \$result) {
                    if (\$result['active']) {
                        \$result['fullname_and_email'] = \$result['firstname'] . ' ' . \$result['lastname'] . ' - ' . \$result['email'];
                        \$customers[\$result['id_customer']] = \$result;
                    }
                }
            }
        }
        if (!empty(\$customers) && !Tools::getValue('sf2')) {
            \$customerList = [];
            foreach (\$customers as \$customer) {
                array_push(\$customerList, [
                    'id_customer' => \$customer['id_customer'],
                    'firstname' => \$customer['firstname'],
                    'lastname' => \$customer['lastname'],
                    'email' => \$customer['email'],
                    'birthday' => \$customer['birthday'],
                    'nb_orders' => Order::getCustomerNbOrders(\$customer['id_customer']),
                    'customerData' => [],
                ]);
            }
            \$to_return = [
                'customers' => \$customerList,
                'found' => true,
            ];
        } else {
            \$to_return = Tools::getValue('sf2') ? [] : ['found' => false];
        }
        \$this->ajaxDie(json_encode(\$to_return));
    }

    /**
     * Return all collected for the giver customer
     *
     * @throws PrestaShopException
     */
    public function ajaxProcessGetCustomerData()
    {
        \$delete = Tools::getValue('delete');
        \$value = Tools::getValue('value');

        \$return = \$this->module->getCustomerData(\$delete, \$value);

        \$this->ajaxDie(json_encode(\$return['data']));
    }

    /**
     * check if there are orders associated to the customer
     *
     * @throws PrestaShopDatabaseException
     */
    public function ajaxProcessDownloadInvoicesByCustomer()
    {
        \$id_customer = Tools::getValue('id_customer');

        \$order_invoice_list = (int) Db::getInstance()->getValue('SELECT COUNT(1)
            FROM `' . _DB_PREFIX_ . 'order_invoice` oi
            LEFT JOIN `' . _DB_PREFIX_ . 'orders` o ON (o.`id_order` = oi.`id_order`)
            WHERE o.id_customer =' . (int) \$id_customer . '
            AND oi.number > 0');

        \$this->ajaxDie(json_encode(\$order_invoice_list));
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/psgdpr/controllers/admin/AdminAjaxPsgdprController.php";
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
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 */
class AdminAjaxPsgdprController extends ModuleAdminController
{
    /**
     * @var Psgdpr
     */
    public \$module;

    /**
     * This function allow to delete users
     */
    public function ajaxProcessDeleteCustomer()
    {
        \$delete = Tools::getValue('delete');
        \$value = Tools::getValue('value');
        \$this->module->deleteCustomer(\$delete, \$value);
    }

    /**
     * Return all customers matches for the search
     *
     * @throws PrestaShopDatabaseException
     */
    public function ajaxProcessSearchCustomers()
    {
        \$searches = explode(' ', Tools::getValue('customer_search'));
        \$customers = [];
        \$searches = array_unique(\$searches);
        foreach (\$searches as \$search) {
            if (!empty(\$search) && \$results = Customer::searchByName(\$search, 50)) {
                foreach (\$results as \$result) {
                    if (\$result['active']) {
                        \$result['fullname_and_email'] = \$result['firstname'] . ' ' . \$result['lastname'] . ' - ' . \$result['email'];
                        \$customers[\$result['id_customer']] = \$result;
                    }
                }
            }
        }
        if (!empty(\$customers) && !Tools::getValue('sf2')) {
            \$customerList = [];
            foreach (\$customers as \$customer) {
                array_push(\$customerList, [
                    'id_customer' => \$customer['id_customer'],
                    'firstname' => \$customer['firstname'],
                    'lastname' => \$customer['lastname'],
                    'email' => \$customer['email'],
                    'birthday' => \$customer['birthday'],
                    'nb_orders' => Order::getCustomerNbOrders(\$customer['id_customer']),
                    'customerData' => [],
                ]);
            }
            \$to_return = [
                'customers' => \$customerList,
                'found' => true,
            ];
        } else {
            \$to_return = Tools::getValue('sf2') ? [] : ['found' => false];
        }
        \$this->ajaxDie(json_encode(\$to_return));
    }

    /**
     * Return all collected for the giver customer
     *
     * @throws PrestaShopException
     */
    public function ajaxProcessGetCustomerData()
    {
        \$delete = Tools::getValue('delete');
        \$value = Tools::getValue('value');

        \$return = \$this->module->getCustomerData(\$delete, \$value);

        \$this->ajaxDie(json_encode(\$return['data']));
    }

    /**
     * check if there are orders associated to the customer
     *
     * @throws PrestaShopDatabaseException
     */
    public function ajaxProcessDownloadInvoicesByCustomer()
    {
        \$id_customer = Tools::getValue('id_customer');

        \$order_invoice_list = (int) Db::getInstance()->getValue('SELECT COUNT(1)
            FROM `' . _DB_PREFIX_ . 'order_invoice` oi
            LEFT JOIN `' . _DB_PREFIX_ . 'orders` o ON (o.`id_order` = oi.`id_order`)
            WHERE o.id_customer =' . (int) \$id_customer . '
            AND oi.number > 0');

        \$this->ajaxDie(json_encode(\$order_invoice_list));
    }
}
", "@Modules/psgdpr/controllers/admin/AdminAjaxPsgdprController.php", "/var/www/html/modules/psgdpr/controllers/admin/AdminAjaxPsgdprController.php");
    }
}
