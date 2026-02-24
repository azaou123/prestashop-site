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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/linked_orders.html.twig */
class __TwigTemplate_d98294ee3e143c173d60e312e78d7d74 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/linked_orders.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/linked_orders.html.twig"));

        // line 25
        echo "
<div class=\"card\" id=\"linkedOrdersPanel\">
  <div class=\"card-header\">
    <h3 class=\"card-header-title\">
      ";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Linked orders", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
      <span class=\"badge badge-primary rounded\">";
        // line 30
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["orderForViewing"]) || array_key_exists("orderForViewing", $context) ? $context["orderForViewing"] : (function () { throw new RuntimeError('Variable "orderForViewing" does not exist.', 30, $this->source); })()), "linkedOrders", [], "any", false, false, false, 30), "linkedOrders", [], "any", false, false, false, 30)), "html", null, true);
        echo "</span>
    </h3>
  </div>

  <div class=\"card-body\">
    <table class=\"table mb-3\">
      <thead>
      <tr>
        <th>
          ";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order ID", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
        </th>
        <th>
          ";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status", [], "Admin.Global"), "html", null, true);
        echo "
        </th>
        <th>
          ";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Amount", [], "Admin.Global"), "html", null, true);
        echo "
        </th>
        <th></th>
      </tr>
      </thead>
      <tbody>
      ";
        // line 51
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["orderForViewing"]) || array_key_exists("orderForViewing", $context) ? $context["orderForViewing"] : (function () { throw new RuntimeError('Variable "orderForViewing" does not exist.', 51, $this->source); })()), "linkedOrders", [], "any", false, false, false, 51), "linkedOrders", [], "any", false, false, false, 51))) {
            // line 52
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["orderForViewing"]) || array_key_exists("orderForViewing", $context) ? $context["orderForViewing"] : (function () { throw new RuntimeError('Variable "orderForViewing" does not exist.', 52, $this->source); })()), "linkedOrders", [], "any", false, false, false, 52), "linkedOrders", [], "any", false, false, false, 52));
            foreach ($context['_seq'] as $context["_key"] => $context["linkedOrder"]) {
                // line 53
                echo "      <tr>
        <td>
          <a class=\"_blank\" href=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders_view", ["orderId" => twig_get_attribute($this->env, $this->source, $context["linkedOrder"], "orderId", [], "any", false, false, false, 55)]), "html", null, true);
                echo "\">
            ";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["linkedOrder"], "orderId", [], "any", false, false, false, 56), "html", null, true);
                echo "
          </a>
        </td>
        <td>
          ";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["linkedOrder"], "statusName", [], "any", false, false, false, 60), "html", null, true);
                echo "
        </td>
        <td>
          ";
                // line 63
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["linkedOrder"], "amount", [], "any", false, false, false, 63), "html", null, true);
                echo "
        </td>
        <td>
          <a class=\"_blank\" href=\"";
                // line 66
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders_view", ["orderId" => twig_get_attribute($this->env, $this->source, $context["linkedOrder"], "orderId", [], "any", false, false, false, 66)]), "html", null, true);
                echo "\">
            <i class=\"material-icons\">remove_red_eye</i>
            ";
                // line 68
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View order", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                echo "
          </a>
        </td>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['linkedOrder'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "        ";
        }
        // line 73
        echo "      </tbody>
    </table>
  </div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/linked_orders.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 73,  135 => 72,  125 => 68,  120 => 66,  114 => 63,  108 => 60,  101 => 56,  97 => 55,  93 => 53,  88 => 52,  86 => 51,  77 => 45,  71 => 42,  65 => 39,  53 => 30,  49 => 29,  43 => 25,);
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

<div class=\"card\" id=\"linkedOrdersPanel\">
  <div class=\"card-header\">
    <h3 class=\"card-header-title\">
      {{ 'Linked orders'|trans({}, 'Admin.Orderscustomers.Feature') }}
      <span class=\"badge badge-primary rounded\">{{ orderForViewing.linkedOrders.linkedOrders|length }}</span>
    </h3>
  </div>

  <div class=\"card-body\">
    <table class=\"table mb-3\">
      <thead>
      <tr>
        <th>
          {{ 'Order ID'|trans({}, 'Admin.Orderscustomers.Feature') }}
        </th>
        <th>
          {{ 'Status'|trans({}, 'Admin.Global') }}
        </th>
        <th>
          {{ 'Amount'|trans({}, 'Admin.Global') }}
        </th>
        <th></th>
      </tr>
      </thead>
      <tbody>
      {% if orderForViewing.linkedOrders.linkedOrders is not empty %}
      {% for linkedOrder in orderForViewing.linkedOrders.linkedOrders %}
      <tr>
        <td>
          <a class=\"_blank\" href=\"{{ path('admin_orders_view', {'orderId': linkedOrder.orderId}) }}\">
            {{ linkedOrder.orderId }}
          </a>
        </td>
        <td>
          {{ linkedOrder.statusName }}
        </td>
        <td>
          {{ linkedOrder.amount }}
        </td>
        <td>
          <a class=\"_blank\" href=\"{{ path('admin_orders_view', {'orderId': linkedOrder.orderId}) }}\">
            <i class=\"material-icons\">remove_red_eye</i>
            {{ 'View order'|trans({}, 'Admin.Orderscustomers.Feature') }}
          </a>
        </td>
        {% endfor %}
        {% endif %}
      </tbody>
    </table>
  </div>
", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/linked_orders.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/View/linked_orders.html.twig");
    }
}
