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

/* @Modules/ps_checkpayment/views/templates/hook/payment_return.tpl */
class __TwigTemplate_ba90d1c8e986cf48cff3bf958a580a58 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_checkpayment/views/templates/hook/payment_return.tpl"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_checkpayment/views/templates/hook/payment_return.tpl"));

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

<p>{l s='Your order on %s is complete.' sprintf=[\$shop_name] d='Modules.Checkpayment.Shop'}</p>
<p>{l s='Your check must include:' d='Modules.Checkpayment.Shop'}</p>

<ul>
\t<li>
\t\t{l s='Payment amount.' d='Modules.Checkpayment.Shop'}
\t\t<span class=\"price\"><strong>{\$total_to_pay}</strong></span>
\t</li>

\t<li>
\t\t{l s='Payable to the order of' d='Modules.Checkpayment.Shop'}
\t\t<strong>{if \$checkName}{\$checkName}{else}___________{/if}</strong>
\t</li>

\t<li>
\t\t{l s='Mail to' d='Modules.Checkpayment.Shop'}
\t\t<strong>{if \$checkAddress}{\$checkAddress nofilter}{else}___________{/if}</strong>
\t</li>

\t<li>
\t\t{l s='Do not forget to insert your order reference %s.' sprintf=[\$reference] d='Modules.Checkpayment.Shop'}
\t</li>
</ul>

<p>{l s='An email has been sent to you with this information.' d='Modules.Checkpayment.Shop'}</p>
<p><strong>{l s='Your order will be sent as soon as we receive your payment.' d='Modules.Checkpayment.Shop'}</strong></p>

<p>{l s='For any questions or for further information, please contact our' d='Modules.Checkpayment.Shop'}
\t<a href=\"{\$link->getPageLink('contact', true)|escape:'html'}\">{l s='customer service department.' d='Modules.Checkpayment.Shop'}</a>.
</p>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_checkpayment/views/templates/hook/payment_return.tpl";
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

<p>{l s='Your order on %s is complete.' sprintf=[\$shop_name] d='Modules.Checkpayment.Shop'}</p>
<p>{l s='Your check must include:' d='Modules.Checkpayment.Shop'}</p>

<ul>
\t<li>
\t\t{l s='Payment amount.' d='Modules.Checkpayment.Shop'}
\t\t<span class=\"price\"><strong>{\$total_to_pay}</strong></span>
\t</li>

\t<li>
\t\t{l s='Payable to the order of' d='Modules.Checkpayment.Shop'}
\t\t<strong>{if \$checkName}{\$checkName}{else}___________{/if}</strong>
\t</li>

\t<li>
\t\t{l s='Mail to' d='Modules.Checkpayment.Shop'}
\t\t<strong>{if \$checkAddress}{\$checkAddress nofilter}{else}___________{/if}</strong>
\t</li>

\t<li>
\t\t{l s='Do not forget to insert your order reference %s.' sprintf=[\$reference] d='Modules.Checkpayment.Shop'}
\t</li>
</ul>

<p>{l s='An email has been sent to you with this information.' d='Modules.Checkpayment.Shop'}</p>
<p><strong>{l s='Your order will be sent as soon as we receive your payment.' d='Modules.Checkpayment.Shop'}</strong></p>

<p>{l s='For any questions or for further information, please contact our' d='Modules.Checkpayment.Shop'}
\t<a href=\"{\$link->getPageLink('contact', true)|escape:'html'}\">{l s='customer service department.' d='Modules.Checkpayment.Shop'}</a>.
</p>
", "@Modules/ps_checkpayment/views/templates/hook/payment_return.tpl", "/var/www/html/modules/ps_checkpayment/views/templates/hook/payment_return.tpl");
    }
}
