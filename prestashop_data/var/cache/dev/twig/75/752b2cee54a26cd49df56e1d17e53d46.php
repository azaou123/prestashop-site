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

/* @Modules/dashactivity/views/templates/hook/dashboard_zone_one.tpl */
class __TwigTemplate_b0a196b4b2cc716c2c68a617fb1d9110 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/dashactivity/views/templates/hook/dashboard_zone_one.tpl"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/dashactivity/views/templates/hook/dashboard_zone_one.tpl"));

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
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 *}
<section id=\"dashactivity\" class=\"panel widget\">
\t<div class=\"panel-heading\">
\t\t<i class=\"icon-time\"></i> {l s='Activity overview' d='Modules.Dashactivity.Admin'}
\t\t<span class=\"panel-heading-action\">
\t\t\t<a class=\"list-toolbar-btn\" href=\"#\" onclick=\"toggleDashConfig('dashactivity'); return false;\" title=\"{l s='Configure' d='Admin.Actions'}\">
\t\t\t\t<i class=\"process-icon-configure\"></i>
\t\t\t</a>
\t\t\t<a class=\"list-toolbar-btn\" href=\"#\" onclick=\"refreshDashboard('dashactivity'); return false;\" title=\"{l s='Refresh' d='Admin.Actions'}\">
\t\t\t\t<i class=\"process-icon-refresh\"></i>
\t\t\t</a>
\t\t</span>
\t</div>
\t<section id=\"dashactivity_config\" class=\"dash_config hide\">
\t\t<header><i class=\"icon-wrench\"></i> {l s='Configuration' d='Admin.Global'}</header>
\t\t{\$dashactivity_config_form}
\t</section>
\t<section id=\"dash_live\" class=\"loading\">
\t\t<ul class=\"data_list_large\">
\t\t\t{if Module::isEnabled('statslive')}
\t\t\t<li>
\t\t\t\t<span class=\"data_label size_l\">
\t\t\t\t\t<a href=\"{\$link->getAdminLink('AdminStats')|escape:'html':'UTF-8'}&amp;module=statslive\">{l s='Online Visitors' d='Modules.Dashactivity.Admin'}</a>
\t\t\t\t\t<small class=\"text-muted\"><br/>
\t\t\t\t\t\t{l s='in the last %d minutes' sprintf=\$DASHACTIVITY_VISITOR_ONLINE|intval d='Modules.Dashactivity.Admin'}
\t\t\t\t\t</small>
\t\t\t\t</span>
\t\t\t\t<span class=\"data_value size_xxl\">
\t\t\t\t\t<span id=\"online_visitor\"></span>
\t\t\t\t</span>
\t\t\t</li>
\t\t\t{/if}
\t\t\t<li>
\t\t\t\t<span class=\"data_label size_l\">
\t\t\t\t\t<a href=\"{\$link->getAdminLink('AdminCarts')|escape:'html':'UTF-8'}\">{l s='Active Shopping Carts' d='Modules.Dashactivity.Admin'}</a>
\t\t\t\t\t<small class=\"text-muted\"><br/>
\t\t\t\t\t\t{l s='in the last %d minutes' sprintf=\$DASHACTIVITY_CART_ACTIVE|intval d='Modules.Dashactivity.Admin'}
\t\t\t\t\t</small>
\t\t\t\t</span>
\t\t\t\t<span class=\"data_value size_xxl\">
\t\t\t\t\t<span id=\"active_shopping_cart\"></span>
\t\t\t\t</span>
\t\t\t</li>
\t\t</ul>
\t</section>
\t<section id=\"dash_pending\" class=\"loading\">
\t\t<header><i class=\"icon-time\"></i> {l s='Currently Pending' d='Modules.Dashactivity.Admin'}</header>
\t\t<ul class=\"data_list\">
\t\t\t<li>
\t\t\t\t<span class=\"data_label\"><a href=\"{\$link->getAdminLink('AdminOrders')|escape:'html':'UTF-8'}\">{l s='Orders' d='Admin.Global'}</a></span>
\t\t\t\t<span class=\"data_value size_l\">
\t\t\t\t\t<span id=\"pending_orders\"></span>
\t\t\t\t</span>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<span class=\"data_label\"><a href=\"{\$link->getAdminLink('AdminReturn')|escape:'html':'UTF-8'}\">{l s='Return/Exchanges' d='Modules.Dashactivity.Admin'}</a></span>
\t\t\t\t<span class=\"data_value size_l\">
\t\t\t\t\t<span id=\"return_exchanges\"></span>
\t\t\t\t</span>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<span class=\"data_label\"><a href=\"{\$link->getAdminLink('AdminCarts')|escape:'html':'UTF-8'}\">{l s='Abandoned Carts' d='Admin.Global'}</a></span>
\t\t\t\t<span class=\"data_value size_l\">
\t\t\t\t\t<span id=\"abandoned_cart\"></span>
\t\t\t\t</span>
\t\t\t</li>
\t\t\t{if isset(\$stock_management) && \$stock_management}
\t\t\t\t<li>
\t\t\t\t\t<span class=\"data_label\"><a href=\"{\$link->getAdminLink('AdminTracking')|escape:'html':'UTF-8'}\">{l s='Out of Stock Products' d='Modules.Dashactivity.Admin'}</a></span>
\t\t\t\t\t<span class=\"data_value size_l\">
\t\t\t\t\t\t<span id=\"products_out_of_stock\"></span>
\t\t\t\t\t</span>
\t\t\t\t</li>
\t\t\t{/if}
\t\t</ul>
\t</section>
\t<section id=\"dash_notifications\" class=\"loading\">
\t\t<header><i class=\"icon-exclamation-sign\"></i> {l s='Notifications' d='Admin.Advparameters.Feature'}</header>
\t\t<ul class=\"data_list_vertical\">
\t\t\t<li>
\t\t\t\t<span class=\"data_label\"><a href=\"{\$link->getAdminLink('AdminCustomerThreads')|escape:'html':'UTF-8'}\">{l s='New Messages' d='Modules.Dashactivity.Admin'}</a></span>
\t\t\t\t<span class=\"data_value size_l\">
\t\t\t\t\t<span id=\"new_messages\"></span>
\t\t\t\t</span>
\t\t\t</li>
\t\t\t{if Module::isEnabled('productcomments')}
\t\t\t\t<li>
\t\t\t\t<span class=\"data_label\"><a href=\"{\$link->getAdminLink('AdminModules')|escape:'html':'UTF-8'}&amp;configure=productcomments&amp;tab_module=front_office_features&amp;module_name=productcomments\">{l s='Product Reviews' d='Modules.Dashactivity.Admin'}</a></span>
\t\t\t\t\t<span class=\"data_value size_l\">
\t\t\t\t\t\t<span id=\"product_reviews\"></span>
\t\t\t\t\t</span>
\t\t\t\t</li>
\t\t\t{/if}
\t\t</ul>
\t</section>
\t<section id=\"dash_customers\" class=\"loading\">
\t\t<header><i class=\"icon-user\"></i> {l s='Customers & Newsletters' d='Modules.Dashactivity.Admin'} <span class=\"subtitle small\" id=\"customers-newsletters-subtitle\"></span></header>
\t\t<ul class=\"data_list\">
\t\t\t<li>
\t\t\t\t<span class=\"data_label\"><a href=\"{\$link->getAdminLink('AdminCustomers')|escape:'html':'UTF-8'}\">{l s='New Customers' d='Modules.Dashactivity.Admin'}</a></span>
\t\t\t\t<span class=\"data_value size_md\">
\t\t\t\t\t<span id=\"new_customers\"></span>
\t\t\t\t</span>
\t\t\t</li>
\t\t\t{if Module::isEnabled('statsnewsletter')}
\t\t\t<li>
\t\t\t\t<span class=\"data_label\"><a href=\"{\$link->getAdminLink('AdminStats')|escape:'html':'UTF-8'}&amp;module=statsnewsletter\">{l s='New Subscriptions' d='Modules.Dashactivity.Admin'}</a></span>
\t\t\t\t<span class=\"data_value size_md\">
\t\t\t\t\t<span id=\"new_registrations\"></span>
\t\t\t\t</span>
\t\t\t</li>
\t\t\t{/if}
\t\t\t{if Module::isEnabled('ps_emailsubscription')}
\t\t\t<li>
\t\t\t\t<span class=\"data_label\"><a href=\"{\$link->getAdminLink('AdminModules')|escape:'html':'UTF-8'}&amp;configure=ps_emailsubscription&amp;module_name=ps_emailsubscription\">{l s='Total Subscribers' d='Modules.Dashactivity.Admin'}</a></span>
\t\t\t\t<span class=\"data_value size_md\">
\t\t\t\t\t<span id=\"total_suscribers\"></span>
\t\t\t\t</span>
\t\t\t</li>
\t\t\t{/if}
\t\t</ul>
\t</section>
\t<section id=\"dash_traffic\" class=\"loading\">
\t\t<header>
\t\t\t<i class=\"icon-globe\"></i> {l s='Traffic' d='Modules.Dashactivity.Admin'} <span class=\"subtitle small\" id=\"traffic-subtitle\"></span>
\t\t</header>
\t\t<ul class=\"data_list\">
\t\t\t{if Module::isEnabled('statsforecast')}
\t\t\t<li>
\t\t\t\t<span class=\"data_label\"><a href=\"{\$link->getAdminLink('AdminStats')|escape:'html':'UTF-8'}&amp;module=statsforecast\">{l s='Visits' d='Modules.Dashactivity.Admin'}</a></span>
\t\t\t\t<span class=\"data_value size_md\">
\t\t\t\t\t<span id=\"visits\"></span>
\t\t\t\t</span>
\t\t\t</li>
\t\t\t{/if}
\t\t\t{if Module::isEnabled('statsvisits')}
\t\t\t<li>
\t\t\t\t<span class=\"data_label\"><a href=\"{\$link->getAdminLink('AdminStats')|escape:'html':'UTF-8'}&amp;module=statsvisits\">{l s='Unique Visitors' d='Modules.Dashactivity.Admin'}</a></span>
\t\t\t\t<span class=\"data_value size_md\">
\t\t\t\t\t<span id=\"unique_visitors\"></span>
\t\t\t\t</span>
\t\t\t</li>
\t\t\t{/if}
\t\t\t<li>
\t\t\t\t<span class=\"data_label\">{l s='Traffic Sources' d='Modules.Dashactivity.Admin'}</span>
\t\t\t\t<ul class=\"data_list_small\" id=\"dash_traffic_source\">
\t\t\t\t</ul>
\t\t\t\t<div id=\"dash_traffic_chart2\" class='chart with-transitions'>
\t\t\t\t\t<svg></svg>
\t\t\t\t</div>
\t\t\t</li>
\t\t</ul>
\t</section>
</section>
<script type=\"text/javascript\">
\tdate_subtitle = \"{\$date_subtitle|escape:'html':'UTF-8'}\";
\tdate_format   = \"{\$date_format|escape:'html':'UTF-8'}\";
</script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/dashactivity/views/templates/hook/dashboard_zone_one.tpl";
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
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 *}
<section id=\"dashactivity\" class=\"panel widget\">
\t<div class=\"panel-heading\">
\t\t<i class=\"icon-time\"></i> {l s='Activity overview' d='Modules.Dashactivity.Admin'}
\t\t<span class=\"panel-heading-action\">
\t\t\t<a class=\"list-toolbar-btn\" href=\"#\" onclick=\"toggleDashConfig('dashactivity'); return false;\" title=\"{l s='Configure' d='Admin.Actions'}\">
\t\t\t\t<i class=\"process-icon-configure\"></i>
\t\t\t</a>
\t\t\t<a class=\"list-toolbar-btn\" href=\"#\" onclick=\"refreshDashboard('dashactivity'); return false;\" title=\"{l s='Refresh' d='Admin.Actions'}\">
\t\t\t\t<i class=\"process-icon-refresh\"></i>
\t\t\t</a>
\t\t</span>
\t</div>
\t<section id=\"dashactivity_config\" class=\"dash_config hide\">
\t\t<header><i class=\"icon-wrench\"></i> {l s='Configuration' d='Admin.Global'}</header>
\t\t{\$dashactivity_config_form}
\t</section>
\t<section id=\"dash_live\" class=\"loading\">
\t\t<ul class=\"data_list_large\">
\t\t\t{if Module::isEnabled('statslive')}
\t\t\t<li>
\t\t\t\t<span class=\"data_label size_l\">
\t\t\t\t\t<a href=\"{\$link->getAdminLink('AdminStats')|escape:'html':'UTF-8'}&amp;module=statslive\">{l s='Online Visitors' d='Modules.Dashactivity.Admin'}</a>
\t\t\t\t\t<small class=\"text-muted\"><br/>
\t\t\t\t\t\t{l s='in the last %d minutes' sprintf=\$DASHACTIVITY_VISITOR_ONLINE|intval d='Modules.Dashactivity.Admin'}
\t\t\t\t\t</small>
\t\t\t\t</span>
\t\t\t\t<span class=\"data_value size_xxl\">
\t\t\t\t\t<span id=\"online_visitor\"></span>
\t\t\t\t</span>
\t\t\t</li>
\t\t\t{/if}
\t\t\t<li>
\t\t\t\t<span class=\"data_label size_l\">
\t\t\t\t\t<a href=\"{\$link->getAdminLink('AdminCarts')|escape:'html':'UTF-8'}\">{l s='Active Shopping Carts' d='Modules.Dashactivity.Admin'}</a>
\t\t\t\t\t<small class=\"text-muted\"><br/>
\t\t\t\t\t\t{l s='in the last %d minutes' sprintf=\$DASHACTIVITY_CART_ACTIVE|intval d='Modules.Dashactivity.Admin'}
\t\t\t\t\t</small>
\t\t\t\t</span>
\t\t\t\t<span class=\"data_value size_xxl\">
\t\t\t\t\t<span id=\"active_shopping_cart\"></span>
\t\t\t\t</span>
\t\t\t</li>
\t\t</ul>
\t</section>
\t<section id=\"dash_pending\" class=\"loading\">
\t\t<header><i class=\"icon-time\"></i> {l s='Currently Pending' d='Modules.Dashactivity.Admin'}</header>
\t\t<ul class=\"data_list\">
\t\t\t<li>
\t\t\t\t<span class=\"data_label\"><a href=\"{\$link->getAdminLink('AdminOrders')|escape:'html':'UTF-8'}\">{l s='Orders' d='Admin.Global'}</a></span>
\t\t\t\t<span class=\"data_value size_l\">
\t\t\t\t\t<span id=\"pending_orders\"></span>
\t\t\t\t</span>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<span class=\"data_label\"><a href=\"{\$link->getAdminLink('AdminReturn')|escape:'html':'UTF-8'}\">{l s='Return/Exchanges' d='Modules.Dashactivity.Admin'}</a></span>
\t\t\t\t<span class=\"data_value size_l\">
\t\t\t\t\t<span id=\"return_exchanges\"></span>
\t\t\t\t</span>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<span class=\"data_label\"><a href=\"{\$link->getAdminLink('AdminCarts')|escape:'html':'UTF-8'}\">{l s='Abandoned Carts' d='Admin.Global'}</a></span>
\t\t\t\t<span class=\"data_value size_l\">
\t\t\t\t\t<span id=\"abandoned_cart\"></span>
\t\t\t\t</span>
\t\t\t</li>
\t\t\t{if isset(\$stock_management) && \$stock_management}
\t\t\t\t<li>
\t\t\t\t\t<span class=\"data_label\"><a href=\"{\$link->getAdminLink('AdminTracking')|escape:'html':'UTF-8'}\">{l s='Out of Stock Products' d='Modules.Dashactivity.Admin'}</a></span>
\t\t\t\t\t<span class=\"data_value size_l\">
\t\t\t\t\t\t<span id=\"products_out_of_stock\"></span>
\t\t\t\t\t</span>
\t\t\t\t</li>
\t\t\t{/if}
\t\t</ul>
\t</section>
\t<section id=\"dash_notifications\" class=\"loading\">
\t\t<header><i class=\"icon-exclamation-sign\"></i> {l s='Notifications' d='Admin.Advparameters.Feature'}</header>
\t\t<ul class=\"data_list_vertical\">
\t\t\t<li>
\t\t\t\t<span class=\"data_label\"><a href=\"{\$link->getAdminLink('AdminCustomerThreads')|escape:'html':'UTF-8'}\">{l s='New Messages' d='Modules.Dashactivity.Admin'}</a></span>
\t\t\t\t<span class=\"data_value size_l\">
\t\t\t\t\t<span id=\"new_messages\"></span>
\t\t\t\t</span>
\t\t\t</li>
\t\t\t{if Module::isEnabled('productcomments')}
\t\t\t\t<li>
\t\t\t\t<span class=\"data_label\"><a href=\"{\$link->getAdminLink('AdminModules')|escape:'html':'UTF-8'}&amp;configure=productcomments&amp;tab_module=front_office_features&amp;module_name=productcomments\">{l s='Product Reviews' d='Modules.Dashactivity.Admin'}</a></span>
\t\t\t\t\t<span class=\"data_value size_l\">
\t\t\t\t\t\t<span id=\"product_reviews\"></span>
\t\t\t\t\t</span>
\t\t\t\t</li>
\t\t\t{/if}
\t\t</ul>
\t</section>
\t<section id=\"dash_customers\" class=\"loading\">
\t\t<header><i class=\"icon-user\"></i> {l s='Customers & Newsletters' d='Modules.Dashactivity.Admin'} <span class=\"subtitle small\" id=\"customers-newsletters-subtitle\"></span></header>
\t\t<ul class=\"data_list\">
\t\t\t<li>
\t\t\t\t<span class=\"data_label\"><a href=\"{\$link->getAdminLink('AdminCustomers')|escape:'html':'UTF-8'}\">{l s='New Customers' d='Modules.Dashactivity.Admin'}</a></span>
\t\t\t\t<span class=\"data_value size_md\">
\t\t\t\t\t<span id=\"new_customers\"></span>
\t\t\t\t</span>
\t\t\t</li>
\t\t\t{if Module::isEnabled('statsnewsletter')}
\t\t\t<li>
\t\t\t\t<span class=\"data_label\"><a href=\"{\$link->getAdminLink('AdminStats')|escape:'html':'UTF-8'}&amp;module=statsnewsletter\">{l s='New Subscriptions' d='Modules.Dashactivity.Admin'}</a></span>
\t\t\t\t<span class=\"data_value size_md\">
\t\t\t\t\t<span id=\"new_registrations\"></span>
\t\t\t\t</span>
\t\t\t</li>
\t\t\t{/if}
\t\t\t{if Module::isEnabled('ps_emailsubscription')}
\t\t\t<li>
\t\t\t\t<span class=\"data_label\"><a href=\"{\$link->getAdminLink('AdminModules')|escape:'html':'UTF-8'}&amp;configure=ps_emailsubscription&amp;module_name=ps_emailsubscription\">{l s='Total Subscribers' d='Modules.Dashactivity.Admin'}</a></span>
\t\t\t\t<span class=\"data_value size_md\">
\t\t\t\t\t<span id=\"total_suscribers\"></span>
\t\t\t\t</span>
\t\t\t</li>
\t\t\t{/if}
\t\t</ul>
\t</section>
\t<section id=\"dash_traffic\" class=\"loading\">
\t\t<header>
\t\t\t<i class=\"icon-globe\"></i> {l s='Traffic' d='Modules.Dashactivity.Admin'} <span class=\"subtitle small\" id=\"traffic-subtitle\"></span>
\t\t</header>
\t\t<ul class=\"data_list\">
\t\t\t{if Module::isEnabled('statsforecast')}
\t\t\t<li>
\t\t\t\t<span class=\"data_label\"><a href=\"{\$link->getAdminLink('AdminStats')|escape:'html':'UTF-8'}&amp;module=statsforecast\">{l s='Visits' d='Modules.Dashactivity.Admin'}</a></span>
\t\t\t\t<span class=\"data_value size_md\">
\t\t\t\t\t<span id=\"visits\"></span>
\t\t\t\t</span>
\t\t\t</li>
\t\t\t{/if}
\t\t\t{if Module::isEnabled('statsvisits')}
\t\t\t<li>
\t\t\t\t<span class=\"data_label\"><a href=\"{\$link->getAdminLink('AdminStats')|escape:'html':'UTF-8'}&amp;module=statsvisits\">{l s='Unique Visitors' d='Modules.Dashactivity.Admin'}</a></span>
\t\t\t\t<span class=\"data_value size_md\">
\t\t\t\t\t<span id=\"unique_visitors\"></span>
\t\t\t\t</span>
\t\t\t</li>
\t\t\t{/if}
\t\t\t<li>
\t\t\t\t<span class=\"data_label\">{l s='Traffic Sources' d='Modules.Dashactivity.Admin'}</span>
\t\t\t\t<ul class=\"data_list_small\" id=\"dash_traffic_source\">
\t\t\t\t</ul>
\t\t\t\t<div id=\"dash_traffic_chart2\" class='chart with-transitions'>
\t\t\t\t\t<svg></svg>
\t\t\t\t</div>
\t\t\t</li>
\t\t</ul>
\t</section>
</section>
<script type=\"text/javascript\">
\tdate_subtitle = \"{\$date_subtitle|escape:'html':'UTF-8'}\";
\tdate_format   = \"{\$date_format|escape:'html':'UTF-8'}\";
</script>
", "@Modules/dashactivity/views/templates/hook/dashboard_zone_one.tpl", "/var/www/html/modules/dashactivity/views/templates/hook/dashboard_zone_one.tpl");
    }
}
