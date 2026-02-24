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

/* @Modules/ps_themecusto/views/templates/admin/controllers/configuration/index.tpl */
class __TwigTemplate_f7d6771403026cfd1dfd51413b9ebd5d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_themecusto/views/templates/admin/controllers/configuration/index.tpl"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_themecusto/views/templates/admin/controllers/configuration/index.tpl"));

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

<div id=\"psthemecusto\" class=\"container-fluid clearfix\">
    <div class=\"panel row\">
        <div class=\"panel-heading text-center\">
            <button class=\"btn btn-primary btn-lg selected\" data-id-modal=\"homepageModal\">{l s='Homepage' mod='ps_themecusto'}</button>
            <button class=\"btn btn-primary btn-lg\" data-id-modal=\"categoryModal\">{l s='Category page' mod='ps_themecusto'}</button>
            <button class=\"btn btn-primary btn-lg\" data-id-modal=\"productModal\">{l s='Product page' mod='ps_themecusto'}</button>
        </div>

        {include file=\"./dropdownList.tpl\" elementsList=\$homePageList idModal='homepage' defaultModalClass='' }
        {include file=\"./dropdownList.tpl\" elementsList=\$categoryPageList idModal='category' defaultModalClass='hide'}
        {include file=\"./dropdownList.tpl\" elementsList=\$productPageList idModal='product' defaultModalClass='hide'}
    </div>

    {include file=\"./elem/modal.tpl\"}
</div>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_themecusto/views/templates/admin/controllers/configuration/index.tpl";
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

<div id=\"psthemecusto\" class=\"container-fluid clearfix\">
    <div class=\"panel row\">
        <div class=\"panel-heading text-center\">
            <button class=\"btn btn-primary btn-lg selected\" data-id-modal=\"homepageModal\">{l s='Homepage' mod='ps_themecusto'}</button>
            <button class=\"btn btn-primary btn-lg\" data-id-modal=\"categoryModal\">{l s='Category page' mod='ps_themecusto'}</button>
            <button class=\"btn btn-primary btn-lg\" data-id-modal=\"productModal\">{l s='Product page' mod='ps_themecusto'}</button>
        </div>

        {include file=\"./dropdownList.tpl\" elementsList=\$homePageList idModal='homepage' defaultModalClass='' }
        {include file=\"./dropdownList.tpl\" elementsList=\$categoryPageList idModal='category' defaultModalClass='hide'}
        {include file=\"./dropdownList.tpl\" elementsList=\$productPageList idModal='product' defaultModalClass='hide'}
    </div>

    {include file=\"./elem/modal.tpl\"}
</div>

", "@Modules/ps_themecusto/views/templates/admin/controllers/configuration/index.tpl", "/var/www/html/modules/ps_themecusto/views/templates/admin/controllers/configuration/index.tpl");
    }
}
