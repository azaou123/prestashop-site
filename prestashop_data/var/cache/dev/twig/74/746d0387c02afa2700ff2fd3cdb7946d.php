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

/* @Modules/ps_contactinfo/ps_contactinfo.tpl */
class __TwigTemplate_68d76fdb65a81ddb27133c91a1bc82e8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_contactinfo/ps_contactinfo.tpl"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_contactinfo/ps_contactinfo.tpl"));

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

<div class=\"block-contact col-md-3 links wrapper\">
    <div class=\"hidden-sm-down\">
        <p class=\"h4 text-uppercase block-contact-title\">{l s='Store information' d='Shop.Theme.Global'}</p>
        {\$contact_infos.address.formatted nofilter}
        {if \$contact_infos.phone}
            <br>
            {* [1][/1] is for a HTML tag. *}
            {l s='Call us: [1]%phone%[/1]'
            sprintf=[
            '[1]' => '<span>',
            '[/1]' => '</span>',
            '%phone%' => \$contact_infos.phone
            ]
            d='Modules.Contactinfo.Shop'
            }
        {/if}
        {if \$contact_infos.fax}
            <br>
            {* [1][/1] is for a HTML tag. *}
            {l
            s='Fax: [1]%fax%[/1]'
            sprintf=[
            '[1]' => '<span>',
            '[/1]' => '</span>',
            '%fax%' => \$contact_infos.fax
            ]
            d='Modules.Contactinfo.Shop'
            }
        {/if}
        {if \$contact_infos.email && \$display_email}
            <br>
            {l s='Email us:' d='Modules.Contactinfo.Shop'}
            {mailto address=\$contact_infos.email encode=\"javascript\"}
        {/if}
    </div>
    <div class=\"hidden-md-up\">
        <div class=\"title\">
            <a class=\"h3\" href=\"{\$urls.pages.stores}\">{l s='Store information' d='Shop.Theme.Global'}</a>
        </div>
    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_contactinfo/ps_contactinfo.tpl";
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

<div class=\"block-contact col-md-3 links wrapper\">
    <div class=\"hidden-sm-down\">
        <p class=\"h4 text-uppercase block-contact-title\">{l s='Store information' d='Shop.Theme.Global'}</p>
        {\$contact_infos.address.formatted nofilter}
        {if \$contact_infos.phone}
            <br>
            {* [1][/1] is for a HTML tag. *}
            {l s='Call us: [1]%phone%[/1]'
            sprintf=[
            '[1]' => '<span>',
            '[/1]' => '</span>',
            '%phone%' => \$contact_infos.phone
            ]
            d='Modules.Contactinfo.Shop'
            }
        {/if}
        {if \$contact_infos.fax}
            <br>
            {* [1][/1] is for a HTML tag. *}
            {l
            s='Fax: [1]%fax%[/1]'
            sprintf=[
            '[1]' => '<span>',
            '[/1]' => '</span>',
            '%fax%' => \$contact_infos.fax
            ]
            d='Modules.Contactinfo.Shop'
            }
        {/if}
        {if \$contact_infos.email && \$display_email}
            <br>
            {l s='Email us:' d='Modules.Contactinfo.Shop'}
            {mailto address=\$contact_infos.email encode=\"javascript\"}
        {/if}
    </div>
    <div class=\"hidden-md-up\">
        <div class=\"title\">
            <a class=\"h3\" href=\"{\$urls.pages.stores}\">{l s='Store information' d='Shop.Theme.Global'}</a>
        </div>
    </div>
</div>
", "@Modules/ps_contactinfo/ps_contactinfo.tpl", "/var/www/html/modules/ps_contactinfo/ps_contactinfo.tpl");
    }
}
