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

/* @Modules/blockreassurance/views/templates/admin/tabs/display.tpl */
class __TwigTemplate_9852c29601f03b69fc1660662dcf2c65 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/blockreassurance/views/templates/admin/tabs/display.tpl"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/blockreassurance/views/templates/admin/tabs/display.tpl"));

        // line 1
        echo "{**
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
 *}
<div id=\"modulecontent module_display\" class=\"clearfix\">
    <div id=\"menu\" class=\"col-lg-2 col-xs-2\">
        <div class=\"list-group\" v-on:click.prevent>
            <a href=\"#\" class=\"list-group-item\" v-bind:class=\"{ 'active': isActive('global') }\" v-on:click=\"makeActive('global')\">
                <i class=\"fa fa-cog\"></i> {l s='Global settings' d='Modules.Blockreassurance.Admin'}
            </a>
            <a href=\"#\" class=\"list-group-item\" v-bind:class=\"{ 'active': isActive('product') }\" v-on:click=\"makeActive('product')\">
                <i class=\"fa fa-book\"></i> {l s='Product pages' d='Modules.Blockreassurance.Admin'}
            </a>
            <a href=\"#\" class=\"list-group-item\" v-bind:class=\"{ 'active': isActive('checkout') }\" v-on:click=\"makeActive('checkout')\">
                <i class=\"fa fa-clock-o\"></i> {l s='Checkout pages' d='Modules.Blockreassurance.Admin'}
            </a>
        </div>
    </div>
    <div class=\"col-lg-9 col-xs-9\">
        {* list your admin tpl *}
        <div id=\"global\" class=\"psr_menu addons-hide\">
            {include file=\"./display/global.tpl\"}
        </div>

        <div id=\"product\" class=\"psr_menu addons-hide\">
            {include file=\"./display/product.tpl\"}
        </div>

        <div id=\"checkout\" class=\"psr_menu addons-hide\">
            {include file=\"./display/checkout.tpl\"}
        </div>
    </div>

</div>

{literal}
<script type=\"text/javascript\">
  var currentPage = \"{/literal}{\$currentPage|escape:'htmlall':'UTF-8'}{literal}\";
  var moduleAdminLink = \"{/literal}{\$moduleAdminLink|escape:'htmlall':'UTF-8'}{literal}\";
</script>
{/literal}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/blockreassurance/views/templates/admin/tabs/display.tpl";
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
 *}
<div id=\"modulecontent module_display\" class=\"clearfix\">
    <div id=\"menu\" class=\"col-lg-2 col-xs-2\">
        <div class=\"list-group\" v-on:click.prevent>
            <a href=\"#\" class=\"list-group-item\" v-bind:class=\"{ 'active': isActive('global') }\" v-on:click=\"makeActive('global')\">
                <i class=\"fa fa-cog\"></i> {l s='Global settings' d='Modules.Blockreassurance.Admin'}
            </a>
            <a href=\"#\" class=\"list-group-item\" v-bind:class=\"{ 'active': isActive('product') }\" v-on:click=\"makeActive('product')\">
                <i class=\"fa fa-book\"></i> {l s='Product pages' d='Modules.Blockreassurance.Admin'}
            </a>
            <a href=\"#\" class=\"list-group-item\" v-bind:class=\"{ 'active': isActive('checkout') }\" v-on:click=\"makeActive('checkout')\">
                <i class=\"fa fa-clock-o\"></i> {l s='Checkout pages' d='Modules.Blockreassurance.Admin'}
            </a>
        </div>
    </div>
    <div class=\"col-lg-9 col-xs-9\">
        {* list your admin tpl *}
        <div id=\"global\" class=\"psr_menu addons-hide\">
            {include file=\"./display/global.tpl\"}
        </div>

        <div id=\"product\" class=\"psr_menu addons-hide\">
            {include file=\"./display/product.tpl\"}
        </div>

        <div id=\"checkout\" class=\"psr_menu addons-hide\">
            {include file=\"./display/checkout.tpl\"}
        </div>
    </div>

</div>

{literal}
<script type=\"text/javascript\">
  var currentPage = \"{/literal}{\$currentPage|escape:'htmlall':'UTF-8'}{literal}\";
  var moduleAdminLink = \"{/literal}{\$moduleAdminLink|escape:'htmlall':'UTF-8'}{literal}\";
</script>
{/literal}
", "@Modules/blockreassurance/views/templates/admin/tabs/display.tpl", "/var/www/html/modules/blockreassurance/views/templates/admin/tabs/display.tpl");
    }
}
