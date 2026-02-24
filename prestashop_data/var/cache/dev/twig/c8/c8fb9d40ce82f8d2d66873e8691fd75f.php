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

/* @Modules/blockreassurance/views/templates/admin/tabs/display/checkout.tpl */
class __TwigTemplate_7dd03cdaab810f43d76005be7bb8558a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/blockreassurance/views/templates/admin/tabs/display/checkout.tpl"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/blockreassurance/views/templates/admin/tabs/display/checkout.tpl"));

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

<div class=\"panel panel-default panel-blockreassurance col-lg-12 col-xs-12\">
    <div class=\"panel-heading\">
        {l s='Specific position for cart page' d='Modules.Blockreassurance.Admin'}
    </div>

    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 position-hook\">
        <label class=\"col-lg-3 col-lg-offset-1 col-xs-3 col-xs-offset-1\">
            <div class=\"help-block customradiodesign\">
                <input type=\"radio\" class=\"input_img js-show-all\" name=\"PSR_HOOK_CHECKOUT\" value=\"1\"
                       id=\"PSR_HOOK_CHECKOUT\" {if \$psr_hook_checkout eq 1}checked=\"checked\"{/if} />
                <label for=\"PSR_HOOK_CHECKOUT\"><span><span></span></span>{l s='Main column' d='Modules.Blockreassurance.Admin'}</label><br/><br/>
                <img src=\"{\$img_path}displayReassurance_active.jpg\" width=\"150\" height=\"150\"
                     class=\"psr-checkout-color{if \$psr_hook_checkout eq 1} active{/if}\" />
                <img src=\"{\$img_path}displayReassurance_inactive.jpg\" width=\"150\" height=\"150\"
                     class=\"psr-checkout-grey {if \$psr_hook_checkout neq 1} active{/if}\" />
            </div>
        </label>
        <label class=\"col-lg-3 col-lg-offset-1 col-xs-3 col-xs-offset-1\">
            <div class=\"help-block customradiodesign\">
                <input type=\"radio\" class=\"input_img\" name=\"PSR_HOOK_CHECKOUT\" value=\"0\" id=\"PSR_HOOK_CHECKOUT_0\"
                       {if \$psr_hook_checkout eq 0}checked=\"checked\"{/if} />
                <label for=\"PSR_HOOK_CHECKOUT_0\"><span><span></span></span>{l s='none' d='Modules.Blockreassurance.Admin'}</label><br/><br/>
                <img src=\"{\$img_path}productPage_none.jpg\" width=\"150\" height=\"150\" />
            </div>
        </label>
    </div>

</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/blockreassurance/views/templates/admin/tabs/display/checkout.tpl";
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

<div class=\"panel panel-default panel-blockreassurance col-lg-12 col-xs-12\">
    <div class=\"panel-heading\">
        {l s='Specific position for cart page' d='Modules.Blockreassurance.Admin'}
    </div>

    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 position-hook\">
        <label class=\"col-lg-3 col-lg-offset-1 col-xs-3 col-xs-offset-1\">
            <div class=\"help-block customradiodesign\">
                <input type=\"radio\" class=\"input_img js-show-all\" name=\"PSR_HOOK_CHECKOUT\" value=\"1\"
                       id=\"PSR_HOOK_CHECKOUT\" {if \$psr_hook_checkout eq 1}checked=\"checked\"{/if} />
                <label for=\"PSR_HOOK_CHECKOUT\"><span><span></span></span>{l s='Main column' d='Modules.Blockreassurance.Admin'}</label><br/><br/>
                <img src=\"{\$img_path}displayReassurance_active.jpg\" width=\"150\" height=\"150\"
                     class=\"psr-checkout-color{if \$psr_hook_checkout eq 1} active{/if}\" />
                <img src=\"{\$img_path}displayReassurance_inactive.jpg\" width=\"150\" height=\"150\"
                     class=\"psr-checkout-grey {if \$psr_hook_checkout neq 1} active{/if}\" />
            </div>
        </label>
        <label class=\"col-lg-3 col-lg-offset-1 col-xs-3 col-xs-offset-1\">
            <div class=\"help-block customradiodesign\">
                <input type=\"radio\" class=\"input_img\" name=\"PSR_HOOK_CHECKOUT\" value=\"0\" id=\"PSR_HOOK_CHECKOUT_0\"
                       {if \$psr_hook_checkout eq 0}checked=\"checked\"{/if} />
                <label for=\"PSR_HOOK_CHECKOUT_0\"><span><span></span></span>{l s='none' d='Modules.Blockreassurance.Admin'}</label><br/><br/>
                <img src=\"{\$img_path}productPage_none.jpg\" width=\"150\" height=\"150\" />
            </div>
        </label>
    </div>

</div>
", "@Modules/blockreassurance/views/templates/admin/tabs/display/checkout.tpl", "/var/www/html/modules/blockreassurance/views/templates/admin/tabs/display/checkout.tpl");
    }
}
