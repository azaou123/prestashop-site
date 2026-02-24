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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/Create/shipping.html.twig */
class __TwigTemplate_55ee2d5aa35e1f17ad286156b1ff1078 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/Create/shipping.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/Create/shipping.html.twig"));

        // line 25
        echo "<div class=\"card d-none\" id=\"shipping-block\">
  <h3 class=\"card-header\">
    ";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Shipping", [], "Admin.Actions"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-body\">

    <form class=\"js-shipping-form d-none\">
      <div class=\"form-group row\">
        <label class=\"col-md-6 col-xl-3 text-md-right col-form-label\" for=\"delivery-option-select\">
          ";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delivery option", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
        </label>
        <div class=\"col-md-6 col-xl-4\">
          <select class=\"form-control\" id=\"delivery-option-select\" name=\"carrier-id\"></select>
        </div>
      </div>
      <div class=\"form-group row\">
        <span class=\"col-md-6 col-xl-3 text-md-right col-form-label\">
          ";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Shipping price (Tax incl.)", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
        </span>
        <div class=\"col-md-6 col-xl-4\">
          <span class=\"js-total-shipping-tax-inc font-weight-bold\"></span>
        </div>
      </div>
      <div class=\"form-group row\">
        <label class=\"col-md-6 col-xl-3 text-md-right col-form-label\" for=\"free-shipping_0\">
          ";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Free shipping", [], "Admin.Shipping.Feature"), "html", null, true);
        echo "
        </label>
        <div class=\"col-md-6 col-xl-4\">
        <span class=\"ps-switch\">
          <input id=\"free-shipping_0\" class=\"js-free-shipping-switch\" name=\"free_shipping\" value=\"0\" type=\"radio\">
          <label for=\"free-shipping_0\">";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No", [], "Admin.Global"), "html", null, true);
        echo "</label>
          <input id=\"free-shipping_1\" class=\"js-free-shipping-switch\" name=\"free_shipping\" value=\"1\" checked=\"\" type=\"radio\">
          <label for=\"free-shipping_1\">";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Yes", [], "Admin.Global"), "html", null, true);
        echo "</label>
          <span class=\"slide-button\"></span>
        </span>
        </div>
      </div>
      <div class=\"form-group row ";
        // line 62
        if ( !(isset($context["recycledPackagingEnabled"]) || array_key_exists("recycledPackagingEnabled", $context) ? $context["recycledPackagingEnabled"] : (function () { throw new RuntimeError('Variable "recycledPackagingEnabled" does not exist.', 62, $this->source); })())) {
            echo "d-none";
        }
        echo "\">
        <label class=\"col-md-6 col-xl-3 text-md-right col-form-label\" for=\"recycled-packaging_0\">
          ";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Recycled packaging", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
        </label>
        <div class=\"col-md-6 col-xl-4\">
          <span class=\"ps-switch\">
            <input id=\"recycled-packaging_0\" class=\"js-recycled-packaging-switch\" name=\"recycled_packaging\" value=\"0\" checked=\"\" type=\"radio\">
            <label for=\"recycled-packaging_0\">";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No", [], "Admin.Global"), "html", null, true);
        echo "</label>
            <input id=\"recycled-packaging_1\" class=\"js-recycled-packaging-switch\" name=\"recycled_packaging\" value=\"1\" type=\"radio\">
            <label for=\"recycled-packaging_1\">";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Yes", [], "Admin.Global"), "html", null, true);
        echo "</label>
            <span class=\"slide-button\"></span>
          </span>
        </div>
      </div>
      <div class=\"form-group row ";
        // line 76
        if ( !(isset($context["giftSettingsEnabled"]) || array_key_exists("giftSettingsEnabled", $context) ? $context["giftSettingsEnabled"] : (function () { throw new RuntimeError('Variable "giftSettingsEnabled" does not exist.', 76, $this->source); })())) {
            echo "d-none";
        }
        echo "\">
        <label class=\"col-md-6 col-xl-3 text-md-right col-form-label\" for=\"is-gift_0\">
          ";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Gift", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
        </label>
        <div class=\"col-md-6 col-xl-4\">
          <span class=\"ps-switch\">
            <input id=\"is-gift_0\" class=\"js-is-gift-switch\" name=\"is_gift\" value=\"0\" checked=\"\" type=\"radio\">
            <label for=\"is-gift_0\">";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No", [], "Admin.Global"), "html", null, true);
        echo "</label>
            <input id=\"is-gift_1\" class=\"js-is-gift-switch\" name=\"is_gift\" value=\"1\" type=\"radio\">
            <label for=\"is-gift_1\">";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Yes", [], "Admin.Global"), "html", null, true);
        echo "</label>
            <span class=\"slide-button\"></span>
          </span>
        </div>

      </div>
      <div class=\"form-group row type-text ";
        // line 91
        if ( !(isset($context["giftSettingsEnabled"]) || array_key_exists("giftSettingsEnabled", $context) ? $context["giftSettingsEnabled"] : (function () { throw new RuntimeError('Variable "giftSettingsEnabled" does not exist.', 91, $this->source); })())) {
            echo "d-none";
        }
        echo "\">
        <label class=\"col-md-6 col-xl-3 text-md-right col-form-label\" for=\"cart_gift_message\">
          ";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Gift message", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
        </label>
        <div class=\"col-md-6 col-xl-4\">
          <textarea id=\"cart_gift_message\" name=\"cart_gift_message\" class=\"form-control\" cols=\"40\" rows=\"4\"></textarea>
        </div>
      </div>
    </form>

    <div class=\"js-no-carrier-block d-none\">
      <div class=\"alert alert-warning\">
        <div class=\"alert-text\">
          ";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No carrier can be applied to this order", [], "Admin.Orderscustomers.Notification"), "html", null, true);
        echo "
        </div>
      </div>
    </div>
  </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/Create/shipping.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 104,  164 => 93,  157 => 91,  148 => 85,  143 => 83,  135 => 78,  128 => 76,  120 => 71,  115 => 69,  107 => 64,  100 => 62,  92 => 57,  87 => 55,  79 => 50,  68 => 42,  57 => 34,  47 => 27,  43 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("{#**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
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
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 *#}
<div class=\"card d-none\" id=\"shipping-block\">
  <h3 class=\"card-header\">
    {{ 'Shipping'|trans({}, 'Admin.Actions') }}
  </h3>
  <div class=\"card-body\">

    <form class=\"js-shipping-form d-none\">
      <div class=\"form-group row\">
        <label class=\"col-md-6 col-xl-3 text-md-right col-form-label\" for=\"delivery-option-select\">
          {{ 'Delivery option'|trans({}, 'Admin.Orderscustomers.Feature') }}
        </label>
        <div class=\"col-md-6 col-xl-4\">
          <select class=\"form-control\" id=\"delivery-option-select\" name=\"carrier-id\"></select>
        </div>
      </div>
      <div class=\"form-group row\">
        <span class=\"col-md-6 col-xl-3 text-md-right col-form-label\">
          {{ 'Shipping price (Tax incl.)'|trans({}, 'Admin.Orderscustomers.Feature') }}
        </span>
        <div class=\"col-md-6 col-xl-4\">
          <span class=\"js-total-shipping-tax-inc font-weight-bold\"></span>
        </div>
      </div>
      <div class=\"form-group row\">
        <label class=\"col-md-6 col-xl-3 text-md-right col-form-label\" for=\"free-shipping_0\">
          {{ 'Free shipping'|trans({}, 'Admin.Shipping.Feature') }}
        </label>
        <div class=\"col-md-6 col-xl-4\">
        <span class=\"ps-switch\">
          <input id=\"free-shipping_0\" class=\"js-free-shipping-switch\" name=\"free_shipping\" value=\"0\" type=\"radio\">
          <label for=\"free-shipping_0\">{{ 'No'|trans({}, 'Admin.Global') }}</label>
          <input id=\"free-shipping_1\" class=\"js-free-shipping-switch\" name=\"free_shipping\" value=\"1\" checked=\"\" type=\"radio\">
          <label for=\"free-shipping_1\">{{ 'Yes'|trans({}, 'Admin.Global') }}</label>
          <span class=\"slide-button\"></span>
        </span>
        </div>
      </div>
      <div class=\"form-group row {% if not recycledPackagingEnabled %}d-none{% endif %}\">
        <label class=\"col-md-6 col-xl-3 text-md-right col-form-label\" for=\"recycled-packaging_0\">
          {{ 'Recycled packaging'|trans({}, 'Admin.Orderscustomers.Feature') }}
        </label>
        <div class=\"col-md-6 col-xl-4\">
          <span class=\"ps-switch\">
            <input id=\"recycled-packaging_0\" class=\"js-recycled-packaging-switch\" name=\"recycled_packaging\" value=\"0\" checked=\"\" type=\"radio\">
            <label for=\"recycled-packaging_0\">{{ 'No'|trans({}, 'Admin.Global') }}</label>
            <input id=\"recycled-packaging_1\" class=\"js-recycled-packaging-switch\" name=\"recycled_packaging\" value=\"1\" type=\"radio\">
            <label for=\"recycled-packaging_1\">{{ 'Yes'|trans({}, 'Admin.Global') }}</label>
            <span class=\"slide-button\"></span>
          </span>
        </div>
      </div>
      <div class=\"form-group row {% if not giftSettingsEnabled %}d-none{% endif %}\">
        <label class=\"col-md-6 col-xl-3 text-md-right col-form-label\" for=\"is-gift_0\">
          {{ 'Gift'|trans({}, 'Admin.Orderscustomers.Feature') }}
        </label>
        <div class=\"col-md-6 col-xl-4\">
          <span class=\"ps-switch\">
            <input id=\"is-gift_0\" class=\"js-is-gift-switch\" name=\"is_gift\" value=\"0\" checked=\"\" type=\"radio\">
            <label for=\"is-gift_0\">{{ 'No'|trans({}, 'Admin.Global') }}</label>
            <input id=\"is-gift_1\" class=\"js-is-gift-switch\" name=\"is_gift\" value=\"1\" type=\"radio\">
            <label for=\"is-gift_1\">{{ 'Yes'|trans({}, 'Admin.Global') }}</label>
            <span class=\"slide-button\"></span>
          </span>
        </div>

      </div>
      <div class=\"form-group row type-text {% if not giftSettingsEnabled %}d-none{% endif %}\">
        <label class=\"col-md-6 col-xl-3 text-md-right col-form-label\" for=\"cart_gift_message\">
          {{ 'Gift message'|trans({}, 'Admin.Orderscustomers.Feature') }}
        </label>
        <div class=\"col-md-6 col-xl-4\">
          <textarea id=\"cart_gift_message\" name=\"cart_gift_message\" class=\"form-control\" cols=\"40\" rows=\"4\"></textarea>
        </div>
      </div>
    </form>

    <div class=\"js-no-carrier-block d-none\">
      <div class=\"alert alert-warning\">
        <div class=\"alert-text\">
          {{ 'No carrier can be applied to this order'|trans({}, 'Admin.Orderscustomers.Notification') }}
        </div>
      </div>
    </div>
  </div>
</div>
", "@PrestaShop/Admin/Sell/Order/Order/Blocks/Create/shipping.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/Create/shipping.html.twig");
    }
}
