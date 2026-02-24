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

/* @Modules/psgdpr/controllers/admin/AdminDownloadInvoicesPsgdprController.php */
class __TwigTemplate_ac035b4e58d61a10e5dc3797c6df630c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/psgdpr/controllers/admin/AdminDownloadInvoicesPsgdprController.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/psgdpr/controllers/admin/AdminDownloadInvoicesPsgdprController.php"));

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
class AdminDownloadInvoicesPsgdprController extends ModuleAdminController
{
    /**
     * Download invoice
     */
    public function postProcess()
    {
        \$id_customer = (int) Tools::getValue('id_customer');

        if (!empty(\$id_customer)) {
            \$this->downloadInvoices(\$id_customer);
        }
    }

    /**
     * download all invoices from specific customer into one .pdf file
     *
     * @param int \$id_customer
     */
    public function downloadInvoices(\$id_customer)
    {
        \$order_invoice_collection = \$this->getCustomerInvoiceList(\$id_customer);

        if (empty(\$order_invoice_collection)) {
            return;
        }

        \$this->generatePDF(\$order_invoice_collection, PDF::TEMPLATE_INVOICE);
    }

    /**
     * get all the invoices from specific customer into a list
     *
     * @param int \$id_customer
     *
     * @return array|ObjectModel[]
     *
     * @throws PrestaShopDatabaseException
     * @throws PrestaShopException
     */
    public function getCustomerInvoiceList(\$id_customer)
    {
        \$order_invoice_list = Db::getInstance()->executeS('SELECT oi.*
            FROM `' . _DB_PREFIX_ . 'order_invoice` oi
            LEFT JOIN `' . _DB_PREFIX_ . 'orders` o ON (o.`id_order` = oi.`id_order`)
            WHERE o.id_customer =' . (int) \$id_customer . '
            AND oi.number > 0');

        if (empty(\$order_invoice_list)) {
            return [];
        }

        return ObjectModel::hydrateCollection('OrderInvoice', \$order_invoice_list);
    }

    /**
     * generate a .pdf file
     *
     * @param ObjectModel[] \$object
     * @param string \$template
     *
     * @throws PrestaShopException
     */
    public function generatePDF(\$object, \$template)
    {
        \$pdf = new PDF(\$object, \$template, Context::getContext()->smarty);
        \$pdf->render(true);
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/psgdpr/controllers/admin/AdminDownloadInvoicesPsgdprController.php";
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
class AdminDownloadInvoicesPsgdprController extends ModuleAdminController
{
    /**
     * Download invoice
     */
    public function postProcess()
    {
        \$id_customer = (int) Tools::getValue('id_customer');

        if (!empty(\$id_customer)) {
            \$this->downloadInvoices(\$id_customer);
        }
    }

    /**
     * download all invoices from specific customer into one .pdf file
     *
     * @param int \$id_customer
     */
    public function downloadInvoices(\$id_customer)
    {
        \$order_invoice_collection = \$this->getCustomerInvoiceList(\$id_customer);

        if (empty(\$order_invoice_collection)) {
            return;
        }

        \$this->generatePDF(\$order_invoice_collection, PDF::TEMPLATE_INVOICE);
    }

    /**
     * get all the invoices from specific customer into a list
     *
     * @param int \$id_customer
     *
     * @return array|ObjectModel[]
     *
     * @throws PrestaShopDatabaseException
     * @throws PrestaShopException
     */
    public function getCustomerInvoiceList(\$id_customer)
    {
        \$order_invoice_list = Db::getInstance()->executeS('SELECT oi.*
            FROM `' . _DB_PREFIX_ . 'order_invoice` oi
            LEFT JOIN `' . _DB_PREFIX_ . 'orders` o ON (o.`id_order` = oi.`id_order`)
            WHERE o.id_customer =' . (int) \$id_customer . '
            AND oi.number > 0');

        if (empty(\$order_invoice_list)) {
            return [];
        }

        return ObjectModel::hydrateCollection('OrderInvoice', \$order_invoice_list);
    }

    /**
     * generate a .pdf file
     *
     * @param ObjectModel[] \$object
     * @param string \$template
     *
     * @throws PrestaShopException
     */
    public function generatePDF(\$object, \$template)
    {
        \$pdf = new PDF(\$object, \$template, Context::getContext()->smarty);
        \$pdf->render(true);
    }
}
", "@Modules/psgdpr/controllers/admin/AdminDownloadInvoicesPsgdprController.php", "/var/www/html/modules/psgdpr/controllers/admin/AdminDownloadInvoicesPsgdprController.php");
    }
}
