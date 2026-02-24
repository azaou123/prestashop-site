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

/* @Modules/ps_themecusto/views/templates/admin/controllers/configuration/elem/modal.tpl */
class __TwigTemplate_7ea5f13c76213bdb7fe2e98729d104d1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_themecusto/views/templates/admin/controllers/configuration/elem/modal.tpl"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_themecusto/views/templates/admin/controllers/configuration/elem/modal.tpl"));

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

<div class=\"modal fade\" id=\"moduleActionModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"moduleActionModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"uninstall action_available modal-title\" id=\"moduleActionlModalLongTitle\">{l s='Uninstall module?' mod='ps_themecusto'}</h4>
                <h4 class=\"disable action_available modal-title\" id=\"moduleActionlModalLongTitle\">{l s='Disable module?' mod='ps_themecusto'}</h4>
                <h4 class=\"reset action_available modal-title\" id=\"moduleActionlModalLongTitle\">{l s='Reset module?' mod='ps_themecusto'}</h4>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <div class=\"uninstall action_available\">
                    <p>{l s='You are about to uninstall' mod='ps_themecusto'} <span class=\"module-displayname\" ></span></p>
                    <p>{l s='This will definitely disable the module.' mod='ps_themecusto'}</p>
                </div>
                <div class=\"disable action_available\">
                    <p>{l s='You are about to disable ' mod='ps_themecusto'} <span class=\"module-displayname\" ></span></p>
                    <p>{l s='Your current settings will be saved, but the module will no longer be active.' mod='ps_themecusto'}</p>
                </div>
                <div class=\"reset action_available\">
                    <p>{l s='You are about to reset ' mod='ps_themecusto'} <span class=\"module-displayname\" ></span></p>
                    <p>{l s='This will restore the defaults settings.' mod='ps_themecusto'}</p>
                    <p>{l s='This action cannot be undone.' mod='ps_themecusto'}</p>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">{l s='Cancel' mod='ps_themecusto'}</button>
                <a class=\"btn btn-primary uppercase\" href=\"#\" data-dismiss=\"modal\" data-action=\"false\" data-name=\"false\" data-deletion=\"true\">
                    <span class=\"uninstall action_available\">{l s='Yes, uninstall it' mod='ps_themecusto'}</span>
                    <span class=\"disable action_available\">{l s='Yes, disable it' mod='ps_themecusto'}</span>
                    <span class=\"reset action_available\">{l s='Yes, reset it' mod='ps_themecusto'}</span>
                </a>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_themecusto/views/templates/admin/controllers/configuration/elem/modal.tpl";
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

<div class=\"modal fade\" id=\"moduleActionModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"moduleActionModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"uninstall action_available modal-title\" id=\"moduleActionlModalLongTitle\">{l s='Uninstall module?' mod='ps_themecusto'}</h4>
                <h4 class=\"disable action_available modal-title\" id=\"moduleActionlModalLongTitle\">{l s='Disable module?' mod='ps_themecusto'}</h4>
                <h4 class=\"reset action_available modal-title\" id=\"moduleActionlModalLongTitle\">{l s='Reset module?' mod='ps_themecusto'}</h4>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <div class=\"uninstall action_available\">
                    <p>{l s='You are about to uninstall' mod='ps_themecusto'} <span class=\"module-displayname\" ></span></p>
                    <p>{l s='This will definitely disable the module.' mod='ps_themecusto'}</p>
                </div>
                <div class=\"disable action_available\">
                    <p>{l s='You are about to disable ' mod='ps_themecusto'} <span class=\"module-displayname\" ></span></p>
                    <p>{l s='Your current settings will be saved, but the module will no longer be active.' mod='ps_themecusto'}</p>
                </div>
                <div class=\"reset action_available\">
                    <p>{l s='You are about to reset ' mod='ps_themecusto'} <span class=\"module-displayname\" ></span></p>
                    <p>{l s='This will restore the defaults settings.' mod='ps_themecusto'}</p>
                    <p>{l s='This action cannot be undone.' mod='ps_themecusto'}</p>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">{l s='Cancel' mod='ps_themecusto'}</button>
                <a class=\"btn btn-primary uppercase\" href=\"#\" data-dismiss=\"modal\" data-action=\"false\" data-name=\"false\" data-deletion=\"true\">
                    <span class=\"uninstall action_available\">{l s='Yes, uninstall it' mod='ps_themecusto'}</span>
                    <span class=\"disable action_available\">{l s='Yes, disable it' mod='ps_themecusto'}</span>
                    <span class=\"reset action_available\">{l s='Yes, reset it' mod='ps_themecusto'}</span>
                </a>
            </div>
        </div>
    </div>
</div>", "@Modules/ps_themecusto/views/templates/admin/controllers/configuration/elem/modal.tpl", "/var/www/html/modules/ps_themecusto/views/templates/admin/controllers/configuration/elem/modal.tpl");
    }
}
