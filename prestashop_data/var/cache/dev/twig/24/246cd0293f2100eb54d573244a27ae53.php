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

/* @Modules/ps_emailalerts/js/mailalerts.js */
class __TwigTemplate_85d3bef2b0d9da1061046032ed4d4271 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_emailalerts/js/mailalerts.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_emailalerts/js/mailalerts.js"));

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

function  addNotification(productId, productAttributeId) {
  // to keep backward compatibility
  if (typeof productId === 'undefined') {
    var ids = \$('div.js-mailalert > input[type=hidden]');
    productId = ids.eq(0).val();
    productIdAttribute = ids.eq(1).val();
  }

  \$.ajax({
    type: 'POST',
    url: \$('div.js-mailalert').data('url'),
    data: 'id_product='+productId+'&id_product_attribute='+productAttributeId+'&customer_email='+\$('div.js-mailalert input[type=email]').val(),
    success: function (resp) {
      resp = JSON.parse(resp);

      \$('.js-mailalert-alerts').html('<article class=\"mt-1 alert alert-' + (resp.error ? 'danger' : 'success') + '\" role=\"alert\" data-alert=\"' + (resp.error ? 'error' : 'success') + '\">'+ resp.message +'</article>').show();
      if (!resp.error) {
        \$('div.js-mailalert > .js-mailalert-add, div.js-mailalert > input[type=email], div.js-mailalert .gdpr_consent_wrapper').hide();
      }
    }
  });
  return false;
}

\$(document).on('ready', function() {
  const mailAlertSubmitButtonClass = '.js-mailalert-add';
  const mailAlertWrapper = \$('.js-mailalert');
  const mailAlertSubmitButton = mailAlertWrapper.find(mailAlertSubmitButtonClass);

  if (mailAlertWrapper.find('#gdpr_consent, .gdpr_consent').length) {
    // We use a timeout to put this at the end of the callstack, so it's executed after GPDR module. 
    setTimeout(() => {
      mailAlertSubmitButton.prop('disabled', true);

      mailAlertWrapper.find('[name=\"psgdpr_consent_checkbox\"]').on('change', function (e) {
        e.stopPropagation();
      
        mailAlertSubmitButton.prop('disabled', !\$(this).prop('checked'));
      });
    }, 0);
  }

  \$(document).on('click', mailAlertSubmitButtonClass, function (e)
  {
    e.preventDefault();

    addNotification(\$(this).data('product'), \$(this).data('product-attribute'));
  });

  \$(document).on('click', '.js-remove-email-alert', function()
  {
    var self = \$(this);
    var ids = self.attr('rel').replace('js-id-emailalerts-', '');
    ids = ids.split('-');
    var id_product_mail_alert = ids[0];
    var id_product_attribute_mail_alert = ids[1];
    var parent = self.closest('li');

    \$.ajax({
      url: self.data('url'),
      type: \"POST\",
      data: {
        'id_product': id_product_mail_alert,
        'id_product_attribute': id_product_attribute_mail_alert
      },
      success: function(result)
      {
        if (result == '0')
        {
          parent.fadeOut(\"normal\", function()
          {
            parent.remove();
          });
        }
      }
    });
  });
});
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_emailalerts/js/mailalerts.js";
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

function  addNotification(productId, productAttributeId) {
  // to keep backward compatibility
  if (typeof productId === 'undefined') {
    var ids = \$('div.js-mailalert > input[type=hidden]');
    productId = ids.eq(0).val();
    productIdAttribute = ids.eq(1).val();
  }

  \$.ajax({
    type: 'POST',
    url: \$('div.js-mailalert').data('url'),
    data: 'id_product='+productId+'&id_product_attribute='+productAttributeId+'&customer_email='+\$('div.js-mailalert input[type=email]').val(),
    success: function (resp) {
      resp = JSON.parse(resp);

      \$('.js-mailalert-alerts').html('<article class=\"mt-1 alert alert-' + (resp.error ? 'danger' : 'success') + '\" role=\"alert\" data-alert=\"' + (resp.error ? 'error' : 'success') + '\">'+ resp.message +'</article>').show();
      if (!resp.error) {
        \$('div.js-mailalert > .js-mailalert-add, div.js-mailalert > input[type=email], div.js-mailalert .gdpr_consent_wrapper').hide();
      }
    }
  });
  return false;
}

\$(document).on('ready', function() {
  const mailAlertSubmitButtonClass = '.js-mailalert-add';
  const mailAlertWrapper = \$('.js-mailalert');
  const mailAlertSubmitButton = mailAlertWrapper.find(mailAlertSubmitButtonClass);

  if (mailAlertWrapper.find('#gdpr_consent, .gdpr_consent').length) {
    // We use a timeout to put this at the end of the callstack, so it's executed after GPDR module. 
    setTimeout(() => {
      mailAlertSubmitButton.prop('disabled', true);

      mailAlertWrapper.find('[name=\"psgdpr_consent_checkbox\"]').on('change', function (e) {
        e.stopPropagation();
      
        mailAlertSubmitButton.prop('disabled', !\$(this).prop('checked'));
      });
    }, 0);
  }

  \$(document).on('click', mailAlertSubmitButtonClass, function (e)
  {
    e.preventDefault();

    addNotification(\$(this).data('product'), \$(this).data('product-attribute'));
  });

  \$(document).on('click', '.js-remove-email-alert', function()
  {
    var self = \$(this);
    var ids = self.attr('rel').replace('js-id-emailalerts-', '');
    ids = ids.split('-');
    var id_product_mail_alert = ids[0];
    var id_product_attribute_mail_alert = ids[1];
    var parent = self.closest('li');

    \$.ajax({
      url: self.data('url'),
      type: \"POST\",
      data: {
        'id_product': id_product_mail_alert,
        'id_product_attribute': id_product_attribute_mail_alert
      },
      success: function(result)
      {
        if (result == '0')
        {
          parent.fadeOut(\"normal\", function()
          {
            parent.remove();
          });
        }
      }
    });
  });
});
", "@Modules/ps_emailalerts/js/mailalerts.js", "/var/www/html/modules/ps_emailalerts/js/mailalerts.js");
    }
}
