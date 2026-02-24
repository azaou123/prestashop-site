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

/* @Modules/psgdpr/classes/HTMLTemplatePSGDPRModule.php */
class __TwigTemplate_744f6d567b8fb8a8b2bd87f01dd94cab extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/psgdpr/classes/HTMLTemplatePSGDPRModule.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/psgdpr/classes/HTMLTemplatePSGDPRModule.php"));

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

// require _PS_MODULE_DIR_.'psgdpr/psgdpr.php';

class HTMLTemplatePSGDPRModule extends HTMLTemplate
{
    /**
     * @var array
     */
    public \$personalData;

    /**
     * @var bool
     */
    public \$available_in_your_account = false;

    /**
     * @var Context
     */
    public \$context;

    /**
     * @param array \$personalData
     * @param Smarty \$smarty
     *
     * @throws PrestaShopException
     */
    public function __construct(\$personalData, Smarty \$smarty)
    {
        \$this->personalData = \$personalData;
        \$this->smarty = \$smarty;
        \$this->context = Context::getContext();

        \$firstname = \$this->personalData['prestashopData']['customerInfo']['firstname'];
        \$lastname = \$this->personalData['prestashopData']['customerInfo']['lastname'];
        \$this->title = \$firstname . ' ' . \$lastname;
        \$this->date = Tools::displayDate(date('Y-m-d H:i:s'));

        \$this->shop = new Shop((int) Context::getContext()->shop->id);
    }

    /**
     * Returns the template's HTML footer
     *
     * @return string HTML footer
     *
     * @throws SmartyException
     */
    public function getFooter()
    {
        \$shop_address = \$this->getShopAddress();
        \$this->smarty->assign([
            'available_in_your_account' => \$this->available_in_your_account,
            'shop_address' => \$shop_address,
            'shop_fax' => Configuration::get('PS_SHOP_FAX'),
            'shop_phone' => Configuration::get('PS_SHOP_PHONE'),
            'shop_details' => Configuration::get('PS_SHOP_DETAILS'),
            'free_text' => '',
        ]);

        return \$this->smarty->fetch(\$this->getTemplate('footer'));
    }

    /**
     * Returns the template's HTML content
     *
     * @return string HTML content
     *
     * @throws SmartyException
     */
    public function getContent()
    {
        // Generate smarty data
        \$this->smarty->assign([
            'customerInfo' => \$this->personalData['prestashopData']['customerInfo'],
            'addresses' => \$this->personalData['prestashopData']['addresses'],
            'orders' => \$this->personalData['prestashopData']['orders'],
            'carts' => \$this->personalData['prestashopData']['carts'],
            'messages' => \$this->personalData['prestashopData']['messages'],
            'connections' => \$this->personalData['prestashopData']['connections'],
            'modules' => \$this->personalData['modulesData'],
        ]);

        // Generate templates after, to be able to reuse data above
        \$this->smarty->assign([
            'style_tab' => \$this->smarty->fetch(\$this->getGDPRTemplate('personalData.style-tab')),
            'generalInfo_tab' => \$this->smarty->fetch(\$this->getGDPRTemplate('personalData.generalInfo-tab')),
            'orders_tab' => \$this->smarty->fetch(\$this->getGDPRTemplate('personalData.orders-tab')),
            'carts_tab' => \$this->smarty->fetch(\$this->getGDPRTemplate('personalData.carts-tab')),
            'addresses_tab' => \$this->smarty->fetch(\$this->getGDPRTemplate('personalData.addresses-tab')),
            'messages_tab' => \$this->smarty->fetch(\$this->getGDPRTemplate('personalData.messages-tab')),
            'connections_tab' => \$this->smarty->fetch(\$this->getGDPRTemplate('personalData.connections-tab')),
            'modules_tab' => \$this->smarty->fetch(\$this->getGDPRTemplate('personalData.modules-tab')),
        ]);

        return \$this->smarty->fetch(\$this->getGDPRTemplate('personalData'));
    }

    /**
     * Returns the template filename
     *
     * @return string filename
     */
    public function getFilename()
    {
        return 'personalData-' . date('Y-m-d') . '.pdf';
    }

    /**
     * Returns the template filename
     *
     * @return string filename
     */
    public function getBulkFilename()
    {
        return 'personalData-' . date('Y-m-d') . '.pdf';
    }

    /**
     * If the template is not present in the theme directory, it will return the default template
     * in _PS_PDF_DIR_ directory
     *
     * @param string \$template_name
     *
     * @return string
     */
    protected function getGDPRTemplate(\$template_name)
    {
        return _PS_MODULE_DIR_ . 'psgdpr/views/templates/front/pdf/' . \$template_name . '.tpl';
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/psgdpr/classes/HTMLTemplatePSGDPRModule.php";
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

// require _PS_MODULE_DIR_.'psgdpr/psgdpr.php';

class HTMLTemplatePSGDPRModule extends HTMLTemplate
{
    /**
     * @var array
     */
    public \$personalData;

    /**
     * @var bool
     */
    public \$available_in_your_account = false;

    /**
     * @var Context
     */
    public \$context;

    /**
     * @param array \$personalData
     * @param Smarty \$smarty
     *
     * @throws PrestaShopException
     */
    public function __construct(\$personalData, Smarty \$smarty)
    {
        \$this->personalData = \$personalData;
        \$this->smarty = \$smarty;
        \$this->context = Context::getContext();

        \$firstname = \$this->personalData['prestashopData']['customerInfo']['firstname'];
        \$lastname = \$this->personalData['prestashopData']['customerInfo']['lastname'];
        \$this->title = \$firstname . ' ' . \$lastname;
        \$this->date = Tools::displayDate(date('Y-m-d H:i:s'));

        \$this->shop = new Shop((int) Context::getContext()->shop->id);
    }

    /**
     * Returns the template's HTML footer
     *
     * @return string HTML footer
     *
     * @throws SmartyException
     */
    public function getFooter()
    {
        \$shop_address = \$this->getShopAddress();
        \$this->smarty->assign([
            'available_in_your_account' => \$this->available_in_your_account,
            'shop_address' => \$shop_address,
            'shop_fax' => Configuration::get('PS_SHOP_FAX'),
            'shop_phone' => Configuration::get('PS_SHOP_PHONE'),
            'shop_details' => Configuration::get('PS_SHOP_DETAILS'),
            'free_text' => '',
        ]);

        return \$this->smarty->fetch(\$this->getTemplate('footer'));
    }

    /**
     * Returns the template's HTML content
     *
     * @return string HTML content
     *
     * @throws SmartyException
     */
    public function getContent()
    {
        // Generate smarty data
        \$this->smarty->assign([
            'customerInfo' => \$this->personalData['prestashopData']['customerInfo'],
            'addresses' => \$this->personalData['prestashopData']['addresses'],
            'orders' => \$this->personalData['prestashopData']['orders'],
            'carts' => \$this->personalData['prestashopData']['carts'],
            'messages' => \$this->personalData['prestashopData']['messages'],
            'connections' => \$this->personalData['prestashopData']['connections'],
            'modules' => \$this->personalData['modulesData'],
        ]);

        // Generate templates after, to be able to reuse data above
        \$this->smarty->assign([
            'style_tab' => \$this->smarty->fetch(\$this->getGDPRTemplate('personalData.style-tab')),
            'generalInfo_tab' => \$this->smarty->fetch(\$this->getGDPRTemplate('personalData.generalInfo-tab')),
            'orders_tab' => \$this->smarty->fetch(\$this->getGDPRTemplate('personalData.orders-tab')),
            'carts_tab' => \$this->smarty->fetch(\$this->getGDPRTemplate('personalData.carts-tab')),
            'addresses_tab' => \$this->smarty->fetch(\$this->getGDPRTemplate('personalData.addresses-tab')),
            'messages_tab' => \$this->smarty->fetch(\$this->getGDPRTemplate('personalData.messages-tab')),
            'connections_tab' => \$this->smarty->fetch(\$this->getGDPRTemplate('personalData.connections-tab')),
            'modules_tab' => \$this->smarty->fetch(\$this->getGDPRTemplate('personalData.modules-tab')),
        ]);

        return \$this->smarty->fetch(\$this->getGDPRTemplate('personalData'));
    }

    /**
     * Returns the template filename
     *
     * @return string filename
     */
    public function getFilename()
    {
        return 'personalData-' . date('Y-m-d') . '.pdf';
    }

    /**
     * Returns the template filename
     *
     * @return string filename
     */
    public function getBulkFilename()
    {
        return 'personalData-' . date('Y-m-d') . '.pdf';
    }

    /**
     * If the template is not present in the theme directory, it will return the default template
     * in _PS_PDF_DIR_ directory
     *
     * @param string \$template_name
     *
     * @return string
     */
    protected function getGDPRTemplate(\$template_name)
    {
        return _PS_MODULE_DIR_ . 'psgdpr/views/templates/front/pdf/' . \$template_name . '.tpl';
    }
}
", "@Modules/psgdpr/classes/HTMLTemplatePSGDPRModule.php", "/var/www/html/modules/psgdpr/classes/HTMLTemplatePSGDPRModule.php");
    }
}
