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

/* @Modules/psgdpr/views/templates/front/customerPersonalData.tpl */
class __TwigTemplate_8db96f952c3046e726a6c503804e6083 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/psgdpr/views/templates/front/customerPersonalData.tpl"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/psgdpr/views/templates/front/customerPersonalData.tpl"));

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
{extends file='customer/page.tpl'}

{block name='page_title'}
    {l s='GDPR - Personal data' mod='psgdpr'}
{/block}

{block name='page_content'}
<div class=\"container\">
    <section class=\"page_content\">
        <div class=\"col-xs-12 psgdprinfo17\">
            <h2>{l s='Access to my data' mod='psgdpr'}</h2>
            <p>{l s='At any time, you have the right to retrieve the data you have provided to our site. Click on \"Get my data\" to automatically download a copy of your personal data on a pdf or csv file.' mod='psgdpr'}</p>
            <a id=\"exportDataToCsv\" class=\"btn btn-primary psgdprgetdatabtn17\" target=\"_blank\" href=\"{\$psgdpr_csv_controller|escape:'htmlall':'UTF-8'}\">{l s='GET MY DATA TO CSV' mod='psgdpr'}</a>
            <a id=\"exportDataToPdf\" class=\"btn btn-primary psgdprgetdatabtn17\" target=\"_blank\" href=\"{\$psgdpr_pdf_controller|escape:'htmlall':'UTF-8'}\">{l s='GET MY DATA TO PDF' mod='psgdpr'}</a>
        </div>
        <div class=\"col-xs-12 psgdprinfo17\">
            <h2>{l s='Rectification & Erasure requests' mod='psgdpr'}</h2>
            <p>{l s='You have the right to modify all the personal information found in the \"My Account\" page. For any other request you might have regarding the rectification and/or erasure of your personal data, please contact us through our' mod='psgdpr'} <a href=\"{\$psgdpr_contactUrl|escape:'htmlall':'UTF-8'}\">{l s='contact page' mod='psgdpr'}</a>. {l s='We will review your request and reply as soon as possible.' mod='psgdpr'}</p>
        </div>
    </section>
</div>
{literal}
<script type=\"text/javascript\">
    var psgdpr_front_controller = \"{/literal}{\$psgdpr_front_controller|escape:'htmlall':'UTF-8'}{literal}\";
    var psgdpr_id_customer = \"{/literal}{\$psgdpr_front_controller|escape:'htmlall':'UTF-8'}{literal}\";
    var psgdpr_ps_version = \"{/literal}{\$psgdpr_ps_version|escape:'htmlall':'UTF-8'}{literal}\";
</script>
{/literal}
{/block}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/psgdpr/views/templates/front/customerPersonalData.tpl";
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
{extends file='customer/page.tpl'}

{block name='page_title'}
    {l s='GDPR - Personal data' mod='psgdpr'}
{/block}

{block name='page_content'}
<div class=\"container\">
    <section class=\"page_content\">
        <div class=\"col-xs-12 psgdprinfo17\">
            <h2>{l s='Access to my data' mod='psgdpr'}</h2>
            <p>{l s='At any time, you have the right to retrieve the data you have provided to our site. Click on \"Get my data\" to automatically download a copy of your personal data on a pdf or csv file.' mod='psgdpr'}</p>
            <a id=\"exportDataToCsv\" class=\"btn btn-primary psgdprgetdatabtn17\" target=\"_blank\" href=\"{\$psgdpr_csv_controller|escape:'htmlall':'UTF-8'}\">{l s='GET MY DATA TO CSV' mod='psgdpr'}</a>
            <a id=\"exportDataToPdf\" class=\"btn btn-primary psgdprgetdatabtn17\" target=\"_blank\" href=\"{\$psgdpr_pdf_controller|escape:'htmlall':'UTF-8'}\">{l s='GET MY DATA TO PDF' mod='psgdpr'}</a>
        </div>
        <div class=\"col-xs-12 psgdprinfo17\">
            <h2>{l s='Rectification & Erasure requests' mod='psgdpr'}</h2>
            <p>{l s='You have the right to modify all the personal information found in the \"My Account\" page. For any other request you might have regarding the rectification and/or erasure of your personal data, please contact us through our' mod='psgdpr'} <a href=\"{\$psgdpr_contactUrl|escape:'htmlall':'UTF-8'}\">{l s='contact page' mod='psgdpr'}</a>. {l s='We will review your request and reply as soon as possible.' mod='psgdpr'}</p>
        </div>
    </section>
</div>
{literal}
<script type=\"text/javascript\">
    var psgdpr_front_controller = \"{/literal}{\$psgdpr_front_controller|escape:'htmlall':'UTF-8'}{literal}\";
    var psgdpr_id_customer = \"{/literal}{\$psgdpr_front_controller|escape:'htmlall':'UTF-8'}{literal}\";
    var psgdpr_ps_version = \"{/literal}{\$psgdpr_ps_version|escape:'htmlall':'UTF-8'}{literal}\";
</script>
{/literal}
{/block}
", "@Modules/psgdpr/views/templates/front/customerPersonalData.tpl", "/var/www/html/modules/psgdpr/views/templates/front/customerPersonalData.tpl");
    }
}
