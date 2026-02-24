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

/* @Modules/psgdpr/views/templates/admin/menu.tpl */
class __TwigTemplate_030da544eab80cae1b91a0d278608451 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/psgdpr/views/templates/admin/menu.tpl"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/psgdpr/views/templates/admin/menu.tpl"));

        // line 1
        echo "{**
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
 *}

<div id=\"modulecontent\" class=\"clearfix\">
    <div id=\"psgdpr-menu\">
        <div class=\"col-lg-2\">
            <div class=\"list-group\" v-on:click.prevent>
                <a href=\"#\" class=\"list-group-item\" v-bind:class=\"{ 'active': isActive('getStarted') }\" v-on:click=\"makeActive('getStarted')\"><i class=\"fa fa-gavel\"></i> {l s='Get started' mod='psgdpr'}</a>
                <a href=\"#\" class=\"list-group-item\" v-bind:class=\"{ 'active': isActive('dataConfig') }\" v-on:click=\"makeActive('dataConfig')\"><i class=\"fa fa-user-secret\"></i> {l s='Personal data management' mod='psgdpr'}</a>
                <a href=\"#\" class=\"list-group-item\" v-bind:class=\"{ 'active': isActive('dataConsent') }\" v-on:click=\"makeActive('dataConsent')\"><i class=\"fa fa-check-square\"></i> {l s='Consent checkbox customization' mod='psgdpr'}</a>
                <a href=\"#\" class=\"list-group-item\" v-bind:class=\"{ 'active': isActive('customerActivity') }\" v-on:click=\"makeActive('customerActivity')\"><i class=\"fa fa-user-circle\"></i> {l s='Customer activity tracking' mod='psgdpr'}</a>
                <a href=\"#\" class=\"list-group-item\" v-bind:class=\"{ 'active': isActive('faq') }\" v-on:click=\"makeActive('faq')\"><i class=\"fa fa-question-circle\"></i> {l s='Help' mod='psgdpr'}</a>
            </div>
            <div class=\"list-group\" v-on:click.prevent>
                <a class=\"list-group-item\" style=\"text-align:center\"><i class=\"icon-info\"></i> {l s='Version' mod='psgdpr'} {\$module_version|escape:'htmlall':'UTF-8'} | <i class=\"icon-info\"></i> PrestaShop {\$ps_version|escape:'htmlall':'UTF-8'}</a>
            </div>
        </div>
    </div>

    {* list your admin tpl *}
    <div id=\"getStarted\" class=\"psgdpr_menu addons-hide\">
        {include file=\"./tabs/getStarted.tpl\"}
    </div>

    <div id=\"dataConfig\" class=\"psgdpr_menu addons-hide\">
        {include file=\"./tabs/dataConfig.tpl\"}
    </div>

    <div id=\"dataConsent\" class=\"psgdpr_menu addons-hide\">
        {include file=\"./tabs/dataConsent.tpl\"}
    </div>

    <div id=\"customerActivity\" class=\"psgdpr_menu addons-hide\">
        {include file=\"./tabs/customerActivity.tpl\"}
    </div>

    <div id=\"faq\" class=\"psgdpr_menu addons-hide\">
        {include file=\"./tabs/help.tpl\"}
    </div>

</div>

{* Use this if you want to send php var to your js *}
<script type=\"text/javascript\">
    var base_url = \"{\$ps_base_dir|escape:'htmlall':'UTF-8'}\";
    var isPs17 = \"{\$isPs17|escape:'htmlall':'UTF-8'}\";
    var moduleName = \"{\$module_name|escape:'htmlall':'UTF-8'}\";
    var currentPage = \"{\$currentPage|escape:'htmlall':'UTF-8'}\";
    var moduleAdminLink = \"{\$moduleAdminLink|escape:'htmlall':'UTF-8'}\";
    var psgdpr_adminController = \"{\$psgdpr_adminController|escape:'htmlall':'UTF-8'}\";
    var adminControllerInvoices = \"{\$adminControllerInvoices|escape:'htmlall':'UTF-8'}\";
    var ps_version = \"{\$isPs17|escape:'htmlall':'UTF-8'}\";
    var customer_link = \"{url entity='sf' route='admin_customers_view' sf-params=['customerId' => '0']}\";

    var messageSuccessCopy = \"{l s='Url has been copied to the clipboard!' mod='psgdpr' js=1}\";
    var messageSuccessInvoices = \"{l s='Invoices have been successfully downloaded.' mod='psgdpr' js=1}\";
    var messageErrorInvoices = \"{l s='No invoices available for this customer.' mod='psgdpr' js=1}\";
    var messageDeleteTitle = \"{l s='Are you sure?' mod='psgdpr' js=1}\";
    var messageDeleteText = \"{l s='Attention! This action is irreversible. Please make sure you have downloaded all of the customer’s invoices (if he has any) before clicking on Confirm erasure.' mod='psgdpr' js=1}\";
    var messageDeleteCancelText = \"{l s='Cancel action' mod='psgdpr' js=1}\";
    var messageDeleteConfirmText = \"{l s='Confirm Erasure' mod='psgdpr' js=1}\";
    var messageDeleteSuccess = \"{l s='The customer\\'s data has been successfully deleted!' mod='psgdpr' js=1}\";
    var datatableExport = \"{l s='Export' mod='psgdpr' js=1}\";
</script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/psgdpr/views/templates/admin/menu.tpl";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{**
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
 *}

<div id=\"modulecontent\" class=\"clearfix\">
    <div id=\"psgdpr-menu\">
        <div class=\"col-lg-2\">
            <div class=\"list-group\" v-on:click.prevent>
                <a href=\"#\" class=\"list-group-item\" v-bind:class=\"{ 'active': isActive('getStarted') }\" v-on:click=\"makeActive('getStarted')\"><i class=\"fa fa-gavel\"></i> {l s='Get started' mod='psgdpr'}</a>
                <a href=\"#\" class=\"list-group-item\" v-bind:class=\"{ 'active': isActive('dataConfig') }\" v-on:click=\"makeActive('dataConfig')\"><i class=\"fa fa-user-secret\"></i> {l s='Personal data management' mod='psgdpr'}</a>
                <a href=\"#\" class=\"list-group-item\" v-bind:class=\"{ 'active': isActive('dataConsent') }\" v-on:click=\"makeActive('dataConsent')\"><i class=\"fa fa-check-square\"></i> {l s='Consent checkbox customization' mod='psgdpr'}</a>
                <a href=\"#\" class=\"list-group-item\" v-bind:class=\"{ 'active': isActive('customerActivity') }\" v-on:click=\"makeActive('customerActivity')\"><i class=\"fa fa-user-circle\"></i> {l s='Customer activity tracking' mod='psgdpr'}</a>
                <a href=\"#\" class=\"list-group-item\" v-bind:class=\"{ 'active': isActive('faq') }\" v-on:click=\"makeActive('faq')\"><i class=\"fa fa-question-circle\"></i> {l s='Help' mod='psgdpr'}</a>
            </div>
            <div class=\"list-group\" v-on:click.prevent>
                <a class=\"list-group-item\" style=\"text-align:center\"><i class=\"icon-info\"></i> {l s='Version' mod='psgdpr'} {\$module_version|escape:'htmlall':'UTF-8'} | <i class=\"icon-info\"></i> PrestaShop {\$ps_version|escape:'htmlall':'UTF-8'}</a>
            </div>
        </div>
    </div>

    {* list your admin tpl *}
    <div id=\"getStarted\" class=\"psgdpr_menu addons-hide\">
        {include file=\"./tabs/getStarted.tpl\"}
    </div>

    <div id=\"dataConfig\" class=\"psgdpr_menu addons-hide\">
        {include file=\"./tabs/dataConfig.tpl\"}
    </div>

    <div id=\"dataConsent\" class=\"psgdpr_menu addons-hide\">
        {include file=\"./tabs/dataConsent.tpl\"}
    </div>

    <div id=\"customerActivity\" class=\"psgdpr_menu addons-hide\">
        {include file=\"./tabs/customerActivity.tpl\"}
    </div>

    <div id=\"faq\" class=\"psgdpr_menu addons-hide\">
        {include file=\"./tabs/help.tpl\"}
    </div>

</div>

{* Use this if you want to send php var to your js *}
<script type=\"text/javascript\">
    var base_url = \"{\$ps_base_dir|escape:'htmlall':'UTF-8'}\";
    var isPs17 = \"{\$isPs17|escape:'htmlall':'UTF-8'}\";
    var moduleName = \"{\$module_name|escape:'htmlall':'UTF-8'}\";
    var currentPage = \"{\$currentPage|escape:'htmlall':'UTF-8'}\";
    var moduleAdminLink = \"{\$moduleAdminLink|escape:'htmlall':'UTF-8'}\";
    var psgdpr_adminController = \"{\$psgdpr_adminController|escape:'htmlall':'UTF-8'}\";
    var adminControllerInvoices = \"{\$adminControllerInvoices|escape:'htmlall':'UTF-8'}\";
    var ps_version = \"{\$isPs17|escape:'htmlall':'UTF-8'}\";
    var customer_link = \"{url entity='sf' route='admin_customers_view' sf-params=['customerId' => '0']}\";

    var messageSuccessCopy = \"{l s='Url has been copied to the clipboard!' mod='psgdpr' js=1}\";
    var messageSuccessInvoices = \"{l s='Invoices have been successfully downloaded.' mod='psgdpr' js=1}\";
    var messageErrorInvoices = \"{l s='No invoices available for this customer.' mod='psgdpr' js=1}\";
    var messageDeleteTitle = \"{l s='Are you sure?' mod='psgdpr' js=1}\";
    var messageDeleteText = \"{l s='Attention! This action is irreversible. Please make sure you have downloaded all of the customer’s invoices (if he has any) before clicking on Confirm erasure.' mod='psgdpr' js=1}\";
    var messageDeleteCancelText = \"{l s='Cancel action' mod='psgdpr' js=1}\";
    var messageDeleteConfirmText = \"{l s='Confirm Erasure' mod='psgdpr' js=1}\";
    var messageDeleteSuccess = \"{l s='The customer\\'s data has been successfully deleted!' mod='psgdpr' js=1}\";
    var datatableExport = \"{l s='Export' mod='psgdpr' js=1}\";
</script>
", "@Modules/psgdpr/views/templates/admin/menu.tpl", "/var/www/html/modules/psgdpr/views/templates/admin/menu.tpl");
    }
}
