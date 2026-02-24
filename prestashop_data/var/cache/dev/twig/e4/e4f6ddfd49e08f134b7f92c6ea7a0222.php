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

/* @Modules/ps_wirepayment/views/templates/hook/ps_wirepayment_intro.tpl */
class __TwigTemplate_9a90458e71dc5b73ebdc41693a490a4a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_wirepayment/views/templates/hook/ps_wirepayment_intro.tpl"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_wirepayment/views/templates/hook/ps_wirepayment_intro.tpl"));

        // line 1
        echo "{**
 * 2007-2020 PrestaShop and Contributors
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2020 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}

<section>
  <p>
    {l s='Please transfer the invoice amount to our bank account. You will receive our order confirmation by email containing bank details and order number.' d='Modules.Wirepayment.Shop'}
    {if \$bankwireReservationDays}
      {if \$bankwireReservationDays > 1}
        {l s='Goods will be reserved %s days for you and we\\'ll process the order immediately after receiving the payment.' sprintf=[\$bankwireReservationDays] d='Modules.Wirepayment.Shop'}
      {else}
        {l s='Goods will be reserved %s day for you and we\\'ll process the order immediately after receiving the payment.' sprintf=[\$bankwireReservationDays] d='Modules.Wirepayment.Shop'}
      {/if}
    {/if}
    {if \$bankwireCustomText }
        <a data-toggle=\"modal\" data-target=\"#bankwire-modal\">{l s='More information' d='Modules.Wirepayment.Shop'}</a>
    {/if}
  </p>

  <div class=\"modal fade\" id=\"bankwire-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"Bankwire information\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
          </button>
          <h2>{l s='Bankwire' d='Modules.Wirepayment.Shop'}</h2>
        </div>
        <div class=\"modal-body\">
          <p>{l s='Payment is made by transfer of the invoice amount to the following account:' d='Modules.Wirepayment.Shop'}</p>
          {include file='module:ps_wirepayment/views/templates/hook/_partials/payment_infos.tpl'}
          {\$bankwireCustomText nofilter}
        </div>
      </div>
    </div>
  </div>
</section>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_wirepayment/views/templates/hook/ps_wirepayment_intro.tpl";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{**
 * 2007-2020 PrestaShop and Contributors
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2020 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}

<section>
  <p>
    {l s='Please transfer the invoice amount to our bank account. You will receive our order confirmation by email containing bank details and order number.' d='Modules.Wirepayment.Shop'}
    {if \$bankwireReservationDays}
      {if \$bankwireReservationDays > 1}
        {l s='Goods will be reserved %s days for you and we\\'ll process the order immediately after receiving the payment.' sprintf=[\$bankwireReservationDays] d='Modules.Wirepayment.Shop'}
      {else}
        {l s='Goods will be reserved %s day for you and we\\'ll process the order immediately after receiving the payment.' sprintf=[\$bankwireReservationDays] d='Modules.Wirepayment.Shop'}
      {/if}
    {/if}
    {if \$bankwireCustomText }
        <a data-toggle=\"modal\" data-target=\"#bankwire-modal\">{l s='More information' d='Modules.Wirepayment.Shop'}</a>
    {/if}
  </p>

  <div class=\"modal fade\" id=\"bankwire-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"Bankwire information\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
          </button>
          <h2>{l s='Bankwire' d='Modules.Wirepayment.Shop'}</h2>
        </div>
        <div class=\"modal-body\">
          <p>{l s='Payment is made by transfer of the invoice amount to the following account:' d='Modules.Wirepayment.Shop'}</p>
          {include file='module:ps_wirepayment/views/templates/hook/_partials/payment_infos.tpl'}
          {\$bankwireCustomText nofilter}
        </div>
      </div>
    </div>
  </div>
</section>
", "@Modules/ps_wirepayment/views/templates/hook/ps_wirepayment_intro.tpl", "/var/www/html/modules/ps_wirepayment/views/templates/hook/ps_wirepayment_intro.tpl");
    }
}
