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

/* @Modules/ps_cashondelivery/views/templates/hook/displayOrderConfirmation.tpl */
class __TwigTemplate_8dffc0854b30c3fb332b0dd40a327804 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_cashondelivery/views/templates/hook/displayOrderConfirmation.tpl"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_cashondelivery/views/templates/hook/displayOrderConfirmation.tpl"));

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

<section id=\"ps_cashondelivery-displayOrderConfirmation\">
  <p>{l s='Your order on %s is complete.' sprintf=[\$shop_name] d='Modules.Cashondelivery.Shop'}</p>
  <p>{l s='You have chosen the cash on delivery method.' d='Modules.Cashondelivery.Shop'}</p>
  <p>{l s='Your order will be sent very soon.' d='Modules.Cashondelivery.Shop'}</p>
  <p>{l s='For any questions or for further information, please contact our' d='Modules.Cashondelivery.Shop'} <a href=\"{\$contact_url}\" rel=\"nofollow\">{l s='customer support' d='Modules.Cashondelivery.Shop'}</a>.</p>
</section>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_cashondelivery/views/templates/hook/displayOrderConfirmation.tpl";
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

<section id=\"ps_cashondelivery-displayOrderConfirmation\">
  <p>{l s='Your order on %s is complete.' sprintf=[\$shop_name] d='Modules.Cashondelivery.Shop'}</p>
  <p>{l s='You have chosen the cash on delivery method.' d='Modules.Cashondelivery.Shop'}</p>
  <p>{l s='Your order will be sent very soon.' d='Modules.Cashondelivery.Shop'}</p>
  <p>{l s='For any questions or for further information, please contact our' d='Modules.Cashondelivery.Shop'} <a href=\"{\$contact_url}\" rel=\"nofollow\">{l s='customer support' d='Modules.Cashondelivery.Shop'}</a>.</p>
</section>
", "@Modules/ps_cashondelivery/views/templates/hook/displayOrderConfirmation.tpl", "/var/www/html/modules/ps_cashondelivery/views/templates/hook/displayOrderConfirmation.tpl");
    }
}
