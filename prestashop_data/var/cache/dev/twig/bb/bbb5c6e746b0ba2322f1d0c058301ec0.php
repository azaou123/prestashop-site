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

/* @PrestaShop/Admin/Sell/Order/Cart/Blocks/View/order_information.html.twig */
class __TwigTemplate_cfa681d3b63b493472810a301f26f3b8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Cart/Blocks/View/order_information.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Cart/Blocks/View/order_information.html.twig"));

        // line 25
        echo "
<div class=\"card\" data-role=\"order-information\">
  <h3 class=\"card-header\">";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cart information", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</h3>
  <div class=\"card-body\">
    <p class=\"mb-0\">
      ";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Created:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
      ";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cartView"]) || array_key_exists("cartView", $context) ? $context["cartView"] : (function () { throw new RuntimeError('Variable "cartView" does not exist.', 31, $this->source); })()), "cartSummary", [], "any", false, false, false, 31), "date_add", [], "any", false, false, false, 31), "html", null, true);
        echo "
    </p>
    <p class=\"mb-0\">
      ";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Last updated:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
      ";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cartView"]) || array_key_exists("cartView", $context) ? $context["cartView"] : (function () { throw new RuntimeError('Variable "cartView" does not exist.', 35, $this->source); })()), "cartSummary", [], "any", false, false, false, 35), "date_upd", [], "any", false, false, false, 35), "html", null, true);
        echo "
    </p>
    <hr class=\"mt-2 mb-2\">
    ";
        // line 38
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cartView"]) || array_key_exists("cartView", $context) ? $context["cartView"] : (function () { throw new RuntimeError('Variable "cartView" does not exist.', 38, $this->source); })()), "orderInformation", [], "any", false, false, false, 38), "id", [], "any", false, false, false, 38))) {
            // line 39
            echo "
      <p>";
            // line 40
            echo twig_replace_filter($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order %orderid% was created from this cart on %orderdate%.", [], "Admin.Orderscustomers.Feature"), ["%orderid%" => (((("<a href=\"" . $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders_view", ["orderId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 41
(isset($context["cartView"]) || array_key_exists("cartView", $context) ? $context["cartView"] : (function () { throw new RuntimeError('Variable "cartView" does not exist.', 41, $this->source); })()), "orderInformation", [], "any", false, false, false, 41), "id", [], "any", false, false, false, 41)])) . "\">#") . twig_sprintf(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cartView"]) || array_key_exists("cartView", $context) ? $context["cartView"] : (function () { throw new RuntimeError('Variable "cartView" does not exist.', 41, $this->source); })()), "orderInformation", [], "any", false, false, false, 41), "id", [], "any", false, false, false, 41), "\"%06d")) . "</a>"), "%orderdate%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 42
(isset($context["cartView"]) || array_key_exists("cartView", $context) ? $context["cartView"] : (function () { throw new RuntimeError('Variable "cartView" does not exist.', 42, $this->source); })()), "orderInformation", [], "any", false, false, false, 42), "placed_date", [], "any", false, false, false, 42)]);
            // line 43
            echo "</p>

      <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders_view", ["orderId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cartView"]) || array_key_exists("cartView", $context) ? $context["cartView"] : (function () { throw new RuntimeError('Variable "cartView" does not exist.', 45, $this->source); })()), "orderInformation", [], "any", false, false, false, 45), "id", [], "any", false, false, false, 45)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">
        <i class=\"material-icons\">remove_red_eye</i>
        ";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View order", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
      </a>
    ";
        } else {
            // line 50
            echo "      <p class=\"mb-0\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("The customer has not proceeded to checkout yet.", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</p>

      ";
            // line 52
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cartView"]) || array_key_exists("cartView", $context) ? $context["cartView"] : (function () { throw new RuntimeError('Variable "cartView" does not exist.', 52, $this->source); })()), "customerInformation", [], "any", false, false, false, 52), "id", [], "any", false, false, false, 52)) {
                // line 53
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, (isset($context["createOrderFromCartLink"]) || array_key_exists("createOrderFromCartLink", $context) ? $context["createOrderFromCartLink"] : (function () { throw new RuntimeError('Variable "createOrderFromCartLink" does not exist.', 53, $this->source); })()), "html", null, true);
                echo "\" class=\"btn btn-primary mt-3\" id=\"create-order-from-cart\">
          <i class=\"material-icons\">add_circle_outline</i>
          ";
                // line 55
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create an order from this cart", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                echo "
        </a>
      ";
            }
            // line 58
            echo "    ";
        }
        // line 59
        echo "  </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Cart/Blocks/View/order_information.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 59,  117 => 58,  111 => 55,  105 => 53,  103 => 52,  97 => 50,  91 => 47,  86 => 45,  82 => 43,  80 => 42,  79 => 41,  78 => 40,  75 => 39,  73 => 38,  67 => 35,  63 => 34,  57 => 31,  53 => 30,  47 => 27,  43 => 25,);
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

<div class=\"card\" data-role=\"order-information\">
  <h3 class=\"card-header\">{{ 'Cart information'|trans({}, 'Admin.Orderscustomers.Feature') }}</h3>
  <div class=\"card-body\">
    <p class=\"mb-0\">
      {{ 'Created:'|trans({}, 'Admin.Orderscustomers.Feature') }}
      {{ cartView.cartSummary.date_add }}
    </p>
    <p class=\"mb-0\">
      {{ 'Last updated:'|trans({}, 'Admin.Orderscustomers.Feature') }}
      {{ cartView.cartSummary.date_upd }}
    </p>
    <hr class=\"mt-2 mb-2\">
    {% if cartView.orderInformation.id is not empty %}

      <p>{{ 'Order %orderid% was created from this cart on %orderdate%.'|trans({}, 'Admin.Orderscustomers.Feature')|replace({
        '%orderid%': '<a href=\"' ~ path('admin_orders_view', {'orderId': cartView.orderInformation.id}) ~ '\">#' ~ cartView.orderInformation.id|format('\"%06d') ~ '</a>',
        '%orderdate%': cartView.orderInformation.placed_date,
      })|raw }}</p>

      <a href=\"{{ path('admin_orders_view', {'orderId': cartView.orderInformation.id}) }}\" class=\"btn btn-primary\">
        <i class=\"material-icons\">remove_red_eye</i>
        {{ 'View order'|trans({}, 'Admin.Orderscustomers.Feature') }}
      </a>
    {% else %}
      <p class=\"mb-0\">{{ 'The customer has not proceeded to checkout yet.'|trans({}, 'Admin.Orderscustomers.Feature') }}</p>

      {% if cartView.customerInformation.id %}
        <a href=\"{{ createOrderFromCartLink }}\" class=\"btn btn-primary mt-3\" id=\"create-order-from-cart\">
          <i class=\"material-icons\">add_circle_outline</i>
          {{ 'Create an order from this cart'|trans({}, 'Admin.Orderscustomers.Feature') }}
        </a>
      {% endif %}
    {% endif %}
  </div>
</div>
", "@PrestaShop/Admin/Sell/Order/Cart/Blocks/View/order_information.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Cart/Blocks/View/order_information.html.twig");
    }
}
