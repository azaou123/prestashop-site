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

/* @Modules/ps_themecusto/views/templates/admin/controllers/configuration/elem/module_actions.tpl */
class __TwigTemplate_0c4b487ec5971a7daa9957d439693298 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_themecusto/views/templates/admin/controllers/configuration/elem/module_actions.tpl"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_themecusto/views/templates/admin/controllers/configuration/elem/module_actions.tpl"));

        // line 1
        echo "{*
* 2007-2018 PrestaShop
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
* @author    PrestaShop SA <contact@prestashop.com>
* @copyright 2007-2018 PrestaShop SA
* @license   http://addons.prestashop.com/en/content/12-terms-and-conditions-of-use
* International Registered Trademark & Property of PrestaShop SA
*}
<div class=\"loader src_loader_{\$module.name}\"></div>

<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 btn-group form-action-button-container src_parent_{\$module.name}\" data-id_module=\"{\$module.id_module}\" >
    {if \$module.url_active != 'install'}
        <div class=\"col-lg-9 col-md-9 col-sm-9 col-xs-9 no-padding general-action\" data-module_name=\"{\$module.name}\" data-action=\"{\$module.url_active }\" data-module_displayname=\"{\$module.displayName}\">
            {if \$module.url_active == 'configure'}
            <a class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 no-radius-right btn btn-primary-reverse btn-outline-primary light-button module_action_menu_{\$module.url_active}\" href=\"{\$module.actions_url.configure}\">
                {l s='Configure' mod='ps_themecusto'}
            </a>
            {elseif \$module.url_active == 'disable' }
            <button type=\"button\" class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 no-radius-right btn btn-primary-reverse btn-outline-primary light-button module_action_menu_{\$module.url_active}\" data-confirm_modal=\"module-modal-confirm-{\$module.name}-{\$module.url_active}\" data-toggle=\"modal\" data-target=\"#moduleActionModal\">
                {l s='Disable' mod='ps_themecusto'}
            </button>
            {else}
            <button type=\"button\" class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 no-radius-right btn btn-primary-reverse btn-outline-primary light-button module_action_menu_{\$module.url_active}\" data-confirm_modal=\"module-modal-confirm-{\$module.name}-{\$module.url_active}\" >
                {l s='Enable' mod='ps_themecusto'}
            </button>
            {/if}
        </div>

        <input type=\"hidden\" class=\"btn\">

        <button type=\"button\" class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3 btn btn-outline-primary dropdown-action\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
            <i class=\"material-icons\">keyboard_arrow_down</i>
        </button>
        <div class=\"dropdown-menu\">
            {foreach from=\$moduleActions item=action key=key}
                {if (\$action != \$module.url_active)
                    && !(\$module.url_active eq 'configure' && \$action eq 'enable')
                    && !(\$module.url_active eq 'enable' && \$action eq 'disable')
                    && !(\$module.url_active eq 'disable' && \$action eq 'enable')
                    && !(\$module.url_active eq 'disable' && \$action eq 'configure')
                    && !(!\$module.can_configure && \$action eq 'configure')
                    && !(\$action eq 'install')
                }
                <li>
                    <div data-action=\"{\$action}\" data-module_name=\"{\$module.name}\" data-module_displayname=\"{\$module.displayName}\">
                        {if \$action eq 'uninstall' || \$action eq 'disable' || \$action eq 'reset'}
                        <button type=\"button\" class=\"dropdown-item module_action_menu_{\$action}\" data-confirm_modal=\"module-modal-confirm-{\$module.name}-{\$action}\" data-toggle=\"modal\" data-target=\"#moduleActionModal\">
                            {if \$action eq 'uninstall'}
                                {l s='Uninstall' mod='ps_themecusto'}
                            {elseif \$action eq 'disable'}
                                {l s='Disable' mod='ps_themecusto'}
                            {elseif \$action eq 'reset'}
                                {l s='Reset' mod='ps_themecusto'}
                            {/if}
                        </button>
                        {else if \$action eq 'configure'}
                        <a class=\"dropdown-item module_action_menu_configure\" href=\"{\$module.actions_url.configure}\">
                            {l s='Configure' mod='ps_themecusto'}
                        </a>
                        {else}
                            {if \$action eq 'enable'}
                                <button type=\"button\" class=\"dropdown-item module_action_menu_{\$action}\">
                                    {l s='Enable' mod='ps_themecusto'}
                                </button>
                            {elseif (\$module.enable_mobile eq 7 || \$module.enable_mobile eq 1) && \$action eq 'disable_mobile'}
                                <button type=\"button\" class=\"dropdown-item module_action_menu_{\$action}\">
                                    {l s='Disable mobile' mod='ps_themecusto'}
                                </button>
                            {elseif \$module.enable_mobile eq 3 && \$action eq 'enable_mobile'}
                                <button type=\"button\" class=\"dropdown-item module_action_menu_{\$action}\">
                                    {l s='Enable mobile' mod='ps_themecusto'}
                                </button>
                            {/if}
                        {/if}
                    </div>
                </li>
                {/if}
            {/foreach}
        </div>
    {else}
        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding general-action\" data-module_name=\"{\$module.name}\" data-action=\"{\$module.url_active }\" data-module_displayname=\"{\$module.displayName}\">
            <button type=\"button\" class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 no-radius-right btn btn-primary-reverse btn-outline-primary light-button module_action_menu_{\$module.url_active}\" data-confirm_modal=\"module-modal-confirm-{\$module.name}-{\$module.url_active}\" >
                {l s='Install' mod='ps_themecusto'}
            </button>
        </div>
    {/if}
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_themecusto/views/templates/admin/controllers/configuration/elem/module_actions.tpl";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{*
* 2007-2018 PrestaShop
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
* @author    PrestaShop SA <contact@prestashop.com>
* @copyright 2007-2018 PrestaShop SA
* @license   http://addons.prestashop.com/en/content/12-terms-and-conditions-of-use
* International Registered Trademark & Property of PrestaShop SA
*}
<div class=\"loader src_loader_{\$module.name}\"></div>

<div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 btn-group form-action-button-container src_parent_{\$module.name}\" data-id_module=\"{\$module.id_module}\" >
    {if \$module.url_active != 'install'}
        <div class=\"col-lg-9 col-md-9 col-sm-9 col-xs-9 no-padding general-action\" data-module_name=\"{\$module.name}\" data-action=\"{\$module.url_active }\" data-module_displayname=\"{\$module.displayName}\">
            {if \$module.url_active == 'configure'}
            <a class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 no-radius-right btn btn-primary-reverse btn-outline-primary light-button module_action_menu_{\$module.url_active}\" href=\"{\$module.actions_url.configure}\">
                {l s='Configure' mod='ps_themecusto'}
            </a>
            {elseif \$module.url_active == 'disable' }
            <button type=\"button\" class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 no-radius-right btn btn-primary-reverse btn-outline-primary light-button module_action_menu_{\$module.url_active}\" data-confirm_modal=\"module-modal-confirm-{\$module.name}-{\$module.url_active}\" data-toggle=\"modal\" data-target=\"#moduleActionModal\">
                {l s='Disable' mod='ps_themecusto'}
            </button>
            {else}
            <button type=\"button\" class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 no-radius-right btn btn-primary-reverse btn-outline-primary light-button module_action_menu_{\$module.url_active}\" data-confirm_modal=\"module-modal-confirm-{\$module.name}-{\$module.url_active}\" >
                {l s='Enable' mod='ps_themecusto'}
            </button>
            {/if}
        </div>

        <input type=\"hidden\" class=\"btn\">

        <button type=\"button\" class=\"col-lg-3 col-md-3 col-sm-3 col-xs-3 btn btn-outline-primary dropdown-action\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
            <i class=\"material-icons\">keyboard_arrow_down</i>
        </button>
        <div class=\"dropdown-menu\">
            {foreach from=\$moduleActions item=action key=key}
                {if (\$action != \$module.url_active)
                    && !(\$module.url_active eq 'configure' && \$action eq 'enable')
                    && !(\$module.url_active eq 'enable' && \$action eq 'disable')
                    && !(\$module.url_active eq 'disable' && \$action eq 'enable')
                    && !(\$module.url_active eq 'disable' && \$action eq 'configure')
                    && !(!\$module.can_configure && \$action eq 'configure')
                    && !(\$action eq 'install')
                }
                <li>
                    <div data-action=\"{\$action}\" data-module_name=\"{\$module.name}\" data-module_displayname=\"{\$module.displayName}\">
                        {if \$action eq 'uninstall' || \$action eq 'disable' || \$action eq 'reset'}
                        <button type=\"button\" class=\"dropdown-item module_action_menu_{\$action}\" data-confirm_modal=\"module-modal-confirm-{\$module.name}-{\$action}\" data-toggle=\"modal\" data-target=\"#moduleActionModal\">
                            {if \$action eq 'uninstall'}
                                {l s='Uninstall' mod='ps_themecusto'}
                            {elseif \$action eq 'disable'}
                                {l s='Disable' mod='ps_themecusto'}
                            {elseif \$action eq 'reset'}
                                {l s='Reset' mod='ps_themecusto'}
                            {/if}
                        </button>
                        {else if \$action eq 'configure'}
                        <a class=\"dropdown-item module_action_menu_configure\" href=\"{\$module.actions_url.configure}\">
                            {l s='Configure' mod='ps_themecusto'}
                        </a>
                        {else}
                            {if \$action eq 'enable'}
                                <button type=\"button\" class=\"dropdown-item module_action_menu_{\$action}\">
                                    {l s='Enable' mod='ps_themecusto'}
                                </button>
                            {elseif (\$module.enable_mobile eq 7 || \$module.enable_mobile eq 1) && \$action eq 'disable_mobile'}
                                <button type=\"button\" class=\"dropdown-item module_action_menu_{\$action}\">
                                    {l s='Disable mobile' mod='ps_themecusto'}
                                </button>
                            {elseif \$module.enable_mobile eq 3 && \$action eq 'enable_mobile'}
                                <button type=\"button\" class=\"dropdown-item module_action_menu_{\$action}\">
                                    {l s='Enable mobile' mod='ps_themecusto'}
                                </button>
                            {/if}
                        {/if}
                    </div>
                </li>
                {/if}
            {/foreach}
        </div>
    {else}
        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding general-action\" data-module_name=\"{\$module.name}\" data-action=\"{\$module.url_active }\" data-module_displayname=\"{\$module.displayName}\">
            <button type=\"button\" class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 no-radius-right btn btn-primary-reverse btn-outline-primary light-button module_action_menu_{\$module.url_active}\" data-confirm_modal=\"module-modal-confirm-{\$module.name}-{\$module.url_active}\" >
                {l s='Install' mod='ps_themecusto'}
            </button>
        </div>
    {/if}
</div>
", "@Modules/ps_themecusto/views/templates/admin/controllers/configuration/elem/module_actions.tpl", "/var/www/html/modules/ps_themecusto/views/templates/admin/controllers/configuration/elem/module_actions.tpl");
    }
}
