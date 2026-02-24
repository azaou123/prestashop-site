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

/* @Modules/ps_emailalerts/views/templates/hook/product.tpl */
class __TwigTemplate_3050f137140179366470b8b433acaf93 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_emailalerts/views/templates/hook/product.tpl"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_emailalerts/views/templates/hook/product.tpl"));

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

<div class=\"tabs\">
    <div class=\"js-mailalert text-center\" data-url=\"{url entity='module' name='ps_emailalerts' controller='actions' params=['process' => 'add']}\">
    {if empty(\$has_notification)}
        {if !empty(\$email)}
            <input class=\"form-control\" type=\"email\" placeholder=\"{l s='your@email.com' d='Modules.Emailalerts.Shop'}\"/>
        {/if}
        {if !empty(\$id_module)}
            {capture name='gdprContent'}{hook h='displayGDPRConsent' id_module=\$id_module}{/capture}
            {if \$smarty.capture.gdprContent != ''}
               <div class=\"gdpr_consent_wrapper mt-1\">{\$smarty.capture.gdprContent nofilter}</div>
            {/if}
        {/if}
        <button
            data-product=\"{\$product.id_product}\"
            data-product-attribute=\"{\$product.id_product_attribute}\"
            class=\"btn btn-primary js-mailalert-add mt-1\"
            rel=\"nofollow\">
            {l s='Notify me when available' d='Modules.Emailalerts.Shop'}
        </button>
        <div class=\"js-mailalert-alerts\"></div>
    {else}
        <article class=\"mt-1 alert alert-info\" role=\"alert\">{l s='You will be notified when this product is available.' d='Modules.Emailalerts.Shop'}</article>
    {/if}
    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_emailalerts/views/templates/hook/product.tpl";
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

<div class=\"tabs\">
    <div class=\"js-mailalert text-center\" data-url=\"{url entity='module' name='ps_emailalerts' controller='actions' params=['process' => 'add']}\">
    {if empty(\$has_notification)}
        {if !empty(\$email)}
            <input class=\"form-control\" type=\"email\" placeholder=\"{l s='your@email.com' d='Modules.Emailalerts.Shop'}\"/>
        {/if}
        {if !empty(\$id_module)}
            {capture name='gdprContent'}{hook h='displayGDPRConsent' id_module=\$id_module}{/capture}
            {if \$smarty.capture.gdprContent != ''}
               <div class=\"gdpr_consent_wrapper mt-1\">{\$smarty.capture.gdprContent nofilter}</div>
            {/if}
        {/if}
        <button
            data-product=\"{\$product.id_product}\"
            data-product-attribute=\"{\$product.id_product_attribute}\"
            class=\"btn btn-primary js-mailalert-add mt-1\"
            rel=\"nofollow\">
            {l s='Notify me when available' d='Modules.Emailalerts.Shop'}
        </button>
        <div class=\"js-mailalert-alerts\"></div>
    {else}
        <article class=\"mt-1 alert alert-info\" role=\"alert\">{l s='You will be notified when this product is available.' d='Modules.Emailalerts.Shop'}</article>
    {/if}
    </div>
</div>
", "@Modules/ps_emailalerts/views/templates/hook/product.tpl", "/var/www/html/modules/ps_emailalerts/views/templates/hook/product.tpl");
    }
}
