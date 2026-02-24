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

/* @Modules/ps_emailalerts/js/admin/ps_emailalerts.js */
class __TwigTemplate_26a60ad00dbd7774f1fdeaacb7cd7cbd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_emailalerts/js/admin/ps_emailalerts.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_emailalerts/js/admin/ps_emailalerts.js"));

        // line 1
        echo "/**
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
 */

\$(document).on('ready', function() {
  let \$ma_merchant_order_radio_on = \$('#MA_MERCHANT_ORDER_on');
  let \$ma_merchant_oos_radio_on = \$('#MA_MERCHANT_OOS_on');
  let \$ma_merchant_return_slip_radio_on = \$('#MA_RETURN_SLIP_on');

  let \$order_emails_form_group = \$('#MA_MERCHANT_ORDER_EMAILS').parents('.form-group');
  let \$oos_emails_form_group = \$('#MA_MERCHANT_OOS_EMAILS').parents('.form-group');
  let \$return_slip_emails_form_group = \$('#MA_RETURN_SLIP_EMAILS').parents('.form-group');

  // Bind change event
  \$(document).on('change', '#MA_MERCHANT_ORDER_on, #MA_MERCHANT_ORDER_off', function(){
    \$order_emails_form_group.toggle(\$ma_merchant_order_radio_on.is(':checked') && \$ma_merchant_order_radio_on.val() === '1');
  });

  \$(document).on('change', '#MA_MERCHANT_OOS_on, #MA_MERCHANT_OOS_off', function(){
    \$oos_emails_form_group.toggle(\$ma_merchant_oos_radio_on.is(':checked') && \$ma_merchant_oos_radio_on.val() === '1');
  });

  \$(document).on('change', '#MA_RETURN_SLIP_on, #MA_RETURN_SLIP_off', function(){
    \$return_slip_emails_form_group.toggle(\$ma_merchant_return_slip_radio_on.is(':checked') && \$ma_merchant_return_slip_radio_on.val() === '1');
  });

  // Check at page load if we need to show or hide the inputs
  \$ma_merchant_order_radio_on.trigger('change');
  \$ma_merchant_oos_radio_on.trigger('change');
  \$ma_merchant_return_slip_radio_on.trigger('change');
});
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_emailalerts/js/admin/ps_emailalerts.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/**
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
 */

\$(document).on('ready', function() {
  let \$ma_merchant_order_radio_on = \$('#MA_MERCHANT_ORDER_on');
  let \$ma_merchant_oos_radio_on = \$('#MA_MERCHANT_OOS_on');
  let \$ma_merchant_return_slip_radio_on = \$('#MA_RETURN_SLIP_on');

  let \$order_emails_form_group = \$('#MA_MERCHANT_ORDER_EMAILS').parents('.form-group');
  let \$oos_emails_form_group = \$('#MA_MERCHANT_OOS_EMAILS').parents('.form-group');
  let \$return_slip_emails_form_group = \$('#MA_RETURN_SLIP_EMAILS').parents('.form-group');

  // Bind change event
  \$(document).on('change', '#MA_MERCHANT_ORDER_on, #MA_MERCHANT_ORDER_off', function(){
    \$order_emails_form_group.toggle(\$ma_merchant_order_radio_on.is(':checked') && \$ma_merchant_order_radio_on.val() === '1');
  });

  \$(document).on('change', '#MA_MERCHANT_OOS_on, #MA_MERCHANT_OOS_off', function(){
    \$oos_emails_form_group.toggle(\$ma_merchant_oos_radio_on.is(':checked') && \$ma_merchant_oos_radio_on.val() === '1');
  });

  \$(document).on('change', '#MA_RETURN_SLIP_on, #MA_RETURN_SLIP_off', function(){
    \$return_slip_emails_form_group.toggle(\$ma_merchant_return_slip_radio_on.is(':checked') && \$ma_merchant_return_slip_radio_on.val() === '1');
  });

  // Check at page load if we need to show or hide the inputs
  \$ma_merchant_order_radio_on.trigger('change');
  \$ma_merchant_oos_radio_on.trigger('change');
  \$ma_merchant_return_slip_radio_on.trigger('change');
});
", "@Modules/ps_emailalerts/js/admin/ps_emailalerts.js", "/var/www/html/modules/ps_emailalerts/js/admin/ps_emailalerts.js");
    }
}
